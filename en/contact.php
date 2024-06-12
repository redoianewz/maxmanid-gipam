<?php
include('../includes/header.php')
?>
<!-- start page title -->
<section class="pt-0 cover-background ipad-top-space-margin pb-0" style="background-image:url('images/gipam/contactus.webp');">
    <div class="container">
        <div class="row align-items-center justify-content-center h-400px sm-h-300px">
            <div class="col-12 col-md-6 position-relative text-center page-title-extra-large d-flex flex-wrap flex-column align-items-center justify-content-center" data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                <span class="ps-25px pe-25px pt-5px pb-5px mb-15px text-uppercase text-white fs-12 ls-1px fw-600 border-radius-100px bg-gradient-dark-gray-transparent d-flex"><?= lg_("Taking the Moroccan Automobile Forward") ?></span>
                <h1 class="mb-20px text-white fw-600 ls-minus-1px"><?= lg_("Nous Contacter") ?></h1>
            </div>
        </div>
    </div>
</section>
<!-- end page title -->
<!-- start section -->
<section id="down-section">
    <div class="container">
        <div class="row row-cols-1 row-cols-xl-3 row-cols-lg-3 row-cols-md-3 row-cols-sm-2 mb-2" data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay":0, "staggervalue": 300, "easing": "easeOutQuad" }'>
            <div class="col md-mb-30px text-center text-sm-start">
                <span class="alt-font fs-18 fw-700 d-block w-90 text-dark-gray border-bottom border-2 border-color-dark-gray pb-15px mb-15px xs-w-100"><i class="feather icon-feather-map-pin d-inline-block icon-small me-10px"></i><?= lg_("Notre Localisation") ?></span>
                <div class="last-paragraph-no-margin">
                    <p><?= lg_("357, BD Mohamed V, 7 Étage") ?> <br> <?= lg_("Espace 8, Casablanca, Maroc") ?></p>
                </div>
            </div>
            <div class="col md-mb-30px text-center text-sm-start">
                <span class="alt-font fs-18 fw-700 d-block w-90 text-dark-gray border-bottom border-2 border-color-dark-gray pb-15px mb-15px xs-w-100"><i class="feather icon-feather-mail d-inline-block icon-small me-10px"></i><?= lg_("Envoyer a message") ?></span>
                <a href="mailto:contact@gipam-maroc.ma">contact@gipam-maroc.ma</a>
            </div>
            <div class="col xs-mb-30px text-center text-sm-start">
                <span class="alt-font fs-18 fw-700 d-block w-90 text-dark-gray border-bottom border-2 border-color-dark-gray pb-15px mb-15px xs-w-100"><i class="feather icon-feather-phone d-inline-block icon-small me-10px"></i><?= lg_("Nous Appeler") ?></span>
                <a href="tel:+212520146379">+212 520 146 379</a>
            </div>
        </div>
    </div>
</section>
<!-- end section -->
<!-- start section -->
<section class="position-relative one-half-screen sm-small-screen overflow-hidden border border-radius-top-lr lg-border-radius-0px" data-parallax-background-ratio="0.5" style="background-image: url(images/gipam/img-contact.webp)">
    <div class="opacity-light bg-dark-gray"></div>
    <div class="fs-200 ls-minus-10px alt-font text-light fw-600 position-absolute left-minus-25px bottom-minus-50px sm-ls-minus-5px sm-bottom-minus-20px sm-fs-200 xs-left-minus-10px xs-fs-130"><?= lg_("contact") ?></div>
