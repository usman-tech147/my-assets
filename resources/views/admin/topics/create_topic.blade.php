@extends('layouts.master')

@section('content')

    <div>
        <p class="h3 bg-dark" style="padding-top: 10px; padding-left: 10px; padding-bottom: 10px"> Create Topic </p>
    </div>
    @if(session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show text-center" role="alert">
            <strong>Success!</strong> {{session()->get('success')}}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="row">
        <div class="col-md-12">
            <form id="topic-details">
                @csrf
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputAddress">Subcategory</label>
                        <input type="hidden" value="{{$subcategory->id}}" name="subcategory">
                        <input type="text" class="form-control" value="{{$subcategory->title}}"
                               placeholder="{{$subcategory->title}}" readonly>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-12">
                        <label for="inputAddress">Title</label>
                        <input type="text" class="form-control" id="title" name="title" placeholder="Topic Title">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputAddress">Description</label>
                    <textarea id="description" name="description"
                              class="form-control editor"
                              placeholder="description..."></textarea>
                </div>
                <div class="form-group">
                    <label for="html">Html</label>
                    <textarea id="html" name="html"
                              class="form-control editor" rows="5"
                              placeholder="html code..."></textarea>
                </div>
                <div class="form-group">
                    <label for="html">Css</label>
                    <textarea id="css" name="css"
                              class="form-control editor" rows="5"
                              placeholder="css code..."></textarea>
                </div>
                <div class="form-group">
                    <label for="inputAddress">Javascript / Jquery</label>
                    <textarea id="jquery" name="jquery"
                              class="form-control editor" rows="5"
                              placeholder="javascript / jquery code..."></textarea>
                </div>
                <div class="form-group">
                    <label for="inputAddress">Backend / Laravel</label>
                    <textarea id="backend" name="backend"
                              class="form-control editor" rows="5"
                              placeholder="backend / laravel code..."></textarea>
                </div>
                <div class="form-group">
                    <label for="inputAddress">Raw Sql</label>
                    <textarea id="raw" name="raw"
                              class="form-control editor" rows="5"
                              placeholder="raw sql code..."></textarea>
                </div>
                <div class="form-group">
                    <label for="inputAddress">Eloquent</label>
                    <textarea id="eloquent" name="eloquent"
                              class="form-control editor" rows="5"
                              placeholder="eloquent code..."></textarea>
                </div>
                <div class="form-group">
                    <label for="inputAddress">Query Builder</label>
                    <textarea id="query" name="query"
                              class="form-control editor" rows="5"
                              placeholder="query builder code..."></textarea>
                </div>
                <div class="form-group" id="steps">
                    <a class="btn btn-success" id="insert-steps"> <i class="fa fa-plus"></i> </a>
                    <label for="steps" style="margin-left: 10px;">Steps</label>
                </div>
                <div class="form-group" id="images">
                    <a class="btn btn-success" id="insert-images"> <i class="fa fa-plus"></i> </a>
                    <label for="images" style="margin-left: 10px">Images</label>
                </div>


                <div class="form-group" id="links">
                    <a class="btn btn-success" id="insert-links"> <i class="fa fa-plus"></i> </a>
                    <label for="links" style="margin-left: 10px">Url Links</label>
                </div>
{{--                <div class="form-group" id="url_one">--}}
{{--                    <div class="form-row" style="margin-top: 5px">--}}
{{--                        <div class="form-group col-md-6">--}}
{{--                            <label for="inputAddress">Title</label>--}}
{{--                            <input type="text" class="form-control" name="url_title[]" placeholder="Title">--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="form-group">--}}
{{--                        <label for="inputAddress">Description</label>--}}
{{--                        <textarea name="url_description[]"--}}
{{--                                  class="form-control editor" rows="5"--}}
{{--                                  placeholder="url description..."></textarea>--}}
{{--                    </div>--}}
{{--                    <div class="form-group">--}}
{{--                        <label for="exampleFormControlFile1">Example file input</label>--}}
{{--                        <input type="file" class="form-control-file" id="exampleFormControlFile1">--}}
{{--                    </div>--}}
{{--                    <button class="btn btn-danger" id="remove_url" onclick="removeUrl('remove_url')"> Remove--}}
{{--                    </button>--}}
{{--                </div>--}}

                <button type="submit" id="save" class="btn btn-primary">Save</button>
            </form>
        </div>
    </div>
    {{--    <script>--}}
    {{--        $(document).ready(function () {--}}
    {{--            alert('working')--}}
    {{--        })--}}
    {{--    </script>--}}
@endsection
@section('script')
    <script>
        ClassicEditor
            .create(document.querySelector(".editor"), {
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
                    ],
                },
            }).catch(error => {
            console.error(error);
        })
    </script>
    <script>
        let step_no = 1;
        let image_no = 1;
        let link_no = 1;
        $('#insert-steps').on('click', function () {
            let html = '<div class="form-group" id="step_' + step_no + '">\n' +
                '                    <div class="form-row" style="margin-top: 5px">\n' +
                '                        <div class="form-group col-md-6">\n' +
                '                            <label for="inputAddress">Title</label>\n' +
                '                            <input type="text" class="form-control" name="step_title[]" placeholder="Topic Title">\n' +
                '                        </div>\n' +
                '                    </div>\n' +
                '                    <div class="form-group">\n' +
                '                        <label for="inputAddress">Description</label>\n' +
                '                        <textarea name="step_description[]" \n' +
                '                                  class="form-control editor" rows="5"\n' +
                '                                  placeholder="description..."></textarea>\n' +
                '                    </div>\n' +
                '                    <div class="form-group">\n' +
                '                        <label for="inputAddress">Step</label>\n' +
                '                        <textarea name="step_code[]" \n' +
                '                                  class="form-control editor" rows="5"\n' +
                '                                  placeholder="step code..."></textarea>\n' +
                '                    </div>\n' +
                '                    <button class="btn btn-danger" id="rm_step_' + step_no + '" onclick="removeStep(' + step_no + ')"> Remove </button>\n' +
                '                </div>';

            $('#steps').append(html);
            step_no += 1;
        });
        function removeStep(id) {
            let parent_id = $('#rm_step_' + id).parent().attr('id');
            $('#' + parent_id).remove();
        }

        // add images
        $('#insert-images').on('click', function () {
            let html = '<div class="form-group" id="image_' + image_no + '">\n' +
                '                    <div class="form-row" style="margin-top: 5px">\n' +
                '                        <div class="form-group col-md-6">\n' +
                '                            <label for="inputAddress">Title ' + image_no + '</label>\n' +
                '                            <input type="text" class="form-control" name="image_title[]" placeholder="Title">\n' +
                '                        </div>\n' +
                '                    </div>\n' +
                '                    <div class="form-group">\n' +
                '                        <label for="inputAddress">Description</label>\n' +
                '                        <textarea name="image_description[]"\n' +
                '                                  class="form-control editor" rows="5"\n' +
                '                                  placeholder="description..."></textarea>\n' +
                '                    </div>\n' +
                '                    <div class="form-group">\n' +
                '                        <label for="exampleFormControlFile1">Example file input</label>\n' +
                '                        <input type="file" class="form-control-file" name="images[]">\n' +
                '                    </div>\n' +
                '                    <button class="btn btn-danger" id="rm_image_' + image_no + '" onclick="removeImage(' + image_no + ')"> Remove\n' +
                '                    </button>\n' +
                '                </div>';

            $('#images').append(html);
            image_no += 1;
        });
        function removeImage(id) {
            let parent_id = $('#rm_image_' + id).parent().attr('id');
            $('#' + parent_id).remove();
        }

        $('#insert-links').on('click', function () {
            let html = '<div class="form-group" id="link_' + link_no + '">\n' +
                '                    <div class="form-row" style="margin-top: 5px">\n' +
                '                        <div class="form-group col-md-6">\n' +
                '                            <label for="inputAddress">Title '+link_no+'</label>\n' +
                '                            <input type="text" class="form-control" name="link_title[]" placeholder="Topic Title">\n' +
                '                        </div>\n' +
                '                    </div>\n' +
                '                    <div class="form-group">\n' +
                '                        <label for="inputAddress">Description</label>\n' +
                '                        <textarea name="link_description[]" \n' +
                '                                  class="form-control editor" rows="5"\n' +
                '                                  placeholder="query builder code..."></textarea>\n' +
                '                    </div>\n' +
                '                    <div class="form-group">\n' +
                '                        <label for="inputAddress">Link</label>\n' +
                '                            <input type="text" class="form-control" name="url_link[]" placeholder="Url Link">\n' +
                '                    </div>\n' +
                '                    <button class="btn btn-danger" id="rm_link_' + link_no + '" onclick="removeLink(' + link_no + ')"> Remove </button>\n' +
                '                </div>';

            $('#links').append(html);
            link_no += 1;
        });
        function removeLink(id) {
            let parent_id = $('#rm_link_' + id).parent().attr('id');
            $('#' + parent_id).remove();
        }


        $('#save').on('click', function (e) {
            e.preventDefault();
            var formData = new FormData(document.getElementById('topic-details'));
            // for(var pair of formData.entries()) {
            //     console.log(pair[0]+ ', '+ pair[1]);
            // }
            // var input_array= $("input[name='step_title[]']").map(function() {
            //     return this.value;
            // }).get();
            // console.log(input_array);

            $.ajax({
                url: '{{route('admin.store.topic')}}',
                method: 'POST',
                data: formData,
                contentType: false,
                cache: false,
                processData: false,
                datatype: 'json',
                success: function (response) {
                    console.log(response);
                },
                error: function (jqxhr, status, exception) {
                    alert(exception);
                }
            })
        })

    </script>
@endsection
