{{--bootstrap collapsible list--}}
<ul>
    @foreach($children as $child)
        <li>
            <a class="collapsed"
               id="{{$child->id}}"
               data-toggle="collapse"
               href="#collapseListGroup{{$child->id}}"
               aria-expanded="false"
               aria-controls="collapseListGroup{{$child->id}}">
                {{ $child->title }}
            </a>
        </li>
        @if(count($child->children))
            <div id="collapseListGroup{{$child->id}}">
                @include('manuals.partials.treesimpleChildren',['children' => $child->children])
            </div>
        @endif
    @endforeach
</ul>






