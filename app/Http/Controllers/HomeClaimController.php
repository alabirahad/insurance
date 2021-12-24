<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\HomeClaim;
use File;
use Illuminate\Http\Request;
use Response;
use Session;

class HomeClaimController extends Controller
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

            $loss_damage_uploaded_file = $laiability_injured_file = $others_file = '';

            if ($request->hasFile('loss_damage_uploaded_file')) {
                $names = [];
                foreach ($request->file('loss_damage_uploaded_file') as $image) {
                    $imageName = time() . '.' . $image->getClientOriginalName();
                    $image->move(public_path('/uploads'), $imageName);
                    array_push($names, $imageName);

                }
                $loss_damage_uploaded_file = json_encode($names);
            }

            if ($request->hasFile('laiability_injured_file')) {
                $names = [];
                foreach ($request->file('laiability_injured_file') as $image) {
                    $imageName = time() . '.' . $image->getClientOriginalName();
                    $image->move(public_path('/uploads'), $imageName);
                    array_push($names, $imageName);

                }
                $laiability_injured_file = json_encode($names);
            }

            if ($request->hasFile('others_file')) {
                $names = [];
                foreach ($request->file('others_file') as $image) {
                    $imageName = time() . '.' . $image->getClientOriginalName();
                    $image->move(public_path('/uploads'), $imageName);
                    array_push($names, $imageName);

                }
                $others_file = json_encode($names);
            }

            $target                        = new HomeClaim();
            $target->policy_no             = $request->policy_no;
            $target->policy_holder_name    = $request->policy_holder_name;
            $target->insured_name          = $request->insured_name;
            $target->claimant_name         = $request->claimant_name;
            $target->contact_person_name   = $request->contact_person_name;
            $target->contact_person_email  = $request->contact_person_email;
            $target->contact_person_mobile = $request->contact_person_mobile;
            // $target->claimant_person_injured = $request->claimant_person_injured;
            $target->claim_types = $request->claim_types ? json_encode($request->claim_types) : '';

            $target->accident_date        = $request->accident_date;
            $target->incident_location    = $request->incident_location;
            $target->incident_description = $request->incident_description;
            $target->claim_q1             = $request->claim_q1;
            $target->claim_q2             = $request->claim_q2;
            $target->claim_q3             = $request->claim_q3;
            $target->claim_q4             = $request->claim_q4;
            $target->claim_q5             = $request->claim_q5;
            $target->claim_q6             = $request->claim_q6;
            $target->claim_q7             = $request->claim_q7;
            $target->claim_q8             = $request->claim_q8;

            $target->loss_damage_property_description = $request->loss_damage_property_description ? json_encode($request->loss_damage_property_description) : '';
            $target->loss_damage_purchage_date        = $request->loss_damage_purchage_date ? json_encode($request->loss_damage_purchage_date) : '';
            $target->loss_damage_purchage_price       = $request->loss_damage_purchage_price ? json_encode($request->loss_damage_purchage_price) : '';
            $target->loss_damage_repair_cost          = $request->loss_damage_repair_cost ? json_encode($request->loss_damage_repair_cost) : '';
            $target->loss_damage_claim_amount         = $request->loss_damage_claim_amount ? json_encode($request->loss_damage_claim_amount) : '';
            $target->loss_damage_total                = $request->loss_damage_total ? json_encode($request->loss_damage_total) : '';
            $target->loss_damage_uploaded_file        = $loss_damage_uploaded_file;

            $target->property_owner_name         = $request->property_owner_name;
            $target->damage_property_description = $request->damage_property_description;
            $target->injured_name                = $request->injured_name;
            $target->injury_description          = $request->injury_description;
            $target->laiabilityq1                = $request->laiabilityq1;
            $target->laiabilityq2                = $request->laiabilityq2;
            $target->laiabilityq3                = $request->laiabilityq3;
            $target->laiability_state_contact    = $request->laiability_state_contact;
            $target->laiability_injured_file     = $laiability_injured_file;

            $target->others_resons_claim = $request->others_resons_claim;
            $target->others_claim_amount = $request->others_claim_amount;
            $target->others_file         = $others_file;

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
