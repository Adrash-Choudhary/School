<?php $page='home'; ?>


<!DOCTYPE html>
<html dir="ltr" lang="en">
<head>


<meta name="viewport" content="width=device-width,initial-scale=1.0"/>
<meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
<meta name="description" content="StudyPress | Education & Courses HTML Template" />
<meta name="keywords" content="academy, course, education, education html theme, elearning, learning," />
<meta name="author" content="ThemeMascot" />
<title>Gyan Sarovar Public School</title>
<link href="MYIMAGE/icon.jpg" rel="shortcut icon" type="image/png">
<!-- Stylesheet -->
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
<link href="css/animate.min.css" rel="stylesheet" type="text/css">
<link href="css/javascript-plugins-bundle.css" rel="stylesheet"/>

<!-- CSS | menuzord megamenu skins -->
<link href="js/menuzord/css/menuzord.css" rel="stylesheet"/>

<!-- CSS | Main style file -->
<link href="css/style-main.css" rel="stylesheet" type="text/css">
<link id="menuzord-menu-skins" href="css/menuzord-skins/menuzord-rounded-boxed.css" rel="stylesheet"/>

<!-- CSS | Responsive media queries -->
<link href="css/responsive.css" rel="stylesheet" type="text/css">
<!-- CSS | Style css. This is the file where you can place your own custom css code. Just uncomment it and use it. -->

<!-- CSS | Theme Color -->
<link href="css/colors/theme-skin-color-set1.css" rel="stylesheet" type="text/css">

<!-- external javascripts -->
<script src="js/jquery.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/javascript-plugins-bundle.js"></script>
<script src="js/menuzord/js/menuzord.js"></script>

<!-- REVOLUTION STYLE SHEETS -->
<link rel="stylesheet" type="text/css" href="js/revolution-slider/css/rs6.css">
<link rel="stylesheet" type="text/css" href="js/revolution-slider/extra-rev-slider1.css">
<!-- REVOLUTION LAYERS STYLES -->
<!-- REVOLUTION JS FILES -->
<script src="js/revolution-slider/js/revolution.tools.min.js"></script>
<script src="js/revolution-slider/js/rs6.min.js"></script>
<script src="js/revolution-slider/extra-rev-slider1.js"></script>

<!-- <link href="css/style.css" rel="stylesheet" type="text/css"> -->


<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
</head>
<body class="tm-container-1340px has-side-panel side-panel-right">
<!-- preloader -->

<div id="wrapper" class="clearfix">
  <!-- Header -->
  
   <?php include_once('header.php'); ?> 
  
     <!-- Start main-content -->
	 
	 
	 
  <div class="main-content-area">
    <!-- Section: home -->
    <section id="home" class="">
      <div class="container-fluid p-0">
        <div class="row">
          <div class="col">
            <!-- START StudyPress HTML RevSlider REVOLUTION SLIDER 6.1.7 -->
            <p class="rs-p-wp-fix"></p>
            <rs-module-wrap id="rev_slider_1_1_wrapper" data-alias="studypress-html-revslider-1" data-source="gallery" 
            style="background:transparent;padding:0;margin:0px auto;margin-top:0;margin-bottom:0;">
              <rs-module id="rev_slider_1_1" style="display:none;" data-version="6.1.7">
                <rs-slides>
                    
                    
                    
                    
                    
                    
