<?php
include('../resources/header.php');
session_start();
// incoming data to this script
/*
$input , input test cases stored in DB, extracted by JSON previous page
$output ,matching output for test cases, stored in DB, extracted by JSON previous page
$type , primitive java datatype, stored in DB, extracted by JSON previous page
$name , name of the method, stored in DB, extracted by JSON previous page
$arguments , name of method's arguments,  stored in DB, extracted by JSON previous page
$methodBody , user writes the actual method code, user input, no need to store in DB, POST'ed or SESSION'ed from prev page

+ any more I need to submit a score/grade
*/
//debugging set vars locally
/*$input = "(2,2) (1,3) (8,7)";
$output = "4,4,15";
$type = "int";
$name = "add";
$arguments = "int arg1, int arg2";
$methodBody = "int sum = arg1 + arg2; return sum;";*/

$input = $_POST['input'];
echo "Raw input POST var".$input."<br><br>";
$output = $_POST['output'];
$type = $_POST['type'];
$name = $_POST['name'];
$arguments = $_POST['arguments'];
$methodBody = $_POST['code'];

//ini_set('display_errors',1); 

//error_reporting(E_ALL);

// input parser
$inputArray = explode(" ", $input );
// print the input
//foreach($inputArray as $value)
//{
//	echo $value."<br>";
//}

// output parser
$outputArray = explode("," , $output);
// print the output
//foreach($outputArray as $value)
//{
//	echo $value."<br>";
//}

// number of cases to check
$count = count($inputArray);

// actual testing code
$casesString = "";
for($i = 0; $i <count($inputArray); ++$i)
{
		$casesString = $casesString."if( ".$name.$inputArray[$i]."!=".$outputArray[$i].'){ System.out.println("Wrong");}';
}

//echo $casesString;

// name of the file I want to write to
$file = '/afs/cad.njit.edu/u/j/d/jdr22/public_html/cs490/middle/write/JavaCode.java';

// debugging
//echo "The name of the file was: $file <br><br> ";

//what I want to actually write to file
$fileContent = "\n 
public class JavaCode \n
{\n public static $type $name ( $arguments ){ $methodBody }
    public static void main (String[] args) \n
	{
        $casesString
    }\n
}\n";

//debugging
//echo "The file contents we want to write:<br> $fileContent <br><br> ";


// write content to file
$return = file_put_contents($file, $fileContent);

//debugging
//if($return === FALSE)
//{
//echo "Write to file failed.<br><br>";
//echo "return contents: $return <br><br>";
//}
//debugging
//actual file contents
//$actualFileContents = file_get_contents($file);
//echo "<br><br> $actualFileContents <br><br>";

// debugging
//echo "<br>";
//echo exec('whoami');
//echo "<br>";
//echo exec('pwd');
//echo "<br>";
$sample = shell_exec('cd write && pwd && javac JavaCode.java && java JavaCode');
// use shell_exec to return string to variable
//echo "Sample is ".$sample."<br><br>";

if(strpos($sample,"Wrong") )
{
$points = '10';
//echo "Student got the question wrong";
$arr = array(
    'ucid' => $_SESSION['ucid'],
    'quizID' => $_SESSION['quizID'],
	'points' => $points,
	'crn' => $_SESSION['crnNumber']
);
back('subtractPoints',$arr, $gt35);
$username = $_SESSION['ucid'];
echo "<html>
			<form id='form' action='http://web.njit.edu/~gt35/cs490/front/studentWelcome.php' method='POST'>
			<input type='hidden' name='ucid' value='$username'>
			</form>
			<script>
				document.getElementById(\"form\").submit();
			</script>
			</html>";
			
			
}
else
{
//echo "Student got the question right";
$username = $_SESSION['ucid'];
echo "<html>
			<form id='form' action='http://web.njit.edu/~gt35/cs490/front/studentWelcome.php' method='POST'>
			<input type='hidden' name='ucid' value='$username'>
			</form>
			<script>
				document.getElementById(\"form\").submit();
			</script>
			</html>";
}

echo "<br>";
//echo exec('pwd');
//$output = shell_exec('javac');
//echo "the output is: $output  <br><br>";

//compile code
//echo exec('javac http://web.njit.edu/~jdr22/cs490/middle/write/JavaCode.java -d http://web.njit.edu/~jdr22/cs490/middle/write/JavaCode.java');
/*
// run code
echo exec(java  http://web.njit.edu/~jdr22/cs490/middle/write/JavaCode Hello ); 
*/
?>