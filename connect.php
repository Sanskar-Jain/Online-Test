<?php
	try{
		$db = new PDO('mysql:host=localhost;dbname=onlinetest','Sanskar','');
		$db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
	}catch(PDOException $e){
		echo $e->getMessage();
		die();
	}
?>