<?php
$ss='1';
$query_slider="select * from banner ORDER BY id DESC";  
$data_slider = mysqli_query($con, $query_slider); 
while ($res_slider = mysqli_fetch_array($data_slider)) {  ?>                    
                    
                    

                    
                  <rs-slide data-key="rs-47" data-title="Slide 1" data-thumb="" data-anim="ei:d;eo:d;s:d;r:0;t:slotslide-horizontal;sl:d;">
                    <img src="ADMIN/<?php echo $res_slider['photo']; ?>" title="bg3" width="1920" height="1280" data-parallax="off" class="rev-slidebg" data-no-retina>
                    <!--
                      -->
                    <rs-layer
                      id="slider-10-slide-47-layer-1"
                      data-type="text"
                      data-rsp_ch="on"
                      data-xy="x:l,l,l,c;xo:55px,50px,55px,0;yo:447px,399px,364px,312px;"
                      data-text="w:normal;s:20,18,18,16;l:25,24,28,24;fw:300;a:left,left,left,center;"
                      data-frame_1="st:900;sp:1000;"
                      data-frame_999="o:0;st:w;sR:8700;"
                      style="z-index:9;"
					  style="color:red;"
                      ><?php echo $res_slider['caption2']; ?>
                    </rs-layer>
                    <!--
                      -->
                    <rs-layer
                      id="slider-10-slide-47-layer-2"
                      data-type="text"
                      data-rsp_ch="on"
                      data-xy="x:l,l,l,c;xo:48px,45px,50px,0;yo:226px,212px,179px,153px;"
                      data-text="w:normal;s:115,100,95,78;l:115,89,90,71;ls:1px,0px,0px,0px;fw:700;a:left,left,left,center;"
                      data-frame_1="st:300;sp:1000;sR:310;"
                      data-frame_999="o:0;st:w;sR:7690;"
                      style="z-index:11;text-transform:uppercase;"
                      >
                    </rs-layer>
                    <!--
                      -->
                    <rs-layer
                      id="slider-10-slide-47-layer-3"
                      data-type="text"
                      data-rsp_ch="on"
                      data-xy="x:l,l,l,c;xo:59px,50px,55px,0;yo:364px,321px,291px,245px;"
                      data-text="w:normal;s:36,32,28,24;l:25,21,25,30;fw:600;a:left,left,left,center;"
                      data-padding="t:15,15,11,7;r:20,20,15,15;b:15,15,11,7;l:20,20,15,15;"
                      data-border="bos:solid;boc:#f2184f;bow:0,0px,0,6px;"
                      data-frame_1="st:600;sp:1000;sR:500;"
                      data-frame_999="o:0;st:w;sR:7500;"
                      style="z-index:10;background-color:#202c45;text-transform:uppercase;"
                      ><?php echo $res_slider['caption1']; ?>
                    </rs-layer>
                    <!--
                      -->
                    <rs-layer
                      id="slider-10-slide-47-layer-4"
                      data-type="text"
                      data-rsp_ch="on"
                      data-xy="x:l,l,l,c;xo:55px,50px,55px,0;yo:539px,481px,448px,390px;"
                      data-text="w:normal;s:18,14,18,20;l:25,19,18,22;a:left,left,left,center;"
                      data-border="bos:solid;boc:#f2184f;bow:0,0,0,6px;"
                      data-frame_1="st:1200;sp:1000;sR:1500;"
                      data-frame_999="o:0;st:w;sR:6500;"
                      style="z-index:8;"
                      ><a href="<?php echo $res_slider['link']; ?>" target="_blank" class="btn btn-flat btn-theme-colored2 text-white">Click Here</a>
                    </rs-layer>
                    <!--
                      -->
                  </rs-slide>
                  
                  
                  
                  
                  
<?php } ?>                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                </rs-slides>
                <rs-static-layers>
                  <!--
                    -->
                </rs-static-layers>
                <rs-progress class="rs-bottom" style="height: 5px; background: rgba(199,199,199,0.5);"></rs-progress>
              </rs-module>
              <script type="text/javascript">
                if(typeof revslider_showDoubleJqueryError === "undefined") {
                  function revslider_showDoubleJqueryError(sliderID) {
                    var err = "<div class='rs_error_message_box'>";
                    err += "<div class='rs_error_message_oops'>Oops...</div>";
                    err += "<div class='rs_error_message_content'>";
                    err += "You have some jquery.js library include that comes after the Slider Revolution files js inclusion.<br>";
                    err += "To fix this, you can:<br>&nbsp;&nbsp;&nbsp; 1. Set 'Module General Options' -> 'Advanced' -> 'jQuery & OutPut Filters' -> 'Put JS to Body' to on";
                    err += "<br>&nbsp;&nbsp;&nbsp; 2. Find the double jQuery.js inclusion and remove it";
                    err += "</div>";
                  err += "</div>";
                    jQuery(sliderID).show().html(err);
                  }
                }
              </script>
            </rs-module-wrap>
            <!-- END REVOLUTION SLIDER -->
          </div>
        </div>
      </div>
    </section>

    <!-- Section: About -->
    <section class="">
      <div class="container">
        <div class="section-content">
          <div class="row">
            <div class="col-md-12 col-lg-6 col-xl-6 " >
              <!---<h3 class="letter-space-4 text-gray-darkgray text-uppercase mt-0 mb-0">All About</h3>--->
              <h2 class="text-uppercase mt-0 line-bottom line-bottom-theme-colored1">Welcome To Gyansarovar Public School, Saharsa </h2>
			  
             <p class="about-sub-title" align="justify"> Martin Luther King Jr. said, "<em><strong><b>The function of education is to teach one 
			 to think intensively and to think critically. Intelligence plus character - 
			 that is the goal of true education.</b></strong></em>"<br>
			 Keeping with the same ideology, we at Gyansarovar Public School, Saharsa endeavour to impart education, 
			 a combination of the Indian values and the western concept of a pragmatic approach to knowledge acquisition, 
			 by involving students in hand-on experience. Apart from academics, co-curricular activities are given equal 
			 prominence in the school. The National Olympiads are a regular feature of the school. Gyansarovar Public School, 
			 Saharsa is a place which prides itself in being a unique model of all-inclusive learning that suits best for 
			 the students who are passionately driven, inquisitive and self-sufficient.
			 <br><br>
			 Gyansarovar Public School, Saharsa is affiliated to the Central Board of Secondary Education (CBSE), which is the largest 
			 educational board in the country. It is recognized by the Department of Education, Govt. of NCT Delhi and the Ministry 
			 of HRD, Govt. of India. Gyansarovar Public School, Saharsa offers a nationalistic curriculum in an environment that 
			 fosters excellence in school life amidst wide open spaces. It also promotes the natural ability of children to learn 
			 through development of their cognitive and thinking skills.
			 </p>
			  
             
              
            </div>



