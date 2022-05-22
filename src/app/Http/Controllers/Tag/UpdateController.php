<?php

namespace App\Http\Controllers\Tag;

use App\Http\Controllers\Controller;
use App\Http\Requests\Tag\Request;
use App\Models\Tag;

class UpdateController extends Controller
{
    public function __invoke(Request $request, Tag $tag)
    {
        $data = $request->validated();
        $tag->update($data);
        $tags = $tag->all();

        return view('tag.index', compact('tags'));
    }
}
