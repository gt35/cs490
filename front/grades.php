<?php
session_start();
$crn = $_POST['DropDown'];

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
	margin-bottom: 0px;
	padding-bottom: 10px;
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

p {
		font-family: Arial, Helvetica, sans-serif;
		font-weight: bold;
		color: #06C;
		font-size: 13px;
}

</style>
</head>

<body>

<div class="login" id="login">

  <center>
My Grades
  </center>
  
</div>

<div id = "wrapper" width = 100%; style="margin: 0 auto;">

<div id = grade; style="padding-top:60px; width:100%; margin: 0 auto;" >

	<center>
	<div id = gradeContainer>
		<script type="text/javascript">

			var JSONObject = {"grade":"0"};		<!--replace this hard coded JSONObject with the actual retrieved JSON object for grade-->

			var grade = JSONObject.grade[0];

			document.write("<p>Your exam grade is " + grade + "</p>");

			document.write("Exam Solutions: <br><br>");
		</script>



		<script>
	
	
	var JSONAnswers = {"questions":[{"id":"6","crn":"1","text":"what is java","a":"coffe","b":"bean","c":"programming language","d":"all of the above","ans":"d","weight":"10"},{"id":"9","crn":"1","text":"What is the best pokemon?","a":"pikachu","b":"mr cool guy","c":"sandslash","d":"Blastoise","ans":"a","weight":"10"},{"id":"34","crn":"1","text":"Which of the following is the keyword for the integer data type in Java?","a":"int","b":"inty","c":"ints","d":"double","ans":"a","weight":"10"},{"id":"35","crn":"1","text":"Which of these statements is invalid?","a":"String name = \"Daniel\";","b":"int number = 5;","c":"boolean isFalse = false;","d":"int numbers = name;","ans":"d","weight":"10"},{"id":"39","crn":"1","text":"What is CS 490?","a":"A class on software engineering","b":"I have no idea","c":"A math course","d":"Random Answer","ans":"a","weight":"10"},{"id":"40","crn":"1","text":"this question is worth 100 points in weight.","a":"this is the right answer","b":"dont get it wrong","c":"you will fail","d":"im serious","ans":"a","weight":"100"},{"id":"41","crn":"1","text":"This question is worth an incredible amount of points.","a":"better get it right","b":"or you will surely fail","c":"maybe even worse","d":"who knows","ans":"a","weight":"90000000"},{"id":"42","crn":"1","text":"test","a":"right","b":"wrong","c":"wrong","d":"wrong","ans":"a","weight":"10"},{"id":"48","crn":"1","text":"Wgat s8r ","a":"","b":"","c":"rught","d":"","ans":"c","weight":"20"},{"id":"49","crn":"1","text":"Test question about numbers.","a":"1","b":"-1","c":"0","d":"pi","ans":"d","weight":"2"},{"id":"50","crn":"1","text":"What is the name of this course?","a":"CS490","b":"IT101","c":"CS102","d":"MTH473","ans":"a","weight":"1"},{"id":"51","crn":"1","text":"first","a":"a","b":"b","c":"c","d":"d","ans":"a","weight":"1"},{"id":"52","crn":"1","text":"first3","a":"a","b":"dsd","c":"sf","d":"ss","ans":"b","weight":"2"},{"id":"53","crn":"1","text":"second3","a":"aa","b":"sd","c":"asd","d":"asdas","ans":"d","weight":"0"},{"id":"54","crn":"1","text":"first2","a":"a","b":"b","c":"c","d":"d","ans":"c","weight":"0"},{"id":"55","crn":"1","text":"first3","a":"a","b":"b","c":"c","d":"d","ans":"c","weight":"0"},{"id":"56","crn":"1","text":"second3","a":"a","b":"b","c":"c","d":"d","ans":"c","weight":"0"},{"id":"63","crn":"1","text":"What is java?","a":"A programming language","b":"Not a programming language","c":"a constructor","d":"a method","ans":"a","weight":"1"},{"id":"64","crn":"1","text":"What is the name of this course?","a":"CS490","b":"CS431","c":"CS101","d":"IT202","ans":"a","weight":"1"}]}; 

		for(var key in JSONAnswers.questions){

			var id = JSONAnswers.questions[key].id;

		 	var text = JSONAnswers.questions[key].text;

		 	var answers = JSONAnswers.questions[key].ans;

		 	document.write(id + ". " + text + "<br>");		//all the questions
		 	
		 	var a = JSONAnswers.questions[key].a;
		 	document.write("a" + ". ");						//gives the "a. " before each answer for a
		 	document.write(a + "<br>");

		 	var b = JSONAnswers.questions[key].b;
		 	document.write("b" + ". ");						//gives the "b. " before each answer for b
		 	document.write(b + "<br>");

		 	var c = JSONAnswers.questions[key].c;
		 	document.write("c" + ". ");						//gives the "c. " before each answer for c
		 	document.write(c + "<br>");

		 	var d = JSONAnswers.questions[key].d;
		 	document.write("d" + ". ");						//gives the "d. " before each answer for d
		 	document.write(d + "<br>");

		 	document.write("<b>CORRECT ANSWER: " + answers + "</b><br><br><br>");
		}


</script>

	</div>
	</center>



</div>

<div class="login" id = "footer"> <center>


<a href="http://web.njit.edu/~ac422/cs490/front/studentWelcome.php">Visit the Main Menu</a>     |     
To logout, please <a href="http://web.njit.edu/~jdr22/cs490/middle/logout.php">click here.</a>

</center></div>


</div>


</body>

</html>
