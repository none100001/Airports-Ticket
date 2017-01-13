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






<?php

if(isset($_POST["creditno"]) && isset($_POST["creditpass"]) && isset($_POST["mainid"]) && isset($_POST["tableid"]) && isset($_POST["seatid"]) && isset($_POST["classoption"])){
  include_once("db_conx.php");

  $cnn = $_POST["creditno"];
  $cpp = $_POST["creditpass"];
  $sql = "SELECT creditno,creditpass,creditbalance FROM validity WHERE creditno = '$cnn' AND creditpass = '$cpp' ";
  $query =  mysqli_query($db_conx, $sql);
  $check =  mysqli_num_rows($query);
  if($check == 0 || $check <0){
    echo "creditnumber or creditpassword wrong";
    exit();
  }
  else{
    $existbalance = 0;
    while($row = mysqli_fetch_array($query)){
      $existbalance = $row["creditbalance"];
      break;
    }

    $parentid = $_POST["mainid"];
    $va  = "id".$parentid;
    $ti  =  $_POST["tableid"];
    $coo =  $_POST["classoption"];
    $seatid = $_POST["seatid"];

    if($seatid<1 || $seatid>100){
    	echo "select seat id between 1 to 100";
      	exit();
    }

    $sql = "SELECT * FROM $va WHERE id = '$ti' ";
    $query =  mysqli_query($db_conx, $sql);
    $check =  mysqli_num_rows($query);
    if($check == 0 || $check < 0){
      echo "select mainid and id correctly";
      exit();
    }
    else{
      if($coo == "business"){

	    $ttt = "sid".$parentid;
	    $h = "s".$seatid;
	    $tt = $ti."B";

	    $sql = "SELECT * FROM $ttt WHERE $h = '$tt'";
	    $query =  mysqli_query($db_conx, $sql);

      $check =  mysqli_num_rows($query);
      if($check>=1){
        	echo "Sorry This Seat is Booked";
        	exit();
        }





        $sql = " SELECT * FROM $va WHERE id = '$ti' ";
        $query =  mysqli_query($db_conx, $sql);

        while($row = mysqli_fetch_array($query)){
            if($row["ba"]>0){
              if($row["bp"]>$existbalance){
                echo "SORRY YOU DO NOT HAVE ENOGHT MONEY ON YOUR ACCOUNT";
                exit();
              }
              else{
                $existbalance = $existbalance - $row["bp"];
                
                $sql = " UPDATE validity SET creditbalance ='$existbalance' WHERE creditno = '$cnn' ";
                mysqli_query($db_conx,$sql);

                $change = $row["ba"];
                $change = $change - 1;

                $sql = "UPDATE $va SET ba = '$change' WHERE id = '$ti' ";
                mysqli_query($db_conx,$sql);


                $ttt = "sid".$parentid;
                $h = "s".$seatid;
                $tt = $ti."B";

                global $visitor;

                $sql = " INSERT INTO $ttt (id,$h) VALUES ('$tt','$visitor') ";
                mysqli_query($db_conx,$sql);




                //get the amount of that seat
                $balance = 0;
                $sql = "SELECT * FROM $va WHERE id = '$ti' " ;
                mysqli_query($db_conx,$sql);
                while($row = mysqli_fetch_array($query)){
                	$balance = $row["bp"];
                	break;
                }



                // get the previous balance;
                $preexpense = 0;
                $sql = "SELECT * FROM user WHERE email = '$visitor' ";
                mysqli_query($db_conx,$sql);
                while($row = mysqli_fetch_array($query)){
                	$preexpense = $row["expense"];
                	break;
                }


                $newexpense = $preexpense + $balance;

                $sql = "UPDATE user SET expense = '$newexpense' WHERE email = '$visitor' ";
                mysqli_query($db_conx,$sql);




                echo "DONE";
                exit();
              }
            }
            else{
              echo "SORRY SEAT FILLED UP";
              exit();
            }
        }
      }
      else{
      		$ttt = "sid".$parentid;
		    $h = "s".$seatid;
		    $tt = $ti."E";

		    $sql = "SELECT * FROM $ttt WHERE $h = '$tt' ";
		    $query =  mysqli_query($db_conx, $sql);

	        $check =  mysqli_num_rows($query);
	        if($check>=1){
	        	echo "Sorry This Seat is Booked";
	        	exit();
	        }



            $sql = "SELECT * FROM $va WHERE id = '$ti' ";
            $query =  mysqli_query($db_conx, $sql);

            while($row = mysqli_fetch_array($query)){
            if($row["ea"]>0){
              if($row["ep"]>$existbalance){
                echo "SORRY YOU DO NOT HAVE ENOGHT MONEY ON YOUR ACCOUNT";
                exit();
              }
              else{
                $existbalance = $existbalance - $row["ep"];
                
                $sql = "UPDATE validity SET creditbalance='$existbalance' WHERE creditno = '$cnn' ";
                mysqli_query($db_conx,$sql);

                $change = $row["ea"];
                $change = $change - 1;

                $sql = "UPDATE $va SET ea = '$change' WHERE id = '$ti' ";
                mysqli_query($db_conx,$sql);



                $ttt = "sid".$parentid;
                $h = "s".$seatid;

                global $visitor;
                $tt = $ti."E";

                $sql = " INSERT INTO $ttt (id,$h) VALUES ('$tt','$visitor') ";
                mysqli_query($db_conx,$sql);



                //get the amount of that seat
                $balance = 0;
                $sql = "SELECT * FROM $va WHERE id = '$ti' " ;
                mysqli_query($db_conx,$sql);
                while($row = mysqli_fetch_array($query)){
                	$balance = $row["ep"];
                	break;
                }



                // get the previous balance;
                $preexpense = 0;
                $sql = "SELECT * FROM user WHERE email = '$visitor' ";
                mysqli_query($db_conx,$sql);
                while($row = mysqli_fetch_array($query)){
                	$preexpense = $row["expense"];
                	break;
                }


                $newexpense = $preexpense + $balance;

                $sql = "UPDATE user SET expense = '$newexpense' WHERE email = '$visitor' ";
                mysqli_query($db_conx,$sql);

                
                
                echo "DONE";
                exit();

              }
            }
            else{
              echo "SORRY SEAT FILLED UP";
              exit();
            }
        }
      }
    } 
  }

}
?>


































































