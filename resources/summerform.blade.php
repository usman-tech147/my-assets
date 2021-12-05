@extends('layouts.master')

@section('content')

    <div>
        <p class="h3 bg-dark" style="padding-top: 10px; padding-left: 10px; padding-bottom: 10px"> Create Topic
            / Subcategory </p>
    </div>
    <div class="row">
        <div class="col-md-12">
            <form id="topic-details">
                @csrf
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label>Title</label>
                        <input type="text" class="form-control" id="title" name="title" placeholder="Topic Title">
                    </div>
                </div>

                <div class="form-row" >
                    <div class="col-md-12">
                        <label id="html_label"><a class="btn btn-success" onclick="add('html')"> <i class="fa fa-plus"></i> Html </a></label>
                        <div class="form-group" id="html" style="display: none">
                            <textarea class="summernote" id="html_summernote" name="html" ></textarea>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <label id="css_label"><a class="btn btn-success" onclick="add('css')"> <i class="fa fa-plus"></i> Css </a></label>
                        <div class="form-group" id="css" style="display: none">
                            <textarea class="summernote" name="css" ></textarea>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label>Description</label>
                    <textarea class="summernote" id="desc2" name="description"></textarea>
                </div>

                <button type="submit" id="save" class="btn btn-primary">Save</button>
            </form>
        </div>
    </div>
@endsection
@section('script')

    <script>
        $(document).ready(function () {
            $('.summernote').summernote({
                toolbar: [
                    ['style', ['bold', 'italic', 'underline']],
                    ['fontsize', ['fontsize']],
                    ['color', ['color']],
                    ['para', ['ul', 'ol', 'paragraph']]
                ],
                // height:150
            }).css('font-size','18px');
        });

        function add(value){
            if(value === 'html')
            {
                $('#html').show();
                $('#html_label').html('<a class="btn btn-danger" onclick="remove(`html`)"> <i class="fa fa-minus"></i> Html </a>');
            }
            if(value === 'css')
            {
                $('#css').show();
                $('#css_label').html('<a class="btn btn-danger" onclick="remove(`css`)"> <i class="fa fa-minus"></i> Css </a>');
            }
        }

        function remove(value){
            if(value === 'html')
            {
                $('#html').hide();
                $('#html_summernote').summernote('code',"");
                $('#html_label').html('<a class="btn btn-success" onclick="add(`html`)"> <i class="fa fa-plus"></i> Html </a>');
            }
            if(value === 'css')
            {
                $('#css').hide();
                $('#css_label').html('<a class="btn btn-success" onclick="add(`css`)"> <i class="fa fa-plus"></i> Css </a>');
            }
        }

        $('#save').on('click', function (e) {
            e.preventDefault();
            var formData = new FormData(document.getElementById('topic-details'));

            for (var pair of formData.entries()) {
                console.log(pair[0] + ', ' + pair[1]);
            }

            {{--    console.log($('#desc1').summernote('code'));--}}

            {{--    // var input_array= $("input[name='step_title[]']").map(function() {--}}
            {{--    //     return this.value;--}}
            {{--    // }).get();--}}
            {{--    // console.log(input_array);--}}

            $.ajax({
                url: '{{route('post.summerform')}}',
                type: 'POST',
                data: formData,
                contentType: false,
                cache: false,
                processData: false,
                datatype: 'json',
                success: function (response) {
                    console.log(response)
                },
                error: function (jqxhr, status, exception) {
                    alert(exception);
                }
            })
        });

        // let step_no = 1;
        // let image_no = 1;
        // let link_no = 1;
        // $('#insert-steps').on('click', function () {
        //     let html = '<div class="form-group" id="step_' + step_no + '">\n' +
        //         '                    <div class="form-row" style="margin-top: 5px">\n' +
        //         '                        <div class="form-group col-md-6">\n' +
        //         '                            <label>Title</label>\n' +
        //         '                            <input type="text" class="form-control" name="step_title[]" placeholder="Topic Title">\n' +
        //         '                        </div>\n' +
        //         '                    </div>\n' +
        //         '                  <div class="form-row">\n' +
        //         '                    <div class="form-group col-md-6">\n' +
        //         '                        <label>Description</label>\n' +
        //         '<textarea class="summernote" name="step_description[]"></textarea>' +
        //         '                    </div>\n' +
        //         '                    <div class="form-group col-md-6">\n' +
        //         '                        <label>Step</label>\n' +
        //         '                        <textarea name="step_code[]" \n' +
        //         '                                  class="form-control editor" rows="5"\n' +
        //         '                                  placeholder="step code..."></textarea>\n' +
        //         '                    </div>\n' +
        //         '                 </div>\n' +
        //         '                    <button class="btn btn-danger" id="rm_step_' + step_no + '" onclick="removeStep(' + step_no + ')"> Remove </button>\n' +
        //         '                </div>';
        //
        //     $('#steps').append(html);
        //     step_no += 1;
        // });
        //
        // function removeStep(id) {
        //     let parent_id = $('#rm_step_' + id).parent().attr('id');
        //     $('#' + parent_id).remove();
        // }

    </script>
@endsection


