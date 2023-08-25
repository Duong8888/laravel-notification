@extends('layouts.app')
@section('content')
    <div class="container row">
        <div class="col-6 m-auto">
            <form method="POST" action="{{route('product.update',$product)}}">
                @csrf
                @method('PUT')
                <label class="form-label">Name</label>
                <input type="text" class="form-control" value="{{$product->name}}" name="name">
                <label class="form-label">Price</label>
                <input type="text" class="form-control"  value="{{$product->price}}" name="price">
                <button class="btn btn-outline-primary mt-2">Update product</button>
            </form>
        </div>
@endsection
