@extends('layouts.user')
@section('user_content')
    <form action="{{route('logout')}}" method="post">
        @csrf
        <button class="btn btn-primary">
            Logout
        </button>
    </form>
    <p>
        welcome user
    </p>
@endsection
