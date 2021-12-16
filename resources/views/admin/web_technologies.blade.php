@extends('layouts.master')

@section('content')

    <div class="row bg-dark mb-2" style="padding-top: 10px; padding-bottom: 10px; border-radius: 5px">
        <div class="col-md-6">
            <p class="h3">
                <span> Courses </span>
            </p>
        </div>
        <div class="col-md-6 clearfix">
            <div class="input-group float-right" style="width: 300px">
                <input type="text" class="form-control">
                <div class="input-group-append">
                    <span class="input-group-text bg-dark">Search</span>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        @forelse($technologies as $technology)
            <div class="col-md-3">
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
                        Subcategories <i class="fas fa-arrow-circle-right"></i>
                    </a>
                </div>
            </div>
        @empty
        @endforelse

    </div>


@endsection
