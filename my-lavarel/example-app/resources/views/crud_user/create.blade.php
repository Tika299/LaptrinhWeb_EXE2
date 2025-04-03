@extends('dashboard')

@section('content')
<div id="root">
    <div class="background-form">
        <form action="{{ route('user.postUser') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Username</label>
                <input type="text" class="form-control" id="name"
                    name="name"
                    required autofocus>
                @if ($errors->has('name'))
                <span class="text-danger">{{ $errors->first('name') }}</span>
                @endif
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password"
                    name="password" required>
                @if ($errors->has('password'))
                <span class="text-danger">{{ $errors->first('password') }}</span>
                @endif
            </div>
            <!-- <div class="mb-3">
                    <label for="password2" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password2">
                </div> -->
            <div class="mb-3">
                <label for="email" class="form-label">Email address</label>
                <input type="email" class="form-control" id="email" aria-describedby="emailHelp"
                    name="email" required autofocus>
                @if ($errors->has('email'))
                <span class="text-danger">{{ $errors->first('email') }}</span>
                @endif
            </div>
            <div class="mb-3">
                <label for="like" class="form-label">Like</label>
                <input type="text" class="form-control" id="like"
                    name="like" required autofocus>
                @if ($errors->has('like'))
                <span class="text-danger">{{ $errors->first('like') }}</span>
                @endif
            </div>
            <div class="mb-3">
                <label for="facebook" class="form-label">Facebook</label>
                <input type="text" class="form-control" id="facebook"
                    name="facebook" required autofocus>
                @if ($errors->has('facebook'))
                <span class="text-danger">{{ $errors->first('facebook') }}</span>
                @endif
            </div>
            <div class="mb-3">
                <label for="avatar" class="form-label">Avatar</label>
                <input class="form-control" type="file" id="formFile" name="avatar" require autofocus accept="image/*">
                @if ($errors->has('avatar'))
                <span class="text-danger">{{ $errors->first('avatar') }}</span>
                @endif
            </div>
            <div class="btn_group">
                <a role="button" href="{{ route('login') }}" class="btn text-primary-emphasis">Đã có tài khoản</a>
                <button type="submit" class="btn btn-primary">Đăng ký</button>
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