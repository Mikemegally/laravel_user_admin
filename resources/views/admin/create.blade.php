@extends('layouts.admin')
@section('content')
    <div class="container">
        <h3 class="text text-primary">
            user create
        </h3>
        <form action="{{route('users.store')}}" method="post" >
            @csrf
            <div class="mb-3 row">
                <label for="name" class="col-sm-2 col-form-label">Name</label>
                <div class="col-sm-10">
                    <input type="text"  class="form-control" id="name" value="{{old('name')}}" name="name">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="Email" class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-10">
                    <input type="text"  class="form-control" id="Email" value="{{old('email')}}" name="email">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="Password" class="col-sm-2 col-form-label">Password</label>
                <div class="col-sm-10">
                    <input type="password" class="form-control" id="Password" name="password">
                </div>
            </div>
            <button type="submit" class="btn btn-primary">
                Create
            </button>

        </form>
    </div>
@endsection
