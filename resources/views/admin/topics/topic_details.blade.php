@extends('layouts.master')

@section('content')

    <div class="row">

        <div class="col-md-12">
            @foreach ($subtopics as $subtopic)
                @if(!empty($subtopic->subtitle))
                    <button class="btn btn-success"
                            onclick="getSubtopicDetails('{{$subtopic->id}}')" style="margin: 5px">
                        {{$subtopic->subtitle}}
                    </button>
                @endif
            @endforeach
        </div>

        <div class="col-md-12" id="show_content" style="margin-top: 20px">
        </div>
        {{--<br>--}}
        {{--<div class="col-md-12">--}}
            {{--<label for=""> Description </label>--}}
            {{--<div>--}}
                {{--{!! $topic->topic_description !!}--}}
            {{--</div>--}}
        {{--</div>--}}
        {{--<br>--}}
        {{--<div class="col-md-12">--}}
            {{--<label for=""> Controller </label>--}}
            {{--<div>--}}
                {{--{!! $topic->topic_controller !!}--}}
            {{--</div>--}}
        {{--</div>--}}
    </div>


@endsection

@section('script')

    <script>

        function getSubtopicDetails(id) {

            // alert(value+' '+id)

            $.ajax({

                url: '{{route('view.subtopic')}}',
                type: 'post',
                data: { id: id, _token:'{{csrf_token()}}'},
                success: function (response) {

                    // let key = Object.keys(response[0]);
                    // let html = '<div>'+ response[0][key] +'</div>';
                    let html = '<div>'+ response[0]['snippet'] +'</div>';
                    $('#show_content').html(html);

                },
                error: function () {
                    console.log("error")
                }

            })

        }

    </script>
@endsection