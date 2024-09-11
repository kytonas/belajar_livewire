<div class="row">
    <div class="col-md-6">
        {{$items->firstitem()}} - {{$items->lastitem()}} of {{$items->total()}}
    </div>
    <div class="col-md-6">
        {{$items->links()}}
    </div>
</div>