<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Category;
use App\Http\Requests\CategoryStoreRequest;
use App\Http\Requests\CategoryUpdateRequest;

use Illuminate\Support\Str;

class CategoryController extends Controller
{
    //

    public function create()
    {
        $categories = Category::orderBy('id', 'ASC')->get();
        return view('category.category', compact('categories'));
    }

    public function store(CategoryStoreRequest $request)
    {
        $data = $request->validated();
        $data['slug'] = Str::slug($data['title'], '-');

        $category = Category::create($data);

        return back();
    }

    public function delete($slug)
    {
        // $category = Category::where('slug', '=', $slug)->get();
        $category = Category::where('slug', '=', $slug)->firstOrFail();

        // $category = Category::all()->where('slug', '=', $slug)->get();
        // $category = Category::all()->get($slug);
        // $category = Category::find('slug');
        // $category = Category::find($slug);

        // dd($category);

        $category->delete();

        return back();
    }

    public function update(CategoryUpdateRequest $request, $id)
    {
        $data = $request->validated();

        //
        $category = Category::find($id);

        //
        $category->update($data);

        return back();
    }
}
