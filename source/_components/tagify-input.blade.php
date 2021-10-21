---
name: Tagify input
isPure: false
---
@extends('_layouts.component')
@section('content')
<!-- See docs for Tagify: https://github.com/yairEO/tagify -->
<div x-cloak wire:ignore x-data="{ tagify: null }" class="w-full" x-init="tagify = new Tagify($refs['tag-input']);">
    <input x-ref="tag-input" placeholder="Add tags...">
</div>
@endsection
@push('styles')
    <link rel="stylesheet" href="https://unpkg.com/@yaireo/tagify/dist/tagify.css">
@endpush
@push('scripts')
    <script src="https://unpkg.com/@yaireo/tagify"></script>
    <script src="https://unpkg.com/@yaireo/tagify@3.1.0/dist/tagify.polyfills.min.js"></script>
@endpush
