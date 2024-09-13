<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" >
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css" >
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,300;0,400;0,600;0,700;1,100;1,600;1,700&display=swap" rel="stylesheet">
    <title>Lending India</title>
    <style>
      body{
        background: #090C16;
      }
      .wrapper{
        max-width: 460px;
        margin: auto;
        background: #090C16;
        padding: 15px 0px 15px;
        position: relative;
      }
      .mainlogo{
        display: table;
        text-align: center;
        margin: 0px auto 0px;
      }
      .maininner{
        position: relative;
        margin: 50px 15px;
      }
      p{
        color: #fff;
        text-align: center;
        padding: 0px 15px;
        font-size: 14px;
      }
      .para{
        color:#ffffff;
		font-family: 'Poppins', sans-serif;
      }
      h2{
        color: #fff;
        margin: 66px 0px 25px;
        font-family: 'Poppins', sans-serif;
        font-weight: 500;
        text-align: center;
        padding: 0px 20px;
      }
      .footer{
        color: #fff;
        font-size: 12px;
        padding: 20px 15px;
        background: #090C16;
        margin-top: 20px;
        text-align: center;
		font-family: 'Poppins', sans-serif;
      }
      .form-check-inline{
        margin-right: 3.75rem;
      }
      #regForm {
        width: 100%;
      }
      #regForm section{
        padding: 0px;
      }
      #regForm .form-check-label{
		font-family: 'Poppins', sans-serif;
        font-size: 16px;
        color: #ffffff;
        margin-bottom: 15px;
        font-weight: 600;
      }
      .form-check .form-check-label {
        margin-bottom: 0px !important;
      }
      #regForm .form-header {
        gap: 5px;
        text-align: center;
        font-size: .9em;
        margin-bottom: 35px;
      }
      .inputfield{
        margin-bottom: 20px;
      }
      #regForm input.inputfield{
		  font-family: 'Poppins', sans-serif;
          padding: 16px 20px;
          width: 100%;
          font-size: 14px;
          border: 1px solid #384455;
          border-radius: 20px;
          /*background: #0B1524;*/
          color: #0B1524;
      }
      .form-control.form-select {
        height: 55px;
        border: 1px solid #384455;
        border-radius: 20px;
        /*background: #0B1524;*/
        color: ##0B1524;
        font-size: 14px;
      }
      #regForm input.inputfield:focus {
          border: 1px solid #009688;
          outline: 0;
      }
      #signUpForm input.inputfield.invalid {
          regForm: 1px solid #ff0000;
      }
      .tab {
        display: none;
        min-height: 125px;
        padding: 0px 15px;
      }
      #regForm .form-footer{
          overflow:auto;
          gap: 20px;
      }
      #regForm .form-footer button{
          background-color: #fff;
          border: 1px solid #fff!important;
          color: #000;
          border: none;
          padding: 8px 30px;
          font-size: 18px;
          cursor: pointer;
          border-radius: 100px;
          flex: 1;
          margin: 5px auto;
          font-weight: 700;
          max-width: 150px;
      }
      #regForm .form-footer button i{
        font-size: 14px;
      }
      #regForm .form-footer #prevBtn {
          background-color: #fff;
          color: #009688;
      }
      @media (max-width: 767px){
        .maininner {
          margin: 30px 10px 30px;
        }
        .loanform h5 {
          padding: 8px 12px;
          font-size: 16px;
        }
        .loanform {
          padding: 25px 25px 30px;
        }
        .mainlogo {
          margin: 5px auto 0px;
        }
        .banner .img-fluid {
          max-width: 80%;
          height: auto;
          text-align: center;
          margin: auto;
          display: table;
        }
        .mainlogo .img-fluid {
          max-width: 85%;
        }
      }
    </style>
  </head>
  <body>

    <div class="wrapper">
      <a href="index.html" class="mainlogo"><img src="<?php echo base_url(); ?>/assets/campaign/tone/images/logo.png" width="200px" class="img-fluid" alt="Logo"></a>
      <h2 style="font-size:20px; font-weight:600;">Credit Card Approval in 5 Mins.</h2>
      <p class="para">Instant Credit Card Approval - 30 Mins Hassle Free Approval*</p>
      <div class="maininner">
          <form id="regForm">
                 <div class="tab">
                     <label class="form-check-label" >Enter your Name</label>
                     <input class="inputfield" type="text" name="name" placeholder="Enter your Name" required>
					 <label class="form-check-label" >Enter your Mobile</label>
                     <input class="inputfield" type="number" name="mobile" placeholder="Enter your Mobile" required>
                 </div>
                 <div class="tab">
                     <label class="form-check-label" >Select your Employment</label>
                     <div class="form-floating  mb-3">
                        <div class="form-check form-check-inline">
                           <input class="form-check-input" type="radio" name="employee_type" value="SALARIED" checked>
                           <label class="form-check-label" for="inlineRadio1">Salaried</label>
                        </div>
                        <div class="form-check form-check-inline">
                           <input class="form-check-input" type="radio" name="employee_type" value="SELF-EMPLOYEE">
                           <label class="form-check-label" for="inlineRadio2">Self</label>
                        </div>
                     </div>
                 </div>
                 <div class="tab">
				<label class="form-check-label" >Select your Income</label>
				<select name="income" class="form-control form-select w-100" required>
                <option value="">Select Income </option>
                <option value="200000">Less than 3,00,000 </option>
                <option value="300000">More than 3,00,000</option>
                <option value="500000">More than 5,00,000                                         </option>
            </select>
                 </div>
                 <div class="tab">
                     <label class="form-check-label" >Enter your Pincode</label>
                     <input class="inputfield" type="number" name="pincode" placeholder="Enter your pincode" required>
                 </div>
                 <div class="form-footer d-flex">
                     <!--<button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>-->
					<input type="hidden" name="utm_source" id="utm_source" value="<?php echo @$_GET['utm_source'] ; ?>">
					<input type="hidden" name="utm_medium" id="utm_medium" value="<?php echo @$_GET['utm_medium'] ; ?>">
					<input type="hidden" name="utm_publisher_id" id="utm_publisher_id" value="<?php echo @$_GET['utm_publisher_id'] ; ?>">
					<input type="hidden" name="utm_subid_1" id="utm_subid_1" value="<?php echo @$_GET['utm_subid_1'] ; ?>">
					<input type="hidden" name="utm_subid_2" id="utm_subid_2" value="<?php echo @$_GET['utm_subid_2'] ; ?>">
					<input type="hidden" name="pone" id="pone" value="<?php echo @$_GET['pone'] ; ?>">
					<input type="hidden" name="ptwo" id="ptwo" value="<?php echo @$_GET['ptwo'] ; ?>">
					<input type="hidden" name="pthree" id="pthree" value="<?php echo @$_GET['pthree'] ; ?>">
                     <button type="button" class="btn"  id="nextBtn" onclick="nextPrev(1)">Next <i class="fa fa-chevron-right" aria-hidden="true"></i></button>
                 </div>
             </form>
      </div>
      <div class="footer">
        © lending india Private Limited | All Rights Reserved with Copyright & TradeMarks
      </div>
    </div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
      <script type="text/javascript">
     var currentTab = 0; // Current tab is set to be the first tab (0)
