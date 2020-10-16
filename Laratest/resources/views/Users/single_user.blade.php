@extends('Users.index')

@section('sadrzaj')

   <div class="ml-3">
       <h1>User ID: {{ $user->id }}</h1>

       <p>Username: {{ $user->username }}</p>
       <p>Password: {{ $user->password }}</p>

{{--       {{ dd(asset($user->photo)) }}--}}
       <img src="{{ asset($user->photo) }}" alt="Slika" width="300">

   </div>

   <br>
   <a href="/pages/{{ $user->id }}/edit" class="btn btn-primary ml-3">Edit</a>

@endsection
