<?php
return array(
    [
        'name'    => 'Gmail',
        'icon'    => 'gmail',
        'pattern' => 'googleimageproxy', // google image proxy is only used for Gmail
    ],
    [
        'name'    => 'WhatsApp',
        'icon'    => 'whatsapp',
        'pattern' => 'whatsapp',
        'vregex'  => '/.*whatsapp\/([0-9a-z\.]+).*/i',
    ],
    [
        'name'    => 'Feedly Fetcher',
        'icon'    => 'feedly',
        'pattern' => 'feedly',
    ],
    [
        'name'    => 'Stripe',
        'icon'    => 'stripe',
        'pattern' => 'stripe',
        'vregex'  => '/.*stripe\/([0-9\.]+).*/i',
    ],
    [
        'name'    => 'AWS SNS',
        'icon'    => 'aws-sns',
        'pattern' => 'amazon simple notification service agent',
    ],
    [
        'name'    => 'AWS CloudFront',
        'icon'    => 'aws-cloudfront',
        'pattern' => 'amazon cloudfront',
    ],
    [
        'name'    => 'CloudFlare',
        'icon'    => 'cloudflare',
        'pattern' => 'cloudflare',
    ],
    [
        'name'    => 'Slack',
        'icon'    => 'slack',
        'pattern' => 'slack',
        'submatch' => [
            [
                'name'    => 'Slack Link Expander',
                'pattern' => 'slackbot-linkexpanding',
            ],
            [
                'name'    => 'Slack Image Proxy',
                'pattern' => 'slackbot-imgproxy',
            ],
        ],
    ],
    [
        'name'    => 'Skype',
        'icon'    => 'skype',
        'pattern' => 'skype',
    ],
    [
        'name'    => 'W3C Validator',
        'icon'    => 'w3c',
        'pattern' => 'w3c',
    ],
    [
        'name'    => 'iOS Shortcuts',
        'icon'    => 'shortcuts',
        'regex'   => '/shortcuts.*darwin/i',
        'vregex'  => '/.*shortcuts\/([0-9\._]+).*/i',
    ],
    [
        'name'    => 'Kodi',
        'icon'    => 'kodi',
        'pattern' => 'kodi',
        'vregex'  => '/.*kodi\/([0-9a-z\.\-]+).*/i',
    ],
    [
        'name'    => 'XBMC',
        'icon'    => 'xbmc',
        'pattern' => 'xbmc',
        'vregex'  => '/.*xbmc\/([0-9a-z\.\-]+).*/i',
    ],
    
    [
        'name'    => 'got',
        'icon'    => 'got',
        'regex'   => '/got.*sindresorhus/i',
        'vregex'  => '/.*got\/([0-9\.]+).*/i',
    ],
    // languages
    [
        'name'    => 'PHP',
        'icon'    => 'php',
        'pattern' => 'php/', // include slash, php is sometimes included in a uri
        'vregex'  => '/.*php\/([0-9\.]+).*/i',
    ],
    [
        'name'    => 'Ruby',
        'icon'    => 'ruby',
        'pattern' => 'ruby',
        'submatch' => [
            [
                'pattern' => 'ruby/',
                'vregex'  => '/.*ruby\/([0-9\.]+).*/i',
            ],
            [
                'pattern' => 'ruby ',
                'vregex'  => '/.*ruby ([0-9\.]+).*/i',
            ],
        ]
    ],
    [
        'name'    => 'Java',
        'icon'    => 'java',
        'pattern' => 'java',
        'vregex'  => '/.*java\/([0-9a-z\._]+).*/i',
    ],
    [
        'name'    => 'Go HTTP Client',
        'icon'    => 'go',
        'pattern' => 'go-http-client',
        'vregex'  => '/.*go-http-client\/([0-9\.]+).*/i',
    ],
    [
        'name'    => 'Python-urllib',
        'icon'    => 'python',
        'pattern' => 'python-urllib',
        'vregex'  => '/.*python-urllib\/([0-9\.]+).*/i',
    ],
    [
        'name'    => 'libwww-perl',
        'icon'    => 'perl',
        'pattern' => 'libwww-perl',
        'vregex'  => '/.*libwww-perl\/([0-9\.]+).*/i',
    ],
    [
        'name'    => 'PycURL',
        'icon'    => 'python',
        'pattern' => 'pycurl',
        'vregex'  => '/.*pycurl\/([0-9\.]+).*/i',
    ],
    [
        'name'    => 'cURL',
        'icon'    => 'curl',
        'pattern' => 'curl',
        'vregex'  => '/.*curl\/([0-9\.]+).*/i',
    ],
    [
        'name'    => 'Wget',
        'icon'    => 'wget',
        'pattern' => 'wget',
        'vregex'  => '/.*wget\/([0-9\.]+).*/i',
    ],
);