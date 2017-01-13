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

if(isset($_POST["mainid"]) && isset($_POST["tableid"])  && isset($_POST["classoption"])){
  	include_once("db_conx.php");

  	$F = "sid".$_POST["mainid"];
  	$o = $_POST["classoption"];
  	$d = $_POST["tableid"].$o;



  	$sql = "SELECT * FROM $F WHERE id = '$d' ";
    $query = mysqli_query($db_conx, $sql);
    echo '<table style ="width:300px">';
    echo '<tr>';

    echo '<td>Seat1</td>';
echo '<td>Seat2</td>';
echo '<td>Seat3</td>';
echo '<td>Seat4</td>';
echo '<td>Seat5</td>';
echo '<td>Seat6</td>';
echo '<td>Seat7</td>';
echo '<td>Seat8</td>';
echo '<td>Seat9</td>';
echo '<td>Seat10</td>';
echo '<td>Seat11</td>';
echo '<td>Seat12</td>';
echo '<td>Seat13</td>';
echo '<td>Seat14</td>';
echo '<td>Seat15</td>';
echo '<td>Seat16</td>';
echo '<td>Seat17</td>';
echo '<td>Seat18</td>';
echo '<td>Seat19</td>';
echo '<td>Seat20</td>';
echo '<td>Seat21</td>';
echo '<td>Seat22</td>';
echo '<td>Seat23</td>';
echo '<td>Seat24</td>';
echo '<td>Seat25</td>';
echo '<td>Seat26</td>';
echo '<td>Seat27</td>';
echo '<td>Seat28</td>';
echo '<td>Seat29</td>';
echo '<td>Seat30</td>';
echo '<td>Seat31</td>';
echo '<td>Seat32</td>';
echo '<td>Seat33</td>';
echo '<td>Seat34</td>';
echo '<td>Seat35</td>';
echo '<td>Seat36</td>';
echo '<td>Seat37</td>';
echo '<td>Seat38</td>';
echo '<td>Seat39</td>';
echo '<td>Seat40</td>';
echo '<td>Seat41</td>';
echo '<td>Seat42</td>';
echo '<td>Seat43</td>';
echo '<td>Seat44</td>';
echo '<td>Seat45</td>';
echo '<td>Seat46</td>';
echo '<td>Seat47</td>';
echo '<td>Seat48</td>';
echo '<td>Seat49</td>';
echo '<td>Seat50</td>';
echo '<td>Seat51</td>';
echo '<td>Seat52</td>';
echo '<td>Seat53</td>';
echo '<td>Seat54</td>';
echo '<td>Seat55</td>';
echo '<td>Seat56</td>';
echo '<td>Seat57</td>';
echo '<td>Seat58</td>';
echo '<td>Seat59</td>';
echo '<td>Seat60</td>';
echo '<td>Seat61</td>';
echo '<td>Seat62</td>';
echo '<td>Seat63</td>';
echo '<td>Seat64</td>';
echo '<td>Seat65</td>';
echo '<td>Seat66</td>';
echo '<td>Seat67</td>';
echo '<td>Seat68</td>';
echo '<td>Seat69</td>';
echo '<td>Seat70</td>';
echo '<td>Seat71</td>';
echo '<td>Seat72</td>';
echo '<td>Seat73</td>';
echo '<td>Seat74</td>';
echo '<td>Seat75</td>';
echo '<td>Seat76</td>';
echo '<td>Seat77</td>';
echo '<td>Seat78</td>';
echo '<td>Seat79</td>';
echo '<td>Seat80</td>';
echo '<td>Seat81</td>';
echo '<td>Seat82</td>';
echo '<td>Seat83</td>';
echo '<td>Seat84</td>';
echo '<td>Seat85</td>';
echo '<td>Seat86</td>';
echo '<td>Seat87</td>';
echo '<td>Seat88</td>';
echo '<td>Seat89</td>';
echo '<td>Seat90</td>';
echo '<td>Seat91</td>';
echo '<td>Seat92</td>';
echo '<td>Seat93</td>';
echo '<td>Seat94</td>';
echo '<td>Seat95</td>';
echo '<td>Seat96</td>';
echo '<td>Seat97</td>';
echo '<td>Seat98</td>';
echo '<td>Seat99</td>';
echo '<td>Seat100</td>';


    echo '</tr>';
    echo '<tr>'; 



  	while($row = mysqli_fetch_array($query)){
          echo '<td>'.$row["s1"] .'</td>'; 
          echo '<td>'.$row["s2"] .'</td>'; 
          echo '<td>'.$row["s3"] .'</td>'; 
          echo '<td>'.$row["s4"] .'</td>'; 
          echo '<td>'.$row["s5"] .'</td>'; 
          echo '<td>'.$row["s6"] .'</td>'; 
          echo '<td>'.$row["s7"] .'</td>'; 
          echo '<td>'.$row["s8"] .'</td>'; 
          echo '<td>'.$row["s9"] .'</td>'; 
          echo '<td>'.$row["s10"] .'</td>'; 
          echo '<td>'.$row["s11"] .'</td>'; 
          echo '<td>'.$row["s12"] .'</td>'; 
          echo '<td>'.$row["s13"] .'</td>'; 
          echo '<td>'.$row["s14"] .'</td>'; 
          echo '<td>'.$row["s15"] .'</td>'; 
          echo '<td>'.$row["s16"] .'</td>'; 
          echo '<td>'.$row["s17"] .'</td>'; 
          echo '<td>'.$row["s18"] .'</td>'; 
          echo '<td>'.$row["s19"] .'</td>'; 
          echo '<td>'.$row["s20"] .'</td>'; 
          echo '<td>'.$row["s21"] .'</td>'; 
          echo '<td>'.$row["s22"] .'</td>'; 
          echo '<td>'.$row["s23"] .'</td>'; 
          echo '<td>'.$row["s24"] .'</td>'; 
          echo '<td>'.$row["s25"] .'</td>'; 
          echo '<td>'.$row["s26"] .'</td>'; 
          echo '<td>'.$row["s27"] .'</td>'; 
          echo '<td>'.$row["s28"] .'</td>'; 
          echo '<td>'.$row["s29"] .'</td>'; 
          echo '<td>'.$row["s30"] .'</td>'; 
          echo '<td>'.$row["s31"] .'</td>'; 
          echo '<td>'.$row["s32"] .'</td>'; 
          echo '<td>'.$row["s33"] .'</td>'; 
          echo '<td>'.$row["s34"] .'</td>'; 
          echo '<td>'.$row["s35"] .'</td>'; 
          echo '<td>'.$row["s36"] .'</td>'; 
          echo '<td>'.$row["s37"] .'</td>'; 
          echo '<td>'.$row["s38"] .'</td>'; 
          echo '<td>'.$row["s39"] .'</td>'; 
          echo '<td>'.$row["s40"] .'</td>'; 
          echo '<td>'.$row["s41"] .'</td>'; 
          echo '<td>'.$row["s42"] .'</td>'; 
          echo '<td>'.$row["s43"] .'</td>'; 
          echo '<td>'.$row["s44"] .'</td>'; 
          echo '<td>'.$row["s45"] .'</td>'; 
          echo '<td>'.$row["s46"] .'</td>'; 
          echo '<td>'.$row["s47"] .'</td>'; 
          echo '<td>'.$row["s48"] .'</td>'; 
          echo '<td>'.$row["s49"] .'</td>'; 
          echo '<td>'.$row["s50"] .'</td>'; 
          echo '<td>'.$row["s51"] .'</td>'; 
          echo '<td>'.$row["s52"] .'</td>'; 
          echo '<td>'.$row["s53"] .'</td>'; 
          echo '<td>'.$row["s54"] .'</td>'; 
          echo '<td>'.$row["s55"] .'</td>'; 
          echo '<td>'.$row["s56"] .'</td>'; 
          echo '<td>'.$row["s57"] .'</td>'; 
          echo '<td>'.$row["s58"] .'</td>'; 
          echo '<td>'.$row["s59"] .'</td>'; 
          echo '<td>'.$row["s60"] .'</td>'; 
          echo '<td>'.$row["s61"] .'</td>'; 
          echo '<td>'.$row["s62"] .'</td>'; 
          echo '<td>'.$row["s63"] .'</td>'; 
          echo '<td>'.$row["s64"] .'</td>'; 
          echo '<td>'.$row["s65"] .'</td>'; 
          echo '<td>'.$row["s66"] .'</td>'; 
          echo '<td>'.$row["s67"] .'</td>'; 
          echo '<td>'.$row["s68"] .'</td>'; 
          echo '<td>'.$row["s69"] .'</td>'; 
          echo '<td>'.$row["s70"] .'</td>'; 
          echo '<td>'.$row["s71"] .'</td>'; 
          echo '<td>'.$row["s72"] .'</td>'; 
          echo '<td>'.$row["s73"] .'</td>'; 
          echo '<td>'.$row["s74"] .'</td>'; 
          echo '<td>'.$row["s75"] .'</td>'; 
          echo '<td>'.$row["s76"] .'</td>'; 
          echo '<td>'.$row["s77"] .'</td>'; 
          echo '<td>'.$row["s78"] .'</td>'; 
          echo '<td>'.$row["s79"] .'</td>'; 
          echo '<td>'.$row["s80"] .'</td>'; 
          echo '<td>'.$row["s81"] .'</td>'; 
          echo '<td>'.$row["s82"] .'</td>'; 
          echo '<td>'.$row["s83"] .'</td>'; 
          echo '<td>'.$row["s84"] .'</td>'; 
          echo '<td>'.$row["s85"] .'</td>'; 
          echo '<td>'.$row["s86"] .'</td>'; 
          echo '<td>'.$row["s87"] .'</td>'; 
          echo '<td>'.$row["s88"] .'</td>'; 
          echo '<td>'.$row["s89"] .'</td>'; 
          echo '<td>'.$row["s90"] .'</td>'; 
          echo '<td>'.$row["s91"] .'</td>'; 
          echo '<td>'.$row["s92"] .'</td>'; 
          echo '<td>'.$row["s93"] .'</td>'; 
          echo '<td>'.$row["s94"] .'</td>'; 
          echo '<td>'.$row["s95"] .'</td>'; 
          echo '<td>'.$row["s96"] .'</td>'; 
          echo '<td>'.$row["s97"] .'</td>'; 
          echo '<td>'.$row["s98"] .'</td>'; 
          echo '<td>'.$row["s99"] .'</td>'; 
          echo '<td>'.$row["s100"] .'</td>'; 
          echo '</tr>';
          echo '<tr>';

  	 }

    echo '<tr>';
    echo '</table>';
    exit();

}

