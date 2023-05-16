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
                        <h4 class="my-5 text-center">Register</h4>
                        <form action="/register" method="POST" id="formLogin">
                            @csrf
                            <div class="form-floating my-4">
                                <input type="text" name="name" class="form-control" id="name" placeholder="name"
                                    value="{{ old('name') }}">
                                <label for="name">Name</label>
                                @error('name')
                                    <div class="ms-1 mt-1 text-start text-danger">
                                        {{ $message }}
                                    </div>
                                @endError
                            </div>
                            <div class="form-floating my-4">
                                <input type="email" name="email" class="form-control" id="email" placeholder="email"
                                    value="{{ old('email') }}">
                                <label for="email">Email</label>
                                @error('email')
                                    <div class="ms-1 mt-1 text-start text-danger">
                                        {{ $message }}
                                    </div>
                                @endError
                            </div>
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
                                <input type="text" name="cellnumber" class="form-control" id="cellnumber"
                                    placeholder="cellnumber" value="{{ old('cellnumber') }}">
                                <label for="cellnumber">WhatsApp Number</label>
                                @error('cellnumber')
                                    <div class="ms-1 mt-1 text-start text-danger">
                                        {{ $message }}
                                    </div>
                                @endError
                            </div>
                            <div class="form-floating my-4">
                                <input type="password" name="password" class="form-control" id="password"
                                    placeholder="Password" value="{{ old('password') }}">
                                <label for="password">Password</label>
                                @error('password')
                                    <div class="ms-1 mt-1 text-start text-danger">
                                        {{ $message }}
                                    </div>
                                @endError
                            </div>
                            <div class="form-floating my-4">
                                <input type="password" name="password_confirmation" class="form-control"
                                    id="floatingPassword" placeholder="Confirm Password"
                                    value="{{ old('password_confirmation') }}">
                                <label for="floatingPassword">Confirm Password</label>
                                @error('password_confirmation')
                                    <div class="ms-1 mt-1 text-start text-danger">
                                        {{ $message }}
                                    </div>
                                @endError
                            </div>
                            <button class="btn btn-success form-control mt-2">Register</button>
                            <span>Already have an account ? <a href="/login">Login</a> </span>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
