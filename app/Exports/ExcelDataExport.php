<?php

namespace App\Exports;

use App\ExcelData;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class ExcelDataExport implements FromCollection, WithHeadings
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        if (Auth::user()->role_id == 1) {
            return ExcelData::select(
                'financial_year',
                'employee_id',
                'fyy',
                'ue_no',
                'employee_name',
                'business',
                'unit',
                'grade',
                'band',
                'staff_type',
                'position',
                'department',
                'kaizen_target',
                'kaizen_actual',
                'idea_target',
                'idea_actual',
                'sga_target',
                'sga_actual',
                'lss_target',
                'lss_actual',
                'opl_target',
                'opl_actual',
                'savings_in_lakhs1',
                'savings_in_lakhs2',
                'tei_target',
                'tei_actual',
                'tqm_target',
                'tqm_actual',
                'qc_tools_certified',
                'green_belt_certified',
                'black_belt_certified',
                'be_assessor_certified',
                'tqm_certified',
                's_assessor_certified',
                'no_of5s_audits_target',
                'no_of5s_audits_actual',
                's_external_assessment_score_target',
                's_external_assessment_score_actual'
            )->get();
        }
        return ExcelData::where('user_id', Auth::id())->select(
            'financial_year',
            'employee_id',
            'fyy',
            'ue_no',
            'employee_name',
            'business',
            'unit',
            'grade',
            'band',
            'staff_type',
            'position',
            'department',
            'kaizen_target',
            'kaizen_actual',
            'idea_target',
            'idea_actual',
            'sga_target',
            'sga_actual',
            'lss_target',
            'lss_actual',
            'opl_target',
            'opl_actual',
            'savings_in_lakhs1',
            'savings_in_lakhs2',
            'tei_target',
            'tei_actual',
            'tqm_target',
            'tqm_actual',
            'qc_tools_certified',
            'green_belt_certified',
            'black_belt_certified',
            'be_assessor_certified',
            'tqm_certified',
            's_assessor_certified',
            'no_of5s_audits_target',
            'no_of5s_audits_actual',
            's_external_assessment_score_target',
            's_external_assessment_score_actual'
        )->get();
    }

    public function headings(): array
    {
        return [
            "Financial Year",
            "Employee ID",
            "FY",
            "UE No.",
            "Employee Name",
            "Business",
            "Unit",
            "Grade",
            "Band",
            "Staff Type",
            "Position",
            "Department",
            "Kaizen Target",
            "Kaizen Actual",
            "Idea Target",
            "Idea Actual",
            "SGA Target",
            "SGA Actual",
            "LSS Target",
            "LSS Actual",
            "OPL Target",
            "OPL Actual",
            "Savings / Employee (in Lakhs) Target1",
            "Savings / Employee (in Lakhs) Target2",
            "TEI Target",
            "TEI Actual (1-Y / 0-/N)",
            "TQM SCORE Target",
            "TQM SCORE Actual",
            "7QC Tools Certified (e Module) (Y / N)",
            "Green belt Certified (Y / N)",
            "Black Belt Certified (Y / N)",
            "BE Assessor Certified (Y / N)",
            "TQM Certified (Y / N)",
            "5S Assessor Certified (Y / N)",
            "No.of 5S Internal Audits Target",
            "No.of 5S Internal Audits Actual",
            "FY5S External Assessment Score Target",
            "5S External Assessment Score Actual",
        ];
    }
}
