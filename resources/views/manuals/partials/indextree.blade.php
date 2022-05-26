


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
                    @include('manuals.partials.children',['children' => $item->children])
                @endif
                </li>
            @endforeach
        </ul>
    </div>



    <script>
        // Treeview Initialization
        $(document).ready(function() {
            // $('.treeview-animated').mdbTreeview();
            $('.treeview-colorful').mdbTreeview();
            // $('.treeview-animated').mdbTreeview();
            // $('.treeview').mdbTreeview();
        });
    </script>
