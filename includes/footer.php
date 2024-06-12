<!-- start footer -->
<footer class="pt-5 pb-5 sm-pt-40px sm-pb-45px footer-dark bg-extra-medium-slate-blue">
    <div class="container">
        <div class="row justify-content-center">
            <!-- start footer column -->
            <div class="col-lg-4 col-sm-6 last-paragraph-no-margin order-5 order-sm-4 order-lg-1 text-center text-sm-start">
                <a href="index.php" class="footer-logo mb-15px d-block d-lg-inline-block"><img src="./images/gipam/gipam-white.webp" data-at2x="./images/gipam/gipam-white.webp" alt="" width="150px" style="max-height: 90px; border-radius: 5px;"></a>

            </div>
            <!-- end footer column -->
            <!-- start footer column -->
            <div class="col-4 col-lg-2 col-sm-4 md-mb-50px sm-mb-30px order-1 order-lg-2">
                <span class="alt-font d-block text-white mb-5px"><?= lg_("GIPAM") ?></span>
                <ul>
                    <li><a href="index.php"><?= lg_("Accueil") ?></a></li>
                    <li><a href="aboutus.php"><?= lg_("A propos") ?></a></li>
                    <li><a href="membres.php"><?= lg_("Membres") ?></a></li>
                    <li><a href="contact.php"><?= lg_("Contact") ?></a></li>
                </ul>
            </div>
            <!-- end footer column -->
            <!-- start footer column -->
            <div class="col-4 col-lg-2 col-sm-4 md-mb-50px sm-mb-30px order-3 order-lg-4">
                <span class="alt-font d-block text-white mb-5px lh-1"><?= lg_("Social connect") ?></span>
                <ul>
                    <li class="fs-14px"><a href="https://www.facebook.com/profile.php?id=100082850852679" target="_blank"><i class="fa-brands fa-facebook"></i> <?= lg_("Facebook") ?></a></li>
                    <li class="fs-14px"><a href="https://www.linkedin.com/groups/13735705/" target="_blank"><i class="fa-brands fa-linkedin"></i> <?= lg_("LinkedIn") ?></a></li>
                </ul>
                <span class="alt-font d-block text-white mb-5px mt-9 lh-1"><?= lg_("Retrouvez nous") ?></span>
                <ul>
                    <li class="fs-14px"><a href="https://maps.app.goo.gl/4AA1N7KDgNYwStai9" target="_blank"><i class="fa-regular fa-map"></i> <?= lg_("Google Maps") ?></a></li>
                    <li class="fs-14px"><a href="https://ul.waze.com/ul?place=ChIJhUWp2onTpw0R07be8STlmS8&ll=33.60445930%2C-7.62914460&navigate=yes&utm_campaign=default&utm_source=waze_website&utm_medium=lm_share_location" target="_blank"><i class="fa-brands fa-waze"></i> Waze</a></li>
                </ul>
            </div>
            <!-- end footer column -->
            <!-- start footer column -->
            <div class="col-4 col-lg-3 col-sm-6 xs-mb-30px last-paragraph-no-margin order-4 order-sm-5 order-lg-5">
                <span class="alt-font d-block text-white mb-5px lh-1"><?= lg_("Prendre Contact") ?></span>
                <p class="w-90 lg-w-100 md-w-70 sm-w-100 mb-10px fs-13"><?= lg_("357, BD Mohamed V, 7 Étage Espace 8, Casablanca, Maroc") ?></p>
                <div><i class="feather icon-feather-phone-call icon-very-small text-white me-10px"></i><a href="tel:+212520146379" class="text-white">+212 520 146 379</a></div>
                <div><i class="feather icon-feather-mail icon-very-small text-white me-10px"></i><a href="mailto:contact@gipam-maroc.ma" class="text-white text-decoration-line-bottom">contact@gipam-maroc.ma</a></div>
            </div>
            <!-- end footer column -->
        </div>
    </div>
</footer>
<!-- end footer -->
<!-- start sticky column -->
<div class="sticky-wrap z-index-1 d-none d-xl-inline-block" data-animation-delay="100" data-shadow-animation="true">
    <span class="fs-13 fw-500"></i><?= lg_("FABRICANTS - IMPORTATEURS - DISTRIBUTEURS - SERVICES") ?></span>
</div>
<!-- end sticky column -->

