<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" >
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css" >
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,300;0,400;0,600;0,700;1,100;1,600;1,700&display=swap" rel="stylesheet">
    <title>Lending India</title>
    <style>
      @keyframes bounce {
        0% {
          transform: scale(1);
        }
        33% {
          transform: scale(0.9);
        }
        66% {
          transform: scale(1.1);
        }
        100% {
          transform: scale(1);
        }
      }
      .steps {
          display: flex;
          width: 100%;
          margin: 0;
          padding: 0;
          list-style: none;
      }
      .step {
          display: flex;
          align-items: center;
          justify-content: center;
          flex-direction: column;
          flex: 1;
          position: relative;
          pointer-events: none;
      }
      .step:not(:last-child):before,
      .step:not(:last-child):after {
          display: block;
          position: absolute;
          top: 50%;
          left: 50%;
          height: 0.25rem;
          content: "";
          transform: translateY(-50%);
          will-change: width;
      }
      .step:before {
          width: 100%;
          background-color: #fff;
      }
      .step:after {
          width: 0;
          background-color: #fff;
      }
      .step--complete:after {
          width: 100% !important;
          opacity: 1;
          transition: width 0.6s ease-in-out, opacity 0.6s ease-in-out;
      }
      .step__icon {
          display: flex;
          align-items: center;
          justify-content: center;
          position:absolute;
          width: 3rem;
          height: 3rem;
          background-color: #292627;
          border: 0.25rem solid #e6e7e8;
          border-radius: 50%;
          color: transparent;
          font-size: 2rem;
          z-index: 1;
      }
      .step__icon:before {
          display: block;
          color: #fff;
          content: "\2713";
      }
      .step--complete.step--active .step__icon {
          color: #000;
          transition: background-color 0.3s ease-in-out, border-color 0.3s ease-in-out, color 0.3s ease-in-out;
      }
      /*.step--incomplete.step--active .step__icon {
          border-color: #fff;
          transition-delay: 0.5s;
      }*/
      .step--complete .step__icon {
          animation: bounce 0.5s ease-in-out;
          background-color: #fff;
          border-color: #fff;
          color: #fff;
      }
      .step__label {
          position: absolute;
          bottom: -71px;
          left: 50%;
          margin-top: 0;
          font-size: 14px;
          text-transform: none;
          transform: translateX(-50%);
          color: #fff;
          text-align: center;
          line-height: 18px;
      }
      .step--incomplete.step--inactive .step__label {
          color: #fff;
      }
      .step--incomplete.step--active .step__label {
          color: #fff;
      }
      .step--active .step__label {
          transition: color 0.3s ease-in-out;
          transition-delay: 0.5s;
      }
      .step.step--incomplete.step--complete .step__icon:before{
          color: #000 !important;
      }
      body{
        background: #090C16;
      }
      .wrapper{
        max-width: 460px;
        margin: auto;
        background: #090C16;
        padding: 15px 0px 15px;
        position: relative;
      }
      .mainlogo{
        display: table;
        text-align: center;
        margin: 0px auto 0px;
      }
      .maininner{
        position: relative;
        margin: 50px 15px;
      }
      p{
        color: #fff;
        text-align: center;
        padding: 0px 15px;
        font-size: 14px;
      }
      .para{
        color:#ffffff;
      }
      .tab{
        margin-bottom: 135px;
        margin-top: 50px;
      }
      h2{
        color: #fff;
        margin: 66px 0px 25px;
        font-family: 'Poppins', sans-serif;
        font-weight: 500;
        text-align: center;
        padding: 0px 20px;
      }
      .footer{
        color: #fff;
        font-size: 12px;
        padding: 20px 15px;
        background: #090C16;
        margin-top: 50px;
        text-align: center;
      }
      .check {
          display: block;
          width: 120px;
          height: 120px;
          font-size: 70px;
          position: relative;
          border: 4px solid #fff;
          border-radius: 100px;
          text-align: center;
          margin: auto;
      }
      .check:before{
        color: #fff;
        content: "\2713";
      }
      @media (max-width: 767px){
        .maininner {
          margin: 30px 10px 30px;
        }
        .loanform h5 {
          padding: 8px 12px;
          font-size: 16px;
        }
        .loanform {
          padding: 25px 25px 30px;
        }
        .mainlogo {
          margin: 5px auto 0px;
        }
        .banner .img-fluid {
          max-width: 80%;
          height: auto;
          text-align: center;
          margin: auto;
          display: table;
        }
        .mainlogo .img-fluid {
          max-width: 85%;
        }
      }
    </style>
  </head>
  <body>

    <div class="wrapper">
      <a href="index.html" class="mainlogo"><img src="<?php echo base_url(); ?>/assets/campaign/tone/images/logo.png" width="200px" class="img-fluid" alt="Logo"></a>
      <h2 style="font-size: 22px;font-weight:600;">80% Disbursals in 10 Min.</h2>
      <p class="para">Verifying your details to find the best offer for you.</p>
      <div class="maininner">
        <div class="tab">
         <ul class="steps">
            <li class="step step1 step--incomplete step--active">
              <span class="step__icon"></span>
              <span class="step__label">Basic&nbsp;Details Verified</span>
            </li>
            <li class="step step2 step--incomplete">
              <span class="step__icon"></span>
              <span class="step__label">Employment Verified</span>
            </li>
            <li class="step step3 step--incomplete">
              <span class="step__icon"></span>
              <span class="step__label">Income Verified</span>
            </li>
            <li class="step step4 step--incomplete">
              <span class="step__icon"></span>
              <span class="step__label">Pincode Verified</span>
            </li>
          </ul>
      </div>
      <h2>SUCCESS!</h2>
      <span class="check"></span>
      <div class="footer">
        © lending india Private Limited | All Rights Reserved with Copyright & TradeMarks
      </div>
    </div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
  <script type="text/javascript">
    $(document).ready(function(){
      setTimeout(function() {
           $('.step1').addClass('step--complete');
       }, 250);
      setTimeout(function() {
        $(".step2").addClass("step--complete");
      }, 500);
      setTimeout(function() {
        $(".step3").addClass("step--complete");
      }, 750);
      setTimeout(function() {
        $(".step4").addClass("step--complete");
      }, 1000);
      setTimeout(function() {
         //window.location.href = "bankslist.html"
      }, 2200);
    });
  </script>
  <script>
$(window).on('load', function () {
$("body").addClass("loaded");
});


window.setTimeout(function(){
// Move to a new location or you can do something else
window.location.href = "<?php echo base_url().'campaign/page/one?'.$_SERVER['QUERY_STRING'] ?>";
}, 3000);
</script>
  </body>
</html>