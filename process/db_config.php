<?php
$serverName = "127.0.0.1:3307";
$userName ="root";
$password = "";
$db_name = "find_jobs";

$conn = mysqli_connect($serverName,$userName,$password,$db_name) or die ("Error to connect with database")

?>