<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Application</title>

  <link rel="apple-touch-icon" sizes="180x180" href="<?php echo base_url(); ?>assets/offers/favicon/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="<?php echo base_url(); ?>assets/offers/favicon/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url(); ?>assets/offers/favicon/favicon-16x16.png">
  <link rel="manifest" href="<?php echo base_url(); ?>assets/offers/favicon/site.webmanifest">

  <!--stylesheet-->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:200,300,400,500&display=swap">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
  <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/offers/css/style.css">
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
  fbq('init', '1300855550556208');
  fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
  src="https://www.facebook.com/tr?id=1300855550556208&ev=PageView&noscript=1"
/></noscript>
<!-- End Meta Pixel Code -->
</head>
<body>


  <!--preloader start-->
  <!-- <div class="preloader">
    <svg class="preloader__svg" width="307" height="47" viewBox="0 0 307 47" fill="none"
      xmlns="http://www.w3.org/2000/svg">
      <path class="preloader__svg-path" d="M0.311996 1.2H10.68V37.552H33.144V46H0.311996V1.2Z" stroke="white"
        stroke-width="2" />
      <path class="preloader__svg-path"
        d="M59.883 46.768C55.2323 46.768 51.0297 45.7653 47.275 43.76C43.563 41.7547 40.6403 39.0027 38.507 35.504C36.4163 31.9627 35.371 27.9947 35.371 23.6C35.371 19.2053 36.4163 15.2587 38.507 11.76C40.6403 8.21866 43.563 5.44533 47.275 3.44C51.0297 1.43467 55.2323 0.431999 59.883 0.431999C64.5337 0.431999 68.715 1.43467 72.427 3.44C76.139 5.44533 79.0617 8.21866 81.195 11.76C83.3283 15.2587 84.395 19.2053 84.395 23.6C84.395 27.9947 83.3283 31.9627 81.195 35.504C79.0617 39.0027 76.139 41.7547 72.427 43.76C68.715 45.7653 64.5337 46.768 59.883 46.768ZM59.883 37.936C62.5283 37.936 64.9177 37.3387 67.051 36.144C69.1843 34.9067 70.8483 33.2 72.043 31.024C73.2803 28.848 73.899 26.3733 73.899 23.6C73.899 20.8267 73.2803 18.352 72.043 16.176C70.8483 14 69.1843 12.3147 67.051 11.12C64.9177 9.88267 62.5283 9.264 59.883 9.264C57.2377 9.264 54.8483 9.88267 52.715 11.12C50.5817 12.3147 48.8963 14 47.659 16.176C46.4643 18.352 45.867 20.8267 45.867 23.6C45.867 26.3733 46.4643 28.848 47.659 31.024C48.8963 33.2 50.5817 34.9067 52.715 36.144C54.8483 37.3387 57.2377 37.936 59.883 37.936Z"
        stroke="white" stroke-width="2" />
      <path class="preloader__svg-path"
        d="M121.066 36.4H100.266L96.298 46H85.674L105.642 1.2H115.882L135.914 46H125.034L121.066 36.4ZM117.802 28.528L110.698 11.376L103.594 28.528H117.802Z"
        stroke="white" stroke-width="2" />
      <path class="preloader__svg-path"
        d="M140.562 1.2H160.914C165.778 1.2 170.066 2.13866 173.778 4.016C177.533 5.85066 180.434 8.45333 182.482 11.824C184.573 15.1947 185.618 19.12 185.618 23.6C185.618 28.08 184.573 32.0053 182.482 35.376C180.434 38.7467 177.533 41.3707 173.778 43.248C170.066 45.0827 165.778 46 160.914 46H140.562V1.2ZM160.402 37.488C164.882 37.488 168.445 36.2507 171.09 33.776C173.778 31.2587 175.122 27.8667 175.122 23.6C175.122 19.3333 173.778 15.9627 171.09 13.488C168.445 10.9707 164.882 9.712 160.402 9.712H150.93V37.488H160.402Z"
        stroke="white" stroke-width="2" />
      <path class="preloader__svg-path" d="M193.437 1.2H203.805V46H193.437V1.2Z" stroke="white" stroke-width="2" />
      <path class="preloader__svg-path"
        d="M255.525 1.2V46H247.013L224.677 18.8V46H214.437V1.2H223.013L245.285 28.4V1.2H255.525Z" stroke="white"
        stroke-width="2" />
      <path class="preloader__svg-path"
        d="M296.396 22.896H305.868V41.072C303.436 42.9067 300.62 44.3147 297.42 45.296C294.22 46.2773 290.999 46.768 287.756 46.768C283.106 46.768 278.924 45.7867 275.212 43.824C271.5 41.8187 268.578 39.0667 266.444 35.568C264.354 32.0267 263.308 28.0373 263.308 23.6C263.308 19.1627 264.354 15.1947 266.444 11.696C268.578 8.15467 271.522 5.40267 275.276 3.44C279.031 1.43467 283.255 0.431999 287.948 0.431999C291.874 0.431999 295.436 1.09333 298.636 2.416C301.836 3.73866 304.524 5.65866 306.7 8.176L300.044 14.32C296.844 10.9493 292.983 9.264 288.46 9.264C285.602 9.264 283.063 9.86133 280.844 11.056C278.626 12.2507 276.898 13.936 275.66 16.112C274.423 18.288 273.804 20.784 273.804 23.6C273.804 26.3733 274.423 28.848 275.66 31.024C276.898 33.2 278.604 34.9067 280.78 36.144C282.999 37.3387 285.516 37.936 288.332 37.936C291.319 37.936 294.007 37.296 296.396 36.016V22.896Z"
        stroke="white" stroke-width="2" />
    </svg>
  </div> -->
  <!--preloader end-->

  <!--header section start-->
  <header class="header">
    <div class="container">
      <div class="header__wrapper">
        <div class="header__logo d-flex justify-content-center align-items-center">
          <a href="" class="mr-5 border-right pr-5" style="pointer-events: none;">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRNhTtMF_e7Ljg4aEvDFNnAmhMfMGIzPUgSXXdymJ4EWg&s" alt="logo" style="height:100px" >
          </a>
        </div>


      </div>
    </div>
  </header>
  <!--header section end-->

