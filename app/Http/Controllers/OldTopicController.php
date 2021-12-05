<?php

namespace App\Http\Controllers;

use App\Models\StepTopic;
use App\Models\Subcategory;
use App\Models\Topic;
use http\Env\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Validator;

class OldTopicController extends Controller
{
    public $subtopics = '';
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function getSubcategoryTopics(Subcategory $subcategory)
    {
        $topics = $subcategory->topics;
        $subcategory = $subcategory->id;
        return view('admin.topics.topics', compact('subcategory', 'topics'));
    }

    public function createTopic(Subcategory $subcategory)
    {
//        $this->deleteAllTopics();
//        dd('deleted');
        return view('admin.topics.create_topic', compact('subcategory'));
    }

    public function storeTopic(Request $request)
    {

        $validator = Validator::make($request->all(),[
            'topic_title' => ['required','unique:topics']
        ]);
        if($validator->fails()){
            return response()->json(['data' => $validator->errors()]);
        }
        $topic = new Topic();
        $topic->subcategory_id = $request->subcategory_id;
        $topic->topic_title = $request->topic_title;
        $topic->topic_description = $this->checkValue($request->topic_description);
        if($topic->topic_description)
        {
            $this->subtopics .= 'topic_description,';
        }
        $topic->topic_instruction = $this->checkValue($request->topic_instruction);
        if($topic->topic_instruction)
        {
            $this->subtopics .= 'topic_instruction,';
        }
        $topic->topic_route = $this->checkValue($request->topic_route);
        if($topic->topic_route)
        {
            $this->subtopics .= 'topic_route,';
        }
        $topic->topic_controller = $this->checkValue($request->topic_controller);
        if($topic->topic_controller)
        {
            $this->subtopics .= 'topic_controller,';
        }
        $topic->topic_model = $this->checkValue($request->topic_model);
        if($topic->topic_model)
        {
            $this->subtopics .= 'topic_model,';
        }
        $topic->topic_regex = $this->checkValue($request->topic_regex);
        if($topic->topic_regex)
        {
            $this->subtopics .= 'topic_regex,';
        }
        $topic->topic_exception = $this->checkValue($request->topic_exception);
        if($topic->topic_exception)
        {
            $this->subtopics .= 'topic_exception,';
        }
        $topic->topic_provider = $this->checkValue($request->topic_provider);
        if($topic->topic_provider)
        {
            $this->subtopics .= 'topic_provider,';
        }
        $topic->topic_helper = $this->checkValue($request->topic_helper);
        if($topic->topic_helper)
        {
            $this->subtopics .= 'topic_helper,';
        }
        $topic->topic_class = $this->checkValue($request->topic_class);
        if($topic->topic_class)
        {
            $this->subtopics .= 'topic_class,';
        }
        $topic->topic_config = $this->checkValue($request->topic_config);
        if($topic->topic_config)
        {
            $this->subtopics .= 'topic_config,';
        }
        $topic->topic_notification = $this->checkValue($request->topic_notification);
        if($topic->topic_notification)
        {
            $this->subtopics .= 'topic_notification,';
        }
        $topic->topic_mail = $this->checkValue($request->topic_mail);
        if($topic->topic_mail)
        {
            $this->subtopics .= 'topic_mail,';
        }
        $topic->topic_event = $this->checkValue($request->topic_event);
        if($topic->topic_event)
        {
            $this->subtopics .= 'event,';
        }
        $topic->topic_request = $this->checkValue($request->topic_request);
        if($topic->topic_request)
        {
            $this->subtopics .= 'topic_event,';
        }
        $topic->topic_rules = $this->checkValue($request->topic_rules);
        if($topic->topic_rules)
        {
            $this->subtopics .= 'topic_rules,';
        }
        $topic->topic_middleware = $this->checkValue($request->topic_middleware);
        if($topic->topic_middleware)
        {
            $this->subtopics .= 'topic_middleware,';
        }
        $topic->topic_migration = $this->checkValue($request->topic_migration);
        if($topic->topic_migration)
        {
            $this->subtopics .= 'topic_migration,';
        }
        $topic->topic_factory = $this->checkValue($request->topic_factory);
        if($topic->topic_factory)
        {
            $this->subtopics .= 'topic_factory,';
        }
        $topic->topic_env = $this->checkValue($request->topic_env);
        if($topic->topic_env)
        {
            $this->subtopics .= 'topic_env,';
        }
        $topic->topic_blade = $this->checkValue($request->topic_blade);
        if($topic->topic_blade)
        {
            $this->subtopics .= 'topic_blade,';
        }
        $topic->topic_script = $this->checkValue($request->topic_script);
        if($topic->topic_script)
        {
            $this->subtopics .= 'topic_script,';
        }
        $topic->topic_css = $this->checkValue($request->topic_css);
        if($topic->topic_css)
        {
            $this->subtopics .= 'topic_css,';
        }
        $topic->topic_raw = $this->checkValue($request->topic_raw);
        if($topic->topic_raw)
        {
            $this->subtopics .= 'topic_raw,';
        }
        $topic->topic_eloquent = $this->checkValue($request->topic_eloquent);
        if($topic->topic_eloquent)
        {
            $this->subtopics .= 'topic_eloquent,';
        }
        $topic->topic_resource = $this->checkValue($request->topic_resource);
        if($topic->topic_resource)
        {
            $this->subtopics .= 'topic_resource,';
        }
        $topic->subtopics = $this->subtopics;
        $topic->save();
        return response()->json(['data' => $topic]);
    }


    public function viewTopic($id)
    {
        $topic = Topic::find($id);
        $subtopics = explode(',',$topic->subtopics);
        return view('admin.topics.topic_details',compact('id','subtopics'));
    }

    public function viewSubTopic(Request $request)
    {
        $subtopic = Topic::select($request->sub_topic)
            ->where('id', $request->id)
            ->get();
        return $subtopic;
    }

    public function checkValue($value)
    {
        if (!empty($value) && $value) {
            return $value;
        }
        return null;
    }

    public function checkFile($file)
    {

    }

    public function deleteAllTopics()
    {
        Schema::disableForeignKeyConstraints();
        DB::table('topics')->truncate();
        Schema::enableForeignKeyConstraints();
    }
}
