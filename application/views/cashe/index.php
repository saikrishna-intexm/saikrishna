<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
<!-- bootstrap css -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- Font Family -->
    <link href="<?php echo base_url(); ?>/assets/cashe/css/style.css" rel="stylesheet">
</head>

<body>
   <main>
      <div class="container">
         <section>
            <div class="row g-0 mb-2">
               <div class="col-12 d-flex pt-2 pb-1">
                  <a href="<?php echo base_url(); ?>/assets/cashe/#" class="mainlogo"><img src="<?php echo base_url(); ?>/assets/cashe/img/logo.png" width="120px" class="img-fluid" alt="Logo"></a>
               </div>
            </div>
         </section>
         <!--<section>
            <div class="row mt-2 mb-5">
               <ol id="progress-bar">
                 <li class="step-done">Step 1</li>
                 <li class="step-active">Step 2</li>
                 <li class="step-todo">Step 3</li>
               </ol>
            </div>
         </section>-->
         <!--<form class="mb-3 needs-validation" novalidate>
            <div class="row mx-1">
               <div class="col-12">
                  <div class=" p-0">
                     <div class="form-floating  mb-2">
                        <div class="form-check form-check-inline">
                           <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                           <label class="form-check-label" for="inlineRadio1">Salaried</label>
                        </div>
                        <div class="form-check form-check-inline">
                           <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                           <label class="form-check-label" for="inlineRadio2">Self</label>
                        </div>
                     </div>
                     <div>
                        <div class="custom-radius-middle pt-2  mb-3">
                           <select name="" id="" class="form-control form-select w-100" required>
                              <option value="">Select Income </option>
                              <option value="">Less than 3,00,000 </option>
                              <option value="">More than 3,00,000</option>
                              <option value="">More than 5,00,000</option>
                           </select>
                           <div class="invalid-feedback">
                              Please choose a username.
                           </div>
                        </div>
                     </div>
                     <div class="form-floating custom-radius-middle  mb-3">
                        <input type="text" class="form-control w-100" id="floatingPassword"
                           placeholder="Pincode">
                        <label for="floatingPassword">Pincode</label>
                     </div>
                     <div class="form-floating custom-radius-last hero__info__button">
                        <button class="btn btn-success w-100 py-3">Next <img width="15px"
                           src="img/right.svg" class="img-fluid align-middle me-1" alt=""></button>
                     </div>
                  </div>
               </div>
            </div>
         </form>-->


         <div class="bannerform">
            <div class="form">
               <form id="signUpForm" action="#!">
                   <section>
                     <div class="row justify-content-center mb-5">
                        <div class="col-12">
                            <h1>Instant Loan approval <br/>
                              <span class="text-info"><span class="font-big">in 5mins <strong style="color:#000; font-size: 18px;"> Quick Disbursal </strong></span></span> </span></h1>
                        </div>
                     </div>
                  </section>

                 <!-- start step indicators -->
                 <div class="form-header d-flex">
                     <span class="stepIndicator">Step 1</span>
                     <span class="stepIndicator">Step 2</span>
                     <span class="stepIndicator">Step 3</span>
                 </div>
                 <!-- end step indicators -->
             
                 <!-- step one -->
                 <div class="step">
					<label class="form-check-label" for="name">Name (As per PAN):</label>
                     <input class="inputfield" type="text" id="name" name="name" placeholder="Please Enter Name" required>
					 <label class="form-check-label" for="email">Email:</label>
                     <input class="inputfield" type="email" id="email" name="email" placeholder="Please Enter Email" required>
                     <label class="form-check-label" for="mobile">Mobile No:</label>
                     <input class="inputfield" type="number" id="mobile" name="mobile" placeholder="Please Enter Mobile No" required>
                 </div>

                 <!-- step two -->
                 <div class="step">
                     <label class="form-check-label" >Employment Status</label>
                     <div class="form-floating  mb-3">
                        <div class="form-check form-check-inline">
                           <input class="form-check-input" type="radio" name="employee_type" id="inlineRadio1" value="SALARIED" required>
                           <label class="form-check-label" for="inlineRadio1">Salaried</label>
                        </div>
                        <div class="form-check form-check-inline">
                           <input class="form-check-input" type="radio" name="employee_type" id="inlineRadio2" value="SELF-EMPLOYEE">
                           <label class="form-check-label" for="inlineRadio2">Self</label>
                        </div>
                     </div>
					 <label class="form-check-label" >Income range</label>
                     <select name="income" id="" class="form-control form-select w-100" required>
					<option value="">Select Income </option>
					<option value="200000">Less than 3,00,000 </option>
					<option value="300000">More than 3,00,000</option>
					<option value="500000">More than 5,00,000</option>
					</select>
                 </div>
             
                 <!-- step three -->
                 <div class="step mb-4">
				 <label class="form-check-label" >Pincode</label>
                     <input class="inputfield" type="text" id="floatingPassword" name="pincode" pattern="[123456789][0-9]{5}" placeholder="Please Enter Pincode" required>
                 </div>
             
                 <!-- start previous / next buttons -->
                 <div class="form-footer d-flex">
                     <!--<button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>-->
					<input type="hidden" name="utm_source" id="utm_source" value="<?php echo @$_GET['utm_source'] ; ?>">
                    <input type="hidden" name="utm_medium" id="utm_medium" value="<?php echo @$_GET['utm_medium'] ; ?>">
                    <input type="hidden" name="utm_publisher_id" id="utm_publisher_id" value="<?php echo @$_GET['utm_publisher_id'] ; ?>">
                    <input type="hidden" name="utm_subid_1" id="utm_subid_1" value="<?php echo @$_GET['utm_subid_1'] ; ?>">
                    <input type="hidden" name="utm_subid_2" id="utm_subid_2" value="<?php echo @$_GET['utm_subid_2'] ; ?>">
                    <input type="hidden" name="pone" id="pone" value="<?php echo @$_GET['pone'] ; ?>">
                    <input type="hidden" name="ptwo" id="ptwo" value="<?php echo @$_GET['ptwo'] ; ?>">
                     <button type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
                 </div>
                 <!-- end previous / next buttons -->
             </form>
            </div>
            <div class="formimg">
                <img src="<?php echo base_url(); ?>/assets/cashe/img/banner2.png" class="img-fluid" alt="">
            </div>
         </div>


         <section class="position-relative pb-2 ">
            <div class="row mb-3 g-0">
               <div class="col-6">
                  <div class="card d-flex justify-content-left">
                     <img src="<?php echo base_url(); ?>/assets/cashe/img/icon-1.svg" width="30px" class="img-fluid me-2" alt="">
                     <h6 class="my-0 py-0">Safe and secure</h6>
                  </div>
               </div>
               <div class="col-6">
                  <div class="card d-flex justify-content-left">
                     <img src="<?php echo base_url(); ?>/assets/cashe/img/icon-2.svg" width="30px" class="img-fluid me-2" alt="">
                     <h6 class="my-0 py-0">2-3 minute process</h6>
                  </div>
               </div>
            </div>
            <div class="row  g-0">
               <div class="col-6">
                  <div class="card d-flex justify-content-left">
                     <img src="<?php echo base_url(); ?>/assets/cashe/img/icon-3.svg" width="30px" class="img-fluid me-2" alt="">
                     <h6 class="my-0 py-0">Funds next business day</h6>
                  </div>
               </div>
               <div class="col-6">
                  <div class="card d-flex justify-content-left">
                     <img src="<?php echo base_url(); ?>/assets/cashe/img/icon-4.svg" width="30px" class="img-fluid me-2" alt="">
                     <h6 class="my-0 py-0">Interest 0.01% P.D</h6>
                  </div>
               </div>
            </div>
         </section>
         <section>

            <div class="row mb-4 mt-5">
               <div class="col-12">
                  <img src="https://4.bp.blogspot.com/-OnmFKibQCA4/VkWsYCkayyI/AAAAAAAANWI/7xUIZFen4B4/s1600/sri-mobiles-flex-banner-design-template-sample-jpg-naveengfx.com.jpg"
                     class="img-fluid" alt="">
               </div>
            </div>
         </section>

         
      </div>
      <!-- <div class="col-12 my-5 d-flex justify-content-center sticky-top">
         <a href="<?php echo base_url(); ?>/assets/cashe/" class="btn btn-hover w-100 d-block color-1">Apply Now</a>
         </div> -->
      <!-- <div class="tc">
         <h6><a href="<?php echo base_url(); ?>/assets/cashe/text-info">T & C Apply</a> </h6>
         </div> -->
      <footer class="bg-dark px-3 text-center mt-3">
         <div class="row py-3">
            <div class="col-12">
               <small> Copyright ©2023 KeyToLoans ®. All Rights Reserved</small>
            </div>
         </div>
      </footer>
   </main>
