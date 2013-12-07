<?php
//set the following to properly display php error output
//ini_set('display_errors',1); 
//error_reporting(E_ALL);


include('../resources/header.php');
session_start();

// incoming data to this script
/*
$input , input test cases stored in DB, extracted by JSON previous page
$output ,matching output for test cases, stored in DB, extracted by JSON previous page
$name , name of the method, stored in DB, extracted by JSON previous page
$studentMethod, the users writes public static, return type, method name, arguments, and function body
*/

//debugging set vars locally
//$input = "(2,2) (1,3) (8,7)";
//$output = "4,4,15";
//$name = "add";
//$studentMethod = " no no noooo not in my house public static int add(int arg1, int arg2){return arg1 + arg2;}";

$input = $_POST['input'];
$output = $_POST['output'];
$name = $_POST['name'];
$studentMethod = $_POST['code'];

// input parser
$inputArray = explode(" ", $input );
// print the input for debugging
//foreach($inputArray as $value)
//{
//	echo $value."<br>";
//}

// output parser
$outputArray = explode("," , $output);
// print the output for debugging
//foreach($outputArray as $value)
//{
//	echo $value."<br>";
//}

// actual testing code
$casesString = "";
for($i = 0; $i < count($inputArray); ++$i)
{
		$casesString = $casesString."if( ".$name.$inputArray[$i]."!=".$outputArray[$i].'){ System.out.println("Wrong'.$i.'");}';
}

// name of the file I want to write to
$file = '/afs/cad.njit.edu/u/j/d/jdr22/public_html/cs490/middle/write/JavaCode.java';

//what I want to actually write to file
$fileContent = "\n 
public class JavaCode \n
{\n $studentMethod
    public static void main (String[] args) \n
	{
        $casesString
    }\n
}\n";

//debugging
//echo "The file contents we want to write:<br> $fileContent <br><br> ";

// write content to file
$return = file_put_contents($file, $fileContent);

$sample = shell_exec('cd write && javac JavaCode.java && java JavaCode && echo "compiled"');

// use shell_exec to return string to variable
//echo "Sample is ".$sample."<br><br>";

$points = 100;
if(strpos($sample,"compiled")!== false)
{
	//echo "Code compiled succesfully";
	$OansStr = "C";
	for($i = 0; $i < count($inputArray); ++$i)
	{
		if( strpos($sample, "Wrong".$i) !== false )
		{
			$OansStr = $OansStr.",W";
			$points = $points - ( 100 / (count($inputArray)+1) );
		}
		else
		{
			$OansStr = $OansStr.",C";
		}
	}
	
	$openEndedArray = array(
	'ucid' => $_SESSION['ucid'],
    'quizID' => $_SESSION['quizID'],
	'str' => $OansStr
	);
	back('insertStudentOAnsStr', $openEndedArray, $gt35);
	//echo "<br>The open ended answer string is: $OansStr <br>";
	
	$arr = array(
    'ucid' => $_SESSION['ucid'],
    'quizID' => $_SESSION['quizID'],
	'points' => $points,
	'crn' => $_SESSION['crnNumber']
	);
	back('addPoints',$arr, $gt35);
	//echo "You got a $points on the open ended section.";
	
	$arr2 = array(
	'ucid' => $_SESSION['ucid'],
    'quizID' => $_SESSION['quizID'],
	'crn' => $_SESSION['crnNumber']
	);
	back('regrade',$arr2, $gt35);
	
	

}
else
{
	//echo "Code compilation failed";
	$OansStr = "W";
	$points = $points - ( 100 / (count($inputArray) +1) );
	for($i = 0; $i < count($inputArray); ++$i)
	{
		$OansStr = $OansStr.",W";
		$points = $points - ( 100 / (count($inputArray) +1) );
	}
	
	$openEndedArray = array(
	'ucid' => $_SESSION['ucid'],
    'quizID' => $_SESSION['quizID'],
	'str' => $OansStr
	);
	back('insertStudentOAnsStr', $openEndedArray, $gt35);
	//echo "The open ended answer string is: ".$OansStr;
	
	$arr = array(
    'ucid' => $_SESSION['ucid'],
    'quizID' => $_SESSION['quizID'],
	'points' => $points,
	'crn' => $_SESSION['crnNumber']
	);
	back('addPoints',$arr, $gt35);
	//echo "You got a $points on the open ended section.";
	
	$arr2 = array(
	'ucid' => $_SESSION['ucid'],
    'quizID' => $_SESSION['quizID'],
	'crn' => $_SESSION['crnNumber']
	);
	back('regrade',$arr2, $gt35);

}
$ucid =  $_SESSION['ucid'];
echo "      <html>
			<form id='form' action='http://web.njit.edu/~gt35/cs490/front/studentWelcome.php' method='POST'>
			<input type='hidden' name='ucid' value='$ucid'>
			</form>
			<script>
				document.getElementById(\"form\").submit();
			</script>
			</html>";
?>
