<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/inscription', 'App\Http\Controllers\InscriptionController@formulaire');
Route::post('/inscription', 'App\Http\Controllers\InscriptionController@traitement');

Route::get('/connexion', 'App\Http\Controllers\ConnexionController@formulaire');
Route::post('/connexion', 'App\Http\Controllers\ConnexionController@traitement');

Route::get('/utilisateurs', 'App\Http\Controllers\UtilisateursController@liste');

Route::get ('/mon-compte', 'App\Http\Controllers\CompteController@accueil');
Route::get('/deconnexion', 'App\Http\Controllers\CompteController@deconnexion');
Route::post('/modification-mot-de-passe', 'App\Http\Controllers\CompteController@modificationPseudo');
Route::post('/modification-mot-de-passe', 'App\Http\Controllers\CompteController@modificationEmail');
Route::post('/modification-mot-de-passe', 'App\Http\Controllers\CompteController@modificationMotDePasse');