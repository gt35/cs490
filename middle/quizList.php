<?php
session_start();
//{"quizzes":[{"id":"1","crn":"1","name":"test quiz"}]}
$quizzes = '{"quizzes":[{"id":"1","crn":"1","name":"test quiz"}]}';
$crn = $_SESSION['crn']; // need the crn to be a session var reaching this page

?>
<html>
<script>
	var JSONQuizzes = <?php echo $quizzes; ?>;
	var JSObjQuizzes = eval ("(" + JSONQuizzes + ")");
	var atLeastOneQuiz = "no";
	// start html form
	document.write("<form>");
	for(var key in JSObjQuizzes.quizzes )
	{
		if( JSObjQuizzes.quizzes[key].crn == <?php echo $crn; ?> )
		{
			atLeastOneQuiz = "yes";
			var qid = JSObjQuizzes.quizzes[key].id;
			var qname = JSObjQuizzes.quizzes[key].name;
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
</html>