<style>

.mySlides {display: none;}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
}

/* Caption text */
.text {
  color: #000;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: transparent;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active {
  background-color: transparent;
}

/* Fading animation */
.fade {
  animation-name: fade;
  animation-duration: 1.5s;
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .text {font-size: 11px}
}
</style>
<div class="col-md-12 col-lg-6 col-xl-6">
<h2 class="line-bottom line-bottom-theme-colored1">Latest Circulars</h2>

<div class="slideshow-container">

<?php
$c='1';
$query_CIR="select * from Circulars";  
$data_CIR = mysqli_query($con, $query_CIR); 
while ($res_CIR = mysqli_fetch_array($data_CIR)) {  ?>
<div class="mySlides fade">
<img src="ADMIN/<?php echo $res_CIR['photo']; ?>" style="width:100%">
<div class="text"></div>


<div class="overflow-hidden">
<h5 class="entry-title"><a href="#" rel="bookmark"><?php echo $res_CIR['title']; ?></a></h5>                        
</div>



</div>
<?php } ?>

</div>
<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>

<script>
let slideIndex = 0;
showSlides();

function showSlides() {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 2000); // Change image every 2 seconds
}
</script>


</div>




                  </div>
                  <div class="col"></div>
                </div>
              </div>

          
              
              
            
            </div>
            
          </div>
        </div>
      </div>
    </section>
	
	
	
	

 


	
	
	






 <!-- Section: News -->
    <section class="bg-silver-light">
      <div class="container">
        <div class="section-title">
          <div class="row">
            <div class="col-md-8">
              <div class="mb-60">
                <div class="tm-sc tm-sc-section-title section-title">
                  <div class="title-wrapper">
                    <h2 class="text-uppercase line-bottom line-bottom-theme-colored1">
					Recent Activities
					</h2>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="section-content">
          <div class="row">
              
              
<?php
$query_ACT="select * from Activity";  
$data_ACT = mysqli_query($con, $query_ACT); 
while ($res_ACT = mysqli_fetch_array($data_ACT)) {  ?>               
            <div class="col-sm-12 col-md-6 col-lg-4 col-xl-4">
              <div class="tm-sc tm-sc-blog tm-sc-blog-masonry blog-style1-current-theme mb-lg-30">
                <article class="post">
                  <div class="entry-header">
                    <div class="post-thumb">
                      <div class="post-thumb-inner">
                        <div class="thumb"> <img class="w-100" src="ADMIN/<?php echo $res_ACT['photo']; ?>" alt="Image"></div>
                      </div>
                    </div>
                  </div>
                  <div class="entry-content">
                    <div class="clearfix mb-15">
                      <div class="entry-date media-left text-center">
                        <ul>
<li class="font-16 text-white font-weight-600 border-bottom">
<?php
$activitydate1=$res_ACT['date'];
$date=date_create($activitydate1);
echo date_format($date,"d");
?>
</li>
<li class="font-12 text-white text-uppercase">
<?php
$activitydate2=$res_ACT['date'];
$date=date_create($activitydate2);
echo date_format($date,"M");
?></li>

                        </ul>
                      </div>
                      <div class="overflow-hidden">
                        <h5 class="entry-title"><a href="#" rel="bookmark"><?php echo $res_ACT['title']; ?></a></h5>                        
                      </div>
                    </div>
                    <p class="mb-15"><?php echo $res_ACT['content']; ?></p>
                    <div class="clearfix"></div>
                  </div>
                </article>
              </div>
            </div>
<?php } ?>            
            
            
             
          </div>
        </div>
      </div>
    </section>







  
   
   

   
   
   
   
   
   
   

    <!-- Section: Upcoming Event -->
    <section>
      <div class="container">
        <div class="section-content">
          <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-6">
              <h2 class="line-bottom line-bottom-theme-colored1">Upcoming <span class="text-theme-colored1">Events</span></h2>
              
