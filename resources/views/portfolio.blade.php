<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Portfolio - Tahoon Gold</title>
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

  <!-- =======================================================
  * Template Name: Moderna - v4.8.0
  * Template URL: https://bootstrapmade.com/free-bootstrap-template-corporate-moderna/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
<style>
.img-fluid {
    width:100%;
}
    </style>

</head>

<body>

@include('Layout.navbar' , ['slag' => 4])

  <main id="main">

    <!-- ======= Our Portfolio Section ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2 style="color: goldenrod ;">{{__('main.profile')}}</h2>
          <ol>
          <li><a href="{{route('index')}}">{{__('main.home')}}</a></li>
            <li>{{__('main.profile')}}</li>
          </ol>
        </div>

      </div>
    </section><!-- End Our Portfolio Section -->

    <!-- ======= Portfolio Section ======= -->
    <section class="portfolio">
      <div class="container">

        <div class="row" dir="{{__('main.dir')}}">
          <div class="col-lg-12">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">{{__('main.all_btn')}}</li>
              <li data-filter=".filter-app">{{__('main.gold_btn1')}}</li>
              <li data-filter=".filter-card">{{__('main.gold_btn2')}}</li>
              <li data-filter=".filter-white">{{__('main.gold_btn3')}}</li>
              <li data-filter=".filter-web">{{__('main.gold_btn4')}}</li>
              <!-- <li data-filter=".filter-web">{{__('main.gold_btn5')}}</li> -->
              <li data-filter=".filter-special">{{__('main.special_design')}}</li>
              
            </ul>
          </div>
        </div>
        <div class="row portfolio-container" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500">
        <div class="col-lg-4 col-md-6 portfolio-wrap filter-special">
            <div class="portfolio-item">
              <img src="../../assets/img/special1.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <div>
                  <a href="../../assets/img/special1.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" ><i class="bx bx-show-alt"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-wrap filter-special">
            <div class="portfolio-item">
              <img src="../../assets/img/special2.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <div>
                  <a href="../../assets/img/special2.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" ><i class="bx bx-show-alt"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-wrap filter-special">
            <div class="portfolio-item">
              <img src="../../assets/img/secial3.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <div>
                  <a href="../../assets/img/secial3.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" ><i class="bx bx-show-alt"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-wrap filter-white">
            <div class="portfolio-item">
              <img src="../../assets/img/white1.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <div>
                  <a href="../../assets/img/white1.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" ><i class="bx bx-show-alt"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-wrap filter-white">
            <div class="portfolio-item">
              <img src="../../assets/img/white2.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <div>
                  <a href="../../assets/img/white2.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" ><i class="bx bx-show-alt"></i></a>
                </div>
              </div>
            </div>
          </div>


         </div>

     
      </div>
    </section><!-- End Portfolio Section -->

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