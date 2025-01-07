<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApiAssessmentController extends Controller
{
    public function hello() 
    {
        return response()->json([
            "message" => "Hello, World!"
        ]);
        
    }
}
