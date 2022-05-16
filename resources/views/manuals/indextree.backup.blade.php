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
                <h6 class="pt-3 pl-3">Folders</h6>
                <hr>
                <ul class="treeview-colorful-list mb-3">
                    <li class="treeview-colorful-items">
                        <a class="treeview-colorful-items-header">
                            <i class="fas fa-plus-circle"></i>
                            <span><i class="far fa-envelope-open ic-w mx-1"></i>Mail</span>
                        </a>
                        <ul class="nested">
                            <li>
                                <div class="treeview-colorful-element"><i class="far fa-bell ic-w mr-1"></i>Offers
                            </li>
                            <li>
                                <div class="treeview-colorful-element"><i class="far fa-address-book ic-w mr-1"></i>Contacts
                            </li>
                            <li class="treeview-colorful-items">
                                <a class="treeview-colorful-items-header">
                                    <i class="fas fa-plus-circle"></i>
                                    <span><i class="far fa-calendar-alt ic-w mx-1"></i>Calendar</span></a>
                                <ul class="nested">
                                    <li>
                                        <div class="treeview-colorful-element"><i class="far fa-clock ic-w mr-1"></i>Deadlines
                                    </li>
                                    <li>
                                        <div class="treeview-colorful-element"><i class="fas fa-users ic-w mr-1"></i>Meetings
                                    </li>
                                    <li>
                                        <div class="treeview-colorful-element"><i class="fas fa-basketball-ball ic-w mr-1"></i>Workouts
                                    </li>
                                    <li>
                                        <div class="treeview-colorful-element"><i class="fas fa-mug-hot ic-w mr-1"></i>Events
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="treeview-colorful-items">
                        <a class="treeview-colorful-items-header">
                            <i class="fas fa-plus-circle"></i>
                            <span><i class="far fa-folder-open ic-w mx-1"></i>Inbox</span>
                        </a>
                        <ul class="nested">
                            <li>
                                <div class="treeview-colorful-element"><i class="far fa-folder-open ic-w mr-1"></i>Admin
                            </li>
                            <li>
                                <div class="treeview-colorful-element"><i class="far fa-folder-open ic-w mr-1"></i>Corporate
                            </li>
                            <li>
                                <div class="treeview-colorful-element"><i class="far fa-folder-open ic-w mr-1"></i>Finance
                            </li>
                            <li>
                                <div class="treeview-colorful-element"><i class="far fa-folder-open ic-w mr-1"></i>Other
                            </li>
                        </ul>
                    </li>
                    <li class="treeview-colorful-items">
                        <a class="treeview-colorful-items-header">
                            <i class="fas fa-plus-circle"></i>
                            <span><i class="far fa-gem mx-1"></i>Favourites</span>
                        </a>
                        <ul class="nested">
                            <li>
                                <div class="treeview-colorful-element"><i class="fas fa-pepper-hot ic-w mr-1"></i>Restaurants
                            </li>
                            <li>
                                <div class="treeview-colorful-element"><i class="far fa-eye ic-w mr-1"></i>Places
                            </li>
                            <li>
                                <div class="treeview-colorful-element"><i class="fas fa-gamepad ic-w mr-1"></i>Games
                            </li>
                            <li>
                                <div class="treeview-colorful-element"><i class="fas fa-cocktail ic-w mr-1"></i>Coctails
                            </li>
                            <li>
                                <div class="treeview-colorful-element"><i class="fas fa-pizza-slice ic-w mr-1"></i>Food
                            </li>
                        </ul>
                    </li>
                    <li>
                        <div class="treeview-colorful-element"><i class="far fa-comment ic-w mr-1"></i>Notes
                    </li>
                    <li>
                        <div class="treeview-colorful-element"><i class="fas fa-cogs ic-w mr-1"></i>Settings
                    </li>
                    <li>
                        <div class="treeview-colorful-element"><i class="fas fa-desktop ic-w mr-1"></i>Devices
                    </li>
                    <li>
                        <div class="treeview-colorful-element"><i class="fas fa-trash-alt ic-w mr-1"></i>Deleted Items
                    </li>
                </ul>
            </div>

            {{--            <div class="table-responsive">--}}
            {{--                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">--}}
            {{--                    <thead>--}}
            {{--                        <tr>--}}
            {{--                            <th>ID</th>--}}
            {{--                            <th>Titolo</th>--}}
            {{--                            <th>Last Updated</th>--}}
            {{--                            <th>Actions</th>--}}
            {{--                        </tr>--}}
            {{--                    </thead>--}}
            {{--                    <tfoot>--}}
            {{--                        <tr>--}}
            {{--                            <th>ID</th>--}}
            {{--                            <th>Titolo</th>--}}
            {{--                            <th>Last Updated</th>--}}
            {{--                            <th>Actions</th>--}}
            {{--                        </tr>--}}
            {{--                    </tfoot>--}}
            {{--                    <tbody>--}}
            {{--                        @foreach($manuals as $item)--}}
            {{--                            <tr>--}}
            {{--                                <td>{{ $item->id }}</td>--}}
            {{--                                <td>--}}
            {{--                                    <!-- Button trigger modal -->--}}
            {{--                                    <button type="button" class="btn" data-toggle="modal" data-target="#ModalPartialContent-{{$item->id}}" title="Clicca per un'anteprima">--}}
            {{--                                        {{$item->title}}--}}
            {{--                                    </button>--}}
            {{--                                    <!-- Modal con l'anteprima del cotent del manuale-->--}}
            {{--                                    <div class="modal fade" id="ModalPartialContent-{{$item->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">--}}
            {{--                                        <div class="modal-dialog modal-dialog-centered modal-xl" role="document">--}}
            {{--                                            <div class="modal-content">--}}
            {{--                                                <div class="modal-header">--}}
            {{--                                                    <h5 class="modal-title" id="exampleModalLongTitle">{{$item->title}}</h5>--}}
            {{--                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">--}}
            {{--                                                        <span aria-hidden="true">&times;</span>--}}
            {{--                                                    </button>--}}
            {{--                                                </div>--}}
            {{--                                                <div class="modal-body">--}}
            {{--                                                    <?php echo substr($item->content, 0, 500)?>--}}
            {{--                                                </div>--}}
            {{--                                                <div class="modal-footer">--}}
            {{--                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Chiudi</button>--}}
            {{--                                                    <a href="{{ route('manuals.edit', $item) }}" class="btn btn-success">Modifica</a>--}}
            {{--                                                </div>--}}
            {{--                                            </div>--}}
            {{--                                        </div>--}}
            {{--                                    </div>--}}
            {{--                                </td>--}}
            {{--                                <td>{{ $item->updated_at }}</td>--}}
            {{--                                <td>--}}
            {{--                                    <div class="btn-group" role="group">--}}
            {{--                                        <span class="m-1 d-inline" title="Anteprima">--}}
            {{--                                            <a href="{{ route('manuals.show', $item->id) }}" target="_blank" class="btn btn-info">--}}
            {{--                                                <i class="fas fa-eye"></i>--}}
            {{--                                            </a>--}}
            {{--                                        </span>--}}
            {{--                                        <span class="m-1 d-inline" title="Modifica">--}}
            {{--                                            <a href="{{ route('manuals.edit', $item) }}" class="icon btn btn-success">--}}
            {{--                                                    <i class="fas fa-pencil-alt"></i>--}}
            {{--                                            </a>--}}
            {{--                                        </span>--}}
            {{--                                        <form action="{{ route('manuals.destroy', $item) }}" method="post" class="m-1 d-inline">--}}
            {{--                                            @csrf--}}
            {{--                                            @method('DELETE')--}}
            {{--                                            <button type="submit" class="btn btn-danger" title="Elimina">--}}
            {{--                                                <i class="fas fa-trash"></i>--}}
            {{--                                            </button>--}}
            {{--                                        </form>--}}
            {{--                                        <span class="m-1 d-inline" title="Duplica">--}}
            {{--                                            <a href="{{ route('manuals.duplicate', $item->id) }}" class="btn btn-secondary">--}}
            {{--                                                <i class="fas fa-copy"></i>--}}
            {{--                                            </a>--}}
            {{--                                        </span>--}}
            {{--                                    </div>--}}
            {{--                                </td>--}}
            {{--                            </tr>--}}
            {{--                        @endforeach--}}
            {{--                    </tbody>--}}
            {{--                </table>--}}
            {{--            </div>--}}
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
