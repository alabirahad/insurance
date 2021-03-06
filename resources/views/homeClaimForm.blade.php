<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/jpg" href="{{ asset('assets/img/logo.png') }}" />
    <title>Home Claim Form</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap.min.css') }}" media="all" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/fontawesome.min.css') }}" media="all" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
        integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.css"
        integrity="sha512-X/RSQYxFb/tvuz6aNRTfKXDnQzmnzoawgEQ4X8nZNftzs8KFFH23p/BA6D2k0QCM4R0sY1DEy9MIY9b3fwi+bg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Owl carousel CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/owl.carousel.css') }}">
    <!-- Main style CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}" media="all" />
</head>

<body>
    <div class="container full-content">
        <header>
            <div class="row">
                <div class="col-md-2 logo">
                    <img src="{{ asset('assets/img/logo2.png') }}" alt="" />
                </div>
                <div class="col-md-8 text-center">
                    <h2 class="blue margin-top-20">Home Claim Form</h2>
                </div>
                <div class="col-md-2 right-nav">
                    <ul class="nav">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Active</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Link</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Link</a>
                        </li>
                    </ul>
                </div>
            </div>

        </header>

        <div class="content-body">
            <div class="row tab-heading margin-top-40">
                <div class="tab-heading-item">
                    <button data-id="policyInfo" class="tab-heading-btn tab-heading-btn-active">
                        Policy Information
                    </button>
                </div>
                <div class="tab-heading-item">
                    <button data-id="contactInfo" class="tab-heading-btn">
                        Contact Information
                    </button>
                </div>
                <div class="tab-heading-item">
                    <button data-id="claimsInfo" class="tab-heading-btn">
                        Claims Information 
                    </button>
                </div>
                <div class="tab-heading-item">
                    <button data-id="declarationAuthorization" class="tab-heading-btn">
                        Declaration & Authorization
                    </button>
                </div>
                <div class="tab-heading-item">
                    <button data-id="endSection" class="tab-heading-btn">
                        End Section
                    </button>
                </div>
            </div>

            <?php
            $ses_msg = Session::has('success');
            if (!empty($ses_msg)) {
                ?>
                <div class="alert alert-success alert-dismissable">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
                    <p><i class="fa fa-bell-o fa-fw"></i> <?php echo Session::get('success'); ?></p>
                </div>
                <?php
            }// 
            $ses_msg = Session::has('error');
            if (!empty($ses_msg)) {
                ?>
                <div class="alert alert-danger alert-dismissable">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
                    <p><i class="fa fa-bell-o fa-fw"></i> <?php echo Session::get('error'); ?></p>
                </div>
                <?php
            }// ?>
        

            <form id="userCreateForm" method="POST" enctype="multipart/form-data" action="/home-claim-form/store">
                @csrf
                <div class="tab-content margin-top-20">
                    <!-- privecy form -->
                    <div id="policyInfo" class="tab-content-single">
                        <h3 class="form-heading margin-top-20 blue">Policy Details</h3>
                        <div class="form-detailss margin-top-20">

                            <div class="row form-single margin-top-10">
                                <div class="col-md-4">Policy No.</div>
                                <div class="col-md-5">
                                    <input type="text" name="policy_no" placeholder="XXX/99999/99">
                                    <span class="text-danger">{{ $errors->first('policy_no') }}</span>
                                </div>
                            </div>

                            <div class="row form-single margin-top-10">
                                <div class="col-md-4">Name of policy holder:</div>
                                <div class="col-md-5">
                                    <input type="text" name="policy_holder_name" placeholder="Mr. X">
                                    <span class="text-danger">{{ $errors->first('policy_holder_name') }}</span>
                                </div>
                            </div>

                            <div class="row form-single margin-top-10">
                                <div class="col-md-4">Name of the insured:</div>
                                <div class="col-md-5">
                                    <input type="text" name="insured_name" placeholder="">
                                    <span class="text-danger">{{ $errors->first('insured_name') }}</span>
                                </div>
                            </div>

                            <div class="row form-single margin-top-10">
                                <div class="col-md-4">Name of the claimant:</div>
                                <div class="col-md-5">
                                    <input type="text" name="claimant_name" placeholder="">
                                    <span class="text-danger">{{ $errors->first('claimant_name') }}</span>
                                </div>
                            </div>

                            <div class="row form-single margin-top-10">
                                <div class="col-md-12 red">Important: This eClaim form should be submitted by the
                                    Policyholder/Insured Person. </div>
                            </div>

                        </div>
                    </div>
                    <!-- privecy form -->

                    <!-- contact Information -->
                    <div id="contactInfo" class="tab-content-single dispaly-none ">
                        <h3 class="form-heading margin-top-20 blue">Contact Information</h3>
                        <div class="form-detailss margin-top-20">

                            <div class="row form-single margin-top-10">
                                <div class="col-md-4">Name of contact person:</div>
                                <div class="col-md-5">
                                    <input type="text" name="contact_person_name" placeholder="Mr. X">
                                    <span class="text-danger">{{ $errors->first('contact_person_name') }}</span>
                                </div>
                            </div>

                            <div class="row form-single margin-top-10">
                                <div class="col-md-4">Email address:</div>
                                <div class="col-md-5">
                                    <input type="text" name="contact_person_email" placeholder="x@gmail.com">
                                    <span class="text-danger">{{ $errors->first('contact_person_email') }}</span>
                                </div>
                            </div>

                            <div class="row form-single margin-top-10">
                                <div class="col-md-4">Mobile no.:</div>
                                <div class="col-md-5">
                                    <input type="text" name="contact_person_mobile" placeholder="">
                                    <span class="text-danger">{{ $errors->first('contact_person_mobile') }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- contact Information -->

                    {{-- claim Information --}}
                    <div id="claimsInfo" class="tab-content-single dispaly-none">
                        <h3 class="form-heading margin-top-20 blue">Claim Information</h3>
                        <div class="form-detailss margin-top-20">

                            <div class="row form-single margin-top-10">
                                <div class="col-md-4">Select claim types</div>
                                <div class="col-md-5">
                                    <input type="checkbox" name="claim_types[]" value="loss">Loss / damage to Home /
                                    Household Content / Home Buildings <br>
                                    <input type="checkbox" name="claim_types[]" value="personal">Personal / Public Liability
                                    <br>
                                    <input type="checkbox" name="claim_types[]" value="others">Others. <br>
                                    <span class="text-danger">{{ $errors->first('claim_types') }}</span>
                                </div>
                            </div>

                            <div class="row form-single margin-top-10">
                                <div class="col-md-4">Date & time of accident :</div>
                                <div class="col-md-5">
                                    <input type="date" name="accident_date" placeholder="">
                                    <span class="text-danger">{{ $errors->first('accident_date') }}</span>
                                </div>
                            </div>

                            <div class="row form-single margin-top-10">
                                <div class="col-md-4">Location of incident :</div>
                                <div class="col-md-5">
                                    <input type="text" name="incident_location" placeholder="">
                                    <span class="text-danger">{{ $errors->first('incident_location') }}</span>
                                </div>
                            </div>

                            <div class="row form-single margin-top-10">
                                <div class="col-md-4">Description of incident:</div>
                                <div class="col-md-5">
                                    <textarea id="incident_description" name="incident_description" rows="4"></textarea>
                                    <span class="text-danger">{{ $errors->first('incident_description') }}</span>
                                    <!-- <input type="text" name="incident_description" placeholder=""> -->
                                </div>
                            </div>

                            <div class="row form-single margin-top-20">
                                <div class="col-md-4">Q1 : Is there any sign of forcible entry or exit at the premises
                                    in case of theft or burglary loss? </div>
                                <div class="col-md-5">
                                    <input type="radio" id="claim_q1" name="claim_q1" value="yes"> Yes, please state how did the culprit(s)
                                    enter the premises. <br>
                                    <textarea name="claim_q1_description" rows="4" class=""></textarea><br>
                                    <span class="text-danger">{{ $errors->first('claim_q1_description') }}</span>
                                    
                                    <input type="radio" name="claim_q1" value="no">No <br>
                                    <input type="radio" name="claim_q1" value="not_applicable">Not applicable <br>
                                    <span class="text-danger">{{ $errors->first('claim_q1') }}</span>
                                </div>
                            </div>

                            <div class="row form-single margin-top-20">
                                <div class="col-md-4">Q2 : Has/ Will the incident been reported/ be reported to the
                                    local police/ management office/ any other responsible party? </div>
                                <div class="col-md-5">
                                    <input type="radio" id="claim_q2" name="claim_q2" value="yes"> Yes, please state details (e.g. police
                                    report number, etc) <br>
                                    <textarea name="claim_q2_description" rows="4" class=""></textarea><br>
                                    <span class="text-danger">{{ $errors->first('claim_q2_description') }}</span>
                                    <input type="radio" name="claim_q2" value="no">No <br>
                                    <span class="text-danger">{{ $errors->first('claim_q2') }}</span>
                                </div>
                            </div>

                            <div class="row form-single margin-top-20">
                                <div class="col-md-4">Q3 : Have you lodged/ Are you going to lodge complaint/ claim
                                    against any other part(ies) concerning the loss/damage? </div>
                                <div class="col-md-5">
                                    <input type="radio" id="claim_q3" name="claim_q3" value="yes"> Yes, please state details<br>
                                    <textarea name="claim_q3_description" rows="4" class=""></textarea><br>
                                    <span class="text-danger">{{ $errors->first('claim_q3_description') }}</span>
                                    <input type="radio" name="claim_q3" value="no">No <br>
                                    <span class="text-danger">{{ $errors->first('claim_q3') }}</span>
                                </div>
                            </div>

                            <div class="row form-single margin-top-20">
                                <div class="col-md-4">Q4 : Are you the owner of damaged or lost item(s)/propert(ies)?
                                </div>
                                <div class="col-md-5">
                                    <input type="radio" name="claim_q4" value="yes"> Yes<br>
                                    <input type="radio" name="claim_q4" value="no">No <br>
                                    <span class="text-danger">{{ $errors->first('claim_q4') }}</span>
                                </div>
                            </div>

                            <div class="row form-single margin-top-20">
                                <div class="col-md-4">Q5 : Are you the occupier of the Insured Premises?</div>
                                <div class="col-md-5">
                                    <input type="radio" name="claim_q5" value="yes"> Yes<br>
                                    <input type="radio" name="claim_q5" value="no">No <br>
                                    <span class="text-danger">{{ $errors->first('claim_q5') }}</span>
                                </div>
                            </div>

                            <div class="row form-single margin-top-20">
                                <div class="col-md-4">Q6 : Were the insured premises being occupied at the time of
                                    incident?</div>
                                <div class="col-md-5">
                                    <input type="radio" name="claim_q6" value="yes"> Yes<br>
                                    <input type="radio" name="claim_q6" value="no">No <br>
                                    <span class="text-danger">{{ $errors->first('claim_q6') }}</span>
                                </div>
                            </div>

                            <div class="row form-single margin-top-20">
                                <div class="col-md-4">Q7 : Is/Are the Insured propert(ies) subject to any Hire
                                    Purchase or Loan Agreement?</div>
                                <div class="col-md-5">
                                    <input type="radio" id="claim_q7" name="claim_q7" value="yes"> Yes, please state details<br>
                                    <textarea name="claim_q7_description" rows="4" class=""></textarea><br>
                                    <span class="text-danger">{{ $errors->first('claim_q7_description') }}</span>
                                    <input type="radio" name="claim_q7" value="no">No <br>
                                    <span class="text-danger">{{ $errors->first('claim_q7') }}</span>
                                </div>
                            </div>

                            <div class="row form-single margin-top-20">
                                <div class="col-md-4">Q8 : Are the Insured also insured with any other insurance for
                                    the Insured propert(ies) as a result of the same incident? </div>
                                <div class="col-md-5">
                                    <input type="radio" id="claim_q8" name="claim_q8" value="yes"> Yes, please state details<br>
                                    <textarea name="claim_q8_description" rows="4" class=""></textarea><br>
                                    <span class="text-danger">{{ $errors->first('claim_q8_description') }}</span>
                                    <input type="radio" name="claim_q8" value="no">No <br>
                                    <span class="text-danger">{{ $errors->first('claim_q8') }}</span>

                                </div>
                            </div>

                        </div>

                        <h3 class="form-heading margin-top-20 blue">Details of damaged or lost properties</h3>
                        <div class="form-detailss margin-top-20">
                            <table class="table table-bordered">
                                <thead>
                                    <th>Serial</th>
                                    <th>Description of property</th>
                                    <th>
                                        Date of purchase or installation
                                        (DDMMYYYY)
                                    </th>
                                    <th>
                                        Original
                                        purchase price
                                        (HK$)
                                    </th>
                                    <th>
                                        Repair / Replacement cost (if applicable)
                                        (HK$)
                                    </th>
                                    <th>
                                        Claim amount
                                        (HK$)
                                    </th>
                                    <th>
                                        Total
                                        (HK$)
                                    </th>
                                    <th>
                                        Acction
                                    </th>
                                </thead>
                                <tbody id="lossDamageTbody">
                                    <tr id="1">
                                        <td class="text-center initial-serial">1</td>
                                        <td>
                                            <input type="text" name="loss_damage_property_description[]" placeholder="">
                                            <span class="text-danger">{{ $errors->first('loss_damage_property_description') }}</span>
                                        </td>
                                        <td>
                                            <input type="date" name="loss_damage_purchage_date[]" placeholder="">
                                            <span class="text-danger">{{ $errors->first('loss_damage_purchage_date') }}</span>
                                        </td>
                                        <td>
                                            <input type="text" name="loss_damage_purchage_price[]" placeholder="">
                                            <span class="text-danger">{{ $errors->first('loss_damage_purchage_price') }}</span>
                                        </td>
                                        <td>
                                            <input type="text" name="loss_damage_repair_cost[]" placeholder="">
                                            <span class="text-danger">{{ $errors->first('loss_damage_repair_cost') }}</span>
                                        </td>
                                        <td>
                                            <input type="text" name="loss_damage_claim_amount[]" placeholder="">
                                            <span class="text-danger">{{ $errors->first('loss_damage_claim_amount') }}</span>
                                        </td>
                                        <td>
                                            <input type="text" name="loss_damage_total[]" placeholder="">
                                            <span class="text-danger">{{ $errors->first('loss_damage_total') }}</span>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-success add-btn">Add</button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>

                            <div class="row form-single margin-top-20">
                                <div class="col-md-4">Upload (if any applicable) :</div>
                                <div class="col-md-5">
                                    <input type="file" name="loss_damage_uploaded_file[]" placeholder="">
                                    <span class="text-danger">{{ $errors->first('loss_damage_uploaded_file') }}</span>
                                </div>
                            </div>
                        </div>

                        <h3 class="form-heading margin-top-20 blue">Damage to Property of other(s)</h3>
                        <div class="form-detailss margin-top-20">
                            <div class="row form-single margin-top-10">
                                <div class="col-md-4">Name of the property owner :</div>
                                <div class="col-md-5">
                                    <input type="text" name="property_owner_name" placeholder="">
                                    <span class="text-danger">{{ $errors->first('property_owner_name') }}</span>
                                </div>
                            </div>

                            <div class="row form-single margin-top-10">
                                <div class="col-md-4">Details & extent of damage to Property of other(s): </div>
                                <div class="col-md-5">
                                    <textarea id="damage_property_description" name="damage_property_description"
                                        rows="4"></textarea>
                                        <span class="text-danger">{{ $errors->first('damage_property_description') }}</span>
                                </div>
                            </div>

                        </div>

                        <h3 class="form-heading margin-top-20 blue">Injury to other(s)</h3>
                        <div class="form-detailss margin-top-20">
                            <div class="row form-single margin-top-10">
                                <div class="col-md-4">Name of the injured:</div>
                                <div class="col-md-5">
                                    <input type="text" name="injured_name" placeholder="">
                                    <span class="text-danger">{{ $errors->first('injured_name') }}</span>
                                </div>
                            </div>

                            <div class="row form-single margin-top-10">
                                <div class="col-md-4">Details & extent of injury of other(s): </div>
                                <div class="col-md-5">
                                    <textarea id="injury_description" name="injury_description" rows="4"></textarea>
                                    <span class="text-danger">{{ $errors->first('injury_description') }}</span>
                                </div>
                            </div>

                            <div class="row form-single margin-top-20">
                                <div class="col-md-4">Q1 : Was/Were other wrongdoer(s) involved in the same incident?
                                </div>
                                <div class="col-md-5">
                                    <input type="radio" name="laiabilityq1" value="yes"> Yes, please state the name(s),
                                    address(es) & telephone No.(s) of the wrongdoer(s)<br>
                                    <textarea name="laiabilityq1_description" rows="4" class=""></textarea><br>
                                    <span class="text-danger">{{ $errors->first('laiabilityq1_description') }}</span>
                                     <input type="radio" name="laiabilityq1" value="no">No <br>
                                    <span class="text-danger">{{ $errors->first('laiabilityq1') }}</span>
                                </div>
                            </div>

                            <div class="row form-single margin-top-20">
                                <div class="col-md-4">Q2 : Has any communication, verbal or written, been made to you
                                    by or on behalf of any injured or owner(s) of the damaged property? </div>
                                <div class="col-md-5">
                                    <input type="radio" name="laiabilityq2" value="yes"> Yes, please give particulars
                                    (any written communication being received must be forwarded to us immediately unanswered
                                    for our handling)<br>
                                    <textarea name="laiabilityq2_description" rows="4" class=""></textarea><br>
                                    <span class="text-danger">{{ $errors->first('laiabilityq2_description') }}</span>
                                    <input type="radio" name="laiabilityq2" value="no">No <br>
                                    <span class="text-danger">{{ $errors->first('laiabilityq2') }}</span>
                                </div>
                            </div>

                            <div class="row form-single margin-top-20">
                                <div class="col-md-4">Q3 : Has any step been taken to compromise or settle the
                                    matter?</div>
                                <div class="col-md-5">
                                    <input type="radio" name="laiabilityq3" value="yes"> Yes, please state the nature
                                    and by whom it was carried out with any compensation amount and withhold any further
                                    communication with any involved part(ies).<br>
                                    <textarea name="laiabilityq3_description" rows="4" class=""></textarea><br>
                                    <span class="text-danger">{{ $errors->first('laiabilityq3_description') }}</span>
                                    <input type="radio" name="laiabilityq3" value="no">No <br>
                                    <span class="text-danger">{{ $errors->first('laiabilityq3') }}</span>

                                </div>
                            </div>


                            <div class="row form-single margin-top-20">
                                <div class="col-md-4">State all Name(s), address(es) and telephone No.(s) of witness(es) of the incident, if any.</div>
                                <div class="col-md-5">
                                    <textarea id="laiability_state_contact" name="laiability_state_contact"
                                        rows="4"></textarea>
                                        <span class="text-danger">{{ $errors->first('laiability_state_contact') }}</span>
                                </div>
                            </div>


                            <div class="row form-single margin-top-20">
                                <div class="col-md-4">Upload (if any applicable)</div>
                                <div class="col-md-5">
                                    <input type="file" name="laiability_injured_file" id="">
                                    <span class="text-danger">{{ $errors->first('laiability_injured_file') }}</span>
                                </div>
                            </div>


                        </div>

                        <h3 class="form-heading margin-top-20 blue">Others</h3>
                        <div class="form-detailss margin-top-20">
                            <div class="row form-single margin-top-10">
                                <div class="col-md-4">Reason of claim:</div>
                                <div class="col-md-5">
                                    <textarea id="others_resons_claim" name="others_resons_claim" rows="4"></textarea>
                                    <span class="text-danger">{{ $errors->first('others_resons_claim') }}</span>
                                </div>
                            </div>

                            <div class="row form-single margin-top-10">
                                <div class="col-md-4">Total claimed amount:</div>
                                <div class="col-md-5">
                                    <input type="text" name="others_claim_amount" placeholder="">
                                    <span class="text-danger">{{ $errors->first('others_claim_amount') }}</span>
                                </div>
                            </div>


                            <div class="row form-single margin-top-20">
                                <div class="col-md-4">Upload (if any applicable)</div>
                                <div class="col-md-5">
                                    <input type="file" name="others_file" id="">
                                    <span class="text-danger">{{ $errors->first('others_file') }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- claim Information --}}

                    <!-- declaration -->
                    <div id="declarationAuthorization" class="tab-content-single dispaly-none">
                        <div class="form-detailss margin-top-20">
                            <div class="row form-single margin-top-10">
                                <div class="col-md-1">1 .</div>
                                <div class="col-md-10">
                                    I/We declare that the above information is in all respect true and complete to the best
                                    of my/ our knowledge and belief;
                                </div>
                            </div>

                            <div class="row form-single margin-top-10">
                                <div class="col-md-1">2 .</div>
                                <div class="col-md-10">
                                    It is agreed that upon request by xxxxxxx, I/We shall make a statutory declaration to
                                    re-affirm the genuineness of all information contained in this claim submission; and
                                </div>
                            </div>

                            <div class="row form-single margin-top-10">
                                <div class="col-md-1">3 .</div>
                                <div class="col-md-10">
                                    I/We believe that the facts stated in this claim form are true and correct. I
                                    acknowledge that the Insurers will rely upon the information supplied by me/ the
                                    policyholder/ the insured person, which I verily and honestly believe to be true and
                                    correct, in prosecuting or defending any claims or proceedings in future, and the
                                    signatory/ the policyholders/ insured person under this policy, if so required by the
                                    Insurers, will be asked and are bound to sign any court documents on the basis of
                                    information provided herein.
                                </div>
                            </div>

                            <div class="row form-single margin-top-10">
                                <div class="col-md-11">
                                    <input type="checkbox" name="agree" value="yes"> Yes, please give particulars (any
                                    written communication being received must be forwarded to us immediately unanswered for
                                    our handling)<br>
                                    <span class="text-danger">{{ $errors->first('agree') }}</span>
                                </div>
                            </div>

                        </div>
                    </div>
                    <!-- declaration -->

                    <!-- end -->
                    <div id="endSection" class="tab-content-single dispaly-none">
                        <div class="form-detailss margin-top-20">
                            <div class="row form-single margin-top-10">
                                <div class="col-md-4">Name of Applicant:</div>
                                <div class="col-md-5">
                                    <input type="text" name="applicant_name" placeholder="">
                                    <span class="text-danger">{{ $errors->first('applicant_name') }}</span>
                                </div>
                            </div>
                            <div class="row form-single margin-top-10">
                                <div class="col-md-4">Submission Date :</div>
                                <div class="col-md-5">
                                    <input type="date" name="submission_date" placeholder="">
                                    <span class="text-danger">{{ $errors->first('submission_date') }}</span>
                                </div>
                            </div>
                        </div>

                        <div class="margin-top-20 text-center">
                            <button type="submit" class="btn btn-outline-danger employee-submit">Save</button>
                        </div>
                    </div>
                    <!-- end -->
                </div>

                <div class="tab-content-prev-next row">
                    <div class="col-md-6 text-left"><button id="prevbtn" type="button">Prev</button></div>
                    <div class="col-md-6 text-right"><button id="nextbtn" type="button">Next</button></div>
                    <div class="col-md-6"></div>
                </div>
            </form>

        </div>

        <footer>
            <div class="form-footer margin-top-40">
                <div class="copyright">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-8"></div>
                            <div class="col-md-4">
                                All Rights Reserved. Copyright &copy; {{ date('Y') }} | MSIG Insurance (Hong Kong)
                                Limited
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </footer>
    </div>

    <!-- jquery main JS -->
    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <!-- Bootstrap JS -->
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/fontawesome.min.js') }}"></script>
    <!-- owl carousel JS -->
    <script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/js/all.min.js"
        integrity="sha512-fzff82+8pzHnwA1mQ0dzz9/E0B+ZRizq08yZfya66INZBz86qKTCt9MLU0NCNIgaMJCgeyhujhasnFUsYMsi0Q=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js"
        integrity="sha512-9CWGXFSJ+/X0LWzSRCZFsOPhSfm6jbnL+Mpqo0o8Ke2SYr8rCTqb4/wGm+9n13HtDE1NQpAEOrMecDZw4FXQGg=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script>
        $(document).on("click", ".tab-heading-btn", function() {
            var id = $(this).data('id');
            // alert(id);
            $('.tab-heading-btn').removeClass('tab-heading-btn-active');
            $(this).addClass('tab-heading-btn-active');
            $(".tab-content-single").addClass('dispaly-none');
            $("#" + id).removeClass('dispaly-none');
        });

        $(document).on("click", "#nextbtn", function() {
            $('.tab-heading-btn-active').parent().next('div').find('button').trigger('click');
        });

        $(document).on("click", "#prevbtn", function() {
            $('.tab-heading-btn-active').parent().prev('div').find('button').trigger('click');
        });


        $(document).ready(function() {
            //row add
            var rowId = 1;
            $('.add-btn').on('click', function() {
                $('#lossDamageTbody').append(`<tr id="">
                                    <td class="row-index text-center new-serial"></td> 
                                    <td>
                                        <input type="text" name="loss_damage_property_description[]" placeholder="">
                                    </td>
                                    <td>
                                        <input type="text" name="loss_damage_purchage_date[]" placeholder="">
                                    </td>
                                    <td>
                                        <input type="text" name="loss_damage_purchage_price[]" placeholder="">
                                    </td>
                                    <td>
                                        <input type="text" name="loss_damage_repair_cost[]" placeholder="">
                                    </td>
                                    <td>
                                        <input type="text" name="loss_damage_claim_amount[]" placeholder="">
                                    </td>
                                    <td>
                                        <input type="text" name="loss_damage_total[]" placeholder="">
                                    </td>
                                    <td>
                                        <button class="btn btn-danger remove"type="button">Remove</button>
                                    </td>
                                </tr>`);
                slCounter();
            });
            //row remove
            $(document).on('click', '.remove', function() {
                $(this).parent().parent().remove();
                slCounter();
            });


            function slCounter() {
                var sl = 0;
                $('.initial-serial').each(function() {
                    sl++;
                    $(this).text(sl);
                });
                $('.new-serial').each(function() {
                    sl++;
                    $(this).text(sl);
                });
            }
        });
    </script>
    @stack(
    'custom-js'
    )
</body>

</html>
