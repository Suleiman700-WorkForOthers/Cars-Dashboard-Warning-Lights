<?php

class MongoDBHandler
{
    private $client;
    public $db;

    public function __construct($connectionString = 'mongodb+srv://mongodb:mongodb@cluster0.ymwoo.mongodb.net', $dbName = 'cdwl')
    {
        $this->client = new MongoDB\Client($connectionString);
        $this->db = $this->client->$dbName;
    }

    public function find($collectionName, $filter = [])
    {
        $collection = $this->db->$collectionName;
        return $collection->find($filter);
    }

    // Add other MongoDB operations here as needed
}
