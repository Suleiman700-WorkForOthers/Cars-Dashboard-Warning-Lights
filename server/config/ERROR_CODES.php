<?php

$ERROR_CODES = [
    "CARS" => [
        "GET" => [
            'MISSING_REQUEST_PARAMS' => [
                'ID' => [
                    "NAME" => "Missing ID Parameter",
                    "CODE" => "CGMI.1001",
                    "CAUSE" => "Found out that param is missing from the request.",
                    "FIX" => "Make sure that the param exists in the request data."
                ],
            ],
            'RESULTS' => [
                "NO_RESULTS" => array(
                    "NAME" => "No results found",
                    "CODE" => "CGRN.1001",
                    "CAUSE" => "No data found in database.",
                    "FIX" => "Check if data exists in the database."
                ),
            ],
            'INVALID_DATA_TYPES' => [
                'OBJECT_ID' => [
                    "NAME" => "Invalid data type",
                    "CODE" => "CGI.1001",
                    "CAUSE" => "Found out that the data type if invalid.",
                    "FIX" => "Check the value data type and try again."
                ],
            ],
        ],
        "UPDATE" => [
            'MISSING_REQUEST_PARAMS' => [
                'ID' => [
                    "NAME" => "Missing ID Parameter",
                    "CODE" => "CUMI.1001",
                    "CAUSE" => "Found out that param is missing from the request.",
                    "FIX" => "Make sure that the param exists in the request data."
                ],
                'MANUFACTURER' => [
                    "NAME" => "Missing manufacturer Parameter",
                    "CODE" => "CUMM.1001",
                    "CAUSE" => "Found out that param is missing from the request.",
                    "FIX" => "Make sure that the param exists in the request data."
                ],
                'LOGO' => [
                    "NAME" => "Missing logo Parameter",
                    "CODE" => "CUML.1002",
                    "CAUSE" => "Found out that param is missing from the request.",
                    "FIX" => "Make sure that the param exists in the request data."
                ],
            ],
            'INVALID_DATA_TYPES' => [
                'OBJECT_ID' => [
                    "NAME" => "Invalid data type",
                    "CODE" => "CUIO.1001",
                    "CAUSE" => "Found out that the data type if invalid.",
                    "FIX" => "Check the value data type and try again."
                ],
            ],
            "FAILED_TO_UPDATE" => [
                "NAME" => "Failed to update record",
                "CODE" => "CUF.1001",
                "CAUSE" => "Failed to update record data.",
                "FIX" => "Check your parameters and values."
            ],
        ],
        "DELETE" => [
            'MISSING_REQUEST_PARAMS' => [
                'ID' => [
                    "NAME" => "Missing ID Parameter",
                    "CODE" => "CDMI.1001",
                    "CAUSE" => "Found out that param is missing from the request.",
                    "FIX" => "Make sure that the param exists in the request data."
                ],
            ],
            "FAILED_TO_DELETE" => [
                "NAME" => "Failed to delete record",
                "CODE" => "CDF.1001",
                "CAUSE" => "Found out that the server failed to delete record.",
                "FIX" => "Check parameters and values."
            ],
        ],
        "CREATE" => [
            'MISSING_REQUEST_PARAMS' => [
                'MANUFACTURER' => [
                    "NAME" => "Missing manufacturer parameter",
                    "CODE" => "CCMM.1001",
                    "CAUSE" => "Found out that param is missing from the request.",
                    "FIX" => "Make sure that the param exists in the request data."
                ],
                'LOGO' => [
                    "NAME" => "Missing logo parameter",
                    "CODE" => "CCML.1002",
                    "CAUSE" => "Found out that param is missing from the request.",
                    "FIX" => "Make sure that the param exists in the request data."
                ],
            ],
            "QUERY_RESULTS" => [
                "FAILED" => [
                    "NAME" => "Failed to delete record",
                    "CODE" => "PDQRF.1001",
                    "CAUSE" => "Found out that the query failed to delete record.",
                    "FIX" => "Check your MySql query syntax."
                ],
            ],
        ],
    ],
    "CARS_MODELS" => [
        "GET" => [
            'RESULTS' => [
                "NO_RESULTS" => [
                    "NAME" => "No results found",
                    "CODE" => "SGRN.1001",
                    "CAUSE" => "No data found in database.",
                    "FIX" => "Check if data exists in the database."
                ],
            ],
        ],
        "UPDATE" => [
            'MISSING_REQUEST_PARAMS' => [
                'ID' => [
                    "NAME" => "Missing ID Parameter",
                    "CODE" => "CMUMI.1001",
                    "CAUSE" => "Found out that param is missing from the request.",
                    "FIX" => "Make sure that the param exists in the request data."
                ],
                'NAME' => [
                    "NAME" => "Missing name Parameter",
                    "CODE" => "CMUMN.1002",
                    "CAUSE" => "Found out that param is missing from the request.",
                    "FIX" => "Make sure that the param exists in the request data."
                ],
                'YEARS' => [
                    "NAME" => "Missing years Parameter",
                    "CODE" => "CMUMY.1003",
                    "CAUSE" => "Found out that param is missing from the request.",
                    "FIX" => "Make sure that the param exists in the request data."
                ],
                'IMAGE' => [
                    "NAME" => "Missing image Parameter",
                    "CODE" => "CMUMI.1004",
                    "CAUSE" => "Found out that param is missing from the request.",
                    "FIX" => "Make sure that the param exists in the request data."
                ],
                'CAR_ID' => [
                    "NAME" => "Missing car id Parameter",
                    "CODE" => "CMUMC.1005",
                    "CAUSE" => "Found out that param is missing from the request.",
                    "FIX" => "Make sure that the param exists in the request data."
                ],
                'DESCRIPTION' => [
                    "NAME" => "Missing description Parameter",
                    "CODE" => "CMUMD.1006",
                    "CAUSE" => "Found out that param is missing from the request.",
                    "FIX" => "Make sure that the param exists in the request data."
                ],
            ],
            'INVALID_DATA_TYPES' => [
                'OBJECT_ID' => [
                    "NAME" => "Invalid data type",
                    "CODE" => "CMUIO.1001",
                    "CAUSE" => "Found out that the data type if invalid.",
                    "FIX" => "Check the value data type and try again."
                ],
            ],
            "FAILED_TO_UPDATE" => [
                "NAME" => "Failed to update record",
                "CODE" => "CMUF.1001",
                "CAUSE" => "Failed to update record data.",
                "FIX" => "Check your parameters and values."
            ],
        ],
        "CREATE" => [
            'MISSING_REQUEST_PARAMS' => [
                'NAME' => [
                    "NAME" => "Missing name Parameter",
                    "CODE" => "CMCMN.1002",
                    "CAUSE" => "Found out that param is missing from the request.",
                    "FIX" => "Make sure that the param exists in the request data."
                ],
                'YEARS' => [
                    "NAME" => "Missing years Parameter",
                    "CODE" => "CMCMY.1003",
                    "CAUSE" => "Found out that param is missing from the request.",
                    "FIX" => "Make sure that the param exists in the request data."
                ],
                'IMAGE' => [
                    "NAME" => "Missing image Parameter",
                    "CODE" => "CMCMI.1004",
                    "CAUSE" => "Found out that param is missing from the request.",
                    "FIX" => "Make sure that the param exists in the request data."
                ],
                'CAR_ID' => [
                    "NAME" => "Missing car id Parameter",
                    "CODE" => "CMCMC.1005",
                    "CAUSE" => "Found out that param is missing from the request.",
                    "FIX" => "Make sure that the param exists in the request data."
                ],
                'DESCRIPTION' => [
                    "NAME" => "Missing description Parameter",
                    "CODE" => "CMCMD.1006",
                    "CAUSE" => "Found out that param is missing from the request.",
                    "FIX" => "Make sure that the param exists in the request data."
                ],
            ],
            'INVALID_DATA_TYPES' => [
                'OBJECT_ID' => [
                    "NAME" => "Invalid data type",
                    "CODE" => "CMUIO.1001",
                    "CAUSE" => "Found out that the data type if invalid.",
                    "FIX" => "Check the value data type and try again."
                ],
            ],
            "FAILED_TO_UPDATE" => [
                "NAME" => "Failed to update record",
                "CODE" => "CMUF.1001",
                "CAUSE" => "Failed to update record data.",
                "FIX" => "Check your parameters and values."
            ],
        ],
        "DELETE" => [
            'MISSING_REQUEST_PARAMS' => [
                'ID' => [
                    "NAME" => "Missing ID Parameter",
                    "CODE" => "CMDMI.1001",
                    "CAUSE" => "Found out that param is missing from the request.",
                    "FIX" => "Make sure that the param exists in the request data."
                ],
            ],
            "FAILED_TO_DELETE" => [
                "NAME" => "Failed to delete record",
                "CODE" => "CMDF.1001",
                "CAUSE" => "Found out that the server failed to delete record.",
                "FIX" => "Check parameters and values."
            ],
        ],
    ],
    "WARNING_LIGHTS" => [
        "UPDATE" => [
            'MISSING_REQUEST_PARAMS' => [
                'ID' => [
                    "NAME" => "Missing ID Parameter",
                    "CODE" => "WUMI.1001",
                    "CAUSE" => "Found out that param is missing from the request.",
                    "FIX" => "Make sure that the param exists in the request data."
                ],
                'NAME' => [
                    "NAME" => "Missing name Parameter",
                    "CODE" => "CMUMN.1002",
                    "CAUSE" => "Found out that param is missing from the request.",
                    "FIX" => "Make sure that the param exists in the request data."
                ],
                'CAR_ID' => [
                    "NAME" => "Missing car id Parameter",
                    "CODE" => "WUMCI.1003",
                    "CAUSE" => "Found out that param is missing from the request.",
                    "FIX" => "Make sure that the param exists in the request data."
                ],
                'CAR_MODEL_ID' => [
                    "NAME" => "Missing car model id Parameter",
                    "CODE" => "WUMCMI.1003",
                    "CAUSE" => "Found out that param is missing from the request.",
                    "FIX" => "Make sure that the param exists in the request data."
                ],
                'IMAGE' => [
                    "NAME" => "Missing image Parameter",
                    "CODE" => "CMUMI.1004",
                    "CAUSE" => "Found out that param is missing from the request.",
                    "FIX" => "Make sure that the param exists in the request data."
                ],
                'DESCRIPTION' => [
                    "NAME" => "Missing description Parameter",
                    "CODE" => "CMUMD.1005",
                    "CAUSE" => "Found out that param is missing from the request.",
                    "FIX" => "Make sure that the param exists in the request data."
                ],
                'CAR_MODEL_ID' => [
                    "NAME" => "Missing car model id Parameter",
                    "CODE" => "CMUMC.1006",
                    "CAUSE" => "Found out that param is missing from the request.",
                    "FIX" => "Make sure that the param exists in the request data."
                ],
            ],
            'INVALID_DATA_TYPES' => [
                'OBJECT_ID' => [
                    "NAME" => "Invalid data type",
                    "CODE" => "WUIO.1001",
                    "CAUSE" => "Found out that the data type if invalid.",
                    "FIX" => "Check the value data type and try again."
                ],
            ],
            "FAILED_TO_UPDATE" => [
                "NAME" => "Failed to update record",
                "CODE" => "WUF.1001",
                "CAUSE" => "Failed to update record data.",
                "FIX" => "Check your parameters and values."
            ],
        ],
        "GET" => [
            'RESULTS' => [
                "NO_RESULTS" => [
                    "NAME" => "No results found",
                    "CODE" => "WGRN.1001",
                    "CAUSE" => "No data found in database.",
                    "FIX" => "Check if data exists in the database."
                ],
            ],
        ],
    ],
    "ADMIN_LOGIN" => [
        'MISSING_REQUEST_PARAMS' => [
            'EMAIL' => [
                "NAME" => "Missing email Parameter",
                "CODE" => "AME.1001",
                "CAUSE" => "Found out that param is missing from the request.",
                "FIX" => "Make sure that the param exists in the request data."
            ],
            'PASSWORD' => [
                "NAME" => "Missing email Parameter",
                "CODE" => "AME.1002",
                "CAUSE" => "Found out that param is missing from the request.",
                "FIX" => "Make sure that the param exists in the request data."
            ],
        ],
        'RESULTS' => [
            "USER_NOT_FOUND" => [
                "NAME" => "User not found",
                "CODE" => "ARU.1001",
                "CAUSE" => "User not found in database.",
                "FIX" => "Check if user exists in the database."
            ],
            "INVALID_PASSWORD" => [
                "NAME" => "Invalid password",
                "CODE" => "ARI.1002",
                "CAUSE" => "Failed to verify password hash.",
                "FIX" => "Check if provided password matches the hashed password."
            ],
        ],
    ],
    "APPLICATION" => [
        "CONTROLLER" => [
            "NOT_FOUND" => [
                "NAME" => "Controller does not exist",
                "CODE" => "ACN.1001",
                "CAUSE" => "Found out that the controller does not exists.",
                "FIX" => "Make sure that controller file exists and using correct name."
            ],
        ],
        "MODEL" => [
            "NOT_FOUND" => [
                "NAME" => "Model does not exist",
                "CODE" => "AMN.1001",
                "CAUSE" => "Found out that the model does not exists.",
                "FIX" => "Make sure that model file exists and using correct name."
            ],
        ],
        "METHOD" => [
            "NOT_FOUND" => [
                "NAME" => "Method does not exist",
                "CODE" => "AMDN.1001",
                "CAUSE" => "Found out that the method does not exists.",
                "FIX" => "Make sure that method file exists and using correct name."
            ],
        ],
    ],
];
