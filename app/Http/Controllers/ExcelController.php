<?php

namespace App\Http\Controllers;

use App\Imports\ExcelImport;
use App\Imports\FamilySheetImport;
use App\Imports\TreetaxaSheetImport;
use App\Imports\FloraSheetImport;
use App\Imports\HerbariumSheetImport;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Http\Request;

use Flash;

// operasi impor/ekspor data excel

class ExcelController extends Controller
{
    public function import(Request $request)
    {
        return view('backend.import');
    }

    public function export(Request $request)
    {
        return view('public.excel.export');
    }

    public function upload(Request $request)
    {
        if ($request->hasFile('excel')) {
            Excel::import(new HerbariumSheetImport, $request->file('excel'));

            Flash::success('Excel imported successfully');

            return redirect(route('home'));
        }
    }

    public function download(Request $request)
    {

    }
}
