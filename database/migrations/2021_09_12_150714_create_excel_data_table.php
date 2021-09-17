<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExcelDataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('excel_data', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->string("date_of_data", 200)->nullable();
            $table->date("month_of_data", 200)->nullable();
            $table->date("fy_of_data", 200)->nullable();
            $table->string('employee_id', 200)->nullable();
            $table->string('ue_no', 200)->nullable();
            $table->string('employee_name', 200)->nullable();
            $table->string('grade', 200)->nullable();
            $table->string('band', 200)->nullable();
            $table->string('directindirect', 200)->nullable();
            $table->string('bu', 200)->nullable();
            $table->string('sbu', 200)->nullable();
            $table->string('sbu_type', 200)->nullable();
            $table->string('location', 200)->nullable();
            $table->string('category', 200)->nullable();
            $table->string('cost_center', 200)->nullable();
            $table->string('function', 200)->nullable();
            $table->string('section', 200)->nullable();
            $table->string('designation', 200)->nullable();
            $table->string('status', 200)->nullable();
            $table->string('gender', 200)->nullable();
            $table->string('qualification_group', 200)->nullable();
            $table->string('highest_qualification', 200)->nullable();
            $table->string('age', 200)->nullable();
            $table->string('age_band', 200)->nullable();
            $table->string('date_of_birth', 200)->nullable();
            $table->string('date_of_joining', 200)->nullable();
            $table->string('date_of_leaving', 200)->nullable();
            $table->string('experience_in_coromandel', 200)->nullable();
            $table->string('total_experience', 200)->nullable();
            $table->string('date_of_transfer', 200)->nullable();
            $table->string('retirement_year', 200)->nullable();
            $table->string('tenure_band', 200)->nullable();
            $table->string('kaizen_target', 200)->nullable();
            $table->string('kaizen_actual', 200)->nullable();
            $table->string('idea_target', 200)->nullable();
            $table->string('idea_actual', 200)->nullable();
            $table->string('implemented_idea_actual', 200)->nullable();
            $table->string('sga_target', 200)->nullable();
            $table->string('sga_actual', 200)->nullable();
            $table->string('lss_target', 200)->nullable();
            $table->string('lss_actual', 200)->nullable();
            $table->string('opl_target', 200)->nullable();
            $table->string('opl_actual', 200)->nullable();
            $table->string('savings_employee_in_lakhs_target', 200)->nullable();
            $table->string('savings_employee_in_lakhs_actual', 200)->nullable();
            $table->string('tei_target', 200)->nullable();
            $table->string('tei_actual_1_y_0_n', 200)->nullable();
            $table->string('tqm_score_target', 200)->nullable();
            $table->string('tqm_score_actual', 200)->nullable();
            $table->string('qc_tools_certified_e_module_y_n', 200)->nullable();
            $table->string('green_belt_certified_y_n', 200)->nullable();
            $table->string('black_belt_certified_y_n', 200)->nullable();
            $table->string('be_assessor_certified_y_n', 200)->nullable();
            $table->string('tqm_certified_y_n', 200)->nullable();
            $table->string('s_assessor_certified_y_n', 200)->nullable();
            $table->string('noof_5s_internal_audits_target', 200)->nullable();
            $table->string('noof_5s_internal_audits_actual', 200)->nullable();
            $table->string('s_external_assessment_score_target', 200)->nullable();
            $table->string('s_external_assessment_score_actual', 200)->nullable();
            $table->string('tqm_process_rr_nos', 200)->nullable();
            $table->string('internal_tqm_events_rr_nos', 200)->nullable();
            $table->string('amount_rewarded_rs', 200)->nullable();
            $table->string('pom_rr', 200)->nullable();
            $table->string('quest_rr', 200)->nullable();
            $table->string('qcfi_rr', 200)->nullable();
            $table->string('abkaots_rr', 200)->nullable();
            $table->string('cii_rr', 200)->nullable();
            $table->string('inssan_rr', 200)->nullable();
            $table->string('other_external_rr', 200)->nullable();
            $table->string('ssp_max_award', 200)->nullable();
            $table->string('be_award', 200)->nullable();
            $table->string('s_plant_award', 200)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('excel_data');
    }
}
