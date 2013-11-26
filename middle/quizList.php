<?php
session_start();
//{"quizzes":[{"id":"1","crn":"1","name":"test quiz"}]}
$quizzes = '{"quizzes":[{"id":"1","crn":"1","name":"test quiz"},{"id":"2","crn":"1","name":"test quiz2"}]}';
//$crn = $_SESSION['crn']; // need the crn to be a session var reaching this page
$crn = "1";
echo $quizzes;

?>
<html>
<body>
<script>	
	var JSONQuizzes = <?php echo $quizzes; ?>;
	document.write(JSONQuizzes);
	var atLeastOneQuiz = "no";
	// start html form
	document.write("<form action='http://web.njit.edu/~ac422/cs490/front/takeexam.php' method='POST' >");
	
	for(var key in JSONQuizzes.quizzes )
	{
		if( JSONQuizzes.quizzes[key].crn == <?php echo $crn; ?> )
		{
			atLeastOneQuiz = "yes";
			var qid = JSONQuizzes.quizzes[key].id;
			var qname = JSONQuizzes.quizzes[key].name;
			// create a radio button for each quiz
			document.write("<input type='radio' name=");
			document.write("'quizID'");
			document.write('value=');
			document.write("'");
			document.write(qid);
			document.write("'");
			document.write(">");
			document.write(qname);
			document.write("<br>");
			// value to be POST'ed is qid
			// text to draw to screen is qname
		}
	}
	
	if(atLeastOneQuiz == "yes")
	{
		// submit button
		document.write("<input type='submit' value='Submit'>");
	}
	else
	{
		//lucky you, no quiz today!
		document.write("Lucky you, no quiz today!");
	}
	// end of html form
	document.write("</form>");
</script>

</body>
</html>