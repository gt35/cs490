<?php
session_start();
include("../resources/header.php");

$url = "http://web.njit.edu/~gt35/cs490/back/back.php?f=getCourses";

$crn = $_POST['dropDown'];
//$_SESSION['crnNumber'] = $crn;


?>

<html>
<head>
<title>Welcome to learnToCode!</title>
<script src="SpryAssets/SpryEffects.js" type="text/javascript"></script>
<script type="text/javascript">
function MM_effectAppearFade(targetElement, duration, from, to, toggle)
{
	Spry.Effect.DoFade(targetElement, {duration: duration, from: from, to: to, toggle: toggle});
}
</script>
<script type="text/javascript" src="style.css"></script>
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

#date-time {
		font-family: Arial, Helvetica, sans-serif;
	font-weight: bold;
	color: #06C;
	font-size: 30px;
}

</style>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>

<body>

<div class="login" id="login">
  
  <center>
<p>Welcome to learnToCode! Check grades, insert questions, and choose from the question bank below.</p>

</center>

</div>

<div id = "wrapper" width = 100%; style="margin: 0 auto;">

    <div id = div1; style="padding-top:180px; width:100%; margin: 0 auto;" > 
        <center>     
        	<p class="headers">Welcome, Professor! Please select from the options below.</p>

<!-- Javascript begins here -->

				<script type="text/javascript">
				document.write ('<p><span id="date-time">', new Date().toLocaleString(), '<\/span><\/p>')
					if (document.getElementById) onload = function () {
						setInterval ("document.getElementById ('date-time').firstChild.data = new Date().toLocaleString()", 50)
				}
				</script>

				<script type="text/javascript">
					var JSONObject = {"classes":[{"name":"CS490","fullName":"SOFTWARE ENGINEERING","crn":"1"},{"name":"CS435","fullName":"ADV DATA STRUCTURES","crn":"2"},{"name":"MATH346","fullName":"MATHEMATICS OF FINANCE","crn":"4"},{"name":"IT266","fullName":"GAME MOD DEVELOPMENT","crn":"3"}]};

					document.write("<form action='professorWelcome2.php' method='post' name='dropDown' class='dropDown'>");		// ** MAKE SURE TO ADD FORM BEGINNING
					document.write('<select name="dropDown" class="dropDownBox" id="dropDown">');		// the select form header

						for(var key in JSONObject.classes){
							var name = JSONObject.classes[key].name;
							var crn = JSONObject.classes[key].crn;

							document.write("<option value = " + crn + ">" + name + "</option>");
						}
						var crn = JSONObject.classes[key].crn;

					document.write("<input type='submit' value='Submit'> </form>");		// the submit button, already have closing form tag
					
				</script>

<!-- Javascript ends here -->

           <p class="headers">Good luck!</p>


      </center>
        
    </div>

  <div class="login" id = "footer"> <center>Welcome to learnToCode! To logout, please <a href="/cs490/front/logoutt.php">click here.</a> </center></div>

</div>


</body>

</html>
