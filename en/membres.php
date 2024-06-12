<?php
include('../includes/header.php')
?>
<!-- start section -->
<section class="position-relative" data-parallax-background-ratio="0.3" style="background-image: url('./images/gipam/bg-members.webp')">
    <div class="opacity-extra-medium bg-black"></div>
    <div class="container h-100 position-relative ">
        <div class="row align-items-center small-screen justify-content-center">
            <div class="col-xxl-10 col-xl-12 position-relative text-white d-flex flex-column justify-content-center text-center h-100 sm-mt-50px" data-anime='{ "el": "childs", "translateY": [-15, 0], "perspective": [1200,1200], "scale": [1.1, 1], "rotateX": [50, 0], "opacity": [0,1], "duration": 600, "delay": 100, "staggervalue": 300, "easing": "easeOutQuad" }'>
                <span class="fs-70 lg-fs-70 md-fs-70 fw-600 text-white ls-minus-2px shadow-none" data-shadow-animation="true" data-animation-delay="500"><span class="text-highlight"><?= lg_("Un Groupement") ?><span class="bg-red h-20px bottom-10px separator-animation"></span></span> <?= lg_("pour l'Avenir de l'Industrie Automobile") ?> </span>
            </div>
        </div>
    </div>
</section>
<!-- end section -->
<!-- Start section -->
<section class="big-section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <span class="text-dark-gray fs-50 lg-fs-40 lh-60 lg-lh-60 shadow-none ls-minus-2px shadow-in" data-shadow-animation="true" data-animation-delay="500"><?= lg_("Rejoindre le GIPAM, c'est faire partie d'un groupement dynamique et engagé qui défend les intérêts de ses membres. Nous militons pour une meilleure organisation et modernisation de la distribution") ?> <span class="text-highlight"><?= lg_("des") ?> <span class="bg-dark-gray h-3px bottom-0px separator-animation"></span></span><?= lg_("pièces de rechange") ?> <span class="text-highlight"><?= lg_("automobiles") ?></span></span>
            </div>
        </div>
    </div>
</section>
<!-- Start section -->
<!-- start section -->
<section class="position-relative pt-0 bg-very-light-gray pt-50px md-pt-4" data-anime='{ "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
    <div class="container">
        <div class="row align-items-center mb-4">
            <div class="col-12 tab-style-04 text-center">
                <!-- filter navigation -->
                <ul class="portfolio-filter nav nav-tabs justify-content-center border-0 fw-500">
                    <li class="nav active"><a data-filter="*" href="#"><?= lg_("Tous") ?></a></li>
                    <li class="nav"><a data-filter=".fabricant" href="#"><?= lg_("Fabricants") ?></a></li>
                    <li class="nav"><a data-filter=".importateur" href="#"><?= lg_("Importateurs") ?></a></li>
                    <li class="nav"><a data-filter=".distributeur" href="#"><?= lg_("Distributeurs") ?></a></li>
                    <li class="nav"><a data-filter=".service" href="#"><?= lg_("Services") ?></a></li>
                </ul>
                <!-- end filter navigation -->
            </div>
        </div>
        <div class="row mb-8 sm-mb-0">
            <div class="col-12 filter-content p-md-0">
                <ul class="portfolio-modern portfolio-wrapper grid-loading grid grid-6col xxl-grid-6col xl-grid-6col lg-grid-6col md-grid-4col sm-grid-3col xs-grid-3col gutter-extra-large">
                    <li class="grid-sizer"></li>
                    <!-- start member -->
                    <div id="member">
                        <!-- THIS PART IS BUILT DYNAMICALLY. CHECK SCRIPT.JS FILE   -->
                    </div>
                    <!-- end member -->
                </ul>
            </div>
        </div>
        <div class="row align-items-center text-center text-md-start mt-6">
            <div class="col sm-mb-20px" data-anime='{ "translateX": [-30, 0], "opacity": [0,1], "duration": 600, "delay": 100, "staggervalue": 300, "easing": "easeOutQuad" }'>
                <h4 class="text-dark-gray fw-700 ls-minus-1px m-0"><?= lg_("Rejoingnez le GIPAM, le Groupement qui innove, collabore et défend vos intérêts.") ?></h4>
            </div>
            <div class="col-12 col-md-auto" data-anime='{ "translateX": [30, 0], "opacity": [0,1], "duration": 600, "delay": 100, "staggervalue": 300, "easing": "easeOutQuad" }'>
                <a href="#" class="btn btn-extra-large btn-switch-text btn-dark-gray btn-rounded btn-box-shadow ls-0px">
                    <span>
                        <span class="btn-double-text" data-text="<?= lg_("Rejoindre le Groupement") ?>"><?= lg_("Rejoindre le GIPAM") ?></span>
                    </span>
                </a>
            </div>
        </div>
    </div>
</section>
<!-- end section -->
<!-- start section -->
<section class="ps-13 pe-13 lg-ps-2 lg-pe-2 background-no-repeat background-position-center-top" style="background-image: url('images/gipam/worldmap.webp')">
    <div class="container-fluid">
        <div class="row justify-content-center align-items-center mb-3">
            <div class="col-md-12 text-center">
                <h3 class="text-dark-gray fw-500 mb-0 ls-minus-2px shadow-none" data-shadow-animation="true" data-animation-delay="700"><?= lg_("Nos") ?> <span class="fw-700 text-highlight d-inline-block"><?= lg_("Partenaires") ?><span class="bg-red h-10px bottom-5px opacity-9 separator-animation"></span></span></h3>
            </div>
        </div>
        <div class="row row-cols-1 row-cols-md-3 row-cols-sm-2 clients-style-06" data-anime='{ "el": "childs", "scale": [0,1], "opacity": [0,1], "duration": 300, "delay": 0, "staggervalue": 200, "easing": "easeOutQuad" }'>
            <!-- start client item -->
            <div class="col client-box text-center pt-5 pb-5 sm-pt-8 sm-pb-8">
                <a href="#"><img src="images/gipam/imanor.webp" class="h-120px md-h-80px sm-h-90px" alt="Imanor"></a>
            </div>
            <!-- end client item -->
            <!-- start client item -->
            <div class="col client-box text-center pt-5 pb-5 sm-pt-8 sm-pb-8">
                <a href="#"><img src="images/gipam/mic.webp" class="h-120px md-h-80px sm-h-90px" alt="Ministère du Commerce et de l'industrie" /></a>
            </div>
            <!-- end client item -->
            <!-- start client item -->
            <div class="col client-box text-center pt-5 pb-5 sm-pt-8 sm-pb-8">
                <a href="#"><img src="images/gipam/ompic.webp" class="h-120px md-h-80px sm-h-90px" alt="OMPIC" /></a>
            </div>
            <!-- end client item -->
        </div>
    </div>
</section>
<!-- end section -->
<?php
include('../includes/footer.php')
?>