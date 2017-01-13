<?php

include_once("db_conx.php");
$i = 1;
$st = "8:24 P.M";
$stop = 2;
$at = "1:96 A.M";
$tt = "18Hour 22Minute 11Second";
$p = 1;
$a = 86;
$b = 21;
$c = 100;
$d = 100;
$sql = "INSERT INTO id1(id,start,stops,arrived,totaltime,planeno,ep,bp,ea,ba) VALUES ('$i','$st','$stop','$at','$tt','$p','$a','$b','$c','$d')";
mysqli_query($db_conx,$sql);

$i = 2;
$st = "6:49 A.M";
$stop = 3;
$at = "16:39 P.M";
$tt = "22Hour 21Minute 10Second";
$p = 2;
$a = 55;
$b = 20;
$c = 100;
$d = 100;
$sql = "INSERT INTO id1(id,start,stops,arrived,totaltime,planeno,ep,bp,ea,ba) VALUES ('$i','$st','$stop','$at','$tt','$p','$a','$b','$c','$d')";
mysqli_query($db_conx,$sql);

$i = 3;
$st = "8:68 P.M";
$stop = 2;
$at = "13:35 A.M";
$tt = "19Hour 11Minute 22Second";
$p = 3;
$a = 76;
$b = 39;
$c = 100;
$d = 100;
$sql = "INSERT INTO id1(id,start,stops,arrived,totaltime,planeno,ep,bp,ea,ba) VALUES ('$i','$st','$stop','$at','$tt','$p','$a','$b','$c','$d')";
mysqli_query($db_conx,$sql);

$i = 4;
$st = "2:91 A.M";
$stop = 2;
$at = "17:18 A.M";
$tt = "19Hour 19Minute 16Second";
$p = 4;
$a = 68;
$b = 26;
$c = 100;
$d = 100;
$sql = "INSERT INTO id1(id,start,stops,arrived,totaltime,planeno,ep,bp,ea,ba) VALUES ('$i','$st','$stop','$at','$tt','$p','$a','$b','$c','$d')";
mysqli_query($db_conx,$sql);

$i = 5;
$st = "12:17 A.M";
$stop = 2;
$at = "6:44 P.M";
$tt = "18Hour 21Minute 15Second";
$p = 5;
$a = 89;
$b = 24;
$c = 100;
$d = 100;
$sql = "INSERT INTO id1(id,start,stops,arrived,totaltime,planeno,ep,bp,ea,ba) VALUES ('$i','$st','$stop','$at','$tt','$p','$a','$b','$c','$d')";
mysqli_query($db_conx,$sql);

$i = 6;
$st = "13:51 P.M";
$stop = 3;
$at = "18:94 P.M";
$tt = "18Hour 10Minute 12Second";
$p = 6;
$a = 73;
$b = 31;
$c = 100;
$d = 100;
$sql = "INSERT INTO id1(id,start,stops,arrived,totaltime,planeno,ep,bp,ea,ba) VALUES ('$i','$st','$stop','$at','$tt','$p','$a','$b','$c','$d')";
mysqli_query($db_conx,$sql);

$i = 7;
$st = "16:36 P.M";
$stop = 2;
$at = "12:64 A.M";
$tt = "19Hour 19Minute 15Second";
$p = 7;
$a = 73;
$b = 27;
$c = 100;
$d = 100;
$sql = "INSERT INTO id1(id,start,stops,arrived,totaltime,planeno,ep,bp,ea,ba) VALUES ('$i','$st','$stop','$at','$tt','$p','$a','$b','$c','$d')";
mysqli_query($db_conx,$sql);




$i = 1;
$st = "6:46 A.M";
$stop = 3;
$at = "13:59 A.M";
$tt = "14Hour 20Minute 16Second";
$p = 1;
$a = 57;
$b = 19;
$c = 100;
$d = 100;
$sql = "INSERT INTO id2(id,start,stops,arrived,totaltime,planeno,ep,bp,ea,ba) VALUES ('$i','$st','$stop','$at','$tt','$p','$a','$b','$c','$d')";
mysqli_query($db_conx,$sql);

$i = 2;
$st = "10:12 P.M";
$stop = 3;
$at = "12:76 P.M";
$tt = "12Hour 20Minute 11Second";
$p = 2;
$a = 58;
$b = 27;
$c = 100;
$d = 100;
$sql = "INSERT INTO id2(id,start,stops,arrived,totaltime,planeno,ep,bp,ea,ba) VALUES ('$i','$st','$stop','$at','$tt','$p','$a','$b','$c','$d')";
mysqli_query($db_conx,$sql);

$i = 3;
$st = "5:79 A.M";
$stop = 2;
$at = "12:64 A.M";
$tt = "10Hour 19Minute 20Second";
$p = 3;
$a = 64;
$b = 39;
$c = 100;
$d = 100;
$sql = "INSERT INTO id2(id,start,stops,arrived,totaltime,planeno,ep,bp,ea,ba) VALUES ('$i','$st','$stop','$at','$tt','$p','$a','$b','$c','$d')";
mysqli_query($db_conx,$sql);

$i = 4;
$st = "6:42 P.M";
$stop = 3;
$at = "9:66 A.M";
$tt = "22Hour 18Minute 13Second";
$p = 4;
$a = 59;
$b = 37;
$c = 100;
$d = 100;
$sql = "INSERT INTO id2(id,start,stops,arrived,totaltime,planeno,ep,bp,ea,ba) VALUES ('$i','$st','$stop','$at','$tt','$p','$a','$b','$c','$d')";
mysqli_query($db_conx,$sql);

$i = 5;
$st = "11:18 A.M";
$stop = 3;
$at = "6:13 A.M";
$tt = "20Hour 21Minute 16Second";
$p = 5;
$a = 50;
$b = 21;
$c = 100;
$d = 100;
$sql = "INSERT INTO id2(id,start,stops,arrived,totaltime,planeno,ep,bp,ea,ba) VALUES ('$i','$st','$stop','$at','$tt','$p','$a','$b','$c','$d')";
mysqli_query($db_conx,$sql);

$i = 6;
$st = "4:38 A.M";
$stop = 2;
$at = "14:87 A.M";
$tt = "18Hour 12Minute 20Second";
$p = 6;
$a = 52;
$b = 20;
$c = 100;
$d = 100;
$sql = "INSERT INTO id2(id,start,stops,arrived,totaltime,planeno,ep,bp,ea,ba) VALUES ('$i','$st','$stop','$at','$tt','$p','$a','$b','$c','$d')";
mysqli_query($db_conx,$sql);

$i = 7;
$st = "6:22 P.M";
$stop = 1;
$at = "14:18 A.M";
$tt = "12Hour 14Minute 13Second";
$p = 7;
$a = 71;
$b = 26;
$c = 100;
$d = 100;
$sql = "INSERT INTO id2(id,start,stops,arrived,totaltime,planeno,ep,bp,ea,ba) VALUES ('$i','$st','$stop','$at','$tt','$p','$a','$b','$c','$d')";
mysqli_query($db_conx,$sql);




$i = 1;
$st = "4:11 A.M";
$stop = 1;
$at = "5:72 A.M";
$tt = "18Hour 13Minute 11Second";
$p = 1;
$a = 56;
$b = 40;
$c = 100;
$d = 100;
$sql = "INSERT INTO id3(id,start,stops,arrived,totaltime,planeno,ep,bp,ea,ba) VALUES ('$i','$st','$stop','$at','$tt','$p','$a','$b','$c','$d')";
mysqli_query($db_conx,$sql);

