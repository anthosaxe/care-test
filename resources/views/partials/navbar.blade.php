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