<?php
include('../includes/header.php')
?>
<section class="section-dark p-0 bg-dark-gray">
    <div class="swiper lg-no-parallax  full-screen md-h-600px sm-h-500px ipad-top-space-margin swiper-light-pagination" data-slider-options='{ "slidesPerView": 1, "loop":  true, "parallax": true, "speed": 4000, "pagination": { "el": ".swiper-pagination-bullets", "clickable": true }, "navigation": { "nextEl": ".slider-one-slide-next-1", "prevEl": ".slider-one-slide-prev-1" }, "autoplay": { "delay": 6000, "disableOnInteraction": false },  "keyboard": { "enabled": true, "onlyInViewport": true }, "effect": "slide" }'>
        <div class="swiper-wrapper">
            <!-- start slider item -->
            <div class="swiper-slide overflow-hidden">
                <div class="cover-background position-absolute top-0 start-0 w-100 h-100" data-swiper-parallax="500" style="background-image:url('./images/gipam/bg-1.webp');">
                    <div class="opacity-light bg-gradient-sherpa-blue-black"></div>
                    <div class="container h-100" data-swiper-parallax="-500">
                        <div class="row align-items-center h-100">
                            <div class="col-xl-10 col-lg-10 col-md-10 position-relative z-index-1" data-anime='{ "el": "childs", "translateY": [0, 0], "perspective": [1200,1200], "scale": [1.05, 1], "rotateX": [30, 0], "opacity": [0,1], "duration": 800, "delay": 200, "staggervalue": 300, "easing": "easeOutQuad" }'>
                                <h1 class="text-white fw-600 ls-minus-1px mb-25px sm-fs-50"><?= lg_('Le Groupement Interprofessionnel de L’automobile au Maroc') ?></h1>
                                <div>
                                    <p class="fw-500 fs-20 w-85 sm-w-95 text-white opacity-9"><?= lg_('Le Groupement des fabricants, importateurs et distributeurs des pièces de rechange pour tout type de véhicule au Maroc.') ?></p>
                                </div>
                                <a href="index.html" class="btn btn-extra-large btn-switch-text btn-danger btn-rounded me-10px ls-0px mt-15px">
                                    <span>
                                        <span class="btn-double-text" data-text="<?= lg_('Rejoindre le GIPAM') ?>"><?= lg_('Rejoindre le GIPAM') ?></span>
                                        <span><i class="fas fa-arrow-<?= isset($_SESSION['lang']) && $_SESSION['lang'] == 'ar' ? 'left' : 'right' ?>"></i></span>
                                    </span>
                                </a>
                                <a href="demo-it-business-contact.html" class="btn btn-extra-large btn-switch-text btn-transparent-white-light btn-rounded border-1 ls-0px mt-15px">
                                    <span>
                                        <span class="btn-double-text" data-text="<?= lg_('Nous Contacter') ?>"><?= lg_('Nous Contacter') ?></span>
                                        <span><i class="fa-regular fa-envelope"></i></span>
                                    </span>
                                </a>
                            </div>
                        </div>
                        <div class="position-absolute bottom-minus-45px" data-anime='{ "translateY": [150, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                            <span class="alt-font number text-base-color opacity-3 fs-190 fw-600 ls-minus-5px">01</span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end slider item -->
            <!-- start slider item -->
            <div class="swiper-slide overflow-hidden">
                <div class="cover-background position-absolute top-0 start-0 w-100 h-100" data-swiper-parallax="500" style="background-image:url('./images/gipam/bg-2.webp');">
                    <div class="opacity-light bg-gradient-sherpa-blue-black"></div>
                    <div class="container h-100" data-swiper-parallax="-500">
                        <div class="row align-items-center h-100">
                            <div class="col-xl-10 col-lg-10 col-md-10 position-relative text-white text-center text-md-start" data-anime='{ "el": "childs", "translateX": [100, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                                <div>
                                    <span class="fs-40 mb-25px sm-mb-15px d-inline-block fw-600 sm-fs-20"><?= lg_('Du 14 au 17 Novembre 2024') ?></span>
                                </div>
                                <h1 class="alt-font w-90 xl-w-100 text-shadow-double-large ls-minus-1px fw-600 sm-fs-40"><?= lg_('M.A.T :') ?>
                                    <span class="fw-300"><?= lg_('Moroccan Automotive Technologies') ?></span>
                                </h1>
                                <div>
                                    <span class="sm-fs-15 fs-30 opacity-8 sm-mb-15px d-inline-block fw-500 lift-text"><?= lg_("Le rendez-vous des intervenants de l'après-vente indépendants sous le thème :") ?></span>
                                </div>
                                <div>
                                    <span class="fs-25 sm-fs-15 mb-5px sm-mb-15px d-inline-block fw-600 lift-text"><?= lg_("Mutation et révolution de l’écosystème de la réparation et maintenance automobile au Maroc :") ?></span>
                                </div>
                                <a href="https://mat-expo.ma" target="_blank" class="btn btn-extra-large btn-switch-text btn-danger btn-rounded me-10px ls-0px mt-15px">
                                    <span>
                                        <span class="btn-double-text" data-text="<?= lg_("Plus d'Informations") ?>"><?= lg_("Plus d'Informations") ?></span>
                                        <span><i class="fas fa-arrow-<?= isset($_SESSION['lang']) && $_SESSION['lang'] == 'ar' ? 'left' : 'right' ?>"></i></span>
                                    </span>
                                </a>

                            </div>
                        </div>
                        <div class="position-absolute bottom-minus-45px" data-anime='{ "translateY": [150, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                            <span class="alt-font number text-base-color opacity-3 fs-190 fw-600 ls-minus-5px">03</span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end slider item -->
        </div>
        <!-- start slider pagination -->
        <div class="swiper-pagination swiper-pagination-clickable swiper-pagination-bullets"></div>
        <!-- end slider pagination -->
        <!-- start slider navigation -->
        <!--<div class="slider-one-slide-prev-1 icon-extra-large text-white swiper-button-prev slider-navigation-style-06 d-none d-sm-inline-block"><i class="line-icon-Arrow-OutLeft"></i></div>
                    <div class="slider-one-slide-next-1 icon-extra-large text-white swiper-button-next slider-navigation-style-06 d-none d-sm-inline-block"><i class="line-icon-Arrow-OutRight"></i></div>-->
        <!-- end slider navigation -->
    </div>
