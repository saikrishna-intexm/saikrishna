<!doctype html>
<html lang="en">
  <head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" >
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css" >
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,300;0,400;0,600;0,700;1,100;1,600;1,700&display=swap" rel="stylesheet">
<title>Lending India</title>
<style>
  body{
    background: #090C16;
	font-family: 'Poppins', sans-serif;
  }
  .wrapper{
    max-width: 460px;
    margin: auto;
    background: #090C16;
    padding: 15px 15px;
    position: relative;
  }
  .mainlogo{
    display: table;
    text-align: center;
    margin: 0px auto 0px;
  }
  p{
    color: #ffffff;
    text-align: center;
    padding: 0px 15px;
    font-size: 14px;
	font-family: 'Poppins', sans-serif;
  }
 h2 {
    color: #fff;
    margin: 66px 0px 25px;
    font-family: 'Poppins', sans-serif;
    font-weight: 500;
    text-align: center;
    padding: 0px 0px;
}
.footer{
  color: #fff;
  font-size: 12px;
  padding: 20px 0px;
  background: #090C16;
  margin-top: 50px;
  text-align: center;
  border-top: 1px solid #ccc;
  font-family: 'Poppins', sans-serif;
}
.bankcard{
  margin: 15px 0px 15px;
  display: table;
  width: 100%;
}
.bankcardinner{
  margin-right: -15px;
  align-items: start;
  justify-items: normal;
  border: 1px solid #2b2b2b;
  border-radius: 5px;
  padding: 15px;
  background: #000;
  min-height: 228px;
  border-radius: 8px 0px 0px 8px;
  background: rgba(255, 255, 255, 0.03);
  box-shadow: 0px 1px 4px 0px rgba(255, 255, 255, 0.08) inset, 0px 0px 32px 0px rgba(255, 255, 255, 0.04) inset;
  backdrop-filter: blur(45px);
}
.cardheader{
  display: grid;
  grid-template-columns: 1fr 1fr;
  grid-gap: 15px;
  align-items: start;
  justify-items: normal;
  margin-bottom: 50px;
}
.cardheader .logo img{
  width: 100%;
}
.cardheader .text{
  color: #fff;
  font-size: 14px;
  text-align: right;
}
.cardnumber{
  font-family: 'Poppins', sans-serif;
  color: #fff;
  font-size: 14px;
  text-align: left;
  letter-spacing: 4px;
}
.cardfooter{
  display: grid;
  grid-template-columns: 1fr 1fr;
  grid-gap: 15px;
  align-items: start;
  justify-items: normal;
  margin-top: 15px;
  font-family: 'Poppins', sans-serif;
}
.cardfooter .name{
  color: #fff;
  font-size: 14px;
  text-align: left;
}
.cardfooter .date{
  color: #fff;
  font-size: 14px;
  text-align: right;
}
.cardfooter .date span{
  color: #ffffff;
}
.apply a {
  width: 125px;
  background: #fff;
  color: #000;
  border: 0 none;
  border-radius: 100px;
  cursor: pointer;
  padding: 12px 15px;
  text-align: center;
  float: none;
  margin: 30px auto 0px;
  font-size: 14px;
  font-weight: 600;
  display: table;
}
.apply a:hover{
  text-decoration: none;
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
fbq('init', '2480299272134994');
fbq('track', 'Lead');
</script>
<noscript><img height="1" width="1" style="display:none"
src="https://www.facebook.com/tr?id=2480299272134994&ev=PageView&noscript=1"
/></noscript>
<!-- End Meta Pixel Code -->
  </head>
  <body>

    <div class="wrapper">
      <a href="#" class="mainlogo"><img src="<?php echo base_url(); ?>/assets/campaign/tone/images/logo.png" width="200px" class="img-fluid" alt="Logo"></a>
      <h2>Congrats <?php echo explode(' ',trim($lead->name))[0]; ?>! <br> <span style="font-size:22px;">You are approved for lifetime free credit card<span></h2>
      <p>#DreamDifferent Credit card with kotak811 Savings A/C </p><br/>
      <div class="bankcard">
        <div class="bankcardinner">
          <div class="cardheader">
            <div class="logo"><img style="width: 140px;"src="<?php echo base_url(); ?>/assets/campaign/tone/images/kotak.png" class="img-fluid" alt="Logo"></div>
            <div class="text">#DreamDifferent</div>
          </div>
          <div class="cardnumber">
            1234 1234 12XX XXXX
          </div>
          <div class="cardfooter">
            <div class="name"><?php echo explode(' ',trim($lead->name))[0]; ?></div>
            <div class="date">Valid till</span> 07/29</div>
          </div>
        </div>
<?php

if(isset($_GET['utm_source'])){
$utm_source = @$_GET['utm_source'];
} else {
$utm_source = @$lead->utm_source;
}
?>
        <div class="apply">
          <a href="https://trk.i1x.in/click?campaign_id=17&pub_id=12&url_id=4&source=<?php echo @$utm_source; ?>">Apply Now</a>
         </div>
      </div>





      <div class="footer">
        © lending india Private Limited | All Rights Reserved with Copyright & TradeMarks
      </div>

    </div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
<script>
$(window).on('load', function () {
$("body").addClass("loaded");
});


window.setTimeout(function(){
// Move to a new location or you can do something else
//window.location.href = "https://trk.i1x.in/click?campaign_id=17&pub_id=12&url_id=4&source=<?php echo @$utm_source; ?>";
}, 5000);
</script>
  </body>
</html>
