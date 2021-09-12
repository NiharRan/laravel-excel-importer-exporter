<?php

namespace App\Http\Controllers;

use App\Imports\ExcelDataImport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class ExcelDataController extends Controller
{
    public function index()
    {
        return view('pages.excel-data.index');
    }

    public function store(Request $request)
    {
        if (!$request->hasFile('data')) {
            return response()->json(null);
        }

        $data = Excel::load($request->file('data')->getRealPath())->get();
        dd($data);
        return response()->join($data);
    }
}
