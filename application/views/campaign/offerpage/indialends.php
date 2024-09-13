<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IndiaLends</title>

    <!-- Font Family -->
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
    <!-- Style CSS -->
    <link href="<?php echo base_url(); ?>assets/campaign/css/successstyle3.css" rel="stylesheet">
    <style>
     

        * {
            font-family: "Noto Sans", sans-serif;
            font-optical-sizing: auto;
            font-weight: 200;
            font-style: normal;
            font-variation-settings:
                "wdth" 100;
        }
    </style>
    <!-- Meta Pixel Code -->
    <script>
        !function (f, b, e, v, n, t, s) {
            if (f.fbq) return; n = f.fbq = function () {
                n.callMethod ?
                n.callMethod.apply(n, arguments) : n.queue.push(arguments)
            };
            if (!f._fbq) f._fbq = n; n.push = n; n.loaded = !0; n.version = '2.0';
            n.queue = []; t = b.createElement(e); t.async = !0;
            t.src = v; s = b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t, s)
        }(window, document, 'script',
            'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '684971346895514');
        fbq('track', 'Lead');
    </script>
    <noscript><img height="1" width="1" style="display:none"
            src="https://www.facebook.com/tr?id=684971346895514&ev=PageView&noscript=1" /></noscript>
    <!-- End Meta Pixel Code -->
    <!-- Snap Pixel Code -->
    <script type='text/javascript'>
        (function (e, t, n) {
            if (e.snaptr) return; var a = e.snaptr = function () { a.handleRequest ? a.handleRequest.apply(a, arguments) : a.queue.push(arguments) };
            a.queue = []; var s = 'script'; r = t.createElement(s); r.async = !0;
            r.src = n; var u = t.getElementsByTagName(s)[0];
            u.parentNode.insertBefore(r, u);
        })(window, document,
            'https://sc-static.net/scevent.min.js');

        snaptr('init', '7710a9ba-9605-412f-80c7-23cfdcf62e2e', {
            'user_email': '__INSERT_USER_EMAIL__'
        });

        snaptr('track', 'LEAD');

    </script>
    <!-- End Snap Pixel Code -->
</head>

<body style="
background: url('<?php echo base_url(); ?>assets/campaign/img/Frame-1.jpg') no-repeat center center fixed;
-webkit-background-size: cover;
-moz-background-size: cover;
-o-background-size: cover;">
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
                    <div class="row g-0 mb-1">
                        <div class="col-12 d-flex pt-1 pb-1">
                            <a href="#" class="mainlogo"><img src="<?php echo base_url(); ?>assets/cashe/img/logo.png"
                                    width="100px" class="img-fluid" alt="Logo"></a>
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


                <section class="cardscuess mb-1">
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
                                <div class="col-12 d-flex justify-content-center">
                                    <div class="">
                                        <img class="img" style="width:120px;"
                                            src="https://upload.wikimedia.org/wikipedia/commons/1/19/India_Lends_2014.png">
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex justify-content-center text-center">
                                <h1 class="text-dark ">
                                    <div class="font-weight-normal mb-1" style="color: white;"> Congrats, Your
                                        application is ready for Disbursal of up to <span class="text-info"><strong
                                                style="color: #F78801;">Rs.3,00,000/-</strong></span></div>
                                </h1>
                            </div>
                            <div class=" flex-column text-center px-3">
                                <p class="py-0 mt-0 mb-2" style="color: white;"><strong> <small>Complete KYC with our
                                            partner *T&C Apply</small> </strong></p>
                                <h4 class="py-0 my-0" style="color: #fff;">
                                IndiaLends</h4>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="position-relative">
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
                                    <a href="<?php echo $offer->offer_url . '' . $lead->utm_source; ?>"><button
                                            class="btn btn-success w-100 py-3">Apply Now <img width="15px"
                                                src="<?php echo base_url(); ?>assets/campaign/img/right.svg"
                                                class="img-fluid align-middle me-1" alt=""></button></a>

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
                    <small class="foot"> Copyright ©2024 lowcredit ®. All Rights Reserved</small>
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
        window.setTimeout(function () {
            // Move to a new location or you can do something else
            window.location.href = "<?php echo $offer->offer_url . "" . $lead->utm_source; ?>";
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
                messaging.getToken().then(function (currentToken) {
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