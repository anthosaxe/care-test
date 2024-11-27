<!-- name: Page type -->
<!DOCTYPE html>
<html lang="zxx">

<head>
    <!-- metas -->
    <meta charset="utf-8">
    <meta name="author" content="ohmedias" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <link rel='alternate' hreflang='fr'>
    <!-- title  -->
    <title>Conseils - Care-test</title>
    <meta property="og:title" content="Conseils - Care-test" />
    <meta name="description" content="" />
    <!-- favicon -->
    <link rel='icon' href="{{ asset('media/favicon.png') }}" />

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <meta property="og:image:width" content="800" />
    <meta property="og:image:height" content="390" />
    <meta property="og:description" content="" />
    <meta property="og:type" content="website" />
</head>

<body class="">
    <div class="containLoader">
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
    <section class="banner-type bg_cover rel" style="background-image: url('{{ asset('media/a propos/1920x935-8.png') }}');">
    <div class="filtre abs"></div>
    <h1 class="abs">Conseils</h1>
</section>
<div class="container container-type px-4">
    <h3 id="alimentation">
        <span style="color: #008080;">J&rsquo;adopte une alimentation équilibrée</span>
    </h3>
    <div class="row mainRow bootstrapElement">
        <div class="col bootstrapElement col-xs-12 col-md-4">
            <p>
                <img alt="" src="{{ asset('media/conseils/livre.png') }}" width="50" height="71" />
            </p>
        </div>
        <div class="col bootstrapElement col-xs-12 col-md-8">
            <p style="text-align: left;">
                <span style="color: #003366;">
                    Pour vous aider à manger sainement, le <a href="http://reseausantediabete.be">Réseau SantéDiabète</a>
                    a développé un livre de recettes saines et équilibrées «&nbsp;<a href="http://reseausantediabete.be/wp-content/uploads/2012/07/La-gourmandise-est-permise-livre-de-recette-édition-2016.pdf">la gourmandise est permise</a>
                    &nbsp;». Pour plus de recettes et de conseils sur une alimentation équilibrée, n’hésitez pas à visiter leur site.
                </span>
            </p>
        </div>
    </div>
    <div class="row mainRow bootstrapElement" style="text-align: center;">
        <img alt="" src="{{ asset('media/conseils/1920x1229-pyramide-alimentaire.jpg') }}" />
        <br />
        <img alt="" src="{{ asset('media/conseils/1920x1027-alimentation-quilibre.jpg') }}" />
    </div>
    <h3 id="glycemie">
        <span style="color: #008080;">Je fais attention à l’indice glycémique de mes aliments</span>
    </h3>
    <p>
        <span style="color: #003366;">
            L’index glycémique permet de comparer la capacité des aliments à augmenter le taux de sucre dans le sang (glucose).&nbsp;
            <span style="color: #000080;">
                <strong>Plus l’index glycémique d’un aliment est élevé, plus le sucre arrive rapidement dans le sang.&nbsp;</strong>
            </span>
            De manière générale,
            <span style="color: #000080;">
                <strong>les glucides simples ont un index glycémique moyen à élevé et font monter rapidement la glycémie. </strong>
            </span>
            Pour les glucides complexes, cela varie.&nbsp;
        </span>
    </p>
    <p>
        <strong>
            <img alt="" src="{{ asset('media/conseils/1920x1060-conseils3.jpg') }}" style="width: 850px; display: block; margin-left: auto; margin-right: auto;" />
            <br />
        </strong>
    </p>
    <h3 id="choix">
        <span style="color: #008080;">Je fais de meilleurs choix</span>
    </h3>
    <p>
        <span style="color: #003366;">
            Le nutri-score présent sur les emballages vous permet de comparer et de choisir les produits de meilleure qualité nutritionnelle. Vous pouvez par exemple confronter le score de différentes sortes de céréales pour le petit-déjeuner ou de repas préparés.
            <strong>
                Il est composé d’une échelle de 5 couleurs associées à 5 lettres :
                <span style="color: #000080;">de A pour les aliments à privilégier, à E pour les aliments à limiter.</span>
            </strong>
            Plus l’aliment sera riche en éléments à favoriser, meilleures seront la lettre et la couleur. Très pratique, <strong>il permet de choisir encore plus facilement des produits alimentaires équilibrés.&nbsp;</strong>
        </span>
    </p>
    <p>
        <img alt="" src="{{ asset('media/conseils/1920x651-conseils7.jpg') }}" style="display: block; margin-left: auto; margin-right: auto;" />
    </p>
    <h3 id="sedentarite">
        <span style="color: #008080;">Je limite la sédentarité</span>
    </h3>
    <p>
        <img alt="" src="{{ asset('media/conseils/1920x988-conseils4.jpg') }}" style="display: block; margin-left: auto; margin-right: auto;" />
    </p>
    <p>
        <span style="color: #003366;">
            <span style="color: #000080;">
                <strong>Limiter la sédentarité</strong>
            </span>
            est également important pour diminuer le risque de diabète de type 2.&nbsp;Le risque de diabète est
            <span style="color: #000080;">
                <strong>60% plus élevé chez les personnes qui sont physiquement peu actives.</strong>
                &nbsp;<strong>Chaque pas compte</strong>
            </span>
            : regarder moins la télévision, se lever régulièrement durant la journée, prendre les escaliers au lieu de l’ascenseur ou garer sa voiture un peu plus loin.&nbsp;L’intégration d’une activité physique (
            <span style="color: #000080;">
                <strong>environ 30 min / jour)</strong>
            </span>
            en plus des activités quotidiennes entraîne une diminution significative du risque de diabète de 30%.&nbsp;
        </span>
    </p>
    <p>
        <img alt="" src="{{ asset('media/conseils/1920x1240-dpenses-nergtiques.jpg') }}" style="display: block; margin-left: auto; margin-right: auto;" />
    </p>
    <h3 id="hypertension">
        <span style="color: #008080;">Je réduis mon hypertension</span>
    </h3>
    <p>
        <span style="color: #003366;">Vous pouvez éviter l’hypertension artérielle en :&nbsp;</span>
    </p>
    <ul>
        <li>
            <span style="color: #003366;">
                Ayant une
                <span style="color: #000080;">
                    <strong>alimentation saine</strong>
                    ;
                </span>
            </span>
        </li>
        <li>
            <span style="color: #003366;">
                En faisant attention à
                <span style="color: #000080;">
                    <strong>votre poids</strong>
                    ;&nbsp;
                </span>
            </span>
        </li>
        <li>
            <span style="color: #003366;">
                En étant plus actif et en gardant une
                <span style="color: #000080;">
                    <strong>activité physique quotidienne</strong>
                    ;
                </span>
            </span>
        </li>
        <li>
            <span style="color: #003366;">
                En
                <span style="color: #000080;">
                    <strong>arrêtant de fumer</strong>
                    .
                </span>
            </span>
        </li>
    </ul>
    <p>
        <span style="color: #003366;">Mais également en :&nbsp;</span>
    </p>
    <ul>
        <li>
            <span style="color: #003366;">
                <span style="color: #000080;">
                    <strong>Limitant votre apport en sel</strong>
                </span>
                &nbsp;(par exemple éviter de saler à table et éviter les plats préparés) ;
            </span>
        </li>
        <li>
            <span style="color: #003366;">
                <span style="color: #000080;">
                    <strong>Évitant les aliments contenant des graisses saturées</strong>
                </span>
                (viandes grasses, produits laitiers entiers, collations, pâtisseries ou gâteaux) ;
            </span>
        </li>
        <li>
            <span style="color: #003366;">
                <span style="color: #000080;">
                    <strong>Réduisant votre consommation d’alcool</strong>
                </span>
                &nbsp;(maximum 2 verres/jour pour les hommes et 1 verre/jour pour les femmes).
            </span>
        </li>
    </ul>
    <p style="text-align: center;">
        <img alt="" src="{{ asset('media/conseils/1920x1343-conseils6.jpg') }}" />
    </p>
    <h3>
        <span style="color: #008080;">En savoir plus</span>
    </h3>
    <p>
        <a href="{{ asset('media/livret-patient-fr-vf.pdf') }}" target="_blank" rel="noopener">&laquo;Bien dans ma tête, bien dans mon corps&nbsp;&raquo;</a>
        . <span style="color: #000080;">Ce petit livre reprend des conseils généraux et des trucs et astuces afin d’améliorer à petits pas votre alimentation, votre activité physique et votre bien-être.</span>
    </p>
