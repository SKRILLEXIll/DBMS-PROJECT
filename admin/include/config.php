<?php
$mysql_hostname = "localhost";
$mysql_user = "root";
$mysql_password = "root";
$mysql_database = "cms";
$port=3307;
$bd = mysqli_connect($mysql_hostname, $mysql_user, $mysql_password, $mysql_database,$port) or die("Could not connect database");

?>