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
  fbq('init', '2223676107817904');
  fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
  src="https://www.facebook.com/tr?id=2223676107817904&ev=PageView&noscript=1"
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
            <img src="data:image/png;base64,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" alt="logo" width="300" heigh="60" class="mt-5 mb-0">
          </a>
        </div>


      </div>
    </div>
  </header>
  <!--header section end-->

<!-- Thanks message -->

  <section class="py-2 mt-1 mb-1">
    
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
      <div class="compare__info--wrapper">
        <div class="container pb-md-2">
          <div class="compare__info0 pb-md-2">
            <div class="section-header">
              <h2 class="h2-heading light mb-2 mt-1" style="font-size: 3rem !important;">You are approved for DreamDifferent Credit Card<span class="dot">.</span></h2>
              <h5 class="headline light highlight fancy" style="font-size: 2.5rem !important;">No paperwork</h5>.
              <h5 class="headline light highlight fancy" style="font-size: 2.5rem !important;">No Joining & Annual Fee</h5>.
              <h2 class="text-success h3-heading mb-5 font-weight-bold">Shop online with Kotak811 credit card for 2 reward points</h2>
              <!-- h2 class="text-success h3-heading mb-5 font-weight-bold">Earn 4% interest rates per annum</h2 -->
              <!-- p class="text-dark">It’s super-secured via <a href="">epiFi Wealth</a>, a SEBI-licensed entity — along with <a href="">OneMoney</a> & <a href="">Finvu</a></p -->
            </div>
            <div class="compare__info__img pb-md-5">
              <div class="hero__info__buttons mb-md-3">
                <a href="https://tracking.salesleaf.com/aff_c?offer_id=1931&aff_id=5964&source=<?php echo @$lead->utm_source; ?>" class="hero__info__button"><span>Apply Now!</span></a>
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
              <h6>&copy; LowCredit</h6>
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
window.location.href = "https://tracking.salesleaf.com/aff_c?offer_id=1931&aff_id=5964&source=<?php echo @$lead->utm_source; ?>";
}, 5000);
  </script>

</body>

</html>
