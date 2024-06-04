<?php

namespace App\Http\Controllers\qa\ia;

use App\Models\IaReport;
use App\Models\IaSchedule;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class InternalAuditController extends Controller
{

    // =================== Internl Audit Schedule ===================

    public function scheduleview()
    {
        $schedule = IaSchedule::get();
        return view('qa.ia.schedule.view', ['schedules' => $schedule]);
    }

    public function scheduleform()
    {
        return view('qa.ia.schedule.add');
    }

    public function schedulecreate(Request $request)
    {
        $request->validate([

            // 'complaint_no' => 'required',
        ]);

        IaSchedule::create([

            'internal_auditor1' => $request->internal_auditor1,
            'internal_auditor2' => $request->internal_auditor2,
            'doc_date' => $request->doc_date,

            'department1' => $request->department1,
            'date_dep1' => $request->date_dep1,
            'time1' => $request->time1,
            'area1' => $request->area1,
            'auditee1a' => $request->auditee1a,
            'auditee1b' => $request->auditee1b,
            'auditee1c' => $request->auditee1c,

            'department2' => $request->department2,
            'date_dep2' => $request->date_dep2,
            'time2' => $request->time2,
            'area2' => $request->area2,
            'auditee2a' => $request->auditee2a,
            'auditee2b' => $request->auditee2b,
            'auditee2c' => $request->auditee2c,

            'department3' => $request->department3,
            'date_dep3' => $request->date_dep3,
            'time3' => $request->time3,
            'area3' => $request->area3,
            'auditee3a' => $request->auditee3a,
            'auditee3b' => $request->auditee3b,
            'auditee3c' => $request->auditee3c,

            'prepared_by' => $request->prepared_by,
            'approved_by' => $request->approved_by,
            'created_at' => now(),
        ]);

        return back()->with('status', 'New Internal Audit Schedule has been Created.');
    }

    public function scheduleprepare($id)
    {
        $schedule = IaSchedule::find($id);
        $schedule->prepared_by = 'Muhammad Umair';
        $schedule->save();
        return back()->with('status', 'Internal Audit Schedule is sent for Approval');

    }
    public function scheduleapprove($id)
    {
        $schedule = IaSchedule::find($id);
        $schedule->approved_by = 'Khalid Mahmood Khan';
        $schedule->save();
        return back()->with('status', 'Internal Audit Schedule has been approved');
    }

    public function scheduleedit($id)
    {
        $schedule = IaSchedule::find($id);
        return view('qa.ia.schedule.update', ['schedule' => $schedule]);
    }

    public function scheduleupdate(Request $request, $id)
    {
        $request->validate([

        ]);

        $schedule = IaSchedule::where('id', $id)->first();

        $schedule->internal_auditor1 = $request->internal_auditor1;
        $schedule->internal_auditor2 = $request->internal_auditor2;
        $schedule->doc_date = $request->doc_date;

        $schedule->department1 = $request->department1;
        $schedule->date_dep1 = $request->date_dep1;
        $schedule->time1 = $request->time1;
        $schedule->area1 = $request->area1;
        $schedule->auditee1a = $request->auditee1a;
        $schedule->auditee1b = $request->auditee1b;
        $schedule->auditee1c = $request->auditee1c;

        $schedule->department2 = $request->department2;
        $schedule->date_dep2 = $request->date_dep2;
        $schedule->time2 = $request->time2;
        $schedule->area2 = $request->area2;
        $schedule->auditee2a = $request->auditee2a;
        $schedule->auditee2b = $request->auditee2b;
        $schedule->auditee2c = $request->auditee2c;

        $schedule->department3 = $request->department3;
        $schedule->date_dep3 = $request->date_dep3;
        $schedule->time3 = $request->time3;
        $schedule->area3 = $request->area3;
        $schedule->auditee3a = $request->auditee3a;
        $schedule->auditee3b = $request->auditee3b;
        $schedule->auditee3c = $request->auditee3c;

        $schedule->updated_at->now();
        $schedule->save();

        return back()->with('status', 'Internal Audit Schedule has been Updated.');
    }

    public function scheduledelete($id)
    {
        $schedule = IaSchedule::find($id);
        $schedule->delete();
        return back()->with('status', 'Internal Audit Schedule has been removed.');
    }

    // =================== Internl Audit Report ===================

    public function reportview()
    {
        $report = IaReport::get();
        return view('qa.ia.report.view', ['reports' => $report]);
    }

    public function reportform()
    {
        return view('qa.ia.report.add');
    }

    public function reportcreate(Request $request)
    {
        $request->validate([

        ]);

        IaReport::create([

            'report_no'=> $request->report_no,
            'doc_date'=> $request->doc_date,

            'internal_auditor1'=> $request->internal_auditor1,
            'internal_auditor2'=> $request->internal_auditor2,

            'department1'=> $request->department1,
            'date_dep1'=> $request->date_dep1,
            'area1'=> $request->area1,
            'scope1'=> $request->scope1,

            'department2'=> $request->department2,
            'date_dep2'=> $request->date_dep2,
            'area2'=> $request->area2,
            'scope2'=> $request->scope2,

            'department3'=> $request->department3,
            'date_dep3'=> $request->date_dep3,
            'area3'=> $request->area3,
            'scope3'=> $request->scope3,

            'summary'=> $request->summary,
            'deviation_no'=> $request->deviation_no,

            'prepared_by'=> $request->prepared_by,
            'preparation_date'=> $request->preparation_date,
            'approved_by'=> $request->approved_by,
            'approval_date'=> $request->approval_date,

            'created_at' => now(),
        ]);

        return back()->with('status', 'New Internal Audit Report has been Created.');
    }

    public function reportprepare($id)
    {
        $report = IaReport::find($id);
        $report->prepared_by = 'Muhammad Umair';
        $report->preparation_date = date('Y-m-d');
        $report->save();
        return back()->with('status', 'Internal Audit Report is sent for Approval');

    }
    public function reportapprove($id)
    {
        $report = IaReport::find($id);
        $report->approved_by = 'Khalid Mahmood Khan';
        $report->approval_date = date('d-m-Y');
        $report->save();
        return back()->with('status', 'Internal Audit Report has been approved');
    }

    public function reportedit($id)
    {
        $report = IaReport::find($id);
        return view('qa.ia.report.update', ['report' => $report]);
    }

    public function reportupdate(Request $request, $id)
    {
        $request->validate([

        ]);

        $report = IaReport::where('id', $id)->first();

        $report->report_no = $request->report_no;
        $report->doc_date = $request->doc_date;

        $report->internal_auditor1 = $request->internal_auditor1;
        $report->internal_auditor2 = $request->internal_auditor2;

        $report->department1 = $request->department1;
        $report->date_dep1 = $request->date_dep1;
        $report->area1 = $request->area1;
        $report->scope1 = $request->scope1;

        $report->department2 = $request->department2;
        $report->date_dep2 = $request->date_dep2;
        $report->area2 = $request->area2;
        $report->scope2 = $request->scope2;

        $report->department3 = $request->department3;
        $report->date_dep3 = $request->date_dep3;
        $report->area3 = $request->area3;
        $report->scope3 = $request->scope3;

        $report->summary = $request->summary;
        $report->deviation_no = $request->deviation_no;

        $report->prepared_by = $request->prepared_by;
        $report->preparation_date = $request->preparation_date;
        $report->approved_by = $request->approved_by;
        $report->approval_date = $request->approval_date;

        $report->updated_at->now();
        $report->save();

        return back()->with('status', 'Internal Audit Report has been Updated.');
    }

    public function reportdelete($id)
    {
        $report = IaReport::find($id);
        $report->delete();
        return back()->with('status', 'Internal Audit Report has been removed.');
    }
}
