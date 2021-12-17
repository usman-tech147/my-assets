@extends('layouts.master')

@section('css')
    <style>
        blockquote {
            background-color: #000;
        }
    </style>
@endsection

@section('content')

    {{--<div class="copied"> Copied!!!</div>--}}
    <div class="row bg-dark mb-2" style="padding-top: 10px; padding-bottom: 10px; border-radius: 5px">
        <div class="col-md-6">
            <p class="h3">
                <a href="{{route('admin.getSubcategory.topics',[$topic->subcategory->id])}}"
                   style="text-decoration: none">
                    <span style="color: cyan;"> Topics </span>
                </a> /
                <span style="text-transform: capitalize"> {{$topic->topic_title}} </span>
            </p>
        </div>
    </div>

    <div class="row" style="background-color: #fff; padding: 5px">
        <div class="col-md-2">
            <button class="btn btn-block btn-outline-success"
                    style="box-shadow: none" id="description">
                <strong style="text-transform: capitalize">topic description</strong>
            </button>
            @if(!empty($subtopics))
                @foreach ($subtopics as $subtopic)
                    @if(!empty($subtopic->subtitle))
                        <button class="btn btn-block btn-outline-success" id="btn_{{$subtopic->id}}"
                                onclick="getSubtopicDetails('{{$subtopic->id}}')" style="box-shadow: none">
                            <strong style="text-transform: capitalize">{{$subtopic->subtitle}}</strong>
                        </button>
                    @endif
                @endforeach
            @endif
        </div>

        <div class="col-md-10" id="show_content" style="display: none">
        </div>

        <div class="col-md-10" id="show_description">
            <div class="card">
                <h5 class="card-header clearfix" style="text-transform: capitalize">
                    <strong>{{$topic->topic_title}}</strong>
                </h5>
                <div class="card-body" style="padding: 10px">
                    <div class="card-row">
                        @if($topic->topic_description)
                            <div class="col-md-12 bg-dark" style="border-radius: 3px; padding: 10px">
                                {!! $topic->topic_description !!}
                            </div>
                        @else
                            <div class="col-md-12 bg-dark text-center" style="border-radius: 3px; padding: 10px">
                                No description available!
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection

@section('script')

    <script>

        $('#description').on('click', function () {
            {{--let description = {!! $topic->topic_description !!};--}}
            $('.btn').removeClass('bg-success');
            $(this).addClass('bg-success')
            $('#show_description').show();
            $('#show_content').hide();

        })

        function getSubtopicDetails(id) {
            $('.btn').removeClass('bg-success');
            $('#btn_' + id).addClass('bg-success')

            $.ajax({
                url: '{{route('view.subtopic')}}',
                type: 'post',
                data: {id: id, _token: '{{csrf_token()}}'},
                success: function (response) {
                    $('#show_description').hide();
                    let html = '<div class="card" style="padding: 10px">\n' +
                        '                <h5 class="card-header clearfix" style="text-transform: capitalize">\n' +
                        '                    <strong>' + response[0]['subtitle'] + '</strong>\n' +
                        '<button class="btn btn-sm btn-primary float-right copy"' +
                        'onclick=copyText(' + response[0]['id'] + ')>' +
                        'Copy' +
                        '</button>\n' +
                        '                </h5>\n' +
                        '                <div class="card-body" style="padding:10px">\n';
                    if (response[0]['command']) {
                        html += '<div class="col-md-12 bg-success mb-2" style="border-radius: 3px; padding:10px 10px 5px 10px">\n' +
                            '                            <p class="h3"> ' + response[0]['command'] + ' </p>\n' +
                            '                        </div>';
                    }
                    if (response[0]['snippet']) {
                        html += '<div class="col-md-12 bg-dark" style="border-radius: 3px; padding: 10px" id="text_' + response[0]['id'] + '">\n' +
                            '                            ' + response[0]['snippet'] + '\n' +
                            '                        </div>';
                    }else{
                        html += '<div class="col-md-12 bg-dark text-center" style="border-radius: 3px; padding: 10px">\n' +
                            '                                No description available!\n' +
                            '                            </div>';
                    }
                    html += '                </div>\n' +
                        '            </div>';
                    $('#show_content').show().html(html);
                },
                error: function () {
                    console.log("error")
                }
            })

        }

        function copyText(id) {

            var text = $('#text_' + id).text();
            var sampleTextarea = document.createElement("textarea");
            document.body.appendChild(sampleTextarea);
            sampleTextarea.value = text; //save main text in it
            sampleTextarea.select(); //select textarea contenrs
            document.execCommand("copy");
            document.body.removeChild(sampleTextarea);

            alert("copied");
        }


    </script>
@endsection


