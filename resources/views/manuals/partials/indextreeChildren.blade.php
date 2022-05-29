<ul class="nested">
    @foreach($children as $child)
        <li class="treeview-colorful-items">
        @if($child->children->count() === 0)
            <span class="treeview-colorful-element">
                {{ $child->title }}
            </span>
        @else
            <a class="treeview-colorful-items-header">
                <i class="fas fa-plus-circle"></i>
                <span>
                    {{ $child->title }}
                </span>
            </a>
            @include('manuals.partials.indextreeChildren',['children' => $child->children])
        @endif
        </li>
    @endforeach
</ul>
