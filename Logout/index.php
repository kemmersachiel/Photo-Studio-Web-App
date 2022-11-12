<?php
session_start();
$firstName = $_SESSION['firstName'];
session_unset();
session_destroy();
include('../Element/build.php'); //App Host Path = $build or $host
$_SESSION['logoutMessage'] = "Goodbye ". ucfirst($firstName)."!";
$_SESSION['alertMessage'] = "<strong>You are Signed out!</strong>";
$_SESSION['textType'] = "info";
header("location: " . $build ."Login/");
exit();