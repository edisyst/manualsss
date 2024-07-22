@extends('layouts.app')


@section('title')
    Crea nuovo manuale
@endsection


@section('stylesheets')
@stop


@section('content_head')
    <h1 class="h3 mb-2 text-gray-800">Crea nuovo capitolo</h1>
    <p class="mb-4">Crea nuovo capitolo.
        <br>Magari ci metto anche informazioni come versione e ramo</p>
@endsection


@section('content_body')
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="mb-2 font-weight-bold text-primary">Nome progetto o nome versione</h6>
        </div>
        <div class="card-body">
            <form action="{{ route('chapters.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="name">Title</label>
                    <input type="text" class="form-control" name="name">
                </div>
                <div class="form-group">
                    <label for="tags">Tags (separati da virgola)</label>
                    <input type="text" class="form-control" name="tags">
                </div>
                <div class="form-group">
                    <label for="body">Content</label>
                    <textarea class="form-control" name="body" id="content_editor" rows="10"></textarea>
                </div>
                <button type="submit" class="btn btn-success">Salva</button>
            </form>

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
