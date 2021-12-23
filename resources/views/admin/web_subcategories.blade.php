@extends('layouts.master')

@section('content')

    <div class="row bg-dark mb-2" style="padding-top: 10px; padding-bottom: 10px; border-radius: 5px">
        <div class="col-md-6">
            <p class="h3">
                <a href="{{route('admin.webTechnologies')}}" style="text-decoration: none">
                    <span style="color: cyan;"> Courses </span>
                </a> /
                <span> Subcategories </span>
            </p>
        </div>
        <div class="col-md-6 clearfix">
            <div class="input-group float-right" style="width: 300px">
                <input type="text" class="form-control">
                <div class="input-group-append">
                    <span class="btn input-group-text bg-dark">Search</span>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        @forelse($subcategories as $subcategory)
            <div class="col-md-3">
                <!-- small box -->
                <div class="small-box bg-info">
                    <div class="inner">
                        <h3>{{$subcategory['topics_count']}}</h3>

                        <p>{{$subcategory['title']}}</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-bag"></i>
                    </div>
                    <a href="{{route('admin.getSubcategory.topics',[$subcategory['id']])}}" class="small-box-footer">
                        Topics <i class="fas fa-arrow-circle-right"></i>
                    </a>
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
