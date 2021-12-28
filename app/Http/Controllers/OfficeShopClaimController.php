<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\OfficeShopClaim;
use File;
use Illuminate\Http\Request;
use Response;
use Session;
use Validator;

class OfficeShopClaimController extends Controller
{
    public function store(Request $request)
    {
        try {
            // dd($request->all());
            $rules = [
                'policy_no' => 'required|regex:/^[0-9][A-Z]{2}[0-9]{7}$/',
                'policy_holder_name' => 'required',
                'insured_name' => 'required',
                'claimant_name' => 'required',
                'contact_person_name' => 'required',
                'contact_person_email' => 'required|email:rfc,dns',
                'contact_person_mobile' => 'required',
                'claim_types' => 'required',
                'accident_date' => 'required|date',
                'incident_location' => 'required',
                'incident_description' => 'required',
                'claim_q1' => 'required',
                'claim_q2' => 'required',
                'claim_q3' => 'required',
                'claim_q4' => 'required',
                'claim_q5' => 'required',
                'agree' => 'required',
            ];
            if (($request->claim_q1) == "yes") {
                $rules['claim_q1_description'] = 'required';
            }
            if (($request->claim_q2) == "yes") {
                $rules['claim_q2_description'] = 'required';
            }
            if (($request->claim_q3) == "yes") {
                $rules['claim_q3_description'] = 'required';
            }
            if (($request->claim_q5) == "yes") {
                $rules['claim_q5_description'] = 'required';
            }

            if(!empty($request->claim_types)){
                if(in_array('loss_of_money', $request->claim_types)){
                    $rules['loss_money_resons_claim'] = 'required';
                    $rules['loss_money_claim_amount'] = 'required';
                }
            }

            if(!empty($request->claim_types)){
                if(in_array('personal_assault', $request->claim_types)){
                    $rules['personal_assault_name'] = 'required';
                    $rules['personal_assault_name_claimant'] = 'required';
                    $rules['personal_assault_reason'] = 'required';
                }
            }
            

            if(!empty($request->claim_types)){
                if(in_array('plate_glass', $request->claim_types)){
                    $rules['plate_glass_resons_claim'] = 'required';
                }
            }
            

            if(!empty($request->claim_types)){
                if(in_array('employee_compensation', $request->claim_types)){
                    $rules['employee_compensation_injury_date'] = 'required|date';
                    $rules['employee_compensation_incident_description'] = 'required';
                    $rules['employee_compensation_sick_leave_from'] = 'required';
                    $rules['employee_compensation_sick_leave_to'] = 'required';
                    $rules['employee_compensation_injury_nature'] = 'required';
                }
            }

            if(!empty($request->claim_types)){
                if(in_array('others', $request->claim_types)){
                    $rules['resons_claim'] = 'required';
                }
            }

            if(!empty($request->claim_types)){
                if(in_array('public_liability', $request->claim_types)){
                    $rules['public_liability_owner_name'] = 'required';
                    $rules['public_liability_detaile_damage'] = 'required';
                    $rules['injured_name'] = 'required';
                    $rules['injury_description'] = 'required';
                    $rules['laiabilityq1'] = 'required';
                    $rules['laiabilityq2'] = 'required';
                    $rules['laiabilityq3'] = 'required';
                    
                    if (($request->laiabilityq1) == "yes") {
                        $rules['laiabilityq1_description'] = 'required';
                    }
                    if (($request->laiabilityq2) == "yes") {
                        $rules['laiabilityq2_description'] = 'required';
                    }
                    if (($request->laiabilityq3) == "yes") {
                        $rules['laiabilityq3_description'] = 'required';
                    }
                }
            }




            $validate = Validator::make(request()->all(), $rules);
            if ($validate->fails()) {
                return redirect('off-shop-claim-form')
                    ->withInput()
                    ->withErrors($validate);
            }

            $loss_damage_uploaded_file = $business_interruption_uploaded_file = $loss_money_uploaded_file = '';
            $injured_file              = $personal_assault_uploaded_file              = $plate_glass_uploaded_file              = $employee_compensation_uploaded_file              = '';

            if ($request->hasFile('loss_damage_uploaded_file')) {
                $names = [];
                foreach ($request->file('loss_damage_uploaded_file') as $image) {
                    $imageName = time() . '.' . $image->getClientOriginalName();
                    $image->move(public_path('/uploads'), $imageName);
                    array_push($names, $imageName);

                }
                $loss_damage_uploaded_file = json_encode($names);
            }

            if ($request->hasFile('business_interruption_uploaded_file')) {
                $names = [];
                foreach ($request->file('business_interruption_uploaded_file') as $image) {
                    $imageName = time() . '.' . $image->getClientOriginalName();
                    $image->move(public_path('/uploads'), $imageName);
                    array_push($names, $imageName);

                }
                $business_interruption_uploaded_file = json_encode($names);
            }

            if ($request->hasFile('loss_money_uploaded_file')) {
                $names = [];
                foreach ($request->file('loss_money_uploaded_file') as $image) {
                    $imageName = time() . '.' . $image->getClientOriginalName();
                    $image->move(public_path('/uploads'), $imageName);
                    array_push($names, $imageName);

                }
                $loss_money_uploaded_file = json_encode($names);
            }

            if ($request->hasFile('injured_file')) {
                $names = [];
                foreach ($request->file('injured_file') as $image) {
                    $imageName = time() . '.' . $image->getClientOriginalName();
                    $image->move(public_path('/uploads'), $imageName);
                    array_push($names, $imageName);

                }
                $injured_file = json_encode($names);
            }

            if ($request->hasFile('personal_assault_uploaded_file')) {
                $names = [];
                foreach ($request->file('personal_assault_uploaded_file') as $image) {
                    $imageName = time() . '.' . $image->getClientOriginalName();
                    $image->move(public_path('/uploads'), $imageName);
                    array_push($names, $imageName);

                }
                $personal_assault_uploaded_file = json_encode($names);
            }

            if ($request->hasFile('plate_glass_uploaded_file')) {
                $names = [];
                foreach ($request->file('plate_glass_uploaded_file') as $image) {
                    $imageName = time() . '.' . $image->getClientOriginalName();
                    $image->move(public_path('/uploads'), $imageName);
                    array_push($names, $imageName);

                }
                $plate_glass_uploaded_file = json_encode($names);
            }

            if ($request->hasFile('employee_compensation_uploaded_file')) {
                $names = [];
                foreach ($request->file('employee_compensation_uploaded_file') as $image) {
                    $imageName = time() . '.' . $image->getClientOriginalName();
                    $image->move(public_path('/uploads'), $imageName);
                    array_push($names, $imageName);

                }
                $employee_compensation_uploaded_file = json_encode($names);
            }

            $target                        = new OfficeShopClaim();
            $target->policy_no             = $request->policy_no;
            $target->policy_holder_name    = $request->policy_holder_name;
            $target->insured_name          = $request->insured_name;
            $target->claimant_name         = $request->claimant_name;
            $target->contact_person_name   = $request->contact_person_name;
            $target->contact_person_email  = $request->contact_person_email;
            $target->contact_person_mobile = $request->contact_person_mobile;
            $target->claim_types           = $request->claim_types ? json_encode($request->claim_types) : '';

            $target->accident_date        = $request->accident_date;
            $target->incident_location    = $request->incident_location;
            $target->incident_description = $request->incident_description;
            $target->claim_q1             = $request->claim_q1;
            $target->claim_q1_description             = $request->claim_q1_description;
            $target->claim_q2             = $request->claim_q2;
            $target->claim_q2_description             = $request->claim_q2_description;
            $target->claim_q3             = $request->claim_q3;
            $target->claim_q3_description             = $request->claim_q3_description;
            $target->claim_q4             = $request->claim_q4;
            $target->claim_q5             = $request->claim_q5;
            $target->claim_q5_description             = $request->claim_q5_description;

            $target->loss_damage_item_description     = $request->loss_damage_item_description ? json_encode($request->loss_damage_item_description) : '';
            $target->loss_damage_item_reason_cost     = $request->loss_damage_item_reason_cost ? json_encode($request->loss_damage_item_reason_cost) : '';
            $target->loss_damage_item_purchage_date   = $request->loss_damage_item_purchage_date ? json_encode($request->loss_damage_item_purchage_date) : '';
            $target->loss_damage_item_claim_amount    = $request->loss_damage_item_claim_amount ? json_encode($request->loss_damage_item_claim_amount) : '';
            $target->loss_damage_item_total           = $request->loss_damage_item_total ? json_encode($request->loss_damage_item_total) : '';
            $target->loss_damage_total_claimed_amount = $request->loss_damage_total_claimed_amount;
            $target->loss_damage_uploaded_file        = $loss_damage_uploaded_file;

            $target->business_interruption_period_from   = $request->business_interruption_period_from;
            $target->business_interruption_period_to     = $request->business_interruption_period_to;
            $target->business_interruption_description   = $request->business_interruption_description ? json_encode($request->business_interruption_description) : '';
            $target->business_interruption_reason_cost   = $request->business_interruption_reason_cost ? json_encode($request->business_interruption_reason_cost) : '';
            $target->business_interruption_date          = $request->business_interruption_date ? json_encode($request->business_interruption_date) : '';
            $target->business_interruption_claim_amount  = $request->business_interruption_claim_amount ? json_encode($request->business_interruption_claim_amount) : '';
            $target->business_interruption_item_total    = $request->business_interruption_item_total ? json_encode($request->business_interruption_item_total) : '';
            $target->business_interruption_uploaded_file = $business_interruption_uploaded_file;

            $target->loss_money_resons_claim  = $request->loss_money_resons_claim;
            $target->loss_money_claim_amount  = $request->loss_money_claim_amount;
            $target->loss_money_uploaded_file = $loss_money_uploaded_file;

            $target->public_liability_owner_name     = $request->public_liability_owner_name;
            $target->public_liability_detaile_damage = $request->public_liability_detaile_damage;
            $target->injured_name                    = $request->injured_name;
            $target->injury_description              = $request->injury_description;
            $target->laiabilityq1                    = $request->laiabilityq1;
            $target->laiabilityq1_description                    = $request->laiabilityq1_description;
            $target->laiabilityq2                    = $request->laiabilityq2;
            $target->laiabilityq2_description                    = $request->laiabilityq2_description;
            $target->laiabilityq3                    = $request->laiabilityq3;
            $target->laiabilityq3_description                    = $request->laiabilityq3_description;
            $target->injured_file                    = $injured_file;

            $target->personal_assault_name          = $request->personal_assault_name;
            $target->personal_assault_name_claimant = $request->personal_assault_name_claimant;
            $target->personal_assault_reason        = $request->personal_assault_reason;
            $target->personal_assault_uploaded_file = $personal_assault_uploaded_file;

            $target->plate_glass_resons_claim  = $request->plate_glass_resons_claim;
            $target->plate_glass_claim_amount  = $request->plate_glass_claim_amount;
            $target->plate_glass_uploaded_file = $plate_glass_uploaded_file;

            $target->employee_compensation_injury_date     = $request->employee_compensation_injury_date;
            $target->employee_compensation_sick_leave_from = $request->employee_compensation_sick_leave_from;
            $target->employee_compensation_sick_leave_to   = $request->employee_compensation_sick_leave_to;
            $target->employee_compensation_injury_nature   = $request->employee_compensation_injury_nature;
            $target->employee_compensation_uploaded_file   = $employee_compensation_uploaded_file;

            $target->resons_claim = $request->resons_claim;
            $target->claim_amount = $request->claim_amount;

            $target->agree           = $request->agree;
            $target->applicant_name  = $request->applicant_name;
            $target->submission_date = $request->submission_date;

            if ($target->save()) {
                Session::flash('success', "From Submited Successfully!");
                return redirect('home-claim');
            } else {
                Session::flash('error', "From Submit Unuccessfull!");
                return redirect('home-claim-form');
            }
        } catch (\Exception$e) {
            return response([
                'status'  => 'server_error',
                'message' => $e->getMessage(),
            ], 500);
        }
    }

}
