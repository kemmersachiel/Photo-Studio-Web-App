<?php
include('../Element/build.php'); //App Host Path = $build or $host
include('../Element/DatabaseConfig.php'); //App Database Connection
include('../Element/functions.php'); //App Classes

if (isset($_POST['login_submit'])) {
    $_SESSION['loginEmail'] = $email = escape($_POST['email']);
    $password = escape($_POST['password']);

    //If user email & password is empty check
    if ($email == null && $password == null) {
        $_SESSION['alertMessage'] = "Oops, your email & password cannot be empty!";
        $_SESSION['textType'] = "secondary";
        header("location: " . $build . "Login/");
        exit();
    }
    //If user email is empty check
    elseif ($email == null) {
        $_SESSION['alertMessage'] = "Oops, your email cannot be empty!";
        $_SESSION['textType'] = "secondary";
        header("location: " . $build . "Login/");
        exit();
    }
    //If user email is invalid check
    elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $_SESSION['alertMessage'] = "Oops, your e-mail is invalid!";
        $_SESSION['textType'] = "secondary";
        header("location: " . $build . "Login/");
        exit();
    }
    //If user password is empty check
    elseif ($password == null) {
        $_SESSION['alertMessage'] = "Oops, your password cannot be empty!";
        $_SESSION['textType'] = "secondary";
        header("location: " . $build . "Login/");
        exit();
    }
    //Check Login Details
    else {
        $sql = "SELECT * FROM users WHERE userEmail=? LIMIT 1";
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt, $sql)) {
            $_SESSION['alertMessage'] = "Oops, there was an error from our end, please try again!";
            $_SESSION['textType'] = "secondary";
            header("location: " . $build . "Login/");
            exit();
        } else {
            mysqli_stmt_bind_param($stmt, "s", $email);
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);
            if ($row = mysqli_fetch_assoc($result)) {
                $passwordCheck = password_verify($password, $row['userPassword']);
                if ($passwordCheck == false) {
                    $_SESSION['alertMessage'] = "Oops, your password is incorrect!";
                    $_SESSION['textType'] = "secondary";
                    header("location: " . $build . "Login/");
                    exit();
                } elseif ($passwordCheck == true) {
                    //If user account is not active
                    if ($row['userStatus'] == 1 && $row['userValidationKey'] != "") {
                        //Update userStatus, userValidationKey & userValidationUrl
                        $userStatus = 0;
                        $userValidationKey = escape(md5(rand(0, 1000)));
                        $userValidationUrl = $build . "Account/Verify/?email=" . $email . "&validation_key=" . $userValidationKey;
                        $sql = "UPDATE users SET userValidationKey=?, userValidationUrl=?, userStatus=? WHERE userEmail=?";
                        $stmt = mysqli_stmt_init($conn);
                        if (!mysqli_stmt_prepare($stmt, $sql)) {
                            $_SESSION['alertMessage'] = "Oops, there was an error from our end, please try again!";
                            $_SESSION['textType'] = "secondary";
                            header("location: " . $build . "Login/");
                            exit();
                        } else {
                            mysqli_stmt_bind_param($stmt, "ssis", $userValidationKey, $userValidationUrl, $userStatus, $email);
                            mysqli_stmt_execute($stmt);
                            $_SESSION['alertMessage'] = "<strong>Oops, your account is not verified!</strong><br/>Verify your account with the email we sent to you.";
                            $_SESSION['textType'] = "secondary";
                            header("location: " . $build . "Login/");
                            exit();
                        }
                    } elseif ($row['userStatus'] == 0 && $row['userValidationKey'] != "") {
                        $_SESSION['alertMessage'] = "<strong>Oops, your account is not verified!</strong><br/>Verify your account with the email we sent to you.";
                        $_SESSION['textType'] = "secondary";
                        header("location: " . $build . "Login/");
                        exit();
                    } elseif ($row['userStatus'] == 0 && $row['userValidationKey'] == "") {
                        //Update userValidationKey & userValidationUrl
                        $userValidationKey = escape(md5(rand(0, 1000)));
                        $userValidationUrl = $build . "Account/Verify/?email=" . $email . "&validation_key=" . $userValidationKey;
                        $sql = "UPDATE users SET userValidationKey=?, userValidationUrl=? WHERE userEmail=?";
                        $stmt = mysqli_stmt_init($conn);
                        if (!mysqli_stmt_prepare($stmt, $sql)) {
                            $_SESSION['alertMessage'] = "Oops, there was an error from our end, please try again!";
                            $_SESSION['textType'] = "secondary";
                            header("location: " . $build . "Login/");
                            exit();
                        } else {
                            mysqli_stmt_bind_param($stmt, "sss", $userValidationKey, $userValidationUrl, $email);
                            mysqli_stmt_execute($stmt);

                            if (empty($row['userName'])) {
                                $userName = $email;
                            } else {
                                $userName = $row['userName'];
                            }
                            $userValidationUrl = $row['userValidationUrl'];
                            //send verify email message to user
                            $to = $email;
                            $subject = 'Welcome to PhotoStudio (Email Verification)';

                            $message = '<!DOCTYPE html><html><head><title>Verification</title></head><body><div class="navbar-brand"><span class="navbar-logo"><a href="' . $build . '"><img src="' . $build . 'assets/images/tvj-logo-icon-234x165.png" alt="PhotoStudio" title="PhotoStudio" style="height: 1.8rem;"></a></span></div>';
                            $message  .= '<p class="mbr-fonts-style display-7">Hello ' . $userName . '</p>';
                            $message .= '<p class="mbr-fonts-style display-7">Welcome to PhotoStudio. You\'re the newest member in this community of thousands of people who uses our tool to promote their business. Please take a moment to make sure we\'ve got your email address right.</p>';
                            $message .= '<p class="mbr-fonts-style display-7">Click the link below to verify and activate your account <br />';
                            $message .= '<div class="mbr-section-btn align-center"><a class="btn btn-md btn-secondary display-4" href="' . $userValidationUrl . '">Confirm your email address</a></div></p><br />';
                            $message .= '<p class="mbr-fonts-style display-7">Best regards,<br />PhotoStudio</p>';
                            $message .= '</body></html>';

                            $headers = "From: PhotoStudio <no-reply@PhotoStudio.com>\r\n";
                            $headers .= "Reply-To: PhotoStudio Support <support@PhotoStudio.com>\r\n";
                            $headers .= "Content-type: text/html\r\n";

                            mail($to, $subject, $message, $headers);
                            $_SESSION['alertMessage'] = "<strong>Oops, your account is not verified!</strong><br/>Verify your account with the email we just sent to you.";
                            $_SESSION['textType'] = "secondary";
                            header("location: " . $build . "Login/");
                            exit();
                        }
                    }
                    $userId = $row['id'];
                    $userEmail = $row['userEmail'];
                    //Update Pin 
                    $userPin = intval("0" . rand(1, 9) . rand(0, 9) . rand(0, 9) . rand(0, 9) . rand(0, 9));
                    $sql = "UPDATE users SET userPin=? WHERE userEmail='$email'";
                    $stmt = mysqli_stmt_init($conn);
                    if (!mysqli_stmt_prepare($stmt, $sql)) {
                        $_SESSION['alertMessage'] = "Oops, there was an error from our end, please try again!";
                        $_SESSION['textType'] = "secondary";
                        header("location: " . $build . "Login/");
                        exit();
                    } else {
                        mysqli_stmt_bind_param($stmt, "i", $userPin);
                        mysqli_stmt_execute($stmt);
                    }

                    $sql = "SELECT * FROM users WHERE id='$userId'";
                    $getUser = mysqli_query($conn, $sql);
                    $getUserDetails = mysqli_fetch_array($getUser, MYSQLI_ASSOC);
                    //Set Sessions
                    $_SESSION['userid'] = $getUserDetails['id'];
                    if ($getUserDetails['userName'] != null) {
                        $_SESSION['firstName'] = ucfirst($getUserDetails['userName']);
                    } else {
                        $_SESSION['firstName'] = $getUserDetails['userEmail'];
                    }
                    $_SESSION['email'] = $getUserDetails['userEmail'];
                    if ($_POST['url'] !== "") {
                        $redirect = escape($_POST['url']);
                        header("location: $redirect");
                        exit();
                    } else {
                        $_SESSION['alertMessage'] = "Welcome back " . $_SESSION['firstName'];
                        $_SESSION['textType'] = "info";
                        header("location: " . $build . "Dashboard/");
                        exit();
                    }
                }
            } else {
                $_SESSION['alertMessage'] = "Oops, your email is incorrect!";
                $_SESSION['textType'] = "secondary";
                header("location: " . $build . "Login/");
                exit();
            }
        }
    }
} else {
    $_SESSION['alertMessage'] = "Oops, we can't find that page or you do not have access to that page!";
    $_SESSION['textType'] = "secondary";
    header("location: " . $build . "Login/");
    exit();
}
