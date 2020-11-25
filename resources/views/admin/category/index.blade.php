@extends('admin/mainadmin')

@section('content')

<div class="row">
    <div class="col-md-6 col-sm-12">
        <h3>Category</h3>
    </div>
    <div class="col-md-6 col-sm-12">
    <a href="{{route('category.create')}}"><button class="btn btn-primary btn-sm float-right"><i class="fa fa-plus"></i></button></a>
    </div>
</div>
<div class="row">
    <div class="col-sm-12">
            
        @if(session()->exists('success'))
            <p class="alert alert-success">{{session()->get('success')}}</p>
            @endif

        <div class="table-responsive">
            <table class="table table-stripped table-sm">
                <thead>
                    <tr>
                        <th>Option</th>
                        <th>No.</th>
                        <th>Name</th>
                        {{-- <th>Images</th> --}}
                        <th>Created at</th>
                        <th>Updated at</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($category as $value)

                        <tr>
                            <td>
                            <a href="{{ route('category.edit',$value->id) }}"><button class="btn btn-warning btn-sm float-left mr-1"><i class="fa fa-edit"></i></button></a>
                            <form action="{{ route('category.destroy',$value->id) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <button type="submit" name="submit" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button>
                                </form>
                            </td>
                            <td>{{$loop->index+1}}</td>
                            <td>{{ $value->CategoryName }}</td>
                            {{-- <td>{{$value->img}}</td> --}}
                            <td>{{ $value->created_at->diffForHumans()}}</td>
                        <td>{{$value->updated_at->diffForHumans()}}</td>
                        </tr>

                        @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection