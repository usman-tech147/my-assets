@extends('layouts.master')

@section('content')

    <div class="row p-3">
        <div class="col-md-6">
            <p class="h3"> Web Technologies </p>
        </div>
        <div class="col-md-6 clearfix">
            <div class="input-group mb-3">
                <input type="text" class="form-control">
                <div class="input-group-append">
                    <span class="input-group-text">Search</span>
                </div>
            </div>
        </div>
    </div>

    <div class="row ">

        @forelse($technologies as $technology)
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-danger">
                    <div class="inner">
                        <h3>{{$technology->subcategories_count}}</h3>

                        <p>{{$technology->title}}</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-bag"></i>
                    </div>
                    <a href="{{route('admin.getSubcategories',[$technology->id])}}" class="small-box-footer">
                        Subcategories<i class="fas fa-arrow-circle-right"></i>
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
