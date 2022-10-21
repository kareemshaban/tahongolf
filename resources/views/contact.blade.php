<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Contact Us - Tahoon Gold</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="../../assets/img/favicon.png" rel="icon">
  <link href="../../assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,700,700i&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="../../assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="../../assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="../../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="../../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="../../assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="../../assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="../../assets/css/style.css" rel="stylesheet">
</head>

<body>

  <!-- ======= Header ======= -->
  @include('Layout.navbar' , ['slag' => 6])

  <main id="main">

    <!-- ======= Contact Section ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2 style="color: goldenrod ;">{{__('main.contact')}}</h2>
          <ol>
            <li><a href="{{route('index')}}">{{__('main.home')}}</a></li>
            <li>{{__('main.contact')}}</li>
          </ol>
        </div>

      </div>
    </section><!-- End Contact Section -->

    <!-- ======= Contact Section ======= -->
    <section class="contact" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500">
      <div class="container">

        <div class="row">

          <div class="col-lg-12">

            <div class="row">
              <div class="col-md-12">
                <div class="info-box">
                  <i class="bx bx-map"></i>
                  <h3>{{__('main.contact')}}</h3>
                  <p>{{__('main.address1')}} <br> 
                  {{__('main.address2')}} 
                </p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box">
                  <i class="bx bx-envelope"></i>
                  <h3>{{__('main.contact')}}</h3>
                 <p>
                 <strong>Email:</strong> info@tahongold.com
                 </p>
                 <div class="social-links mt-3" style="display:block; margin:auto; text-align:center;"   >
          <a href="https://wa.me/01025979190" target="_blank" class="twitter"><i class="bx bxl-whatsapp"></i></a>
          <a href="https://www.facebook.com/Tahon-Gold-106147154223318/"  target="_blank" class="facebook"><i class="bx bxl-facebook"></i></a>
          <a href="https://www.facebook.com/TahonGold/  " target="_blank" class="facebook"><i class="bx bxl-facebook"></i></a>

          <a href="https://instagram.com/tahon.gold?utm_medium=copy_link" target="_blank" class="instagram"><i class="bx bxl-instagram"></i></a>
          <a href="https://t.me/+x8-2COGAt700ZmU0" class="linkedin" target="_blank" ><i class="bx bxl-telegram"></i></a>
        </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box">
                  <i class="bx bx-phone-call"></i>
                  <h3>{{__('main.contact')}}</h3>
                  <p> 
                  <strong>Phone:</strong> 047 2553999<br>
                  <strong>Mobile:</strong> +2 0120 497 8077 <br>
                  <strong>Mobile:</strong>    +2 0102 597 9190 <br>
               
                  <br>
        
                  </p>
                </div>
              </div>
            </div>

          </div>

          <div class="col-lg-6" hidden>
            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

    <!-- ======= Map Section ======= -->
    <section class="map mt-2">
      <div class="container-fluid p-0">
      <iframe class="gmap_iframe" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=1000&amp;height=500&amp;hl=en&amp;q=31.129128573341813, 30.645406341684676&amp;t=p&amp;z=16&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe>
      </div>

    </section><!-- End Map Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  @include('Layout.footer')


  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="../../assets/vendor/purecounter/purecounter.js"></script>
  <script src="../../assets/vendor/aos/aos.js"></script>
  <script src="../../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../../assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="../../assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="../../assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="../../assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="../../assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="../../assets/js/main.js"></script>

</body>

</html>