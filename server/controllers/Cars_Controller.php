<?php

class Cars_Controller extends Controller
{
    public function __construct($_params)
    {
        $this->params = $_params;
    }

    /**
     * get all records from DB
     */
    function getAllRecords()
    {
//        $_params = [
//            'logo' => 'Renault',
//        ];
//        $array_search = [
//            'name' => ['s'],
//        ];
//        $data = $this->model->filter($_params, $array_search);
//
//        // Extract the result into an array
//        $result = iterator_to_array($data);
//
//        // Output the result
//        echo '<pre>';
//        print_r($result[0]['name']);
//        echo '</pre>';

        $this->setModel('Cars_Model');
        $records = $this->model->getAllRecords();

        // check for errors
        if (empty($records->errors)) {
            $this->state = true;
            $this->data = $records;
        }
        else {
            $this->state = false;
        }

        return $this;
    }

    /**
     * get all cars sub models
     */
    function getAllSubModels()
    {
        $this->setModel('Cars_Models_Model');
        $records = $this->model->getAllRecords();

        // check for errors
        if (empty($records->errors)) {
            $this->state = true;
            $this->data = $records;
        }
        else {
            $this->state = false;
        }

        return $this;
    }


    /**
     * Get record by id
     * Example of id: 64fee803195efc210d79b0b4
     */
    function getRecordById()
    {
        global $Errors, $ERROR_CODES;

        // Check passed id
        if (!isset($this->params['id']) || empty($this->params['id'])) {
            // store error
            $errorText = $ERROR_CODES['CARS']['GET']['MISSING_REQUEST_PARAMS']['ID']['NAME'];
            $errorCode = $ERROR_CODES['CARS']['GET']['MISSING_REQUEST_PARAMS']['ID']['CODE'];
            $this->errors[] = $Errors->setErrorText($errorText)->setErrorCode($errorCode)->setErrorVariable('id')->setErrorDetails('id parameter is required')->gen();
            $this->state = false;
            return $this;
        }

        // Validate correct object id
        $validator = new ValidateMongoObjectId($this->params['id']);
        $validator->validate();
        if (!$validator->state) {
            // store error
            $errorText = $ERROR_CODES['CARS']['GET']['INVALID_DATA_TYPES']['OBJECT_ID']['NAME'];
            $errorCode = $ERROR_CODES['CARS']['GET']['INVALID_DATA_TYPES']['OBJECT_ID']['CODE'];
            $this->errors[] = $Errors->setErrorText($errorText)->setErrorCode($errorCode)->setErrorVariable('id')->setErrorDetails('id parameter is required')->gen();
            $this->state = false;
            return $this;
        }

        $this->setModel('Cars_Model');
        $record = $this->model->getRecordById($this->params['id']);

        if (empty($record)) {
            // store error
            $errorText = $ERROR_CODES['CARS']['GET']['RESULTS']['NO_RESULTS']['NAME'];
            $errorCode = $ERROR_CODES['CARS']['GET']['RESULTS']['NO_RESULTS']['CODE'];
            $this->errors[] = $Errors->setErrorText($errorText)->setErrorCode($errorCode)->setErrorVariable('id')->setErrorDetails('no results found for this id')->gen();
            $this->state = false;
            return $this;
        }
        else {
            $this->state = true;
            $this->data = $record;
            return $this;
        }

    }

