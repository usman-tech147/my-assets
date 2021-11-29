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
        return response()->json(['data' => $request->all()]);
    }
}
