<?php
// $build = 'http://photostudio.com';
// $brandName = 'Photo Studio';

$protocol = ((!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off') || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";
$build = $host = $protocol.$_SERVER['HTTP_HOST'].'/Photo-Studio-Web-App/';
//// $build = 'http://localhost:8090/photostudio.com/';
$brandName = 'Photo Studio';
$devMode = true; // Dev Mode
session_start();