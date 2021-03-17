<?php

namespace App\Http\Controllers;

use App\Models\Issue;

class IssueController extends Controller
{
    public function create($project_id)
    {
        return view('issues/create', [
            'project_id' => $project_id
        ]);
    }

    public function store()
    {
        $user = auth()->user();

        $issue = new Issue();
        $issue->name = request('name');
        $issue->description = request('description');
        $issue->user_id = $user->id;
        $issue->save();

        return redirect('/issues');
    }
}
