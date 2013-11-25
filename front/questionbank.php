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

#wrapper #login{
	padding-top: 0px;
	margin-top: 0px;

}
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
	position: fixed;
	width: 100%;
	margin-top: 0px;
	margin-left: 0px;
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
	padding-bottom: 19px;
	margin-top: 10px;
	padding-top: 10px;
	margin-left: 0px;
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
<div id = questionbank; style="padding-top:50px;  padding-left:60px; width:100%; margin: 0 auto;" > 
<p> Please select from the following questions: </p>
<?php
	include('../resources/header.php');
	$url = $gt35."/back/back.php?f=saveQuiz";
	
	echo "<form action='$url' method='post' name='form1' class='submitquestions'>";
	//echo back('getQuizQuestions',$arr,$gt35);
	?>
<script>

var JSONOBJECT = <?php 
	echo back('allQuestions',NULL,$gt35);?>;


for(var key in JSONOBJECT.questions){

	var id = JSONOBJECT.questions[key].id;


 	var text = JSONOBJECT.questions[key].text;

 	document.write("<input type='checkbox' name= " + id + ">");
 	document.write(id + ". " + text + "<br>");		//all the questions
 	
 	var a = JSONOBJECT.questions[key].a;
 	document.write("a" + ". ");						//gives the "a. " before each answer for a
 	document.write(a + "<br>");

 	var b = JSONOBJECT.questions[key].b;
 	document.write("b" + ". ");						//gives the "b. " before each answer for b
 	document.write(b + "<br>");

 	var c = JSONOBJECT.questions[key].c;
 	document.write("c" + ". ");						//gives the "c. " before each answer for c
 	document.write(c + "<br>");

 	var d = JSONOBJECT.questions[key].d;
 	document.write("d" + ". ");						//gives the "d. " before each answer for d
 	document.write(d + "<br><br>");
}


document.write("<input type='submit' value='Submit Questions'> </form> <br><br><br><br><br>");

</script>


</div>
<div class="login" id = "footer"> <center>Welcome to learnToCode! Please sign in above in order to continue. Good luck! To logout, please <a href="/cs490/front/logoutt.php">click here.</a></center></div>

</div>


</body>

</html>
