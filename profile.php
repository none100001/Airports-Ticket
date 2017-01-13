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


<script src="head.js"></script>
<script src="ajax.js"></script>

<script type="text/javascript">


function seeinfo(){
	var u = "<?php echo $user; ?>";
	window.location = "seeinfo.php?e="+u ;
}


function buyseats(){
	var u = "<?php echo $user; ?>";
	window.location = "buyseats.php?e="+u ;
}



function reqforexchange(){
	var u = "<?php echo $user; ?>";
	window.location = "requestforexchange.php?e="+u ;
}






function gotrequest(){
	var u = "<?php echo $user; ?>";
	window.location = "requests.php?e="+u ;
}



function gcc(){
	var u = "<?php echo $user; ?>";
	window.location = "groupchat.php?e="+u ;
}



function logout(){
	var u = "<?php echo $user; ?>";
	window.location = "logout.php?e="+u ;
}

</script>




<html>
<head>
	<link rel = "stylesheet" type = "text/css" href = "style.css" />
</head>
<body id = "m">





<CENTER>
<button id="si" onclick="seeinfo()">See Info</button>
<button id="req" onclick="reqforexchange()">Request For Exchange</button>
<button id="Hreq" onclick="gotrequest()">Requests</button>
<button id="gc" onclick="gcc()">Group Chat</button>
<button id="bs" onclick="buyseats()">Buy Seats</button>
<button id="lo" onclick="logout()">Log Out</button>
</CENTER>






</body>
</html>