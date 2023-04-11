
<?php 
include_once('ADMIN/CONN/config.php'); 
$query_ADMIN="select * from admin";  
$data_ADMIN = mysqli_query($con, $query_ADMIN); 
$res_ADMIN = mysqli_fetch_array($data_ADMIN);
?>








<style>
#top-primary-nav .menuzord-menu > li > a, #top-primary-nav-clone .menuzord-menu > li > a {
    font-size: 1rem;
    padding-left: 20px !important;
    padding-right: 20px !important;
	font-size:15px;
}




@media all and (min-width: 480px) {
	
.deskContent {display:block;}
.phoneContent {display:none;}	
	

.position-relative{ height:75px !important; }
.col-sm-auto{margin-top:-20px;}
.align-self-center{padding:10px !important}	

.menuzord-menu{margin-left:-100px} 

	
}

@media all and (max-width: 479px) {

.deskContent {display:none;}
.phoneContent {display:block;}
	
.position-relative{ height:45px !important; }
.col-sm-auto{margin-top:-22px;}    
.align-self-center{padding:2px !important; margin-left:10px;}	
 
#rev_slider_1_1_wrapper{margin-top:-18px !important;}


	
}


</style>








<header id="header" class="header header-layout-type-header-2rows">





<table class="phoneContent" style="background-color:#202C45; color:white; width:100%; font-size:12px; margin-bottom:-2px;">
<tr>
<td>Tel: <a href="tel:<?php echo $res_ADMIN['mobile']; ?>" style="color:white"><?php echo $res_ADMIN['mobile']; ?></a></td>
<td>|</td>
<td><?php echo $res_ADMIN['pro_email']; ?></td>
<td>|</td>
<td>
    
<?php if($res_ADMIN['face']=='') {} else { ?>
<a class="social-link" href="<?php echo $res_ADMIN['face']; ?>" ><i class="fab fa-facebook" style="color:white"></i></a>
<?php } ?>

<?php if($res_ADMIN['insta']=='') {} else { ?>
&nbsp;
<a class="social-link" href="<?php echo $res_ADMIN['insta']; ?>" ><i class="fab fa-twitter" style="color:white"></i></a>
<?php } ?>
    


</td>
</tr>
</table>












    <div class="header-top deskContent">
      <div class="container">
        <div class="row">
          <div class="col-xl-auto header-top-left align-self-center text-center text-xl-start">
            <ul class="element contact-info">
              <li class="contact-phone"><i class="fa fa-phone font-icon sm-display-block"></i> <a href="tel:<?php echo $res_ADMIN['mobile']; ?>"><?php echo $res_ADMIN['mobile']; ?></a></li>
              <li class="contact-email"><i class="fa fa-envelope font-icon sm-display-block"></i> <?php echo $res_ADMIN['pro_email']; ?></li>
              <li class="contact-address"><i class="fa fa-map font-icon sm-display-block"></i> <?php echo $res_ADMIN['address']; ?></li>
            </ul>
          </div>
          <div class="col-xl-auto ms-xl-auto header-top-right align-self-center text-center text-xl-end">
            <div class="element pt-0 pb-0">
              <ul class="styled-icons icon-dark icon-theme-colored1 icon-circled clearfix">
                  
                  
<?php if($res_ADMIN['face']=='') {} else { ?>
<li><a class="social-link" href="<?php echo $res_ADMIN['face']; ?>" ><i class="fab fa-facebook"></i></a></li>
<?php } ?>

<?php if($res_ADMIN['insta']=='') {} else { ?>
<li><a class="social-link" href="<?php echo $res_ADMIN['insta']; ?>" ><i class="fab fa-instagram"></i></a></li>
<?php } ?>                  
                  
                  
                  
                  
                  
                  
                
                 
              </ul>
            </div>
            
          </div>
        </div>
      </div>
    </div>
	
    <div class="header-nav tm-enable-navbar-hide-on-scroll">
      <div class="header-nav-wrapper navbar-scrolltofixed">
        <div class="menuzord-container header-nav-container">
          <div class="container position-relative" style="max-width: 1370px !Important;">
            <div class="row header-nav-col-row">
			
			
              <div class="col-sm-auto align-self-center">
                <a class="menuzord-brand site-brand" href="index.php">
                  <img class="logo-default logo-1x" src="MYIMAGE/lo2w.png" alt="Gyan Sarovar Public School Saharsa Logo" width="500" height="350">
                  <img class="logo-default logo-2x retina" src="MYIMAGE/lo2w.png" alt="Logo" style="width:170px;">
                </a>
              </div>
			  
			  
              <div class="col-sm-auto ms-auto pr-0 align-self-center">
                
				
				
				
				
