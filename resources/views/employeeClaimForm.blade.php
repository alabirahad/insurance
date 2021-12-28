<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/jpg" href="{{ asset('assets/img/logo.png') }}" />
    <title>Employee Claim Form</title>
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
                    <h2 class="blue margin-top-20">Employee Claim Form</h2>
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

            <form id="userCreateForm" method="POST" enctype="multipart/form-data" action="/employee-claim-form/store">
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

                    <!-- Claims Information -->
                    <div id="claimsInfo" class="tab-content-single dispaly-none">
                        <h3 class="form-heading margin-top-20 blue">Claim Information</h3>
                        <div class="form-detailss margin-top-20">

                            <div class="row form-single margin-top-10">
                                <div class="col-md-4">Are the claimant/Insured person also insured with any other insurance for the Insured person as a result of the same incident? </div>
                                <div class="col-md-5">
                                    <input type="radio" name="claimant_person_injured" value="yes">Yes, please state details<br>
                                    <textarea name="claimant_person_injured_description" rows="4" class=""></textarea><br>
                                    <span class="text-danger">{{ $errors->first('claimant_person_injured_description') }}</span>
                                    <input type="radio" name="claimant_person_injured" value="no">No<br>
                                    <span class="text-danger">{{ $errors->first('claimant_person_injured') }}</span>
                                </div>
                            </div>

                            <div class="row form-single margin-top-10">
                                <div class="col-md-4">Select claim types</div>
                                <div class="col-md-5">
                                    <input type="checkbox" name="claim_types[]" value="employee_compensation">Employee's
                                    Compensation (Benefit 1) <br>
                                    <input type="checkbox" name="claim_types[]" value="personal_accident">Personal Accident (Benefit 2)
                                    <br>
                                    <input type="checkbox" name="claim_types[]" value="repatriation">Repatriation (Benefit 3)<br>
                                    <input type="checkbox" name="claim_types[]" value="clinical_expense">Clinical Expenses (Benefit 4)<br>
                                    <input type="checkbox" name="claim_types[]" value="surgical_injury">Surgical & Hospitalization Expense (Benefit 5) <br>
                                    <input type="checkbox" name="claim_types[]" value="public_liability">Dental Expenses (Benefit 6)
                                    <br>
                                    <input type="checkbox" name="claim_types[]" value="cash_allowance">Loss of Services Cash Allowance (Benefit 7) <br>
                                    <input type="checkbox" name="claim_types[]" value="replacement">Replacement of Helper Expenses (Benefit 8) <br>
                                    <span class="text-danger">{{ $errors->first('claim_types') }}</span>
                                </div>
                            </div>

                        </div>

                        <h3 class="form-heading margin-top-20 blue">Employee's Compensation (Benefit 1) </h3>
                        <div class="form-detailss margin-top-20">
                            <h3 class="form-heading margin-top-20 blue">Important Notes </h3>
                            <div class="row form-single margin-top-10">
                                <div class="col-md-12">
                                    <span class="blue">1.</span>  Lodge your claim online with your supporting
                                    document(s) and a copy of the
                                    completed Notice of Accident ( <span class="red"> download here</span>)
                                    including Notice of Accident Form 2, Form
                                    2A or Form 2B, which is applicable.
                                </div>
                                <div class="col-md-12 margin-top-20">
                                    <span class="blue">2.</span>  <span class="red">The Employer of
                                        Insured person MUST notify the Labour Department</span> within 14
                                    days (in case of injury) or 7 days (in case of death) after the accident comes to
                                    knowledge. Please access to Employees' Compensation Section in the Labour Department's
                                    website <span
                                        class="red">https://www.labour.gov.hk/eng/public/content2_7.htm</span>
                                    for more details.
                                </div>
                                <div class="col-md-12 margin-top-20">
                                    <span class="blue">3.</span>  Immediate make a report to the
                                    police for a traffic accident, robbery, or any case involving criminal acts and upload a
                                    copy of police report.
                                </div>
                            </div>

                            <div class="form-detailss margin-top-20">

                                <div class="row form-single margin-top-10">
                                    <div class="col-md-4">Date of injury:</div>
                                    <div class="col-md-5">
                                        <input type="date" name="employee_compensation_injury_date" placeholder="">
                                        <span class="text-danger">{{ $errors->first('employee_compensation_injury_date') }}</span>
                                    </div>
                                </div>

                                <div class="row form-single margin-top-10">
                                    <div class="col-md-4">Description of incident:</div>
                                    <div class="col-md-5">
                                        <textarea id="employee_compensation_incident_description" name="employee_compensation_incident_description"
                                            rows="4"></textarea>
                                            <span class="text-danger">{{ $errors->first('employee_compensation_incident_description') }}</span>
                                    </div>
                                </div>
                                <div class="row form-single margin-top-10">
                                    <div class="col-md-4">Sick leave: </div>
                                    <div class="col-md-5">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="">From</span>
                                            </div>
                                            <input type="date" name="employee_compensation_sick_leave_from" class="form-control">
                                            <span class="text-danger">{{ $errors->first('employee_compensation_sick_leave_from') }}</span>
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="">To</span>
                                            </div>
                                            <input type="date" name="employee_compensation_sick_leave_to" class="form-control">
                                            <span class="text-danger">{{ $errors->first('employee_compensation_sick_leave_to') }}</span>
                                        </div>
                                    </div>
                                </div>

                                <div class="row form-single margin-top-10">
                                    <div class="col-md-4">Nature of injury:</div>
                                    <div class="col-md-5">
                                        <textarea id="employee_compensation_injury_nature" name="employee_compensation_injury_nature"
                                            rows="4"></textarea>
                                            <span class="text-danger">{{ $errors->first('employee_compensation_injury_nature') }}</span>
                                    </div>
                                </div>

                                <div class="row form-single margin-top-20">
                                    <div class="col-md-4">Upload (if any applicable) :</div>
                                    <div class="col-md-5">
                                        <input type="file" name="employee_compensation_uploaded_file[]" placeholder="">
                                        <span class="text-danger">{{ $errors->first('employee_compensation_uploaded_file') }}</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <h3 class="form-heading margin-top-20 blue">Personal Accident (Benefit 2) </h3>
                        <div class="form-detailss margin-top-20">

                            <div class="row form-single margin-top-10">
                                <div class="col-md-4">Date of injury:</div>
                                <div class="col-md-5">
                                    <input type="date" name="personal_accident_injury_date" placeholder="">
                                    <span class="text-danger">{{ $errors->first('personal_accident_injury_date') }}</span>
                                </div>
                            </div>

                            <div class="row form-single margin-top-10">
                                <div class="col-md-4">Description of incident:</div>
                                <div class="col-md-5">
                                    <textarea id="personal_accident_incident_description" name="personal_accident_incident_description"
                                        rows="4"></textarea>
                                        <span class="text-danger">{{ $errors->first('personal_accident_incident_description') }}</span>
                                </div>
                            </div>
                            <div class="row form-single margin-top-10">
                                <div class="col-md-4">Sick leave: </div>
                                <div class="col-md-5">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="">From</span>
                                        </div>
                                        <input type="date" name="personal_accident_sick_leave_from" class="form-control">
                                        <span class="text-danger">{{ $errors->first('personal_accident_sick_leave_from') }}</span>
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="">To</span>
                                        </div>
                                        <input type="date" name="personal_accident_sick_leave_to" class="form-control">
                                        <span class="text-danger">{{ $errors->first('personal_accident_sick_leave_to') }}</span>
                                    </div>
                                </div>
                            </div>

                            <div class="row form-single margin-top-10">
                                <div class="col-md-4">Nature of injury:</div>
                                <div class="col-md-5">
                                    <textarea id="personal_accident_injury_nature" name="personal_accident_injury_nature"
                                        rows="4"></textarea>
                                        <span class="text-danger">{{ $errors->first('personal_accident_injury_nature') }}</span>
                                </div>
                            </div>

                            <div class="row form-single margin-top-10">
                                <div class="col-md-4">Is the Insured person fully recovered? </div>
                                <div class="col-md-5">
                                    <input type="radio" name="personal_accident_recoverd" value="yes">Yes<br>
                                    <input type="radio" name="personal_accident_recoverd" value="no">No, please state details, e.g. what medical treatment(s) will be received & how long the sick leave being granted:<br>
                                    <textarea name="personal_accident_recoverd_description" rows="4" class=""></textarea><br>
                                    <span class="text-danger">{{ $errors->first('personal_accident_recoverd_description') }}</span>
                                    
                                    <span class="text-danger">{{ $errors->first('personal_accident_recoverd') }}</span>
                                </div>
                            </div>

                            <div class="row form-single margin-top-20">
                                <div class="col-md-4">Upload (if any applicable) :</div>
                                <div class="col-md-5">
                                    <input type="file" name="personal_accident_uploaded_file" placeholder="">
                                    <span class="text-danger">{{ $errors->first('personal_accident_uploaded_file') }}</span>
                                </div>
                            </div>
                        </div>

                        <h3 class="form-heading margin-top-20 blue">Repatriation (Benefit 3) </h3>
                        <div class="form-detailss margin-top-20">
                            

                            <div class="row form-single margin-top-10">
                                <div class="col-md-4">Date of Death / Serious Sickness / Injury:</div>
                                <div class="col-md-5">
                                    <input type="date" name="repatriation_injury_date" placeholder="">
                                    <span class="text-danger">{{ $errors->first('repatriation_injury_date') }}</span>
                                </div>
                            </div>


                            <div class="row form-single margin-top-10">
                                <div class="col-md-4">Description of incident:</div>
                                <div class="col-md-5">
                                    <textarea id="repatriation_incident_description" name="repatriation_incident_description"
                                        rows="4"></textarea>
                                        <span class="text-danger">{{ $errors->first('repatriation_incident_description') }}</span>
                                </div>
                            </div>
                            <div class="row form-single margin-top-10">
                                <div class="col-md-4">Reasons of Injury:</div>
                                <div class="col-md-5">
                                    <textarea id="repatriation_reason" name="repatriation_reason"
                                        rows="4"></textarea>
                                        <span class="text-danger">{{ $errors->first('repatriation_reason') }}</span>
                                </div>
                            </div>

                            <div class="row form-single margin-top-10">
                                <div class="col-md-4">Is the Insured person fully recovered? </div>
                                <div class="col-md-5">
                                    <input type="radio" name="repatriation_recoverd" value="yes">Yes<br>
                                    <input type="radio" name="repatriation_recoverd" value="no">No, please state details, e.g. what medical treatment(s) will be received & how long the sick leave being granted:<br>
                                    <textarea name="repatriation_recoverd_description" rows="4" class=""></textarea><br>
                                    <span class="text-danger">{{ $errors->first('repatriation_recoverd_description') }}</span>
                                    
                                    <span class="text-danger">{{ $errors->first('repatriation_recoverd') }}</span>
                                </div>
                            </div>

                            <div class="row form-single margin-top-20">
                                <div class="col-md-4">Upload (if any applicable) :</div>
                                <div class="col-md-5">
                                    <input type="file" name="repatriation_uploaded_file" placeholder="">
                                    <span class="text-danger">{{ $errors->first('repatriation_uploaded_file') }}</span>
                                </div>
                            </div>
                        </div>

                        <h3 class="form-heading margin-top-20 blue">Clinical Expenses (Benefit 4)</h3>
                        <div class="form-detailss margin-top-20">

                            <div class="row form-single margin-top-10">
                                <div class="col-md-4">Date of Medical Consulation:</div>
                                <div class="col-md-5">
                                    <input type="date" name="clinical_expense_injury_date" placeholder="">
                                    <span class="text-danger">{{ $errors->first('clinical_expense_injury_date') }}</span>
                                </div>
                            </div>

                            <div class="row form-single margin-top-10">
                                <div class="col-md-4">Diagnosis:</div>
                                <div class="col-md-5">
                                    <textarea id="clinical_expense_diagnosis" name="clinical_expense_diagnosis"
                                        rows="4"></textarea>
                                        <span class="text-danger">{{ $errors->first('clinical_expense_diagnosis') }}</span>
                                </div>
                            </div>

                            <div class="row form-single margin-top-10">
                                <div class="col-md-4">Total Claimed Expense(s):</div>
                                <div class="col-md-5">
                                    <input type="text" name="clinical_expense_total_expense" placeholder="">
                                    <span class="text-danger">{{ $errors->first('clinical_expense_total_expense') }}</span>
                                </div>
                            </div>

                            <div class="row form-single margin-top-20">
                                <div class="col-md-4">Upload (if any applicable) :</div>
                                <div class="col-md-5">
                                    <input type="file" name="clinical_expense_uploaded_file" placeholder="">
                                    <span class="text-danger">{{ $errors->first('clinical_expense_uploaded_file') }}</span>
                                </div>
                            </div>
                        </div>

                        <h3 class="form-heading margin-top-20 blue">Surgical & Hospitalization Expense (Benefit 5)</h3>
                        <div class="form-detailss margin-top-20">

                            <div class="row form-single margin-top-10">
                                <div class="col-md-4">Date of Sickness / Injury:</div>
                                <div class="col-md-5">
                                    <input type="date" name="surgical_injury_date" placeholder="">
                                    <span class="text-danger">{{ $errors->first('surgical_injury_date') }}</span>
                                </div>
                            </div>

                            <div class="row form-single margin-top-10">
                                <div class="col-md-4">Description of incident:</div>
                                <div class="col-md-5">
                                    <textarea id="surgical_incident_description" name="surgical_incident_description"
                                        rows="4"></textarea>
                                        <span class="text-danger">{{ $errors->first('surgical_incident_description') }}</span>
                                </div>
                            </div>

                            <div class="row form-single margin-top-10">
                                <div class="col-md-4">Diagnosis:</div>
                                <div class="col-md-5">
                                    <textarea id="surgical_incident_diagnosis" name="surgical_incident_diagnosis"
                                        rows="4"></textarea>
                                        <span class="text-danger">{{ $errors->first('surgical_incident_diagnosis') }}</span>
                                </div>
                            </div>

                            <div class="row form-single margin-top-10">
                                <div class="col-md-4">Total Claimed Expense(s):</div>
                                <div class="col-md-5">
                                    <input type="text" name="surgical_incident_total_expense" placeholder="">
                                    <span class="text-danger">{{ $errors->first('surgical_incident_total_expense') }}</span>
                                </div>
                            </div>

                            <div class="row form-single margin-top-20">
                                <div class="col-md-4">Upload (if any applicable) :</div>
                                <div class="col-md-5">
                                    <input type="file" name="surgical_incident_uploaded_file" placeholder="">
                                    <span class="text-danger">{{ $errors->first('surgical_incident_uploaded_file') }}</span>
                                </div>
                            </div>
                        </div>

                        <h3 class="form-heading margin-top-20 blue">Dental Expenses (Benefit 6)</h3>
                        <div class="form-detailss margin-top-20">

                            <div class="row form-single margin-top-10">
                                <div class="col-md-4">Date of Sickness / Injury:</div>
                                <div class="col-md-5">
                                    <input type="date" name="dental_expense_date" placeholder="">
                                    <span class="text-danger">{{ $errors->first('dental_expense_date') }}</span>
                                </div>
                            </div>

                            <!-- <div class="row form-single margin-top-10">
                                <div class="col-md-4">Description of incident:</div>
                                <div class="col-md-5">
                                    <textarea id="dental_expense_description" name="dental_expense_description"
                                        rows="4"></textarea>
                                </div>
                            </div> -->

                            <div class="row form-single margin-top-10">
                                <div class="col-md-4">Diagnosis:</div>
                                <div class="col-md-5">
                                    <textarea id="dental_expense_diagnosis" name="dental_expense_diagnosis"
                                        rows="4"></textarea>
                                        <span class="text-danger">{{ $errors->first('dental_expense_diagnosis') }}</span>
                                </div>
                            </div>

                            <div class="row form-single margin-top-10">
                                <div class="col-md-4">Total Claimed Expense(s):</div>
                                <div class="col-md-5">
                                    <input type="text" name="dental_expense_total_expense" placeholder="">
                                    <span class="text-danger">{{ $errors->first('dental_expense_total_expense') }}</span>
                                </div>
                            </div>

                            <div class="row form-single margin-top-20">
                                <div class="col-md-4">Upload (if any applicable) :</div>
                                <div class="col-md-5">
                                    <input type="file" name="dental_expense_uploaded_file" placeholder="">
                                    <span class="text-danger">{{ $errors->first('dental_expense_uploaded_file') }}</span>
                                </div>
                            </div>
                        </div>
                        
                        <h3 class="form-heading margin-top-20 blue">Loss of Services Cash Allowance (Benefit 7)</h3>
                        <div class="form-detailss margin-top-20">

                            <div class="row form-single margin-top-10">
                                <div class="col-md-4">Date of Medical Consulation:</div>
                                <div class="col-md-5">
                                    <input type="date" name="cash_allowance_injury_date" placeholder="">
                                    <span class="text-danger">{{ $errors->first('cash_allowance_injury_date') }}</span>
                                </div>
                            </div>

                            <div class="row form-single margin-top-10">
                                <div class="col-md-4">Diagnosis:</div>
                                <div class="col-md-5">
                                    <textarea id="cash_allowance_diagnosis" name="cash_allowance_diagnosis"
                                        rows="4"></textarea>
                                        <span class="text-danger">{{ $errors->first('cash_allowance_diagnosis') }}</span>
                                </div>
                            </div>

                            <div class="row form-single margin-top-10">
                                <div class="col-md-4">Period of Hospital Confinement: </div>
                                <div class="col-md-5">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="">From</span>
                                        </div>
                                        <input type="date" name="cash_allowance_period_from" class="form-control">
                                        <span class="text-danger">{{ $errors->first('cash_allowance_period_from') }}</span>
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="">To</span>
                                        </div>
                                        <input type="date" name="cash_allowance_period_to" class="form-control">
                                        <span class="text-danger">{{ $errors->first('cash_allowance_period_to') }}</span>
                                    </div>
                                </div>
                            </div>

                            <div class="row form-single margin-top-20">
                                <div class="col-md-4">Upload (if any applicable) :</div>
                                <div class="col-md-5">
                                    <input type="file" name="cash_allowance_uploaded_file" placeholder="">
                                    <span class="text-danger">{{ $errors->first('cash_allowance_uploaded_file') }}</span>
                                </div>
                            </div>
                        </div>

                        <h3 class="form-heading margin-top-20 blue">Replacement of Helper Expenses (Benefit 8)</h3>
                        <div class="form-detailss margin-top-20">

                            <div class="row form-single margin-top-10">
                                <div class="col-md-4">Reason of Replacement:</div>
                                <div class="col-md-5">
                                    <textarea id="replacement_reason" name="replacement_reason"
                                        rows="4"></textarea>
                                        <span class="text-danger">{{ $errors->first('replacement_reason') }}</span>
                                </div>
                            </div>

                            <div class="row form-single margin-top-10">
                                <div class="col-md-4">Total Claimed Expense(s):</div>
                                <div class="col-md-5">
                                    <input type="text" name="replacement_total_expense" placeholder="">
                                    <span class="text-danger">{{ $errors->first('replacement_total_expense') }}</span>
                                </div>
                            </div>

                            <div class="row form-single margin-top-20">
                                <div class="col-md-4">Upload (if any applicable) :</div>
                                <div class="col-md-5">
                                    <input type="file" name="replacement_uploaded_file" placeholder="">
                                    <span class="text-danger">{{ $errors->first('replacement_uploaded_file') }}</span>
                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- Claims Information -->

                    <!-- Declaration & Authorization -->
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
                    <!-- Declaration & Authorization -->

                    <!-- End Section -->
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
                    <!-- End Section -->
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

            //row add
            var rowId = 1;
            $('.add-btn-item').on('click', function() {
                $('#lossDamageTbodyItem').append(`<tr id="">
                    <td class="text-center initial-serial">1</td>
                                    <td>
                                        <input type="text" name="loss_damage_item_description[]" placeholder="">
                                    </td>
                                    <td>
                                        <input type="text" name="loss_damage_item_reason_cost[]" placeholder="">
                                    </td>
                                    <td>
                                        <input type="text" name="loss_damage_item_purchage_date[]" placeholder="">
                                    </td>
                                    <td>
                                        <input type="text" name="loss_damage_item_claim_amount[]" placeholder="">
                                    </td>
                                    <td>
                                        <input type="text" name="loss_damage_item_total[]" placeholder="">
                                    </td>
                                    <td>
                                        <button class="btn btn-danger remove-item"type="button">Remove</button>
                                    </td>
                                </tr>`);
                slCounter();
            });
            //row remove
            $(document).on('click', '.remove-item', function() {
                $(this).parent().parent().remove();
                slCounter();
            });


            //row add
            var rowId = 1;
            $('.add-btn-business-interruption').on('click', function() {
                $('#businessInterruptionTbody').append(`<tr id="">
                    <td class="text-center initial-serial">1</td>
                                        <td>
                                            <input type="text" name="business_interruption_description[]" placeholder="">
                                        </td>
                                        <td>
                                            <input type="text" name="business_interruption_reason_cost[]" placeholder="">
                                        </td>
                                        <td>
                                            <input type="text" name="business_interruption_date[]" placeholder="">
                                        </td>
                                        <td>
                                            <input type="text" name="business_interruption_claim_amount[]" placeholder="">
                                        </td>
                                        <td>
                                            <input type="text" name="lbusiness_interruption_item_total[]" placeholder="">
                                        </td>
                                    <td>
                                        <button class="btn btn-danger remove-business-interruption"type="button">Remove</button>
                                    </td>
                                </tr>`);
                slCounter();
            });
            //row remove
            $(document).on('click', '.remove-business-interruption', function() {
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
