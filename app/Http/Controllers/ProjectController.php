<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index() {
        $projects = Project::all();
        
        return view('projects.index', compact('projects'));
    }

    public function create() {
        return view('projects.create');
    }
}
