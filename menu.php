<?php
	require_once 'connect.php';
	
	session_start();
	
	if(!isset($_SESSION['username'])||!isset($_SESSION['password'])){
		header('Location:login/index.php');
	}	
?>

<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Online Tests</title>
  <link rel='stylesheet prefetch' href='http://fonts.googleapis.com/css?family=Open+Sans:600'>
  <link rel="stylesheet" href="stylemenu.css">  
</head>
<body>
	<div class="main">
		<div class="menu">
			<div class="header">
				<div>
				</div>
			</div>
			<div class="menulist">
				<div class="option">
					<a href="test1.php">TEST 1</a>
				</div>
			</div>
		</div>
	<div>
</body>
</html>