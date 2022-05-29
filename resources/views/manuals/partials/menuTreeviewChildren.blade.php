<ul>
    @foreach($children as $child)
        <li>
            {{ $child->title }}
            @if(count($child->children))
                @include('manuals.partials.menuTreeviewChildren',['children' => $child->children])
            @endif
        </li>
    @endforeach
</ul>
