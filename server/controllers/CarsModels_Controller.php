<?php

class CarsModels_Controller extends Controller
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
        $this->setModel('CarsModels_Model');
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
            $this->errors[] = $Errors->setErrorText($errorText)->setErrorCode($errorCode)->setErrorVariable('id')->setErrorDetails('')->gen();
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
            $this->errors[] = $Errors->setErrorText($errorText)->setErrorCode($errorCode)->setErrorVariable('id')->setErrorDetails('')->gen();
            $this->state = false;
            return $this;
        }

        $this->setModel('CarsModels_Model');
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
            $errorText = $ERROR_CODES['CARS_MODELS']['UPDATE']['MISSING_REQUEST_PARAMS']['ID']['NAME'];
            $errorCode = $ERROR_CODES['CARS_MODELS']['UPDATE']['MISSING_REQUEST_PARAMS']['ID']['CODE'];
            $this->errors[] = $Errors->setErrorText($errorText)->setErrorCode($errorCode)->setErrorVariable('id')->setErrorDetails('')->gen();
            $this->state = false;
            return $this;
        }

        // Validate correct object id
        $validator = new ValidateMongoObjectId($this->params['id']);
        $validator->validate();
        if (!$validator->state) {
            // store error
            $errorText = $ERROR_CODES['CARS_MODELS']['UPDATE']['INVALID_DATA_TYPES']['OBJECT_ID']['NAME'];
            $errorCode = $ERROR_CODES['CARS_MODELS']['UPDATE']['INVALID_DATA_TYPES']['OBJECT_ID']['CODE'];
            $this->errors[] = $Errors->setErrorText($errorText)->setErrorCode($errorCode)->setErrorVariable('id')->setErrorDetails('')->gen();
            $this->state = false;
            return $this;
        }

        // Validate data to update
        $fields = [
            'car_id' => [
                'error' => $ERROR_CODES['CARS_MODELS']['UPDATE']['MISSING_REQUEST_PARAMS']['CAR_ID']
            ],
            'name' => [
                'error' => $ERROR_CODES['CARS_MODELS']['UPDATE']['MISSING_REQUEST_PARAMS']['NAME']
            ],
            'years' => [
                'error' => $ERROR_CODES['CARS_MODELS']['UPDATE']['MISSING_REQUEST_PARAMS']['YERAS']
            ],
            'image' => [
                'error' => $ERROR_CODES['CARS_MODELS']['UPDATE']['MISSING_REQUEST_PARAMS']['IMAGE']
            ],
        ];
        foreach ($fields as $param => $data) {
            $error = $data['error'];
            // Check if param found in request
            if (!isset($this->params[$param]) || empty($this->params[$param])) {
                // store error
                $this->errors[] = $Errors->setErrorText($error['NAME'])->setErrorCode($error['CODE'])->setErrorVariable($param)->setErrorDetails('')->gen();
                $this->state = false;
                return $this;
            }
        }

        $dataToUpdate = [
            'car_id' => $this->params['car_id'],
            'name' => $this->params['name'],
            'years' => $this->params['years'],
            'image' => $this->params['image'],
        ];

        $this->setModel('CarsModels_Model');
        $updated = $this->model->updateRecordData($this->params['id'], $dataToUpdate);

        if (!$updated) {
            // store error
            $errorText = $ERROR_CODES['CARS_MODELS']['UPDATE']['FAILED_TO_UPDATE']['NAME'];
            $errorCode = $ERROR_CODES['CARS_MODELS']['UPDATE']['FAILED_TO_UPDATE']['CODE'];
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
            'car_id' => [
                'error' => $ERROR_CODES['CARS_MODELS']['CREATE']['MISSING_REQUEST_PARAMS']['CAR_ID']
            ],
            'name' => [
                'error' => $ERROR_CODES['CARS_MODELS']['CREATE']['MISSING_REQUEST_PARAMS']['NAME']
            ],
            'years' => [
                'error' => $ERROR_CODES['CARS_MODELS']['CREATE']['MISSING_REQUEST_PARAMS']['YERAS']
            ],
            'image' => [
                'error' => $ERROR_CODES['CARS_MODELS']['CREATE']['MISSING_REQUEST_PARAMS']['IMAGE']
            ],
        ];
        foreach ($fields as $param => $data) {
            $error = $data['error'];
            // Check if param found in request
            if (!isset($this->params[$param]) || empty($this->params[$param])) {
                // store error
                $this->errors[] = $Errors->setErrorText($error['NAME'])->setErrorCode($error['CODE'])->setErrorVariable($param)->setErrorDetails('')->gen();
                $this->state = false;
                return $this;
            }
        }

        $this->setModel('CarsModels_Model');
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
            $errorText = $ERROR_CODES['CARS_MODELS']['DELETE']['MISSING_REQUEST_PARAMS']['ID']['NAME'];
            $errorCode = $ERROR_CODES['CARS_MODELS']['DELETE']['MISSING_REQUEST_PARAMS']['ID']['CODE'];
            $this->errors[] = $Errors->setErrorText($errorText)->setErrorCode($errorCode)->setErrorVariable('id')->setErrorDetails('')->gen();
            $this->state = false;
            return $this;
        }

        $this->setModel('CarsModels_Model');
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
