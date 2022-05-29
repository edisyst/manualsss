@push('stylesheets')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css" />
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.css">
    <link href="{{ asset('css/treeview.css') }}" rel="stylesheet">
@endpush


<div class="container">
    <div class="row">
        <div class="col-md-12">
            <ul id="tree1">
                @foreach($manuals as $item)
                    <li>
                        {{ $item->title }}
                        @if(count($item->childs))
{{--                                <i class="fas fa-plus-circle"></i>--}}
                            @include('manuals.partials.menuTreeviewChildren',['children' => $item->children])
                        @endif
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
</div>


@push('scripts')
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="{{ asset('js/treeview.js') }}"></script>
@endpush
