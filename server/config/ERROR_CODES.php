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
                'YERAS' => [
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
                'YERAS' => [
                    "NAME" => "Missing years Parameter",
                    "CODE" => "CMCMN.1003",
                    "CAUSE" => "Found out that param is missing from the request.",
                    "FIX" => "Make sure that the param exists in the request data."
                ],
                'IMAGE' => [
                    "NAME" => "Missing image Parameter",
                    "CODE" => "CMCMN.1004",
                    "CAUSE" => "Found out that param is missing from the request.",
                    "FIX" => "Make sure that the param exists in the request data."
                ],
                'CAR_ID' => [
                    "NAME" => "Missing car id Parameter",
                    "CODE" => "CMCMN.1005",
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






    "REPAIRS" => [
        "CREATE" => [
            'MISSING_REQUEST_PARAMS' => [
                'NAME' => [
                    "NAME" => "Missing Name Parameter",
                    "CODE" => "RCMRPN.1001",
                    "CAUSE" => "Found out that param is missing from the request.",
                    "FIX" => "Make sure that the param exists in the request data."
                ],
            ],
            "QUERY_RESULTS" => [
                "FAILED" => [
                    "NAME" => "Failed to delete record",
                    "CODE" => "RDQRF.1001",
                    "CAUSE" => "Found out that the query failed to delete record.",
                    "FIX" => "Check your MySql query syntax."
                ],
            ],
        ],
        "CREATE_TIMELINE_COMMENT" => [
            'MISSING_REQUEST_PARAMS' => [
                'REPAIR_ID' => [
                    "NAME" => "Missing Repair ID Parameter",
                    "CODE" => "RCTCMRPRID.1001",
                    "CAUSE" => "Found out that param is missing from the request.",
                    "FIX" => "Make sure that the param exists in the request data."
                ],
                'COMMENT' => [
                    "NAME" => "Missing Comment Parameter",
                    "CODE" => "RCTCMRPC.1001",
                    "CAUSE" => "Found out that param is missing from the request.",
                    "FIX" => "Make sure that the param exists in the request data."
                ],
            ],
            "QUERY_RESULTS" => [
                "FAILED" => [
                    "NAME" => "Failed to delete record",
                    "CODE" => "RDQRF.1001",
                    "CAUSE" => "Found out that the query failed to delete record.",
                    "FIX" => "Check your MySql query syntax."
                ],
            ],
        ],
        "UPDATE" => [
            'MISSING_REQUEST_PARAMS' => [
                'NAME' => [
                    "NAME" => "Missing Name Parameter",
                    "CODE" => "RUMRPN.1001",
                    "CAUSE" => "Found out that param is missing from the request.",
                    "FIX" => "Make sure that the param exists in the request data."
                ],
            ],
        ],
        "UPDATE_TIMELINE" => [
            'MISSING_REQUEST_PARAMS' => [
                'TIMELINE_ID' => [
                    "NAME" => "Missing Timeline ID Parameter",
                    "CODE" => "RUTMRPN.1001",
                    "CAUSE" => "Found out that param is missing from the request.",
                    "FIX" => "Make sure that the param exists in the request data."
                ],
                'COMMENT' => [
                    "NAME" => "Missing Comment Parameter",
                    "CODE" => "RUTMRPN.1001",
                    "CAUSE" => "Found out that param is missing from the request.",
                    "FIX" => "Make sure that the param exists in the request data."
                ],
            ],
        ],
        "DELETE" => [
            'MISSING_REQUEST_PARAMS' => [
                'ID' => [
                    "NAME" => "Missing ID Parameter",
                    "CODE" => "RDMRPID.1001",
                    "CAUSE" => "Found out that param is missing from the request.",
                    "FIX" => "Make sure that the param exists in the request data."
                ],
            ],
            "QUERY_RESULTS" => [
                "FAILED" => [
                    "NAME" => "Failed to delete record",
                    "CODE" => "RDQRF.1001",
                    "CAUSE" => "Found out that the query failed to delete record.",
                    "FIX" => "Check your MySql query syntax."
                ],
            ],
        ],
        "DELETE_TIMELINE" => [
            'MISSING_REQUEST_PARAMS' => [
                'TIMELINE_ID' => [
                    "NAME" => "Missing Timeline ID Parameter",
                    "CODE" => "RDTMRPID.1001",
                    "CAUSE" => "Found out that param is missing from the request.",
                    "FIX" => "Make sure that the param exists in the request data."
                ],
            ],
            "QUERY_RESULTS" => [
                "FAILED" => [
                    "NAME" => "Failed to delete record",
                    "CODE" => "RDQRF.1001",
                    "CAUSE" => "Found out that the query failed to delete record.",
                    "FIX" => "Check your MySql query syntax."
                ],
            ],
        ],
        "GET" => array(
            'MISSING_REQUEST_PARAMS' => [
                'ID' => [
                    "NAME" => "Missing ID Parameter",
                    "CODE" => "RGMRPID.1001",
                    "CAUSE" => "Found out that param is missing from the request.",
                    "FIX" => "Make sure that the param exists in the request data."
                ],
            ],
            'RESULTS' => [
                "NO_RESULTS" => array(
                    "NAME" => "No results found",
                    "CODE" => "RGRNF.1001",
                    "CAUSE" => "No data found in database.",
                    "FIX" => "Check if data exists in the database."
                ),
            ],
        ),
        "GET_TIMELINE" => array(
            'MISSING_REQUEST_PARAMS' => [
                'REPAIR_ID' => [
                    "NAME" => "Missing Repair ID Parameter",
                    "CODE" => "RGTMRPID.1001",
                    "CAUSE" => "Found out that param is missing from the request.",
                    "FIX" => "Make sure that the param exists in the request data."
                ],
            ],
            'RESULTS' => [
                "NO_RESULTS" => array(
                    "NAME" => "No repairs timeline found",
                    "CODE" => "RGTRNF.1001",
                    "CAUSE" => "No data found in database.",
                    "FIX" => "Check if data exists in the database."
                ),
            ],
        ),
        "GET_DATA" => array(
            'MISSING_REQUEST_PARAMS' => [
                'REPAIR_ID' => [
                    "NAME" => "Missing Repair ID Parameter",
                    "CODE" => "RGDMRPID.1001",
                    "CAUSE" => "Found out that param is missing from the request.",
                    "FIX" => "Make sure that the param exists in the request data."
                ],
            ],
            'RESULTS' => [
                "NO_RESULTS" => array(
                    "NAME" => "No repairs timeline found",
                    "CODE" => "RGTRNF.1001",
                    "CAUSE" => "No data found in database.",
                    "FIX" => "Check if data exists in the database."
                ),
            ],
        ),
    ],
    "QUOTES" => [
        "UPDATE" => [
            "MISSING_REQUEST_PARAMS" => [
                'QUOTE_ID' => [
                    "NAME" => "Missing Repair ID Parameter",
                    "CODE" => "QUMRPQID.1001",
                    "CAUSE" => "Found out that param is missing from the request.",
                    "FIX" => "Make sure that the param exists in the request data."
                ],
            ],
        ],
        "DELETE" => [
            'MISSING_REQUEST_PARAMS' => [
                'QUOTE_ID' => [
                    "NAME" => "Missing ID Parameter",
                    "CODE" => "QDMRPQID.1001",
                    "CAUSE" => "Found out that param is missing from the request.",
                    "FIX" => "Make sure that the param exists in the request data."
                ],
            ],
            "QUERY_RESULTS" => [
                "FAILED" => [
                    "NAME" => "Failed to delete record",
                    "CODE" => "QDQRF.1001",
                    "CAUSE" => "Found out that the query failed to delete record.",
                    "FIX" => "Check your MySql query syntax."
                ],
            ],
        ],
        "GET" => [
            'MISSING_REQUEST_PARAMS' => [
                'QUOTE_ID' => [
                    "NAME" => "Missing Quote ID Parameter",
                    "CODE" => "QGMRPQID.1001",
                    "CAUSE" => "Found out that param is missing from the request.",
                    "FIX" => "Make sure that the param exists in the request data."
                ],
            ],
            "RESULTS" => [
                "NO_RESULTS" => [
                    "NAME" => "No repair quotes results found",
                    "CODE" => "QGRNR.1001",
                    "CAUSE" => "No data found in database.",
                    "FIX" => "Check if data exists in the database."
                ],
            ],
        ],
        "GET_REPAIR_QUOTES" => [
            'MISSING_REQUEST_PARAMS' => [
                'REPAIR_ID' => [
                    "NAME" => "Missing Repair ID Parameter",
                    "CODE" => "QRPQMRPRID.1001",
                    "CAUSE" => "Found out that param is missing from the request.",
                    "FIX" => "Make sure that the param exists in the request data."
                ],
                'QUOTE_ID' => [
                    "NAME" => "Missing Quote ID Parameter",
                    "CODE" => "QGR1001",
                    "CAUSE" => "Found out that param is missing from the request.",
                    "FIX" => "Make sure that the param exists in the request data."
                ],
            ],
            "RESULTS" => [
                "NO_RESULTS" => [
                    "NAME" => "No repair quotes results found",
                    "CODE" => "QGRQRNR.1001",
                    "CAUSE" => "No data found in database.",
                    "FIX" => "Check if data exists in the database."
                ],
            ],
        ],
    ],
    "PAYMENTS" => [
        "CREATE" => [
            "QUERY_RESULTS" => [
                "FAILED" => [
                    "NAME" => "Failed to delete record",
                    "CODE" => "RDQRF.1001",
                    "CAUSE" => "Found out that the query failed to delete record.",
                    "FIX" => "Check your MySql query syntax."
                ],
            ],
        ],
        "GET" => [
            'MISSING_REQUEST_PARAMS' => [
                'QUOTE_ID' => [
                    "NAME" => "Missing Quote ID Parameter",
                    "CODE" => "QGMRPQID.1001",
                    "CAUSE" => "Found out that param is missing from the request.",
                    "FIX" => "Make sure that the param exists in the request data."
                ],
            ],
            "RESULTS" => [
                "NO_RESULTS" => [
                    "NAME" => "No repair quotes results found",
                    "CODE" => "PGRNR.1001",
                    "CAUSE" => "No data found in database.",
                    "FIX" => "Check if data exists in the database."
                ],
            ],
        ],
        "UPDATE" => [
            "MISSING_REQUEST_PARAMS" => [
                'PAYMENT_ID' => [
                    "NAME" => "Missing Payment ID Parameter",
                    "CODE" => "PUMRPPID.1001",
                    "CAUSE" => "Found out that param is missing from the request.",
                    "FIX" => "Make sure that the param exists in the request data."
                ],
            ],
        ],
        "DELETE" => [
            'MISSING_REQUEST_PARAMS' => [
                'PAYMENT_ID' => [
                    "NAME" => "Missing ID Parameter",
                    "CODE" => "PDMRPPID.1001",
                    "CAUSE" => "Found out that param is missing from the request.",
                    "FIX" => "Make sure that the param exists in the request data."
                ],
            ],
            "QUERY_RESULTS" => [
                "FAILED" => [
                    "NAME" => "Failed to delete record",
                    "CODE" => "QDQRF.1001",
                    "CAUSE" => "Found out that the query failed to delete record.",
                    "FIX" => "Check your MySql query syntax."
                ],
            ],
        ],
    ],
    "WORKLOG" => [
        "GET" => array(
            'MISSING_REQUEST_PARAMS' => [
                'ID' => [
                    "NAME" => "Missing ID Parameter",
                    "CODE" => "WGMRPID.1001",
                    "CAUSE" => "Found out that param is missing from the request.",
                    "FIX" => "Make sure that the param exists in the request data."
                ],
            ],
            'RESULTS' => [
                "NO_RESULTS" => array(
                    "NAME" => "No results found",
                    "CODE" => "WGRNF.1001",
                    "CAUSE" => "No data found in database.",
                    "FIX" => "Check if data exists in the database."
                ),
            ],
        ),
        "UPDATE" => [
            'MISSING_REQUEST_PARAMS' => [
                'REPAIR_ID' => [
                    "NAME" => "Missing Repair ID Parameter",
                    "CODE" => "WUMRPN.1001",
                    "CAUSE" => "Found out that param is missing from the request.",
                    "FIX" => "Make sure that the param exists in the request data."
                ],
                'PERSON_ID' => [
                    "NAME" => "Missing Person ID Parameter",
                    "CODE" => "WUMRPN.1001",
                    "CAUSE" => "Found out that param is missing from the request.",
                    "FIX" => "Make sure that the param exists in the request data."
                ],
            ],
        ],
        "UPDATE_IS_PAID" => [
            'MISSING_REQUEST_PARAMS' => [
                'ID' => [
                    "NAME" => "Missing ID Parameter",
                    "CODE" => "WUMID.1001",
                    "CAUSE" => "Found out that param is missing from the request.",
                    "FIX" => "Make sure that the param exists in the request data."
                ],
            ],
        ],
        "DELETE" => [
            'MISSING_REQUEST_PARAMS' => [
                'ID' => [
                    "NAME" => "Missing ID Parameter",
                    "CODE" => "RDMRPID.1001",
                    "CAUSE" => "Found out that param is missing from the request.",
                    "FIX" => "Make sure that the param exists in the request data."
                ],
            ],
            "QUERY_RESULTS" => [
                "FAILED" => [
                    "NAME" => "Failed to delete record",
                    "CODE" => "RDQRF.1001",
                    "CAUSE" => "Found out that the query failed to delete record.",
                    "FIX" => "Check your MySql query syntax."
                ],
            ],
        ],
        "CREATE" => [
            'MISSING_REQUEST_PARAMS' => [
                'REPAIR_ID' => [
                    "NAME" => "Missing Repair ID Parameter",
                    "CODE" => "WUMRPN.1001",
                    "CAUSE" => "Found out that param is missing from the request.",
                    "FIX" => "Make sure that the param exists in the request data."
                ],
                'PERSON_ID' => [
                    "NAME" => "Missing Person ID Parameter",
                    "CODE" => "WUMRPN.1001",
                    "CAUSE" => "Found out that param is missing from the request.",
                    "FIX" => "Make sure that the param exists in the request data."
                ],
                ],
            "QUERY_RESULTS" => [
                "FAILED" => [
                    "NAME" => "Failed to create record",
                    "CODE" => "WDQRF.1001",
                    "CAUSE" => "Found out that the query failed to delete record.",
                    "FIX" => "Check your MySql query syntax."
                ],
            ],
        ],
    ],
    "DEBTS" => [
        "GET" => array(
            'MISSING_REQUEST_PARAMS' => [
                'PERSON_ID' => [
                    "NAME" => "Missing Person ID Parameter",
                    "CODE" => "DGMRPPID.1001",
                    "CAUSE" => "Found out that param is missing from the request.",
                    "FIX" => "Make sure that the param exists in the request data."
                ],
            ],
            'RESULTS' => [
                "NO_RESULTS" => array(
                    "NAME" => "No results found",
                    "CODE" => "DGRNF.1001",
                    "CAUSE" => "No data found in database.",
                    "FIX" => "Check if data exists in the database."
                ),
                "NOT_PERSON_FOUND" => array(
                    "NAME" => "No person found",
                    "CODE" => "DGRNPF.1002",
                    "CAUSE" => "No person found in database.",
                    "FIX" => "Check if person exists in the database."
                ),
            ],
        ),
        "UPDATE" => [
            'MISSING_REQUEST_PARAMS' => [
                'ID' => [
                    "NAME" => "Missing ID Parameter",
                    "CODE" => "DUMRPN.1001",
                    "CAUSE" => "Found out that param is missing from the request.",
                    "FIX" => "Make sure that the param exists in the request data."
                ],
                'PERSON_ID' => [
                    "NAME" => "Missing Person ID Parameter",
                    "CODE" => "DUMRPN.1001",
                    "CAUSE" => "Found out that param is missing from the request.",
                    "FIX" => "Make sure that the param exists in the request data."
                ],
            ],
        ],
        "DELETE" => [
            'MISSING_REQUEST_PARAMS' => [
                'ID' => [
                    "NAME" => "Missing ID Parameter",
                    "CODE" => "DDMRPID.1001",
                    "CAUSE" => "Found out that param is missing from the request.",
                    "FIX" => "Make sure that the param exists in the request data."
                ],
            ],
            "QUERY_RESULTS" => [
                "FAILED" => [
                    "NAME" => "Failed to delete record",
                    "CODE" => "DDQRF.1001",
                    "CAUSE" => "Found out that the query failed to delete record.",
                    "FIX" => "Check your MySql query syntax."
                ],
            ],
        ],
        "CREATE" => [
            'MISSING_REQUEST_PARAMS' => [
                'PERSON_ID' => [
                    "NAME" => "Missing Person ID Parameter",
                    "CODE" => "DUMRPN.1001",
                    "CAUSE" => "Found out that param is missing from the request.",
                    "FIX" => "Make sure that the param exists in the request data."
                ],
                ],
            "QUERY_RESULTS" => [
                "FAILED" => [
                    "NAME" => "Failed to create record",
                    "CODE" => "DDQRF.1001",
                    "CAUSE" => "Found out that the query failed to delete record.",
                    "FIX" => "Check your MySql query syntax."
                ],
            ],
        ],
        "GET_TIMELINE" => array(
            'MISSING_REQUEST_PARAMS' => [
                'PERSON_ID' => [
                    "NAME" => "Missing Person ID Parameter",
                    "CODE" => "DGTMRPID.1001",
                    "CAUSE" => "Found out that param is missing from the request.",
                    "FIX" => "Make sure that the param exists in the request data."
                ],
            ],
            'RESULTS' => [
                "NO_RESULTS" => array(
                    "NAME" => "No repairs timeline found",
                    "CODE" => "RGTRNF.1001",
                    "CAUSE" => "No data found in database.",
                    "FIX" => "Check if data exists in the database."
                ),
            ],
        ),
        "UPDATE_TIMELINE" => [
            'MISSING_REQUEST_PARAMS' => [
                'TIMELINE_ID' => [
                    "NAME" => "Missing Timeline ID Parameter",
                    "CODE" => "DUTMRPN.1001",
                    "CAUSE" => "Found out that param is missing from the request.",
                    "FIX" => "Make sure that the param exists in the request data."
                ],
                'COMMENT' => [
                    "NAME" => "Missing Comment Parameter",
                    "CODE" => "DUTMRPN.1001",
                    "CAUSE" => "Found out that param is missing from the request.",
                    "FIX" => "Make sure that the param exists in the request data."
                ],
            ],
        ],
        "DELETE_TIMELINE" => [
            'MISSING_REQUEST_PARAMS' => [
                'TIMELINE_ID' => [
                    "NAME" => "Missing Timeline ID Parameter",
                    "CODE" => "DDTMRPID.1001",
                    "CAUSE" => "Found out that param is missing from the request.",
                    "FIX" => "Make sure that the param exists in the request data."
                ],
            ],
            "QUERY_RESULTS" => [
                "FAILED" => [
                    "NAME" => "Failed to delete record",
                    "CODE" => "RDQRF.1001",
                    "CAUSE" => "Found out that the query failed to delete record.",
                    "FIX" => "Check your MySql query syntax."
                ],
            ],
        ],
        "CREATE_TIMELINE_COMMENT" => [
            'MISSING_REQUEST_PARAMS' => [
                'PERSON_ID' => [
                    "NAME" => "Missing Person ID Parameter",
                    "CODE" => "DCTCMRPPID.1001",
                    "CAUSE" => "Found out that param is missing from the request.",
                    "FIX" => "Make sure that the param exists in the request data."
                ],
                'COMMENT' => [
                    "NAME" => "Missing Comment Parameter",
                    "CODE" => "DCTCMRPC.1001",
                    "CAUSE" => "Found out that param is missing from the request.",
                    "FIX" => "Make sure that the param exists in the request data."
                ],
            ],
            "QUERY_RESULTS" => [
                "FAILED" => [
                    "NAME" => "Failed to delete record",
                    "CODE" => "DDQRF.1001",
                    "CAUSE" => "Found out that the query failed to delete record.",
                    "FIX" => "Check your MySql query syntax."
                ],
            ],
        ],
    ],
    "SAVING" => [
        "GET" => [
            "MISSING_REQUEST_PARAMS" => [
                'ID' => [
                    "NAME" => "Missing ID Parameter",
                    "CODE" => "SGMID.1001",
                    "CAUSE" => "Found out that param is missing from the request.",
                    "FIX" => "Make sure that the param exists in the request data."
                ],
            ],
            "RESULTS" => [
                "NO_RESULTS" => array(
                    "NAME" => "No results found",
                    "CODE" => "SGRN.1001",
                    "CAUSE" => "No data found in database.",
                    "FIX" => "Check if data exists in the database."
                ),
            ],
        ],
        "UPDATE" => [
            'MISSING_REQUEST_PARAMS' => [
                'ID' => [
                    "NAME" => "Missing ID Parameter",
                    "CODE" => "SUMID.1001",
                    "CAUSE" => "Found out that param is missing from the request.",
                    "FIX" => "Make sure that the param exists in the request data."
                ],
            ],
        ],
        "DELETE" => [
            'MISSING_REQUEST_PARAMS' => [
                'ID' => [
                    "NAME" => "Missing ID Parameter",
                    "CODE" => "SDMID.1001",
                    "CAUSE" => "Found out that param is missing from the request.",
                    "FIX" => "Make sure that the param exists in the request data."
                ],
            ],
            "QUERY_RESULTS" => [
                "FAILED" => [
                    "NAME" => "Failed to delete record",
                    "CODE" => "SDQRF.1001",
                    "CAUSE" => "Found out that the query failed to delete record.",
                    "FIX" => "Check your MySql query syntax."
                ],
            ],
        ],
        "CREATE" => [
            'MISSING_REQUEST_PARAMS' => [
                'NAME' => [
                    "NAME" => "Missing Name Parameter",
                    "CODE" => "SCMRPN.1001",
                    "CAUSE" => "Found out that param is missing from the request.",
                    "FIX" => "Make sure that the param exists in the request data."
                ],
            ],
            "QUERY_RESULTS" => [
                "FAILED" => [
                    "NAME" => "Failed to delete record",
                    "CODE" => "SDQRF.1001",
                    "CAUSE" => "Found out that the query failed to delete record.",
                    "FIX" => "Check your MySql query syntax."
                ],
            ],
        ],
    ],
];
