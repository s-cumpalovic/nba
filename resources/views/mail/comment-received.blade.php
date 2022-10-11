<div class="mb-3 p-2 font-weight-bold">
    
    <p> Hello, {{$team->name}}</p>
    <p> New comment received on your
    <a href="{{ url("/teams/$team->id") }}">{{$team->name }}</a>
     page    
    </p><hr>

</div>