    function updateRecordData()
    {
        global $Errors, $ERROR_CODES;

        // Check passed id
        if (!isset($this->params['id']) || empty($this->params['id'])) {
            // store error
            $errorText = $ERROR_CODES['CARS']['UPDATE']['MISSING_REQUEST_PARAMS']['ID']['NAME'];
            $errorCode = $ERROR_CODES['CARS']['UPDATE']['MISSING_REQUEST_PARAMS']['ID']['CODE'];
            $this->errors[] = $Errors->setErrorText($errorText)->setErrorCode($errorCode)->setErrorVariable('id')->setErrorDetails('id parameter is required')->gen();
            $this->state = false;
            return $this;
        }

        // Validate correct object id
        $validator = new ValidateMongoObjectId($this->params['id']);
        $validator->validate();
        if (!$validator->state) {
            // store error
            $errorText = $ERROR_CODES['CARS']['UPDATE']['INVALID_DATA_TYPES']['OBJECT_ID']['NAME'];
            $errorCode = $ERROR_CODES['CARS']['UPDATE']['INVALID_DATA_TYPES']['OBJECT_ID']['CODE'];
            $this->errors[] = $Errors->setErrorText($errorText)->setErrorCode($errorCode)->setErrorVariable('id')->setErrorDetails('id parameter is required')->gen();
            $this->state = false;
            return $this;
        }

        // Validate data to update
        $fields = [
            'manufacturer' => [
                'error' => $ERROR_CODES['CARS']['UPDATE']['MISSING_REQUEST_PARAMS']['MANUFACTURER']
            ],
            'logo' => [
                'error' => $ERROR_CODES['CARS']['UPDATE']['MISSING_REQUEST_PARAMS']['LOGO']
            ],
        ];
        foreach ($fields as $param => $data) {
            $error = $data['error'];
            // Check if param found in request
            if (!isset($this->params[$param]) || empty($this->params[$param])) {
                // store error
                $this->errors[] = $Errors->setErrorText($error['NAME'])->setErrorCode($error['CODE'])->setErrorVariable($param)->setErrorDetails('id parameter is required')->gen();
                $this->state = false;
                return $this;
            }
        }

        $dataToUpdate = [
            'manufacturer' => $this->params['manufacturer'],
            'logo' => $this->params['logo'],
        ];

        $this->setModel('Cars_Model');
        $updated = $this->model->updateRecordData($this->params['id'], $dataToUpdate);

        if (!$updated) {
            // store error
            $errorText = $ERROR_CODES['CARS']['UPDATE']['FAILED_TO_UPDATE']['NAME'];
            $errorCode = $ERROR_CODES['CARS']['UPDATE']['FAILED_TO_UPDATE']['CODE'];
            $this->errors[] = $Errors->setErrorText($errorText)->setErrorCode($errorCode)->setErrorVariable('')->setErrorDetails('')->gen();
            $this->state = false;
            return $this;
        }
        else {
            $this->state = true;
            return $this;
        }
    }

    /**
     * Create new record
     */
    function createNewRecord() {
        global $ERROR_CODES, $Errors;

        // Validate data to update
        $fields = [
            'manufacturer' => [
                'error' => $ERROR_CODES['CARS']['CREATE']['MISSING_REQUEST_PARAMS']['MANUFACTURER']
            ],
            'logo' => [
                'error' => $ERROR_CODES['CARS']['CREATE']['MISSING_REQUEST_PARAMS']['LOGO']
            ],
        ];
        foreach ($fields as $param => $data) {
            $error = $data['error'];
            // Check if param found in request
            if (!isset($this->params[$param]) || empty($this->params[$param])) {
                // store error
                $this->errors[] = $Errors->setErrorText($error['NAME'])->setErrorCode($error['CODE'])->setErrorVariable($param)->setErrorDetails('id parameter is required')->gen();
                $this->state = false;
                return $this;
            }
        }

        $this->setModel('Cars_Model');
        $insertResult = $this->model->createNewRecord($this->params);

        if ($insertResult !== null) {
            $this->state = true;
        }
        else {
            $this->state = false;
        }

        return $this;
    }

    function deleteRecord()
    {
        global $ERROR_CODES, $Errors;

        if (!isset($this->params['id']) || empty(trim($this->params['id']))) {
            // store error
            $errorText = $ERROR_CODES['CARS']['DELETE']['MISSING_REQUEST_PARAMS']['ID']['NAME'];
            $errorCode = $ERROR_CODES['CARS']['DELETE']['MISSING_REQUEST_PARAMS']['ID']['CODE'];
            $this->errors[] = $Errors->setErrorText($errorText)->setErrorCode($errorCode)->setErrorVariable('id')->setErrorDetails('')->gen();
            $this->state = false;
            return $this;
        }

        $this->setModel('Cars_Model');
        $result = $this->model->deleteRecord($this->params['id']);

        if ($result) {
            $this->state = true;
            return $this;
        } else {
            // store error
            $errorText = $ERROR_CODES['CARS']['DELETE']['FAILED_TO_DELETE']['NAME'];
            $errorCode = $ERROR_CODES['CARS']['DELETE']['FAILED_TO_DELETE']['CODE'];
            $this->errors[] = $Errors->setErrorText($errorText)->setErrorCode($errorCode)->setErrorVariable('id')->setErrorDetails('')->gen();
            $this->state = false;
            return $this;
        }
    }
}
