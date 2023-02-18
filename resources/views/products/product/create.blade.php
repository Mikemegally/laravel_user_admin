@extends('layouts.user')
@section('user_content')
    <h3>
        Create product page
    </h3>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{route('products.store')}}" method="post">
        @csrf

        <div class="mb-3 row">
            <label for="inputPassword" class="col-sm-2 col-form-label">Name</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="name" name="name">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="inputPassword" class="col-sm-2 col-form-label">Price</label>
            <div class="col-sm-10">
                <input type="number" class="form-control" id="name" name="price">
            </div>
        </div>


        <div class="mb-3 row">
            <label for="inputPassword" class="col-sm-2 col-form-label">Category</label>
            <div class="col-sm-10">
                <select class="form-control" aria-label="Default select example" name="category">
                    <option value="clothes">Clothes</option>
                    <option value="shoes">Shoes</option>
                    <option value="fruits">Fruits</option>
                </select>
            </div>
        </div>

        <button class="btn btn-secondary" type="submit">
            Save
        </button>

    </form>
@endsection
