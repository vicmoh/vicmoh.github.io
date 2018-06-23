<!-- 
  @author Vicky Mohammad
  @description main home page
 -->

<!DOCTYPE html>
<html lang="en">
<!--header-->

<head>
  <title>Good Drivers</title>
  <meta charset="utf-8">

  <!-- meta -->
  <meta name="description" content="Good driving school Brampton offers affordable defensive driving training and classes by experienced instructors at highly reasonable price with full client satisfaction."/>
  <meta name="keywords" content="driving schools Brampton, best driving school in Brampton, affordable driving school Brampton, drive test center Brampton.">
  <meta name="google-site-verification"  content="wdKlaISGOxvep9HWgqNiSCEUDY8U70MmzZuosM9u_3Q" />
  <meta name="msvalidate.01" content="1A7EE31B677F4416A637C8FAF2942CE8" />

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
  crossorigin="anonymous">

  <!--my important custom header and footer-->
  <link rel="stylesheet" type="text/css" href="vl-assets/styles/navBar.css">
  <link rel="stylesheet" type="text/css" href="vl-assets/styles/footer.css">
  <link rel="stylesheet" type="text/css" href="vl-assets/styles/global.css">
  <!-- other custom css -->
  <link rel="stylesheet" type="text/css" href="vl-assets/styles/carousel.css">
  <link rel="stylesheet" type="text/css" href="vl-assets/styles/hover.css">
  <link rel="stylesheet" type="text/css" href="vl-assets/styles/cardflip.css">
  <link rel="stylesheet" type="text/css" href="vl-assets/styles/map.css">

  <!--aos snik-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.0/aos.css">
  

  <!--google fonts-->
  <!-- 
  font-family: 'Pacifico', cursive;
  font-family: 'Dancing Script', cursive;
  font-family: 'Great Vibes', cursive;
  font-family: 'Sacramento', cursive;
  font-family: 'Marck Script', cursive;
  -->
  <link href="https://fonts.googleapis.com/css?family=Dancing+Script|Great+Vibes|Marck+Script|Pacifico|Sacramento" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Bungee|Rozha+One" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Cedarville+Cursive|Oswald|Raleway" rel="stylesheet">

  <!-- view port for phones -->
  <!-- <meta name="viewport" content="width=device-width, initial-scale=0"> -->
  <meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
   <style>
       #map {
        height: 320px;  /* The height is 400 pixels */
        width: 100%;  /* The width is the width of the web page */
       }
    </style>
</head>

<?php require("Query_Common.php"); ?>

