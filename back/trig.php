<?php
	ini_set('display_errors',1); 
	error_reporting(E_ALL);
	//FUNCTION TRIGGERS
	if(isset($_GET['f'])){
		
		$f = $_GET['f'];
		
		if($f == 'getCourses'){	
			$c = array();
			$result = getCourses($_POST['username']);
			while($row = mysqli_fetch_assoc($result)){
				$c[] = $row;
			}
			$classes = array('classes'=>$c);
			echo json_encode($classes);
		}
		if($f == 'getStudentAnsStr'){
			print_r(getStudentAnsStr($_POST['quizID'],$_POST['username']));
			
		}
		if($f == 'insertQuestion'){
			insertQuestion($_POST['crn'],$_POST['text'],$_POST['a'],$_POST['b'],
			$_POST['c'],$_POST['d'],$_POST['ans'],$_POST['weight']);
		}
		if($f == 'insertOpenEnded'){
			insertOpenEnded($_POST['questionText'],$_POST['type'],$_POST['input'],
			$_POST['output'],$_POST['arguments'],$_POST['name'],$_POST['crn']);
		}
		if($f == 'getQuestion'){
			$result = getQuestion($_POST['qID']);
			$row = mysqli_fetch_assoc($result);
			echo json_encode($row);
		}
		if($f =='gradeQuiz'){
			$str = convertAnsStr($_POST);
			insertStudentAnsStr($str,$_GET['quizID'],$_GET['u']);
			echo 'You scored '.gradeQuiz($_GET['quizID'],$_GET['u']).'%.';
		}
		if($f == 'saveQuiz'){
			$x = convertQuizStr($_POST);
			saveQuiz($x);
			//echo 'quiz saved!';
		}
		if($f == 'saveOpenEnded'){
			$x = convertQuizStr($_POST);
			saveOpenEnded($x);
			//echo 'quiz saved!';
		}
		if($f == 'getQuizzes'){
			$x = getQuizzes($_POST['crn']);
			$row = mysqli_fetch_assoc($x);
			echo json_encode(array('quizzes'=>$row));
		}
		if($f == 'getQuizQuestions'){
			//print_r(getQuizQuestions($_POST['quizID']));
			//echo "<br>";
			echo json_encode(array('questions' => getQuizQuestions($_POST['quizID'])));
		}
		if($f == 'getOpenEnded'){
			//print_r(getQuizQuestions($_POST['quizID']));
			//echo "<br>";
			echo json_encode(array('questions' => getOpenEndedQuestions($_POST['quizID'])));
		}
		
		if($f == 'allQuestions'){
			//print_r(allQuestions());
			echo json_encode(allQuestions($_POST['crn']));
		}
		if($f == 'allOpenEnded'){
			//print_r(allQuestions());
			echo json_encode(allOpenEnded($_POST['crn']));
		}
		//DEBUG TRIGGERS
		if($f == 'get_qIDstr'){
			print_r(get_qIDstr($_POST['quizID']));
		}
		if($f =='convertAnsStr'){
			//print_r($_POST);
			$x = convertAnsStr($_POST);
			print_r($x);
		}
		if($f== 'convertQuizStr'){
			//print_r($_POST);
			echo convertQuizStr($_POST);
		}
		if($f == 'getGrades'){
			$result = getGrades($_POST['username'],$_POST['crn']);
			$row = mysqli_fetch_assoc($result);
			echo json_encode($row);
		}
	}
?>