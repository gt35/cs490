<?php
	//everyone should have this header on their njit server, cURL only needs to be used for passing data
	
	//database configuration
    $dbSet = 1;//db flag
	$debug = 1;//php debug flag
    //config for local db COMMENT OUT DO NOT DELETE
	
	if($dbSet == 0){
		define('db_host', "127.0.0.1");
        // /**custom var for faster local perfomance, 
		// need to change config.inc.php localhost 
		// to 127.0.0.1 for any effect*/
		
		////define('db_host', "localhost");
		define('db_name', "gt35");
		define('db_pass', "password");
		define('db_user', "localhost");
	}
    //config for njit sql server COMMENT OUT DO NOT DELETE
	if($dbSet == 1){
		define('db_host', "sql.njit.edu");
		define('db_name', "gt35");
		define('db_pass', "9FPOLyjl");
		define('db_user', "gt35"); 
	}
    //echo ("dbconfig.php loaded");
	
	//default url paths for ease of use
	
	/*
		individualized urls for release, 
		change $urlPath to these in corresponding files 
	to override*/
	$ac422 = 'http://web.njit.edu/~ac422/cs490';//front
	$jdr22 = 'http://web.njit.edu/~jdr22/cs490';//middle
	$gt35 = 'http://web.njit.edu/~gt35/cs490';//back
	$local = 'http://localhost/cs490';//local
	/**
	current path used in all files, can be ovveriden*/
	global $urlPath;
	$urlPath = $local;
	if($debug == 1){
		ini_set('display_errors',1); 
		error_reporting(E_ALL);
	}
	
	
	//function used in middle and front to get data
	
	
	function middle($value,$postval,$urlPath){//gets info from middle
		
		$url = $urlPath.'/middle/middle.php?f='.$value;
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
			echo 'no result (middle)<br> URL passed: ';
			echo $url.'<br> posted: ';
			print_r($postval);
		}
		curl_close ($c);
		return $result;
	}
		function back($value,$postval,$urlPath){//gets info from middle
		
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
			echo 'no result (back)<br> URL passed: ';
			echo $url.'<br> posted: ';
			print_r($postval);
		}
		curl_close ($c);
		return $result;
	}
	//$con = new mysqli(db_host, db_user, db_pass, db_name); 
?>