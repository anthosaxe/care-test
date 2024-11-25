<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    // Méthode pour la page "À propos"
    public function aPropos()
    {
        return view('a-propos'); // Correspond à resources/views/a-propos.blade.php
    }

    public function acceuil()
    {
        return view('accueil'); // Correspond au fichier resources/views/acceuil.blade.php
    }

    public function conseils()
    {
        return view('conseils'); // Correspond au fichier resources/views/acceuil.blade.php
    }

    public function risques()
    {
        return view('risques'); // Correspond au fichier resources/views/acceuil.blade.php
    }

    public function risque_cardio()
    {
        return view('risque_cardio'); // Correspond au fichier resources/views/acceuil.blade.php
    }

    public function test_diabete()
    {
        return view('test_diabete'); // Correspond au fichier resources/views/acceuil.blade.php
    }

    public function medecins_praticien()
    {
        return view('medecins_praticien'); // Correspond au fichier resources/views/acceuil.blade.php
    }

}
