<?php
$db_host='localhost';
$db_name='cashier';
$db_username='root';
$db_password='Lsw74551872';
$options = array(
  PDO::ATTR_EMULATE_PREPARES => false,
  PDO::ATTR_PERSISTENT => true,
  PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
  PDO::MYSQL_ATTR_INIT_COMMAND => "set names utf8"
  );

try{
  $pdo = new PDO( "mysql:host=$db_host;dbname=$db_name;charset=utf8", $db_username, $db_password,$options);
}
catch( PDOException $e ){
  echo "Connect Fail",die();
}
date_default_timezone_set("Asia/Taipei");