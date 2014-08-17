<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('layouts.splash');
});


/*
 * User Routes
 *
 */

/*
 * APCS Routes
 *
 */
Route::get('/apcs',['as'=>'apcs', 'uses'=>'APCSController@home']);
//Route::get('/apcs/{unit}', 'APCSController@unit');
Route::get('/apcs/intro-to-programming', 'APCSController@introProg');
Route::get('/apcs/simple-methods', 'APCSController@simpleMethods');
Route::get('/apcs/resources','APCSController@resources');
/*
 * Algebra Routes
 *
 */
Route::get('/algebra', ['as'=> 'algebra', 'uses'=> 'AlgebraController@home']);
Route::get('/algebra/equations','AlgebraController@equations');

Route::get('/algebra/resources','AlgebraController@resources');

/*
 * OOP Routes
 *
 */

Route::get('/oop', ['as'=> 'oop', 'uses' => 'OOPController@home']);
Route::get('/oop/into-to-programming','OOPController@introProg');
Route::get('/oop/simple-methods','OOPController@simpleMethods');
Route::get('/oop/resources','OOPController@resources');

/*
 * LAM Routes
 *
 */

Route::get('/lam',['as'=>'lam', 'uses' => 'LAMController@home']);
Route::get('/lam/equations','LAMController@equations');
Route::get('/lam/slope-lines-and-graphs','LAMController@slopeLinesGraphs');
Route::get('/lam/resources','LAMController@resources');
Route::get('/lam/first-review','LAMController@firstReview');


