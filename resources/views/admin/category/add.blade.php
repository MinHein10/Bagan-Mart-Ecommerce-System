@extends('admin/mainadmin')


@section('content')

@include('admin/template/errormessage')

<div class="row">
    <div class="col-sm-12">
        <form action="{{ route('category.store') }}" method="post">
            @csrf
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" value="{{ old('name') }}" placeholder="Enter Name..." class="form-control form-control-sm" id="name">
            </div>
            <div class="form-group">
                <a href="{{ route('category.index') }}"><button class="btn btn-danger btn-sm" type="button"><i class="fa fa-times"></i></button></a>
                <button type="submit" name="submit" class="btn btn-primary btn-sm"><i class="fa fa-check"></i></button>
            </div>
        </form>
    </div>
</div>
@endsection