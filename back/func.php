<?php
	ini_set('display_errors',1); 
error_reporting(E_ALL);
	//FUNCTIONS
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
	
	function insertQuestion($text,$a,$b,$c,$d,$ans,$weight){
		//insert question into DB
		$q = "INSERT INTO questions(text,a,b,c,d,ans,weight)
		VALUES('".$text."',
		'".$a."','".$b."','".$c."','".$d."',
		'".$ans."','".$weight."')";
		runQuery($q);
	}

	function getStudentAnsStr($quizID,$ucid){//returns student answer string for grading
		$q = "SELECT ansStr FROM submitted WHERE quizID = '".$quizID."' AND ucid = '".$ucid."'";
		$result = runQuery($q);
		$ans='';
		if($result){
			$row = mysqli_fetch_assoc($result);
			$ans = $row['ansStr'];
		}else $ans = 'no result';
		return $ans;
	}
	function insertStudentAnsStr($str,$quizID,$ucid){
		$q = "UPDATE submitted SET ansSTR = '".$str."' WHERE quizID = '".$quizID."' AND ucid = '".$ucid."'";
		runQuery($q);
		}
	function getGrade($ucid,$crn){
		//get students quiz grade for class
	}
	function convertAnsStr($arr){
		// converts answers to string for insertion into db
		$ansStr='';
		while ($x = current($arr)){
			if(strlen($x) ==  1){
				$ansStr.= $x;
				}
				next($arr);
			}
			return $ansStr;
		}
		
	function convertQuizStr($arr){
		$str='';
		foreach($arr as $x){
			if($x == 'on'){
				$str .= key($arr).'.';
				}
			next($arr);
			}
			return $str;
		//convert question bank stuff to string 
		}
	function gradeQuiz($quizID,$ucid){//returns int grade in form of total score
		$q = getQuizQuestions($quizID);
		$i = 0; //index
		$q = $q['questions'];
		$ans = $q[$i]['ans'];
		$weight = $q[$i]['weight'];//value of the question
		$sAns = getStudentAnsStr($quizID,$ucid);//student answer string
		$score = 0;
		$possible = 0;
		$x = substr($sAns, $i, 1);
		$len = strlen($sAns);
		while($x!=NULL&&$ans!=NULL&&$i<$len){
			$x = substr($sAns, $i, 1);//student answer
			$ans = $q[$i]['ans'];//actual answer
			$possible += $q[$i]['weight'];
			if($x == $ans){
				$score += $q[$i]['weight'];
			}
			$i++;
		}return ($score/$possible)*100;
	}
	function getQuestion($qID){
		$q = "SELECT * FROM questions
		WHERE id = '".$qID."'";
		$result = runQuery($q);
		return $result;
		//return getElements($q);
	}
	function allQuestions(){
		//function to get all questions in bank 
		//useful for displaying question bank
		$q = "SELECT * FROM questions";
		$result = runQuery($q);
		while($row = mysqli_fetch_assoc($result)){
				$c[] = $row;
			}
		return array('questions'=>$c);
	}
	
	function saveQuiz($qIDstr){
		//saves string of selected questions into db
		//example string 1.5.7.10.22.34.100
		$q ="INSERT INTO quizzes(qIDstr)
		VALUES('".$qIDstr."')";
		runQuery($q);
	}
	
	function get_qIDstr($quizID){
		//get question string from table
		$q = "SELECT qIDstr FROM quizzes WHERE id = '".$quizID."'";
		$result = runQuery($q);
		return mysqli_fetch_assoc($result);
	}
	
	function getQuizQuestions($quizID){
		//returns questions based on qIDstr
		$qStr = get_qIDstr($quizID);
		$qStr = ((string)$qStr['qIDstr']);
		$len = strlen($qStr);
		$i = 0;
		$x = substr($qStr, $i, 1);
		$next = substr($qStr, $i+1, 1);
		$id = '';// id of question
		while($x!=NULL){
			$id .= $x;//append next number to id
			if($next == '.'){//checks for id separator or end of str
				$i++;
				$q[] = mysqli_fetch_assoc(getQuestion($id));// insert question into array
				$id = '';//reset id to null
			}
			$i++;
			$x = substr($qStr, $i, 1);
			$next = substr($qStr, $i+1, 1);
		}
		return array('questions'=>$q);
	}
	
	function getCourses($ucid){
		//returns courses for a given student
		$q = "SELECT c.name, c.fullName, e.crn
		FROM  courses c, users u
		INNER JOIN enrolled e
		ON u.ucid = e.ucid
		WHERE u.ucid = '".$ucid."'
		AND c.crn = e.crn";
		$result = runQuery($q);
		return $result;
	}
?>