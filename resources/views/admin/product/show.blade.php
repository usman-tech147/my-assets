@extends('layouts.master')

@section('css')

    <style>
        h4{
            font-weight: bolder;
            margin: 0;
        }
    </style>

@stop

@section('content')
    <div class="row">
        <div class="col-md-5">
            <h4> Image </h4>
            <img src="{{asset('images/'.$product[0]->image)}}" alt="" width="80" height="80">
            <h4> Description </h4>
            {!! str_replace(',','<br><br>',$product[0]->description) !!}
        </div>
        <div class="col-md-4">
            <p>
            <h4> In Stock </h4>
            <span>{{$product[0]->colors->sum('pivot.in_stock')}}</span>
            </p>
            <p>
            <h4> Launch Date </h4>
            <span>{{$product[0]->created_at}}</span>
            </p>
            <p>
            <h4> Sale Ends </h4>
            <span>{{$product[0]->sale_date_before}}</span>
            </p>

            <p>
            <h4> Category </h4>
            <span>{{$product[0]->subcategory->category->name}}</span>
            </p>

            <p>
            <h4> Subcategory </h4>
            <span>{{$product[0]->subcategory->name}}</span>
            </p>

            <p>
            <h4> Name </h4>
            <span>{{$product[0]->name}}</span>
            </p>

            <p>
            <h4> Price </h4>
            <span>{{$product[0]->price}}</span>
            </p>
        </div>
        <div class="col-md-3">
            <div class="row">
                <div class="col-md-12">
                    <p>
                    <h4> Quality </h4>
                    <ul>
                        <li> {{$product[0]->quality->name}} </li>
                    </ul>
                    </p>

                </div>
                <div class="col-md-12">
                    <p>
                    <h4> Fabric </h4>
                    <ul>
                        <li> {{$product[0]->fabric->name}} </li>
                    </ul>
                    </p>
                </div>
                <div class="col-md-12">
                    <p>
                    <h4> Colors </h4>
                    <ul>
                        @foreach($product[0]->colors as $color)
                            <li> {{$color->name}} ({{$color->pivot->in_stock}})</li>
                        @endforeach
                    </ul>
                    </p>
                </div>
                <div class="col-md-12">
                    <p>
                    <h4> Sizes </h4>
                    <ul>
                        @foreach($product[0]->sizes as $size)
                            <li> {{$size->name}}</li>
                        @endforeach
                    </ul>
                    </p>
                </div>
            </div>
        </div>
    </div>
@endsection