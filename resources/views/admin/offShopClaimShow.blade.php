@extends('admin.adminLayout.index')
@section('contents')
<div class="main-content-body">
    <div class="content-heading margin-top-20">
        <h2 class="blue bold">Office/Shop Claim List</h2>
    </div>

    <div class="details-full-body row">
        <div class="aplicant-details">
            <span class="blue">Name of Applicant &nbsp;&nbsp;&nbsp;&nbsp;:</span> &nbsp;&nbsp;&nbsp;&nbsp; {{$offShopClaim->applicant_name ?? ''}} <br>
            <span class="blue">Submission Date &nbsp;&nbsp;&nbsp;&nbsp;:</span> &nbsp;&nbsp;&nbsp;&nbsp; {{$offShopClaim->submission_date ?? ''}} <br>
        </div>
        <div class="col-md-5 details">
            <h4 class="blue bold">Policy Details</h4>

            <div class="row">
                <div class="col-md-4">Policy No.</div>
                <div class="col-md-8">: &nbsp;&nbsp; {{$offShopClaim->policy_no ?? ''}}</div>
            </div>
            
            <div class="row">
                <div class="col-md-4">Name of policy holder</div>
                <div class="col-md-8">: &nbsp;&nbsp; {{$offShopClaim->policy_holder_name ?? ''}}</div>
            </div>
            
            <div class="row">
                <div class="col-md-4">Name of the insured</div>
                <div class="col-md-8">: &nbsp;&nbsp; {{$offShopClaim->insured_name ?? ''}}</div>
            </div>
            
            <div class="row">
                <div class="col-md-4">Name of the claimant</div>
                <div class="col-md-8">: &nbsp;&nbsp; {{$offShopClaim->claimant_name ?? ''}}</div>
            </div>
        </div>
        <div class="col-md-1"></div>
        <div class="col-md-5 details">
            <h4 class="blue bold">Contact Information</h4>

            <div class="row">
                <div class="col-md-4">Name of contact person</div>
                <div class="col-md-8">: &nbsp;&nbsp; {{$offShopClaim->contact_person_name ?? ''}}</div>
            </div>
            
            <div class="row">
                <div class="col-md-4">Email address</div>
                <div class="col-md-8">: &nbsp;&nbsp; {{$offShopClaim->contact_person_email ?? ''}}</div>
            </div>
            
            <div class="row">
                <div class="col-md-4">Mobile no.</div>
                <div class="col-md-8">: &nbsp;&nbsp; {{$offShopClaim->contact_person_mobile ?? ''}}</div>
            </div>
        </div>



        <div class="col-md-11 details">
            <h4 class="blue bold">Claim Information</h4>

            <div class="row margin-top-20">
                <div class="col-md-5">Select claim types</div>
                <div class="col-md-7">: &nbsp;&nbsp;
                    <?php 
                    if(!empty($offShopClaim->claim_types)){
                        $type = json_decode($offShopClaim->claim_types);
                        foreach ($type as $value) { ?>

                            @if($value == 'loss')
                            Loss or damage to Contents / Stock  <br>
                            @endif
                            @if($value == 'business_interruption')
                            Business Interruption <br>
                            @endif
                            @if($value == 'loss_of_money')
                            Loss of Money<br>
                            @endif
                            @if($value == 'public_liability')
                            Public Liability<br>
                            @endif
                            @if($value == 'personal_assault')
                            Personal Assault<br>
                            @endif
                            @if($value == 'plate_glass')
                            Plate Glass<br>
                            @endif
                            @if($value == 'employee_compensation')
                            Employee's Compensation   <br>
                            @endif
                            @if($value == 'others')
                            Others<br>
                            @endif

                       <?php }
                    }    
                    ?>
                </div>
            </div>


            <h4 class="text-center blue margin-top-40">Loss or damage to Contents / Stock</h4>
            <div class="row">
                <div class="col-md-4">Date & time of accident</div>
                <div class="col-md-8">: &nbsp;&nbsp; {{ $offShopClaim->accident_date ?? '' }}</div>
            </div>
            <div class="row">
                <div class="col-md-4">Description of incident</div>
                <div class="col-md-8">: &nbsp;&nbsp; {{ $offShopClaim->incident_description ?? '' }}</div>
            </div>
            <div class="row">
                <div class="col-md-4">Location of incident</div>
                <div class="col-md-8">: &nbsp;&nbsp; {{ $offShopClaim->incident_location ?? '' }}</div>
            </div>

            <div class="row margin-top-20">
                <div class="col-md-5">Q1 : Is there any sign of forcible entry or exit at the premises
                    in case of theft or burglary loss? </div>
                <div class="col-md-7">: &nbsp;&nbsp; {{ $offShopClaim->claim_q1 ?? '' }}</div>
                <div class="col-md-5"></div>
                <div class="col-md-6 question-description">&nbsp;&nbsp; {{ $offShopClaim->claim_q1_description ?? '' }}</div>
            </div>

            <div class="row margin-top-20">
                <div class="col-md-5">Q2 : Has/ Will the incident been reported/ be reported to the
                    local police/ management office/ any other Authorit(ies)/ part(ies)?</div>
                <div class="col-md-7">: &nbsp;&nbsp; {{ $offShopClaim->claim_q2 ?? '' }}</div>
                <div class="col-md-5"></div>
                <div class="col-md-6 question-description">&nbsp;&nbsp; {{ $offShopClaim->claim_q2_description ?? '' }}</div>
            </div>

            <div class="row margin-top-20">
                <div class="col-md-5">Q3 : Have you lodged/ Are you going to lodge complaint/ claim
                    against any other part(ies) concerning the loss/damage? </div>
                <div class="col-md-7">: &nbsp;&nbsp; {{ $offShopClaim->claim_q3 ?? '' }}</div>
                <div class="col-md-5"></div>
                <div class="col-md-6 question-description">&nbsp;&nbsp; {{ $offShopClaim->claim_q3_description ?? '' }}</div>
            </div>

            <div class="row margin-top-20">
                <div class="col-md-5">Q4 : Are you the owner of damaged or lost item(s)/propert(ies)?</div>
                <div class="col-md-7">: &nbsp;&nbsp; {{ $offShopClaim->claim_q4 ?? '' }}</div>
            </div>

            <div class="row margin-top-20">
                <div class="col-md-5">Q5 : Are the Insured also insured with any other insurance for
                    the Insured propert(ies) as a result of the same incident? </div>
                <div class="col-md-7">: &nbsp;&nbsp; {{ $offShopClaim->claim_q5 ?? '' }}</div>
                <div class="col-md-5"></div>
                <div class="col-md-6 question-description">&nbsp;&nbsp; {{ $offShopClaim->claim_q5_description ?? '' }}</div>
            </div>


            <h4 class="text-center blue margin-top-40">Details of damaged or lost properties </h4>
            <div class="row">
                <div class="col-md-4">Total (HK$)</div>
                <div class="col-md-8">: &nbsp;&nbsp; 
                    <?php 
                    if(!empty($offShopClaim->loss_damage_total)){
                        $type = json_decode($offShopClaim->loss_damage_total);
                        foreach ($type as $value) { ?>
                            {{$value}} <br>
                       <?php }
                    }    
                    ?>    
                </div>
            </div>


            <h4 class="text-center blue margin-top-40">Details of other claim item(s)</h4>
            <div class="row">
                <div class="col-md-4">Total (HK$)</div>
                <div class="col-md-8">: &nbsp;&nbsp; 
                    <?php 
                    if(!empty($offShopClaim->loss_damage_item_total)){
                        $type = json_decode($offShopClaim->loss_damage_item_total);
                        foreach ($type as $value) { ?>
                            {{$value}} <br>
                       <?php }
                    }    
                    ?>    
                </div>
            </div>
            <div class="row margin-top-20">
                <div class="col-md-5">Total claimed amount</div>
                <div class="col-md-7">: &nbsp;&nbsp; {{ $offShopClaim->loss_damage_total_claimed_amount ?? '' }}</div>
            </div>


            <h4 class="text-center blue margin-top-40">Business Interruption</h4>
            <div class="row">
                <div class="col-md-4">Period of Business Interruption</div>
                <div class="col-md-8">: &nbsp;&nbsp; {{ $employeeClaim->business_interruption_period_from ?? '' }} <span class="red">to</span> {{ $employeeClaim->business_interruption_period_to ?? '' }}</div>
            </div>


            <h4 class="text-center blue margin-top-40">Details of fee / additional expenditure</h4>
            <div class="row">
                <div class="col-md-4">Total (HK$)</div>
                <div class="col-md-8">: &nbsp;&nbsp; 
                    <?php 
                    if(!empty($offShopClaim->business_interruption_item_total)){
                        $type = json_decode($offShopClaim->business_interruption_item_total);
                        foreach ($type as $value) { ?>
                            {{$value}} <br>
                       <?php }
                    }    
                    ?>    
                </div>
            </div>


            <h4 class="text-center blue margin-top-40">Loss of Money</h4>
            <div class="row">
                <div class="col-md-4">Reason of claim</div>
                <div class="col-md-8">: &nbsp;&nbsp; {{ $offShopClaim->loss_money_resons_claim ?? '' }}</div>
            </div>
            <div class="row">
                <div class="col-md-4">Total claimed amount</div>
                <div class="col-md-8">: &nbsp;&nbsp; {{ $offShopClaim->loss_money_claim_amount ?? '' }}</div>
            </div>



            <h4 class="text-center blue margin-top-40">Public Liability </h4>
            <h4 class="text-center blue margin-top-40">Damage to property of other(s)  </h4>
            <div class="row">
                <div class="col-md-4">Name of property owner</div>
                <div class="col-md-8">: &nbsp;&nbsp; {{ $offShopClaim->public_liability_owner_name ?? '' }}</div>
            </div>
            <div class="row">
                <div class="col-md-4">Details & extent of damage to Property of other(s):</div>
                <div class="col-md-8">: &nbsp;&nbsp; {{ $offShopClaim->public_liability_detaile_damage ?? '' }}</div>
            </div>
            
            
            <h4 class="text-center blue margin-top-40">Injury to other(s)</h4>
            <div class="row">
                <div class="col-md-4">Name of the injured</div>
                <div class="col-md-8">: &nbsp;&nbsp; {{ $offShopClaim->injured_name ?? '' }}</div>
            </div>
            <div class="row">
                <div class="col-md-4">Details & extent of injury of other(s)</div>
                <div class="col-md-8">: &nbsp;&nbsp; {{ $offShopClaim->injury_description ?? '' }}</div>
            </div>

            <div class="row margin-top-20">
                <div class="col-md-5">Q1 : Was/Were other wrongdoer(s) involved in the same incident?</div>
                <div class="col-md-7">: &nbsp;&nbsp; {{ $offShopClaim->laiabilityq1 ?? '' }}</div>
                <div class="col-md-5"></div>
                <div class="col-md-6 question-description">&nbsp;&nbsp; {{ $offShopClaim->laiabilityq1_description ?? '' }}</div>
            </div>

            <div class="row margin-top-20">
                <div class="col-md-5">Q2 : Has any communication, verbal or written, been made to you
                    by or on behalf of any injured or owner(s) of the damaged property?</div>
                <div class="col-md-7">: &nbsp;&nbsp; {{ $offShopClaim->laiabilityq2 ?? '' }}</div>
                <div class="col-md-5"></div>
                <div class="col-md-6 question-description">&nbsp;&nbsp; {{ $offShopClaim->laiabilityq2_description ?? '' }}</div>
            </div>

            <div class="row margin-top-20">
                <div class="col-md-5">Q3 : Has any step been taken to compromise or settle the
                    matter?</div>
                <div class="col-md-7">: &nbsp;&nbsp; {{ $offShopClaim->laiabilityq3 ?? '' }}</div>
                <div class="col-md-5"></div>
                <div class="col-md-6 question-description">&nbsp;&nbsp; {{ $offShopClaim->laiabilityq3_description ?? '' }}</div>
            </div>


            <h4 class="text-center blue margin-top-40">Personal Assault</h4>
            <div class="row">
                <div class="col-md-4">Name of injured employee</div>
                <div class="col-md-8">: &nbsp;&nbsp; {{ $offShopClaim->personal_assault_name ?? '' }}</div>
            </div>
            <div class="row">
                <div class="col-md-4">Name of Claimant</div>
                <div class="col-md-8">: &nbsp;&nbsp; {{ $offShopClaim->personal_assault_name_claimant ?? '' }}</div>
            </div>
            <div class="row">
                <div class="col-md-4">Reason of Claims</div>
                <div class="col-md-8">: &nbsp;&nbsp; {{ $offShopClaim->personal_assault_reason ?? '' }}</div>
            </div>


            <h4 class="text-center blue margin-top-40">Plate Glass</h4>
            <div class="row">
                <div class="col-md-4">Reason of claim</div>
                <div class="col-md-8">: &nbsp;&nbsp; {{ $offShopClaim->plate_glass_resons_claim ?? '' }}</div>
            </div>
            <div class="row">
                <div class="col-md-4">Total claimed amount</div>
                <div class="col-md-8">: &nbsp;&nbsp; {{ $offShopClaim->plate_glass_claim_amount ?? '' }}</div>
            </div>
            


            <h4 class="text-center blue margin-top-40">Employee's Compensation</h4>
            <div class="row">
                <div class="col-md-4">Date of injury</div>
                <div class="col-md-8">: &nbsp;&nbsp; {{ $offShopClaim->employee_compensation_injury_date ?? '' }}</div>
            </div>
            <div class="row">
                <div class="col-md-4">Description of incident</div>
                <div class="col-md-8">: &nbsp;&nbsp; {{ $offShopClaim->employee_compensation_incident_description ?? '' }}</div>
            </div>
            <div class="row">
                <div class="col-md-4">Sick leave</div>
                <div class="col-md-8">: &nbsp;&nbsp; {{ $employeeClaim->employee_compensation_sick_leave_from ?? '' }} <span class="red">to</span> {{ $employeeClaim->employee_compensation_sick_leave_to ?? '' }}</div>
            </div>
            <div class="row">
                <div class="col-md-4">Nature of injury</div>
                <div class="col-md-8">: &nbsp;&nbsp; {{ $offShopClaim->employee_compensation_injury_nature ?? '' }}</div>
            </div>
            

            <h4 class="text-center blue margin-top-40">Others</h4>
            <div class="row">
                <div class="col-md-4">Reason of claim</div>
                <div class="col-md-8">: &nbsp;&nbsp; {{ $offShopClaim->resons_claim ?? '' }}</div>
            </div>
            <div class="row">
                <div class="col-md-4">Total claimed amount</div>
                <div class="col-md-8">: &nbsp;&nbsp; {{ $offShopClaim->claim_amount ?? '' }}</div>
            </div>

        </div>
    </div>
</div>

@endsection