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
	function runQuery($q){
		$con = new mysqli(db_host, db_user, db_pass, db_name); 
		$result = $con->query($q);
		if($result){
			return $result;
		}
	}
	function getCourses($ucid){
		$q = "SELECT c.name, c.fullName, e.crn
		FROM  courses c, users u
		INNER JOIN enrolled e
		ON u.ucid = e.ucid
		WHERE u.ucid = '".$ucid."'
		AND c.crn = e.crn";
		$result = runQuery($q);
		return $result;
	}
	if(isset($_GET['f'])){
		$f = $_GET['f'];
		$u = $_POST['username'];
		if($f == 'getCourses'){	
			$result = getCourses($u);
			while($row = mysqli_fetch_assoc($result)){
				$c[] = $row;
			}
			$classes = array('classes'=>$c);
			echo json_encode($classes);
		}
	}
?>