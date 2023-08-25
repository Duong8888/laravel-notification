@extends('layouts.app')
@section('content')
    <div class="container row">
        <div class="col-6 m-auto">
            <form method="POST" action="{{route('product.store')}}">
                @csrf
                <label class="form-label">Name</label>
                <input type="text" class="form-control" name="name">
                <label class="form-label">Price</label>
                <input type="text" class="form-control" name="price">
                <button class="btn btn-outline-primary mt-3">Add product</button>
            </form>
    </div>
@endsection
