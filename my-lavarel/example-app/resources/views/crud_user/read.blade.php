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
                    <th>Thao tác</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{$messi->id}}</td>
                    <td>{{$messi->name}}</td>
                    <td>{{$messi->email}}</td>
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