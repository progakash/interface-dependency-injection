<?php
namespace DependencyDesignPattern;

class Oracle implements ConnectionInterface
{
    public function dbConnect()
    {
        echo "Oracle connection successfully";
    }
}
?>