<?php

$params = require(__DIR__ . '/params.php');
$db = require(__DIR__ . '/db.php');

$config = [
    'id' => 'bc-yearbook',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log', 'devicedetect'],
    'name' => 'BC Yearbook',
    'as access' => [
        'class' => '\hscstudio\mimin\components\AccessControl',
        'allowActions' => [
            // add wildcard allowed action here!
            'site/*',
            'debug/*',
            'mimin/*', // only in dev mode
            'yearbook/*',
            'pricelist/*',
            'pdfjs/*',
            //'panel/*',
        ],
    ],
    'components' => [
        'request' => [
            // !!! insert a secret key in the following (if it is empty) - this is required by cookie validation
            'cookieValidationKey' => 'PEi6ICsok3vWiJSJJtQV2JZ6D-jk5gkh',
        ],
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'user' => [
            'identityClass' => 'app\models\User',
            'enableAutoLogin' => true,
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        'mailer' => [
            'class' => 'yii\swiftmailer\Mailer',
            // send all mails to a file by default. You have to set
            // 'useFileTransport' to false and configure a transport
            // for the mailer to send real emails.
            'transport' => [
                'class' => 'Swift_SmtpTransport',
                'host' => 'mail.mailer.web.id',
                'username' => 'bcyearbook@mailer.web.id',
                'password' => 'bcyrbk001100',
                'port' => '587',
                'encryption' => 'tls',
            ],
            'viewPath' => '@webroot/mail',
            //'useFileTransport' => true,
        ],
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        'db' => $db,
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'enableStrictParsing' => false,
            'rules' => [
                '<alias:index|contact|about|login|logout>' => 'site/<alias>',
                //'module/<module:\w+>/<controller:\w+>/<action:\w+>' => '<module>/<controller>/<action>',
                //'<c:\w+>/<a:\w+>/<id:\d+>' => '<c>/<a>',
                //'<c:\w+>/<a:\w+>/<id:\d+>-<title:\w+>' => '<c>/<a>',
                //'<c:\w+>/<id:\d+>-<title:\w+>' => '<c>',
                'panel/rbac/user/<id:\d+>' => 'panel/rbac/user/view',
                'panel/yearbook/<id:\d+>' => 'panel/yearbook/view',
                //'yearbook' => 'yearbook/index',
                'yearbook/<id:\d+>' => 'yearbook/detail',
                //'<controller:\w+>/<action:\w+>' => '<controller>/<action>',
                ['pattern' => 'sitemap', 'route' => 'sitemap/index', 'suffix' => '.xml'],
            ],
        ],
        'authManager' => [
            'class' => 'yii\rbac\DbManager', // only support DbManager
        ],
        'devicedetect' => [
            'class' => 'alexandernst\devicedetect\DeviceDetect'
        ],
    ],
    'modules' => [
        'panel' => [
            'class' => 'app\modules\panel\Module',
        ],
        'gridview' =>  [
            'class' => '\kartik\grid\Module'
        ],
        'pdfjs' => [
            'class' => '\yii2assets\pdfjs\Module',
        ],
        'mimin' => [
            'class' => '\hscstudio\mimin\Module',
        ],
        'sitemap' => [
            'class' => 'himiklab\sitemap\Sitemap',
            'models' => [
                // your models
                'app\models\Yearbook',
            ],
            'urls' => [
                // your additional urls
                [
                    'loc' => '/yearbook/index',
                    'changefreq' => \himiklab\sitemap\behaviors\SitemapBehavior::CHANGEFREQ_DAILY,
                    'priority' => 0.8,
                    'news' => [
                        'publication'   => [
                            'name'          => 'BC Yearbook',
                            'language'      => 'en',
                        ],
                        'access'            => 'Subscription',
                        'genres'            => 'Yearbook, Agency',
                        'publication_date'  => 'YYYY-MM-DDThh:mm:ssTZD',
                        'title'             => 'Agency Yearbook Solo Raya',
                        'keywords'          => 'example, keywords, comma-separated',
                        'stock_tickers'     => 'NASDAQ:A, NASDAQ:B',
                    ],
                    'images' => [
                        [
                            'loc'           => 'https://bcyearbook.net/favicon.png',
                            'caption'       => 'Logo BC Yearbook',
                            'geo_location'  => 'Surakarta, Indonesia',
                            'title'         => 'Logo',
                            'license'       => 'https://bcyearbook.net/license',
                        ],
                    ],
                ],
            ],
            'enableGzip' => true, // default is false
            'cacheExpire' => 1, // 1 second. Default is 24 hours
        ],
    ],
    'params' => $params,
];

if (YII_ENV_DEV) {
    // configuration adjustments for 'dev' environment
    $config['bootstrap'][] = 'debug';
    $config['modules']['debug'] = [
        'class' => 'yii\debug\Module',
        // uncomment the following to add your IP if you are not connecting from localhost.
        //'allowedIPs' => ['127.0.0.1', '::1'],
    ];

    $config['bootstrap'][] = 'gii';
    $config['modules']['gii'] = [
        'class' => 'yii\gii\Module',
        // uncomment the following to add your IP if you are not connecting from localhost.
        //'allowedIPs' => ['127.0.0.1', '::1'],
    ];
}

return $config;
