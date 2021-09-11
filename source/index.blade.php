@extends('_layouts.master')
@section('body')
    <div class="flex flex-col items-start space-y-8">
        @include('_partials/search-bar')
        @include('_partials.component-list')
    </div>
@endsection
