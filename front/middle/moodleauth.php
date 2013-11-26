<?php

$loginUrl = "https://moodleauth00.njit.edu/cpip_serv/login.aspx?esname=moodle" ;
$__VIEWSTATE = "/wEPDwUJNDIzOTY1MjU5ZGQdLVY+81xpmN0ATE7y41EHAhVaCA==" ;
$__EVENTVALIDATION = "/wEWBAK7zbGBDQLr9O+IBwK01ba+BAKC3IeGDOn1GTxupWw9xfJhOXrBSFX6INdC" ;

//initialize curl
$ch = curl_init();
//Set the URL we want to work with
curl_setopt($ch, CURLOPT_URL, $loginUrl);
// Enable HTTP POST
curl_setopt($ch, CURLOPT_POST, 1);
//Set the post parameters
curl_setopt($ch, CURLOPT_POSTFIELDS, '__VIEWSTATE='.$__VIEWSTATE.'&txtUCID='.$_POST["username"].'&txtPasswd='.$_POST["password"].'__EVENTVALIDATION='.$__EVENTVALIDATION);
//Handle cookies for the login
curl_setopt($ch, CURLOPT_COOKIEJAR, 'cookie.txt');
//execute the request (the login)
$store = curl_exec($ch);

?>