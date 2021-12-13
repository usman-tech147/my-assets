{{--@extends('layouts.master')--}}
{{--@section('content')--}}
{{--<div>--}}
{{--<p class="h3 bg-dark" style="padding-top: 10px; padding-left: 10px; padding-bottom: 10px"> Create Topic--}}
{{--/ {{$subcategory->title}} </p>--}}
{{--</div>--}}
{{--<div class="row">--}}
{{--<div class="col-md-12">--}}
{{--<form id="topic-details">--}}
{{--@csrf--}}

{{--Subcategory--}}
{{--<input type="hidden" value="{{$subcategory->id}}" name="subcategory_id">--}}
{{--<div class="form-row">--}}

{{--Title--}}
{{--<div class="form-group col-md-6">--}}
{{--<label>Title</label>--}}
{{--<input type="text" class="form-control" id="title" name="topic_title" placeholder="Topic Title">--}}
{{--</div>--}}

{{--Description--}}
{{--<div class="col-md-12">--}}
{{--<label>Description</label>--}}
{{--<textarea class="summernote" id="description" name="topic_description" ></textarea>--}}
{{--</div>--}}
{{--</div>--}}

{{--<div class="form-row" >--}}

{{--Instructions--}}
{{--<div class="col-md-12">--}}
{{--<label id="instruction_label">--}}
{{--<a class="btn btn-success" onclick="add('instruction')">--}}
{{--<i class="fa fa-plus"></i>--}}
{{--Instructions--}}
{{--</a>--}}
{{--</label>--}}
{{--<div class="form-group" id="instruction" style="display: none">--}}
{{--<textarea class="summernote" id="instruction_summernote" name="topic_instruction" ></textarea>--}}
{{--</div>--}}
{{--</div>--}}

{{--Routes--}}
{{--<div class="col-md-12">--}}
{{--<label id="route_label">--}}
{{--<a class="btn btn-success" onclick="add('route')">--}}
{{--<i class="fa fa-plus"></i>--}}
{{--Route--}}
{{--</a>--}}
{{--</label>--}}
{{--<div class="form-group" id="route" style="display: none">--}}
{{--<textarea class="summernote" id="route_summernote" name="topic_route" ></textarea>--}}
{{--</div>--}}
{{--</div>--}}

{{--Config--}}
{{--<div class="col-md-12">--}}
{{--<label id="config_label">--}}
{{--<a class="btn btn-success" onclick="add('config')">--}}
{{--<i class="fa fa-plus"></i>--}}
{{--Config--}}
{{--</a>--}}
{{--</label>--}}
{{--<div class="form-group" id="config" style="display: none">--}}
{{--<textarea class="summernote" id="config_summernote" name="topic_config" ></textarea>--}}
{{--</div>--}}
{{--</div>--}}

{{--Classes--}}
{{--<div class="col-md-12">--}}
{{--<label id="class_label">--}}
{{--<a class="btn btn-success" onclick="add('class')">--}}
{{--<i class="fa fa-plus"></i>--}}
{{--Class--}}
{{--</a>--}}
{{--</label>--}}
{{--<div class="form-group" id="class" style="display: none">--}}
{{--<textarea class="summernote" id="class_summernote" name="topic_class" ></textarea>--}}
{{--</div>--}}
{{--</div>--}}

{{--Helper--}}
{{--<div class="col-md-12">--}}
{{--<label id="helper_label">--}}
{{--<a class="btn btn-success" onclick="add('helper')">--}}
{{--<i class="fa fa-plus"></i>--}}
{{--Helper--}}
{{--</a>--}}
{{--</label>--}}
{{--<div class="form-group" id="helper" style="display: none">--}}
{{--<textarea class="summernote" id="helper_summernote" name="topic_helper" ></textarea>--}}
{{--</div>--}}
{{--</div>--}}

