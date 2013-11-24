<?php 
session_start();
?> 

<html>
<head>
<title>Welcome to learnToCode!</title>
<script type="text/javascript" src="CS 490 Project Final Version/cs490/front/style.css"></script>
<style type="text/css">
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
	padding-bottom: 10px;
	margin-top: 0px;
	padding-top: 10px;
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
.insertquestionbox {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 13px;
	font-weight: bold;
	color: #069;
	padding-top: 5px;
	-ms-transition: all;
	-o-transition: all;
	border: 1px solid #78C659;
	margin-top: 15px;
	padding-right: 5px;
	padding-bottom: 5px;
	padding-left: 5px;
}
.insertquestion {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 13px;
	font-weight: bold;
	color: #069;
}

.methodSignature {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 13px;
	font-weight: bold;
	color: #069;
	padding-top: 5px;
	-ms-transition: all;
	-o-transition: all;
	border: 1px solid #78C659;
	margin-top: 15px;
	padding-right: 5px;
	padding-bottom: 5px;
	padding-left: 5px;
}
.methodSignature {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 13px;
	font-weight: bold;
	color: #069;
}

.input {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 13px;
	font-weight: bold;
	color: #069;
	padding-top: 5px;
	-ms-transition: all;
	-o-transition: all;
	border: 1px solid #78C659;
	margin-top: 15px;
	padding-right: 5px;
	padding-bottom: 5px;
	padding-left: 5px;
}
.input {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 13px;
	font-weight: bold;
	color: #069;
}

.output {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 13px;
	font-weight: bold;
	color: #069;
	padding-top: 5px;
	-ms-transition: all;
	-o-transition: all;
	border: 1px solid #78C659;
	margin-top: 15px;
	padding-right: 5px;
	padding-bottom: 5px;
	padding-left: 5px;
}
.output {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 13px;
	font-weight: bold;
	color: #069;
}


.text {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 13px;
	color: #069;
	font-weight: bold;
}
.text-method {
	font-size: 12px;
	font-weight: bold;
	font-family: Arial, Helvetica, sans-serif;
	color: #069;
	margin-bottom: 10px;
	padding-bottom: 10px;
}
.dropDownBox {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
	font-weight: bold;
	border: 1px solid #78C659;
	margin-right: 10px;
}
.boxes {
	color: #069;
	font-family: Arial, Helvetica, sans-serif;
	font-size: 13px;
	font-weight: bold;
	border: 1px solid #78C659;
	margin-right: 10px;
	padding-right: 10px;
	padding-top: 5px;
	padding-bottom: 5px;
}
</style>
</head>

<body>

<div class="login" id="login">

  <center>
Welcome, Professor! Please enter an open ended question to add to the question bank.
  </center>

</div>

<div id = "wrapper" width = 100%; style="margin: 0 auto;">
<div id = questionbank; style="padding-top:100px; width:100%; margin: 0 auto;" >
	<center>
      <table border="0">
      <tr>
        <td><p class="insertquestion">Please enter an open ended coding question for your students to be tested on:</p></td>
      </tr>
      <tr>
        <td><form name="form1" method="post" action="http://web.njit.edu/~jdr22/cs490/middle/submitOpenEnded.php">
          <p>
            <label for="insertquestionbox"></label>
            <textarea name="insertquestionbox" cols="100" rows="8" class="insertquestionbox" id="insertquestionbox"></textarea>
            <br>
            <textarea name="input" cols="100" rows="5" class="input" id="input">Input</textarea>
            <br>
            <textarea name="output" cols="100" rows="5" class="output" id="output">Output</textarea>
            <br>
            <br>
            <span class="text">Method Signature: </span></p>
          <p><span class="text-method">Public Static</span>
<select name="dropDown" class="dropDownBox" id="dropDown">
  			  <option>int</option>
              <option>double</option>
              <option>string</option>
              <option>boolean</option>
              <option>char</option>
          </select>
          <label for="nameOfMethod"></label>
          <input name="nameOfMethod" type="text" class="boxes" id="nameOfMethod" value="name of the method" size="32">
          <label for="arguments"></label>
          <input name="arguments" type="text" class="boxes" id="arguments" value="comma seperated arguments" size="32">
          </p>
          <p>
            <input name="submit" type="submit" class="button" id="submit" value="Submit Question">
            <br><br><br><br>
          </p>
        </form></td>
      </tr>
    </table>
    </center>

</div>
<div class="login" id = "footer"> <center>Welcome to learnToCode! Please sign in above in order to continue. Good luck! To logout, please <a href="/cs490/front/logoutt.php">click here.</a></center></div>

</div>


</body>

</html>
