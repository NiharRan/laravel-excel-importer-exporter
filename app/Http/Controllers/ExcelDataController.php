<?php

namespace App\Http\Controllers;

use App\ExcelData;
use App\Exports\ExcelDataExport;
use App\Imports\ExcelDataImport;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Facades\Excel;

class ExcelDataController extends Controller
{
    public function index()
    {
        $title = 'Data';
        $sub_title = 'Search data here';
        if (Auth::user()->role_id == 1) {
            $records = ExcelData::with('creator')->orderBy('created_at', 'DESC')->paginate(100);
        } else {
            $records = ExcelData::where('user_id', Auth::user()->role_id)->orderBy('created_at', 'DESC')->paginate(100);
        }
        return view('pages.excel-data.index', compact('records', 'title', 'sub_title'));
    }

    public function inport(Request $request)
    {
        if (!$request->hasFile('data')) {
            return response()->json(null);
        }

        $data = (new ExcelDataImport)->import($request->file('data')->getRealPath(), null, \Maatwebsite\Excel\Excel::XLSX);
        return response()->json($data);
    }


    public function export()
    {
        return Excel::download(new ExcelDataExport, 'excel-data.xlsx');
    }
}
