<!-- resources/views/accueil.blade.php -->
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta name="author" content="ohmedias">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="alternate" hreflang="fr">
    <title>Accueil - Care-test</title>
    <meta property="og:title" content="Accueil - Care-test">
    <meta name="description" content="">
    <link rel="icon" href="{{ asset('images/favicon.png') }}">
    <meta property="og:url" content="{{ url()->current() }}">
    <link rel="stylesheet" href="{{ asset('css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <meta property="og:image" content="{{ asset('images/og-image.jpg') }}">
    <meta property="og:type" content="website">
</head>

<body class="" data-aos-easing="ease" data-aos-duration="400" data-aos-delay="0">
    <div class="containLoader" style="display: none;">
        <div class="loader">
            <span class="loader-inner-1"></span>
            <span class="loader-inner-2"></span>
            <span class="loader-inner-3"></span>
            <span class="loader-inner-4"></span>
        </div>
    </div>

    <!--====== NAVBAR ======-->
    <section class="navbar-area menu d-flex align-items-center">
        <div class="container-fluid">
            <div class="row">
                <div class="col d-flex align-items-center">
                    <a class="navbar-brand" href="#">
                        <img class="logo care-test" src="{{ asset('images/logo.svg') }}" alt="Logo Care Test">
                    </a>
                    <img class="logo-ulb" src="{{ asset('images/ulb.png') }}" alt="Logo ULB">
                </div>
                <div class="col col-lg-8 d-flex justify-content-end">
                    <button class="hamburger hamburger--spin d-lg-none d-block" type="button">
                        <span class="hamburger-box">
                            <span class="hamburger-inner"></span>
                        </span>
                    </button>
                    <nav class="navbar navbar-expand-lg menuResp">
                        <li><a class="list1" href="{{ url('/fr/a-propos/') }}">A propos</a></li>
                        <li><a class="list2" href="{{ url('/fr/risques/') }}"> Risques</a>
                            <ul style="padding: 7px;" class="submenu2">
                                <li><a href="{{ url('/fr/risques/#diabete') }}">Diabète</a></li>
                                <li><a href="{{ url('/fr/risques/#hypertension') }}">Hypertension</a></li>
                                <li><a href="{{ url('/fr/risques/#facteurs') }}">Facteurs de risques</a></li>
                            </ul>
                        </li>
                        <li><a class="list3" href="{{ url('/fr/conseils/') }}">Conseils</a>
                            <ul style="padding: 7px;" class="submenu3">
                                <li><a href="{{ url('/fr/conseils/#alimentation') }}">Alimentation</a></li>
                                <li><a href="{{ url('/fr/conseils/#glycemie') }}">Indice glycémique</a></li>
                                <li><a href="{{ url('/fr/conseils/#choix') }}">Nutriscore</a></li>
                                <li><a href="{{ url('/fr/conseils/#sedentarite') }}">Sédentarité</a></li>
                                <li><a href="{{ url('/fr/conseils/#hypertension') }}">Hypertension</a></li>
                            </ul>
                        </li>
                        <li><a class="list4" href="{{ url('/fr/mdecins-praticiens') }}">Je consulte</a></li>
                        <li><a class="list5" href="#risqueTo">Évaluer votre risque</a></li>
                    </nav> <!-- navbar -->
                </div>
            </div>
        </div>
    </section>

    <!-- BANNER -->
    <section id="banner">
        <div class="container-fluid h-100 px-0">
            <div class="mainBanner h-100">
                <div class="top rel">
                    <div class="left">
                        CARE-TEST <h1 class="my-4">Deux moyens de <span>tester</span> &amp; des outils pour <span>s’améliorer</span>.</h1>
                        <p><span style="color: #003366;">Le projet Care-Test a pour objectif de sensibiliser les citoyens à l’importance du dépistage précoce et l’évaluation des facteurs de risques liés au diabète et aux maladies cardiovasculaires.</span></p>
                    </div>
                    <img class="bannerImg abs" src="{{ asset('images/imageBannerCaretest.svg') }}" alt="image bannière">
                </div>
            </div>
        </div>
    </section>

    <!-- FOOTER -->
    <footer>
        <div id="footer">
            <section class="footer-area footer-dark">
                <div class="container-custom">
                    <div class="row">
                        <div class="col-lg-5 col-12">
                            <a class="navbar-brand mb-3" href="#">
                                <img class="logo" src="{{ asset('images/logo.svg') }}" alt="Logo">
                            </a>
                            <p class="mb-lg-5 mb-0 textFooter">Le projet Care-Test vise à sensibiliser les citoyens à l’importance du dépistage précoce et l’évaluation des facteurs de risques liés au diabète et aux maladies cardiovasculaires. </p>
                        </div>
                        <div class="col-lg-7 col-12 infoFooter">
                            <div class="row">
                                <div class="col-md-6 col-12 liens">
                                    <h4 class="mb-4 mt-4">Liens utiles</h4>
                                    <p class="mb-lg-2 mb-0">Livre de conseils et recommandations : 
                                        <a href="https://caretest.be/CMS/content/images/202108/livret-patient-fr-vf.pdf" target="_blank">FR</a> 
                                        <a href="https://caretest.be/CMS/content/images/202108/livret-patientnl-vf.pdf" target="_blank">NL</a>
                                    </p>
                                </div>
                                <div class="col-md-6 col-12 contact d-flex flex-column">
                                    <h4 class="mb-4 mt-4">Contact</h4>
                                    <a class="mb-2" href="mailto:sarah.rondeaux@ulb.be"><i class="fas fa-globe"></i> sarah.rondeaux@ulb.be</a>
                                    <a class="mb-2" href="tel:003226505310"><i class="fas fa-mobile-alt"></i> +32 (0)2 650 53 10</a>
                                    <a href="https://goo.gl/maps/bKjbRwwh3jDCrevd6" target="_blank"><i class="fas fa-map-marker-alt"></i> Campus de la Plaine - CP 205/07 Boulevard du Triomphe, ACC.2 1050 Bruxelles</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

        </div>
    </footer>
</body>
</html>
