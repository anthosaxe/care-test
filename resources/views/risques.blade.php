<!-- name: Page type -->
<!DOCTYPE html>
<html lang="zxx">

<head>
    <!-- metas -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <link rel='alternate' hreflang='fr'>
    <!-- title  -->
    <title>Risques - Care-test</title>
    <meta property="og:title" content="Risques - Care-test" />
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
    <section class="banner-type bg_cover rel" style="background-image: url('{{ asset('media/a propos/1920x935-8.png') }}')">
        <div class="filtre abs"></div>
        <h1 class="abs">Risques</h1>
    </section>
    <div class="container container-type px-4">
        <h3 id="diabete">
            <strong>
                <span style="color: #008080;">Qu'est-ce que le diabète ?&nbsp;</span>
            </strong>
        </h3>
        <p>
            <span style="color: #003366;">
                Notre corps a besoin d'énergie pour fonctionner. Nous tirons cette énergie de notre alimentation.
                <span style="color: #000080;">
                    <strong>La source la plus importante d'énergie est le glucose.</strong>
                </span>
            </span>
        </p>
        <p>
            <span style="color: #003366;">
                <span style="color: #000080;">
                    <strong>Pour pouvoir utiliser le glucose, nos cellules ont besoin d'une clé: l'insuline.</strong>
                </span>
                Si l'insuline ne fonctionne pas correctement, le glucose ne peut pas pénétrer dans les cellules et reste dans le sang. Trop de sucre dans le sang est mauvais pour la santé.
            </span>
        </p>
        <p>
            <span style="color: #003366;">
                <span style="color: #000080;">
                    <strong>Chez les patients diabétiques, le corps produit trop peu d'insuline.</strong>
                </span>
                De plus, l'insuline produite est souvent moins efficace. Dans les deux cas, le glucose s'accumule dans le sang.
                <span style="color: #000080;">
                    <strong>Le taux de glucose devient trop élevé</strong>
                </span>
                (hyperglycémie).&nbsp;
            </span>
        </p>
        <div class="row mainRow bootstrapElement">
            <div class="bootstrapElement col-12 col-md-6">
                <img style="height: 450px; display: block; margin-left: auto; margin-right: auto;" alt="" src="{{ asset('media/risques/1920x3013-glycmie-cropped-cropped.jpg') }}" />
            </div>
            <img style="height: 450px; display: block; margin-left: auto; margin-right: auto;" alt="" src="{{ asset('media/risques/1920x1588-glycmie-cropped.jpg') }}" />
        </div>
        <h3 style="font-size: 1.3em;">
            <span style="color: #008080;">Les complications du diabète</span>
        </h3>
        <p>
            <span style="color: #003366;">
                Trop de sucre dans votre sang peut affecter les nerfs et les vaisseaux sanguins. Les conséquences ne sont pas toujours visibles immédiatement. Au début, le diabète est souvent
                <span style="color: #000080;">
                    <strong>silencieux</strong>
                    et <strong>sans symptômes</strong>
                    .
                </span>
                Vous ne remarquez rien.
            </span>
        </p>
        <p>
            <span style="color: #003366;">
                De manière
                <span style="color: #000080;">
                    <strong>répétée et prolongée</strong>
                </span>
                , des anomalies peuvent survenir au niveau des nerfs, des yeux, des dents, du cœur, des reins et des pieds. Elles peuvent entraîner la cécité ou l'amputation d'un orteil ou d'un pied. Des complications chroniques sont déjà présentes chez 30% des patients au moment du diagnostic.
            </span>
        </p>
        <p>
            <span style="color: #003366;">
                Les
                <span style="color: #000080;">
                    &nbsp;&nbsp;<strong>complications sévères</strong>
                    &nbsp;&nbsp;
                </span>
                du diabète comprennent :
            </span>
        </p>
        <ul>
            <li>
                <span style="color: #003366;">
                    <span style="color: #3366ff;">Maladie des yeux</span>
                    &mdash;les patients diabétiques ont un risque 23 fois plus élevé de devenir aveugle ;
                </span>
            </li>
            <li>
                <span style="color: #003366;">
                    <span style="color: #3366ff;">Problèmes rénaux </span>
                    &mdash;&nbsp;1/3 des dialyses rénales sont causées par le diabète ;
                </span>
            </li>
            <li>
                <span style="color: #003366;">
                    <span style="color: #3366ff;">Maladies cardiovasculaires &nbsp;</span>
                    &mdash;les patients diabétiques ont un risque 3 à 4 fois plus élevé et 2/3 en meurent ;
                </span>
            </li>
            <li>
                <span style="color: #003366;">
                    <span style="color: #3366ff;">Problèmes de pied </span>
                    &mdash;&nbsp;les patients diabétiques ont un risque d’amputation 15 fois plus élevé.
                </span>
            </li>
        </ul>
        <p>
            <img alt="" src="{{ asset('media/risques/1920x1704-complications-diabte.jpg') }}" style="display: block; margin-left: auto; margin-right: auto;" />
        </p>
        <p></p>
        <h3 id="hypertension">
            <strong>
                <span style="color: #008080;">Qu’est-ce que l’hypertension&nbsp;?</span>
            </strong>
        </h3>
        <p>
            <span style="color: #003366;">On parle d’hypertension artérielle quand le sang circule à trop haute pression dans les artères. Nos artères s’abîment alors lentement comme un tuyau d’arrosage qui se déforme quand la pression de l’eau est trop forte.&nbsp;L’hypertension est confirmée lorsqu’une des deux valeurs est supérieure à la normale :&nbsp;</span>
        </p>
        <ul>
            <li>
                <span style="color: #3366ff;">Pression systolique &gt;140 mm Hg&nbsp;</span>
            </li>
            <li>
                <span style="color: #3366ff;">Pression diastolique &lt;90 mm Hg&nbsp;</span>
            </li>
        </ul>
        <div>
            <p>
                <span style="color: #003366;">
                    <span style="color: #3366ff;">
                        <span style="color: #000080;">
                            <strong>L’hypertension est une maladie silencieuse</strong>
                            .
                        </span>
                        &nbsp;
                    </span>
                    Elle peut se développer longtemps sans symptômes. Son dépistage repose sur des mesures régulières de la pression artérielle.&nbsp;Les conséquences de l’hypertension sont :&nbsp;
                </span>
            </p>
            <ul>
                <li>
                    <span style="color: #003366;">Rigidifie et fragilise les parois des artères, ce qui favorise la formation des plaques d’athérome.&nbsp;</span>
                </li>
                <li>
                    <span style="color: #003366;">Fragilise les plaques d’athérome qui bouchent les artères. Lorsque des fragments de ces plaques&nbsp;</span>
                    <br />
                    <span style="color: #003366;">se détachent, ils peuvent provoquer des accidents cardiovasculaires.&nbsp;</span>
                </li>
                <li>
                    <span style="color: #003366;">Augmente le travail du cœur qui se fatigue.</span>
                </li>
            </ul>
            <p>
                <img alt="" src="/CMS/content/images/202109/1920x1042-hypertension.jpg" style="display: block; margin-left: auto; margin-right: auto;" />
            </p>
            <h3 style="font-size: 1.3em;">
                <span style="color: #008080;">Les complications de l’hypertension&nbsp;?</span>
            </h3>
            <ul>
                <li>
                    <span style="color: #003366;">
                        <span style="color: #000080;">
                            <span style="color: #3366ff;">Crise cardiaque </span>
                            &ndash;
                        </span>
                        Lorsque l’apport sanguin au muscle cardiaque est insuffisant ;&nbsp;
                    </span>
                </li>
                <li>
                    <span style="color: #003366;">
                        <span style="color: #3366ff;">Accident vasculaire cérébral</span>
                        &ndash;Lorsque les vaisseaux sanguins se bouchent ou éclatent ;&nbsp;
                    </span>
                </li>
                <li>
                    <span style="color: #003366;">
                        <span style="color: #3366ff;">Insuffisance cardiaque</span>
                        &ndash;Lorsque le cœur ne pompe plus suffisamment pour faire circuler le sang ;
                    </span>
                </li>
                <li>
                    <span style="color: #003366;">
                        <span style="color: #3366ff;">Insuffisance rénale</span>
                        &ndash;Lorsque les reins ne filtrent plus correctement le sang ;
                    </span>
                </li>
                <li>
                    <span style="color: #003366;">
                        <span style="color: #3366ff;">Rétinopathie</span>
                        &ndash;Lorsque les vaisseaux sanguins de la rétine sont endommagés.
                    </span>
                </li>
            </ul>
        </div>
    </div>

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