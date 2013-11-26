<?php
	include('../resources/header.php');
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
			
			<div id = grade; style="padding-top:180px; width:100%; margin: 0 auto;" >
				<?php/*
					$arr = array('username'=>$_SESSION['ucid'],'crn'=>$_SESSION['crnNumber'],'quizID'=>$_SESSION['quizID']);
					$x = back('getGrades',$arr,$gt35);
					echo $x;
					$y = back('getQuizQuestions',$arr,$gt35); */
				?>
				<center>
					<div id = gradeContainer>

						<script type="text/javascript">

							
							var JSONObject = <?php echo $x; ?>;
							var JSONAnswers	= <?php echo $y; ?>;
							var grade = JSONObject.grade[0];
							document.write("<p>Your exam grade is " + grade + "</p>");

							
						
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
