<?php

namespace App\Http\Controllers\director\mrm;

use App\Models\MrmAgenda;
use App\Models\MrmMinutes;
use Illuminate\Http\Request;
use App\Models\MrmAttendance;
use App\Http\Controllers\Controller;

class DirectorMrmController extends Controller
{
    // ====================================  Agenda  ====================================
    public function agendaview()
    {
        $agenda = MrmAgenda::get();
        return view('director.mrm.agenda.view', ['agendas' => $agenda]);
    }

    public function agendaapprove($id)
    {
        $agenda = MrmAgenda::find($id);
        $agenda->approved_by = 'Khalid Mahmood Khan';
        $agenda->save();
        return back()->with('status', 'Agenda has been approved');
    }




    // ====================================  Minutes  ====================================

    public function minutesview()
    {
        $minutes = MrmMinutes::get();
        return view('director.mrm.minutes.view', ['minutes' => $minutes]);
    }

    public function minutesapprove($id)
    {
        $minutes = MrmMinutes::find($id);
        $minutes->approved_by = 'Khalid Mahmood Khan';
        $minutes->save();
        return back()->with('status', 'Minutes has been approved');
    }




    // ====================================  Attendance  ====================================

    public function attendanceview()
    {
        $attendance = MrmAttendance::get();
        return view('director.mrm.attendance.view', ['attendance' => $attendance]);
    }
}
