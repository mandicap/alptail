---
name: Muuri Masonary Grid (w/ Drag and Drop)
isPure: false
---
@extends('_layouts.component')
@section('content')
<!-- See docs for Muuri: https://github.com/haltu/muuri -->
<div
    x-data="{
        muuri: null,
        refreshGrid: function () {
            this.muuri.refreshItems().layout();
        }
    }"
    x-init="muuri = new Muuri(
        $refs['muuri-grid'], {
            layout: {
                fillGaps: false,
            },

            layoutDuration: 600,
            dragEnabled: true,
        }
    );"
    @load.window="refreshGrid"
    class="w-full relative mt-4">
    <ul x-ref="muuri-grid" class="relative w-full -m-2">
        <li class="absolute cursor-pointer m-2 block">
            <div>
                <img class="w-64" src="https://images.unsplash.com/photo-1574629810360-7efbbe195018?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" alt="Dummy Image">
            </div>
        </li>

        <li class="absolute cursor-pointer m-2 block">
            <div>
                <img class="w-64" src="https://images.unsplash.com/photo-1579952363873-27f3bade9f55?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" alt="Dummy Image">
            </div>
        </li>

        <li class="absolute cursor-pointer m-2 block">
            <div>
                <img class="w-64" src="https://images.unsplash.com/photo-1431324155629-1a6deb1dec8d?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" alt="Dummy Image">
            </div>
        </li>

        <li class="absolute cursor-pointer m-2 block">
            <div>
                <img class="w-64" src="https://images.unsplash.com/photo-1544698310-74ea9d1c8258?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" alt="Dummy Image">
            </div>
        </li>

        <li class="absolute cursor-pointer m-2 block">
            <div>
                <img class="w-64" src="https://images.unsplash.com/photo-1522947961977-67fe74257c16?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" alt="Dummy Image">
            </div>
        </li>

        <li class="absolute cursor-pointer m-2 block">
            <div>
                <img class="w-64" src="https://images.unsplash.com/photo-1550591901-c036ab7c45f8?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" alt="Dummy Image">
            </div>
        </li>

        <li class="absolute cursor-pointer m-2 block">
            <div>
                <img class="w-64" src="https://images.unsplash.com/photo-1544333323-ec9ed3218dd1?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" alt="Dummy Image">
            </div>
        </li>

        <li class="absolute cursor-pointer m-2 block">
            <div>
                <img class="w-64" src="https://images.unsplash.com/photo-1542683305-710078a12f73?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" alt="Dummy Image">
            </div>
        </li>
    </ul>
</div>
@endsection
@push('scripts')
    <script src="https://cdn.jsdelivr.net/npm/muuri@0.9.0/dist/muuri.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/web-animations-js@2.3.2/web-animations.min.js"></script>
@endpush
