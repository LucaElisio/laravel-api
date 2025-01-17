<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{

    public function index() {
        
        // Prelevo i dati
        $projects = Project::all();
        
        $data = [
            'result' => $projects,
            'success' => true
        ];
        
        return response()->json($data);
    }
}
