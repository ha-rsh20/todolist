<?php

 $host = "localhost";
 $username = "root";
 $user_pass = "usbw";
 $database_in_use = "dblist";
 
 $mysqli = new mysqli($host,$username,$user_pass,$database_in_use);
 if($mysqli->connect_errno){
  echo "Failed to connent (".$mysqli->connect_errno.")".$mysqli->connect_error;
 }
?>