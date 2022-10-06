<?php
namespace DependencyDesignPattern;

class Mysql implements ConnectionInterface
{
    public function dbConnect()
    {
        echo "Mysql connection successfully";
    }

    public function fun2()
    {
        echo "fun tooo";
    }
}
?>