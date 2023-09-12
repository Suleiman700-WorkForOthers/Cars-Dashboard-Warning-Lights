<?php

class CarsModels_Model extends Model
{
    protected $mongoDBHandler;
    public $collectionName = "cars_sub_models";
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

        // Find all documents in the collection
        $cursor = $this->collection->find([]);

        // Convert the cursor to an array of documents
        $documents = [];
        foreach ($cursor as $document) {
            $documents[] = $document;
        }

        if (!$documents) {
            $errorText = $ERROR_CODES['SUB_CARS']['GET']['RESULTS']['NO_RESULTS']['NAME'];
            $errorCode = $ERROR_CODES['SUB_CARS']['GET']['RESULTS']['NO_RESULTS']['CODE'];
            $this->errors[] = $Errors->setErrorText($errorText)->setErrorCode($errorCode)->setErrorVariable('')->setErrorDetails('')->gen();
            return $this;
        }

        return $documents;
    }

    function getRecordById(string $_id) {

        $filter = [
            '_id' => new MongoDB\BSON\ObjectId($_id), // Replace with the MongoDB document's ID you want to update
        ];

        $result = $this->collection->findOne($filter);

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
        $updateData = [
            '$set' => $_columnsToUpdate
        ];

        $filter = [
            '_id' => new MongoDB\BSON\ObjectId($_recordId), // Replace with the MongoDB document's ID you want to update
        ];

        $options = [];

        $result = $this->collection->updateOne($filter, $updateData, $options);

        return $result->getMatchedCount() > 0;
    }

    /**
     * Create new record
     * @param array $_recordData - E.g. {name: '', job: '', ...etc}
     * @return bool
     */
    function createNewRecord(array $_recordData): bool
    {
        // Prepare the data to insert
        $recordToInsert = $_recordData;

        $result = $this->collection->insertOne($recordToInsert);

        return $result->getInsertedCount() > 0;
    }

    /**
     * Delete record
     * @param $_recordId - E.g. fee803195efc210d79b0b4
     * @return bool
     */
    public function deleteRecord($_recordId) {
        $filter = [
            '_id' => new MongoDB\BSON\ObjectId($_recordId), // Replace with the MongoDB document's ID you want to update
        ];

        $options = [];

        $result = $this->collection->deleteOne($filter);

        return $result->getDeletedCount() > 0;
    }
}
