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
    <title>Risques - Care-test</title>
    <meta property="og:title" content="Risques - Care-test" />
    <meta name="description" content="" />
    <base href='https://www.caretest.be/' />
    <!-- favicon -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel='icon' href='CMS/content/logo/favicon.png' />
    <meta property="og:url" content="http://www.caretest.be//fr/risques/" />
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
        <h1 class="abs">Risques</h1>
    </section>
    <div class="container container-type px-4">
        <h3 id="diabete">
            <strong>
                <span style="color: #008080;">Qu'est-ce que le diab&egrave;te ?&nbsp;</span>
            </strong>
        </h3>
        <p>
            <span style="color: #003366;">
                Notre corps a besoin d &rsquo;&eacute;nergie pour fonctionner. Nous tirons cette &eacute;nergie de notre alimentation.
                <span style="color: #000080;">
                    <strong>La source la plus importante d &rsquo;&eacute;nergie est le glucose.</strong>
                </span>
            </span>
        </p>
        <p>
            <span style="color: #003366;">
                <span style="color: #000080;">
                    <strong>Pour pouvoir utiliser le glucose, nos cellules ont besoin d &rsquo;une cl &eacute;: l &rsquo;insuline.</strong>
                </span>
                Si l &rsquo;insuline ne fonctionne pas correctement, le glucose ne peut pas p &eacute;n &eacute;trer dans les cellules et reste dans le sang. Trop de sucre dans le sang est mauvais pour la sant &eacute;.
            </span>
        </p>
        <p>
            <span style="color: #003366;">
                <span style="color: #000080;">
                    <strong>Chez les patients diab &eacute;tiques, le corps produit trop peu d &rsquo;insuline.</strong>
                </span>
                De plus, l &rsquo;insuline produite est souvent moins efficace. Dans les deux cas, le glucose s &rsquo;accumule dans le sang.
                <span style="color: #000080;">
                    <strong>Le taux de glucose devient trop &eacute;lev &eacute;</strong>
                </span>
                (hyperglyc &eacute;mie).&nbsp;
            </span>
        </p>
        <div class="row mainRow bootstrapElement">
            <div class="bootstrapElement col-12 col-md-6">
                <img style="height: 450px; display: block; margin-left: auto; margin-right: auto;" alt="" src="/CMS/content/images/202109/1920x3013-glycmie-cropped-cropped.jpg" />
            </div>
            <img style="height: 450px; display: block; margin-left: auto; margin-right: auto;" alt="" src="/CMS/content/images/202109/1920x1588-glycmie-cropped.jpg" />
        </div>
        <h3 style="font-size: 1.3em;">
            <span style="color: #008080;">Les complications du diab &egrave;te</span>
        </h3>
        <p>
            <span style="color: #003366;">
                Trop de sucre dans votre sang peut affecter les nerfs et les vaisseaux sanguins. Les cons &eacute;quences ne sont pas toujours visibles imm &eacute;diatement. Au d &eacute;but, le diab &egrave;te est souvent
                <span style="color: #000080;">
                    <strong>silencieux</strong>
                    et <strong>sans sympt &ocirc;mes</strong>
                    .
                </span>
                Vous ne remarquez rien.
            </span>
        </p>
        <p>
            <span style="color: #003366;">
                De mani &egrave;re
                <span style="color: #000080;">
                    <strong>r &eacute;p &eacute;t &eacute;e et prolong &eacute;e</strong>
                    ,
                </span>
                des anomalies peuvent survenir au niveau des nerfs, des yeux, des dents, du c &oelig;ur, des reins et des pieds. Elles peuvent entra &icirc;ner la c &eacute;cit &eacute;ou l &rsquo;amputation d &rsquo;un orteil ou d &rsquo;un pied. Des complications chroniques sont d &eacute;j &agrave;pr &eacute;sentes chez 30% des patients au moment du diagnostic.
            </span>
        </p>
        <p>
            <span style="color: #003366;">
                Les
                <span style="color: #000080;">
                    &nbsp;&nbsp;<strong>complications s &eacute;v &egrave;res</strong>
                    &nbsp;&nbsp;
                </span>
                du diab &egrave;te comprennent :
            </span>
        </p>
        <ul>
            <li>
                <span style="color: #003366;">
                    <span style="color: #3366ff;">Maladie des yeux</span>
                    &mdash;les patients diab &eacute;tiques ont un risque 23 fois plus &eacute;lev &eacute;de devenir aveugle ;
                </span>
            </li>
            <li>
                <span style="color: #003366;">
                    <span style="color: #3366ff;">Probl &egrave;mes r &eacute;naux </span>
                    &mdash;&nbsp;1/3 des dialyses r &eacute;nales sont caus &eacute;es par le diab &egrave;te ;
                </span>
            </li>
            <li>
                <span style="color: #003366;">
                    <span style="color: #3366ff;">Maladies cardiovasculaires &nbsp;</span>
                    &mdash;les patients diab &eacute;tiques ont un risque 3 &agrave;4 fois plus &eacute;lev &eacute;et 2/3 en meurent ;
                </span>
            </li>
            <li>
                <span style="color: #003366;">
                    <span style="color: #3366ff;">Probl &egrave;mes de pied </span>
                    &mdash;&nbsp;les patients diab &eacute;tiques ont un risque d &rsquo;amputation 15 fois plus &eacute;lev &eacute;.
                </span>
            </li>
        </ul>
        <p>
            <img alt="" src="/CMS/content/images/202109/1920x1704-complications-diabte.jpg" style="display: block; margin-left: auto; margin-right: auto;" />
        </p>
        <p></p>
        <h3 id="hypertension">
            <strong>
                <span style="color: #008080;">Qu &rsquo;est-ce que l &rsquo;hypertension &nbsp;?</span>
            </strong>
        </h3>
        <p>
            <span style="color: #003366;">On parle d &rsquo;hypertension art &eacute;rielle quand le sang circule &agrave;trop haute pression dans les art &egrave;res. Nos art &egrave;res s &rsquo;ab &icirc;ment alors lentement comme un tuyau d &rsquo;arrosage qui se d &eacute;forme quand la pression de l &rsquo;eau est trop forte.&nbsp;L &rsquo;hypertension est confirm &eacute;e lorsqu &rsquo;une des deux valeurs est sup &eacute;rieure &agrave;la normale :&nbsp;</span>
        </p>
        <ul>
            <li>
                <span style="color: #3366ff;">Pression systolique &gt;140 mm Hg &nbsp;</span>
            </li>
            <li>
                <span style="color: #3366ff;">Pression diastolique &lt;90 mm Hg &nbsp;</span>
            </li>
        </ul>
        <div>
            <p>
                <span style="color: #003366;">
                    <span style="color: #3366ff;">
                        <span style="color: #000080;">
                            <strong>L &rsquo;hypertension est une maladie silencieuse</strong>
                            .
                        </span>
                        &nbsp;
                    </span>
                    Elle peut se d &eacute;velopper longtemps sans sympt &ocirc;mes. Son d &eacute;pistage repose sur des mesures r &eacute;guli &egrave;res de la pression art &eacute;rielle.&nbsp;Les cons &eacute;quences de l &rsquo;hypertension sont :&nbsp;
                </span>
            </p>
            <ul>
                <li>
                    <span style="color: #003366;">Rigidifie et fragilise les parois des art &egrave;res, ce qui favorise la formation des plaques d &rsquo;ath &eacute;rome.&nbsp;</span>
                </li>
                <li>
                    <span style="color: #003366;">Fragilise les plaques d &rsquo;ath &eacute;rome qui bouchent les art &egrave;res. Lorsque des fragments de ces plaques &nbsp;</span>
                    <br />
                    <span style="color: #003366;">se d &eacute;tachent, il peuvent provoquer des accidents cardiovasculaires.&nbsp;</span>
                </li>
                <li>
                    <span style="color: #003366;">Augmente le travail du coeur qui se fatigue.</span>
                </li>
            </ul>
            <p>
                <img alt="" src="/CMS/content/images/202109/1920x1042-hypertension.jpg" style="display: block; margin-left: auto; margin-right: auto;" />
            </p>
            <h3 style="font-size: 1.3em;">
                <span style="color: #008080;">&nbsp;Les complications de l &rsquo;hypertension &nbsp;?</span>
            </h3>
            <ul>
                <li>
                    <span style="color: #003366;">
                        <span style="color: #000080;">
                            <span style="color: #3366ff;">Crise cardiaque </span>
                            &ndash;
                        </span>
                        Lorsque l &rsquo;apport sanguin au muscle cardiaque est insuffisant ;&nbsp;
                    </span>
                </li>
                <li>
                    <span style="color: #003366;">
                        <span style="color: #3366ff;">Accident vasculaire c &eacute;r &eacute;bral</span>
                        &ndash;Lorsque les vaisseaux sanguins se bouchent ou &eacute;clatent ;&nbsp;
                    </span>
                </li>
                <li>
                    <span style="color: #003366;">
                        <span style="color: #3366ff;">Insuffisance cardiaque</span>
                        &ndash;Lorsque le c &oelig;ur ne pompe plus suffisamment pour faire circuler le sang, il n &rsquo;est plus en mesure de fournir suffisamment d &rsquo;oxyg &egrave;ne au corps ;&nbsp;
                    </span>
                    <br />
                    <span style="color: #003366;">Insuffisance r &eacute;nale &ndash;Lorsque les art &egrave;res qui m &egrave;nent aux reins r &eacute;tr &eacute;cissent, ils filtrent moins bien le sang ;&nbsp;</span>
                </li>
                <li>
                    <span style="color: #003366;">
                        <span style="color: #3366ff;">C &eacute;cit &eacute;</span>
                        &ndash;Lorsque les vaisseaux sanguins des yeux sont affect &eacute;s ;&nbsp;
                    </span>
                </li>
                <li>
                    <span style="color: #003366;">
                        <span style="color: #3366ff;">Probl &egrave;mes sexuels</span>
                        &ndash;Provoque une dysfonction &eacute;rectile masculine ou une baisse de la libido;&nbsp;
                    </span>
                </li>
                <li>
                    <span style="color: #003366;">
                        <span style="color: #3366ff;">Art &eacute;rioscl &eacute;rose </span>
                        &ndash;Un r &eacute;tr &eacute;cissement des veines peut causer de la douleur et de la fatigue et est fr &eacute;quent dans les jambes, les bras, l &rsquo;estomac et la t &ecirc;te.&nbsp;
                    </span>
                </li>
            </ul>
            <p>
                <img alt="" src="/CMS/content/images/202109/1920x1551-complications-hypertension.jpg" style="display: block; margin-left: auto; margin-right: auto;" />
            </p>
            <h3 id="facteurs" style="font-size: 1.3em;">
                <span style="color: #008080;">Quels sont les facteurs de risque &nbsp;?</span>
            </h3>
            <p>
                <img alt="" src="/CMS/content/images/202109/1920x1072-facteurs-de-risque.jpg" style="display: block; margin-left: auto; margin-right: auto;" />
            </p>
            <p class="en-tete">
                <span style="color: #ff9900;">
                    <strong>ANT &Eacute;C &Eacute;DENTS FAMILIAUX + ETHNIE</strong>
                </span>
            </p>
            <p>
                <span style="color: #003366;">
                    Certains groupes ethniques, tels que les personnes
                    <strong>
                        d<span style="color: #000080;">&rsquo;origine sud-asiatique, turque et nord-africaine</span>
                    </strong>
                    , sont plus susceptibles de d &eacute;velopper un diab &egrave;te de type 2 et une maladie cardiovasculaire. Si
                    <span style="color: #000080;">
                        <strong>un membre de votre famille proche</strong>
                    </span>
                    (p &egrave;re, m &egrave;re, fr &egrave;re ou s &oelig;ur) a un diab &egrave;te de type 2 ou un ant &eacute;c &eacute;dent de maladies cardiovasculaires, vous &ecirc;tes plus susceptible d &rsquo;en souffrir vous-m &ecirc;me.
                </span>
            </p>
            <p>
                <img alt="" src="/CMS/content/images/202109/1920x1358-antcdents-familiaux.jpg" style="display: block; margin-left: auto; margin-right: auto;" />
            </p>
            <p>
                <span style="color: #3366ff;">
                    <strong>Bonne nouvelle !</strong>
                </span>
            </p>
            <p>
                <span style="color: #003366;">M &ecirc;me si des membres de votre famille souffrent de diab &egrave;te et/ou de maladies cardiovasculaires, vous pouvez r &eacute;duire votre risque en faisant un peu plus d &rsquo;exercice et en mangeant sainement.&nbsp;</span>
            </p>
            <p class="en-tete">
                <span style="color: #ff9900;">
                    <strong>ANT &Eacute;C &Eacute;DENTS DE GLYC &Eacute;MIE &Eacute;LEV &Eacute;E &nbsp;</strong>
                </span>
            </p>
            <p>
                <span style="color: #003366;">
                    Une &nbsp;
                    <span style="color: #000080;">
                        <strong>glyc &eacute;mie &eacute;lev &eacute;e</strong>
                    </span>
                    , &agrave;cause d &rsquo;une alt &eacute;ration temporaire du m &eacute;tabolisme du glucose due &agrave;une intervention chirurgicale ou &agrave;une inflammation,
                    <span style="color: #000080;">
                        <strong>multiplie respectivement le risque de diab &egrave;te de 7,5 &agrave;5 fois</strong>
                        .
                    </span>
                    &nbsp;Si vous avez eu du
                    <span style="color: #000080;">
                        <strong>diab &egrave;te pendant la grossesse</strong>
                    </span>
                    (diab &egrave;te gestationnel), le risque peut m &ecirc;me &ecirc;tre
                    <span style="color: #000080;">
                        <strong>jusqu &rsquo;&agrave;10 fois plus &eacute;lev &eacute;</strong>
                        .&nbsp;
                    </span>
                </span>
            </p>
            <p>
                <img alt="" src="/CMS/content/images/202109/1920x1178-antcdents-dune-glycmie.jpg" style="display: block; margin-left: auto; margin-right: auto;" />
            </p>
            <p class="en-tete">
                <span style="color: #ff9900;">
                    <strong>TABAC</strong>
                </span>
            </p>
            <p>
                <span style="color: #003366;">
                    Le tabagisme est le
                    <span style="color: #000080;">
                        <strong>facteur de risque principal d &rsquo;ath &eacute;roscl &eacute;rose</strong>
                    </span>
                    .&nbsp;Il
                    <span style="color: #000080;">
                        <strong>alt &egrave;re</strong>
                    </span>
                    &eacute;galement
                    <span style="color: #000080;">
                        <strong>les m &eacute;canismes li &eacute;s &agrave;la production de l &rsquo;insuline et au transport du glucose</strong>
                    </span>
                    vers les cellules.&nbsp;
                    <span style="color: #000080;">
                        <strong>Arr &ecirc;ter de fumer r &eacute;duit imm &eacute;diatement les risques de diab &egrave;te et de maladies cardiovasculaires</strong>
                        .
                    </span>
                    &nbsp;Le tabagisme passif augmente &eacute;galement le risque de diab &egrave;te.
                </span>
            </p>
            <p>
                <img alt="" src="/CMS/content/images/202109/1920x1076-tabac.jpg" style="display: block; margin-left: auto; margin-right: auto;" />
            </p>
            <p class="en-tete">
                <span style="color: #3366ff;">
                    <strong>Le saviez-vous ?</strong>
                </span>
            </p>
            <p>
                <span style="color: #003366;">Les gros fumeurs sont m &ecirc;me 2 fois plus susceptibles de d &eacute;velopper le diab &egrave;te de type 2.</span>
            </p>
            <p class="en-tete">
                <span style="color: #ff9900;">
                    <strong>SURPOIDS ET TOUR DE TAILLE</strong>
                </span>
            </p>
            <p>
                <span style="color: #003366;">
                    Si vous avez un
                    <span style="color: #000080;">
                        <strong>tour de taille &eacute;lev &eacute;</strong>
                    </span>
                    , vous &ecirc;tes plus susceptible de d &eacute;velopper un diab &egrave;te de type 2.
                    <span style="color: #000080;">
                        <strong>La graisse abdominale s &eacute;cr &egrave;te des substances nocives pour votre corps qui rendent l &rsquo;insuline moins efficace</strong>
                        .
                    </span>
                    &nbsp;De cette mani &egrave;re, le surpoids peut mener au diab &egrave;te de type 2.&nbsp;
                    <span style="color: #000080;">
                        <strong>Le risque de diab &egrave;te de type 2 diminue imm &eacute;diatement si vous perdez du poids</strong>
                        .
                    </span>
                    M &ecirc;me quelques kilos en moins sont b &eacute;n &eacute;fiques pour votre sant &eacute;.&nbsp;
                </span>
            </p>
            <p>
                <img alt="" src="/CMS/content/images/202109/1920x2313-tour-de-taille.jpg" style="display: block; margin-left: auto; margin-right: auto; height: 400px;" />
            </p>
            <p class="en-tete">
                <span style="color: #3366ff;">
                    <strong>Bonne nouvelle !&nbsp;</strong>
                </span>
            </p>
            <p>
                <span style="color: #003366;">Une diminution de plus de 5% du poids corporel est associ &eacute;e &agrave;une r &eacute;duction de 69% du risque de diab &egrave;te.&nbsp;Une diminution du poids corporel entre 2,5 et 5% r &eacute;duit le risque de diab &egrave;te de 28%.&nbsp;</span>
            </p>
            <p>
                <img alt="" src="/CMS/content/images/202109/1920x1866-bmi.jpg" style="display: block; margin-left: auto; margin-right: auto;" />
            </p>
        </div>
        <p></p>
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