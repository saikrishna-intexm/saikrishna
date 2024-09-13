<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- Font Family -->
    <link
        href="<?php echo base_url(); ?>assets/cashe/https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <!-- Style CSS -->
    <link href="<?php echo base_url(); ?>assets/cashe/css/style.css" rel="stylesheet">
</head>

<body>
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
                      <a href="<?php echo base_url(); ?>assets/cashe/#" class="mainlogo"><img src="<?php echo base_url(); ?>assets/cashe/img/logo.png" width="120px" class="img-fluid" alt="Logo"></a>
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
    background: #7F7FD5;  /* fallback for old browsers */
background: -webkit-linear-gradient(to right, #91EAE4, #86A8E7, #7F7FD5);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to right, #91EAE4, #86A8E7, #7F7FD5); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */

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
    background: linear-gradient(#762c2c,#ff0303);
    }
    .box-body .img{
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
    .box-body:hover .img{
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
    background: linear-gradient(#ffffff,#ffefa0)
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
    background: linear-gradient(#ffefa0,#fff)
    }
    .box-bowtie {
    z-index: 1;
    height: 100%;
    }
    .box-bowtie::before, .box-bowtie::after {
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
    90%, 100% {
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
    90%, 100% {
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
                    <div class="row">
                        <div class="col-12">
                            <div class="d-flex justify-content-center py-3">
                                <div class="col-12 mt-5 d-flex justify-content-center">
                                  <div class="box">
                                    <div class="box-body">
                                      <img class="img" style="width:125px;" src="https://media.licdn.com/dms/image/C4D0BAQFnxdsHaiO-Lw/company-logo_200_200/0/1672717138308?e=2147483647&v=beta&t=ILG0ESdoRfEoiAPYL4BkD6ezLVGCJ1cDJK08bkSJ-NE">
                                      <div class="box-lid">
                                        
                                        <div class="box-bowtie"></div>
                                        
                                      </div>
                                    </div>
                                  </div>
                                </div>
                            </div>
                            <div class="mt-5 d-flex justify-content-center text-center">
                                <h1 class="text-dark ">
                                    <div class="font-weight-normal mb-3"> Approval is Ready for upto <span class="text-info"><strong>Rs. 2,00,000</strong></span></div>
                                </h1>
                            </div>
                            <div class=" flex-column text-center px-3">
                                <h4 class="text-dark py-0 my-0"> CASHe - Personal Loan</h4>
                                <p class="py-0 mt-0 mb-3"><strong> <small> Instant Disbursement in 2mins<br>
								Low interest<br>
								Hassle-free process
</small> </strong></p>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="position-relative ">
                   <div class="row">
                    <div class="col-12">
                        <div class="plStepsSection"><div class="plStepsHeading">
                            03 Easy Steps
                        </div> <div class="plStepsListBlock"><div class="eachStepBlock stepSuccess"><span class="stepHeading">
                                    01
                                </span> <span class="stepDescription">
                                    Check Eligibility 
                                </span></div> <div class="eachStepBlock stepWaring"><span class="stepHeading">
                                    02
                                </span> <span class="stepDescription">
                                    Select Loan Amount &amp; Tenure
                                </span></div> <div class="eachStepBlock stepPrimary"><span class="stepHeading">
                                    03
                                </span> <span class="stepDescription">
                                    Upload KYC and verify bank account 
                                </span></div></div> <div class="plStepsDescription">
                            and money will be disbursed to your account
                        </div></div>
                    </div>
                   </div>

                    
                </section>
            </div>
           <div class="col-12 my-5 d-flex justify-content-center sticky-top">
                <a href="<?php echo base_url(); ?>assets/cashe/" class="btn btn-hover w-100 d-block color-1">Apply Now</a>
            </div>

            <!-- <div class="tc">
                <h6><a href="<?php echo base_url(); ?>assets/cashe/text-info">T & C Apply</a> </h6>
            </div> -->
        </div>

        <footer class="bg-dark px-3 text-center mt-3">
            <div class="row py-3">
                <div class="col-12">
                    <small> Copyright ©2023 KeyToLoans ®. All Rights Reserved</small>
                </div>
            </div>
        </footer>
    </main>



    <!-- Loader -->
    <!-- <div class="loader-position">
        <img src="<?php echo base_url(); ?>assets/cashe/img/loader.svg" width="30px" class="img-fluid me-2" alt="">
        <br>
        <h6 class="font-18 mb-2">Processing Your Loan</h6>
        <p class="px-5">We are checking your loan approval It'll just take a moment</p>
    </div> -->
</body>

</html>