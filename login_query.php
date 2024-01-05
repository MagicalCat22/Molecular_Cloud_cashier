<?php
session_start();
require_once('config.php');
if(ISSET($_POST['login'])){
	if($_POST['account'] != "" || $_POST['password'] != ""){
		$account = $_POST['account'];
		$password = $_POST['password'];
		$sql = "SELECT * FROM `member`";
		$query = $conn->prepare($sql);
		$query->execute([$account,$password]);
		$row=0;
		if($row > 0) {
			$_SESSION['user'] = $fetch['mem_id'];
			header("location: homepage.php");
		}else{
		echo "
		<script>alert('Invalid username or password')</script>
		<script>window.location = 'login_page.html'</script>
		";
		}
	}else{
	echo "
		<script>alert('Please complete the required field!')</script>
		<script>window.location = 'login_page.html'</script>
	";
	}
}