<nav id="top-primary-nav" class="menuzord theme-color1" data-effect="slide" data-animation="none" data-align="right">
<ul id="main-nav" class="menuzord-menu">

					<li class="menu-item <?php if($page=='home') { ?>active<?php }  ?>"><a href="index.php">Home</a></li>
                    
					<li class="menu-item <?php if($page=='About') { ?>active<?php }  ?>"><a href="javascript:void(0)">About</a>
                      <ul class="dropdown">
                        <li><a href="Gyan-Sarovar-Public-School-Gaya.php">Overview</a></li>
                        <li><a href="Mission.php">Our Mission</a></li>
                        <li><a href="Our-Vision.php">Our Vision</a></li>
                        <li><a href="Chairman-Message.php">Message From Chairman</a></li>
                        <li><a href="Principle-Message.php">Message From Principle</a></li>
                        <li><a href="Quick-Facts.php">Quick Facts</a></li>				
                      </ul>
                    </li>
                    
                    
<li class="menu-item <?php if($page=='Admission') { ?>active<?php }  ?>"><a href="Procedure.php">Admission</a></li>
					
					<!---<li class="menu-item"><a href="javascript:void(0)">Admission</a>
                      <ul class="dropdown">
                        <li><a href="Procedure.php">Procedure</a></li>
                        <li><a href="#">Fee Structure</a></li>
                        <li><a href="#">Pay Fee Online</a></li>
                        <li><a href="#">Online Registration Form</a></li>
                        <li><a href="#">FAQS</a></li>
                        <li><a href="#">Notice</a></li>
                        <li><a href="#">View Scanned T.C.</a></li>		
                      </ul>
                    </li>--->
					
					
					<li class="menu-item <?php if($page=='campus') { ?>active<?php }  ?>"><a href="javascript:void(0)">Infrastructure</a>
                      <ul class="dropdown">
                        <li><a href="Campus-Overview.php">Campus Overview</a></li>
                        <li><a href="Multipurpose.php">Multipurpose Hall</a></li>
                        <li><a href="Classrooms.php">Classrooms</a></li>
                        <li><a href="Library.php">Library</a></li>
                        <li><a href="IT.php">Information Technology</a></li>
                      </ul>
                    </li>
					
				
		<li class="menu-item <?php if($page=='Facilities') { ?>active<?php }  ?>"><a href="Facilities.php">Facilities</a></li>		
					
				
				<li class="menu-item"><a href="javascript:void(0)">Sports</a>
                      <ul class="dropdown">
                        <li><a href="Sports-Curriculum.php">Curriculum</a></li>
                        <li><a href="Wide-Range-Sports.php">Wide Range of Sports</a></li>
                        <li><a href="Sports-Facilities.php">Facilities</a></li>
                      </ul>
                    </li>


<li class="menu-item <?php if($page=='Blog') { ?>active<?php }  ?>"><a href="Blog.php?f=0&c=0&d=0">Blog</a></li>
					
<!---<li class="menu-item <?php if($page=='Swimming-Pool') { ?>active<?php }  ?>"><a href="Swimming-Pool.php">Swimming Pool</a></li>--->
					
<li class="menu-item <?php if($page=='Contact') { ?>active<?php }  ?>"><a href="Contact.php">Contact</a></li>

</ul>                   
</nav>
</div>
              				
				
				
				
				
				
				
				
				
				
				
				
				
				
				</div>
            <div class="row d-block d-xl-none">
               <div class="col-12">
                <nav id="top-primary-nav-clone" class="menuzord d-block d-xl-none default menuzord-color-default menuzord-border-boxed menuzord-responsive" data-effect="slide" data-animation="none" data-align="right">
                 <ul id="main-nav-clone" class="menuzord-menu menuzord-right menuzord-indented scrollable">
                 </ul>
                </nav>
               </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>