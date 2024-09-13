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
  padding: 15px;
  background: #11141D;
  display: table;
  width: 100%;
  border-radius: 8px 0px 0px 8px;
  background: rgba(255, 255, 255, 0.03);
  box-shadow: 0px 1px 4px 0px rgba(255, 255, 255, 0.08) inset, 0px 0px 32px 0px rgba(255, 255, 255, 0.04) inset;
  backdrop-filter: blur(45px);
}
.bankcardinner{
  display: grid;
  grid-template-columns: 50px 1fr 1fr;
  grid-gap: 15px;
  align-items: start;
  justify-items: normal;
}
.banklogo{
  background: #fff;
  border-radius: 5px;
  padding: 5px;
}
.banklogo img{
  width: 100%;
}
.roi, .loanamount{
  color: #fff;
  text-align: left;
}
.roi h4, .loanamount h4{
  font-size: 16px;
  font-family: 'Poppins', sans-serif;
}
.roi p, .loanamount p{
  text-align: left;
  padding: 0px;
  margin-bottom: 0px;
}
.apply a {
  width: 94px;
  background: #fff;
  color: #000;
  border: 0 none;
  border-radius: 100px;
  cursor: pointer;
  padding: 6px 5px;
  text-align: center;
  float: right;
  margin: 8px 20px 0px 0px;
  font-size: 14px;
  font-weight: 600;
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
fbq('init', '208616498896385');
fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
src="https://www.facebook.com/tr?id=208616498896385&ev=PageView&noscript=1"
/></noscript>
<!-- End Meta Pixel Code -->
  </head>
  <body>
<?php

if(isset($_GET['utm_source'])){
$utm_source = @$_GET['utm_source'];
} else {
$utm_source = @$lead->utm_source;
}
?>
    <div class="wrapper">
      <a href="#" class="mainlogo"><img src="<?php echo base_url(); ?>/assets/campaign/tone/images/logo.png" width="200px" class="img-fluid" alt="Logo"></a>
      <h2>Congrats <?php echo explode(' ',trim($lead->name))[0]; ?>! <br><span style="font-size:20px;font-weight:600">You are approved for Quick Cash upto Rs.3,49,000<span></h2>
      <p>Complete your KYC to disburse the loan amount </p><br/>
      <div class="bankcard">
        <div class="bankcardinner">
          <div class="banklogo"><img src="<?php echo base_url(); ?>/assets/campaign/tone/images/stashfin.webp" class="img-fluid" alt="Logo"></div>
            <div class="roi">
              <h4>ROI</h4>
              <p>10.99 - 18%</p>
            </div>
            <div class="loanamount">
              <h4>Loan Amount</h4>
               <p>Rs 5,00,000</p>
            </div>
        </div>
        <div class="apply">
          <a href="https://trk.i1x.in/click?campaign_id=18&pub_id=2&url_id=2&source=<?php echo @$utm_source; ?>">Apply Now</a>
         </div>
      </div>

      <div class="footer">
        © lending india Private Limited | All Rights Reserved with Copyright & TradeMarks
      </div>

    </div>

   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
