@extends('layouts.app')


@section('title', 'Riordinamento DINAMICO')

@section('stylesheets')
    <style type="text/css">
        html, body, ul.sortable-ul, li.sortable-li { margin:0; padding:0; }
        body { font-family:verdana; background: #3d4f61; color:#fff; }
        ul.sortable-ul, li.sortable-li { list-style-type:none; padding:3px; color:#fff; border:1px solid #000; }
        ul.sortable-ul { padding:10px; }
        ul.sortable-ul li.sortable-li { padding-left:50px; margin:10px 0; border:1px solid #000; }
        li.sortable-li div.sortable-div { padding:7px; background-color:#D870A9; border:1px solid #000; }
        li.sortable-li, ul.sortable-ul, div { border-radius: 3px; }
        .scrollUp { position:fixed; top:0; left:0; height:48px; width:50px; border:1px solid red; }
        .scrollDown { position:fixed; bottom:0; left:0; height:48px; width:50px; border:1px solid red; }
        .sortableListsClose ul, .sortableListsClose ol { display:none; }
        .red { background-color:#ff9999;}
        .blue { background-color:#D870A9;}
        .green { background-color:#99ff99; }
        .pV10 { padding-top:10px; padding-bottom:10px; }
        .dN { display:none; }
        .zI1000 { z-index:1000; }
        .bgC1 { background-color:#ccc; }
        .bgC2 { background-color:#ff8; }
        .bgC3 { background-color:#f0f; }
        .bgC4 { background-color:#ED87BD; }
        .small1 { font-size:0.8em; }
        .small2 { font-size:0.7em; }
        .small3 { font-size:0.6em; }
        #sTreeBase { width:100px; height:50px; background-color: blue; }
        #text { padding:10px 0; }
        #sTree { background-color: green; }
        #sTree2 { margin:10px 0; }
        #center { width:950px; margin:0 auto; padding:10px; }
    </style>
@stop


@section('content_head')
    <h1 class="h3 mb-2 text-gray-800">Riordinamento dei Manuali</h1>
    <p class="mb-4 text-gray-800">Trascina i manuali per modificarne l'alberatura.</p>
@endsection


@section('content_body')
    <div class="container">
        <form action="{{ route('manuals.updateOrder') }}" method="POST">
            @csrf

            <button type="submit" class="btn btn-success">Salva il nuovo ordine</button>

            @include('manuals.partials.tree', ['manuals' => $manuals])
        </form>
    </div>


{{--    <div class="scrollUp dN"></div>   --}}
{{--    <div class="scrollDown dN"></div> --}}
@endsection


@section('scripts')
    {{-- Serve JQuery per far funzionare jquery-sortable --}}
    <script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
    <script src="{{asset('js/sortable/jquery-sortable-lists.js')}}"></script>
    <script type="text/javascript">
        $(function()
        {
            var options = {
                placeholderCss: {'background-color': '#000000'},
                hintCss: {'background-color':'#bbf'},
                onChange: function( cEl ) {
                    console.log( 'onChange' );
                },
                complete: function( cEl ) {
                    console.log( 'complete' );
                    var movedItem = cEl.attr('id').replace('manual_', '');
                    var newParentItem = cEl.closest('ul').closest('li').attr('id') ? cEl.closest('ul').closest('li').attr('id').replace('manual_', '') : null;
                    updateOrder(movedItem, newParentItem);
                },
                isAllowed: function( cEl, hint, target ) {
                    if( target.data('module') === 'c' && cEl.data('module') !== 'c' ) {
                        hint.css('background-color', '#ff9999');
                        return false;
                    } else {
                        hint.css('background-color', '#ffffff');
                        return true;
                    }
                },
                opener: {
                    active: true,
                    as: 'html',  // if as is not set plugin uses background image
                    close: '<i class="fa fa-minus c3"></i>',  // or 'fa-minus c3',  // or './imgs/Remove2.png',
                    open: '<i class="fa fa-plus"></i>',  // or 'fa-plus',  // or'./imgs/Add2.png',
                    openerCss: {
                        'display': 'inline-block',
                        //'width': '18px', 'height': '18px',
                        'float': 'left',
                        'margin-left': '-35px',
                        'margin-right': '5px',
                        //'background-position': 'center center', 'background-repeat': 'no-repeat',
                        'font-size': '1.1em'
                    }
                },
                ignoreClass: 'clickable'
            };
            $('#sTree2').sortableLists(options);

            function updateOrder(movedItem, newParentItem) {
                var treeData = $('#sTree2').sortableListsToHierarchy();
                $.ajax({
                    url: '{{ route('manuals.updateOrder') }}',
                    method: 'POST',
                    data: {
                        moved_item: movedItem.replace('item_', ''),
                        new_parent_item: newParentItem.replace('item_', ''),
                        _token: '{{ csrf_token() }}'
                    },
                    success: function(response) {
                        console.log('Order updated successfully');
                    },
                    error: function(xhr, status, error) {
                        console.error('Error updating order:', error);
                    }
                });
            }
        });
    </script>
@endsection
