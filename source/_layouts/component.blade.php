@extends('_layouts.master')
@section('body')
    <article id="{{ $page->getFilename() }}">
        <h2>@yield('title')</h2>

        @yield('content')

        {{-- Torchlight is pretty awesome --}}
        <pre><x-torchlight-code language="alpinejs">
            @yield('content')
        </x-torchlight-code></pre>
    </article>
@endsection
