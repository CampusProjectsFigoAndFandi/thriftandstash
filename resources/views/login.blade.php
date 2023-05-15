@extends('layout')
@section('content')
    @include('partials._nav')
    <main>
        <x-flash-message />
        <div class="container-xxl my-4">
            <div class="row">
                <div class="col-6 m-auto">
                    <div class="col-10 offset-2 m-auto d-flex justify-content-center">
                        <img src="{{ asset('images/imageCap.jpg') }}" width="320px" height="320px" class="rounded-circle"
                            alt="">
                    </div>
                </div>
                <div class="col-6">
                    <div class="col-8 offset-2">
                        <h4 class="my-5 text-center">Login</h4>
                        <form action="/login" method="POST" id="formLogin">
                            @csrf
                            <div class="form-floating my-4">
                                <input type="text" name="username" class="form-control" id="floatingUsername"
                                    placeholder="Username" value="{{ old('username') }}">
                                <label for="floatingUsername">Username</label>
                                @error('username')
                                    <div class="ms-1 mt-1 text-start text-danger">
                                        {{ $message }}
                                    </div>
                                @endError
                            </div>
                            <div class="form-floating my-4">
                                <input type="password" name="password" class="form-control" id="floatingPassword"
                                    placeholder="Password" value="{{ old('password') }}">
                                <label for="floatingPassword">Password</label>
                                @error('password')
                                    <div class="ms-1 mt-1 text-start text-danger">
                                        {{ $message }}
                                    </div>
                                @endError
                            </div>
                            <button class="btn btn-success form-control mt-2">Login</button>
                            <span>Don't have an account ? <a href="/register">Register</a> </span>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
