<?php

namespace App\Http\Controllers;

use App\Models\StepTopic;
use App\Models\Subcategory;
use App\Models\Topic;
use Illuminate\Http\Request;

class TopicController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function getSubcategoryTopics(Subcategory $subcategory)
    {
        $subcategory = $subcategory->id;
        return view('admin.topics.topics', compact('subcategory'));
    }

    public function createTopic(Subcategory $subcategory)
    {
        return view('admin.topics.create_topic', compact('subcategory'));
    }

    public function storeTopic(Request $request)
    {

//        return response()->json(['data' => $this->checkValue($request->title)]);
        $topic = new Topic();
        $topic->subcategory_id = 1;
        $topic->title = $this->checkValue($request->title);
        $topic->description = 'static';
        $topic->html = $this->checkValue($request->html);
        $topic->css = $this->checkValue($request->css);
        $topic->jquery = $this->checkValue($request->jquery);
        $topic->model = $this->checkValue($request->model);
        $topic->controller = $this->checkValue($request->controller);
        $topic->app = $this->checkValue($request->app);
        $topic->config = $this->checkValue($request->config);
        $topic->migrations = $this->checkValue($request->migrations);
        $topic->factories = $this->checkValue($request->factories);
        $topic->seed = $this->checkValue($request->seed);
        $topic->backend_extra = $this->checkValue($request->extra);
        $topic->raw_sql = $this->checkValue($request->raw);
        $topic->eloquent = $this->checkValue($request->eloquent);
        $topic->query_builder = $this->checkValue($request->query);
        $topic->save();


        return response()->json(['data' => $topic]);

//        $topic->subcategory_id = $request->subcategory;
//        $topic->title = $request->title;
//        $topic->description = $request->description;
//        $topic->html = '$request->html';
//        $topic->css = '$request->css';
//        $topic->jquery = '$request->jquery';
//        $topic->model = '$request->model';
//        $topic->controller = '$request->controller';
//        $topic->app = '$request->app';
//        $topic->config = '$request->config';
//        $topic->migrations = '$request->migrations';
//        $topic->factories = '$request->factories';
//        $topic->seed = '$request->seed';
//        $topic->backend_extra = '$request->extra';
//        $topic->raw_sql = '$request->raw';
//        $topic->eloquent = '$request->eloquent';
//        $topic->query_builder = '$request->query';
//        $topic->view_status = 0;

//        foreach ($request->step_title as $s_title)
//        {
//            $steps = new StepTopic;
//            $steps->title = $s_title
//        }

//        $details = [
//            'subcategory' => $request->subcategory,
//            'title' => $request->title,
//            'description' => $request->description,
//            'html' => $request->html,
//            'css' => $request->css,
//            'jquery' => $request->jquery,
//            'laravel' => $request->backend,
//            'raw_sql' => $request->raw,
//            'eloquent' => $request->eloquent,
//            'query' => $request->query,
//        ];
//        $step_titles = $request->step_titles;
//        $step_description = $request->step_description;
//        $step_codes = $request->step_code;
//
//        $image_titles = $request->image_title;
//        $image_description = $request->image_description;
//        $imgs = [];
//        if($request->has('images'))
//        {
//            foreach($request->file('images') as $image)
//            {
//                array_push($imgs, $image->getClientOriginalName());
//            }
//        }
//
//        $link_titles = $request->link_title;
//        $link_description = $request->link_description;
//        $url_links = $request->url_link;
//
//
//
//        return response()->json(['data' =>
//            [
//                0 => $details,
//                1 => $step_titles,
//                2 => $step_description,
//                3 => $step_codes,
//                4 => $image_titles,
//                5 => $image_description,
//                6 => $imgs,
//                7 => $link_titles,
//                8 => $link_description,
//                9 => $url_links,
//            ]
//        ]);
    }

    public function checkValue($value)
    {
        if (!empty($value) && $value) {
            return $value;
        }
        return 'N/A';
    }

    public function checkFile($file)
    {

    }
}