</div>

    <footer>
        <div id='footer'>
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
                                    <p class="mb-lg-2 mb-0">Livre de conseils et recommendations : <a href="{{ asset('media/livret-patient-fr-vf.pdf') }}" target="_blank">FR</a> <a href="{{ asset('media/livret-patientnl-vf.pdf') }}" target="_blank">NL</a>
                                    </p>
                                    <p>Questionnaire Findrisk : <a href="{{ asset('media/Questionnaire_FR%20(VF).pdf') }}" target="_blank">FR</a> <a href="{{ asset('media/Questionnaire_NL.pdf') }}" target="_blank">NL</a> <a href="{{ asset('media/Questionnaire_EN.pdf') }}" target="_blank">EN</a> <a href="{{ asset('media/Questionnaire_AR%20(VF).pdf') }}" target="_blank" >AR</a></p>
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
    <link rel="stylesheet" href="{{ asset('css/default.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/hamburgers.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/slick.css') }}" type="text/css">
    
    <script src='https://code.jquery.com/jquery-3.5.1.min.js'></script>
    <script src='https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js'></script>
    <script src='https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js'></script>
    <script src='https://unpkg.com/aos@2.3.1/dist/aos.js'></script>
    <script src="{{ asset('js/script.js') }}"></script>
    <script src="{{ asset('js/FileSaver.js') }}"></script>
    <script src="{{ asset('js/html2canvas.min.js') }}"></script>
    <script src="{{ asset('js/slick.min.js') }}"></script>
</body>

</html>
<script></script>