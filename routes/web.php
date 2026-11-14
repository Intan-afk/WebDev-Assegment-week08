<?php

use Illuminate\Support\Facades\Route;
use App\Models\About;
use App\Models\Post;
use App\Models\Hobi;

Route::get('/', function () {
    return view('partials.home', [
        'nama' => About::first()->name ?? 'Adhara',
        'hobi' => Hobi::all(),
    ]);
})->name('home');

Route::get('/about', function () {
    $about  = About::firstOrFail();
    $skills = About::pluck('skill')->filter()->values()->all();

    return view('partials.about', [
        'nama'      => $about->name,
        'role'      => $about->role,
        'deskripsi' => $about->description,
        'keahlian'  => $skills,
        'gambar'    => $about->image,
    ]);
})->name('about');

Route::get('/blog', function () {
    return view('partials.blog', [
        'posts' => Post::latest()->get(),
    ]);
})->name('blog');

Route::get('/contact', function () {
    return view('partials.contact', [
        'kontak' => [
            [
                'nama' => 'Instagram',
                'teks' => '@iadhara',
                'url' => 'https://www.instagram.com/iadhara/',
            ],
            [
                'nama' => 'Email',
                'teks' => 'itangkelangi@student.ciputra.ac.id',
                'url' => 'mailto:itangkelangi@student.ciputra.ac.id',
            ],
            [
                'nama' => 'YouTube',
                'teks' => 'Tonton video saya',
                'url' => 'https://youtu.be/yDJGi-jUPLg?si=RycaXRVL9x9zwyJ5',
            ],
        ],
    ]);
})->name('contact');