</section>

<!-- start section -->
<section class="pt-5">
    <div class="container">
        <div class="row mb-5 align-items-center">
            <div class="col-lg-5 position-relative md-mb-20">
                <div class="w-70 xs-w-80" data-animation-delay="50" data-shadow-animation="true">
                    <img src="images/gipam/1.webp" alt="" class="border-radius-8px w-100">
                </div>
                <div class="w-60 overflow-hidden position-absolute right-minus-15px xs-right-15px xs-w-60 bottom-minus-50px" data-shadow-animation="true" data-animation-delay="250" data-bottom-top="transform: translateY(50px)" data-top-bottom="transform: translateY(-50px)">
                    <img src="images/gipam/2.webp" alt="" class="border-radius-8px w-100 box-shadow-quadruple-large" />
                </div>
            </div>
            <div class="col-xl-5 col-lg-6 offset-lg-1" data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay":0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                <h3 class="text-dark-gray fs-30 fw-500 ls-minus-1px">
                    <?= lg_("Le GIPAM :") ?>
                    <span class="text-dark-gray fs-30 fw-500 ls-minus-1px">
                        <?= lg_("catalyseur du développement et de la structuration du marché de la pièce de rechange automobile au Maroc") ?>
                    </span>
                </h3>
                <p class="mb-40px sm-mb-25px"><?= lg_("Le Groupement Interprofessionnel de l'Automobile au Maroc (GIPAM) œuvre pour l'organisation et la modernisation de la filière de la pièce détachée , Services et maintenance automobile au Maroc. Il soutient le développement du secteur et met en avant son potentiel de croissance. GIPAM organise également des événements de réseautage, tels que Moroccan Automotive Technologies, qui tiendra sa troisième édition en 2024, offrant des opportunités de connexion et de développement pour les acteurs du secteur.") ?></p>
            </div>
        </div>
    </div>