<?php
$query_EVENT="select * from event";  
$data_EVENT = mysqli_query($con, $query_EVENT); 
while ($res_EVENT = mysqli_fetch_array($data_EVENT)) {  ?>              
              <div class="upcoming-events-current-style mb-10 mb-sm-40">
                <div class="row align-items-center">
                  <div class="col-sm-3 pr-0 pr-sm-15">
                    <div class="thumb">
                      <img class="w-100" src="ADMIN/<?php echo $res_EVENT['photo']; ?>" alt="<?php echo $res_EVENT['name']; ?>">
                    </div>
                  </div>
                  <div class="col-sm-8">
                    <div class="event-details p-15 pt-0 pb-0">
                      <h5 class="media-heading text-uppercase mt-0 mb-0 mt-sm-15"><?php echo $res_EVENT['name']; ?></h5>
                      <ul class="event-location mb-10">
                        <li class="event-time"><i class="far fa-clock text-theme-colored2 font-icon sm-display-block"></i>
                        <?php
$eventdate=$res_EVENT['date'];
$date=date_create($eventdate);
echo date_format($date,"d M Y");
?></li>
                      </ul>
                    </div>
                  </div>
                  <div class="col"></div>
                </div>
              </div>
<?php } ?>              
              
              
              
              
              
            </div>
			
			
			
			
			
			
			
			
            <div class="col-sm-12 col-md-12 col-lg-6">
