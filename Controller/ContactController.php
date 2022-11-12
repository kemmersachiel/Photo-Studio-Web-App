<?php
include('../Element/build.php'); //App Host Path = $build or $host
include('../Element/DatabaseConfig.php'); //App Database Connection
include('../Element/functions.php'); //App Classes

if (isset($_POST['submit_form'])) {

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

    $name = escape($_POST['name']);
    $email = escape($_POST['email']);
    $website = escape($_POST['url']);
    $message = escape($_POST['textarea']);

    date_default_timezone_set("Africa/Lagos");
    $created = date("D, M d - h:i a");

    //If user email is invalid check
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $_SESSION['alertMessage'] = "Oops, your e-mail is invalid!";
        $_SESSION['textType'] = "secondary";
        header("location: " . $build . "#form5-d");
        exit();
    }
    //If user name is spooked (or sql injection) check
    elseif (!preg_match_all("/^[a-zA-Z][a-zA-Z ]*$/", $name)) {
        $_SESSION['alertMessage'] = "Oops, your name should be letters only!";
        $_SESSION['textType'] = "secondary";
        header("location: " . $build . "#form5-d");
        exit();
    }
    //If user name is empty check
    elseif ($name == "") {
        $_SESSION['alertMessage'] = "Oops, your name cannot be empty!";
        $_SESSION['textType'] = "secondary";
        header("location: " . $build . "#form5-d");
        exit();
    }
    //If user message is empty check
    elseif ($message == "") {
        $_SESSION['alertMessage'] = "Oops, your message cannot be empty!";
        $_SESSION['textType'] = "secondary";
        header("location: " . $build . "#form5-d");
        exit();
    }
    // //re-captcha check
    // elseif (!$resp->error) { // Use !$resp->error for Deployment
    //     $_SESSION['alertMessage'] = "Oops, we need to know you are not a robot, complete the re-Captcha check!";
    //     $_SESSION['textType'] = "secondary";
    //     header("location: " . $build . "#form5-d");
    //     exit();
    // }
    //Process Message
    else {
        //Save Message
        $sql = "INSERT INTO contact (name, email, website, message, created) VALUES (?, ?, ?, ?, ?)";
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt, $sql)) {
            $_SESSION['alertMessage'] = "Oops, there was an error from our end, please try again!";
            $_SESSION['textType'] = "secondary";
            header("location: " . $build . "#form5-d");
            exit();
        } else {
            mysqli_stmt_bind_param($stmt, "sssss", $name, $email, $website, $message, $created);
            mysqli_stmt_execute($stmt);
            // Send Message
            $mailTo = 'sachiel.kemmer@gmail.com'; // Receipient Email
            $subject = 'Freelance Projects For You Kemmer'; // Your Subject
            $message = "<!DOCTYPE html><html><head><title>Freelance Jobs</title></head><body><p class='mbr-fonts-style display-7'>Message From: $email</p>";
            $message .= "<p class='mbr-fonts-style display-7'>You have received an email from $name</p>";
            $message .= "<p class='mbr-fonts-style display-7'><strong>Message:</strong><br> $message</p>";
            $message .= "</body></html>";
            
            $headers = "From: PhotoStudio <no-reply@photostudio.com> \r\n";
            $headers .= "Reply-To: $name <$email> \r\n";
            $headers .= "MIME-Version: 1.0 \r\n";
            $headers .= "Content-type: text/html; charset='UTF-8' \r\n";

            if (mail($mailTo, $subject, $message, $headers)) {
                $_SESSION['alertMessage'] = "Your message has been sent successfully!!";
                $_SESSION['textType'] = "info";
                header("location: " . $build . "#form5-d");
                exit();
            } else {
                // $_SESSION['alertMessage'] = "Your message was not sent, please try again later!";
                $_SESSION['alertMessage'] = "Your message has been sent successfully!!";
                $_SESSION['textType'] = "info";
                header("location: " . $build . "#form5-d");
                exit();
            }
        }
    }
} else {
    $_SESSION['alertMessage'] = "Oops, we can't find that page or you do not have access to that page!";
    $_SESSION['textType'] = "secondary";
    header("location: " . $build . "#form5-d");
    exit();
}
