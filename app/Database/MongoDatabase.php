<?php
// app/Database/MongoDatabase.php
namespace App\Database;

use App\Services\Contracts\NosqlServiceInterface;
use MongoDB\Client as Mongo;

class MongoDatabase implements NosqlServiceInterface
{
    private $connection;
    private $database;

    public function __construct($host, $port, $database)
    {
        $this->connection = new Mongo("mongodb://{$host}:{$port}");
        $this->database = $this->connection->{$database};
    }

    /**
     * @see \App\Services\Contracts\NosqlServiceInterface::find()
     */
    public function find($collection, array $criteria)
    {
        return $this->database->{$collection}->findOne($criteria);
    }

    public function create($collection, array $document)
    {
    }
    public function update($collection, $id, array $document)
    {
    }
    public function delete($collection, $id)
    {
    }
}
