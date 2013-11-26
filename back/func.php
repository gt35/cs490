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
	
	function insertQuestion($crn,$text,$a,$b,$c,$d,$ans,$weight){
		//insert question into DB
		$q = "INSERT INTO questions(crn,text,a,b,c,d,ans,weight)
		VALUES('".$crn."','".$text."',
		'".$a."','".$b."','".$c."','".$d."',
		'".$ans."','".$weight."')";
		runQuery($q);
	}	
	function insertOpenEnded($text,$type,$input,$output,$args,$name,$crn){
		//insert question into DB
		$q = "INSERT INTO openEnded(text,type,input,output,arguments,name,crn)
		VALUES('".$text."',
		'".$type."','".$input."','".$output."','".$args."',
		'".$name."','".$crn."')";
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
	function getGrades($ucid,$crn){
		$q = "SELECT grade FROM submitted WHERE ucid = '".$ucid."' AND crn = '".$crn."'";
		$result = runQuery($q);
		return $result;
		//get all students quiz grades
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
		}
		$grade = ($score/$possible)*100;
		insertGrade($ucid,$quizID,$grade);
	}
	
	function insertGrade($ucid,$quizID,$grade){
		$q = "UPDATE submitted SET grade = grade + ".$grade." 
		WHERE quizID = '".$quizID."' AND ucid = '".$ucid."'";
		runQuery($q);
	}//insert grade into db
	
	function getQuizzes($crn){//return quiz name for a particular class
		$q = "SELECT * FROM quizzes WHERE crn = '".$crn."'";
		$result = runQuery($q);
		return $result;
	}
	function getEnrolled($crn){//get all student enrolled in a class
	}
	function getCorrectAns($quizID){//get all quiz answers
		//get the quiz question string
	}
	function getQuestion($qID){
		$q = "SELECT * FROM questions
		WHERE id = '".$qID."'";
		$result = runQuery($q);
		return $result;
		//return getElements($q);
	}
	function allQuestions($crn){
		//function to get all questions in bank 
		//useful for displaying question bank
		$q = "SELECT * FROM questions WHERE crn = '".$crn."'";
		$result = runQuery($q);
		while($row = mysqli_fetch_assoc($result)){
			$c[] = $row;
		}
		return array('questions'=>$c);
	}
	function allOpenEnded($crn){
		//function to get all questions in bank 
		//useful for displaying question bank
		$q = "SELECT * FROM openEnded WHERE crn = '".$crn."'";
		$result = runQuery($q);
		while($row = mysqli_fetch_assoc($result)){
			$c[] = $row;
		}
		return array('openEnded'=>$c);
	}
	function saveQuiz($qIDstr,$crn){
		//saves string of selected questions into db
		//example string 1.5.7.10.22.34.100
		//$q = "UPDATE quizzes SET qIDstr ='".$qIDstr."'WHERE id = 1 ";
		//correct way
		$q ="INSERT INTO quizzes(qIDstr,crn)
		VALUES('".$qIDstr."','".$crn."')";
		runQuery($q);
	}
	function saveOpenEnded($qID,$qIDstr){
		//saves string of selected OE questions into db
		//example string 1.5.7.10.22.34.100
		//$q = "UPDATE quizzes SET qIDstr ='".$qIDstr."'WHERE id = 1 ";
		//correct way
		$q ="UPDATE quizzes SET oIDstr = '".$qIDstr."' WHERE id = '".$qID."'";
		runQuery($q);
	}
	
	function get_qIDstr($quizID){
		//get question string from table
		$q = "SELECT qIDstr FROM quizzes WHERE id = '".$quizID."'";
		$result = runQuery($q);
		return mysqli_fetch_assoc($result);
	}
	function get_oIDstr($quizID){
		//get question string from table
		$q = "SELECT oIDstr FROM quizzes WHERE id = '".$quizID."'";
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
		return $q;
	}	
	function getOpenEndedQuestions($quizID){
		//returns questions based on qIDstr
		$qStr = get_oIDstr($quizID);
		$qStr = ((string)$qStr['oIDstr']);
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
		return $q;
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