$i = 2;
$st = "1:86 A.M";
$stop = 1;
$at = "7:13 P.M";
$tt = "20Hour 17Minute 12Second";
$p = 2;
$a = 67;
$b = 26;
$c = 100;
$d = 100;
$sql = "INSERT INTO id3(id,start,stops,arrived,totaltime,planeno,ep,bp,ea,ba) VALUES ('$i','$st','$stop','$at','$tt','$p','$a','$b','$c','$d')";
mysqli_query($db_conx,$sql);

$i = 3;
$st = "5:31 A.M";
$stop = 1;
$at = "3:12 A.M";
$tt = "15Hour 19Minute 22Second";
$p = 3;
$a = 57;
$b = 25;
$c = 100;
$d = 100;
$sql = "INSERT INTO id3(id,start,stops,arrived,totaltime,planeno,ep,bp,ea,ba) VALUES ('$i','$st','$stop','$at','$tt','$p','$a','$b','$c','$d')";
mysqli_query($db_conx,$sql);

$i = 4;
$st = "18:53 P.M";
$stop = 2;
$at = "8:79 A.M";
$tt = "18Hour 12Minute 22Second";
$p = 4;
$a = 83;
$b = 19;
$c = 100;
$d = 100;
$sql = "INSERT INTO id3(id,start,stops,arrived,totaltime,planeno,ep,bp,ea,ba) VALUES ('$i','$st','$stop','$at','$tt','$p','$a','$b','$c','$d')";
mysqli_query($db_conx,$sql);

$i = 5;
$st = "1:75 A.M";
$stop = 1;
$at = "6:22 A.M";
$tt = "17Hour 19Minute 14Second";
$p = 5;
$a = 51;
$b = 11;
$c = 100;
$d = 100;
$sql = "INSERT INTO id3(id,start,stops,arrived,totaltime,planeno,ep,bp,ea,ba) VALUES ('$i','$st','$stop','$at','$tt','$p','$a','$b','$c','$d')";
mysqli_query($db_conx,$sql);

$i = 6;
$st = "14:21 P.M";
$stop = 1;
$at = "3:95 P.M";
$tt = "14Hour 19Minute 16Second";
$p = 6;
$a = 55;
$b = 39;
$c = 100;
$d = 100;
$sql = "INSERT INTO id3(id,start,stops,arrived,totaltime,planeno,ep,bp,ea,ba) VALUES ('$i','$st','$stop','$at','$tt','$p','$a','$b','$c','$d')";
mysqli_query($db_conx,$sql);

$i = 7;
$st = "1:14 P.M";
$stop = 2;
$at = "14:84 P.M";
$tt = "15Hour 20Minute 19Second";
$p = 7;
$a = 62;
$b = 31;
$c = 100;
$d = 100;
$sql = "INSERT INTO id3(id,start,stops,arrived,totaltime,planeno,ep,bp,ea,ba) VALUES ('$i','$st','$stop','$at','$tt','$p','$a','$b','$c','$d')";
mysqli_query($db_conx,$sql);




$i = 1;
$st = "10:73 P.M";
$stop = 2;
$at = "1:35 A.M";
$tt = "17Hour 18Minute 10Second";
$p = 1;
$a = 53;
$b = 40;
$c = 100;
$d = 100;
$sql = "INSERT INTO id4(id,start,stops,arrived,totaltime,planeno,ep,bp,ea,ba) VALUES ('$i','$st','$stop','$at','$tt','$p','$a','$b','$c','$d')";
mysqli_query($db_conx,$sql);

$i = 2;
$st = "4:93 A.M";
$stop = 3;
$at = "6:59 P.M";
$tt = "16Hour 15Minute 19Second";
$p = 2;
$a = 73;
$b = 16;
$c = 100;
$d = 100;
$sql = "INSERT INTO id4(id,start,stops,arrived,totaltime,planeno,ep,bp,ea,ba) VALUES ('$i','$st','$stop','$at','$tt','$p','$a','$b','$c','$d')";
mysqli_query($db_conx,$sql);

$i = 3;
$st = "14:11 P.M";
$stop = 3;
$at = "7:53 P.M";
$tt = "17Hour 13Minute 19Second";
$p = 3;
$a = 90;
$b = 24;
$c = 100;
$d = 100;
$sql = "INSERT INTO id4(id,start,stops,arrived,totaltime,planeno,ep,bp,ea,ba) VALUES ('$i','$st','$stop','$at','$tt','$p','$a','$b','$c','$d')";
mysqli_query($db_conx,$sql);

$i = 4;
$st = "15:79 P.M";
$stop = 2;
$at = "2:77 A.M";
$tt = "15Hour 14Minute 19Second";
$p = 4;
$a = 85;
$b = 12;
$c = 100;
$d = 100;
$sql = "INSERT INTO id4(id,start,stops,arrived,totaltime,planeno,ep,bp,ea,ba) VALUES ('$i','$st','$stop','$at','$tt','$p','$a','$b','$c','$d')";
mysqli_query($db_conx,$sql);

$i = 5;
$st = "13:16 P.M";
$stop = 3;
$at = "16:15 A.M";
$tt = "19Hour 13Minute 20Second";
$p = 5;
$a = 57;
$b = 17;
$c = 100;
$d = 100;
$sql = "INSERT INTO id4(id,start,stops,arrived,totaltime,planeno,ep,bp,ea,ba) VALUES ('$i','$st','$stop','$at','$tt','$p','$a','$b','$c','$d')";
mysqli_query($db_conx,$sql);

$i = 6;
$st = "13:93 P.M";
$stop = 2;
$at = "1:77 A.M";
$tt = "21Hour 16Minute 22Second";
$p = 6;
$a = 63;
$b = 16;
$c = 100;
$d = 100;
$sql = "INSERT INTO id4(id,start,stops,arrived,totaltime,planeno,ep,bp,ea,ba) VALUES ('$i','$st','$stop','$at','$tt','$p','$a','$b','$c','$d')";
mysqli_query($db_conx,$sql);

$i = 7;
$st = "14:85 P.M";
$stop = 3;
$at = "10:56 A.M";
$tt = "13Hour 10Minute 13Second";
$p = 7;
$a = 74;
$b = 27;
$c = 100;
$d = 100;
$sql = "INSERT INTO id4(id,start,stops,arrived,totaltime,planeno,ep,bp,ea,ba) VALUES ('$i','$st','$stop','$at','$tt','$p','$a','$b','$c','$d')";
mysqli_query($db_conx,$sql);




$i = 1;
$st = "19:71 A.M";
$stop = 1;
$at = "5:17 A.M";
$tt = "17Hour 15Minute 22Second";
$p = 1;
$a = 84;
$b = 32;
$c = 100;
$d = 100;
$sql = "INSERT INTO id5(id,start,stops,arrived,totaltime,planeno,ep,bp,ea,ba) VALUES ('$i','$st','$stop','$at','$tt','$p','$a','$b','$c','$d')";
mysqli_query($db_conx,$sql);

$i = 2;
$st = "5:69 A.M";
$stop = 1;
$at = "5:67 P.M";
$tt = "19Hour 13Minute 12Second";
$p = 2;
$a = 72;
$b = 34;
$c = 100;
$d = 100;
$sql = "INSERT INTO id5(id,start,stops,arrived,totaltime,planeno,ep,bp,ea,ba) VALUES ('$i','$st','$stop','$at','$tt','$p','$a','$b','$c','$d')";
mysqli_query($db_conx,$sql);