<h2 class="line-bottom line-bottom-theme-colored1">Quick Facts</h2>
              
           
 
			  <div class="accordion tm-accordion accordion-classic accordion-theme-colored1" id="accordion500">
			  
                <div class="accordion-item">
                  <h2 class="accordion-header" id="heading501">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" 
					data-bs-target="#collapse501" aria-expanded="true" aria-controls="collapse501">
                      <strong>Measures Taken to Make Students Fluent in English</strong>
                    </button>
                  </h2>
                  <div id="collapse501" class="accordion-collapse collapse show" aria-labelledby="heading501" data-bs-parent="#accordion500">
                    <div class="accordion-body">
                      School endeavours and provides necessary environment to make students fluent in English at the earliest. At GPS Saharsa, we recognize the socio-cultural background of our students, and that is why English is the only means of communication at the school campus. Moreover, motley of opportunities and platforms are provided to each student to enhance their communication skills. School's academic calendar is packed with plethora of activities like morning assembly, news reading, essay writing, poem writing and recitation, scriptures, extempore, speeches, debates, turn coat, quizzes etc. in English. All these activities and competitions provides each student with ample opportunities to upgrade their communication and comprehension skills. In this regard, we seek have introduced abridged form of novels by great writers at a very age to cultivate reading habit amongst the students. GPS Saharsa is equipped with world class infrastructure to make teaching-learning process fun filled and joyful experience.
                    </div>
                  </div>
                </div>
				
				
                <div class="accordion-item">
                  <h2 class="accordion-header" id="heading502">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse502" aria-expanded="false" aria-controls="collapse502">
                      <strong>Spacious Classrooms</strong>
                    </button>
                  </h2>
                  <div id="collapse502" class="accordion-collapse collapse" aria-labelledby="heading502" data-bs-parent="#accordion500">
                    <div class="accordion-body">
                      Each classroom is huge and cross aerated with comfortable furniture that makes teachers and students move freely in a classroom.
                    </div>
                  </div>
                </div>
				
				
                <div class="accordion-item">
                  <h2 class="accordion-header" id="heading503">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse503" aria-expanded="false" aria-controls="collapse503">
                      <strong>Encouraging Adaptability</strong>
                    </button>
                  </h2>
                  <div id="collapse503" class="accordion-collapse collapse" aria-labelledby="heading503" data-bs-parent="#accordion500">
                    <div class="accordion-body">
                      Considering the vicissitude of life, students are prepared are prepared for the future and they encouraged adaptability through various activities like role play, skits etc.
                    </div>
                  </div>
                </div>
				
				<div class="accordion-item">
                  <h2 class="accordion-header" id="heading503">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse504" aria-expanded="false" aria-controls="collapse503">
                      <strong>Cross Culture Environment</strong>
                    </button>
                  </h2>
                  <div id="collapse504" class="accordion-collapse collapse" aria-labelledby="heading503" data-bs-parent="#accordion500">
                    <div class="accordion-body">
                      Taking into account the secular credential of our country India, we at GPS Saharsa, we provide and support cross culture environment. This culture is manifested by means of celebration of festivals of all the religion with great enthusiasm.
                    </div>
                  </div>
                </div>
				
				<div class="accordion-item">
                  <h2 class="accordion-header" id="heading503">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse505" aria-expanded="false" aria-controls="collapse503">
                      <strong>Wi-fi campus, e-classrooms, multimedia library and computer labs</strong>
                    </button>
                  </h2>
                  <div id="collapse505" class="accordion-collapse collapse" aria-labelledby="heading503" data-bs-parent="#accordion500">
                    <div class="accordion-body">
                      GPS Saharsa makes extensive use technology. The school campus is equipped with wi-fi facility. It has got a multimedia library with thousands of books on variety of topics and subjects. There are two different computer labs for junior section and senior section with hundreds of latest model computers with broadband connection.
                    </div>
                  </div>
                </div>
				
				
				<div class="accordion-item">
                  <h2 class="accordion-header" id="heading503">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse506" aria-expanded="false" aria-controls="collapse503">
                      <strong>Extended day facilities</strong>
                    </button>
                  </h2>
                  <div id="collapse506" class="accordion-collapse collapse" aria-labelledby="heading503" data-bs-parent="#accordion500">
                    <div class="accordion-body">
                      We cater to needs of slow learners as well as bright students. Extra classes are conducted for the improvement of the slow learners after school hours. Similarly bright ones are mentored for NTSE and various Olympiads.
                    </div>
                  </div>
                </div>
				
				
				<div class="accordion-item">
                  <h2 class="accordion-header" id="heading503">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse507" aria-expanded="false" aria-controls="collapse503">
                      <strong>Teacher development programmes</strong>
                    </button>
                  </h2>
                  <div id="collapse507" class="accordion-collapse collapse" aria-labelledby="heading503" data-bs-parent="#accordion500">
                    <div class="accordion-body">
                      Regular webinars and workshops are conducted by well qualified resource persons to abreast the teacher with the latest technological and pedagogical development in the field of teaching and learning.. CBSE also conducts workshops at regular interval to enhance the teaching skill the school.
                    </div>
                  </div>
                </div>
				
				
				<div class="accordion-item">
                  <h2 class="accordion-header" id="heading503">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse508" aria-expanded="false" aria-controls="collapse503">
                      <strong>Overseas exchange programmes</strong>
                    </button>
                  </h2>
                  <div id="collapse508" class="accordion-collapse collapse" aria-labelledby="heading503" data-bs-parent="#accordion500">
                    <div class="accordion-body">
                      GPS Saharsa encourages overseas exchange programme to provide exposure to global education system and to comprehend variegated culture of the different parts of the world.
                    </div>
                  </div>
                </div>
				
				<div class="accordion-item">
                  <h2 class="accordion-header" id="heading503">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse509" aria-expanded="false" aria-controls="collapse503">
                      <strong>Indoor and outdoor sporting activities</strong>
                    </button>
                  </h2>
                  <div id="collapse509" class="accordion-collapse collapse" aria-labelledby="heading503" data-bs-parent="#accordion500">
                    <div class="accordion-body">
                      Games and sports are integral part of school curriculum. For this GPS Saharsa is well equipped with indoor and outdoor sporting activities. It has got many well qualified sports teachers. The indoor facilities include Olympic size swimming pool, two basketball and badminton courts. For outdoor games there is a big lush green field.
                    </div>
                  </div>
                </div>
				
				
				
				
				
				
				
				
				
				
              </div>

</div>


            </div>
            
            
            
            
            
            
            
            
            
          </div>
        </div>
      </div>
    </section>

    
   
   
  </div>
  <!-- end main-content -->


<?php include_once('footer.php'); ?>

  <!-- Footer -->
  
  <a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
</div>
<!-- end wrapper -->

<!-- Footer Scripts -->
<!-- JS | Custom script for all pages -->
<script src="js/custom.js"></script>

</body>
</html>
