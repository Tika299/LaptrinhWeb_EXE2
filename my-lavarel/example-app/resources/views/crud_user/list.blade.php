@extends('dashboard')

@section('content')
<div class="root">
    <div class="background-list">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>#</th>
                    <th>UserName</th>
                    <th>Email</th>
                    <th>Like</th>
                    <th>Facebook</th>
                    <th>Avatar</th>
                    <th>Thao tác</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    @foreach($users as $user)
                    <tr>
                        <th>{{ $user->id }}</th>
                        <th>{{ $user->name }}</th>
                        <th>{{ $user->email }}</th>
                        <th>{{ $user->like }}</th>
                        <th>{{ $user->facebook }}</th>
                        <th>{{ $user->avatar }}</th>
                        <th>
                            <a href="{{ route('user.readUser', ['id' => $user->id]) }}">View</a> |
                            <a href="{{ route('user.updateUser', ['id' => $user->id]) }}">Edit</a> |
                            <a href="{{ route('user.deleteUser', ['id' => $user->id]) }}">Delete</a>
                        </th>
                    </tr>
                    @endforeach
                </tr>
            </tbody>
        </table>
    </div>
    <footer class="navbar navbar-expand-sm bg-light justify-content-center my-footer">
        <div class="container-fluid justify-content-center">
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Lê Xuân Vũ - 23211TT4449</a>
                    </li>
                </ul>
            </div>
        </div>
    </footer>
</div>
</div>
@endsection