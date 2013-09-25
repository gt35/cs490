<?php

//extract data from the post
extract($_POST);

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
	{
    //echo 'authenticated';
	$welcomeURL = 'http://web.njit.edu/~ac422/cs490/welcome.html';
	//open connection
	$ch = curl_init();
	//set the url
	curl_setopt($ch,CURLOPT_URL, $welcomeURL);
	
	$fields = array(
						'username' => urlencode($username)
				);
				
	curl_setopt($ch,CURLOPT_POST, count($fields));
	curl_setopt($ch,CURLOPT_POSTFIELDS, $fields_string);
				
	curl_exec($ch);
	//close connection
	curl_close($ch);
	
	}
else
{
	//echo 'not authenticated' 
	$failURL = 'http://web.njit.edu/~ac422/cs490/authfail.html';
	//open connection
	$ch = curl_init();
	//set the url
	curl_setopt($ch,CURLOPT_URL, $failURL);
	curl_exec($ch);
	//close connection
	curl_close($ch);
}



?>

