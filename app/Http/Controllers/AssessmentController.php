<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AssessmentController extends Controller
{
    public function formhandlingQuestionBasic() 
    {
        return view('form-handling-question.basic');
    }

    public function formhandlingQuestionIntermediate() 
    {
        return view('form-handling-question.intermediate');
    }

    public function formhandlingQuestionAdvanced() 
    {
        return view('form-handling-question.advanced');
    }

    public function formhandlingQuestionAdvancedPageTwo() 
    {
        return view('form-handling-question.advanced_pagetwo');
    }
}
