@extends('Users.index')

@section('sadrzaj')

    <div>

            @if($route === '/pages')
                <form action="{{ $route }}" method="POST" class="ml-3" enctype="multipart/form-data">
                    @csrf
                    <h2 class="mb-3">Add new user</h2>
                    <input type="text" name="username" placeholder="username" value="{{ old('username') }}">
                    <input type="text" name="password" placeholder="password" value="{{ old('password') }}">
                    <input type="file" name="photo" id="photo">
                    <br><br>
                    <input type="submit" class="btn btn-primary" value="Add">
                </form>
            @else
                <form action="{{ $route }}" method="POST" class="ml-3">
                    @method('PUT')
                    @csrf
                    <h2  class="mb-3">Edit user</h2>
                    <input type="text" name="username" value="{{ $user->username }}">
                    <input type="text" name="password" value="{{ $user->password }}">
                    <input type="file" name="photo" id="photo">
                    <br><br>
                    <input type="submit" class="btn btn-primary" value="Edit">
                </form>
            @endif

    </div>

@endsection
