<?php

namespace App\Http\Controllers\qa\excel;

use App\Models\ExportExcel;
use App\Models\ImportExcel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Maatwebsite\Excel\Facades\Excel;

class ExcelController extends Controller
{
    public function import(Request $request)
    {
        $request->validate([
            'excel_file'=>'required|mimes:xlsx'
        ]);
        Excel::import(new ImportExcel,  $request->excel_file);
        return back()->with('status','Excel Sheet successfully imported.');
    }

    public function export()
    {
        return Excel::download(new ExportExcel, 'users-excel.xlsx');
    }
}
