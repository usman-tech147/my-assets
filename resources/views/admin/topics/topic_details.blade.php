@extends('layouts.master')

@section('content')

    {{--<div class="copied"> Copied!!!</div>--}}
    <div class="row bg-dark mb-2" style="padding-top: 10px; padding-bottom: 10px; border-radius: 5px">
        <div class="col-md-6">
            <p class="h3">
                <a href="{{url()->previous()}}" style="text-decoration: none">
                    <span style="color: cyan;"> Topics </span>
                </a> /
                <span> {{$topic->topic_title}} </span>
            </p>
        </div>
    </div>

    <div class="row" style="background-color: #fff; padding: 5px">
        <div class="col-md-2">
            <button class="btn btn-block btn-outline-success"
                    style="box-shadow: none" id="description">
                <strong>topic description</strong>
            </button>
            @if(!empty($subtopics))
                @foreach ($subtopics as $subtopic)
                    @if(!empty($subtopic->subtitle))
                        <button class="btn btn-block btn-outline-success" id="btn_{{$subtopic->id}}"
                                onclick="getSubtopicDetails('{{$subtopic->id}}')" style="box-shadow: none">
                            <strong>{{$subtopic->subtitle}}</strong>
                        </button>
                    @endif
                @endforeach
            @endif
        </div>

        <div class="col-md-10" id="show_content" style="display: none">
        </div>
        {{--<div class="col-md-10" id="show_description">--}}
        {{--<div class="row">--}}
        {{--<div class="col-md-12 bg-danger">--}}
        {{--{{$topic->topic_title}}--}}
        {{--</div>--}}
        {{--<div class="col-md-12">--}}
        {{--{!! $topic->topic_description !!}--}}
        {{--</div>--}}
        {{--</div>--}}
        {{--</div>--}}

        <div class="col-md-10" id="show_description">
            <div class="card">
                <h5 class="card-header clearfix">
                    {{$topic->topic_title}}
                    <a href="#" class="btn btn-sm btn-primary float-right">Copy</a>
                </h5>
                <div class="card-body" style="padding: 10px">
                    {!! $topic->topic_description !!}
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
                    let html = '<div class="card">\n' +
                        '                <h5 class="card-header clearfix">\n' +
                        '                    ' + response[0]['subtitle'] + '\n' +
                        '<button class="btn btn-sm btn-primary float-right copy"' +
                        'onclick=copyText(' + response[0]['id'] + ')>' +
                        'Copy' +
                        '</button>\n' +
                        '                </h5>\n' +
                        '                <div class="card-body" style="padding:10px" id="text_' + response[0]['id'] + '">\n' +
                        '                    ' + response[0]['snippet'] + '\n' +
                        '                </div>\n' +
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
            console.log(text);



            // var text = $('#text_' + id).text();
            // var sampleTextarea = document.createElement("textarea");
            // document.body.appendChild(sampleTextarea);
            // sampleTextarea.value = text; //save main text in it
            // sampleTextarea.select(); //select textarea contenrs
            // document.execCommand("copy");
            // document.body.removeChild(sampleTextarea);

            alert("copied");
        }



    </script>
@endsection