<!-- Thanks message -->

  <section class="py-2 mt-2">
    
  <div class="confetti">
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
    <div class="icon text-danger display-2 font-weight-bold" style="margin-top: auto;">Congratualations!</div>
  </div>
  </section>
  <!--compare start-->
  <section class="compare ">
    <div class="compare__wrapper">
      <div class="compare__info--wrapper  ">
        <div class="container pb-md-5">
          <div class="compare__info0 pb-md-5">
            <div class="section-header">
              <h2 class="h2-heading light mb-5" style="font-size: 3rem !important;">You are pre-qualified for FI Money A/c, with no hidden charges<span class="dot">.</span></h2>
              <h5 class="headline light highlight fancy" style="font-size: 2.5rem !important;">Enjoy Rs. 2500 rewards in 3 days.</h5>.
              <h2 class="text-success h3-heading mb-5 font-weight-bold">Money insured up to ₹5 lak</h2>
              <p class="text-dark">It’s super-secured via <a href="">epiFi Wealth</a>, a SEBI-licensed entity — along with <a href="">OneMoney</a> & <a href="">Finvu</a></p>
            </div>
            <div class="compare__info__img pb-md-5">
              <div class="hero__info__buttons mb-md-3">
                <a href="https://trk.ultraind.in/click?campaign_id=2174&pub_id=2060&source=<?php echo @$lead->utm_source; ?>" class="hero__info__button"><span>Apply Now!</span></a>
              </div>
              <div class="position-relative">
                <div class="arrow">
                  <span></span>
                  <span></span>
                  <span></span>
                </div>
              </div>
            </div>
          </div>
          <div class="col-12">
            <div class="confetti">
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
            </div>
          </div>
        </div>
      </div>
  </section>
  <!--compare end-->
  <!--footer start-->
  <footer class="footer">
    <div class="footer__wrapper">
      <div class="container">
        <div class="footer__inner d-flex justify-content-center text-center">
          <div class="footer__nav">
            
            <ul class="footer__nav--social">
              <li><a href="#"><i class="fab fa-youtube"></i></a></li>
              <li><a href="#"><i class="fab fa-facebook-square"></i></a></li>
              <li><a href="#"><i class="fab fa-twitter"></i></a></li>
              <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
              <li><a href="#"><i class="fab fa-github"></i></a></li>
              <li><a href="#"><i class="fab fa-vimeo-v"></i></a></li>
            </ul>

            <div class="footer__copy">
              <h6>&copy; NAVI</h6>
            </div>
          </div>
         
        </div>
       
      </div>
    </div>
  </footer>
  <!--footer end-->

  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script>
    $(window).on('load', function () {
      $("body").addClass("loaded");
    });


window.setTimeout(function(){
// Move to a new location or you can do something else
window.location.href = "https://trk.ultraind.in/click?campaign_id=2174&pub_id=2060&source=<?php echo @$lead->utm_source; ?>";
}, 5000);
  </script>

</body>

</html>
