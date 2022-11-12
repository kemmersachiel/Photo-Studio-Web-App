<!DOCTYPE html>
<html>

<head>
    <!-- Headers -->
    <?php include('../Element/header.php'); ?>
    <!-- /Headers -->
    <meta name="description" content="Photo Studio">
    <meta name="keywords" content="keywords here">
    <title>About Us | Photo Studio - By Sachiel Kemmer - Freelance Developer </title> 
</head>

<body>
    <?php
    include('../Element/navigation.php');
    ?>

    <section data-bs-version="5.1" class="header1 cid-tmU2pUjfuz mbr-fullscreen" id="header1-1t">
        <div class="mbr-overlay" style="opacity: 0.1; background-color: rgb(250, 250, 250);"></div>
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-5">
                    <h1 class="mbr-section-title mbr-fonts-style mb-3 display-1"><strong>About <?= $brandName; ?></strong></h1>

                    <p class="mbr-text mbr-fonts-style display-7">We are a top notch photography studio with fantastic quality. We're more into family portraits, modeling shoots and pageantries.</p>
                    <div class="mbr-section-btn mt-3"><a class="btn btn-secondary display-4" href="#form5-d">Contact Us</a></div>
                </div>
            </div>
        </div>
    </section>

    <section data-bs-version="5.1" class="header9 cid-tmU2uhuxby" id="header9-1u">
        <div class="text-center container">
            <div class="row justify-content-center">
                <div class="col-md-12 col-lg-9">
                    <div class="image-wrap mb-4">
                        <img src="<?= $build; ?>assets/images/app1.jpg" alt="Sachiel Kemmer - Freelance Developer">
                    </div>
                    <h1 class="mbr-section-title mbr-fonts-style mb-3 display-2"><strong>Responsive Web App Designer</strong></h1>
                    <p class="mbr-text mbr-fonts-style display-4">Responsive web app design is all about creating web apps that look good on all devices, just like this one! A responsive web design will automatically adjust for different screen sizes and viewports.</p>
                    <div class="mbr-section-btn mt-3"><a class="btn btn-primary display-4" href="<?= $build; ?>">Get Started Now!</a>
                        <a class="btn btn-primary-outline display-4" href="#content14-1x">View Demos</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section data-bs-version="5.1" class="features11 cid-tmU2B9CHQe" id="features12-1v">
        <div class="container">
            <div class="m-0 row align-items-center">
                <div class="col-12 col-lg">
                    <div class="card-wrapper">
                        <div class="card-box">
                            <h4 class="card-title mbr-fonts-style mb-4 display-2">
                                <strong>Automagically mobile developer</strong>
                            </h4>
                            <p class="mbr-text mbr-fonts-style mb-4 display-7">
                                You don't have to code to create your own site. Leave it for the experts!.</p>
                            <div class="mbr-text mbr-fonts-style counter-container display-7">
                                <ul>
                                    <li>Mobile-friendly</li>
                                    <li>Elegant designs</li>
                                    <li>Clean code</li>
                                </ul>
                            </div>
                            <div class="mbr-section-btn mb-4">
                                <a class="btn btn-primary display-4" href="https://twitter.com/sachiel_kemmer?t=SAkOhCIZE19WE9EpVB65Q&s=09/">Learn more about Sachiel Kemmer</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="p-0 col-12 col-lg-6 md-pb">
                    <div class="image-wrapper">
                        <img src="<?= $build; ?>assets/images/3.jpg" alt="Sachiel Kemmer - Freelance Developer">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section data-bs-version="5.1" class="content15 cid-tmU2GceIZR" id="content15-1w">
        <div class="container">
            <div class="row justify-content-center">
                <div class="card col-md-12 col-lg-10">
                    <div class="card-wrapper">
                        <div class="card-box align-left">
                            <h4 class="card-title mbr-fonts-style mbr-white mb-3 display-5">
                                <strong>Clean Code Ethics < / ></strong>
                            </h4>
                            <p class="mbr-text mbr-fonts-style display-7">Clean code can be easily read and enhanced by a developer other than it's original author. I used these rules while writing clean code. Descriptive and unambiguous names. Meaningful distinction. Using pronounceable names. Using searchable names. Replacing magic numbers with named constants and avoiding encodings.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section data-bs-version="5.1" class="content14 cid-tmU2IIunBe" id="content14-1x">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12 col-lg-10">
                    <h3 class="mbr-section-title mbr-fonts-style mb-4 display-5">
                        <strong>Quick Summary Of My Past Projects</strong>
                    </h3>
                    <ul class="list mbr-fonts-style display-7">
                        <li>
                            <strong> <a href="https://testonion.com">TestOnion Testing Tool</a> </strong>
                            <br>TestOnion is an online testing tool built with PHP, CakePHP, jQuery, MySQLi, JS, AJAX, HTML5, CSS3 & Bootstrap.
                        </li>
                        <li>
                            <strong> <a href="https://nebulapay.com">NebulaPay</a> </strong>
                            <br>NebulaPay is a social payment app built with PHP, Laravel, jQuery, JSON, MySQLi, JS, AJAX, HTML5, CSS3 & Bootstrap.
                        </li>
                        <li>
                            <strong> <a href="https://coop.farmchain.finance.com">Farmchain Finance Coop</a> </strong>
                            <br>Farmchain Finance Coop is a financial web app built with PHP, Laravel (MVC), jQuery, JSON, MySQLi, JS, AJAX, HTML5, CSS3 & Bootstrap5.
                        </li>
                        <li>
                            <strong> <a href="https://faretabs.com">FareTabs</a> </strong>
                            <br>FareTabs is an offline / online web app for POS businesses. It was built with Raw PHP, jQuery, JSON, MySQLi, JS, AJAX, HTML5, CSS3 & Bootstrap.
                        </li>
                        <li>
                            <strong>Want to know more about my projects?</strong>
                            <br>Contact me via sachiel.kemmer@gmail.com.
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer Element -->
    <?php
    include('../Element/contact.php');
    include('../Element/footer.php');
    ?>
    <!-- /Footer Element -->
</body>

</html>