@extends('layouts.master')
@section('content')
    <div class="row bg-dark mb-2" style="padding-top: 10px; padding-bottom: 10px; border-radius: 5px">
        <div class="col-md-6">
            <p class="h3">
                <a href="{{route('admin.edit.topic',[$subtopic->topic->id])}}" style="text-decoration: none">
                    <span style="color: cyan;"> Topic </span>
                </a> /
                <span> subtopic title </span>
            </p>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <form id="update-subtopic-details">
                @csrf

                {{--Subtopic id--}}
                <input type="hidden" value="{{$subtopic->id}}" name="id">
                <div class="form-row">

                    {{--Subtopic title--}}
                    <div class="form-group col-md-6">
                        <label>Title</label>
                        <input type="text" class="form-control" id="title" name="subtitle"
                               value="{{$subtopic->subtitle}}"
                               placeholder="Subtopic Title">
                    </div>

                    {{--Subtopic command--}}
                    <div class="col-md-12">
                        <label>Commands / Instructions</label>
                        <input type="text" name="command" class="form-control" value="{{$subtopic->command}}">
                    </div>

                    {{--Subtopic snippet--}}
                    <div class="col-md-12">
                        <label>Snippet</label>
                        <textarea id="snippet_1">{{$subtopic->snippet}}</textarea>
                    </div>

                    <div class="col-md-12" style="margin-top: 10px">
                        <button type="submit" id="update" class="btn btn-primary">Update</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

@endsection

@section('script')

    <script>

        let topic_number = 1;
        let editor = [];
        $(document).ready(function () {
            createCkeditor();
            // $('.summernote').summernote();
        });

        function createCkeditor() {

            ClassicEditor.create(document.querySelector("#snippet_" + topic_number), {
                heading: {
                    options: [
                        {model: 'paragraph', title: 'Paragraph', class: 'ck-heading_paragraph'},
                        {model: 'heading3', view: 'h3', title: 'Heading', class: 'ck-heading_heading3'},
                    ]
                },
                toolbar: {
                    items: [
                        "heading",
                        "fontFamily",
                        "|",
                        "bold",
                        "italic",
                        "link",
                        "bulletedList",
                        "numberedList",
                        "blockQuote",
                        "undo",
                        "redo",
                        "|",
                        "contenteditable",
                        // "tableColumn",
                    ],
                },

            }).then(newEditor => {
                editor[topic_number] = newEditor;
            }).catch(error => {
                console.error(error);
            });
        }

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
                '<textarea class="editor" id="snippet_' + topic_number + '"></textarea>\n' +
                '                                            </div>\n' +
                '                                        </div>\n' +
                '                                    </div>\n' +
                '                                </div>\n' +
                '                            </div>\n' +
                '                        </div>';

            $('#element').append(html);
            createCkeditor();
            // $('.summernote').summernote();

        }

        $('#description').bind('input propertychange', function () {
            alert("working")
            // $("#yourBtnID").hide();
            //
            // if(this.value.length){
            //     $("#yourBtnID").show();
            // }
        });

        $('#update').on('click', function (e) {
            e.preventDefault();
            var formData = new FormData(document.getElementById('update-topic-details'));

            // for (var pair of formData.entries()) {
            //     console.log(pair[0] + ', ' + pair[1]);
            // }
            formData.append('topic_description', editor[1].getData())
            if (editor.length > 0) {
                for (var i = 2; i < editor.length; i++) {
                    formData.append('snippets[]', editor[i].getData())
                }
            }
            // var input_array= $("input[name='snippets[]']").map(function() {
            //     return this.value;
            // }).get();
            // console.log(input_array);

            $.ajax({
                url: '{{route('admin.update.topic')}}',
                type: 'POST',
                data: formData,
                contentType: false,
                cache: false,
                processData: false,
                datatype: 'json',
                success: function (response) {
                    alert("updated")
                },
                error: function (jqxhr, status, exception) {
                    alert(exception);
                }
            })
        });

    </script>

@endsection