$i = 3;
$st = "5:46 A.M";
$stop = 3;
$at = "10:69 P.M";
$tt = "15Hour 21Minute 11Second";
$p = 3;
$a = 78;
$b = 37;
$c = 100;
$d = 100;
$sql = "INSERT INTO id5(id,start,stops,arrived,totaltime,planeno,ep,bp,ea,ba) VALUES ('$i','$st','$stop','$at','$tt','$p','$a','$b','$c','$d')";
mysqli_query($db_conx,$sql);

$i = 4;
$st = "3:54 P.M";
$stop = 1;
$at = "15:52 A.M";
$tt = "13Hour 10Minute 14Second";
$p = 4;
$a = 74;
$b = 32;
$c = 100;
$d = 100;
$sql = "INSERT INTO id5(id,start,stops,arrived,totaltime,planeno,ep,bp,ea,ba) VALUES ('$i','$st','$stop','$at','$tt','$p','$a','$b','$c','$d')";
mysqli_query($db_conx,$sql);

$i = 5;
$st = "13:81 P.M";
$stop = 1;
$at = "7:29 P.M";
$tt = "15Hour 22Minute 16Second";
$p = 5;
$a = 87;
$b = 24;
$c = 100;
$d = 100;
$sql = "INSERT INTO id5(id,start,stops,arrived,totaltime,planeno,ep,bp,ea,ba) VALUES ('$i','$st','$stop','$at','$tt','$p','$a','$b','$c','$d')";
mysqli_query($db_conx,$sql);

$i = 6;
$st = "9:85 P.M";
$stop = 3;
$at = "2:74 P.M";
$tt = "15Hour 13Minute 11Second";
$p = 6;
$a = 50;
$b = 32;
$c = 100;
$d = 100;
$sql = "INSERT INTO id5(id,start,stops,arrived,totaltime,planeno,ep,bp,ea,ba) VALUES ('$i','$st','$stop','$at','$tt','$p','$a','$b','$c','$d')";
mysqli_query($db_conx,$sql);

$i = 7;
$st = "5:59 P.M";
$stop = 1;
$at = "9:36 P.M";
$tt = "18Hour 20Minute 21Second";
$p = 7;
$a = 86;
$b = 18;
$c = 100;
$d = 100;
$sql = "INSERT INTO id5(id,start,stops,arrived,totaltime,planeno,ep,bp,ea,ba) VALUES ('$i','$st','$stop','$at','$tt','$p','$a','$b','$c','$d')";
mysqli_query($db_conx,$sql);




$i = 1;
$st = "12:88 A.M";
$stop = 1;
$at = "17:58 P.M";
$tt = "17Hour 18Minute 21Second";
$p = 1;
$a = 55;
$b = 25;
$c = 100;
$d = 100;
$sql = "INSERT INTO id6(id,start,stops,arrived,totaltime,planeno,ep,bp,ea,ba) VALUES ('$i','$st','$stop','$at','$tt','$p','$a','$b','$c','$d')";
mysqli_query($db_conx,$sql);

$i = 2;
$st = "5:11 P.M";
$stop = 3;
$at = "19:92 P.M";
$tt = "19Hour 20Minute 14Second";
$p = 2;
$a = 83;
$b = 20;
$c = 100;
$d = 100;
$sql = "INSERT INTO id6(id,start,stops,arrived,totaltime,planeno,ep,bp,ea,ba) VALUES ('$i','$st','$stop','$at','$tt','$p','$a','$b','$c','$d')";
mysqli_query($db_conx,$sql);

$i = 3;
$st = "13:74 A.M";
$stop = 3;
$at = "10:72 P.M";
$tt = "13Hour 10Minute 17Second";
$p = 3;
$a = 77;
$b = 28;
$c = 100;
$d = 100;
$sql = "INSERT INTO id6(id,start,stops,arrived,totaltime,planeno,ep,bp,ea,ba) VALUES ('$i','$st','$stop','$at','$tt','$p','$a','$b','$c','$d')";
mysqli_query($db_conx,$sql);

$i = 4;
$st = "6:59 A.M";
$stop = 3;
$at = "4:41 A.M";
$tt = "17Hour 15Minute 20Second";
$p = 4;
$a = 51;
$b = 18;
$c = 100;
$d = 100;
$sql = "INSERT INTO id6(id,start,stops,arrived,totaltime,planeno,ep,bp,ea,ba) VALUES ('$i','$st','$stop','$at','$tt','$p','$a','$b','$c','$d')";
mysqli_query($db_conx,$sql);

$i = 5;
$st = "1:18 A.M";
$stop = 2;
$at = "8:42 P.M";
$tt = "13Hour 11Minute 21Second";
$p = 5;
$a = 63;
$b = 24;
$c = 100;
$d = 100;
$sql = "INSERT INTO id6(id,start,stops,arrived,totaltime,planeno,ep,bp,ea,ba) VALUES ('$i','$st','$stop','$at','$tt','$p','$a','$b','$c','$d')";
mysqli_query($db_conx,$sql);

$i = 6;
$st = "17:77 A.M";
$stop = 2;
$at = "5:59 P.M";
$tt = "17Hour 18Minute 21Second";
$p = 6;
$a = 74;
$b = 25;
$c = 100;
$d = 100;
$sql = "INSERT INTO id6(id,start,stops,arrived,totaltime,planeno,ep,bp,ea,ba) VALUES ('$i','$st','$stop','$at','$tt','$p','$a','$b','$c','$d')";
mysqli_query($db_conx,$sql);

$i = 7;
$st = "14:27 A.M";
$stop = 3;
$at = "1:83 P.M";
$tt = "16Hour 21Minute 18Second";
$p = 7;
$a = 62;
$b = 18;
$c = 100;
$d = 100;
$sql = "INSERT INTO id6(id,start,stops,arrived,totaltime,planeno,ep,bp,ea,ba) VALUES ('$i','$st','$stop','$at','$tt','$p','$a','$b','$c','$d')";
mysqli_query($db_conx,$sql);




$i = 1;
$st = "9:94 P.M";
$stop = 2;
$at = "15:58 A.M";
$tt = "21Hour 13Minute 20Second";
$p = 1;
$a = 52;
$b = 33;
$c = 100;
$d = 100;
$sql = "INSERT INTO id7(id,start,stops,arrived,totaltime,planeno,ep,bp,ea,ba) VALUES ('$i','$st','$stop','$at','$tt','$p','$a','$b','$c','$d')";
mysqli_query($db_conx,$sql);

$i = 2;
$st = "15:32 P.M";
$stop = 3;
$at = "6:76 A.M";
$tt = "16Hour 10Minute 22Second";
$p = 2;
$a = 60;
$b = 38;
$c = 100;
$d = 100;
$sql = "INSERT INTO id7(id,start,stops,arrived,totaltime,planeno,ep,bp,ea,ba) VALUES ('$i','$st','$stop','$at','$tt','$p','$a','$b','$c','$d')";
mysqli_query($db_conx,$sql);

$i = 3;
$st = "5:32 A.M";
$stop = 1;
$at = "17:83 A.M";
$tt = "17Hour 21Minute 16Second";
$p = 3;
$a = 89;
$b = 38;
$c = 100;
$d = 100;
$sql = "INSERT INTO id7(id,start,stops,arrived,totaltime,planeno,ep,bp,ea,ba) VALUES ('$i','$st','$stop','$at','$tt','$p','$a','$b','$c','$d')";
mysqli_query($db_conx,$sql);

