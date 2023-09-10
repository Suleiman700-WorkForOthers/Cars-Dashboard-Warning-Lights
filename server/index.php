<?php

use MongoDB\Driver\Manager;
use MongoDB\Client;

ini_set('display_errors', 1);

header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST');
header("Access-Control-Allow-Headers: X-Requested-With");

require_once "./config/BASE_URL.php";

$isProduction = false;

$baseUrl = $BASE_URLS['DEVELOPMENT'];
if ($isProduction) $baseUrl = $BASE_URLS['PRODUCTION'];

require_once "./config/CONSTANTS.php";
require_once $baseUrl . "/server/config/routes.php";
require_once $baseUrl . "/server/config/ERROR_CODES.php";

require_once CONFIG_ROUTE."/db-config.php";
require_once CONFIG_ROUTE."/ERRORS.php";
require_once CONFIG_ROUTE."/SECRETS.php";

require_once CLASSES_ROUTE.'/Application.php';
require_once CLASSES_ROUTE."/Response.php";
require_once CLASSES_ROUTE."/errors/Errors.php";
require_once CLASSES_ROUTE.'/errors/FatalErrors.php';
require_once CLASSES_ROUTE.'/errors/DBErrors.php';
require_once CLASSES_ROUTE.'/DB.php';
require_once VENDOR_ROUTE.'/autoload.php';

require_once CONTROLLERS_ROUTE."/Controller.php";

require_once MODELS_ROUTE."/Model.php";

// catch fatal errors if enabled
if (CONST_FATAL_ERRORS['CATCH_FATAL_ERRORS']) {
    $errorHandler = new FatalErrors();
    $errorHandler->register();
}

$response = new Response();
$Errors = new Errors();
$DBErrors = new DBErrors();

$app = new Application($_REQUEST['controller'], $_REQUEST['method'], $_REQUEST['params']??[]);
$result = $app->execute();

// echo '<pre>';
// print_r($result);
// echo '</pre>';

$connectionString = "mongodb+srv://mongodb:mongodb@cluster0.ymwoo.mongodb.net/";
try {
    $client = new MongoDB\Client($connectionString);
    echo "Connected to MongoDB successfully!";
} catch (MongoDB\Driver\Exception\Exception $e) {
    echo "Failed to connect to MongoDB: " . $e->getMessage();
}

echo $response->setState($result['state'])->setData($result['data'])->setErrors($result['errors'])->renderToEncode();
