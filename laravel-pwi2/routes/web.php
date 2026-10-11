

<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect('/profil');
});

Route::get('/profil', function () {
    return view('pages.profil');
});

Route::get('/home', function () {
    return 'Selamat Pagi Dunia, 707082400100';
});
