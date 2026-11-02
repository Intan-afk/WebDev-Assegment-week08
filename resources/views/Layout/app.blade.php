<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <script src="https:cdn.tailwindcss.com"></script>
</head>
<body class="min-h-screen flex flex-col">
    @include('partials.navbar')

    <main class="flex-1 w-full max-w-7xl mx-auto px-4 md:px-8 py-10">
        @yield('content')
    </main>
    
    @include('partials.footer')
    
    @yield('scripts')
</body>
</html>