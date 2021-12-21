@extends('layouts.index')
@section('content')
        <div class="content-body">
            <div class="procedure-claim-content">
                <h1 class="red">Helper Insurance</h1>
                <h1 class="blue">Claim Procedure</h1>
                <!-- claim procedure  -->
                <h4 class="blue">Submit your claim through EASY Claims – 3 steps to file your claims online anytime, anywhere</h4>
                <div class="file-upload-procedure">
                    <h6 class="white">Simply scan or take a photo of your documents and submit them online wherever you are.</h6>
                    <div class="row margin-top-20">
                        <div class="col-md-4">
                            <h2 class="text-center"><span class="red bold">1. </span><span class="white bold"> Input</span></h2>
                            <div class="row ">
                                <div class="col-md-4 icon text-right"><i class="fas fa-pen-alt"></i></div>
                                <div class="col-md-6 white">
                                    your claim information in the online claim form and contact details.
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <h2 class="text-center"><span class="red bold">2. </span><span class="white bold"> Upload</span></h2>
                            <div class="row ">
                                <div class="col-md-4 icon text-right"><i class="fas fa-file-upload"></i></div>
                                <div class="col-md-6 white">
                                    a digital copy of relevant supporting documents.
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <h2 class="text-center"><span class="red bold">3. </span><span class="white bold"> Submit</span></h2>
                            <div class="row ">
                                <div class="col-md-4 icon text-right"><i class="fas fa-mail-bulk"></i></div>
                                <div class="col-md-6 white">
                                    and receive an instant SMS, email confirmation and also a tracking number for your registered claim.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- claim procedure  -->
                
                <!-- redirect claim form page  -->
                <div class="procedure-actions margin-top-40">
                    <a href="/off-shop-claim-form" target="_blank">File your claim online</a>
                    <a href="">Learn more about EASY Claims</a>
                </div>
                <!-- redirect claim form page  -->
            </div>
            <div class="post-claim contents">
                <h5 class="blue bold">Or submit your claim through post:</h5>
                <div class="row">
                    <div class="col-md-4 border-right">
                        <div class="post-content">
                            <h2 class="blue">1.</h2>
                            <span class="red"> Download, print and fill out the paper claim form.</span>
                        </div>
                        <div class="post-description margin-top-40">
                        Helper Insurance Claim Form
                        </div>
                    </div>
                    <div class="col-md-4 border-right">
                        <div class="post-content">
                            <h2 class="blue">2.</h2>
                            <span class="red"> Prepare the following supporting documents..</span>
                        </div>
                        <div class="post-description margin-top-40">
                        For outpatient/ medical claim: <br><br>

                        &nbsp;> Original bills and receipts for claim expenses with treatment date, name of patient, diagnosis & attending physician’s stamp and signature
                        <br><br>
                        For inpatient/ hospitalisation claim: <br><br>
                        &nbsp;>Medical reports<br>
                        &nbsp;>Laboratory reports<br>
                        &nbsp;>Referral letters<br>
                        &nbsp;>Discharge summary<br>
                        &nbsp;>Original bills and receipts for claim expenses with treatment date, name of patient, diagnosis & attending physician’s stamp and signature
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="post-content">
                            <h2 class="blue">3.</h2>
                            <span class="red"> Submit your completed claim form and all relevant documents within 30 days of the accident to MSIG’s office address by post.</span>
                        </div>
                        <div class="post-description margin-top-40">
                            Postal address:<br><br>

                            MSIG Insurance (Hong Kong) Limited<br>
                            Claims Department<br>
                            9/F 1111 King’s Road,<br>
                            Taikoo Shing, Hong Kong<br>
                        </div>
                    </div>
                </div>
            </div>
            <div class="important-notes contents">
                <div class="accordion" id="accordionExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            Important Notes
                        </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            1. If you have other documents which are not listed but may support your claim
                             application, please also submit them as it may facilitate our processing. <br>
                            2. We may contact you for more information.
                        </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="contact contents">
                <div class="border-top"></div>
                <div class="blue bold  margin-top-40">For further enquiries, contact us at:</div>
                <div class="red bold margin-top-20">
                    Claims services hotline: +852 2894 0660 <br>
                    General enquiry form
                </div>
            </div>
        </div>

@endsection