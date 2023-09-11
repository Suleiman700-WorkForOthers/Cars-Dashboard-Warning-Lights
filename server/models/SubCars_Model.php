<?php

class SubCars_Model extends Model
{
    protected $mongoDBHandler;
    public $collectionName = "cars_sub_models";

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
            $errorText = $ERROR_CODES['SUB_CARS']['GET']['RESULTS']['NO_RESULTS']['NAME'];
            $errorCode = $ERROR_CODES['SUB_CARS']['GET']['RESULTS']['NO_RESULTS']['CODE'];
            $this->errors[] = $Errors->setErrorText($errorText)->setErrorCode($errorCode)->setErrorVariable('')->setErrorDetails('')->gen();
            return $this;
        }

        return $documents;
    }
}

?>
