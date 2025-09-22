<?php  

$host = getenv('b-studentsql-1.usn.no');
$username = getenv('maalv3268');
$password = getenv('80fcmaalv2168');
$database = getenv('maalv3268');

 $db=mysqli_connect($host,$username,$password,$database) or die ("ikke kontakt med database-server");

 ?>
