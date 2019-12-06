<?php

namespace App\Http\Controllers;

use App\Project;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function index()
    {
        // $projects = Project::paginate();
        $projects = Project::latest()->paginate();
        return view('portfolio', compact('projects'));
    }
}
