<?php
include('../Element/build.php');
if (isset($_SESSION['userid']) && $_SESSION['userid'] != null) {
  $_SESSION['alertMessage'] = "<strong>You are already Loged In!</strong>";
  $_SESSION['textType'] = "info";
  header("location: " . $build . "Dashboard/");
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
    <title>Sign Up | Photo Studio - By Sachiel Kemmer - Freelance Developer</title>
</head>

<body>
    <?php
    include('../Element/navigation.php');
    ?>

    <section data-bs-version="5.1" class="form4 cid-tmU7qYFLnm mbr-fullscreen" id="form4-23">
        <div class="container">
            <div class="row content-wrapper justify-content-center">
                <div class="col-lg-3 offset-lg-1 mbr-form" data-form-type="formoid">
                    <form action="<?= $build; ?>Controller/RegisterController.php" method="POST" class="mbr-form form-with-styler" data-form-title="Form Name">
                        <div class="dragArea row">
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <h1 class="mbr-section-title mb-4 display-2"><strong>Sign Up</strong></h1>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <p class="mbr-text mbr-fonts-style mb-4 display-7 text-<?= $_SESSION['textType'] ? $_SESSION['textType'] : ''; $_SESSION['textType'] = null; ?>"><?= $_SESSION['alertMessage'] ? $_SESSION['alertMessage'] : 'Fill the form below to create an account!'; $_SESSION['alertMessage'] = null; ?></p>
                            </div>
                            <div data-for="name" class="col-lg-12 col-md col-12 form-group mb-3">
                                <input type="text" name="name" placeholder="Name" data-form-field="name" class="form-control display-7" value="" id="name-form4-23">
                            </div>
                            <div data-for="email" class="col-lg-12 col-md col-12 form-group mb-3">
                                <input type="email" name="email" placeholder="Email" data-form-field="email" class="form-control display-7" value="" id="email-form4-23">
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 form-group" data-for="password">
                                <input type="password" name="password" placeholder="Password" data-form-field="password" class="form-control display-7" value="" id="password-form4-23">
                            </div>
                            <div class="col-12 col-md-auto mbr-section-btn">
                                <button type="submit" name="submit_signup" class="btn btn-secondary display-4">Sign Up</button>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <hr>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <p class="mbr-fonts-style display-7">Already have an account? <a href="<?= $build; ?>Login/" class="text-primary">Log In</a></p>
                            </div>
                        </div>
                    </form>
                    <!--Formbuilder Form-->
                </div>
                <div class="col-lg-7 offset-lg-1 col-12">
                    <div class="image-wrapper">
                        <img class="w-100" src="<?= $build; ?>assets/images/sq3.jpg" alt="Sachiel Kemmer - Freelance Developer">
                    </div>
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