<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Offer Page</title>
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/newoffer/bootstrap.min.css">
    <style>
        * {
            margin: 0 !important;
            overflow: scroll;
        }

        .tickmark {
            width: 30px;
        }

        .bank-logo {
            width: 150px;
        }

        .g-10 {
            gap: 10px;
        }

        a {
            text-decoration: none;
            color: white;
            font-size: 18px;
        }

        canvas {
            overflow-y: hidden;
            overflow-x: hidden;
            width: 100%;
            margin: 0;
            position: absolute;
            top: 0;
            z-index: -1;
        }


        .bounce {
            animation: bounce 1s ease-in-out infinite;
        }

        @keyframes bounce {

            0%,
            100% {
                transform: scale(0.9);
            }

            50% {
                transform: scale(1);
            }
        }

        @media only screen and (min-width: 768px) {

            /* Hide the body content for screens smaller than 768px */
            body {
                display: none;
            }
        }
    </style>
    <?php 
    if($lead->income >= 50000): 
        // if($offer->facebook_pixel_status == 'Y' && str_contains($lead->utm_source, 'FB') > 0): 
    ?>
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
    <?php endif; ?>
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
</head>

<body class="bg-light">
    <div class="container-fluid header d-flex align-items-center justify-content-center bg-white shadow-sm mb-4">
        <img src="<?php echo base_url(); ?>assets/newoffer/header-logo.png" alt="logo" width="60%">
    </div>
    <div class="container-fluid d-flex flex-column g-10">
        <canvas id="canvas"></canvas>

        <fieldset
            class="container bg-white d-flex align-items-center justify-content-center p-4 flex-column text-center g-10 shadow rounded my-2 ">
            <legend><img src="<?php echo base_url(); ?>assets/campaign/offers/icons/<?php echo $offer->offer_icon; ?>" alt="logo" class="bank-logo rounded shadow-sm bg-white"></legend>
           
            <p class="text-primary" style="font-size: 18px;"><?php echo $offer->offer_message; ?></p>
            <p class="text-success">Approval Percentage 80%</p>
            <!-- <h1 class="text-primary"><b>Rs.5,00,000/-</b></h1> -->
            <button class="btn btn-primary rounded container-fluid fw-bold bounce" style="background-color: rgba(var(--bs-link-color-rgb),var(--bs-link-opacity,1));" type="button"><a 
                    href="<?php echo $offer->offer_url . '' . $lead->utm_source; ?>">Apply
                    Now</a></button>


        </fieldset>
        <h6>Details of the application</h6>
        <div class="container rounded bg-white d-flex flex-column p-3 shadow-sm">
            <div class="d-flex align-items-center g-10 my-3">
                <img src="<?php echo base_url(); ?>assets/newoffer/tick.svg" alt="tick" class="tickmark">
                <p>Check Eligibility</p>
            </div>
            <hr>
            <div class="d-flex align-items-center g-10 my-3">
                <img src="<?php echo base_url(); ?>assets/newoffer/tick.svg" alt="tick" class="tickmark">
                <p>Select Loan offer and tenure</p>
            </div>
            <hr>
            <div class="d-flex align-items-center g-10 my-3">
                <img src="<?php echo base_url(); ?>assets/newoffer/tick.svg" alt="tick" class="tickmark">
                <p>Verify Pincode</p>
            </div>
        </div>
    </div>
    <footer class="bg-dark px-3 mt-3 fixed-bottom">
        <div class="row py-3">
            <div class="col-12"
                style="display: flex; flex-direction: column; text-align: center; justify-content: space-between; color: white;">
                <small class="foot"> Copyright ©2024 lowcredit ®. All Rights Reserved</small>
                <div>
                    <a href="https://keytoloans.com/privacy"
                        style="color: white; text-decoration: none; text-align: right;">
                        <small>Privacy Policy</small>
                    </a>
                    <a href="https://keytoloans.com/terms_and_conditions"
                        style="color: white; text-decoration: none; text-align: right;">
                        <small> | Terms and conditions</small>
                    </a>
                </div>
            </div>
        </div>
    </footer>
</body>
<script>
        window.setTimeout(function () {
            // Move to a new location or you can do something else
            window.location.href = "<?php echo $offer->offer_url . "" . $lead->utm_source . "&p1=". $lead->lead_id; ?>";
        }, 6000);
    </script>
<script>
    let W = window.innerWidth;
    let H = window.innerHeight;
    const canvas = document.getElementById("canvas");
    const context = canvas.getContext("2d");
    const maxConfettis = 10;
    const particles = [];

    const possibleColors = [
        "DodgerBlue",
        "OliveDrab",
        "Gold",
        "Pink",
        "SlateBlue",
        "LightBlue",
        "Gold",
        "Violet",
        "PaleGreen",
        "SteelBlue",
        "SandyBrown",
        "Chocolate",
        "Crimson"
    ];

    function randomFromTo(from, to) {
        return Math.floor(Math.random() * (to - from + 1) + from);
    }

    function confettiParticle() {
        this.x = Math.random() * W; // x
        this.y = Math.random() * H - H; // y
        this.r = randomFromTo(11, 33); // radius
        this.d = Math.random() * maxConfettis + 11;
        this.color =
            possibleColors[Math.floor(Math.random() * possibleColors.length)];
        this.tilt = Math.floor(Math.random() * 33) - 11;
        this.tiltAngleIncremental = Math.random() * 0.07 + 0.05;
        this.tiltAngle = 0;

        this.draw = function () {
            context.beginPath();
            context.lineWidth = this.r / 2;
            context.strokeStyle = this.color;
            context.moveTo(this.x + this.tilt + this.r / 3, this.y);
            context.lineTo(this.x + this.tilt, this.y + this.tilt + this.r / 5);
            return context.stroke();
        };
    }

    function Draw() {
        const results = [];

        // Magical recursive functional love
        requestAnimationFrame(Draw);

        context.clearRect(0, 0, W, window.innerHeight);

        for (var i = 0; i < maxConfettis; i++) {
            results.push(particles[i].draw());
        }

        let particle = {};
        let remainingFlakes = 0;
        for (var i = 0; i < maxConfettis; i++) {
            particle = particles[i];

            particle.tiltAngle += particle.tiltAngleIncremental;
            particle.y += (Math.cos(particle.d) + 3 + particle.r / 2) / 2;
            particle.tilt = Math.sin(particle.tiltAngle - i / 3) * 15;

            if (particle.y <= H) remainingFlakes++;

            // If a confetti has fluttered out of view,
            // bring it back to above the viewport and let if re-fall.
            if (particle.x > W + 30 || particle.x < -30 || particle.y > H) {
                particle.x = Math.random() * W;
                particle.y = -30;
                particle.tilt = Math.floor(Math.random() * 10) - 20;
            }
        }

        return results;
    }

    window.addEventListener(
        "resize",
        function () {
            W = window.innerWidth;
            H = window.innerHeight;
            canvas.width = window.innerWidth;
            canvas.height = window.innerHeight;
        },
        false
    );

    // Push new confetti objects to `particles[]`
    for (var i = 0; i < maxConfettis; i++) {
        particles.push(new confettiParticle());
    }

    // Initialize
    canvas.width = W;
    canvas.height = H;
    Draw();
</script>

</html>