<?php
session_start();
require_once('config.php');
if(ISSET($_POST['login'])){
	if($_POST['account'] != "" || $_POST['password'] != ""){
		$account = $_POST['account'];
		$password = $_POST['password'];
		$sql = "SELECT * FROM `member` WHERE `account`= ? and `password` = ?";
		$query = $pdo->prepare($sql);
		$query->execute([$account,$password]);
		$row = $query->rowCount();
		if($row > 0){
			$_SESSION['loggedin'] = true;
			header("location: homepage.php");
		}else{
		echo "
		<script>alert('帳號或密碼錯誤')</script>
		<script>window.location = 'login_page.php'</script>
		";
		}
	}else{
	echo "
		<script>alert('請輸入內容')</script>
		<script>window.location = 'login_page.php'</script>
	";
	}
}
