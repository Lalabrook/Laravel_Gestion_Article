<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LaravelCrud;


Route::resource('articles', App\Http\Controllers\ArticleController::class);


Route::get('/', function () {
    dd('Go to localhost:8000\articles');
});

/*Route::get('crud', [LaravelCrud::class, "index"]);

Route::post('add', [LaravelCrud::class, "add"]);
*/
