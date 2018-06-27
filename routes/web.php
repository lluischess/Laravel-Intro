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

// view welcome
Route::get('/', function () {
    return view('Welcome');
});
// view benvingut
// Route::get('benvingut', function () {
//     return view('benvingut')->with('user', "Usuari1");
// });
// Route::get('hello/{nom}', function ($nom) {
//     return view($nom .'hello');
// });
// Route::get('about', function () {
//     return view('about')->with('numberCats', 150);
// });
Route::get('benvingut/{user}', function ($user) {
    return view('benvingut')->with('user', $user);
});

