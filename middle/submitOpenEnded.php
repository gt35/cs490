<?php
$gt35 = 'http://web.njit.edu/~gt35/cs490';//back
session_start();

function getJSON($value,$postval,$urlPath)
{
		
	$url = $urlPath.'/back/back.php?f='.$value;
	$postdata = $postval;
	
	$c = curl_init();
	curl_setopt($c, CURLOPT_FOLLOWLOCATION,true);
	curl_setopt($c, CURLOPT_HTTPHEADER, array('Content-Type' => 'application/xml'));
	curl_setopt($c, CURLOPT_URL, $url);
	curl_setopt($c, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($c, CURLOPT_POST, true);
	curl_setopt($c, CURLOPT_POSTFIELDS,$postdata);
	
	$result = curl_exec ($c); 
	/*if(!$result){
		echo 'no result <br>';
		echo $url.'<br>';
		print_r($postval);
	}*/
	curl_close ($c);
	return $result;
}

//variables to be sent upstream
$questionText = $_POST['insertquestionbox'];
$input = $_POST['input'];
$output = $_POST['output'];
$type = $_POST['dropDown'];
$name = $_POST['nameOfMethod'];
$arguments = $_POST['arguments'];
$crn = $_SESSION['crnNumber'];

//debugging
//echo $questionText
//echo "<br>";
//$input = $_POST['input'];
//$output = $_POST['output'];
//$type = $_POST['dropDown'];
//$name = $_POST['nameOfMethod'];
//$arguments = $_POST['arguments'];
//$crn = $_POST['crn'];


//  the fields are id, crn,questionText,method,input,output,arguments
$postval = array(
	'questionText' => $questionText,
	'input' => $input,
	'output' => $output,
	'type' => $type,
	'name' => $name,
	'arguments' => $arguments,
	'crn' => $crn
	);

getJSON('insertOpenEnded',$postval,$gt35);

/*
//set POST variables
$url = 'http://web.njit.edu/~ac422/cs490/front/professorWelcome2.php';
$fields = array(
'dropDown' => urlencode($crn)
);

//url-ify the data for the POST
//$fields_string ='';
foreach($fields as $key=>$value) { $fields_string .= $key.'='.$value.'&'; }
rtrim($fields_string, '&');

//open connection
$ch = curl_init();

//set the url, number of POST vars, POST data
curl_setopt($ch,CURLOPT_URL, $url);
curl_setopt($ch,CURLOPT_POST, count($fields));
curl_setopt($ch,CURLOPT_POSTFIELDS, $fields_string);

curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

//execute post
$result = curl_exec($ch);

//close connection
curl_close($ch);
*/
?>
<html>
<form id="form" action="http://web.njit.edu/~gt35/cs490/front/professorWelcome2.php" method="POST">
<input type="hidden" name="dropDown" value="<?php echo $crn ?>">
</form>
<script>
document.getElementById("form").submit();
</script>
</html>