{{--Provider--}}
{{--<div class="col-md-12">--}}
{{--<label id="provider_label">--}}
{{--<a class="btn btn-success" onclick="add('provider')">--}}
{{--<i class="fa fa-plus"></i>--}}
{{--Provider--}}
{{--</a>--}}
{{--</label>--}}
{{--<div class="form-group" id="provider" style="display: none">--}}
{{--<textarea class="summernote" id="provider_summernote" name="topic_provider" ></textarea>--}}
{{--</div>--}}
{{--</div>--}}

{{--Exception--}}
{{--<div class="col-md-12">--}}
{{--<label id="exception_label">--}}
{{--<a class="btn btn-success" onclick="add('exception')">--}}
{{--<i class="fa fa-plus"></i>--}}
{{--Exception--}}
{{--</a>--}}
{{--</label>--}}
{{--<div class="form-group" id="exception" style="display: none">--}}
{{--<textarea class="summernote" id="exception_summernote" name="topic_exception" ></textarea>--}}
{{--</div>--}}
{{--</div>--}}

{{--Regex--}}
{{--<div class="col-md-12">--}}
{{--<label id="regex_label">--}}
{{--<a class="btn btn-success" onclick="add('regex')">--}}
{{--<i class="fa fa-plus"></i>--}}
{{--Regex--}}
{{--</a>--}}
{{--</label>--}}
{{--<div class="form-group" id="regex" style="display: none">--}}
{{--<textarea class="summernote" id="regex_summernote" name="topic_regex" ></textarea>--}}
{{--</div>--}}
{{--</div>--}}

{{--Model--}}
{{--<div class="col-md-12">--}}
{{--<label id="model_label">--}}
{{--<a class="btn btn-success" onclick="add('model')">--}}
{{--<i class="fa fa-plus"></i>--}}
{{--Model--}}
{{--</a>--}}
{{--</label>--}}
{{--<div class="form-group" id="model" style="display: none">--}}
{{--<textarea class="summernote" id="model_summernote" name="topic_model" ></textarea>--}}
{{--</div>--}}
{{--</div>--}}

{{--Controller--}}
{{--<div class="col-md-12">--}}
{{--<label id="controller_label">--}}
{{--<a class="btn btn-success" onclick="add('controller')">--}}
{{--<i class="fa fa-plus"></i>--}}
{{--Controller--}}
{{--</a>--}}
{{--</label>--}}
{{--<div class="form-group" id="controller" style="display: none">--}}
{{--<textarea class="summernote" id="controller_summernote" name="topic_controller" ></textarea>--}}
{{--</div>--}}
{{--</div>--}}

{{--Mail--}}
{{--<div class="col-md-12">--}}
{{--<label id="mail_label">--}}
{{--<a class="btn btn-success" onclick="add('mail')">--}}
{{--<i class="fa fa-plus"></i>--}}
{{--Mail--}}
{{--</a>--}}
{{--</label>--}}
{{--<div class="form-group" id="mail" style="display: none">--}}
{{--<textarea class="summernote" id="mail_summernote" name="topic_mail" ></textarea>--}}
{{--</div>--}}
{{--</div>--}}

{{--Notification--}}
{{--<div class="col-md-12">--}}
{{--<label id="notification_label">--}}
{{--<a class="btn btn-success" onclick="add('notification')">--}}
{{--<i class="fa fa-plus"></i>--}}
{{--Notification--}}
{{--</a>--}}
{{--</label>--}}
{{--<div class="form-group" id="notification" style="display: none">--}}
{{--<textarea class="summernote" id="notification_summernote" name="topic_notification" ></textarea>--}}
{{--</div>--}}
{{--</div>--}}

{{--Event--}}
{{--<div class="col-md-12">--}}
{{--<label id="event_label">--}}
{{--<a class="btn btn-success" onclick="add('event')">--}}
{{--<i class="fa fa-plus"></i>--}}
{{--Event--}}
{{--</a>--}}
{{--</label>--}}
{{--<div class="form-group" id="event" style="display: none">--}}
{{--<textarea class="summernote" id="event_summernote" name="topic_event" ></textarea>--}}
{{--</div>--}}
{{--</div>--}}

