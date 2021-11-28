<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Subcategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Throwable;

class AdminController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index()
    {
        return view('admin.dashboard');
    }

    public function webTechnologies()
    {
        $technologies = Category::withCount('subcategories')
            ->orderByDesc('subcategories_count')
            ->get();

        return view('admin.web_technologies',compact('technologies'));
    }

    public function getSubcategories(Category $category)
    {
        $subcategories = $category->subcategories;
        return view('admin.web_subcategories',compact('subcategories'));
    }

    public function categories()
    {
        $categories = Category::withCount('subcategories')
            ->orderBy('title')
            ->get();
        return view('admin.category.categories',compact('categories'));
    }
    public function createCategory()
    {
        return view('admin.category.create_category');
    }

    public function storeCategory(Request $request)
    {
        $request->validate([
            'title' => 'required|string|unique:categories|max:255',
        ]);

        try {
            DB::beginTransaction();

            $category = new Category;
            $category->title = ucfirst($request->title);
            $category->save();
            DB::commit();

            return redirect()->back()->with('success', $category->title.' new category is created successfully.');

        } catch (Throwable $ex) {
            DB::rollback();
            dd($ex);
        }
    }

    public function editCategory($id)
    {

    }

    public function updateCategory(Request $request)
    {

    }

    public function subcategories()
    {
        $subcategories = Subcategory::all();
        return view('admin.sub_categories.subcategories',compact('subcategories'));
    }

    public function createSubCategory()
    {
        $categories = Category::orderBy('title')->get();
        return view('admin.sub_categories.create_subcategory',compact('categories'));
    }

    public function storeSubcategory(Request $request)
    {
        $request->validate([
            'title' => 'required|string|unique:subcategories|max:255',
            'category' => 'required',
        ]);

        try {
            DB::beginTransaction();

            $subcategory = new Subcategory;
            $subcategory->title = ucfirst($request->title);
            $subcategory->category_id = $request->category;
            $subcategory->save();
            DB::commit();

            return redirect()->back()->with('success', $subcategory->title.' new subcategory is created successfully.');

        } catch (Throwable $ex) {
            DB::rollback();
            dd($ex);
        }
    }

    public function editSubcategory($id)
    {

    }

    public function updateSubcategory(Request $request)
    {

    }

    public function deleteAllCategories()
    {
        Schema::disableForeignKeyConstraints();
        DB::table('categories')->truncate();
        Schema::enableForeignKeyConstraints();
    }

    public function deleteAllSubcategories()
    {
        Schema::disableForeignKeyConstraints();
        DB::table('subcategories')->truncate();
        Schema::enableForeignKeyConstraints();
    }

}
