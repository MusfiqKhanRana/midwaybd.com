<x-indexCOM>
    @section('content')
    <div style="background-image:url('/images/backgroundimg.jpg');width:100%;height:auto;text-align:center;">
        <h1 style="font-size:80px;color:white;padding-top:10%;padding-bottom:4%"><b>MIDWAY SECURITY LTD.</b></h1>
        <h4 style="color: white;">DHAKA STOCK EXCHANGE LTD. , TREC 142​</h4><br>
        <h4 style="color:white;">OPEN A BO ACCOUNT THROUGH YOUR PHONE OR COMPUTER.</h4><br>

        <div style="padding-bottom:7%;">
            <button style="background-color:#ffb366;color:white;margin-right:20%;height:40px;">OPEN BO ACCOUNT</button><button style="background-color:#ffb366;color:white;margin-right:5%;height:40px;">09609 100 142</button>
        </div>

    </div>
    <div style="background-color: white;">
        <div style="padding-left: 20%;padding-right: 20%;padding-top:3%;">
            <div class="row">
                <div class="col-6"><img src="/images/logoBO.jpg" alt="Blackstone Logo" width="auto" height="200px" data-gtm-category="Page Engagement" data-gtm-action="Navigation Click" data-gtm-label="Home"></div>
                <div class="col-6">
                    <h3>OPEN BO ACCOUNT</h3><br>
                    <li>BO Account opening fee Tk. 450.</li><br>
                    <li>NID/Passport, Bank Account, Nominee photo </li>
                </div>

            </div>
        </div>
        <div style="padding-left: 15%;padding-right: 15%;padding-top:7%;">
            <form action="{{route('registration')}}" enctype="multipart/form-data" method="post" id="form">
         @csrf
                <div class="row">

                    <div class="col">
                        <div class="row">
                            <label for="first">Single Applicant Name *</label>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="first" id="first" name="fn1">
                                </div>
                            </div>
                            <!--  col-md-6   -->

                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="last" id="last" name="ln1">
                                </div>
                            </div>
                            <!--  col-md-6   -->
                        </div><br>


                        <div class="row">
                            <label for="company">Gender *</label>
                            <div class="col">
                                <div class="form-group">
                                    <select class="form-control">
                                        <option>Male</option>
                                        <option>Female</option>
                                    </select>
                                </div>


                            </div>

                        </div><br>
                        <div class="row">
                            <label for="first">Father's/Husband's/CEO's Name *</label>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="first" id="first" name="fn2">
                                </div>
                            </div>
                            <!--  col-md-6   -->

                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="last" id="last" name="ln2">
                                </div>
                            </div>
                            <!--  col-md-6   -->
                        </div><br>
                        <!--  row   -->
                        <div class="row">
                            <label for="first">Address *</label>
                            <div class="col">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="" id="first" name="adrs">
                                </div>
                            </div>
                            <!--  col-md-6   -->
                            <!--  col-md-6   -->
                        </div><br>


                        <div class="row">
                            <div class="col-md-6">

                                <div class="form-group">
                                    <label for="email">City *</label>
                                    <input type="text" class="form-control" id="email" placeholder="" name="eml1">
                                </div>
                            </div>

                        </div><br>
                        <div class="row">
                            <div class="col-md-4">

                                <div class="form-group">
                                    <label for="email">Postal Code *</label>
                                    <input type="text" class="form-control" id="email" placeholder="" name="pcode">
                                </div>
                            </div>

                        </div><br>
                        <div class="row">
                            <div class="col-md-6">

                                <div class="form-group">
                                    <label for="email">Mobile Number *</label>
                                    <input type="text" class="form-control" id="email" placeholder="" name="mnmbr">
                                </div>
                            </div>

                        </div><br>
                        <div class="row">
                            <label for="first">Nationality *</label>
                            <div class="col">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="" id="first" name="ntnlty">
                                </div>
                            </div>
                        </div><br>
                        <div class="row">
                            <label for="first">Upload Signature of Single Applicant (signature must match your NID card) *</label>
                            <div class="col">
                                <div class="form-group">
                                    <input type="file" class="form-control-file" id="exampleFormControlFile1" name="simg">
                                </div>
                            </div>
                        </div><br>
                        <div class="row">
                            <label for="first">Upload Photocopy of National ID for Single Applicant *</label>
                            <div class="col">
                                <div class="form-group">
                                    <input type="file" class="form-control-file" id="exampleFormControlFile1" name="NIDimg">
                                </div>
                            </div>
                        </div><br>

                        <!--  row   -->
                    </div>
                    <div class="col">
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label for="first">Date of Birth *</label>
                                    <input type="text" class="form-control" placeholder="" id="first" name="DOB">
                                </div>
                            </div>
                        </div><br>
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label for="first">Occupation *</label>
                                    <input type="text" class="form-control" placeholder="" id="first" name="job">
                                </div>
                            </div>
                        </div><br>


                        <div class="row">
                            <label for="first">Mother's Name *</label>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="first" id="first" name="fn3">
                                </div>
                            </div>
                            <!--  col-md-6   -->

                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="last" id="last" name="ln3">
                                </div>
                            </div>
                            <!--  col-md-6   -->
                        </div><br><br><br><br><br>
                        <div class="col-md-6">

                            <div class="form-group">
                                <label for="email">State/Division *</label>
                                <input type="text" class="form-control" id="email" placeholder="" name="state">
                            </div>
                        </div><br>
                        <div class="col-md-6">

                            <div class="form-group">
                                <label for="email">Country *</label>
                                <input type="text" class="form-control" id="email" placeholder="" name="country">
                            </div>
                        </div><br>


                        <div class="row">
                            <div class="col">

                                <div class="form-group">
                                    <label for="email">Email *</label>
                                    <input type="text" class="form-control" id="email" placeholder="" name="eml2">
                                </div>
                            </div>
                        </div><br>
                        <div class="row">
                            <div class="col">

                                <div class="form-group">
                                    <label for="email">National ID Number *</label>
                                    <input type="text" class="form-control" id="email" placeholder="" name="NIDno">
                                </div>
                            </div>

                        </div><br>
                        <div class="row">
                            <label for="first">Upload Passport Sized Photograph of Single Applicant *</label>
                            <div class="col">
                                <div class="form-group">
                                    <input type="file" class="form-control-file" id="exampleFormControlFile1" name="psimg">
                                </div>
                            </div>
                        </div><br>


                        <label for="contact-preference">Sign Up for Free IPO Membership Club *</label>
                        <div class="radio">
                            <label>
                                <input type="radio" name="contact-preference" id="contact-preference" value="am" checked>Yes
                            </label>
                        </div>
                        <div class="radio">
                            <label>
                                <input type="radio" name="contact-preference" id="contact-preference" value="pm" checked>No
                            </label>
                        </div>
                        <div class="radio">
                            <label>
                                <input type="radio" name="contact-preference" id="contact-preference" value="pm" checked>I will decide later
                            </label>
                        </div>

                    </div>


                </div>
                <hr>
                <div class="row" style="padding-top: 2%;">
                    <div style="text-align: center;padding-bottom: 2%;">
                        <h2>YOUR BANK DETAILS</h2>
                    </div>
                    <div class="col" style="padding-bottom: 3%;">
                        <div class="col">

                            <div class="form-group">
                                <label for="email">Name of your Bank *</label>
                                <input type="text" class="form-control" id="email" placeholder="" name="bankname">
                            </div>
                        </div>
                        <div class="col">

                            <div class="form-group">
                                <label for="email">Bank Account Number *</label>
                                <input type="text" class="form-control" id="email" placeholder="" name="BAnmbr">
                            </div>
                        </div>
                    </div>
                    <div class="col" style="padding-bottom: 3%;">
                        <div class="col">

                            <div class="form-group">
                                <label for="email">Branch Name *</label>
                                <input type="text" class="form-control" id="email" placeholder="" name="Bname">
                            </div>
                        </div>
                        <div class="col">

                            <div class="form-group">
                                <label for="email">Routing Number (Optional)</label>
                                <input type="text" class="form-control" id="email" placeholder="" name="Rnmbr">
                            </div>
                        </div>
                    </div>
                    <hr>
                </div>
                <div class="row" style="padding-top: 2%;">
                    <div style="text-align: center;padding-bottom: 2%;">
                        <h2>NOMINEE DETAILS</h2>
                    </div>
                    <div class="col" style="padding-bottom: 3%;">
                        <div class="row">
                            <label for="first">Name of the Nominee of this Account *</label>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="first" id="first" name="fn4">
                                </div>
                            </div>
                            <!--  col-md-6   -->

                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="last" id="last" name="ln4">
                                </div>
                            </div>
                            <!--  col-md-6   -->
                        </div><br>
                        <div class="row">
                            <label for="first">Upload Passport Sized Photo of Nominee</label>
                            <div class="col">
                                <div class="form-group">
                                    <input type="file" class="form-control-file" id="exampleFormControlFile1" name="psimg2">
                                </div>
                            </div>
                        </div><br>
                    </div>
                    <div class="col" style="padding-bottom: 3%;">
                        <div class="col">

                            <div class="form-group">
                                <label for="email">Relationship with Account Holder *</label>
                                <input type="text" class="form-control" id="email" placeholder="" name="rltn">
                            </div>
                        </div>
                    </div>
                    <hr>
                </div>
                <div class="row" style="padding-top: 2%;">
                    <div style="text-align: center;padding-bottom: 2%;">
                        <h2>DEPOSIT FOR NEW BO ACCOUNT OPENING</h2>
                    </div>
                    <div class="col" style="padding-bottom: 3%;">
                        <div class="col">
                            <div class="col">

                                <div class="form-group">
                                    <label for="email">Name *</label>
                                    <input type="text" class="form-control" id="email" placeholder="" name="name">
                                </div>
                            </div>
                        </div><br>
                        <div class="row">
                            <div class="col-md-6">

                                <div class="form-group">
                                    <label for="email">Phone Number *</label>
                                    <input type="text" class="form-control" id="email" placeholder="" name="phnmbr">
                                </div>
                            </div>

                        </div><br>
                        <div class="col">
                            <div class="col">

                                <div class="form-group">
                                    <label for="email">Taka Deposited (in Amount) *</label>
                                    <input type="text" class="form-control" id="email" placeholder="" name="deposit">
                                </div>
                            </div>
                        </div><br>
                        <div class="row">
                            <label for="company">Select Midway Bank/Mobile Money *</label>
                            <div class="col">
                                <div class="form-group">
                                    <select class="form-control">
                                        <option>City Bank</option>
                                        <option>Dutch Bangla Bank</option>
                                        <option>IFIC Bank</option>
                                        <option>CIBL</option>
                                        <option>EBL</option>
                                        <option>Islami Bank</option>
                                        <option>BRAC Bank</option>
                                        <option>Nagad</option>
                                        <option>Rocket</option>
                                    </select>
                                </div>


                            </div>

                        </div><br>
                        <div class="col">
                            <div class="col">

                                <div class="form-group">
                                    <label for="fname">Comment</label>
                                    <textarea name="cmnt" style="width:100%; height:100px;display: block;"></textarea>
                                </div>
                            </div>
                        </div><br>

                        <div class="row">
                            <label for="first">Upload Bank or (bKash/Rocket/Nagad) Deposit Slip/Screenshot *</label>
                            <div class="col">
                                <div class="form-group">
                                    <input type="file" class="form-control-file" id="exampleFormControlFile1" name="ssimg">
                                </div>
                            </div>
                        </div><br>
                    </div>
                    <div class="col" style="padding-bottom: 3%;margin-left:30px;">
                        <div class="col">
                            <p><b> bKash/Rocket/Nagad *Service Fee Applies. </b></p>
                            <div style="margin-left:20px;margin-bottom:30px;">
                                <li><b>Merchant Account </b></li>
                                <li>bKash No: <b>01845222333</b> (Make Payment)</li>
                                <li>Nagad No: <b>01776106410</b> (Merchant Pay)</li>
                                <li>Rocket: <b>017761064101</b> ​</li>
                                <li>Fee: Tk. <b>450</b> </li>
                                <li>Reference : <b>Your Name</b> </li>
                                <li>Counter no: <b>01</b> </li>
                            </div>
                            <p><b>OR select any bank below:</b></p><br>
                            <p><b>The City Bank(Dhaka South, Principal Branch) <br>A/C: 3101093011001, Routing: 225275357</b></p><br>
                            <p><b>The City Bank(Dhaka South, Principal Branch) <br>A/C: 3101093011001, Routing: 225275357</b></p><br>
                            <p><b>The City Bank(Dhaka South, Principal Branch) <br>A/C: 3101093011001, Routing: 225275357</b></p><br>
                            <p><b>The City Bank(Dhaka South, Principal Branch) <br>A/C: 3101093011001, Routing: 225275357</b></p><br>
                            <p><b>The City Bank(Dhaka South, Principal Branch) <br>A/C: 3101093011001, Routing: 225275357</b></p><br>
                            <p><b>The City Bank(Dhaka South, Principal Branch) <br>A/C: 3101093011001, Routing: 225275357</b></p><br>
                            <p><b>The City Bank(Dhaka South, Principal Branch) <br>A/C: 3101093011001, Routing: 225275357</b></p>

                        </div>

                    </div>
                </div>
                <hr>
                <div class="row" style="padding-top: 2%;">
                    <div class="col" style="padding-bottom: 3%;">
                        <div class="row">
                            <label for="company">How did you hear about Midway Securities Ltd. *</label>
                            <div class="col">
                                <div class="form-group">
                                    <select class="form-control">
                                        <option>Friends/Family</option>
                                        <option>Facebook</option>
                                        <option>Internet Search</option>
                                        <option>Others</option>
                                    </select>
                                </div>


                            </div>

                        </div><br>

                    </div>
                    <div class="col" style="padding-bottom: 3%;">

                    </div>
                </div>
                <div style="text-align: center;padding-bottom:20px;"><button type="submit" class="btn btn-secondary" style="color:black">SUBMIT</button></div>
        </div>
    </form>
    </div>
    @endsection
</x-indexCOM>