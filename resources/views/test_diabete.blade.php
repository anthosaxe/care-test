@extends('layouts.app_footerless')

@section('title', 'risque-maladies-cardiovasculaires')

@section('content')
<div class="abs left"></div>
<div class="abs right"></div>
<div class="abs countPage d-none"></div>

<form action="?" class="myform rel">

    <div class="question toNext rel bg_cover" style="background-image: url('{{ asset('media/A propos/1920x935-8.png') }}'); filter: opacity(0.5);">

        <h1 class="mb-4">Évaluez votre <br><span>risque</span> de <span>diabète</span></h1>
        <p class="text_form">
        <p>R&eacute;pondez &agrave; 8 questions afin d'&eacute;valuer vos risques de d&eacute;velopper du diab&egrave;te et obtenez vos r&eacute;sultats en moins de 5 minutes.</p>
        </p>
        <div class="first buton mt-lg-5 mt-4 rel">
            <p class="abs">Commencer le questionnaire</p>
            <div class="round abs"></div>
        </div>
    </div>
    <div class="question second toNext rel">

        <h2>1. Quel <span>âge</span> avez-vous ?</h2>
        <div class="container d-flex justify-content-center flex-column align-items-center">

            <div class="d-flex flex-column">
                <span>
                    <input type="radio" name="age" value="0" id="m35" />
                    <label for="m35">Moins de <span>35</span> ans</label>
                </span>
                <span>
                    <input type="radio" name="age" value="1" id="35/44" />
                    <label for="35/44">Entre <span>35</span> et <span>44</span> ans</label>
                </span>
                <span>
                    <input type="radio" name="age" value="2" id="45/54" />
                    <label for="45/54">Entre <span>45</span> et <span>54</span> ans</label>
                </span>
                <span>
                    <input type="radio" name="age" value="3" id="55/64" />
                    <label for="55/64">Entre <span>55</span> et <span>64</span> ans</label>
                </span>
                <span>
                    <input type="radio" name="age" value="4" id="p64" />
                    <label for="p64">Plus de <span>64</span> ans</label>
                </span>
            </div>
        </div>
    </div>

    <div class="question toNext">

        <h2 class="rel text-center"><img class="back abs d-none" src="{{ asset('media/arrow-back.svg') }}" alt="Retour">2. Un membre de votre famille <span>est-il atteint de diabète</span> ?</h2>
        <div class="diabete-question2 container container-questions d-flex justify-content-center flex-column align-items-center other">
            <div class="d-flex flex-column">
                <span>
                    <input type="radio" name="atteint" value="0" id="dia1" />
                    <label for="dia1">Non</label>
                </span>
                <span class="line-height">
                    <input type="radio" name="atteint" value="3" id="dia2" />
                    <label for="dia2">Oui, parmis <span>mes parents éloignés</span></label>
                    <p class="small">soit grands-parents, tantes, oncles, cousins, ...</p>
                </span>
                <span class="line-height">
                    <input type="radio" name="atteint" value="5" id="dia3" />
                    <label for="dia3">Oui, parmis <span>mes proches parents</span></label>
                    <p class="small">soit père, mère, enfants, sœur, frères</p>
                </span>
            </div>
        </div>
    </div>

    <div class="question toNext rel">

        <h2 class="rel"><img class="back abs d-none" src="{{ asset('media/arrow-back.svg') }}" alt="Retour">3. Quel est <span>votre taille au niveau du nombril ?</h2>
        <div class="container container-questions d-flex flex-column">

            <div class="row">

                <div class="col-md-6 col-12 pl5 d-md-block d-flex flex-column">
                    <div class="container3">
                        <div class="container3In">
                            <h4>Homme</h4>
                            <span class="w-100">
                                <input type="radio" name="taille" value="0" id="tai1" />
                                <label for="tai1"><span>Moins</span> de 94 cm</label>
                            </span>
                            <span class="w-100">
                                <input type="radio" name="taille" value="3" id="tai2" />
                                <label for="tai2">94 — 102cm</label>
                            </span>
                            <span class="w-100">
                                <input type="radio" name="taille" value="4" id="tai3" />
                                <label for="tai3"><span>Plus</span> de 102 cm</label>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-12 d-md-block d-flex flex-column divOther">
                    <div class="container3">
                        <div class="container3In">
                            <h4>Femme</h4>
                            <span class="w-100">
                                <input type="radio" name="taille" value="0" id="tai4" />
                                <label for="tai4"><span>Moins</span> de 80 cm</label>
                            </span>
                            <span class="w-100">
                                <input type="radio" name="taille" value="3" id="tai5" />
                                <label for="tai5">80 — 88cm</label>
                            </span>
                            <span class="w-100">
                                <input type="radio" name="taille" value="4" id="tai6" />
                                <label for="tai6"><span>Plus</span> de 88 cm</label>
                            </span>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <div class="question toNext rel">

        <h2 class="rel"><img class="back abs d-none" src="{{ asset('media/arrow-back.svg') }}" alt="Retour">4. Pratiquez-vous au moins <span>30 min d’activité physique</span> par jour ?</h2>
        <div class="container container-questions d-flex flex-column">
            <div class="row">

                <div class="col-md-6 col-12 d-flex justify-content-md-end justify-content-center pr5">
                    <span>
                        <input type="radio" name="activite" value="0" id="act1" />
                        <label for="act1">Oui</label>
                    </span>
                </div>
                <div class="col-md-6 col-12 d-flex justify-content-md-start justify-content-center pl5">
                    <span>
                        <input type="radio" name="activite" value="2" id="act2" />
                        <label for="act2">Non</label>
                    </span>
                </div>
            </div>
        </div>

    </div>

    <div class="question toNext rel">

        <h2 class="rel"><img class="back abs d-none" src="{{ asset('media/arrow-back.svg') }}" alt="Retour">5. À quelle fréquence mangez-vous des <span>fruits</span> et des <span>légumes ?</span></h2>
        <div class="container container-questions d-flex flex-column">
            <div class="row">
                <div class="col-md-6 col-12 d-flex justify-content-md-end justify-content-center pr5">
                    <span>
                        <input type="radio" name="fruit" value="0" id="fru1" />
                        <label for="fru1">Tous les jours</label>
                    </span>
                </div>
                <div class="col-md-6 col-12 d-flex justify-content-md-start justify-content-center pl5">
                    <span>
                        <input type="radio" name="fruit" value="1" id="fru2" />
                        <label for="fru2">Pas tous les jours</label>
                    </span>
                </div>
            </div>
        </div>

    </div>

    <div class="question toNext rel">

        <h2 class="rel"><img class="back abs d-none" src="{{ asset('media/arrow-back.svg') }}" alt="Retour">6. Vous a-t-on déjà prescrit des <span>médicaments contre l’hypertension</span> ?</h2>
        <div class="container container-questions d-flex flex-column">
            <div class="row">
                <div class="col-md-6 col-12 d-flex justify-content-md-end justify-content-center pr5">
                    <span>
                        <input type="radio" name="tension" value="0" id="hyp1" />
                        <label for="hyp1">Non</label>
                    </span>
                </div>
                <div class="col-md-6 col-12 d-flex justify-content-md-start justify-content-center pl5">
                    <span>
                        <input type="radio" name="tension" value="2" id="hyp2" />
                        <label for="hyp2">Oui</label>
                    </span>
                </div>
            </div>
        </div>

    </div>

    <div class="question toNext rel">

        <h2 class="rel"><img class="back abs d-none" src="{{ asset('media/arrow-back.svg') }}" alt="Retour">7. Vous a-t-on déjà découvert un <span>taux de sucre</span> sanguin <span>élevé ?</h2>
        <div class="container container-questions d-flex flex-column">
            <div class="row">
                <div class="col-md-6 col-12 d-flex justify-content-md-end justify-content-center pr5">
                    <span>
                        <input type="radio" name="sucre" value="0" id="suc1" />
                        <label for="suc1">Non</label>
                    </span>
                </div>
                <div class="col-md-6 col-12 d-flex justify-content-md-start justify-content-center pl5">
                    <span>
                        <input type="radio" name="sucre" value="5" id="suc2" />
                        <label for="suc2">Oui</label>
                    </span>
                </div>
            </div>
        </div>

    </div>
    <div class="question diabete-question8 otherLast rel">


        <div class="container d-flex justify-content-center flex-column align-items-center">
            <h2 class="rel"><img class="back abs d-none" src="{{ asset('media/arrow-back.svg') }}" alt="Retour">8. Quel est votre <span>indice de masse corporelle ?</span>
            </h2>
            <p class="small mb-3">
            <p>L&rsquo;IMC est calcul&eacute; de la fa&ccedil;on suivante : poids corporel (en kg) divis&eacute; par la taille (en m) au carr&eacute;. Il peut &ecirc;tre trouv&eacute; dans des tableaux</p>
            </p>
            <div class="d-flex flex-row align-items-baseline calcul">
                <p>
                <p>Calculer mon IMC</p>
                </p>
                <input class="value1" type="text" name="poids" step='0.01' placeholder="ex: 75">
                <label for="poids">Kg</label>
                <input class="value2" type="text" name="size" step='0.01' placeholder="ex: 1.85">
                <label for="size">m²</label>
                <input class="res1" type="number" disabled="disabled" id="result" step='0.01'>
                <label for="size">Kg/m2</label>
            </div>
            <div class="d-flex flex-column last">
                <span>
                    <input type="radio" name="indice" value="0" id="imc1" />
                    <label for="imc1">Moins de <span>25</span> kg/m2</label>
                </span>
                <span>
                    <input type="radio" name="indice" value="1" id="imc2" />
                    <label for="imc2">Entre <span>25</span> et <span>30</span> kg/m2</label>
                </span>
                <span>
                    <input type="radio" name="indice" value="3" id="imc3" />
                    <label for="imc3">Plus de <span>30</span> kg/m2</label>
                </span>

            </div>
        </div>
    </div>
    <div class="question">
        <div class="container d-flex justify-content-center flex-column align-items-center">

            <div class="row toDownload">
                <h2 class="rel racapTitle"><img class="back abs d-none" src="{{ asset('media/arrow-back.svg') }}" alt="Retour">Récapitulatif</h2>
                <div class="col-md-6 col-12 mx-md-0 mx-1">


                    <h3>1. Votre âge :</h3>
                    <div class="recap one"></div>
                    <h3>2. Membre de la famille atteint de diabète :</h3>
                    <div class="recap two"></div>
                    <h3>3. Taille au niveau du nombril :</h3>
                    <div class="recap three"></div>
                    <h3>4. 30 min d’activité physique par jour :</h3>
                    <div class="recap four"></div>
                </div>
                <div class="col-md-6 col-12 mx-md-0 mx-1">
                    <h3>5. Fréquence de consommation des fruits et des légumes :</h3>
                    <div class="recap five"></div>
                    <h3>6. Prescription des médicaments contre l’hypertension :</h3>
                    <div class="recap six"></div>
                    <h3>7. Taux de sucre sanguin élevé :</h3>
                    <div class="recap seven"></div>
                    <h3>8. Indice de masse corporelle :</h3>
                    <div class="recap height"></div>

                </div>
                <div class="toShow d-none">
                    <h2>
                        <p>Votre risque de d&eacute;velopper un diab&egrave;te de type II est</p>
                    </h2>
                    <div class="resultatFirst text-center"></div>
                </div>

            </div>
            <div class="final text-center buton mt-4 rel">
                <p>Valider le test</p>
                <div class="round abs"></div>
            </div>
        </div>
    </div>
    <div class="question rel votreRisque">
        <h2 class="mb-3">
            <p>Votre risque de d&eacute;velopper un diab&egrave;te de type II est</p>
        </h2>
        <div class="resultat text-center d-flex flex-column align-items-center"></div>

        <div class="download buton rel">
            <p>Télécharger mes résultats</p>
            <div class="round abs"></div>
        </div>
    </div>
</form>
</div>
@endsection