# Botcheck
Bot check parsing user agent and returns useful details of Bot, Crawler, Browser and OS information. AIM is comprehensiveness to return broad information on the bot, crawler, most common devices, browsers, hardware, etc.

```sh

* Operating System `os`
    * e.g. Windows, macOS, Linux
* Browser `browser`
    * e.g. Firefox, Safari, Firefox iOS
* Hardware `hardware`
    * e.g. Nintendo Switch, Apple iPad
* Miscellaneous `misc`
    * e.g. Slack, WhatsApp, Gmail, cURL, Python-urllib
* Bot `bot`
    * e.g. Googlebot, BingBot, Baidu Spider
```
### Result Data of Bot
```sh
* Name
* Website
* Bot Site Complete page
```
### Result Data General
```sh
* Name
* Version
* Brand (hardware only)
* Model (hardware only)
* Mobile (boolean, can be inaccurate)
```

### Install / Configuring

Packagist [commencement.technology/botcheck](https://packagist.org/packages/commencement.technology/botcheck)

```sh
$ composer require commencement.technology/botcheck
```

### Usage

```php
use CommencementTechnology\Botcheck\BotChecker;

// $ua = $request->get('ua'); 
//              OR
// $ua = $_SERVER['HTTP_USER_AGENT']; 
$ua = 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10.15; rv:81.0) Gecko/20100101 Firefox/81.0';

$user_agent      = new BotChecker($ua);

// If you want all data in that case just use parse
$user_agent_info = $user_agent->parse();
```
#### Result
```php
[
	'os' => [
		'name'    => 'Windows',
		'icon'    => 'win10',
		'version' => '10'
	],
	'browser' => [
		'name'    => 'Firefox',
		'icon'    => 'firefox',
		'version' => '86.0'
	],
	'hardware' => false,
	'misc' => false,
	'bot' => false
];
```

```php
// When you want only Operating system specific details pass as 
$user_agent_os   = $user_agent->parse('os');
```
#### Result
```php
[
	'name'    => 'Windows',
	'icon'    => 'win10',
	'version' => '10'
];
```

```php
// When you want only bot or crawler specific details pass as 
$user_agent_os   = $user_agent->parse('bot');
```
#### Result
```php
[
	'name'    => 'SEMRush Crawler',
	'website'    => 'http://www.semrush.com',
	'complete_link' => 'http://www.semrush.com/bot.html'
];
```