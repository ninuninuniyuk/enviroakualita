<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('landing');
});

Route::get('/tentang-kami', function () {
    return view('tentang');
});

Route::get('/pendaftaran', function () {
    return view('pendaftaran');
});

Route::post('/pendaftaran', function () {

    return back()->with('success', 'Pendaftaran telah terkirim!');
});

Route::get('/layanan', function () {
    return view('layanan');
});

Route::get('/gallery', function () {
    return view('gallery');
});

Route::get('/news', function () {
    return view('news');
});

Route::view('/news/lca-iso', 'news.lca');