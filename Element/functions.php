<?php

// get Action
function action($string)
{
    $url = $_SERVER['PHP_SELF'];
    $link_array = explode('/', $url);
    $action = $link_array[$string];
    return $action;
}

$pageUrl = requestUri('uri');
$pageQuery = requestUri('query');
//Request URI
function requestUri($string)
{
    $uri = $_SERVER['REQUEST_URI'];
    $protocol = ((!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off') || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";
    $uri = $protocol . $_SERVER['HTTP_HOST'] . $uri;
    $query = $_SERVER['QUERY_STRING']; //query string ?something=this&that=this
    if ($string != 'query' && $string != 'uri') {
        $link_array = explode('/', $query);
        if ($query != '') {
            $each = $link_array[$string];
            return $each;
        } else {
            return $query;
        }
    } elseif ($string == 'query') {
        return $query;
    } elseif ($string == 'uri') {
        return $uri;
    }
}

function encrypt_decrypt($action, $string)
{
    $output = false;
    $encrypt_method = "AES-256-CBC";
    $secret_key = 'This is my secret key';
    $secret_iv = 'This is my secret iv';
    // hash
    $key = hash('sha256', $secret_key);

    // iv - encrypt method AES-256-CBC expects 16 bytes - else you will get a warning
    $iv = substr(hash('sha256', $secret_iv), 0, 16);
    if ($action == 'encrypt') {
        $output = openssl_encrypt($string, $encrypt_method, $key, 0, $iv);
        $output = base64_encode($output);
    } elseif ($action == 'decrypt') {
        $output = openssl_decrypt(base64_decode($string), $encrypt_method, $key, 0, $iv);
    }
    return $output;
}

function escape($string)
{
    global $conn;
    return strip_tags($string);
    return stripslashes($conn, $string);
    return mysqli_real_escape_string($conn, $string);
}
