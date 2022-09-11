<?php

namespace CommencementTechnology\Botcheck;

class BotChecker
{
    private $ua;

    private $parsed = false;

    private $types = ['os', 'browser', 'hardware', 'misc', 'bot'];

    private $patterns;
    private $parsed_data;

    private $mobile = false; // init to false, prove otherwise
    private $bot = false; // init to false, prove otherwise

    private $assets_uri = '/assets/ua/';

    /**
     * Create object
     *
     * @param string $user_agent
     * @throws \DomainException on file not found for type
     */
    public function __construct($user_agent)
    {
        $this->ua = $user_agent;

        foreach ($this->types as &$type) {
            $file = __DIR__ . '/array/' . $type . '.php';
            if (!file_exists($file)) {
                throw new \DomainException('File "' . $file . '" not found for data type');
            }
            $this->patterns[$type] = include $file;
        }
    }

    /**
     * Set URI to location of icon files
     *
     * @param string $uri
     */
    public function set_uri($uri)
    {
        $this->assets_uri = $uri;
    }

    /**
     * Returns information about user agent
     *
     * @param string $type
     * @return array information about user agent
     * @throws \InvalidArgumentException if $type isn't registered in Parser class
     */
    public function parse($type = 'all')
    {
        if (!$this->parsed) {
            $this->parse_all();
        }
        if ($type == 'all') {
            return $this->parsed_data;
        } elseif (in_array($type, $this->types)) {
            return $this->parsed_data[$type];
        } else {
            throw new \InvalidArgumentException('Invalid type');
        }
    }

    /**
     * True if UA appears to be from a mobile device (best guess)
     *
     * @return bool
     */
    public function is_mobile()
    {
        if (!$this->parsed) {
            $this->parse_all();
        }
        return $this->mobile;
    }

    /**
     * True if UA appears to be from a bot (best guess)
     *
     * @return bool
     */
    public function is_bot()
    {
        if (!$this->parsed) {
            $this->parse_all();
        }
        return $this->bot;
    }

    /**
     * Return <img> icon html
     *
     * @param string $type
     * @return string icon html
     * @throws \InvalidArgumentException if $type isn't registered in Parser class
     */
    public function get_icon($type)
    {
        if (!$this->parsed) {
            $this->parse_all();
        }
        if (in_array($type, $this->types)) {
            $title = isset($this->parsed_data[$type]['name']) ? $this->parsed_data[$type]['name'] : '';
            if (!empty($this->parsed_data[$type]['model'])) {
                $title .= ' ' . $this->parsed_data[$type]['model'];
            }
            if (!empty($this->parsed_data[$type]['version'])) {
                $title .= ' ' . $this->parsed_data[$type]['version'];
            }

            $icon = isset($this->parsed_data[$type]['icon']) ? $this->parsed_data[$type]['icon'] : 'unknown';

            return $this->icon_html($icon, $title);
        } else {
            throw new \InvalidArgumentException('Invalid type');
        }
    }

    /**
     * Return <img> icon html for all types
     *
     * @param string $type
     * @return string icon html
     * @throws \InvalidArgumentException if $type isn't registered in Parser class
     */
    public function get_all_icons()
    {
        if (!$this->parsed) {
            $this->parse_all();
        }
        $icons = '';
        foreach ($this->parsed_data as &$type) {
            $title = isset($type['name']) ? $type['name'] : '';
            if (!empty($type['model'])) {
                $title .= ' ' . $type['model'];
            }
            if (!empty($type['version'])) {
                $title .= ' ' . $type['version'];
            }

            $icon = isset($type['icon']) ? $type['icon'] : 'unknown';

            $this->icon_html($icon, $title);
        }
        if (!$icons) {
            $icons = $this->icon_html('unknown', $this->ua);
        }
        return $icons;
    }

