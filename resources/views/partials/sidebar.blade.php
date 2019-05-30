<div class="sidebar-module sidebar-module-inset">
    <h5>Last 5 added movies</h5>
</div>

<div class="sidebar-module">
    @foreach ($last5added as $lastadded) 
        <a href="{{'/movies/'. $lastadded->id}}"><li>{{$lastadded->title}}</li></a>
    @endforeach
</div>