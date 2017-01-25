<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/
/**@module login
 * @desc display login
 */
    Route::get('/','ChatController@chatLogin');

/**@module get login
 * @desc perform function login
 */
Route::match(array('GET','POST'),'login'            ,   'Auth\LoginController@authenticate');
Route::match(array('GET','POST'),'index'             ,   'ChatController@home');

Route::group(['middleware'=>['afterAuth']],function(){
    Route::get('/','ChatController@chatLogin');
});

Route::group(['middleware'=>['auth']],function(){
    Route::match(array('GET','POST'),'logout'           ,   'Auth\LoginController@logout');

    Route::get('/home'                     ,    'ChatController@chat');

    Route::get('/loadUserActive', 'ChatController@LoadActive');
    Route::post('/saveMessage', 'ChatController@saveMessage');
    Route::post('/changestate', 'ChatController@updateStatus');
});



