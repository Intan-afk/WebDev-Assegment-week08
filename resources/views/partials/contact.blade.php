<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hubungi Saya</title>
    @vite('resources/css/app.css')
</head>
<body class="min-h-screen flex flex-col">
    @include('partials.navbar')

    <main class="flex-1 w-full max-w-7xl mx-auto px-4 md:px-8 py-10">
        <h1 class="text-center text-2xl sm:text-3xl font-bold text-slate-900">Hubungi saya</h1>
        <p class="mt-2 text-center text-slate-600">Pilih salah satu cara di bawah ini untuk menghubungi saya.</p>

        <div class="mt-8 grid gap-4 sm:grid-cols-3">
            @foreach ($kontak as $item)
                <a href="{{ $item['url'] }}"
                   @unless (str_starts_with($item['url'], 'mailto:')) target="_blank" rel="noopener" @endunless
                   class="block bg-white border border-slate-300 rounded-lg p-5 text-center shadow-sm hover:bg-blue-50 hover:border-blue-300 transition-all 
                   focus:outline-none focus-visible:ring-2 focus-visible:ring-blue-500">
                    <h2 class="text-lg font-semibold text-slate-900">{{ $item['nama'] }}</h2>
                    <p class="mt-1 text-sm text-slate-600 break-all">{{ $item['teks'] }}</p>
                </a>
            @endforeach
        </div>
    </main>

    @include('partials.footer')
</body>
</html>