</section>
<!-- end section -->
<!-- start section -->
<section class="bg-dark overflow-hidden background-position-center-top position-relative threeD-letter-menu d-flex align-items-center" data-background="#232323" style="background-image: url(images/vertical-line-bg-medium-gray.svg)">
    <div class="container h-100">
        <div class="row align-items-center justify-content-center h-100">
            <div class="col-xl-12 position-relative">
                <div class="row align-items-center position-relative xs-ps-15px z-index-9">
                    <div class="col-md-auto menu-item ps-40px pe-40px lg-ps-30px lg-pe-30px position-relative">
                        <div class="fs-15 opacity-6 text-white position-absolute top-50px md-top-30px sm-top-15px left-0px">01</div>
                        <a href="" class="menu-item-text fs-150 lg-fs-120 md-fs-100 sm-fs-70 lh-100 text-white text-white-hover fw-600 ls-minus-4px sm-ls-minus-1px">
                            <span class="title"><?= lg_("Fabricants") ?></span>
                        </a>
                        <div class="hover-reveal d-none d-xl-block">
                            <div class="hover-reveal__inner">
                                <div class="hover-reveal__img" style="background-image: url(images/gipam/cat-1.webp);">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-auto menu-item ps-40px pe-40px lg-ps-30px lg-pe-30px position-relative">
                        <div class="fs-15 opacity-6 text-white position-absolute top-50px md-top-30px sm-top-15px left-0px">02</div>
                        <a href="" class="menu-item-text fs-150 lg-fs-120 md-fs-100 sm-fs-70 lh-100 text-white text-white-hover fw-600 ls-minus-4px sm-ls-minus-1px">
                            <span><?= lg_("Importateurs") ?></span>
                        </a>
                        <div class="hover-reveal d-none d-xl-block">
                            <div class="hover-reveal__inner">
                                <div class="hover-reveal__img" style="background-image: url(images/gipam/cat-2.webp);">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-auto menu-item ps-40px pe-40px lg-ps-30px lg-pe-30px position-relative">
                        <div class="fs-15 opacity-6 text-white position-absolute top-50px md-top-30px sm-top-15px left-0px">03</div>
                        <a href="" class="menu-item-text fs-150 lg-fs-120 md-fs-100 sm-fs-70 lh-100 text-white text-white-hover fw-600 ls-minus-4px sm-ls-minus-1px">
                            <span><?= lg_("Distributeurs") ?></span>
                        </a>
                        <div class="hover-reveal d-none d-xl-block">
                            <div class="hover-reveal__inner">
                                <div class="hover-reveal__img" style="background-image: url(images/gipam/cat-3.webp);">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-auto menu-item ps-40px pe-40px lg-ps-30px lg-pe-30px position-relative">
                        <div class="fs-15 opacity-6 text-white position-absolute top-50px md-top-30px sm-top-15px left-0px">04</div>
                        <a href="" class="menu-item-text fs-150 lg-fs-120 md-fs-100 sm-fs-70 lh-100 text-white text-white-hover fw-600 ls-minus-4px sm-ls-minus-1px">
                            <span><?= lg_("Services") ?></span>
                        </a>
                        <div class="hover-reveal d-none d-xl-block">
                            <div class="hover-reveal__inner">
                                <div class="hover-reveal__img" style="background-image: url(images/gipam/cat-4.webp);">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end section -->
