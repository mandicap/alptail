---
name: FilePond (Drag and Drop File Input)
isPure: false
---
@extends('_layouts.component')
@section('content')
<!-- See docs for Filepond: https://github.com/pqina/filepond -->
<div
    x-data="{ pond: null }"
    x-init="
        FilePond.registerPlugin(FilePondPluginFileValidateType);
        FilePond.registerPlugin(FilePondPluginFileValidateSize);
        FilePond.registerPlugin(FilePondPluginImagePreview);

        FilePond.setOptions({
            acceptedFileTypes:
            [
                'image/png', 'image/jpeg'
            ],
            allowMultiple: true,
            maxFileSize: '1MB'
        });

        const filepond = FilePond.create(
            $refs.filepond
        );

        pond = filepond;">
    <input type="file" x-ref="filepond">
</div>
@endsection

@push('styles')
    <link href="https://unpkg.com/filepond/dist/filepond.css" rel="stylesheet">
    <link href="https://unpkg.com/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.css" rel="stylesheet">
    <link href="https://unpkg.com/filepond-plugin-file-poster/dist/filepond-plugin-file-poster.css" rel="stylesheet">
@endpush

@push('scripts')
    <script src="https://unpkg.com/filepond-plugin-file-poster/dist/filepond-plugin-file-poster.js"></script>
    <script src="https://unpkg.com/filepond-plugin-file-validate-type/dist/filepond-plugin-file-validate-type.js"></script>
    <script src="https://unpkg.com/filepond-plugin-file-validate-size/dist/filepond-plugin-file-validate-size.js"></script>
    <script src="https://unpkg.com/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.js"></script>
    <script src="https://unpkg.com/filepond/dist/filepond.js"></script>
@endpush
