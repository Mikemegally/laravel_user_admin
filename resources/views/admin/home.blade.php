@extends('layouts.admin')
@section('content')
    <form action="{{route('logout')}}" method="post">
        @csrf
        <button class="btn btn-primary">
            Logout
        </button>
    </form>
    <p class="text text-danger">
        welcome admin
    </p>
@endsection
