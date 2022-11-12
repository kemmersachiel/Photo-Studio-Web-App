    <section data-bs-version="5.1" class="form5 cid-sFGTcFRqw0" id="form5-d">
        <div class="container">
            <div class="mbr-section-head">
                <h3 class="mbr-section-title mbr-fonts-style align-center mb-0 display-2">
                    <strong>Write Us a Message</strong>
                </h3>
            </div>
            <div class="mbr-section-head">
                <h5 class="mbr-section-title mbr-fonts-style align-center mb-0 display-5 text-<?= $_SESSION['textType'] ? $_SESSION['textType'] : '';
                                                                                                $_SESSION['textType'] = null; ?>">
                    <?= $_SESSION['alertMessage'] ? $_SESSION['alertMessage'] : '';
                    $_SESSION['alertMessage'] = null; ?>
                </h5>
            </div>
            <div class="row justify-content-center mt-4">
                <div class="col-lg-8 mx-auto mbr-form" data-form-type="formoid">
                    <form action="<?= $build; ?>Controller/ContactController.php" method="POST" class="mbr-form form-with-styler" data-form-title="Form Name">
                        <div class="dragArea row">
                            <div class="col-md col-sm-12 form-group mb-3" data-for="name">
                                <input type="text" name="name" placeholder="Name" data-form-field="name" class="form-control" value="" id="name-form5-d">
                            </div>
                            <div class="col-md col-sm-12 form-group mb-3" data-for="email">
                                <input type="email" name="email" placeholder="E-mail" data-form-field="email" class="form-control" value="" id="email-form5-d">
                            </div>
                            <div class="col-12 form-group mb-3" data-for="url">
                                <input type="url" name="url" placeholder="Your Site" data-form-field="url" class="form-control" value="" id="url-form5-d">
                            </div>
                            <div class="col-12 form-group mb-3" data-for="textarea">
                                <textarea name="textarea" placeholder="Message" data-form-field="textarea" class="form-control" id="textarea-form5-d"></textarea>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 align-center mbr-section-btn">
                                <button type="submit" name="submit_form" class="btn btn-secondary display-4">Send message</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>