<script src="head.js"></script>
<script src="ajax.js"></script>




<script type="text/javascript">

function go(){
  var cn = method("creditno").value;
  var cp = method("creditpass").value;
  var mi = method("mainid").value;
  var ti = method("tableid").value;
  var si = method("seatid").value;
  var co = method("classoption").value;
  if(cn =="" || cp == "" || mi == "" || ti == "" || co == "" || si == ""){
     method("status").innerHTML =  "Please fill all the forms";
  }
  else{
    var ajax = ajaxObj("POST", "buyseats.php");
    ajax.onreadystatechange = function() {
      if(ajaxReturn(ajax) == true) {
        method("status").innerHTML = ajax.responseText;
      }
    }
    ajax.send("creditno="+cn+"&creditpass="+cp+"&mainid="+mi+"&tableid="+ti+"&seatid="+si+"&classoption="+co);
  }
}
</script>
























<html>
<body>

<center>
<form name="kena" id="kena" onsubmit="return false">
  <h1>WANT TO BUY TICKESTS!!!</h1>
  <h3>PLEASE TYPE CREDITCARD NO</h3> <input id="creditno" type="text">
  <h3>PLEASE TYPE CREDITCARD PASSWORD</h3> <input id="creditpass" type="text">
  <h3>PLEASE TYPE MAIN ID</h3> <input id="mainid" type="text">
  <h3>PLEASE TYPE ID</h3> <input id="tableid" type="text">
  <h3>PLEASE TYPE SEAT NUMBER</h3> <input id="seatid" type="text">
  <h3>PLEASE SELECT OPTION</h1>
  <select id="classoption">
    <option value="business">BUSINESS CLASS</option>
    <option value="economic">ECONOMIC CLASS</option>
  </select>
  </br>

  <button id="button" onclick="go()">SUBMIT</button> </br>
  <span id = "status"></span>

</form>
</center>

</body>
</html>