</body>

<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/parallax/3.1.0/parallax.min.js"></script>
<script>
    // Example starter JavaScript for disabling form submissions if there are invalid fields
(() => {
  'use strict'

  // Fetch all the forms we want to apply custom Bootstrap validation styles to
  const forms = document.querySelectorAll('.needs-validation')

  // Loop over them and prevent submission
  Array.from(forms).forEach(form => {
    form.addEventListener('submit', event => {
      if (!form.checkValidity()) {
        event.preventDefault()
        event.stopPropagation()
      }

      form.classList.add('was-validated')
    }, false)
  })
})()
</script>

<script>
    $(window).scroll(function() {
  // calculate the distance scrolled from the top of the page
  var scrollDistance = $(window).scrollTop();
  
  // check if the user has scrolled past a certain point (e.g. 500 pixels)
  if (scrollDistance > 100) {
    // add a class to the target element
    $('.hero__info__button').addClass('scrolled');
  } else {
    // remove the class if the user scrolls back up
    $('.hero__info__button').removeClass('scrolled');
  }
});
  </script>
  <script type="text/javascript">
     
     var currentTab = 0; // Current tab is set to be the first tab (0)
        showTab(currentTab); // Display the current tab
        
        function showTab(n) {
          // This function will display the specified tab of the form...
          var x = document.getElementsByClassName("step");
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
          // This function will figure out which tab to display
          var x = document.getElementsByClassName("step");
          // Exit the function if any field in the current tab is invalid:
          if (n == 1 && !validateForm()) return false;
          // Hide the current tab:
          x[currentTab].style.display = "none";
          // Increase or decrease the current tab by 1:
          currentTab = currentTab + n;
          // if you have reached the end of the form...
          if (currentTab >= x.length) {
            // ... the form gets submitted:
			//document.getElementById("signUpForm").submit();
			//$('#signUpForm').submit(function(event){	
			//	event.preventDefault();
			//	$('.loading').show();
				var form = $('#signUpForm')[0];
				var data = new FormData(form);	
				$.ajax({
				type : 'POST',
				url : '<?php echo base_url("cashe/create_loan_application"); ?>',
				data : data,
				contentType: false, // NEEDED, DON'T OMIT THIS (requires jQuery 1.6+)
				processData: false, // NEEDED, DON'T OMIT THIS
				success: function(data) { 
				var result = JSON.parse(data);
				$('.loading').hide();
				if(result.status == 'success'){
				window.location.replace("<?php echo base_url('cashe/page?offer_id='); ?>"+ result.offer_id + "&lead_id=" + result.lead_id);
				} else if(result.status == 'error'){
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
</html>
