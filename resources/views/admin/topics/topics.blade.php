@extends('layouts.master')

@section('content')

    <div class="row p-3">
        <div class="col-md-6">
            <nav style="">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('admin.webTechnologies')}}">Web Technologies</a></li>
                    <li class="breadcrumb-item"><a href="{{url()->previous()}}">Subcategories</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Topics</li>
                </ol>
            </nav>
        </div>
        <div class="col-md-4 clearfix">
            <div class="input-group mb-3">
                <input type="text" class="form-control">
                <div class="input-group-append">
                    <span class="input-group-text bg-dark">Search</span>
                </div>
            </div>
        </div>
        <div class="col-md-2 clearfix">
            <a href="{{route('admin.create.topic',[$subcategory])}}" class="btn btn-success float-right"> Add Topic </a>
        </div>
    </div>

    <div class="row ">

        @forelse($topics as $topic)
            <div class="col-md-12">
                <div class="card">
                    <h5 class="card-header">{{$topic->topic_title}}</h5>
                    <div class="card-body">
                        <p class="card-text">
                            {!! $topic->topic_description !!}
                        </p>
                        <a href="#" class="btn btn-warning">Edit</a>
                        <a href="{{route('admin.view.topic',[$topic->id])}}" class="btn btn-primary">View</a>
                    </div>
                </div>
            </div>
        @empty

        @endforelse


        {{--<div class="col-lg-3 col-6">--}}
        {{--<!-- small box -->--}}
        {{--<div class="small-box bg-success">--}}
        {{--<div class="inner">--}}
        {{--<h3>53<sup style="font-size: 20px">%</sup></h3>--}}

        {{--<p>Bounce Rate</p>--}}
        {{--</div>--}}
        {{--<div class="icon">--}}
        {{--<i class="ion ion-stats-bars"></i>--}}
        {{--</div>--}}
        {{--<a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>--}}
        {{--</div>--}}
        {{--</div>--}}
        {{--<div class="col-lg-3 col-6">--}}
        {{--<!-- small box -->--}}
        {{--<div class="small-box bg-warning">--}}
        {{--<div class="inner">--}}
        {{--<h3>44</h3>--}}

        {{--<p>User Registrations</p>--}}
        {{--</div>--}}
        {{--<div class="icon">--}}
        {{--<i class="ion ion-person-add"></i>--}}
        {{--</div>--}}
        {{--<a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>--}}
        {{--</div>--}}
        {{--</div>--}}
        {{--<div class="col-lg-3 col-6">--}}
        {{--<!-- small box -->--}}
        {{--<div class="small-box bg-danger">--}}
        {{--<div class="inner">--}}
        {{--<h3>65</h3>--}}

        {{--<p>Unique Visitors</p>--}}
        {{--</div>--}}
        {{--<div class="icon">--}}
        {{--<i class="ion ion-pie-graph"></i>--}}
        {{--</div>--}}
        {{--<a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>--}}
        {{--</div>--}}
        {{--</div>--}}
    </div>


@endsection
