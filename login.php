<?php
	require_once 'connect.php';
	
	if(isset($_POST['usernamesignin'])&&isset($_POST['passwordsignin'])){
	
		$username = htmlentities(trim($_POST['usernamesignin']));
		$password = md5(htmlentities(trim($_POST['passwordsignin'])));
			
		if(!empty($username)&&!empty($password)){
			$sql = "SELECT * FROM users WHERE username='$username' and password='$password'";
			$query = $db->query("SELECT * FROM users WHERE username='$username' and password='$password'");
			$r = $query->fetch();
			if($r['username'] == $username && $r['password'] == $password){
				session_start();
				$_SESSION['username'] = $username;
				$_SESSION['password'] = $password;
				header('Location : menu.php',true,302);
			}
			else{
				header('Location:login/index.html?err=invalidpass');
			}
		}
	}
?>