<ul class="nested">
    @foreach($children as $child)
        <li class="treeview-colorful-items">
        @if($child->children->count() === 0)
            <span class="treeview-colorful-element">
                {{ $child->title }}
            </span>
            <a href="{{ route('manuals.show', $child->id) }}" class="btn btn-info">
                <i class="fas fa-eye"></i>
            </a>
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
