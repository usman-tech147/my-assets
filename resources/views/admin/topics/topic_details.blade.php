@extends('layouts.master')

@section('content')

    <div class="row">

        <div class="col-md-2">
            @foreach ($subtopics as $subtopic)
                @if(!empty($subtopic->subtitle))
                    <button class="btn btn-block btn-outline-success" id="btn_{{$subtopic->id}}"
                            onclick="getSubtopicDetails('{{$subtopic->id}}')" style="box-shadow: none">
                        <strong>{{$subtopic->subtitle}}</strong>
                    </button>
                    <br>
                @endif
            @endforeach
        </div>

        <div class="col-md-10" id="show_content">
        </div>
    </div>


@endsection

@section('script')

    <script>

        function getSubtopicDetails(id) {

            $('.btn').removeClass('bg-success');
            $('#btn_'+id).addClass('bg-success')

            $.ajax({

                url: '{{route('view.subtopic')}}',
                type: 'post',
                data: { id: id, _token:'{{csrf_token()}}'},
                success: function (response) {
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