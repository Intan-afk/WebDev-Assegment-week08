<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Home</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="min-h-screen flex flex-col background">
    @include('partials.navbar')

    <main class="flex-1 w-full max-w-7xl mx-auto px-4 md:px-8 py-10">
        <div class="w-full mx-auto lg:max-w-3xl rounded-xl border border-blue-200 bg-blue-100 p-5 sm:p-8 lg:p-12 shadow-sm">
            <p class="text-sm font-semibold text-blue-700 dark:text-blue-400">Mahasiswa</p>
            <h1 class="mt-2 text-4xl sm:text-5xl md:text-6xl font-bold tracking-tight">Halo, saya {{ $nama }}.</h1>
            <p class="mt-4 max-w-xl text-slate-600 dark:text-slate-400">
                Saya sedang belajar membuat website dengan Laravel dan Tailwind CSS.
                Di sini saya mengumpulkan profil dan catatan belajar saya.
            </p>
            <div class="mt-6 flex flex-col sm:flex-row gap-3">
                <a href="/blog"
                    class="flex-1 text-center py-2.5 px-4 text-sm rounded-md font-semibold text-white bg-blue-600 hover:bg-blue-700 transition-all focus:outline-none focus-visible:ring-2 focus-visible:ring-blue-500">
                    Lihat blog
                </a>
                <a href="/contact"
                    class="flex-1 text-center py-2.5 px-4 text-sm rounded-md font-semibold border border-blue-300 dark:border-blue-800 bg-white dark:bg-transparent hover:bg-blue-50 dark:hover:bg-blue-900 transition-all focus:outline-none focus-visible:ring-2 focus-visible:ring-blue-500">
                    Contact saya
                </a>
            </div>
        </div>

        <h2 class="mt-20 text-center text-xl sm:text-2xl font-bold text-slate-900 mx-auto">Hobi saya</h2>

        <div class="mt-4 grid gap-4 sm:grid-cols-2 lg:grid-cols-3">
            @foreach ($hobi as $item)
                <div class="bg-white border border-slate-300 rounded-lg overflow-hidden shadow-sm">
                    <img src="{{ asset('img/' . $item->gambar) }}" alt="{{ $item->nama }}" class="h-40 w-full object-cover">
                    <div class="p-4">
                        <h3 class="text-lg font-semibold text-slate-900">{{ $item->nama }}</h3>
                        <p class="mt-2 text-slate-600">{{ $item->deskripsi }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </main>

    @include('partials.footer')
</body>
</html>