<section class="pb-0">
    <div class="container">
        <div class="row align-items-center justify-content-center mb-7">
            <div class="col-xl-5 col-lg-6 mb-30px" data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                <h5 class="text-dark-gray fw-700 ls-minus-1px mb-50px"><?= lg_("Nos Engagements pour le Marché de la Pièce de Rechange Automobile au Maroc") ?></h5>
                <div class="row row-cols-1">
                    <!-- start process step item -->
                    <div class="col-12 process-step-style-05 position-relative hover-box">
                        <div class="process-step-item d-flex">
                            <div class="process-step-icon-wrap position-relative">
                                <div class="process-step-icon d-flex justify-content-center align-items-center mx-auto rounded-circle h-60px w-60px fs-14 bg-white position-relative box-shadow-bottom will-change-transform">
                                    <span class="number position-relative z-index-1 text-dark-gray fw-600">01</span>
                                    <div class="box-overlay bg-dark-gray rounded-circle"></div>
                                </div>
                                <span class="progress-step-separator bg-dark-gray opacity-1"></span>
                            </div>
                            <div class="process-content ps-35px sm-ps-25px last-paragraph-no-margin mb-40px">
                                <span class="d-block fw-600 text-dark-gray fs-17 mb-5px"><?= lg_("Structuration") ?></span>
                                <p><?= lg_("Aujourd'hui la part de l'informel ne représente plus que 10% du marché contre 30% il y a 10 ans. Et ce grâce aux efforts du GIPAM et de ses partenaires institutionnels.") ?></p>
                            </div>
                        </div>
                    </div>
                    <!-- end process step item -->
                    <!-- start process step item -->
                    <div class="col-12 process-step-style-05 position-relative hover-box">
                        <div class="process-step-item d-flex">
                            <div class="process-step-icon-wrap position-relative">
                                <div class="process-step-icon d-flex justify-content-center align-items-center mx-auto rounded-circle h-60px w-60px fs-14 bg-white position-relative box-shadow-bottom will-change-transform">
                                    <span class="number position-relative z-index-1 text-dark-gray fw-600">02</span>
                                    <div class="box-overlay bg-dark-gray rounded-circle"></div>
                                </div>
                                <span class="progress-step-separator bg-dark-gray opacity-1"></span>
                            </div>
                            <div class="process-content ps-35px sm-ps-25px last-paragraph-no-margin mb-40px">
                                <span class="d-block fw-600 text-dark-gray fs-17 mb-5px"><?= lg_("Sécurité") ?></span>
                                <p><?= lg_("Nous collaborons depuis notre création à l'élaboration de normes, standard qualité et labels pour assurer aux consommateurs un produit de qualité et fiable.") ?></p>
                            </div>
                        </div>
                    </div>
                    <!-- end process step item -->
                    <!-- start process step item -->
                    <div class="col-12 process-step-style-05 position-relative hover-box">
                        <div class="process-step-item d-flex">
                            <div class="process-step-icon-wrap position-relative">
                                <div class="process-step-icon d-flex justify-content-center align-items-center mx-auto rounded-circle h-60px w-60px fs-14 bg-white position-relative box-shadow-bottom will-change-transform">
                                    <span class="number position-relative z-index-1 text-dark-gray fw-600">03</span>
                                    <div class="box-overlay bg-dark-gray rounded-circle"></div>
                                </div>
                            </div>
                            <div class="process-content ps-35px sm-ps-25px last-paragraph-no-margin mb-30px">
                                <span class="d-block fw-600 text-dark-gray fs-17 mb-5px"><?= lg_("Développement") ?></span>
                                <p><?= lg_("Nous défendons les intérêts des indépendants de l'après-vente automobile en favorisant un environnement propice à la croissance. (bonnes pratiques, formation etc).") ?></p>
                            </div>
                        </div>
                    </div>
                    <!-- end process step item -->
                </div>
            </div>
            <div class="col-lg-6 text-center md-mb-20px offset-xl-1">
                <figure class="position-relative mb-0 overflow-hidden" data-shadow-animation="true" data-bottom-top="transform: translateY(70px)" data-top-bottom="transform: translateY(-70px)">
                    <img src="images/gipam/gipam-board.webp" class="w-100 border-radius-6px" alt="">
                    <figcaption class="position-absolute border-radius-4px text-center right-30px bottom-30px pt-35px pb-35px ps-5px pe-5px bg-white-transparent glass-effect">
                        <span class="fs-80 lh-75 text-dark-gray ls-minus-4px position-relative fw-800 mb-5px d-block alt-font">7<sub class="fs-40 lh-40 text-dark-gray position-relative top-minus-40px">+</sub></span>
                        <span class="d-block mx-auto fs-14 fw-700 lh-20 w-200px text-center text-dark-gray text-uppercase">
                            <?= lg_("ans d'existance") ?>
                        </span>
                    </figcaption>
                </figure>
            </div>
        </div>
    </div>
