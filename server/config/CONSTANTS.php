<?php

global $baseUrl;
$CONSTANTS = [
    'APP_NAME' => 'CDWL',
    'APP_FULL_NAME' => 'Car Dashboard Warning Lights',
    'DEBUG' => false,
    'BASE_PATH' => $_SERVER['DOCUMENT_ROOT'],
    'SYS_CONTROLLERS' => [
        'Cars_Controller',
        'Login_Controller',
    ],
    'SYS_MODELS' => [
        'Cars_Model',
        'SubCars_Model',
        'AdminLogin_Model',
    ],
];

$CONSTANTS['BASE_PATH'] = $baseUrl;
