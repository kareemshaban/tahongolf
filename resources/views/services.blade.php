<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Services - Tahoon Gold</title>
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
  <script src="https://code.iconify.design/2/2.1.0/iconify.min.js"></script>


</head>

<body>

  <!-- ======= Header ======= -->
  @include('Layout.navbar' , ['slag' => 3])

  <main id="main">

    <!-- ======= Our Services Section ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2 style="color: goldenrod ;">{{__('main.services')}}</h2>
          <ol>
            <li><a href="{{route('index')}}">{{__('main.home')}}</a></li>
            <li>{{__('main.services')}}</li>
          </ol>
        </div>

      </div>
    </section><!-- End Our Services Section -->

    <section class="services">
      <div class="container">
      <div class="section-title">
          <h2>{{__('main.services')}}</h2>
          <p> {{__('main.servicetitle')}}</p>
        </div>
        <div class="row">
          <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="fade-up" >
            <div class="icon-box icon-box-pink">
              <div class="icon"><i> <span class="iconify" data-icon="grommet-icons:diamond"></span></i></div>
              <h4 class="title" ><a href="" style="color:goldenrod;">{{__('main.service1title')}}</a></h4>
              <p class="description">{{__('main.service1detail')}}</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
            <div class="icon-box icon-box-pink">
              <div class="icon"><i ><span class="iconify" data-icon="fluent:phone-status-bar-24-filled"></span></i></div>
              <h4 class="title"><a href="" style="color:goldenrod;">{{__('main.service2title')}}</a></h4>
              <p class="description">{{__('main.service2detail')}}</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
            <div class="icon-box icon-box-pink">
              <div class="icon"><i > <span class="iconify" data-icon="mdi:draw"></span> </i></div>
              <h4 class="title"><a href="" style="color:goldenrod;">{{__('main.service3title')}}</a></h4>
              <p class="description">{{__('main.service3detail')}}</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
            <div class="icon-box icon-box-pink">
              <div class="icon"><i > <span class="iconify" data-icon="carbon:delivery-truck"></span></i></div>
              <h4 class="title"><a href="" style="color:goldenrod;">{{__('main.service4title')}}</a></h4>
              <p class="description">{{__('main.service4detail')}}</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Services Section -->



    <!-- ======= Service Details Section ======= -->
    <section class="service-details">
      <div class="container">

        <div class="row">
          <div class="col-md-6 d-flex align-items-stretch" data-aos="fade-up">
            <div class="card">
              <div class="card-img">
                <img src="../../assets/img/mission.jpg" alt="...">
              </div>
              <div class="card-body">
                <h5 class="card-title"><a href="#">{{__('main.misssion')}}</a></h5>
                <p class="card-text text-center">{{__('main.mission_details')}}</p>
     
              </div>
            </div>
          </div>
          <div class="col-md-6 d-flex align-items-stretch" data-aos="fade-up">
            <div class="card">
              <div class="card-img">
                <img src="../../assets/img/plan.png" alt="...">
              </div>
              <div class="card-body">
                <h5 class="card-title"><a href="#">{{__('main.target')}}</a></h5>
                <p class="card-text text-center">{{__('main.target_details')}}</p>
         
              </div>
            </div>

          </div>
          <div class="col-md-6 d-flex align-items-stretch" data-aos="fade-up">
            <div class="card">
              <div class="card-img">
                <img src="../../assets/img/care.png" alt="...">
              </div>
              <div class="card-body">
                <h5 class="card-title"><a href="#">{{__('main.vision')}}</a></h5>
                <p class="card-text text-center">{{__('main.vision_details')}}</p>

              </div>
            </div>
          </div>
          <div class="col-md-6 d-flex align-items-stretch" data-aos="fade-up">
            <div class="card">
              <div class="card-img">
                <img src="../../assets/img/vision.png" alt="...">
              </div>
              <div class="card-body">
                <h5 class="card-title"><a href="#">{{__('main.plan')}}</a></h5>
                <p class="card-text text-center">{{__('main.plan_details')}}</p>

              </div>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Service Details Section -->

    <!-- ======= Pricing Section ======= -->
    <section class="pricing section-bg" data-aos="fade-up">
      <div class="container">

        <div class="section-title">
          <h2>{{__('main.pricing')}}</h2>
          <p>{{__('main.pricing_title')}}</p>
        </div>

        <div class="row no-gutters">

          <div class="col-lg-4 box">
            <h3>{{__('main.stamp18')}}</h3>
            <h4>{{$price -> stamp18}}<span>{{__('main.currency')}}</span></h4>
        
          </div>

          <div class="col-lg-4 box featured">
          <h3>{{__('main.stamp21')}}</h3>
            <h4>{{$price -> stamp21}}<span>{{__('main.currency')}}</span></h4>
          </div>

          <div class="col-lg-4 box">
          <h3>{{__('main.stamp24')}}</h3>
            <h4>{{$price -> stamp24}}<span>{{__('main.currency')}}</span></h4>
          </div>

        </div>

      </div>
    </section><!-- End Pricing Section -->

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