showTab(currentTab); // Display the current tab
function showTab(n) {
  // This function will display the specified tab of the form...
  var x = document.getElementsByClassName("tab");
  x[n].style.display = "block";
  //... and fix the Previous/Next buttons:
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
  //... and run a function that will display the correct step indicator:
  fixStepIndicator(n)
}

function nextPrev(n) {
  var x = document.getElementsByClassName("tab");
  // Hide the current tab:
  x[currentTab].style.display = "none";
  // Increase or decrease the current tab by 1:
  currentTab = currentTab + n;
  // if you have reached the end of the form...
  if (currentTab >= x.length) {
    // ... the form gets submitted:
    //document.getElementById("regForm").submit();
	$(this).find(':input[type=submit]').prop('disabled', true);
	var form = $('#regForm')[0];
	var data = new FormData(form);
	$.ajax({
	type : 'POST',
	url : '<?php echo base_url("campaign/create_loan"); ?>',
	data : data,
	contentType: false, // NEEDED, DON'T OMIT THIS (requires jQuery 1.6+)
	processData: false, // NEEDED, DON'T OMIT THIS
	success: function(data) { 
	var result = JSON.parse(data);
	$('.loading').hide();
	if(result.status == 'success'){
	window.location.replace("<?php echo base_url('campaign/process/one?offer_id='); ?>"+ result.offer_id + "&lead_id=" + result.lead_id);
	} else if(result.status == 'error'){
	window.location.replace("<?php echo base_url('campaign/page_one'); ?>");
	}
	}
	});
				//});
    return false;
  }
  // Otherwise, display the correct tab:
  showTab(currentTab);
}

function validateForm() {
          // This function deals with validation of the form fields
          var x, y, i, valid = true;
          x = document.getElementsByClassName("step");
          y = x[currentTab].getElementsByTagName("input");
          // A loop that checks every input field in the current tab:
          for (i = 0; i < y.length; i++) {
            // If a field is empty...
            if (y[i].value == "") {
              // add an "invalid" class to the field:
              y[i].className += " invalid";
              // and set the current valid status to false
              valid = false;
            }
          }
          // If the valid status is true, mark the step as finished and valid:
          if (valid) {
            document.getElementsByClassName("stepIndicator")[currentTab].className += " finish";
          }
          return valid; // return the valid status
        }
        
        function fixStepIndicator(n) {
          // This function removes the "active" class of all steps...
          var i, x = document.getElementsByClassName("stepIndicator");
          for (i = 0; i < x.length; i++) {
            x[i].className = x[i].className.replace(" active", "");
          }
          //... and adds the "active" class on the current step:
          x[n].className += " active";
        }
</script>
  </body>
</html>
