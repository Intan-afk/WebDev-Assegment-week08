@php
    $links = [
        ['label' => 'home',    'url' => '/',        'active' => request()->is('/')],
        ['label' => 'about',   'url' => '/about',   'active' => request()->is('about')],
        ['label' => 'contact', 'url' => '/contact', 'active' => request()->is('contact')],
        ['label' => 'blog',    'url' => '/blog',    'active' => request()->is('blog*')],
    ];
@endphp

<nav class="flex py-2 px-4 md:px-8 min-h-[68px] sticky top-0 z-20 bg-white dark:bg-neutral-900 border-b border-slate-300 dark:border-neutral-700 shadow-sm" aria-label="Main navigation">
    <div class="max-w-7xl mx-auto flex flex-wrap items-center gap-4 w-full">
        <a href="/"
            class="font-bold text-lg text-slate-900 dark:text-slate-50 focus:outline-none focus-visible:ring-2 focus-visible:ring-blue-500 rounded">
            Portofolio Intan
        </a>

        <ul class="flex flex-row flex-wrap gap-4 md:gap-8 ml-auto font-semibold text-sm text-slate-900 dark:text-slate-50">
            @foreach ($links as $link)
                <li>
                    <a href="{{ $link['url'] }}"
                        class="hover:text-blue-700 dark:hover:text-blue-400 focus:outline-none focus-visible:ring-2 focus-visible:ring-blue-500 rounded {{ $link['active'] ? 'text-blue-700 dark:text-blue-400' : '' }}"
                        @if ($link['active']) aria-current="page" @endif>
                        {{ $link['label'] }}
                    </a>
                </li>
            @endforeach
        </ul>
    </div>
</nav>