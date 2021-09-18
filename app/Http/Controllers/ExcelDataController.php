<?php

namespace App\Http\Controllers;

use App\Exports\ExcelDataExport;
use App\Imports\ExcelDataImport;
use App\Services\ExcelDataService;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class ExcelDataController extends Controller
{
    public function index()
    {
        $title = 'Data';
        $sub_title = 'Search data here';

        $records = (new ExcelDataService)->all()->paginate(100);
        $records->withQueryString();
        return view('pages.excel-data.index', compact('records', 'title', 'sub_title'));
    }

    public function inport(Request $request)
    {
        if (!$request->hasFile('data')) {
            return response()->json(null);
        }

        $data = (new ExcelDataImport)->import($request->file('data')->getRealPath(), null, \Maatwebsite\Excel\Excel::CSV);
        return response()->json($data);
    }


    public function export()
    {
        return Excel::download(new ExcelDataExport, 'excel-data.xlsx');
    }
}
