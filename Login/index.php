<?php
include('../Element/build.php');
if (isset($_SESSION['userid']) && $_SESSION['userid'] != null) {
    $_SESSION['alertMessage'] = "<strong>You are already Loged In!</strong>";
    $_SESSION['textType'] = "info";
    header("location: " . $build . "Dashboard/");
    exit();
} 
?>
<!DOCTYPE html>
<html>

<head>
    <!-- Headers -->
    <?php include('../Element/header.php'); ?>
    <!-- /Headers -->
    <meta name="description" content="Photo Studio">
    <meta name="keywords" content="keywords here">
    <title>Log In | Photo Studio - By Sachiel Kemmer - Freelance Developer</title>
</head>

<body>
    <?php
    include('../Element/navigation.php');
    ?>

    <section data-bs-version="5.1" class="form1 cid-tmU67pm4xU mbr-fullscreen mbr-parallax-background" id="form1-22">
        <div class="mbr-overlay" style="opacity: 0.3; background-color: rgb(255, 255, 255);"></div>
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-lg-8 mx-auto mbr-form" data-form-type="formoid">
                    <form action="<?= $build; ?>Controller/LoginController.php" method="POST" class="mbr-form form-with-styler" data-form-title="Form Name">
                        <div class="dragArea row">
                            <div class="col-12">
                                <h1 class="mbr-section-title mb-4 mbr-fonts-style align-center display-2"><strong>Log In</strong></h1>
                            </div>
                            <div class="col-12">
                                <p class="mbr-text mbr-fonts-style mb-5 align-center display-7 text-<?= $_SESSION['textType'] ? $_SESSION['textType'] : ''; $_SESSION['textType'] = null; ?>"><?= $_SESSION['alertMessage'] ? $_SESSION['alertMessage'] : 'Enter your email & password to log in!'; $_SESSION['alertMessage'] = null; ?></p>
                            </div>
                            <div data-for="email" class="col form-group mb-3">
                                <input type="email" name="email" placeholder="Email" data-form-field="Email" class="form-control display-7" required="required" value="" id="email-form1-22">
                            </div>
                            <div data-for="password" class="col form-group">
                                <input type="password" name="password" placeholder="Password" data-form-field="password" class="form-control display-7" required="required" value="" id="password-form1-22">
                            </div>
                            <div class="col-12 col-md-auto mbr-section-btn">
                                <button type="submit" name="login_submit" class="btn btn-primary display-4">Log In</button>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <hr>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <p class="mbr-fonts-style display-7">Don't have an account? <a href="<?= $build; ?>Signup/" class="text-primary">Sign Up</a></p>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Footer Element -->
    <?php
    include('../Element/footer.php');
    ?>
    <!-- /Footer Element -->
</body>

</html>