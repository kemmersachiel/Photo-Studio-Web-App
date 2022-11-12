<?php
include('../Element/build.php'); //App Host Path = $build or $host
include('../Element/DatabaseConfig.php'); //App Database Connection
include('../Element/functions.php'); //App Classes

if (isset($_POST['submit_signup'])) {

    // //START RE-CAPTCHA RESULT
    // $curlx = curl_init();
    // curl_setopt($curlx, CURLOPT_URL, "https://www.google.com/recaptcha/api/siteverify");
    // curl_setopt($curlx, CURLOPT_HEADER, 0);
    // curl_setopt($curlx, CURLOPT_RETURNTRANSFER, 1);
    // curl_setopt($curlx, CURLOPT_POST, 1);
    // $post_data =
    //     [
    //         'secret' => 'reCaptchaSecreteKey', // Your reCaptcha secret key
    //         'response' => $_POST['g-recaptcha-response'],
    //     ];
    // curl_setopt($curlx, CURLOPT_POSTFIELDS, $post_data);
    // $resp = json_decode(curl_exec($curlx));
    // curl_close($curlx);
    // //END RE-CAPTCHA RESULT

    $_SESSION['userName'] = $userName = ucfirst(escape($_POST['name']));
    $_SESSION['userEmail'] = $userEmail = escape($_POST['email']);
    $_SESSION['userPassword'] = $userPassword = escape($_POST['password']);

    date_default_timezone_set("Africa/Lagos");
    $created = date("D, M d - h:i a");
    
    $userValidationKey = escape(md5(rand(0, 1000)));
    $userValidationUrl = $build . "Account/Verify/?email=" . $userEmail . "&validation_key=" . $userValidationKey;
    if ($devMode == true) {
        $extra = "<br/>Click <a href='" . $userValidationUrl . "'>here</a> to run a demo Account Verify";
    } else {
        $extra = "";
    }

    //If user name is empty check
    if ($userName == "") {
        $_SESSION['alertMessage'] = "Oops, your name cannot be empty!";
        $_SESSION['textType'] = "secondary";
        header("location: " . $build . "Signup/#form4-23");
        exit();
    }
    //If user email is empty check
    if ($userEmail == "") {
        $_SESSION['alertMessage'] = "Oops, your email cannot be empty!";
        $_SESSION['textType'] = "secondary";
        header("location: " . $build . "Signup/#form4-23");
        exit();
    }
    //If user email is invalid check
    elseif (!filter_var($userEmail, FILTER_VALIDATE_EMAIL)) {
        $_SESSION['alertMessage'] = "Oops, your e-mail is invalid!";
        $_SESSION['textType'] = "secondary";
        header("location: " . $build . "Signup/#form4-23");
        exit();
    }
    //If user name is spooked (or sql injection) check
    elseif ($userName != "" && !preg_match_all("/^[a-zA-Z][a-zA-Z ]*$/", $userName)) {
        $_SESSION['alertMessage'] = "Oops, your name should be letters only!";
        $_SESSION['textType'] = "secondary";
        header("location: " . $build . "Signup/#form4-23");
        exit();
    }
    //If user password is empty check
    elseif ($userPassword == "") {
        $_SESSION['alertMessage'] = "Oops, your password cannot be empty!";
        $_SESSION['textType'] = "secondary";
        header("location: " . $build . "Signup/#form4-23");
        exit();
    }
    //If user password is less than 8 characters check
    elseif (strlen($userPassword) < 8) {
        $_SESSION['alertMessage'] = "Oops, your password should be 8 or more characters!";
        $_SESSION['textType'] = "secondary";
        header("location: " . $build . "Signup/#form4-23");
        exit();
    }
    // //re-captcha check
    // elseif (!$resp->success) { // Use !$resp->success for Deployment
    //     $_SESSION['alertMessage'] = "Oops, we need to know you are not a robot, complete the re-Captcha check!";
    //     $_SESSION['textType'] = "secondary";
    //     header("location: " . $build . "Signup/#form4-23");
    //     exit();
    // }
    //Process Registration
    else {
        $sql = "SELECT * FROM users WHERE userEmail=?";
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt, $sql)) {
            $_SESSION['alertMessage'] = "Oops, there was an error from our end, please try again!";
            $_SESSION['textType'] = "secondary";
            header("location: " . $build . "Signup/#form4-23");
            exit();
        } else {
            mysqli_stmt_bind_param($stmt, "s", $userEmail);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_store_result($stmt);
            $resultCheck = mysqli_stmt_num_rows($stmt);

            $userEmailCheck = ($resultCheck > 0) ? "Oops, email already taken!" : "";
            if ($resultCheck >= 1) {
                $_SESSION['alertMessage'] = $userEmailCheck;
                $_SESSION['textType'] = "secondary";
                header("location: " . $build . "Signup/#form4-23");
                exit();
            } else {
                $sql = "INSERT INTO users (userName, userEmail, userPassword, encryptedPassword, userValidationKey, userValidationUrl, created) VALUE (?, ?, ?, ?, ?, ?, ?)";
                $stmt = mysqli_stmt_init($conn);
                if (!mysqli_stmt_prepare($stmt, $sql)) {
                    $_SESSION['alertMessage'] = "Oops, there was an error from our end, please try again!";
                    $_SESSION['textType'] = "secondary";
                    header("location: " . $build . "Signup/#form4-23");
                    exit();
                } else {
                    // password_hash
                    $hashedPassword = password_hash($userPassword, PASSWORD_DEFAULT);
                    // encrypt_decrypt
                    $encryptedPassword = encrypt_decrypt('encrypt', $userPassword);
                    mysqli_stmt_bind_param($stmt, "sssssss", $userName, $userEmail, $hashedPassword, $encryptedPassword, $userValidationKey, $userValidationUrl, $created);
                    mysqli_stmt_execute($stmt);
                    if (empty($userName)) {
                        $userName = $userEmail;
                    } else {
                        $userName = $userName;
                    }
                    //send verify email message to user
                    $to = $userEmail;
                    $subject = 'Welcome to ' . $brandName . ' (Email Verification)';
                    $message = '<!DOCTYPE html><html><head><title>Signup</title></head><body><div class="navbar-brand"><span class="navbar-logo"><a href="' . $build . '"><img src="' . $build . 'assets/images/tvj-logo-icon-234x165.png" alt="' . $brandName . '" title="' . $brandName . '" style="height: 1.8rem;"></a></span></div>';
                    $message  .= '<p class="mbr-fonts-style display-7">Hello ' . $userName . '</p>';
                    $message .= '<p class="mbr-fonts-style display-7">Welcome to ' . $brandName . '. You\'re the newest member in this community of thousands of people who uses our tool to promote their business. Please take a moment to make sure we\'ve got your email address right.</p>';
                    $message .= '<p class="mbr-fonts-style display-7">Click the link below to verify and activate your account <br />';
                    $message .= '<div class="mbr-section-btn align-center"><a class="btn btn-md btn-secondary display-4" href="' . $userValidationUrl . '">Confirm your email address</a></div></p><br />';
                    $message .= '<p class="mbr-fonts-style display-7">Best regards,<br />' . $brandName . '</p>';
                    $message .= '</body></html>';

                    $headers = "From: " . $brandName . " <no-reply@photostudio.com>\r\n";
                    $headers .= "Reply-To: " . $brandName . " Support <support@photostudio.com>\r\n";
                    $headers .= "Content-type: text/html\r\n";
                    mail($to, $subject, $message, $headers);

                    // $_SESSION['alertMessage'] = "Hurray, your account has been created successfully!<br/>Check your email to verify your account.";
                    $_SESSION['alertMessage'] = "Hurray, your account has been created successfully!" . $extra;
                    $_SESSION['textType'] = "info";

                    $_SESSION['loginEmail'] = $_SESSION['userEmail'];
                    $_SESSION['userName'] = null;
                    $_SESSION['userEmail'] = null;
                    $_SESSION['userPassword'] = null;
                    if ($_POST['url'] != "") {
                        $_SESSION['redirectUrl'] = escape($_POST['url']);
                    }

                    header("location: " . $build . "Login/");
                    exit();
                }
                mysqli_stmt_close($stmt);
            }
        }
    }
    mysqli_close($conn);
} else {
    $_SESSION['alertMessage'] = "Oops, we can't find that page or you do not have access to that page!";
    $_SESSION['textType'] = "secondary";
    header("location: " . $build . "Signup/#form4-23");
    exit();
}