{{--Request--}}
{{--<div class="col-md-12">--}}
{{--<label id="request_label">--}}
{{--<a class="btn btn-success" onclick="add('request')">--}}
{{--<i class="fa fa-plus"></i>--}}
{{--Request--}}
{{--</a>--}}
{{--</label>--}}
{{--<div class="form-group" id="request" style="display: none">--}}
{{--<textarea class="summernote" id="request_summernote" name="topic_request" ></textarea>--}}
{{--</div>--}}
{{--</div>--}}

{{--Rules--}}
{{--<div class="col-md-12">--}}
{{--<label id="rules_label">--}}
{{--<a class="btn btn-success" onclick="add('rules')">--}}
{{--<i class="fa fa-plus"></i>--}}
{{--Rules--}}
{{--</a>--}}
{{--</label>--}}
{{--<div class="form-group" id="rules" style="display: none">--}}
{{--<textarea class="summernote" id="rules_summernote" name="topic_rules" ></textarea>--}}
{{--</div>--}}
{{--</div>--}}

{{--Middleware--}}
{{--<div class="col-md-12">--}}
{{--<label id="middleware_label">--}}
{{--<a class="btn btn-success" onclick="add('middleware')">--}}
{{--<i class="fa fa-plus"></i>--}}
{{--Middleware--}}
{{--</a>--}}
{{--</label>--}}
{{--<div class="form-group" id="middleware" style="display: none">--}}
{{--<textarea class="summernote" id="middleware_summernote" name="topic_middleware" ></textarea>--}}
{{--</div>--}}
{{--</div>--}}

{{--Migration--}}
{{--<div class="col-md-12">--}}
{{--<label id="migration_label">--}}
{{--<a class="btn btn-success" onclick="add('migration')">--}}
{{--<i class="fa fa-plus"></i>--}}
{{--Migration--}}
{{--</a>--}}
{{--</label>--}}
{{--<div class="form-group" id="migration" style="display: none">--}}
{{--<textarea class="summernote" id="migration_summernote" name="topic_migration" ></textarea>--}}
{{--</div>--}}
{{--</div>--}}

{{--Factory--}}
{{--<div class="col-md-12">--}}
{{--<label id="factory_label">--}}
{{--<a class="btn btn-success" onclick="add('factory')">--}}
{{--<i class="fa fa-plus"></i>--}}
{{--Factory--}}
{{--</a>--}}
{{--</label>--}}
{{--<div class="form-group" id="factory" style="display: none">--}}
{{--<textarea class="summernote" id="factory_summernote" name="topic_factory" ></textarea>--}}
{{--</div>--}}
{{--</div>--}}

{{--Env--}}
{{--<div class="col-md-12">--}}
{{--<label id="env_label">--}}
{{--<a class="btn btn-success" onclick="add('env')">--}}
{{--<i class="fa fa-plus"></i>--}}
{{--Env--}}
{{--</a>--}}
{{--</label>--}}
{{--<div class="form-group" id="env" style="display: none">--}}
{{--<textarea class="summernote" id="env_summernote" name="topic_env"></textarea>--}}
{{--</div>--}}
{{--</div>--}}

{{--Blade--}}
{{--<div class="col-md-12">--}}
{{--<label id="blade_label">--}}
{{--<a class="btn btn-success" onclick="add('blade')">--}}
{{--<i class="fa fa-plus"></i>--}}
{{--Blade--}}
{{--</a>--}}
{{--</label>--}}
{{--<div class="form-group" id="blade" style="display: none">--}}
{{--<textarea class="summernote" id="blade_summernote" name="topic_blade"></textarea>--}}
{{--</div>--}}
{{--</div>--}}

{{--Script--}}
{{--<div class="col-md-12">--}}
{{--<label id="script_label">--}}
{{--<a class="btn btn-success" onclick="add('script')">--}}
{{--<i class="fa fa-plus"></i>--}}
{{--Script--}}
{{--</a>--}}
{{--</label>--}}
{{--<div class="form-group" id="script" style="display: none">--}}
{{--<textarea class="summernote" id="script_summernote" name="topic_script"></textarea>--}}
{{--</div>--}}
{{--</div>--}}

