<?php
	echo 'session before:<br>';
	print_r($_SESSION);
	session_destroy;
	$_SESSION = array();
	echo '<br>session after:<br>';
	print_r($_SESSION);
	
	?>