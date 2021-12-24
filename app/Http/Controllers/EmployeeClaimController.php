<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\EmployeeClaim;
use File;
use Illuminate\Http\Request;
use Response;
use Session;

class EmployeeClaimController extends Controller
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

            $employee_compensation_uploaded_file = $personal_accident_uploaded_file = $repatriation_uploaded_file = $clinical_expense_uploaded_file = '';
            $surgical_incident_uploaded_file     = $dental_expense_uploaded_file     = $cash_allowance_uploaded_file     = $replacement_uploaded_file     = '';

            if ($request->hasFile('employee_compensation_uploaded_file')) {
                $names = [];
                foreach ($request->file('employee_compensation_uploaded_file') as $image) {
                    $imageName = time() . '.' . $image->getClientOriginalName();
                    $image->move(public_path('/uploads'), $imageName);
                    array_push($names, $imageName);

                }
                $employee_compensation_uploaded_file = json_encode($names);
            }

            if ($request->hasFile('personal_accident_uploaded_file')) {
                $names = [];
                foreach ($request->file('personal_accident_uploaded_file') as $image) {
                    $imageName = time() . '.' . $image->getClientOriginalName();
                    $image->move(public_path('/uploads'), $imageName);
                    array_push($names, $imageName);

                }
                $personal_accident_uploaded_file = json_encode($names);
            }

            if ($request->hasFile('repatriation_uploaded_file')) {
                $names = [];
                foreach ($request->file('repatriation_uploaded_file') as $image) {
                    $imageName = time() . '.' . $image->getClientOriginalName();
                    $image->move(public_path('/uploads'), $imageName);
                    array_push($names, $imageName);

                }
                $repatriation_uploaded_file = json_encode($names);
            }

            if ($request->hasFile('clinical_expense_uploaded_file')) {
                $names = [];
                foreach ($request->file('clinical_expense_uploaded_file') as $image) {
                    $imageName = time() . '.' . $image->getClientOriginalName();
                    $image->move(public_path('/uploads'), $imageName);
                    array_push($names, $imageName);

                }
                $clinical_expense_uploaded_file = json_encode($names);
            }

            if ($request->hasFile('surgical_incident_uploaded_file')) {
                $names = [];
                foreach ($request->file('surgical_incident_uploaded_file') as $image) {
                    $imageName = time() . '.' . $image->getClientOriginalName();
                    $image->move(public_path('/uploads'), $imageName);
                    array_push($names, $imageName);

                }
                $surgical_incident_uploaded_file = json_encode($names);
            }

            if ($request->hasFile('dental_expense_uploaded_file')) {
                $names = [];
                foreach ($request->file('dental_expense_uploaded_file') as $image) {
                    $imageName = time() . '.' . $image->getClientOriginalName();
                    $image->move(public_path('/uploads'), $imageName);
                    array_push($names, $imageName);

                }
                $dental_expense_uploaded_file = json_encode($names);
            }

            if ($request->hasFile('cash_allowance_uploaded_file')) {
                $names = [];
                foreach ($request->file('cash_allowance_uploaded_file') as $image) {
                    $imageName = time() . '.' . $image->getClientOriginalName();
                    $image->move(public_path('/uploads'), $imageName);
                    array_push($names, $imageName);

                }
                $cash_allowance_uploaded_file = json_encode($names);
            }

            if ($request->hasFile('replacement_uploaded_file')) {
                $names = [];
                foreach ($request->file('replacement_uploaded_file') as $image) {
                    $imageName = time() . '.' . $image->getClientOriginalName();
                    $image->move(public_path('/uploads'), $imageName);
                    array_push($names, $imageName);

                }
                $replacement_uploaded_file = json_encode($names);
            }

            $target                          = new EmployeeClaim();
            $target->policy_no               = $request->policy_no;
            $target->policy_holder_name      = $request->policy_holder_name;
            $target->insured_name            = $request->insured_name;
            $target->claimant_name           = $request->claimant_name;
            $target->contact_person_name     = $request->contact_person_name;
            $target->contact_person_email    = $request->contact_person_email;
            $target->contact_person_mobile   = $request->contact_person_mobile;
            $target->claimant_person_injured = $request->claimant_person_injured;
            $target->claim_types             = $request->claim_types ? json_encode($request->claim_types) : '';

            $target->employee_compensation_injury_date          = $request->employee_compensation_injury_date;
            $target->employee_compensation_incident_description = $request->employee_compensation_incident_description;
            $target->employee_compensation_sick_leave_from      = $request->employee_compensation_sick_leave_from;
            $target->employee_compensation_sick_leave_to        = $request->employee_compensation_sick_leave_to;
            $target->employee_compensation_injury_nature        = $request->employee_compensation_injury_nature;
            $target->employee_compensation_uploaded_file        = $employee_compensation_uploaded_file;

            $target->personal_accident_injury_date          = $request->personal_accident_injury_date;
            $target->personal_accident_incident_description = $request->personal_accident_incident_description;
            $target->personal_accident_sick_leave_from      = $request->personal_accident_sick_leave_from;
            $target->personal_accident_sick_leave_to        = $request->personal_accident_sick_leave_to;
            $target->personal_accident_injury_nature        = $request->personal_accident_injury_nature;
            $target->personal_accident_recoverd             = $request->personal_accident_recoverd;
            $target->personal_accident_uploaded_file        = $personal_accident_uploaded_file;

            $target->repatriation_injury_date          = $request->repatriation_injury_date;
            $target->repatriation_incident_description = $request->repatriation_incident_description;
            $target->repatriation_reason               = $request->repatriation_reason;
            $target->repatriation_recoverd             = $request->repatriation_recoverd;
            $target->repatriation_uploaded_file        = $repatriation_uploaded_file;

            $target->clinical_expense_injury_date   = $request->clinical_expense_injury_date;
            $target->clinical_expense_diagnosis     = $request->clinical_expense_diagnosis;
            $target->clinical_expense_total_expense = $request->clinical_expense_total_expense;
            $target->clinical_expense_uploaded_file = $clinical_expense_uploaded_file;

            $target->surgical_injury_date            = $request->surgical_injury_date;
            $target->surgical_incident_description   = $request->surgical_incident_description;
            $target->surgical_incident_diagnosis     = $request->surgical_incident_diagnosis;
            $target->surgical_incident_total_expense = $request->surgical_incident_total_expense;
            $target->surgical_incident_uploaded_file = $surgical_incident_uploaded_file;

            $target->dental_expense_date          = $request->dental_expense_date;
            $target->dental_expense_diagnosis     = $request->dental_expense_diagnosis;
            $target->dental_expense_total_expense = $request->dental_expense_total_expense;
            $target->dental_expense_uploaded_file = $dental_expense_uploaded_file;

            $target->cash_allowance_injury_date = $request->cash_allowance_injury_date;
            $target->cash_allowance_diagnosis   = $request->cash_allowance_diagnosis;
            $target->cash_allowance_period_from = $request->cash_allowance_period_from;
            $target->cash_allowance_period_to   = $cash_allowance_uploaded_file;

            $target->replacement_reason        = $request->replacement_reason;
            $target->replacement_total_expense = $request->replacement_total_expense;
            $target->replacement_uploaded_file = $replacement_uploaded_file;

            $target->agree           = $request->agree;
            $target->applicant_name  = $request->applicant_name;
            $target->submission_date = $request->submission_date;

            if ($target->save()) {
                Session::flash('success', "From Submited Successfully!");
                return redirect('employee-claim');
            } else {
                Session::flash('error', "From Submit Unuccessfull!");
                return redirect('employee-claim-form');
            }
        } catch (\Exception$e) {
            return response([
                'status'  => 'server_error',
                'message' => $e->getMessage(),
            ], 500);
        }
    }

}
