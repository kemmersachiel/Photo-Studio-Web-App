<?php
include('../../Element/build.php'); //App Host Path = $build or $host
include('../../Element/DatabaseConfig.php'); //App Database Connection
include('../../Element/functions.php'); //App Classes

if (isset($_SESSION['userid']) && $_SESSION['userid'] != null) {
    $_SESSION['alertMessage'] = "Oops, you are already verified!";
    $_SESSION['textType'] = "info";
    header("location: " . $host . "Dashboard/");
    exit();
} else {
    if (isset($_GET['email']) && !empty($_GET['email']) and isset($_GET['validation_key']) && !empty($_GET['validation_key'])) {
        $userEmail = escape($_GET["email"]);
        
        $userEmail = str_replace(' ','',$userEmail);
        $userEmail = str_replace('~\s~','',$userEmail);
        $userEmail = str_replace('%20','',$userEmail);
        $userEmail = str_replace('%0d%0a','',$userEmail);
        $userEmail = trim($userEmail);
        
        $userValidationKey = escape($_GET["validation_key"]);
        $userStatus = 1;
        $delete = null;
    
        $sql = "SELECT * FROM users WHERE userEmail=? AND userValidationKey=? AND userStatus!=? ";
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt, $sql)) {
            $_SESSION['alertMessage'] = "Oops, there was an error from our end!";
            $_SESSION['textType'] = "secondary";
            header("location: " . $build . "Login/");
        } else {
            mysqli_stmt_bind_param($stmt, "sss", $userEmail, $userValidationKey, $userStatus);
            mysqli_stmt_execute($stmt);
    
            $result = mysqli_stmt_get_result($stmt);
            if (!$row = mysqli_fetch_assoc($result)) {
                $_SESSION['alertMessage'] = "Oops, your account has already been verified or the URL is invalid!";
                $_SESSION['textType'] = "secondary";
                header("location: " . $build . "Login/");
            } else {
                $sql = "UPDATE users SET userStatus=?, userValidationKey=? WHERE userEmail=? AND userValidationKey=?";
                $stmt = mysqli_stmt_init($conn);
                if (!mysqli_stmt_prepare($stmt, $sql)) {
                    $_SESSION['alertMessage'] = "Oops, there was an error from our end!";
                    $_SESSION['textType'] = "secondary";
                    header("location: " . $build . "Login/");
                } else {
                    mysqli_stmt_bind_param($stmt, "ssss", $userStatus, $delete, $userEmail, $userValidationKey);
                    mysqli_stmt_execute($stmt);
    
                    $_SESSION['alertMessage'] = "Hurray, your account has been verified!";
                    $_SESSION['textType'] = "info";
                    header("location: " . $build . "Login/");
                }
            }
        }
    } else {
        header("location: " . $host . "Login/");
    }
}
