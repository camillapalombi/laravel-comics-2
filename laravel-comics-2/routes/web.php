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

Route::get('/home', function () {
    return view('visitors.home');
})->name('home');


Route::get('/', function () {
    $comics = config('comics');

    $data = [
        'comics' => $comics
    ];

    return view('visitors.comics', $data);
})->name('comics');


Route::get('/comics/{id}', function($id) {
    $comics = collect(config('comics'));

    $selectedComic = $comics->where('id', $id);
    if ($comics->count() === 1) {
        $selectedComic = array_values($selectedComic->all())[0];
    }

    //dd($selectedComic ->all()[0]['title']);

    return view('visitors.comics', [
        'title' => $selectedComic['title'],
        'fumetto' => $selectedComic
    ]);
});





