<?php
namespace DependencyDesignPattern;

class Connection
{
    private $connection;

    public function __construct(ConnectionInterface $connect)
    {
        $this->connection = $connect;
    }

    public function getConnection()
    {
        return $this->connection->dbConnect();
    }
}
?>