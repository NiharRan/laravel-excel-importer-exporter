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
            'date_of_data' => $row['date_of_data'],
            'month_of_data' => $row['month_of_data'],
            'fy_of_data' => $row['fy_of_data'],
            'employee_id' => $row['employee_id'],
            'ue_no' => $row['ue_no'],
            'employee_name' => $row['employee_name'],
            'grade' => $row['grade'],
            'band' => $row['band'],
            'directindirect' => $row['directindirect'],
            'bu' => $row['bu'],
            'sbu' => $row['sbu'],
            'sbu_type' => $row['sbu_type'],
            'location' => $row['location'],
            'category' => $row['category'],
            'cost_center' => $row['cost_center'],
            'function' => $row['function'],
            'section' => $row['section'],
            'designation' => $row['designation'],
            'status' => $row['status'],
            'gender' => $row['gender'],
            'qualification_group' => $row['qualification_group'],
            'highest_qualification' => $row['highest_qualification'],
            'age' => $row['age'],
            'age_band' => $row['age_band'],
            'date_of_birth' => $row['date_of_birth'],
            'date_of_joining' => $row['date_of_joining'],
            'date_of_leaving' => $row['date_of_leaving'],
            'experience_in_coromandel' => $row['experience_in_coromandel'],
            'total_experience' => $row['total_experience'],
            'date_of_transfer' => $row['date_of_transfer'],
            'retirement_year' => $row['retirement_year'],
            'tenure_band' => $row['tenure_band'],
            'kaizen_target' => $row['kaizen_target'],
            'kaizen_actual' => $row['kaizen_actual'],
            'idea_target' => $row['idea_target'],
            'idea_actual' => $row['idea_actual'],
            'implemented_idea_actual' => $row['implemented_idea_actual'],
            'sga_target' => $row['sga_target'],
            'sga_actual' => $row['sga_actual'],
            'lss_target' => $row['lss_target'],
            'lss_actual' => $row['lss_actual'],
            'opl_target' => $row['opl_target'],
            'opl_actual' => $row['opl_actual'],
            'savings_employee_in_lakhs_target' => $row['savings_employee_in_lakhs_target'],
            'savings_employee_in_lakhs_actual' => $row['savings_employee_in_lakhs_actual'],
            'tei_target' => $row['tei_target'],
            'tei_actual_1_y_0_n' => $row['tei_actual_1_y_0_n'],
            'tqm_score_target' => $row['tqm_score_target'],
            'tqm_score_actual' => $row['tqm_score_actual'],
            'qc_tools_certified_e_module_y_n' => $row['7qc_tools_certified_e_module_y_n'],
            'green_belt_certified_y_n' => $row['green_belt_certified_y_n'],
            'black_belt_certified_y_n' => $row['black_belt_certified_y_n'],
            'be_assessor_certified_y_n' => $row['be_assessor_certified_y_n'],
            's_assessor_certified_y_n' => $row['5s_assessor_certified_y_n'],
            'noof_5s_internal_audits_target' => $row['noof_5s_internal_audits_target'],
            'noof_5s_internal_audits_actual' => $row['noof_5s_internal_audits_actual'],
            's_external_assessment_score_target' => $row['5s_external_assessment_score_target'],
            's_external_assessment_score_actual' => $row['5s_external_assessment_score_actual'],
            'internal_tqm_events_rr_nos' => $row['internal_tqm_events_rr_nos'],
            'amount_rewarded_rs' => $row['amount_rewarded_rs'],
            'pom_rr' => $row['pom_rr'],
            'quest_rr' => $row['quest_rr'],
            'qcfi_rr' => $row['qcfi_rr'],
            'abkaots_rr' => $row['abkaots_rr'],
            'cii_rr' => $row['cii_rr'],
            'inssan_rr' => $row['inssan_rr'],
            'other_external_rr' => $row['other_external_rr'],
            'ssp_max_award' => $row['ssp_max_award'],
            'be_award' => $row['be_award'],
            's_plant_award' => $row['5s_plant_award'],
            'created_at' => date('Y-m-d H:i:s'),
        ]);
    }

    public function headingRow(): int
    {
        return 2;
    }
}
