<?php session_start(); 
$_SESSION['views']=1;
?>

<html>
<head>
<title>Welcome to learnToCode!</title>
<script src="http://web.njit.edu/~gt35/cs490/front/SpryAssets/SpryEffects.js" type="text/javascript"></script>
<script type="text/javascript">
function MM_effectAppearFade(targetElement, duration, from, to, toggle)
{
	Spry.Effect.DoFade(targetElement, {duration: duration, from: from, to: to, toggle: toggle});
}
</script>
<script type="text/javascript" src="file:///C|/Users/Andrew_2/Desktop/style.css"></script>
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
}
#wrapper #footer {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 13px;
	font-weight: bold;
	color: #FFF;
	background-color: #78C659;
	position: absolute;
	bottom: 0px;
	margin-bottom: 10px;
	padding-bottom: 10px;
	margin-top: 10px;
	padding-top: 10px;
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
	//margin: 0px;
	//padding: 0px;
	display: block;
}
</style>
</head>

<body>

<div id="login">
  <form action="http://web.njit.edu/~gt35/cs490/middle/middle.php?f=login" method="post" name="form1" class="login">
  <center>
    <label for="username3">username: </label>
    <input type="text" name="username" id="username3">
    <label for="password">password: </label>
    <input type="password" name="password" id="password">
    <input name="reset" type="submit" class="button" id="reset" value="Reset">
<input name="submit" type="submit" class="button" id="submit" value="Submit">
</center>
  </form>
</div>

<div id = "wrapper" width = 100%; style="margin: 0 auto;">
<center>
<div id = div1; style="padding-top:90px; width:100%; " > 
<img src="http://web.njit.edu/~gt35/cs490/front/f03.jpg" width="" height="" class="image" onload="MM_effectAppearFade(this, 4100, 0, 100, false)">
<img src="http://web.njit.edu/~gt35/cs490/front/f01.jpg" width="" height="" class="image" onload="MM_effectAppearFade(this, 2400, 0, 100, false)">
<img src="http://web.njit.edu/~gt35/cs490/front/f02.jpg" width="" height="" class="image" style="margin-top:0px; padding-top:0px;" onload="MM_effectAppearFade(this, 4100, 0, 100, false)">  </div>
</center>
<div class="login" id = "footer"> <center>Welcome to learnToCode! Please sign in above in order to continue. Good luck!</center></div>

</div>


</body>

</html>
