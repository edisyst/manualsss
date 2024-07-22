@extends('layouts.app')


@section('title')
    Modifica - {{ $chapter->name }}
@endsection


@section('stylesheets')
@stop


@section('content_head')
    <h1 class="h3 mb-2 text-gray-800">Modifica capitolo</h1>
    <p class="mb-4">Modifica il capitolo: <strong>{{$chapter->name}}</strong>.
        <br>lo SLUG per ora resta vuoto, ma lo userò probabilmente dentro il CKeditor come identificativo dei capitoli
        <br>Anche nell'editor dei capitoli ho i placeholder "Capitoli", ma immagino che da qui lo dovrei togliere.
        <br>I TAGS saranno legati ai Progetti/Software in modo che i vari capitoli siano selezionabili solo dentro i progetti associati agli stessi tag
    </p>
@endsection


@section('content_body')
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="mb-2 font-weight-bold text-primary">Nome progetto o nome versione</h6>
        </div>
        <div class="card-body">
                <form id="form-edit" action="{{ route('chapters.update', $chapter->id) }}" method="POST">
                    @csrf
                    @method('patch')
                    <div class="form-group">
                        <label for="name">Title</label>
                        <input type="text" class="form-control" name="name" value="{{$chapter->name}}">
                    </div>
                    <div class="form-group">
                        <label for="slug">Slug</label>
                        <input type="text" class="form-control" name="slug" value="{{$chapter->slug}}" disabled>
                    </div>
                    <div class="form-group">
                        <label for="tags">Tags (separati da virgola)</label>
                        <input type="text" class="form-control" name="tags" value="{{$chapter->tags}}">
                    </div>
                    <div class="form-group">
                        <label for="body">Content</label>
                        <textarea class="form-control" name="body" id="content_editor" rows="10">{{ $chapter->body }}</textarea>
                    </div>
                </form>

            <div class="btn-group mr-2">
                <button type="submit" class="btn btn-success" form="form-edit">Salva</button>
            </div>

            <div class="btn-group mr-2">
                <a href="{{ route('chapters.show', $chapter->id) }}" target="_blank" class="btn btn-info mr-2">Anteprima</a>
            </div>

            <div class="btn-group float-right">
                <form action="{{ route('chapters.destroy', $chapter) }}" method="post">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger m-2">Elimina</button>
                </form>
            </div>

            <div class="mt-4">
                <a href="{{ route('chapters.index') }}" class="btn btn-primary">Torna all'elenco</a>
            </div>
        </div>
    </div>
@endsection


@section('scripts')
{{--    <script src="https://cdn.ckeditor.com/4.15.1/full-all/ckeditor.js"></script>--}}
    <script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
    <script>
        CKEDITOR.replace( 'content_editor' ,
            {
                uiColor: '#2fea93',

                // Use named CKFinder browser route
                filebrowserBrowseUrl: '{{ route('ckfinder_browser') }}',
                // Use named CKFinder connector route
                filebrowserUploadUrl: '{{ route('ckfinder_connector') }}?command=QuickUpload&type=Files'

                // removeDialogTabs : 'image:advanced' //rimuovo il tab Avanzate dal dialog di image
            });
    </script>
    @include('ckfinder::setup')
@endsection
