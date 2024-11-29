@extends('layouts.app')

@section('title', 'conseils')

@section('content')
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
@endsection