$i = 4;
$st = "18:11 P.M";
$stop = 2;
$at = "2:64 P.M";
$tt = "21Hour 15Minute 16Second";
$p = 4;
$a = 53;
$b = 39;
$c = 100;
$d = 100;
$sql = "INSERT INTO id7(id,start,stops,arrived,totaltime,planeno,ep,bp,ea,ba) VALUES ('$i','$st','$stop','$at','$tt','$p','$a','$b','$c','$d')";
mysqli_query($db_conx,$sql);

$i = 5;
$st = "10:37 A.M";
$stop = 1;
$at = "5:16 P.M";
$tt = "11Hour 19Minute 12Second";
$p = 5;
$a = 54;
$b = 31;
$c = 100;
$d = 100;
$sql = "INSERT INTO id7(id,start,stops,arrived,totaltime,planeno,ep,bp,ea,ba) VALUES ('$i','$st','$stop','$at','$tt','$p','$a','$b','$c','$d')";
mysqli_query($db_conx,$sql);

$i = 6;
$st = "4:85 A.M";
$stop = 3;
$at = "19:27 A.M";
$tt = "14Hour 16Minute 20Second";
$p = 6;
$a = 82;
$b = 14;
$c = 100;
$d = 100;
$sql = "INSERT INTO id7(id,start,stops,arrived,totaltime,planeno,ep,bp,ea,ba) VALUES ('$i','$st','$stop','$at','$tt','$p','$a','$b','$c','$d')";
mysqli_query($db_conx,$sql);

$i = 7;
$st = "14:25 A.M";
$stop = 3;
$at = "18:94 P.M";
$tt = "16Hour 14Minute 17Second";
$p = 7;
$a = 87;
$b = 40;
$c = 100;
$d = 100;
$sql = "INSERT INTO id7(id,start,stops,arrived,totaltime,planeno,ep,bp,ea,ba) VALUES ('$i','$st','$stop','$at','$tt','$p','$a','$b','$c','$d')";
mysqli_query($db_conx,$sql);




$i = 1;
$st = "16:65 P.M";
$stop = 2;
$at = "1:58 P.M";
$tt = "10Hour 21Minute 13Second";
$p = 1;
$a = 68;
$b = 31;
$c = 100;
$d = 100;
$sql = "INSERT INTO id8(id,start,stops,arrived,totaltime,planeno,ep,bp,ea,ba) VALUES ('$i','$st','$stop','$at','$tt','$p','$a','$b','$c','$d')";
mysqli_query($db_conx,$sql);

$i = 2;
$st = "11:84 A.M";
$stop = 3;
$at = "3:81 P.M";
$tt = "12Hour 16Minute 11Second";
$p = 2;
$a = 56;
$b = 27;
$c = 100;
$d = 100;
$sql = "INSERT INTO id8(id,start,stops,arrived,totaltime,planeno,ep,bp,ea,ba) VALUES ('$i','$st','$stop','$at','$tt','$p','$a','$b','$c','$d')";
mysqli_query($db_conx,$sql);

$i = 3;
$st = "14:16 A.M";
$stop = 2;
$at = "12:38 A.M";
$tt = "17Hour 22Minute 22Second";
$p = 3;
$a = 54;
$b = 23;
$c = 100;
$d = 100;
$sql = "INSERT INTO id8(id,start,stops,arrived,totaltime,planeno,ep,bp,ea,ba) VALUES ('$i','$st','$stop','$at','$tt','$p','$a','$b','$c','$d')";
mysqli_query($db_conx,$sql);

$i = 4;
$st = "18:54 P.M";
$stop = 2;
$at = "13:74 A.M";
$tt = "22Hour 13Minute 12Second";
$p = 4;
$a = 77;
$b = 15;
$c = 100;
$d = 100;
$sql = "INSERT INTO id8(id,start,stops,arrived,totaltime,planeno,ep,bp,ea,ba) VALUES ('$i','$st','$stop','$at','$tt','$p','$a','$b','$c','$d')";
mysqli_query($db_conx,$sql);

$i = 5;
$st = "6:63 P.M";
$stop = 1;
$at = "10:38 P.M";
$tt = "19Hour 20Minute 19Second";
$p = 5;
$a = 67;
$b = 21;
$c = 100;
$d = 100;
$sql = "INSERT INTO id8(id,start,stops,arrived,totaltime,planeno,ep,bp,ea,ba) VALUES ('$i','$st','$stop','$at','$tt','$p','$a','$b','$c','$d')";
mysqli_query($db_conx,$sql);

$i = 6;
$st = "5:93 A.M";
$stop = 2;
$at = "9:37 A.M";
$tt = "19Hour 15Minute 16Second";
$p = 6;
$a = 83;
$b = 17;
$c = 100;
$d = 100;
$sql = "INSERT INTO id8(id,start,stops,arrived,totaltime,planeno,ep,bp,ea,ba) VALUES ('$i','$st','$stop','$at','$tt','$p','$a','$b','$c','$d')";
mysqli_query($db_conx,$sql);

$i = 7;
$st = "4:91 P.M";
$stop = 3;
$at = "9:79 P.M";
$tt = "21Hour 14Minute 20Second";
$p = 7;
$a = 63;
$b = 40;
$c = 100;
$d = 100;
$sql = "INSERT INTO id8(id,start,stops,arrived,totaltime,planeno,ep,bp,ea,ba) VALUES ('$i','$st','$stop','$at','$tt','$p','$a','$b','$c','$d')";
mysqli_query($db_conx,$sql);




$i = 1;
$st = "4:73 P.M";
$stop = 1;
$at = "4:33 A.M";
$tt = "10Hour 22Minute 22Second";
$p = 1;
$a = 65;
$b = 26;
$c = 100;
$d = 100;
$sql = "INSERT INTO id9(id,start,stops,arrived,totaltime,planeno,ep,bp,ea,ba) VALUES ('$i','$st','$stop','$at','$tt','$p','$a','$b','$c','$d')";
mysqli_query($db_conx,$sql);

$i = 2;
$st = "7:38 P.M";
$stop = 2;
$at = "6:34 P.M";
$tt = "17Hour 11Minute 11Second";
$p = 2;
$a = 76;
$b = 13;
$c = 100;
$d = 100;
$sql = "INSERT INTO id9(id,start,stops,arrived,totaltime,planeno,ep,bp,ea,ba) VALUES ('$i','$st','$stop','$at','$tt','$p','$a','$b','$c','$d')";
mysqli_query($db_conx,$sql);

$i = 3;
$st = "1:54 P.M";
$stop = 3;
$at = "10:39 P.M";
$tt = "22Hour 21Minute 10Second";
$p = 3;
$a = 82;
$b = 13;
$c = 100;
$d = 100;
$sql = "INSERT INTO id9(id,start,stops,arrived,totaltime,planeno,ep,bp,ea,ba) VALUES ('$i','$st','$stop','$at','$tt','$p','$a','$b','$c','$d')";
mysqli_query($db_conx,$sql);

