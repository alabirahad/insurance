@extends('admin.adminLayout.index')
@section('contents')
    <div class="main-content-body">
        <div class="content-heading margin-top-20">
            <h2 class="blue bold">Claim Details</h2>
        </div>

        <div class="details-full-body row">
            <div class="aplicant-details">
                <span class="blue">Name of Applicant &nbsp;&nbsp;&nbsp;&nbsp;:</span> &nbsp;&nbsp;&nbsp;&nbsp;
                {{ $employeeClaim->applicant_name ?? '' }} <br>
                <span class="blue">Submission Date &nbsp;&nbsp;&nbsp;&nbsp;:</span> &nbsp;&nbsp;&nbsp;&nbsp;
                {{ $employeeClaim->submission_date ?? '' }} <br>
            </div>
            
            <div class="col-md-5 details">
                <h4 class="blue bold">Policy Details</h4>

                <div class="row">
                    <div class="col-md-4">Policy No.</div>
                    <div class="col-md-8">: &nbsp;&nbsp; {{ $employeeClaim->policy_no ?? '' }}</div>
                </div>

                <div class="row">
                    <div class="col-md-4">Name of policy holder</div>
                    <div class="col-md-8">: &nbsp;&nbsp; {{ $employeeClaim->policy_holder_name ?? '' }}</div>
                </div>

                <div class="row">
                    <div class="col-md-4">Name of the insured</div>
                    <div class="col-md-8">: &nbsp;&nbsp; {{ $employeeClaim->insured_name ?? '' }}</div>
                </div>

                <div class="row">
                    <div class="col-md-4">Name of the claimant</div>
                    <div class="col-md-8">: &nbsp;&nbsp; {{ $employeeClaim->claimant_name ?? '' }}</div>
                </div>
            </div>

            <div class="col-md-1"></div>

            <div class="col-md-5 details">
                <h4 class="blue bold">Contact Information</h4>

                <div class="row">
                    <div class="col-md-4">Name of contact person</div>
                    <div class="col-md-8">: &nbsp;&nbsp; {{ $employeeClaim->contact_person_name ?? '' }}</div>
                </div>

                <div class="row">
                    <div class="col-md-4">Email address</div>
                    <div class="col-md-8">: &nbsp;&nbsp; {{ $employeeClaim->contact_person_email ?? '' }}</div>
                </div>

                <div class="row">
                    <div class="col-md-4">Mobile no.</div>
                    <div class="col-md-8">: &nbsp;&nbsp; {{ $employeeClaim->contact_person_mobile ?? '' }}</div>
                </div>
            </div>

            <div class="col-md-11 details">
                <h4 class="blue bold">Claim Information</h4>

                <div class="row">
                    <div class="col-md-5">Are the claimant/Insured person also insured with any other insurance for
                        the Insured person as a result of the same incident?</div>
                    <div class="col-md-7">: &nbsp;&nbsp; {{ $employeeClaim->claimant_person_injured ?? '' }}</div>
                    <div class="col-md-5"></div>
                    <div class="col-md-6 question-description">&nbsp;&nbsp; {{ $employeeClaim->claimant_person_injured_description ?? '' }}</div>
                </div>

                <div class="row margin-top-20">
                    <div class="col-md-5">Select claim types</div>
                    <div class="col-md-7">: &nbsp;&nbsp;
                        <?php 
                        if(!empty($employeeClaim->claim_types)){
                            $type = json_decode($employeeClaim->claim_types);
                            foreach ($type as $value) { ?>

                                @if($value == 'employee_compensation')
                                Employee's Compensation (Benefit 1) <br>
                                @endif
                                @if($value == 'personal_accident')
                                Personal Accident (Benefit 2) <br>
                                @endif
                                @if($value == 'repatriation')
                                Repatriation (Benefit 3)<br>
                                @endif
                                @if($value == 'clinical_expense')
                                Clinical Expenses (Benefit 4)<br>
                                @endif
                                @if($value == 'surgical_injury')
                                Surgical & Hospitalization Expense (Benefit 5)  <br>
                                @endif
                                @if($value == 'public_liability')
                                Dental Expenses (Benefit 6) <br>
                                @endif
                                @if($value == 'cash_allowance')
                                Loss of Services Cash Allowance (Benefit 7)  <br>
                                @endif
                                @if($value == 'replacement')
                                Replacement of Helper Expenses (Benefit 8)  <br>
                                @endif

                           <?php }
                        }    
                        ?>
                    </div>
                </div>


                <h4 class="text-center blue margin-top-40">Employee's Compensation (Benefit 1)</h4>
                <div class="row">
                    <div class="col-md-4">Date of injury</div>
                    <div class="col-md-8">: &nbsp;&nbsp; {{ $employeeClaim->employee_compensation_injury_date ?? '' }}</div>
                </div>
                <div class="row">
                    <div class="col-md-4">Description of incident</div>
                    <div class="col-md-8">: &nbsp;&nbsp; {{ $employeeClaim->employee_compensation_incident_description ?? '' }}</div>
                </div>
                <div class="row">
                    <div class="col-md-4">Sick leave</div>
                    <div class="col-md-8">: &nbsp;&nbsp; {{ $employeeClaim->employee_compensation_sick_leave_from ?? '' }} <span class="red">to</span> {{ $employeeClaim->employee_compensation_sick_leave_to ?? '' }}</div>
                </div>
                <div class="row">
                    <div class="col-md-4">Nature of injury</div>
                    <div class="col-md-8">: &nbsp;&nbsp; {{ $employeeClaim->employee_compensation_injury_nature ?? '' }}</div>
                </div>



                <h4 class="text-center blue margin-top-40">Personal Accident (Benefit 2) </h4>
                <div class="row">
                    <div class="col-md-4">Date of injury</div>
                    <div class="col-md-8">: &nbsp;&nbsp; {{ $employeeClaim->personal_accident_injury_date ?? '' }}</div>
                </div>
                <div class="row">
                    <div class="col-md-4">Description of incident</div>
                    <div class="col-md-8">: &nbsp;&nbsp; {{ $employeeClaim->personal_accident_incident_description ?? '' }}</div>
                </div>
                <div class="row">
                    <div class="col-md-4">Sick leave</div>
                    <div class="col-md-8">: &nbsp;&nbsp; {{ $employeeClaim->personal_accident_sick_leave_from ?? '' }} <span class="red">to</span> {{ $employeeClaim->personal_accident_sick_leave_to ?? '' }}</div>
                </div>
                <div class="row">
                    <div class="col-md-4">Nature of injury</div>
                    <div class="col-md-8">: &nbsp;&nbsp; {{ $employeeClaim->personal_accident_injury_nature ?? '' }}</div>
                </div>
                <div class="row">
                    <div class="col-md-5">Is the Insured person fully recovered? </div>
                    <div class="col-md-7">: &nbsp;&nbsp; {{ $employeeClaim->personal_accident_recoverd ?? '' }}</div>
                    <div class="col-md-5"></div>
                    <div class="col-md-6 question-description">&nbsp;&nbsp; {{ $employeeClaim->personal_accident_recoverd_description ?? '' }}</div>
                </div>



                <h4 class="text-center blue margin-top-40">Repatriation (Benefit 3)  </h4>
                <div class="row">
                    <div class="col-md-4">Date of Death / Serious Sickness / Injury</div>
                    <div class="col-md-8">: &nbsp;&nbsp; {{ $employeeClaim->repatriation_injury_date ?? '' }}</div>
                </div>
                <div class="row">
                    <div class="col-md-4">Description of incident</div>
                    <div class="col-md-8">: &nbsp;&nbsp; {{ $employeeClaim->repatriation_incident_description ?? '' }}</div>
                </div>
                <div class="row">
                    <div class="col-md-4">Reasons of Injury</div>
                    <div class="col-md-8">: &nbsp;&nbsp; {{ $employeeClaim->repatriation_reason ?? '' }}</div>
                </div>
                <div class="row">
                    <div class="col-md-5">Is the Insured person fully recovered? </div>
                    <div class="col-md-7">: &nbsp;&nbsp; {{ $employeeClaim->repatriation_recoverd ?? '' }}</div>
                    <div class="col-md-5"></div>
                    <div class="col-md-6 question-description">&nbsp;&nbsp; {{ $employeeClaim->repatriation_recoverd_description ?? '' }}</div>
                </div>



                <h4 class="text-center blue margin-top-40">Clinical Expenses (Benefit 4)</h4>
                <div class="row">
                    <div class="col-md-4">Date of Medical Consulation</div>
                    <div class="col-md-8">: &nbsp;&nbsp; {{ $employeeClaim->clinical_expense_injury_date ?? '' }}</div>
                </div>
                <div class="row">
                    <div class="col-md-4">Diagnosis</div>
                    <div class="col-md-8">: &nbsp;&nbsp; {{ $employeeClaim->clinical_expense_diagnosis ?? '' }}</div>
                </div>
                <div class="row">
                    <div class="col-md-4">Total Claimed Expense(s)</div>
                    <div class="col-md-8">: &nbsp;&nbsp; {{ $employeeClaim->clinical_expense_total_expense ?? '' }}</div>
                </div>

                

                <h4 class="text-center blue margin-top-40">Surgical & Hospitalization Expense (Benefit 5)</h4>
                <div class="row">
                    <div class="col-md-4">Date of Sickness / Injury</div>
                    <div class="col-md-8">: &nbsp;&nbsp; {{ $employeeClaim->surgical_injury_date ?? '' }}</div>
                </div>
                <div class="row">
                    <div class="col-md-4">Description of incident</div>
                    <div class="col-md-8">: &nbsp;&nbsp; {{ $employeeClaim->surgical_incident_description ?? '' }}</div>
                </div>
                <div class="row">
                    <div class="col-md-4">Diagnosis</div>
                    <div class="col-md-8">: &nbsp;&nbsp; {{ $employeeClaim->surgical_incident_diagnosis ?? '' }}</div>
                </div>
                <div class="row">
                    <div class="col-md-4">Total Claimed Expense(s)</div>
                    <div class="col-md-8">: &nbsp;&nbsp; {{ $employeeClaim->surgical_incident_total_expense ?? '' }}</div>
                </div>

                

                <h4 class="text-center blue margin-top-40">Dental Expenses (Benefit 6)</h4>
                <div class="row">
                    <div class="col-md-4">Date of Sickness / Injury</div>
                    <div class="col-md-8">: &nbsp;&nbsp; {{ $employeeClaim->dental_expense_date ?? '' }}</div>
                </div>
                <div class="row">
                    <div class="col-md-4">Diagnosis</div>
                    <div class="col-md-8">: &nbsp;&nbsp; {{ $employeeClaim->dental_expense_diagnosis ?? '' }}</div>
                </div>
                <div class="row">
                    <div class="col-md-4">Total Claimed Expense(s)</div>
                    <div class="col-md-8">: &nbsp;&nbsp; {{ $employeeClaim->dental_expense_total_expense ?? '' }}</div>
                </div>

                

                <h4 class="text-center blue margin-top-40">Loss of Services Cash Allowance (Benefit 7)</h4>
                <div class="row">
                    <div class="col-md-4">Date of Medical Consulation</div>
                    <div class="col-md-8">: &nbsp;&nbsp; {{ $employeeClaim->cash_allowance_injury_date ?? '' }}</div>
                </div>
                <div class="row">
                    <div class="col-md-4">Diagnosis</div>
                    <div class="col-md-8">: &nbsp;&nbsp; {{ $employeeClaim->cash_allowance_diagnosis ?? '' }}</div>
                </div>
                <div class="row">
                    <div class="col-md-4">Period of Hospital Confinement</div>
                    <div class="col-md-8">: &nbsp;&nbsp; {{ $employeeClaim->cash_allowance_period_from ?? '' }} <span class="red">to</span> {{ $employeeClaim->cash_allowance_period_to ?? '' }}</div>
                </div>

                

                <h4 class="text-center blue margin-top-40">Replacement of Helper Expenses (Benefit 8)</h4>
                <div class="row">
                    <div class="col-md-4">Reason of Replacement</div>
                    <div class="col-md-8">: &nbsp;&nbsp; {{ $employeeClaim->replacement_reason ?? '' }}</div>
                </div>
                <div class="row">
                    <div class="col-md-4">Total Claimed Expense(s)</div>
                    <div class="col-md-8">: &nbsp;&nbsp; {{ $employeeClaim->replacement_total_expense ?? '' }}</div>
                </div>

            </div>
        </div>
    </div>

@endsection
