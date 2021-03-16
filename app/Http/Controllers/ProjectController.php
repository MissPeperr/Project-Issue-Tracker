<?php

namespace App\Http\Controllers;

use App\Models\Issue;
use App\Models\IssueStatus;
use App\Models\Project;
use Database\Factories\StatusFactory;

class ProjectController extends Controller
{
    public function __construct()
    {
        // This is ensuring a user must be logged in to access anything in ProjectController
        $this->middleware('auth');
    }

    public function index()
    {
        $user = auth()->user();

        $projects = Project::where('user_id', $user->id)->get();
        return view('projects/projects', [
            'projects' => $projects
        ]);
    }

    public function show($project_id)
    {
        $project = Project::find($project_id)->firstOrFail();

        $issues = Issue::where('project_id', $project_id)->get();

        $statuses = IssueStatus::all();

        return view('projects/project', [
            'project' => $project,
            'statuses' => $statuses,
            'issues' => $issues
        ]);
    }
}
