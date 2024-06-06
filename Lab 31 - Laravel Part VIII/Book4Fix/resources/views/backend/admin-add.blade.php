@extends('backend.layouts.main')
@section('title', 'Add an Admin')
@section('main-container')
            <div class="container-fluid"><br>
                <div class="card shadow mb-4">
                    <div class="card-header py-3"><a href="{{url('/admin/admins-list')}}" class="btn btn-info">Admins</a></div>
                    <div class="card-body">
                        <form method="post" action="{{$url}}">
                            @csrf
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <div class="form-floating mb-3 mb-md-0">
                                        <label for="inputFirstName">First Name</label>
                                        <input class="form-control" id="inputFirstName" type="text" placeholder="Enter your first name" name="first_name" value="{{old('first_name')}}">
                                        <span class="text-danger">
                                            @error('first_name')
                                                {{ $message }}
                                            @enderror
                                        </span>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <label for="inputLastName">Last Name</label>
                                        <input class="form-control" id="inputLastName" type="text" placeholder="Enter your last name" name="last_name" value="{{old('last_name')}}">
                                        <span class="text-danger">
                                            @error('last_name')
                                                {{ $message }}
                                            @enderror
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <div class="form-floating mb-3 mb-md-0">
                                        <label for="inputEmail">Email Address</label>
                                        <input class="form-control" id="inputEmail" type="email" placeholder="name@example.com" name="email" value="{{old('email')}}">
                                        <span class="text-danger">
                                            @error('email')
                                                {{ $message }}
                                            @enderror
                                        </span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating mb-3 mb-md-0">
                                        <label for="inputContact">Contact Number</label>
                                        <input class="form-control" id="inputContact" type="tel" placeholder="+923451234567" name="contact" value="{{old('contact')}}">
                                        <span class="text-danger">
                                            @error('contact')
                                                {{ $message }}
                                            @enderror
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <div class="form-floating mb-3 mb-md-0">
                                        <label for="inputPassword">Password</label>
                                        <input class="form-control" id="inputPassword" type="password" placeholder="Create a password" name="password" value="{{old('password')}}">
                                        <span class="text-danger">
                                            @error('password')
                                                {{ $message }}
                                            @enderror
                                        </span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating mb-3 mb-md-0">
                                        <label for="inputPasswordConfirm">Confirm Password</label>
                                        <input class="form-control" id="inputPasswordConfirm" type="password" placeholder="Confirm password" name="confirm_password" value="{{old('confirm_password')}}">
                                        <span class="text-danger">
                                            @error('confirm_password')
                                                {{ $message }}
                                            @enderror
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-4 mb-0">
                                <div class="d-grid">
                                <input class="btn btn-info btn-block" type="submit" value="Register an Admin" name="submit">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
