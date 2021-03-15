<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\TryCatch;

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

        // try {
            $projects = Project::where('user_id', $user->id)->get();
            return view('projects/projects', [
                'projects' => $projects,
                'has_projects' => true
            ]);
        // }
        // catch(QueryException $e) {
        //     return view('projects/projects', [
        //         'has_projects' => false
        //     ]);
        // }
    }
}
