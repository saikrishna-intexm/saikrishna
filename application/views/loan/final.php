<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thank-You</title>
    <!-- Bootstrap-css include -->
    <link rel="stylesheet" href="assets/bootstrap.min.css">
    <style>
        * {
            padding: 0;
            margin: 0;
        }

        body {
            display: none;
            color: white;
            /* background: hsla(164, 38%, 18%, 0);
            background: linear-gradient(45deg, hsla(164, 38%, 18%, 1) 0%, hsla(158, 77%, 77%, 1) 100%);
            background: -moz-linear-gradient(90deg, hsla(164, 38%, 18%, 1) 0%, hsla(158, 77%, 77%, 1) 100%);
            background: -webkit-linear-gradient(90deg, hsla(164, 38%, 18%, 1) 0%, hsla(158, 77%, 77%, 1) 100%);
            filter: progid: DXImageTransform.Microsoft.gradient(startColorstr="#1C3E35", endColorstr="#99F2D1", GradientType=1); */
            /* background-color: rgba(0, 0, 0, 255); */
            /* background: linear-gradient(135deg, #000 0%, #0f1c52 40%, #000 100%); */
            background-color: white;
            color: black;
            /* background: radial-gradient(circle, hsla(158, 77%, 77%, 1) 0%, hsla(164, 38%, 18%, 1) 100%); */
        }

        .container {
            height: 95vh;
        }
        h2{
            font-size: 1.5rem;
            padding: 0;
            margin: 0;
            margin-bottom: 30px;
            font-weight: 800;
        }
        p{
            margin-bottom: 0;
        }
        h3{
            padding: 0;
            margin: 0;
        }

        img {
            animation: bounce 1s ease-in-out 1;
        }

        @keyframes bounce {
            0% {
                transform: scale(1);
            }

            50% {
                transform: scale(1.2);
            }

            100% {
                transform: scale(1);
            }
        }

        canvas {
            overflow-y: hidden;
            overflow-x: hidden;
            width: 100%;
            margin: 0;
        }
        .main{
            position: absolute;
            top: 0;
        }
        button{
            margin-top: 20px;
            padding: 3px 80px 3px 80px;
            background-color: #62b034;
            color: white;
            border: 1px solid transparent;
            border-radius: 5px;
            font-weight: 600;
        }
        footer{
            position: fixed;
            bottom: 0;
            width: 100vw;
            border-top: 1px double black;
            text-align: center;
        }
        a{
            text-align: center;
            font-size: 12px;
            color: black;
            margin-top: 5px;
            text-decoration: none;
            font-weight: 500;
        }
        h4{
            font-size: 20px;
            margin-bottom: 10px;
            width: 80vw;
            text-align: center;
            border-bottom: 1px dotted black;
            text-transform: uppercase;
            background-color: #62b034;
            color: white;
        }
    </style>
</head>

<body>
    <canvas id="canvas"></canvas>
    <div class="main">
        <div class="container d-flex align-items-center justify-content-center flex-column ">
            <h4 class="mb-4">YOUR LOAN STATUS</h4>
            <h2>CONGRATULATIONS</h2>
            <img src="./assets/final.png" width="85%" class="mb-4">
            <p>Your submission has been received</p>
            <h3 class="text-center">Your Loan Application is being processed</h3>
            <!-- <button>Click Here</button> -->
            <footer>
                <a>All copyrights reserved @ 2024</a>
            </footer>
        </div>
    </div>
    <script>
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
                body.style.display = 'block'; // Display on smaller screens
            } else {
                body.style.display = 'none'; // Hide on larger screens
            }
        }
        let W = window.innerWidth;
        let H = window.innerHeight;
        const canvas = document.getElementById("canvas");
        const context = canvas.getContext("2d");
        const maxConfettis = 10;
        const particles = [];

        const possibleColors = [
            "goldenrod",
            "Gold",
            "Pink",
            "LightBlue",
            "Gold",
            "Violet",
            "PaleGreen",
            "SteelBlue",
            "orange ",
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
</body>

</html>