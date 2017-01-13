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









if (isset($_POST["whom"]) && isset($_POST["mainid1"]) && isset($_POST["mainid2"]) && isset($_POST["tableid1"]) && isset($_POST["tableid2"]) && isset($_POST["classoption1"]) && isset($_POST["classoption2"]) && isset($_POST["seatid1"]) && isset($_POST["seatid2"])){

  $accepter = $_POST["whom"];

  $mainid1 = $_POST["mainid1"];
  $tableid1 = $_POST["tableid1"];
  $seatid1 = $_POST["seatid1"];
  $classoption1 = $_POST["classoption1"];



  $mainid2 = $_POST["mainid2"];
  $tableid2 = $_POST["tableid2"];
  $seatid2 = $_POST["seatid2"];
  $classoption2 = $_POST["classoption2"];



  $msg = "I Have Main  id ". $_POST["mainid1"]
                  ."Table id ". $_POST["tableid1"]
                  . "Seat No  ". $_POST["seatid1"]
                  . "Class Option ".$_POST["classoption1"]

                  ."I Want Main  id ". $_POST["mainid2"]
                  . "Table id ". $_POST["tableid2"]
                  . "Seat No  ". $_POST["seatid2"]
                  . "Class Option ".$_POST["classoption2"] ;

  

  $sql = "INSERT INTO request VALUES ('$visitor','$msg','$accepter','$mainid1','$mainid2','$tableid1','$tableid2','$seatid1','$seatid2','$classoption1','$classoption2') ";
  $query = mysqli_query($db_conx, $sql);


  echo "Request Sent For Exchange";
  exit();
  
}



?>




<script src="head.js"></script>
<script src="ajax.js"></script>

<script type="text/javascript">




// ekta msg dibea $g kea jea accept korsea $a;


function go(){
  var w  = method("whom").value;

  var m1 = method("mainid1").value;
  var t1 = method("tableid1").value;
  var c1 = method("classoption1").value;
  var seat1 = method("seatid1").value;

  var m2 = method("mainid2").value;
  var t2 = method("tableid2").value;
  var c2 = method("classoption2").value;
  var seat2 = method("seatid2").value;

	var visitor = "<?php echo $visitor; ?>";

	var ajax = ajaxObj("POST", "requestforexchange.php");
    ajax.onreadystatechange = function() {
      if(ajaxReturn(ajax) == true) {
        alert(ajax.responseText);
      }
    }
    ajax.send("whom="+w+"&mainid1="+m1+"&mainid2="+m2+"&tableid1="+t1+"&tableid2="+t2+"&classoption1="+c1+"&classoption2="+c2+"&seatid1="+seat1+"&seatid2="+seat2);
}

</script>






<html>
<body>







<div id = "have">
<form name="ken" id="ken" onsubmit="return false">
  <h1>Have</h1>
  <h3>MAIN ID</h3> <input id="mainid1" type="text">
  <h3>TABLE ID</h3> <input id="tableid1" type="text">
  <h3>SEAT ID</h3> <input id="seatid1" type="text">
  <h3>CLASS OPTION</h1>
  <select id="classoption1">
    <option value="B">BUSINESS CLASS</option>
    <option value="E">ECONOMIC CLASS</option>
  </select>
 </form>
</div>









<center>
<div id = "exchange">
<form name="ken" id="ken" onsubmit="return false">
  <h1>Exchange</h1>
  <h3>TO WHOM</h3> <input id="whom" type="text">
  <h3>MAIN ID</h3> <input id="mainid2" type="text">
  <h3>TABLE ID</h3> <input id="tableid2" type="text">
  <h3>SEAT ID</h3> <input id="seatid2" type="text">
  <h3>CLASS OPTION</h1>
  <select id="classoption2">
    <option value="B">BUSINESS CLASS</option>
    <option value="E">ECONOMIC CLASS</option>
  </select>
 </form>
</div> 
</center>



<button id = "button" onclick="go()">ENTER</button>







</body>
</html>