<body>
  <!-- ****************************** for fade transition on page -->
  <section>
    <style>
      .loadingPage {
        background: white;
        top: 0;
        height: 100%;
        width: 100%;
        position: fixed;
        z-index: 1000;
        transition-duration: 0.2s;
        transition-timing-function: ease-in;
        transition-delay: 0.2s;
        opacity: 1;
      }
    </style>
    <div class="loadingPage"></div>
  </section>

  <!-- **************** navigation bar **************-->
  <!-- to implment nav bar copy the code line to the other html -->
  <!-- put the <script src="vl-assets/scripts/navbar.js"></script> at the bottom below jquery etc-->
  <!-- put the <link rel="stylesheet" type="text/css" href="vl-assets/styles/navBar.css"> at the head -->
  <!-- and put the nav bar placeholder code at the top of body-->
  <!-- to put the color just modify the link id color for example-->
  <!-- **********************************************-->
  <style>
    #homeLink{
      /* adding the bottom red line for home page */
      border-bottom: 3px solid red;
    }
  </style>
  <section id="navigation-placeholder"></section>

  <!-- carousel section -->
  <section class="homeCarousel">
    <!-- carousel img slider -->
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      </ol>
      <!-- carousel inner -->
      <div class="carousel-inner">
        <!-- slide 1 -->
        <div class="carousel-item active" style="background-image: url(vl-assets/assets/action-asphalt-auto.jpg)">
          <img class="d-none d-lg-block w-100" src="vl-assets/assets/action-asphalt-auto.jpg" alt="First slide">
          <div class="container">
            <div class="carousel-caption centerContent">
              <h1>Welcome!</h1>
              <h1>Good Drivers</h1>
              <p>Teaching since 1981</p>
              <p>Celebrating over 30 years of business!</p>
              <p>
                <a class="btn btn-lg btn-primary" href="http://www.gooddrivers.ca/driving-course-mississauga.php" role="button">Register Now</a>
              </p>
            </div>
          </div>
        </div>
        <!-- slide 2 -->
        <div class="carousel-item" style="background-image: url(vl-assets/assets/action-automotive-blur.jpg)">
          <img class="d-none d-lg-block w-100" src="vl-assets/assets/action-automotive-blur.jpg" alt="Second slide">
          <div class="container">
            <div class="carousel-caption carouselRight">
              <div>
                <h1 style="color: red;">We Belive in</h1>
                <p>&#10003; Quality &amp; Commitment</p>
                <p>&#10003; Reliable &amp; Affordable Service</p>
                <p>&#10003; With a Smile!</p>
                <p>
                  <a class="btn btn-lg btn-danger" href="http://www.gooddrivers.ca/driving-school-mississauga.php" role="button">About Us</a>
                </p>
              </div>
            </div>
          </div>
        </div>
        <!-- slide 3 -->
        <div class="carousel-item" style="background-image: url(vl-assets/assets/automobiles-automotives-black-and-white.jpg)">
          <img class="d-none d-lg-block  w-100" src="vl-assets/assets/automobiles-automotives-black-and-white.jpg" alt="Third slide">
          <div class="container">
            <div class="carousel-caption carouselLeft">
              <div>
                <h1 style="color: lightblue;">Execellent Result!</h1>
                <p>With 90% First Time Pass Rate!</p>
                <p>Our instructors are highly experienced, professional and fluent in English</p>
                <p>
                  <a class="btn btn-lg btn-primary" href="http://www.gooddrivers.ca/driver-training-schools-mississauga-for-insurance-discount.php" role="button">Contact Us</a>
                </p>
              </div>
            </div>
          </div>
        </div>
        <!-- slide controller -->
        <div class="control-box">
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
  </section>
  <!-- end carousel -->

  <!-- section for cards -->
  <section class="container" style="padding-top: 5em">
    <div class="row">
      <!-- card flip 1 -->

      <div class="cardflip mx-auto">
        <div class="image-flip mx-auto" ontouchstart="this.classList.toggle('hover');" 
          data-aos="fade-right" data-aos-once="true" data-aos-delay="300">
          <div class="mainflip px-auto">
            <div class="frontside">
              <div class="card">
                <img class="card-img-top img-fluid" src="vl-assets/assets/ministry.jpg" alt="card image">
                <div class="card-body">
                  <h4 class="card-title">Ministry Approved Driver Training Courses</h4>
                  <p class="card-text">We offer three execellent ministry approved trainning programs that starts every month.</p>
                </div>
              </div>
            </div>
            <div class="backside">
              <div class="card">
                <div class="card-header">
                  <!-- This is a Header -->
                </div>
                <div class="card-body">
                  <h4 class="card-title">Ministry Approved Driver Training Courses</h4>
                  <p class="card-text">Three programs start every month, Saturday &amp; Sunday or Weekday Evening classes are available.</p>
                  <a href="http://www.gooddrivers.ca/Ministry_Approved_Beginner_Driver_Education_Program.php" class="btn btn-info btn-danger btn-md">Read More</a>
                </div>
                <div class="card-footer">
                  <!-- This is a Footer -->
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- card flip 2 -->
      <div class="cardflip mx-auto">
        <div class="image-flip" ontouchstart="this.classList.toggle('hover');" 
          data-aos="fade-right" data-aos-once="true" data-aos-delay="600">
          <div class="mainflip">
            <div class="frontside">
              <div class="card">
                <img class="card-img-top img-fluid" src="vl-assets/assets/adventure-baltic-sea-car.jpg" alt="card image">
                <div class="card-body">
                  <h4 class="card-title">New to Canada? We’re here to help!</h4>
                  <p class="card-text">We realize that settling in a new country can be difficult. We are here to help!</p>
                </div>
              </div>
            </div>
            <div class="backside">
              <div class="card">
                <div class="card-header">
                  <!-- This is a Header -->
                </div>
                <div class="card-body">
                  <h4 class="card-title">New to Canada? We’re here to help!</h4>
                  <p class="card-text">We realize that settling in a new country is difficult, especially without proper guidance. Good Drivers
                    has an easy 3 step process to help you get your license.</p>
                  <a href="http://www.gooddrivers.ca/Programe_Fees.php" class="btn btn-info btn-danger btn-md">Read More</a>
                </div>
                <div class="card-footer">
                  <!-- This is a Footer -->
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- card flip 3 -->
      <div class="cardflip mx-auto">
        <div class="image-flip" ontouchstart="this.classList.toggle('hover');" 
          data-aos="fade-right" data-aos-once="true" data-aos-delay="900">
          <div class="mainflip">
            <div class="frontside">
              <div class="card">
                <img class="card-img-top img-fluid" src="vl-assets/assets/adult-automotive-blur.jpg" alt="card image">
                <div class="card-body">
                  <h4 class="card-title">G2 &amp; G License Small Packages</h4>
                  <p class="card-text">This packages will help you prepare which includes high quality tests, reviews, lessons and more.</p>
                </div>
              </div>
            </div>
            <div class="backside">
              <div class="card">
                <div class="card-header">
                  <!-- This is a Header -->
                </div>
                <div class="card-body">
                  <h4 class="card-title">G2 &amp; G License Small Packages</h4>
                  <p class="card-text">Packages include booking of a test appointment, review lessons prior to the test, a refresher lesson on the
                    day of the test to get you acquainted with the test area and use of our vehicle for the test.</p>
                  <a href="http://www.gooddrivers.ca/G-G2_Preparation_Packages.php" class="btn btn-info btn-danger btn-md">Read More</a>
                </div>
                <div class="card-footer">
                  <!-- This is a Footer -->
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- testimonial section with pylon img -->
  <style>
    .testimonials {
      text-align: center;
      background: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url(vl-assets/assets/asphalt-blacktop-daytime-dark.jpg) no-repeat fixed 100%;
      background-position: center;
      height: 500px;
      width: 100%;
      margin: auto;
      background-size: cover;
      /* filter: brightness(70%); */
    }

    .testimonialHeading{
      position: absolute;
      color: white;
      top: 50px;
      font-family: 'Pacifico', cursive;
      text-align: center;
      /* font-family: 'Dancing Script', cursive; */
      /* font-family: 'Great Vibes', cursive; */
      /* font-family: 'Sacramento', cursive; */
      /* font-family: 'Marck Script', cursive; */
      left: 200px;
    }

    .testimonialBody{
      position: absolute;
      top: 150px;
      color: white;
      /* font-family: 'Marck Script', cursive; */
      left: 370px;
    }

    .testimonialQuotes{
      left: 15%;
      width: 70%;
      height: 300px;
    }
    
    .testimonialQuotes p{
      width: 100%;
      color: white;
    }

    @media(max-width: 1200px){
      .testimonialHeading h1{
        font-size: 20px !important;
      }

      .testimonialHeading{
        left: 0px;
      }

      .testimonialBody{
        left: 0px;
      }
    
      .testimonialQuotes{
        height: 300px;
      }

      .testimonialQuotes p{
        color: white;
      }
    }

    
    @media(max-width: 760px){
      .testimonials{
        padding-bottom: 700px;
      }
      .testimonialQuotes{
        height: 600px;
      }
    }

    .videoReview{
      top: 150px;
      left: 5%;
      position: absolute;
      z-index: 10;
    }

    @media(max-width: 1200px){
      .videoReview{
        top: 450px;
        margin-right: auto !important;
        margin-left: auto !important;
        left: 0;
        right: 0;
        text-align: center;
      }
      .testimonials{
        height: 700px;
      }
    }

    @media(max-width: 800px){
      .videoReview{
        top: 650px;
      }
      .testimonials{
        height: 900px;
      }
    }
    
  </style>
  <section class="testimonials">
    <div class="container relativeContent">
      <div class="videoReview">
        <video width="300" controls>
          <source src="vl-assets/assets/video-review.mp4" type="video/mp4">
          Your browser does not support HTML5 video.
        </video>
      </div> 
      <div class="row">
        <div class="col">
          <!-- 3 of 3 (wider)-->
          
          <!-- heading for testimonial -->
          <div class="testimonialHeading centerContent">
            <h1 style="color: white;">Here's what our students say </h1>
          </div>
          
          <!-- body section for testimonial -->
          <div class="testimonialBody centerContent">
            <!-- carousel of testimonial quotes -->
            <div id="carouselContent" class="carousel slide" data-ride="carousel">
              <div class="carousel-inner" role="listbox">
                <div class="carousel-item active testimonialQuotes">
                  <p>
                    "Thank you Good Drivers special thx to Milad my in-car teacher he was so patient and I passed my G2 first time. The classroom
                    was sooooo informative thank-you Monika &amp; Dal." Rhea Charangth, St. Francis Xavier Secondary School
                    "I attended the evening classes at this driving school and they were very informative. Monika is an excellent
                    instructor - helpful, answered all my questions and made me feel really comfortable. My in-car instructor
                    was Deepak and he was so patient and friendly, he never yelled at me, gave me very clear instructions and
                    he is so funny! I got my G2 on my first try at Etobicoke test centre. Thank you Good Drivers!" - Lauren
                    Baig, McMaster University
                  </p>
                </div>

                <!-- php for the testimonials -->
                <?php  
                  $qr="select * from gallery where album_name='Home_Testimonial' and page_type='Home_Testimonial_Desktop' "; // echo $qr;
                  $rej1=mysql_query($qr) or die(mysql_error());  
                  $img_src=$image_discrip=$image_name=$page_type_d="";
                  while($reji=mysql_fetch_array($rej1)){   
                    $img_src=$reji['image'];	
                    $image_discrip=$reji['image_discrip'];	
                    $sub_detail=$reji['sub_detail'];  
                    // tets the info here
                    echo "<div class='carousel-item testimonialQuotes'><p>";
                    echo $image_discrip;
                    echo "<span>";
                    echo $sub_detail;
                    echo "</span></p></div>";
                  }
                ?>

              <!-- controller for the testimonial quotes -->
              <a class="carousel-control-prev" href="#carouselContent" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#carouselContent" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
            </div>
          </div>
          <!-- end of testimonial body-->
        </div>
        <!-- end column -->
      </div>
      <!-- end row -->
    </div>
    <!-- end container -->
  </section>

  <!-- schedule section -->
  <style>
    .schedule p{
      margin: 0;
      padding: 0;
      color: #666;
    }
    .schedule{
      padding-top: 5em;
      padding-bottom: 1em;
    }
    .awardImage{
      height: 400px;
    }

    .schedule .col{
      padding-bottom: 3em;
    }
  </style>
  <section class="container schedule">
    <div class="">
      <div class="row">
        <!-- award img -->
        <div class="col" align="center">
          <img class="awardImage" src="vl-assets/assets/award2015cut.png" alt="">
        </div>
        <!-- why choose us -->
        <div class="col" align="center">
          <h1 style="color: black;">Why Choose Us</h1>
          <p>&#10003; Ministry-Approved BDE Course Provider</p>
          <p>&#10003; Insurance Reduction</p>
          <p>&#10003; Courses Available Weekdays/Weekends</p>
          <p>&#10003; 4-Day Courses Every Week</p>
          <p>&#10003; Flexible Hours</p>
          <p>&#10003; Affordable</p>
          <p>&#10003; Easy Payment Plans</p>
          <p>&#10003; 100% Client Satisfaction</p>
          <p>&#10003; Male &amp; Female Instructors Available</p>
          <p>&#10003; Highly Experienced Instructors</p>
          <p>&#10003; Patient &amp; Courteous Staff</p>
          <p>&#10003; Brampton Driver Training</p>
        </div>
        <!-- schedule -->
        <div class="col-xs-6 centerMobile-8 centerMobile-12">
          <div class="scheduleOutline">
            <div class="container">
              <table class="table">
              <thead><tr>

              <!-- php for schedule header -->
              <?php  
                $gal="select * from gallery where album_name='Course_Schedule' and discrip!='Below' and page_type='Home'"; // echo $qr;
                $gall=mysql_query($gal) or die(mysql_error()); 
                $image_name=""; $image_discrip="";
                for($x=0; $x<2; $x++){
                  $gl=mysql_fetch_array($gall);
                  $image_name=$gl['image_name'];   	
                  $image_discrip=$gl['image_discrip'];
                  // display the header
                  // echo "<thead><tr>";
                  echo "<th>".$image_name."</th>";
                  // echo "</tr></thead>";

                  // echo "<tbody><tr>";
                  // echo "<td>".$image_discrip."</td>";
                  // echo "</tr></tbody>";
                }//end for
              ?>
              
              <!-- the body section -->
              </tr></thead>
              <tbody><tr>

              <!-- php for schedule body -->
              <?php  
                $gal="select * from gallery where album_name='Course_Schedule' and discrip!='Below' and page_type='Home'"; // echo $qr;
                $gall=mysql_query($gal) or die(mysql_error()); 
                $image_name=""; $image_discrip="";
                for($x=0; $x<2; $x++){
                  $gl=mysql_fetch_array($gall);
                  $image_name=$gl['image_name'];   	
                  $image_discrip=$gl['image_discrip'];
                  // display the header
                  // echo "<thead><tr>";
                  // echo "<th>".$image_name."</th>";
                  // echo "</tr></thead>";

                  // echo "<tbody><tr>";
                  echo "<td>".$image_discrip."</td>";
                  // echo "</tr></tbody>";
                }//end for
              ?>

              </tr></tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- google map -->
  <!-- <section class="" id="cd-google-map">
    <div id="google-container"></div>
    <div id="cd-zoom-in"></div>
    <div id="cd-zoom-out"></div>
  </section> -->

  <div id="map" class="my-2"></div>
  <address>3025 Hurontario St #104, Mississauga, ON L5A 2H1</address>

  <!-- footer -->
  <section id="footer-placeholder"></section>
  
    <!-- Load jquery, bootstrap, aos-->
  <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
    crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.0/aos.js"></script>
  <!-- my custom js -->
  <script src="vl-assets/scripts/pageload.js"></script>
  <script src="vl-assets/scripts/navbar.js"></script>
  <script src="vl-assets/scripts/footer.js"></script>
  <!-- <script src="vl-assets/scripts/map.js"></script> -->
  <script>
    AOS.init({
      duration: 1200,
    });
  </script>
  <script>
      // Initialize and add the map
      function initMap() {
        // The location of Uluru
        var uluru = new google.maps.LatLng(43.581453, -79.616722);
        // The map, centered at Uluru
        var map = new google.maps.Map(
            document.getElementById('map'), {zoom: 10, center: uluru});
        // The marker, positioned at Uluru
        var marker = new google.maps.Marker({position: uluru, map: map});
      }
    </script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBSVcJMxv0xE5e-YXjbn_Aj2u1kyuSVZIs&callback=initMap"
    type="text/javascript"></script>
</body>
</html>