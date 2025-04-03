@extends('dashboard')

@section('content')
<div class="root">
    <div class="background-form">
        <form action="{{ route('user.postUpdateUser') }}" method="POST">
            @csrf
            <input name="id" type="hidden" value="{{$user->id}}">
            <div class="mb-3">
                <label for="name" class="form-label">Username</label>
                <input type="text" class="form-control" id="name"
                        value="{{ $user->name }}"
                        name="name" require autofocus>
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
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1">
            </div> -->
            <div class="mb-3">
                <label for="email_address" class="form-label">Email address</label>
                <input type="email" class="form-control" id="email_address" aria-describedby="emailHelp"
                    value="{{ $user->email }}"
                    name="email" require autofocus>
                @if ($errors->has('email'))
                <span class="text-danger">{{ $errors->first('email') }}</span>
                @endif
            </div>
            <div class="mb-3">
                <label for="like" class="form-label">Like</label>
                <input type="text" class="form-control" id="like"
                    value="{{ $user->like }}"
                    name="like" require autofocus>
                @if ($errors->has('like'))
                <span class="text-danger">{{ $errors->first('like') }}</span>
                @endif
            </div>
            <div class="mb-3">
                <label for="facebook" class="form-label">Facebook</label>
                <input type="facebook" class="form-control" id="facebook"
                    value="{{ $user->facebook }}"
                    name="facebook" require autofocus>
                @if ($errors->has('facebook'))
                <span class="text-danger">{{ $errors->first('facebook') }}</span>
                @endif
            </div>
            <div class="mb-3">
                <label for="avatar" class="form-label">Avatar</label>
                <input class="form-control" type="file" id="formFile" name="avatar" require autofocus>
                @if ($errors->has('avatar'))
                <span class="text-danger">{{ $errors->first('avatar') }}</span>
                @endif
            </div>
            <div class="btn_group">
                <button type="submit" class="btn btn-primary">Chỉnh sửa</button>
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
</div>
@endsection