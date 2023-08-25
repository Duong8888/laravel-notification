@extends('layouts.app')
@section('content')
    <div class="container row">
        <div class="col-6 m-auto">
            <a href="{{route('product.create')}}" class="btn btn-outline-primary">Add new product</a>
            <table class="table">
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Price</th>
                    <th>Action</th>
                </tr>

{{--                @foreach($data as $key => $val)--}}
{{--                <tr>--}}
{{--                    <td>{{$val->id}}</td>--}}
{{--                    <td>{{$val->name}}</td>--}}
{{--                    <td>{{$val->price}}</td>--}}
{{--                    <td>--}}
{{--                        <div class="d-flex">--}}
{{--                            <a href="{{route('product.edit',$val)}}" class="btn-outline-warning btn">Edit</a>--}}
{{--                            <form action="{{route('product.destroy',$val)}}" method="POST">--}}
{{--                                @csrf--}}
{{--                                @method('DELETE')--}}
{{--                                <button class="btn-outline-danger btn mx-2">Delete</button>--}}
{{--                            </form>--}}
{{--                        </div>--}}
{{--                    </td>--}}
{{--                </tr>--}}
{{--                @endforeach--}}
            </table>
        </div>
    </div>
@endsection
