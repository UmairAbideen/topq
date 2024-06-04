<?php

namespace App\Http\Controllers\manager\feedback;

use App\Models\Feedback;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ManagerFeedbackController extends Controller
{
    public function feedback()
    {
        $feedback = Feedback::get();
        return view('manager.feedback.view', ['feedbacks' => $feedback]);
    }

    public function feedbackform()
    {
        return view('manager.feedback.add');
    }

}
