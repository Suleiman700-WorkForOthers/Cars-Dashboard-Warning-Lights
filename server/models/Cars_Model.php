<?php

class Cars_Model extends Model
{
    protected $mongoDBHandler;
    public $collectionName = "cars_models";

    function __construct()
    {
        $this->mongoDBHandler = new MongoDBHandler();
    }

    /**
     * Search for data
     * @param array $_params
     * @param array $array_search
     * @return array
     */
    public function filter($_params = [], $array_search = [])
    {
        $filter = [];

        foreach ($array_search as $key => $type) {
            if (isset($_params[$key])) {
                $value = $_params[$key];

                // Convert the value according to the specified type
                switch ($type[0]) {
                    case 's':
                        $filter[$key] = (string) $value;
                        break;
                    case 'i':
                        $filter[$key] = (int) $value;
                        break;
                    // Add more cases for other data types if needed
                }
            }
        }

        // Construct the MongoDB query filter
        $queryFilter = ['_id' => ['$exists' => true]]; // Match all documents by default
        if (!empty($filter)) {
            $queryFilter = $filter;
        }

        // Use MongoDBHandler to fetch results
        return $this->mongoDBHandler->find($this->collectionName, $queryFilter);
    }

    /**
     * get all records
     */
    public function getAllRecords() {
        global $ERROR_CODES, $Errors;

        $collection = $this->mongoDBHandler->db->selectCollection($this->collectionName);

        // Find all documents in the collection
        $cursor = $collection->find([]);

        // Convert the cursor to an array of documents
        $documents = [];
        foreach ($cursor as $document) {
            $documents[] = $document;
        }

        if (!$documents) {
            $errorText = $ERROR_CODES['CARS']['GET']['RESULTS']['NO_RESULTS']['NAME'];
            $errorCode = $ERROR_CODES['CARS']['GET']['RESULTS']['NO_RESULTS']['CODE'];
            $this->errors[] = $Errors->setErrorText($errorText)->setErrorCode($errorCode)->setErrorVariable('')->setErrorDetails('')->gen();
            return $this;
        }

        return $documents;
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
    function updatePersonData($_personID, array $_columnsToUpdate)
    {
        global $ERROR_CODES, $Errors, $DBErrors;

        return $this->mongoDBHandler->update($_columnsToUpdate, $this->table, " WHERE id='$_personID'");
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
        $createdResult = $this->mongoDBHandler->insert($personColumn, $this->table);

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
        $translationsData = $this->mongoDBHandler->mysqli->query("SELECT $_langCode AS value FROM Translations");
        if (!empty($translationsData)) {
            return true;
        }
        else {
            return false;
        }
    }


    /**
     * Delete record
     * @param $_ID - E.g. 1
     * @return bool
     */
    public function deleteRecord($_ID) {
        global $ERROR_CODES, $Errors;

        $deleteResponse = $this->mongoDBHandler->mysqli->query("DELETE FROM $this->table WHERE id = '$_ID'");

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
            'name' => ['s', isset($_yourColumns['name'])?$_yourColumns['name']:''],
            'job' => ['s', isset($_yourColumns['job'])?$_yourColumns['job']:''],
            'phone' => ['s', isset($_yourColumns['phone'])?$_yourColumns['phone']:''],
            'address' => ['s', isset($_yourColumns['address'])?$_yourColumns['address']:''],
        ];

        return $defaultColumns;
    }

}

?>
