@extends('Users.index')

@section('sadrzaj')

    <h1 class="ml-1">All Users</h1>

    @foreach($users as $user)
        <div class="ml-4" style="text-align: center">
            <h3>
                <a href="/pages/{{ $user->id }}">User ID: {{ $user->id }}</a>
            </h3>
            <p>Username: {{ $user->username }}</p>
            <p>Password: {{ $user->password }}</p>
            <form action="/pages/{{ $user->id }}" method="POST">
                @method('DELETE')
                @csrf
                <input type="submit" value="Delete this post">
            </form>
        </div>
        <hr>
    @endforeach

    {{ $users->links("pagination::bootstrap-4") }}

@endsection
