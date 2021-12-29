<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LaravelCrud;


Route::resource('articles', App\Http\Controllers\ArticleController::class);


Route::get('/', function () {
    dump(DB::select('SELECT * FROM  articles'));
});

/*Route::get('crud', [LaravelCrud::class, "index"]);

Route::post('add', [LaravelCrud::class, "add"]);
*/
