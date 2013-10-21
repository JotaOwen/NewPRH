<!DOCTYPE html>
<html lang="en">
   <head>
       <meta charset="utf-8">
       <title>Tables - Photon Admin Panel Theme</title>
               <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
        <link rel="shortcut icon" href="favicon.ico" />
        <link rel="apple-touch-icon" href="iosicon.png" />
<!--    DEVELOPMENT LESS -->
<!--        <link rel="stylesheet/less" href="css/photon.less" media="all" />
        <link rel="stylesheet/less" href="css/photon-responsive.less" media="all" />-->
<!--    PRODUCTION CSS -->
        <link rel="stylesheet" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/css_compiled/photon-min.css" media="all" />
        <link rel="stylesheet" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/css_compiled/photon-min-part2.css" media="all" />
        <link rel="stylesheet" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/css_compiled/photon-responsive-min.css" media="all" />

<!--[if IE]>
        <link rel="stylesheet" type="text/css" href="css/css_compiled/ie-only-min.css" />
<![endif]-->

<!--[if lt IE 9]>
        <link rel="stylesheet" type="text/css" href="css/css_compiled/ie8-only-min.css" />
        <script type="text/javascript" src="js/plugins/excanvas.js"></script>
        <script type="text/javascript" src="js/plugins/html5shiv.js"></script>
        <script type="text/javascript" src="js/plugins/respond.min.js"></script>
        <script type="text/javascript" src="js/plugins/fixFontIcons.js"></script>
<![endif]-->
        <?php include dirname(__FILE__).'/../../library/common/javascript.php'; ?>       

       
   </head>





  <body class="body-inner">
      <?php include dirname(__FILE__).'/../../library/common/main_menu.php'; ?>
      <?php //include dirname(__FILE__).'/../../library/common/user_menu.php'; ?>
       
    <div class="main-content retracted" style="left:40px;">
      <nav class="panel-header" style="background-color: #383838;"></nav>
      <div class="nav-fixed-topright" style="visibility: hidden">
          <ul class="nav nav-user-menu">
              <li class="user-sub-menu-container">
                  <a href="javascript:;">
                      <i class="user-icon"></i><span class="nav-user-selection">Company Name</span><i class="icon-menu-arrow"></i>
                  </a>
                              <ul class="nav user-sub-menu">
                                      <li>
                          <a href="javascript:;">My Profile</a>
                      </li>
                                      <li>
                          <a href="javascript:;">Settings</a>
                      </li>
                                      <li>
                          <a href="javascript:;">Messages</a>
                      </li>
                                      <li>
                          <a href="javascript:;">Help</a>
                      </li>
                                  </ul>
                          </li>
              <li>
                  <a href="javascript:;">
                      <i class="icon-photon mail"></i>
                  </a>
              </li>
              <li>
                  <a href="javascript:;">
                      <i class="icon-photon comment_alt2_stroke"></i>
                      <div class="notification-count">12</div>
                  </a>
              </li>
          </ul>
      </div>

      <script>
          $(function(){
              setTimeout(function(){
                  $('.nav-fixed-topright').removeAttr('style');
              }, 300);
              
              $(window).scroll(function(){
                  if($('.breadcrumb-container').length){
                      var scrollState = $(window).scrollTop();
                      if (scrollState > 0) $('.nav-fixed-topright').addClass('nav-released');
                      else $('.nav-fixed-topright').removeClass('nav-released')
                  }
              });
              
              $('.user-sub-menu-container').on('click', function(){
                  $(this).toggleClass('active-user-menu');
              });
          });
      </script>

      <header>
          <i class="icon-big-notepad"></i>
          <h2><small>Index</small></h2>
          <h3><small>Testing</small></h3>
      </header>

      <?php echo $content;?>
  
      
    </div>
  </body>
</html>