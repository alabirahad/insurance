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
                <div class="col-md-2 tab-heading-item">
                    <button data-id="contactPolicy" class="tab-heading-btn tab-heading-btn-active">
                        Contact & Policy Information
                    </button>
                </div>
                <div class="col-md-2 tab-heading-item">
                    <button data-id="genaralClaim" class="tab-heading-btn">
                        General Claim Information
                    </button>
                </div>
                <div class="col-md-2 tab-heading-item">
                    <button data-id="compensationAccidentRepatriation" class="tab-heading-btn">
                    Employee's Compensation, Personal Accident, Repatriation
                    </button>
                </div>
                <div class="col-md-2 tab-heading-item">
                    <button data-id="clinicalSurgicalDental" class="tab-heading-btn">
                        Clinical Expenses, Surgical & Hospitalization Expense, Dental Expenses
                    </button>
                </div>
                <div class="col-md-2 tab-heading-item">
                    <button data-id="cashAllowanceReplacement" class="tab-heading-btn">
                        Loss of Services Cash Allowance, Replacement of Helper Expenses
                    </button>
                </div>
                <div class="col-md-2 tab-heading-item">
                    <button data-id="declaration" class="tab-heading-btn">
                        Declaration & Authorization
                    </button>
                </div>
            </div>

            <div class="tab-content margin-top-20">
                <!-- contact & privecy form -->
                <div id="contactPolicy" class="tab-content-single">
                    <h3 class="form-heading margin-top-20 blue">Policy Details</h3>
                    <div class="form-detailss margin-top-20">

                        <div class="row form-single margin-top-10">
                            <div class="col-md-4">Policy No.</div>
                            <div class="col-md-5">
                                <input type="text" name="policy_no" placeholder="XXX/99999/99">
                            </div>
                        </div>

                        <div class="row form-single margin-top-10">
                            <div class="col-md-4">Name of policy holder:</div>
                            <div class="col-md-5">
                                <input type="text" name="policy_holder_name" placeholder="Mr. X">
                            </div>
                        </div>

                        <div class="row form-single margin-top-10">
                            <div class="col-md-4">Name of the insured:</div>
                            <div class="col-md-5">
                                <input type="text" name="insured_name" placeholder="">
                            </div>
                        </div>

                        <div class="row form-single margin-top-10">
                            <div class="col-md-4">Name of the claimant:</div>
                            <div class="col-md-5">
                                <input type="text" name="claimant_name" placeholder="">
                            </div>
                        </div>

                        <div class="row form-single margin-top-10">
                            <div class="col-md-12 red">Important: This eClaim form should be submitted by the
                                Policyholder/Insured Person. </div>
                        </div>

                    </div>

                    <h3 class="form-heading margin-top-20 blue">Contact Information</h3>
                    <div class="form-detailss margin-top-20">

                        <div class="row form-single margin-top-10">
                            <div class="col-md-4">Name of contact person:</div>
                            <div class="col-md-5">
                                <input type="text" name="contact_person_name" placeholder="Mr. X">
                            </div>
                        </div>

                        <div class="row form-single margin-top-10">
                            <div class="col-md-4">Email address:</div>
                            <div class="col-md-5">
                                <input type="text" name="contact_person_email" placeholder="x@gmail.com">
                            </div>
                        </div>

                        <div class="row form-single margin-top-10">
                            <div class="col-md-4">Mobile no.:</div>
                            <div class="col-md-5">
                                <input type="text" name="contact_person_mobile" placeholder="">
                            </div>
                        </div>
                    </div>
                </div>
                <!-- contact & privecy form -->

                <!-- claim Information -->
                <div id="genaralClaim" class="tab-content-single dispaly-none ">
                    <h3 class="form-heading margin-top-20 blue">Claim Information</h3>
                    <div class="form-detailss margin-top-20">

                        <div class="row form-single margin-top-10">
                            <div class="col-md-4">Are the claimant/Insured person also insured with any other insurance for the Insured person as a result of the same incident? </div>
                            <div class="col-md-5">
                                <input type="checkbox" name="claimant_person_injured[]" value="yes">Yes, please state details<br>
                                <input type="checkbox" name="claimant_person_injured[]" value="no">No<br>
                            </div>
                        </div>

                        <div class="row form-single margin-top-10">
                            <div class="col-md-4">Select claim types</div>
                            <div class="col-md-5">
                                <input type="checkbox" name="claim_types[]" value="loss">Loss or damage to Contents /
                                Stock <br>
                                <input type="checkbox" name="claim_types[]" value="business_interruption">Business
                                Interruption <br>
                                <input type="checkbox" name="claim_types[]" value="loss_of_money">Loss of Money <br>
                                <input type="checkbox" name="claim_types[]" value="public_liability">Public Liability
                                <br>
                                <input type="checkbox" name="claim_types[]" value="personal_assault">Personal Assault
                                <br>
                                <input type="checkbox" name="claim_types[]" value="plate_glass">Plate Glass <br>
                                <input type="checkbox" name="claim_types[]" value="employee_compensation">Employee's
                                Compensation <br>
                                <input type="checkbox" name="claim_types[]" value="others">Others <br>
                            </div>
                        </div>

                        <div class="row form-single margin-top-10">
                            <div class="col-md-4">Date & time of accident :</div>
                            <div class="col-md-5">
                                <input type="text" name="accident_time" placeholder="">
                            </div>
                        </div>

                        <div class="row form-single margin-top-10">
                            <div class="col-md-4">Location of incident :</div>
                            <div class="col-md-5">
                                <input type="text" name="incident_location" placeholder="">
                            </div>
                        </div>

                        <div class="row form-single margin-top-10">
                            <div class="col-md-4">Description of incident:</div>
                            <div class="col-md-5">
                                <textarea id="incident_description" name="incident_description" rows="4"></textarea>
                                <!-- <input type="text" name="incident_description" placeholder=""> -->
                            </div>
                        </div>

                        <div class="row form-single margin-top-20">
                            <div class="col-md-4">Q1 : Is there any sign of forcible entry or exit at the premises
                                in case of theft or burglary loss? </div>
                            <div class="col-md-5">
                                <input type="checkbox" name="q1[]" value="yes"> Yes, please state how did the culprit(s)
                                enter the premises.
                                enter the premises. <br>
                                <input type="checkbox" name="q1[]" value="no">No <br>
                                <input type="checkbox" name="q1[]" value="not_applicable">Not applicable <br>
                            </div>
                        </div>

                        <div class="row form-single margin-top-20">
                            <div class="col-md-4">Q2 : Has/ Will the incident been reported/ be reported to the
                                local police/ management office/ any other Authorit(ies)/ part(ies)?</div>
                            <div class="col-md-5">
                                <input type="checkbox" name="q2[]" value="yes"> Yes, please state details (e.g. police
                                report number, etc) <br>
                                <input type="checkbox" name="q2[]" value="no">No <br>
                            </div>
                        </div>

                        <div class="row form-single margin-top-20">
                            <div class="col-md-4">Q3 : Have you lodged/ Are you going to lodge complaint/ claim
                                against any other part(ies) concerning the loss/damage? </div>
                            <div class="col-md-5">
                                <input type="checkbox" name="q3[]" value="yes"> Yes, please state details<br>
                                <input type="checkbox" name="q3[]" value="no">No <br>
                            </div>
                        </div>

                        <div class="row form-single margin-top-20">
                            <div class="col-md-4">Q4 : Are you the owner of damaged or lost item(s)/propert(ies)?
                            </div>
                            <div class="col-md-5">
                                <input type="checkbox" name="q4[]" value="yes"> Yes<br>
                                <input type="checkbox" name="q4[]" value="no">No <br>
                            </div>
                        </div>

                        <div class="row form-single margin-top-20">
                            <div class="col-md-4">Q5 : Are the Insured also insured with any other insurance for
                                the Insured propert(ies) as a result of the same incident? </div>
                            <div class="col-md-5">
                                <input type="checkbox" name="q5[]" value="yes"> Yes, please state details<br>
                                <input type="checkbox" name="q5[]" value="no">No <br>
                            </div>
                        </div>

                    </div>
                </div>
                <!-- claim Information -->

                <!-- compensationAccidentRepatriation -->
                <div id="compensationAccidentRepatriation" class="tab-content-single dispaly-none">

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
                                    <input type="text" name="employee_compensation_injury_date" placeholder="">
                                </div>
                            </div>

                            <div class="row form-single margin-top-10">
                                <div class="col-md-4">Description of incident:</div>
                                <div class="col-md-5">
                                    <textarea id="employee_compensation_incident_description" name="employee_compensation_incident_description"
                                        rows="4"></textarea>
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
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="">To</span>
                                        </div>
                                        <input type="date" name="employee_compensation_sick_leave_to" class="form-control">
                                    </div>
                                </div>
                            </div>

                            <div class="row form-single margin-top-10">
                                <div class="col-md-4">Nature of injury:</div>
                                <div class="col-md-5">
                                    <textarea id="employee_compensation_injury_nature" name="employee_compensation_injury_nature"
                                        rows="4"></textarea>
                                </div>
                            </div>

                            <div class="row form-single margin-top-20">
                                <div class="col-md-4">Upload (if any applicable) :</div>
                                <div class="col-md-5">
                                    <input type="file" name="employee_compensation_uploaded_file" placeholder="">
                                </div>
                            </div>
                        </div>
                    </div>

                    <h3 class="form-heading margin-top-20 blue">Personal Accident (Benefit 2) </h3>
                    <div class="form-detailss margin-top-20">

                        <div class="row form-single margin-top-10">
                            <div class="col-md-4">Date of injury:</div>
                            <div class="col-md-5">
                                <input type="text" name="personal_accident_injury_date" placeholder="">
                            </div>
                        </div>

                        <div class="row form-single margin-top-10">
                            <div class="col-md-4">Description of incident:</div>
                            <div class="col-md-5">
                                <textarea id="personal_accident_incident_description" name="personal_accident_incident_description"
                                    rows="4"></textarea>
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
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="">To</span>
                                    </div>
                                    <input type="date" name="personal_accident_sick_leave_to" class="form-control">
                                </div>
                            </div>
                        </div>

                        <div class="row form-single margin-top-10">
                            <div class="col-md-4">Nature of injury:</div>
                            <div class="col-md-5">
                                <textarea id="personal_accident_injury_nature" name="personal_accident_injury_nature"
                                    rows="4"></textarea>
                            </div>
                        </div>

                        <div class="row form-single margin-top-10">
                            <div class="col-md-4">Is the Insured person fully recovered? </div>
                            <div class="col-md-5">
                                <input type="checkbox" name="personal_accident_recoverd[]" value="yes"><br>
                                <input type="checkbox" name="personal_accident_recoverd[]" value="no">No, please state details, e.g. what medical treatment(s) will be received & how long the sick leave being granted:<br>
                            </div>
                        </div>

                        <div class="row form-single margin-top-20">
                            <div class="col-md-4">Upload (if any applicable) :</div>
                            <div class="col-md-5">
                                <input type="file" name="personal_accident_uploaded_file" placeholder="">
                            </div>
                        </div>
                    </div>

                    <h3 class="form-heading margin-top-20 blue">Repatriation (Benefit 2) </h3>
                    <h3 class="form-heading margin-top-20 blue">Date of Death / Serious Sickness / Injury</h3>
                    <div class="form-detailss margin-top-20">

                        <div class="row form-single margin-top-10">
                            <div class="col-md-4">Description of incident:</div>
                            <div class="col-md-5">
                                <textarea id="repatriation_incident_description" name="repatriation_incident_description"
                                    rows="4"></textarea>
                            </div>
                        </div>
                        <div class="row form-single margin-top-10">
                            <div class="col-md-4">Reasons of Injury:</div>
                            <div class="col-md-5">
                                <textarea id="repatriation_reason" name="repatriation_reason"
                                    rows="4"></textarea>
                            </div>
                        </div>

                        <div class="row form-single margin-top-10">
                            <div class="col-md-4">Is the Insured person fully recovered? </div>
                            <div class="col-md-5">
                                <input type="checkbox" name="repatriation_recoverd[]" value="yes"><br>
                                <input type="checkbox" name="repatriation_recoverd[]" value="no">No, please state details, e.g. what medical treatment(s) will be received & how long the sick leave being granted:<br>
                            </div>
                        </div>

                        <div class="row form-single margin-top-20">
                            <div class="col-md-4">Upload (if any applicable) :</div>
                            <div class="col-md-5">
                                <input type="file" name="repatriation_uploaded_file" placeholder="">
                            </div>
                        </div>
                    </div>


                </div>
                <!-- compensationAccidentRepatriation -->

                <!-- clinicalSurgicalDental -->
                <div id="compensationAccidentRepatriation" class="tab-content-single dispaly-none">

                    <h3 class="form-heading margin-top-20 blue">Clinical Expenses (Benefit 4)</h3>
                    <div class="form-detailss margin-top-20">

                        <div class="row form-single margin-top-10">
                            <div class="col-md-4">Date of Medical Consulation:</div>
                            <div class="col-md-5">
                                <input type="text" name="clinical_expense_injury_date" placeholder="">
                            </div>
                        </div>

                        <div class="row form-single margin-top-10">
                            <div class="col-md-4">Diagnosis:</div>
                            <div class="col-md-5">
                                <textarea id="clinical_expense_diagnosis" name="clinical_expense_diagnosis"
                                    rows="4"></textarea>
                            </div>
                        </div>

                        <div class="row form-single margin-top-10">
                            <div class="col-md-4">Total Claimed Expense(s):</div>
                            <div class="col-md-5">
                                <input type="text" name="clinical_expense_total_expense" placeholder="">
                            </div>
                        </div>

                        <div class="row form-single margin-top-20">
                            <div class="col-md-4">Upload (if any applicable) :</div>
                            <div class="col-md-5">
                                <input type="file" name="clinical_expense_uploaded_file" placeholder="">
                            </div>
                        </div>
                    </div>

                    <h3 class="form-heading margin-top-20 blue">Surgical & Hospitalization Expense (Benefit 5)</h3>
                    <div class="form-detailss margin-top-20">

                        <div class="row form-single margin-top-10">
                            <div class="col-md-4">Date of Sickness / Injury:</div>
                            <div class="col-md-5">
                                <input type="text" name="surgical_injury_date" placeholder="">
                            </div>
                        </div>

                        <div class="row form-single margin-top-10">
                            <div class="col-md-4">Description of incident:</div>
                            <div class="col-md-5">
                                <textarea id="surgical_incident_description" name="surgical_incident_description"
                                    rows="4"></textarea>
                            </div>
                        </div>

                        <div class="row form-single margin-top-10">
                            <div class="col-md-4">Diagnosis:</div>
                            <div class="col-md-5">
                                <textarea id="surgical_incident_diagnosis" name="surgical_incident_diagnosis"
                                    rows="4"></textarea>
                            </div>
                        </div>

                        <div class="row form-single margin-top-10">
                            <div class="col-md-4">Total Claimed Expense(s):</div>
                            <div class="col-md-5">
                                <input type="text" name="surgical_incident_total_expense" placeholder="">
                            </div>
                        </div>

                        <div class="row form-single margin-top-20">
                            <div class="col-md-4">Upload (if any applicable) :</div>
                            <div class="col-md-5">
                                <input type="file" name="surgical_incident_uploaded_file" placeholder="">
                            </div>
                        </div>
                    </div>

                    <h3 class="form-heading margin-top-20 blue">Dental Expenses (Benefit 6)</h3>
                    <div class="form-detailss margin-top-20">

                        <div class="row form-single margin-top-10">
                            <div class="col-md-4">Date of Sickness / Injury:</div>
                            <div class="col-md-5">
                                <input type="text" name="dental_expense_date" placeholder="">
                            </div>
                        </div>

                        <div class="row form-single margin-top-10">
                            <div class="col-md-4">Description of incident:</div>
                            <div class="col-md-5">
                                <textarea id="dental_expense_description" name="dental_expense_description"
                                    rows="4"></textarea>
                            </div>
                        </div>

                        <div class="row form-single margin-top-10">
                            <div class="col-md-4">Diagnosis:</div>
                            <div class="col-md-5">
                                <textarea id="dental_expense_diagnosis" name="dental_expense_diagnosis"
                                    rows="4"></textarea>
                            </div>
                        </div>

                        <div class="row form-single margin-top-10">
                            <div class="col-md-4">Total Claimed Expense(s):</div>
                            <div class="col-md-5">
                                <input type="text" name="dental_expense_total_expense" placeholder="">
                            </div>
                        </div>

                        <div class="row form-single margin-top-20">
                            <div class="col-md-4">Upload (if any applicable) :</div>
                            <div class="col-md-5">
                                <input type="file" name="dental_expense_uploaded_file" placeholder="">
                            </div>
                        </div>
                    </div>

                </div>
                <!-- clinicalSurgicalDental -->

                <!-- cashAllowanceReplacement -->
                <div id="cashAllowanceReplacement" class="tab-content-single dispaly-none">
                    
                    <h3 class="form-heading margin-top-20 blue">Loss of Services Cash Allowance (Benefit 7)</h3>
                    <div class="form-detailss margin-top-20">

                        <div class="row form-single margin-top-10">
                            <div class="col-md-4">Date of Medical Consulation:</div>
                            <div class="col-md-5">
                                <input type="text" name="cash_allowance_injury_date" placeholder="">
                            </div>
                        </div>

                        <div class="row form-single margin-top-10">
                            <div class="col-md-4">Diagnosis:</div>
                            <div class="col-md-5">
                                <textarea id="cash_allowance_diagnosis" name="cash_allowance_diagnosis"
                                    rows="4"></textarea>
                            </div>
                        </div>

                        <div class="row form-single margin-top-10">
                            <div class="col-md-4">Period of Hospital Confinement: </div>
                            <div class="col-md-5">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="">From</span>
                                    </div>
                                    <input type="date" name="cash_allowance_period" class="form-control">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="">To</span>
                                    </div>
                                    <input type="date" name="cash_allowance_period" class="form-control">
                                </div>
                            </div>
                        </div>

                        <div class="row form-single margin-top-20">
                            <div class="col-md-4">Upload (if any applicable) :</div>
                            <div class="col-md-5">
                                <input type="file" name="cash_allowance_uploaded_file" placeholder="">
                            </div>
                        </div>
                    </div>

                    <h3 class="form-heading margin-top-20 blue">Replacement of Helper Expenses (Benefit 8)</h3>
                    <div class="form-detailss margin-top-20">

                        <div class="row form-single margin-top-10">
                            <div class="col-md-4">Reason of Replacement:</div>
                            <div class="col-md-5">
                                <textarea id="replacement_description" name="replacement_description"
                                    rows="4"></textarea>
                            </div>
                        </div>

                        <div class="row form-single margin-top-10">
                            <div class="col-md-4">Total Claimed Expense(s):</div>
                            <div class="col-md-5">
                                <input type="text" name="replacement_total_expense" placeholder="">
                            </div>
                        </div>

                        <div class="row form-single margin-top-20">
                            <div class="col-md-4">Upload (if any applicable) :</div>
                            <div class="col-md-5">
                                <input type="file" name="replacement_uploaded_file" placeholder="">
                            </div>
                        </div>
                    </div>

                </div>
                <!-- cashAllowanceReplacement -->

                <div id="declaration" class="tab-content-single dispaly-none">
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
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <div class="tab-content-prev-next row">
                <div class="col-md-6 text-left"><button id="prevbtn" type="button">Prev</button></div>
                <div class="col-md-6 text-right"><button id="nextbtn" type="button">Next</button></div>
                <div class="col-md-6"></div>
            </div>

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