{{--CSS--}}
{{--<div class="col-md-12">--}}
{{--<label id="css_label">--}}
{{--<a class="btn btn-success" onclick="add('css')">--}}
{{--<i class="fa fa-plus"></i>--}}
{{--Css--}}
{{--</a>--}}
{{--</label>--}}
{{--<div class="form-group" id="css" style="display: none">--}}
{{--<textarea class="summernote" id="css_summernote" name="topic_css" ></textarea>--}}
{{--</div>--}}
{{--</div>--}}

{{--Raw sql--}}
{{--<div class="col-md-12">--}}
{{--<label id="raw_label">--}}
{{--<a class="btn btn-success" onclick="add('raw')">--}}
{{--<i class="fa fa-plus"></i>--}}
{{--Raw Sql--}}
{{--</a>--}}
{{--</label>--}}
{{--<div class="form-group" id="raw" style="display: none">--}}
{{--<textarea class="summernote" id="raw_summernote" name="topic_raw" ></textarea>--}}
{{--</div>--}}
{{--</div>--}}

{{--Eloquent--}}
{{--<div class="col-md-12">--}}
{{--<label id="eloquent_label">--}}
{{--<a class="btn btn-success" onclick="add('eloquent')">--}}
{{--<i class="fa fa-plus"></i>--}}
{{--Eloquent--}}
{{--</a>--}}
{{--</label>--}}
{{--<div class="form-group" id="eloquent" style="display: none">--}}
{{--<textarea class="summernote" name="topic_eloquent" ></textarea>--}}
{{--</div>--}}
{{--</div>--}}

{{--Resources--}}
{{--<div class="col-md-12">--}}
{{--<label id="resource_label">--}}
{{--<a class="btn btn-success" onclick="add('resource')">--}}
{{--<i class="fa fa-plus"></i>--}}
{{--Resource--}}
{{--</a>--}}
{{--</label>--}}
{{--<div class="form-group" id="resource" style="display: none">--}}
{{--<textarea class="summernote m-0 p-0" name="topic_resource" ></textarea>--}}
{{--</div>--}}
{{--</div>--}}
{{--</div>--}}

{{--<button type="submit" id="save" class="btn btn-primary">Save</button>--}}
{{--</form>--}}
{{--</div>--}}
{{--</div>--}}
{{--@endsection--}}

{{--@section('script')--}}

{{--<script>--}}

