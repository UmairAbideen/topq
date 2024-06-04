<?php

namespace App\Http\Controllers\manager\complaint;

use App\Models\Complaint;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Notifications\ComplaintNotification;

class ManagerComplaintController extends Controller
{

    public function complaint()
    {
        $complaint = Complaint::get();
        return view('manager.complaint.view', ['complaints' => $complaint]);
    }

    public function complaintform()
    {
        return view('manager.complaint.add');
    }
    public function create(Request $request)
    {
        $request->validate([
            'complaint_no' => 'required',
            'receipt_date' => 'required',
            'customer_name' => 'required',
            'detail' => 'required',
            'category' => 'required',
            'product_name' => 'required',
            'batch' => 'required',
            'serial' => 'required',
            'expiry' => 'required',
            'quantity' => 'required|numeric',
            'capa_init' => 'required',
            'capa_no' => 'required',
            'status' => 'required',
            'associate_name' => 'required',
            'associate_email' => 'required|email',
        ]);

        Complaint::create([
            'complaint_no' => $request->complaint_no,
            'receipt_date' => $request->receipt_date,
            'customer' => $request->customer_name,
            'detail' => $request->detail,
            'category' => $request->category,
            'product' => $request->product_name,
            'batch' => $request->batch,
            'serial' => $request->serial,
            'expiry' => $request->expiry,
            'quantity' => $request->quantity,
            'capa_init' => $request->capa_init,
            'capa_no' => $request->capa_no,
            'capa_status' => $request->status,
            'associate_name' => $request->associate_name,
            'associate_email' => $request->associate_email,
            'created_at' => now(),
        ]);

        // $complaint = Complaint::latest('id')->first();
        // auth()->user()->notify(new ComplaintNotification($complaint));
        return back()->with('status', 'Complaint has been submitted.');
    }

    // public function markasread($id)
    // {
    //     if ($id) {
    //         auth()->user()->unreadnotifications->where('id', $id)->markAsRead();
    //     }
    //     return back();
    // }

}
