<?php $page='Blog'; ?>

<!DOCTYPE html>
<html dir="ltr" lang="en">
<head>

<!-- Meta Tags -->
<meta name="viewport" content="width=device-width,initial-scale=1.0"/>
<meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
<meta name="description" content="StudyPress | Education & Courses HTML Template" />
<meta name="keywords" content="academy, course, education, education html theme, elearning, learning," />
<meta name="author" content="ThemeMascot"/>

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

<!-- <link href="css/style.css" rel="stylesheet" type="text/css"> -->


<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
</head>
<body class="tm-container-1300px has-side-panel side-panel-right">
<div class="side-panel-body-overlay"></div>
<div id="side-panel-container" class="dark" data-tm-bg-img="images/side-push-bg.jpg">
  <div class="side-panel-wrap">
    <div id="side-panel-trigger-close" class="side-panel-trigger"><a href="#"><i class="fa fa-times side-panel-trigger-icon"></i></a></div>
    <img class="logo mb-50" src="images/logo-wide.png" alt="Logo">
    <p>Our motive is to help the poor, helpless and orphan children all over the world.</p>
    <div class="widget">
      <h4 class="widget-title widget-title-line-bottom line-bottom-theme-colored1">Latest News</h4>
      <div class="latest-posts">
        <article class="post clearfix pb-0 mb-10">
          <a class="post-thumb" href="news-details.html"><img src="images/blog/square1.jpg" alt="images"></a>
          <div class="post-right">
            <h5 class="post-title mt-0"><a href="news-details.html">Sustainable Construction</a></h5>
            <p>Lorem ipsum dolor...</p>
          </div>
        </article>
        <article class="post clearfix pb-0 mb-10">
          <a class="post-thumb" href="news-details.html"><img src="images/blog/square2.jpg" alt="images"></a>
          <div class="post-right">
            <h5 class="post-title mt-0"><a href="news-details.html">Industrial Coatings</a></h5>
            <p>Lorem ipsum dolor...</p>
          </div>
        </article>
        <article class="post clearfix pb-0 mb-10">
          <a class="post-thumb" href="news-details.html"><img src="images/blog/square3.jpg" alt="images"></a>
          <div class="post-right">
            <h5 class="post-title mt-0"><a href="news-details.html">Storefront Installations</a></h5>
            <p>Lorem ipsum dolor...</p>
          </div>
        </article>
      </div>
    </div>

    <div class="widget">
      <h5 class="widget-title widget-title-line-bottom line-bottom-theme-colored1">Contact Info</h5>
      <div class="tm-widget-contact-info contact-info-style1 contact-icon-theme-colored1">
        <ul>
          <li class="contact-name">
            <div class="icon"><i class="flaticon-contact-037-address"></i></div>
            <div class="text">John Doe</div>
          </li>
          <li class="contact-phone">
            <div class="icon"><i class="flaticon-contact-042-phone-1"></i></div>
            <div class="text"><a href="tel:+510-455-6735">+510-455-6735</a></div>
          </li>
          <li class="contact-email">
            <div class="icon"><i class="flaticon-contact-043-email-1"></i></div>
            <div class="text"><a href="mailto:info@yourdomain.com">info@yourdomain.com</a></div>
          </li>
          <li class="contact-address">
            <div class="icon"><i class="flaticon-contact-047-location"></i></div>
            <div class="text">3982 Browning Lane Carolyns Circle, California</div>
          </li>
        </ul>
      </div>
    </div>
  </div>
</div>
<div id="wrapper" class="clearfix">
  <!-- Header -->
  
  
  <?php include_once('header.php'); ?>

  <!-- Start main-content -->
  <div class="main-content-area">

    <!-- Section: page title -->
    <section class="page-title layer-overlay overlay-dark-9 section-typo-light bg-img-center" data-tm-bg-img="images/bg/bg1.jpg">
      <div class="container pt-50 pb-50">
        <div class="section-content">
          <div class="row">
            <div class="col-md-12 text-center">
              <h2 class="title">
                  
<?php
$blogid=$_REQUEST['b'];
$query_BLOGx="select * from blog WHERE id='$blogid'";  
$data_BLOGX = mysqli_query($con, $query_BLOGx); 
$res_BLOGX = mysqli_fetch_array($data_BLOGX); 
echo $res_BLOGX['title'];
?>
                  
                  </h2>
              <nav class="breadcrumbs" role="navigation" aria-label="Breadcrumbs">
                <div class="breadcrumbs">
                  <span><a href="index.php" rel="home">Home</a></span>
                  <span><i class="fa fa-angle-right"></i></span>
                  <span><a href="#">Blog</a></span>
                </div>
              </nav>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Section: Blog -->
    <section>
      <div class="container mt-30 mb-30 pt-30 pb-30">
        <div class="row">
          <div class="col-lg-9 order-lg-2">
            <div class="blog-posts single-post">
              <article class="post clearfix mb-0">
                <div class="entry-header mb-30">
                  
                  <h2><?php echo $res_BLOGX['title']; ?></h2>
                  <div class="entry-meta mt-0">
                    <span class="mb-10 text-gray-darkgray mr-10 font-size-13"><i class="far fa-calendar-alt mr-10 text-theme-colored1"></i> <?php echo $res_BLOGX['date']; ?></span>
                    <!---<span class="mb-10 text-gray-darkgray mr-10 font-size-13"><i class="far fa-comments mr-10 text-theme-colored1"></i> 214 Comments</span>--->
                  </div>
                </div>
                <div class="entry-content">
                  <p><?php echo $res_BLOGX['content']; ?></p>

                  
                </div>
              </article>


