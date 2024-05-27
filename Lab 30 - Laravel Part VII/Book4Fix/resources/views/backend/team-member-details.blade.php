@extends('backend.layouts.main')
@section('title', 'Team Member Details')
@section('main-container')
            <div class="container-fluid"><br>
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-info"><a class="text-info" href="{{url('/admin')}}">Main Menu</a> | Team Member Details</h6>
                        <a href="{{url('/admin/team')}}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm float-right"><i
                        class="fas fa-arrow-left fa-sm text-white-50"></i>Team Members List</a>
                    </div>
                    <div class="card-body">
                        <p>
                            <b>Member ID: </b> {{$team->id}}
                        </p>
                        <p>
                            <b>Full Name: </b> {{$team->fullname}}
                        </p>
                        <p>
                            <b>Designation: </b> {{$team->designation}}
                        </p>
                        <p>
                            <b>Short Intro: </b> {{$team->shortintro}}
                        </p>
                        <p>
                            <b>Long Intro: </b> {{$team->longintro}}
                        </p>
                        <p>
                            <b>Linkedin: </b> {{$team->linkedin}}
                        </p>
                        <p>
                            <b>Insta: </b> {{$team->insta}}
                        </p>
                        <p>
                            <b>Twitter: </b> {{$team->twitter}}
                        </p>
                        <p>
                            <b>Faceboo: </b> {{$team->facebook}}
                        </p>
                        <img src="/backend/images/team/{{$team->image}}" class="rounded-circle" width="100px" height="100px" alt="Image Not Found">
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
