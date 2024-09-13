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
                 </div>

                 <!-- step two -->
                 <div class="step">
					 <label class="form-check-label" >Income range</label>
                     <select name="income" id="incomeRange" class="form-control form-select w-100" required>
					<option value="">Select Income </option>
					<option value="200000">Less than 3,00,000 </option>
					<option value="300000">More than 3,00,000</option>
					<option value="500000">More than 5,00,000</option>
					</select>
                 </div>
             
                 <!-- step three -->
                 <div class="step mb-4">
				 <label class="form-check-label" >Pincode</label>
                     <input class="inputfield" type="text" id="floatingPassword" name="pincode" pattern="[123456789][0-9]{5}" placeholder="Please Enter Pincode">
                 </div>
             
                 <!-- start previous / next buttons -->
                 <div class="form-footer d-flex">
                     <!--<button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>-->
					<input type="hidden" name="utm_source" id="utm_source" value="<?php echo @$_GET['utm_source'] ; ?>">
                    <input type="hidden" name="utm_medium" id="utm_medium" value="<?php echo @$_GET['utm_medium'] ; ?>">
                    <input type="hidden" name="utm_publisher_id" id="utm_publisher_id" value="<?php echo @$_GET['utm_publisher_id'] ; ?>">
                    <input type="hidden" name="utm_subid_1" id="utm_subid_1" value="<?php echo @$_GET['utm_subid_1'] ; ?>">
                    <input type="hidden" name="utm_subid_2" id="utm_subid_2" value="<?php echo @$_GET['utm_subid_2'] ; ?>">
                    <input type="hidden" name="mobile" id="mobile" value="<?php echo @$_GET['m'] ; ?>">
                    <input type="hidden" name="pone" id="pone" value="<?php echo @$_GET['pone'] ; ?>">
                    <input type="hidden" name="ptwo" id="ptwo" value="<?php echo @$_GET['ptwo'] ; ?>">
                    <input type="hidden" name="pthree" id="pthree" value="<?php echo @$_GET['pthree'] ; ?>">
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
                  <img src=""
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
               <small> Copyright ©2023 LowCredit ®. All Rights Reserved</small>
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
         if(currentTab == 3){
            insertBasicLoanData();
         }
          if (currentTab >= x.length) {
            // ... the form gets submitted:
			//document.getElementById("signUpForm").submit();
			//$('#signUpForm').submit(function(event){	
			//	event.preventDefault();
			//	$('.loading').show();
				var form = $('#signUpForm')[0];
				var data = new FormData(form);
//				alert();
				$.ajax({
				type : 'POST',
				url : '<?php echo base_url("lp/threeloan_application"); ?>',
				data : data,
				contentType: false, // NEEDED, DON'T OMIT THIS (requires jQuery 1.6+)
				processData: false, // NEEDED, DON'T OMIT THIS
				success: function(data) { 
				var result = JSON.parse(data);
				$('.loading').hide();
				if(result.status == 'success'){
				window.location.replace("<?php echo base_url('lp/threeloanpage?offer_id='); ?>"+ result.offer_id + "&lead_id=" + result.lead_id);
				//			$.confirm({
				//			title: 'Congratulations!',
				//			content: 'We have something for You!',
				//			buttons: {
				//			somethingElse: {
				//			text: 'Okay',
				//			btnClass: 'btn-blue',
				//			keys: ['enter', 'shift'],
				//			action: function(){
				//			window.location.replace("<?php echo base_url('offers/page?offer_id='); ?>"+ result.offer_id + "&lead_id=" + result.lead_id);
				//			}
				//			}
				//			}
				//			});
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
  <!--========  PUSH WEB NOTIFICATION CODE STARTs here  =============-->
  <input type="hidden" id="currentTokenValue">
<div id="tockeInfoDisplay" style="font-size:8px; width:0;height:0;overflow:hidden;">
    <div id="token"></div>
    <div id="msg"></div>
    <div id="notis"></div>
    <div id="err"></div>
</div>
<script src="https://www.gstatic.com/firebasejs/7.2.1/firebase-app.js"></script>
<script src="https://www.gstatic.com/firebasejs/7.2.1/firebase-messaging.js"></script>
<script src="https://www.gstatic.com/firebasejs/7.2.1/firebase-analytics.js"></script>
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script>
    MsgElem = document.getElementById("msg");
    TokenElem = document.getElementById("token");
    NotisElem = document.getElementById("notis");
    ErrElem = document.getElementById("err");
    // Initialize Firebase
    // TODO: Replace with your project's customized code snippet

    const config = {
        apiKey: "AIzaSyCFXaUt4lPVRDyyGJjQ44NKqlg_muVOvuI",
        authDomain: "lowcredit-d11c0.firebaseapp.com",
        projectId: "lowcredit-d11c0",
        storageBucket: "lowcredit-d11c0.appspot.com",
        messagingSenderId: "57374267918",
        appId: "1:57374267918:web:fbb41e8da068bcf7487a5f",
        measurementId: "G-2KL03B1H5W"
	};

    firebase.initializeApp(config);
    const messaging = firebase.messaging();
    messaging
            .requestPermission()
            .then(function () {
                MsgElem.innerHTML = "Notification permission granted."
                console.log("Notification permission granted.");
                messaging.getToken().then(function(currentToken) {
                if (currentToken) {
                  $('#currentTokenValue').val(currentToken);
                    // console.log(currentToken);
                insertToken(currentToken);
                }
                });
                return messaging.getToken()
            })
            .then(function (token) {
                TokenElem.innerHTML = "token is : " + token
                // Here need to insert token in db
                //insertToken(token);
            })
            .catch(function (err) {
                ErrElem.innerHTML = ErrElem.innerHTML + "; " + err
                console.log("Unable to get permission to notify.", err);
            });

    messaging.onMessage(function (payload) {
        console.log("Message received. ", payload);
        NotisElem.innerHTML = NotisElem.innerHTML + JSON.stringify(payload);

        const { title, options } = payload.data;
        const imageUrl = payload.data.image;
        const iconUrl = payload.data.icon;
        const clickAction = payload.data.click_action;

        // Check if the browser supports notifications
        if ('Notification' in window) {
            // Request notification permission
            Notification.requestPermission().then(function (permission) {
                if (permission === 'granted') {
                    console.log('Notification permission granted.');

                    // Use the Service Worker for notifications
                    navigator.serviceWorker.ready.then(function (registration) {
                        console.log('Service Worker ready for notifications.');

                        // Display the notification
                        registration.showNotification(title, {
                            ...options,
                            body: payload.data.body, // Check if options is defined
                            image: imageUrl,
                            icon: iconUrl,
                            data: {
                                click_action: clickAction,
                            },
                        });
                    });
                } else {
                    console.error('Notification permission denied.');
                }
            });
        } else {
            console.error('Browser does not support notifications.');
        }
    });

    // self.addEventListener('notificationclick', function (event) {
	//   const clickAction = event.notification.data.click_action;
	//   alert('Notification Clicked. Click Action:', clickAction);

	//   event.notification.close();

	//   if (clickAction) {
	//     event.waitUntil(
	//       clients.matchAll({ type: 'window' }).then(clientsArr => {
	//         // Check if any client window is already open
	//         const isOpen = clientsArr.some(client => client.url === clickAction);

	//         if (isOpen) {
	//           clientsArr.forEach(client => {
	//             if (client.url === clickAction && 'focus' in client) {
	//               return client.focus();
	//             }
	//           });
	//         } else {
	//           return clients.openWindow(clickAction);
	//         }
	//       })
	//     );
	//   }
	// });

    function insertToken(token) {
    	console.log(token);
        $.ajax({
            url: '<?= base_url(); ?>fcminsert.php',
            data: "token=" + token,
            type: 'POST',
            success: function (rcvdata) {
                var result = eval('(' + rcvdata + ')');
                console.log(result.errorMessage);
            }
        });
    }

    function insertBasicLoanData()
    {
         var tokenVal = $('#currentTokenValue').val();
         var mobileNo = $('#mobile').val();
         var product_id = '3';
         var pincode = $('#floatingPassword').val();
         var income_type = document.querySelector('input[name="employee_type"]:checked').value;
         var income_range = $('#incomeRange').val();
         // var isChecked = $('#termsCheck').is(':checked');

        // if (isChecked) {
         var agreed = 'Yes';
        // } else {
        //     var agreed = 'No';
        // }

          var src = "token=" + tokenVal + "&product_id=" + product_id + "&pincode=" + pincode + "&income_type=" + income_type + "&income_range=" + income_range + "&agreed=Yes" + "&mobile_no=" + mobileNo;
         $.ajax({
                url: '<?= base_url(); ?>welcome/insertBasicLoanData',
                data: src,
                type: 'POST',
                success: function (rcvdata) {
                    var result = eval('(' + rcvdata + ')');
                    console.log(result.errorMessage);
                }
            });

    }
</script>
<!--========  PUSH WEB NOTIFICATION CODE ENDS here  =============-->
</html>
