<?php
	// ini_set('display_errors',1); 
// error_reporting(E_ALL);
include('../resources/header.php');

	if($_GET['f']=='login'){
		include('moodleauth2.php');
		
		}
		
		
//$urlPath = $gt35;//override url path value for class
	function getJSON($value,$postval,$urlPath){
		
		$url = $urlPath.'/back/back.php?f='.$value;
		$postdata = $postval;
		
		$c = curl_init();
		curl_setopt($c, CURLOPT_FOLLOWLOCATION,true);
		curl_setopt($c, CURLOPT_HTTPHEADER, array('Content-Type' => 'application/xml'));
		curl_setopt($c, CURLOPT_URL, $url);
		curl_setopt($c, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($c, CURLOPT_POST, true);
		curl_setopt($c, CURLOPT_POSTFIELDS,$postdata);
		
		$result = curl_exec ($c); 
		if(!$result){
			echo 'no result (back)<br>';
			echo $url.'<br>';
			print_r($postval);
		}
		curl_close ($c);
		return $result;
	}
	
	//trig
	if($_GET['f']== 'logout'){
		$_SESSION = array();
		session_destroy();
		}
	if($_GET['f']=='getCourses'){
		$postval = array('username' => $_POST['username']);
		echo getJSON($_GET['f'],$postval,$gt35);
		}


?>


	