<?php

namespace App\Http\Controllers;

use App\Models\Subcategory;
use App\Models\Subtopic;
use App\Models\Topic;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Validator;

class TopicController extends Controller
{
    public $subtopics = '';
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function getSubcategoryTopics($id)
    {
//        $topics = Topic::with('subtopics')
//            ->where('subcategory_id',$id)
//            ->get();
//        $subcategory = $id;
//        return view('admin.topics.topics', compact('subcategory','topics'));

        $subcategory = $id;
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
            ->where('subcategory_id',$request->subcategory)
            ->offset($start)
            ->limit($request->length)
            ->get()
            ->toArray();
        $total = Topic::where('topic_title','!=',null)->count();

        $arrayName = array('1' => $topics, '2' => $total);
        return response()->json($arrayName);
    }

    public function createTopic(Subcategory $subcategory)
    {
//        $this->deleteAllTopics();
//        dd('deleted');
        return view('admin.topics.create_topic', compact('subcategory'));
    }

    public function storeTopic(Request $request)
    {
//        return response()->json(['data' => $request->snippets[0]]);
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
        $topic->save();

        $count = 0;
        if(isset($request->snippets))
        {
            for($i=0; $i<count($request->snippets); $i++)
            {
                $subTopic = new Subtopic;
                $subTopic->subtitle = $request->subtitles[$i];
                $subTopic->command = $request->commands[$i];
                $subTopic->snippet = $request->snippets[$i];
                $subTopic->topic_id = $topic->id;

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


    public function viewTopic($id)
    {
//        $topic = Topic::find($id);
        $subtopics = Subtopic::select('id','subtitle')->where('topic_id',$id)->get();
        return view('admin.topics.topic_details',compact('id','subtopics'));
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
