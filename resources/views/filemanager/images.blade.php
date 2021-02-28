@extends('layouts.app')


@section('title')
    Gestione immagini
@endsection


@section('stylesheets')
@stop


@section('content_head')
    <h1 class="h3 mb-2 text-gray-800">Gestione Immagini</h1>
    <p class="mb-4">Magari ci metto anche informazioni come versione e ramo
        <br>Devo decidere la configurazione del ckeditor: per ora tra edit e create è la stessa e francamente non vedo perchè differenziarla
    </p>
@endsection


@section('content_body')
    <div id="ckfinder-widget"></div>
@endsection


@section('scripts')
    {{--NIENTE PER ORA--}}
    @include('ckfinder::setup')
    <script>
        CKFinder.widget( 'ckfinder-widget', {
            width: '100%',
            height: 700
        } );
    </script>
@endsection
