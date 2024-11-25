<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('accueil');
});

use App\Http\Controllers\PageController;

Route::get('/a-propos', [PageController::class, 'aPropos'])->name('a-propos');
Route::get('/acceuil', [PageController::class, 'acceuil'])->name('acceuil');
Route::get('/conseils', [PageController::class, 'conseils'])->name('conseils');
Route::get('/risques', [PageController::class, 'risques'])->name('risques');
Route::get('/test_diabete', [PageController::class, 'test_diabete'])->name('test_diabete');
Route::get('/risque_cardio', [PageController::class, 'risque_cardio'])->name('risque_cardio');
Route::get('/medecins_praticien', [PageController::class, 'medecins_praticien'])->name('medecins_praticien');