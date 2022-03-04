<?php

/* This code is used to connect with database */
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "crudoperation";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
/*
if ($conn) {
  echo "connection succes";

}else{

  echo "connection failed".mysqli_connect_error();
}  */

?>