    /**
     * Return <img> icon html for all types, shortening the list by ignoring unnesessary information
     *
     * @param string $type
     * @return string icon html
     * @throws \InvalidArgumentException if $type isn't registered in Parser class
     */
    public function get_all_icons_short()
    {
        if (!$this->parsed) {
            $this->parse_all();
        }
        $icons = [];
        foreach ($this->parsed_data as $type => &$type_info) {
            if (!empty($type_info['icon'])) {

                // ignore mac hardware icons
                if ($type_info['icon'] == 'apple' || $type_info['icon'] == 'iphone' || $type_info['icon'] == 'ipad') {
                    continue;
                }
                // ignore everything else if a bot
                if (!empty($this->parsed_data['bot']['icon']) && $this->parsed_data['bot']['icon'] && $type != 'bot') {
                    // unless the bot is google image proxy, then also include the 'misc' type for Gmail
                    if (!empty($this->parsed_data['bot']['name']) && $this->parsed_data['bot']['name'] == 'Google Image Proxy' && $type != 'bot' && $type != 'misc') {
                        continue;
                    }
                }

                $title = isset($type_info['name']) ? $type_info['name'] : '';

                // add iPad and iPhone info
                if ($type_info['icon'] == 'ios') {
                    if (!empty($this->parsed_data['hardware']['icon']) && $this->parsed_data['hardware']['icon'] == 'iphone') {
                        $title .= ', iPhone';
                    } elseif (!empty($this->parsed_data['hardware']['icon']) && $this->parsed_data['hardware']['icon'] == 'ipad') {
                        $title .= ', iPad';
                    }
                }

                if (!empty($type_info['model'])) {
                    $title .= ' ' . $type_info['model'];
                }
                if (!empty($type_info['version'])) {
                    $title .= ' ' . $type_info['version'];
                }

                $icons[] = $this->icon_html($type_info['icon'], $title);
            }
        }
        if (empty($icons)) {
            $icons[] = $this->icon_html('unknown', $this->ua);
        }

        $icons = array_unique($icons);
        $icons = implode($icons);

        return $icons;
    }

    /**
     * Return <img> icon html for given icon data and display text
     *
     * @param string $icon
     * @param string $title
     * @return string icon html
     */
    private function icon_html($icon, $title)
    {
        return '<img class="ua" src="' . $this->assets_uri . $icon . '.png" alt="' . $title . '" data-toggle="tooltip" data-placement="left" title="' . $title . '" /> ';
    }

    /**
     * Parse each type, then mark that the user agent has been parsed
     */
    private function parse_all()
    {
        foreach ($this->patterns as $type => &$set) {
            $this->parsed_data[$type] = $this->parse_patterns($set);
        }

        // if haven't found if mobile, check for 'mobile' keyword
        if (!$this->mobile && stristr($this->ua, 'mobile')) {
            $this->mobile = true;
        }
        // if haven't found if bot, check for 'spider' and 'crawler' keywords
        // ignore 'bot' as it's too short/common
        if (!empty($this->parsed_data['bot']['name']) || stristr($this->ua, 'spider') || stristr($this->ua, 'crawler')) {
            $this->bot = true;
        }

        $this->parsed = true;
    }

    /**
     * Parse through a pattern set and return matched information
     * RECURSIVE
     *
     * @param mixed $patterns
     * @return array ['name' => string, 'icon' => string => 'version' => string]
     */
    private function parse_patterns($patterns)
    {
        $data = [];

        if (!$this->ua) {
            $data = [
                'name' => '',
                'icon' => '',
                'version' => '',
            ];

            return $data;
        }

        foreach ($patterns as $set) {
            // see if it matches
            $match = false;
            if (!empty($set['pattern'])) {
                $match = stripos($this->ua, $set['pattern']);
            } elseif (!empty($set['regex'])) {
                $match = (bool)preg_match($set['regex'], $this->ua);
            }
            // match found, parse
            if ($match !== false) {
                foreach ($set as $key => $value) {
                    if ($key != 'submatch') {
                        $data[$key] = $value;
                    }
                }
                if (!empty($set['mobile'])) {
                    $this->mobile = true;
                }
                if (!empty($set['vregex'])) {
                    $data['version'] = preg_replace($set['vregex'], '$1', $this->ua);
                }
                if (!empty($set['submatch'])) {
                    $submatch = $this->parse_patterns($set['submatch']); // recursion
                    foreach ($submatch as $subkey => $subvalue) {
                        if ($subvalue) {
                            $data[$subkey] = $subvalue;
                        }
                    }
                }
                // prettify versioning
                if (!empty($data['version'])) {
                    $data['version'] = str_replace('_', '.', $data['version']);
                }

                break; // finish on first item found
            }
        }
        return $data;
    }
}