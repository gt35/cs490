<?php
	session_start();
	include('file:///C|/Users/Andrew_2/Application Data/SSH/resources/header.php');
	$value = "getCourses";
	$postval =array('username'=>$_GET['u']);
	//echo middle($value,$postval,$gt35);
	$crn = $_POST['dropDown'];		// gets the crn value of the dropDown box in professorWelcome and assigns it to the php variable $crn
	$_SESSION['crnNumber'] = $crn;
?>

<html>
	<head>
		<title>Welcome to learnToCode!</title>
		<script src="file:///C|/Users/Andrew_2/Application Data/SSH/temp/SpryAssets/SpryEffects.js" type="text/javascript"></script>
		<script type="text/javascript">
			function MM_effectAppearFade(targetElement, duration, from, to, toggle)
			{
				Spry.Effect.DoFade(targetElement, {duration: duration, from: from, to: to, toggle: toggle});
			}
			
		</script>
		<script type="text/javascript" src="file:///C|/Users/Andrew_2/Application Data/SSH/temp/style.css"></script>
		<style type="text/css">
			.button {
			background-color: #78C659;
			list-style-position: outside;
			list-style-type: square;
			-webkit-transition: all 2s ease-in-out 1s;
			-moz-transition: all 2s ease-in-out 1s;
			-ms-transition: all 2s ease-in-out 1s;
			-o-transition: all 2s ease-in-out 1s;
			transition: all 2s ease-in-out 1s;
			border: thin solid #DEF3BB;
			color: #FFF;
			font-family: Arial, Helvetica, sans-serif;
			text-align: center;
			font-size: 12px;
			margin-top: 5px;
			margin-right: 3px;
			margin-bottom: 5px;
			margin-left: 3px;
			padding-top: 5px;
			padding-right: 3px;
			padding-bottom: 5px;
			padding-left: 3px;
			}
			
			.login {
			background-color: #78C659;
			font-family: Arial, Helvetica, sans-serif;
			font-size: 13px;
			color: #FFF;
			font-weight: bold;
			padding-top:3px;
			padding-bottom:3px;
			position:fixed;
		width:100%;
		}
		#wrapper #footer {
		font-family: Arial, Helvetica, sans-serif;
		font-size: 13px;
		font-weight: bold;
		color: #FFF;
		background-color: #78C659;
		position: fixed;
		bottom: 0px;
		margin-bottom: 0px;
		padding-bottom: 20px;
		margin-top: 10px;
		padding-top: 10px;
		margin-left:0px;
		width:100%;
		}
		#login .login center #username3 {
		font-family: Arial, Helvetica, sans-serif;
		font-size: 12px;
		color: #3B8EB6;
		border-top-style: solid;
		border-right-style: solid;
		border-bottom-style: solid;
		border-left-style: solid;
		border-top-color: #FFF;
		border-right-color: #FFF;
		border-bottom-color: #FFF;
		border-left-color: #FFF;
		font-weight: bold;
		}
		#login .login center #password {
		color: #2F74AB;
		}
		.image {
		margin: 0px;
		padding: 0px;
		display: block;
		}
		.questionHeader {
		font-family: Verdana, Geneva, sans-serif;
		font-size: 13px;
		font-weight: bold;
		color: #06F;
		margin: 2px;
		padding: 2px;
		}
		.textboxes {
		font-family: Arial, Helvetica, sans-serif;
		font-size: 13px;
		font-weight: bold;
		color: #3A66FF;
		border: 1px solid #78C659;
		padding-bottom: 0px;
		margin-bottom: 6px;
		}
		
		.q1 {
		font-family: Arial, Helvetica, sans-serif;
		font-size: 13px;
		font-weight: bold;
		color: #3A66FF;
		border: 1px solid #78C659;
		padding-bottom: 0px;
		margin-bottom: 6px;
		}
		
		.enterQuestion {
		border: 1px solid #78C659;
		font-family: Arial, Helvetica, sans-serif;
		font-size: 13px;
		font-weight: bold;
		color: #333;
		margin-bottom: 8px;
		}
		.headers {
		font-family: Arial, Helvetica, sans-serif;
		font-size: 16px;
		font-weight: bold;
		color: #06C;
		padding: 5px;
		border: 1px dotted #78C659;
		margin-top: 3px;
		margin-right: 3px;
		margin-bottom: 15px;
		margin-left: 3px;
		}
		.choices {
		font-family: Arial, Helvetica, sans-serif;
		font-weight: bold;
		color: #06C;
		font-size: 13px;
		margin-top: 3px;
		margin-right: 3px;
		margin-bottom: 3px;
		margin-left: 3px;
		padding-top: 3px;
		padding-bottom: 1px;
		}
		a:link {
		text-decoration: none;
		color: #06C;
		}
		a:visited {
		text-decoration: none;
		color: #03C;
		}
		a:hover {
		text-decoration: underline;
		}
		a:active {
		text-decoration: none;
		}
		</style>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		</head>
		
		<body>
		
		<div class="login" id="login">
		
		<center>
		<p>Welcome to learnToCode! Make sure to complete both parts of your exam. Good luck!</p>
		
		</center>
		
		</div>
		
		<div id = "wrapper" width = 100%; style="margin: 0 auto;">
		
		<div id = div1; style="padding-top:180px; width:100%; margin: 0 auto;" > 
        <center>     
		<p class="headers">Welcome! Please select what you would like to do below.<br>Current CRN: <?php echo $_SESSION['crnNumber']; ?></p>
		<table border="0">
		<tr>
<!-- 		<td><span class="choices">
				<?php 
				$url = "http://web.njit.edu/~ac422/cs490/front/takeexam.php".$_GET['u'];
				echo "<a href = $url>";
				?>
			Take your Exam part I [Multiple choice]</a></span></td>
		</tr> -->


		<!--this is where you would get the json object and display the stuff
		var x = http://web.njit.edu/~gt35/cs490/back/back.php?f=getCourses //returns a json object, so assign this to a variable and list them
		-->
		
		<?php
		// tutorial on how to do this: http://www.w3schools.com/php/php_sessions.asp
		// attempted will be a session variable created when takeexam is loaded
		if( isset($_SESSION['attempted']))
		{
			echo "<p> You have no current exams available </p>";
			// if you want to have some other html outputted here
			// use echo
		}
		else
		{
			// fill out the rest of the echos
		
		
			echo '<tr>
			<td><span class="choices"><a href="http://web.njit.edu/~ac422/cs490/front/takeexam.php">Take your Exam part I</a></span></td>
			</tr>';
			
			echo '<tr>
			<td><span class="choices"><a href="http://web.njit.edu/~ac422/cs490/front/testing.php">Take your Exam part II [open ended]</a></span></td>
			</tr>';
			
		}
		
		?>

		<tr>
		<td><span class="choices"><a href="http://web.njit.edu/~ac422/cs490/front/grades.php">Check your Grade</a></span></td>
		</table><br>
		<p class="headers">Good luck!</p>

		</center>
        
		</div>
		
		<div class="login" id = "footer"> <center>Welcome to learnToCode! To logout, please <a href="http://web.njit.edu/~jdr22/cs490/middle/logout.php">click here.</a></center></div>
		
		</div>
		
		
		</body>
		
		</html>
				
