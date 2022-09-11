<?php
return array(
    [
        'brand'   => 'Google',
        'name'    => 'Chromecast',
        'icon'    => 'chromecast',
        'pattern' => 'crkey',
    ],
    [
        'brand'   => 'Roku',
        'name'    => 'Roku',
        'icon'    => 'roku',
        'pattern' => 'roku4640x',
        'model'   => 'Ultra',
    ],
    [
        'brand'   => 'Roku',
        'name'    => 'Roku',
        'icon'    => 'roku',
        'pattern' => 'roku',
    ],

    [
        'brand'   => 'Google',
        'name'    => 'Nexus Player',
        'icon'    => 'nexus',
        'pattern' => 'nexus player',
    ],
    [
        'brand'   => 'Nintendo',
        'name'    => 'Nintendo',
        'icon'    => 'nintendo',
        'pattern' => 'nintendo',
        'submatch' => [
            [
                'icon'    => 'nintendo-wiiu',
                'pattern' => 'nintendo wiiu',
                'model'   => 'Wii U',
            ],
            [
                'icon'    => 'nintendo-3ds',
                'pattern' => 'nintendo 3ds',
                'model'   => '3DS',
                'mobile'  => true, // enough
            ],
            [
                'icon'    => 'nintendo-switch',
                'pattern' => 'nintendo switch',
                'model'   => 'Switch',
            ],
        ]
    ],
    [
        'brand'   => 'Microsoft',
        'name'    => 'Xbox',
        'icon'    => 'xbox',
        'pattern' => 'xbox',
        'submatch' => [
            [
                'pattern' => 'xbox_one_ed',
                'model'   => 'One S',
            ],
            [
                'pattern' => 'xbox one',
                'model'   => 'One',
            ],
            [
                'pattern' => 'xboxone',
                'model'   => 'One',
            ],
        ]
    ],
    [
        'brand'   => 'Sony',
        'name'    => 'Playstation',
        'icon'    => 'playstation',
        'pattern' => 'playstation',
        'submatch' => [
            [
                'pattern' => 'playstation 4',
                'model'   => '4',
            ],
            [
                'pattern' => 'playstation 3',
                'model'   => '3',
            ],
            [
                'pattern' => 'playstation vita',
                'model'   => 'Vita',
                'mobile'  => true,
            ],
        ]
    ],
    [
        'brand'   => 'Sony',
        'name'    => 'Sony',
        'icon'    => 'sony',
        'pattern' => 'sony',
    ],

    // AMAZON //
    // kindle must be after playstation vita
    [
        'brand'   => 'Amazon',
        'name'    => 'Kindle',
        'icon'    => 'kindle',
        'pattern' => 'kindle/3.0',
        'model'   => '3',
        'mobile'  => true,
        'submatch' => [
            [
                'name'    => 'Kindle',
                'pattern' => 'kindle/3.0+',
                'model'   => '4',
            ],
        ]
    ],
    // order doesn't matter for each kindle fire because of the 'build' keyword
    [
        'brand'   => 'Amazon',
        'name'    => 'Kindle Fire',
        'icon'    => 'amazon-kindle-fire',
        'pattern' => 'kfot build',
        'year'    => '2012',
        'mobile'  => true,
    ],
    [
        'brand'   => 'Amazon',
        'name'    => 'Kindle Fire',
        'icon'    => 'amazon-kindle-fire',
        'pattern' => 'kfote build',
        'model'   => '2',
        'mobile'  => true,
    ],
    [
        'brand'   => 'Amazon',
        'name'    => 'Kindle Fire',
        'icon'    => 'amazon-kindle-fire',
        'pattern' => 'kftt build',
        'model'   => 'HD 7',
        'year'    => '2012',
        'mobile'  => true,
    ],
    [
        'brand'   => 'Amazon',
        'name'    => 'Kindle Fire',
        'icon'    => 'amazon-kindle-fire',
        'pattern' => 'kfsowi build',
        'version' => 'HD',
        'year'    => '2013',
        'mobile'  => true,
    ],
    [
        'brand'   => 'Amazon',
        'name'    => 'Kindle Fire',
        'icon'    => 'amazon-kindle-fire',
        'pattern' => 'kfjwi build',
        'model'   => 'HD 8.9 WiFi',
        'year'    => '2012',
        'mobile'  => true,
    ],
    [
        'brand'   => 'Amazon',
        'name'    => 'Kindle Fire',
        'icon'    => 'amazon-kindle-fire',
        'pattern' => 'kfjwa build',
        'model'   => 'HD 8.9 4G',
        'year'    => '2012',
        'mobile'  => true,
    ],
    [
        'brand'   => 'Amazon',
        'name'    => 'Kindle Fire',
        'icon'    => 'amazon-kindle-fire',
        'pattern' => 'kfthwi build',
        'model'   => 'HDX WiFi',
        'year'    => '2013',
        'mobile'  => true,
    ],
    [
        'brand'   => 'Amazon',
        'name'    => 'Kindle Fire',
        'icon'    => 'amazon-kindle-fire',
        'pattern' => 'kfthwa build',
        'version' => 'HDX 4G',
        'year'    => '2013',
        'mobile'  => true,
    ],
    [
        'brand'   => 'Amazon',
        'name'    => 'Kindle Fire',
        'icon'    => 'amazon-kindle-fire',
        'pattern' => 'kfapwi build',
        'model'   => 'HDX 8.9 WiFi',
        'year'    => '2013',
        'mobile'  => true,
    ],
    [
        'brand'   => 'Amazon',
        'name'    => 'Kindle Fire',
        'icon'    => 'amazon-kindle-fire',
        'pattern' => 'kfapwa build',
        'model'   => 'HDX 8.9 4G',
        'year'    => '2013',
        'mobile'  => true,
    ],
    [
        'brand'   => 'Amazon',
        'name'    => 'Fire',
        'icon'    => 'amazon-fire',
        'pattern' => 'kfarwi build',
        'model'   => 'HD 6',
        'year'    => '2014',
        'mobile'  => true,
    ],
    [
        'brand'   => 'Amazon',
        'name'    => 'Fire',
        'icon'    => 'amazon-fire',
        'pattern' => 'kfaswi build',
        'model'   => 'HD 7',
        'year'    => '2014',
        'mobile'  => true,
    ],
    [
        'brand'   => 'Amazon',
        'name'    => 'Fire',
        'icon'    => 'amazon-fire',
        'pattern' => 'kfsawi build',
        'model'   => 'HDX 8.9 WiFi',
        'year'    => '2014',
        'mobile'  => true,
    ],
    [
        'brand'   => 'Amazon',
        'name'    => 'Fire',
        'icon'    => 'amazon-fire',
        'pattern' => 'kfsawa build',
        'model'   => 'HDX 8.9 4G',
        'year'    => '2014',
        'mobile'  => true,
    ],
    [
        'brand'   => 'Amazon',
        'name'    => 'Fire',
        'icon'    => 'amazon-fire',
        'pattern' => 'kffowi build',
        'year'    => '2015',
        'mobile'  => true,
    ],
    [
        'brand'   => 'Amazon',
        'name'    => 'Fire',
        'icon'    => 'amazon-fire',
        'pattern' => 'kfmewi build',
        'model'   => 'HD 8',
        'year'    => '2015',
        'mobile'  => true,
    ],
    [
        'brand'   => 'Amazon',
        'name'    => 'Fire',
        'icon'    => 'amazon-fire',
        'pattern' => 'kfgiwi build',
        'version' => 'HD 8',
        'year'    => '2016',
        'mobile'  => true,
    ],
    [
        'brand'   => 'Amazon',
        'name'    => 'Fire',
        'icon'    => 'amazon-fire',
        'pattern' => 'kfauwi build',
        'model'   => '7',
        'year'    => '2017',
        'mobile'  => true,
    ],
    [
        'brand'   => 'Amazon',
        'name'    => 'Fire',
        'icon'    => 'amazon-fire',
        'pattern' => 'kfdowi build',
        'model'   => 'HD 8',
        'year'    => '2017',
        'mobile'  => true,
    ],
    [
        'brand'   => 'Amazon',
        'name'    => 'Fire',
        'icon'    => 'amazon-fire',
        'pattern' => 'kfkawi build',
        'model'   => 'HD 8',
        'year'    => '2018',
        'mobile'  => true,
    ],
    [
        'brand'   => 'Amazon',
        'name'    => 'Fire',
        'icon'    => 'amazon-fire',
        'pattern' => 'kfsuwi build',
        'model'   => 'HD 10',
        'year'    => '2017',
        'mobile'  => true,
    ],
    [
        'brand'   => 'Amazon',
        'name'    => 'Fire 7 (2019)',
        'icon'    => 'amazon-fire',
        'pattern' => 'kfmuwi build',
        'version' => '7',
        'year'    => '2019',
        'mobile'  => true,
    ],
    [
        'brand'   => 'Amazon',
        'name'    => 'Fire TV',
        'icon'    => 'amazon-firetv',
        'pattern' => 'afta build',
        'version' => 'Cube',
        'mobile'  => true,
    ],
    [
        'name'    => 'Fire TV',
        'icon'    => 'amazon-firetv',
        'pattern' => 'aftb build',
        'model'   => 'Gen 1',
        'mobile'  => true,
    ],
    [
        'brand'   => 'Amazon',
        'name'    => 'Fire TV',
        'icon'    => 'amazon-firetv',
        'pattern' => 'afts build',
        'model'   => 'Gen 2',
        'mobile'  => true,
    ],
    [
        'brand'   => 'Amazon',
        'name'    => 'Fire TV',
        'icon'    => 'amazon-firetv',
        'pattern' => 'aftn build',
        'model'   => 'Gen 3',
        'mobile'  => true,
    ],
    [
        'brand'   => 'Amazon',
        'name'    => 'Fire TV Stick',
        'icon'    => 'amazon-firetv',
        'pattern' => 'aftm build',
        'model'   => 'Gen 1',
        'mobile'  => true,
    ],
    [
        'brand'   => 'Amazon',
        'name'    => 'Fire TV Stick',
        'icon'    => 'amazon-firetv',
        'pattern' => 'aftt build',
        'model'   => 'Gen 2',
        'mobile'  => true,
    ],
    [
        'brand'   => 'Amazon',
        'name'    => 'Fire TV Stick',
        'icon'    => 'amazon-firetv',
        'pattern' => 'aftmm build',
        'version' => '4K',
        'mobile'  => true,
    ],
    [
        'brand'   => 'Amazon',
        'name'    => 'Fire TV Element 4K',
        'icon'    => 'amazon-firetv',
        'pattern' => 'aftrs build',
        'year'    => '2017',
        'mobile'  => true,
    ],
    [
        'brand'   => 'Amazon',
        'name'    => 'Fire TV Insignia HD',
        'icon'    => 'amazon-firetv',
        'pattern' => 'afteamr311 build',
        'year'    => '2018',
        'mobile'  => true,
    ],
    [
        'brand'   => 'Amazon',
        'name'    => 'Fire TV Insignia 4K',
        'icon'    => 'amazon-firetv',
        'pattern' => 'aftjmst12 build',
        'year'    => '2018',
        'mobile'  => true,
    ],
    [
        'brand'   => 'Amazon',
        'name'    => 'Fire TV Toshiba HD',
        'icon'    => 'amazon-firetv',
        'pattern' => 'aftbamr311 build',
        'year'    => '2018',
        'mobile'  => true,
    ],
    [
        'brand'   => 'Amazon',
        'name'    => 'Fire TV Toshiba 4K',
        'icon'    => 'amazon-firetv',
        'pattern' => 'aftkmst12 build',
        'year'    => '2018/2019',
        'mobile'  => true,
    ],
    [
        'brand'   => 'Amazon',
        'name'    => 'Kindle Fire', // (2012) probably
        'icon'    => 'amazon-kindle-fire',
        'pattern' => 'kindle fire',
        'mobile'  => true,
    ],
    // END AMAZON //
    
    [
        'brand'   => 'HTC',
        'name'    => 'HTC',
        'icon'    => 'htc',
        'pattern' => 'htc',
        'mobile'  => true,
        'submatch' => [
            [
                'name'    => 'HTC 10',
                'pattern' => 'htc 10',
            ],
            [
                'name'    => 'HTC Desire',
                'pattern' => 'htc desire',
            ],
        ]
    ],
    
    [
        'brand'   => 'Google',
        'name'    => 'Nexus',
        'icon'    => 'nexus',
        'pattern' => 'nexus',
        'vregex'  => '/.*nexus ([a-z0-9]+) .*/i',
        'mobile'  => true,
    ],
    [
        'brand'   => 'Vivo',
        'name'    => 'Vivo',
        'icon'    => 'vivo',
        'pattern' => 'vivo',
        'mobile'  => true,
        'submatch' => [
            [
                'pattern' => 'vivo ', // space here
                'vregex'  => '/.*vivo ([a-z0-9]+) .*/i',
            ],
        ]
    ],
    [
        'brand'   => 'Panasonic',
        'name'    => 'Panasonic',
        'icon'    => 'panasonic',
        'pattern' => 'panasonic',
    ],
    [
        'brand'   => 'Philips',
        'name'    => 'Philips',
        'icon'    => 'philips',
        'pattern' => 'philips',
    ],
    [
        'brand'   => 'Microsoft',
        'name'    => 'Windows Phone',
        'icon'    => 'windows-phone',
        'pattern' => 'windows phone',
        'mobile'  => true,
    ],
    [
        'brand'   => 'Blackberry',
        'name'    => 'Blackberry',
        'icon'    => 'blackberry',
        'pattern' => 'blackberry',
        'mobile'  => true,
    ],
    [
        'brand'   => 'Blackberry',
        'name'    => 'Blackberry',
        'icon'    => 'blackberry',
        'pattern' => 'bb10',
        'model'   => '10',
        'mobile'  => true,
    ],
    [
        'brand'   => 'Google',
        'name'    => 'Pixel',
        'icon'    => 'google', //uses google logo
        'pattern' => 'pixel',
        'mobile'  => true,
    ],
    [
        'brand'   => 'Nokia',
        'name'    => 'Nokia',
        'icon'    => 'nokia',
        'pattern' => 'nokia',
        'mobile'  => true,
    ],
    
    // SAMSUNG //
    // https://developer.samsung.com/internet/user-agent-string-format
    // they make so many, this is hardly complete
    [
        'brand'   => 'Samsung',
        'name'    => 'Samsung Galaxy',
        'icon'    => 'samsung-galaxy',
        'regex'   => '/.*sm\-g[a-z0-9]+.*/i',
        'mobile'  => true,
        'submatch' => [
            [
                'regex'   => '/sm-g975[0-9a-z]*/i',
                'model'   => 'S10+',
            ],
            [
                'regex'   => '/sm-g973[0-9a-z]*/i',
                'model'   => 'S10',
            ],
            [
                'regex'   => '/sm-g970[0-9a-z]*/i',
                'model'   => 'S10e',
            ],
            [
                'regex'   => '/sm-g965[0-9a-z]*/i',
                'model'   => 'S9+',
            ],
            [
                'regex'   => '/sm-g960[0-9a-z]*/i',
                'model'   => 'S9',
            ],
            [
                'regex'   => '/sm-g955[0-9a-z]*/i',
                'model'   => 'S8+',
            ],
            [
                'regex'   => '/sm-g950[0-9a-z]*/i',
                'model'   => 'S8',
            ],
            [
                'regex'   => '/sm-g935[0-9a-z]*/i',
                'model'   => 'S7 Edge',
            ],
            [
                'regex'   => '/sm-g930[0-9a-z]*/i',
                'model'   => 'S7',
            ],
            [
                'regex'   => '/sm-g928[0-9a-z]*/i',
                'model'   => 'S6 Edge Plus',
            ],
            [
                'regex'   => '/sm-g925[0-9a-z]*/i',
                'model'   => 'S6 Edge',
            ],
            [
                'regex'   => '/sm-g920[0-9a-z]*/i',
                'model'   => 'S6',
            ],
            [
                'regex'   => '/sm-g903[0-9a-z]*/i',
                'model'   => 'S5 Neo',
            ],
            [
                'regex'   => '/sm-g900[0-9a-z]*/i',
                'model'   => 'S5 LTE-A Eu',
            ],
            [
                'regex'   => '/sm-g900[0-9a-z]*/i',
                'model'   => 'S5',
            ],
            [
                'regex'   => '/sm-g850[0-9a-z]*/i',
                'model'   => 'Alpha',
            ],
            [
                'regex'   => '/sm-g800[0-9a-z]*/i',
                'model'   => 'S5 Mini',
            ],
            [
                'regex'   => '/sm-g611[0-9a-z]*/i',
                'model'   => 'J7 Prime 2',
                'year'    => '2015',
            ],
            [
                'regex'   => '/sm-g610[0-9a-z]*/i',
                'model'   => 'J7 Prime',
                'year'    => '2015',
            ],
            [
                'regex'   => '/sm-g570[0-9a-z]*/i',
                'model'   => 'J5 Prime',
                'year'    => '2015',
            ],
            [
                'regex'   => '/sm-g532[0-9a-z]*/i',
                'model'   => 'J2 Prime',
                'year'    => '2016',
            ],
            [
                'regex'   => '/sm-g532[0-9a-z]*/i',
                'model'   => 'Grand Prime Plus',
            ],
            [
                'regex'   => '/sm-g531[0-9a-z]*/i',
                'model'   => 'Grand Prime',
            ],
            [
                'regex'   => '/sm-g530[0-9a-z]*/i',
                'model'   => 'Grand Prime',
            ],
            [
                'regex'   => '/sm-g390[0-9a-z]*/i',
                'model'   => 'XCover4',
            ],
            [
                'regex'   => '/sm-g361[0-9a-z]*/i',
                'model'   => 'Core Prime',
            ],
            [
                'regex'   => '/sm-g360[0-9a-z]*/i',
                'model'   => 'Core Prime',
            ],
        ]
    ],
    [
        'brand'   => 'Samsung',
        'name'    => 'Samsung Galaxy',
        'icon'    => 'samsung-galaxy',
        'regex'   => '/.*sm\-a[a-z0-9]+.*/i',
        'mobile'  => true,
        'submatch' => [
            [
                'regex'   => '/sm-a920[0-9a-z]*/i',
                'model'   => 'A9',
            ],
            [
                'regex'   => '/sm-a730[0-9a-z]*/i',
                'model'   => 'A8+',
            ],
            [
                'regex'   => '/sm-a530[0-9a-z]*/i',
                'model'   => 'A8',
            ],
            [
                'regex'   => '/sm-a750[0-9a-z]*/i',
                'model'   => 'A7',
            ],
            [
                'regex'   => '/sm-a720[0-9a-z]*/i',
                'model'   => 'A7',
            ],
            [
                'regex'   => '/sm-a710[0-9a-z]*/i',
                'model'   => 'A7',
            ],
            [
                'regex'   => '/sm-a605[0-9a-z]*/i',
                'model'   => 'A6+',
            ],
            [
                'regex'   => '/sm-a600[0-9a-z]*/i',
                'model'   => 'A6',
            ],
            [
                'regex'   => '/sm-a520[0-9a-z]*/i', //2017
                'model'   => 'A5',
            ],
            [
                'regex'   => '/sm-a510[0-9a-z]*/i', //2016
                'model'   => 'A5',
            ],
            [
                'regex'   => '/sm-a505[0-9a-z]*/i',
                'model'   => 'A50',
            ],
            [
                'regex'   => '/sm-a500[0-9a-z]*/i',
                'model'   => 'A5',
            ],
            [
                'regex'   => '/sm-a320[0-9a-z]*/i', //2017
                'model'   => 'A3',
            ],
            [
                'regex'   => '/sm-a310[0-9a-z]*/i',
                'model'   => 'A3',
            ],
            [
                'regex'   => '/sm-a300[0-9a-z]*/i',
                'model'   => 'A3',
            ],
        ]
    ],
    [
        'brand'   => 'Samsung',
        'name'    => 'Samsung Galaxy',
        'icon'    => 'samsung-galaxy',
        'regex'   => '/.*sm\-j[a-z0-9]+.*/i',
        'mobile'  => true,
        'submatch' => [
            [
                'regex'   => '/sm-j810[0-9a-z]*/i',
                'model'   => 'J8',
                'year'    => '2018',
            ],
            [
                'regex'   => '/sm-j720[0-9a-z]*/i',
                'model'   => 'J7 Duo ',
                'year'    => '2018',
            ],
            [
                'regex'   => '/sm-j737[0-9a-z]*/i',
                'model'   => 'J8',
                'year'    => '2018',
            ],
            [
                'regex'   => '/sm-j727[0-9a-z]*/i',
                'model'   => 'J7 Perx/V/SkyPro',
                'year'    => '2017',
            ],
            [
                'regex'   => '/sm-j701[0-9a-z]*/i',
                'model'   => 'J7 Nxt/Core/Neo',
                'year'    => '2017',
            ],
            [
                'regex'   => '/sm-j730[0-9a-z]*/i',
                'model'   => 'J7 / J7 Pro',
                'year'    => '2017',
            ],
            [
                'regex'   => '/sm-j710[0-9a-z]*/i',
                'model'   => 'J7',
                'year'    => '2016',
            ],
            [
                'regex'   => '/sm-j700[0-9a-z]*/i',
                'model'   => 'J7',
                'year'    => '2015',
            ],
            [
                'regex'   => '/sm-j610[0-9a-z]*/i',
                'model'   => 'J6+',
                'year'    => '2018',
            ],
            [
                'regex'   => '/sm-j600[0-9a-z]*/i',
                'model'   => 'J6',
                'year'    => '2018',
            ],
            [
                'regex'   => '/sm-j530[0-9a-z]*/i',
                'model'   => 'J5 / J5 Pro',
                'year'    => '2017',
            ],
            [
                'regex'   => '/sm-j510[0-9a-z]*/i',
                'model'   => 'J5',
                'year'    => '2016',
            ],
            [
                'regex'   => '/sm-j500[0-9a-z]*/i',
                'model'   => 'J5',
                'year'    => '2015',
            ],
            [
                'regex'   => '/sm-j410[0-9a-z]*/i',
                'model'   => 'J4 Core',
                'year'    => '2018',
            ],
            [
                'regex'   => '/sm-j415[0-9a-z]*/i',
                'model'   => 'J4+',
                'year'    => '2018',
            ],
            [
                'regex'   => '/sm-j400[0-9a-z]*/i',
                'model'   => 'J4',
                'year'    => '2018',
            ],
            [
                'regex'   => '/sm-j337[0-9a-z]*/i',
                'model'   => 'J3/J3 Top/J3 V',
                'year'    => '2018',
            ],
            [
                'regex'   => '/sm-j327[0-9a-z]*/i',
                'model'   => 'J3 Prime/Emerge',
                'year'    => '2017',
            ],
            [
                'regex'   => '/sm-j330[0-9a-z]*/i',
                'model'   => 'J3 Pro',
                'year'    => '2017',
            ],
            [
                'regex'   => '/sm-j3110[0-9a-z]*/i',
                'model'   => 'J3 Pro China',
                'year'    => '2016',
            ],
            [
                'regex'   => '/sm-j320[0-9a-z]*/i',
                'model'   => 'J3',
                'year'    => '2016',
            ],
            [
                'regex'   => '/sm-j260[0-9a-z]*/i',
                'model'   => 'J2 Core',
                'year'    => '2018',
            ],
            [
                'regex'   => '/sm-j250[0-9a-z]*/i',
                'model'   => 'J2 / J2 Pro',
                'year'    => '2018',
            ],
            [
                'regex'   => '/sm-j210[0-9a-z]*/i',
                'model'   => 'J2',
                'year'    => '2016',
            ],
            [
                'regex'   => '/sm-j200[0-9a-z]*/i',
                'model'   => 'J2',
                'year'    => '2015-2017',
            ],
            [
                'regex'   => '/sm-j106[0-9a-z]*/i',
                'model'   => 'J1 Mini Prime',
                'year'    => '2016',
            ],
            [
                'regex'   => '/sm-j105[0-9a-z]*/i',
                'model'   => 'J1 Nxt/Mini',
                'year'    => '2016',
            ],
            [
                'regex'   => '/sm-j120[0-9a-z]*/i',
                'model'   => 'J1',
                'year'    => '2016',
            ],
            [
                'regex'   => '/sm-j110[0-9a-z]*/i',
                'model'   => 'J1 Ace / Ace Neo',
                'year'    => '2016',
            ],
            [
                'regex'   => '/sm-j100[0-9a-z]*/i',
                'model'   => 'J1',
                'year'    => '2015',
            ],
        ]
    ],
    [
        'brand'   => 'Samsung',
        'name'    => 'Samsung Galaxy',
        'icon'    => 'samsung-galaxy',
        'regex'   => '/.*sm\-n[a-z0-9]+.*/i',
        'mobile'  => true,
        'submatch' => [
            [
                'regex'   => '/sm-n960[0-9a-z]*/i',
                'model'   => 'Note 9',
                'year'    => '2018',
            ],
            [
                'regex'   => '/sm-n950[0-9a-z]*/i',
                'model'   => 'Note 8',
                'year'    => '2017',
            ],
            [
                'regex'   => '/sm-n935[0-9a-z]*/i',
                'model'   => 'Note FE',
                'year'    => '2017',
            ],
            [
                'regex'   => '/sm-n920[0-9a-z]*/i',
                'model'   => 'Note 5',
                'year'    => '2015',
            ],
            [
                'regex'   => '/sm-n915[0-9a-z]*/i',
                'model'   => 'Note Edge',
                'year'    => '2014',
            ],
            [
                'regex'   => '/sm-n910[0-9a-z]*/i',
                'model'   => 'Note 4',
                'year'    => '2014',
            ],
            [
                'regex'   => '/sm-n750[0-9a-z]*/i',
                'model'   => 'Note 3 Neo',
                'year'    => '2014',
            ],
            [
                'pattern' => 'sm-n9005',
                'model'   => 'Note 3 LTE',
                'year'    => '2013',
            ],
            [
                'pattern' => 'sm-n9000',
                'model'   => 'Note 3 3G',
                'year'    => '2013',
            ],
            [
                'pattern' => 'sm-n8020',
                'model'   => 'Note 10.1 LTE',
                'year'    => '2012',
            ],
            [
                'pattern' => 'sm-n8010',
                'model'   => 'Note 10.1',
                'year'    => '2012',
            ],
            [
                'pattern' => 'sm-n800',
                'model'   => 'Note 10.1',
                'year'    => '2012',
            ],
        ]
    ],
    [
        'brand'   => 'Samsung',
        'name'    => 'Samsung Galaxy',
        'icon'    => 'samsung-galaxy',
        'regex'   => '/.*sm\-p[a-z0-9]+.*/i',
        'mobile'  => true,
        'submatch' => [
            [
                'regex'   => '/sm-p920[0-9a-z]*/i',
                'model'   => 'Note 5',
                'year'    => '2015',
            ],
            [
                'regex'   => '/sm-p90[05]/i',
                'model'   => 'Note 12.2',
                'year'    => '2014',
            ],
            [
                'regex'   => '/sm-p60[015]/i',
                'model'   => 'Note 10.1',
                'year'    => '2014',
            ],
            [
                'pattern' => 'sm-p905',
                'model'   => 'Note 12.2 LTE',
                'year'    => '2014',
            ],
            [
                'pattern' => 'sm-p900',
                'model'   => 'Note 12.2 WiFi',
                'year'    => '2014',
            ],
            [
                'pattern' => 'sm-p605',
                'model'   => 'Note 10.1 LTE',
                'year'    => '2014',
            ],
            [
                'pattern' => 'sm-p601',
                'model'   => 'Note 10.1 3G',
                'year'    => '2014',
            ],
            [
                'pattern' => 'sm-p600',
                'model'   => 'Note 10.1 WiFi',
                'year'    => '2014',
            ],
        ]
    ],
    [
        'brand'   => 'Samsung',
        'name'    => 'Samsung Galaxy',
        'icon'    => 'samsung-galaxy',
        'regex'   => '/.*sm\-w[a-z0-9]+.*/i', // windows
        'mobile'  => true,
        'submatch' => [
            [
                'pattern' => 'sm-w728',
                'model'   => 'Book 12.0',
                'year'    => '2017',
            ],
            [
                'pattern' => 'sm-w720',
                'model'   => 'Book 12.0',
                'year'    => '2017',
            ],
            [
                'pattern' => 'sm-w627',
                'model'   => 'Book 10.6',
                'year'    => '2017',
            ],
            [
                'pattern' => 'sm-w620',
                'model'   => 'Book 10.6',
                'year'    => '2017',
            ],
            [
                'pattern' => 'sm-w703',
                'model'   => 'Tab Pro S 12.0',
                'year'    => '2016',
            ],
        ]
    ],
    [
        'brand'   => 'Samsung',
        'name'    => 'Samsung Galaxy',
        'icon'    => 'samsung-galaxy',
        'regex'   => '/.*sm\-t[a-z0-9]+.*/i',
        'mobile'  => true,
        'submatch' => [
            [
                'pattern' => 'sm-t395',
                'model'   => 'Tab Active 2 LTE',
                'year'    => '2018',
            ],
            [
                'pattern' => 'sm-t390',
                'model'   => 'Tab Active 2 WiFi',
                'year'    => '2018',
            ],
            [
                'pattern' => 'sm-t595',
                'model'   => 'Tab A 2 10.5 LTE',
                'year'    => '2018',
            ],
            [
                'pattern' => 'sm-t590',
                'model'   => 'Tab A 2 10.5 WiFi',
                'year'    => '2018',
            ],
            [
                'pattern' => 'sm-t835',
                'model'   => 'Tab S4 10.5 LTE',
                'year'    => '2018',
            ],
            [
                'pattern' => 'sm-t830',
                'model'   => 'Tab S4 10.5 WiFi',
                'year'    => '2018',
            ],
            [
                'pattern' => 'sm-t825',
                'model'   => 'Tab S3 9.7 LTE',
                'year'    => '2017',
            ],
            [
                'pattern' => 'sm-t820',
                'model'   => 'Tab S3 9.7 WiFi',
                'year'    => '2017',
            ],
            [
                'pattern' => 'sm-t585',
                'model'   => 'Tab A 10.1 LTE',
                'year'    => '2016',
            ],
            [
                'pattern' => 'sm-t580',
                'model'   => 'Tab A 10.1 WiFi',
                'year'    => '2016',
            ],
            [
                'pattern' => 'sm-t285',
                'model'   => 'Tab A 8.0 LTE',
                'year'    => '2017',
            ],
            [
                'pattern' => 'sm-t280',
                'model'   => 'Tab A 8.0 WiFi',
                'year'    => '2017',
            ],
            [
                'pattern' => 'sm-t285',
                'model'   => 'Tab A 7.0 LTE',
                'year'    => '2016',
            ],
            [
                'pattern' => 'sm-t280',
                'model'   => 'Tab A 7.0 WiFi',
                'year'    => '2016',
            ],
            [
                'pattern' => 'sm-t670',
                'model'   => 'View',
                'year'    => '2015',
            ],
            [
                'pattern' => 'sm-t555',
                'model'   => 'Tab A 9.7 LTE',
                'year'    => '2015',
            ],
            [
                'pattern' => 'sm-t550',
                'model'   => 'Tab A 9.7 WiFi',
                'year'    => '2015',
            ],
            [
                'pattern' => 'sm-t355',
                'model'   => 'Tab A 8.0 LTE',
                'year'    => '2015',
            ],
            [
                'pattern' => 'sm-t350',
                'model'   => 'Tab A 8.0 WiFi',
                'year'    => '2015',
            ],
            [
                'pattern' => 'sm-t561',
                'model'   => 'Tab E 9.6 3G',
                'year'    => '2015',
            ],
            [
                'pattern' => 'sm-t560',
                'model'   => 'Tab E 9.6 WiFi',
                'year'    => '2015',
            ],
            [
                'pattern' => 'sm-t377',
                'model'   => 'Tab E 8 4G',
                'year'    => '2016',
            ],
            [
                'pattern' => 'sm-t375',
                'model'   => 'Tab E 8 WiFi',
                'year'    => '2016',
            ],
            [
                'regex'   => '/sm-t(?:815|817)/i',
                'model'   => 'Tab S2 9.7 LTE',
                'year'    => '2015',
            ],
            [
                'pattern' => 'sm-t810',
                'model'   => 'Tab S2 9.7 WiFi',
                'year'    => '2015',
            ],
            [
                'pattern' => 'sm-t719',
                'model'   => 'Tab S2 8.0 LTE',
                'year'    => '2015',
            ],
            [
                'regex'   => '/sm-t(?:710|713|715)/i',
                'model'   => 'Tab S2 8.0 WiFi',
                'year'    => '2015',
            ],
            [
                'pattern' => 'sm-t360',
                'model'   => 'Tab Active',
                'year'    => '2014',
            ],
            [
                'pattern' => 'sm-t800',
                'model'   => 'Tab S 10.5 WiFi',
                'year'    => '2014',
            ],
            [
                'pattern' => 'sm-t905',
                'model'   => 'Tab Pro 12.2 LTE',
                'year'    => '2014',
            ],
            [
                'pattern' => 'sm-t900',
                'model'   => 'Tab Pro 12.2 WiFi',
                'year'    => '2014',
            ],
            [
                'pattern' => 'sm-t525',
                'model'   => 'Tab Pro 10.1 3G',
                'year'    => '2014',
            ],
            [
                'pattern' => 'sm-t520',
                'model'   => 'Tab Pro 10.1 WiFi',
                'year'    => '2014',
            ],
            [
                'pattern' => 'sm-t325',
                'model'   => 'Tab Pro 8.4 4G',
                'year'    => '2014',
            ],
            [
                'pattern' => 'sm-t321',
                'model'   => 'Tab Pro 8.4 3G',
                'year'    => '2014',
            ],
            [
                'pattern' => 'sm-t320',
                'model'   => 'Tab Pro 8.4 WiFi',
                'year'    => '2014',
            ],
            [
                'pattern' => 'sm-t535',
                'model'   => 'Tab 4 10.1 4G',
                'year'    => '2014',
            ],
            [
                'pattern' => 'sm-t531',
                'model'   => 'Tab 4 10.1 3G',
                'year'    => '2014',
            ],
            [
                'pattern' => 'sm-t530',
                'model'   => 'Tab 4 10.1 WiFi',
                'year'    => '2014',
            ],
            [
                'pattern' => 'sm-t335',
                'model'   => 'Tab 4 8.0 4G',
                'year'    => '2014',
            ],
            [
                'pattern' => 'sm-t331',
                'model'   => 'Tab 4 8.0 3G',
                'year'    => '2014',
            ],
            [
                'pattern' => 'sm-t330',
                'model'   => 'Tab 4 8.0 WiFi',
                'year'    => '2014',
            ],
            [
                'pattern' => 'sm-t235',
                'model'   => 'Tab 4 7.0 4G',
                'year'    => '2014',
            ],
            [
                'pattern' => 'sm-t231',
                'model'   => 'Tab 4 7.0 3G',
                'year'    => '2014',
            ],
            [
                'pattern' => 'sm-t230',
                'model'   => 'Tab 4 7.0 WiFi',
                'year'    => '2014',
            ],
            [
                'pattern' => 'sm-t110',
                'model'   => 'Tab 3 Lite 7.0 WiFi',
                'year'    => '2014',
            ],
            [
                'pattern' => 'sm-t111',
                'model'   => 'Tab 3 Lite 7.0 3G',
                'year'    => '2014',
            ],
            [
                'pattern' => 'sm-t315',
                'model'   => 'Tab 3 8.0 4G',
                'year'    => '2013',
            ],
            [
                'pattern' => 'sm-t311',
                'model'   => 'Tab 3 8.0 3G',
                'year'    => '2013',
            ],
            [
                'pattern' => 'sm-t310',
                'model'   => 'Tab 3 8.0 WiFi',
                'year'    => '2013',
            ],
            [
                'pattern' => 'sm-t215',
                'model'   => 'Tab 3 7.0 4G',
                'year'    => '2013',
            ],
            [
                'pattern' => 'sm-t211',
                'model'   => 'Tab 3 7.0 3G',
                'year'    => '2013',
            ],
            [
                'pattern' => 'sm-t210',
                'model'   => 'Tab 3 7.0 WiFi',
                'year'    => '2013',
            ],
        ]
    ],
    [
        'brand'   => 'Samsung',
        'name'    => 'Samsung Galaxy',
        'icon'    => 'samsung-galaxy',
        'regex'   => '/.*gt\-n[a-z0-9]+.*/i',
        'mobile'  => true,
        'submatch' => [
            [
                'regex'   => '/gt-n51[012]0/i',
                'model'   => 'Note 8.0',
                'year'    => '2013',
            ],
            [
                'regex'   => '/gt-n80[012]0/i',
                'model'   => 'Note 10.0',
                'year'    => '2012',
            ],
            [
                'pattern' => 'gt-n7105',
                'model'   => 'Note II LTE',
                'year'    => '2012',
            ],
            [
                'pattern' => 'gt-n7100',
                'model'   => 'Note II 3G',
                'year'    => '2012',
            ],
            [
                'pattern' => 'gt-n7005',
                'model'   => 'Note LTE',
                'year'    => '2011',
            ],
            [
                'pattern' => 'gt-n7000',
                'model'   => 'Note 3G',
                'year'    => '2011',
            ],
        ]
    ],
    [
        'brand'   => 'Samsung',
        'name'    => 'Samsung Galaxy',
        'icon'    => 'samsung-galaxy',
        'regex'   => '/.*gt\-p[a-z0-9]+.*/i',
        'mobile'  => true,
        'submatch' => [
            [
                'pattern' => 'gt-p5220',
                'model'   => 'Tab 3 10.1 4G',
                'year'    => '2013',
            ],
            [
                'pattern' => 'gt-p5200',
                'model'   => 'Tab 3 10.1 3G',
                'year'    => '2013',
            ],
            [
                'pattern' => 'gt-p5210',
                'model'   => 'Tab 3 10.1 WiFi',
                'year'    => '2013',
            ],
            [
                'pattern' => 'gt-p5100',
                'model'   => 'Tab 2 10.1 3G',
                'year'    => '2012',
            ],
            [
                'pattern' => 'gt-p5113',
                'model'   => 'Tab 2 10.1 WiFi US',
                'year'    => '2012',
            ],
            [
                'pattern' => 'gt-p5110',
                'model'   => 'Tab 2 10.1 WiFi Eu',
                'year'    => '2012',
            ],
            [
                'pattern' => 'gt-p3100',
                'model'   => 'Tab 2 7.0 3G',
                'year'    => '2012',
            ],
            [
                'pattern' => 'gt-p3110',
                'model'   => 'Tab 2 7.0 WiFi',
                'year'    => '2012',
            ],
            [
                'pattern' => 'gt-p6800',
                'model'   => 'Tab 7.7 3G',
                'year'    => '2012',
            ],
            [
                'pattern' => 'gt-p6810',
                'model'   => 'Tab 7.7 WiFi',
                'year'    => '2012',
            ],
            [
                'pattern' => 'gt-p6200',
                'model'   => 'Tab 7.0 Plus 3G',
                'year'    => '2011',
            ],
            [
                'pattern' => 'gt-p6210',
                'model'   => 'Tab 7.0 Plus WiFi',
                'year'    => '2011',
            ],
            [
                'pattern' => 'gt-p7300',
                'model'   => 'Tab 8.9 3G',
                'year'    => '2011',
            ],
            [
                'pattern' => 'gt-p7310',
                'model'   => 'Tab 8.9 WiFi',
                'year'    => '2011',
            ],
            [
                'pattern' => 'gt-p7100',
                'model'   => 'Tab 10.1v',
                'year'    => '2011',
            ],
            [
                'pattern' => 'gt-p7501',
                'model'   => 'Tab 10.1N',
                'year'    => '2011',
            ],
            [
                'pattern' => 'gt-p7500',
                'model'   => 'Tab 10.1 3G',
                'year'    => '2011',
            ],
            [
                'pattern' => 'gt-p7510',
                'model'   => 'Tab 10.1 WiFi',
                'year'    => '2012',
            ],
            [
                'pattern' => 'gt-p1000',
                'model'   => 'Tab 7.0 3G',
                'year'    => '2012',
            ],
            [
                'pattern' => 'gt-p1010',
                'model'   => 'Tab 7.0 WiFi',
                'year'    => '2012',
            ],
        ]
    ],
    [
        'brand'   => 'Samsung',
        'name'    => 'Samsung',
        'icon'    => 'samsung',
        'regex'   => '/.*(?:sm|gt|sgh|sph|shv|sch)\-[a-z0-9]+.*/i',
        'submatch' => [
            // these model numbers don't fit into a category
            [
                'name'    => 'Samsung Galaxy',
                'regex'   => '/sm-c710[0-9a-z]*/i',
                'model'   => 'J7+',
                'year'    => '2017',
                'mobile'  => true,
            ],
            [
                'name'    => 'Samsung Galaxy',
                'regex'   => '/sm-f900[0-9a-z]*/i',
                'model'   => 'Fold',
                'year'    => '2019',
                'mobile'  => true,
            ],
        ]
    ],
    [
        'brand'   => 'Samsung',
        'name'    => 'Samsung',
        'icon'    => 'samsung',
        'pattern' => 'samsung',
        'submatch' => [
            [
                'name'    => 'Samsung Smart TV',
                'pattern' => 'smart-tv',
            ],
        ]
    ],
    // END SAMSUNG //

    [
        'brand'   => 'Huawei',
        'name'    => 'Huawei',
        'icon'    => 'huawei',
        'pattern' => 'huawei',
        'mobile'  => true, //??
    ],

    [
        'brand'   => 'Apple',
        'name'    => 'iPhone',
        'icon'    => 'iphone',
        'pattern' => 'iphone',
        'mobile'  => true,
        // some are detectable
    ],
    [
        'brand'   => 'Apple',
        'name'    => 'iPad',
        'icon'    => 'ipad',
        'pattern' => 'ipad',
        'mobile'  => true,
    ],
    [
        'brand'   => 'Apple',
        'name'    => 'Apple TV',
        'icon'    => 'appletv',
        'pattern' => 'appletv',
        'submatch' => [
            [
                'pattern' => 'appletv6,2',
                'model'   => '5th Gen 4K',
            ],
            [
                'pattern' => 'appletv5,3',
                'model'   => '4th Gen',
            ],
        ],
    ],

    [
        'brand'   => 'Apple',
        'name'    => 'Mac',
        'icon'    => 'apple',
        'pattern' => 'intel mac',
    ],

    [
        'brand'   => 'Tesla',
        'name'    => 'Tesla',
        'icon'    => 'tesla',
        'pattern' => 'qtcarbrowser',
    ],
    [
        'brand'   => 'Tesla',
        'name'    => 'Tesla',
        'icon'    => 'tesla',
        'pattern' => 'tesla',
    ],
);