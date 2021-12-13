@extends('layouts.master')

@section('content')

    <div class="row">
{{--        <input type="hidden" id="topic-details" value="{!! $topic->topic_description !!}" style="display: none">--}}
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
        <div class="col-md-10" id="show_description">
            {!! $topic->topic_description !!}
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
                    // $('#show_content').show();
                    let html = '<div>' + response[0]['snippet'] + '</div>';
                    $('#show_content').show().html(html);
                },
                error: function () {
                    console.log("error")
                }
            })

        }

    </script>
@endsection
