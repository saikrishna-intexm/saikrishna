<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- Font Family -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <!-- Style CSS -->
    <link href="<?php echo base_url(); ?>assets/campaign/css/successstyle2.css" rel="stylesheet">
    <style>
        @media (max-width: 991px) {
            .foot {
                display: none;
            }
        }
    </style>
    <!-- Meta Pixel Code -->
<script>
!function(f,b,e,v,n,t,s)
{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};
if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];
s.parentNode.insertBefore(t,s)}(window, document,'script',
'https://connect.facebook.net/en_US/fbevents.js');
fbq('init', '684971346895514');
fbq('track', 'Lead');
</script>
<noscript><img height="1" width="1" style="display:none"
src="https://www.facebook.com/tr?id=684971346895514&ev=PageView&noscript=1"
/></noscript>
<!-- End Meta Pixel Code -->
<!-- Snap Pixel Code -->
<script type='text/javascript'>
(function(e,t,n){if(e.snaptr)return;var a=e.snaptr=function()
{a.handleRequest?a.handleRequest.apply(a,arguments):a.queue.push(arguments)};
a.queue=[];var s='script';r=t.createElement(s);r.async=!0;
r.src=n;var u=t.getElementsByTagName(s)[0];
u.parentNode.insertBefore(r,u);})(window,document,
'https://sc-static.net/scevent.min.js');

snaptr('init', '7710a9ba-9605-412f-80c7-23cfdcf62e2e', {
'user_email': '__INSERT_USER_EMAIL__'
});

snaptr('track', 'LEAD');

</script>
<!-- End Snap Pixel Code -->
</head>

