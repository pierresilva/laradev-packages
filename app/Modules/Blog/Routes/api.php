<?php

use Illuminate\Http\Request;
use \Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your module. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

/*Route::get('/blog', function (Request $request) {
    return $request->all();
});*/

Route::group(['prefix' => 'blog'], function () {
    Route::get('/', function (Request $request) {
        dd($request->all());
    });
});
