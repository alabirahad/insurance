@extends('admin.adminLayout.index')
@section('contents')
<div class="main-content-body">
    <div class="content-heading margin-top-20">
        <h2 class="blue bold">Home Claim List</h2>
    </div>

    <div class="details-full-body row">
        <div class="aplicant-details">
            <span class="blue">Name of Applicant &nbsp;&nbsp;&nbsp;&nbsp;:</span> &nbsp;&nbsp;&nbsp;&nbsp; {{$homeClaim->applicant_name ?? ''}} <br>
            <span class="blue">Submission Date &nbsp;&nbsp;&nbsp;&nbsp;:</span> &nbsp;&nbsp;&nbsp;&nbsp; {{$homeClaim->submission_date ?? ''}} <br>
        </div>

        <div class="col-md-5 details">
            <h4 class="blue bold">Policy Details</h4>

            <div class="row">
                <div class="col-md-4">Policy No.</div>
                <div class="col-md-8">: &nbsp;&nbsp; {{$homeClaim->policy_no ?? ''}}</div>
            </div>
            
            <div class="row">
                <div class="col-md-4">Name of policy holder</div>
                <div class="col-md-8">: &nbsp;&nbsp; {{$homeClaim->policy_holder_name ?? ''}}</div>
            </div>
            
            <div class="row">
                <div class="col-md-4">Name of the insured</div>
                <div class="col-md-8">: &nbsp;&nbsp; {{$homeClaim->insured_name ?? ''}}</div>
            </div>
            
            <div class="row">
                <div class="col-md-4">Name of the claimant</div>
                <div class="col-md-8">: &nbsp;&nbsp; {{$homeClaim->claimant_name ?? ''}}</div>
            </div>
        </div>

        <div class="col-md-1"></div>

        <div class="col-md-5 details">
            <h4 class="blue bold">Contact Information</h4>

            <div class="row">
                <div class="col-md-4">Name of contact person</div>
                <div class="col-md-8">: &nbsp;&nbsp; {{$homeClaim->contact_person_name ?? ''}}</div>
            </div>
            
            <div class="row">
                <div class="col-md-4">Email address</div>
                <div class="col-md-8">: &nbsp;&nbsp; {{$homeClaim->contact_person_email ?? ''}}</div>
            </div>
            
            <div class="row">
                <div class="col-md-4">Mobile no.</div>
                <div class="col-md-8">: &nbsp;&nbsp; {{$homeClaim->contact_person_mobile ?? ''}}</div>
            </div>
        </div>


        <div class="col-md-11 details">
            <h4 class="blue bold">Claim Information</h4>
            <div class="row margin-top-20">
                <div class="col-md-5">Select claim types</div>
                <div class="col-md-7">: &nbsp;&nbsp;
                    <?php 
                    if(!empty($homeClaim->claim_types)){
                        $type = json_decode($homeClaim->claim_types);
                        foreach ($type as $value) { ?>

                            @if($value == 'loss')
                            Loss / damage to Home / Household Content / Home Buildings  <br>
                            @endif
                            @if($value == 'personal')
                            Personal / Public Liability <br>
                            @endif
                            @if($value == 'others')
                            Others.<br>
                            @endif

                       <?php }
                    }    
                    ?>
                </div>
            </div>


            <h4 class="text-center blue margin-top-40">Loss / damage to Home / Household Content / Home Buildings</h4>
            <div class="row">
                <div class="col-md-4">Date of injury</div>
                <div class="col-md-8">: &nbsp;&nbsp; {{ $homeClaim->accident_date ?? '' }}</div>
            </div>
            <div class="row">
                <div class="col-md-4">Description of incident</div>
                <div class="col-md-8">: &nbsp;&nbsp; {{ $homeClaim->incident_description ?? '' }}</div>
            </div>
            <div class="row">
                <div class="col-md-4">Location of incident</div>
                <div class="col-md-8">: &nbsp;&nbsp; {{ $homeClaim->incident_location ?? '' }}</div>
            </div>

            <div class="row margin-top-20">
                <div class="col-md-5">Q1 : Is there any sign of forcible entry or exit at the premises
                    in case of theft or burglary loss? </div>
                <div class="col-md-7">: &nbsp;&nbsp; {{ $homeClaim->claim_q1 ?? '' }}</div>
                <div class="col-md-5"></div>
                <div class="col-md-6 question-description">&nbsp;&nbsp; {{ $homeClaim->claim_q1_description ?? '' }}</div>
            </div>

            <div class="row margin-top-20">
                <div class="col-md-5">Q2 : Has/ Will the incident been reported/ be reported to the
                    local police/ management office/ any other responsible party?</div>
                <div class="col-md-7">: &nbsp;&nbsp; {{ $homeClaim->claim_q2 ?? '' }}</div>
                <div class="col-md-5"></div>
                <div class="col-md-6 question-description">&nbsp;&nbsp; {{ $homeClaim->claim_q2_description ?? '' }}</div>
            </div>

            <div class="row margin-top-20">
                <div class="col-md-5">Q3 : Have you lodged/ Are you going to lodge complaint/ claim
                                    against any other part(ies) concerning the loss/damage?</div>
                <div class="col-md-7">: &nbsp;&nbsp; {{ $homeClaim->claim_q3 ?? '' }}</div>
                <div class="col-md-5"></div>
                <div class="col-md-6 question-description">&nbsp;&nbsp; {{ $homeClaim->claim_q3_description ?? '' }}</div>
            </div>

            <div class="row margin-top-20">
                <div class="col-md-5">Q4 : Are you the owner of damaged or lost item(s)/propert(ies)?</div>
                <div class="col-md-7">: &nbsp;&nbsp; {{ $homeClaim->claim_q4 ?? '' }}</div>
            </div>

            <div class="row margin-top-20">
                <div class="col-md-5">Q5 : Are you the occupier of the Insured Premises?</div>
                <div class="col-md-7">: &nbsp;&nbsp; {{ $homeClaim->claim_q5 ?? '' }}</div>
            </div>

            <div class="row margin-top-20">
                <div class="col-md-5">Q6 : Were the insured premises being occupied at the time of
                    incident?</div>
                <div class="col-md-7">: &nbsp;&nbsp; {{ $homeClaim->claim_q6 ?? '' }}</div>
            </div>

            <div class="row margin-top-20">
                <div class="col-md-5">Q7 : Is/Are the Insured propert(ies) subject to any Hire
                    Purchase or Loan Agreement?</div>
                <div class="col-md-7">: &nbsp;&nbsp; {{ $homeClaim->claim_q7 ?? '' }}</div>
                <div class="col-md-5"></div>
                <div class="col-md-6 question-description">&nbsp;&nbsp; {{ $homeClaim->claim_q7_description ?? '' }}</div>
            </div>

            <div class="row margin-top-20">
                <div class="col-md-5">Q8 : Are the Insured also insured with any other insurance for
                    the Insured propert(ies) as a result of the same incident?</div>
                <div class="col-md-7">: &nbsp;&nbsp; {{ $homeClaim->claim_q8 ?? '' }}</div>
                <div class="col-md-5"></div>
                <div class="col-md-6 question-description">&nbsp;&nbsp; {{ $homeClaim->claim_q8_description ?? '' }}</div>
            </div>



            <h4 class="text-center blue margin-top-40">Details of damaged or lost properties </h4>
            <div class="row">
                <div class="col-md-4">Total (HK$)</div>
                <div class="col-md-8">: &nbsp;&nbsp; 
                    <?php 
                    if(!empty($homeClaim->loss_damage_total)){
                        $type = json_decode($homeClaim->loss_damage_total);
                        foreach ($type as $value) { ?>
                            {{$value}} <br>
                       <?php }
                    }    
                    ?>    
                </div>
            </div>



            <h4 class="text-center blue margin-top-40">Damage to Property of other(s)</h4>
            <div class="row">
                <div class="col-md-4">Name of the property owner </div>
                <div class="col-md-8">: &nbsp;&nbsp; {{ $homeClaim->property_owner_name ?? '' }}</div>
            </div>
            <div class="row">
                <div class="col-md-4">Details & extent of damage to Property of other(s)</div>
                <div class="col-md-8">: &nbsp;&nbsp; {{ $homeClaim->damage_property_description ?? '' }}</div>
            </div>



            <h4 class="text-center blue margin-top-40">Injury to other(s)</h4>
            <div class="row">
                <div class="col-md-4">Name of the injured</div>
                <div class="col-md-8">: &nbsp;&nbsp; {{ $homeClaim->injured_name ?? '' }}</div>
            </div>
            <div class="row">
                <div class="col-md-4">Details & extent of injury of other(s)</div>
                <div class="col-md-8">: &nbsp;&nbsp; {{ $homeClaim->injury_description ?? '' }}</div>
            </div>

            <div class="row margin-top-20">
                <div class="col-md-5">Q1 : Was/Were other wrongdoer(s) involved in the same incident?</div>
                <div class="col-md-7">: &nbsp;&nbsp; {{ $homeClaim->laiabilityq1 ?? '' }}</div>
                <div class="col-md-5"></div>
                <div class="col-md-6 question-description">&nbsp;&nbsp; {{ $homeClaim->laiabilityq1_description ?? '' }}</div>
            </div>

            <div class="row margin-top-20">
                <div class="col-md-5">Q2 : Has any communication, verbal or written, been made to you
                    by or on behalf of any injured or owner(s) of the damaged property?</div>
                <div class="col-md-7">: &nbsp;&nbsp; {{ $homeClaim->laiabilityq2 ?? '' }}</div>
                <div class="col-md-5"></div>
                <div class="col-md-6 question-description">&nbsp;&nbsp; {{ $homeClaim->laiabilityq2_description ?? '' }}</div>
            </div>

            <div class="row margin-top-20">
                <div class="col-md-5">Q3 : Has any step been taken to compromise or settle the
                    matter?</div>
                <div class="col-md-7">: &nbsp;&nbsp; {{ $homeClaim->laiabilityq3 ?? '' }}</div>
                <div class="col-md-5"></div>
                <div class="col-md-6 question-description">&nbsp;&nbsp; {{ $homeClaim->laiabilityq3_description ?? '' }}</div>
            </div>

            <div class="row">
                <div class="col-md-4">State all Name(s), address(es) and telephone No.(s) of witness(es) of the incident, if any</div>
                <div class="col-md-8">: &nbsp;&nbsp; {{ $homeClaim->laiability_state_contact ?? '' }}</div>
            </div>

            

            <h4 class="text-center blue margin-top-40">Others</h4>
            <div class="row">
                <div class="col-md-4">Reason of claim</div>
                <div class="col-md-8">: &nbsp;&nbsp; {{ $homeClaim->others_resons_claim ?? '' }}</div>
            </div>
            <div class="row">
                <div class="col-md-4">Total claimed amount</div>
                <div class="col-md-8">: &nbsp;&nbsp; {{ $homeClaim->others_claim_amount ?? '' }}</div>
            </div>

        </div>
    </div>
</div>

@endsection