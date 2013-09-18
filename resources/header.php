<?php
	//everyone should have this header on their njit server, cURL only needs to be used for passing data
	
	 //database configuration
    
    //config for local db COMMENT OUT DO NOT DELETE
	// define('db_host', "127.0.0.1");
        // /**custom var for faster local perfomance, 
									// need to change config.inc.php localhost 
									// to 127.0.0.1 for any effect*/
									
   // //define('db_host', "localhost");
   // define('db_name', "thh4");
   // define('db_pass', "password");
  // define('db_user', "localhost");
    
    //config for njit sql server COMMENT OUT DO NOT DELETE
	
       define('db_host', "sql.njit.edu");
       define('db_name', "gt35");
       define('db_pass', "9FPOLyjl");
       define('db_user', "gt35");
	
    //echo ("dbconfig.php loaded");
	
	//default url paths for ease of use
	
	/*
	individualized urls for release, 
	change $urlPath to these in corresponding files 
	to override*/
	$andrew = 'http://web.njit.edu/~andrew/cs490';//front
	$jdr22 = 'http://web.njit.edu/~jdr22/cs490';//middle
	$gt35 = 'http://web.njit.edu/~gt35/cs490';//back
	$local = 'http://localhost/cs490';//local
	/**
		current path used in all files, can be ovveriden*/
		global $urlPath;
	$urlPath = $gt35;
	$con = new mysqli(db_host, db_user, db_pass, db_name); 
?>