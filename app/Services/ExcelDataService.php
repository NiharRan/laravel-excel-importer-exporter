<?php

namespace App\Services;

use App\ExcelData;
use Illuminate\Support\Facades\Auth;

class ExcelDataService
{
    private $selectable_fields = [];
    public function __construct($selectable_fields = [])
    {
        $this->selectable_fields = $selectable_fields;
    }
    public function all()
    {
        $search_date = date('Y-m-d');
        if (request()->has('date')) {
            $search_date = date('Y-m-d', strtotime(request()->date));
        }
        if (Auth::user()->role_id == 1) {
            $records = ExcelData::with('creator')
                ->whereBetween(
                    'created_at',
                    [
                        $search_date . ' 00:00:00',
                        $search_date . ' 23:59:59'
                    ]
                )->orderBy('created_at', 'DESC');
        } else {
            $records = ExcelData::where('user_id', Auth::user()->role_id)
                ->whereBetween(
                    'created_at',
                    [
                        $search_date . ' 00:00:00',
                        $search_date . ' 23:59:59'
                    ]
                )->orderBy('created_at', 'DESC');
        }

        if (count($this->selectable_fields) > 0) {
            $records = $records->select($this->selectable_fields);
        }

        return $records;
    }
}
