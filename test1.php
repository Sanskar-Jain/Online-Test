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
  <title>Test 1</title>
  <link rel='stylesheet prefetch' href='http://fonts.googleapis.com/css?family=Open+Sans:600'>
  <link rel='stylesheet' href="test1.css">
</head>
<body>
	<!--<form id="myform" action="result.php" method="POST">
	<div class="question">
	
		/*$i=0;
		$str = "1234";
		echo $str;
		str_shuffle($str);
		if(isset($_SERVER['QUERY_STRING'])){
			$istr = $_SERVER['QUERY_STRING'];
			$arr = explode('=',$istr);
			print_r($arr);
			$i = $arr[1];
		}else{
			echo 'f';
			$i=0;
		}
		$sql = "SELECT * FROM test1 WHERE id=".$str[$i];
		echo $str[0];
		echo $sql;
		echo $i;
		$query = $db->query($sql);
		while($r = $query->fetch(PDO::FETCH_ASSOC)){
			echo "<h2>Q".$str[$i].". ".$r['question']."</h2>";
			echo "<input type='radio' name='Q".$r['id']."' value='".$r['option1']."' >".$r['option1']."<br><br>";
			echo "<input type='radio' name='Q".$r['id']."' value='".$r['option2']."' >".$r['option2']."<br><br>";
			echo "<input type='radio' name='Q".$r['id']."' value='".$r['option3']."' >".$r['option3']."<br><br>";
			echo "<input type='radio' name='Q".$r['id']."' value='".$r['option4']."' >".$r['option4']."<br><br>";
												
	}
	$i+=1;*/
	?>
	<a href="http://localhost/Online%20Tests/test1.php?q="<?php echo $i; ?>">Agle pe le chalo</a>
	
	<input type="submit" value="NEXT" name="submit">
	</div> -->
	<form action="result.php" method="POST" id="challe_bhai">
	<div class="question">
	<?php
		
		$i=0;
		$str = "1234";
		str_shuffle($str);
		if(isset($_SERVER['QUERY_STRING'])){
			$istr = $_SERVER['QUERY_STRING'];
			$arr = explode('=',$istr);
			print_r($arr);
			$i = $arr[1];
		}else{
			echo 'f';
			$i=0;
		}
		$sql = "SELECT * FROM test1 WHERE id=".$str[$i];
		$query = $db->query($sql);
		while($r = $query->fetch(PDO::FETCH_ASSOC)){
			echo "<h2>Q".$str[$i].". ".$r['question']."</h2>";
			echo "<input type='radio' name='ans' value='".$r['option1']."' >".$r['option1']."<br><br>";
			echo "<input type='radio' name='ans' value='".$r['option2']."' >".$r['option2']."<br><br>";
			echo "<input type='radio' name='ans' value='".$r['option3']."' >".$r['option3']."<br><br>";
			echo "<input type='radio' name='ans' value='".$r['option4']."' >".$r['option4']."<br><br>";
								


								
	}
	$i+=1;
	
	
	echo "<a id='anchor' href='test1.php?i=<?php echo $i;?>' name='next' ><img src='http://www.clker.com/cliparts/x/0/p/o/d/v/next-arrow-hi.png' id='anchr' alt='submit' height='40px
	width='40px' style='margin-left:500px;'></a>";
	echo "<input type=\"submit\" value=\"submit\" name=\"submit\">";
	echo "<input type='text' id='tereans' value=''>";		
	?>
	</div>
	</form>
</body>
<script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
<!-- <script type="text/javascript" src="test.js"></script>-->
<script type="text/javascript" src="test1.js">
</html>