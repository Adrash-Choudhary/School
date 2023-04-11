<footer id="footer" class="footer layer-overlay overlay-dark-9" data-tm-bg-img="MYIMAGE/s6.jpg">
    <div class="footer-widget-area">
      <div class="container pt-90 pb-60">
        <div class="row">
          <div class="col-md-6 col-lg-6 col-xl-3">
            <div class="tm-widget-contact-info contact-info-style1 contact-icon-theme-colored1">
              <div class="thumb">
                <a href="index.php"><img alt="Logo" src="MYIMAGE/footer-logo.png" width="300" height="auto"></a>
              </div>
            <div class="footer-about">
              <p><b>Gyansarovar Public School  is an English medium co-educational school and affiliated to the Central Board of Secondary Education, New Delhi. This is one of the schools run by the Gyansarovar Sewa Sansthan Society, a non-profit making society registered under the society's Registration Act of 1860.</b></p>
            </div>
            </div>
            <ul class="styled-icons icon-dark icon-theme-colored1 icon-rounded clearfix">
                
                

                
<?php if($res_ADMIN['face']=='') {} else { ?>
<li><a class="social-link" href="<?php echo $res_ADMIN['face']; ?>" ><i class="fab fa-facebook" style="color:white"></i></a></li>
<?php } ?>

<?php if($res_ADMIN['insta']=='') {} else { ?>
<li><a class="social-link" href="<?php echo $res_ADMIN['insta']; ?>" ><i class="fab fa-instagram" style="color:white"></i></a></li>
<?php } ?>                
                
                
              
            </ul>
          </div>
          <div class="col-md-6 col-lg-6 col-xl-3">
            <div class="widget">
              <h2 class="widget-title widget-title-line-bottom line-bottom-theme-colored1"><b>Upcoming Event</b></h2>
              <div class="latest-posts">
                  
<?php
$query_EVENT2="select * from event";  
$data_EVENT2 = mysqli_query($con, $query_EVENT2); 
while ($res_EVENT2 = mysqli_fetch_array($data_EVENT2)) {  ?>                   
                <article class="post clearfix pb-0 mb-20">
                  <a class="post-thumb" href="#"><img src="ADMIN/<?php echo $res_EVENT2['photo']; ?>" alt="<?php echo $res_EVENT2['name']; ?>"></a>
                  <div class="post-right">
                    <h5 class="post-title mt-0"><a href="#"><b><?php echo $res_EVENT2['name']; ?></b></a></h5>
                    <span class="post-date">
                      <time class="entry-date" datetime=""><?php
$eventdate=$res_EVENT2['date'];
$date2=date_create($eventdate);
echo date_format($date2,"d M Y");
?></time>
                    </span>
                  </div>
                </article>

<?php } ?>                
                 
                
              </div>
            </div>
          </div>
          
          
          
          <div class="col-md-6 col-lg-6 col-xl-3">
            <div class="widget widget_nav_menu">
              <h2 class="widget-title widget-title-line-bottom line-bottom-theme-colored1"><b>Important Link</b></h2>
              <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="Gyan-Sarovar-Public-School-Gaya.php">About Us</a></li>
                <li><a href="Contact.php">Contact</a></li>
                <li><a href="Blog.php">Blog</a></li>
                <li><a href="Quick-Facts.php">FAQ</a></li>
              </ul>
            </div>
          </div>
          
          
          
          
          
          
          
          
          
          
          <div class="col-md-6 col-lg-6 col-xl-3">
            <div class="widget">
              <h2 class="widget-title widget-title-line-bottom line-bottom-theme-colored1"><b>Opening Hours</b></h2>
              <div class="opening-hours border-dark">
                <ul>
                  <li class="clearfix"> <span>  Mon- Sat : 7:00AM - 9:00PM </span> 
                  </li>
                  
                  <li class="clearfix"> <span> Sunday : 8:00AM - 4:00PM </span></li>
                  
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="footer-bottom" style="background-color:#202C45; color:white">
        <div class="container">
          <div class="row pt-20 pb-20">
            <div class="col-sm-6">
              <div class="footer-paragraph">
                © 2023 GPS. All Rights Reserved.
              </div>
            </div>
            
            <div class="col-sm-6" style="text-align:right">
              <div class="footer-paragraph">
                Developed by <a href="http://sanitysoftwares.com/" target="_blank">Sanity Softwares</a>
              </div>
            </div>
            
          </div>
        </div>
      </div>
    </div>
  </footer>