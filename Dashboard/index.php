<?php
include('../Element/build.php');
include('../Element/functions.php');
if (!isset($_SESSION['userid']) && $_SESSION['userid'] == null) {
    $_SESSION['alertMessage'] = "<strong>Oops, please Log In to access your account!</strong>";
    $_SESSION['textType'] = "secondary";
    $_SESSION['redirectUrl'] = $pageUrl;
    header("location: " . $build . "Login/");
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
    <title>Dashboard | Photo Studio - By Sachiel Kemmer - Freelance Developer</title>
</head>

<body>
    <?php
    include('../Element/navigation.php');
    ?>

    <section data-bs-version="5.1" class="countdown4 cid-tmU9fyKh7W mbr-fullscreen" id="countdown4-2g">
        <div class="mbr-overlay" style="opacity: 0.4; background-color: rgb(68, 121, 217);">
        </div>
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <h3 class="mbr-section-title mb-5 align-center mbr-fonts-style display-2">
                        <strong>Welcome <?= $_SESSION['firstName']; ?>!</strong>
                    </h3>
                    <h4 class="mbr-section-subtitle mb-5 align-center mbr-fonts-style display-7">
                        Use this block as a countdown for your project if it's not ready yet.
                    </h4>
                    <div class="countdown-cont align-center mb-5">
                        <div class="daysCountdown col-xs-3 col-sm-3 col-md-3" title="Days"></div>
                        <div class="hoursCountdown col-xs-3 col-sm-3 col-md-3" title="Hours"></div>
                        <div class="minutesCountdown col-xs-3 col-sm-3 col-md-3" title="Minutes"></div>
                        <div class="secondsCountdown col-xs-3 col-sm-3 col-md-3" title="Seconds"></div>
                        <div class="countdown" data-due-date="2023/01/01"></div>
                    </div>
                    <p class="mbr-text mb-5 align-center mbr-fonts-style display-7">
                        Follow me online to know more about my work ethics.
                    </p>
                    <div class="icons-menu row justify-content-center display-7">
                        <div class="soc-item col-auto">
                            <a href="https://www.instagram.com/mr.kemmer/" target="_blank" class="social__link">
                                <span class="mbr-iconfont socicon-instagram socicon"></span>
                            </a>
                        </div>
                        <div class="soc-item col-auto">
                            <a href="https://twitter.com/sachiel_kemmer?t=SAkOhCIZE19WE9EpVB65Q&s=09/" target="_blank" class="social__link">
                                <span class="mbr-iconfont socicon-twitter socicon"></span>
                            </a>
                        </div>
                        <div class="soc-item col-auto">
                            <a href="https://www.facebook.com/kemmersachiel/" target="_blank" class="social__link">
                                <span class="mbr-iconfont socicon socicon-facebook"></span>
                            </a>
                        </div>
                    </div>
                    <div class="mbr-section-btn align-center mt-5">
                        <a class="btn btn-secondary display-4" href="https://www.linkedin.com/in/sachiel-kemmer-2b473590/">Contact Sachiel Kemmer</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section data-bs-version="5.1" class="features6 cid-tmU9mC2oWt" id="features7-2h">
        <div class="container">
            <div class="card-wrapper">
                <div class="row align-items-center">
                    <div class="col-12 col-lg-6">
                        <div class="image-wrapper">
                            <img src="<?= $build; ?>assets/images/product2.jpg" alt="Sachiel Kemmer - Freelance Developer">
                        </div>
                    </div>
                    <div class="col-12 col-lg">
                        <div class="text-box">
                            <h5 class="mbr-title mbr-fonts-style display-2">
                                <strong>Special Offer</strong>
                            </h5>
                            <p class="mbr-text mbr-fonts-style display-7">If you're wondering how to build your website, worry no more cause i can be the answer you seek. I wiil build your web app with pre-made blocks and placing your own content directly. Using a theme that suits you or your business. Each theme contains a set of unique blocks.</p>
                            <div class="cost">
                                <span class="currentcost mbr-fonts-style pr-2 display-2">$62</span>
                                <span class="oldcost mbr-fonts-style display-2">$89</span>
                            </div>
                            <div class="mbr-section-btn pt-3"><a href="https://www.linkedin.com/in/sachiel-kemmer-2b473590/" class="btn btn-info display-4">Hire Freelance Developer</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section data-bs-version="5.1" class="contacts2 cid-tmU9G6XLU3" id="contacts2-2i">
        <div class="container">
            <div class="mbr-section-head">
                <h3 class="mbr-section-title mbr-fonts-style align-center mb-0 display-2">
                    <strong>Contacts</strong>
                </h3>
                <h4 class="mbr-section-subtitle mbr-fonts-style align-center mb-0 mt-2 display-5">
                    Contacts Subtitle
                </h4>
            </div>
            <div class="row justify-content-center mt-4">
                <div class="card col-12 col-md-6">
                    <div class="card-wrapper">
                        <div class="image-wrapper">
                            <span class="mbr-iconfont mobi-mbri-mobile-2 mobi-mbri"></span>
                        </div>
                        <div class="text-wrapper">
                            <h6 class="card-title mbr-fonts-style mb-1 display-5">
                                <strong>Phone</strong>
                            </h6>
                            <p class="mbr-text mbr-fonts-style display-7">
                                <a href="tel:+12345678910" class="text-primary">(+234) 814 9104 724</a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="card col-12 col-md-6">
                    <div class="card-wrapper">
                        <div class="image-wrapper">
                            <span class="mbr-iconfont mobi-mbri-cust-feedback mobi-mbri"></span>
                        </div>
                        <div class="text-wrapper">
                            <h6 class="card-title mbr-fonts-style mb-1 display-5">
                                <strong>Email</strong>
                            </h6>
                            <p class="mbr-text mbr-fonts-style display-7">
                                <a href="mailto:sachiel.kemmer@gmail.com" class="text-primary">sachiel.kemmer@gmail.com</a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="card col-12 col-md-6">
                    <div class="card-wrapper">
                        <div class="image-wrapper">
                            <span class="mbr-iconfont mobi-mbri-map-pin mobi-mbri"></span>
                        </div>
                        <div class="text-wrapper">
                            <h6 class="card-title mbr-fonts-style mb-1 display-5">
                                <strong>Address</strong>
                            </h6>
                            <p class="mbr-text mbr-fonts-style display-7">
                                Port Harcourt, Rivers State. Nigeria
                            </p>
                        </div>
                    </div>
                </div>
                <div class="card col-12 col-md-6">
                    <div class="card-wrapper">
                        <div class="image-wrapper">
                            <span class="mbr-iconfont mobi-mbri-watch mobi-mbri"></span>
                        </div>
                        <div class="text-wrapper">
                            <h6 class="card-title mbr-fonts-style mb-1 display-5">
                                <strong>Working Hours</strong>
                            </h6>
                            <p class="mbr-text mbr-fonts-style display-7">
                                9:00 - 18:00
                            </p>
                        </div>
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