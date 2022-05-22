

<li class="treeview-colorful-items">
    <a class="treeview-colorful-items-header">
        <i class="fas fa-plus-circle"></i>
        <span>
            <i class="far fa-envelope-open ic-w mx-1"></i>
            {{ $item->title }} bbb
        </span>
    </a>
    <ul class="nested">
        @foreach($children as $child)
            @if($child->children->count() === 0)
                <li>
                    <div class="treeview-colorful-element">
                        <i class="far fa-bell ic-w mr-1"></i>
                        {{ $child->title }} ccc
                    </div>
                </li>
            @else
                @include('manuals.partials.children',['children' => $child->children])
            @endif
        @endforeach
    </ul>
</li>
