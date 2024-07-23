<li class="sortable-li bgC4 @if($manual->children->isNotEmpty()) sortableListsClose @endif" id="item_{{ $manual->id }}">
    <div class="sortable-div">
        @if($manual->children->isNotEmpty())
            <span class="sortableListsOpener"> </span>
            <i class="fas fa-arrows-alt"></i>
        @endif
        {{ $manual->title }}
    </div>
    @if($manual->children->isNotEmpty())
        <ul class="sortable-ul">
            @foreach($manual->children as $child)
                @include('manuals.partials.node', ['manual' => $child])
            @endforeach
        </ul>
    @endif
</li>
