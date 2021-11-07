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

        $user = User::find(auth()->user()->id);

        if($user->getUserType() === 'Admin'){

            $categories = Category::orderBy('id', 'ASC')->get();
            return view('category.category', compact('categories'));
        }

        return redirect()->route('courseVisitor');

    }

    public function store(CategoryStoreRequest $request)
    {
        $user = User::find(auth()->user()->id);

        if($user->getUserType() === 'Admin'){

            $data = $request->validated();
            $data['slug'] = Str::slug($data['title'], '-');

            $category = Category::create($data);

            return back();
        }

        return redirect()->route('courseVisitor');
    }

    public function delete($slug)
    {
        $user = User::find(auth()->user()->id);

        if($user->getUserType() === 'Admin'){

            $category = Category::where('slug', '=', $slug)->firstOrFail();

            $category->delete();

            return back();
        }

        return redirect()->route('courseVisitor');
    }

    public function update(CategoryUpdateRequest $request, $slug)
    {
        $user = User::find(auth()->user()->id);

        if($user->getUserType() === 'Admin'){

            $data = $request->validated();

            $data['slug'] = Str::slug($data['title'], '-');

            $category = Category::where('slug', '=', $slug)->firstOrFail();

            $data['id'] = $category->id;

            $category->update($data);

            return redirect()->route('categories');
        }

        return redirect()->route('courseVisitor');
    }
}
