<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('partials.home', [
        'nama' => 'Adhara',
        'hobi' => [
            [
                'nama' => 'Nonton Drama China',
                'gambar' => 'drama-china.jpg',
                'deskripsi' => 'Saya suka menonton drama China sebagai hiburan.',
            ],
            [
                'nama' => 'Piano',
                'gambar' => 'piano.jpg',
                'deskripsi' => 'Saya senang memainkan piano sebagai hobi dan hiburan.',
            ],
            [
                'nama' => 'Tidur',
                'gambar' => 'images.jpg',
                'deskripsi' => 'Saya menikmati tidur untuk melepas lelah dan memulihkan energi.',
            ],
        ],
    ]);
})->name('home');

Route::get('/about', function () {
    return view('partials.about', [
        'nama' => 'Intan',
        'keahlian' => ['Tidur', 'Piano', 'Berenang', 'Photo', 'Tetap santai', 'Lari'],
    ]);
})->name('about');

Route::get('/blog', function () {
    return view('partials.blog', [
        'posts' => [
            [
                'kategori' => 'Laravel',
                'judul' => 'Belajar Blade Template',
                'ringkasan' => 'Catatan tentang cara kerja Blade, komponen, dan layout di Laravel supaya halaman tidak ditulis berulang.',
            ],
            [
                'kategori' => 'Tailwind CSS',
                'judul' => 'Mengenal Tailwind CSS',
                'ringkasan' => 'Belajar mengatur warna, jarak, dan tampilan yang menyesuaikan layar laptop.',
            ],
            [
                'kategori' => 'Proyek',
                'judul' => 'Membuat Website Portofolio',
                'ringkasan' => 'Cerita langkah demi langkah membuat portofolio pribadi dengan Laravel.',
            ],
        ],
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