<!----
              <div class="comment-box mt-30">
                <h3>Leave a Comment</h3>
                <form role="form" id="comment-form">
                <div class="row">
                  <div class="col-6 pt-0 pb-0">
                    <div class="mb-3">
                      <input type="text" class="form-control" required name="contact_name" id="contact_name" placeholder="Enter Name">
                    </div>
                    <div class="mb-3">
                      <input type="text" required class="form-control" name="contact_email2" id="contact_email2" placeholder="Enter Email">
                    </div>
                    <div class="mb-3">
                      <input type="text" placeholder="Enter Website" required class="form-control" name="subject">
                    </div>
                  </div>
                  <div class="col-6">
                    <div class="mb-3">
                      <textarea class="form-control" required name="contact_message2" id="contact_message2"  placeholder="Enter Message" rows="7"></textarea>
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="mb-3">
                      <button type="submit" class="btn btn-theme-colored1 btn-round m-0" data-loading-text="Please wait...">Submit</button>
                    </div>
                  </div>
                </div>
                </form>
              </div>
              --->
              
              
              
              
            </div>
          </div>
          
          
          
          
          <div class="col-md-3">
           <div class="sidebar sidebar-right mt-sm-30">
              <!---<div class="widget">
                <h5 class="widget-title">Search box</h5>
                <div class="search-form">
                  <form>
                    <div class="input-group">
                      <input type="text" placeholder="Click to Search" class="form-control search-input">
                      <span class="input-group-btn">
                      <button type="submit" class="btn search-button"><i class="fa fa-search"></i></button>
                      </span>
                    </div>
                  </form>
                </div>
              </div>--->
              <div class="widget">
                <h4 class="widget-title widget-title-line-bottom line-bottom-theme-colored1">Recent Posts</h4>
                <div class="latest-posts">
                    

<?php
$query_BLOG1="select * from blog ORDER BY id DESC LIMIT 5";  
$data_BLOG1 = mysqli_query($con, $query_BLOG1); 
while ($res_BLOG1 = mysqli_fetch_array($data_BLOG1)) {  ?>                    

<article class="post clearfix pb-0 mb-20">
<div class="post-right">
<h5 class="post-title mt-0"><a href="Read-Blog.php?b=<?php echo $res_BLOG1['id']; ?>"><?php echo $res_BLOG1['title']; ?></a></h5>
<span class="post-date">
<time class="entry-date" datetime="2021-05-15T06:10:26+00:00">
<?php echo $res_BLOG1['date']; ?>    
</time>
</span>
</div>
</article>
<?php } ?>                  
                  
                  
                </div>
              </div>

              <div class="widget widget_archive">
                <h4 class="widget-title widget-title-line-bottom line-bottom-theme-colored1">Archives</h4>
                <ul>
<?php
$query_BLOG2="select * from blog ORDER BY id DESC LIMIT 5";  
$data_BLOG2 = mysqli_query($con, $query_BLOG2); 
while ($res_BLOG2 = mysqli_fetch_array($data_BLOG2)) {  ?>                      
<li><a href='Blog.php?d=<?php echo $res_BLOG2['date']; ?>&c=0&f=0'><?php echo $res_BLOG2['date']; ?></a></li>
<?php } ?>                  
                  
                </ul>
              </div>
              
              
               
              
              
              <div class="widget widget_categories">
                <h4 class="widget-title widget-title-line-bottom line-bottom-theme-colored1">Categories</h4>
                <ul>

<?php
$query_CAT="select * from blog_cat";  
$data_CAT = mysqli_query($con, $query_CAT); 
while ($res_CAT = mysqli_fetch_array($data_CAT)) {  ?>                     
<li class="cat-item"><a href="Blog.php?c=<?php echo $res_CAT['id']; ?>&d=0&f=0"><?php echo $res_CAT['name']; ?></a> </li>
<?php } ?>                  
                  
                </ul>
              </div>
               
               
              
            </div>
          </div>
          
          
          
        </div>
      </div>
    </section>
  </div>
  <!-- end main-content -->

  <?php include_once('footer.php'); ?>
  
  
  <a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
</div>
<!-- end wrapper -->

<!-- Footer Scripts -->
<!-- JS | Custom script for all pages -->
<script src="js/custom.js"></script>

</body>
</html>