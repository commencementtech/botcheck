<?php
return array(
    [
        'name'    => 'Edge',
        'icon'    => 'edge',
        'pattern' => 'edge',
        'vregex'  => '/.*edge\/([0-9\.]+).*/i',
    ],
    [
        'name'    => 'Maxthon',
        'icon'    => 'maxthon',
        'pattern' => 'maxthon',
    ],
    [
        'name'    => 'Airmail',
        'icon'    => 'airmail',
        'pattern' => 'airmail',
    ],
    [
        'name'    => 'Thunderbird',
        'icon'    => 'thunderbird',
        'pattern' => 'thunderbird',
    ],
    [
        'name'    => 'Microsoft Outlook',
        'icon'    => 'outlook',
        'pattern' => 'microsoft outlook',
        'vregex'  => '/.*microsoft outlook ([0-9\.]+).*/i',
    ],
    [
        'name'    => 'Microsoft Outlook',
        'icon'    => 'outlook',
        'pattern' => 'msoffice',
        'vregex'  => '/.*msoffice ([0-9\.]+).*/i',
    ],
    [
        'name'    => 'Microsoft Outlook for iOS',
        'icon'    => 'outlook-ios',
        'pattern' => 'outlook-ios',
        'vregex'  => '/.*outlook-ios\/.* \(([0-9\.]+)\).*/i',
    ],
    [
        'name'    => 'Microsoft Outlook for macOS',
        'icon'    => 'outlook',
        'pattern' => 'macoutlook',
        'vregex'  => '/.*macoutlook\/([0-9\.]+).*/i',
    ],
    [
        'name'    => 'Microsoft Outlook for macOS',
        'icon'    => 'outlook',
        'pattern' => 'mac os x) outlook',
    ],
    [
        'name'    => 'Postbox',
        'icon'    => 'postbox',
        'pattern' => 'postboxapp',
        'vregex'  => '/.*postboxapp\/([0-9\.]+).*/i',
    ],
    [
        'name'    => 'Internet Explorer',
        'icon'    => 'ie',
        'pattern' => 'msie',
        'submatch' => [
            [
                'pattern' => 'msie 11',
                'version' => '11',
            ],
            [
                'pattern' => 'msie 10',
                'version' => '10',
            ],
            [
                'pattern' => 'msie 9',
                'version' => '9',
            ],
            [
                'pattern' => 'msie 8',
                'version' => '8',
            ],
            [
                'pattern' => 'msie 7',
                'version' => '7',
            ],
            [
                'pattern' => 'msie 6',
                'version' => '6',
            ],
        ],
    ],
    [
        'name'    => 'Internet Explorer Mobile',
        'icon'    => 'ie',
        'pattern' => 'iemobile',
        'mobile'  => true,
    ],
    [
        'name'    => 'Firefox iOS',
        'icon'    => 'firefox',
        'pattern' => 'fxios',
        'vregex'  => '/.*fxios\/([0-9\.]+).*/i',
        'mobile'  => true,
    ],
    [
        'name'    => 'Firefox',
        'icon'    => 'firefox',
        'pattern' => 'firefox',
        'vregex'  => '/.*firefox\/([0-9\.]+).*/i',
        'submatch' => [
            [
                'name'    => 'Iceweasel',
                'icon'    => 'iceweasel',
                'pattern' => 'iceweasel',
                'vregex'  => '/.*iceweasel\/([0-9a-z\.]+).*/i',
            ],
            [
                'name'    => 'SeaMonkey',
                'icon'    => 'seamonkey',
                'pattern' => 'seamonkey',
                'vregex'  => '/.*seamonkey\/([0-9a-z\.]+).*/i',
            ],
            [
                'name'    => 'Midori',
                'icon'    => 'midori',
                'pattern' => 'midori',
                'vregex'  => '/.*midori\/([0-9a-z\.]+).*/i',
            ],
            [
                'name'    => 'Camino',
                'icon'    => 'camino',
                'pattern' => 'camino',
                'vregex'  => '/.*camino\/([0-9a-z\.]+).*/i',
            ],
        ],
    ],
    [
        'name'    => 'Opera',
        'icon'    => 'opera',
        'pattern' => 'opera',
        'vregex'  => '/.*opera\/([0-9\.]+).*/i',
        'submatch' => [
            [
                'pattern' => 'opera mobi',
                'mobile'  => true,
            ],
        ]
    ],
    [
        'name'    => 'Chrome',
        'icon'    => 'chrome',
        'pattern' => 'chrome',
        'vregex'  => '/.*chrome\/([0-9\.]+).*/i',
        'submatch' => [
            [
                'name'    => 'Opera',
                'icon'    => 'opera',
                'pattern' => 'opr', // 15+
                'vregex'  => '/.*opr\/([0-9\.]+).*/i',
            ],
            [
                'name'    => 'Vivaldi',
                'icon'    => 'vivaldi',
                'pattern' => 'vivaldi',
                'vregex'  => '/.*vivaldi\/([0-9\.]+).*/i',
            ],
            [
                'name'    => 'Silk',
                'icon'    => 'silk',
                'pattern' => 'silk',
                'vregex'  => '/.*silk\/([0-9\.]+).*/i',
                'mobile'  => true,
            ],
            [
                'name'    => 'Samsung Browser',
                'icon'    => 'samsungbrowser',
                'pattern' => 'samsungbrowser',
                'vregex'  => '/.*samsungbrowser\/([0-9\.]+).*/i',
                'mobile'  => true,
            ],
            [
                'name'    => 'Puffin',
                'icon'    => 'puffin',
                'pattern' => 'puffin',
                'vregex'  => '/.*puffin\/([0-9a-z\.]+).*/i',
            ],
            [
                'name'    => 'Yandex',
                'icon'    => 'yandexbrowser',
                'pattern' => 'yabrowser',
                'vregex'  => '/.*yabrowser\/([0-9\.]+).*/i',
            ],
            [
                'name'    => 'MIUI Browser', // XiaoMi
                'icon'    => 'miui',
                'pattern' => 'miuibrowser',
                'vregex'  => '/.*miuibrowser\/([0-9\.]+).*/i',
                'mobile'  => true,
            ],
            [
                'name'    => 'Coc Coc',
                'icon'    => 'coccoc',
                'pattern' => 'coc_coc_browser',
                'vregex'  => '/.*coc_coc_browser\/([0-9\.]+).*/i',
            ],
            [
                'name'    => 'Chromium',
                'icon'    => 'chromium',
                'pattern' => 'chromium',
                'vregex'  => '/.*chromium\/([0-9\.]+).*/i',
            ],
        ],
    ],
    [
        'name'    => 'UC Browser',
        'icon'    => 'ucbrowser',
        'pattern' => 'ucbrowser',
        'vregex'  => '/.*ucbrowser\/([0-9\.]+).*/i',
        'mobile'  => true,
    ],
    [
        'name'    => 'Epiphany',
        'icon'    => 'epiphany',
        'pattern' => 'epiphany',
        'vregex'  => '/.*epiphany\/([0-9a-z\.]+).*/i',
    ],
    [
        'name'    => 'Safari',
        'icon'    => 'safari',
        'pattern' => 'safari',
        'vregex'  => '/.*safari\/([0-9a-z\.]+).*/i',
        'submatch' => [
            [
                'name'    => 'Android Browser',
                'icon'    => 'android',
                'pattern' => 'android',
                'vregex'  => '/.*version\/([0-9\.]+).*/i',
            ],
        ],
    ],
    [
        'name'    => 'Apple Mail',
        'icon'    => 'apple-mail',
        // does not advertise, put after safari as the last possible webkit browser
        'pattern' => 'applewebkit',
        // advertises as safari when item is clicked on because safari is used inline (????)
        'submatch' => [
            [
                'icon'    => 'apple-mail-ios',
                'pattern' => 'iphone',
                'mobile'  => true,
            ],
            [
                'icon'    => 'apple-mail-ios',
                'pattern' => 'ipad',
                'mobile'  => true,
            ],
        ],
    ],
    [
        'name'    => 'Lynx',
        'icon'    => 'lynx',
        'pattern' => 'lynx',
        'vregex'  => '/.*lynx\/([0-9a-z\.]+).*/i',
    ],
    [
        'name'    => 'Links',
        'icon'    => 'links',
        'pattern' => 'links',
        'vregex'  => '/.*links \(([0-9a-z\.]+);.*/i',
    ],
    [
        'name'    => 'Nintendo Browser',
        'icon'    => 'nintendo',
        'pattern' => 'nintendobrowser',
    ],
);