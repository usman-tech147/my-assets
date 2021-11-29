<?php

namespace App\Http\Controllers;

use App\Models\Subcategory;
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
        return view('admin.topics.topics',compact('subcategory'));
    }
    public function createTopic(Subcategory $subcategory)
    {
        return view('admin.topics.create_topic',compact('subcategory'));
    }

    public function storeTopic(Request $request)
    {
        $details = [
            'subcategory' => $request->subcategory,
            'title' => $request->title,
            'description' => $request->description,
            'html' => $request->html,
            'css' => $request->css,
            'jquery' => $request->jquery,
            'laravel' => $request->backend,
            'raw_sql' => $request->raw,
            'eloquent' => $request->eloquent,
            'query' => $request->query,
        ];
        $step_titles = $request->step_titles;
        $step_description = $request->step_description;
        $step_codes = $request->step_code;

        $image_titles = $request->image_title;
        $image_description = $request->image_description;
        $imgs = [];
        if($request->has('images'))
        {
            foreach($request->file('images') as $image)
            {
                array_push($imgs, $image->getClientOriginalName());
            }
        }

        $link_titles = $request->link_title;
        $link_description = $request->link_description;
        $url_links = $request->url_link;



        return response()->json(['data' =>
            [
                0 => $details,
                1 => $step_titles,
                2 => $step_description,
                3 => $step_codes,
                4 => $image_titles,
                5 => $image_description,
                6 => $imgs,
                7 => $link_titles,
                8 => $link_description,
                9 => $url_links,
            ]
        ]);
    }
}
