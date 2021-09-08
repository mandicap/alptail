@extends('_layouts.master')
@section('body')
    <div class="flex flex-col items-start space-y-8">
        <div class="space-y-2 font-semibold">
            <h1>Want to have a big ol' browse?</h1>
            <a href="/all" title="All Alptail Components" class="inline-flex items-center space-x-1 text-primary hover:underline focus:shadow-outline focus:outline-none">
                <span>View all Alptail components</span>

                {{-- Heroicon: solid/arrow-sm-right --}}
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-primary" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M10.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L12.586 11H5a1 1 0 110-2h7.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                </svg>
            </a>
        </div>

        <div class="space-y-4 font-semibold">
            <h1>Otherwise, here's a list of the components:</h1>

            @include('_partials.component-list')
        </div>
    </div>
@endsection
