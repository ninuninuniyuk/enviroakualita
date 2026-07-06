<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestimonialController;
use App\Models\Testimonial;

Route::get('/', function () {
    $testimonials = Testimonial::where('is_approved', true)
        ->latest()
        ->take(10)
        ->get();

    return view('landing', compact('testimonials'));
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

Route::get('/news/{slug}', function ($slug) {
    return view('news.' . $slug);
});

Route::post('/testimoni', [TestimonialController::class, 'store'])->name('testimoni.store');