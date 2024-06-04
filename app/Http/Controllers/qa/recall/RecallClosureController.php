<?php

namespace App\Http\Controllers\qa\recall;

use App\Http\Controllers\Controller;
use App\Models\RecallClosure;
use Illuminate\Http\Request;

class RecallClosureController extends Controller
{
    public function closureview()
    {
        $closure = RecallClosure::get();
        return view('qa.recall.closure.view', ['closures' => $closure]);
    }

    public function closureform()
    {
        return view('qa.recall.closure.add');
    }

    public function closurecreate(Request $request)
    {
        $request->validate([

        ]);

        RecallClosure::create([

            'product' => $request->product,
            'recall_no' => $request->recall_no,

            'problem_detail' => $request->problem_detail,
            'batch' => $request->batch,
            'serial' => $request->serial,
            'expiry' => $request->expiry,
            'manufacturing_date' => $request->manufacturing_date,

            'distributed_c' => $request->distributed_c,
            'recovered_c' => $request->recovered_c,
            'recovery_c' => $request->recovery_c,

            'distributed_s' => $request->distributed_s,
            'recovered_s' => $request->recovered_s,
            'recovery_s' => $request->recovery_s,

            'remarks' => $request->remarks,
            'decision' => $request->decision,

            'created_at' => now(),
        ]);

        return back()->with('status', 'Recall Closure Report has been created.');
    }

    public function closurereview($id)
    {
        $closure = RecallClosure::find($id);
        $closure->reviewed_by = 'Muhammad Umair';
        $closure->review_date = date('Y-m-d');
        $closure->save();
        return back()->with('status', 'Recall Closure Report is sent to Director for approval.');
    }

    public function closureapprove($id)
    {
        $closure = RecallClosure::find($id);
        $closure->approved_by = 'Khalid Mahmood';
        $closure->approval_date = date('Y-m-d');
        $closure->save();
        return back()->with('status', 'Recall Closure Report has been approved.');
    }

    public function closureedit($id)
    {
        $closure = RecallClosure::find($id);
        return view('qa.recall.closure.update', ['closure' => $closure]);
    }

    public function closureupdate(Request $request, $id)
    {
        $request->validate([

        ]);

        $closure = RecallClosure::where('id', $id)->first();

        $closure->product = $request->product;
        $closure->recall_no = $request->recall_no;

        $closure->problem_detail = $request->problem_detail;
        $closure->batch = $request->batch;
        $closure->serial = $request->serial;
        $closure->expiry = $request->expiry;
        $closure->manufacturing_date = $request->manufacturing_date;

        $closure->distributed_c = $request->distributed_c;
        $closure->recovered_c = $request->recovered_c;
        $closure->recovery_c = $request->recovery_c;

        $closure->distributed_s = $request->distributed_s;
        $closure->recovered_s = $request->recovered_s;
        $closure->recovery_s = $request->recovery_s;

        $closure->remarks = $request->remarks;
        $closure->decision = $request->decision;

        $closure->updated_at->now();
        $closure->save();

        return back()->with('status', 'Recall Closure Report has been updated.');
    }

    public function closuredelete($id)
    {
        $closure = RecallClosure::find($id);
        $closure->delete();
        return back()->with('status', 'Recall Closure Report has been Deleted Successfully.');
    }
}
