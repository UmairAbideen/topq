<?php

namespace App\Http\Controllers\director\risk;

use App\Models\Risk;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Notifications\TheNotification;
use App\Notifications\RiskNotification;

class DirectorRiskController extends Controller
{
    public function risk()
    {
        $risk = Risk::get();
        return view('director.risk.view', ['risks' => $risk]);
    }
    public function riskapprove($id)
    {
        $risk = Risk::find($id);
        $risk->approved_by = 'Khalid Mahmood';
        $risk->save();
        return back()->with('status', 'Risk Assessment has been closed.');
    }
}
