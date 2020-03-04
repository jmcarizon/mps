<?php
include('config.php');
session_start();
 
if (isset($_POST['login'])) {
 
    $username = $_POST['username'];
    $password = $_POST['password'];
 
    $query = $connection->prepare("SELECT * FROM users WHERE USERNAME=:username");
    $query->bindParam("username", $username, PDO::PARAM_STR);
    $query->execute();
 
    $result = $query->fetch(PDO::FETCH_ASSOC);
 
    if (!$result) {
        echo '<p class="error">Username password combination is wrong!</p>';
    } else {
        if (password_verify($password, $result['password'])) {
            $_SESSION['user_id'] = $result['id'];
            $_SESSION['username'] = $result['username'];
            echo '<p class="success">Congratulations, you are logged in!</p>';

            header('Location: index.php');
        } else {
            echo '<p class="error">Username password combination is wrong!</p>';
        }
    }
}

if (!isset($_SESSION['user_id'])) {
    include_once("login.php");
} else {
    header('Location: index.php');
    exit;
}

include('includes/header.php');
?>
   <body class="login">
      <div class="totopshow">
         <a href="#" class="back-to-top"><img alt="Back to Top" src="assets/images/gototop0.png"/></a>
      </div>
      <!-- totopshow -->
      <header id="ttr_header">
         <div id="ttr_header_inner">
         <div class="ttr_header_logo"></div>
         <div class="ttr_header_element_alignment container"></div>
         <div class="ttr_headershape01"></div>
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
            </div>
         </div>
      </nav>
      <div style="height:0px;width:0px;overflow:hidden;-webkit-margin-top-collapse: separate;"></div>
      <div id="ttr_page" class="container">
         <div id="ttr_content_and_sidebar_container">
            <div id="ttr_content">
               <div id="ttr_html_content_margin" class="container-fluid">
                  <div style="height:0px;width:0px;overflow:hidden;-webkit-margin-top-collapse: separate;"></div>
                  <div class="ttr_contact_html_row0 row">
                     <div class="post_column col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="ttr_contact_html_column00">
                           <div style="height:0px;width:0px;overflow:hidden;-webkit-margin-top-collapse: separate;"></div>
                           <div class="html_content">
                              <p style="margin:1em 0.36em 0.36em 0em;text-align:Center;"><span style="font-family:'Open Sans','Microsoft New Tai Lue';font-size:2.857em;color:rgba(231,76,61,1);">Login</span></p>
                           </div>
                           <div style="height:0px;width:0px;overflow:hidden;-webkit-margin-top-collapse: separate;"></div>
                           <div style="clear:both;"></div>
                        </div>
                     </div>
                     <div class=" visible-lg-block visible-sm-block visible-md-block visible-xs-block" style="clear: both;"></div>
                  </div>
                  <div class="ttr_contact_html_row1 row">
                     <div class="post_column col-lg-4 col-md-12 col-sm-12 col-xs-12"></div>
                     <div class=" visible-sm-block visible-md-block visible-xs-block" style="clear: both;"></div>
                     <div class="post_column col-lg-4 col-md-12 col-sm-12 col-xs-12">
                        <div class="ttr_contact_html_column11">
                           <div style="height:0px;width:0px;overflow:hidden;-webkit-margin-top-collapse: separate;"></div>
                           <div class="html_content">
                              <p style="text-align:Center;">
                              <div class="contactformdiv" style="margin:0px 0px 0px 0px;">
                                 <form id="ContactForm0" class="form-horizontal" role="form" method="post" action="" style="margin: 0 auto;">
                                    <div class="form-group">
                                       <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                          <label class="col-lg-12 col-md-12 col-sm-12 col-xs-12 control-label required">Username</label>
                                          <input type="text" class="form-control required" data-vali="username" name="username" />
                                       </div>
                                    </div>
                                    <div class="form-group">
                                       <label class="col-lg-12 col-md-12 col-sm-12 col-xs-12 control-label required">Password</label>
                                       <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                          <input type="password" class="form-control required" data-vali="password" name="password" />
                                       </div>
                                    </div>
                                    <div class="form-group">
                                       <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 control-label">
                                          <input type="submit" class="pull-left btn btn-md btn-default" id="submitform" name="login" value="Submit" />
                                       </div>
                                    </div>
                                    <div style="clear: both;"></div>
                                    <div class="success"></div>
                                    <div class="req_field"></div>
                                    <div style="clear: both;"></div>
                                 </form>
                                 <div style="clear: both;"></div>
                              </div>
                              </p>
                              <br />
                           </div>
                           <div style="height:0px;width:0px;overflow:hidden;-webkit-margin-top-collapse: separate;"></div>
                           <div style="clear:both;"></div>
                        </div>
                     </div>
                     <div class="post_column col-lg-4 col-md-12 col-sm-12 col-xs-12"></div>
                     <div class=" visible-lg-block visible-sm-block visible-md-block visible-xs-block" style="clear: both;"></div>
                  </div>
                  <div style="height:0px;width:0px;overflow:hidden;-webkit-margin-top-collapse: separate;"></div>
               </div>
               <!--content_margin-->
            </div>
            <!--content-->
            <div style="clear:both"></div>
         </div>
         <!--container-->
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
      </div>
      <!--page-->
   </body>
<?php
   include('includes/footer.php');
?>