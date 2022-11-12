<section data-bs-version="5.1" class="menu menu1 cid-sFGMsvHDIa" once="menu" id="menu1-1">
    <nav class="navbar navbar-dropdown navbar-fixed-top navbar-expand-lg">
        <div class="container">
            <div class="navbar-brand">
                <span class="navbar-logo">
                    <a href="<?= $build; ?>">
                        <img src="<?= $build; ?>assets/images/logo.png" alt="Sachiel Kemmer - Freelance Developer" style="height: 3rem;">
                    </a>
                </span>
                <span class="navbar-caption-wrap"><a class="navbar-caption text-white display-7" href="<?= $build; ?>">Photo Studio</a></span>
            </div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-bs-toggle="collapse" data-target="#navbarSupportedContent" data-bs-target="#navbarSupportedContent" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <div class="hamburger">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav nav-dropdown" data-app-modern-menu="true">
                    <li class="nav-item"><a class="nav-link link text-white text-primary display-7" href="<?= $build; ?>">Home</a></li>
                    <li class="nav-item"><a class="nav-link link text-white text-primary display-7" href="<?= $build; ?>About-Us/">About Us</a></li>
                    <li class="nav-item"><a class="nav-link link text-white text-primary display-7" href="<?= $build; ?>Portfolio/">Our Work</a></li>
                </ul>
                <div class="icons-menu">
                    <a class="iconfont-wrapper" href="https://www.facebook.com/kemmersachiel/" target="_blank">
                        <span class="p-2 mbr-iconfont socicon-facebook socicon"></span>
                    </a>
                    <a class="iconfont-wrapper" href="https://twitter.com/sachiel_kemmer?t=SAkOhCIZE19WE9EpVB65Q&s=09/" target="_blank">
                        <span class="p-2 mbr-iconfont socicon-twitter socicon"></span>
                    </a>
                </div>
                <div class="navbar-buttons mbr-section-btn">
                <?php
                    if (isset($_SESSION['userid']) && $_SESSION['userid'] != null) { ?>
                    <a class="btn btn-white display-4" href="<?= $build; ?>Dashboard/">Dashboard</a>
                    <a class="btn btn-warning display-4" href="<?= $build; ?>Logout/">Logout</a>
                    <?php } else {?>
                    <a class="btn btn-white display-4" href="<?= $build; ?>Login/">Log In</a>
                    <a class="btn btn-secondary display-4" href="<?= $build; ?>Signup/">Sign Up</a>
                    <?php } ?>
                </div>
            </div>
        </div>
    </nav>
</section>