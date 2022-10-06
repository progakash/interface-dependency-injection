<?php

require_once("vendor/autoload.php");

use DependencyDesignPattern\Mysql;
use DependencyDesignPattern\Oracle;
use DependencyDesignPattern\Postgree;
use DependencyDesignPattern\Connection;


$sqlObj = new Mysql();
$oclObj = new Oracle();
$posObj = new Postgree();




// $obj = new Connection($oclObj);

// $obj->getConnection();
$oclObj->dbConnect();
?>