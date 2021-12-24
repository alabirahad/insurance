<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHomeClaimsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('home_claims', function (Blueprint $table) {
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
            $table->string('claim_q2')->nullable();
            $table->string('claim_q3')->nullable();
            $table->string('claim_q4')->nullable();
            $table->string('claim_q5')->nullable();
            $table->string('claim_q6')->nullable();
            $table->string('claim_q7')->nullable();
            $table->string('claim_q8')->nullable();

            $table->string('loss_damage_property_description')->nullable();
            $table->string('loss_damage_purchage_date')->nullable();
            $table->string('loss_damage_purchage_price')->nullable();
            $table->string('loss_damage_repair_cost')->nullable();
            $table->string('loss_damage_claim_amount')->nullable();
            $table->string('loss_damage_total')->nullable();
            $table->string('loss_damage_uploaded_file')->nullable();

            $table->string('property_owner_name')->nullable();
            $table->string('damage_property_description')->nullable();
            $table->string('injured_name')->nullable();
            $table->string('injury_description')->nullable();
            $table->string('laiabilityq1')->nullable();
            $table->string('laiabilityq2')->nullable();
            $table->string('laiabilityq3')->nullable();
            $table->string('laiability_state_contact')->nullable();
            $table->string('laiability_injured_file')->nullable();

            $table->string('others_resons_claim')->nullable();
            $table->string('others_claim_amount')->nullable();
            $table->string('others_file')->nullable();

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
        Schema::dropIfExists('home_claims');
    }
}
