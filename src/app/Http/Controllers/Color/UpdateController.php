<?php

namespace App\Http\Controllers\Color;

use App\Http\Controllers\Controller;
use App\Http\Requests\Color\Request;
use App\Models\Color;

class UpdateController extends Controller
{
    public function __invoke(Request $request, Color $color)
    {
        $data = $request->validated();
        $color->update($data);
        $colors = $color->all();

        return view('color.index', compact('colors'));
    }
}
