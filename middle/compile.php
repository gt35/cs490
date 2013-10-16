<?php

ini_set('display_errors',1); 
error_reporting(E_ALL);
 
// debugging
//echo getcwd();
 
// java code method POST'ed up to me
//$methodString = $_POST['code'];

// hard copy for testing
$methodString = "public static void concat(String one, String two){System.out.println(one + two);}";
//debugging
echo "The method string was: $methodString <br><br>";

// name of the file I want to write to

$file = '/afs/cad.njit.edu/u/j/d/jdr22/public_html/cs490/middle/write/JavaCode.java';

// debugging
echo "The name of the file was: $file <br><br> ";

//what I want to actually write to file
$fileContent = "\n 
public class JavaCode \n
{\n $methodString
    public static void main (String[] args) \n
	{
        concat(args[0], args[1]);
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
//echo $SHELL;
echo "<br>";
echo exec('whoami');
echo "<br>";
echo exec('pwd');
echo "<br>";
echo exec('cd write && pwd && javac JavaCode.java && java JavaCode Hel lo');
// use shell_exec to return string to variable

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