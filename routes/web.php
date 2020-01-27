<?php

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
//use Carbon\Carbon;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/app2', function () {
    return view('layouts.app2');
});
Route::get('/register2', function () {
    return view('layouts.register2');
});
//Route::get('/accueil','AccueilsController@create');

//Route::get('/inscription', function () {
  //  return view('pages.inscription');
//});

Route::get('/nav', function () {
    return view('pages.nav');
});
Route::get('/statistique', function () {
   return view('pages.statistique');
});
//-----------------------------------------
Route::get('/Engin', function () {
   return view('pages.Engin');
});

//-----------------------------------------
Route::get('/partenaire', function () {
   return view('pages./partenaire');
});
//-----------------------------------------
Route::get('/modal', function () {
   return view('pages.modal');
});

//-----------------------------------------
Route::get('/accueil', function () {
   return view('pages.accueil');
});

Route::get('/tab','TableausController@create');
//Route::get('/tab', );
Route::get('/Engin','EnginsController@create');
Route::post('/Engin','EnginsController@store');
//-------------------------
//Route::get('/tab', );
Route::get('/visiteur','VisiteurController@create');
Route::post('/visiteur','VisiteurController@store');




//Route::any('/visiteur', 
//'VisiteurController@store' 
//);

Route::get('/scanner','ScannersController@create');
//Route::get('/scanner', );

Route::get('/engin','EnginsController@create');
//Route::get('/engin', );

Route::any('/modal', 
'ModalController@create' 
);

//Route::get('/val', function () {
 //   return view('pages.carte_valide');
//});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
