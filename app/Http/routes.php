<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/



Route::get('/test', function () {


    return view('test');
});


//ici les controller pour login admin
Route::get('/auth/login','Auth\AuthController@getLogin');
Route::post('/auth/login','Auth\AuthController@postLogin');
Route::get('/auth/logout','Auth\AuthController@getLogout');

//ici les controller pour registre admin
Route::get('/auth/register','Auth\AuthController@getRegister');
Route::post('/auth/register','Auth\AuthController@postRegister');


//ici les controller pour  rendre mot de passe
Route::get('/password/email','Auth\PasswordController@getEmail');
Route::post('/password/email','Auth\PasswordController@postEmail');
Route::get('/password/reset/{token}','Auth\PasswordController@getReset');
Route::post('/password/reset','Auth\PasswordController@postReset');


//authentification sur facebook
Route::get('/auth/facebook','Auth\AuthController@redirectToProvider');
Route::post('/callback','Auth\AuthController@handleProviderCallback');

//ici envoyer email a l'administrateur de site en langue fr
Route::get('contact', 'ContactController@getForm');
Route::post('contact', 'ContactController@postForm');



//ici envoyer email a l'administrateur de site en langue fr
Route::get('ar_contact', 'Ar_contactController@getForm');
Route::post('ar_contact', 'Ar_contactController@postForm');


//ici les route en langue fr
Route::resource('categorie','CategorieController');

Route::resource('admin','CategorieController@admin');

Route::resource('/','AddCategorieHomeController');

Route::resource('souscategorie','SouscategorieController');
Route::resource('indexsouscategorie','SouscategorieController@index');

Route::resource('s_scategorie','S_scategorieController');
Route::resource('indexsoussouscategorie','S_scategorieController@index');

Route::resource('service','ServiceController');
Route::resource('indexservice','ServiceController@index');

Route::resource('actualite','ActualiteController');
Route::resource('indexactualite','ActualiteController@index');

//iciles route en langue arabe

Route::resource('ar_categorie','Ar_categorieController');
Route::resource('ar_souscategorie','Ar_souscategorieController');
Route::resource('ar_s_scategorie','Ar_s_scategorieController');
Route::resource('ar_service','Ar_serviceController');
Route::resource('ar_actualite','Ar_actualiteController');

//ici page d'accueille en arabe
Route::resource('ar_home','Ar_homeController');


//ici les riute affichage en langue arabe
Route::get('ar/{catg}', 'Ar_showcatgController@Showcatg');
Route::get('ar/{catg}/{scatg}', 'Ar_showsouscatgController@Showsouscatg');
Route::get('ar/{catg}/{scatg}/{sscatg}', 'Ar_shows_scatgControlle@Show_s_scatg');

//ici les route afichage  en langue fr
Route::get('{catg}', 'ShowcatgController@Showcatg');
Route::get('{catg}/{scatg}', 'ShowsouscatgController@Showsouscatg');
Route::get('{catg}/{scatg}/{sscatg}', 'Shows_scatgControlle@Show_s_scatg');




