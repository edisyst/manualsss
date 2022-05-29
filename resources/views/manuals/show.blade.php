@extends('layouts.app-show')


@section('title')
    {{ $manual->title }}
@endsection


@push('stylesheets')
    <link rel="stylesheet" href="{{ asset('css/manuals.show.style.css') }}">
@endpush


@section('sidebar_menu')
    @include('manuals.partials.indextree',['manuals' => $manuals])
{{--    @include('manuals.partials.treesimple',['manuals' => $manuals])--}}
{{--    @include('manuals.partials.menuTreeview',['manuals' => $manuals])--}}
@endsection


@section('content_body')
    {!! $manual->content !!}
@endsection


@push('scripts')
    <script>
        // Treeview Initialization
        $(document).ready(function() {
            // $('.treeview-animated').mdbTreeview();
            $('.treeview-colorful').mdbTreeview();
            // $('.treeview-animated').mdbTreeview();
            // $('.treeview').mdbTreeview();
        });
    </script>
@endpush
