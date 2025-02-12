<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EtudiantController;

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

/* Route::get('/', function () {
    return view('welcome');
}); */

route::get('/etudiant',[EtudiantController::class, 'liste_etudiant']);
route::get('/ajouter',[EtudiantController::class, 'ajouter_etudiant']);
route::post('/ajouter/traitement',[EtudiantController::class, 'ajouter_etudiant_traitement']);

