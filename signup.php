<?php
	require_once 'connect.php';
	
	if(isset($_POST['usernamesignup'])&&isset($_POST['passwordsignup'])&&isset($_POST['confirmpasswordsignup'])&&isset($_POST['emailsignup'])){
		$username = htmlentities(trim($_POST['usernamesignup']));
		$password = md5(htmlentities(trim($_POST['passwordsignup'])));
		$email = htmlentities(trim($_POST['emailsignup']));
		
		$query = $db->query("SELECT * FROM users WHERE username='$username' and password='$password'");
		$r = $query->fetch();
		if($r){
			header('Location:login/index.html?status=accountexists');
		}
		else{
			$stmt = $db->prepare("INSERT INTO users (username,password,email) VALUES(:username , :password , :email)");
			$stmt->bindParam(':username',$username);
			$stmt->bindParam(':password',$password);
			$stmt->bindParam(':email',$email);
			$stmt->execute();
			header('Location:login/index.html?status=accountcreated');
		}
		
	}
?>