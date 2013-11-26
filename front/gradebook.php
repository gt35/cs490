<?php 
session_start();
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
</style>
</head>

<body>

<div class="login" id="login">
  
  <center>
<p>Welcome, Professor!</p>
</center>
  
</div>

<div id = "wrapper" width = 100%; style="margin: 0 auto;">

    <div id = div1; style="padding-top:180px; width:100%; margin: 0 auto;" > 
        <center>     
        	<p> Grades for students should be entered here.
        </center>
        
    </div>

  <div class="login" id = "footer"> <center>
  
  <a href="http://web.njit.edu/~jdr22/cs490/middle/toMainMenu.php">Visit the Main Menu</a>     |  
  <a href="http://web.njit.edu/~ac422/cs490/front/form.php">Create quiz questions</a>     |  
  
  To logout, please <a href="http://web.njit.edu/~jdr22/cs490/middle/logout.php">click here.</a></center></div>

</div>


</body>

</html>
