<ul class="sortable-ul sTree bgC4" id="sTree2">
    @foreach($manuals as $manual)
        @include('manuals.partials.node', ['manual' => $manual])
    @endforeach
</ul>
