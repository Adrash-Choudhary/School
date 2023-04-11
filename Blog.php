<?php $page='Blog';  ?>


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

 




<div id="wrapper" class="clearfix">
    
    
    <?php include_once('header.php'); ?>

  <!-- Start main-content -->
  <div class="main-content-area">

    <!-- Section: page title -->
    <section class="page-title layer-overlay overlay-dark-9 section-typo-light bg-img-center" data-tm-bg-img="images/bg/bg1.jpg">
      <div class="container pt-50 pb-50">
        <div class="section-content">
          <div class="row">
            <div class="col-md-12 text-center">
              <h2 class="title">Blog</h2>
              <nav class="breadcrumbs" role="navigation" aria-label="Breadcrumbs">
                <div class="breadcrumbs">
                  <span><a href="index.php" rel="home">Home</a></span>
                  <span><i class="fa fa-angle-right"></i></span>
                  <span><a href="Blog.php">Blog</a></span>
                </div>
              </nav>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section>
      <div class="container mt-30 mb-30 pt-30 pb-30">
        <div class="row">
          <div class="col-md-9 sm-pull-none">
            <div class="blog-posts">
                
                
<?php
$offset=$_REQUEST['f'];
$catid=$_REQUEST['c'];
$dates=$_REQUEST['d'];

if($catid=='0' and $dates=='0') { 
$query_BLOG="select * from blog ORDER BY id DESC LIMIT 10 OFFSET $offset"; 
}

if($catid!=='0' and $dates=='0') { 
$query_BLOG="select * from blog WHERE cat_id='$catid' ORDER BY id DESC LIMIT 10 OFFSET $offset"; 
    
}
if($catid=='0' and $dates!=='0') { 

$query_BLOG="select * from blog WHERE date='$dates' ORDER BY id DESC LIMIT 10 OFFSET $offset";
    
}

    
 
 


 
$data_BLOG = mysqli_query($con, $query_BLOG); 
while ($res_BLOG = mysqli_fetch_array($data_BLOG)) {  ?>                
<article class="post clearfix mb-30 border-1px">
<div class="row">
<div class="col">
<div class="entry-content p-10">
<h4 class="entry-title mb-0">
<a href="blog-single-right-sidebar.html"><?php echo $res_BLOG['title']; ?></a>
</h4>
<div class="entry-meta">
<span class="mb-10 text-gray-darkgray mr-10 font-size-13"><i class="far fa-calendar-alt mr-10 text-theme-colored1"></i> <?php echo $res_BLOG['date']; ?></span>
<span class="mb-10 text-gray-darkgray mr-10 font-size-13"><i class="far fa-comments mr-10 text-theme-colored1"></i> 214 Comments</span>
</div>
<p class="mt-10"><?php echo $res_BLOG['content']; ?></p>
<a href="Read-Blog.php?b=<?php echo $res_BLOG['id']; ?>" class="btn btn-plain-text-with-arrow">Read more</a>
<div class="clearfix"></div>
</div>
</div>
</div>
</article>
<?php } ?>              
              
              
              
              
<!----PAGINATION----> 


<div class="col-lg-12" style="margin-top:10px; padding:0px; text-align:right;">

<?php 	
$qry_last=mysqli_query($con,"select * from blog"); 
$count_last=mysqli_num_rows($qry_last);
?>

 


<?php if($offset>0) { ?>
<a href="Blog.php?f=<?php echo $offset-10; ?>&c=0&d=0" class="btn btn-primary" style="background-color:#202C45; border:2px solid #202C45"><i class="fa fa-chevron-left"></i> Previous</a>
<?php } else { ?>
<a class="btn btn-default"><i class="fa fa-chevron-left"></i> &nbsp; Previous</a>
<?php }  ?>

<?php if($count_last-9>$offset) { ?>
<a href="Blog.php?f=<?php echo $offset+10; ?>&c=0&d=0" class="btn btn-primary" style="background-color:#202C45; border:2px solid #202C45">Next &nbsp; <i class="fa fa-chevron-right"></i></a>
<?php } else { ?>
<a class="btn btn-default">Next &nbsp; <i class="fa fa-chevron-right"></i></a>
<?php } ?>

</div>


<!----PAGINATION---->              
              
              
      
              
              
              
              
              
              
              
              
              
              
              
            </div>
          </div>
          
          
          <div class="col-md-3">
           <div class="sidebar sidebar-right mt-sm-30">
              <!----<div class="widget">
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
              </div>---->
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
<li><a href='Blog.php?d=<?php echo $res_BLOG2['date']; ?>&c=0&f=<?php echo $_REQUEST['f']; ?>'><?php echo $res_BLOG2['date']; ?></a></li>
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
<li class="cat-item"><a href="Blog.php?c=<?php echo $res_CAT['id']; ?>&d=0&f=<?php echo $_REQUEST['f']; ?>"><?php echo $res_CAT['name']; ?></a> </li>
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

  <!-- Footer -->
  
  
  <?php include_once('footer.php'); ?>
  
  
  
  <a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
</div>
<!-- end wrapper -->

<!-- Footer Scripts -->
<!-- JS | Custom script for all pages -->
<script src="js/custom.js"></script>

</body>
</html>