<?php

namespace App\Http\Controllers\manager\risk;

use App\Models\Risk;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Notifications\RiskNotification;

class ManagerRiskController extends Controller
{
    public function risk()
    {
        $risk = Risk::get();
        return view('manager.risk.view', ['risks' => $risk]);
    }

    public function riskform()
    {
        return view('manager.risk.add');
    }

    public function create(Request $request)
    {
        $request->validate([

            // 'complaint_no' => 'required',
        ]);

        Risk::create([
            'qre_no' => $request->qre_no,
            'receipt_date' => $request->receipt_date,
            'department' => $request->department,

            'area' => $request->area,
            'description' => $request->description,
            'existing_controls' => $request->existing_controls,
            'coordinator' => $request->coordinator,

            'severity_before' => $request->severity_before,
            'probablity_before' => $request->probablity_before,
            'detectability_before' => $request->detectability_before,
            'rpn_before' => $request->rpn_before,
            'criticality_before' => $request->criticality_before,

            'action1' => $request->action1,
            'responsibility1' => $request->responsibility1,
            'completion_date1' => $request->completion_date1,

            'action2' => $request->action2,
            'responsibility2' => $request->responsibility2,
            'completion_date2' => $request->completion_date2,

            'action3' => $request->action3,
            'responsibility3' => $request->responsibility3,
            'completion_date3' => $request->completion_date3,

            'action4' => $request->action4,
            'responsibility4' => $request->responsibility4,
            'completion_date4' => $request->completion_date4,

            'action5' => $request->action5,
            'responsibility5' => $request->responsibility5,
            'completion_date5' => $request->completion_date5,

            'severity_after' => $request->severity_after,
            'probablity_after' => $request->probablity_after,
            'detectability_after' => $request->detectability_after,
            'rpn_after' => $request->rpn_after,
            'criticality_after' => $request->criticality_after,

            'closing_date' => $request->closing_date,
            'created_at' => now(),
        ]);

        // $risk = Risk::latest('id')->first();
        // auth()->user()->notify(new RiskNotification($risk));
        return back()->with('status', 'Risk Assessment has been created and sent for Manager Approval.');
    }

    public function riskverify($id)
    {
        $risk = Risk::find($id);
        $risk->verified_by = 'Akhter Safi';
        $risk->save();
        return back()->with('status', 'Risk Assessment is sent for QA Approval.');
    }
    public function edit($id)
    {
        $risk = Risk::find($id);
        return view('manager.risk.update', ['risk' => $risk]);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            // 'qre_no' => 'required',

        ]);

        $risk = Risk::where('id', $id)->first();

        $risk->qre_no = $request->qre_no;
        $risk->receipt_date = $request->receipt_date;
        $risk->department = $request->department;

        $risk->area = $request->area;
        $risk->description = $request->description;
        $risk->existing_controls = $request->existing_controls;
        $risk->coordinator = $request->coordinator;

        $risk->severity_before = $request->severity_before;
        $risk->probablity_before = $request->probablity_before;
        $risk->detectability_before = $request->detectability_before;
        $risk->rpn_before = $request->rpn_before;
        $risk->criticality_before = $request->criticality_before;

        $risk->action1 = $request->action1;
        $risk->responsibility1 = $request->responsibility1;
        $risk->completion_date1 = $request->completion_date1;

        $risk->action2 = $request->action2;
        $risk->responsibility2 = $request->responsibility2;
        $risk->completion_date2 = $request->completion_date2;

        $risk->action3 = $request->action3;
        $risk->responsibility3 = $request->responsibility3;
        $risk->completion_date3 = $request->completion_date3;

        $risk->action4 = $request->action4;
        $risk->responsibility4 = $request->responsibility4;
        $risk->completion_date4 = $request->completion_date4;

        $risk->action5 = $request->action5;
        $risk->responsibility5 = $request->responsibility5;
        $risk->completion_date5 = $request->completion_date5;

        $risk->severity_after = $request->severity_after;
        $risk->probablity_after = $request->probablity_after;
        $risk->detectability_after = $request->detectability_after;
        $risk->rpn_after = $request->rpn_after;
        $risk->criticality_after = $request->criticality_after;

        $risk->closing_date = $request->closing_date;

        $risk->updated_at->now();
        $risk->save();

        return back()->with('status', 'Risk Assessment Details Updated Successfully.');
    }

}
