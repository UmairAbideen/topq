<?php

namespace App\Http\Controllers\qa\deviation;

use App\Http\Controllers\Controller;
use App\Models\Deviation;
use Illuminate\Http\Request;

class DeviationController extends Controller
{
    public function view()
    {
        $deviation = Deviation::get();
        return view('qa.deviation.view', ['deviations' => $deviation]);
    }

    public function form()
    {
        return view('qa.deviation.add');
    }

    public function create(Request $request)
    {
        $request->validate([

        ]);

        Deviation::create([

            'deviation_date' => $request->deviation_date,
            'deviation_no' => $request->deviation_no,
            'initiator' => $request->initiator,
            'department' => $request->department,
            'designation' => $request->designation,

            'subject' => $request->subject,
            'detail' => $request->detail,
            'status' => $request->status,
            'statement' => $request->statement,
            'action' => $request->action,
            'date' => $request->date,

            'root_cause' => $request->root_cause,
            'categorization' => $request->categorization,

            'name1' => $request->name1,
            'deisgnation1' => $request->deisgnation1,
            'recommendation1' => $request->recommendation1,
            'date1' => $request->date1,

            'name2' => $request->name2,
            'deisgnation2' => $request->deisgnation2,
            'recommendation2' => $request->recommendation2,
            'date2' => $request->date2,

            'name3' => $request->name3,
            'deisgnation3' => $request->deisgnation3,
            'recommendation3' => $request->recommendation3,
            'date3' => $request->date3,

            'device' => $request->device,
            'patient' => $request->patient,
            'other' => $request->other,

            'required_recall' => $request->required_recall,
            'recall_no' => $request->recall_no,
            'required_capa' => $request->required_capa,
            'capa_no' => $request->capa_no,
            'required_ccm' => $request->required_ccm,
            'ccm_no' => $request->ccm_no,

            'capa_task1' => $request->capa_task1,
            'capa_name1' => $request->capa_name1,
            'capa_designation1' => $request->capa_designation1,
            'capa_duedate1' => $request->capa_duedate1,
            'remarks' => $request->remarks,

            'created_at' => now(),
        ]);

        return back()->with('status', 'Deviation form has been created.');
    }

    public function initialreview($id)
    {
        $deviation = Deviation::find($id);
        $deviation->ini_reviewed_by = 'Muhammad Umair';
        $deviation->ini_review_date = date('Y-m-d');
        $deviation->save();
        return back()->with('status', 'Deviation Initial Details is sent to Director for approval.');
    }

    public function initialapprove($id)
    {
        $deviation = Deviation::find($id);
        $deviation->ini_approved_by = 'Khalid Mahmood';
        $deviation->ini_approval_date = date('Y-m-d');
        $deviation->save();
        return back()->with('status', 'Deviation Initial Details has been approved.');
    }

    public function verify($id)
    {
        $verify = Deviation::find($id);
        $verify->verified_by = 'Akhter Safi';
        $verify->verification_date = date('Y-m-d');
        $verify->save();
        return back()->with('status', 'Deviation Form has been verified.');
    }


    public function closingreview($id)
    {
        $deviation = Deviation::find($id);
        $deviation->closing_reviewed_by = 'Muhammad Umair';
        $deviation->closing_review_date = date('Y-m-d');
        $deviation->save();
        return back()->with('status', 'Deviation Form is sent to Director for closure.');
    }

    public function closingapprove($id)
    {
        $deviation = Deviation::find($id);
        $deviation->closing_approved_by = 'Khalid Mahmood';
        $deviation->closing_approval_date = date('Y-m-d');
        $deviation->save();
        return back()->with('status', 'Deviation Form has been closed.');
    }

    public function edit($id)
    {
        $deviation = Deviation::find($id);
        return view('qa.deviation.update', ['deviation' => $deviation]);
    }


    public function update(Request $request, $id)
    {
        $request->validate([

        ]);

        $deviation = Deviation::where('id', $id)->first();

        $deviation->deviation_date = $request->deviation_date;
        $deviation->deviation_no = $request->deviation_no;
        $deviation->initiator = $request->initiator;
        $deviation->department = $request->department;
        $deviation->designation = $request->designation;

        $deviation->subject = $request->subject;
        $deviation->detail = $request->detail;
        $deviation->status = $request->status;
        $deviation->statement = $request->statement;
        $deviation->action = $request->action;
        $deviation->date = $request->date;

        $deviation->root_cause = $request->root_cause;
        $deviation->categorization = $request->categorization;

        $deviation->name1 = $request->name1;
        $deviation->deisgnation1 = $request->deisgnation1;
        $deviation->recommendation1 = $request->recommendation1;
        $deviation->date1 = $request->date1;

        $deviation->name2 = $request->name2;
        $deviation->deisgnation2 = $request->deisgnation2;
        $deviation->recommendation2 = $request->recommendation2;
        $deviation->date2 = $request->date2;

        $deviation->name3 = $request->name3;
        $deviation->deisgnation3 = $request->deisgnation3;
        $deviation->recommendation3 = $request->recommendation3;
        $deviation->date3 = $request->date3;

        $deviation->device = $request->device;
        $deviation->patient = $request->patient;
        $deviation->other = $request->other;

        $deviation->required_recall = $request->required_recall;
        $deviation->recall_no = $request->recall_no;
        $deviation->required_capa = $request->required_capa;
        $deviation->capa_no = $request->capa_no;
        $deviation->required_ccm = $request->required_ccm;
        $deviation->ccm_no = $request->ccm_no;

        $deviation->capa_task1 = $request->capa_task1;
        $deviation->capa_name1 = $request->capa_name1;
        $deviation->capa_designation1 = $request->capa_designation1;
        $deviation->capa_duedate1 = $request->capa_duedate1;
        $deviation->remarks = $request->remarks;

        $deviation->updated_at->now();
        $deviation->save();

        return back()->with('status', 'Deviation Form has been updated.');
    }

    public function delete($id)
    {
        $deviation = Deviation::find($id);
        $deviation->delete();
        return back()->with('status', 'Deviation Form has been Deleted.');
    }
}