?>


<?php

if(isset($_POST["soudekhlam"]) && isset($_POST["desdekhlam"])){
  
  include_once("db_conx.php");
  $sou = $_POST['soudekhlam'];
  $des = $_POST['desdekhlam'];
  $number = -9;


  
  $sql = "SELECT id FROM maininfo WHERE source = '$sou' AND destination = '$des' ";
  $result = mysqli_query($db_conx, $sql);
  
  while($row = mysqli_fetch_array($result)){
    $number = $row["id"];
    break;
  }

  $var = "id".$number;

  $sql = "SELECT id,start,stops,arrived,totaltime,planeno,ep,bp,ea,ba FROM $var";
  $query = mysqli_query($db_conx, $sql);


  echo '<table style ="width:300px">';
  echo '<tr>';
  echo '<td>MAIN ID</td>';
  echo '<td>ID</td>';
  echo '<td>STARTING TIME</td>';
  echo '<td>NUMBER OF STOPS</td>';
  echo '<td>ARRIVED TIME</td>';
  echo '<td>TOTAL TIME</td>';
  echo '<td>PLANE NUMBER</td>';
  echo '<td>ECONOMIC PRICE</td>';
  echo '<td>BUSINESS PRICE</td>';
  echo '<td>ECONOMIC SEATS</td>';
  echo '<td>BUSINESS SEATS</td>';
  echo '</tr>';
  echo '<tr>'; 
    while($row = mysqli_fetch_array($query)){
      echo '<td>'. $number .'</td>'; 
      echo '<td>'. $row["id"] .'</td>'; 
      echo '<td>'. $row["start"] .'</td>'; 
      echo '<td>'. $row["stops"] .'</td>';
      echo '<td>'. $row["arrived"] .'</td>';
      echo '<td>'. $row["totaltime"] .'</td>';
      echo '<td>' .$row["planeno"] .'</td>';
      echo '<td>' .$row["ep"] .'</td>';
      echo '<td>' .$row["bp"] .'</td>';
      echo '<td>' .$row["ea"].'</td>';
      echo '<td>' .$row["ba"].'</td>';
      echo '</tr>';
      echo '<tr>';
    }

    echo '<tr>';
    echo '</table>';
    exit();
}
?>


