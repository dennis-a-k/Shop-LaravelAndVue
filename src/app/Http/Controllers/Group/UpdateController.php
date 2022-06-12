<?php

namespace App\Http\Controllers\Group;

use App\Http\Controllers\Controller;
use App\Http\Requests\Group\Request;
use App\Models\Group;

class UpdateController extends Controller
{
    public function __invoke(Request $request, Group $group)
    {
        $data = $request->validated();
        $group->update($data);
        $groups = $group->all();

        return view('group.index', compact('groups'));
    }
}
