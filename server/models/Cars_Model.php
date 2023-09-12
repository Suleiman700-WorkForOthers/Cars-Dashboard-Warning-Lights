<?php

class Cars_Model extends Model
{
    protected $mongoDBHandler;
    public $collectionName = "cars_models";
    public $collection;

    function __construct()
    {
        $this->mongoDBHandler = new MongoDBHandler();
        $this->collection = $this->mongoDBHandler->db->selectCollection($this->collectionName);
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


//        $updateData = [
//            '$set' => [
//                'manufacturer' => 'Renault2', // Replace with the field you want to update and its new value
//            ],
//        ];
//
//        $filter = [
//            '_id' => new MongoDB\BSON\ObjectId('64fee803195efc210d79b0b4'), // Replace with the MongoDB document's ID you want to update
//        ];
//
//        $options = [];
//
//        $result = $collection->updateOne($filter, $updateData, $options);
//
//        if ($result->getModifiedCount() > 0) {
//            echo "Document updated successfully.";
//        } else {
//            echo "No document found with the given ID.";
//        }

        return $documents;
    }

    function getRecordById(string $_id) {
        $collection = $this->mongoDBHandler->db->selectCollection($this->collectionName);

        $filter = [
            '_id' => new MongoDB\BSON\ObjectId($_id), // Replace with the MongoDB document's ID you want to update
        ];

        $result = $collection->findOne($filter);

        if ($result) return iterator_to_array($result);
        else return [];
    }

    /**
     * update person specific columns
     * @param $_recordId - E.g. 64fee803195efc210d79b0b4
     * @param array $_columnsToUpdate
     * Pass the columns you want to update
     * $columnsToUpdate = [
     *      'name' => 'New Name'
     * ];
     * @return $this
     */
    function updateRecordData($_recordId, array $_columnsToUpdate)
    {
        $collection = $this->mongoDBHandler->db->selectCollection($this->collectionName);

        $updateData = [
            '$set' => $_columnsToUpdate
        ];

        $filter = [
            '_id' => new MongoDB\BSON\ObjectId($_recordId), // Replace with the MongoDB document's ID you want to update
        ];

        $options = [];

        $result = $collection->updateOne($filter, $updateData, $options);

        return $result->getMatchedCount() > 0;
    }

    /**
     * Delete record
     * @param $_recordId - E.g. fee803195efc210d79b0b4
     * @return bool
     */
    public function deleteRecord($_recordId) {
        global $ERROR_CODES, $Errors;


        $filter = [
            '_id' => new MongoDB\BSON\ObjectId($_recordId), // Replace with the MongoDB document's ID you want to update
        ];

        $options = [];

        $result = $this->collection->deleteOne($filter);

        return $result->getDeletedCount() > 0;
    }








    /**
     * Create new record
     * @param array $_recordData - E.g. {name: '', job: '', ...etc}
     * @return bool
     */
    function createNewRecord(array $_recordData): bool
    {
        global $ERROR_CODES, $Errors, $DBErrors;

        // Prepare the data to insert
        $recordToInsert = $_recordData;

        $result = $this->collection->insertOne($recordToInsert);

        return $result->getInsertedCount() > 0;
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
