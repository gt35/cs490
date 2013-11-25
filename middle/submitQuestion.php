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
	// if(!$result){
		// echo 'no result <br>';
		// echo $url.'<br>';
		// print_r($postval);
	// }
	curl_close ($c);
	return $result;
}

//variables to be sent upstream
$q1 = $_POST['q1'];
$correctAnswer = $_POST[correctAnswer];
$a1 = $_POST['a1'];
$a2 = $_POST['a2'];
$a3 = $_POST['a3'];
$a4 = $_POST['a4'];
$weight = $_POST['weight'];
$crn = $_SESSION['crnNumber'];

$postval = array(
	'text' => $q1,
	'a' => $a1,
	'b' => $a2,
	'c' => $a3,
	'd' => $a4,
	'ans' => $correctAnswer,
	'weight' => $weight,
	'crn' => $crn
	);

getJSON('insertQuestion',$postval,$gt35);
/*echo 'question saved';
header('Location: http://web.njit.edu/~gt35/cs490/front/form.php');*/
//debugging
// ini_set('display_errors',1); 
// error_reporting(E_ALL);
//echo "Current user: ".get_current_user();
//echo "<br>";

// echo "The question is $q1 <BR><BR>";
// echo "The correct answer is $correctAnswer <BR><BR>";
// echo "Choice a is $a1 <BR><BR>";
// echo "Choice b is $a2<BR><BR>";
// echo "Choice c is $a3<BR><BR>";
// echo "Choice d is $a4<BR><BR>";
?>
<html>
<form id="form" action="http://web.njit.edu/~ac422/cs490/front/professorWelcome2.php" method="POST">
<input type="hidden" name="dropDown" value="<?php echo $crn ?>">
</form>
<script>
document.getElementById("form").submit();
</script>
</html>