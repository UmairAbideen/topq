<?php

namespace App\Http\Controllers\qa\pdf;


use App\Models\Risk;
use App\Models\Feedback;
use App\Models\IaReport;
use App\Models\Complaint;
use \App\Models\MrmAgenda;
use App\Models\IaSchedule;
use \App\Models\MrmMinutes;
use \App\Models\MrmAttendance;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\App;
use App\Http\Controllers\Controller;

class PdfController extends Controller
{
    // Complaint
    public function printComplaint($id)
    {
        $row = Complaint::where('id', $id)->get();
        $pdf = Pdf::loadView('qa.complaint.pdf', compact('row'));
        return $pdf->stream('complaint' . time() . '.pdf');
    }

    public function downloadComplaint($id)
    {
        $row = Complaint::where('id', $id)->get();
        $pdf = Pdf::loadView('qa.complaint.pdf', compact('row'));
        return $pdf->download('complaint' . time() . '.pdf');
    }

    // Risk
    public function printRisk($id)
    {
        $row = Risk::where('id', $id)->get();
        $pdf = Pdf::loadView('qa.risk.pdf', compact('row'));
        return $pdf->stream('risk' . time() . '.pdf');
    }

    public function downloadRisk($id)
    {
        $row = Risk::where('id', $id)->get();
        $pdf = Pdf::loadView('qa.risk.pdf', compact('row'));
        return $pdf->download('risk' . time() . '.pdf');
    }

    // Feedback
    public function printFeedback($id)
    {
        $row = Feedback::where('id', $id)->get();
        $pdf = Pdf::loadView('qa.feedback.pdf', compact('row'));
        return $pdf->stream('feedback' . time() . '.pdf');
    }
    public function downloadFeedback($id)
    {
        $row = Feedback::where('id', $id)->get();
        $pdf = Pdf::loadView('qa.feedback.pdf', compact('row'));
        return $pdf->download('feedback' . time() . '.pdf');
    }

    // Agenda
    public function printAgenda($id)
    {
        $row = MrmAgenda::where('id', $id)->get();
        $pdf = Pdf::loadView('qa.mrm.agenda.pdf', compact('row'));
        return $pdf->stream('mrm-agenda' . time() . '.pdf');
    }

    public function downloadAgenda($id)
    {
        $row = MrmAgenda::where('id', $id)->get();
        $pdf = Pdf::loadView('qa.mrm.agenda.pdf', compact('row'));
        return $pdf->download('mrm-agenda' . time() . '.pdf');
    }

    // Minutes
    public function printMinutes($id)
    {
        $row = MrmMinutes::where('id', $id)->get();
        $pdf = Pdf::loadView('qa.mrm.minutes.pdf', compact('row'));
        return $pdf->stream('mrm-minutes' . time() . '.pdf');
    }

    public function downloadMinutes($id)
    {
        $row = MrmMinutes::where('id', $id)->get();
        $pdf = Pdf::loadView('qa.mrm.minutes.pdf', compact('row'));
        return $pdf->download('mrm-minutes' . time() . '.pdf');
    }

    // Attendance
    public function printAttendance($id)
    {
        $row = MrmAttendance::where('id', $id)->get();
        $pdf = Pdf::loadView('qa.mrm.attendance.pdf', compact('row'));
        return $pdf->stream('mrm-attendance' . time() . '.pdf');
    }

    public function downloadAttendance($id)
    {
        $row = MrmAttendance::where('id', $id)->get();
        $pdf = Pdf::loadView('qa.mrm.attendance.pdf', compact('row'));
        return $pdf->download('mrm-attendance' . time() . '.pdf');
    }

    // Internal Audit Schedule
    public function printIaSchedule($id)
    {
        $row = IaSchedule::where('id', $id)->get();
        $pdf = Pdf::loadView('qa.ia.schedule.pdf', compact('row'));
        return $pdf->stream('Internal Audit Schedule' . time() . '.pdf');
    }

    public function downloadIaSchedule($id)
    {
        $row = IaSchedule::where('id', $id)->get();
        $pdf = Pdf::loadView('qa.ia.schedule.pdf', compact('row'));
        return $pdf->download('Internal Audit Schedule' . time() . '.pdf');
    }

    // Internal Audit Report
    public function printIaReport($id)
    {
        $row = IaReport::where('id', $id)->get();
        $pdf = Pdf::loadView('qa.ia.report.pdf', compact('row'));
        return $pdf->stream('Internal Audit Report' . time() . '.pdf');
    }

    public function downloadIaReport($id)
    {
        $row = IaReport::where('id', $id)->get();
        $pdf = Pdf::loadView('qa.ia.report.pdf', compact('row'));
        return $pdf->download('Internal Audit Report' . time() . '.pdf');
    }
}
