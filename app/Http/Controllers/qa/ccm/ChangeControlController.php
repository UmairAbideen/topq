<?php

namespace App\Http\Controllers\qa\ccm;

use App\Models\CCM;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ChangeControlController extends Controller
{
    public function changeview()
    {
        $change = CCM::get();
        return view('qa.ccm.view', ['changes' => $change]);
    }

    public function changeform()
    {
        return view('qa.ccm.add');
    }

    public function changecreate(Request $request)
    {
        $request->validate([

        ]);

        CCM::create([

            'request_no' => $request->request_no,
            'logging_date' => $request->logging_date,
            'initiator' => $request->initiator,
            'department' => $request->department,
            'description' => $request->description,
            'justification' => $request->justification,
            'area' => $request->area,
            'impact' => $request->impact,

            'action1' => $request->action1,
            'action2' => $request->action2,
            'action3' => $request->action3,
            'priority' => $request->piority,
            'required_date' => $request->required_date,

            'effected_doc1' => $request->effected_doc1,
            'doc_no1' => $request->doc_no1,
            'effected_doc2' => $request->effected_doc2,
            'doc_no2' => $request->doc_no2,
            'effected_doc3' => $request->effected_doc3,
            'doc_no3' => $request->doc_no3,

            // 'initiated_by' => $request->initiated_by,
            // 'initiation_date' => $request->initiation_date,
            // 'verified_by' => $request->verified_by,
            // 'verification_date' => $request->verification_date,

            'classification' => $request->classification,
            'member_name1' => $request->member_name1,
            'designation1' => $request->designation1,
            'recommendation1' => $request->recommendation1,
            'sign1' => $request->sign1,

            'member_name2' => $request->member_name2,
            'designation2' => $request->designation2,
            'recommendation2' => $request->recommendation2,
            'sign2' => $request->sign2,

            'member_name3' => $request->member_name3,
            'designation3' => $request->designation3,
            'recommendation3' => $request->recommendation3,
            'sign3' => $request->sign3,

            // 'reviewed_by' => $request->reviewed_by,
            // 'review_date' => $request->review_date,
            // 'approved_by' => $request->approved_by,
            // 'approval_date' => $request->approval_date,

            'task1' => $request->task1,
            'responsible1' => $request->responsible1,
            'completion_date1' => $request->completion_date1,

            'task2' => $request->task2,
            'responsible2' => $request->responsible2,
            'completion_date2' => $request->completion_date2,

            'task3' => $request->task3,
            'responsible3' => $request->responsible3,
            'completion_date3' => $request->completion_date3,

            'summary' => $request->summary,
            'implementation_date' => $request->implementation_date,
            'final_assessment' => $request->final_assessment,
            'monitoring' => $request->monitoring,
            'change_closing_date' => $request->change_closing_date,

            // 'closed_by' => $request->closed_by,
            // 'closing_date' => $request->closing_date,

            'created_at' => now(),
        ]);

        return back()->with('status', 'Change Request Form has been closed.');
    }

    public function changeinitiate($id)
    {
        $change = CCM::find($id);
        $change->initiated_by = 'Shehryar Ahmed';
        $change->initiation_date = date('Y-m-d');
        $change->save();
        return back()->with('status', 'Change Request is sent to your manager for verification.');
    }

    public function changeverify($id)
    {
        $change = CCM::find($id);
        $change->verified_by = 'Akhter Safi';
        $change->verification_date = date('Y-m-d');
        $change->save();
        return back()->with('status', 'Change Request is sent to QA for review.');
    }

    public function changereview($id)
    {
        $change = CCM::find($id);
        $change->reviewed_by = 'Muhammad Umair';
        $change->review_date = date('Y-m-d');
        $change->save();
        return back()->with('status', 'Change Request is sent to Director for approval.');
    }

    public function changeapprove($id)
    {
        $change = CCM::find($id);
        $change->approved_by = 'Khalid Mahmood';
        $change->approval_date = date('Y-m-d');
        $change->save();
        return back()->with('status', 'Change Request has been approved.');
    }

    public function changeclose($id)
    {
        $change = CCM::find($id);
        $change->closed_by = 'Khalid Mahmood';
        $change->signing_date = date('Y-m-d');
        $change->save();
        return back()->with('status', 'Change Request has been closed.');
    }

    public function changeedit($id)
    {
        $change = CCM::find($id);
        return view('qa.ccm.update', ['change' => $change]);
    }

    public function changeupdate(Request $request, $id)
    {
        $request->validate([

        ]);

        $change = CCM::where('id', $id)->first();

        $change->request_no = $request->request_no;
        $change->logging_date = $request->logging_date;
        $change->initiator = $request->initiator;
        $change->department = $request->department;
        $change->description = $request->description;
        $change->justification = $request->justification;
        $change->area = $request->area;
        $change->impact = $request->impact;

        $change->action1 = $request->action1;
        $change->action2 = $request->action2;
        $change->action3 = $request->action3;
        $change->priority = $request->piority;
        $change->required_date = $request->required_date;

        $change->effected_doc1 = $request->effected_doc1;
        $change->doc_no1 = $request->doc_no1;
        $change->effected_doc2 = $request->effected_doc2;
        $change->doc_no2 = $request->doc_no2;
        $change->effected_doc3 = $request->effected_doc3;
        $change->doc_no3 = $request->doc_no3;

        $change->classification = $request->classification;
        $change->member_name1 = $request->member_name1;
        $change->designation1 = $request->designation1;
        $change->recommendation1 = $request->recommendation1;
        $change->sign1 = $request->sign1;

        $change->member_name2 = $request->member_name2;
        $change->designation2 = $request->designation2;
        $change->recommendation2 = $request->recommendation2;
        $change->sign2 = $request->sign2;

        $change->member_name3 = $request->member_name3;
        $change->designation3 = $request->designation3;
        $change->recommendation3 = $request->recommendation3;
        $change->sign3 = $request->sign3;

        $change->task1 = $request->task1;
        $change->responsible1 = $request->responsible1;
        $change->completion_date1 = $request->completion_date1;

        $change->task2 = $request->task2;
        $change->responsible2 = $request->responsible2;
        $change->completion_date2 = $request->completion_date2;

        $change->task3 = $request->task3;
        $change->responsible3 = $request->responsible3;
        $change->completion_date3 = $request->completion_date3;

        $change->summary = $request->summary;
        $change->implementation_date = $request->implementation_date;
        $change->final_assessment = $request->final_assessment;
        $change->monitoring = $request->monitoring;
        $change->change_closing_date = $request->change_closing_date;

        $change->updated_at->now();
        $change->save();

        return back()->with('status', 'Change Request Details has been updated.');
    }

    public function changedelete($id)
    {
        $change = CCM::find($id);
        $change->delete();
        return back()->with('status', 'Change Request has been Deleted Successfully.');
    }

}
