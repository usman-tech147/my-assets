@extends('layouts.master')

@section('css')
    <style>
        .card-horizontal {
            display: flex;
            flex: 1 1 auto;
        }

        div.scroll {
            margin: 4px;
            padding: 4px;
            width: 500px;
            height: 150px;
            overflow-x: hidden;
            overflow-y: auto;
            text-align: justify;
        }
    </style>
@endsection

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
                <input type="text" class="form-control" id="search_topic">
                <div class="input-group-append">
                    <button class="input-group-text bg-dark" onclick="displayData(5)">Search</button>
                </div>
            </div>
        </div>
        <div class="col-md-2 clearfix">
            <a href="{{route('admin.create.topic',[$subcategory])}}" class="btn btn-success float-right"> Add Topic </a>
        </div>
    </div>



    {{--<div class="row ">--}}
    {{--@forelse($topics as $topic)--}}
    {{--<div class="container-fluid">--}}
    {{--<div class="row">--}}
    {{--<div class="col-12 mt-3">--}}
    {{--<div class="card">--}}
    {{--<div class="card-header bg-dark" style="padding-bottom: 0">--}}
    {{--<div class="row">--}}
    {{--<div class="col-md-10" style="padding: 0">--}}
    {{--<h1 class="card-title"--}}
    {{--style="font-size: 28px; text-transform: capitalize">--}}
    {{--{{$topic->topic_title}}--}}
    {{--</h1>--}}
    {{--</div>--}}
    {{--<div class="col-md-2">--}}
    {{--<a href="{{route('admin.view.topic',[$topic->id])}}"--}}
    {{--class="btn btn-sm btn-success" style="margin-left: 50px">--}}
    {{--View--}}
    {{--</a>--}}
    {{--<a href="#" class="btn btn-sm btn-warning">--}}
    {{--Edit--}}
    {{--</a>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--<div class="card-horizontal">--}}
    {{--<div class="img-square-wrapper">--}}
    {{--<a href="{{asset('usman.jpeg')}}" data-lightbox="image-1" data-title="My caption">--}}
    {{--<img class="" src="{{asset('usman.jpeg')}}"--}}
    {{--height="170" width="150"--}}
    {{--alt="Card image cap">--}}
    {{--</a>--}}

    {{--</div>--}}
    {{--<div class="card-body scroll">--}}
    {{--<div class="row">--}}
    {{--<div class="col-md-12">--}}
    {{--<p class="card-text">--}}
    {{--{!! $topic->topic_description !!}--}}
    {{--</p>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--<div class="card-footer bg-dark">--}}
    {{--@if($topic->subtopics->count() > 0)--}}
    {{--@foreach ($topic->subtopics as $subtopic)--}}
    {{--<a href="#" class="btn btn-sm btn-danger" style="text-transform: capitalize">--}}
    {{--{{$subtopic->subtitle}}--}}
    {{--</a>--}}
    {{--@endforeach--}}
    {{--@else--}}
    {{--<p> No subtopic available </p>--}}
    {{--@endif--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--@empty--}}
    {{--<div>--}}
    {{--<p> No data available </p>--}}
    {{--</div>--}}
    {{--@endforelse--}}
    {{--</div>--}}



    <div class="data-container"></div>
    <ul id="paging" class="pagination"></ul>


@endsection

