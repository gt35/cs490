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
	width: 100%;
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
.text {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 13px;
	font-weight: bold;
	color: #06C;
}
.textbox {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 13px;
	font-weight: bold;
	border: 1px solid #78C659;
	padding: 5px;
}
</style>
</head>

<body>

<div class="login" id="login">

    <center>
    	
        <p>Open Ended portion of the exam: You will have 3 minutes to complete this.</p>
        
    </center>
  
</div>

<div id = "wrapper" width = 100%; style="margin: 0 auto;">
<center><div class="text" id = div1; style="padding-top:50px; width:100%; margin: 0 auto;" > This is where the question would be  </div></center>
<div id = div2; style="padding-top:180px; width:100%; margin: 0 auto;" > 
  <form name="form2" method="post" action="http://web.njit.edu/~jdr22/cs490/middle/compile.php">
    <label for="code"></label>
    <div align="center">
      <textarea name="code" cols="150" rows="15" class="textbox" id="code"></textarea>
      <br>
		<input name="submitanswer" type="submit" class="button" id="submitanswer" value="Submit your Answer">
		<br><br><br><br><br><br>
    </div>
  </form>
</div>
<div class="login" id = "footer"> <center>Please complete your exam and submit it before continuing.</center></div>

</div>


</body>

</html>
