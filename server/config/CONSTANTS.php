<?php

global $baseUrl;
$CONSTANTS = [
    'APP_NAME' => 'CDWL',
    'APP_FULL_NAME' => 'Car Dashboard Warning Lights',
    'DEBUG' => false,
    'BASE_PATH' => $_SERVER['DOCUMENT_ROOT'],
    'SYS_CONTROLLERS' => [
        'Cars_Controller'
    ],
    'SYS_MODELS' => [
        // model class name (actual class name) => some data for later use
        'Cars_Model' => [
            'className' => 'Cars_Model',
        ],
        'WorkersWorkHours_Model' => [
            'className' => 'WorkersWorkHours_Model',
        ],
        'Repairs_Model' => [
            'className' => 'Repairs_Model',
        ],
        'RepairsQuotes_Model' => [
            'className' => 'RepairsQuotes_Model',
        ],
        'RepairsTimeline_Model' => [
            'className' => 'RepairsTimeline_Model',
        ],
        'Payments_Model' => [
            'className' => 'Payments_Model',
        ],
        'WorkLog_Model' => [
            'className' => 'WorkLog_Model',
        ],
        'Debts_Model' => [
            'className' => 'Debts_Model',
        ],
        'DebtsTimeline_Model' => [
            'className' => 'DebtsTimeline_Model',
        ],
        'Saving_Model' => [
            'className' => 'Saving_Model',
        ],
    ],
];

$CONSTANTS['BASE_PATH'] = $baseUrl;