<html>
<body>


<script src="head.js"></script>
<script src="ajax.js"></script>


<script>





function go(){
  var mi = method("mainid").value;
  var ti = method("tableid").value;
  var co = method("classoption").value;
  if(mi == "" || ti == "" || co == ""){
     method("status").innerHTML =  "Please fill all the forms";
  }
  else{
    var ajax = ajaxObj("POST", "seeinfo.php");
    ajax.onreadystatechange = function() {
      if(ajaxReturn(ajax) == true) {
        method("status").innerHTML = ajax.responseText;
      }
    }
    ajax.send("mainid="+mi+"&tableid="+ti+"&classoption="+co);
  }
}



function search(){
    var s = method("selectsource").value;
    var d = method("selectdestination").value;
    var ajax = ajaxObj("POST", "seeinfo.php");
      ajax.onreadystatechange = function() {
        if(ajaxReturn(ajax) == true) {
           method("sta").innerHTML = ajax.responseText;
        }
      }
    ajax.send("soudekhlam="+s+"&desdekhlam="+d);
}

</script>


<form name="front" id="front" onsubmit="return false">
    <div>SOUCE: </div>
    <select id = "selectsource">
        <option value="IsleofManAirport">IsleofManAirport</option>
        <option value="AlgheroFertiliaAirport">AlgheroFertiliaAirport</option>
        <option value="AnconaAirport">AnconaAirport</option>
        <option value="PaleseAirport">PaleseAirport</option>
        <option value="BergamoOrioalSerioAirport">BergamoOrioalSerioAirport</option>
        <option value="BolognaAirport">BolognaAirport</option>
        <option value="BresciaAirport">BresciaAirport</option>
        <option value="BrindisiAirport">BrindisiAirport</option>
        <option value="CagliariAirport">CagliariAirport</option>
        <option value="ElmasAirport">ElmasAirport</option>
    </select>

    <div> DESTINATION: </div>
    <select id="selectdestination">
        <option value="IsleofManAirport">IsleofManAirport</option>
        <option value="AlgheroFertiliaAirport">AlgheroFertiliaAirport</option>
        <option value="AnconaAirport">AnconaAirport</option>
        <option value="PaleseAirport">PaleseAirport</option>
        <option value="BergamoOrioalSerioAirport">BergamoOrioalSerioAirport</option>
        <option value="BolognaAirport">BolognaAirport</option>
        <option value="BresciaAirport">BresciaAirport</option>
        <option value="BrindisiAirport">BrindisiAirport</option>
        <option value="CagliariAirport">CagliariAirport</option>
        <option value="ElmasAirport">ElmasAirport</option>
    </select>
  </br>

  <button id = "button" onclick="search()">SEARCH</button> </br>
  <center><span   id = "sta"></span></center>

</form>





<center>
<form name="ken" id="ken" onsubmit="return false">
  <h1>WANT TO SHOW THE SEATS</h1>
  <h3>PLEASE TYPE MAIN ID</h3> <input id="mainid" type="text">
  <h3>PLEASE TYPE ID</h3> <input id="tableid" type="text">
  <h3>PLEASE SELECT OPTION</h1>
  <select id="classoption">
    <option value="B">BUSINESS CLASS</option>
    <option value="E">ECONOMIC CLASS</option>
  </select>
  </br>

  <button id="button" onclick="go()">SUBMIT</button> </br></br></br></br>
  <CENTER><span id = "status"></span></CENTER>

</form>
</center>



</body>
</html>



