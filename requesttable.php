<?php
include_once("db_conx.php");


$tbl_users = "CREATE TABLE request(
	
   giver varchar(255) NOT NULL,
   msg varchar(255) NOT NULL,
   accepter varchar(255)NOT NULL,


   havemainid varchar(255) NOT NULL,
   wantmainid varchar(250) NOT NULL,
   havetableid varchar(32) NOT NULL,
   wanttableid varchar(255) NOT NULL,
   haveseatno varchar(255) NOT NULL,
   wantseatno varchar(255) NOT NULL,
   haveclassoption varchar(255) NOT NULL,
   wantclassoption varchar(255) NOT NULL
   
)";
 

$query = mysqli_query($db_conx, $tbl_users);
if ($query === TRUE) {
echo "<h3>Request table created OK :) </h3>"; 
} else {
echo "<h3>Request table NOT created :( </h3>"; 
}


?>