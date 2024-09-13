<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Landing Page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- favicon -->
    <link rel="shortcut icon" href="images/favicon.ico" />
    <!-- css -->
    <link href="<?php echo base_url(); ?>./assets/success/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url(); ?>./assets/success/css/style.min.css" rel="stylesheet" type="text/css" />
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
        }

        .text-dark {
            font-weight: 600 !important;
        }

        .main {
            /* height: 200px; */
            display: flex;
            align-items: end;
            justify-content: center;

        }

        canvas {
            position: absolute;
            top: 0;
            z-index: 0;
        }

        @media (min-width: 200px) and (max-width: 768px) {
            .bg-home {
                padding: 60px 0px 0px 0px !important;
            }
        }

        .new {
            padding: 10px 20px;
            background-color: #10a6ba;
            color: white;
            border: 1px solid white;
            border-radius: 5px;
            font-weight: 800 !important;
        }

        .active-card {
            background-color: #10a6ba;
            color: white;
            border: 1px solid transparent;
            cursor: pointer;
            transition: transform .2s;
        }

        .normal-card {
            border: 1px solid #10a6ba;
            color: #10a6ba;
            cursor: pointer;
            transition: transform .2s;
        }

        .normal-card:hover,
        .active-card:hover {
            transform: scale(1.0) !important;
        }

        .fade-out {
            opacity: 0;
            transition: opacity 10s ease-out;
        }

        .fade-in {
            opacity: 1;
            transition: opacity 10s ease-in;
        }

        .submit {
            padding: 7px 22px;
            background-color: #10a6ba;
            color: white;
            font-size: 15px;
            /* font-weight: 500 !important; */
        }
        .btn:hover {
            padding: 7px 22px;
            background-color: #10a6ba;
            color: white;
            font-size: 15px;
            /* font-weight: 500 !important; */
        }
        .bg-main {
            background-color: #10A6BA;
        }

        legend {
            font-size: 18px !important;
        }

        /* Custom checkbox styles */
        /* Custom checkbox styles */
        .checkbox-input.custom-checkbox {
            /* Hide the default checkbox */
            appearance: none;
            -webkit-appearance: none;
            -moz-appearance: none;
            /* Set the size of the checkbox */
            width: 20px;
            height: 20px;
            /* Customize the inactive state */
            background-color: #fff;
            border: 2px solid #10A6BA;
            /* Center the checkbox */
            display: inline-block;
            vertical-align: middle;
            position: relative;
            cursor: pointer;
        }

        /* Style for the tick mark in active state */
        .checkbox-input.custom-checkbox:checked::after {
            content: '';
            position: absolute;
            left: 6px;
            top: 2px;
            width: 5px;
            height: 10px;
            border: solid #10a6ba;
            /* Change tick mark color */
            border-width: 0 2px 2px 0;
            transform: rotate(45deg);
        }

        .border-main {
            border: 1px solid #10a6ba;
        }
    </style>
</head>

