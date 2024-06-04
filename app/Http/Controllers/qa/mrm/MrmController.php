<?php

namespace App\Http\Controllers\qa\mrm;

use App\Models\MrmAgenda;
use App\Models\MrmAttendance;
use App\Models\MrmMinutes;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MrmController extends Controller
{
    // ====================================  Agenda  ====================================
    public function agendaview()
    {
        $agenda = MrmAgenda::get();
        return view('qa.mrm.agenda.view', ['agendas' => $agenda]);
    }

    public function agendaform()
    {
        return view('qa.mrm.agenda.add');
    }

    public function agendacreate(Request $request)
    {
        $request->validate([

            // 'complaint_no' => 'required',
        ]);

        MrmAgenda::create([
            'meeting_no' => $request->meeting_no,
            'meeting_date' => $request->meeting_date,
            'review_period' => $request->review_period,
            'start_time' => $request->start_time,
            'end_time' => $request->end_time,
            'venue' => $request->venue,

            'review_item1' => $request->review_item1,
            'review_item2' => $request->review_item2,
            'review_item3' => $request->review_item3,
            'review_item4' => $request->review_item4,
            'review_item5' => $request->review_item5,

            'review_item6' => $request->review_item6,
            'review_item7' => $request->review_item7,
            'review_item8' => $request->review_item8,
            'review_item9' => $request->review_item9,
            'review_item10' => $request->review_item10,

            'created_at' => now(),
        ]);

        return back()->with('status', 'New Agenda has been Created.');
    }

    public function agendaprepare($id)
    {
        $agenda = MrmAgenda::find($id);
        $agenda->prepared_by = 'Muhammad Umair';
        $agenda->save();
        return back()->with('status', 'Agenda is sent for Approval');

    }
    public function agendaapprove($id)
    {
        $agenda = MrmAgenda::find($id);
        $agenda->approved_by = 'Khalid Mahmood Khan';
        $agenda->save();
        return back()->with('status', 'Agenda has been approved');
    }


    public function agendaedit($id)
    {
        $agenda = MrmAgenda::find($id);
        return view('qa.mrm.agenda.update', ['agenda' => $agenda]);
    }

    public function agendaupdate(Request $request, $id)
    {
        $request->validate([
            // 'qre_no' => 'required',

        ]);

        $agenda = MrmAgenda::where('id', $id)->first();
        $agenda->meeting_no = $request->meeting_no;
        $agenda->meeting_date = $request->meeting_date;
        $agenda->review_period = $request->review_period;
        $agenda->start_time = $request->start_time;
        $agenda->end_time = $request->end_time;
        $agenda->venue = $request->venue;

        $agenda->review_item1 = $request->review_item1;
        $agenda->review_item2 = $request->review_item2;
        $agenda->review_item3 = $request->review_item3;
        $agenda->review_item4 = $request->review_item4;
        $agenda->review_item5 = $request->review_item5;

        $agenda->review_item6 = $request->review_item6;
        $agenda->review_item7 = $request->review_item7;
        $agenda->review_item8 = $request->review_item8;
        $agenda->review_item9 = $request->review_item9;
        $agenda->review_item10 = $request->review_item10;

        $agenda->updated_at->now();
        $agenda->save();

        return back()->with('status', 'Agenda Updated Successfully.');
    }

    public function agendadelete($id)
    {
        $agenda = MrmAgenda::find($id);
        $agenda->delete();
        return back()->with('status', 'Agenda has been removed.');
    }





    // ====================================  Minutes  ====================================

    public function minutesview()
    {
        $minutes = MrmMinutes::get();
        return view('qa.mrm.minutes.view', ['minutes' => $minutes]);
    }

    public function minutesform()
    {
        return view('qa.mrm.minutes.add');
    }

    public function minutescreate(Request $request)
    {
        $request->validate([

            // 'complaint_no' => 'required',
        ]);

        MrmMinutes::create([
            'meeting_no' => $request->meeting_no,

            'decision1' => $request->decision1,
            'action1' => $request->action1,
            'responsible1' => $request->responsible1,
            'completion_date1' => $request->completion_date1,
            'remarks1' => $request->remarks1,

            'decision2' => $request->decision2,
            'action2' => $request->action2,
            'responsible2' => $request->responsible2,
            'completion_date2' => $request->completion_date2,
            'remarks2' => $request->remarks2,

            'decision3' => $request->decision3,
            'action3' => $request->action3,
            'responsible3' => $request->responsible3,
            'completion_date3' => $request->completion_date3,
            'remarks3' => $request->remarks3,

            'decision4' => $request->decision4,
            'action4' => $request->action4,
            'responsible4' => $request->responsible4,
            'completion_date4' => $request->completion_date4,
            'remarks4' => $request->remarks4,

            'decision5' => $request->decision5,
            'action5' => $request->action5,
            'responsible5' => $request->responsible5,
            'completion_date5' => $request->completion_date5,
            'remarks5' => $request->remarks5,

            'decision6' => $request->decision6,
            'action6' => $request->action6,
            'responsible6' => $request->responsible6,
            'completion_date6' => $request->completion_date6,
            'remarks6' => $request->remarks6,

            'decision7' => $request->decision7,
            'action7' => $request->action7,
            'responsible7' => $request->responsible7,
            'completion_date7' => $request->completion_date7,
            'remarks7' => $request->remarks7,

            'decision8' => $request->decision8,
            'action8' => $request->action8,
            'responsible8' => $request->responsible8,
            'completion_date8' => $request->completion_date8,
            'remarks8' => $request->remarks8,

            'decision9' => $request->decision9,
            'action9' => $request->action9,
            'responsible9' => $request->responsible9,
            'completion_date9' => $request->completion_date9,
            'remarks9' => $request->remarks9,

            'decision10' => $request->decision10,
            'action10' => $request->action10,
            'responsible10' => $request->responsible10,
            'completion_date10' => $request->completion_date10,
            'remarks10' => $request->remarks10,

            'prepared_by' => $request->prepared_by,
            'approved_by' => $request->approved_by,
            'created_at' => now(),
        ]);

        return back()->with('status', 'Minutes have been Created.');
    }

    public function minutesprepare($id)
    {
        $minutes = MrmMinutes::find($id);
        $minutes->prepared_by = 'Muhammad Umair';
        $minutes->save();
        return back()->with('status', 'Minutes is sent for Approval');
    }

    public function minutesapprove($id)
    {
        $minutes = MrmMinutes::find($id);
        $minutes->approved_by = 'Khalid Mahmood Khan';
        $minutes->save();
        return back()->with('status', 'Minutes has been approved');
    }

    public function minutesedit($id)
    {
        $minutes = MrmMinutes::find($id);
        return view('qa.mrm.minutes.update', ['minutes' => $minutes]);
    }

    public function minutesupdate(Request $request, $id)
    {
        $request->validate([
            // 'qre_no' => 'required',

        ]);

        $minutes = MrmMinutes::where('id', $id)->first();

        $minutes->meeting_no = $request->meeting_no;

        for ($i = 1; $i <= 10; $i++) {
            $minutes->{"decision$i"} = $request->{"decision$i"};
            $minutes->{"action$i"} = $request->{"action$i"};
            $minutes->{"responsible$i"} = $request->{"responsible$i"};
            $minutes->{"completion_date$i"} = $request->{"completion_date$i"};
            $minutes->{"remarks$i"} = $request->{"remarks$i"};
        }


        $minutes->prepared_by = $request->prepared_by;
        $minutes->approved_by = $request->approved_by;
        $minutes->save();

        return back()->with('status', 'Minutes Updated Successfully.');
    }

    public function minutesdelete($id)
    {
        $minutes = MrmMinutes::find($id);
        $minutes->delete();
        return back()->with('status', 'Minutes have been removed.');
    }




    // ====================================  Attendance  ====================================

    public function attendanceview()
    {
        $attendance = MrmAttendance::get();
        return view('qa.mrm.attendance.view', ['attendance' => $attendance]);
    }

    public function attendanceform()
    {
        return view('qa.mrm.attendance.add');
    }

    public function attendancecreate(Request $request)
    {
        $request->validate([

            // 'complaint_no' => 'required',
        ]);

        MrmAttendance::create([
            'meeting_no' => $request->meeting_no,
            'name1' => $request->name1,
            'department1' => $request->department1,
            'name2' => $request->name2,
            'department2' => $request->department2,
            'name3' => $request->name3,
            'department3' => $request->department3,
            'name4' => $request->name4,
            'department4' => $request->department4,
            'name5' => $request->name5,
            'department5' => $request->department5,
            'name6' => $request->name6,
            'department6' => $request->department6,
            'name7' => $request->name7,
            'department7' => $request->department7,
            'prepared_by' => $request->prepared_by,
            'created_at' => now(),
        ]);

        return back()->with('status', 'Attendance Sheet has been Created.');
    }

    public function attendanceedit($id)
    {
        $attendance = MrmAttendance::find($id);
        return view('qa.mrm.attendance.update', ['attendance' => $attendance]);
    }

    public function attendanceupdate(Request $request, $id)
    {
        $request->validate([
            // 'qre_no' => 'required',

        ]);

        $attendance = MrmAttendance::where('id', $id)->first();

        $attendance->meeting_no = $request->meeting_no;
        $attendance->name1 = $request->name1;

        $attendance->department1 = $request->department1;
        $attendance->name2 = $request->name2;
        $attendance->department2 = $request->department2;
        $attendance->name3 = $request->name3;
        $attendance->department3 = $request->department3;

        $attendance->name4 = $request->name4;
        $attendance->department4 = $request->department4;
        $attendance->name5 = $request->name5;
        $attendance->department5 = $request->department5;
        $attendance->name6 = $request->name6;
        $attendance->department6 = $request->department6;

        $attendance->name7 = $request->name7;
        $attendance->department7 = $request->department7;
        $attendance->prepared_by = $request->prepared_by;
        $attendance->save();

        return back()->with('status', 'Attendance Updated Successfully.');
    }

    public function attendancedelete($id)
    {
        $attendance = MrmAttendance::find($id);
        $attendance->delete();
        return back()->with('status', 'Attendance has been removed.');
    }

}
