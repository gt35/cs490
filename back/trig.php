<?php
	//FUNCTION TRIGGERS
	if(isset($_GET['f'])){
		
		$f = $_GET['f'];
		
		if($f == 'getCourses'){	
			$result = getCourses($_POST['username']);
			while($row = mysqli_fetch_assoc($result)){
				$c[] = $row;
			}
			$classes = array('classes'=>$c);
			echo json_encode($classes);
		}
		
		if($f == 'insertQuestion'){
			insertQuestion($_POST['text'],$_POST['a'],$_POST['b'],
			$_POST['c'],$_POST['d'],$_POST['ans'],$_POST['weight']);
		}
		
		if($f == 'getQuestion'){
			$result = getQuestion($_POST['qID']);
			$row = mysqli_fetch_assoc($result);
			echo json_encode($row);
		}
		
		if($f == 'saveQuiz'){
			saveQuiz($_POST['qIDstr']);
		}
		if($f == 'getQuizQuestions'){
			print_r(getQuizQuestions($_POST['quizID']));
			echo "<br>";
			echo json_encode(getQuizQuestions($_POST['quizID']));
			}
		if($f == 'get_qIDstr'){
			print_r(get_qIDstr($_POST['quizID']));
			}
	}
?>