$i = 4;
$st = "10:21 P.M";
$stop = 1;
$at = "4:37 P.M";
$tt = "14Hour 14Minute 15Second";
$p = 4;
$a = 77;
$b = 12;
$c = 100;
$d = 100;
$sql = "INSERT INTO id9(id,start,stops,arrived,totaltime,planeno,ep,bp,ea,ba) VALUES ('$i','$st','$stop','$at','$tt','$p','$a','$b','$c','$d')";
mysqli_query($db_conx,$sql);

$i = 5;
$st = "5:99 P.M";
$stop = 1;
$at = "13:19 A.M";
$tt = "16Hour 21Minute 21Second";
$p = 5;
$a = 83;
$b = 10;
$c = 100;
$d = 100;
$sql = "INSERT INTO id9(id,start,stops,arrived,totaltime,planeno,ep,bp,ea,ba) VALUES ('$i','$st','$stop','$at','$tt','$p','$a','$b','$c','$d')";
mysqli_query($db_conx,$sql);

$i = 6;
$st = "17:47 P.M";
$stop = 3;
$at = "14:91 A.M";
$tt = "15Hour 11Minute 12Second";
$p = 6;
$a = 87;
$b = 20;
$c = 100;
$d = 100;
$sql = "INSERT INTO id9(id,start,stops,arrived,totaltime,planeno,ep,bp,ea,ba) VALUES ('$i','$st','$stop','$at','$tt','$p','$a','$b','$c','$d')";
mysqli_query($db_conx,$sql);

$i = 7;
$st = "1:14 A.M";
$stop = 3;
$at = "16:73 P.M";
$tt = "11Hour 20Minute 14Second";
$p = 7;
$a = 82;
$b = 15;
$c = 100;
$d = 100;
$sql = "INSERT INTO id9(id,start,stops,arrived,totaltime,planeno,ep,bp,ea,ba) VALUES ('$i','$st','$stop','$at','$tt','$p','$a','$b','$c','$d')";
mysqli_query($db_conx,$sql);




$i = 1;
$st = "14:15 A.M";
$stop = 2;
$at = "13:87 A.M";
$tt = "18Hour 14Minute 11Second";
$p = 1;
$a = 58;
$b = 19;
$c = 100;
$d = 100;
$sql = "INSERT INTO id10(id,start,stops,arrived,totaltime,planeno,ep,bp,ea,ba) VALUES ('$i','$st','$stop','$at','$tt','$p','$a','$b','$c','$d')";
mysqli_query($db_conx,$sql);

$i = 2;
$st = "18:66 P.M";
$stop = 1;
$at = "12:41 P.M";
$tt = "14Hour 16Minute 22Second";
$p = 2;
$a = 79;
$b = 28;
$c = 100;
$d = 100;
$sql = "INSERT INTO id10(id,start,stops,arrived,totaltime,planeno,ep,bp,ea,ba) VALUES ('$i','$st','$stop','$at','$tt','$p','$a','$b','$c','$d')";
mysqli_query($db_conx,$sql);

$i = 3;
$st = "16:79 A.M";
$stop = 2;
$at = "12:93 P.M";
$tt = "17Hour 10Minute 21Second";
$p = 3;
$a = 62;
$b = 13;
$c = 100;
$d = 100;
$sql = "INSERT INTO id10(id,start,stops,arrived,totaltime,planeno,ep,bp,ea,ba) VALUES ('$i','$st','$stop','$at','$tt','$p','$a','$b','$c','$d')";
mysqli_query($db_conx,$sql);

$i = 4;
$st = "7:64 P.M";
$stop = 3;
$at = "4:59 A.M";
$tt = "14Hour 14Minute 17Second";
$p = 4;
$a = 90;
$b = 17;
$c = 100;
$d = 100;
$sql = "INSERT INTO id10(id,start,stops,arrived,totaltime,planeno,ep,bp,ea,ba) VALUES ('$i','$st','$stop','$at','$tt','$p','$a','$b','$c','$d')";
mysqli_query($db_conx,$sql);

$i = 5;
$st = "2:67 A.M";
$stop = 1;
$at = "9:44 P.M";
$tt = "22Hour 17Minute 10Second";
$p = 5;
$a = 84;
$b = 17;
$c = 100;
$d = 100;
$sql = "INSERT INTO id10(id,start,stops,arrived,totaltime,planeno,ep,bp,ea,ba) VALUES ('$i','$st','$stop','$at','$tt','$p','$a','$b','$c','$d')";
mysqli_query($db_conx,$sql);

$i = 6;
$st = "2:65 P.M";
$stop = 3;
$at = "14:58 A.M";
$tt = "18Hour 22Minute 12Second";
$p = 6;
$a = 88;
$b = 21;
$c = 100;
$d = 100;
$sql = "INSERT INTO id10(id,start,stops,arrived,totaltime,planeno,ep,bp,ea,ba) VALUES ('$i','$st','$stop','$at','$tt','$p','$a','$b','$c','$d')";
mysqli_query($db_conx,$sql);

$i = 7;
$st = "6:18 A.M";
$stop = 2;
$at = "11:17 P.M";
$tt = "11Hour 22Minute 12Second";
$p = 7;
$a = 75;
$b = 18;
$c = 100;
$d = 100;
$sql = "INSERT INTO id10(id,start,stops,arrived,totaltime,planeno,ep,bp,ea,ba) VALUES ('$i','$st','$stop','$at','$tt','$p','$a','$b','$c','$d')";
mysqli_query($db_conx,$sql);




$i = 1;
$st = "2:77 A.M";
$stop = 1;
$at = "1:85 A.M";
$tt = "11Hour 20Minute 14Second";
$p = 1;
$a = 89;
$b = 20;
$c = 100;
$d = 100;
$sql = "INSERT INTO id11(id,start,stops,arrived,totaltime,planeno,ep,bp,ea,ba) VALUES ('$i','$st','$stop','$at','$tt','$p','$a','$b','$c','$d')";
mysqli_query($db_conx,$sql);

$i = 2;
$st = "7:85 A.M";
$stop = 3;
$at = "14:71 P.M";
$tt = "17Hour 14Minute 22Second";
$p = 2;
$a = 72;
$b = 34;
$c = 100;
$d = 100;
$sql = "INSERT INTO id11(id,start,stops,arrived,totaltime,planeno,ep,bp,ea,ba) VALUES ('$i','$st','$stop','$at','$tt','$p','$a','$b','$c','$d')";
mysqli_query($db_conx,$sql);

$i = 3;
$st = "6:17 P.M";
$stop = 1;
$at = "3:85 P.M";
$tt = "10Hour 17Minute 16Second";
$p = 3;
$a = 76;
$b = 39;
$c = 100;
$d = 100;
$sql = "INSERT INTO id11(id,start,stops,arrived,totaltime,planeno,ep,bp,ea,ba) VALUES ('$i','$st','$stop','$at','$tt','$p','$a','$b','$c','$d')";
mysqli_query($db_conx,$sql);

$i = 4;
$st = "16:55 P.M";
$stop = 3;
$at = "8:99 A.M";
$tt = "14Hour 13Minute 10Second";
$p = 4;
$a = 56;
$b = 12;
$c = 100;
$d = 100;
$sql = "INSERT INTO id11(id,start,stops,arrived,totaltime,planeno,ep,bp,ea,ba) VALUES ('$i','$st','$stop','$at','$tt','$p','$a','$b','$c','$d')";
mysqli_query($db_conx,$sql);