{{--$(document).ready(function () {--}}
{{--$('.summernote').summernote({--}}
{{--toolbar: [--}}
{{--// [groupName, [list of button]]--}}
{{--['style', ['bold', 'italic', 'underline', 'clear']],--}}
{{--['font', ['strikethrough', 'superscript', 'subscript']],--}}
{{--['fontsize', ['fontsize']],--}}
{{--['color', ['color']],--}}
{{--['para', ['ul', 'ol', 'paragraph']],--}}
{{--['height', ['height']]--}}
{{--]--}}
{{--});--}}
{{--});--}}

{{--$('#save').on('click', function (e) {--}}
{{--e.preventDefault();--}}
{{--var formData = new FormData(document.getElementById('topic-details'));--}}

{{--// for (var pair of formData.entries()) {--}}
{{--//     console.log(pair[0] + ', ' + pair[1]);--}}
{{--// }--}}

{{--    console.log($('#desc1').summernote('code'));--}}

{{--    // var input_array= $("input[name='step_title[]']").map(function() {--}}
{{--    //     return this.value;--}}
{{--    // }).get();--}}
{{--    // console.log(input_array);--}}

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
{{--});--}}


{{--// 24--}}
{{--function add(value){--}}
{{--if(value === 'instruction')--}}
{{--{--}}
{{--$('#instruction').show();--}}
{{--$('#instruction_label').html('<a class="btn btn-danger" onclick="remove(`instruction`)"> ' +--}}
{{--'<i class="fa fa-minus"></i> Instruction </a>');--}}
{{--}--}}
{{--if(value === 'route')--}}
{{--{--}}
{{--$('#route').show();--}}
{{--$('#route_label').html('<a class="btn btn-danger" onclick="remove(`route`)"> <i class="fa fa-minus"></i> Route </a>');--}}
{{--}--}}
{{--if(value === 'config')--}}
{{--{--}}
{{--$('#config').show();--}}
{{--$('#config_label').html('<a class="btn btn-danger" onclick="remove(`config`)"> <i class="fa fa-minus"></i> Config </a>');--}}
{{--}--}}
{{--if(value === 'class')--}}
{{--{--}}
{{--$('#class').show();--}}
{{--$('#class_label').html('<a class="btn btn-danger" onclick="remove(`class`)"> <i class="fa fa-minus"></i> Class </a>');--}}
{{--}--}}
{{--if(value === 'helper')--}}
{{--{--}}
{{--$('#helper').show();--}}
{{--$('#helper_label').html('<a class="btn btn-danger" onclick="remove(`helper`)"> <i class="fa fa-minus"></i> Helper </a>');--}}
{{--}--}}
{{--if(value === 'provider')--}}
{{--{--}}
{{--$('#provider').show();--}}
{{--$('#provider_label').html('<a class="btn btn-danger" onclick="remove(`provider`)"> <i class="fa fa-minus"></i> Provider </a>');--}}
{{--}--}}
{{--if(value === 'exception')--}}
{{--{--}}
{{--$('#exception').show();--}}
{{--$('#exception_label').html('<a class="btn btn-danger" onclick="remove(`exception`)"> ' +--}}
{{--'<i class="fa fa-minus"></i> Exception </a>');--}}
{{--}--}}
{{--if(value === 'regex')--}}
{{--{--}}
{{--$('#regex').show();--}}
{{--$('#regex_label').html('<a class="btn btn-danger" onclick="remove(`regex`)"> <i class="fa fa-minus"></i> Regex </a>');--}}
{{--}--}}
{{--if(value === 'resource')--}}
{{--{--}}
{{--$('#resource').show();--}}
{{--$('#resource_label').html('<a class="btn btn-danger" onclick="remove(`resource`)"> <i class="fa fa-minus"></i> Resource </a>');--}}
{{--}--}}
{{--if(value === 'model')--}}
{{--{--}}
{{--$('#model').show();--}}
{{--$('#model_label').html('<a class="btn btn-danger" onclick="remove(`model`)"> <i class="fa fa-minus"></i> Model </a>');--}}
{{--}--}}
{{--if(value === 'controller')--}}
{{--{--}}
{{--$('#controller').show();--}}
{{--$('#controller_label').html('<a class="btn btn-danger" onclick="remove(`controller`)"> ' +--}}
{{--'<i class="fa fa-minus"></i> Controller </a>');--}}
{{--}--}}
{{--if(value === 'mail')--}}
{{--{--}}
{{--$('#mail').show();--}}
{{--$('#mail_label').html('<a class="btn btn-danger" onclick="remove(`mail`)"> <i class="fa fa-minus"></i> Mail </a>');--}}
{{--}--}}
{{--if(value === 'notification')--}}
{{--{--}}
{{--$('#notification').show();--}}
{{--$('#notification_label').html('<a class="btn btn-danger" onclick="remove(`notification`)"> ' +--}}
{{--'<i class="fa fa-minus"></i> Notification </a>');--}}
{{--}--}}
{{--if(value === 'event')--}}
{{--{--}}
{{--$('#event').show();--}}
{{--$('#event_label').html('<a class="btn btn-danger" onclick="remove(`event`)"> ' +--}}
{{--'<i class="fa fa-minus"></i> Event </a>');--}}
{{--}--}}
{{--if(value === 'request')--}}
{{--{--}}
{{--$('#request').show();--}}
{{--$('#request_label').html('<a class="btn btn-danger" onclick="remove(`request`)"> ' +--}}
{{--'<i class="fa fa-minus"></i> Request </a>');--}}
{{--}--}}
{{--if(value === 'rules')--}}
{{--{--}}
{{--$('#rules').show();--}}
{{--$('#rules_label').html('<a class="btn btn-danger" onclick="remove(`rules`)"> <i class="fa fa-minus"></i> Rules </a>');--}}
{{--}--}}
{{--if(value === 'middleware')--}}
{{--{--}}
{{--$('#middleware').show();--}}
{{--$('#middleware_label').html('<a class="btn btn-danger" onclick="remove(`middleware`)"> ' +--}}
{{--'<i class="fa fa-minus"></i> Middleware </a>');--}}
{{--}--}}
{{--if(value === 'migration')--}}
{{--{--}}
{{--$('#migration').show();--}}
{{--$('#migration_label').html('<a class="btn btn-danger" onclick="remove(`migration`)"> ' +--}}
{{--'<i class="fa fa-minus"></i> Migration </a>');--}}
{{--}--}}
{{--if(value === 'factory')--}}
{{--{--}}
{{--$('#factory').show();--}}
{{--$('#factory_label').html('<a class="btn btn-danger" onclick="remove(`factory`)"> ' +--}}
{{--'<i class="fa fa-minus"></i> Factory </a>');--}}
{{--}--}}
{{--if(value === 'env')--}}
{{--{--}}
{{--$('#env').show();--}}
{{--$('#env_label').html('<a class="btn btn-danger" onclick="remove(`env`)"> ' +--}}
{{--'<i class="fa fa-minus"></i> Env </a>');--}}
{{--}--}}
{{--if(value === 'blade')--}}
{{--{--}}
{{--$('#blade').show();--}}
{{--$('#blade_label').html('<a class="btn btn-danger" onclick="remove(`blade`)"> <i class="fa fa-minus"></i> Blade </a>');--}}
{{--}--}}
{{--if(value === 'script')--}}
{{--{--}}
{{--$('#script').show();--}}
{{--$('#script_label').html('<a class="btn btn-danger" onclick="remove(`script`)"> ' +--}}
{{--'<i class="fa fa-minus"></i> Script </a>');--}}
{{--}--}}
{{--if(value === 'css')--}}
{{--{--}}
{{--$('#css').show();--}}
{{--$('#css_label').html('<a class="btn btn-danger" onclick="remove(`css`)"> <i class="fa fa-minus"></i> Css </a>');--}}
{{--}--}}
{{--if(value === 'raw')--}}
{{--{--}}
{{--$('#raw').show();--}}
{{--$('#raw_label').html('<a class="btn btn-danger" onclick="remove(`raw`)"> <i class="fa fa-minus"></i> Raw </a>');--}}
{{--}--}}
{{--if(value === 'eloquent')--}}
{{--{--}}
{{--$('#eloquent').show();--}}
{{--$('#eloquent_label').html('<a class="btn btn-danger" onclick="remove(`eloquent`)"> ' +--}}
{{--'<i class="fa fa-minus"></i> Eloquent </a>');--}}
{{--}--}}
{{--}--}}

{{--function remove(value){--}}
{{--if(value === 'instruction')--}}
{{--{--}}
{{--$('#instruction').hide();--}}
{{--// $('#instruction_summernote').summernote('code',"");--}}
{{--$('#instruction_label').html('<a class="btn btn-success" onclick="add(`instruction`)"> ' +--}}
{{--'<i class="fa fa-plus"></i> Instruction </a>');--}}
{{--}--}}
{{--if(value === 'route')--}}
{{--{--}}
{{--$('#route').hide();--}}
{{--$('#route_label').html('<a class="btn btn-success" onclick="add(`route`)"> <i class="fa fa-plus"></i> Route </a>');--}}
{{--}--}}
{{--if(value === 'config')--}}
{{--{--}}
{{--$('#config').hide();--}}
{{--$('#config_label').html('<a class="btn btn-success" onclick="add(`config`)"> ' +--}}
{{--'<i class="fa fa-plus"></i> Config </a>');--}}
{{--}--}}
{{--if(value === 'class')--}}
{{--{--}}
{{--$('#class').hide();--}}
{{--$('#class_label').html('<a class="btn btn-success" onclick="add(`class`)"> ' +--}}
{{--'<i class="fa fa-plus"></i> Class </a>');--}}
{{--}--}}
{{--if(value === 'helper')--}}
{{--{--}}
{{--$('#helper').hide();--}}
{{--$('#helper_label').html('<a class="btn btn-success" onclick="add(`helper`)"> ' +--}}
{{--'<i class="fa fa-plus"></i> Helper </a>');--}}
{{--}--}}
{{--if(value === 'provider')--}}
{{--{--}}
{{--$('#provider').hide();--}}
{{--$('#provider_label').html('<a class="btn btn-success" onclick="add(`provider`)"> ' +--}}
{{--'<i class="fa fa-plus"></i> Provider </a>');--}}
{{--}--}}
{{--if(value === 'exception')--}}
{{--{--}}
{{--$('#exception').hide();--}}
{{--$('#exception_label').html('<a class="btn btn-success" onclick="add(`exception`)"> ' +--}}
{{--'<i class="fa fa-plus"></i> Exception </a>');--}}
{{--}--}}
{{--if(value === 'regex')--}}
{{--{--}}
{{--$('#regex').hide();--}}
{{--$('#regex_label').html('<a class="btn btn-success" onclick="add(`regex`)"> ' +--}}
{{--'<i class="fa fa-plus"></i> Regex </a>');--}}
{{--}--}}
{{--if(value === 'resource')--}}
{{--{--}}
{{--$('#resource').hide();--}}
{{--$('#resource_label').html('<a class="btn btn-success" onclick="add(`resource`)"> ' +--}}
{{--'<i class="fa fa-plus"></i> Resource </a>');--}}
{{--}--}}
{{--if(value === 'model')--}}
{{--{--}}
{{--$('#model').hide();--}}
{{--$('#model_label').html('<a class="btn btn-success" onclick="add(`model`)"> <i class="fa fa-plus"></i> Model </a>');--}}
{{--}--}}
{{--if(value === 'controller')--}}
{{--{--}}
{{--$('#controller').hide();--}}
{{--$('#controller_label').html('<a class="btn btn-success" onclick="add(`controller`)"> ' +--}}
{{--'<i class="fa fa-plus"></i> Controller </a>');--}}
{{--}--}}
{{--if(value === 'mail')--}}
{{--{--}}
{{--$('#mail').hide();--}}
{{--$('#mail_label').html('<a class="btn btn-success" onclick="add(`mail`)"> ' +--}}
{{--'<i class="fa fa-plus"></i> Mail </a>');--}}
{{--}--}}
{{--if(value === 'notification')--}}
{{--{--}}
{{--$('#notification').hide();--}}
{{--$('#notification_label').html('<a class="btn btn-success" onclick="add(`notification`)"> ' +--}}
{{--'<i class="fa fa-plus"></i> Notification </a>');--}}
{{--}--}}
{{--if(value === 'event')--}}
{{--{--}}
{{--$('#event').hide();--}}
{{--$('#event_label').html('<a class="btn btn-success" onclick="add(`event`)"> ' +--}}
{{--'<i class="fa fa-plus"></i> Event </a>');--}}
{{--}--}}
{{--if(value === 'request')--}}
{{--{--}}
{{--$('#request').hide();--}}
{{--$('#request_label').html('<a class="btn btn-success" onclick="add(`request`)"> ' +--}}
{{--'<i class="fa fa-plus"></i> Request </a>');--}}
{{--}--}}
{{--if(value === 'rules')--}}
{{--{--}}
{{--$('#rules').hide();--}}
{{--$('#rules_label').html('<a class="btn btn-success" onclick="add(`rules`)"> ' +--}}
{{--'<i class="fa fa-plus"></i> Rules </a>');--}}
{{--}--}}
{{--if(value === 'middleware')--}}
{{--{--}}
{{--$('#middleware').hide();--}}
{{--$('#middleware_label').html('<a class="btn btn-success" onclick="add(`middleware`)"> ' +--}}
{{--'<i class="fa fa-plus"></i> Middleware </a>');--}}
{{--}--}}
{{--if(value === 'migration')--}}
{{--{--}}
{{--$('#migration').hide();--}}
{{--$('#migration_label').html('<a class="btn btn-success" onclick="add(`migration`)"> ' +--}}
{{--'<i class="fa fa-plus"></i> Migration </a>');--}}
{{--}--}}
{{--if(value === 'factory')--}}
{{--{--}}
{{--$('#factory').hide();--}}
{{--$('#factory_label').html('<a class="btn btn-success" onclick="add(`factory`)"> ' +--}}
{{--'<i class="fa fa-plus"></i> Factory </a>');--}}
{{--}--}}
{{--if(value === 'env')--}}
{{--{--}}
{{--$('#env').hide();--}}
{{--$('#env_label').html('<a class="btn btn-success" onclick="add(`env`)"> ' +--}}
{{--'<i class="fa fa-plus"></i> Env </a>');--}}
{{--}--}}
{{--if(value === 'blade')--}}
{{--{--}}
{{--$('#blade').hide();--}}
{{--$('#blade_label').html('<a class="btn btn-success" onclick="add(`blade`)"> ' +--}}
{{--'<i class="fa fa-plus"></i> Blade </a>');--}}
{{--}--}}
{{--if(value === 'script')--}}
{{--{--}}
{{--$('#script').hide();--}}
{{--$('#script_label').html('<a class="btn btn-success" onclick="add(`script`)"> ' +--}}
{{--'<i class="fa fa-plus"></i> Script </a>');--}}
{{--}--}}
{{--if(value === 'css')--}}
{{--{--}}
{{--$('#css').hide();--}}
{{--$('#css_label').html('<a class="btn btn-success" onclick="add(`css`)"> ' +--}}
{{--'<i class="fa fa-plus"></i> Css </a>');--}}
{{--}--}}
{{--if(value === 'raw')--}}
{{--{--}}
{{--$('#raw').hide();--}}
{{--$('#raw_label').html('<a class="btn btn-success" onclick="add(`raw`)"> ' +--}}
{{--'<i class="fa fa-plus"></i> Raw </a>');--}}
{{--}--}}
{{--if(value === 'eloquent')--}}
{{--{--}}
{{--$('#eloquent').hide();--}}
{{--$('#eloquent_label').html('<a class="btn btn-success" onclick="add(`eloquent`)"> ' +--}}
{{--'<i class="fa fa-plus"></i> Eloquent </a>');--}}
{{--}--}}
{{--}--}}
{{--</script>--}}

{{--@endsection--}}


@extends('layouts.master')
@section('content')
    <div>
        <p class="h3 bg-dark" style="padding-top: 10px; padding-left: 10px; padding-bottom: 10px"> Create Topic
            / {{$subcategory->title}} </p>
    </div>
    <div class="row">
        <div class="col-md-12">
            <form id="topic-details">
                @csrf

                {{--Subcategory--}}
                <input type="hidden" value="{{$subcategory->id}}" name="subcategory_id">
                <div class="form-row">

                    {{--Title--}}
                    <div class="form-group col-md-6">
                        <label>Title</label>
                        <input type="text" class="form-control" id="title" name="topic_title" placeholder="Topic Title">
                    </div>

                    {{--Description--}}
                    <div class="col-md-12">
                        <label>Description</label>
                        <textarea class="summernote" id="description" name="topic_description"></textarea>
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
                        <button type="submit" id="save" class="btn btn-primary">Save</button>
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
            $('.summernote').summernote('foreColor', 'rgb(89, 89, 89)');

        }

        $('#save').on('click', function (e) {
            e.preventDefault();
            var formData = new FormData(document.getElementById('topic-details'));

            for (var pair of formData.entries()) {
                console.log(pair[0] + ', ' + pair[1]);
            }

            // var input_array= $("input[name='snippets[]']").map(function() {
            //     return this.value;
            // }).get();
            // console.log(input_array);

            $.ajax({
                url: '{{route('admin.store.topic')}}',
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

    </script>

@endsection