</section>
<!-- end section -->
<!-- start section -->
<section class="p-0 full-screen md-h-700px sm-h-450px position-relative bg-extra-dark-slate-blue overflow-hidden" style="background-image: url(images/vertical-line-bg-small-light-gray.svg)">
    <div class="looping-wrapper md-h-100 looping-wrapper-gray"></div>
    <div class="container h-100 position-relative z-index-9">
        <div class="row align-items-center justify-content-center text-center h-100">
            <div class="col-md-12 position-relative atropos transform-3d position-relative" data-atropos>
                <div class="atropos-scale">
                    <div class="atropos-rotate">
                        <div class="atropos-inner text-center overflow-visible position-relative">
                            <div data-atropos-offset="-8">
                                <span class="fs-200 lg-fs-130 sm-fs-90 text-dark-gray fw-500 ls-minus-5px">
                                    <?= lg_("GIPAM MOROCCO") ?>
                                </span>
                            </div>
                            <span class="fs-70 md-fs-50 xs-fs-40 text-white ls-minus-5px text-shadow-double-large fw-600 position-absolute absolute-middle-center text-white-space-nowrap z-index-1">
                                <?= lg_("Innover - Connecter - Structurer & Unir") ?>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end section -->
<!-- start section -->
<section class="bg-very-light-gray">
    <div class="container">
        <div class="row justify-content-center mb-3">
            <div class="col-lg-7 text-center">
                <h3 class="alt-font text-dark-gray ls-minus-1px fw-700">
                    <?= lg_("Comité de Direction") ?>
                </h3>
            </div>
        </div>
        <div class="row align-items-center mb-5 xs-mb-35px">
            <div class="col-lg-4 md-mb-30px" data-anime='{ "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'>
                <div class="text-center team-style-07 bg-white border-radius-6px box-shadow-extra-large box-shadow-quadruple-large-hover">
                    <img src="images/gipam/elhousnimohamed.webp" class="border-radius-6px w-100" alt="El Housni Mohamed">
                    <div class="team-content p-30px">
                        <div class="primary-font fs-19 fw-600 text-dark-gray">
                            <?= lg_("EL HOUSNI Mohamed") ?>
                        </div>
                        <span class="fs-16 lh-22 d-block mb-15px">
                            <?= lg_("Président du GIPAM") ?>
                        </span>
                    </div>
                </div>
            </div>
            <div class="col-lg-8" data-anime='{ "el": "childs", "translateY": [50, 0], "opacity": [0,1], "duration": 1200, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'>
                <div class="row mb-30px">
                    <div class="col-md-6 sm-mb-30px">
                        <div class="row g-0 box-shadow-extra-large box-shadow-quadruple-large-hover border-radius-6px overflow-hidden" style="height: 150px;">
                            <div class="col-5 cover-background" style="background-image: url(images/gipam/guennoundriss.webp)">
                            </div>
                            <div class="col-7 bg-white ps-35px pt-30px pb-30px xs-ps-20px">
                                <span class="primary-font fs-18 fw-600 text-dark-gray d-block">
                                    <?= lg_("GUENNOUN Driss") ?>
                                </span>
                                <span class="fs-16 lh-22 d-block">
                                    ⁠<?= lg_("Vice Président") ?>
                                </span>
                            </div>

                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="row g-0 box-shadow-extra-large box-shadow-quadruple-large-hover border-radius-6px overflow-hidden" style="height: 150px;">
                            <div class="col-5 cover-background" style="background-image: url(images/gipam/elhousniachraf.webp)">
                            </div>
                            <div class="col-7 bg-white ps-35px pt-30px pb-30px xs-ps-20px">
                                <span class="primary-font fs-18 fw-600 text-dark-gray d-block">
                                    <?= lg_("EL HOUSNI Achraf") ?>
                                </span>
                                <span class="fs-16 lh-22 d-block">
                                    <?= lg_("Secrétaire Général") ?>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mb-30px">
                    <div class="col-md-6 sm-mb-30px">
                        <div class="row g-0 box-shadow-extra-large box-shadow-quadruple-large-hover border-radius-6px overflow-hidden" style="height: 150px;">
                            <div class="col-5 cover-background" style="background-image: url(images/gipam/hafyanchakib.webp)">
                            </div>
                            <div class="col-7 bg-white ps-35px pt-30px pb-30px xs-ps-20px">
                                <span class="primary-font fs-18 fw-600 text-dark-gray d-block">
                                    <?= lg_("HAFYANE Chakib") ?>
                                </span>
                                <span class="fs-16 lh-22 d-block">
                                    <?= lg_("Secrétaire Général Adjoint") ?>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="row g-0 box-shadow-extra-large box-shadow-quadruple-large-hover border-radius-6px overflow-hidden" style="height: 150px;">
                            <div class="col-5 cover-background" style="background-image: url(images/gipam/dichaziz.webp)">
                            </div>
                            <div class="col-7 bg-white ps-35px pt-30px pb-30px xs-ps-20px">
                                <span class="primary-font fs-18 fw-600 text-dark-gray d-block">
                                    <?= lg_("DICH Aziz") ?>
                                </span>
                                <span class="fs-16 lh-22 d-block">
                                    <?= lg_("Trésorier") ?>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 sm-mb-30px">
                        <div class="row g-0 box-shadow-extra-large box-shadow-quadruple-large-hover border-radius-6px overflow-hidden" style="height: 150px;">
                            <div class="col-5 cover-background" style="background-image: url(images/gipam/jamalmikou.webp)">
                            </div>
                            <div class="col-7 bg-white ps-35px pt-30px pb-30px xs-ps-20px">
                                <span class="primary-font fs-18 fw-600 text-dark-gray d-block">
                                    <?= lg_("MIKOU Jamal") ?>
                                </span>
                                <span class="fs-16 lh-22 d-block">
                                    <?= lg_("Trésorier Adjoint") ?>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end section -->
<!-- start section -->
<section class="position-relative overflow-hidden p-0">
    <div class="opacity-dark bg-black"></div>
    <div class="container">
        <div class="row align-items-center h-850px md-h-500px text-center justify-content-center">
            <div class="col-12 position-relative">
                <h2 class="text-white alt-font fw-600 ls-minus-1px text-shadow-extra-large">
                    <?= lg_("Retour sur l'édition précédente du") ?>
                    <br>
                    <?= lg_("Moroccan Automotive Technologies (M.A.T) 2022") ?>
                </h2>
            </div>
        </div>
    </div>
    <div class="bg-video-wrapper">
        <iframe allow="autoplay" src="https://www.youtube.com/embed/dgxMHq6WkII?rel=0&amp;showinfo=0&background=1&autoplay=1&loop=1&mute=1" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
    </div>
</section>
<!-- end section -->
<!-- start footer -->
<?php
include('../includes/footer.php')
?>