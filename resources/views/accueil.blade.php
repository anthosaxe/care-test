<!-- name: Accueil -->
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

    <title>Accueil - Care-test</title>
    <meta property="og:title" content="Accueil - Care-test">
    <meta name="description" content="">
    <link rel='icon' href="{{ asset('media/favicon.png') }}" />

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <meta property="og:image:width" content="" />
    <meta property="og:image:height" content="" />
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
    <section id="banner">
        <div class="container-fluid h-100 px-0">
            <div class="mainBanner h-100">
                <div class="top rel">
                    <div class="left">
                        CARE-TEST <h1 class="my-4">Deux moyens de <span>tester</span> &amp; des outils pour <span>s’améliorer</span>.</h1>
                        <p><span style="color: #003366;">Le projet Care-Test a pour
                                objectif de sensibiliser les citoyens à l’importance du dépistage
                                précoce et l’évaluation des facteurs de risques liés au diabète et aux
                                maladies cardiovasculaires.</span></p>
                    </div>
                    <img class="bannerImg abs" src="{{ asset('media/Acceuil/imageBannerCaretest.svg') }}" alt="image bannière">
                </div>
                <div class="bottom rel">
                    <!-- <div class="social-banner">
													<a " href="https://www.facebook.com/surya.hendricks" target="_blank"><i class="fab fa-facebook-f"></i></a>
													<a " href="test" target="_blank"><i class="fab fa-twitter"></i></a>
													<a " href="test" target="_blank"><i class="fab fa-instagram"></i></a>
													<a " href="test" target="_blank"><i class="fab fa-linkedin-in"></i></a>
											</div> -->
                    <!-- <div class="line abs"></div> -->

                </div>
            </div>
        </div>
    </section>
    <section id="saviez-vous" class="rel">
        <div class="abs left">-Test</div>
        <div class="abs right">Care-</div>
        <div class="container">
            <div class="titreSaviez">
                <h2 class="mb-3">Le <span>saviez</span>-vous ?</h2>
                <p><span style="color: #003366;">Le diabète et les maladies
                        cardiovasculaires concernent de nombreuses personnes de notre
                        population. C'est pourquoi Care-Test souhaite mettre l'accent sur la
                        prévention et le depistages précoce.&nbsp;</span></p>
            </div>

            <div class="row">
                <div data-aos="fade-right" class="col-sm-6 col-12 saviez aos-init">
                    <div class="numbers number1">
                        <p>1/<span>3</span></p>
                    </div>
                    <p class="patient mb-3">PATIENT</p>
                    <h3 class="titleNumbers number1">Un patient diabétique sur trois ignore qu’il souffre de <span>diabète</span>.</h3>
                </div>
                <div data-aos="fade-left" class="col-sm-6 col-12 saviez aos-init">
                    <div class="numbers number2">
                        <p>1/<span>2</span></p>
                    </div>
                    <p class="patient mb-3">BELGE</p>
                    <h3 class="titleNumbers number2">Un Belge sur deux est concerné par <span>les maladies cardiovasculaires</span>.</h3>
                </div>
            </div>
            <div id="risqueTo"></div>
        </div>
    </section>
    <section data-aos="fade-up" id="risque" class="bg_cover rel aos-init" style="background-image: url('{{ asset('media/Acceuil/1920x475-58624.png') }}')">
        <div class=" filtre abs">
        </div>
        <div class="container-fluid container-custom containRisque abs">
            <div class="row h-100">
                <div class="col-lg-5 col-12">
                    <h2 class="mb-lg-3 mb-1">Évaluez<br> votre <span>risque</span></h2>
                    <p>Grâce à Care-Test, vous évaluez votre risque de développer un diabète et une maladie cardiovasculaire en moins de 10 minutes.</p>
                </div>
                <div class="col-lg-7 col-12 lessMargin">
                    <div class="row h-100">
                        <div class="col-lg-6 col-12">
                            <div class="formTest formTest1">
                                <h4>Diabète</h4>
                                <p><span style="color: #003366;">Répondez à un questionnaire rapide pour évaluer les facteurs de risque et déterminer vos chances de développer un diabète.</span></p> <a class="buton mt-4 rel" href="{{ route('test_diabete') }}">
                                    <p class="">Faites le test</p>
                                    <div class="round abs"></div>
                                </a>

                            </div>
                        </div>
                        <div class="col-lg-6 col-12">
                            <div class="formTest formTest2">
                                <h4>Maladies cardiovasculaires</h4>
                                <p><span style="color: #003366;">Répondez à un questionnaire
                                        rapide pour évaluer les facteurs de risque et déterminer vos chances de
                                        développer des maladies cardiovasculaires.</span></p> <a class="buton mt-4 rel" href="{{ route('risque_cardio') }}">
                                    <p class="">Faites le test</p>
                                    <div class="round abs"></div>
                                </a>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <section id="conseils">
        <div class="container-fluid container-custom">
            <h2 class="text-center mb-3">Conseils <span>et</span> recommandations</h2>
            <div class="textConseils mb-5">
                <p><span style="color: #003366;">Afin de prévenir les risques de
                        diabète et de maladies cardiovasculaires, Care-Test vous accompagne et
                        vous livre quelques conseils en vue d'améliorer votre qualité de vie.</span></p>
            </div>
            <div class="row">
                <div data-aos="fade-left" class="col-lg-3 col-md-6 col-12 conseilImgContainer aos-init">
                    <a class="link-conseil" href="https://caretest.be/care-test/CMS/content/images/202108/livret-patient-fr-vf.pdf" target="_blank">
                        <div class="rel conseilImg" style="background-image: url('{{ asset('media/Acceuil/800x969-11.png') }}')">
                            <div class="filtre filtre1 abs"></div>
                            <h4 class="abs textFiltre">Manger <span>mieux</span></h4>

                        </div>
                    </a>
                    <p class="textUnder mt-3 text-center"></p>
                    <p>Une alimentation équilibrée.</p>
                    <p></p>
                </div>
                <div data-aos="fade-left" data-aos-delay="500" class="col-lg-3 col-md-6 col-12 conseilImgContainer aos-init">
                    <a class="link-conseil" href="https://caretest.be/care-test/CMS/content/images/202108/livret-patient-fr-vf.pdf" target="_blank">
                        <div class="rel conseilImg" style="background-image: url('{{ asset('media/Acceuil/800x969-12.png') }}')">
                            <div class="filtre filtre2 abs"></div>
                            <h4 class="abs textFiltre">Bouger <span>plus</span></h4>

                        </div>
                    </a>
                    <p class="textUnder mt-3 text-center"></p>
                    <p>Une activité sportive.</p>
                    <p></p>
                </div>
                <div data-aos="fade-right" data-aos-delay="500" class="col-lg-3 col-md-6 col-12 conseilImgContainer aos-init">
                    <a class="link-conseil" href="https://caretest.be/care-test/CMS/content/images/202108/livret-patient-fr-vf.pdf" target="_blank">
                        <div class="rel conseilImg" style="background-image: url('{{ asset('media/Acceuil/800x969-13.png') }}')">
                            <div class="filtre filtre3 abs"></div>
                            <h4 class="abs textFiltre">Vivre <br><span>mieux</span></h4>

                        </div>
                    </a>
                    <p class="textUnder mt-3 text-center"></p>
                    <p>Une meilleure qualité de vie.</p>
                    <p></p>
                </div>
                <div data-aos="fade-right" class="col-lg-3 col-md-6 col-12 conseilImgContainer aos-init">
                    <a class="link-conseil" href="https://caretest.be/care-test/CMS/content/images/202108/livret-patient-fr-vf.pdf" target="_blank">
                        <div class="rel conseilImg" style="background-image: url('{{ asset('media/Acceuil/800x969-14.png') }}')">
                            <div class="filtre filtre4 abs"></div>
                            <h4 class="abs textFiltre">Mon programme<span>en 28J</span></h4>

                        </div>
                    </a>
                    <p class="textUnder mt-3 text-center"></p>
                    <p>Un programme sur-mesure.</p>
                    <p></p>
                </div>
            </div>
        </div>
    </section>
    <section id="partenaire" class="rel">
        <div class="abs left">partenaires</div>
        <div class="container-fluid container-custom">
            <div class="row">
                <div class="col-lg-5 col-12">
                    <h2 class="mb-3">Des partenaires <span>cruciaux</span></h2>
                    <div class="textPart">
                        <p><span style="color: #003366;">Le projet
                                Care-Test ne serait rien sans ses partenaires. Ensemble, nous unissons
                                nos forces pour contribuer à améliorer la qualité des soins et rendre
                                ces dépistages accessibles à tous.</span></p>
                    </div>
                </div>
                <div class="col-lg-7 col-12">
                    <div class="row">
                        <div class="col-md-3 col-6">
                            <img src="{{ asset('media/Acceuil/groupe-de-masques-26.svg') }}" alt="Logo partenaire">
                        </div>
                        <div class="col-md-3 col-6">
                            <img src="{{ asset('media/Acceuil/groupe-de-masques-27.svg') }}" alt="Logo partenaire">
                        </div>
                        <div class="col-md-3 col-6">
                            <img src="{{ asset('media/Acceuil/groupe-de-masques-28.svg') }}" alt="Logo partenaire">
                        </div>
                        <div class="col-md-3 col-6">
                            <img src="{{ asset('media/Acceuil/groupe-de-masques-29.svg') }}" alt="Logo partenaire">
                        </div>
                        <div class="col-md-3 col-6">
                            <img src="{{ asset('media/Acceuil/groupe-de-masques-30.svg') }}" alt="Logo partenaire">
                        </div>
                        <div class="col-md-3 col-6">
                            <img src="{{ asset('media/Acceuil/groupe-de-masques-32.svg') }}" alt="Logo partenaire">
                        </div>
                        <div class="col-md-3 col-6">
                            <img src="{{ asset('media/Acceuil/300x183-famgb.png') }}" alt="Logo partenaire">
                        </div>
                        <div class="col-md-3 col-6">
                            <img src="{{ asset('media/Acceuil/300x127-ssmg.png') }}" alt="Logo partenaire">
                        </div>
                        <div class="col-md-3 col-6">
                            <img src="{{ asset('media/Acceuil/300x168-acn.png') }}" alt="Logo partenaire">
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
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