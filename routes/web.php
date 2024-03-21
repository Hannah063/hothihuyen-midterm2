<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {

    return view('home');
});

Route::get('/about_us', function () {
    $team = [
        [
            'file' => 'person_1.jpg',
            'name' => 'Lawson Arnold',
            'job' => 'CEO, Founder, Atty.',
            'describe' => 'Separated they live in. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.'
        ],
        [
            'file' => 'person_2.jpg',
            'name' => 'Jeremy Walker',
            'job' => 'CEO, Founder, Atty.',
            'describe' => 'Separated they live in. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.'
        ],
        [
            'file' => 'person_3.jpg',
            'name' => 'Patrik White',
            'job' => 'CEO, Founder, Atty.',
            'describe' => 'Separated they live in. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.'
        ],
        [
            'file' => 'person_4.jpg',
            'name' => 'Kathryn Ryan',
            'job' => 'CEO, Founder, Atty.',
            'describe' => 'Separated they live in. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.'
        ],
    ];
    return view('layouts.about_us', ['team' => $team]);
});
