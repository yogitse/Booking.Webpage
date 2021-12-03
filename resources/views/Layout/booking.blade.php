@extends('layout.master')
@section('title','Booking')
@section('content')

    <div class="p-5 text-black" style="background-color: lavender">
        <div class="row">
            <div class="col" style="margin-left: 450px"><h1 style="font-family:'Lato Light'"><b>BOOKING</b></h1></div>
            <div class="col" style="margin-left: -450px;margin-top: 10px"><h4 style="font-family: 'Lato Light'"><b>Booking/Account Information</b></h4></div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="tab">
            <h1 style="margin-top: 30px; font-family: 'Lato Light'">Account Information</h1>
            <h3 style="margin-bottom: 30px; font-family: 'Lato Light'" id="headerch">Fill up the need information to continue</h3>
            <div class="col-md-12" style="color: darkcyan">
                <form class="row g-3" novalidate>
                    <div class="col-md-4">
                        <label for="validationDefault01" class="form-label">Surname</label>
                        <div class="input-group">
                             <span class="input-group-text" id="inputGroupPrepend2"><i class="far fa-user"></i></span>
                             <input type="text" class="form-control" id="validationDefault01" onkeypress="return onlyAlphabets(event,this)" placeholder="Enter Your Surname" required>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <label for="validationDefault02" class="form-label">First Name</label>
                        <div class="input-group">
                            <span class="input-group-text" id="inputGroupPrepend2"><i class="far fa-user"></i></span>
                            <input type="text" class="form-control" id="validationDefault02"onkeypress="return onlyAlphabets(event,this)" placeholder="Enter Your First Name" required>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <label for="validationDefaultUsername" class="form-label">Middle Name</label>
                        <div class="input-group">
                            <span class="input-group-text" id="inputGroupPrepend2"><i class="far fa-user"></i></span>
                            <input type="text" class="form-control" id="validationDefaultUsername"onkeypress="return onlyAlphabets(event,this)" placeholder="Enter Your Middle Name" required>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <label for="validationDefault03" class="form-label">Birthday</label>
                        <div class="input-group">
                             <span class="input-group-text" id="inputGroupPrepend2"><i class="fas fa-calendar-day"></i></span>
                             <input type="text" class="form-control" id="datepicker" placeholder="mm/dd/yyyy" required>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <label for="validationDefault04" class="form-label">Age (18 and above only)</label>
                        <div class="input-group">
                            <span class="input-group-text" id="inputGroupPrepend2"><i class="far fa-user"></i></span>
                            <input type="number" min="18" max="100"  class="form-control" id="age" value=" " placeholder="Enter Your Age" onkeypress="return isNumber(event)" required>
                        </div>
                    </div>

                    <h5 style="color:#000;"><b>Address</b></h5>

                    <div class="col-md-4">
                        <label for="validationDefault05" class="form-label">Street Name</label>
                        <div class="input-group">
                            <span class="input-group-text" id="inputGroupPrepend2"><i class="fas fa-calendar-day"></i></span>
                            <input type="text" class="form-control" id="validationDefault01" placeholder="Enter Your Street" required>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <label for="validationDefault01" class="form-label">City</label>
                        <div class="input-group">
                            <span class="input-group-text" id="inputGroupPrepend2"><i class="fas fa-calendar-day"></i></span>
                            <input type="text" class="form-control" id="validationDefault01"onkeypress="return onlyAlphabets(event,this)" placeholder="Enter Your City" required>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <label for="validationDefault01" class="form-label">Postal Code</label>
                        <div class="input-group">
                            <span class="input-group-text" id="inputGroupPrepend2"><i class="fas fa-hashtag"></i></span>
                            <input type="tel" class="form-control" value="" minlength="3" maxlength="10"  placeholder="Enter Your Postal Code" id="extra7" name="extra7" onkeypress="return isNumber(event)" required>
                        </div>
                    </div>

                    <h5 style="color: #000"><b>Contacts</b></h5>

                    <div class="col-md-4">
                        <label for="validationDefault01" class="form-label">Phone Number</label>
                        <div class="input-group">
                            <span class="input-group-text" id="inputGroupPrepend2"><i class="fas fa-phone"></i></span>
                            <input type="tel" class="form-control" minlength="1" maxlength="15"   id="validationDefault01" placeholder="Enter Your Phone Number" onkeypress="return isNumber(event)"  required >
                        </div>
                    </div>

                    <div class="col-md-4">
                        <label for="validationDefault01" class="form-label">Mobile Number</label>
                        <div class="input-group">
                            <span class="input-group-text" id="inputGroupPrepend2"><i class="fas fa-mobile-alt"></i></span>
                            <input type="tel" class="form-control" minlength="1" maxlength="11" id="validationDefault01" placeholder="Enter Your Mobile Number" onkeypress="return isNumber(event)" required>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <label for="validationDefault01" class="form-label">Email Address</label>
                        <div class="input-group">
                            <span class="input-group-text" id="inputGroupPrepend2"><i class="fas fa-envelope"></i></span>
                            <input type="email" class="form-control" id="validationDefault01" placeholder="Enter Your Email Address" required>
                        </div>
                    </div>

                    <h5 style="color: black"><b>In Case Of Emergency Please Contact the Following: </b></h5>

                    <div class="col-md-4">
                        <label for="validationDefault01" class="form-label">Full Name</label>
                        <div class="input-group">
                            <span class="input-group-text" id="inputGroupPrepend2"><i class="far fa-user"></i></span>
                            <input type="text" class="form-control" id="validationDefault01" onkeypress="return onlyAlphabets(event,this)" placeholder="Enter The Full Name" required>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <label for="validationDefault01" class="form-label">Mobile Number</label>
                        <div class="input-group">
                            <span class="input-group-text" id="inputGroupPrepend2"><i class="fas fa-mobile-alt"></i></span>
                            <input type="tel" class="form-control" minlength="1" maxlength="11" pattern="[7-9]{1}[0-9]{9}"  id="validationDefault01" placeholder="Enter the Mobile Number" onkeypress="return isNumber(event)" required>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <label for="validationDefault01" class="form-label">Relationship</label>
                        <div class="input-group">
                            <span class="input-group-text" id="inputGroupPrepend2"><i class="far fa-user"></i></span>
                            <input type="text" class="form-control" id="validationDefault01" onkeypress="return onlyAlphabets(event,this)" placeholder="Enter Your Relationship " required>
                        </div>
                    </div>

                </form>
            </div>
        </div>

            <div class="tab">
                <div class="container my-5 py-3 px-5">
                    <form class="row g-3">
                        <div class="row justify-content-center">
                            <div class="col-sm-6 shadow">
                                <h1 class="primary"style="font-family: 'Lato Light'; color: darkcyan">BOOKING DETAILS</h1>
                                <p style="font-family: 'Lato Light'"><b>Fill up the need information to continue</b></p>

                                <div class="col-md-4">
                                    <label for="validationDefault03" class="form-label" style="color: darkcyan; font-family: 'Lato'"><b>Appointment Date</b></label>

                                     <div class="input-group">
                                        <span class="input-group-text" id="inputGroupPrepend2"><i class="fas fa-calendar-day"></i></span>
                                        <input type="text" class="form-control" id="datepicker2" placeholder="Select Date" required>
                                     </div>

                                </div>

                                <div>
                                    <p style="font-family: 'Lato Light';color: darkcyan"><b>Morning</b></p>
                                </div>

                                <div class="btn-group row" data-toggle="buttons">
                                    <label class="btn btn-primary" >
                                        <i class="fas fa-clock"></i> <input type="radio" name="options" id="08:00 AM" autocomplete="off"> 08:00 AM
                                    </label>
                                    <label class="btn btn-primary">
                                        <i class="fas fa-clock"></i><input type="radio" name="options" id="08:30 AM" autocomplete="off"> 08:30 AM
                                    </label>
                                    <label class="btn btn-primary">
                                        <i class="fas fa-clock"></i> <input type="radio" name="options" id="09:00 AM" autocomplete="off"> 09:00 AM
                                    </label> <label class="btn btn-primary" >
                                        <i class="fas fa-clock"></i> <input type="radio" name="options" id="09:30 AM" autocomplete="off"> 09:30 AM
                                    </label>
                                    <label class="btn btn-primary">
                                        <i class="fas fa-clock"></i><input type="radio" name="options" id="10:00 AM" autocomplete="off"> 10:00 AM
                                    </label>
                                    <label class="btn btn-primary">
                                        <i class="fas fa-clock"></i> <input type="radio" name="options" id="10:30 AM" autocomplete="off"> 10:30 AM
                                    </label>
                                    <label class="btn btn-primary" >
                                        <i class="fas fa-clock"></i> <input type="radio" name="options" id="11:00 AM" autocomplete="off"> 11:00 AM
                                    </label>
                                    <label class="btn btn-primary">
                                        <i class="fas fa-clock"></i><input type="radio" name="options" id="11:30 AM" autocomplete="off"> 11:30 AM
                                    </label>
                                    <label class="btn btn-primary">
                                        <i class="fas fa-clock"></i><input type="radio" name="options" id="12:00 AM" autocomplete="off"> 12:00 AM
                                    </label>
                                </div>

                                <div>
                                    <p style="font-family: 'Lato Light'; color: darkcyan"><b>Evening</b></p>
                                </div>

                                <div class="btn-group row" data-toggle="buttons">
                                    <label class="btn btn-primary" >
                                        <i class="fas fa-clock"></i><input type="radio" name="options" id="12:30 NN" autocomplete="off"> 12:30 NN
                                    </label>
                                    <label class="btn btn-primary">
                                        <i class="fas fa-clock"></i><input type="radio" name="options" id="01:00 PM" autocomplete="off"> 01:00 PM
                                    </label>
                                    <label class="btn btn-primary">
                                        <i class="fas fa-clock"></i> <input type="radio" name="options" id="01:30 PM" autocomplete="off"> 01:30 PM
                                    </label> <label class="btn btn-primary" >
                                        <i class="fas fa-clock"></i><input type="radio" name="options" id="02:00 PM" autocomplete="off"> 02:00 PM
                                    </label>
                                    <label class="btn btn-primary">
                                        <i class="fas fa-clock"></i><input type="radio" name="options" id="02:30 PM" autocomplete="off"> 02:30 PM
                                    </label>
                                    <label class="btn btn-primary">
                                        <i class="fas fa-clock"></i> <input type="radio" name="options" id="03:00 PM" autocomplete="off"> 03:00 PM
                                    </label>
                                    <label class="btn btn-primary" >
                                        <i class="fas fa-clock"></i> <input type="radio" name="options" id="03:30 PM" autocomplete="off"> 03:30 PM
                                    </label>
                                    <label class="btn btn-primary">
                                        <i class="fas fa-clock"></i><input type="radio" name="options" id="04:00 PM" autocomplete="off"> 04:00 PM
                                    </label>
                                    <label class="btn btn-primary">
                                        <i class="fas fa-clock"></i> <input type="radio" name="options" id="04:30 PM" autocomplete="off"> 04:30 PM
                                    </label>
                                    <label class="btn btn-primary" >
                                        <i class="fas fa-clock"></i> <input type="radio" name="options" id="05:00 PM" autocomplete="off"> 05:00 PM
                                    </label>
                                    <label class="btn btn-primary">
                                        <i class="fas fa-clock"></i> <input type="radio" name="options" id="05:30 PM" autocomplete="off"> 05:30 PM
                                    </label>
                                    <label class="btn btn-primary">
                                        <i class="fas fa-clock"></i> <input type="radio" name="options" id="06:00 PM" autocomplete="off"> 06:00 PM
                                    </label>
                                </div>

                                <div>
                                    <p style="font-family: Lato"><b>Service Type</b></p>
                                </div>

                                <div class="col-md-4">
                                    <label for="validationCustom04" class="form-label" style="font-family: 'Lato Light';color: darkcyan"><b>Service Type</b></label>
                                    <select class="form-select" id="SerTyp" required>
                                        <option selected disabled value="">Choose Here</option>
                                        <option>In-Lounge</option>
                                        <option>Home Service</option>
                                    </select>
                                </div>

                                <div class="col-md-4">
                                    <label for="validationCustom04" class="form-label"style="font-family: 'Lato Light';color: darkcyan"><b>Service Category</b></label>
                                    <select class="form-select" id="SerCat" required>
                                        <option selected disabled value="">Choose Here</option>
                                        <option>LASH</option>
                                        <option>WAX</option>
                                        <option>NAILS</option>
                                        <option>FOOT SPA</option>
                                        <option>PARAFFIN</option>
                                        <option>KIDDIE</option>
                                    </select>
                                </div>

                                <div class="col-md-4" style="margin-bottom: 50px">
                                    <label for="validationCustom04" class="form-label"style="font-family: 'Lato Light';color: darkcyan"><b>Specific Service</b></label>
                                    <select class="form-select" id="SpeServ" required>
                                        <option selected disabled value="">Choose Here</option>
                                        <option></option>
                                    </select>
                                </div>

                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <div style="overflow:auto;">
                <div style="float:right;">
                    <button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
                    <button type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
                </div>
            </div>

            <div style="text-align:center;margin-top:40px;">
                <span class="step"></span>
                <span class="step"></span>
                <span class="step"></span>
            </div>
    </div>
