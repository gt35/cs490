<?php
	include('../resources/header.php');
	function getElements($q){
		$a = array();//temp array to store shit
		$con = new mysqli(db_host, db_user, db_pass, db_name); 
		$result = $con->query($q);
		while($row = $result->fetch_row()){
			
			array_push($a,$row);
		}
		return $a;
	}
	function getCourses($ucid){
		$q = "SELECT c.name, e.crn
		FROM  courses c, users u
		INNER JOIN enrolled e
		ON u.ucid = e.ucid
		WHERE u.ucid = '".$ucid."'
		AND c.crn = e.crn";
		return array('classes' => getElements($q));
	}
	//$u = "gt35";
	if(isset($_GET['f'])){
		$f = $_GET['f'];
		$u = $_POST['username'];
		if($f == 'getCourses'){	
		echo json_encode(getCourses($u));
		}
	// else echo 'did not recieve data <br>';
	// echo 'this is the function passed '.$_GET['f'];
	}
?>