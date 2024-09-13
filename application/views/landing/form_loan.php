<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@200;400;700&display=swap" rel="stylesheet">
    <title>LendingInd | Loan Application</title>
    <style>
      body{
        padding: 15px;
      }
      .wrapper{
        max-width: 500px;
        margin: auto;
        background: #190041;
        padding: 15px 0px 0px;
        position: relative;
      }
      .wrapper:after{
        width: 0;
        height: 0;
        border-top: 0px solid transparent;
        border-left: 150px solid #fff;
        border-bottom: 50px solid transparent;
        position: absolute;
        left: 0px;
        top: 0px;
        content: '';
      }
      .wrapper:before{
        width: 0;
        height: 0;
        border-top: 0px solid transparent;
        border-right: 150px solid #fff;
        border-bottom: 50px solid transparent;
        position: absolute;
        right: 0px;
        top: 0px;
        content: '';
      }
      .mainlogo{
        display: table;
        text-align: center;
        margin: 15px auto 0px;
      }
      .loanform{
        padding: 60px 30px 50px;
      }
      .loanform label{
        color: #fff;
        width: 100%;
        display: block;
      }
      .maininner{
        border: 1rem solid #e0e0e0;
        position: relative;
        margin: 50px 25px;
        border-image: repeating-linear-gradient(45deg, transparent, transparent 5px, #e0e0e0 6px, #e0d3f5 15px, transparent 16px, transparent 20px) 20/1rem;
      }
      h2{
        color: #FFF1A1;
        margin: 30px 0px 25px;
        font-family: 'Roboto Slab', serif;
        text-align: center;
        padding: 0px 20px;
      }
      .loanform h5{
        color: #fff;
        background: #ff8800;
        position: absolute;
        left: 0px;
        right: 0px;
        top: -29px;
        margin: auto;
        display: table;
        letter-spacing: .5px;
        padding: 8px 25px;
        text-transform: uppercase;
        font-family: 'Roboto Slab', serif;
        border-radius: 6px;
      }
      .form-group{
        margin-bottom: 20px;
      }
      .mainsection p.note{
        color: #fff;
      font-size: 14px;
      background: #3e1b74;
      padding: 15px 25px;
      }
      .photo{
        width: 150px;
        height: 150px;
        margin: auto;
        border-radius: 100px;
      }
      .photo img{
        width: 150px;
        height: 150px;
        border-radius: 100px;
        border: 2px solid #fff;
      }
      .carousel{
        margin-top: 50px;
      }
      .carousel p{
        text-align: center;
        font-size: 14px;
        padding: 15px 85px;
        color: #fff;
        margin-bottom: 20px;
      }
      .carousel-indicators{
        bottom: -20px !important;
      }
      .footer{
        color: #fff;
        font-size: 12px;
        padding: 20px;
        background: #280462;
        margin-top: 65px;
        text-align: center;
      }
      @media (max-width: 767px){
        .wrapper:after {
            border-left: 90px solid #fff;
            border-bottom: 45px solid transparent;
        }
        .wrapper:before {
          border-right: 90px solid #fff;
          border-bottom: 45px solid transparent;
        }
        h2 {
          font-size: 20px;
          line-height: 30px;
          margin: 10px 0px 5px;
        }
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
        .carousel {
          margin-top: 30px !important;
        }
        .carousel p {
          padding: 15px 40px;
        }
        .mainlogo {
          margin: 5px auto 0px;
        }
        .mainsection p.note {
            font-size: 12px;
            padding: 15px 15px;
        }
        .footer {
            margin-top: 25px;
        }
        .banner .img-fluid {
          max-width: 80%;
          height: auto;
          text-align: center;
          margin: auto;
          display: table;
        }
        .photo, .photo img {
            width: 110px;
            height: 110px;
        }
        .mainlogo .img-fluid {
          max-width: 85%;
        }
      }
    </style>
	<script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"></script>
  </head>
  <body>

    <div class="wrapper">
      <a href="#" class="mainlogo"><img src="<?php echo base_url(); ?>/assets/landing/images/logo.png" width="180px" class="img-fluid" alt="Logo"></a>
      <h2>Make your goals a reality with a personal loan today</h2>
      <div class="banner">
        <img src="<?php echo base_url(); ?>/assets/landing/images/loan.png" class="img-fluid" alt="Logo">
      </div>
      <div class="maininner">
          <form class="loanform" id="loan_application">
            <h5>Registration Form</h5>
            <div class="form-group">
              <label for="exampleInputEmail1">Select Income</label>
            <select name="income" id="" class="form-control form-select w-100" required>
                <option value="">Select Income </option>
                <option value="200000">Less than 3,00,000 </option>
                <option value="300000">More than 3,00,000</option>
                <option value="500000">More than 5,00,000                                         </option>
            </select>
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Pincode</label>
              <input type="text" placeholder="Enter Pincode" name="pincode" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1" style="margin-bottom: 15px;">Employee type</label>
              <div class="form-check form-check-inline">
                 <input class="form-check-input" type="radio" name="employee_type" id="inlineRadio1" value="SALARIED" required>
                 <label class="form-check-label" for="inlineRadio1">Salaried</label>
              </div>
              <div class="form-check form-check-inline">
                 <input class="form-check-input" type="radio" name="employee_type" id="inlineRadio2" value="SELF-EMPLOYEE">
                 <label class="form-check-label" for="inlineRadio2">Self</label>
              </div>
            </div>
			<input type="hidden" name="utm_source" id="utm_source" value="<?php echo @$_GET['utm_source'] ; ?>">
			<input type="hidden" name="mobile" id="m" value="<?php echo @$_GET['m'] ; ?>">
			<input type="hidden" name="utm_medium" id="utm_medium" value="<?php echo @$_GET['utm_medium'] ; ?>">
			<input type="hidden" name="utm_publisher_id" id="utm_publisher_id" value="<?php echo @$_GET['utm_publisher_id'] ; ?>">
			<input type="hidden" name="utm_subid_1" id="utm_subid_1" value="<?php echo @$_GET['utm_subid_1'] ; ?>">
			<input type="hidden" name="utm_subid_2" id="utm_subid_2" value="<?php echo @$_GET['utm_subid_2'] ; ?>">
			<input type="hidden" name="pone" id="utm_subid_2" value="<?php echo @$_GET['pone'] ; ?>">
			<input type="hidden" name="ptwo" id="utm_subid_2" value="<?php echo @$_GET['ptwo'] ; ?>">
            <button style="width: 100%; text-transform: uppercase;" type="submit" class="btn btn-primary">Submit</button>
          </form>
      </div>

      <div class="mainsection">
        <p class="note">
          I authorize lending india and its representatives to Call, SMS or
          communicate via WhatsApp regarding my application. This consent
          overrides any registration for DNC / NDNC. I confirm I am in India,
          I am a major and a resident of India and I have read and I accept
          lending india Privacy Policy Click here to read the </p>


          <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <div class="photo">
                  <img src="<?php echo base_url(); ?>/assets/landing/images/Deepak.png" class="img-fluid" alt="Logo">
                </div>
                <p>Applying for a loan from lending india is so easy and hasslefree. The platform helped me avail a loan of ₹5 Lacs within 4 hours!</p>
              </div>
              <div class="carousel-item">
                <div class="photo">
                  <img src="<?php echo base_url(); ?>/assets/landing/images/Deepak.png" class="img-fluid" alt="Logo">
                </div>
                <p>Applying for a loan from lending india is so easy and hasslefree. The platform helped me avail a loan of ₹5 Lacs within 4 hours!</p>
              </div>
              <div class="carousel-item">
                <div class="photo">
                  <img src="<?php echo base_url(); ?>/assets/landing/images/Deepak.png" class="img-fluid" alt="Logo">
                </div>
                <p>Applying for a loan from lending india is so easy and hasslefree. The platform helped me avail a loan of ₹5 Lacs within 4 hours!</p>
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
      </div>

      <div class="footer">
        © lending india | All Rights Reserved with Copyright & TradeMarks
      </div>

    </div>
<script>

$('#loan_application').submit(function(event){
event.preventDefault();
$('.loading').show();
var form = $(this)[0];
var data = new FormData(form);

$.ajax({
type : 'POST',
url : '<?php echo base_url("landing/loan_application"); ?>',
data : data,
contentType: false, // NEEDED, DON'T OMIT THIS (requires jQuery 1.6+)
processData: false, // NEEDED, DON'T OMIT THIS
success: function(data) {
    var result = JSON.parse(data);
    $('.loading').hide();
    if(result.status == 'success'){
       window.location.replace("<?php echo base_url('landing/page?offer_id='); ?>"+ result.offer_id + "&lead_id=" + result.lead_id);
//            $.confirm({
//            title: 'Congratulations!',
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
  </body>
</html>
