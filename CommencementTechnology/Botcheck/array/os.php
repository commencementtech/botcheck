<?php
return array(
    [
        'name'    => 'Chrome OS',
        'icon'    => 'chrome',
        'pattern' => ' cros ', // spaces
    ],
    [
        'name'    => 'iOS',
        'icon'    => 'ios',
        'pattern' => 'iphone',
        'vregex'  => '/.*os ([0-9]{1,2}[_\.][0-9]{1,2}(?:[_\.][0-9]{1,2})?).*/i',
        'mobile'  => true,
    ],
    [
        'name'    => 'iOS',
        'icon'    => 'ios',
        'pattern' => 'ipad',
        'vregex'  => '/.*os ([0-9]{1,2}[_\.][0-9]{1,2}(?:[_\.][0-9]{1,2})?) .*/i',
        'mobile'  => true,
    ],
    [
        'name'    => 'watchOS',
        'icon'    => 'watchos',
        'pattern' => 'watchos',
        'vregex'  => '/.*watchos\/([0-9]{1,2}[_\.][0-9]{1,2}(?:[_\.][0-9]{1,2})?) .*/i',
        'mobile'  => true,
    ],
    [
        'name'    => 'Android',
        'icon'    => 'android',
        'pattern' => 'android',
        'vregex'  => '/.*android ([0-9]{1,2}(?:[_\.][0-9]{1,2})?(?:[_\.][0-9]{1,2})?).*/i',
    ],
    [
        'name'    => 'Windows',
        'icon'    => 'win10',
        'pattern' => 'windows',
        'submatch' => [
            [
                'icon'    => 'win10',
                'pattern' => 'windows nt 10',
                'version' => '10',
            ],
            [
                'icon'    => 'win81',
                'pattern' => 'windows nt 6.3',
                'version' => '8.1',
            ],
            [
                'icon'    => 'win8',
                'pattern' => 'windows nt 6.2',
                'version' => '8',
            ],
            [
                'icon'    => 'win7',
                'pattern' => 'windows nt 6.1',
                'version' => '7',
            ],
            [
                'icon'    => 'winvista',
                'pattern' => 'windows nt 6.0',
                'version' => 'Vista',
            ],
            [
                'icon'    => 'winxp',
                'pattern' => 'windows nt 5.2',
                'version' => 'XP x64',
            ],
            [
                'icon'    => 'winxp',
                'pattern' => 'windows nt 5.1',
                'version' => 'XP',
            ],
            [
                'icon'    => 'win2000',
                'pattern' => 'windows nt 5.0',
                'version' => '2000',
            ],
            [
                'icon'    => 'win98',
                'pattern' => 'windows nt 4.0',
                'version' => 'NT 4.0',
            ],
            [
                'icon'    => 'winme',
                'pattern' => 'windows 9x 4.9',
                'version' => 'ME',
            ],
            [
                'icon'    => 'wince',
                'pattern' => 'windows ce',
                'version' => 'CE',
            ],
            [
                'icon'    => 'win98',
                'pattern' => 'windows 98',
                'version' => '98',
            ],
            [
                'icon'    => 'win98',
                'pattern' => 'win98',
                'version' => '98',
            ],
            [
                'icon'    => 'win98', // same icon as 98
                'pattern' => 'win95',
                'version' => '95',
            ],
        ],
    ],
    [
        'name'    => 'macOS',
        'icon'    => 'macos-mojave',
        'pattern' => 'os x',
        'submatch' => [
            [
                'icon'    => 'macos-mojave',
                'regex'   => '/os x 10[_\.]14/i',
                'vregex'  => '/.*os x (10[_\.][0-9]{1,2}(?:[_\.][0-9]{1,2})?).*/i',
            ],
            [
                'icon'    => 'macos-highsierra',
                'regex'   => '/os x 10[_\.]13/i',
                'vregex'  => '/.*os x (10[_\.][0-9]{1,2}(?:[_\.][0-9]{1,2})?).*/i',
            ],
            [
                'icon'    => 'macos-sierra',
                'regex'   => '/os x 10[_\.]12/i',
                'vregex'  => '/.*os x (10[_\.][0-9]{1,2}(?:[_\.][0-9]{1,2})?).*/i',
            ],
            [
                'name'    => 'Mac OS X',
                'icon'    => 'macos-elcapitan',
                'regex'   => '/os x 10[_\.]11/i',
                'vregex'  => '/.*os x (10[_\.][0-9]{1,2}(?:[_\.][0-9]{1,2})?).*/i',
            ],
            [
                'name'    => 'Mac OS X',
                'icon'    => 'macos-yosemite',
                'regex'   => '/os x 10[_\.]10/i',
                'vregex'  => '/.*os x (10[_\.][0-9]{1,2}(?:[_\.][0-9]{1,2})?).*/i',
            ],
            [
                'name'    => 'Mac OS X',
                'icon'    => 'macos-mavericks',
                'regex'   => '/os x 10[_\.]9/i',
                'vregex'  => '/.*os x (10[_\.][0-9]{1,2}(?:[_\.][0-9]{1,2})?).*/i',
            ],
            [
                'name'    => 'Mac OS X',
                'icon'    => 'macos-mountainlion',
                'regex'   => '/os x 10[_\.]8/i',
                'vregex'  => '/.*os x (10[_\.][0-9]{1,2}(?:[_\.][0-9]{1,2})?).*/i',
            ],
            [
                'name'    => 'Mac OS X',
                'icon'    => 'macos-lion',
                'regex'   => '/os x 10[_\.]7/i',
                'vregex'  => '/.*os x (10[_\.][0-9]{1,2}(?:[_\.][0-9]{1,2})?).*/i',
            ],
            [
                'name'    => 'Mac OS X',
                'icon'    => 'macos-snowleopard',
                'regex'   => '/os x 10[_\.]6/i',
                'vregex'  => '/.*os x (10[_\.][0-9]{1,2}(?:[_\.][0-9]{1,2})?).*/i',
            ],
            [
                'name'    => 'Mac OS X',
                'icon'    => 'macos-leopard',
                'regex'   => '/os x 10[_\.]5/i',
                'vregex'  => '/.*os x (10[_\.][0-9]{1,2}(?:[_\.][0-9]{1,2})?).*/i',
            ],
            [
                'name'    => 'Mac OS X',
                'icon'    => 'macos-tiger',
                'regex'   => '/os x 10[_\.]4/i',
                'vregex'  => '/.*os x (10[_\.][0-9]{1,2}(?:[_\.][0-9]{1,2})?).*/i',
            ],
            [
                'name'    => 'Mac OS X',
                'icon'    => 'macos-panther',
                'regex'   => '/os x 10[_\.]3/i',
                'vregex'  => '/.*os x (10[_\.][0-9]{1,2}(?:[_\.][0-9]{1,2})?).*/i',
            ],
            [
                'name'    => 'Mac OS X',
                'icon'    => 'macos-jaguar',
                'regex'   => '/os x 10[_\.]2/i',
                'vregex'  => '/.*os x (10[_\.][0-9]{1,2}(?:[_\.][0-9]{1,2})?).*/i',
            ],
        ],
    ],
    [
        'name'    => 'tvOS',
        'icon'    => 'tvos',
        'pattern' => 'appletv',
    ],
    [
        'name'    => 'Sun OS',
        'icon'    => 'sunos',
        'pattern' => 'sunos',
    ],
    [
        'name'    => 'OpenBSD',
        'icon'    => 'openbsd',
        'pattern' => 'openbsd',
    ],
    [
        'name'    => 'FreeBSD',
        'icon'    => 'freebsd',
        'pattern' => 'freebsd',
    ],
    [
        'name'    => 'OS/2',
        'icon'    => 'os2',
        'pattern' => 'os/2',
    ],
    [
        'name'    => 'Linux',
        'icon'    => 'linux',
        'pattern' => 'linux',
        'submatch' => [
            // most of these won't advertise, but these seem to pop up occasionally?
            [
                'name'    => 'Ubuntu',
                'icon'    => 'ubuntu',
                'pattern' => 'ubuntu',
            ],
            [
                'name'    => 'Debian',
                'icon'    => 'debian',
                'pattern' => 'debian',
            ],
            [
                'name'    => 'Linux Mint',
                'icon'    => 'linux-mint',
                'pattern' => 'linux mint',
            ],
            [
                'name'    => 'Mandriva',
                'icon'    => 'mandriva',
                'pattern' => 'mandriva',
            ],
            [
                'name'    => 'Gentoo',
                'icon'    => 'gentoo',
                'pattern' => 'gentoo',
            ],
            [
                'name'    => 'Fedora',
                'icon'    => 'fedora',
                'pattern' => 'fedora',
            ],
            [
                'name'    => 'Red Hat',
                'icon'    => 'redhat',
                'pattern' => 'red hat',
            ],
            [
                'name'    => 'Slackware',
                'icon'    => 'slackware',
                'pattern' => 'slackware',
            ],
            // these might work?
            [
                'name'    => 'openSUSE',
                'icon'    => 'opsnsuse',
                'pattern' => 'opsnsuse',
            ],
            [
                'name'    => 'SUSE',
                'icon'    => 'suse',
                'pattern' => 'suse',
            ],
            [
                'name'    => 'CentOS',
                'icon'    => 'centos',
                'pattern' => 'centos',
            ],
        ],
    ],
);