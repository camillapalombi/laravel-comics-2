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
    $comics = config('comics');

    $data = [
        'comics' => $comics
    ];

    return view('visitors.comics', $data);
})->name('comics');


Route::get('/comic/{id}', function($id) {
    $comics = collect(config('comics'));

    $selectedComics = $comics->where('id', $id);
    if ($selectedComics->count() === 1) {
        $selectedComic = array_values($selectedComics->all())[0];
    } else {
        abort(404);
    }

    
    //dd($selectedComic ->all()[0]['title']);

    return view('visitors.comic', ['comic' => $selectedComic,
    'title' => $selectedComic['series']
]);
})->name('comic');





