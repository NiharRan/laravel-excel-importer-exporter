<?php

namespace App\Imports;

use App\ExcelData;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Concerns\Importable;
use Maatwebsite\Excel\Concerns\SkipsOnError;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Throwable;

class ExcelDataImport implements ToModel, WithHeadingRow
{
    use Importable;
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {

        return new ExcelData([
            'user_id' => Auth::id(),
            'financial_year' => $row['financial_year'],
            'employee_id' => $row['employee_id'],
            'fyy' => $row['fy'],
            'ue_no' => $row['ue_no'],
            'employee_name' => $row['employee_name'],
            'business' => $row['business'],
            'unit' => $row['unit'],
            'grade' => $row['grade'],
            'band' => $row['band'],
            'staff_type' => $row['staff_type'],
            'position' => $row['position'],
            'department' => $row['department'],
            'kaizen_target' => $row['kaizen_target'],
            'kaizen_actual' => $row['kaizen_actual'],
            'idea_target' => $row['idea_target'],
            'idea_actual' => $row['idea_actual'],
            'sga_target' => $row['sga_target'],
            'sga_actual' => $row['sga_actual'],
            'lss_target' => $row['lss_target'],
            'lss_actual' => $row['lss_actual'],
            'opl_target' => $row['opl_target'],
            'opl_actual' => $row['opl_actual'],
            'savings_in_lakhs1' => $row['savings_employee_in_lakhs_target1'],
            'savings_in_lakhs2' => $row['savings_employee_in_lakhs_target2'],
            'tei_target' => $row['tei_target'],
            'tei_actual' => $row['tei_actual_1_y_0_n'],
            'tqm_target' => $row['tqm_score_target'],
            'tqm_actual' => $row['tqm_score_actual'],
            'qc_tools_certified' => $row['7qc_tools_certified_e_module_y_n'],
            'green_belt_certified' => $row['green_belt_certified_y_n'],
            'black_belt_certified' => $row['black_belt_certified_y_n'],
            'be_assessor_certified' => $row['be_assessor_certified_y_n'],
            'tqm_certified' => $row['tqm_certified_y_n'],
            's_assessor_certified' => $row['5s_assessor_certified_y_n'],
            'no_of5s_audits_target' => $row['noof_5s_internal_audits_target'],
            'no_of5s_audits_actual' => $row['noof_5s_internal_audits_actual'],
            's_external_assessment_score_target' => $row['5s_external_assessment_score_target'],
            's_external_assessment_score_actual' => $row['5s_external_assessment_score_actual'],
            'created_at' => date('Y-m-d H:i:s'),
        ]);
    }

    public function headingRow(): int
    {
        return 2;
    }
}
