{{--@extends('layouts.app')--}}

{{--@section('content')--}}
{{--<div class="container">--}}
    {{--<div class="row justify-content-center">--}}
        {{--<div class="col-md-8">--}}
            {{--<div class="card">--}}
                {{--<div class="card-header">{{ __('Dashboard') }}</div>--}}

                {{--<div class="form-row">--}}
                    {{--<div class="form-group col-md-4">--}}
                        {{--<label>Html</label>--}}
                        {{--<textarea id="html" name="html"--}}
                                  {{--class="form-control" rows="10"--}}
                                  {{--placeholder="html code..."></textarea>--}}
                    {{--</div>--}}
                    {{--<div class="form-group col-md-4">--}}
                        {{--<label>Css</label>--}}
                        {{--<textarea id="css" name="css"--}}
                                  {{--class="form-control" rows="10"--}}
                                  {{--placeholder="css code..."></textarea>--}}
                    {{--</div>--}}
                    {{--<div class="form-group col-md-4">--}}
                        {{--<label>Javascript / Jquery</label>--}}
                        {{--<textarea id="jquery" name="jquery"--}}
                                  {{--class="form-control" rows="10"--}}
                                  {{--placeholder="javascript / jquery code..."></textarea>--}}
                    {{--</div>--}}
                {{--</div>--}}

                {{--<div class="form-row">--}}
                    {{--<div class="form-group col-md-4">--}}
                        {{--<label>Model</label>--}}
                        {{--<textarea id="model" name="model"--}}
                                  {{--class="form-control" rows="10"--}}
                                  {{--placeholder="backend / laravel model code..."></textarea>--}}
                    {{--</div>--}}
                    {{--<div class="form-group col-md-4">--}}
                        {{--<label>Controller</label>--}}
                        {{--<textarea id="controller" name="controller"--}}
                                  {{--class="form-control" rows="10"--}}
                                  {{--placeholder="backend / laravel controller code..."></textarea>--}}
                    {{--</div>--}}
                    {{--<div class="form-group col-md-4">--}}
                        {{--<label>App</label>--}}
                        {{--<textarea id="app" name="app"--}}
                                  {{--class="form-control" rows="10"--}}
                                  {{--placeholder="backend / laravel app any directory or file (migrations, exception, mail, request,helper, rules, providers) code..."></textarea>--}}
                    {{--</div>--}}
                {{--</div>--}}

                {{--<div class="form-row">--}}
                    {{--<div class="form-group col-md-4">--}}
                        {{--<label>Config</label>--}}
                        {{--<textarea id="config" name="config"--}}
                                  {{--class="form-control" rows="10"--}}
                                  {{--placeholder="backend / laravel config any file code..."></textarea>--}}
                    {{--</div>--}}
                    {{--<div class="form-group col-md-4">--}}
                        {{--<label>Migrations</label>--}}
                        {{--<textarea id="migrations" name="migrations"--}}
                                  {{--class="form-control" rows="10"--}}
                                  {{--placeholder="backend / laravel migration code..."></textarea>--}}
                    {{--</div>--}}
                    {{--<div class="form-group col-md-4">--}}
                        {{--<label>Factories</label>--}}
                        {{--<textarea id="factories" name="factories"--}}
                                  {{--class="form-control" rows="10"--}}
                                  {{--placeholder="backend / laravel factories code..."></textarea>--}}
                    {{--</div>--}}
                {{--</div>--}}

                {{--<div class="form-row">--}}
                    {{--<div class="form-group col-md-4">--}}
                        {{--<label>Seed</label>--}}
                        {{--<textarea id="seed" name="seed"--}}
                                  {{--class="form-control" rows="10"--}}
                                  {{--placeholder="backend / laravel seed file code..."></textarea>--}}
                    {{--</div>--}}
                    {{--<div class="form-group col-md-4">--}}
                        {{--<label>Backend Extra</label>--}}
                        {{--<textarea id="extra" name="extra"--}}
                                  {{--class="form-control" rows="10"--}}
                                  {{--placeholder="backend / laravel backend any file code..."></textarea>--}}
                    {{--</div>--}}
                {{--</div>--}}

                {{--<div class="form-row">--}}
                    {{--<div class="form-group col-md-4">--}}
                        {{--<label>Raw Sql</label>--}}
                        {{--<textarea id="raw" name="raw"--}}
                                  {{--class="form-control" rows="5"--}}
                                  {{--placeholder="raw sql code..."></textarea>--}}
                    {{--</div>--}}
                    {{--<div class="form-group col-md-4">--}}
                        {{--<label>Eloquent</label>--}}
                        {{--<textarea id="eloquent" name="eloquent"--}}
                                  {{--class="form-control" rows="5"--}}
                                  {{--placeholder="eloquent code..."></textarea>--}}
                    {{--</div>--}}
                    {{--<div class="form-group col-md-4">--}}
                        {{--<label>Query Builder</label>--}}
                        {{--<textarea id="query" name="db_query_builder"--}}
                                  {{--class="form-control" rows="5"--}}
                                  {{--placeholder="query builder code..."></textarea>--}}
                    {{--</div>--}}
                {{--</div>--}}

                {{--<div class="form-group" id="steps">--}}
                    {{--<a class="btn btn-success" id="insert-steps"> <i class="fa fa-plus"></i> </a>--}}
                    {{--<label style="margin-left: 10px;">Steps</label>--}}
                {{--</div>--}}

                {{--<div class="form-group" id="images">--}}
                    {{--<a class="btn btn-success" id="insert-images"> <i class="fa fa-plus"></i> </a>--}}
                    {{--<label style="margin-left: 10px">Images</label>--}}
                {{--</div>--}}


                {{--<div class="form-group" id="links">--}}
                    {{--<a class="btn btn-success" id="insert-links"> <i class="fa fa-plus"></i> </a>--}}
                    {{--<label style="margin-left: 10px">Url Links</label>--}}
                {{--</div>--}}

                {{--<div class="form-group">--}}
                    {{--<label>Description</label>--}}
                    {{--<textarea id="topic_description" name="topic_description"--}}
                              {{--class="form-control"--}}
                              {{--placeholder="description..."></textarea>--}}
                {{--</div>--}}
                {{----}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
{{--</div>--}}
{{--@endsection--}}

{{--@section('script')--}}

    {{--<script>--}}
        {{--let step_no = 1;--}}
        {{--let image_no = 1;--}}
        {{--let link_no = 1;--}}
        {{--$('#insert-steps').on('click', function () {--}}
            {{--let html = '<div class="form-group" id="step_' + step_no + '">\n' +--}}
                {{--'                    <div class="form-row" style="margin-top: 5px">\n' +--}}
                {{--'                        <div class="form-group col-md-6">\n' +--}}
                {{--'                            <label>Title</label>\n' +--}}
                {{--'                            <input type="text" class="form-control" name="step_title[]" placeholder="Topic Title">\n' +--}}
                {{--'                        </div>\n' +--}}
                {{--'                    </div>\n' +--}}
                {{--'                  <div class="form-row">\n' +--}}
                {{--'                    <div class="form-group col-md-6">\n' +--}}
                {{--'                        <label>Description</label>\n' +--}}
                {{--'                        <textarea name="step_description[]" \n' +--}}
                {{--'                                  class="form-control editor" rows="5"\n' +--}}
                {{--'                                  placeholder="description..."></textarea>\n' +--}}
                {{--'                    </div>\n' +--}}
                {{--'                    <div class="form-group col-md-6">\n' +--}}
                {{--'                        <label>Step</label>\n' +--}}
                {{--'                        <textarea name="step_code[]" \n' +--}}
                {{--'                                  class="form-control editor" rows="5"\n' +--}}
                {{--'                                  placeholder="step code..."></textarea>\n' +--}}
                {{--'                    </div>\n' +--}}
                {{--'                 </div>\n' +--}}
                {{--'                    <button class="btn btn-danger" id="rm_step_' + step_no + '" onclick="removeStep(' + step_no + ')"> Remove </button>\n' +--}}
                {{--'                </div>';--}}

            {{--$('#steps').append(html);--}}
            {{--step_no += 1;--}}
        {{--});--}}

        {{--function removeStep(id) {--}}
            {{--let parent_id = $('#rm_step_' + id).parent().attr('id');--}}
            {{--$('#' + parent_id).remove();--}}
        {{--}--}}

        {{--// add images--}}
        {{--$('#insert-images').on('click', function () {--}}
            {{--let html = '<div class="form-group" id="image_' + image_no + '">\n' +--}}
                {{--'                    <div class="form-row" style="margin-top: 5px">\n' +--}}
                {{--'                        <div class="form-group col-md-6">\n' +--}}
                {{--'                            <label>Title ' + image_no + '</label>\n' +--}}
                {{--'                            <input type="text" class="form-control" name="image_title[]" ' +--}}
                {{--'placeholder="Title">\n' +--}}
                {{--'                        </div>\n' +--}}
                {{--'                    </div>\n' +--}}
                {{--'                    <div class="form-row">\n' +--}}
                {{--'                    <div class="form-group col-md-6">\n' +--}}
                {{--'                        <label>Description</label>\n' +--}}
                {{--'                        <textarea name="image_description[]"\n' +--}}
                {{--'                                  class="form-control editor" rows="5"\n' +--}}
                {{--'                                  placeholder="description..."></textarea>\n' +--}}
                {{--'                    </div>\n' +--}}
                {{--'                    <div class="form-group col-md-6">\n' +--}}
                {{--'                        <label>Example file input</label>\n' +--}}
                {{--'                        <input type="file" class="form-control-file" name="images[]">\n' +--}}
                {{--'                    </div>\n' +--}}
                {{--'                 </div>\n' +--}}
                {{--'                    <button class="btn btn-danger" id="rm_image_' + image_no + '"' +--}}
                {{--' onclick="removeImage(' + image_no + ')"> Remove\n' +--}}
                {{--'                    </button>\n' +--}}
                {{--'                </div>';--}}

            {{--$('#images').append(html);--}}
            {{--image_no += 1;--}}
        {{--});--}}

        {{--function removeImage(id) {--}}
            {{--let parent_id = $('#rm_image_' + id).parent().attr('id');--}}
            {{--$('#' + parent_id).remove();--}}
        {{--}--}}

        {{--$('#insert-links').on('click', function () {--}}
            {{--let html = '<div class="form-group" id="link_' + link_no + '">\n' +--}}
                {{--'                    <div class="form-row" style="margin-top: 5px">\n' +--}}
                {{--'                        <div class="form-group col-md-6">\n' +--}}
                {{--'                            <label>Title ' + link_no + '</label>\n' +--}}
                {{--'                            <input type="text" class="form-control" name="link_title[]" placeholder="Topic Title">\n' +--}}
                {{--'                        </div>\n' +--}}
                {{--'                    </div>\n' +--}}
                {{--'                  <div class="form-row">\n' +--}}
                {{--'                    <div class="form-group col-md-6">\n' +--}}
                {{--'                        <label>Description</label>\n' +--}}
                {{--'                        <textarea name="link_description[]" \n' +--}}
                {{--'                                  class="form-control editor" rows="5"\n' +--}}
                {{--'                                  placeholder="query builder code..."></textarea>\n' +--}}
                {{--'                    </div>\n' +--}}
                {{--'                    <div class="form-group col-md-6">\n' +--}}
                {{--'                        <label>Link</label>\n' +--}}
                {{--'                            <input type="text" class="form-control" name="url_link[]" placeholder="Url Link">\n' +--}}
                {{--'                    </div>\n' +--}}
                {{--'                  </div>\n' +--}}
                {{--'                    <button class="btn btn-danger" id="rm_link_' + link_no + '" onclick="removeLink(' + link_no + ')"> Remove </button>\n' +--}}
                {{--'                </div>';--}}

            {{--$('#links').append(html);--}}
            {{--link_no += 1;--}}
        {{--});--}}

        {{--function removeLink(id) {--}}
            {{--let parent_id = $('#rm_link_' + id).parent().attr('id');--}}
            {{--$('#' + parent_id).remove();--}}
        {{--}--}}


        {{--$('#save').on('click', function (e) {--}}
            {{--e.preventDefault();--}}
            {{--var formData = new FormData(document.getElementById('topic-details'));--}}

            {{--// for(var pair of formData.entries()) {--}}
            {{--//     console.log(pair[0]+ ', '+ pair[1]);--}}
            {{--// }--}}
            {{--// var input_array= $("input[name='step_title[]']").map(function() {--}}
            {{--//     return this.value;--}}
            {{--// }).get();--}}
            {{--// console.log(input_array);--}}

            {{--$.ajax({--}}
                {{--url: '{{route('admin.store.topic')}}',--}}
                {{--type: 'POST',--}}
                {{--data: formData,--}}
                {{--contentType: false,--}}
                {{--cache: false,--}}
                {{--processData: false,--}}
                {{--datatype: 'json',--}}
                {{--success: function (response) {--}}
                    {{--console.log(response)--}}
                {{--},--}}
                {{--error: function (jqxhr, status, exception) {--}}
                    {{--alert(exception);--}}
                {{--}--}}
            {{--})--}}
        {{--})--}}

    {{--</script>--}}
{{--@endsection--}}
