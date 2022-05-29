
@foreach($manuals as $item)
    <a class="collapsed"
       id="{{$item->id}}"
       data-toggle="collapse"
       href="#collapseListGroup{{$item->id}}"
       aria-expanded="false"
       aria-controls="collapseListGroup{{$item->id}}">
        {{ $item->title }}
    </a>
    @if(count($item->children))
        <div id="collapseListGroup{{$item->id}}">
            @include('manuals.partials.treesimpleChildren',['children' => $item->children])
        </div>
    @endif
@endforeach




