<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog</title>
    @vite('resources/css/app.css')
</head>
<body class="min-h-screen flex flex-col">
    @include('partials.navbar')

    <main class="flex-1 w-full max-w-7xl mx-auto px-4 md:px-8 py-10">
        <h1 class="text-center text-2xl sm:text-3xl font-bold text-slate-900">Blog</h1>
        <p class="mt-2 text-center text-slate-600">Catatan belajar dan cerita seputar kuliah saya.</p>

        <div class="mt-8 space-y-4">
            @forelse ($posts as $post)
                <article class="bg-white border border-slate-300 rounded-lg p-5 shadow-sm">
                    <span class="rounded-full bg-blue-100 px-3 py-0.5 text-xs font-semibold text-blue-800">
                        {{ $post['kategori'] }}
                    </span>
                    <h2 class="mt-2 text-lg font-semibold text-slate-900">{{ $post['judul'] }}</h2>
                    <p class="mt-2 text-slate-600">{{ $post['ringkasan'] }}</p>
                </article>
            @empty
                <p class="text-center text-slate-600">Belum ada tulisan.</p>
            @endforelse
        </div>
    </main>

    @include('partials.footer')
</body>
</html>