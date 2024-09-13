<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@200;400;700&display=swap" rel="stylesheet">
    <title>Kotak 811 | Application</title>
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
      h2{
        color: #FFF1A1;
        margin: 30px 0px 25px;
        font-family: 'Roboto Slab', serif;
        text-align: center;
        padding: 0px 20px;
      }
      .mainsection p.note{
        color: #fff;
        font-size: 14px;
        text-align: center;
        padding: 5px 25px;
      }
      .mainsection h3{
        color: #ff8800;
        text-align: center;
        margin-top: 50px;
      }
      .footer{
        color: #fff;
        font-size: 12px;
        padding: 20px;
        background: #280462;
        margin-top: 65px;
        text-align: center;
      }
      .banner{
        text-align: center;
        margin-top: 50px;
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
          margin: 50px 10px;
        }
        .mainlogo {
          margin: 5px auto 0px;
        }
        .mainlogo .img-fluid {
          max-width: 85%;
        }
      }
	  
	  .GFG {
    background-color: white;
    color: green;
    padding: 5px 10px;
    text-align: center;
    display: flex;
    font-size: 20px;
    margin: 0 auto;
    cursor: pointer;
    align-items: center;
        }
    </style>
  </head>
  <body>

    <div class="wrapper">
      <a href="#" class="mainlogo"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSr6hLhI-k1UKuME_xazO9fzbsGrmpGj2CKzzfPlpv2&s" width="180px" class="img-fluid" alt="Logo"></a>
      <h2>Awesome!<br>You are approved for DreamDifferent Credit Card</h2>
      <div class="banner">
        <img src="<?php echo base_url(); ?>/assets/landing/images/check.gif">
      </div>

      <div class="mainsection">
        <h3>Kotak 811</h3>
        <p class="note">No paperwork.<br>
    No Joining & Annual Fee.<br>
    Shop online with Kotak811 credit card for 2 reward points<br><br>
		
<?php

if(isset($_GET['utm_source'])){
$utm_source = @$_GET['utm_source'];
} else {
$utm_source = @$lead->utm_source;
}
?>
		<button class="GFG" onclick="window.location.href = 'https://intexm.gotrackier.com/click?campaign_id=17&pub_id=2&source=<?php echo @$utm_source; ?>';"> Apply Now </button>
      </div>

      <div class="footer">
        © lending india | All Rights Reserved with Copyright & TradeMarks
      </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
  </body>
</html>
