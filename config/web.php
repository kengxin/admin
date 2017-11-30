<?php

$params = require(__DIR__ . '/params.php');
$db = require(__DIR__ . '/db.php');

$config = [
    'id' => 'basic',
    'name' => '微信',
    'timeZone' => 'Asia/Shanghai',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'components' => [
        'request' => [
            // !!! insert a secret key in the following (if it is empty) - this is required by cookie validation
            'cookieValidationKey' => 'Vvx7Did07uwyqWF8LANyIk-vLLKde7Tp',
        ],
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'user' => [
            'class' => 'app\models\WebUser',
            'identityClass' => 'app\models\User',
            'enableAutoLogin' => true,
            'loginUrl'=> '/user/login',
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        'mailer' => [
            'class' => 'yii\swiftmailer\Mailer',
            // send all mails to a file by default. You have to set
            // 'useFileTransport' to false and configure a transport
            // for the mailer to send real emails.
            'useFileTransport' => true,
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
        'view' => [
            'theme' => [
                'pathMap' => [
                    '@app/views' => '@app/themes/adminlte',
                    '@dektrium/user/views' => '@app/views/user',
                ],
            ],
        ],
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'rules' => [

            ]
        ],
        'formatter' => [
            'dateFormat' => 'php:Y-m-d',
            'datetimeFormat' => 'php:Y-m-d H:i:s',
            'currencyCode' => 'CNY',
        ],
        'wechatMessage' => [
            'class' => 'app\components\weChatSendMsg',
            'app_id' => 'wxfc44ce9d5913b4f4',
            'app_secret' => 'Va-WXXUXohQhGFJjsOC65cUFgMA2E84QjwicK6LUlmdj2bksqOSItItv13HGoBJM'
        ]
    ],
    'modules' => [
        'admin' => [
            'class' => 'app\modules\admin\Admin',
        ],
        'api' => [
            'class' => 'app\modules\api\Api',
        ],
        'user' => [
            'class' => 'dektrium\user\Module',
            'admins' => ['admin'],
            'modelMap' => [
                'User' => 'app\models\User',
            ]
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
