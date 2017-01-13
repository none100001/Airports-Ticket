<?php
include_once("db_conx.php");


$tbl_users = "CREATE TABLE user(
   username varchar(255) NOT NULL,
   password varchar(32) NOT NULL,
   email varchar(255) NOT NULL,
   expense varchar(2500) NOT NULL,
   amount varchar(2500) NOT NULL,
   travels varchar(2500) NOT NULL
)";
 

$query = mysqli_query($db_conx, $tbl_users);
if ($query === TRUE) {
echo "<h3>user table created OK :) </h3>"; 
} else {
echo "<h3>user table NOT created :( </h3>"; 
}



$tbl_users = "CREATE TABLE maininfo(
    source VARCHAR(255) NOT NULL,
    id VARCHAR(255) NOT NULL,
    destination VARCHAR(200) NOT NULL
)";
 

$query = mysqli_query($db_conx, $tbl_users);
if ($query === TRUE) {
echo "<h3>maininfo table created OK :) </h3>"; 
} else {
echo "<h3>maininfo table NOT created :( </h3>"; 
}





$tbl_users = "CREATE TABLE validity(
    creditno VARCHAR(200) NOT NULL,
    creditpass VARCHAR(200) NOT NULL,
    creditbalance VARCHAR(200) NOT NULL 
)";


$query = mysqli_query($db_conx, $tbl_users);
if ($query === TRUE) {
echo "<h3>validity table created OK :) </h3>"; 
} else {
echo "<h3>validity table NOT created :( </h3>"; 
}




?>