<!-- start subscription popup -->
<div class="modal fade" id="badgerequest" tabindex="-1" aria-labelledby="badgerequest" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="container contact-form-style-01 position-relative text-center xs-p-0">
                <div class="row g-0 position-relative">
                    <div class="col-lg-5 cover-background md-h-600px xs-h-400px" style="background-image:url('./images/mat/mechanic.jpg');"></div>
                    <div class="col-lg-7">
                        <div class="p-14 xl-p-11 bg-white">
                            <span class="mb-5px d-block"><?= lg_("Badge accès au Salon.") ?></span>
                            <h5 class="d-inline-block alt-font fw-600 text-dark-gray mb-8 ls-minus-1px"><?= lg_("Remplissez le formulaire suivant. Vous recevrez votre confirmation de badge par email.") ?></h5>
                            <form id="badgeForm">
                                <div class="position-relative form-group mb-15px">
                                    <span class="form-icon"><i class="bi bi-person-fill"></i></span>
                                    <input type="text" id="fName" name="name" class="form-control required" placeholder="Votre nom et prénom*" required />
                                    <div id="nameError" style="color: red; display: none;"><?= lg_("Veuillez saisir un nom valide.") ?></div>
                                </div>
                                <div class="position-relative form-group mb-15px">
                                    <span class="form-icon"><i class="bi bi-telephone-outbound"></i></span>
                                    <input type="text" id="company" name="company" class="form-control" placeholder="Le Nom de votre Entreprise" />
                                    <div id="companyError" style="color: red; display: none;"><?= lg_("Veuillez saisir un nom d'entreprise valide.") ?></div>
                                </div>
                                <div class="position-relative form-group mb-15px">
                                    <span class="form-icon"><i class="bi bi-envelope"></i></span>
                                    <input type="email" id="email" name="email" class="form-control required" placeholder="Votre email*" required />
                                    <div id="emailError" style="color: red; display: none;"><?= lg_("Veuillez saisir une adresse email valide.") ?></div>
                                </div>
                                <div class="position-relative form-group mb-15px">
                                    <span class="form-icon"><i class="bi bi-telephone-outbound"></i></span>
                                    <input type="tel" id="phone" name="phone" class="form-control required" placeholder="Votre numéro de téléphone*" required />
                                    <div id="phoneError" style="color: red; display: none;"><?= lg_("Veuillez saisir un numéro de téléphone valide.") ?></div>
                                </div>
                                <div class="position-relative form-group mb-15px">
                                    <select class="form-select required" id="activity" name="activity" aria-label="Default select example" required>
                                        <option selected disabled><?= lg_("Votre Activité*") ?></option>
                                        <option value="Fabricants"><?= lg_("Fabricants de pièces de rechange") ?></option>
                                        <option value="Importateurs/Distributeurs"><?= lg_("Importateurs / Distributeurs des IAM Indépendants After-market") ?></option>
                                        <option value="Maintenance"><?= lg_("MRA – Maintenance Rapide") ?></option>
                                        <option value="Petroliers"><?= lg_("Pétroliers") ?></option>
                                        <option value="Institutionnels"><?= lg_("Institutionnels") ?></option>
                                        <option value="SERVICES"><?= lg_("Services / Services") ?></option>
                                        <option value="AUTRE"><?= lg_("Autre / Other") ?></option>
                                    </select>
                                    <div id="activityError" style="color: red; display: none;"><?= lg_("Veuillez choisir une activité.") ?></div>
                                </div>
                                <div class="position-relative form-group form-textarea">
                                    <button class="btn btn-medium btn-box-shadow btn-round-edge w-100 btn-base-color mt-15px" id="submitBadgeForm" type="submit"><?= lg_("Envoyer ma Demande de Badge") ?></button>
                                    <div class="form-results mt-20px d-none"></div>
                                </div>
                            </form>

                        </div>
                        <button title="Close (Esc)" type="button" class="mfp-close text-dark-gray btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end subscription popup -->
    <!-- javascript libraries -->
    <script type="application/ld+json">
        {
            "@context": "http://schema.org",
            "@type": "Organization",
            "name": "MAT Expo",
            "url": "https://www.mat-expo.ma/",
            "logo": "https://www.mat-expo.ma/images/mat/logo/logo_mat.webp",
            "description": "MAT : Moroccan Automotive Technologies : Salon International de l'Aftermarket Automobile au Maroc"
        }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/notyf@3/notyf.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script type="text/javascript" src="js/script.js"></script>
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/vendors.min.js"></script>
    <script type="text/javascript" src="js/main.js"></script>
    <script type="text/javascript" src="js/languageSwitcher.js"></script>   
    </body>

    </html>