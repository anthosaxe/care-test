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
    <base href='https://www.caretest.be/' />
    <!-- favicon -->

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel='icon' href='CMS/content/logo/favicon.png' />
    <meta property="og:url" content="http://www.caretest.be//fr/conseils/" />
    <link rel="stylesheet" href="CMS/themes/care-test//css/slick.css">
    <link rel="stylesheet" href="CMS/themes/care-test//css/style.css">
    <meta property="og:image" content="http://www.caretest.be//CMS/content/images/202106/800x390-8.png" />
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
    <section class="banner-type bg_cover rel" style='background-image: url("CMS/content/images/202106/1920x935-8.png");'>
        <div class="filtre abs"></div>
        <h1 class="abs">Conseils</h1>
    </section>
    <div class="container container-type px-4">
        <h3 id="alimentation">
            <span style="color: #008080;">J &rsquo;adopte une alimentation &eacute;quilibr &eacute;e</span>
        </h3>
        <div class="row mainRow bootstrapElement">
            <div class="col bootstrapElement col-xs-12 col-md-4">
                <p>
                    <img alt="" src="data:image/png;base64,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" width="50" height="71" />
                </p>
            </div>
            <div class="col bootstrapElement col-xs-12 col-md-8">
                <p style="text-align: left;">
                    <span style="color: #003366;">
                        Pour vous aider &agrave;manger sainement, le <a href="http://reseausantediabete.be">R &eacute;seau Sant &eacute;Diab &egrave;te</a>
                        a d &eacute;velopp &eacute;un livre de recettes saines et &eacute;quilibr &eacute;es &laquo;&nbsp;<a href="http://reseausantediabete.be/wp-content/uploads/2012/07/La-gourmandise-est-permise-livre-de-recette-&eacute;dition-2016.pdf">la gourmandise est permise</a>
                        &nbsp;&raquo;. Pour plus de recettes et de conseils sur une alimentation &eacute;quilibr &eacute;e, n &rsquo;h &eacute;sitez pas &agrave;visiter leur site.
                    </span>
                </p>
            </div>
        </div>
        <div class="row mainRow bootstrapElement" style="text-align: center;">
            <img alt="" src="/CMS/content/images/202109/1920x1229-pyramide-alimentaire.jpg" />
            <br />
            <img alt="" src="/CMS/content/images/202109/1920x1027-alimentation-quilibre.jpg" />
        </div>
        <h3 id="glycemie">
            <span style="color: #008080;">Je fais attention &agrave;l &rsquo;indice glyc &eacute;mique de mes aliments</span>
        </h3>
        <p>
            <span style="color: #003366;">
                L &rsquo;index glyc &eacute;mique permet de comparer la capacit &eacute;des aliments &agrave;augmenter le taux de sucre dans le sang (glucose).&nbsp;
                <span style="color: #000080;">
                    <strong>Plus l &rsquo;index glyc &eacute;mique d &rsquo;un aliment est &eacute;lev &eacute;, plus le sucre arrive rapidement dans le sang.&nbsp;</strong>
                </span>
                De mani &egrave;re g &eacute;n &eacute;rale,
                <span style="color: #000080;">
                    <strong>les glucides simples ont un index glyc &eacute;mique moyen &agrave;&eacute;lev &eacute;et font monter rapidement la glyc &eacute;mie. </strong>
                </span>
                Pour les glucides complexes, cela varie.&nbsp;
            </span>
        </p>
        <p>
            <strong>
                <img alt="" src="/CMS/content/images/202109/1920x1060-conseils3.jpg" style="width: 850px; display: block; margin-left: auto; margin-right: auto;" />
                <br />
            </strong>
        </p>
        <h3 id="choix">
            <span style="color: #008080;">Je fais de meilleurs choix</span>
        </h3>
        <p>
            <span style="color: #003366;">
                Le nutri-score pr &eacute;sent sur les emballages vous permet de comparer et de choisir les produits de meilleure qualit &eacute;nutritionnelle. Vous pouvez par exemple confronter le score de diff &eacute;rentes sortes de c &eacute;r &eacute;ales pour le petit-d &eacute;jeuner ou de repas pr &eacute;par &eacute;s.
                <strong>
                    I<span style="color: #000080;">l est compos &eacute;d &rsquo;une &eacute;chelle de 5 couleurs associ &eacute;es &agrave;5 lettres :</span>
                    <span style="color: #000080;">de A pour les aliments &agrave;privil &eacute;gier, &agrave;E pour les aliments &agrave;limiter.</span>
                </strong>
                Plus l &rsquo;aliment sera riche en &eacute;l &eacute;ments &agrave;favoriser, meilleures seront la lettre et la couleur. Tr &egrave;s pratique, <strong>il permet de choisir encore plus facilement des produits alimentaires &eacute;quilibr &eacute;s.&nbsp;</strong>
            </span>
        </p>
        <p>
            <img alt="" src="/CMS/content/images/202109/1920x651-conseils7.jpg" style="display: block; margin-left: auto; margin-right: auto;" />
        </p>
        <h3 id="sedentarite">
            <span style="color: #008080;">Je limite la s &eacute;dentarit &eacute;</span>
        </h3>
        <p>
            <img alt="" src="/CMS/content/images/202109/1920x988-conseils4.jpg" style="display: block; margin-left: auto; margin-right: auto;" />
        </p>
        <p>
            <span style="color: #003366;">
                <span style="color: #000080;">
                    <strong>Limiter la s &eacute;dentarit &eacute;</strong>
                </span>
                est &eacute;galement important pour diminuer le risque de diab &egrave;te de type 2.&nbsp;Le risque de diab &egrave;te est
                <span style="color: #000080;">
                    <strong>60% plus &eacute;lev &eacute;chez les personnes qui sont physiquement peu actives.</strong>
                    &nbsp;<strong>Chaque pas compte</strong>
                </span>
                : regarder moins la t &eacute;l &eacute;vision, se lever r &eacute;guli &egrave;rement durant la journ &eacute;e, prendre les escaliers au lieu de l &rsquo;ascenseur ou garer sa voiture un peu plus loin.&nbsp;L &rsquo;int &eacute;gration d &rsquo;une activit &eacute;physique (
                <span style="color: #000080;">
                    <strong>environ 30 min / jour)</strong>
                </span>
                en plus des activit &eacute;s quotidiennes entra &icirc;ne une diminution significative du risque de diab &egrave;te de 30%.&nbsp;
            </span>
        </p>
        <p>
            <img alt="" src="/CMS/content/images/202109/1920x1240-dpenses-nergtiques.jpg" style="display: block; margin-left: auto; margin-right: auto;" />
        </p>
        <h3 id="hypertension">
            <span style="color: #008080;">Je r &eacute;duis mon hypertension</span>
        </h3>
        <p>
            <span style="color: #003366;">Vous pouvez &eacute;viter l &rsquo;hypertension art &eacute;rielle en :&nbsp;</span>
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
                    En faisant attention &agrave;
                    <span style="color: #000080;">
                        <strong>votre poids</strong>
                        ;&nbsp;
                    </span>
                </span>
            </li>
            <li>
                <span style="color: #003366;">
                    En &eacute;tant plus actif et en gardant une
                    <span style="color: #000080;">
                        <strong>activit &eacute;physique quotidienne</strong>
                        ;
                    </span>
                </span>
            </li>
            <li>
                <span style="color: #003366;">
                    En
                    <span style="color: #000080;">
                        <strong>arr &ecirc;tant de fumer</strong>
                        .
                    </span>
                </span>
            </li>
        </ul>
        <p>
            <span style="color: #003366;">Mais &eacute;galement en :&nbsp;</span>
        </p>
        <ul>
            <li>
                <span style="color: #003366;">
                    <span style="color: #000080;">
                        <strong>Limitant votre apport en sel</strong>
                    </span>
                    &nbsp;(par exemple &eacute;viter de saler &agrave;table et &eacute;viter les plats pr &eacute;par &eacute;s) ;
                </span>
            </li>
            <li>
                <span style="color: #003366;">
                    <span style="color: #000080;">
                        <strong>&Eacute;vitant les aliments contenant des graisses satur &eacute;es</strong>
                    </span>
                    (viandes grasses, produits laitiers entiers, collations, p &acirc;tisseries ou g &acirc;teaux) ;
                </span>
            </li>
            <li>
                <span style="color: #003366;">
                    <span style="color: #000080;">
                        <strong>R &eacute;duisant votre consommation d &rsquo;alcool</strong>
                    </span>
                    &nbsp;(maximum 2 verres/jour pour les hommes et 1 verre/jour pour les femmes).
                </span>
            </li>
        </ul>
        <p style="text-align: center;">
            <img alt="" src="/CMS/content/images/202109/1920x1343-conseils6.jpg" />
        </p>
        <h3>
            <span style="color: #008080;">En savoir plus</span>
        </h3>
        <p>
            <a href="/CMS/content/images/202108/livret-patient-fr-vf.pdf" target="_blank" rel="noopener">&laquo;Bien dans ma t &ecirc;te, bien dans mon corps &nbsp;&raquo;</a>
            . <span style="color: #000080;">Ce petit livre reprend des conseils g &eacute;n &eacute;raux et des trucs et astuces afin d &rsquo;am &eacute;liorer &agrave;petits pas votre alimentation, votre activit &eacute;physique et votre bien-&ecirc;tre.</span>
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
    <link rel='stylesheet' href='CMS/themes/care-test//css/fontawesome/css/fontawesome-all.min.css' type='text/css' />
    <link rel='stylesheet' href='CMS/themes/care-test//css/LineIcons.css' type='text/css' />
    <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css' type='text/css' />
    <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css' type='text/css' />
    <link rel='stylesheet' href='https://unpkg.com/aos@2.3.1/dist/aos.css' type='text/css' />
    <link rel='stylesheet' href='CMS/themes/care-test//css/default.css' type='text/css' />
    <link rel='stylesheet' href='CMS/themes/care-test//css/hamburgers.css' type='text/css' />
    <link rel='stylesheet' href='CMS/themes/care-test//css/style.css' type='text/css' />
    <script src='https://code.jquery.com/jquery-3.5.1.min.js'></script>
    <script src='https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js'></script>
    <script src='https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js'></script>
    <script src='https://unpkg.com/aos@2.3.1/dist/aos.js'></script>
    <script src='CMS/themes/care-test//js/slick.min.js'></script>
    <script src='CMS/themes/care-test//js/html2canvas.min.js'></script>
    <script src='CMS/themes/care-test//js/FileSaver.js'></script>
    <script src='CMS/themes/care-test//js/script.js'></script>
</body>

</html>
<script></script>