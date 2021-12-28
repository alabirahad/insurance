<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeeClaimsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employee_claims', function (Blueprint $table) {
            $table->id();
            $table->string('policy_no')->nullable();
            $table->string('policy_holder_name')->nullable();
            $table->string('insured_name')->nullable();
            $table->string('claimant_name')->nullable();
            $table->string('contact_person_name')->nullable();
            $table->string('contact_person_email')->nullable();
            $table->string('contact_person_mobile')->nullable();
            $table->string('claimant_person_injured')->nullable();
            $table->string('claimant_person_injured_description')->nullable();
            $table->string('claim_types')->nullable();

            $table->string('employee_compensation_injury_date')->nullable();
            $table->string('employee_compensation_incident_description')->nullable();
            $table->string('employee_compensation_sick_leave_from')->nullable();
            $table->string('employee_compensation_sick_leave_to')->nullable();
            $table->string('employee_compensation_injury_nature')->nullable();
            $table->string('employee_compensation_uploaded_file')->nullable();

            $table->string('personal_accident_injury_date')->nullable();
            $table->string('personal_accident_incident_description')->nullable();
            $table->string('personal_accident_sick_leave_from')->nullable();
            $table->string('personal_accident_sick_leave_to')->nullable();
            $table->string('personal_accident_injury_nature')->nullable();
            $table->string('personal_accident_recoverd')->nullable();
            $table->string('personal_accident_uploaded_file')->nullable();

            $table->string('repatriation_injury_date')->nullable();
            $table->string('repatriation_incident_description')->nullable();
            $table->string('repatriation_reason')->nullable();
            $table->string('repatriation_recoverd')->nullable();
            $table->string('repatriation_uploaded_file')->nullable();

            $table->string('clinical_expense_injury_date')->nullable();
            $table->string('clinical_expense_diagnosis')->nullable();
            $table->string('clinical_expense_total_expense')->nullable();
            $table->string('clinical_expense_uploaded_file')->nullable();

            $table->string('surgical_injury_date')->nullable();
            $table->string('surgical_incident_description')->nullable();
            $table->string('surgical_incident_diagnosis')->nullable();
            $table->string('surgical_incident_total_expense')->nullable();
            $table->string('surgical_incident_uploaded_file')->nullable();

            $table->string('dental_expense_date')->nullable();
            $table->string('dental_expense_diagnosis')->nullable();
            $table->string('dental_expense_total_expense')->nullable();
            $table->string('dental_expense_uploaded_file')->nullable();

            $table->string('cash_allowance_injury_date')->nullable();
            $table->string('cash_allowance_diagnosis')->nullable();
            $table->string('cash_allowance_period_from')->nullable();
            $table->string('cash_allowance_period_to')->nullable();
            $table->string('cash_allowance_uploaded_file')->nullable();

            $table->string('replacement_reason')->nullable();
            $table->string('replacement_total_expense')->nullable();
            $table->string('replacement_uploaded_file')->nullable();

            $table->string('agree')->nullable();
            $table->string('applicant_name')->nullable();
            $table->string('submission_date')->nullable();

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
        Schema::dropIfExists('employee_claims');
    }
}
