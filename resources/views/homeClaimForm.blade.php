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
                    <button data-id="lossDamage" class="tab-heading-btn">
                        Loss / damage to Home / Household Content / Home Buildings
                    </button>
                </div>
                <div class="col-md-2 tab-heading-item">
                    <button data-id="laiability" class="tab-heading-btn">
                        Personal / Public Liability
                    </button>
                </div>
                <div class="col-md-2 tab-heading-item">
                    <button data-id="othersClaim" class="tab-heading-btn">
                        Others Claim Information
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
                            <div class="col-md-4">Select claim types</div>
                            <div class="col-md-5">
                                <input type="checkbox" name="claim_types[]" value="loss">Loss / damage to Home /
                                Household Content / Home Buildings <br>
                                <input type="checkbox" name="claim_types[]" value="personal">Personal / Public Liability
                                <br>
                                <input type="checkbox" name="claim_types[]" value="others">Others. <br>
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
                                enter the premises. <br>
                                <input type="checkbox" name="q1[]" value="no">No <br>
                                <input type="checkbox" name="q1[]" value="not_applicable">Not applicable <br>
                            </div>
                        </div>

                        <div class="row form-single margin-top-20">
                            <div class="col-md-4">Q2 : Has/ Will the incident been reported/ be reported to the
                                local police/ management office/ any other responsible party? </div>
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
                            <div class="col-md-4">Q5 : Are you the occupier of the Insured Premises?</div>
                            <div class="col-md-5">
                                <input type="checkbox" name="q5[]" value="yes"> Yes<br>
                                <input type="checkbox" name="q5[]" value="no">No <br>
                            </div>
                        </div>

                        <div class="row form-single margin-top-20">
                            <div class="col-md-4">Q6 : Were the insured premises being occupied at the time of
                                incident?</div>
                            <div class="col-md-5">
                                <input type="checkbox" name="q6[]" value="yes"> Yes<br>
                                <input type="checkbox" name="q6[]" value="no">No <br>
                            </div>
                        </div>

                        <div class="row form-single margin-top-20">
                            <div class="col-md-4">Q7 : Is/Are the Insured propert(ies) subject to any Hire
                                Purchase or Loan Agreement?</div>
                            <div class="col-md-5">
                                <input type="checkbox" name="q7[]" value="yes"> Yes, please state details<br>
                                <input type="checkbox" name="q7[]" value="no">No <br>
                            </div>
                        </div>

                        <div class="row form-single margin-top-20">
                            <div class="col-md-4">Q8 : Are the Insured also insured with any other insurance for
                                the Insured propert(ies) as a result of the same incident? </div>
                            <div class="col-md-5">
                                <input type="checkbox" name="q8[]" value="yes"> Yes, please state details<br>
                                <input type="checkbox" name="q8[]" value="no">No <br>
                            </div>
                        </div>

                    </div>
                </div>
                <!-- claim Information -->

                {{-- Loss / damage to Home --}}
                <div id="lossDamage" class="tab-content-single dispaly-none">
                    <h3 class="form-heading margin-top-20 blue">Details of damaged or lost properties</h3>
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
                </div>
                {{-- Loss / damage to Home --}}

                <!-- liability -->
                <div id="laiability" class="tab-content-single dispaly-none">
                    <h3 class="form-heading margin-top-20 blue">Damage to Property of other(s)</h3>
                    <div class="form-detailss margin-top-20">
                        <div class="row form-single margin-top-10">
                            <div class="col-md-4">Name of the property owner :</div>
                            <div class="col-md-5">
                                <input type="text" name="property_owner_name" placeholder="">
                            </div>
                        </div>

                        <div class="row form-single margin-top-10">
                            <div class="col-md-4">Details & extent of damage to Property of other(s): </div>
                            <div class="col-md-5">
                                <textarea id="damage_property_description" name="damage_property_description"
                                    rows="4"></textarea>
                            </div>
                        </div>

                    </div>

                    <h3 class="form-heading margin-top-20 blue">Injury to other(s)</h3>
                    <div class="form-detailss margin-top-20">
                        <div class="row form-single margin-top-10">
                            <div class="col-md-4">Name of the injured:</div>
                            <div class="col-md-5">
                                <input type="text" name="injured_name" placeholder="">
                            </div>
                        </div>

                        <div class="row form-single margin-top-10">
                            <div class="col-md-4">Details & extent of injury of other(s): </div>
                            <div class="col-md-5">
                                <textarea id="dinjury_description" name="dinjury_description" rows="4"></textarea>
                            </div>
                        </div>

                        <div class="row form-single margin-top-20">
                            <div class="col-md-4">Q1 : Was/Were other wrongdoer(s) involved in the same incident?
                            </div>
                            <div class="col-md-5">
                                <input type="checkbox" name="laiabilityq1[]" value="yes"> Yes, please state the name(s),
                                address(es) & telephone No.(s) of the wrongdoer(s)<br>
                                <input type="checkbox" name="laiabilityq1[]" value="no">No <br>
                            </div>
                        </div>

                        <div class="row form-single margin-top-20">
                            <div class="col-md-4">Q2 : Has any communication, verbal or written, been made to you
                                by or on behalf of any injured or owner(s) of the damaged property? </div>
                            <div class="col-md-5">
                                <input type="checkbox" name="laiabilityq2[]" value="yes"> Yes, please give particulars
                                (any written communication being received must be forwarded to us immediately unanswered
                                for our handling)<br>
                                <input type="checkbox" name="laiabilityq2[]" value="no">No <br>
                            </div>
                        </div>

                        <div class="row form-single margin-top-20">
                            <div class="col-md-4">Q3 : Has any step been taken to compromise or settle the
                                matter?</div>
                            <div class="col-md-5">
                                <input type="checkbox" name="laiabilityq3[]" value="yes"> Yes, please state the nature
                                and by whom it was carried out with any compensation amount and withhold any further
                                communication with any involved part(ies).<br>
                                <input type="checkbox" name="laiabilityq3[]" value="no">No <br>
                            </div>
                        </div>


                        <div class="row form-single margin-top-20">
                            <div class="col-md-4">Q3 : Has any step been taken to compromise or settle the
                                matter?</div>
                            <div class="col-md-5">
                                <input type="checkbox" name="laiabilityq3[]" value="yes"> Yes, please state the nature
                                and by whom it was carried out with any compensation amount and withhold any further
                                communication with any involved part(ies).<br>
                                <input type="checkbox" name="laiabilityq3[]" value="no">No <br>
                            </div>
                        </div>


                        <div class="row form-single margin-top-20">
                            <div class="col-md-4">Upload (if any applicable)</div>
                            <div class="col-md-5">
                                <input type="file" name="injured_file" id="">
                            </div>
                        </div>


                    </div>

                </div>
                <!-- liability -->

                <!-- others -->
                <div id="othersClaim" class="tab-content-single dispaly-none">
                    <div class="form-detailss margin-top-20">

                        <div class="row form-single margin-top-10">
                            <div class="col-md-4">Reason of claim:</div>
                            <div class="col-md-5">
                                <textarea id="resons_claim" name="resons_claim" rows="4"></textarea>
                            </div>
                        </div>

                        <div class="row form-single margin-top-10">
                            <div class="col-md-4">Total claimed amount:</div>
                            <div class="col-md-5">
                                <input type="text" name="claim_amount" placeholder="">
                            </div>
                        </div>

                    </div>


                </div>
                <!-- others -->

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
    </script>
    @stack(
    'custom-js'
    )
</body>

</html>
