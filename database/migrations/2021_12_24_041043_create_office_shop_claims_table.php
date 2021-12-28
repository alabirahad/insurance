<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOfficeShopClaimsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('office_shop_claims', function (Blueprint $table) {
            $table->id();
            $table->string('policy_no')->nullable();
            $table->string('policy_holder_name')->nullable();
            $table->string('insured_name')->nullable();
            $table->string('claimant_name')->nullable();
            $table->string('contact_person_name')->nullable();
            $table->string('contact_person_email')->nullable();
            $table->string('contact_person_mobile')->nullable();
            $table->string('claim_types')->nullable();

            $table->string('accident_date')->nullable();
            $table->string('incident_location')->nullable();
            $table->string('incident_description')->nullable();
            $table->string('claim_q1')->nullable();
            $table->string('laiabilityq1_description')->nullable();
            $table->string('claim_q2')->nullable();
            $table->string('laiabilityq2_description')->nullable();
            $table->string('claim_q3')->nullable();
            $table->string('laiabilityq3_description')->nullable();
            $table->string('claim_q4')->nullable();
            $table->string('claim_q5')->nullable();
            $table->string('laiabilityq5_description')->nullable();

            $table->string('loss_damage_item_description')->nullable();
            $table->string('loss_damage_item_reason_cost')->nullable();
            $table->string('loss_damage_item_purchage_date')->nullable();
            $table->string('loss_damage_item_claim_amount')->nullable();
            $table->string('loss_damage_item_total')->nullable();
            $table->string('loss_damage_total_claimed_amount')->nullable();
            $table->string('loss_damage_uploaded_file')->nullable();

            $table->string('business_interruption_period_from')->nullable();
            $table->string('business_interruption_period_to')->nullable();
            $table->string('business_interruption_description')->nullable();
            $table->string('business_interruption_reason_cost')->nullable();
            $table->string('business_interruption_date')->nullable();
            $table->string('business_interruption_claim_amount')->nullable();
            $table->string('business_interruption_item_total')->nullable();
            $table->string('business_interruption_uploaded_file')->nullable();

            $table->string('loss_money_resons_claim')->nullable();
            $table->string('loss_money_claim_amount')->nullable();
            $table->string('loss_money_uploaded_file')->nullable();

            $table->string('public_liability_owner_name')->nullable();
            $table->string('public_liability_detaile_damage')->nullable();
            $table->string('injured_name')->nullable();
            $table->string('injury_description')->nullable();
            $table->string('laiabilityq1')->nullable();
            $table->string('laiabilityq1_description')->nullable();
            $table->string('laiabilityq2')->nullable();
            $table->string('laiabilityq2_description')->nullable();
            $table->string('laiabilityq3')->nullable();
            $table->string('laiabilityq3_description')->nullable();
            $table->string('injured_file')->nullable();

            $table->string('personal_assault_name')->nullable();
            $table->string('personal_assault_name_claimant')->nullable();
            $table->string('personal_assault_reason')->nullable();
            $table->string('personal_assault_uploaded_file')->nullable();

            $table->string('plate_glass_resons_claim')->nullable();
            $table->string('plate_glass_claim_amount')->nullable();
            $table->string('plate_glass_uploaded_file')->nullable();

            $table->string('employee_compensation_injury_date')->nullable();
            $table->string('employee_compensation_sick_leave_from')->nullable();
            $table->string('employee_compensation_sick_leave_to')->nullable();
            $table->string('employee_compensation_injury_nature')->nullable();
            $table->string('employee_compensation_uploaded_file')->nullable();

            $table->string('resons_claim')->nullable();
            $table->string('claim_amount')->nullable();

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
        Schema::dropIfExists('office_shop_claims');
    }
}
