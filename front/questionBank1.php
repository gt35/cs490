<?php
session_start();
?>

<html>
<head>
<title>Welcome to learnToCode!</title>
<script src="SpryAssets/SpryEffects.js" type="text/javascript"></script>
<script type="text/javascript">
function MM_effectAppearFade(targetElement, duration, from, to, toggle)
{
	Spry.Effect.DoFade(targetElement, {duration: duration, from: from, to: to, toggle: toggle});
}
</script>
<script type="text/javascript" src="style.css"></script>
<style type="text/css">

#wrapper #login{
	padding-top: 0px;
	margin-top: 0px;

}
.button {
	background-color: #78C659;
	list-style-position: outside;
	list-style-type: square;
	-webkit-transition: all 2s ease-in-out 1s;
	-moz-transition: all 2s ease-in-out 1s;
	-ms-transition: all 2s ease-in-out 1s;
	-o-transition: all 2s ease-in-out 1s;
	transition: all 2s ease-in-out 1s;
	border: thin solid #DEF3BB;
	color: #FFF;
	font-family: Arial, Helvetica, sans-serif;
	text-align: center;
	font-size: 12px;
	margin-top: 5px;
	margin-right: 3px;
	margin-bottom: 5px;
	margin-left: 3px;
	padding-top: 5px;
	padding-right: 3px;
	padding-bottom: 5px;
	padding-left: 3px;
}

.login {
	background-color: #78C659;
	font-family: Arial, Helvetica, sans-serif;
	font-size: 13px;
	color: #FFF;
	font-weight: bold;
	padding-top: 10px;
	padding-bottom: 10px;
	position: fixed;
	width: 100%;
	margin-top: 0px;
	margin-left: 0px;
}



#wrapper #footer {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 13px;
	font-weight: bold;
	color: #FFF;
	background-color: #78C659;
	position: fixed;
	bottom: 0px;
	margin-bottom: 0px;
	padding-bottom: 19px;
	margin-top: 10px;
	padding-top: 10px;
	margin-left: 0px;
	width: 100%;
}
#login .login center #username3 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
	color: #3B8EB6;
	border-top-style: solid;
	border-right-style: solid;
	border-bottom-style: solid;
	border-left-style: solid;
	border-top-color: #FFF;
	border-right-color: #FFF;
	border-bottom-color: #FFF;
	border-left-color: #FFF;
	font-weight: bold;
}
#login .login center #password {
	color: #2F74AB;
}
.image {
	margin: 0px;
	padding: 0px;
	display: block;
}
</style>
</head>

<body>

<div class="login" id="login">

  <center>
Welcome to the Question Bank, Professor!
  </center>

</div>

<div id = "wrapper" width = 100%; style="margin: 0 auto;">
<div id = questionbank; style="padding-top:50px;  padding-left:60px; width:100%; margin: 0 auto;" > 


	<script type="text/javascript">
		document.write("<form action='http://web.njit.edu/~gt35/back/back.php?f=saveOpenEnded' method='post' name='form1' class='submitquestions'>");


			var JSONOBJECT = {"openEnded":[{"id":"9","text":"Write a function to add two integers","type":"int","input":"(2,2)(3,3)(4,4)","output":"4,6,8","args":"int arg1, int arg2","name":"addd","weight":"10"},{"id":"34","text":"Write a function to subtract two integers","type":"double","input":"(2,2)(3,3)(4,4)","output":"4,6,8","name":"add","weight":"10"},{"id":"35","text":"Write a function to multiply two integers","type":"boolean","input":"(2,2)(3,3)(4,4)","output":"4,6,8","args":"int arg1, int arg2","name":"subtract","weight":"10"},{"id":"40","text":"Write a function to take the average of two integers","type":"int","input":"(2,2)(3,3)(4,4)","output":"4,6,8","args":"int arg1, int arg2","name":"add","weight":"100"}]};

				for(var key in JSONOBJECT.openEnded){
				
					var id = JSONOBJECT.openEnded[key].id;
				
					var text = JSONOBJECT.openEnded[key].text;
				
					document.write("<input type='checkbox' name= " + id + ">");
					document.write(id + ". " + text + "<br>");		//all the questions
					
					var type = JSONOBJECT.openEnded[key].type;
					document.write("Type: ");						
					document.write(type + "<br>");
				
					var input = JSONOBJECT.openEnded[key].input;
					document.write("Input: ");						
					document.write(input + "<br>");
				
					var output = JSONOBJECT.openEnded[key].output;
					document.write("Output: ");						
					document.write(output + "<br>");
				
					var args = JSONOBJECT.openEnded[key].args;
					document.write("Arguments: ");						
					document.write(args + "<br>");
					
					var name = JSONOBJECT.openEnded[key].name;
					document.write("Name: ");						
					document.write(name + "<br><br>");
				}
						
		
		document.write("<input type='submit' value='Submit Questions'> </form> <br><br><br>");
	</script>








</div>
<div class="login" id = "footer"> <center>

<a href="http://web.njit.edu/~jdr22/cs490/middle/toMainMenu.php">Visit the Main Menu</a>     |   
<a href="http://web.njit.edu/~ac422/cs490/front/questionbank.php">Go back to the Question Bank</a>     |  
To logout, please <a href="http://web.njit.edu/~jdr22/cs490/middle/logout.php">click here.</a></center></div>

</div>


</body>

</html>
