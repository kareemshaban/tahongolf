<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Tahon Gold</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

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
  <script src="https://code.iconify.design/2/2.1.0/iconify.min.js"></script>

  <!-- Template Main CSS File -->
  <link href="../../assets/css/style.css" rel="stylesheet">



  <style>

.video {
  width: 90%;
  display:block;
  margin:auto;
  border-top-left-radius: 0.5rem;
  border-top-right-radius: 0.5rem;
}

    </style>
</head>

<body>

  <!-- ======= Header ======= -->
@include('Layout.navbar' , ['slag' => 1])

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex justify-cntent-center align-items-center">
  <div id="heroCarousel" class="container carousel carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">


      <div class="carousel-item active">
        <div class="carousel-container">
          <h2 class="animate__animated animate__fadeInDown">{{__('main.slide1title')}}</h2>
          <p class="animate__animated animate__fadeInUp">{{__('main.slide1detail')}}</p>
          <a href="#history" class="btn-get-started animate__animated animate__fadeInUp">{{__('main.slide1btn')}}</a>
        </div>
      </div>

      <!-- Slide 2 -->
      <div class="carousel-item">
        <div class="carousel-container">
          <h2 class="animate__animated animate__fadeInDown">{{__('main.slide2title')}}</h2>
          <p class="animate__animated animate__fadeInUp">{{__('main.slide2detail')}}</p>
          <a href="#ourclients" class="btn-get-started animate__animated animate__fadeInUp">{{__('main.slide22btn')}}</a>
        </div>
      </div>

      <!-- Slide 3 -->
      <div class="carousel-item">
        <div class="carousel-container">
          <h2 class="animate__animated animate__fadeInDown">{{__('main.slide3title')}}</h2>
          <p class="animate__animated animate__fadeInUp">{{__('main.slide3detail')}}</p>
          <a href="" class="btn-get-started animate__animated animate__fadeInUp">{{__('main.slide3title')}}</a>
        </div>
      </div>

      <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon bx bx-chevron-left" aria-hidden="true"></span>
      </a>

      <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon bx bx-chevron-right" aria-hidden="true"></span>
      </a>

    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= Services Section ======= -->
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

    <!-- ======= Why Us Section ======= -->
    <section class="why-us" data-aos="fade-up" date-aos-delay="200">
      <div class="container">
      <div class="section-title">
          <h2>{{__('main.events')}}</h2>
          <p> {{__('main.eventstitle')}}</p>
        </div>
        <div class="row" hidden> 
            <div class="col-md-12 text-center">
            <h2 id="headline">{{__('main.eventCountDown')}}</h2>
            <div id="countdown">
                <ul>
                  <li><span id="days"></span>days</li>
                  <li><span id="hours"></span>Hours</li>
                  <li><span id="minutes"></span>Minutes</li>
                  <li><span id="seconds"></span>Seconds</li>
                </ul>
              </div>
              <div id="content" class="emoji">
                  <span>🥳</span>
                  <span>🎉</span>
                  <span>🎂</span>
                </div>
            </div>
       </div>

        <div class="row">
          <div class="col-lg-6 video-box">
            <img src="assets/img/whyus.JPG" class="img-fluid" alt="">
            <a href="https://www.youtube.com/channel/UCQRsXe6Hr3S-WcT5FVoscSQ" class="venobox play-btn mb-4" data-vbtype="video" data-autoplay="true" target="_blank"></a>
          </div>

          <div class="col-lg-6 d-flex flex-column justify-content-center p-5">

            <div class="icon-box icon-box-pink">
              <div class="icon"><i > <span class="iconify" data-icon="maki:jewelry-store"></span> </i></div>
              <h4 class="title"><a href="" style="color:goldenrod;">{{__('main.gold_gifts')}}</a></h4>
              <p class="description">{{__('main.whyus1')}}</p>
            </div>

            <div class="icon-box icon-box-pink">
              <div class="icon"><i class="bx bx-gift"></i></div>
              <h4 class="title"><a href="" style="color:goldenrod;">{{__('main.other_gifts')}}</a></h4>
              <p class="description">{{__('main.whyus2')}}</p>
            </div>

            <div class="icon-box icon-box-pink">
              <div class="icon"><i > <span class="iconify" data-icon="tabler:discount"></span> </i></div>
              <h4 class="title" ><a href="" style="color:goldenrod;">{{__('main.discounts')}}</a></h4>
              <p class="description">{{__('main.whyus3')}}</p>
            </div>


          </div>
        </div>

      </div>
    </section><!-- End Why Us Section -->

    <section class="features" id="history">
      <div class="container">

        <div class="section-title">
          <h2>{{__('main.slide1btn')}}</h2>
          <p>{{__('main.history_title')}}</p>
        </div>

        <div class="row" data-aos="fade-up">
          <div class="col-md-5">
            <img src="assets/img/shehata.jpeg" class="img-fluid" alt="">
          </div>
          <div class="col-md-7 pt-4">
            <h3>{{__('main.histor_title1')}}</h3>
            <p class="fst-italic">
              {{__('main.histor_detail1')}}
            </p>
      
          </div>
        </div>

        <div class="row" data-aos="fade-up">
          <div class="col-md-5 order-1 order-md-2">
            <img src="assets/img/firstshop.jpeg" class="img-fluid" alt="">
          </div>
          <div class="col-md-7 pt-5 order-2 order-md-1">
            <h3>{{__('main.histor_title2')}}</h3>
            <p class="fst-italic">
             {{__('main.histor_detail2')}}
            </p>
       
          </div>
        </div>

 

      </div>
    </section>

    <!-- ======= Features Section ======= -->
    <section class="features">
      <div class="container">

        <div class="section-title">
          <h2>{{__('main.profile')}}</h2>
          <p>{{__('main.profiletitle')}}</p>
        </div>

        <div class="row" data-aos="fade-up">
          <div class="col-md-5">
            <img src="assets/img/white_gold.JPG" class="img-fluid" alt="">
          </div>
          <div class="col-md-7 pt-4">
            <h3>{{__('main.white_gold')}}</h3>
            <p class="fst-italic">
              {{__('main.white_goldDetail')}}
            </p>
      
          </div>
        </div>

        <div class="row" data-aos="fade-up">
          <div class="col-md-5 order-1 order-md-2">
            <img src="assets/img/simple.jpg" class="img-fluid" alt="">
          </div>
          <div class="col-md-7 pt-5 order-2 order-md-1">
            <h3>{{__('main.simple_gold')}}</h3>
            <p class="fst-italic">
             {{__('main.simpleDetail')}}
            </p>
       
          </div>
        </div>

        <div class="row" data-aos="fade-up">
          <div class="col-md-5">
            <img src="assets/img/arabic.jpg" class="img-fluid" alt="">
          </div>
          <div class="col-md-7 pt-5">
            <h3>{{__('main.huge_gold')}}</h3>
            <p>{{__('main.huge_details')}}</p>
     
          </div>
        </div>

        <div class="row" data-aos="fade-up">
          <div class="col-md-5 order-1 order-md-2">
            <img src="assets/img/collection.jpg" class="img-fluid" alt="">
          </div>
          <div class="col-md-7 pt-5 order-2 order-md-1">
            <h3>{{__('main.collection')}}</h3>
            <p class="fst-italic">
             {{__('main.collectiondetail')}}
            </p>
         
          </div>
        </div>

      </div>
      <div class="form-group" data-aos="fade-up">
        <a href="{{route('portfolio')}}"> 

     
						<button class="form-control btn btn-info submit px-3" type="submit" style="width: 20%; display: block; margin: 20px auto; 
            background: #1e4356 ; color:goldenrod; border-radius:20px">
							{{__('main.loadmore')}}
						</button>

            </a>  
					</div>
    </section>

    <!-- <section  id="ourclients">
      <div class="container">
      <div class="section-title">
          <h2>{{__('main.opinions')}}</h2>
          <p> {{__('main.opinions_title')}}</p>
        </div>
        <div class="row">

        <div class="col-md-6 col-lg-4" data-aos="fade-up" >
      <iframe width="420" height="315"
            src="https://www.youtube.com/embed/tgbNymZ7vqY">
            </iframe> 
        </div>

          <div class="col-md-6 col-lg-4" data-aos="fade-up" >
                <iframe width="420" height="315"
                  src="https://www.youtube.com/embed/tgbNymZ7vqY">
                  </iframe> 
            </div>




   <div class="col-md-6 col-lg-4" data-aos="fade-up" >
        <iframe width="420" height="315"
              src="https://www.youtube.com/embed/tgbNymZ7vqY">
        </iframe> 


      </div>
      <div class="form-group" data-aos="fade-up">
        <a href="{{route('clients')}}"> 

     
						<button class="form-control btn btn-info submit px-3" type="submit" style="width: 20%; display: block; margin: 20px auto; 
            background: #1e4356 ; color:goldenrod; border-radius: 20px;">
							{{__('main.loadmore')}}
						</button>

            </a>  
					</div>
    
    </section>End Services Section -->


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



  <script type="text/javascript">
    (function () {
  const second = 1000,
        minute = second * 60,
        hour = minute * 60,
        day = hour * 24;

  //I'm adding this section so I don't have to keep updating this pen every year :-)
  //remove this if you don't need it
  let today = new Date(),
      dd = String(today.getDate()).padStart(2, "0"),
      mm = String(today.getMonth() + 1).padStart(2, "0"),
      yyyy = today.getFullYear(),
      nextYear = yyyy + 1,
      dayMonth = "09/30/",
      birthday = dayMonth + yyyy;
  
  today = mm + "/" + dd + "/" + yyyy;
  if (today > birthday) {
    birthday = dayMonth + nextYear;
  }
  //end
  
  const countDown = new Date('1/1/2022').getTime(),
      x = setInterval(function() {    

        const now = new Date().getTime(),
              distance = countDown - now;

        document.getElementById("days").innerText = Math.floor(distance / (day)),
          document.getElementById("hours").innerText = Math.floor((distance % (day)) / (hour)),
          document.getElementById("minutes").innerText = Math.floor((distance % (hour)) / (minute)),
          document.getElementById("seconds").innerText = Math.floor((distance % (minute)) / second);

        //do something later when date is reached
        if (distance < 0) {
          document.getElementById("headline").innerText = "It's my birthday!";
          document.getElementById("countdown").style.display = "none";
          document.getElementById("content").style.display = "block";
          clearInterval(x);
        }
        //seconds
      }, 0)
  }());
  </script>

</body>

</html>