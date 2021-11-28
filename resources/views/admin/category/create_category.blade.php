@extends('layouts.master')

@section('content')

    <div>
        <p class="h3 bg-dark" style="padding-top: 10px; padding-left: 10px; padding-bottom: 10px"> Create Category </p>
    </div>
    @if(session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show text-center" role="alert">
            <strong>Success!</strong> {{session()->get('success')}}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="row">
        <div class="col-md-6 p-2">
            <form action="{{route('admin.store.category')}}" method="post">
                @csrf
                <div class="form-group">
                    <input type="text" class="form-control" id="title" placeholder="Title" name="title">
                </div>
                <div class="clearfix">
                    <button type="submit" class="btn btn-primary float-right">Submit</button>
                    <a href="{{route('admin.categories')}}" class="btn btn-warning float-left">Back</a>
                </div>
            </form>
        </div>
    </div>
@endsection