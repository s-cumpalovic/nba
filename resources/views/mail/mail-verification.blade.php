<div class="mb-3 p-2 font-weight-bold">
    
    <p> Hello, {{$user->name}}</p>
    <p> Thank you for signing up to our website 'NBA best team showcases'</p><hr>
    <p> Please confirm your email by clicking on the following link: <a href="{{ route('user-verification', ['id' => $user->id]) }}">link</a></p>

</div>