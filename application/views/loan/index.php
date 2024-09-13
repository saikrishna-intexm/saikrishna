<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/loan/bootstrap.min.css">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <title>Loan Application</title>
    <style>
        /* input, select{
            border: 0 !important;
            border-bottom: 2px solid rgba(0, 0, 0, 0.5) !important;
            border-radius: 0px !important;
            padding-left: 0 !important;
        } */
        .c,
        select {
            /* border: 1px solid rgba(0, 0, 0, 0.3) !important; */
            /* border-radius: 25px !important; */
            /* box-shadow: 2px 2px 2px gray; */
            width: 100% !important;
            height: 40px !important;
            /* background: #F6F8FE !important; */
            padding: 0 16px !important;
            border-radius: 16px !important;
            color: #111111 !important;
            font-size: 14px !important;
            /* font-weight: 500 !important; */
        }

        label {
            font-size: 14px !important;
            /* color: #78828A; */
            color: #fff;
        }

        button {
            position: relative;
            bottom: 0;
            border-radius: 16px !important;
        }

        .tc {
            font-size: 0.80rem;
            color: white;
        }

        footer {
            position: relative;
            bottom: 0;
            width: 100vw;
            text-align: center;
            font-size: 0.60rem;
            border-top: 1px solid gray;
            height: 15px;
        }

        * {
            /* font-family:system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif !important; */
            font-family: system-ui;
            margin: 0;
            padding: 0;
        }

        body {
            display: none;
            padding-top: 5px;
            background-color: #404252;
            font-family: 'Poppins';font-size: 22px;
            /* height: 100%;
            background: linear-gradient(180deg, #404252 45%, #000); */
            /* background: linear-gradient(135deg, #000 0%, #0f1c52 40%, #000 100%); */
            /* background-color: #DFE6E9; */

        }

        img {
            background-color: white;
            border: 1px solid white;
            border-radius: 50%;
        }

        .main {
            width: 100vw;
            height: 100vh;
            /* margin-top: 20px; */
        }

        .form-step {
            display: none;
        }

        form {
            color: white;
            width: 80vw;
            align-items: center;
            justify-content: center;
            border: 1px solid transparent;
            border-radius: 15px;
            padding-top: 0px !important;
            /* background: rgba(255, 255, 255, 0.5);
            box-shadow: 0 8px 32px 0 rgba(31, 38, 135, 0.37);
            backdrop-filter: blur(4px);
            -webkit-backdrop-filter: blur(4px);
            border-radius: 10px;
            border: 1px solid rgba(255, 255, 255, 0.18); */
        }


        .form-group {
            padding-top: 5px;
        }

        .des {
            font-size: 1.2rem;
            text-align: center;
            margin: 0;
            padding: 0;
            margin-top: 20px;
        }

        .rounded-pill {
            border: 1px solid rgba(0, 0, 0, 0.1);
            border-radius: 25px;
            background-color: white;
            margin-top: 10px;
        }

        .progress-bar {
            background-color: #2196F3;
            /* background-color: #62b034; */
        }

        .btn {
            background-color: #2196F3;
            color: white;
            font-weight: bold;
            width: 100%;
            box-shadow: 0px 2px 2px 2px rgba(0, 0, 0, 0.5);
        }

        .bg {
            /* background-color: white; */
            color: black;
            font-family: sans-serif;
        }

        label {
            font-size: 0.8rem;
        }

        .progress {
            height: 0.5rem !important;
        }

        .top {
            height: auto;
            display: flex;
            justify-content: end;
            padding-top: 30px;
            padding-bottom: 15px;
            align-items: center;
            flex-direction: column;
            background-image: url('<?php echo base_url();?>assets/loan/bg.jpg');
            background-repeat: no-repeat;
            background-size: cover;
            color: white;
            width: 100vw !important;
            margin-top: -10px !important;
            border: 1px solid transparent;
            border-radius: 0px 0px 100px 0px;
            box-shadow: 1px 1px 2px 2px rgba(0, 0, 0, 0.5);
            background-color: darkslategray;
        }

        .text {
            width: 80vw !important;
        }

        .line {
            height: 5px;
            width: 20vw;
            background-color: rgba(255, 255, 255, 0.5);
            border: 1px solid transparent;
            border-radius: 20px;
        }
        .text1{
            color: aliceblue;
            font-size: 20px;
            font-family: Vardana;
            text-align: center;
        }
        .imge {
            animation: rotate 2s linear infinite;
            margin-top: 10%;
            width: 50px;
            height: 50px;
            background-repeat: no-repeat;
            background: url(https://lowcredit.in/assets/loan/loading_circle.png);
            background-size: contain;
        }
        #total
        {
            justify-content: center;
            display: flex;
            flex-direction: column;
            align-items: center;
            height: 100vh;
            width: 100%;
        }
        @keyframes rotate {
            0% {
                transform: rotate(0deg);
            }

            to {
                transform: rotate(360deg);
            }
        }
        #total
        {
            background-color: rgba(0, 0, 0, 0.646);
            display: none;
        }
        /* #submitbutton
        {
            display: none;
        } */
        #total_form
        {
            display: flex;
        }
    </style>
</head>

<body>
    <div id="total">
        <div class="text1">Please wait to see the complete offer</div>
        <div class="imge">
        </div>
        <div class="text1">Loading...</div>
    </div>
    <div class="container main justify-content-start align-items-center flex-column col-12" id="total_form">
        <!-- <img src="<?php echo base_url(); ?>assets/loan/logo.png" alt="" width="40%"> -->
        <div class="top">
            <div class="text">
                <div class="d-flex align-items-center justify-content-center p-2">
                    <div class="line"></div>
                </div>
                <h3 class="pt-3">Your Eligible for Loan upto Rs.5,00,000/-</h3>
                <p>Fill out your details</p>
            </div>
            <div class="step_progress_bar" style="width: 80vw;">
                <div class="progress rounded-pill">
                    <div class="progress-bar" id="bar"></div>
                </div>
                <span class="text-end">Step 1 to 4</span>
            </div>
        </div>


        <form class="needs-validation pb-0 pt-0 bg" action="#" id="signUpForm">
            <!-- <h3 class="des text-uppercase"><b></b></h3> -->
            <div id="step-1" class="mt-2 t">
                <div class="step_content d-flex justify-content-between">
                    <!-- <h5>Personal Loan</h5> -->
                </div>
                <div class="form-group">
                    <label for="first_name">Fist Name (as per PAN)</label>
                    <input type="text" class="form-control c" id="first_name" name="first_name" placeholder="Enter your first name" required>
                </div>
                <div class="form-group">
                    <label for="last_name">Last Name (as per PAN)</label>
                    <input type="text" class="form-control c" id="last_name" name="last_name" placeholder="Enter your last name" required>
                </div>
                <div class="form-group">
                    <label for="mobile">Mobile Number</label>
                    <input type="number" class="form-control c" id="mobile" name="mobile" placeholder="Enter mobile number"
                        onchange="validateMobileNumber(this)" required>
                </div>
                <div class="form-group">
                    <label for="employment">Employment Type</label>
                    <select class="form-select c" aria-label="Default select example" id="employment" name="employee_type" required>
                        <option value="1" selected>Salaried Full-time</option>
                        <option value="2">Self Employed</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="mobile">Monthly Salary</label>
                    <input type="number" class="form-control c" id="income" name="income" placeholder="Enter Income" required>
                </div>
                <!-- <div class="form-group">
                    <label for="salary">Salary</label>
                    <select class="form-select c" aria-label="Default select example" id="salary" name="income" required>
                        <option value="100000">Below Rs.2,00,000/-</option>
                        <option value="200000">Rs.2,00,000/- to Rs.5,00,000/-</option>
                        <option value="300000">Above Rs.5,00,000/-</option>
                    </select>
                </div> -->
                <div class="form-group">
                    <label for="pincode">Pincode</label>
                    <input type="number" class="form-control c" id="pincode" placeholder="pincode" name="pincode" required>
                </div>
            </div>

            <div id="step-2" class="mt-2 t" style="display: none;">
                <div class="step_content d-flex justify-content-between">
                    <!-- <h5>Personal Loan</h5> -->
                    <!-- <span class="text-end">Step 2 to 4</span> -->
                </div>
                <div class="form-group mt-2">
                    <label for="salary" class="col-12">Salary received in</label>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="salary_recived_in" id="inlineRadio1" value="1" required>
                        <label class="form-check-label" for="inlineRadio1">Direct Bank Account</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="salary_recived_in" id="inlineRadio2" value="2" required>
                        <label class="form-check-label" for="inlineRadio2">Cheque</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="salary_recived_in" id="inlineRadio2" value="3" required>
                        <label class="form-check-label" for="inlineRadio2">Cash</label>
                    </div>
                </div>
                <div class="form-group">
                    <label for="company-name">Company Name</label>
                    <input type="text" class="form-control c" id="company-name" placeholder="Enter Company name" name="company" required>
                </div>
                <div class="form-group">
                    <label for="loan-amount">Loan Amount</label>
                    <input type="number" class="form-control c" id="loan-amount" placeholder="Enter Loan amount" name="loan_amount" required>
                </div>
            </div>

            <div id="step-3" class="mt-2 t" style="display: none;">
                <div class="step_content d-flex justify-content-between">
                    <!-- <h5>Personal Loan</h5> -->
                    <!-- <span class="text-end">Step 3 to 4</span> -->
                </div>
                <div class="form-group">
                    <label for="panCardNo">Pancard Number</label>
                    <input type="text" class="form-control text-uppercase c" id="panCardNo" name="pan_card_no" placeholder="Enter here"
                        required>
                </div>

                <div class="form-group">
                    <label for="dob">Select DOB</label>
                    <input type="date" class="form-control c" id="dob" placeholder="DD/MM/YYYY" name="dob" required>
                </div>

                <div class="form-group mt-2">
                    <label for="salary" class="col-12">Gender</label>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="gender" id="inlineRadio1" value="M" required>
                        <label class="form-check-label" for="inlineRadio1">Male</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="gender" id="inlineRadio2" value="F" required>
                        <label class="form-check-label" for="inlineRadio2">Female</label>
                    </div>
                </div>

                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" class="form-control c" id="email" name="email" placeholder="Enter your email"
                        aria-describedby="emailHelp" required>
                </div>
            </div>

            <div id="step-4" class="mt-2 t" style="display: none;">
                <div class="step_content d-flex justify-content-start">
                    <!-- <h5>Personal Loan</h5> -->
                    <!-- <span class="text-end">Step 4 to 4</span> -->
                </div>
                <div class="form-group">
                    <label for="address">Address</label>
                    <textarea type="text" class="form-control c" id="address" name="address" placeholder="Enter here"
                        required></textarea>
                </div>
                <div class="form-group">
                    <label for="locality">Locality</label>
                    <input type="text" class="form-control c" id="locality" name="locality" placeholder="Enter here" required>
                </div>
                <div class="form-group">
                    <label for="city">City</label>
                    <input type="text" class="form-control c" id="city" name="city" placeholder="Enter here" required>
                </div>
                <div class="form-group">
                    <label for="state">State</label>
                    <input type="text" class="form-control c" id="state" name="state" placeholder="Enter here" required>
                </div>
                <div class="form-group">
                    <input type="checkbox" checked="">
                    <span style="color: #fff; font-size: 12px; line-height: 0.5">I agree to receive news, updates, offers, and promotions from LowCredit!, including Email, RCS, and Whatsapp. Can withdraw consent anytime.</span>
                </div>
            </div>
            <input type="hidden" name="utm_source" id="utm_source" value="<?php echo @$_GET['utm_source'] ; ?>">
            <input type="hidden" name="default" id="default" value="<?php echo @$_GET['d'] ; ?>">
            <button type="submit" class="btn mt-3" id="nextButton" onclick="next()">Next</button>
        </form>
        <p class="tc">T&C Apply</p>
        <footer style="color: white;">
            <p>All copyrights reserved @ 2024</p>
        </footer>
    </div>
    <script src="<?php echo base_url(); ?>assets/loan/jquery-3.6.0.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/loan/jquery.validate.min.js"></script>
    <script>
        function showloader() {
                // Assuming you want to hide the form page and display the total page
                document.getElementById('total_form').style.display = "none";
                document.getElementById('total').style.display = "flex";

                // Here you can place your AJAX request or any other form submission logic
        }
        function hideloader() {
                // Assuming you want to hide the form page and display the total page
                document.getElementById('total_form').style.display = "flex";
                document.getElementById('total').style.display = "none";

                // Here you can place your AJAX request or any other form submission logic
        }
        var c = 1;
        var p = 25;
        var stepsSpan = document.querySelector('.text-end');

        document.getElementById('bar').style.width = p + "%";

        function updateStepNumber() {
            stepsSpan.textContent = "Step " + c + " to 4";
        }

        function next() {
            var currentStep = document.getElementById('step-' + c);

            // Check if there are empty or invalid fields in the current step
            var invalidFields = checkInvalidFields(currentStep);

            if (invalidFields.length > 0) {
                // Alert if there are invalid fields
                alert("Please fill out all required fields correctly before proceeding.");
                return;
            }

            var pincodeInput = document.getElementById('pincode');
            if (pincodeInput.value.length !== 6) {
                // Alert if the picode input is not 6 digits
                alert("Please enter a 6-digit PIN code.");
                return;
            }

            if (c < 4) {
                p += 25;
                currentStep.style.display = "none";
                c++;
                document.getElementById('step-' + c).style.display = "block";

                if (c === 4) {
                    document.getElementById('nextButton').innerHTML = "Submit";
                }
                document.getElementById('bar').style.width = p + "%";

                updateStepNumber(); // Update step number after incrementing
            } else if (c === 4) {
                // var form = document.getElementById('form');
                // form.action = 'final.html';
                // form.submit();

                    document.getElementById("signUpForm").addEventListener("submit", function(event){
                    event.preventDefault();
                    // alert('Hello Vinod');
                    showloader(); 

                    var form = $('#signUpForm')[0];
                    var data = new FormData(form);	
                    $.ajax({
                    type : 'POST',
                    url : '<?php echo base_url("loan/create_multi_offer"); ?>',
                    data : data,
                    contentType: false, // NEEDED, DON'T OMIT THIS (requires jQuery 1.6+)
                    processData: false, // NEEDED, DON'T OMIT THIS
                    success: function(data) { 
                    var result = JSON.parse(data);
                    $('.loading').hide();
                    if(result.status == 'success'){
                         window.location.replace(result.url);
                    hideloader();
                    } else if(result.status == 'our_page') {
                        window.location.replace("<?php echo base_url('camp/offer?offer_id='); ?>"+ result.rd_offer_id + "&lead_id=" + result.lead_id);
                        hideloader();
                    } else if(result.status == 'error') {
                    $.confirm({
                    title: 'Sorry!',
                    content: 'Some Error Occurred, Please Try Again!',
                    buttons: {
                    somethingElse: {
                    text: 'Okay',
                    btnClass: 'btn-blue',
                    keys: ['enter', 'shift'],
                    action: function(){
                    window.location.replace("<?php echo base_url('offers/page_one'); ?>");
                    }
                    }
                    }
                    });
                    }
                    }
                    });
                    //});
                    return false;

                    });
                    
            }
            document.getElementById('ra').value = c + 1;
        }

        function checkInvalidFields(step) {
            // Select all input, select, and textarea elements inside the current step
            var formElements = step.querySelectorAll('input, select, textarea');
            var invalidFields = [];

            formElements.forEach(function (element) {
                // Check if the element is required and its value is empty
                if (element.hasAttribute('required') && !element.value.trim()) {
                    // Highlight the empty field with a red border
                    element.style.border = "1px solid red";
                    invalidFields.push(element);
                } else if (element.id === 'panCardNo') {
                    // Check if the PAN card number is invalid
                    if (!isValidPanCardNo(element.value)) {
                        // Highlight the invalid PAN card field with a red border
                        element.style.border = "1px solid red";
                        invalidFields.push(element);
                    } else {
                        // Reset the border style for valid PAN card fields
                        element.style.border = "";
                    }
                } else if (element.id === 'email') {
                    // Check if the email format is invalid
                    if (!isValidEmail(element.value)) {
                        // Highlight the invalid email field with a red border
                        element.style.border = "1px solid red";
                        invalidFields.push(element);
                    } else {
                        // Reset the border style for valid email fields
                        element.style.border = "";
                    }
                } else if (element.id === 'name') {
                    // Check if the name contains only text (no numbers)
                    if (!isValidName(element.value)) {
                        // Alert if numbers are entered
                        alert("Name should only contain alphabets.");
                        // Highlight the invalid name field with a red border
                        element.style.border = "1px solid red";
                        invalidFields.push(element);
                    } else {
                        // Reset the border style for valid name fields
                        element.style.border = "";
                    }
                } else {
                    // Reset the border style for non-empty and non-PAN card fields
                    element.style.border = "";
                }
            });

            return invalidFields;
        }

        function isValidName(name) {
            // Regular expression for name validation (allows only letters, no numbers)
            var regex = /^[A-Za-z\s]+$/;
            return regex.test(name);
        }

        function isValidEmail(email) {
            // Regular expression for email validation
            var regex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            return regex.test(email);
        }


        function isValidPanCardNo(pan) {
            let regex = /^[a-zA-Z]{5}[0-9]{4}[a-zA-Z]{1}$/i;
            return regex.test(pan);
        }

        function validateMobileNumber(input) {
            var mobileNumber = input.value;

            if (mobileNumber.length !== 10) {
                alert(mobileNumber + " is not a valid mobile number.");
            }
        }

        window.addEventListener('load', function () {
            updateDisplay();

            // Update display on window resize
            window.addEventListener('resize', function () {
                updateDisplay();
            });
        });

        function updateDisplay() {
            var body = document.body;  

            // Check the screen width and update body display property
            if (window.innerWidth <= 768) {
                body.style.display = 'flex'; // Display on smaller screens
            } else {
                body.style.display = 'none'; // Hide on larger screens
            }
        }
    </script>

</body>

</html>