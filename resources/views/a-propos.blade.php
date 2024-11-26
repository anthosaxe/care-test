<!-- name: Page type -->
<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">

    <!-- metas -->
    <meta charset="utf-8">
    <meta name="author" content="ohmedias">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="alternate" hreflang="fr">
    <!-- title  -->

    <title>A propos - Care-test</title>
    <meta property="og:title" content="A propos - Care-test">
    <meta name="description" content="">
    <!-- base href="https://caretest.be/" --> <!-- favicon -->

    <link rel="icon" href="https://caretest.be/CMS/content/logo/favicon.png">
    <meta property="og:url" content="http://caretest.be//fr/a-propos/">
    <link rel="stylesheet" href="A%20propos%20-%20Care-test_fichiers/slick.css">
    <link rel="stylesheet" href="A%20propos%20-%20Care-test_fichiers/style.css">
    <meta property="og:image" content="http://caretest.be//CMS/content/images/202106/800x390-8.png">
    <meta property="og:image:width" content="800">
    <meta property="og:image:height" content="390">
    <meta property="og:description" content="">
    <meta property="og:type" content="website">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <style>
        .iframe-container {
            position: relative;
            width: 100%;
            padding-top: 56.25%;
            /* Ajustez pour le ratio vidéo */
            height: 0;
            overflow: hidden;
        }

        .iframe-container video {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            /* Remplit le conteneur sans déformer */
        }
    </style>

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


    <!--====== NAVBAR TWO PART START ======-->

    <section class="navbar-area menu d-flex align-items-center">

        <div class="container-fluid">
            <div class="row">
                <div class="col d-flex align-items-center">
                    <a class="navbar-brand" href="{{ route('acceuil') }}">
                        <img class="logo care-test" src="{{ asset('media/acceuil/logo.svg') }}" alt="Logo Care Test">
                    </a>
                    <img class="logo-ulb" src="{{ asset('media/acceuil/ulb.png') }}" alt="Logo ULB">
                </div>
                <div class="col col-lg-8 d-flex justify-content-end">
                    <button class="hamburger hamburger--spin d-lg-none d-block" type="button">
                        <span class="hamburger-box">
                            <span class="hamburger-inner"></span>
                        </span>
                    </button>
                    <nav class="navbar navbar-expand-lg menuResp">



                        <li><a class="list1" href="{{ route('a-propos') }}">À propos</a></li>
                        <li><a class="list2" href="{{ route('risques') }}"> Risques</a>
                            <ul style="padding: 7px; " class="submenu2">
                                <li><a href="{{ route('risques') }}#diabete" class="">Diabète</a></li>
                                <li><a href="{{ route('risques') }}#hypertension" class="">Hypertension</a></li>
                                <li><a href="{{ route('risques') }}#facteurs" class="">Facteurs de risques</a></li>
                            </ul>
                        </li>
                        <li><a class="list3" href="{{ route('conseils') }}">Conseils</a>
                            <ul style="padding: 7px; " class="submenu3">
                                <li><a href="{{ route('conseils') }}#alimentation" class="">Alimentation</a></li>
                                <li><a href="{{ route('conseils') }}#glycemie" class="">Indice glycémique</a></li>
                                <li><a href="{{ route('conseils') }}#choix" class="">Nutriscore</a></li>
                                <li><a href="{{ route('conseils') }}#sedentarite" class="">Sédentarité</a></li>
                                <li><a href="{{ route('conseils') }}#hypertension" class="">Hypertension</a></li>
                            </ul>
                        </li>
                        <li><a class="list4" href="{{ route('medecins_praticien') }}">Je consulte</a></li>
                        <li><a class="list5" href="{{ route('acceuil') }}#risqueTo">Évaluer votre risque</a></li>

                    </nav> <!-- navbar -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>

    <!--====== NAVBAR TWO PART ENDS ======-->
    <section class="banner-type bg_cover rel" style="background-image: url('{{ asset('media/a propos/1920x935-8.png') }}')">
        <div class="filtre abs"></div>
        <h1 class="abs">A propos</h1>

    </section>

    <div class="container container-type px-4">
        <h2>Ensemble, rendons le dépistage accessible et rapide pour tous.</h2>
        <p><span style="color: #003366;">Care-Test est un projet de l'UCL, l'ULB
                et la VUB. Il a pour objectif de sensibiliser les citoyens à
                l’importance du dépistage précoce et l’évaluation des facteurs de
                risques pour toutes les personnes qui présentent un diabète ou une
                pathologie cardiovasculaire parfois sans le savoir car la maladie peut
                être silencieuse et indolore.</span></p>
        <p><span style="color: #003366;">Le projet Care-Test vise à faciliter
                les relations entre les médecins, les patients et les pharmaciens tout
                en mettant l’accent sur la prévention grâce au test Findrisc mis à
                disposition de tous. En moins de 10 minutes, chaque citoyen peut évaluer
                ses risques de développer un diabète ou une maladie
                cardiovasculaire.&nbsp;</span></p>
        <div class="iframe-container">
            <video src="{{ asset('media/a propos/MD Care Test.mp4') }}" controls loop>
                Votre navigateur ne supporte pas les vidéos HTML5.
            </video>
        </div>


    </div>
    <footer>

        <div id="footer">



            <!--====== FOOTER PART START ======-->

            <section class="footer-area footer-dark">
                <div class="container-custom">
                    <div class="row">
                        <div class="col-lg-5 col-12">
                            <a class="navbar-brand mb-3" href="#">
                                <img class="logo" src="{{ asset('media/Acceuil/logo.svg') }}" alt="Logo">
                            </a>
                            <p class="mb-lg-5 mb-0 textFooter">Le projet Care-Test vise à
                                sensibiliser les citoyens à l’importance du dépistage précoce et
                                l’évaluation des facteurs de risques liés au diabète et aux maladies
                                cardiovasculaires. </p>
                            <!-- <div class="social-banner">
					   						   <a " href="https://www.facebook.com/surya.hendricks" target="_blank"><i class="fab fa-facebook-f"></i></a>
					   						   <a " href="test" target="_blank"><i class="fab fa-twitter"></i></a>
					   						   <a " href="test" target="_blank"><i class="fab fa-instagram"></i></a>
					   						   <a " href="test" target="_blank"><i class="fab fa-linkedin-in"></i></a>
					   				   </div> -->
                        </div>
                        <div class="col-lg-7 col-12 infoFooter">
                            <div class="row">
                                <div class="col-md-6 col-12 liens">
                                    <h4 class="mb-4 mt-4">Liens utiles</h4>
                                    <p class="mb-lg-2 mb-0">Livre de conseils et recommendations : <a href="https://caretest.be/CMS/content/images/202108/livret-patient-fr-vf.pdf" target="_blank">FR</a> <a href="https://caretest.be/CMS/content/images/202108/livret-patientnl-vf.pdf" target="_blank">NL</a>
                                    </p>
                                    <p>Questionnaire Findrisk : <a href="https://caretest.be/CMS/content/images/202108/Questionnaire_FR%20(VF).pdf" target="_blank">FR</a> <a href="https://caretest.be/CMS/content/images/202108/Questionnaire_NL.pdf" target="_blank" "="">NL</a> <a href=" https://caretest.be/CMS/content/images/202108/Questionnaire_EN.pdf" target="_blank">EN</a> <a href="https://caretest.be/CMS/content/images/202108/Questionnaire_AR%20(VF).pdf" target="_blank" "="">AR</a></p>
					   </div>
					   <div class=" col-md-6 col-12 contact d-flex flex-column">
                                            <h4 class="mb-4 mt-4">Contact</h4>
                                            <a class="mb-2" href="mailto:sarah.rondeaux@ulb.be"><i class="fa-solid fa-globe"></i></i>sarah.rondeaux@ulb.be</a>
                                            <a class="mb-2" href="tel:003226505310"><i class="fa-solid fa-mobile"></i>+32 (0)2 650 53 10</a>
                                            <a href="https://goo.gl/maps/bKjbRwwh3jDCrevd6" target="_blank"><i class="fa-solid fa-location-dot"></i>Campus de la Plaine - CP 205/07 Boulevard du Triomphe, ACC.2 1050 Bruxelles</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!--====== FOOTER PART ENDS ======-->

        </div>

    </footer>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ asset('css/fontawesome-all.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/LineIcons.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/bootstrap-icons.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/aos.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/default.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/hamburgers.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" type="text/css">

    <script src="{{ asset('js/jquery-3.5.1.min.js') }}"></script>
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/aos.js') }}"></script>
    <script src="{{ asset('js/slick.min.js') }}"></script>
    <script src="{{ asset('js/html2canvas.min.js') }}"></script>
    <script src="{{ asset('js/FileSaver.js') }}"></script>
    <script src="{{ asset('js/script.js') }}"></script>

    <script>

    </script>
</body>

</html>