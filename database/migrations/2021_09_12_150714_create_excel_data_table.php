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
            $table->string('fy')->nullable();
            $table->string('employee_id');
            $table->string('fyy')->nullable();
            $table->string('ue_no')->nullable();
            $table->string('employee_name');
            $table->string('business')->nullable();
            $table->string('unit')->nullable();
            $table->string('grade')->nullable();
            $table->string('band')->nullable();
            $table->string('staff_type')->nullable();
            $table->string('position')->nullable();
            $table->string('department')->nullable();
            $table->string('kaizen_target')->nullable();
            $table->string('kaizen_actual')->nullable();
            $table->string('idea_target')->nullable();
            $table->string('idea_actual')->nullable();
            $table->string('sga_target')->nullable();
            $table->string('sga_actual')->nullable();
            $table->string('lss_target')->nullable();
            $table->string('lss_actual')->nullable();
            $table->string('opl_target')->nullable();
            $table->string('opl_actual')->nullable();
            $table->string('savings_in_lakhs1')->nullable();
            $table->string('savings_in_lakhs2')->nullable();
            $table->string('tei_target')->nullable();
            $table->string('tei_actual')->nullable();
            $table->string('tqm_target')->nullable();
            $table->string('tqm_actual')->nullable();
            $table->string('7qc_tools_certified')->nullable();
            $table->string('green_belt_certified')->nullable();
            $table->string('black_belt_certified')->nullable();
            $table->string('be_assessor_certified')->nullable();
            $table->string('tqm_certified')->nullable();
            $table->string('5s_assessor_certified')->nullable();
            $table->string('no_of5s_audits_target')->nullable();
            $table->string('no_of5s_audits_actual')->nullable();
            $table->string('5s_external_assessment_score_target')->nullable();
            $table->string('5s_external_assessment_score_actual')->nullable();
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
