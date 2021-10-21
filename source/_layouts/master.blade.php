<!DOCTYPE html>
<html lang="{{ $page->language ?? 'en' }}"><head>

    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="referrer" content="always">
    <meta name="description" content="{{ $page->description }}">

    <link rel="canonical" href="{{ $page->getUrl() }}">

    <title>{{ $page->title }}</title>

    <meta property="og:type" content="website">
    <meta property="og:title" content="{{ $page->title }}">
    <meta property="og:url" content="{{ $page->getUrl() }}">
    <meta property="og:image" content="{{ $page->baseUrl }}/assets/images/og-image.png">
    <meta property="twitter:card" content="summary_large_image">

    <link rel="icon" type="image/png" href="/assets/images/favicon.png">

    <link rel="stylesheet" href="//fonts.googleapis.com/css2?family=Inter:wght@400;600&family=Work+Sans:wght@700&display=swap">
    <link rel="stylesheet" href="{{ mix('css/tailwind.css', 'assets/build') }}">

    @stack('styles')

    <!-- Tagify -->
    <link href="https://unpkg.com/@yaireo/tagify/dist/tagify.css" rel="stylesheet" type="text/css" />

    <!-- Litepicker -->
    <link src="https://cdn.jsdelivr.net/npm/litepicker/dist/css/style.css"/>

</head><body>
    <div
        x-data="{ searchTerm: new URLSearchParams(location.search).get('open') || '' }"
        x-cloak
        class="max-w-screen-lg p-5 sm:p-10 md:p-20">
        <header class="flex flex-col max-w-4xl space-y-4 pb-4 border-b-2 border-gray-100">
            <a href="/" class="inline-flex items-center space-x-4 focus:outline-none focus:shadow-outline" title="Alptail Home Page">
                {{-- TODO: Extract to _partials/svg for better organization --}}
                @include('_partials/logo', ['classes' => 'w-12 text-secondary'])
                <h1 class="text-4xl leading-tight">Alptail</h1>
            </a>

            <div class="space-y-4 text-lg sm:text-xl">
                <p>A collection of open-source UI components, using <a href="http://tailwindcss.com/" title="TailwindCSS Home Page" target="_blank" rel="noopener" class="font-semibold text-primary transition duration-150 hover:underline focus:underline">TailwindCSS</a> and <a href="https://alpinejs.dev/" target="_blank" rel="noopener" title="Alpine.js Homepage" class="font-semibold text-primary transition duration-150 hover:underline focus:underline">Alpine.js</a>.</p>

                <p>Regularly updated and on a mission to make them as accessible as possible. Maintained by <a href="https://www.twitter.com/userlastname" title="Daniel Palmer's Twitter Profile" target="_blank"  rel="noopener" class="font-semibold text-primary transition duration-150 hover:underline focus:underline">Daniel Palmer</a>.</p>
            </div>
        </header>

        <main class="max-w-4xl mt-4 text-lg sm:text-xl">
            @yield('body')
        </main>

        @include('_partials/github-link')
    </div>

    <script src="{{ mix('js/main.js', 'assets/build') }}"></script>

    @stack('scripts')

    <!-- Muuri -->
    <script src="https://cdn.jsdelivr.net/npm/muuri@0.9.0/dist/muuri.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/web-animations-js@2.3.2/web-animations.min.js"></script>

    <!-- Tagify -->
    <script src="https://unpkg.com/@yaireo/tagify"></script>
    <script src="https://unpkg.com/@yaireo/tagify@3.1.0/dist/tagify.polyfills.min.js"></script>

    <!-- Litepicker -->
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/litepicker/dist/js/main.js"></script>

</body></html>
