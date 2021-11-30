@extends('layouts.master')

@section('content')

    <div class="row">
        <div class="col-md-12">
            <div class="form-group col-md-8">
                <label>Query Builder</label>
                <textarea id="query" name="db_query_builder"
                          class="form-control" rows="5"
                          placeholder="query builder code...">{{$topic->controller}}</textarea>
            </div>
        </div>
    </div>
@endsection
@section('script')

@endsection
