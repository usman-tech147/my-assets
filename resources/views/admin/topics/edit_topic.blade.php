@extends('layouts.master')
@section('content')
    <div>
        <p class="h3 bg-dark" style="padding-top: 10px; padding-left: 10px; padding-bottom: 10px"> Update Topic
            / {{$topic->subcategory->title}} </p>
    </div>
    <div class="row">
        <div class="col-md-12">
{{--            <form id="edit-topic-details" action="{{route('admin.update.topic')}}" method="post">--}}
            <form action="{{route('admin.update.topic')}}" method="post">
                @csrf

                {{--Subcategory--}}
                <input type="hidden" value="{{$topic->id}}" name="id">
                <div class="form-row">

                    {{--Title--}}
                    <div class="form-group col-md-6">
                        <label>Title</label>
                        <input type="text" class="form-control" id="title" name="topic_title"
                               value="{{$topic->topic_title}}"
                               placeholder="Topic Title">
                    </div>

                    {{--Description--}}
                    <div class="col-md-12">
                        <label>Description</label>
                        <textarea class="summernote" id="description" name="topic_description">{{$topic->topic_description}}</textarea>
                    </div>

                    {{--Thumbnail--}}
                    <div class="form-group col-md-6">
                        <label>Thumbnail</label>
                        <input type="file" class="form-control-file" id="thumbnail" name="topic_thumbnail">
                    </div>

                    <div class="col-md-12" id="element">


                    </div>
                    <div class="col-md-12">
                        <a href="javascript:void(0)" class="btn btn-warning" id="add-element" onclick="addElement()">
                            <i class="fa fa-plus"></i>
                            Add
                        </a>
                    </div>

                    <div class="col-md-12" style="margin-top: 10px">
{{--                        <button type="submit" id="save" class="btn btn-primary">Update</button>--}}
                        <button type="submit" class="btn btn-primary">Update</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

@endsection

@section('script')

    <script>

        let topic_number = 0;
        $(document).ready(function () {
            $('.summernote').summernote();
        });

        function addElement() {
            topic_number += 1;
            let html = '<div class="row">\n' +
                '                            <div class="col-md-12">\n' +
                '                                <div class="card card-success">\n' +
                '                                    <div class="card-header">\n' +
                '                                        <h1 class="card-title" ' +
                'style="font-weight: bold">Topic (' + topic_number + ')</h1>\n' +
                '                                        <div class="card-tools">\n' +
                '                                            <button type="button" class="btn btn-tool"\n' +
                '                                                    data-card-widget="collapse">' +
                '<i class="fas fa-minus"></i>\n' +
                '                                            </button>\n' +
                '                                        </div>\n' +
                '                                    </div>\n' +
                '                                    <div class="card-body" style="display: block;">\n' +
                '                                        <div class="row justify-content-md-center">\n' +
                '                                            <div class="col-md-12">\n' +
                '                                                <h3>Subtitle</h3>\n' +
                '                                                <input type="text" ' +
                'class="form-control" name="subtitles[]">\n' +
                '                                            </div>\n' +
                '                                            <div class="col-md-12">\n' +
                '                                                <h3>Commands/Instructions</h3>\n' +
                '                                                <input type="text" ' +
                'class="form-control" name="commands[]">\n' +
                '                                            </div>\n' +
                '                                            <div class="col-md-12">\n' +
                '                                                <h3>Snippet</h3>\n' +
                '<textarea class="summernote" name="snippets[]"></textarea>\n' +
                '                                            </div>\n' +
                '                                        </div>\n' +
                '                                    </div>\n' +
                '                                </div>\n' +
                '                            </div>\n' +
                '                        </div>';

            $('#element').append(html);
            $('.summernote').summernote();

        }

        $('#description').bind('input propertychange', function() {
            alert("working")
            // $("#yourBtnID").hide();
            //
            // if(this.value.length){
            //     $("#yourBtnID").show();
            // }
        });

        $('#save').on('click', function (e) {
            e.preventDefault();
            var formData = new FormData(document.getElementById('edit-topic-details'));

            for (var pair of formData.entries()) {
                console.log(pair[0] + ', ' + pair[1]);
            }

            // var input_array= $("input[name='snippets[]']").map(function() {
            //     return this.value;
            // }).get();
            // console.log(input_array);

            {{--$.ajax({--}}
            {{--    url: '{{route('admin.store.topic')}}',--}}
            {{--    type: 'POST',--}}
            {{--    data: formData,--}}
            {{--    contentType: false,--}}
            {{--    cache: false,--}}
            {{--    processData: false,--}}
            {{--    datatype: 'json',--}}
            {{--    success: function (response) {--}}
            {{--        console.log(response)--}}
            {{--    },--}}
            {{--    error: function (jqxhr, status, exception) {--}}
            {{--        alert(exception);--}}
            {{--    }--}}
            {{--})--}}
        });

    </script>

@endsection

