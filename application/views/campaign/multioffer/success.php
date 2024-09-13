<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Landing Page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="Premium Bootstrap 4 Landing Page Template" />
    <meta name="keywords" content="bootstrap 4, premium, marketing, multipurpose" />
    <meta content="Themesdesign" name="author" />
    <!-- favicon -->
    <link rel="shortcut icon" href="images/favicon.ico" />
    <!-- css -->
    <link href="<?php echo base_url(); ?>assets/campaign/multioffer/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url(); ?>assets/campaign/multioffer/css/style.min.css" rel="stylesheet" type="text/css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Mukta:wght@200;300;400;500;600;700;800&family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap"
        rel="stylesheet">
    <style>
        * {
            font-family: "Ubuntu", sans-serif !important;
            font-weight: 400 !important;
            font-style: normal !important;
            text-wrap: nowrap;
        }

        .text-dark {
            font-weight: 600 !important;
        }

        .main {
            display: flex;
            align-items: end;
            justify-content: center;

        }

        canvas {
            position: absolute;
            top: 0;
            z-index: -1;
        }

        .bg-home {
            padding: 60px 0px 30px 0px;
        }
        .new{
            padding: 10px 20px;
            background-color: #0277D7;
            color: white;
            border: 1px solid white;
            border-radius: 5px;
            font-weight: 800 !important;
        }
    </style>
</head>

<body>
    <canvas id="canvas"></canvas>
    <nav class="navbar navbar-expand-lg fixed-top navbar-custom sticky" style="padding: 0;">
        <div class="container" style="justify-content: center;">
            <a class="navbar-brand logo text-uppercase" href="index.html">
                <img src="<?php echo base_url(); ?>assets/campaign/multioffer/images/logo.png" alt="" width="70px" class="" />
            </a>
        </div>
    </nav>
    <section class="bg-home align-items-center mt-5" id="home">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 main" style="text-align: center; z-index: -1;">
                    <div class="home-contact">
                        <img src="<?php echo base_url(); ?>assets/campaign/multioffer/images/success.svg" width="200px" alt="illustration">
                        <h5 class="fw-bold" style="margin-bottom: 0px; padding: 0px 30px; line-height: 1.5; text-wrap: wrap; ">Hurray!
                            your eligible to apply for the below loans</h5>
                    </div>
                </div>
                <?php foreach($offers as $offer): ?>
                <div class="col-lg-5 offset-lg-1" id="form">
                    <div class="home-registration-form bg-white p-3 mt-2">
                        <div class="apply d-flex align-items-center justify-content-between">
                            <div class="d-flex align-items-center">
                                <img src="<?php echo base_url(); ?>assets/campaign/offers/icons/<?php echo $offer->offer_icon; ?>" alt="logo" width="60px" height="60px">
                                <div style="margin-right: 10px; margin-left: 10px;">
                                    <p class="p-0 m-0" style="font-size: 16px;"><?php echo $offer->offer_name; ?></p>
                                    <p style="font-size: 12px;" class="p-0 m-0 text-muted">Interest @ <?php echo $offer->offer_interest_rate; ?> PA</p>
                                    <p style="font-size: 12px;" class="p-0 m-0 text-muted">Loan Upto Rs.<?php echo $offer->offer_loan_amount; ?>/-</p>
                                    <p style="font-size: 12px;" class="p-0 m-0 text-muted mt-2">Approval percentage 80%</p>
                                </div>
                            </div>
                            <a href="<?php echo $offer->offer_url."". $utm_source; ?>" style="cursor: pointer; color: #fff; " target="_blank" class="btn btn-info" role="button">Apply Now</a>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
                <!-- <div class="col-lg-5 offset-lg-1" id="form">
                    <div class="home-registration-form bg-white p-3 mt-2">
                        <div class="apply d-flex align-items-center justify-content-between">
                            <div class="d-flex align-items-center">
                                <img src="<?php //echo base_url(); ?>assets/campaign/multioffer/images/logo.png" alt="logo" width="50px" height="50px">
                                <div style="margin-right: 10px; margin-left: 10px;">
                                    <p class="p-0 m-0" style="font-size: 16px;">CASH-E</p>
                                    <p style="font-size: 12px;" class="p-0 m-0 text-muted">Interest @ 9% PA</p>
                                    <p style="font-size: 12px;" class="p-0 m-0 text-muted">Loan Upto Rs.5,00,000/-</p>
                                </div>
                            </div>
                            <button class="new" style="text-wrap: nowrap;">Apply Now</button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 offset-lg-1" id="form">
                    <div class="home-registration-form bg-white p-3 mt-2">
                        <div class="apply d-flex align-items-center justify-content-between">
                            <div class="d-flex align-items-center">
                                <img src="<?php //echo base_url(); ?>assets/campaign/multioffer/images/logo2.png" alt="logo" width="40px" height="40px">
                                <div style="margin-right: 10px; margin-left: 10px;">
                                    <p class="p-0 m-0" style="font-size: 16px;">FIBE MONEY</p>
                                    <p style="font-size: 12px;" class="p-0 m-0 text-muted">Interest @ 9% PA</p>
                                    <p style="font-size: 12px;" class="p-0 m-0 text-muted">Loan Upto Rs.5,00,000/-</p>
                                </div>
                            </div>
                            <button class="new" style="text-wrap: nowrap;">Apply Now</button>
                        </div>
                    </div>
                </div> -->
            </div>
        </div>
    </section>

    <section class="section bg-light" style="padding-top: 10px; padding-bottom: 10px; ">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="text-center">
                        <p class="text-muted mb-0">
                            <script>document.write(new Date().getFullYear())</script> © All rights Reserved
                        </p>
                    </div>
                </div>
            </div>
            <div style="margin-top: 5px;" class="text-center">
                <a href="https://lowcredit.in/privacy" class="text-muted"
                    style="color: black; font-size: 13px;">Privacy policy | </a>
                <a href="https://lowcredit.in/terms_and_conditions" class="text-muted"
                    style="color: black; font-size: 13px;">Terms &
                    conditons</a>
            </div>
        </div>
    </section>
    <script>
        let W = window.innerWidth;
        let H = window.innerHeight;
        const canvas = document.getElementById("canvas");
        const context = canvas.getContext("2d");
        const maxConfettis = 20;
        const particles = [];

        const possibleColors = [
            "yellow",
            "lightyellow",
            "Gold",
            "orange",
            "SlateBlue",
            "LightBlue",
            "Gold",
            "Violet",
            "white",
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

        // Push new confetti objects to particles[]
        for (var i = 0; i < maxConfettis; i++) {
            particles.push(new confettiParticle());
        }

        // Initialize
        canvas.width = W;
        canvas.height = H;
        Draw();

    </script>
</body>

</html>