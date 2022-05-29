@extends('layouts.app')


@section('title')
    Elenco dei manuali
@endsection


@section('stylesheets')
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="https://mdbcdn.b-cdn.net/wp-content/themes/mdbootstrap4/docs-app/css/compiled-4.20.0.min.css">
@stop


@section('content_head')
    <h1 class="h3 mb-2 text-gray-800">Elenco Manuali</h1>
    <p class="mb-4">Elenco dei manuali del progetto <b>project</b>.</p>
@endsection


@section('content_body')
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Nome progetto o nome versione</h6>
            <a href="{{ route('manuals.create') }}" class="btn btn-success">Aggiungi nuovo manuale</a>
        </div>
        <div class="card-body">





            <div class="treeview-colorful w-20 border border-secondary mx-4 my-4">
                <h6 class="pt-3 pl-3">Manuals Tree</h6>
                <hr>
                <ul class="treeview-colorful-list mb-3">
                    @foreach($manuals as $item)
                        <li class="treeview-colorful-items">
                        @if($item->children->count() === 0)
                            <span class="treeview-colorful-element">
                                <i class="far fa-address-book ic-w mr-1"></i>
                                {{ $item->title }}
                            </span>
                        @else
                            <a class="treeview-colorful-items-header">
                                <i class="fas fa-plus-circle"></i>
                                <span>
                                    <i class="far fa-folder-open ic-w mx-1"></i>
                                    {{ $item->title }}
                                </span>
                            </a>
                            @include('manuals.partials.indextreeChildren',['children' => $item->children])
                        @endif
                        </li>
                    @endforeach
                </ul>
            </div>




                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Titolo</th>
                                        <th>Last Updated</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>ID</th>
                                        <th>Titolo</th>
                                        <th>Last Updated</th>
                                        <th>Actions</th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                    @foreach($manuals as $item)
                                        <tr>
                                            <td>{{ $item->id }}</td>
                                            <td>
                                                <!-- Button trigger modal -->
                                                <button type="button" class="btn" data-toggle="modal" data-target="#ModalPartialContent-{{$item->id}}" title="Clicca per un'anteprima">
                                                    {{$item->title}}
                                                </button>
                                                <!-- Modal con l'anteprima del cotent del manuale-->
                                                <div class="modal fade" id="ModalPartialContent-{{$item->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalLongTitle">{{$item->title}}</h5>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <?php echo substr($item->content, 0, 500)?>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Chiudi</button>
                                                                <a href="{{ route('manuals.edit', $item) }}" class="btn btn-success">Modifica</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>{{ $item->updated_at }}</td>
                                            <td>
                                                <div class="btn-group" role="group">
                                                    <span class="m-1 d-inline" title="Anteprima">
                                                        <a href="{{ route('manuals.show', $item->id) }}" target="_blank" class="btn btn-info">
                                                            <i class="fas fa-eye"></i>
                                                        </a>
                                                    </span>
                                                    <span class="m-1 d-inline" title="Modifica">
                                                        <a href="{{ route('manuals.edit', $item) }}" class="icon btn btn-success">
                                                                <i class="fas fa-pencil-alt"></i>
                                                        </a>
                                                    </span>
                                                    <form action="{{ route('manuals.destroy', $item) }}" method="post" class="m-1 d-inline">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-danger" title="Elimina">
                                                            <i class="fas fa-trash"></i>
                                                        </button>
                                                    </form>
                                                    <span class="m-1 d-inline" title="Duplica">
                                                        <a href="{{ route('manuals.duplicate', $item->id) }}" class="btn btn-secondary">
                                                            <i class="fas fa-copy"></i>
                                                        </a>
                                                    </span>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
        </div>
    </div>
@endsection


@section('scripts')
{{--    <script type="text/javascript" src="{{ asset('js/app.js') }}"></script>--}}
    <script type="text/javascript" src="https://mdbcdn.b-cdn.net/wp-content/themes/mdbootstrap4/docs-app/js/bundles/4.20.0/compiled.min.js"></script>
    <script type="text/javascript" src="https://mdbcdn.b-cdn.net/wp-content/themes/mdbootstrap4/docs-app/js/dist/search-v4/search.min.js"></script>
    <script src="https://mdbcdn.b-cdn.net/wp-content/themes/mdbootstrap4/docs-app/js/dist/main.min.js"></script>

    <script>
        // Treeview Initialization
        $(document).ready(function() {
            // $('.treeview-animated').mdbTreeview();
            $('.treeview-colorful').mdbTreeview();
            // $('.treeview-animated').mdbTreeview();
            // $('.treeview').mdbTreeview();
        });
    </script>

@endsection
