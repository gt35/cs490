<?php

$loginUrl ="https://cp4.njit.edu/cp/home/login";
$uuid = "0xACA021";

//initialize curl
$ch = curl_init();
//Set the URL we want to work with
curl_setopt($ch, CURLOPT_URL, $loginUrl);
// Enable HTTP POST
curl_setopt($ch, CURLOPT_POST, 1);
//Set the post parameters
curl_setopt($ch, CURLOPT_POSTFIELDS, 'pass='.$_POST["password"].'&user='.$_POST["username"].'&uuid'.$uuid);
//Handle cookies for the login
//curl_setopt($ch, CURLOPT_COOKIEJAR, 'cookie.txt');
//curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

//execute the request (the login)
$store = curl_exec($ch);

?>


