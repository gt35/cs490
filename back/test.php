<h1>BACK TEST PAGE</h1>
<?php
	include('../resources/header.php');
	include('func.php');
	echo'<hr><b>OUTPUT AREA:</b>';
	echo '<br><hr>';
	include('trig.php');
?>
<hr>Test getCourses:
<form id="test1form" action="test.php?f=getCourses" method="post">
	<input type="text" name="username" placeholder="ucid"/>
	<input type="submit" value="test" name="assntest" style="padding:5px;"/>
</form><hr>
<hr>Test question insertion:
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
<hr>Test question get:
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
<hr>Test ge_qIDstr: gets quiz question string
<form id="test1form" action="test.php?f=get_qIDstr" method="post">
	<input type="text" name="quizID" placeholder="put quizID here"/>
	<input type="submit" value="test" name="assntest" style="padding:5px;"/>
</form><hr>