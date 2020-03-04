<?php
include('config.php');
session_start();
   
include('includes/header.php');
?>
   <body class="index">
      <div class="totopshow">
         <a href="#" class="back-to-top"><img alt="Back to Top" src="assets/images/gototop0.png"/></a>
      </div>
      <!-- totopshow -->
      <header id="ttr_header">
         <div id="ttr_header_inner">
            <div class="ttr_header_logo"></div>
            <div class="ttr_header_element_alignment container"></div>
            <div class="ttr_headershape01">
               <div class="html_content">
                  <?php
                     if(!isset($_SESSION['user_id'])){
                        echo '<a href="login.php" class="tt_link authLink">Login</a>';
                     } else {
                        echo '<a href="logout.php" class="tt_link authLink">Logout</a>';
                     }
                  ?>
               </div>
            </div>
         </div>
      </header>
      <nav id="ttr_menu" class="navbar-default navbar">
         <div id="ttr_menu_inner_in">
            <div id="navigationmenu">
               <div class="ttr_menu_element_alignment container"></div>
               <div class="ttr_menushape1">
                  <div class="html_content">
                     <p style="margin:0.36em 0.36em 0.36em 0em;width: 300px;"><a href="index.php" class="tt_link" target="_self"><span style="font-family:'Impact';font-weight:900;font-size:2em;color:rgba(56,55,56,1);">Movie</span><span style="font-family:'Impact';font-weight:900;font-size:2em;color:rgba(0,0,255,1);"> </span><span style="font-family:'Impact';font-weight:900;font-size:2em;color:rgba(231,76,61,1);">Store</span></a></p>
                  </div>
               </div>
               <div class="ttr_menu_logo"></div>
               <div class="navbar-header">
                  <button id="nav-expander" data-target=".navbar-collapse" data-toggle="collapse" class="navbar-toggle" type="button">
                  <span class="ttr_menu_toggle_button">
                  <span class="sr-only">
                  </span>
                  <span class="icon-bar">
                  </span>
                  <span class="icon-bar">
                  </span>
                  <span class="icon-bar">
                  </span>
                  </span>
                  <span class="ttr_menu_button_text">
                  Menu
                  </span>
                  </button>
               </div>
               <div class="menu-center collapse navbar-collapse">
                  <ul class="ttr_menu_items nav navbar-nav navbar-right">
                     <li class="ttr_menu_items_parent dropdown active">
                        <a href="index.php" class="ttr_menu_items_parent_link_active"><span class="menuchildicon"></span>Home</a>
                        <hr class ="horiz_separator"/>
                     </li>
                     <!-- main menu list closing -->
                     <li class="ttr_menu_items_parent dropdown">
                        <a href="about-us.php" class="ttr_menu_items_parent_link"><span class="menuchildicon"></span>About Us</a>
                        <hr class ="horiz_separator"/>
                     </li>
                     <!-- main menu list closing -->
                  </ul>
               </div>
            </div>
         </div>
      </nav>
      <div class="ttr_banner_slideshow"></div>
      <div class="ttr_slideshow">
         <div id="ttr_slideshow_inner">
            <ul>
               <li id="Slide0" class="ttr_slide" data-slideEffect="SlideTop">
                  <a href="https://www.youtube.com/watch?v=FEf412bSPLs"></a>
                  <div class="ttr_slideshow_last">
                     <div class="ttr_slideshow_element_alignment container" data-begintime="0" data-effect="SlideLeft" data-easing="linear" data-slide="None" data-duration="0"></div>
                     <div class="ttr_slideshowshape01" data-effect="None" data-begintime="0" data-duration="1" data-easing="linear" data-slide="None">
                        <div class="html_content">
                           <p style="margin:0em 0em 0em 0em;text-shadow:2px 2px black;text-align:Center;line-height: normal;"><span style="font-family:'Open Sans','Arial';font-weight:700;font-size:5.143em;color:rgba(255,255,255,1);">Are you looking for </span><br/><span style="font-family:'Open Sans','Arial';font-weight:700;font-size:5.143em;color:#fda50f;">HD MOVIES</span><span style="font-family:'Open Sans','Arial';font-weight:700;font-size:5.143em;color:rgba(255,255,255,1);"> ?</span></p>
                        </div>
                     </div>
                  </div>
               </li>
               <li id="Slide1" class="ttr_slide" data-slideEffect="SlideRight">
                  <a href="https://www.youtube.com/watch?v=jKCj3XuPG8M"></a>
                  <div class="ttr_slideshow_last">
                     <div class="ttr_slideshow_element_alignment container" data-begintime="0" data-effect="SlideLeft" data-easing="linear" data-slide="None" data-duration="0"></div>
                     <div class="ttr_slideshowshape11" data-effect="None" data-begintime="0" data-duration="1" data-easing="linear" data-slide="None">
                        <div class="html_content">
                           <p style="text-shadow:2px 2px black;text-align:Center;line-height: normal;"><span style="font-family:'Open Sans','Arial';font-weight:700;font-size:5.143em;color:rgba(255,255,255,1);">Hd movie stays on track in </span><span style="font-family:'Open Sans','Calibri';font-weight:700;font-size:5.143em;color:#fda50f;">MOVIE STORE</span><span style="font-family:'Open Sans','Calibri';font-weight:700;font-size:5.143em;color:rgba(255,255,255,1);">!</span></p>
                        </div>
                     </div>
                  </div>
               </li>
               <li id="Slide2" class="ttr_slide" data-slideEffect="SlideLeft">
                  <a href="https://www.youtube.com/watch?v=kGM4uYZzfu0"></a>
                  <div class="ttr_slideshow_last">
                     <div class="ttr_slideshow_element_alignment container" data-begintime="0" data-effect="SlideLeft" data-easing="linear" data-slide="None" data-duration="0"></div>
                     <div class="ttr_slideshowshape21" data-effect="None" data-begintime="0" data-duration="1" data-easing="linear" data-slide="None">
                        <div class="html_content">
                           <p style="text-shadow:2px 2px black;text-align:Center;line-height: normal;"><span style="font-family:'Open Sans','Calibri';      
                              font-weight:700;font-size:5.143em;color:rgba(255,255,255,1);">You are in the</span><span style="font-family:'Open Sans','Arial';font-weight:700;font-size:5.143em;color:#fda50f;"> right</span><span style="font-family:'Open Sans','Arial';font-weight:700;font-size:5.143em;color:rgba(255,255,255,1);"> place.</span></p>
                        </div>
                     </div>
                  </div>
         </div>
         </li>
         </ul>
      </div>
      <div class="ttr_slideshow_in">
         <div class="ttr_slideshow_last">
            <div id="nav"></div>
            <div class="ttr_slideshow_logo"></div>
         </div>
      </div>
      </div>
      <div class="ttr_banner_slideshow"></div>
      <div style="height:0px;width:0px;overflow:hidden;-webkit-margin-top-collapse: separate;"></div>
      <div id="ttr_page" class="container">
         <div id="ttr_content_and_sidebar_container">
            <div id="ttr_content">
               <div id="ttr_html_content_margin" class="container-fluid">
                  <div style="height:0px;width:0px;overflow:hidden;-webkit-margin-top-collapse: separate;"></div>
                  <div class="ttr_index_html_row0 row">
                     <div class="post_column col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="ttr_index_html_column00">
                           <div style="height:0px;width:0px;overflow:hidden;-webkit-margin-top-collapse: separate;"></div>
                           <div class="html_content">
                              <p style="margin:0.36em 0.36em 0.36em 0em;text-align:Center;"><span style="font-family:'Open Sans','Microsoft New Tai Lue';font-size:2.857em;color:rgba(231,76,61,1);">Purchase Movie With Us</span></p>
                              <p style="margin:0.71em 0.36em 0em 0em;text-align:Center;"><span style="font-family:'Open Sans','Microsoft New Tai Lue';font-size:1.429em;color:rgba(78,78,78,1);">Fusce felis ipsum feugiat sed blandit scelerisque non sapien.</span></p>
                           </div>
                           <div style="height:0px;width:0px;overflow:hidden;-webkit-margin-top-collapse: separate;"></div>
                           <div style="clear:both;"></div>
                        </div>
                     </div>
                     <div class=" visible-lg-block visible-sm-block visible-md-block visible-xs-block" style="clear: both;"></div>
                  </div>
                  <div class="ttr_index_html_row1 row">
                     <div class="post_column col-lg-6 col-md-12 col-sm-12 col-xs-12">
                        <div class="ttr_index_html_column10">
                           <div style="height:0px;width:0px;overflow:hidden;-webkit-margin-top-collapse: separate;"></div>
                           <div class="html_content">
                              <p><span class="ttr_image" style="float:none;display:block;text-align:center;overflow:hidden;margin:0em 0em 0em 0em;"><span><img class="ttr_uniform" style="max-height:667px;max-width:1000px;" src="assets/images/107.jpg" /></span></span></p>
                           </div>
                           <div style="height:0px;width:0px;overflow:hidden;-webkit-margin-top-collapse: separate;"></div>
                           <div style="clear:both;"></div>
                        </div>
                     </div>
                     <div class=" visible-sm-block visible-md-block visible-xs-block" style="clear: both;"></div>
                     <div class="post_column col-lg-6 col-md-12 col-sm-12 col-xs-12">
                        <div class="ttr_index_html_column11">
                           <div style="height:0px;width:0px;overflow:hidden;-webkit-margin-top-collapse: separate;"></div>
                           <div class="html_content">
                              <p style="margin:7em 0.36em 0.36em 0em;line-height:1.78571428571429;"><span style="font-family:'Open Sans','Arial';font-size:2.143em;color:rgba(78,78,78,1);"></span><span style="font-family:'Open Sans','Arial';font-size:2.143em;color:rgba(78,78,78,1);">We sell movies that match your taste!</span></p>
                              <p style="margin:2.14em 0.36em 0.36em 0em;line-height:1.78571428571429;"><span style="font-family:'Open Sans','Arial';font-size:1.071em;color:rgba(105,105,105,1);">Corder a publication to be madnd presented with the actual content not being ready. Think of a news blogat's filled with content hourly on tng live. However, reviewers ten be distracted by comprehaper or the internet. he are likel layout and its elements. Besides, rando uneptable risk inonments. </span><span style="font-family:'Open Sans','Arial';font-weight:700;font-size:1.071em;color:rgba(231,76,61,1);">Movie Store</span><span style="font-family:'Open Sans','Arial';font-weight:700;font-size:1.071em;"> </span><span style="font-family:'Open Sans','Arial';font-size:1.071em;color:rgba(105,105,105,1);">and quite likely since the sixteenth century.</span></p>
                              <p style="margin:2.14em 0.36em 0.36em 0em;line-height:1.78571428571429;"></p>
                           </div>
                           <div style="height:0px;width:0px;overflow:hidden;-webkit-margin-top-collapse: separate;"></div>
                           <div style="clear:both;"></div>
                        </div>
                     </div>
                     <div class=" visible-lg-block visible-sm-block visible-md-block visible-xs-block" style="clear: both;"></div>
                  </div>
                  <div class="ttr_index_html_row2 row">
                     <div class="post_column col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="ttr_index_html_column20">
                           <div style="height:0px;width:0px;overflow:hidden;-webkit-margin-top-collapse: separate;"></div>
                           <div class="html_content">
                              <p style="margin:0.36em 0.36em 0.36em 0em;text-align:Center;"><span style="font-family:'Open Sans','Microsoft New Tai Lue';font-size:2.857em;color:rgba(231,76,61,1);">Rent Movie With Us</span></p>
                              <p style="margin:0.71em 0.36em 0em 0em;text-align:Center;"><span style="font-family:'Open Sans','Microsoft New Tai Lue';font-size:1.429em;color:white;">Yes! you read it right. We can also lend you movies at a very cheap price.</span></p>
                           </div>
                           <div style="height:0px;width:0px;overflow:hidden;-webkit-margin-top-collapse: separate;"></div>
                           <div style="clear:both;"></div>
                           <div style="height:0px;width:0px;overflow:hidden;-webkit-margin-top-collapse: separate;"></div>
                           <p style="margin:1.5em 0.36em 0.36em 0em;text-align:Center;"><span style="font-family:'Open Sans','Arial';font-size:1.071em;color:white;">Corder a publication to be madnd presented with the actual content not being ready. Think of a news blogat's filled with content hourly on tng live. However, reviewers ten be distracted by comprehaper or the internet. he are likel layout and its elements. Besides, rando uneptable risk inonments. </span><span style="font-family:'Open Sans','Arial';font-weight:700;font-size:1.071em;color:rgba(231,76,61,1);">Movie Store</span><span style="font-family:'Open Sans','Arial';font-weight:700;font-size:1.071em;"> </span><span style="font-family:'Open Sans','Arial';font-size:1.071em;color:white">and quite likely since the sixteenth century.</span></p>
                           <p style="margin:.7em 0.36em 0.36em 0em;text-align:Center;">
                              <span style="font-family:'Open Sans','Arial';font-size:1.071em;color:white;">Corder a publication to be madnd presented with the actual content not being ready. Think of a news blogat's filled with content hourly on tng live. However, reviewers ten be distracted by comprehaper or the internet. he are likel layout and its elements. Besides, rando uneptable risk inonments. Corder a publication to be madnd presented with the actual content not being ready. Think of a news blogat's filled with content hourly on tng live. However, reviewers ten be distracted by comprehaper or the internet. he are likel layout and its elements. Besides, rando uneptable risk inonments.</span>
                           </p>
                           <p style="margin:.7em 0.36em 0.36em 0em;text-align:Center;">
                              <span style="font-family:'Open Sans','Arial';font-size:1.071em;color:white;">Corder a publication to be madnd presented with the actual content not being ready. Think of a news blogat's filled with content hourly on tng live. However, reviewers ten be distracted by comprehaper or the internet. he are likel layout and its elements. Besides, rando uneptable risk inonments. </span>
                           </p>
                        </div>
                     </div>
                     <div class=" visible-lg-block visible-sm-block visible-md-block visible-xs-block" style="clear: both;"></div>
                  </div>
                  <div class="ttr_index_html_row3 row">
                     <div class="post_column col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="ttr_index_html_column30">
                           <div style="height:0px;width:0px;overflow:hidden;-webkit-margin-top-collapse: separate;"></div>
                           <div class="html_content">
                              <p style="margin:0.36em 0.36em 0.36em 0em;text-align:Left;"><span style="font-family:'Open Sans','Microsoft New Tai Lue';font-size:2.857em;color:rgba(231,76,61,1);">Our Policy</span></p>
                           </div>
                           <div style="height:0px;width:0px;overflow:hidden;-webkit-margin-top-collapse: separate;"></div>
                           <div style="clear:both;"></div>
                        </div>
                     </div>
                     <div class=" visible-lg-block visible-sm-block visible-md-block visible-xs-block" style="clear: both;"></div>
                  </div>
                  <div class="ttr_index_html_row4 row">
                     <div class=" visible-sm-block visible-md-block visible-xs-block" style="clear: both;"></div>
                     <div class="post_column col-lg-7 col-md-12 col-sm-12 col-xs-12">
                        <div class="ttr_index_html_column41">
                           <div style="height:0px;width:0px;overflow:hidden;-webkit-margin-top-collapse: separate;"></div>
                           <div class="html_content">
                              <p style="margin:0.36em 0.36em 0.36em 0em;"><span style="font-family:'Open Sans','Arial';font-size:1.786em;color:rgba(78,78,78,1);">We Are Here To Help You?</span></p>
                              <p style="margin:1.43em 0.36em 0.36em 0em;line-height:1.78571428571429;"><span style="font-family:'Open Sans','Arial';font-size:1.429em;color:rgba(231,76,61,1);">Praesent vestibulum enean nonconsectetuer adipiscing elit.</span></p>
                              <p style="margin:0.71em 0.36em 0.36em 0em;line-height:1.78571428571429;"><span style="font-family:'Open Sans','Arial';font-size:1.071em;color:rgba(105,105,105,1);">Praesent vestibulum molestie lacus. Aenean nonummy hendrerimauris. Phasellus porta. Fusce suscipit varius mi. Lorem ipsum dolor sit am consectetuer adipiscing elit. Praesent vestibulum molestie lacus. Morbi nuor siet, consectetuer adipiscing elit. Mauris fermentum dictum magna. Sed laoreet al leo. </span></p>
                              <p style="margin:0.71em 0.36em 0.36em 0em;line-height:1.78571428571429;"><span style="font-family:'Open Sans','Arial';font-size:1.071em;color:rgba(105,105,105,1);">Ut tellus dolor, dapibus eget, elementum vel, cursus eleifend, elit. Aene odio, gravida at, cursus nec, luctus a, lorem. Maecenas tristique orci em. Duis ultricies pharetra magna onec accumsan malesuada orci.Ut tellus dolor, dapibus eget, elementum vel, cursus eleifenit. Aenean auctoi et urna.nc odio, gravida at, cursus nec, luctus a, lorem. Maecenas tristii em. Duis ultricies pharetra eget, eleum vel, cursus eleifend, elit. </span></p>
                              <p style="margin:0.71em 0.36em 0.36em 0em;line-height:1.78571428571429;"><span style="font-family:'Open Sans','Arial';font-size:1.071em;color:rgba(105,105,105,1);">Aenean auctoi et urna.nc odio, gravida at, cursus nec, luctus a, Maecenas trisque orci em. Duis ultricies pharetra magna onec accumsan malllus dolor, dapiet, elementum vel, cursus eleifend, elit. Aenean auctoi et urna.nc odio, grauctus a, lorem. Mastique orci em. Aenean auctoi et urna.nc odio, gravida at, cursus nec, luctus a, Maecenas trisque orci em. Duis ultricies pharetra magna onec accumsan malllus dolor, dapiet, elementum vel, cursus eleifend, elit. Aenean auctoi et urna.nc odio, grauctus a, lorem. Mastique orci em.</span></p>
                           </div>
                           <div style="clear:both;"></div>
                        </div>
                     </div>
                     <div class="post_column col-lg-5 col-md-12 col-sm-12 col-xs-12">
                        <div class="ttr_index_html_column40">
                           <div style="height:0px;width:0px;overflow:hidden;-webkit-margin-top-collapse: separate;"></div>
                           <div class="html_content">
                              <p style="text-align:Center;"><span class="ttr_image" style="float:Left;overflow:hidden;margin:0em 0em 0em 0em;"><span><img class="ttr_uniform" style="max-height:545px;max-width:400px;margin-top:3em;" src="assets/images/23.jpg" /></span></span></p>
                           </div>
                           <div style="height:0px;width:0px;overflow:hidden;-webkit-margin-top-collapse: separate;"></div>
                           <div style="clear:both;"></div>
                        </div>
                     </div>
                     <div style="height:0px;width:0px;overflow:hidden;-webkit-margin-top-collapse: separate;"></div>
                     <div style="clear:both;"></div>
                  </div>
               </div>
               <div class=" visible-lg-block visible-xs-block" style="clear: both;"></div>
            </div>
            <div style="height:0px;width:0px;overflow:hidden;-webkit-margin-top-collapse: separate;"></div>
         </div>
         <!--content_margin-->
      </div>
      <!--content-->
      <div style="clear:both"></div>
      </div><!--container-->
      <div style="height:0px;width:0px;overflow:hidden;"></div>
      <footer id="ttr_footer">
         <div class="ttr_footer_bottom_footer">
            <div class="ttr_footer_bottom_footer_inner">
               <div class="ttr_footer_element_alignment container"></div>
               <span id="ttr_footer_designed_by">
                  <div id="ttr_footer_designed_by_links"><span style="color: white";>@2020 Copyright: </span>
                     <a href="https://www.facebook.com/balitok" target="_self" >
                     Erwin Louis Cortes 
                     </a>
               </span>
               </div>
            </div>
         </div>
      </footer>
      <div style="height:0px;width:0px;overflow:hidden;-webkit-margin-bottom-collapse: separate;"></div>
      </div><!--page-->
   </body>
<?php
   include 'includes/footer.php';
?>