<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>About Us</title>
    @vite('resources/css/app.css')
</head>
<body class="min-h-screen flex flex-col">
    @include('partials.navbar')

    <main class="flex-1 w-full max-w-7xl mx-auto px-4 md:px-8 py-10">
        <h1 class="text-center text-2xl sm:text-3xl font-bold text-slate-900">Tentang saya</h1>

        <div class="mt-8 flex flex-col md:flex-row items-center gap-6 bg-white border border-slate-300 rounded-lg p-5 sm:p-6 shadow-sm">
            <img src="{{ asset('img/' . $gambar) }}" alt="Foto {{ $nama }}"
                class="h-48 w-48 shrink-0 rounded-lg object-cover bg-blue-100">

            <div class="text-center md:text-left">
                <p class="text-sm font-semibold text-blue-700">{{ $role }}</p>
                <h2 class="mt-1 text-2xl font-bold text-slate-900">{{ $nama }}</h2>
                <p class="mt-3 text-slate-600">
                 {{ $deskripsi }}
                </p>
            </div>
        </div>

        <h2 class="mt-10 text-center text-xl sm:text-2xl font-bold text-slate-900">Keahlian</h2>

        <ul class="mt-4 flex flex-wrap justify-center gap-2">
            @foreach ($keahlian as $item)
                <li class="rounded-full border border-blue-300 bg-blue-100 px-3 py-1 text-sm font-semibold text-blue-800">
                    {{ $item }}
                </li>
            @endforeach
        </ul>
    </main>

    @include('partials.footer')
</body>
</html>