$i = 5;
$st = "4:23 A.M";
$stop = 3;
$at = "10:74 A.M";
$tt = "14Hour 22Minute 21Second";
$p = 5;
$a = 52;
$b = 27;
$c = 100;
$d = 100;
$sql = "INSERT INTO id11(id,start,stops,arrived,totaltime,planeno,ep,bp,ea,ba) VALUES ('$i','$st','$stop','$at','$tt','$p','$a','$b','$c','$d')";
mysqli_query($db_conx,$sql);

$i = 6;
$st = "2:51 A.M";
$stop = 3;
$at = "19:53 P.M";
$tt = "15Hour 14Minute 13Second";
$p = 6;
$a = 58;
$b = 37;
$c = 100;
$d = 100;
$sql = "INSERT INTO id11(id,start,stops,arrived,totaltime,planeno,ep,bp,ea,ba) VALUES ('$i','$st','$stop','$at','$tt','$p','$a','$b','$c','$d')";
mysqli_query($db_conx,$sql);

$i = 7;
$st = "1:95 A.M";
$stop = 1;
$at = "18:79 P.M";
$tt = "10Hour 18Minute 18Second";
$p = 7;
$a = 69;
$b = 16;
$c = 100;
$d = 100;
$sql = "INSERT INTO id11(id,start,stops,arrived,totaltime,planeno,ep,bp,ea,ba) VALUES ('$i','$st','$stop','$at','$tt','$p','$a','$b','$c','$d')";
mysqli_query($db_conx,$sql);




$i = 1;
$st = "2:31 A.M";
$stop = 1;
$at = "6:23 A.M";
$tt = "11Hour 19Minute 17Second";
$p = 1;
$a = 53;
$b = 26;
$c = 100;
$d = 100;
$sql = "INSERT INTO id12(id,start,stops,arrived,totaltime,planeno,ep,bp,ea,ba) VALUES ('$i','$st','$stop','$at','$tt','$p','$a','$b','$c','$d')";
mysqli_query($db_conx,$sql);

$i = 2;
$st = "4:31 P.M";
$stop = 1;
$at = "7:97 P.M";
$tt = "11Hour 17Minute 22Second";
$p = 2;
$a = 75;
$b = 21;
$c = 100;
$d = 100;
$sql = "INSERT INTO id12(id,start,stops,arrived,totaltime,planeno,ep,bp,ea,ba) VALUES ('$i','$st','$stop','$at','$tt','$p','$a','$b','$c','$d')";
mysqli_query($db_conx,$sql);

$i = 3;
$st = "19:29 A.M";
$stop = 2;
$at = "17:27 A.M";
$tt = "14Hour 10Minute 17Second";
$p = 3;
$a = 72;
$b = 26;
$c = 100;
$d = 100;
$sql = "INSERT INTO id12(id,start,stops,arrived,totaltime,planeno,ep,bp,ea,ba) VALUES ('$i','$st','$stop','$at','$tt','$p','$a','$b','$c','$d')";
mysqli_query($db_conx,$sql);

$i = 4;
$st = "12:39 A.M";
$stop = 3;
$at = "14:95 A.M";
$tt = "17Hour 11Minute 15Second";
$p = 4;
$a = 56;
$b = 10;
$c = 100;
$d = 100;
$sql = "INSERT INTO id12(id,start,stops,arrived,totaltime,planeno,ep,bp,ea,ba) VALUES ('$i','$st','$stop','$at','$tt','$p','$a','$b','$c','$d')";
mysqli_query($db_conx,$sql);

$i = 5;
$st = "5:57 P.M";
$stop = 3;
$at = "14:59 P.M";
$tt = "10Hour 14Minute 12Second";
$p = 5;
$a = 64;
$b = 40;
$c = 100;
$d = 100;
$sql = "INSERT INTO id12(id,start,stops,arrived,totaltime,planeno,ep,bp,ea,ba) VALUES ('$i','$st','$stop','$at','$tt','$p','$a','$b','$c','$d')";
mysqli_query($db_conx,$sql);

$i = 6;
$st = "19:98 A.M";
$stop = 2;
$at = "2:29 P.M";
$tt = "21Hour 19Minute 16Second";
$p = 6;
$a = 52;
$b = 40;
$c = 100;
$d = 100;
$sql = "INSERT INTO id12(id,start,stops,arrived,totaltime,planeno,ep,bp,ea,ba) VALUES ('$i','$st','$stop','$at','$tt','$p','$a','$b','$c','$d')";
mysqli_query($db_conx,$sql);

$i = 7;
$st = "1:71 P.M";
$stop = 2;
$at = "6:43 A.M";
$tt = "11Hour 13Minute 19Second";
$p = 7;
$a = 66;
$b = 21;
$c = 100;
$d = 100;
$sql = "INSERT INTO id12(id,start,stops,arrived,totaltime,planeno,ep,bp,ea,ba) VALUES ('$i','$st','$stop','$at','$tt','$p','$a','$b','$c','$d')";
mysqli_query($db_conx,$sql);




$i = 1;
$st = "3:24 A.M";
$stop = 3;
$at = "18:75 A.M";
$tt = "13Hour 11Minute 15Second";
$p = 1;
$a = 57;
$b = 20;
$c = 100;
$d = 100;
$sql = "INSERT INTO id13(id,start,stops,arrived,totaltime,planeno,ep,bp,ea,ba) VALUES ('$i','$st','$stop','$at','$tt','$p','$a','$b','$c','$d')";
mysqli_query($db_conx,$sql);

$i = 2;
$st = "7:11 P.M";
$stop = 2;
$at = "12:31 A.M";
$tt = "19Hour 17Minute 21Second";
$p = 2;
$a = 83;
$b = 14;
$c = 100;
$d = 100;
$sql = "INSERT INTO id13(id,start,stops,arrived,totaltime,planeno,ep,bp,ea,ba) VALUES ('$i','$st','$stop','$at','$tt','$p','$a','$b','$c','$d')";
mysqli_query($db_conx,$sql);

$i = 3;
$st = "12:62 P.M";
$stop = 2;
$at = "3:36 P.M";
$tt = "12Hour 10Minute 10Second";
$p = 3;
$a = 57;
$b = 10;
$c = 100;
$d = 100;
$sql = "INSERT INTO id13(id,start,stops,arrived,totaltime,planeno,ep,bp,ea,ba) VALUES ('$i','$st','$stop','$at','$tt','$p','$a','$b','$c','$d')";
mysqli_query($db_conx,$sql);

$i = 4;
$st = "15:15 A.M";
$stop = 3;
$at = "3:95 A.M";
$tt = "22Hour 13Minute 18Second";
$p = 4;
$a = 60;
$b = 35;
$c = 100;
$d = 100;
$sql = "INSERT INTO id13(id,start,stops,arrived,totaltime,planeno,ep,bp,ea,ba) VALUES ('$i','$st','$stop','$at','$tt','$p','$a','$b','$c','$d')";
mysqli_query($db_conx,$sql);

$i = 5;
$st = "19:59 P.M";
$stop = 3;
$at = "19:16 A.M";
$tt = "15Hour 20Minute 19Second";
$p = 5;
$a = 57;
$b = 11;
$c = 100;
$d = 100;
$sql = "INSERT INTO id13(id,start,stops,arrived,totaltime,planeno,ep,bp,ea,ba) VALUES ('$i','$st','$stop','$at','$tt','$p','$a','$b','$c','$d')";
mysqli_query($db_conx,$sql);

