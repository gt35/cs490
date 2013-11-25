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
	// okay so we want to get a JSON object, that contains all the questions in the bank for the course
	// we are working on
	// we are going to use the function "allQuestions"
	// the source code, for reference is in back/func.php , line 130
	// we call this function by using the php back function giaspur wrote
	// the first argument is the name of the function
	// the second is info to POST to function (if applicable)
	// the third is a partial URL, giaspur conviently defined these in header,
	// so if since we used the php function include() we have access to those vars
	// the variable is just $gt35
	// so lets call our function
	// in this case, we know our name allQuestions
	// its not a void function, we want to return our query based on a crn, so thats the 2nd arg
	// and third is the usual partial URL for giaspurs code
	<?php
		$crn = $_SESSION['crnNumber'];
		//back('allQuestions',$crn,$gt35);
		// but that is in php and we want to manipulate in js
		// so first lets assign it to a php variable
		$JSONOutput = back('allQuestions',$crn,$gt35)
	?>
	// there is no fancy way to convert stuff from php to js, as far as I know
	// so you can just echo the code to do a simple copy and paste job
	// so this should give us a string formatted in JSON to manipulate in js to display all the course's questions
	var JSONQuestions = <?php echo $JSONOutput; ?>;

//var JSONOBJECT = <?php //echo back('allQuestions',NULL,$gt35);?>;		// Giaspurs way of retrieving JSON object, wasnt working at the moment (I hard coded a json object for testing)
	
	
	var JSONOBJECT = {"questions":[{"id":"9","text":"What is the best pokemon?","a":"pikachu","b":"mr cool guy","c":"sandslash","d":"Blastoise","ans":"a","weight":"10"},{"id":"34","text":"Which of the following is the keyword for the integer data type in Java?","a":"int","b":"inty","c":"ints","d":"double","ans":"a","weight":"10"},{"id":"35","text":"Which of these statements is invalid?","a":"String name = \"Daniel\";","b":"int number = 5;","c":"boolean isFalse = false;","d":"int numbers = name;","ans":"d","weight":"10"},{"id":"40","text":"this question is worth 100 points in weight.","a":"this is the right answer","b":"dont get it wrong","c":"you will fail","d":"im serious","ans":"a","weight":"100"}]};


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
<div class="login" id = "footer"> <center>
<a href="http://web.njit.edu/~ac422/cs490/front/professorWelcome2.php">Visit the Main Menu</a>     |  
<a href="http://web.njit.edu/~ac422/cs490/front/questionBank1.php">Choose Open Ended Questions</a>     |  
To logout, please <a href="http://web.njit.edu/~jdr22/cs490/middle/logout.php">click here.</a></center></div>

</div>


</body>

</html>
