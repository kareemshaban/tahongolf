<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Events - Tahoon Gold</title>
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
</head>

<body>

  <!-- ======= Header ======= -->
  @include('Layout.navbar' , ['slag' => 5])

  <main id="main">

    <!-- ======= About Us Section ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2 style="color: goldenrod ;">{{__('main.events')}}</h2>
          <ol>
            <li><a href="{{route('index')}}">{{__('main.home')}}</a></li>
            <li>{{__('main.events')}}</li>
          </ol>
        </div>

      </div>
    </section><!-- End About Us Section -->

    <!-- ======= About Section ======= -->
    <section class="about" data-aos="fade-up">
      <div class="container" >

        <div class="row">
          <div class="col-lg-6">

          <div class="form-group" data-aos="fade-up">
   

     
						<button id='spin' value="spin"  class="form-control btn btn-info submit px-3" type="submit" style="width: 20%; display: block; margin: 20px auto; 
            background: #1e4356 ; color:goldenrod; border-radius: 20px;">
							{{__('main.spin')}}
						</button>

            
					</div>
          
          <canvas id="canvas" width="500" height="500" ></canvas>
          
          
          </div>

          <div class="col-lg-6 pt-4 pt-lg-0">
            <h3 style="color:goldenrod;">{{__('main.lucky_wheel_title')}}</h3>
            <p class="fst-italic">
              {{__('main.lucky_wheel_title2')}}
            </p>
            <ul>
              <li><i class="bi bi-check2-circle"></i> {{__('main.step1')}}</li>
              <li><i class="bi bi-check2-circle"></i>{{__('main.step2')}}</li>
              <li><i class="bi bi-check2-circle"></i>{{__('main.step3')}}</li>
              <li><i class="bi bi-check2-circle"></i>{{__('main.step4')}}</li>
            </ul>
       
          </div>
        </div>

      </div>
    </section><!-- End About Section -->



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
var options = ["0", "5%", "10%", "0", "30%", "10%", "15%", "40%", "5%", "20%", "25%", "0", "GC", "10%", "0", "45%", "5%", "22%"];

var startAngle = 0;
var arc = Math.PI / (options.length / 2);
var spinTimeout = null;

var spinArcStart = 10;
var spinTime = 0;
var spinTimeTotal = 0;

var ctx;

document.getElementById("spin").addEventListener("click", spin);

function byte2Hex(n) {
  var nybHexString = "0123456789ABCDEF";
  return String(nybHexString.substr((n >> 4) & 0x0F,1)) + nybHexString.substr(n & 0x0F,1);
}

function RGB2Color(r,g,b) {
	return '#' + byte2Hex(r) + byte2Hex(g) + byte2Hex(b);
}

function getColor(item, maxitem) {
  var phase = 0;
  var center = 128;
  var width = 127;
  var frequency = Math.PI*2/maxitem;
  
  red   = Math.sin(frequency*item+2+phase) * width + center;
  green = Math.sin(frequency*item+0+phase) * width + center;
  blue  = Math.sin(frequency*item+4+phase) * width + center;
  
  return RGB2Color(red,green,blue);
}

function drawRouletteWheel() {
  var canvas = document.getElementById("canvas");
  if (canvas.getContext) {
    var outsideRadius = 200;
    var textRadius = 160;
    var insideRadius = 125;

    ctx = canvas.getContext("2d");
    ctx.clearRect(0,0,500,500);

    ctx.strokeStyle = "black";
    ctx.lineWidth = 2;

    ctx.font = 'bold 12px Helvetica, Arial';

    for(var i = 0; i < options.length; i++) {
      var angle = startAngle + i * arc;
      //ctx.fillStyle = colors[i];
      ctx.fillStyle = getColor(i, options.length);

      ctx.beginPath();
      ctx.arc(250, 250, outsideRadius, angle, angle + arc, false);
      ctx.arc(250, 250, insideRadius, angle + arc, angle, true);
      ctx.stroke();
      ctx.fill();

      ctx.save();
      ctx.shadowOffsetX = -1;
      ctx.shadowOffsetY = -1;
      ctx.shadowBlur    = 0;
      ctx.shadowColor   = "rgb(220,220,220)";
      ctx.fillStyle = "black";
      ctx.translate(250 + Math.cos(angle + arc / 2) * textRadius, 
                    250 + Math.sin(angle + arc / 2) * textRadius);
      ctx.rotate(angle + arc / 2 + Math.PI / 2);
      var text = options[i];
      ctx.fillText(text, -ctx.measureText(text).width / 2, 0);
      ctx.restore();
    } 

    //Arrow
    ctx.fillStyle = "black";
    ctx.beginPath();
    ctx.moveTo(250 - 4, 250 - (outsideRadius + 5));
    ctx.lineTo(250 + 4, 250 - (outsideRadius + 5));
    ctx.lineTo(250 + 4, 250 - (outsideRadius - 5));
    ctx.lineTo(250 + 9, 250 - (outsideRadius - 5));
    ctx.lineTo(250 + 0, 250 - (outsideRadius - 13));
    ctx.lineTo(250 - 9, 250 - (outsideRadius - 5));
    ctx.lineTo(250 - 4, 250 - (outsideRadius - 5));
    ctx.lineTo(250 - 4, 250 - (outsideRadius + 5));
    ctx.fill();
  }
}

function spin() {
  spinAngleStart = Math.random() * 10 + 10;
  spinTime = 0;
  spinTimeTotal = Math.random() * 3 + 4 * 5000;
  rotateWheel();
}

function rotateWheel() {
  spinTime += 30;
  if(spinTime >= spinTimeTotal) {
    stopRotateWheel();
    return;
  }
  var spinAngle = spinAngleStart - easeOut(spinTime, 0, spinAngleStart, spinTimeTotal);
  startAngle += (spinAngle * Math.PI / 180);
  drawRouletteWheel();
  spinTimeout = setTimeout('rotateWheel()', 30);
}

function stopRotateWheel() {
  clearTimeout(spinTimeout);
  var degrees = startAngle * 180 / Math.PI + 90;
  var arcd = arc * 180 / Math.PI;
  var index = Math.floor((360 - degrees % 360) / arcd);
  ctx.save();
  ctx.font = 'bold 30px Helvetica, Arial';
  var text = options[index]
  ctx.fillText(text, 250 - ctx.measureText(text).width / 2, 250 + 10);
  ctx.restore();
}

function easeOut(t, b, c, d) {
  var ts = (t/=d)*t;
  var tc = ts*t;
  return b+c*(tc + -3*ts + 3*t);
}

drawRouletteWheel();

  </script>

</body>

</html>