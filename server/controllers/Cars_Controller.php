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
//        $this->setModel('Cars_Model');
//        $persons = $this->model->getAllRecords();

        // check for errors
        if (empty($persons->errors)) {
            $this->state = true;
            $this->data = [];
        }
        else {
            $this->state = false;
        }

        return $this;
    }

    /**
     * get all records from DB
     */
    function grabRecordsAndRelatedData()
    {
        $this->setModel('Cars_Model');
        $records = $this->model->getPersons();

        // check for errors
        if (empty($persons->errors)) {
            $this->state = true;
            $this->data['workers'] = $records;

            $this->setModel('WorkersWorkHours_Model');
            $workHours = $this->model->getRecords();
            $this->data['workHours'] = $workHours;
        }
        else {
            $this->state = false;
        }

        return $this;
    }

    /**
     * Get record data
     * @return $this
     */
    function getRecordData() {

        global $ERROR_CODES, $Errors;
        if (!isset($this->params['id'])) {
            // store error
            $errorText = $ERROR_CODES['PERSONS']['GET']['MISSING_REQUEST_PARAMS']['ID']['NAME'];
            $errorCode = $ERROR_CODES['PERSONS']['GET']['MISSING_REQUEST_PARAMS']['ID']['CODE'];
            $this->errors[] = $Errors->setErrorText($errorText)->setErrorCode($errorCode)->setErrorClass(__CLASS__)->setErrorFunction(__FUNCTION__)->setErrorFile(__FILE__)->setErrorVariable('id')->setErrorDetails('')->gen();
            $this->state = false;
        }

        // check errors
        if (empty($this->errors)) {
            // check if person exist in DB
            $this->setModel('Cars_Model');
            $filterParams = [
                'id' => $this->params['id']
            ];
            $doesExist = $this->model->filter($filterParams);
            if (!empty($doesExist)) {
                $this->state = true;
                $this->data = $doesExist[0];
            }
            else {
                // store error
                $errorText = $ERROR_CODES['PERSONS']['GET']['RESULTS']['NOT_FOUND']['NAME'];
                $errorCode = $ERROR_CODES['PERSONS']['GET']['RESULTS']['NOT_FOUND']['CODE'];
                $this->errors[] = $Errors->setErrorText($errorText)->setErrorCode($errorCode)->setErrorClass(__CLASS__)->setErrorFunction(__FUNCTION__)->setErrorFile(__FILE__)->setErrorVariable('')->setErrorDetails('Could not find person in DB with id ['.$this->params['id'].']')->gen();
                $this->state = false;
            }
        }

        return $this;
    }

    /**
     * Get record data
     * @return $this
     */
    function getRecordAndRelatedData() {

        global $ERROR_CODES, $Errors;
        if (!isset($this->params['id'])) {
            // store error
            $errorText = $ERROR_CODES['PERSONS']['GET']['MISSING_REQUEST_PARAMS']['ID']['NAME'];
            $errorCode = $ERROR_CODES['PERSONS']['GET']['MISSING_REQUEST_PARAMS']['ID']['CODE'];
            $this->errors[] = $Errors->setErrorText($errorText)->setErrorCode($errorCode)->setErrorClass(__CLASS__)->setErrorFunction(__FUNCTION__)->setErrorFile(__FILE__)->setErrorVariable('id')->setErrorDetails('')->gen();
            $this->state = false;
        }

        // check errors
        if (empty($this->errors)) {
            // check if person exist in DB
            $this->setModel('Cars_Model');
            $filterParams = [
                'id' => $this->params['id']
            ];
            $doesExist = $this->model->filter($filterParams);
            if (!empty($doesExist)) {

                // Get work hours
                $this->setModel('WorkersWorkHours_Model');
                $filterParams = [
                    'workerId' => $this->params['id']
                ];
                $workHours = $this->model->filter($filterParams);

                $this->state = true;
                $this->data['record'] = $doesExist[0];
                $this->data['workHours'] = $workHours[0]??[];
            }
            else {
                // store error
                $errorText = $ERROR_CODES['PERSONS']['GET']['RESULTS']['NOT_FOUND']['NAME'];
                $errorCode = $ERROR_CODES['PERSONS']['GET']['RESULTS']['NOT_FOUND']['CODE'];
                $this->errors[] = $Errors->setErrorText($errorText)->setErrorCode($errorCode)->setErrorClass(__CLASS__)->setErrorFunction(__FUNCTION__)->setErrorFile(__FILE__)->setErrorVariable('')->setErrorDetails('Could not find person in DB with id ['.$this->params['id'].']')->gen();
                $this->state = false;
            }
        }

        return $this;
    }

    /**
     * Update record data by id
     * @return $this
     */
    function updateRecordData() {
        global $ERROR_CODES, $Errors;

        if (!isset($this->params['name']) || empty($this->params['name'])) {
            // store error
            $errorText = $ERROR_CODES['PERSONS']['UPDATE']['MISSING_REQUEST_PARAMS']['NAME']['NAME'];
            $errorCode = $ERROR_CODES['PERSONS']['UPDATE']['MISSING_REQUEST_PARAMS']['NAME']['CODE'];
            $this->errors[] = $Errors->setErrorText($errorText)->setErrorCode($errorCode)->setErrorClass(__CLASS__)->setErrorFunction(__FUNCTION__)->setErrorFile(__FILE__)->setErrorVariable('name')->setErrorDetails('name parameter is required in order to update person data')->gen();
            $this->state = false;
        }
        if (!isset($this->params['job']) || empty($this->params['job'])) {
            // store error
            $errorText = $ERROR_CODES['PERSONS']['UPDATE']['MISSING_REQUEST_PARAMS']['JOB']['NAME'];
            $errorCode = $ERROR_CODES['PERSONS']['UPDATE']['MISSING_REQUEST_PARAMS']['JOB']['CODE'];
            $this->errors[] = $Errors->setErrorText($errorText)->setErrorCode($errorCode)->setErrorClass(__CLASS__)->setErrorFunction(__FUNCTION__)->setErrorFile(__FILE__)->setErrorVariable('job')->setErrorDetails('job parameter is required in order to update person data')->gen();
            $this->state = false;
        }
        if (!isset($this->params['address']) || empty($this->params['address'])) {
            // store error
            $errorText = $ERROR_CODES['PERSONS']['UPDATE']['MISSING_REQUEST_PARAMS']['ADDRESS']['NAME'];
            $errorCode = $ERROR_CODES['PERSONS']['UPDATE']['MISSING_REQUEST_PARAMS']['ADDRESS']['CODE'];
            $this->errors[] = $Errors->setErrorText($errorText)->setErrorCode($errorCode)->setErrorClass(__CLASS__)->setErrorFunction(__FUNCTION__)->setErrorFile(__FILE__)->setErrorVariable('address')->setErrorDetails('address parameter is required in order to update person data')->gen();
            $this->state = false;
        }
        if (!isset($this->params['phone']) || empty($this->params['phone'])) {
            // store error
            $errorText = $ERROR_CODES['PERSONS']['UPDATE']['MISSING_REQUEST_PARAMS']['PHONE']['NAME'];
            $errorCode = $ERROR_CODES['PERSONS']['UPDATE']['MISSING_REQUEST_PARAMS']['PHONE']['CODE'];
            $this->errors[] = $Errors->setErrorText($errorText)->setErrorCode($errorCode)->setErrorClass(__CLASS__)->setErrorFunction(__FUNCTION__)->setErrorFile(__FILE__)->setErrorVariable('phone')->setErrorDetails('phone parameter is required in order to update person data')->gen();
            $this->state = false;
        }

        // check errors
        if (empty($this->errors)) {
            // update data
            $this->setModel('Cars_Model');
            $columnsToUpdate = [
                'name' => ['s', $this->params['name']],
                'job' => ['s', $this->params['job']],
                'address' => ['s', $this->params['address']],
                'phone' => ['s', $this->params['phone']],
            ];
            $updateResult = $this->model->updatePersonData($this->params['id'], $columnsToUpdate);

            // check result
            if (isset($updateResult) && ($updateResult == true || $updateResult == 1)) {
                $this->state = true;
            }
            else {
                $this->state = false;
            }
        }

        return $this;
    }

    /**
     * Update work hours data
     * @return $this
     */
    function updateWorkHoursData() {
        global $ERROR_CODES, $Errors;

        // update data
        $this->setModel('WorkersWorkHours_Model');
        $columnsToUpdate = [
            'sunday' => ['s', $this->params['sunday']],
            'isSundayWorking' => ['s', $this->params['isSundayWorking']],
            'monday' => ['s', $this->params['monday']],
            'isMondayWorking' => ['s', $this->params['isMondayWorking']],
            'tuesday' => ['s', $this->params['tuesday']],
            'isTuesdayWorking' => ['s', $this->params['isTuesdayWorking']],
            'wednesday' => ['s', $this->params['wednesday']],
            'isWednesdayWorking' => ['s', $this->params['isWednesdayWorking']],
            'thursday' => ['s', $this->params['thursday']],
            'isThursdayWorking' => ['s', $this->params['isThursdayWorking']],
            'friday' => ['s', $this->params['friday']],
            'isFridayWorking' => ['s', $this->params['isFridayWorking']],
            'saturday' => ['s', $this->params['saturday']],
            'isSaturdayWorking' => ['s', $this->params['isSaturdayWorking']],
        ];
        $updateResult = $this->model->updateRecordData($this->params['id'], $columnsToUpdate);

        // check result
        if (isset($updateResult) && ($updateResult == true || $updateResult == 1)) {
            $this->state = true;
        }
        else {
            $this->state = false;
        }

        return $this;
    }

    /**
     * Create new record
     * @return void
     */
    function createNewRecord() {
        global $ERROR_CODES, $Errors;

        if (!isset($this->params['name']) || empty(trim($this->params['name']))) {
            // store error
            $errorText = $ERROR_CODES['PERSONS']['CREATE']['MISSING_REQUEST_PARAMS']['NAME']['NAME'];
            $errorCode = $ERROR_CODES['PERSONS']['CREATE']['MISSING_REQUEST_PARAMS']['NAME']['CODE'];
            $this->errors[] = $Errors->setErrorText($errorText)->setErrorCode($errorCode)->setErrorClass(__CLASS__)->setErrorFunction(__FUNCTION__)->setErrorFile(__FILE__)->setErrorVariable('name')->setErrorDetails('name parameter is required in order to update person data')->gen();
            $this->state = false;
        }
        if (!isset($this->params['job']) || empty(trim($this->params['job']))) {
            // store error
            $errorText = $ERROR_CODES['PERSONS']['CREATE']['MISSING_REQUEST_PARAMS']['JOB']['NAME'];
            $errorCode = $ERROR_CODES['PERSONS']['CREATE']['MISSING_REQUEST_PARAMS']['JOB']['CODE'];
            $this->errors[] = $Errors->setErrorText($errorText)->setErrorCode($errorCode)->setErrorClass(__CLASS__)->setErrorFunction(__FUNCTION__)->setErrorFile(__FILE__)->setErrorVariable('job')->setErrorDetails('job parameter is required in order to update person data')->gen();
            $this->state = false;
        }
        if (!isset($this->params['address']) || empty(trim($this->params['address']))) {
            // store error
            $errorText = $ERROR_CODES['PERSONS']['CREATE']['MISSING_REQUEST_PARAMS']['ADDRESS']['NAME'];
            $errorCode = $ERROR_CODES['PERSONS']['CREATE']['MISSING_REQUEST_PARAMS']['ADDRESS']['CODE'];
            $this->errors[] = $Errors->setErrorText($errorText)->setErrorCode($errorCode)->setErrorClass(__CLASS__)->setErrorFunction(__FUNCTION__)->setErrorFile(__FILE__)->setErrorVariable('address')->setErrorDetails('address parameter is required in order to update person data')->gen();
            $this->state = false;
        }
        if (!isset($this->params['phone']) || empty(trim($this->params['phone']))) {
            // store error
            $errorText = $ERROR_CODES['PERSONS']['CREATE']['MISSING_REQUEST_PARAMS']['PHONE']['NAME'];
            $errorCode = $ERROR_CODES['PERSONS']['CREATE']['MISSING_REQUEST_PARAMS']['PHONE']['CODE'];
            $this->errors[] = $Errors->setErrorText($errorText)->setErrorCode($errorCode)->setErrorClass(__CLASS__)->setErrorFunction(__FUNCTION__)->setErrorFile(__FILE__)->setErrorVariable('phone')->setErrorDetails('phone parameter is required in order to update person data')->gen();
            $this->state = false;
        }

        // check errors
        if (empty($this->errors)) {
            // update data
            $this->setModel('Cars_Model');
            $createResults = $this->model->createNewRecord($this->params);

            // check result
            if ($createResults['state'] && is_numeric($createResults['newId'])) {

                $this->setModel('WorkersWorkHours_Model');
                $this->params['workerId'] = $createResults['newId'];
                $createResults = $this->model->createNewRecord($this->params);

                $this->state = true;
            }
            else {
                // store error
                $errorText = $ERROR_CODES['PERSONS']['CREATE']['QUERY_RESULTS']['FAILED']['NAME'];
                $errorCode = $ERROR_CODES['PERSONS']['CREATE']['QUERY_RESULTS']['FAILED']['CODE'];
                $this->errors[] = $Errors->setErrorText($errorText)->setErrorCode($errorCode)->setErrorClass(__CLASS__)->setErrorFunction(__FUNCTION__)->setErrorFile(__FILE__)->setErrorVariable('')->setErrorDetails('phone parameter is required in order to update person data')->gen();
                $this->state = false;
            }
        }

        return $this;
    }

    function deleteRecord() {
        global $ERROR_CODES, $Errors;

        if (!isset($this->params['id']) || empty(trim($this->params['id']))) {
            // store error
            $errorText = $ERROR_CODES['PERSONS']['DELETE']['MISSING_REQUEST_PARAMS']['ID']['NAME'];
            $errorCode = $ERROR_CODES['PERSONS']['DELETE']['MISSING_REQUEST_PARAMS']['ID']['CODE'];
            $this->errors[] = $Errors->setErrorText($errorText)->setErrorCode($errorCode)->setErrorClass(__CLASS__)->setErrorFunction(__FUNCTION__)->setErrorFile(__FILE__)->setErrorVariable('id')->setErrorDetails('')->gen();
            $this->state = false;
        }

        // check errors
        if (empty($this->errors)) {
            // delete record
            $this->setModel('Cars_Model');
            $isDeleted = $this->model->deleteRecord($this->params['id']);
            if ($isDeleted) {
                $this->state = true;
            }
            else {
                // store error
                $errorText = $ERROR_CODES['PERSONS']['DELETE']['QUERY_RESULTS']['FAILED']['NAME'];
                $errorCode = $ERROR_CODES['PERSONS']['DELETE']['QUERY_RESULTS']['FAILED']['CODE'];
                $this->errors[] = $Errors->setErrorText($errorText)->setErrorCode($errorCode)->setErrorClass(__CLASS__)->setErrorFunction(__FUNCTION__)->setErrorFile(__FILE__)->setErrorVariable('')->setErrorDetails('An error occured while deleting record')->gen();
                $this->state = false;
            }

        }
        return $this;
    }

































    /**
     * check if person exists by its ID, also stores person data if found
     * @return $this
     */
    function doesPersonExistByID() {
        global $ERROR_CODES, $Errors;

        if (!isset($this->params['id'])) {
            // store error
            $errorText = $ERROR_CODES['PERSONS']['GET']['MISSING_REQUEST_PARAMS']['ID']['NAME'];
            $errorCode = $ERROR_CODES['PERSONS']['GET']['MISSING_REQUEST_PARAMS']['ID']['CODE'];
            $this->errors[] = $Errors->setErrorText($errorText)->setErrorCode($errorCode)->setErrorClass(__CLASS__)->setErrorFunction(__FUNCTION__)->setErrorFile(__FILE__)->setErrorVariable('id')->setErrorDetails('')->gen();
            $this->state = false;
        }

        // check errors
        if (empty($this->errors)) {
            // check if person exist in DB
            $this->setModel('Cars_Model');
            $filterParams = [
                'id' => $this->params['id']
            ];
            $doesExist = $this->model->filter($filterParams);
            if (!empty($doesExist)) {
                $this->state = true;
                $this->data = $doesExist[0];
            }
            else {
                // store error
                $errorText = $ERROR_CODES['PERSONS']['GET']['RESULTS']['NOT_FOUND']['NAME'];
                $errorCode = $ERROR_CODES['PERSONS']['GET']['RESULTS']['NOT_FOUND']['CODE'];
                $this->errors[] = $Errors->setErrorText($errorText)->setErrorCode($errorCode)->setErrorClass(__CLASS__)->setErrorFunction(__FUNCTION__)->setErrorFile(__FILE__)->setErrorVariable('')->setErrorDetails('Could not find person in DB with id ['.$this->params['id'].']')->gen();
                $this->state = false;
            }
        }

        return $this;
    }

    function testFailureMethod()
    {
        global $Errors, $ERROR_CODES;

        if (!isset($this->params['userId'])) {
            // store error
            $errorText = $ERROR_CODES['TEST']['MISSING_REQUEST_PARAMS']['USER_ID']['NAME'];
            $errorCode = $ERROR_CODES['TEST']['MISSING_REQUEST_PARAMS']['USER_ID']['CODE'];
            $this->errors[] = $Errors->setErrorText($errorText)->setErrorCode($errorCode)->setErrorClass(__CLASS__)->setErrorFunction(__FUNCTION__)->setErrorFile(__FILE__)->setErrorVariable('langCode')->setErrorDetails('')->gen();
        }

        // check for errors
        if (empty($this->errors)) {
            $this->state = true;
        }
        else {
            $this->state = false;
        }

        return $this;
    }
}
