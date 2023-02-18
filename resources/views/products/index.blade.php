@extends('layouts.user')
@section('user_content')
    <h3>
        product list
    </h3>
    @if(session()->has('success'))
        <p class="alert alert-success">
            {{session()->get('success')}}
        </p>
    @endif
    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">name</th>
            <th scope="col">price</th>
            <th scope="col">category</th>
            <th scope="col">user name</th>
            <th scope="col">action</th>
        </tr>
        </thead>
        <tbody>
        @foreach( $products as $product)
        <tr>
            <th scope="row">{{$product->id}}</th>
            <td>{{$product->name}}</td>
            <td>{{$product->price}}</td>
            <td>{{$product->category}}</td>
            <td>{{$product->user->name}}</td>
            <td>
                <a class="btn btn-success" href="{{route('products.create')}}">create new product</a>
            </td>
        </tr>
        @endforeach
        </tbody>
    </table>
@endsection
