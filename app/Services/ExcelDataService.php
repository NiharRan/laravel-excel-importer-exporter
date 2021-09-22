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
        $records = ExcelData::join('users', 'users.id', '=', 'excel_data.user_id')
            ->whereBetween(
                'excel_data.created_at',
                [
                    $search_date . ' 00:00:00',
                    $search_date . ' 23:59:59'
                ]
            )->orderBy('excel_data.created_at', 'DESC');
        if (Auth::user()->role_id != 1) {
            $records = $records->where('user_id', Auth::user()->id);
        }

        if (count($this->selectable_fields) > 0) {
            $records = $records->select($this->selectable_fields);
        }

        return $records;
    }
}
