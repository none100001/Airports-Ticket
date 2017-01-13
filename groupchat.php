<?php
include_once("db_conx.php");
session_start();
$visitor = "";
$user = "";
if (isset($_SESSION["user_email"]) && isset($_SESSION["user_password"])) {
   $visitor = $_SESSION["user_email"];

}

if(isset($_GET["e"])){
	include_once("db_conx.php");

	$user = $_GET["e"];
	if($user!=$visitor){
		echo "Sorry You Are Not The Boss";
		exit();
	}
}




?>







<html>
	<head>
		<title>Chat Application</title>
		
	</head>
	<body>
		<div id="input">
			<div id="feedback"></div>
			<form action="#" method="post" id="form_input">
				<lable>Enter Name:<input type="text" name="accepter" id="accepter"/></lable>
				<br /><lable>Enter Message:<br /><textarea id="message" cols="25" rows="4"></textarea></lable><br />
				<input type="submit" name="send" id="send" value="Send Message"/>
			</form>
		</div>
	
		<div id="messages">
		
		</div>
		
		<script type="text/javascript" src="jquery-1.7.2.min.js"></script>
		<script type="text/javascript" src="auto_chat.js"></script>
		<script type="text/javascript" src="send.js"></script><br>
		
	</body>
</html>