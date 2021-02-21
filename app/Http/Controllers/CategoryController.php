<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Http\Resources\CategoryResource;
use App\Http\Resources\CategoryResourceCollection;

class CategoryController extends Controller
{
    public function show(Category $category)
    {
        return new CategoryResource($category);
    }

    public function index()
    {
        //return new CategoryResourceCollection(resource:Category::paginate());
        $cats = Category::paginate();
        return (new CategoryResourceCollection($cats))->response();
    }

    public function store(Request $request)
    {
        $request->validate([
            'parentId'    =>'required',
            'categoryName'=>'required',
            'isActive'    =>'required',
            'icon'        =>'required',
        ]);

        $category = Category::create($request->all());
        return new CategoryResource($category);
    }

    public function update(Category $category, Request $request):CategoryResource
    {
        $request->except('id');
        $request->except('parentId');
        $category->update($request->all());
        return new CategoryResource($category);
    }

    public function destroy(Category $category){

        $category->delete();
        return response()->json();
    }
}
