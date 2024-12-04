@extends('layouts.app_footerless')

@section('title', 'risque-maladies-cardiovasculaires')

@section('content')
<div class="container-test rel">
    <div class="abs left">-Test</div>
    <div class="abs right">Care-</div>
    <div class="abs countPage d-none"></div>

    <form action="?" class="myform2 rel">

        <div class="question toNext rel bg_cover" style="background-image: url('{{ asset('media/A propos/1920x935-8.png') }}'); filter: opacity(0.5);">

            <h1 class="mb-4">Évaluez votre <span>risque</span> de contracter des <span>maladies cardiovasculaires</span></h1>
            <p class="text_form"></p>
            <div class="first buton mt-5 rel">
                <p class="abs">Commencer le test</p>
                <div class="round abs"></div>
            </div>
        </div>
        <div class="question second toNext rel">

            <h2>Êtes-vous un <span>homme</span> ou une <span>femme</span> ?</h2>
            <div class="container d-flex justify-content-center flex-column align-items-center">

                <div class="d-flex flex-column">
                    <span>
                        <input type="radio" name="sexe" value="homme" id="homme" />
                        <label for="homme">Homme</label>
                    </span>
                    <span>
                        <input type="radio" name="sexe" value="femme" id="femme" />
                        <label for="femme">Femme</label>
                    </span>
                </div>
            </div>
        </div>

        <div class="question toNext">

            <h2 class="rel text-center"><img class="back abs d-none" src="{{ asset('media/arrow-back.svg') }}" alt="Retour">Êtes-vous <span>fumeur</span> ?</h2>
            <div class="container container-questions d-flex justify-content-center flex-column align-items-center other">
                <div class="d-flex flex-column">
                    <span>
                        <input type="radio" name="fumeur" value="fumeur" id="fumeur" />
                        <label for="fumeur">Oui</label>
                    </span>
                    <span>
                        <input type="radio" name="fumeur" value="non-fumeur" id="non-fumeur" />
                        <label for="non-fumeur">Non</label>
                    </span>
                </div>
            </div>
        </div>

        <div class="question toNext">

            <h2 class="rel text-center"><img class="back abs d-none" src="{{ asset('media/arrow-back.svg') }}" alt="Retour">Quel <span>âge</span> avez-vous ?</h2>
            <div class="container container-questions d-flex justify-content-center flex-column align-items-center lastCardio">
                <div class="d-flex flex-column">
                    <span>
                        <input type="radio" name="age2" value="40" id="40" />
                        <label for="40">Moins de <span>40</span> ans</label>
                    </span>
                    <span>
                        <input type="radio" name="age2" value="50" id="50" />
                        <label for="50">Entre <span>40</span> et <span>50</span> ans</label>
                    </span>
                    <span>
                        <input type="radio" name="age2" value="55" id="55" />
                        <label for="55">Entre <span>50</span> et <span>55</span> ans</label>
                    </span>
                    <span>
                        <input type="radio" name="age2" value="60" id="60" />
                        <label for="60">Entre <span>55</span> et <span>60</span> ans</label>
                    </span>
                    <span>
                        <input type="radio" name="age2" value="65" id="65" />
                        <label for="65">Plus de <span>65</span> ans</label>
                    </span>
                </div>
            </div>
        </div>

        <div class="question rel">
            <h1 class="mb-4">Votre <span>risque</span> en pourcentage</h1>
            <div class="votreRisqueVasculaire rel my-3">
                <div class="axe-mobile">
                    <div class="cardio-popup">
                        <img style="min-width: 200%;" class="abs cardio-img d-none" src="{{ asset('media/risque_cardio/help-lecture2.png') }}" alt="">
                    </div>
                </div>
            </div>
            <div class="cardio-help d-flex justify-content-center flex-column align-items-center mt-3">
                <div class="d-flex mb-3">
                    <div class="popup-click mr-2">Comment lire votre pourcentage de risque ?</div>
                    <div class="popup-click-2">Je ne connais pas ma tension et mon taux de cholestérol. Comment puis-je faire ?</div>
                </div>
                <div class="w-75 text-center popup-wrapper d-none">
                    <p>Exemple : Ma dernière mesure de tension artérielle était de 158 mmHg et la dernière prise de sang avait un cholesterol à 230 mg/dl Mon risque est de 6, j'ai donc 6% de chances d'avoir un accident cardiovasculaire fatal dans les 10 prochaine années.</p>
                </div>
                <div class="w-75 text-center popup-wrapper-2 d-none">
                    <ul>
                        <li>A la pharmacie : Votre pharmacien peut prendre votre tension artérielle lorsque vous le désirez. Un autotest pour le cholestérol existe et votre pharmacien peut vous conseiller et vous aider dans son interprétation. Je visite <a href="https://www.pharmacie.be/fr/Pages/default.aspx" target="_blank">mon pharmacien le plus proche</a>.
                        </li>
                        <li>En consultation médicale : Lors de votre prochaine visite, n’hésitez pas à demander à votre médecin de prendre votre tension et de demander votre taux de cholestérol. Je souhaite <a href="{{ route('medecins_praticien') }}" target="_blank">consulter un médecin généraliste</a>.</li>
                    </ul>
                </div>
            </div>
            <div class="cardio-help-mobile d-none justify-content-center flex-column align-items-center mt-3">
            <div class="help-pdf mr-2"><a target="_blank" href="{{ asset('media/risque_cardio/help-lecture2.png') }}">Comment lire votre pourcentage de risque ? (PDF à télécharger)</a></div>
            </div>
        </div>
    </form>
</div>
@endsection