<?php
	//extract data from the post
	extract($_POST);
	
	if($_POST['username'] === "teacher")
	{
		 $failURL = $gt35."/front/professorWelcome.php";
		// //open connection
		// $ch = curl_init();
		// //set the url
		// curl_setopt($ch,CURLOPT_URL, $failURL);
		// curl_exec($ch);
		// //close connection
		// curl_close($ch);
		header("Location: ".$failURL);
	}else{
	
	// add the extra input variables the POST request expects
	$__VIEWSTATE = '/wEPDwUJNDIzOTY1MjU5ZGQdLVY+81xpmN0ATE7y41EHAhVaCA==';
	$btnLogin = 'Login';
	$__EVENTVALIDATION = '/wEWBAK7zbGBDQLr9O+IBwK01ba+BAKC3IeGDOn1GTxupWw9xfJhOXrBSFX6INdC' ;
	
	//set POST variables
	$url = 'https://moodleauth00.njit.edu/cpip_serv/login.aspx?esname=moodle';
	$fields = array(
	'__VIEWSTATE' => urlencode($__VIEWSTATE),
	'txtUCID' => urlencode($username),
	'txtPasswd' => urlencode($password),
	'btnLogin' => urlencode($btnLogin),
	'__EVENTVALIDATION' => urlencode($__EVENTVALIDATION)
	);
	
	//url-ify the data for the POST
	//$fields_string ='';
	foreach($fields as $key=>$value) { $fields_string .= $key.'='.$value.'&'; }
	rtrim($fields_string, '&');
	
	//open connection
	$ch = curl_init();
	
	//set the url, number of POST vars, POST data
	curl_setopt($ch,CURLOPT_URL, $url);
	curl_setopt($ch,CURLOPT_POST, count($fields));
	curl_setopt($ch,CURLOPT_POSTFIELDS, $fields_string);
	
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	
	//execute post
	$result = curl_exec($ch);
	
	//close connection
	curl_close($ch);
	
	if (strpos($result,'Object moved') !== false) 
	{//if authed against moodle
		$value = "getCourses";
		//session_start();// starts session
		//$data = getJSON($value,$postval,$gt35);
		//echo 'authenticated';
		$welcomeURL = $gt35."/front/studentWelcome.php?u=".$_POST['username'];
		//$_SESSION['username']= $_POST['username'];
		//print_r($_SESSION);
		//open connection
		// $ch = curl_init();
		// // set the url		
		// curl_setopt($c, CURLOPT_FOLLOWLOCATION,true);
		// curl_setopt($c, CURLOPT_RETURNTRANSFER, true);
		// curl_setopt($ch,CURLOPT_URL, $welcomeURL);
		//$postval = array('username'=> $_POST['username']);
		// $fields = array(
		// 'username' => urlencode($username), 'data' => $data
		// );
		
		// curl_setopt($ch,CURLOPT_POST, true);
		// curl_setopt($ch,CURLOPT_POSTFIELDS, $fields);

		
		// curl_exec($ch);
		// // close connection
		// curl_close($ch);
		header("Location: ".$welcomeURL);
		
	}
	else
	{
		//echo 'not authenticated' 
		$failURL = $gt35."/front/authfail.php";
		//open connection
		// $ch = curl_init();
		// curl_setopt($c, CURLOPT_FOLLOWLOCATION,true);
		// curl_setopt($c, CURLOPT_RETURNTRANSFER, true);
		// //set the url
		// curl_setopt($ch,CURLOPT_URL, $failURL);
		
		// curl_exec($ch);
		// //close connection
		// curl_close($ch);
		header("Location: ".$welcomeURL);
	}
	}
	
	
?>

