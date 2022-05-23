


<ul class="nested">
    @foreach($children as $child)
        <li class="treeview-colorful-items">
        @if($child->children->count() === 0)
            <span class="treeview-colorful-element">
                <i class="far fa-address-book ic-w mr-1"></i>
                {{ $child->title }} BB00
            </span>
        @else
            <a class="treeview-colorful-items-header">
                <i class="fas fa-plus-circle"></i>
                <span>
                    <i class="far fa-folder-open ic-w mx-1"></i>
                    {{ $child->title }} BB11
                </span>
            </a>
            @include('manuals.partials.children',['children' => $child->children])
        @endif
        </li>
    @endforeach
</ul>
