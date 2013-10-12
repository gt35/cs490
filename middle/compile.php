<?php

// java code method POST'ed up to me
$methodString = $_POST[code];

//debugging
echo "The method string was: $methodString <br><br>";

// name of the file I want to write to
$file = '/write/JavaCode.java';

// debugging
echo "The name of the file was: $file <br><br> ";

//what I want to actually write to file
$fileContent = "\n 
public class JavaCode \n
{\n
    public static void main (String[] args) \n
	{
        for (String s: args) \n
		{
            System.out.println(s);\n
        }\n
    }\n
}\n";

//debugging
echo "The file contents we want to write:<br> $fileContent <br><br> ";


// write content to file
$return = file_put_contents($file, $fileContent);

//debugging
if($return === FALSE)
echo "Write to file failed.<br><br>";

//debugging
//actual file contents
$actualFileContents = file_get_contents($file);
echo "<br><br> $actualFileContents <br><br>";

/*
//compile code
echo exec('javac http://web.njit.edu/~jdr22/cs490/middle/write/JavaCode.java -d http://web.njit.edu/~jdr22/cs490/middle/write/JavaCode.java');

// run code
echo exec(java  http://web.njit.edu/~jdr22/cs490/middle/write/JavaCode Hello ); 
*/
?>