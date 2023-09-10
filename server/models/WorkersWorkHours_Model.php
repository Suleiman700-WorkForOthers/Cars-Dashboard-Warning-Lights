<?php

class WorkersWorkHours_Model extends Model
{
    function __construct()
    {
        $this->db = new DB();
        $this->table = "workers_work_hours";
    }

    /**
     * search for data
     * @param array $_params
     * @param array $array_search
     * @return array|string
     */
    public function filter($_params = [], $array_search = [])
    {
        $array_search = array(
            'workerId' => ['i']
        );
        return parent::filter($_params, $array_search);
    }









    /**
     * update person specific columns
     * @param $_personID - E.g. 1
     * @param array $_columnsToUpdate
     * Pass the columns you want to update
     * $columnsToUpdate = [
     *      'name' => ['s', 'New Name']
     * ];
     * @return $this
     */
    function updateRecordData($_personID, array $_columnsToUpdate)
    {
        global $ERROR_CODES, $Errors, $DBErrors;

        return $this->db->update($_columnsToUpdate, $this->table, " WHERE workerId='$_personID'");
    }

    /**
     * Create new record
     * @param array $_personData - E.g. {name: '', job: '', ...etc}
     * @return array
     */
    function createNewRecord(array $_personData)
    {
        global $ERROR_CODES, $Errors, $DBErrors;

        // prepare default customer data array
        $personColumn = $this->createDefaultColumns($_personData);
        $createdResult = $this->db->insert($personColumn, $this->table);

        if (isset($createdResult) && is_numeric($createdResult)) {
            return [
                'state' => true,
                'newId' => $createdResult
            ];
        }
        else {
            return [
                'state' => false,
            ];
        }
    }

    /**
     * check if langCode exists in database
     * @param string $_langCode
     * @return boolean
     */
    public function isLangCodeExist(string $_langCode)
    {
        $translationsData = $this->db->mysqli->query("SELECT $_langCode AS value FROM Translations");
        if (!empty($translationsData)) {
            return true;
        }
        else {
            return false;
        }
    }

    /**
     * get language translations
     */
    public function getRecords() {
        global $ERROR_CODES, $Errors;

        $translationsData = $this->db->mysqli->query("SELECT * FROM $this->table")->fetch_all(MYSQLI_ASSOC);

        if (!$translationsData) {
            $errorText = $ERROR_CODES['PERSONS']['GET']['RESULTS']['NO_RESULTS']['NAME'];
            $errorCode = $ERROR_CODES['PERSONS']['GET']['RESULTS']['NO_RESULTS']['CODE'];
            $this->errors[] = $Errors->setErrorText($errorText)->setErrorCode($errorCode)->setErrorClass(__CLASS__)->setErrorFunction(__FUNCTION__)->setErrorFile(__FILE__)->setErrorVariable('')->setErrorDetails('')->gen();
            return $this;
        } else {
            return $translationsData;
        }
    }

    /**
     * Delete record
     * @param $_ID - E.g. 1
     * @return bool
     */
    public function deleteRecord($_ID) {
        global $ERROR_CODES, $Errors;

        $deleteResponse = $this->db->mysqli->query("DELETE FROM $this->table WHERE id = '$_ID'");

        if (isset($deleteResponse) && ($deleteResponse == 1 || $deleteResponse == true)) {
            return true;
        }
        else {
            return false;
        }
    }


    private function createDefaultColumns(array $_yourColumns): array
    {
        $defaultColumns = [
            'workerId' => ['i', isset($_yourColumns['workerId'])?$_yourColumns['workerId']:''],
            'sunday' => ['s', isset($_yourColumns['sunday'])?$_yourColumns['sunday']:''],
            'isSundayWorking' => ['s', isset($_yourColumns['isSundayWorking'])?$_yourColumns['isSundayWorking']:'0'],
            'monday' => ['s', isset($_yourColumns['monday'])?$_yourColumns['monday']:''],
            'isMondayWorking' => ['s', isset($_yourColumns['isMondayWorking'])?$_yourColumns['isMondayWorking']:'0'],
            'tuesday' => ['s', isset($_yourColumns['tuesday'])?$_yourColumns['tuesday']:''],
            'isTuesdayWorking' => ['s', isset($_yourColumns['isTuesdayWorking'])?$_yourColumns['isTuesdayWorking']:'0'],
            'wednesday' => ['s', isset($_yourColumns['wednesday'])?$_yourColumns['wednesday']:''],
            'isWednesdayWorking' => ['s', isset($_yourColumns['isWednesdayWorking'])?$_yourColumns['isWednesdayWorking']:'0'],
            'thursday' => ['s', isset($_yourColumns['thursday'])?$_yourColumns['thursday']:''],
            'isThursdayWorking' => ['s', isset($_yourColumns['isThursdayWorking'])?$_yourColumns['isThursdayWorking']:'0'],
            'friday' => ['s', isset($_yourColumns['friday'])?$_yourColumns['friday']:''],
            'isFridayWorking' => ['s', isset($_yourColumns['isFridayWorking'])?$_yourColumns['isFridayWorking']:'0'],
            'saturday' => ['s', isset($_yourColumns['saturday'])?$_yourColumns['saturday']:''],
            'isSaturdayWorking' => ['s', isset($_yourColumns['isSaturdayWorking'])?$_yourColumns['isSaturdayWorking']:'0'],
        ];

        return $defaultColumns;
    }

}

?>
