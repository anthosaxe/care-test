@extends('layouts.app')

@section('title', 'Acceuil')

@section('content')
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
@endsection