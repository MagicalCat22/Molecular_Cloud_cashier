<!DOCTYPE html>
<html lang="zh-Hant-TW">
<?php 
require_once 'config.php';
session_start();
if(!isset($_SESSION["loggedin"]) && !($_SESSION["loggedin"] === false)){
  header("location: login_page.php");
  exit;
}
  define('IN_SYS', TRUE);
if(!defined('IN_SYS')) { exit('禁止訪問'); }
echo "<meta http-equiv=REFRESH CONTENT=3600;url=logout.php?argument=timeout>";
?>
<head>
  <?php require_once 'header.html'?>
</head>
<body>
  <dev>hello</dev>
  <a href="logout.php">登出</a>
</body>
</html>