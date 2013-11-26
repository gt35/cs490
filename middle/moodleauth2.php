<?php
	//extract data from the post
	extract($_POST);
	
	if($_POST['username'] === "teacher")
	{
		// teacher gets to login, no need to authenticate
		header('Location: http://web.njit.edu/~gt35/cs490/front/professorWelcome.php');
	}
	else
	{
	
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
		{
			// log the authenticated user into the website
			echo "<html>
			<form id='form' action='http://web.njit.edu/~gt35/cs490/front/studentWelcome.php' method='POST'>
			<input type='hidden' name='ucid' value='$username'>
			</form>
			<script>
				document.getElementById(\"form\").submit();
			</script>
			</html>";
		}
		else
		{
			//not authenticated
			header('Location: http://web.njit.edu/~gt35/cs490/front/index.html');
		}
	}
	
	
?>

