<?php

$serverName = "feenix-mariadb.swin.edu.au";
$dBUsername = "s104558257";
$dBPassword = "Sw1n.608#";
$dBName = "s104558257_db";

$conn = mysqli_connect($serverName, $dBUsername, $dBPassword, $dBName);

if (!conn) {
    die("Connection failed: " . mysqli_connect_error()); 
}

?>
