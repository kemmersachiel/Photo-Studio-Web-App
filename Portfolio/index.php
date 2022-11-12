<!DOCTYPE html>
<html>

<head>
    <!-- Headers -->
    <?php include('../Element/header.php'); ?>
    <!-- /Headers -->
    <meta name="description" content="Photo Studio">
    <meta name="keywords" content="keywords here">
    <title>Our Work | Photo Studio - By Sachiel Kemmer - Freelance Developer</title>
</head>

<body>
    <?php
    include('../Element/navigation.php');
    ?>

    <section data-bs-version="5.1" class="header7 cid-tmU4Mbql28 mbr-fullscreen" id="header7-1y">
        <div class="text-right container">
            <div class="row justify-content-end">
                <div class="col-12 col-lg-5">
                    <h1 class="mbr-section-title mbr-fonts-style mb-3 display-1"><strong>FREELANCE DEVELOPER</strong></h1>

                    <p class="mbr-text mbr-fonts-style display-7">I have 10 years of experience in development. My specialization is in development of web applications and API (mail, payment systems, security, location, etc). Configuration of server and web servers, i work with cloud services and storage.<br>My core technologies are: PHP, Laravel, jQuery, MySQLi, PDO, PostgreSQL, HTML5, CSS3, Bootstrap, SASS, SCSS, JavaScript, GIT, .NET Core</p>
                    <div class="mbr-section-btn mt-3"><a class="btn btn-primary display-4" href="https://www.linkedin.com/in/sachiel-kemmer-2b473590/">Hire Me ($62/Hour)</a></div>
                </div>
            </div>
        </div>
    </section>

    <section data-bs-version="5.1" class="gallery4 mbr-gallery cid-tmU50UByfg" id="gallery4-20">
        <div class="container">
            <div class="mbr-section-head">
                <h3 class="mbr-section-title mbr-fonts-style align-center m-0 display-2"><strong>Gallery with Popup Slider</strong></h3>
                <h4 class="mbr-section-subtitle mbr-fonts-style align-center mb-0 mt-2 display-5">Gallery Subtitle</h4>
            </div>
            <div class="row mbr-gallery mt-4">
                <div class="col-12 col-md-6 col-lg-6 item gallery-image">
                    <div class="item-wrapper" data-toggle="modal" data-bs-toggle="modal" data-target="#tmUbVInlfu-modal" data-bs-target="#tmUbVInlfu-modal">
                        <img class="w-100" src="<?= $build; ?>assets/images/features1.jpg" alt="" data-slide-to="0" data-bs-slide-to="0" data-target="#lb-tmUbVInlfu" data-bs-target="#lb-tmUbVInlfu">
                        <div class="icon-wrapper">
                            <span class="mobi-mbri mobi-mbri-search mbr-iconfont mbr-iconfont-btn"></span>
                        </div>
                    </div>
                    <h6 class="mbr-item-subtitle mbr-fonts-style align-center mb-2 mt-2 display-7">
                        Image Caption and <a href="#" class="text-primary">Link</a>
                    </h6>
                </div>
                <div class="col-12 col-md-6 col-lg-6 item gallery-image">
                    <div class="item-wrapper" data-toggle="modal" data-bs-toggle="modal" data-target="#tmUbVInlfu-modal" data-bs-target="#tmUbVInlfu-modal">
                        <img class="w-100" src="<?= $build; ?>assets/images/features2.jpg" alt="" data-slide-to="1" data-bs-slide-to="1" data-target="#lb-tmUbVInlfu" data-bs-target="#lb-tmUbVInlfu">
                        <div class="icon-wrapper">
                            <span class="mobi-mbri mobi-mbri-search mbr-iconfont mbr-iconfont-btn"></span>
                        </div>
                    </div>
                    <h6 class="mbr-item-subtitle mbr-fonts-style align-center mb-2 mt-2 display-7">
                        Image Caption and <a href="#" class="text-primary">Link</a>
                    </h6>
                </div>
                <div class="col-12 col-md-6 col-lg-6 item gallery-image">
                    <div class="item-wrapper" data-toggle="modal" data-bs-toggle="modal" data-target="#tmUbVInlfu-modal" data-bs-target="#tmUbVInlfu-modal">
                        <img class="w-100" src="<?= $build; ?>assets/images/features3.jpg" alt="" data-slide-to="2" data-bs-slide-to="2" data-target="#lb-tmUbVInlfu" data-bs-target="#lb-tmUbVInlfu">
                        <div class="icon-wrapper">
                            <span class="mobi-mbri mobi-mbri-search mbr-iconfont mbr-iconfont-btn"></span>
                        </div>
                    </div>
                    <h6 class="mbr-item-subtitle mbr-fonts-style align-center mb-2 mt-2 display-7">
                        Image Caption and <a href="#" class="text-primary">Link</a>
                    </h6>
                </div>
                <div class="col-12 col-md-6 col-lg-6 item gallery-image">
                    <div class="item-wrapper" data-toggle="modal" data-bs-toggle="modal" data-target="#tmUbVInlfu-modal" data-bs-target="#tmUbVInlfu-modal">
                        <img class="w-100" src="<?= $build; ?>assets/images/features4.jpg" alt="" data-slide-to="3" data-bs-slide-to="3" data-target="#lb-tmUbVInlfu" data-bs-target="#lb-tmUbVInlfu">
                        <div class="icon-wrapper">
                            <span class="mobi-mbri mobi-mbri-search mbr-iconfont mbr-iconfont-btn"></span>
                        </div>
                    </div>
                    <h6 class="mbr-item-subtitle mbr-fonts-style align-center mb-2 mt-2 display-7">
                        Image Caption and <a href="#" class="text-primary">Link</a>
                    </h6>
                </div>
            </div>

            <div class="modal mbr-slider" tabindex="-1" role="dialog" aria-hidden="true" id="tmUbVInlfu-modal">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-body">
                            <div class="carousel slide carousel-fade" id="lb-tmUbVInlfu" data-ride="carousel" data-bs-ride="carousel" data-interval="5000" data-bs-interval="5000">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img class="d-block w-100" src="<?= $build; ?>assets/images/features1.jpg" alt="">
                                    </div>
                                    <div class="carousel-item">
                                        <img class="d-block w-100" src="<?= $build; ?>assets/images/features2.jpg" alt="">
                                    </div>
                                    <div class="carousel-item">
                                        <img class="d-block w-100" src="<?= $build; ?>assets/images/features3.jpg" alt="">
                                    </div>
                                    <div class="carousel-item">
                                        <img class="d-block w-100" src="<?= $build; ?>assets/images/features4.jpg" alt="">
                                    </div>
                                </div>
                                <ol class="carousel-indicators">
                                    <li data-slide-to="0" data-bs-slide-to="0" class="active" data-target="#lb-tmUbVInlfu" data-bs-target="#lb-tmUbVInlfu"></li>
                                    <li data-slide-to="1" data-bs-slide-to="1" data-target="#lb-tmUbVInlfu" data-bs-target="#lb-tmUbVInlfu"></li>
                                    <li data-slide-to="2" data-bs-slide-to="2" data-target="#lb-tmUbVInlfu" data-bs-target="#lb-tmUbVInlfu"></li>
                                    <li data-slide-to="3" data-bs-slide-to="3" data-target="#lb-tmUbVInlfu" data-bs-target="#lb-tmUbVInlfu"></li>
                                </ol>
                                <a role="button" href="" class="close" data-dismiss="modal" data-bs-dismiss="modal" aria-label="Close">
                                </a>
                                <a class="carousel-control-prev carousel-control" role="button" data-slide="prev" data-bs-slide="prev" href="#lb-tmUbVInlfu">
                                    <span class="mobi-mbri mobi-mbri-arrow-prev" aria-hidden="true"></span>
                                    <span class="sr-only visually-hidden">Previous</span>
                                </a>
                                <a class="carousel-control-next carousel-control" role="button" data-slide="next" data-bs-slide="next" href="#lb-tmUbVInlfu">
                                    <span class="mobi-mbri mobi-mbri-arrow-next" aria-hidden="true"></span>
                                    <span class="sr-only visually-hidden">Next</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section data-bs-version="5.1" class="gallery4 mbr-gallery cid-tmTYfwyI6X" id="gallery4-j">
        <div class="container-fluid">
            <div class="mbr-section-head">
                <h3 class="mbr-section-title mbr-fonts-style align-center m-0 display-2"><strong>Our Works</strong></h3>
                <h4 class="mbr-section-subtitle mbr-fonts-style align-center mb-0 mt-2 display-5">The camera is a mirror with a memory, but it cannot think.</h4>
            </div>
            <div class="row mbr-gallery mt-4">
                <div class="col-12 col-md-6 col-lg-4 item gallery-image">
                    <div class="item-wrapper" data-toggle="modal" data-bs-toggle="modal" data-target="#tmUbVJDX9y-modal" data-bs-target="#tmUbVJDX9y-modal">
                        <img class="w-100" src="<?= $build; ?>assets/images/mbr-6.jpeg" alt="Sachiel Kemmer - Freelance Developer" data-slide-to="0" data-bs-slide-to="0" data-target="#lb-tmUbVJDX9y" data-bs-target="#lb-tmUbVJDX9y">
                        <div class="icon-wrapper">
                            <span class="mobi-mbri mobi-mbri-search mbr-iconfont mbr-iconfont-btn"></span>
                        </div>
                    </div>

                </div>
                <div class="col-12 col-md-6 col-lg-4 item gallery-image">
                    <div class="item-wrapper" data-toggle="modal" data-bs-toggle="modal" data-target="#tmUbVJDX9y-modal" data-bs-target="#tmUbVJDX9y-modal">
                        <img class="w-100" src="<?= $build; ?>assets/images/mbr-5.jpg" alt="Sachiel Kemmer - Freelance Developer" data-slide-to="1" data-bs-slide-to="1" data-target="#lb-tmUbVJDX9y" data-bs-target="#lb-tmUbVJDX9y">
                        <div class="icon-wrapper">
                            <span class="mobi-mbri mobi-mbri-search mbr-iconfont mbr-iconfont-btn"></span>
                        </div>
                    </div>

                </div>
                <div class="col-12 col-md-6 col-lg-4 item gallery-image">
                    <div class="item-wrapper" data-toggle="modal" data-bs-toggle="modal" data-target="#tmUbVJDX9y-modal" data-bs-target="#tmUbVJDX9y-modal">
                        <img class="w-100" src="<?= $build; ?>assets/images/mbr-7.jpg" alt="Sachiel Kemmer - Freelance Developer" data-slide-to="2" data-bs-slide-to="2" data-target="#lb-tmUbVJDX9y" data-bs-target="#lb-tmUbVJDX9y">
                        <div class="icon-wrapper">
                            <span class="mobi-mbri mobi-mbri-search mbr-iconfont mbr-iconfont-btn"></span>
                        </div>
                    </div>

                </div>
                <div class="col-12 col-md-6 col-lg-4 item gallery-image">
                    <div class="item-wrapper" data-toggle="modal" data-bs-toggle="modal" data-target="#tmUbVJDX9y-modal" data-bs-target="#tmUbVJDX9y-modal">
                        <img class="w-100" src="<?= $build; ?>assets/images/mbr-8.jpg" alt="Sachiel Kemmer - Freelance Developer" data-slide-to="3" data-bs-slide-to="3" data-target="#lb-tmUbVJDX9y" data-bs-target="#lb-tmUbVJDX9y">
                        <div class="icon-wrapper">
                            <span class="mobi-mbri mobi-mbri-search mbr-iconfont mbr-iconfont-btn"></span>
                        </div>
                    </div>

                </div>
                <div class="col-12 col-md-6 col-lg-4 item gallery-image">
                    <div class="item-wrapper" data-toggle="modal" data-bs-toggle="modal" data-target="#tmUbVJDX9y-modal" data-bs-target="#tmUbVJDX9y-modal">
                        <img class="w-100" src="<?= $build; ?>assets/images/mbr-4.jpg" alt="Sachiel Kemmer - Freelance Developer" data-slide-to="4" data-bs-slide-to="4" data-target="#lb-tmUbVJDX9y" data-bs-target="#lb-tmUbVJDX9y">
                        <div class="icon-wrapper">
                            <span class="mobi-mbri mobi-mbri-search mbr-iconfont mbr-iconfont-btn"></span>
                        </div>
                    </div>

                </div>
                <div class="col-12 col-md-6 col-lg-4 item gallery-image">
                    <div class="item-wrapper" data-toggle="modal" data-bs-toggle="modal" data-target="#tmUbVJDX9y-modal" data-bs-target="#tmUbVJDX9y-modal">
                        <img class="w-100" src="<?= $build; ?>assets/images/mbr-11.jpeg" alt="Sachiel Kemmer - Freelance Developer" data-slide-to="5" data-bs-slide-to="5" data-target="#lb-tmUbVJDX9y" data-bs-target="#lb-tmUbVJDX9y">
                        <div class="icon-wrapper">
                            <span class="mobi-mbri mobi-mbri-search mbr-iconfont mbr-iconfont-btn"></span>
                        </div>
                    </div>

                </div>
            </div>

            <div class="modal mbr-slider" tabindex="-1" role="dialog" aria-hidden="true" id="tmUbVJDX9y-modal">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-body">
                            <div class="carousel slide" id="lb-tmUbVJDX9y" data-interval="5000" data-bs-interval="5000">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img class="d-block w-100" src="<?= $build; ?>assets/images/mbr-6.jpeg" alt="Sachiel Kemmer - Freelance Developer">
                                    </div>
                                    <div class="carousel-item">
                                        <img class="d-block w-100" src="<?= $build; ?>assets/images/mbr-5.jpg" alt="Sachiel Kemmer - Freelance Developer">
                                    </div>
                                    <div class="carousel-item">
                                        <img class="d-block w-100" src="<?= $build; ?>assets/images/mbr-7.jpg" alt="Sachiel Kemmer - Freelance Developer">
                                    </div>
                                    <div class="carousel-item">
                                        <img class="d-block w-100" src="<?= $build; ?>assets/images/mbr-8.jpg" alt="Sachiel Kemmer - Freelance Developer">
                                    </div>
                                    <div class="carousel-item">
                                        <img class="d-block w-100" src="<?= $build; ?>assets/images/mbr-4.jpg" alt="Sachiel Kemmer - Freelance Developer">
                                    </div>
                                    <div class="carousel-item">
                                        <img class="d-block w-100" src="<?= $build; ?>assets/images/mbr-11.jpeg" alt="Sachiel Kemmer - Freelance Developer">
                                    </div>
                                </div>
                                <ol class="carousel-indicators">
                                    <li data-slide-to="0" data-bs-slide-to="0" class="active" data-target="#lb-tmUbVJDX9y" data-bs-target="#lb-tmUbVJDX9y"></li>
                                    <li data-slide-to="1" data-bs-slide-to="1" data-target="#lb-tmUbVJDX9y" data-bs-target="#lb-tmUbVJDX9y"></li>
                                    <li data-slide-to="2" data-bs-slide-to="2" data-target="#lb-tmUbVJDX9y" data-bs-target="#lb-tmUbVJDX9y"></li>
                                    <li data-slide-to="3" data-bs-slide-to="3" data-target="#lb-tmUbVJDX9y" data-bs-target="#lb-tmUbVJDX9y"></li>
                                    <li data-slide-to="4" data-bs-slide-to="4" data-target="#lb-tmUbVJDX9y" data-bs-target="#lb-tmUbVJDX9y"></li>
                                    <li data-slide-to="5" data-bs-slide-to="5" data-target="#lb-tmUbVJDX9y" data-bs-target="#lb-tmUbVJDX9y"></li>
                                </ol>
                                <a role="button" href="" class="close" data-dismiss="modal" data-bs-dismiss="modal" aria-label="Close">
                                </a>
                                <a class="carousel-control-prev carousel-control" role="button" data-slide="prev" data-bs-slide="prev" href="#lb-tmUbVJDX9y">
                                    <span class="mobi-mbri mobi-mbri-arrow-prev" aria-hidden="true"></span>
                                    <span class="sr-only visually-hidden">Previous</span>
                                </a>
                                <a class="carousel-control-next carousel-control" role="button" data-slide="next" data-bs-slide="next" href="#lb-tmUbVJDX9y">
                                    <span class="mobi-mbri mobi-mbri-arrow-next" aria-hidden="true"></span>
                                    <span class="sr-only visually-hidden">Next</span>
                                </a>
                            </div>
                        </div>
                    </div>
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