</div>



    <script>
        var currentTab = 0; // Current tab is set to be the first tab (0)
        showTab(currentTab); // Display the current tab

        function showTab(n) {
            // This function will display the specified tab of the form
            var x = document.getElementsByClassName("tab");
            x[n].style.display = "block";
            //and fix the Previous/Next buttons:
            if (n == 0) {
                document.getElementById("prevBtn").style.display = "none";
            } else {
                document.getElementById("prevBtn").style.display = "inline";
            }
            if (n == (x.length - 1)) {
                document.getElementById("nextBtn").innerHTML = "Submit";
            } else {
                document.getElementById("nextBtn").innerHTML = "Next";
            }

            //and run a function that will display the correct step indicator:
            fixStepIndicator(n)
        }

        function nextPrev(n) {
            // This function will figure out which tab to display
            var x = document.getElementsByClassName("tab");
            // Exit the function if any field in the current tab is invalid:
            if (n == 1 && !validateForm()) return false;
            // Hide the current tab:
            x[currentTab].style.display = "none";
            // Increase or decrease the current tab by 1:
            currentTab = currentTab + n;
            // if you have reached the end of the form...
            if (currentTab >= x.length) {
                //the form gets submitted:
                x[0].style.display = "block";
                document.getElementById("headerch").innerHTML = "Please confirm if your information is correct";
                document.getElementById("regForm").submit();
                return false;
            }
            // Otherwise, display the correct tab:
            showTab(currentTab);
        }

        function validateForm() {
            // This function deals with validation of the form fields
            var x, y, i, z,f, valid = true;
            x = document.getElementsByClassName("tab");
            y = x[currentTab].getElementsByTagName("input");
            z = document.getElementById("age").value;
            // A loop that checks every input field in the current tab:
            for (i = 0; i < y.length; i++) {
                // If a field is empty
                if (y[i].value == "") {
                    // add an "invalid" class to the field:
                    y[i].className += " invalid";
                    // and set the current valid status to false
                    valid = false;
                }
                if(z<18){
                    valid= false;
                }
            }

            // If the valid status is true, mark the step as finished and valid:
            if (valid) {
                document.getElementsByClassName("step")[currentTab].className += " finish";
            }
            return valid; // return the valid status
        }

        function fixStepIndicator(n) {
            // This function removes the "active" class of all steps
            var i, x = document.getElementsByClassName("step");
            for (i = 0; i < x.length; i++) {
                x[i].className = x[i].className.replace(" active", "");
            }
            //and adds the "active" class on the current step:
            x[n].className += " active";
        }
    </script>

    <script language="Javascript" type="text/javascript">

        function onlyAlphabets(e, t) {
            try {
                if (window.event) {
                    var charCode = window.event.keyCode;
                }
                else if (e) {
                    var charCode = e.which;
                }
                else { return true; }
                if ((charCode > 64 && charCode < 91) || (charCode > 96 && charCode < 123))
                    return true;
                else
                    return false;
            }
            catch (err) {
                alert(err.Description);
            }
        }

    </script>

<script>
    function isNumber(evt) {
        evt = (evt) ? evt : window.event;
        var charCode = (evt.which) ? evt.which : evt.keyCode;
        if (charCode > 31 && (charCode < 48 || charCode > 57)) {
            return false;
        }
        return true;
    }
</script>


@endsection
