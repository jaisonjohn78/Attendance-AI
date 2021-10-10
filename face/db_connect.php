<?php
$db_host = "localhost";               // Database Host
$db_user = "root";                    // Database User
$db_pass = "";                        // Database Password
$db_name = "face";  // Database Name
$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name); 
if(!$conn) 
{
  die("Connection failed: " . mysqli_connect_error()); 
}
?>