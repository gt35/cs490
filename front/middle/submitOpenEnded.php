<?php
$gt35 = 'http://web.njit.edu/~gt35/cs490';//back

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
	if(!$result){
		echo 'no result <br>';
		echo $url.'<br>';
		print_r($postval);
	}
	curl_close ($c);
	return $result;
}

//variables to be sent upstream
$questionText = $_POST['insertquestionbox'];
$methodSignature = $_POST['methodSignature'];
$i1 = $_POST['input'];
$o1 = $_POST['output'];

$postval = array(
	'text' => $$questionText,
	'a' => $methodSignature,
	'b' => $i1,
	'c' => $o1
	);

getJSON('insertOpenEnded',$postval,$gt35);