$i = 6;
$st = "14:82 A.M";
$stop = 2;
$at = "1:49 P.M";
$tt = "16Hour 10Minute 19Second";
$p = 6;
$a = 55;
$b = 40;
$c = 100;
$d = 100;
$sql = "INSERT INTO id13(id,start,stops,arrived,totaltime,planeno,ep,bp,ea,ba) VALUES ('$i','$st','$stop','$at','$tt','$p','$a','$b','$c','$d')";
mysqli_query($db_conx,$sql);

$i = 7;
$st = "17:95 P.M";
$stop = 3;
$at = "11:73 A.M";
$tt = "10Hour 12Minute 15Second";
$p = 7;
$a = 59;
$b = 13;
$c = 100;
$d = 100;
$sql = "INSERT INTO id13(id,start,stops,arrived,totaltime,planeno,ep,bp,ea,ba) VALUES ('$i','$st','$stop','$at','$tt','$p','$a','$b','$c','$d')";
mysqli_query($db_conx,$sql);




$i = 1;
$st = "16:18 A.M";
$stop = 1;
$at = "11:64 A.M";
$tt = "13Hour 19Minute 11Second";
$p = 1;
$a = 59;
$b = 12;
$c = 100;
$d = 100;
$sql = "INSERT INTO id14(id,start,stops,arrived,totaltime,planeno,ep,bp,ea,ba) VALUES ('$i','$st','$stop','$at','$tt','$p','$a','$b','$c','$d')";
mysqli_query($db_conx,$sql);

$i = 2;
$st = "15:57 P.M";
$stop = 3;
$at = "6:78 A.M";
$tt = "14Hour 18Minute 16Second";
$p = 2;
$a = 73;
$b = 26;
$c = 100;
$d = 100;
$sql = "INSERT INTO id14(id,start,stops,arrived,totaltime,planeno,ep,bp,ea,ba) VALUES ('$i','$st','$stop','$at','$tt','$p','$a','$b','$c','$d')";
mysqli_query($db_conx,$sql);

$i = 3;
$st = "13:94 P.M";
$stop = 1;
$at = "10:87 A.M";
$tt = "20Hour 12Minute 18Second";
$p = 3;
$a = 52;
$b = 11;
$c = 100;
$d = 100;
$sql = "INSERT INTO id14(id,start,stops,arrived,totaltime,planeno,ep,bp,ea,ba) VALUES ('$i','$st','$stop','$at','$tt','$p','$a','$b','$c','$d')";
mysqli_query($db_conx,$sql);

$i = 4;
$st = "8:31 P.M";
$stop = 1;
$at = "7:26 A.M";
$tt = "13Hour 10Minute 17Second";
$p = 4;
$a = 59;
$b = 13;
$c = 100;
$d = 100;
$sql = "INSERT INTO id14(id,start,stops,arrived,totaltime,planeno,ep,bp,ea,ba) VALUES ('$i','$st','$stop','$at','$tt','$p','$a','$b','$c','$d')";
mysqli_query($db_conx,$sql);

$i = 5;
$st = "16:41 P.M";
$stop = 1;
$at = "6:44 A.M";
$tt = "12Hour 10Minute 16Second";
$p = 5;
$a = 73;
$b = 13;
$c = 100;
$d = 100;
$sql = "INSERT INTO id14(id,start,stops,arrived,totaltime,planeno,ep,bp,ea,ba) VALUES ('$i','$st','$stop','$at','$tt','$p','$a','$b','$c','$d')";
mysqli_query($db_conx,$sql);

$i = 6;
$st = "17:47 A.M";
$stop = 1;
$at = "9:91 P.M";
$tt = "12Hour 14Minute 17Second";
$p = 6;
$a = 70;
$b = 17;
$c = 100;
$d = 100;
$sql = "INSERT INTO id14(id,start,stops,arrived,totaltime,planeno,ep,bp,ea,ba) VALUES ('$i','$st','$stop','$at','$tt','$p','$a','$b','$c','$d')";
mysqli_query($db_conx,$sql);

$i = 7;
$st = "13:38 P.M";
$stop = 3;
$at = "5:79 A.M";
$tt = "14Hour 16Minute 21Second";
$p = 7;
$a = 69;
$b = 33;
$c = 100;
$d = 100;
$sql = "INSERT INTO id14(id,start,stops,arrived,totaltime,planeno,ep,bp,ea,ba) VALUES ('$i','$st','$stop','$at','$tt','$p','$a','$b','$c','$d')";
mysqli_query($db_conx,$sql);




$i = 1;
$st = "5:36 P.M";
$stop = 1;
$at = "7:74 A.M";
$tt = "20Hour 17Minute 14Second";
$p = 1;
$a = 90;
$b = 14;
$c = 100;
$d = 100;
$sql = "INSERT INTO id15(id,start,stops,arrived,totaltime,planeno,ep,bp,ea,ba) VALUES ('$i','$st','$stop','$at','$tt','$p','$a','$b','$c','$d')";
mysqli_query($db_conx,$sql);

$i = 2;
$st = "8:45 P.M";
$stop = 1;
$at = "10:27 P.M";
$tt = "10Hour 14Minute 11Second";
$p = 2;
$a = 71;
$b = 27;
$c = 100;
$d = 100;
$sql = "INSERT INTO id15(id,start,stops,arrived,totaltime,planeno,ep,bp,ea,ba) VALUES ('$i','$st','$stop','$at','$tt','$p','$a','$b','$c','$d')";
mysqli_query($db_conx,$sql);

$i = 3;
$st = "6:21 P.M";
$stop = 2;
$at = "5:64 A.M";
$tt = "10Hour 13Minute 18Second";
$p = 3;
$a = 76;
$b = 26;
$c = 100;
$d = 100;
$sql = "INSERT INTO id15(id,start,stops,arrived,totaltime,planeno,ep,bp,ea,ba) VALUES ('$i','$st','$stop','$at','$tt','$p','$a','$b','$c','$d')";
mysqli_query($db_conx,$sql);

$i = 4;
$st = "3:81 A.M";
$stop = 1;
$at = "17:16 A.M";
$tt = "21Hour 14Minute 21Second";
$p = 4;
$a = 65;
$b = 28;
$c = 100;
$d = 100;
$sql = "INSERT INTO id15(id,start,stops,arrived,totaltime,planeno,ep,bp,ea,ba) VALUES ('$i','$st','$stop','$at','$tt','$p','$a','$b','$c','$d')";
mysqli_query($db_conx,$sql);

$i = 5;
$st = "5:33 A.M";
$stop = 2;
$at = "3:38 A.M";
$tt = "11Hour 13Minute 15Second";
$p = 5;
$a = 62;
$b = 31;
$c = 100;
$d = 100;
$sql = "INSERT INTO id15(id,start,stops,arrived,totaltime,planeno,ep,bp,ea,ba) VALUES ('$i','$st','$stop','$at','$tt','$p','$a','$b','$c','$d')";
mysqli_query($db_conx,$sql);

$i = 6;
$st = "4:21 A.M";
$stop = 3;
$at = "15:26 A.M";
$tt = "16Hour 11Minute 22Second";
$p = 6;
$a = 89;
$b = 21;
$c = 100;
$d = 100;
$sql = "INSERT INTO id15(id,start,stops,arrived,totaltime,planeno,ep,bp,ea,ba) VALUES ('$i','$st','$stop','$at','$tt','$p','$a','$b','$c','$d')";
mysqli_query($db_conx,$sql);

