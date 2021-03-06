<?php

namespace App\Exports;

use App\ExcelData;
use App\Services\ExcelDataService;
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
        return (new ExcelDataService([
            'date_of_data',
            'month_of_data',
            'fy_of_data',
            'employee_id',
            'ue_no',
            'employee_name',
            'grade',
            'band',
            'directindirect',
            'bu',
            'sbu',
            'sbu_type',
            'location',
            'category',
            'cost_center',
            'function',
            'section',
            'designation',
            'excel_data.status',
            'gender',
            'qualification_group',
            'highest_qualification',
            'age',
            'age_band',
            'date_of_birth',
            'date_of_joining',
            'date_of_leaving',
            'experience_in_coromandel',
            'total_experience',
            'date_of_transfer',
            'retirement_year',
            'tenure_band',
            'kaizen_target',
            'kaizen_actual',
            'idea_target',
            'idea_actual',
            'implemented_idea_actual',
            'sga_target',
            'sga_actual',
            'lss_target',
            'lss_actual',
            'opl_target',
            'opl_actual',
            'savings_employee_in_lakhs_target',
            'savings_employee_in_lakhs_actual',
            'tei_target',
            'tei_actual_1_y_0_n',
            'tqm_score_target',
            'tqm_score_actual',
            'qc_tools_certified_e_module_y_n',
            'green_belt_certified_y_n',
            'black_belt_certified_y_n',
            'be_assessor_certified_y_n',
            'tqm_certified_y_n',
            's_assessor_certified_y_n',
            'noof_5s_internal_audits_target',
            'noof_5s_internal_audits_actual',
            's_external_assessment_score_target',
            's_external_assessment_score_actual',
            'tqm_process_rr_nos',
            'internal_tqm_events_rr_nos',
            'amount_rewarded_rs',
            'pom_rr',
            'quest_rr',
            'qcfi_rr',
            'abkaots_rr',
            'cii_rr',
            'inssan_rr',
            'other_external_rr',
            'ssp_max_award',
            'be_award',
            's_plant_award',
            'users.name',
            'excel_data.created_at',
            'excel_data.created_at'
        ]))->all()->get();
    }

    public function headings(): array
    {
        return [
            "Date of Data",
            "Month of Data",
            "FY of Data",
            "Employee ID",
            "UE No.",
            "Employee Name",
            "Grade",
            "Band",
            "Direct/Indirect",
            "BU",
            "SBU",
            "SBU - Type",
            "Location",
            "Category",
            "Cost Center",
            "Function",
            "Section",
            "Designation",
            "Status",
            "Gender",
            "Qualification Group",
            "Highest Qualification",
            "Age",
            "Age Band",
            "Date of Birth",
            "Date of joining",
            "Date of leaving",
            "Experience in coromandel",
            "Total Experience",
            "Date of Transfer",
            "Retirement year",
            "Tenure Band",
            "Kaizen Target",
            "Kaizen Actual",
            "Idea Target",
            "Idea Actual",
            "Implemented Idea Actual",
            "SGA Target",
            "SGA Actual",
            "LSS Target",
            "LSS Actual",
            "OPL Target",
            "OPL Actual",
            "Savings/Employee (in Lakhs) Target",
            "Savings/ Employee (in Lakhs) Actual",
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
            "5S External Assessment Score Target",
            "5S External Assessment Score Actual",
            "TQM Process R&R Nos",
            "Internal TQM Events R&R nos",
            "Amount Rewarded Rs",
            "POM R&R",
            "Quest R&R",
            "QCFI R&R",
            "ABKAOTS R&R",
            "CII R&R",
            "INSSAN R&R",
            "Other External R&R",
            "SSP Max Award",
            "BE Award",
            "5S Plant Award",
            'Employee Name',
            'Date',
            'Time',
        ];
    }
}
