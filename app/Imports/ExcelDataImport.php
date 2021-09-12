<?php

namespace App\Imports;

use App\ExcelData;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Concerns\Importable;
use Maatwebsite\Excel\Concerns\SkipsOnError;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Throwable;

class ExcelDataImport implements ToModel, WithHeadingRow, SkipsOnError
{
    use Importable;
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        dd($row);
        return new ExcelData([
            'user_id' => Auth::id(),
            'fy' => $row['Fy'],
            'employee_id' => $row['Employee ID'],
            'fyy' => $row['FY'],
            'ue_no' => $row['UE No.'],
            'employee_name' => $row['Employee Name'],
            'business' => $row['Business'],
            'unit' => $row['Unit'],
            'grade' => $row['Grade'],
            'band' => $row['Band'],
            'staff_type' => $row['Staff Type'],
            'position' => $row['Position'],
            'department' => $row['Department'],
            'kaizen_target' => $row['Kaizen Target'],
            'kaizen_actual' => $row['Kaizen Actual'],
            'idea_target' => $row['Idea Target'],
            'idea_actual' => $row['Idea Actual'],
            'sga_target' => $row['SGA Target'],
            'sga_actual' => $row['SGA Actual'],
            'lss_target' => $row['LSS Target'],
            'lss_actual' => $row['LSS Actual'],
            'opl_target' => $row['OPL Target'],
            'opl_actual' => $row['OPL Actual'],
            'savings_in_lakhs1' => $row['Savings/Employee (in Lakhs) Target'],
            'savings_in_lakhs2' => $row['Savings/Employee (in Lakhs) Target'],
            'tei_target' => $row['TEI Target'],
            'tei_actual' => $row['TEI Actual (1-Y / 0-/N)'],
            'tqm_target' => $row['TQM SCORE Target'],
            'tqm_actual' => $row['TQM SCORE Actual'],
            '7qc_tools_certified' => $row['7QC Tools Certified (e Module) (Y / N)'],
            'green_belt_certified' => $row['Green belt Certified (Y / N)'],
            'black_belt_certified' => $row['Black Belt Certified (Y / N)'],
            'be_assessor_certified' => $row['BE Assessor Certified (Y / N)'],
            'tqm_certified' => $row['TQM Certified (Y / N)'],
            '5s_assessor_certified' => $row['5S Assessor Certified (Y / N)'],
            'no_of5s_audits_target' => $row['No.of 5S Internal Audits Target'],
            'no_of5s_audits_actual' => $row['No.of 5S Internal Audits Actual'],
            '5s_external_assessment_score_target' => $row['5S External Assessment Score Target'],
            '5s_external_assessment_score_actual' => $row['5S External Assessment Score Actual'],
            'created_at' => date('Y-m-d H:i:s'),
        ]);
    }

    public function onError(Throwable $e)
    {
    }
}