<body>
    <canvas id="canvas"></canvas>
    <nav class="navbar navbar-expand-lg fixed-top navbar-custom sticky" style="padding: 0;">
        <div class="container" style="justify-content: center;">
            <a class="navbar-brand logo text-uppercase" href="index.html">
                <img src="<?php echo base_url(); ?>./assets/success/images/logo.png" alt="" width="60px" class="" />
            </a>
        </div>
    </nav>
    <section class="bg-home align-items-center mt-3" id="home">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 main" style="text-align: center; z-index: -1;">
                    <div class="home-contact mt-2">
                        <img src="<?php echo base_url(); ?>./assets/success/images/success1.svg" width="250px"
                            alt="illustration">
                        <h5 class="fw-bold" style="margin-bottom: 0px; padding: 0px 30px; line-height: 1.5;"> Your one
                            step away to get your dream loan</h5>
                    </div>
                </div>

                <!-- <div id="select-employment"
                    class="mt-4 py-4 container p-0 d-flex align-items-center justify-content-center flex-column"
                    style="box-shadow: 0px 0px 20px 10px rgba(38, 107, 193, .08); background-color: white; border-radius: 4px; border: 1px solid transparent; width: 90vw; border: 1px solid #dfdfdf;">
                    <div class="container text-left">
                        <h6 class="p-0 px-3 m-0">Choose Employment Type</h6>
                    </div>
                    <div class="container d-flex justify-content-around mt-3 mb-3">
                        <div class="card col-5 d-flex align-items-center justify-content-center p-2 self-card normal-card"
                            onclick="toggleCard('self')">
                            <img src="<?php echo base_url(); ?>./assets/success/images/self-color.svg" alt="icon"
                                width="50px" class="p-2" id="self-icon">
                            <p class="p-0 m-0">Self-Employed</p>
                        </div>
                        <div class="card col-5 d-flex align-items-center justify-content-center p-2 salaried-card normal-card"
                            onclick="toggleCard('salaried')">
                            <img src="<?php echo base_url(); ?>./assets/success/images/salaried-color.svg" alt="icon"
                                width="50px" class="p-2" id="salaried-icon">
                            <p class="p-0 m-0">Salaried</p>
                        </div>
                    </div>
                </div> -->
                <div class="container p-4 pt-1 d-flex justify-content-center flex-column" id="box">
                    <fieldset class="border p-4 rounded">
                        <legend class="w-auto px-0 mb-2 fw-bold text-center">Choose Employment :</legend>
                        <div class="d-flex my-2 justify-content-center align-items-center" style="gap: 10px;">
                            <!-- Salaried Employment Option -->
                            <div id="salariedDiv"
                                class="col-6 d-flex flex-column justify-content-center align-items-center border-main rounded fw-bold p-2 bg-main text-light">
                                <div class="container-fluid p-0 m-0" style="height: 15px !important;">
                                    <input type="checkbox" name="employment" class="checkbox-input custom-checkbox"
                                        id="salariedinput" checked>
                                </div>
                                <svg width="75" height="75" viewBox="0 0 300 300" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0_363_863)">
                                        <path
                                            d="M159.162 108.565V80.3166C159.162 78.165 160.272 76.2217 162.146 74.9724C164.02 73.7231 164.783 73.7925 166.172 73.7925C167.56 73.7925 169.989 74.5559 171.377 75.9441C175.403 80.1084 181.024 82.4682 186.855 82.4682H195.391C201.291 82.4682 206.913 80.1084 210.938 75.9441C213.298 73.4454 217.324 73.029 220.239 74.9724C223.154 76.9157 223.223 78.165 223.223 80.3166V108.565C223.223 125.361 208.856 139.103 191.227 139.103C173.529 139.034 159.162 125.361 159.162 108.565ZM150.972 80.3166C150.972 75.4582 153.47 70.8774 157.635 68.1012C163.881 63.9368 172.21 64.8391 177.346 70.1834C179.775 72.7514 183.315 74.2089 186.993 74.2089H195.53C199.209 74.2089 202.679 72.7514 205.178 70.1834C210.383 64.8391 218.642 63.9368 224.889 68.1012C231.135 72.2655 231.552 75.3888 231.552 80.3166V89.8252C235.855 84.2728 237.729 77.1934 236.549 70.461C235.161 62.6181 231.066 61.4382 229.678 61.0218C224.82 59.5643 221.21 55.5387 220.447 50.7497C219.822 47.0712 217.393 44.2256 212.882 41.9352C204.692 37.7708 194.073 38.0484 184.703 38.7425C174.57 39.5754 160.827 42.8374 152.915 53.9424C149.306 59.009 147.154 65.1861 146.391 72.2655C145.766 78.4427 147.501 84.5504 151.11 89.5476V80.3166H150.972ZM233.079 156.247L221.21 150.972L215.172 158.259C215.172 158.259 215.103 158.259 215.103 158.398L197.682 179.428L205.108 188.729L233.079 156.247ZM177.485 188.729L184.842 179.428L167.421 158.537C167.421 158.468 167.421 158.398 167.282 158.398H167.213C167.213 158.329 161.036 150.902 161.036 150.902L149.306 156.108L177.485 188.729ZM207.746 154.303V143.823C202.748 146.044 197.127 147.224 191.297 147.293H191.088C185.189 147.293 179.636 146.044 174.639 143.823V154.373L191.227 174.292L207.746 154.303ZM259.175 167.837C258.828 167.699 258.551 167.56 258.273 167.421L240.922 159.717L208.023 197.821C207.26 198.723 206.08 199.209 204.9 199.209H204.831C203.581 199.209 202.471 198.584 201.707 197.682L191.435 184.772H191.158L180.816 197.682C180.053 198.654 178.942 199.209 177.693 199.209H177.624C176.444 199.209 175.333 198.723 174.5 197.821L141.532 159.648L124.042 167.421C119.67 169.364 115.783 172.141 112.59 175.472H130.566C137.229 175.472 142.643 180.261 142.643 186.161V203.929C142.643 207.329 140.838 210.522 137.785 212.535C135.772 213.854 133.273 214.617 130.705 214.686C130.15 214.756 129.664 214.756 129.109 214.825V256.955C129.109 258.62 128.831 260.147 128.207 261.605H238.77V205.733C238.77 203.443 240.575 201.638 242.865 201.638C245.155 201.638 246.96 203.443 246.96 205.733V261.605H275L274.653 192.06C274.653 181.649 268.684 172.418 259.175 167.837ZM130.566 206.427C131.607 206.427 132.579 206.149 133.273 205.664C133.62 205.386 134.453 204.761 134.453 203.929V186.161C134.453 184.981 132.857 183.662 130.566 183.662H28.8867C26.6657 183.662 25 184.981 25 186.161V203.929C25 205.108 26.6657 206.427 28.8867 206.427H29.2338L34.6474 206.844H34.8556C40.5469 207.26 46.2382 207.607 51.9295 207.815C55.4692 207.954 59.0089 208.093 62.4098 208.232V204.276C62.4098 201.985 64.2143 200.181 66.5047 200.181H93.0178C95.3082 200.181 97.1127 201.985 97.1127 204.276V208.162C97.8068 208.162 98.4314 208.162 99.1255 208.093C107.385 207.815 115.991 207.399 124.597 206.774H124.736C126.541 206.635 128.415 206.497 130.219 206.358C130.358 206.427 130.428 206.427 130.566 206.427ZM88.9228 208.44H70.5997V216.769H88.9228V208.44ZM97.1127 216.491V220.933C97.1127 223.223 95.3082 225.028 93.0178 225.028H66.4353C64.1449 225.028 62.3404 223.223 62.3404 220.933V216.56C58.8007 216.491 55.1916 216.352 51.513 216.144C47.2099 215.936 42.8373 215.728 38.4647 215.45V257.024C38.4647 259.592 40.5469 261.674 43.1149 261.674H116.199C118.767 261.674 120.85 259.592 120.85 257.024V215.45C113.562 215.936 106.274 216.283 99.2643 216.491C98.6396 216.422 97.8762 216.422 97.1127 216.491ZM59.9806 165.825C59.9806 162.84 62.4098 160.411 65.3942 160.411H94.1283C97.1127 160.411 99.5419 162.84 99.5419 165.825V175.472H107.732V165.825C107.732 158.329 101.624 152.221 94.1283 152.221H65.3942C57.8984 152.221 51.7907 158.329 51.7907 165.825V175.472H59.9806V165.825Z"
                                            fill="#fff" id="salaried-svg" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_363_863">
                                            <rect width="250" height="223.348" fill="white"
                                                transform="translate(25 38.3262)" />
                                        </clipPath>
                                    </defs>
                                </svg>
                                <div onclick="some()">
                                    <span  id="salariedlabel"  >Salaried</span>
                                </div>
                               
                            </div>
        
                            <!-- Self-Employed Employment Option -->
                            <div id="selfDiv"
                                class="col-6 d-flex flex-column justify-content-center align-items-center border-main rounded fw-bold p-2">
                                <div class="container-fluid p-0 m-0" style="height: 15px !important;">
                                    <input type="checkbox" name="employment" class="checkbox-input custom-checkbox"
                                        id="selfinput">
                                </div>
                                <svg width="75" height="75" viewBox="0 0 300 300" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M174.059 154.51C176.43 154.51 244.941 148.437 275 121.377V79.4698C275 73.7669 270.711 68.9124 265.007 68.9124H210.462V66.6782C210.462 51.8253 198.443 39.7007 183.59 39.7007H116.867C102.014 39.7007 90.2175 51.8253 90.2175 66.6782V68.9124H35.45C29.7471 68.9124 25 73.7669 25 79.4698V120.831C54.7471 148.36 124.135 154.51 126.531 154.51L174.059 154.51ZM101.766 66.6778C101.766 58.3178 108.507 51.249 116.867 51.249H183.59C191.95 51.249 198.913 58.3178 198.913 66.6778V68.9119H101.766V66.6778Z"
                                        fill="#10A6BA" id="self-top-svg" />
                                    <path
                                        d="M173.777 166.387V174.989C173.777 175.394 173.787 176.06 173.384 176.06H127.544C127.005 176.06 126.902 175.28 126.902 174.741V166.387C126.902 166.387 126.587 166.366 126.54 166.362C123.644 166.126 57.0083 160.407 25 133.51V250.268C25 255.971 29.7471 260.299 35.45 260.299H265.007C270.71 260.299 275 255.971 275 250.268V134.032C242.779 160.512 176.973 166.147 174.095 166.382C174.047 166.386 173.777 166.387 173.777 166.387Z"
                                        fill="#10A6BA" id="self-bottom-svg" />
                                </svg>

                                <div  onclick="some2()">
                                    <span id="selflabel" >Self Employee</span>
                                </div>
                               
                            </div>
                        </div>
                        <button type="button" id="submit"
                            class="btn bg-main text-light container-fluid mt-2 submit">Proceed</button>
                    </fieldset>
                </div>
                <!-- <div class="d-none mb-5 pb-5" id="cards">
                    <?php foreach ($offers as $offer): ?>
                        <div class="col-lg-5 offset-lg-1" id="form">
                            <div class="home-registration-form bg-white p-3 mt-2">
                                <div class="apply d-flex align-items-center justify-content-between">
                                    <div class="d-flex align-items-center">
                                        <img src="<?php echo base_url(); ?>assets/campaign/offers/icons/<?php echo $offer->offer_icon; ?>"
                                            alt="logo" width="60px" height="60px">
                                        <div style="margin-right: 10px; margin-left: 10px;">
                                            <p class="p-0 m-0" style="font-size: 16px;"><?php echo $offer->offer_name; ?>
                                            </p>
                                            <p style="font-size: 12px;" class="p-0 m-0 text-muted">Interest @
                                                <?php echo $offer->offer_interest_rate; ?> PA
                                            </p>
                                            <p style="font-size: 12px;" class="p-0 m-0 text-muted">Loan Upto
                                                Rs.<?php echo $offer->offer_loan_amount; ?>/-</p>
                                        </div>
                                    </div>
                                    <a href="<?php echo $offer->offer_url . "" . $utm_source; ?>"
                                        style="cursor: pointer; color: #fff;text-wrap: nowrap; " target="_blank"
                                        class="btn btn-info" role="button">Apply Now</a>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div> -->
            </div>

        </div>
    </section>

    <section class="section bg-light"
        style="padding-top: 10px; padding-bottom: 10px; position: fixed; bottom: 0; width: 100vw;">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="text-center">
                        <p class="text-muted mb-0">
                            <script>document.write(new Date().getFullYear())</script> © All rights Reserved
                        </p>
                    </div>
                </div>
                <div style="margin-top: 5px;" class="text-center">
                    <a href="https://lowcredit.in/privacy" class="text-muted"
                        style="color: black; font-size: 13px;">Privacy
                        policy | </a>
                    <a href="https://lowcredit.in/terms_and_conditions" class="text-muted"
                        style="color: black; font-size: 13px;">Terms &
                        conditions</a>
                </div>
            </div>
        </div>
    </section>
    <script>
        const selfRadio = document.getElementById('selfinput');
        const salariedRadio = document.getElementById('salariedinput');
        var selftopsvg = document.getElementById('self-top-svg');
        var selfbottomsvg = document.getElementById('self-bottom-svg');
        var salariedsvg = document.getElementById('salaried-svg');
        var salarieddiv = document.getElementById('salariedDiv');
        var selfdiv = document.getElementById('selfDiv');
        var salariedlabel = document.getElementById('salariedlabel');
        var selflabel = document.getElementById('selflabel');
        const submitButton = document.getElementById('submit');


        // Function to handle checkbox selection
        function handleCheckboxSelection(divId) {
            var div = document.getElementById(divId);
            var checkbox = div.querySelector('input[type="checkbox"]');
            var isChecked = checkbox.checked;

            // Toggle the checkbox state
            checkbox.checked = !isChecked;

            // Apply styles based on the checkbox state
            if (!isChecked) {
                div.classList.add('bg-main');
                div.classList.add('text-light');
            } else {
                div.classList.remove('bg-main');
                div.classList.remove('text-light');
            }

            if (divId == 'salariedDiv') {
                salariedsvg.setAttribute('fill', checkbox.checked ? '#fff' : '#10A6BA');
                selfdiv.classList.remove('bg-main');
                selfdiv.classList.remove('text-light');
                selftopsvg.setAttribute('fill', '#10A6BA');
                selfbottomsvg.setAttribute('fill', '#10A6BA');
            } else {
                selftopsvg.setAttribute('fill', checkbox.checked ? '#fff' : '#10A6BA');
                selfbottomsvg.setAttribute('fill', checkbox.checked ? '#fff' : '#10A6BA');
                salariedsvg.setAttribute('fill', '#10A6BA');
                salarieddiv.classList.remove('bg-main');
                salarieddiv.classList.remove('text-light');
            }

            // Uncheck all other checkboxes in the same group
            var checkboxes = document.querySelectorAll('input[type="checkbox"][name="' + checkbox.name + '"]');
            checkboxes.forEach(function (cb) {
                if (cb !== checkbox) {
                    cb.checked = false;
                }
            });
        }


        // Add click event listeners to divs
        document.getElementById('salariedDiv').addEventListener('click', function () {
            handleCheckboxSelection('salariedDiv');
        });

        document.getElementById('selfDiv').addEventListener('click', function () {
            handleCheckboxSelection('selfDiv');
        });
        selfRadio.addEventListener('click', function () {
            handleCheckboxSelection('selfDiv');
        });
        salariedRadio.addEventListener('click', function () {
            handleCheckboxSelection('salariedDiv');
        });
        function some()
        {
            handleCheckboxSelection('selfDiv');
            console.log('hi');
            
        }
        function some2()
        {
            handleCheckboxSelection('salariedDiv');
            console.log('hi');
            
        }
        
    </script>
    <script>
       
          
            var baseUrlSelf = "https://lowcredit.in/campaign/load_multi_offer?series=14&utm_source=";
            var baseUrlSalaried = "https://lowcredit.in/campaign/load_multi_offer?series=13&utm_source=";

            // Get the utm_source parameter from the current URL
            var urlParams = new URLSearchParams(window.location.search);
            var utmSource = urlParams.get('utm_source') || '';

            // Construct the full URLs with the utm_source parameter
            var selfUrl = baseUrlSelf + utmSource;
            var salariedUrl = baseUrlSalaried + utmSource;

            // Get both cards

            submitButton.addEventListener('click', (event) => {
                if (selfRadio.checked) {
                    window.location.href = selfUrl;
                } else if (salariedRadio.checked) {
                    window.location.href = salariedUrl;
                }
            });
    

        // Check the URL for the employment_type parameter and set the default state
        // window.onload = function () {
        //     var urlParams = new URLSearchParams(window.location.search);
        //     var employmentType = urlParams.get('employment_type');
        //     if (employmentType) {
        //         toggleCard(employmentType);
        //     }
        // };
    </script>
</body>

</html>