<h1>BACK TEST PAGE</h1>
<?php
	include('../resources/header.php');
	include('func.php');
	echo'<hr><b>OUTPUT AREA:</b>';
	echo '<br><hr>';
	include('trig.php');
?>
<!--test template
</form><hr>
<form id="test1form" action="test.php?f=funcName" method="post">
	<input type="text" name="varname" placeholder="varname"/>
	<input type="submit" value="test" name="assntest" style="padding:5px;"/>
</form><hr>
-->
</form><hr>Test insertOpenEnded
<form id="test1form" action="test.php?f=insertOpenEnded" method="post">
	<input type="text" name="questionText" placeholder="text"/>
	<input type="text" name="type" placeholder="type"/>
	<input type="text" name="input" placeholder="input"/>
	<input type="text" name="output" placeholder="output"/>
	<input type="text" name="arguments" placeholder="args"/>
	<input type="text" name="name" placeholder="name"/>
	<input type="text" name="crn" placeholder="crn"/>
	<input type="submit" value="test" name="assntest" style="padding:5px;"/>
</form><hr>
<hr>Test getStudentAnsStr:
<form id="test1form" action="test.php?f=getStudentAnsStr" method="post">
	<input type="text" name="username" placeholder="ucid"/>
	<input type="text" name="quizID" placeholder="quizID"/>
	<input type="submit" value="test" name="assntest" style="padding:5px;"/>
</form><hr>
<hr>Test getCourses:
<form id="test1form" action="test.php?f=getCourses" method="post">
	<input type="text" name="username" placeholder="ucid"/>
	<input type="submit" value="test" name="assntest" style="padding:5px;"/>
</form><hr>
<hr>Test insertQuestion:
<form id="test1form" action="test.php?f=insertQuestion" method="post">
	<input type="text" name="text" placeholder="question text"/>
	<input type="text" name="a" placeholder="choice a" />
	<input type="text" name="b" placeholder="choice b" />
	<input type="text" name="c" placeholder="choice c" />
	<input type="text" name="d" placeholder="choice d" />
	<input type="text" name="ans" placeholder="correct answer" />
	<input type="text" name="weight" placeholder="score value of question" />
	<input type="submit" value="test" name="qInsert" style="padding:5px;"/>
</form><hr>
<hr>Test getQuestion:
<form id="test1form" action="test.php?f=getQuestion" method="post">
	<input type="text" name="qID" placeholder="put id of question here"/>
	<input type="submit" value="test" name="assntest" style="padding:5px;"/>
</form><hr>
<hr>Test saveQuiz:
<form id="test1form" action="test.php?f=saveQuiz" method="post">
	<input type="text" name="qIDstr" placeholder="put quiz question string here"/>
	<input type="submit" value="test" name="assntest" style="padding:5px;"/>
</form><hr>
<hr>Test getQuizQuestions:
<form id="test1form" action="test.php?f=getQuizQuestions" method="post">
	<input type="text" name="quizID" placeholder="put quizID here"/>
	<input type="submit" value="test" name="assntest" style="padding:5px;"/>
</form><hr>
<hr>Test get_qIDstr: gets quiz question string
<form id="test1form" action="test.php?f=get_qIDstr" method="post">
	<input type="text" name="quizID" placeholder="put quizID here"/>
	<input type="submit" value="test" name="assntest" style="padding:5px;"/>
</form><hr>
<hr>Test getGrades: gets all grades for a student
<form id="test1form" action="test.php?f=getGrades" method="post">
	<input type="text" name="username" placeholder="ucid"/>
	<input type="text" name="crn" placeholder="crn"/>
	<input type="submit" value="test" name="assntest" style="padding:5px;"/>
</form><hr>Test getQuizzes
<form id="test1form" action="test.php?f=getQuizzes" method="post">
	<input type="text" name="crn" placeholder="crn"/>
	<input type="submit" value="test" name="assntest" style="padding:5px;"/>
</form><hr>

