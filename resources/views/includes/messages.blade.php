@if($errors ->any())

<div class="alert alert-danger"  >


    @foreach ($errors->all() as $error)
<p >{{$error}}<br></p>
    @endforeach


</div>

@endif
@if(session('status'))
<div class= "alert alert-success">
    {{session('status')}}
</div>
@endif