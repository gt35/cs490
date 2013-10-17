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
	padding-top: 10px;
	padding-bottom: 10px;
}
#wrapper #footer {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 13px;
	font-weight: bold;
	color: #FFF;
	background-color: #78C659;
	position: fixed;
	bottom: 0px;
	margin-bottom: 10px;
	padding-bottom: 10px;
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
</style>
</head>

<body>

<div class="login" id="login">

  <center>
Welcome to the Question Bank, Professor!
  </center>

</div>

<div id = "wrapper" width = 100%; style="margin: 0 auto;">

<div id = exam; style="padding-top:50px; width:100%; margin: 0 auto; padding-left:40px;" >
<?php
	include('../resources/header.php');
	$url = $gt35."/back/back.php?f=gradeQuiz&quizID=1&u=".$_GET['u'];
	
	echo "<form action='$url' method='post' name='form1' class='submitquestions'>";
	$arr = array('quizID'=>$_GET['quizID']);
	//echo back('getQuizQuestions',$arr,$gt35);
	?>
<script>

var JSONOBJECT = <?php 
	echo back('getQuizQuestions',$arr,$gt35);?>;

//document.write("<form action='../back/back.php?f=convertAnsStr' method='post' name='form1' class='submitquestions'>");// echo instead

for(var key in JSONOBJECT.questions){

	var id = JSONOBJECT.questions[key].id;

 	var text = JSONOBJECT.questions[key].text;
 	 	document.write(text + "<br>");
 	var a = JSONOBJECT.questions[key].a;
 	document.write("<input type='radio' name= '" + id + "' value = 'a'>" + a + "<br>");
 	var b = JSONOBJECT.questions[key].b;
 	document.write("<input type='radio' name= '" + id + "' value = 'b'>" + b + "<br>");
 	var c = JSONOBJECT.questions[key].c;
 	document.write("<input type='radio' name= '" + id + "' value = 'c'>" + c + "<br>");
 	var d = JSONOBJECT.questions[key].d;
 	document.write("<input type='radio' name= '" + id + "' value = 'd'>" + d + "<br>");
}


document.write("<input type='submit' value='Submit your exam'> </form> <br><br><br><br><br><br><br>");// or just this

</script>







</div>

<div class="login" id = "footer"> <center>Welcome to learnToCode! Please sign in above in order to continue. Good luck!</center></div>

</div>


</body>

</html>
