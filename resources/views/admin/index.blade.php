@extends('layouts.admin')
@section('content')
    <div class="container">
        <h3 class="text text-primary">users list</h3>
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
                <th scope="col">email</th>
                <th scope="col">role</th>
                <th scope="col">add</th>
                <th scope="col">delete</th>
            </tr>
            </thead>
            <tbody>
            @foreach($users as $user)
                <tr>
                    <th scope="row">{{$user->id}}</th>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                    <td>
                        {{$user->is_admin?'Admin':'User'}}
                    </td>
                    <td>
                        <a class="btn btn-success" href="{{route('users.create')}}">create other user</a>
                    </td>
                    <td>
                        <a class="btn btn-danger" href="{{route('users.destroy',$user->id)}}">delete user</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
