<?php

namespace App\Http\Controllers\Group;

use App\Http\Controllers\Controller;
use App\Http\Requests\Group\Request;
use App\Models\Group;

class StoreController extends Controller
{
    public function __invoke(Request $request)
    {
        $data = $request->validated();
        Group::firstOrCreate($data);

        return redirect()->route('group.index');
    }
}
