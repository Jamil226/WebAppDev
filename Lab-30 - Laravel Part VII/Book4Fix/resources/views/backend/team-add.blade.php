@extends('backend.layouts.main')
@section('title', 'Add Team Member')
@section('main-container')
            @if ($message = Session::get('success'))
                <div class="alert alert-success alert-block p-4 border-left-success">
                    <strong>
                        {{$message}}
                    </strong>
                </div>
            @endif
            <div class="container-fluid">
                <br>
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <a href="{{url('/admin/team')}}"><button class="btn btn-info">Team Member List</button></a></a>
                    </div>
                    <div class="card-body">
                        <form method="post" action="/admin/team-add" enctype="multipart/form-data">
                            @csrf
                            <div class="form-floating mb-3">
                                <label for="fullname">Full Name</label>
                                <input class="form-control" id="fullname" type="text" placeholder="Enter Full Name" name="fullname" value="{{old('fullname')}}">
                                @if ($errors->has('fullname'))
                                    <span class="text-danger">
                                        {{$errors->first('fullname')}}
                                    </span>
                                @endif
                            </div>
                            <div class="form-floating mb-3">
                                <label for="email">Email</label>
                                <input class="form-control" id="email" type="text" placeholder="Enter Email Address" name="email" value="{{old('email')}}">
                                @if ($errors->has('email'))
                                    <span class="text-danger">
                                        {{$errors->first('email')}}
                                    </span>
                                @endif
                            </div>
                            <div class="form-floating mb-3">
                                <label for="designation">Designation</label>
                                <input class="form-control" id="designation" type="text" placeholder="Enter Designation" name="designation" value="{{old('designation')}}">
                                @if ($errors->has('designation'))
                                    <span class="text-danger">
                                        {{$errors->first('designation')}}
                                    </span>
                                @endif
                            </div>
                            <div class="form-floating mb-3">
                                <label for="introduction">Short Introduction</label>
                                <input class="form-control" id="introduction" type="text" placeholder="Enter Short Introduction" name="shortintro" value="{{old('shortintro')}}">
                                @if ($errors->has('shortintro'))
                                    <span class="text-danger">
                                        {{$errors->first('shortintro')}}
                                    </span>
                                @endif
                            </div>
                            <div class="form-floating mb-3">
                                <label for="introduction_long">Long Introduction</label>
                                <textarea class="form-control" id="introduction_long" type="text" name="longintro" placeholder="Enter Long Introduction" value="{{old('longintro')}}"></textarea>
                                @if ($errors->has('longintro'))
                                    <span class="text-danger">
                                        {{$errors->first('longintro')}}
                                    </span>
                                @endif
                            </div>
                            <div class="form-floating mb-3">
                                <label for="twitter">Twitter</label>
                                <input class="form-control" id="twitter" type="text" placeholder="Enter Twitter Profile" name="twitter" value="{{old('twitter')}}"/>
                                @if ($errors->has('twitter'))
                                    <span class="text-danger">
                                        {{$errors->first('twitter')}}
                                    </span>
                                @endif
                            </div>
                            <div class="form-floating mb-3">
                                <label for="fb">Facebook</label>
                                <input class="form-control" id="fb" type="text" placeholder="Enter Facebook Profile" name="facebook" value="{{old('facebook')}}">
                                @if ($errors->has('facebook'))
                                    <span class="text-danger">
                                        {{$errors->first('facebook')}}
                                    </span>
                                @endif
                            </div>
                            <div class="form-floating mb-3">
                                <label for="insta">Instagram</label>
                                <input class="form-control" id="insta" type="text" placeholder="Enter Insta Profile" name="insta" value="{{old('insta')}}">
                                @if ($errors->has('insta'))
                                    <span class="text-danger">
                                        {{$errors->first('insta')}}
                                    </span>
                                @endif
                            </div>
                            <div class="form-floating mb-3">
                                <label for="linkedin">Linkedin</label>
                                <input class="form-control" id="linkedin" type="text" placeholder="Enter Linkedin Profile" name="linkedin" value="{{old('linkedin')}}">
                                @if ($errors->has('linkedin'))
                                    <span class="text-danger">
                                        {{$errors->first('linkedin')}}
                                    </span>
                                @endif
                            </div>
                            <div class="form-floating mb-3">
                                <label for="image">Image</label>
                                <input class="form-control" id="image" type="file" accept=".png, .jpg, .jpeg" name="image" value="{{old('image')}}" style="padding-bottom:38px">
                                @if ($errors->has('image'))
                                    <span class="text-danger">
                                        {{$errors->first('image')}}
                                    </span>
                                @endif
                            </div>
                            <div class="mt-4 mb-0">
                                <div class="d-grid">
                                    <input class="btn btn-info btn-block" type="submit" value="Add Member" name="submit">
                                </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
