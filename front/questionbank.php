<?php
session_start();
//print_r($_SESSION);
//print session_id();
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
	$url = $gt35."/back/back.php?f=updateQuiz";
	//$url = 'test.php';
	echo "<form action='$url' method='post' name='form1' class='submitquestions'>";  

?>


<script>
	
	<?php
		$gt35 = 'http://web.njit.edu/~gt35/cs490'; //back
		$crn = array('crn'=>$_SESSION['crnNumber']);
		$JSONOutput = back('allQuestions',$crn,$gt35);
		//echo $JSONOutput;
	?>
	
	var JSONQuestions = <?php echo $JSONOutput; ?>;

for(var key in JSONQuestions.questions){

	var id = JSONQuestions.questions[key].id;


 	var text = JSONQuestions.questions[key].text;

 	document.write("<input type='checkbox' name= " + id + ">");
 	document.write(id + ". " + text + "<br>");		//all the questions
 	
 	var a = JSONQuestions.questions[key].a;
 	document.write("a" + ". ");						//gives the "a. " before each answer for a
 	document.write(a + "<br>");

 	var b = JSONQuestions.questions[key].b;
 	document.write("b" + ". ");						//gives the "b. " before each answer for b
 	document.write(b + "<br>");

 	var c = JSONQuestions.questions[key].c;
 	document.write("c" + ". ");						//gives the "c. " before each answer for c
 	document.write(c + "<br>");

 	var d = JSONQuestions.questions[key].d;
 	document.write("d" + ". ");						//gives the "d. " before each answer for d
 	document.write(d + "<br><br>");
}
var quizID = <?php echo $_SESSION['quizID'];?>;
								document.write("<input type='hidden' name='quizID' value="+quizID+">");//additional info
document.write("<input type='submit' value='Submit Questions'> </form> <br><br><br><br><br>");

</script>










</div>
<div class="login" id = "footer"> <center>
<a href="http://web.njit.edu/~jdr22/cs490/middle/toMainMenu.php">Visit the Main Menu</a>     |  
<a href="http://web.njit.edu/~ac422/cs490/front/questionBank1.php">Choose Open Ended Questions</a>     |  
To logout, please <a href="http://web.njit.edu/~jdr22/cs490/middle/logout.php">click here.</a></center></div>

</div>


</body>

</html>
