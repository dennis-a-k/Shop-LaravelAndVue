<?php

namespace App\Http\Controllers\Category;

use App\Http\Controllers\Controller;
use App\Http\Requests\Category\Request;
use App\Models\Category;

class UpdateController extends Controller
{
    public function __invoke(Request $request, Category $category)
    {
        $data = $request->validated();
        $category->update($data);
        $categories = $category->all();

        return view('category.index', compact('categories'));
    }
}
