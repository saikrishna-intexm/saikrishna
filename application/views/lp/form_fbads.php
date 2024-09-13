<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LowCredit - Personal Loan Application</title>

    <!-- Font Family -->
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <!-- Style CSS -->
    <link href="<?php echo base_url(); ?>assets/offerTwo/css/style.css" rel="stylesheet">
</head>

<body>
    <main>
        <div class="">
            <div class="container">
                <section>
                    <div class="row g-0">
                        <div class="col-12 d-flex justify-content-start pt-3 pb-1">
                            <img src="<?php echo base_url(); ?>assets/offerTwo/img/logo.svg" width="100px" class="img-fluid" alt="Logo">
                        </div>
                    </div>
                </section>

                <section class="position-relative ">
                    <div class="row text-left g-0">
                       
                        <div class="col-7 pr-0 pe-0 pt-3">
                            <h1>Instant Approval 
                                 of <span class="text-info"><span class="font-big">  <strong class="font-rupee">₹</strong> 5,00,000</span></span> </span>
                            </h1>
                            <h5 class="text-dark strong font-weight-bold"><strong> 70% Approval Rate 
                            </strong>   </h5>
                        </div>
                        <div class="col-5">
                            <img src="<?php echo base_url(); ?>assets/offerTwo/img/loan.svg" width="150px" class="img-fluid" alt="">
                        </div>
                        <!-- <div class="col-7">
                          
                         </div> -->
                      
                    </div>
                </section>

                <section class="position-relative mb-2">
                    <div class="row text-left g-0">
                       
                        
                    </div>
                </section>


              
                <form class="mb-3 needs-validation" id="loan_application">
                    <div class="row mx-1">
                        <div class="col-12">
                            <div class=" p-0">
                                <div class="form-floating  mb-2">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="employee_type" id="inlineRadio1" value="SALARIED" required>
                                        <label class="form-check-label" for="inlineRadio1">Salaried</label>
                                      </div>
                                      <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="employee_type" id="inlineRadio2" value="SELF-EMPLOYEE">
                                        <label class="form-check-label" for="inlineRadio2">Self</label>
                                      </div> 
                                </div>
                                <div>
                                    <!-- <label class="mb-3" for="floatingPassword">Income</label> -->
                                <div class="custom-radius-middle pt-2  mb-3">
                                  
                                    <select name="income" id="" class="form-control form-select w-100" required>
                                        <option value="">Select Income </option>
                                        <option value="200000">Less than 3,00,000 </option>
                                        <option value="300000">More than 3,00,000</option>
                                        <option value="500000">More than 5,00,000                                         </option>
                                    </select>
                                   

                                    <div class="invalid-feedback">
                                        Please choose a username.
                                      </div>
                                      </div>
                                </div>
                                <!-- <div class="form-floating border-bottom ">
                                    <input required type="email" class="form-control form-control-lg w-100 border-0 "
                                    id="validationCustom01" placeholder="name@example.com"> 
                                    <label for="validationCustom01" >Enter your Email Address</label>
                                    
                                    <div class="valid-feedback">
                                        Looks good!
                                      </div>
                                </div> -->
                                
                                <div class="form-floating custom-radius-middle mb-3">
                                    <input type="number" name="mobile" class="form-control w-100" id="floatingPassword"
                                        placeholder="Mobile Number">
                                    <label for="floatingPassword">Mobile Number</label>
                                </div>
                                <div class="form-floating custom-radius-middle  mb-3">
                                    <input type="text" class="form-control w-100" id="floatingPassword" name="pincode" pattern="[123456789][0-9]{5}"
                                        placeholder="Pincode" required>
                                    <label for="floatingPassword">Pincode</label>
                                </div>
                                <div class="form-floating custom-radius-last hero__info__button">
                    <input type="hidden" name="utm_source" id="utm_source" value="<?php echo @$_GET['utm_source'] ; ?>">
                    <input type="hidden" name="utm_medium" id="utm_medium" value="<?php echo @$_GET['utm_medium'] ; ?>">
                    <input type="hidden" name="utm_publisher_id" id="utm_publisher_id" value="<?php echo @$_GET['utm_publisher_id'] ; ?>">
                    <input type="hidden" name="utm_subid_1" id="utm_subid_1" value="<?php echo @$_GET['utm_subid_1'] ; ?>">
                    <input type="hidden" name="utm_subid_2" id="utm_subid_2" value="<?php echo @$_GET['utm_subid_2'] ; ?>">
                    <input type="hidden" name="pone" id="utm_subid_2" value="<?php echo @$_GET['pone'] ; ?>">
                    <input type="hidden" name="ptwo" id="utm_subid_2" value="<?php echo @$_GET['ptwo'] ; ?>">
                                    <button class="btn btn-success w-100 py-3">Apply Now <img width="15px"
                                            src="<?php echo base_url(); ?>assets/offerTwo/img/right.svg" class="img-fluid align-middle me-1" alt=""></button>
                                </div>

                            </div>
                        </div>
                    </div>
                </form>

                <section class="position-relative pb-2 ">
                    <div class="row mb-2 g-0">
                        <div class="col-6 pe-0">
                            <div class="card d-flex justify-content-left">
                                <img src="<?php echo base_url(); ?>assets/offerTwo/img/icon-1.svg" width="30px" class="img-fluid me-2" alt="">
                                <h6 class="my-0 py-0">Safe and <br> secure</h6>
                            </div>
                        </div>

                        <div class="col-6">
                            <div class="card d-flex justify-content-left">
                                <img src="<?php echo base_url(); ?>assets/offerTwo/img/icon-2.svg" width="30px" class="img-fluid me-2" alt="">
                                <h6 class="my-0 py-0">2-3 minute <br> process</h6>
                            </div>
                        </div>
                    </div>

                    <div class="row  g-0">
                        <div class="col-6 pe-0">
                            <div class="card d-flex justify-content-left">
                                <img src="<?php echo base_url(); ?>assets/offerTwo/img/icon-3.svg" width="30px" class="img-fluid me-2" alt="">
                                <h6 class="my-0 py-0">Funds next <br> business day</h6>
                            </div>
                        </div>

                        <div class="col-6">
                            <div class="card d-flex justify-content-left">
                                <img src="<?php echo base_url(); ?>assets/offerTwo/img/icon-4.svg" width="30px" class="img-fluid me-2" alt="">
                                <h6 class="my-0 py-0">Interest <br> 0.01% P.D</h6>
                            </div>
                        </div>
                    </div>
                </section>

                <section>
                    <div class="row">
                        <div class="col-12">
                            <a href="https://trk.ultraind.in/click?campaign_id=2174&pub_id=405&source=<?php echo @$_GET['utm_source'] ; ?>"><img src="https://earningtricks.in/wp-content/uploads/2021/08/Fi-Money-App-Open-Free-Bank-account-and-Get-200-1000-cashback.jpg"
                                class="img-fluid" alt=""></a>
                        </div>
                    </div>
                </section>
            </div>
            <!-- <div class="col-12 my-5 d-flex justify-content-center sticky-top">
                <a href="" class="btn btn-hover w-100 d-block color-1">Apply Now</a>
            </div> -->

            <!-- <div class="tc">
                <h6><a href="text-info">T & C Apply</a> </h6>
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

