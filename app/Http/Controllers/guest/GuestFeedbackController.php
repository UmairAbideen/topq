<?php

namespace App\Http\Controllers\guest;

use App\Models\Feedback;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class GuestFeedbackController extends Controller
{
    public function feedbackform()
    {
        return view('guest.feedback.add');
    }

    public function create(Request $request)
    {
        $request->validate([

            'name' => 'required',
            'designation' => 'required',
            'organization' => 'required',
            'email' => 'required|email',
        ]);

        Feedback::create([
            'name' => $request->name,
            'designation' => $request->designation,
            'organization' => $request->organization,
            'email' => $request->email,

            'productquality_ins' => $request->insp,
            'economicalsolution_ins' => $request->inse,
            'overallservices_ins' => $request->inso,
            'responsetocomplaints_ins' => $request->insr,
            'remarks_ins' => $request->remarksins,

            'productquality_iol' => $request->iolp,
            'economicalsolution_iol' => $request->iole,
            'overallservices_iol' => $request->iolo,
            'responsetocomplaints_iol' => $request->iolr,
            'remarks_iol' => $request->remarksiol,

            'productquality_de' => $request->dep,
            'economicalsolution_de' => $request->dee,
            'overallservices_de' => $request->deo,
            'responsetocomplaints_de' => $request->der,
            'remarks_de' => $request->remarksde,

            'created_at' => now(),
        ]);

        return back()->with('status', 'Thank you for the Valuable Feedback.');
    }
}