</section>
<!-- end section -->
<!-- start section -->
<section class="bg-gradient-quartz-white position-relative z-index-0 sm-pt-0">
    <div class="container-fluid overlap-section p-0">
        <div class="row g-0 justify-content-end overlap-section-one-fourth">
            <div class="col-md-6">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d13293.485466085418!2d-7.587073546091156!3d33.59566763996741!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xda7cd005def932d%3A0xf453e36f12c07bda!2sGIPAM!5e0!3m2!1sen!2sma!4v1717502626815!5m2!1sen!2sma" width="100%" height="500" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </div>
    <div class="container-fluid overflow-hidden position-relative pt-6 sm-pt-40px">
        <img src="images/gipam/round-gipam.webp" class="position-absolute top-0 left-minus-300px z-index-minus-1" data-bottom-top="transform: rotate(0deg) translateY(0)" data-top-bottom="transform:rotate(-15deg) translateY(0)" alt="" />
        <div class="row justify-content-center mb-2 sm-mb-3">
            <div class="col-lg-6 text-center" data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay":0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                <h3 class="text-dark-gray fw-700 ls-minus-1px"><?= lg_("N'hésitez pas à nous contacter si vous des questions supplémentaires") ?></h3>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-xxl-6 col-xl-7 col-lg-11">
                <form action="email-templates/contact-form.php" method="post" class="contact-form-style-03">
                    <div class="row justify-content-center" data-anime='{ "opacity": [0,1], "duration": 600, "delay":0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                        <div class="col-md-6">
                            <label for="exampleInputEmail1" class="form-label fw-600 text-dark-gray mb-0"><?= lg_("Enter your name*") ?></label>
                            <div class="position-relative form-group mb-25px">
                                <span class="form-icon"><i class="bi bi-emoji-smile"></i></span>
                                <input class="ps-0 border-radius-0px border-color-extra-medium-gray bg-transparent form-control required" id="exampleInputEmail1" type="text" name="name" placeholder="<?= lg_("What's your good name?") ?>" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label for="exampleInputEmail1" class="form-label fw-600 text-dark-gray mb-0"><?= lg_("Email address*") ?></label>
                            <div class="position-relative form-group mb-25px">
                                <span class="form-icon"><i class="bi bi-envelope"></i></span>
                                <input class="ps-0 border-radius-0px border-color-extra-medium-gray bg-transparent form-control required" id="exampleInputEmail2" type="email" name="email" placeholder="<?= lg_("Enter your email address") ?>" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label for="exampleInputEmail1" class="form-label fw-600 text-dark-gray mb-0"><?= lg_("Phone number") ?></label>
                            <div class="position-relative form-group mb-25px">
                                <span class="form-icon"><i class="bi bi-telephone"></i></span>
                                <input class="ps-0 border-radius-0px border-color-extra-medium-gray bg-transparent form-control" id="exampleInputEmail3" type="tel" name="phone" placeholder="<?= lg_("Enter your phone number") ?>" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label for="exampleInputEmail1" class="form-label fw-600 text-dark-gray mb-0"><?= lg_("Subject") ?></label>
                            <div class="position-relative form-group mb-25px">
                                <span class="form-icon"><i class="bi bi-journals"></i></span>
                                <input class="ps-0 border-radius-0px border-color-extra-medium-gray bg-transparent form-control" id="exampleInputEmail4" type="text" name="subject" placeholder="<?= lg_("How can we help you?") ?>" />
                            </div>
                        </div>
                        <div class="col-12 mb-4">
                            <label for="exampleInputEmail1" class="form-label fw-600 text-dark-gray mb-0"><?= lg_("Your message") ?></label>
                            <div class="position-relative form-group form-textarea mb-0">
                                <textarea class="ps-0 border-radius-0px border-color-extra-medium-gray bg-transparent form-control" name="comment" placeholder="<?= lg_("Describe about your project") ?>" rows="4"></textarea>
                                <span class="form-icon"><i class="bi bi-chat-square-dots"></i></span>
                            </div>
                        </div>
                        <div class="col-xxl-6 col-lg-7 col-md-8">
                            <p class="mb-0 fs-14 lh-24 text-center text-md-start"><?= lg_("Nous nous engageons à protéger vos données. Nous ne collecterons jamais d'informations vous concernant sans votre consentement explicite.") ?></p>
                        </div>
                        <div class="col-xxl-6 col-lg-5 col-md-4 text-center text-md-end sm-mt-25px">
                            <input id="exampleInputEmail5" type="hidden" name="redirect" value="">
                            <button class="btn btn-medium btn-dark-gray btn-box-shadow btn-round-edge text-transform-none primary-font submit" type="submit"><?= lg_("Envoyer Message") ?></button>
                        </div>
                        <div class="col-12">
                            <div class="form-results mt-20px d-none"></div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<!-- end section -->
<?php
include('../includes/footer.php')
?>