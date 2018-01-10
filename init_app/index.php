<?php
return [
    'path' => 'templates',
    'setWritable' => [
        'runtime',
        'web/assets',
    ],
    'setExecutable' => [
        'yii',
        'yii_test',
    ],
    'setCookieValidationKey' => [
        'config/web.php',
    ],
];