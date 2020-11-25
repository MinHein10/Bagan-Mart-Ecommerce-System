@extends('admin/mainadmin')

@section('content')

<div class="row">
    <div class="col-md-6 col-sm-12">
        <h3>Products</h3>
    </div>
    <div class="col-md-6 col-sm-12">
    <a href="{{route('product.create')}}"><button class="btn btn-primary btn-sm float-right"><i class="fa fa-plus"></i></button></a>
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
                        <th>Product Name</th>
                        <th>Category Name</th>
                        <th>Images</th>
                        <th>Description</th>
                        <th>Qty</th>
                        <th>Price</th>
                        <th>Created at</th>
                        <th>Updated at</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($products as $value)

                        <tr>
                            <td>
                            <a href="{{ route('product.edit',$value->id) }}"><button class="btn btn-warning btn-sm float-left mr-1"><i class="fa fa-edit"></i></button></a>
                            <form action="{{ route('product.destroy',$value->id) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <br><button type="submit" name="submit" class="btn btn-danger btn-sm mt-2"><i class="fa fa-trash"></i></button>
                                </form>
                            </td>
                            <td>{{ $loop->index+1 }}</td>
                            {{-- <td>{{$value->id}}</td> --}}
                            <td>{{ $value->ProductName}}</td>
                            <td>{{$value->Category_id}}</td>
                            
                            {{-- <td>{{ App\Model\Categories::find($value->Category_id)}}</td>                            --}}
                            
                             {{-- <td>{{ App\Model\Products::find($value->Category_id)->Categories->CategoryName }}</td> --}}

                         {{-- <td><a href="{{$value->Img}}"></a></td> --}}
                            <td><a href="{{ asset('uploads/'.$value->Img) }}" target="blank"><img src="{{ asset('uploads/'.$value->Img) }}" alt="{{ $value->Img }}" title="{{ $value->Img }}" style="width: 100px;"></a></td>
                            <td>{{$value->Description}}</td>
                            <td>{{$value->Qty}}</td>
                            <td>{{$value->Price}}</td>
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