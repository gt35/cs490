<?php

//debugging set vars locally
$input = "(2,2) (1,3) (8,7)";
$output = "4,4,15";
$type = "int";
$name = "add";
$arguments = "int arg1, int arg2";
$methodBody = "int sum = arg1 + arg2; return sum;";
ini_set('display_errors',1); 

error_reporting(E_ALL);

// input parser
$inputArray = explode(" ", $input );
// print the input
foreach($inputArray as $value)
{
	echo $value."<br>";
}

// output parser
$outputArray = explode("," , $output);
// print the output
foreach($outputArray as $value)
{
	echo $value."<br>";
}

// number of cases to check
$count = count($inputArray);

// actual testing code
$casesString = "";
for($i = 0; $i <count($inputArray); ++$i)
{
		$casesString = $casesString."if( ".$name.$inputArray[$i]."!=".$outputArray[$i].'){ System.out.println("Wrong");}';
}

echo $casesString;

// name of the file I want to write to
$file = '/afs/cad.njit.edu/u/j/d/jdr22/public_html/cs490/middle/write/JavaCode.java';

// debugging
echo "The name of the file was: $file <br><br> ";

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
echo "The file contents we want to write:<br> $fileContent <br><br> ";


// write content to file
$return = file_put_contents($file, $fileContent);

//debugging
if($return === FALSE)
{
echo "Write to file failed.<br><br>";
echo "return contents: $return <br><br>";
}
//debugging
//actual file contents
$actualFileContents = file_get_contents($file);
echo "<br><br> $actualFileContents <br><br>";

// debugging
//echo "<br>";
//echo exec('whoami');
//echo "<br>";
//echo exec('pwd');
//echo "<br>";
$sample = shell_exec('cd write && pwd && javac JavaCode.java && java JavaCode');
// use shell_exec to return string to variable
echo $sample."<br><br>";

if(strpos($sample,"Wrong") )
{
echo "Student got the question wrong";
}
else
{
echo "Student got the question right";
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