<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\OfficeShopClaim;
use File;
use Illuminate\Http\Request;
use Response;
use Session;

class OfficeShopClaimController extends Controller
{
    public function store(Request $request)
    {
        try {
            // dd($request->all());
            // $rules = [
            //     'category_id'        => 'required|not_in:0',
            //     'title'              => 'required',
            //     'year'               => 'required|numeric',
            //     'duration'           => 'required|numeric',
            //     'video_type'         => 'required|not_in:0',
            //     'thumbnail'          => 'required',
            //     'thumbnail_vertical' => 'required',
            //     'description'        => 'required',
            //     'status'             => Rule::in(['active', 'inactive']),
            // ];
            // if (($request->video_type) == "4") {
            //     $rules['video'] = 'required';
            // } else {
            //     $rules['url'] = 'required';
            // }

            // if (($request->is_series) == "on") {
            //     $rules['series_id'] = 'required|not_in:0';
            //     $rules['season_id'] = 'required|not_in:0';
            //     $rules['episod_id'] = 'required|not_in:0';
            // }

            // $validate = Validator::make(request()->all(), $rules);
            // if ($validate->fails()) {
            //     return Response::json(['success' => false, 'heading' => 'Validtion Error', 'message' => $validate->errors()], 422);
            // }

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
            $target->claim_q2             = $request->claim_q2;
            $target->claim_q3             = $request->claim_q3;
            $target->claim_q4             = $request->claim_q4;
            $target->claim_q5             = $request->claim_q5;

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
            $target->laiabilityq2                    = $request->laiabilityq2;
            $target->laiabilityq3                    = $request->laiabilityq3;
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
