@extends('admin/mainadmin')


@section('content')

@include('admin/template/errormessage')

<div class="row">
    <div class="col-sm-12">
        <form action="{{ route('product.update',$product->id) }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="row">

                {{-- ProductName and Category --}}
                <div class="col-md-4 col-sm-12">
                    <div class="form-group">
                        <label for="name">Product Name</label>
                        <input type="text" name="ProductName" value="{{ $product->ProductName }}" placeholder="Enter Product Name" class="form-control form-control-sm" id="name">
                    </div>
                    <div class="form-group">
                        <label for="category_id">Category</label>
                        <select name="Category_id" id="Category_id" class="form-control form-control-sm">
                            @foreach($category as $value)

                                <option value="{{ $product->Category_id }}"@if($product->Category_id == $value->id) selected @endif>{{ $value->CategoryName }}</option>

                                @endforeach
                        </select>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-sm-12">
                    <div class="form-group">
                        <label for="Price">Prices</label>
                        <input type="text" name="Price" value="{{ $product->Price }}" placeholder="Enter Product Prices" class="form-control form-control-sm" id="Prices">
                    </div>
    
                    <div class="form-group">
                        <label for="photo">Images</label>
                        <input type="file" name="Img" class="form-control form-control-sm" id="Img">
                    </div>
                    <div class="form-group">
                        <label for="Qty">Quantity</label>
                        <input type="text" name="Qty" value="{{ $product->Qty }}" placeholder="Enter Quantity" class="form-control form-control-sm" id="Qty">
                    </div>
                    <div class="form-grooup">
                        <label for="description">Description</label>
                        <textarea name="description" id="description" cols="30" rows="5" placeholder="Enter Description..." class="form-control form-control-sm">{{ $product->Description }}</textarea>
                    </div>
                </div>
            </div><br>
            
            <div class="form-group">
                <a href="{{ route('product.index') }}"><button class="btn btn-danger btn-sm" type="button"><i class="fa fa-times"></i></button></a>
                <button type="submit" name="submit" class="btn btn-primary btn-sm"><i class="fa fa-check"></i></button>
            </div>
        </form>
    </div>
</div>


@endsection