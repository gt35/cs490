<?php
	/*function list to return certain data encoded in json for front
	*/
/* 	include('../resources/header.php');
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
			echo 'no result <br>';
			}
		curl_close ($c);
		echo $result;
	} */
	
/* 	$_POST['username'] = 'gt35';
	$postval = array('username' => $_POST['username']);
	$value = "getCourses";
	getJSON($value,$postval,$urlPath);
	 */

/* 	if(isset($_GET['function'])){//just an example of how this would work assume functions is getSemesters
		$f = $_GET['function'];
		$arr = array('ucid' => $_POST['ucid']);
		$functionCall=true;
		getJSON($f,$arr,$urlPath);
	} */
?>


	