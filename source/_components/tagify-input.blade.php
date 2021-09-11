@extends('_layouts.component')
@section('content')
    <!-- See docs for Tagify: https://github.com/yairEO/tagify -->
    <div x-cloak wire:ignore x-data="{ tagify: null }" class="w-full" x-init="tagify = new Tagify($refs['tag-input']);">
        <input x-ref="tag-input" placeholder="Add tags...">
    </div>
@endsection
