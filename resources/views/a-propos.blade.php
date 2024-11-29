@extends('layouts.app')

@section('title', 'a-propos')

@section('content')
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
@endsection