@section('script')
    <script>

        $(document).ready(function () {
            displayData(5);
        });

        function displayData(length) {
            $('#paging').pagination({
                total: 1,
                current: 1,
                length: 5,
                size: 1,
                ajax: function (options, refresh) {
                    $.ajax({
                        url: "{{route('admin.getSubcategory.topics.ajax')}}",
                        type: 'post',
                        data: {
                            current: options.current,
                            length: options.length,
                            topic: $('#search_topic').val(),
                            subcategory: "{{$subcategory}}",
                            "_token": "{{ csrf_token() }}",
                        },
                    }).done(function (response) {

                        let data = response[1];
                        let totalRe = response[2];
                        let check = 0;
                        let html = '<div class="row ">';
                        if (data.length > 0) {
                            for (let i = 0; i < data.length; i++) {
                                html += '<div class="container-fluid">\n' +
                                    '                <div class="row">\n' +
                                    '                    <div class="col-12 mt-3">\n' +
                                    '                        <div class="card">\n' +
                                    '                            <div class="card-header bg-dark" style="padding-bottom: 0">\n' +
                                    '                                <div class="row">\n' +
                                    '                                    <div class="col-md-10" style="padding: 0">\n' +
                                    '                                        <h1 class="card-title"\n' +
                                    'style="font-size: 28px; text-transform: capitalize">\n' +
                                    '                                            ' + data[i]['topic_title'] + '\n' +
                                    '                                        </h1>\n' +
                                    '                                    </div>\n' +
                                    '                                    <div class="col-md-2">\n' +
                                    '<a href="{{url('/view/topic')}}/'+data[i]['id']+'"\n' +
                                    'class="btn btn-sm btn-success" style="margin-left: 40px">\n' +
                                    '                                            View\n' +
                                    '                                        </a>\n' +
                                    '<a href="{{url('/edit/topic/')}}/'+data[i]['id']+'" ' +
                                    'class="btn btn-sm btn-warning">\n' +
                                    '                                            Edit\n' +
                                    '                                        </a>\n' +
                                    '                                    </div>\n' +
                                    '                                </div>\n' +
                                    '                            </div>\n' +
                                    '                            <div class="card-horizontal">\n' +
                                    '                                <div class="img-square-wrapper p-2">\n' +
                                    '<a href="{{asset('/thumbnails')}}/' + data[i]['thumbnail'] + '" ' +
                                    'data-lightbox="image-1" data-title="My caption">\n' +
                                    '                                        <img class="" ' +
                                    'src="{{asset('/thumbnails')}}/' + data[i]['thumbnail'] + '"\n' +
                                    '                                             height="170" width="150"\n' +
                                    '                                             alt="Card image cap">\n' +
                                    '                                    </a>\n' +
                                    '                                </div>\n' +
                                    '                                <div class="card-body scroll">\n' +
                                    '                                    <div class="row">\n' +
                                    '                                        <div class="col-md-12">\n' +
                                    '                                            <p class="card-text">\n' +
                                    '' + isNullOrEmpty(data[i]['topic_description']) + '\n' +
                                    '                                            </p>\n' +
                                    '                                        </div>\n' +
                                    '                                    </div>\n' +
                                    '                                </div>\n' +
                                    '                            </div>\n' +
                                    '                            <div class="card-footer bg-dark" style="padding-bottom: 0">\n';
                                    if(data[i]['subtopics'].length > 0)
                                    {
                                        for(let j=0; j<data[i]['subtopics'].length; j++){
                                            html += '<a href="#" ' +
                                                'class="btn btn-sm btn-danger" ' +
                                                'style="text-transform:capitalize; margin-bottom: 10px">\n' +
                                                ''+data[i]['subtopics'][j]['subtitle']+'</a>\n';
                                        }
                                    }else{
                                        html +='<p> No subtopic available </p>\n';

                                    }
                                            html +='                            </div>\n' +
                                    '                        </div>\n' +
                                    '                    </div>\n' +
                                    '                </div>\n' +
                                    '            </div>';
                            }
                        }
                        else {
                            html += '<div>\n' +
                                '       <p> No data available </p>\n' +
                                '    </div>';
                        }


                        html += '</div>';
                        $('.data-container').html(html);

                        refresh({
                            total: totalRe,
                            length: length
                        });
                    }).fail(function (error) {
                    });
                }
            });
        }

        function isNullOrEmpty(object) {
            if (object) {
                return object;
            }
            return 'Description not available';
        }

    </script>
@endsection
