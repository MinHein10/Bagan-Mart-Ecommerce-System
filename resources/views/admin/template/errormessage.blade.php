
@if($errors->any())
@foreach ($errors->all() as $value)
        <p class="alert alert-danger">{{$value}}</p>    
@endforeach
@endif