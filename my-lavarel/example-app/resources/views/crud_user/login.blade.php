@extends('dashboard')

@section('content')

<div class="root">
    <div class="background-form">
        <form method="POST" action="{{ route('user.authUser') }}">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Username</label>
                <input type="text" class="form-control" id="name"
                    name="name" require autofocus>
                <div id="name" class="form-text">We'll never share your email with anyone else.</div>
                @if ($errors->has('name'))
                <span class="text-danger">{{ $errors->first('name') }}</span>
                @endif
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password"
                    require autofocus>
                @if ($errors->has('password'))
                <span class="text-danger">{{ $errors->first('password') }}</span>
                @endif
            </div>
            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1" name="remember">
                <label class="form-check-label" for="exampleCheck1">Ghi nhớ mật khẩu</label>
            </div>
            <div class="btn_group">
                <button type="submit" class="btn btn-primary">Đăng nhập</button>
            </div>
        </form>
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

@endsection