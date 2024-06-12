<?php
session_start();

function Translate()
{
    $requestUri = $_SERVER['REQUEST_URI'];
    if (strpos($requestUri, '/ar') !== false || strpos($requestUri, '/en') !== false) {
        $translationsPath = '../js/translations.json';
        if (strpos($requestUri, '/ar') !== false) {
            if ($_SESSION['lang'] !== 'ar') {
                $_SESSION['lang'] = 'ar';
            }
        } else {
            if ($_SESSION['lang'] !== 'en') {
                $_SESSION['lang'] = 'en';
            }
        }
    } else {
        if ($_SESSION['lang'] !== 'fr') {
            $_SESSION['lang'] = 'fr';
        }
        $translationsPath = 'js/translations.json';
    }

    // Return the path and whether the language changed
    return $translationsPath;
}
$path = Translate();
include 'functions.php';

?>

<!doctype html>
<html class="no-js" dir="<?= isset($_SESSION['lang']) && $_SESSION['lang'] == 'ar' ? 'rtl' : 'ltr' ?>">
<?php
// Function to get language-specific URL

function getLanguageURL($url)
{
    if (isset($_SESSION['lang']) && $_SESSION['lang'] == 'ar') {
        return 'ar/' . $url;
    } elseif (isset($_SESSION['lang']) && $_SESSION['lang'] == 'en') {
        return 'en/' . $url;
    } else {
        return $url;
    }
}
$requestUri = $_SERVER['REQUEST_URI'];
if (strpos($requestUri, '/ar') !== false || strpos($requestUri, '/en') !== false) {
    echo '<base href="../" target="">';
}
?>

<head>
    <title>GIPAM - Groupement Interprofessionnel de L’Automobile au Maroc</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="author" content="Maxmind Digital Agency Morocco">
    <meta name="viewport" content="width=device-width,initial-scale=1.0" />
    <meta name="description" content="GIPAM">
    <!-- favicon icon -->
    <link rel="shortcut icon" href="images/favicon.png">
    <!-- google fonts preconnect -->
    <link rel="preconnect" href="https://fonts.googleapis.com" crossorigin>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <!-- style sheets and font icons -->
    <link rel="stylesheet" href="css/vendors.min.css" />
    <link rel="stylesheet" href="css/icon.min.css" />
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/responsive.css" />
    <link rel="stylesheet" href="demos/it-business/it-business.css" />
    <script>
        function changeLg(lang) {
            let currentPath = window.location.pathname;
            let newPath = '';

            // Check if the current path already contains the language segment
            if (currentPath.startsWith('/ar/') || currentPath.startsWith('/en/')) {
                // Replace the language segment with the new language
                newPath = currentPath.replace(/^\/(ar|en)\//, '/' + lang + '/');
            } else {
                // If the current path doesn't contain a language segment, append the new language
                newPath = '/' + lang + currentPath;
            }
            if(lang == 'fr'){
                newPath = newPath.replace('/fr', '');
            }

            // Redirect to the new URL
            window.location.href = newPath;
        }
    </script>
</head>

<body data-mobile-nav-style="full-screen-menu" data-mobile-nav-bg-color="#252840" class="<?= isset($_SESSION['lang']) && $_SESSION['lang'] == 'ar' ? 'rtl' : '' ?>">
    <!-- start header -->

    <header>
        <!-- start navigation -->
        <nav class="navbar navbar-expand-lg header-transparent bg-transparent header-reverse glass-effect" data-header-hover="light">
            <div class="container-fluid">
                <div class="col-auto col-xxl-3 col-lg-2 me-lg-0 me-auto">
                    <a class="navbar-brand" href="demo-it-business.html">
                        <img src="images/gipam/gipam-white.webp" data-at2x="images/gipam/gipam-white.webp" alt="" class="default-logo" style="max-height: 65px;">
                        <img src="images/gipam/gipam.webp" data-at2x="images/gipam/gipam.webp" alt="" class="alt-logo" style="max-height: 65px;">
                        <img src="images/gipam/gipam.webp" data-at2x="images/gipam/gipam.webp" alt="" class="mobile-logo" style="max-height: 65px;">
                    </a>
                </div>
                <div class="col-auto col-xxl-6 col-lg-8 menu-order position-static">
                    <button class="navbar-toggler float-start" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-label="Toggle navigation">
                        <span class="navbar-toggler-line"></span>
                        <span class="navbar-toggler-line"></span>
                        <span class="navbar-toggler-line"></span>
                        <span class="navbar-toggler-line"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                        <ul class="navbar-nav">
                            <li class="nav-item"><a href="index.php" class="nav-link"><?= lg_('Accueil') ?></a></li>
                            <li class="nav-item"><a href="<?= getLanguageURL('aboutus.php') ?>" class="nav-link"><?= lg_('À Propos') ?></a></li>
                            <li class="nav-item dropdown dropdown-with-icon-style02">
                                <a href="demo-it-business-services.html" class="nav-link"><?= lg_('Info & Événements') ?></a>
                                <i class="fa-solid fa-angle-down dropdown-toggle" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false"></i>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                    <li><a href="https://www.rechange-maroc.com" target="_blank"><?= lg_('Rechange-maroc.ma') ?></a></li>
                                    <li><a href="<?= getLanguageURL('news.php')?>"><?= lg_('Actualités Gipam') ?></a></li>
                                </ul>
                            </li>
                            <li class="nav-item"><a href="<?= getLanguageURL('membres.php') ?>" class="nav-link"><?= lg_('Membres') ?></a></li>
                            <li class="nav-item"><a href="<?= getLanguageURL('contact.php') ?>" class="nav-link"><?= lg_('Contact') ?></a></li>
                        </ul>

                        <select class="form-select" aria-label="Language switcher" style="width: 12%;" onchange="changeLg(this.value)">
                            <option value="fr" <?= $_SESSION['lang'] == 'fr' ? 'selected' : '' ?>> <?= lg_('FR') ?></option>
                            <option value="en" <?= $_SESSION['lang'] == 'en' ? 'selected' : '' ?>> <?= lg_('EN') ?></option>
                            <option value="ar" <?= $_SESSION['lang'] == 'ar' ? 'selected' : '' ?>> <?= lg_('AR') ?></option>
                        </select>

                    </div>
                </div>

                <div class="col-auto col-xxl-3 col-lg-2 text-end d-none d-sm-flex">
                    <div class="header-icon">
                        <div class="header-button"><a href="demo-it-business-contact.html" class="btn btn-large btn-transparent-white-light btn-rounded text-transform-none border-1"><?= lg_('Rejoindre le GIPAM') ?><i class="fa-solid fa-arrow-<?= isset($_SESSION['lang']) && $_SESSION['lang'] == 'ar' ? 'left' : 'right' ?>"></i></a></div>
                    </div>
                </div>
            </div>
        </nav>
        <!-- end navigation -->
    </header>
    <!-- end header -->
