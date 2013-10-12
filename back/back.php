<?php
	include('../resources/header.php');
	
	//FUNCTION BLOCK , move to seperate php file
	function getElements($q){
		$a = array();//temp array to store shit
		$con = new mysqli(db_host, db_user, db_pass, db_name); 
		$result = $con->query($q);
		while($row = $result->fetch_row()){
			array_push($a,$row);
		}
		return $a;
	}
	
	function runQuery($q){
		$con = new mysqli(db_host, db_user, db_pass, db_name); 
		$result = $con->query($q);
		if($result){
			return $result;
		}
	}
	
	function insertQuestion($text,$a,$b,$c,$d,$ans,$weight){//insert question into DB
		$q = "INSERT INTO  questions (text,a,b,c,d,ans,weight)
		VALUES('".$text."',
		'".$a."','".$b."','".$c."','".$d."',
		'".$ans."','".$weight."')";
		runQuery($q);
	}
	
	function getQuestion($qID){
		$q = "SELECT id,text,a,b,c,d,ans,weight FROM questions
		WHERE id = '".$qID."'";
		$result = runQuery($q);
		return $result;
	}
	
	function saveQuiz($qIDstr){//saves string of selected questions into db
		//example string 1.5.7.10.22.34.100
		$q ="INSERT INTO quizzes('".$qIDstr."')";
		runQuery($q);
	}
	
	function get_qIDstr($quizID){//get question string from table
		$q = "SELECT qIDstr FROM quizzes WHERE id = '".$quizID"'";
		$result = runQuery($q);
		return $result;
	}
	
	function getQuizQuestions($quizID){//returns questions based on qIDstr
		$qStr = get_qIDstr($quizID);
		$len = strlen($qStr);
		$i = 0;
		$x = substr($qStr, $i, 1);
		$id = '';// id of question
		while($x!=NULL){
			if(substr($qStr ,$i+1, 1) == '.'){//checks for id separator
				$id .= $x;
				$i++;
				$q[] = getQuestion($id);// insert question into array
				$id = '';//reset id to null
				}else{
				$id .= $x;//append next number to id
				$i++;
			}
		}	
		
	}
	function getCourses($ucid){
		$q = "SELECT c.name, c.fullName, e.crn
		FROM  courses c, users u
		INNER JOIN enrolled e
		ON u.ucid = e.ucid
		WHERE u.ucid = '".$ucid."'
		AND c.crn = e.crn";
		$result = runQuery($q);
		return $result;
	}
	
	//FUNCTION TRIGGER BLOCK,move to seperate php file
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
	}
?>