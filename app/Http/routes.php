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

use App\Game;

Route::get('/', function () {
    return view('welcome');
});


/*
|--------------------------------------------------------------------------
| Application Testing
|--------------------------------------------------------------------------
|
|
*/
//
//
//Route::get('/game/{id}/category', function () {
//
//    $game = Game::find(1);
//
//    return $game->categories()->first()->name;
//});
//
