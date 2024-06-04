<?php

namespace App\Http\Controllers\qa\documents;

use App\Models\QaSOP;
use App\Models\Policy;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;

class DocumentController extends Controller
{
    // =========================== Policy ========================================
    public function policyview()
    {
        $policy = Policy::get();
        return view('qa.documents.policy.view', ['policies' => $policy]);
    }

    public function policyform()
    {
        return view('qa.documents.policy.add');
    }

    public function policycreate(Request $request)

    {
        $request->validate([
            'doc_no' => 'required|string|max:255',
            'doc_name' => 'required|string|max:255',
            'eff_date' => 'required|date',
            'revision_no' => 'required|string',
            'pdf_file' => 'required|file|mimes:pdf|max:5000',
        ]);

        $file = $request->file('pdf_file');
        $path = '/assets/pdf/policy/';
        $file->move(public_path($path), $request->doc_name);
        $filePath = $path . $request->doc_name;


        Policy::create([

            'doc_no' => $request->doc_no,
            'doc_name' => $request->doc_name,
            'eff_date' => $request->eff_date,
            'revision_no' => $request->revision_no,
            'pdf_file' => $filePath,

            'created_at' => now(),
        ]);

        return back()->with('status', 'New Document has been Uploaded.');
    }

    public function policyedit($id)
    {
        $policy = Policy::find($id);
        return view('qa.documents.policy.update', ['policy' => $policy]);
    }

    public function policyupdate(Request $request, $id)
    {
        $request->validate([
            'doc_no' => 'required|string|max:255',
            'doc_name' => 'required|string|max:255',
            'eff_date' => 'required|date',
            'revision_no' => 'required|string|max:255',
            'pdf_file' => 'nullable|file|mimes:pdf|max:5000',
        ]);

        $policy = Policy::findOrFail($id);

        if ($request->hasFile('pdf_file')) {
            if (File::exists(public_path($policy->pdf_file))) {
                File::delete(public_path($policy->pdf_file));
            }

            $file = $request->file('pdf_file');
            $filename = $request->doc_name;
            $path = 'assets/pdf/policy/';
            $file->move(public_path($path), $filename);
            $filePath = $path . $filename;

            $policy->pdf_file = $filePath;
        } else {
            // If no new file is uploaded, check if the document name has changed
            if ($policy->doc_name !== $request->doc_name) {
                // Determine the old and new file paths
                $oldFilePath = public_path($policy->pdf_file);
                $newFileName = $request->doc_name;
                $newFilePath = 'assets/pdf/policy/' . $newFileName;

                // Rename the existing file if it exists
                if (File::exists($oldFilePath)) {
                    File::move($oldFilePath, public_path($newFilePath));
                    // Update the file path in the database
                    $policy->pdf_file = $newFilePath;
                }
            }
        }

        $policy->update([
            'doc_no' => $request->doc_no,
            'doc_name' => $request->doc_name,
            'eff_date' => $request->eff_date,
            'revision_no' => $request->revision_no,
        ]);

        return back()->with('status', 'Policy updated successfully.');
    }

    public function policydelete($id)
    {
        $policy = Policy::findOrFail($id);

        // Delete the associated PDF file if it exists
        if (File::exists(public_path($policy->pdf_file))) {
            File::delete(public_path($policy->pdf_file));
        }

        $policy->delete();
        return back()->with('status', 'Policy document has been removed.');
    }






    public function sopview()
    {
        $sops = QaSOP::all();
        return view('qa.documents.sop.view', ['sops' => $sops]);
    }

    public function sopform()
    {
        return view('qa.documents.sop.add');
    }

    public function sopcreate(Request $request)
    {
        $request->validate([
            'doc_no' => 'required|string|max:255',
            'doc_name' => 'required|string|max:255',
            'eff_date' => 'required|date',
            'revision_no' => 'required|string|max:255',
            'pdf_file' => 'required|file|mimes:pdf|max:5000',
        ]);

        $file = $request->file('pdf_file');
        $filename = $request->doc_name . '.' . $file->getClientOriginalExtension();
        $path = '/assets/pdf/sop/qa/';
        $file->move(public_path($path), $filename);
        $filePath = $path . $filename;

        QaSOP::create([
            'doc_no' => $request->doc_no,
            'doc_name' => $request->doc_name,
            'eff_date' => $request->eff_date,
            'revision_no' => $request->revision_no,
            'pdf_file' => $filePath,
            'created_at' => now(),
        ]);

        return back()->with('status', 'New SOP has been uploaded.');
    }

    public function sopedit($id)
    {
        $sop = QaSOP::find($id);
        return view('qa.documents.sop.update', ['sop' => $sop]);
    }

    public function sopupdate(Request $request, $id)
    {
        $request->validate([
            'doc_no' => 'required|string|max:255',
            'doc_name' => 'required|string|max:255',
            'eff_date' => 'required|date',
            'revision_no' => 'required|string|max:255',
            'pdf_file' => 'nullable|file|mimes:pdf|max:5000',
        ]);

        $sop = QaSOP::findOrFail($id);

        if ($request->hasFile('pdf_file')) {
            if (File::exists(public_path($sop->pdf_file))) {
                File::delete(public_path($sop->pdf_file));
            }

            $file = $request->file('pdf_file');
            $filename = $request->doc_name;
            $path = 'assets/pdf/sop/qa/';
            $file->move(public_path($path), $filename);
            $filePath = $path . $filename;

            $sop->pdf_file = $filePath;
        } else {
            // If no new file is uploaded, check if the document name has changed
            if ($sop->doc_name !== $request->doc_name) {
                // Determine the old and new file paths
                $oldFilePath = public_path($sop->pdf_file);
                $newFileName = $request->doc_name;
                $newFilePath = 'assets/pdf/sop/qa/' . $newFileName;

                // Rename the existing file if it exists
                if (File::exists($oldFilePath)) {
                    File::move($oldFilePath, public_path($newFilePath));
                    // Update the file path in the database
                    $sop->pdf_file = $newFilePath;
                }
            }
        }

        $sop->update([
            'doc_no' => $request->doc_no,
            'doc_name' => $request->doc_name,
            'eff_date' => $request->eff_date,
            'revision_no' => $request->revision_no,
        ]);

        return back()->with('status', 'SOP updated successfully.');
    }

    public function sopdelete($id)
    {
        $sop = QaSOP::findOrFail($id);

        // Delete the associated PDF file if it exists
        if (File::exists(public_path($sop->pdf_file))) {
            File::delete(public_path($sop->pdf_file));
        }

        $sop->delete();
        return back()->with('status', 'SOP document has been removed.');
    }
}
