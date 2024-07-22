@extends('layouts.app')


@section('title')
    Modifica - {{ $manual->title }}
@endsection


@section('stylesheets')
@stop


@section('content_head')
    <h1 class="h3 mb-2 text-gray-800">Modifica Manuale</h1>
    <p class="mb-4">Modifica il manuale: {{$manual->title}}.
        <br>Magari ci metto anche informazioni come versione e ramo
        <br>I TAGS saranno legati ai Progetti/Software in modo che i vari capitoli siano selezionabili solo dentro i progetti giusti
        <br>Per ora alla primissima creazione il PATH è uguale allo SLUG e al successivo SAVE diventa in pratica la rotta MANUALS.SHOW
    </p>
@endsection


@section('content_body')
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="mb-2 font-weight-bold text-primary">Nome progetto o nome versione</h6>
        </div>
        <div class="card-body">
                <form id="form-edit" action="{{ route('manuals.update', $manual->id) }}" method="POST">
                    @csrf
                    @method('patch')
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" class="form-control" name="title" value="{{$manual->title}}">
                    </div>
                    <div class="form-group">
                        <label for="slug">Slug</label>
                        <input type="text" class="form-control" name="slug" value="{{$manual->slug}}" disabled>
                    </div>
                    <div class="form-group">
                        <label for="path">Path (al primo SAVE contiene l'ID e al secondo contiene lo SLUG)</label>
                        <input type="text" class="form-control" name="path" value="{{$manual->path}}" disabled>
                    </div>
                    <div class="form-group">
                        <label for="tags">Tags (separati da virgola)</label>
                        <input type="text" class="form-control" name="tags" value="{{$manual->tags}}">
                    </div>
                    <div class="form-group">
                        <label for="content">Content</label>
                        <textarea class="form-control" name="content" id="content_editor" rows="10">{{ $manual->content }}</textarea>
                    </div>
                </form>

            <div class="btn-group mr-2">
                <button type="submit" class="btn btn-success" form="form-edit">Salva</button>
            </div>

            <div class="btn-group mr-2">
                <a href="{{ route('manuals.show', $manual->id) }}" target="_blank" class="btn btn-info mr-2">Anteprima</a>
            </div>

            <div class="btn-group float-right">
                <form action="{{ route('manuals.destroy', $manual) }}" method="post">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger m-2">Elimina</button>
                </form>
            </div>

            <div class="mt-4">
                <a href="{{ route('manuals.index') }}" class="btn btn-primary">Torna all'elenco</a>
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
                uiColor: '#99afd7',

                // Use named CKFinder browser route
                filebrowserBrowseUrl: '{{ route('ckfinder_browser') }}',
                // Use named CKFinder connector route
                filebrowserUploadUrl: '{{ route('ckfinder_connector') }}?command=QuickUpload&type=Files'

                // removeDialogTabs : 'image:advanced' //rimuovo il tab Avanzate dal dialog di image
            });
    </script>
    @include('ckfinder::setup')
@endsection