$i = 7;
$st = "15:54 P.M";
$stop = 3;
$at = "14:73 P.M";
$tt = "21Hour 13Minute 10Second";
$p = 7;
$a = 58;
$b = 14;
$c = 100;
$d = 100;
$sql = "INSERT INTO id15(id,start,stops,arrived,totaltime,planeno,ep,bp,ea,ba) VALUES ('$i','$st','$stop','$at','$tt','$p','$a','$b','$c','$d')";
mysqli_query($db_conx,$sql);




$i = 1;
$st = "9:91 P.M";
$stop = 1;
$at = "8:68 A.M";
$tt = "19Hour 11Minute 22Second";
$p = 1;
$a = 74;
$b = 30;
$c = 100;
$d = 100;
$sql = "INSERT INTO id16(id,start,stops,arrived,totaltime,planeno,ep,bp,ea,ba) VALUES ('$i','$st','$stop','$at','$tt','$p','$a','$b','$c','$d')";
mysqli_query($db_conx,$sql);

$i = 2;
$st = "4:64 A.M";
$stop = 1;
$at = "7:97 P.M";
$tt = "21Hour 22Minute 13Second";
$p = 2;
$a = 87;
$b = 33;
$c = 100;
$d = 100;
$sql = "INSERT INTO id16(id,start,stops,arrived,totaltime,planeno,ep,bp,ea,ba) VALUES ('$i','$st','$stop','$at','$tt','$p','$a','$b','$c','$d')";
mysqli_query($db_conx,$sql);

$i = 3;
$st = "18:82 A.M";
$stop = 3;
$at = "11:52 P.M";
$tt = "16Hour 16Minute 20Second";
$p = 3;
$a = 70;
$b = 12;
$c = 100;
$d = 100;
$sql = "INSERT INTO id16(id,start,stops,arrived,totaltime,planeno,ep,bp,ea,ba) VALUES ('$i','$st','$stop','$at','$tt','$p','$a','$b','$c','$d')";
mysqli_query($db_conx,$sql);

$i = 4;
$st = "6:68 A.M";
$stop = 3;
$at = "14:16 P.M";
$tt = "13Hour 14Minute 19Second";
$p = 4;
$a = 72;
$b = 10;
$c = 100;
$d = 100;
$sql = "INSERT INTO id16(id,start,stops,arrived,totaltime,planeno,ep,bp,ea,ba) VALUES ('$i','$st','$stop','$at','$tt','$p','$a','$b','$c','$d')";
mysqli_query($db_conx,$sql);

$i = 5;
$st = "15:84 P.M";
$stop = 2;
$at = "14:97 P.M";
$tt = "18Hour 16Minute 16Second";
$p = 5;
$a = 71;
$b = 29;
$c = 100;
$d = 100;
$sql = "INSERT INTO id16(id,start,stops,arrived,totaltime,planeno,ep,bp,ea,ba) VALUES ('$i','$st','$stop','$at','$tt','$p','$a','$b','$c','$d')";
mysqli_query($db_conx,$sql);

$i = 6;
$st = "6:49 A.M";
$stop = 2;
$at = "15:71 A.M";
$tt = "18Hour 11Minute 10Second";
$p = 6;
$a = 86;
$b = 38;
$c = 100;
$d = 100;
$sql = "INSERT INTO id16(id,start,stops,arrived,totaltime,planeno,ep,bp,ea,ba) VALUES ('$i','$st','$stop','$at','$tt','$p','$a','$b','$c','$d')";
mysqli_query($db_conx,$sql);

$i = 7;
$st = "11:77 P.M";
$stop = 3;
$at = "13:94 P.M";
$tt = "10Hour 18Minute 20Second";
$p = 7;
$a = 68;
$b = 31;
$c = 100;
$d = 100;
$sql = "INSERT INTO id16(id,start,stops,arrived,totaltime,planeno,ep,bp,ea,ba) VALUES ('$i','$st','$stop','$at','$tt','$p','$a','$b','$c','$d')";
mysqli_query($db_conx,$sql);




$i = 1;
$st = "11:33 P.M";
$stop = 3;
$at = "18:67 P.M";
$tt = "13Hour 20Minute 11Second";
$p = 1;
$a = 71;
$b = 23;
$c = 100;
$d = 100;
$sql = "INSERT INTO id17(id,start,stops,arrived,totaltime,planeno,ep,bp,ea,ba) VALUES ('$i','$st','$stop','$at','$tt','$p','$a','$b','$c','$d')";
mysqli_query($db_conx,$sql);

$i = 2;
$st = "8:98 P.M";
$stop = 1;
$at = "15:94 P.M";
$tt = "18Hour 14Minute 13Second";
$p = 2;
$a = 55;
$b = 13;
$c = 100;
$d = 100;
$sql = "INSERT INTO id17(id,start,stops,arrived,totaltime,planeno,ep,bp,ea,ba) VALUES ('$i','$st','$stop','$at','$tt','$p','$a','$b','$c','$d')";
mysqli_query($db_conx,$sql);

$i = 3;
$st = "15:14 A.M";
$stop = 1;
$at = "15:36 A.M";
$tt = "13Hour 20Minute 12Second";
$p = 3;
$a = 57;
$b = 11;
$c = 100;
$d = 100;
$sql = "INSERT INTO id17(id,start,stops,arrived,totaltime,planeno,ep,bp,ea,ba) VALUES ('$i','$st','$stop','$at','$tt','$p','$a','$b','$c','$d')";
mysqli_query($db_conx,$sql);

$i = 4;
$st = "2:36 P.M";
$stop = 2;
$at = "6:81 A.M";
$tt = "11Hour 14Minute 17Second";
$p = 4;
$a = 59;
$b = 12;
$c = 100;
$d = 100;
$sql = "INSERT INTO id17(id,start,stops,arrived,totaltime,planeno,ep,bp,ea,ba) VALUES ('$i','$st','$stop','$at','$tt','$p','$a','$b','$c','$d')";
mysqli_query($db_conx,$sql);

$i = 5;
$st = "10:88 P.M";
$stop = 2;
$at = "14:43 P.M";
$tt = "13Hour 17Minute 12Second";
$p = 5;
$a = 72;
$b = 34;
$c = 100;
$d = 100;
$sql = "INSERT INTO id17(id,start,stops,arrived,totaltime,planeno,ep,bp,ea,ba) VALUES ('$i','$st','$stop','$at','$tt','$p','$a','$b','$c','$d')";
mysqli_query($db_conx,$sql);

$i = 6;
$st = "17:48 A.M";
$stop = 2;
$at = "4:92 P.M";
$tt = "17Hour 17Minute 16Second";
$p = 6;
$a = 57;
$b = 17;
$c = 100;
$d = 100;
$sql = "INSERT INTO id17(id,start,stops,arrived,totaltime,planeno,ep,bp,ea,ba) VALUES ('$i','$st','$stop','$at','$tt','$p','$a','$b','$c','$d')";
mysqli_query($db_conx,$sql);

$i = 7;
$st = "4:81 P.M";
$stop = 1;
$at = "10:93 P.M";
$tt = "22Hour 10Minute 13Second";
$p = 7;
$a = 57;
$b = 35;
$c = 100;
$d = 100;
$sql = "INSERT INTO id17(id,start,stops,arrived,totaltime,planeno,ep,bp,ea,ba) VALUES ('$i','$st','$stop','$at','$tt','$p','$a','$b','$c','$d')";
mysqli_query($db_conx,$sql);

?>