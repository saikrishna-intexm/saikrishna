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
          <a href="" class="mt-5 pt-5" style="pointer-events: none;">
            <img src="data:image/png;base64,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" alt="logo" style="display: block; margin-left: auto; margin-right: auto; width: 75%;height: 100px;">
          </a>
        </div>


      </div>
    </div>
  </header>
  <!--header section end-->

<!-- Thanks message -->

  <section class="mb-5">
    
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
              <h2 class="h2-heading light mb-2 mt-1" style="font-size: 2rem !important;">You are Qualified Zero Balance A/C<span class="dot">.</span></h2>
              <h5 class="headline light highlight fancy" style="font-size: 1.5rem !important;">Personal Loan's Offer Upto Rs. 5,00,000</h5>.
              <h5 class="headline light highlight fancy" style="font-size: 1.3rem !important;">A tenure between 12-60 months for Easy EMI's</h5>.
              <h2 class="text-success h3-heading mb-5 font-weight-bold">Meet short-term financial needs!</h2>
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

//window.setTimeout(function(){
//// Move to a new location or you can do something else
//window.location.href = "https://tracking.salesleaf.com/aff_c?offer_id=1931&aff_id=5964&source=<?php echo @$lead->utm_source; ?>";
//}, 5000);
  </script>

</body>

</html>
