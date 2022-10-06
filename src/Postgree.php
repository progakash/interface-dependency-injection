<?php
namespace DependencyDesignPattern;

class Postgree implements ConnectionInterface
{
    public function dbConnect()
    {
        echo "Postgree connection successfully";
    }
    public function fun()
    {
        echo "fun";
    }
}
?>