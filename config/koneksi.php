<?php
$host="localhost";
$uname="root";
$pw="";
$db="dbngampill";

$conn = mysqli_connect($host, $uname, $pw, $db);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }
?>