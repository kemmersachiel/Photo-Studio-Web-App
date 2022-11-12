<?php
$serverName = "localhost";
$databaseUserName = "root";
$databasePassword = "";
$databaseName = "photostudio_db";

$conn = mysqli_connect($serverName, $databaseUserName, $databasePassword, $databaseName);
if (!$conn) {
    die("Connection failed: ".mysqli_connect_error());
}