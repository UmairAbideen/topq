<?php

namespace App\Http\Controllers\officer\feedback;

use App\Models\Feedback;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class OfficerFeedbackController extends Controller
{
    public function feedbackform()
    {
        return view('officer.feedback.add');
    }
}
