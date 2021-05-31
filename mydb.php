<?php

$dsn='mysql:dbname=mydb;host=localhost';
$user='root';
$password='';

try{
    $dbh=new PDO($dsn,$user,$password);
    print("接続に成功しました。<br>");
}catch(PDOException $e){
    print('Error:' .$e->getMessage());
    die();
}

$dbh=null;

$dbh = new PDO($dsn, $user, $password);