<?php 
require_once 'config.php';
session_start();
if(!isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === false){
  header("location: login_page.html");
  exit;
}
var_dump($_SESSION["loggedin"])
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
</head>
<body>
  <div>hi</div>
</body>
</html>