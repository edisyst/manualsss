@push('stylesheets')

@endpush


<div class="treeview-colorful border border-secondary">
    <h6 class="pt-3 pl-3">Manuals Tree</h6>
    <hr>
    <ul class="treeview-colorful-list mb-3">
        @foreach($manuals as $item)
            <li class="treeview-colorful-items">
            @if($item->children->count() === 0)
                <span class="treeview-colorful-element">
                    {{ $item->title }}
                </span>
            @else
                <a class="treeview-colorful-items-header">
                    <i class="fas fa-plus-circle"></i>
                    <span>
                        {{ $item->title }}
                    </span>
                </a>
                @include('manuals.partials.indextreeChildren',['children' => $item->children])
            @endif
            </li>
        @endforeach
    </ul>
</div>


@push('scripts')
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
@endpush