<body style="
background: url('<?php echo base_url(); ?>assets/campaign/img/bg-7.jpg') no-repeat center center fixed;
-webkit-background-size: cover;
-moz-background-size: cover;
-o-background-size: cover;
">
<img src="https://trk.i1x.in/pixel?adid=658bfb4670781d7d05107ffb">
    <!-- <div class="confetti" style="position: absolute;">
        <div class="confetti-piece"></div>
        <div class="confetti-piece"></div>
        <div class="confetti-piece"></div>
        <div class="confetti-piece"></div>
        <div class="confetti-piece"></div>
        <div class="confetti-piece"></div>
        <div class="confetti-piece"></div>
        <div class="confetti-piece"></div>
        <div class="confetti-piece"></div>
        <div class="confetti-piece"></div>
        <div class="confetti-piece"></div>
        <div class="confetti-piece"></div>
        <div class="confetti-piece"></div>
    </div>-->
    <main>
        <div class="">
            <div class="container">

                <section>
                    <div class="row g-0 mb-2">
                        <div class="col-12 d-flex pt-2 pb-1">
                            <a href="#" class="mainlogo"><img src="<?php echo base_url(); ?>assets/campaign/img/logol.png" width="120px" class="img-fluid" alt="Logo"></a>
                        </div>
                    </div>
                </section>


                <style>
                    .box {
                        position: relative;
                    }
                    
                    .box::before {
                        content: "";
                        width: 340px;
                        height: 340px;
                        background-color: #000;
                        position: absolute;
                        /*z-index: -1;*/
                        top: 50%;
                        left: 50%;
                        -webkit-transform: translate(-50%, -50%);
                        transform: translate(-50%, -50%);
                        border-radius: 50%;
                        background: #7F7FD5;
                        /* fallback for old browsers */
                        background: -webkit-linear-gradient(to right, #91EAE4, #86A8E7, #7F7FD5);
                        /* Chrome 10-25, Safari 5.1-6 */
                        background: linear-gradient(to right, #91EAE4, #86A8E7, #7F7FD5);
                        /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
                    }
                    
                    .box-body {
                        position: relative;
                        height: 130px;
                        width: 130px;
                        margin-top: 123.3333333333px;
                        background-color: #cc231e;
                        border-bottom-left-radius: 5%;
                        border-bottom-right-radius: 5%;
                        box-shadow: 0px 4px 8px 0px rgba(0, 0, 0, 0.3);
                        background: linear-gradient(#762c2c, #ff0303);
                    }
                    
                    .box-body .img {
                        opacity: 0;
                        transform: translateY(0%);
                        transition: all 0.5s;
                        margin: 0 auto;
                        display: block;
                    }
                    
                    .box-body:hover {
                        cursor: pointer;
                        -webkit-animation: box-body 1s forwards ease-in-out;
                        animation: box-body 1s forwards ease-in-out;
                    }
                    
                    .box-body:hover .img {
                        opacity: 1;
                        z-index: 0;
                        transform: translateY(-135px);
                    }
                    
                    .box-body:hover .box-lid {
                        -webkit-animation: box-lid 1s forwards ease-in-out;
                        animation: box-lid 1s forwards ease-in-out;
                    }
                    
                    .box-body:hover .box-bowtie::before {
                        -webkit-animation: box-bowtie-left 1.1s forwards ease-in-out;
                        animation: box-bowtie-left 1.1s forwards ease-in-out;
                    }
                    
                    .box-body:hover .box-bowtie::after {
                        -webkit-animation: box-bowtie-right 1.1s forwards ease-in-out;
                        animation: box-bowtie-right 1.1s forwards ease-in-out;
                    }
                    
                    .box-body::after {
                        content: "";
                        position: absolute;
                        top: 0;
                        bottom: 0;
                        left: 50%;
                        -webkit-transform: translateX(-50%);
                        transform: translateX(-50%);
                        width: 50px;
                        background: linear-gradient(#ffffff, #ffefa0)
                    }
                    
                    .box-lid {
                        position: absolute;
                        z-index: 1;
                        left: 50%;
                        -webkit-transform: translateX(-50%);
                        transform: translateX(-50%);
                        bottom: 90%;
                        height: 40px;
                        background-color: #cc231e;
                        height: 40px;
                        width: 160px;
                        border-radius: 5%;
                        box-shadow: 0 8px 4px -4px rgba(0, 0, 0, 0.3);
                    }
                    
                    .box-lid::after {
                        content: "";
                        position: absolute;
                        top: 0;
                        bottom: 0;
                        left: 50%;
                        -webkit-transform: translateX(-50%);
                        transform: translateX(-50%);
                        width: 50px;
                        background: linear-gradient(#ffefa0, #fff)
                    }
                    
                    .box-bowtie {
                        z-index: 1;
                        height: 100%;
                    }
                    
                    .box-bowtie::before,
                    .box-bowtie::after {
                        content: "";
                        width: 64px;
                        height: 64px;
                        border: 10px solid white;
                        border-radius: 50% 50% 0 50%;
                        position: absolute;
                        bottom: 99%;
                        z-index: -1;
                    }
                    
                    .box-bowtie::before {
                        left: 50%;
                        -webkit-transform: translateX(-100%) skew(10deg, 10deg);
                        transform: translateX(-100%) skew(10deg, 10deg);
                    }
                    
                    .box-bowtie::after {
                        left: 50%;
                        -webkit-transform: translateX(0%) rotate(90deg) skew(10deg, 10deg);
                        transform: translateX(0%) rotate(90deg) skew(10deg, 10deg);
                    }
                    
                    @-webkit-keyframes box-lid {
                        0%,
                        42% {
                            -webkit-transform: translate3d(-50%, 0%, 0) rotate(0deg);
                            transform: translate3d(-50%, 0%, 0) rotate(0deg);
                        }
                        60% {
                            -webkit-transform: translate3d(-85%, -230%, 0) rotate(-25deg);
                            transform: translate3d(-85%, -230%, 0) rotate(-25deg);
                        }
                        90%,
                        100% {
                            -webkit-transform: translate3d(-119%, 225%, 0) rotate(-70deg);
                            transform: translate3d(-119%, 225%, 0) rotate(-70deg);
                        }
                    }
                    
                    @keyframes box-lid {
                        0%,
                        42% {
                            -webkit-transform: translate3d(-50%, 0%, 0) rotate(0deg);
                            transform: translate3d(-50%, 0%, 0) rotate(0deg);
                        }
                        60% {
                            -webkit-transform: translate3d(-85%, -230%, 0) rotate(-25deg);
                            transform: translate3d(-85%, -230%, 0) rotate(-25deg);
                        }
                        90%,
                        100% {
                            -webkit-transform: translate3d(-119%, 225%, 0) rotate(-70deg);
                            transform: translate3d(-119%, 225%, 0) rotate(-70deg);
                        }
                    }
                    
                    @-webkit-keyframes box-body {
                        0% {
                            -webkit-transform: translate3d(0%, 0%, 0) rotate(0deg);
                            transform: translate3d(0%, 0%, 0) rotate(0deg);
                        }
                        25% {
                            -webkit-transform: translate3d(0%, 25%, 0) rotate(20deg);
                            transform: translate3d(0%, 25%, 0) rotate(20deg);
                        }
                        50% {
                            -webkit-transform: translate3d(0%, -15%, 0) rotate(0deg);
                            transform: translate3d(0%, -15%, 0) rotate(0deg);
                        }
                        70% {
                            -webkit-transform: translate3d(0%, 0%, 0) rotate(0deg);
                            transform: translate3d(0%, 0%, 0) rotate(0deg);
                        }
                    }
                    
                    @keyframes box-body {
                        0% {
                            -webkit-transform: translate3d(0%, 0%, 0) rotate(0deg);
                            transform: translate3d(0%, 0%, 0) rotate(0deg);
                        }
                        25% {
                            -webkit-transform: translate3d(0%, 25%, 0) rotate(20deg);
                            transform: translate3d(0%, 25%, 0) rotate(20deg);
                        }
                        50% {
                            -webkit-transform: translate3d(0%, -15%, 0) rotate(0deg);
                            transform: translate3d(0%, -15%, 0) rotate(0deg);
                        }
                        70% {
                            -webkit-transform: translate3d(0%, 0%, 0) rotate(0deg);
                            transform: translate3d(0%, 0%, 0) rotate(0deg);
                        }
                    }
                    
                    @-webkit-keyframes box-bowtie-right {
                        0%,
                        50%,
                        75% {
                            -webkit-transform: translateX(0%) rotate(90deg) skew(10deg, 10deg);
                            transform: translateX(0%) rotate(90deg) skew(10deg, 10deg);
                        }
                        90%,
                        100% {
                            -webkit-transform: translate(-50%, -15%) rotate(45deg) skew(10deg, 10deg);
                            transform: translate(-50%, -15%) rotate(45deg) skew(10deg, 10deg);
                            box-shadow: 0px 4px 8px -4px rgba(0, 0, 0, 0.3);
                        }
                    }
                    
                    @keyframes box-bowtie-right {
                        0%,
                        50%,
                        75% {
                            -webkit-transform: translateX(0%) rotate(90deg) skew(10deg, 10deg);
                            transform: translateX(0%) rotate(90deg) skew(10deg, 10deg);
                        }
                        90%,
                        100% {
                            -webkit-transform: translate(-50%, -15%) rotate(45deg) skew(10deg, 10deg);
                            transform: translate(-50%, -15%) rotate(45deg) skew(10deg, 10deg);
                            box-shadow: 0px 4px 8px -4px rgba(0, 0, 0, 0.3);
                        }
                    }
                    
                    @-webkit-keyframes box-bowtie-left {
                        0% {
                            -webkit-transform: translateX(-100%) rotate(0deg) skew(10deg, 10deg);
                            transform: translateX(-100%) rotate(0deg) skew(10deg, 10deg);
                        }
                        50%,
                        75% {
                            -webkit-transform: translate(-50%, -15%) rotate(45deg) skew(10deg, 10deg);
                            transform: translate(-50%, -15%) rotate(45deg) skew(10deg, 10deg);
                        }
                        90%,
                        100% {
                            -webkit-transform: translateX(-100%) rotate(0deg) skew(10deg, 10deg);
                            transform: translateX(-100%) rotate(0deg) skew(10deg, 10deg);
                        }
                    }
                    
                    @keyframes box-bowtie-left {
                        0% {
                            -webkit-transform: translateX(-100%) rotate(0deg) skew(10deg, 10deg);
                            transform: translateX(-100%) rotate(0deg) skew(10deg, 10deg);
                        }
                        50%,
                        75% {
                            -webkit-transform: translate(-50%, -15%) rotate(45deg) skew(10deg, 10deg);
                            transform: translate(-50%, -15%) rotate(45deg) skew(10deg, 10deg);
                        }
                        90%,
                        100% {
                            -webkit-transform: translateX(-100%) rotate(0deg) skew(10deg, 10deg);
                            transform: translateX(-100%) rotate(0deg) skew(10deg, 10deg);
                        }
                    }
                </style>


                <section class="cardscuess mb-3">
                    <div class="confetti" style="position: absolute; z-index: -1; width: 80vw;">
                        <div class="confetti-piece"></div>
                        <div class="confetti-piece"></div>
                        <div class="confetti-piece"></div>
                        <div class="confetti-piece"></div>
                        <div class="confetti-piece"></div>
                        <div class="confetti-piece"></div>
                        <div class="confetti-piece"></div>
                        <div class="confetti-piece"></div>
                        <div class="confetti-piece"></div>
                        <div class="confetti-piece"></div>
                        <div class="confetti-piece"></div>
                        <div class="confetti-piece"></div>
                        <div class="confetti-piece"></div>


                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="d-flex justify-content-center py-3">
                                <div class="col-12 mt-5 d-flex justify-content-center">
                                    <div class="">
                                        <img class="img" style="width:125px;" src="data:image/png;base64,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">
                                    </div>
                                </div>
                            </div>
                            <div class="mt-5 d-flex justify-content-center text-center">
                                <h1 class="text-dark ">
                                    <div class="font-weight-normal mb-3" style="color: #4ec9db;"> Congrats, Your loan is soft approved for Upto <span class="text-info"><strong style="color: #4ec9db;">Rs.3,00,000/-</strong></span></div>
                                </h1>
                            </div>
                            <div class=" flex-column text-center px-3">
                                <h4 class="text-dark py-0 my-0" style="color: white;">Complete the application and Transfer the amount</h4>
                                <h4 class="py-0 my-0" style="color: #fff;">Fatakpay</h4>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="position-relative ">
                    <div class="row">
                        <div class="col-12">
                            <div class="plStepsSection">
                                <div class="plStepsHeading" style="color: white;">
                                    03 Easy Steps
                                </div>
                                <div class="plStepsListBlock">
                                    <div class="eachStepBlock stepSuccess"><span class="stepHeading">
                                    01
                                </span> <span class="stepDescription">
                                    Check Eligibility 
                                </span></div>
                                    <div class="eachStepBlock stepWaring"><span class="stepHeading">
                                    02
                                </span> <span class="stepDescription">
                                    Select Loan Amount &amp; Tenure
                                </span></div>
                                    <div class="eachStepBlock stepPrimary"><span class="stepHeading">
                                    03
                                </span> <span class="stepDescription">
                                    Upload KYC and verify bank account 
                                </span></div>
                                </div>
                                <div class="plStepsDescription" style="color: white;">
                                    and money will be disbursed to your account
                                </div>
                                <div class="form-floating custom-radius-last hero__info__button">
                                    <a href="<?php echo $offer->offer_url .''. $lead->utm_source;?>"><button class="btn btn-success w-100 py-3">Apply Now  <img width="15px" src="<?php echo base_url(); ?>assets/campaign/img/right.svg" class="img-fluid align-middle me-1" alt=""></button></a>

                                </div>
                            </div>
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
        </div>

        <footer class="bg-dark px-3 mt-3">
            <div class="row py-3">
                <div class="col-12" style="display: flex; justify-content: space-between; color: white;">
                    <small class="foot"> Copyright ©2024 Lowcredit ®. All Rights Reserved</small>
                    <div>
                        <a href="Privacy_Policy.html" style="color: white; text-decoration: none; text-align: right;">
                            <small>Privacy Policy</small>
                        </a>
                        <a href="t&c.html" style="color: white; text-decoration: none; text-align: right;">
                            <small> | Terms and conditions</small>
                        </a>
                    </div>
                </div>
            </div>
        </footer>
    </main>



    <!-- Loader -->
    <!-- <div class="loader-position">
        <img src="<?php echo base_url(); ?>assets/campaign/img/loader.svg" width="30px" class="img-fluid me-2" alt="">
        <br>
        <h6 class="font-18 mb-2">Processing Your Loan</h6>
        <p class="px-5">We are checking your loan approval It'll just take a moment</p>
    </div> -->
    <script>
    window.setTimeout(function(){
    // Move to a new location or you can do something else
    window.location.href = "<?php echo $offer->offer_url ."". $lead->utm_source;?>";
    }, 6000);
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
</body>

</html>