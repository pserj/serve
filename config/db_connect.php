<?php
$host ="localhost";
$db_name="serve";
$username= "root";
$password="cath3rin3";

try{
 $con = new PDO("mysql:host={$host};dbname={$db_name}",$username,$password);}
 
 //handling the connection error
 catch(PDOException $exception){
  echo "Connection error: ". $exception->getMessage();
  }
  ?>
