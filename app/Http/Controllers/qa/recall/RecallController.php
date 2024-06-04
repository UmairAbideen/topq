<?php

namespace App\Http\Controllers\qa\recall;

use App\Models\Recall;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RecallController extends Controller
{
    public function recallview()
    {
        $recall = Recall::get();
        return view('qa.recall.information.view', ['recalls' => $recall]);
    }

    public function recallform()
    {
        return view('qa.recall.information.add');
    }

    public function recallcreate(Request $request)
    {
        $request->validate([

        ]);

        Recall::create([

            'reporter_name' => $request->reporter_name,
            'organization' => $request->organization,
            'address' => $request->address,
            'contact' => $request->contact,
            'email' => $request->email,
            'receipt_date' => $request->receipt_date,

            'product_name' => $request->product_name,
            'registration_no' => $request->registration_no,
            'batch' => $request->batch,
            'serial' => $request->serial,
            'expiry' => $request->expiry,
            'manufacturing_date' => $request->manufacturing_date,

            'qty_before' => $request->qty_before,
            'qty_distributed' => $request->qty_distributed,

            'customer_name1' => $request->customer_name1,
            'distribution_date1' => $request->distribution_date1,

            'customer_name2' => $request->customer_name2,
            'distribution_date2' => $request->distribution_date2,

            'customer_name3' => $request->customer_name3,
            'distribution_date3' => $request->distribution_date3,

            'source' => $request->source,
            'problem_detail' => $request->problem_detail,
            'no_of_complaint' => $request->no_of_complaint,
            'action_taken' => $request->action_taken,
            'risk_assessment' => $request->risk_assessment,
            'recall_type' => $request->recall_type,

            'created_at' => now(),
        ]);

        return back()->with('status', 'Recall Form has been created.');
    }

    public function recallreview($id)
    {
        $reacall = Recall::find($id);
        $reacall->reviewed_by = 'Muhammad Umair';
        $reacall->review_date = date('Y-m-d');
        $reacall->save();
        return back()->with('status', 'Recall Form is sent to Director for approval.');
    }

    public function recallapprove($id)
    {
        $recall = Recall::find($id);
        $recall->approved_by = 'Khalid Mahmood';
        $recall->approval_date = date('Y-m-d');
        $recall->save();
        return back()->with('status', 'Recall Form has been approved.');
    }

    public function recalledit($id)
    {
        $recall = Recall::find($id);
        return view('qa.recall.update', ['recall' => $recall]);
    }

    public function recallupdate(Request $request, $id)
    {
        $request->validate([

        ]);

        $recall = Recall::where('id', $id)->first();

        $recall->reporter_name = $request->reporter_name;
        $recall->organization = $request->organization;
        $recall->address = $request->address;
        $recall->contact = $request->contact;
        $recall->email = $request->email;
        $recall->receipt_date = $request->receipt_date;

        $recall->product_name = $request->product_name;
        $recall->registration_no = $request->registration_no;
        $recall->batch = $request->batch;
        $recall->serial = $request->serial;
        $recall->expiry = $request->expiry;
        $recall->manufacturing_date = $request->manufacturing_date;

        $recall->qty_before = $request->qty_before;
        $recall->qty_distributed = $request->qty_distributed;

        $recall->customer_name1 = $request->customer_name1;
        $recall->distribution_date1 = $request->distribution_date1;

        $recall->customer_name2 = $request->customer_name2;
        $recall->distribution_date2 = $request->distribution_date2;

        $recall->customer_name3 = $request->customer_name3;
        $recall->distribution_date3 = $request->distribution_date3;

        $recall->source = $request->source;
        $recall->problem_detail = $request->problem_detail;
        $recall->no_of_complaint = $request->no_of_complaint;
        $recall->action_taken = $request->action_taken;
        $recall->risk_assessment = $request->risk_assessment;
        $recall->recall_type = $request->recall_type;

        $recall->updated_at->now();
        $recall->save();

        return back()->with('status', 'Recall Form has been updated.');
    }

    public function recalldelete($id)
    {
        $recall = Recall::find($id);
        $recall->delete();
        return back()->with('status', 'Recall Form has been Deleted Successfully.');
    }

}
