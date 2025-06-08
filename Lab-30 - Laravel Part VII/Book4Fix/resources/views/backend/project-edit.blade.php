@extends('backend.layouts.main')
@section('title', 'Edit Project')
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
                        <a href="{{url('/admin/projects')}}"><button class="btn btn-info">Projects List</button></a></a>
                    </div>
                    <div class="card-body">
                        <form method="post" action="/admin/project-edit/{{$project->id}}" enctype="multipart/form-data">
                            @csrf
                            @method('put')
                            <div class="form-floating mb-3">
                                <label for="title">Title</label>
                                <input class="form-control" id="title" type="text" placeholder="Enter Project Title" name="title" value="{{old('title', $project->title)}}">
                                @if ($errors->has('title'))
                                    <span class="text-danger">
                                        {{$errors->first('title')}}
                                    </span>
                                @endif
                            </div>
                            <div class="form-floating mb-3">
                                <label for="details">Details</label>
                                <input class="form-control" id="details" type="text" placeholder="Enter Project Details" name="details" value="{{old('details', $project->details)}}">
                                @if ($errors->has('details'))
                                    <span class="text-danger">
                                        {{$errors->first('details')}}
                                    </span>
                                @endif
                            </div>
                            <div class="form-floating mb-3">
                                <label for="category">Category</label>
                                <input class="form-control" id="category" type="text" placeholder="Enter Project Category" name="category" value="{{old('category', $project->category)}}">
                                @if ($errors->has('category'))
                                    <span class="text-danger">
                                        {{$errors->first('category')}}
                                    </span>
                                @endif
                            </div>
                            <div class="form-floating mb-3">
                                <label for="client">Client</label>
                                <input class="form-control" id="client" type="text" placeholder="Enter Project Client" name="client" value="{{old('client', $project->client)}}">
                                @if ($errors->has('client'))
                                    <span class="text-danger">
                                        {{$errors->first('client')}}
                                    </span>
                                @endif
                            </div>
                            <div class="form-floating mb-3">
                                <label for="link">Link</label>
                                <input class="form-control" id="link" type="text" placeholder="Enter Project Client" name="link" value="{{old('link', $project->link)}}"/>
                                @if ($errors->has('link'))
                                    <span class="text-danger">
                                        {{$errors->first('link')}}
                                    </span>
                                @endif
                            </div>
                            <div class="form-floating mb-3">
                                <label for="technology">Technology</label>
                                <input class="form-control" id="fb" type="text" placeholder="Enter Project Technology" name="technology" value="{{old('technology', $project->technology)}}">
                                @if ($errors->has('technology'))
                                    <span class="text-danger">
                                        {{$errors->first('technology')}}
                                    </span>
                                @endif
                            </div>
                            <div class="form-floating mb-3">
                                <label for="image">Image</label>
                                <input class="form-control" id="image" type="file" name="image" value="{{old('image', $project->image)}}" style="padding-bottom:38px">
                                @if ($errors->has('image'))
                                    <span class="text-danger">
                                        {{$errors->first('image')}}
                                    </span>
                                @endif
                            </div>
                            <div class="mt-4 mb-0">
                                <div class="d-grid">
                                    <input class="btn btn-info btn-block" type="submit" value="Update Project" name="submit">
                                </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
