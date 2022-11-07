@extends('layouts.auth')
@section('title', 'Register')
@section('content')
    <div class="register-box">
        <div class="card card-outline card-primary">
            <div class="card-header text-center">
                <a href="#" class="h3">Master Prowriters</a>
            </div>
            <div class="card-body">
                <p class="login-box-msg">Register a new user</p>
                <form action="{{ route('register') }}" method="post">
                    @csrf
                    <div class="input-group mb-3">
                        <input type="text" class="form-control @error('name')is-invalid @enderror" placeholder="Full name"
                            name="name" value="{{ old('name') }}">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-user"></span>
                            </div>
                        </div>
                        @error('name')
                            <span class="invalid-feedback"><strong> {{ $message }}</strong></span>
                        @enderror
                    </div>

                    <div class="input-group mb-3">
                        <input type="text" class="form-control @error('username')is-invalid @enderror" placeholder="Username"
                            name="username" value="{{ old('username') }}">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-user"></span>
                            </div>
                        </div>
                        @error('username')
                            <span class="invalid-feedback"><strong> {{ $message }}</strong></span>
                        @enderror
                    </div>

                    <div class="input-group mb-3">
                        <input type="email" class="form-control @error('email')is-invalid @enderror" placeholder="Email"
                            name="email" value="{{ old('email') }}">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                        @error('email')
                            <span class="invalid-feedback"><strong> {{ $message }}</strong></span>
                        @enderror
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" class="form-control @error('password')is-invalid @enderror"
                            placeholder="Password" name="password">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                        @error('password')
                            <span class="invalid-feedback"><strong> {{ $message }}</strong></span>
                        @enderror
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" class="form-control @error('password_confirmation')is-invalid @enderror"
                            placeholder="Retype password" name="password_confirmation">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                        @error('password_confirmation')
                            <span class="invalid-feedback"><strong> {{ $message }}</strong></span>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary btn-block">Register</button>
                </form>

                {{-- <a href="{{ route('login') }}" class="text-center">I already have a membership</a> --}}
            </div>
            <!-- /.form-box -->
        </div><!-- /.card -->
    </div>
@endsection
