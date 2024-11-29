@extends('layouts.app')

@section('title', 'risques')

@section('content')
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
@endsection