<?php

namespace App\Http\Controllers;

use App\Models\User;
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
        // $user_id = auth()->user()->id;

        // $user = User::find($user_id);

        $user = User::find(auth()->user()->id);

        if($user->getUserType() === 'Admin'){

            $categories = Category::orderBy('id', 'ASC')->get();
            return view('category.category', compact('categories'));
        }

        return redirect()->route('courseVisitor');

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
        $category = Category::where('slug', '=', $slug)->firstOrFail();

        $category->delete();

        return back();
    }

    public function update(CategoryUpdateRequest $request, $slug)
    {
        $data = $request->validated();

        $data['slug'] = Str::slug($data['title'], '-');

        $category = Category::where('slug', '=', $slug)->firstOrFail();

        $data['id'] = $category->id;

        // dd($data);

        $category->update($data);

        return redirect()->route('categories');
    }
}