$('#loan_application').submit(function(event){
event.preventDefault();
$('.loading').show();
var form = $(this)[0];
var data = new FormData(form);

$.ajax({
type : 'POST',
url : '<?php echo base_url("lp/loan_application"); ?>',
data : data,
contentType: false, // NEEDED, DON'T OMIT THIS (requires jQuery 1.6+)
processData: false, // NEEDED, DON'T OMIT THIS
success: function(data) {
    var result = JSON.parse(data);
    $('.loading').hide();
    if(result.status == 'success'){
       window.location.replace("<?php echo base_url('lp/page?offer_id='); ?>"+ result.offer_id + "&lead_id=" + result.lead_id);
//            $.confirm({
//            title: 'Congratulation!',
//            content: 'We have something for You!',
//            buttons: {
//            somethingElse: {
//            text: 'Okay',
//            btnClass: 'btn-blue',
//            keys: ['enter', 'shift'],
//            action: function(){
//            window.location.replace("<?php echo base_url('offers/page?offer_id='); ?>"+ result.offer_id + "&lead_id=" + result.lead_id);
//            }
//            }
//            }
//            });
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
});
  </script>
  <!--========  PUSH WEB NOTIFICATION CODE STARTs here  =============-->
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
</script>
<!--========  PUSH WEB NOTIFICATION CODE ENDS here  =============-->
</html>
