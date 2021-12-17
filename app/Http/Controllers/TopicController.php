<?php

namespace App\Http\Controllers;

use App\Models\Subcategory;
use App\Models\Subtopic;
use App\Models\Topic;
use http\Env\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Validator;
use function PHPUnit\Framework\isEmpty;

class TopicController extends Controller
{
    public $subtopics = '';
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function getSubcategoryTopics($id)
    {
        $subcategory = Subcategory::find($id);
        return view('admin.topics.topics', compact('subcategory'));
    }

    public function getSubcategoryTopicsAjax(Request $request)
    {
        if ($request->current == 1) {
            $start = 0;
        } else {
            $start = ($request->current - 1) * $request->length;
        }
        $topics = Topic::with('subtopics')
            ->where(function ($query) use($request){
                if($request->topic){
                    $query->where('topic_title','like','%'.$request->topic.'%');
                }
            })
            ->where('subcategory_id',$request->subcategory)
            ->orderByDesc('created_at')
            ->offset($start)
            ->limit($request->length)
            ->get()
            ->toArray();
        $total = Topic::with('subtopics')
            ->where(function ($query) use($request){
                if($request->topic){
                    $query->where('topic_title','like','%'.$request->topic.'%');
                }
            })
            ->where('subcategory_id',$request->subcategory)
            ->orderByDesc('created_at')
            ->count();

        $arrayName = array('1' => $topics, '2' => $total);
        return response()->json($arrayName);
    }

    public function createTopic(Subcategory $subcategory)
    {
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
        $date = date('Y_m_d-H-i-s');
        if ($request->hasFile('topic_thumbnail')) {
            $fileName = $date . '.' . $request->file('topic_thumbnail')->getClientOriginalName();
            $request->file('topic_thumbnail')->move(public_path('/thumbnails/'), $fileName);
            $topic->thumbnail = $fileName;
        }
        else{
            $topic->thumbnail = 'no_image.jpg';
        }
        $topic->save();

        $count = 0;
        if(isset($request->snippets))
        {
            for($i=0; $i<count($request->snippets); $i++)
            {
                $subTopic = new Subtopic;
                $subTopic->topic_id = $topic->id;
                if(isset($request->subtitles[$i])){
                    $subTopic->subtitle = $request->subtitles[$i];
                }
                if(isset($request->commands[$i])){
                    $subTopic->command = $request->commands[$i];
                }
                if(isset($request->snippets[$i])){
                    $subTopic->snippet = $request->snippets[$i];
                }
                if($subTopic->save()){
                    $count++;
                }
                else{
                    return response()->json(['data' => "subtopic not saved"]);
                }
            }
        }
        return response()->json(['data' => $count]);
    }

    public function editTopic($id)
    {
        $topic = Topic::with('subtopics')->get()->find($id);
        return view('admin.topics.edit_topic',compact('topic'));
    }

    public function updateTopic(Request $request)
    {
        $topic = Topic::find($request->id);
//        $topic->subcategory_id = $request->subcategory_id;
        $topic->topic_title = $request->topic_title;
        $topic->topic_description = $this->checkValue($request->topic_description);
        $date = date('Y_m_d-H-i-s');
        if ($request->hasFile('topic_thumbnail')) {
            $fileName = $date . '.' . $request->file('topic_thumbnail')->getClientOriginalName();
            $request->file('topic_thumbnail')->move(public_path('/thumbnails/'), $fileName);
            $topic->thumbnail = $fileName;
        }
        else{
            $topic->thumbnail = 'no_image.jpg';
        }
        $topic->save();

        $count = 0;
        if(isset($request->snippets))
        {
            for($i=0; $i<count($request->snippets); $i++)
            {
                $subTopic = new Subtopic;
                $subTopic->topic_id = $topic->id;
                if(isset($request->subtitles[$i])){
                    $subTopic->subtitle = $request->subtitles[$i];
                }
                if(isset($request->commands[$i])){
                    $subTopic->command = $request->commands[$i];
                }
                if(isset($request->snippets[$i])){
                    $subTopic->snippet = $request->snippets[$i];
                }
                if($subTopic->save()){
                    $count++;
                }
                else{
                    return response()->json(['data' => "subtopic not saved"]);
                }
            }
        }
        return "success";
//        dd(Topic::find($request->id));
    }

    public function editSubtopic($id)
    {
        $subtopic = Subtopic::find($id);
        return view('admin.topics.edit_subtopic',compact('subtopic'));
    }

    public function viewTopic($id)
    {
        $topic = Topic::find($id);
        $subtopics = Subtopic::select('id','subtitle')->where('topic_id',$id)->get();
        return view('admin.topics.topic_details',compact('id','subtopics','topic'));
    }

    public function viewSubTopic(Request $request)
    {
        $subtopic = Subtopic::where('id', $request->id)->get();
        return $subtopic;
    }

    public function checkValue($value)
    {
        if (!empty($value) && $value) {
            return $value;
        }
        return null;
    }

    public function deleteAllTopics()
    {
        Schema::disableForeignKeyConstraints();
        DB::table('topics')->truncate();
        Schema::enableForeignKeyConstraints();
    }
}
