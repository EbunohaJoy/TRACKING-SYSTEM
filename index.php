<?php require_once 'components/head.php' ?>

<body>
    <!-- =-=-=-=-=-=-= PRELOADER =-=-=-=-=-=-= -->
    <div class="preloader"><span class="preloader-gif"></span></div>

    <!-- =-=-=-=-=-=-= Color Switcher =-=-=-=-=-=-= -->
    <div class="color-switcher" id="choose_color"> <a href="#." class="picker_close"><i class="fa fa-gear"></i></a>
        <h5>STYLE SWITCHER</h5>
        <div class="theme-colours">
            <p> Choose Colour style </p>
            <ul>
                <li>
                    <a href="#." class="defualt" id="defualt"></a>
                </li>
                <li>
                    <a href="#." class="red" id="red"></a>
                </li>
                <li>
                    <a href="#." class="green" id="green"></a>
                </li>
                <li>
                    <a href="#." class="orange" id="orange"></a>
                </li>
                <li>
                    <a href="#." class="purple" id="purple"></a>
                </li>
                <li>
                    <a href="#." class="yellow" id="yellow"></a>
                </li>
                
            </ul>
        </div>
        <div class="clr"> </div>
    </div>
    <!-- =-=-=-=-=-=-= HEADER =-=-=-=-=-=-= -->
    <section class="top-bar">
        <div class="container">
            <div class="left-text nav-left pull-left">
                <p><span>Opening Hours :</span> Monday to Saturday - 8am to 5pm</p>
            </div>
            <!-- /.left-text -->
            <ul class="nav-right pull-right list-unstyled">
             <li> <a href="login.html"><i class="fa fa-lock"></i> Login </a></li>
             <li> <a href="sign-up.html"><i class="fa fa-user"></i> Sign Up </a></li>
             <li class="dropdown nav-profile"> 
                <a class="dropdown-toggle" data-hover="dropdown" data-toggle="dropdown" data-animations="fadeInUp">
                 <img class="img-circle resize" alt="" src="images/avatar.jpg">
                 <span class="hidden-xs small-padding"> <span>Umair</span> <i class="fa fa-caret-down"></i></span>
                </a>
                <ul class="dropdown-menu with-arrow pull-right">
                  <li> <a href="profile.html"> <i class="fa fa-user"></i> <span>My Profile</span> </a> </li>
                  <li> <a href="history.html"> <i class="fa fa-check"></i> <span>Tracking History</span> </a> </li>
                  <li> <a href="javascript:void(0)"> <i class="fa fa-lock"></i> <span>Payment Setting</span> </a> </li>
                  <li> <a href="javascript:void(0)"> <i class="fa fa-sign-out"></i> <span>Log Out</span> </a> </li>
                </ul>
            </li>
        </ul>
        </div>
    </section>
    <header class="header-area">

        <!-- Logo Bar -->
        <div class="logo-bar">
            <div class="container clearfix">
                <!-- Logo -->
                <div class="logo">
                    <a href="index.html"><img src="images/logo.png" alt=""></a>
                </div>

                <!--Info Outer-->
                <div class="information-content">
                    <!--Info Box-->
                    <div class="info-box  hidden-sm">
                        <div class="icon"><span class="icon-envelope"></span></div>
                        <div class="text">EMAIL</div>
                        <a href="mailt:contact@scriptsbundle.com">contact@scriptsbundle.com</a> </div>
                    <!--Info Box-->
                    <div class="info-box">
                        <div class="icon"><span class="icon-phone"></span></div>
                        <div class="text">Call Now</div>
                        <a class="location" href="#">(92) 123-456-78</a> </div>
                    <div class="info-box">
                        <div class="icon"><span class="icon-map-pin"></span></div>
                        <div class="text">Find Us</div>
                        <a class="location" href="#">Model Town, Pakistan </a> </div>
                </div>
            </div>
        </div>
        <!-- Header Top End -->

        <!-- Menu Section -->
        <div class="navigation-2">
            <!-- navigation-start -->
            <nav class="navbar navbar-default ">
                <div class="container">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-navigation" aria-expanded="false">
                           <span class="sr-only">Toggle navigation</span>
                           <span class="icon-bar"></span>
                           <span class="icon-bar"></span>
                           <span class="icon-bar"></span>
         				</button>
                    </div>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="main-navigation">
                        <ul class="nav navbar-nav">
                            <li class="dropdown active"> <a class="dropdown-toggle " data-hover="dropdown" data-toggle="dropdown" data-animations="fadeInUp">Home <span class="fa fa-angle-down"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="index.html">Home </a> </li>
                                    <li><a href="index-2.html">Home Page 2</a> </li>
                                    <li><a href="index-3.html">Home Page 3 (Video Bg)</a> </li>
									<li><a href="index-5.html">Home Order Tracking</a> </li>
									<li><a href="index-4.html">Home Order Tracking 2</a> </li>									
									<li><a href="one-page.html">One Page </a> </li>
                                </ul>
                            </li>
                            <li class="dropdown"><a class="dropdown-toggle" data-hover="dropdown" data-toggle="dropdown" data-animations="fadeInUp">About Company <span class="fa fa-angle-down"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="about.html">About </a> </li>
                                    <li><a href="about-1.html">About 2</a> </li>
                                </ul>
                            </li>
                            <li class="dropdown "> <a class="dropdown-toggle" data-hover="dropdown" data-toggle="dropdown" data-animations="fadeInUp">Our Service <span class="fa fa-angle-down"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="services.html">Services</a> </li>
                                    <li><a href="services-2.html">Services 2</a> </li>
                                    <li><a href="services-3.html">Services 3</a> </li>
                                    <li><a href="services-4.html">Services 4 (Sticky Bar)</a> </li>
                                    <li><a href="services-details.html">Services Detail</a> </li>
                                </ul>
                            </li>
                            <li class="hidden-sm"><a href="gallery.html ">Gallery</a></li>
                            <li class="dropdown  hidden-sm"><a class="dropdown-toggle" data-hover="dropdown" data-toggle="dropdown" data-animations="fadeInUp">Blog <span class="fa fa-angle-down"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="blog.html">Grid View </a> </li>
                                    <li><a href="blog-1.html">Right Sidebar With 2 Column</a> </li>
                                    <li><a href="blog-2.html">Left Sidebar With 2 Column</a> </li>
                                    <li><a href="blog-3.html">Masonry Grid</a> </li>
                                    <li><a href="blog-detail.html">Post With Slider</a> </li>
                                    <li><a href="blog-detail-2.html">Post With Static Bg</a> </li>
                                    <li><a href="blog-detail-3.html">Post Full Width</a> </li>
                                </ul>
                            </li>
                            <li class="dropdown"> <a class="dropdown-toggle" data-hover="dropdown" data-toggle="dropdown" data-animations="fadeInUp">Pages <span class="fa fa-angle-down"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="404.html">Error Page</a> </li>
                                    <li><a href="team.html">Our Team </a> </li>
                                    <li><a href="icons.html">Icons</a> </li>
                                    <li><a href="flat-icons.html">Flat Icons</a> </li>
                                    <li><a href="gallery.html ">Gallery</a></li>
                                    <li><a href="login.html">Sign In</a></li>
                                    <li><a href="sign-up.html">Sign Up</a></li>
                                    <li><a href="profile.html">Profile</a></li>
                                </ul>
                            </li>
                            <li class="dropdown"> <a class="dropdown-toggle" data-hover="dropdown" data-toggle="dropdown" data-animations="fadeInUp">Cargo Tracking <span class="fa fa-angle-down"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="index-5.html">Tracking Landing Page</a> </li>
                                    <li><a href="index-4.html">Tracking Classic Page </a> </li>
                                    <li><a href="history.html">Tracking Order History</a> </li>
                                    <li><a href="online-booking.html">Cargo Booking</a> </li>
                                </ul>
                            </li>
                        </ul>
                        <a  href="online-booking.html"  class="btn btn-primary pull-right">Cargo Booking</a> </div>
                    <!-- /.navbar-collapse -->

                </div>
                <!-- /.container-end -->
            </nav>
        </div>
        <!-- /.navigation-end -->
        <!-- Menu  End -->
    </header>
    <!-- =-=-=-=-=-=-= HEADER END =-=-=-=-=-=-= -->

    <!-- =-=-=-=-=-=-= HOME SLIDER =-=-=-=-=-=-= -->
        <div class="rev_slider_wrapper">
          <div class="rev_slider" data-version="5.0">
            <ul>

			  <!-- SLIDE 1 -->
              <li data-index="rs-4" data-transition="slidingoverlayhorizontal" data-slotamount="default" data-easein="default" data-easeout="default" data-masterspeed="default" data-thumb="images/slider/thumb-1.jpg" data-rotate="0" data-saveperformance="off" data-title="Web Show" data-description="">
                <!-- MAIN IMAGE -->
                <img src="images/slider/1.jpg"  alt=""  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-bgparallax="6" data-no-retina>
                <!-- LAYERS -->

                <!-- LAYER NR. 1 -->
                <div class="tp-caption tp-resizeme text-white text-uppercase" 
                  id="rs-3-layer-1"

                  data-x="['left']"
                  data-hoffset="['30']"
                  data-y="['middle']"
                  data-voffset="['-125']"
                  data-fontsize="['26']"
                  data-lineheight="['64']"
                  data-width="none"
                  data-height="none"
                  data-whitespace="nowrap"
                  data-transform_idle="o:1;s:500"
                  data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
                  data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
                  data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                  data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                  data-start="1000" 
                  data-splitin="none" 
                  data-splitout="none" 
                  data-responsive_offset="on" 
                  style="z-index: 5; white-space: nowrap; font-weight:700;">Ground or Air
                </div>

                <!-- LAYER NR. 2 -->
                <div class="tp-caption tp-resizeme text-uppercase text-white font-merry" 
                  id="rs-3-layer-2"

                  data-x="['left']"
                  data-hoffset="['30']"
                  data-y="['middle']"
                  data-voffset="['-60']"
                   data-fontsize="['40']"
                  data-lineheight="['84']"
                  data-width="none"
                  data-height="none"
                  data-whitespace="nowrap"
                  data-transform_idle="o:1;s:500"
                  data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
                  data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
                  data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                  data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                  data-start="1000" 
                  data-splitin="none" 
                  data-splitout="none" 
                  data-responsive_offset="on" 
                  style="z-index: 5; white-space: nowrap; font-weight:600; "><span class="text-white">Providing Logistic Services </span>
                </div>
                
                 <!-- LAYER NR. 2 -->
                

                <!-- LAYER NR. 3 -->
                <div class="tp-caption tp-resizeme text-white" 
                  id="rs-3-layer-3"

                  data-x="['left']"
                  data-hoffset="['30']"
                  data-y="['middle']"
                  data-voffset="['20']"
                  data-fontsize="['18']"
                  data-lineheight="['34']"
                  data-width="none"
                  data-height="none"
                  data-whitespace="nowrap"
                  data-transform_idle="o:1;s:500"
                  data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
                  data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
                  data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                  data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                  data-start="1400" 
                  data-splitin="none" 
                  data-splitout="none" 
                  data-responsive_offset="on"
                  style="z-index: 5; white-space: nowrap; font-weight:300;">We provides always our best services for our clients and  always<br> try to achieve our client's trust and satisfaction.
                </div>

                <!-- LAYER NR. 4 -->
                <div class="tp-caption tp-resizeme" 
                  id="rs-3-layer-4"

                  data-x="['left']"
                  data-hoffset="['30']"
                  data-y="['middle']"
                  data-voffset="['100']"

                  data-width="none"
                  data-height="none"
                  data-whitespace="nowrap"
                  data-transform_idle="o:1;s:500"
                  data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
                  data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
                  data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                  data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                  data-start="1600" 
                  data-splitin="none" 
                  data-splitout="none" 
                  data-responsive_offset="on"
                  style="z-index: 5; white-space: nowrap; letter-spacing:1px;">
                  <a class="btn btn-colored btn-lg"  href="#">Contact Now</a>
                </div>
              </li>
            
              <!-- SLIDE 2 -->
              <li data-index="rs-1" data-transition="slidingoverlayhorizontal" data-slotamount="default" data-easein="default" data-easeout="default" data-masterspeed="default" data-thumb="images/slider/thumb-2.jpg" data-rotate="0" data-saveperformance="off" data-title="Web Show" data-description="">
                <!-- MAIN IMAGE -->
                <img src="images/slider/2.jpg"  alt=""  data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-bgparallax="6" data-no-retina>
                <!-- LAYERS -->

                <!-- LAYER NR. 1 -->
                <div class="tp-caption tp-resizeme text-uppercase text-white " 
                  id="rs-1-layer-1"

                  data-x="['right']"
                  data-hoffset="['30']"
                  data-y="['middle']"
                  data-voffset="['-125']"
                  data-fontsize="['26']"
                  data-lineheight="['64']"
                  data-width="none"
                  data-height="none"
                  data-whitespace="nowrap"
                  data-transform_idle="o:1;s:500"
                  data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
                  data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
                  data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                  data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                  data-start="1000" 
                  data-splitin="none" 
                  data-splitout="none" 
                  data-responsive_offset="on" 
                  style="z-index: 5; white-space: nowrap; font-weight:700;">We Provide Solutions
                </div>

                <!-- LAYER NR. 2 -->
                <div class="tp-caption tp-resizeme text-white font-merry  text-uppercase" 
                  id="rs-1-layer-2"

                  data-x="['right']"
                  data-hoffset="['30']"
                  data-y="['middle']"
                  data-voffset="['-60']"
                  data-fontsize="['40']"
                  data-lineheight="['84']"
                  data-width="none"
                  data-height="none"
                  data-whitespace="nowrap"
                  data-transform_idle="o:1;s:500"
                  data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
                  data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
                  data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                  data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                  data-start="1000" 
                  data-splitin="none" 
                  data-splitout="none" 
                  data-responsive_offset="on" 
                  style="z-index: 5; white-space: nowrap; font-weight:700;"> Logistic Services
                </div>

                <!-- LAYER NR. 3 -->
                <div class="tp-caption tp-resizeme text-right text-white" 
                  id="rs-1-layer-3"

                  data-x="['right']"
                  data-hoffset="['30']"
                  data-y="['middle']"
                  data-voffset="['30']"
                  data-fontsize="['18']"
                  data-lineheight="['34']"
                  data-width="none"
                  data-height="none"
                  data-whitespace="nowrap"
                  data-transform_idle="o:1;s:500"
                  data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
                  data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
                  data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                  data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                  data-start="1400" 
                  data-splitin="none" 
                  data-splitout="none" 
                  data-responsive_offset="on"
                  style="z-index: 5; white-space: nowrap; font-weight:400;">We provides always our best services for our clients and  always<br> try to achieve our client's trust and satisfaction.
                </div>

                <!-- LAYER NR. 4 -->
                <div class="tp-caption tp-resizeme" 
                  id="rs-1-layer-4"

                  data-x="['right']"
                  data-hoffset="['30']"
                  data-y="['middle']"
                  data-voffset="['100']"
                  data-width="none"
                  data-height="none"
                  data-whitespace="nowrap"
                  data-transform_idle="o:1;s:500"
                  data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
                  data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
                  data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                  data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                  data-start="1600" 
                  data-splitin="none" 
                  data-splitout="none" 
                  data-responsive_offset="on"
                  style="z-index: 5; white-space: nowrap; letter-spacing:1px;"><a class="btn btn-colored btn-lg" href="#">Request Quote</a> 
                </div>
              </li>

              <!-- SLIDE 3 -->
              <li data-index="rs-2" data-transition="slidingoverlayhorizontal" data-slotamount="default" data-easein="default" data-easeout="default" data-masterspeed="default" data-thumb="images/slider/thumb-3.jpg" data-rotate="0" data-saveperformance="off" data-title="Web Show" data-description="">
                <!-- MAIN IMAGE -->
                <img src="images/slider/3.jpg"  alt=""  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-bgparallax="6" data-no-retina>
                <!-- LAYERS -->

                <!-- LAYER NR. 2 -->
                <div class="tp-caption tp-resizeme text-center text-white" 
                  id="rs-2-layer-2"

                  data-x="['center']"
                  data-hoffset="['0']"
                  data-y="['middle']"
                  data-voffset="['-60']"
                  data-fontsize="['26']"
                  data-lineheight="['64']"
                  data-width="none"
                  data-height="none"
                  data-whitespace="nowrap"
                  data-transform_idle="o:1;s:500"
                  data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
                  data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
                  data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                  data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                  data-start="1000" 
                  data-splitin="none" 
                  data-splitout="none" 
                  data-responsive_offset="on"
                  style="z-index: 5; white-space: nowrap; font-weight:400;">- Providing Services Since 1970 -
                </div>

                <!-- LAYER NR. 3 -->
                <div class="tp-caption tp-resizeme text-uppercase text-white font-merry" 
                  id="rs-2-layer-3"

                  data-x="['center']"
                  data-hoffset="['0']"
                  data-y="['middle']"
                  data-voffset="['0']"
                  data-fontsize="['40']"
                  data-lineheight="['80']"
                  data-width="none"
                  data-height="none"
                  data-whitespace="nowrap"
                  data-transform_idle="o:1;s:500"
                  data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
                  data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
                  data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                  data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                  data-start="1000" 
                  data-splitin="none" 
                  data-splitout="none" 
                  data-responsive_offset="on"
                  style="z-index: 5; white-space: nowrap; font-weight:700;">We Provide Solutions
                </div>

                <!-- LAYER NR. 4 -->
                <div class="tp-caption tp-resizeme" 
                  id="rs-2-layer-4"

                  data-x="['center']"
                  data-hoffset="['0']"
                  data-y="['middle']"
                  data-voffset="['80']"
                  data-width="none"
                  data-height="none"
                  data-whitespace="nowrap"
                  data-transform_idle="o:1;s:500"
                  data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
                  data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
                  data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                  data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                  data-start="1400" 
                  data-splitin="none" 
                  data-splitout="none" 
                  data-responsive_offset="on"
                  style="z-index: 5; white-space: nowrap; letter-spacing:1px;"><a class="btn btn-colored  btn-lg" href="#">Contact Now</a>
                </div>
              </li>

              <!-- SLIDE 4 -->
              <li data-index="rs-3" data-transition="slidingoverlayhorizontal" data-slotamount="default" data-easein="default" data-easeout="default" data-masterspeed="default" data-thumb="images/slider/thumb-4.jpg" data-rotate="0" data-saveperformance="off" data-title="Web Show" data-description="">
                <!-- MAIN IMAGE -->
                <img src="images/slider/4.jpg"  alt=""  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-bgparallax="6" data-no-retina>
                <!-- LAYERS -->

                <!-- LAYER NR. 1 -->
                <div class="tp-caption tp-resizeme text-white text-uppercase" 
                  id="rs-3-layer-5"

                  data-x="['left']"
                  data-hoffset="['30']"
                  data-y="['middle']"
                  data-voffset="['-125']"
                  data-fontsize="['26']"
                  data-lineheight="['64']"
                  data-width="none"
                  data-height="none"
                  data-whitespace="nowrap"
                  data-transform_idle="o:1;s:500"
                  data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
                  data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
                  data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                  data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                  data-start="1000" 
                  data-splitin="none" 
                  data-splitout="none" 
                  data-responsive_offset="on" 
                  style="z-index: 5; white-space: nowrap; font-weight:700;">Ground Or Air
                </div>

                <!-- LAYER NR. 2 -->
                <div class="tp-caption tp-resizeme text-uppercase font-merry" 
                  id="rs-3-layer-8"

                  data-x="['left']"
                  data-hoffset="['30']"
                  data-y="['middle']"
                 data-voffset="['-60']"
                   data-fontsize="['40']"
                  data-lineheight="['84']"
                  data-width="none"
                  data-height="none"
                  data-whitespace="nowrap"
                  data-transform_idle="o:1;s:500"
                  data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
                  data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
                  data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                  data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                  data-start="1000" 
                  data-splitin="none" 
                  data-splitout="none" 
                  data-responsive_offset="on" 
                  style="z-index: 5; white-space: nowrap; font-weight:600; "><span class="text-white">Providing Logistics Services</span>
                </div>

                <!-- LAYER NR. 3 -->
                <div class="tp-caption tp-resizeme text-white" 
                  id="rs-3-layer-9"

                  data-x="['left']"
                  data-hoffset="['30']"
                  data-y="['middle']"
                  data-voffset="['20']"
                  data-fontsize="['18']"
                  data-lineheight="['34']"
                  data-width="none"
                  data-height="none"
                  data-whitespace="nowrap"
                  data-transform_idle="o:1;s:500"
                  data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
                  data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
                  data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                  data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                  data-start="1400" 
                  data-splitin="none" 
                  data-splitout="none" 
                  data-responsive_offset="on"
                  style="z-index: 5; white-space: nowrap; font-weight:300;">We provides always our best services for our clients and  always<br> try to achieve our client's trust and satisfaction.
                </div>

                <!-- LAYER NR. 4 -->
                <div class="tp-caption tp-resizeme" 
                  id="rs-3-layer-10"

                  data-x="['left']"
                  data-hoffset="['30']"
                  data-y="['middle']"
                  data-voffset="['100']"

                  data-width="none"
                  data-height="none"
                  data-whitespace="nowrap"
                  data-transform_idle="o:1;s:500"
                  data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
                  data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
                  data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                  data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                  data-start="1600" 
                  data-splitin="none" 
                  data-splitout="none" 
                  data-responsive_offset="on"
                  style="z-index: 5; white-space: nowrap; letter-spacing:1px;"><a class="btn btn-colored btn-lg" href="#">View Services</a>
                </div>
              </li>

            </ul>
          </div><!-- end .rev_slider -->
        </div>
    <!--======= HOME SLIDER END =========-->

    <!-- =-=-=-=-=-=-= Call To Action =-=-=-=-=-=-= -->
    <div class="parallex-small ">
        <div class="container">
            <div class="row custom-padding-20 ">
                <div class="col-md-8 col-sm-8">
                    <div class="parallex-text">
                        <h4>Not sure which solution fits you business needs?</h4>
                    </div>
                    <!-- end subsection-text -->
                </div>
                <!-- end col-md-8 -->

                <div class="col-md-4 col-sm-4">
                    <div class="parallex-button"> <a href="#quote" class="page-scroll btn btn-lg btn-clean">Get a quote <i class="fa fa-angle-double-right "></i></a> </div>
                    <!-- end parallex-button -->
                </div>
                <!-- end col-md-4 -->

            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </div>
    <!-- =-=-=-=-=-=-= Call To Action End =-=-=-=-=-=-= -->

    <!-- =-=-=-=-=-=-= Services =-=-=-=-=-=-= -->
    <section class="custom-padding white" id="about-section-3">
        <div class="container">
            <div class="main-boxes">
                <div class="row">
                    <div class="col-sm-12 col-md-4 col-xs-12">
                        <div class="services-grid-1">
                            <div class="service-image">
                                <a href="#"><img alt="" src="images/1.jpg"></a>
                            </div>
                            <div class="services-text">
                                <h4>Fast & Safe Delivery</h4>
                                <p>Fusce pretium nulla et purus malesuada feugiat sed vel mauris tincidunt vehicula lorem vel hendrerit justo praesent aliquam maximus imperdiet integer sagittis leo</p>
                            </div>
                            <div class="more-about"> <a class="btn btn-primary btn-lg" href="#">Read More <i class="fa fa-chevron-circle-right"></i></a> </div>
                        </div>
                        <!-- end services-grid-1 -->
                    </div>
                    <!-- end col-sm-4 -->

                    <div class="col-sm-12 col-md-4 col-xs-12">
                        <div class="services-grid-1">
                            <div class="service-image">
                                <a href="#"><img alt="" src="images/2.jpg"></a>
                            </div>
                            <div class="services-text">
                                <h4>Internation Air Freight</h4>
                                <p>Fusce pretium nulla et purus malesuada feugiat sed vel mauris tincidunt vehicula lorem vel hendrerit justo praesent aliquam maximus imperdiet integer sagittis leo</p>
                            </div>
                            <div class="more-about"> <a class="btn btn-primary btn-lg" href="#">Read More <i class="fa fa-chevron-circle-right"></i></a> </div>
                        </div>
                        <!-- end services-grid-1 -->
                    </div>
                    <!-- end col-sm-4 -->

                    <div class="col-sm-12 col-md-4 col-xs-12">
                        <div class="services-grid-1">
                            <div class="service-image">
                                <a href="#"><img alt="" src="images/3.jpg"></a>
                            </div>
                            <div class="services-text">
                                <h4>ground shipping</h4>
                                <p>Fusce pretium nulla et purus malesuada feugiat sed vel mauris tincidunt vehicula lorem vel hendrerit justo praesent aliquam maximus imperdiet integer sagittis leo</p>
                            </div>
                            <div class="more-about"> <a class="btn btn-primary btn-lg" href="#">Read More <i class="fa fa-chevron-circle-right"></i></a> </div>
                        </div>
                        <!-- end services-grid-1 -->
                    </div>
                    <!-- end col-sm-4 -->

                </div>
            </div>
            <!-- end main-boxes -->
        </div>
        <!-- end container -->
    </section>
    <!-- =-=-=-=-=-=-= Services =-=-=-=-=-=-= -->

    <!-- =-=-=-=-=-=-= Our Services =-=-=-=-=-=-= -->
    <section class="custom-padding services">
        <div class="container">
            <!-- title-section -->
            <div class="main-heading text-center">
                <h2>our services</h2>
                <p>Cras varius purus in tempus porttitor ut dapibus efficitur sagittis cras vitae lacus metus nunc vulputate facilisis nisi <br> eu lobortis erat consequat ut. Aliquam et justo ante. Nam a cursus velit</p>
            </div>
            <!-- End title-section -->

            <!-- Row -->
            <div class="row">
                <div id="services">
                    <!-- Service Item List -->
                    <div class="item">
                        <!-- services grid -->
                        <div class="services-grid">
                            <div class="icons"> <i class="flaticon-box-of-packing-for-delivery"></i></div>
                            <h4>packaging and storage</h4>
                            <p>We have the right caring, experience and dedicated professional for you.</p>
                        </div>
                    </div>
                    <!-- services grid -->
                    <div class="item">
                        <div class="services-grid">
                            <div class="icons"> <i class="flaticon-ocean-transportation"></i></div>
                            <h4>cargo</h4>
                            <p>We have the right caring, experience and dedicated professional for you.</p>
                        </div>
                    </div>
                    <!-- services grid -->
                    <div class="item">
                        <div class="services-grid">
                            <div class="icons"> <i class="flaticon-delivery-truck"></i></div>
                            <h4>worldwide transport </h4>
                            <p>We have the right caring, experience and dedicated professional for you.</p>
                        </div>
                    </div>
                    <!-- Service Item List -->
                    <div class="item">
                        <!-- services grid -->

                        <div class="services-grid">
                            <div class="icons"> <i class="flaticon-view-symbol-on-delivery-opened-box"></i></div>
                            <h4>ware housing</h4>
                            <p>We have the right caring, experience and dedicated professional for you.</p>
                        </div>
                    </div>
                    <!-- services grid -->
                    <div class="item">
                        <div class="services-grid">
                            <div class="icons"> <i class="flaticon-sea-ship-with-containers"></i></div>
                            <h4>Sea Freight</h4>
                            <p>We have the right caring, experience and dedicated professional for you.</p>
                        </div>
                    </div>
                    <!-- services grid -->
                    <div class="item">
                        <div class="services-grid">
                            <div class="icons"> <i class="flaticon-delivery-truck-with-packages-behind"></i></div>
                            <h4>Door To Door Devivery </h4>
                            <p>We have the right caring, experience and dedicated professional for you.</p>
                        </div>
                    </div>

                    <!-- Service Item List End -->
                </div>
            </div>
            <!-- Row End -->
        </div>
        <!-- end container -->
    </section>
    <!-- =-=-=-=-=-=-= Our Services-end =-=-=-=-=-=-= -->

    <!-- =-=-=-=-=-=-= Quote Seection =-=-=-=-=-=-= -->

    <section class="quote" id="quote">
        <div class="container">
            <div class="row clearfix">

                <!--Column-->
                <div class="col-md-7 col-sm-12 col-xs-12 ">
                    <div class="choose-title">
                        <h3>More about us</h3>
                        <h2>Why People Choose Us</h2>
                        <p>Ut consequat velit a metus accumsan, vel tempor nulla blandit. Integer euismod magna vel mi congue suscipit. Praesent quis facilisis neque. Donec scelerisque nibh vitae sapien ornare efficitur.</p>
                    </div>
                    <div class="choose-services">
                        <ul class="choose-list">

                            <!-- feature -->
                            <li>
                                <div class="choose-box"> <span class="iconbox"><i class="flaticon-logistics-delivery-truck-and-clock"></i></span>
                                    <div class="choose-box-content">
                                        <h4>Fast Worldwide delivery</h4>
                                        <p>Donec dignissim enim id urna fermentum, non hendrerit sem volutpat ellentesque pretium sapien nec metus.non hendrerit sem volutpat ellentesque pretium sapien nec metus</p>
                                    </div>
                                </div>
                            </li>

                            <!-- feature -->
                            <li>
                                <div class="choose-box"> <span class="iconbox"><i class="flaticon-woman-with-headset"></i></span>
                                    <div class="choose-box-content">
                                        <h4>Safety & Compliance</h4>
                                        <p>Donec dignissim enim id urna fermentum, non hendrerit sem volutpat ellentesque pretium sapien nec metus.non hendrerit sem volutpat ellentesque pretium sapien nec metus</p>
                                    </div>
                                </div>
                            </li>
                        </ul>
                        <!-- end choose-list -->
                    </div>
                </div>

                <!-- Quote Form -->
                <div class="col-md-5 col-sm-12 no-extra col-xs-12">
                    <div class="quotation-box">
                        <h2>REQUEST A QUOTE</h2>
                        <div class="desc-text">
                            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr.</p>
                        </div>
                        <form action="contact.html" method="post">
                            <div class="row clearfix">

                                <!--Form Group-->
                                <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                    <input class="form-control" type="text" placeholder="Your Name" value="" name="your-name">
                                </div>

                                <!--Form Group-->
                                <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                    <input class="form-control" type="text" placeholder="Subject" value="" name="your-subject">
                                </div>

                                <!--Form Group-->
                                <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                    <input class="form-control" type="email" placeholder="Email Address" value="" name="your-email">
                                </div>

                                <!--Form Group-->
                                <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                    <select class="form-control" name="sel-location">
                  <option>Select Location</option>
                  <option>Afghanistan</option>
                  <option>Albania</option>
                  <option>Algeria</option>
                  <option>American Samoa</option>
                  <option>Andorra</option>
                  <option>Angola</option>
                  <option>Anguilla</option>
                  <option>Antarctica</option>
                  <option>Argentina</option>
                  <option>Armenia</option>
                  <option>Aruba</option>
                  <option>Australia</option>
                  <option>Austria</option>
                  <option>Azerbaijan</option>
                  <option>Bahamas</option>
                  <option>Bahrain</option>
                  <option>Bangladesh</option>
                  <option>Barbados</option>
                  <option>Belarus</option>
                  <option>Belgium</option>
                  <option>Belize</option>
                  <option>Benin</option>
                  <option>Bermuda</option>
                  <option>Bhutan</option>
                  <option>Bolivia</option>
                  <option>Botswana</option>
                  <option>Bouvet Island</option>
                  <option>Brazil</option>
                  <option>Brunei Darussalam</option>
                  <option>Bulgaria</option>
                  <option>Burkina Faso</option>
                  <option>Burundi</option>
                  <option>Cambodia</option>
                  <option>Cameroon</option>
                  <option>Canada</option>
                  <option>Cape Verde</option>
                  <option>Cayman Islands</option>
                  <option>Chad</option>
                  <option>Chile</option>
                  <option>China</option>
                  <option>Christmas Island</option>
                  <option>Cocos Islands</option>
                  <option>Colombia</option>
                  <option>Comoros</option>
                  <option>Congo</option>
                  <option>Cook Islands</option>
                  <option>Costa Rica</option>
                  <option>Cote d'Ivoire</option>
                  <option>Croatia</option>
                  <option>Cuba</option>
                  <option>Cyprus</option>
                  <option>Czech Republic</option>
                  <option>Denmark</option>
                  <option>Djibouti</option>
                  <option>Dominica</option>
                  <option>Dominican Republic</option>
                  <option>Ecuador</option>
                  <option>Egypt</option>
                  <option>El Salvador</option>
                  <option>Equatorial Guinea</option>
                  <option>Eritrea</option>
                  <option>Estonia</option>
                  <option>Ethiopia</option>
                  <option>Faroe Islands</option>
                  <option>Fiji</option>
                  <option>Finland</option>
                  <option>France</option>
                  <option>French Guiana</option>
                  <option>Gabon</option>
                  <option>Gambia</option>
                  <option>Georgia</option>
                  <option>Germany</option>
                  <option>Ghana</option>
                  <option>Gibraltar</option>
                  <option>Greece</option>
                  <option>Greenland</option>
                  <option>Grenada</option>
                  <option>Guadeloupe</option>
                  <option>Guam</option>
                  <option>Guatemala</option>
                  <option>Guinea</option>
                  <option>Guinea-Bissau</option>
                  <option>Guyana</option>
                  <option>Haiti</option>
                  <option>Honduras</option>
                  <option>Hong Kong</option>
                  <option>Hungary</option>
                  <option>Iceland</option>
                  <option>India</option>
                  <option>Indonesia</option>
                  <option>Iran</option>
                  <option>Iraq</option>
                  <option>Ireland</option>
                  <option>Israel</option>
                  <option>Italy</option>
                  <option>Jamaica</option>
                  <option>Japan</option>
                  <option>Jordan</option>
                  <option>Kazakhstan</option>
                  <option>Kenya</option>
                  <option>Kiribati</option>
                  <option>Kuwait</option>
                  <option>Kyrgyzstan</option>
                  <option>Laos</option>
                  <option>Latvia</option>
                  <option>Lebanon</option>
                  <option>Lesotho</option>
                  <option>Liberia</option>
                  <option>Libya</option>
                  <option>Liechtenstein</option>
                  <option>Lithuania</option>
                  <option>Luxembourg</option>
                  <option>Macao</option>
                  <option>Madagascar</option>
                  <option>Malawi</option>
                  <option>Malaysia</option>
                  <option>Maldives</option>
                  <option>Mali</option>
                  <option>Malta</option>
                  <option>Marshall Islands</option>
                  <option>Martinique</option>
                  <option>Mauritania</option>
                  <option>Mauritius</option>
                  <option>Mayotte</option>
                  <option>Mexico</option>
                  <option>Micronesia</option>
                  <option>Moldova</option>
                  <option>Monaco</option>
                  <option>Mongolia</option>
                  <option>Montenegro</option>
                  <option>Montserrat</option>
                  <option>Morocco</option>
                  <option>Mozambique</option>
                  <option>Myanmar</option>
                  <option>Namibia</option>
                  <option>Nauru</option>
                  <option>Nepal</option>
                  <option>Netherlands</option>
                  <option>New Caledonia</option>
                  <option>New Zealand</option>
                  <option>Nicaragua</option>
                  <option>Niger</option>
                  <option>Nigeria</option>
                  <option>Norfolk Island</option>
                  <option>North Korea</option>
                  <option>Norway</option>
                  <option>Oman</option>
                  <option>Pakistan</option>
                  <option>Palau</option>
                  <option>Panama</option>
                  <option>Papua New Guinea</option>
                  <option>Paraguay</option>
                  <option>Peru</option>
                  <option>Philippines</option>
                  <option>Pitcairn</option>
                  <option>Poland</option>
                  <option>Portugal</option>
                  <option>Puerto Rico</option>
                  <option>Qatar</option>
                  <option>Romania</option>
                  <option>Russian Federation</option>
                  <option>Rwanda</option>
                  <option>Saint Helena</option>
                  <option>Saint Lucia</option>
                  <option>Samoa</option>
                  <option>San Marino</option>
                  <option>Sao Tome and Principe</option>
                  <option>Saudi Arabia</option>
                  <option>Senegal</option>
                  <option>Serbia</option>
                  <option>Seychelles</option>
                  <option>Sierra Leone</option>
                  <option>Singapore</option>
                  <option>Slovakia</option>
                  <option>Slovenia</option>
                  <option>Solomon Islands</option>
                  <option>Somalia</option>
                  <option>South Africa</option>
                  <option>South Georgia</option>
                  <option>South Korea</option>
                  <option>Spain</option>
                  <option>Sri Lanka</option>
                  <option>Sudan</option>
                  <option>Suriname</option>
                  <option>Swaziland</option>
                  <option>Sweden</option>
                  <option>Switzerland</option>
                  <option>Taiwan</option>
                  <option>Tajikistan</option>
                  <option>Tanzania</option>
                  <option>Thailand</option>
                  <option>Timor-Leste</option>
                  <option>Togo</option>
                  <option>Tokelau</option>
                  <option>Tonga</option>
                  <option>Tunisia</option>
                  <option>Turkey</option>
                  <option>Turkmenistan</option>
                  <option>Tuvalu</option>
                  <option>Uganda</option>
                  <option>Ukraine</option>
                  <option>United Arab Emirates</option>
                  <option>United Kingdom</option>
                  <option>United States</option>
                  <option>Uruguay</option>
                  <option>Uzbekistan</option>
                  <option>Vanuatu</option>
                  <option>Vatican City</option>
                  <option>Venezuela</option>
                  <option>Vietnam</option>
                  <option>Wallis and Futuna</option>
                  <option>Western Sahara</option>
                  <option>Yemen</option>
                  <option>Zambia</option>
                  <option>Zimbabwe</option>
                </select>
                                </div>

                                <!--Form Group-->
                                <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                    <textarea class="form-control" rows="7" cols="20" placeholder="Your Message" name="your-message"></textarea>
                                </div>

                                <!--Form Group-->
                                <div class="form-group col-md-12 col-sm-12 col-xs-12 text-right"> <a class="custom-button light">Submit Request</a> </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- =-=-=-=-=-=-= Quote Seection end=-=-=-=-=-=-= -->
    
     <!-- =-=-=-=-=-=-= Gallery =-=-=-=-=-=-= -->
    <section id="gallery" class="custom-padding">
        <div class="container">
            <!-- title-section -->
            <div class="main-heading text-center">
                <h2>OUR GALLERY</h2>
                <p>Cras varius purus in tempus porttitor ut dapibus efficitur sagittis cras vitae lacus metus nunc vulputate facilisis nisi <br> eu lobortis erat consequat ut. Aliquam et justo ante. Nam a cursus velit</p>
            </div>
            <!-- End title-section -->

            <div class="portfolio-container text-center">


                <ul id="portfolio-grid" class="three-column hover-two">
                    <li class="portfolio-item gutter">
                        <div class="portfolio">
                            <div class="tt-overlay"></div>
                            <img src="images/portfolio/1.jpg" alt="">

                            <div class="portfolio-info">
                                <h3 class="project-title">Project Title</h3>
                                <a href="#" class="links">App Design</a>
                            </div>
                            <!-- /.project-info -->

                            <ul class="portfolio-details">
                                <li><a class="tt-lightbox" href="images/portfolio/1.jpg"><i class="fa fa-search"></i></a></li>
                                <li><a href="#"><i class="fa fa-external-link"></i></a></li>
                            </ul>
                        </div>
                        <!-- /.portfolio -->
                    </li>
                    <li class="portfolio-item gutter">
                        <div class="portfolio">
                            <div class="tt-overlay"></div>
                            <img src="images/portfolio/2.jpg" alt="">

                            <div class="portfolio-info">
                                <h3 class="project-title">Project Title</h3>
                                <a href="#" class="links">App Design</a>
                            </div>
                            <!-- /.project-info -->

                            <ul class="portfolio-details">
                                <li><a class="tt-lightbox" href="images/portfolio/2.jpg"><i class="fa fa-search"></i></a></li>
                                <li><a href="#"><i class="fa fa-external-link"></i></a></li>
                            </ul>
                        </div>
                        <!-- /.portfolio -->
                    </li>
                    <li class="portfolio-item gutter">
                        <div class="portfolio">
                            <div class="tt-overlay"></div>
                            <img src="images/portfolio/3.jpg" alt="">

                            <div class="portfolio-info">
                                <h3 class="project-title">Project Title</h3>
                                <a href="#" class="links">App Design</a>
                            </div>
                            <!-- /.project-info -->

                            <ul class="portfolio-details">
                                <li><a class="tt-lightbox" href="images/portfolio/3.jpg"><i class="fa fa-search"></i></a></li>
                                <li><a href="#"><i class="fa fa-external-link"></i></a></li>
                            </ul>
                        </div>
                        <!-- /.portfolio -->
                    </li>

                    <li class="portfolio-item gutter">
                        <div class="portfolio">
                            <div class="tt-overlay"></div>
                            <img src="images/portfolio/4.jpg" alt="">

                            <div class="portfolio-info">
                                <h3 class="project-title">Project Title</h3>
                                <a href="#" class="links">App Design</a>
                            </div>
                            <!-- /.project-info -->

                            <ul class="portfolio-details">
                                <li><a class="tt-lightbox" href="images/portfolio/4.jpg"><i class="fa fa-search"></i></a></li>
                                <li><a href="#"><i class="fa fa-external-link"></i></a></li>
                            </ul>
                        </div>
                        <!-- /.portfolio -->
                    </li>
                    <li class="portfolio-item gutter">
                        <div class="portfolio">
                            <div class="tt-overlay"></div>
                            <img src="images/portfolio/5.jpg" alt="">

                            <div class="portfolio-info">
                                <h3 class="project-title">Project Title</h3>
                                <a href="#" class="links">App Design</a>
                            </div>
                            <!-- /.project-info -->

                            <ul class="portfolio-details">
                                <li><a class="tt-lightbox" href="images/portfolio/5.jpg"><i class="fa fa-search"></i></a></li>
                                <li><a href="#"><i class="fa fa-external-link"></i></a></li>
                            </ul>
                        </div>
                        <!-- /.portfolio -->
                    </li>
                    <li class="portfolio-item gutter">
                        <div class="portfolio">
                            <div class="tt-overlay"></div>
                            <img src="images/portfolio/6.jpg" alt="">

                            <div class="portfolio-info">
                                <h3 class="project-title">Project Title</h3>
                                <a href="#" class="links">App Design</a>
                            </div>
                            <!-- /.project-info -->

                            <ul class="portfolio-details">
                                <li><a class="tt-lightbox" href="images/portfolio/6.jpg"><i class="fa fa-search"></i></a></li>
                                <li><a href="#"><i class="fa fa-external-link"></i></a></li>
                            </ul>
                        </div>
                        <!-- /.portfolio -->
                    </li>

                    <li class="portfolio-item gutter">
                        <div class="portfolio">
                            <div class="tt-overlay"></div>
                            <img src="images/portfolio/7.jpg" alt="">

                            <div class="portfolio-info">
                                <h3 class="project-title">Project Title</h3>
                                <a href="#" class="links">App Design</a>
                            </div>
                            <!-- /.project-info -->

                            <ul class="portfolio-details">
                                <li><a class="tt-lightbox" href="images/portfolio/7.jpg"><i class="fa fa-search"></i></a></li>
                                <li><a href="#"><i class="fa fa-external-link"></i></a></li>
                            </ul>
                        </div>
                        <!-- /.portfolio -->
                    </li>
                    <li class="portfolio-item gutter">
                        <div class="portfolio">
                            <div class="tt-overlay"></div>
                            <img src="images/portfolio/8.jpg" alt="">

                            <div class="portfolio-info">
                                <h3 class="project-title">Project Title</h3>
                                <a href="#" class="links">App Design</a>
                            </div>
                            <!-- /.project-info -->

                            <ul class="portfolio-details">
                                <li><a class="tt-lightbox" href="images/portfolio/8.jpg"><i class="fa fa-search"></i></a></li>
                                <li><a href="#"><i class="fa fa-external-link"></i></a></li>
                            </ul>
                        </div>
                        <!-- /.portfolio -->
                    </li>
                    <li class="portfolio-item gutter">
                        <div class="portfolio">
                            <div class="tt-overlay"></div>
                            <img src="images/portfolio/9.jpg" alt="">

                            <div class="portfolio-info">
                                <h3 class="project-title">Project Title</h3>
                                <a href="#" class="links">App Design</a>
                            </div>
                            <!-- /.project-info -->

                            <ul class="portfolio-details">
                                <li><a class="tt-lightbox" href="images/portfolio/9.jpg"><i class="fa fa-search"></i></a></li>
                                <li><a href="#"><i class="fa fa-external-link"></i></a></li>
                            </ul>
                        </div>
                        <!-- /.portfolio -->
                    </li>
                </ul>
            </div>

            <!-- portfolio-container -->



        </div>
        <!-- end container -->
    </section>
    <!-- =-=-=-=-=-=-= Blog & News end =-=-=-=-=-=-= -->

    <!-- =-=-=-=-=-=-= PARALLEX TESTIMONILS =-=-=-=-=-=-= -->
    <section  class="testimonial-bg parallex section-padding text-center">
        <div class="container">
            <div id="testimonials">
                <div class="item">
                    <div class="col-sm-12 col-md-12 col-xs-12 testimonial-grid text-center"> <img src="images/admin-1.jpg" class="img-responsive" alt="Testimonials">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam lacus lectus a quam eget, fringilla suscipit sapien. Duis aliquet malesuada ipsum non sodales. Suspendisse a consequat leo. Fusce tempus vitae erat at consequat. Aenean commodo felis odio, ut congue est mollis non. Sed tincidunt.</p>
                        <div class="name">John Doe</div>
                        <div class="profession">Founder, Oxford</div>
                    </div>
                </div>
                <div class="item">
                    <div class="col-sm-12 col-md-12 col-xs-12 testimonial-grid text-center"> <img src="images/admin-1.jpg" alt="Testimonials" class="img-responsive">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam lacus lectus a quam eget, fringilla suscipit sapien. Duis aliquet malesuada ipsum non sodales. Suspendisse a consequat leo. Fusce tempus vitae erat at consequat. Aenean commodo felis odio, ut congue est mollis non. Sed tincidunt.</p>
                        <div class="name">John Doe</div>
                        <div class="profession">Founder, Oxford</div>
                    </div>
                </div>
                <div class="item">
                    <div class="col-sm-12 col-md-12 col-xs-12 testimonial-grid text-center"> <img src="images/admin-1.jpg" alt="Testimonials" class="img-responsive">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam lacus lectus a quam eget, fringilla suscipit sapien. Duis aliquet malesuada ipsum non sodales. Suspendisse a consequat leo. Fusce tempus vitae erat at consequat. Aenean commodo felis odio, ut congue est mollis non. Sed tincidunt.</p>
                        <div class="name">John Doe</div>
                        <div class="profession">Founder, Oxford</div>
                    </div>
                </div>
                <div class="item">
                    <div class="col-sm-12 col-md-12 col-xs-12 testimonial-grid text-center"> <img src="images/admin-1.jpg" alt="Testimonials" class="img-responsive">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam lacus lectus a quam eget, fringilla suscipit sapien. Duis aliquet malesuada ipsum non sodales. Suspendisse a consequat leo. Fusce tempus vitae erat at consequat. Aenean commodo felis odio, ut congue est mollis non. Sed tincidunt.</p>
                        <div class="name">John Doe</div>
                        <div class="profession">Founder, Oxford</div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end container -->
    </section>
    <!-- =-=-=-=-=-=-= PARALLEX TESTIMONILS END =-=-=-=-=-=-= -->

    <!-- =-=-=-=-=-=-= Blog & News =-=-=-=-=-=-= -->
    <section id="blog" class="custom-padding">
        <div class="container">
            <!-- title-section -->
            <div class="main-heading text-center">
                <h2>OUR BLOG</h2>
                <p>Cras varius purus in tempus porttitor ut dapibus efficitur sagittis cras vitae lacus metus nunc vulputate facilisis nisi <br> eu lobortis erat consequat ut. Aliquam et justo ante. Nam a cursus velit</p>
            </div>
            <!-- End title-section -->

            <!-- Row -->
            <div class="row">
                <div class="col-sm-12 col-xs-12 col-md-12">

                    <!-- blog-grid -->
                    <div class="col-md-4 col-sm-12 col-xs-12">
                        <div class="news-box">
                            <div class="news-thumb">
                                <a href="blog-detail.html"><img alt="" class="img-responsive" src="images/blog/1.jpg"></a>
                                <div class="date"> <strong>21</strong>
<span>Jun</span> </div>
                            </div>
                            <div class="news-detail">
                                <h2><a title="" href="blog-detail.html">top benefits of hiring our trucking service</a></h2>
                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo enean dolor sit amet, consectetuer.</p>
                                <div class="entry-footer">
                                    <div class="post-meta">
                                        <div class="post-admin"> <i class="icon-profile-male"></i>Posted by<a href="#">Admin</a> </div>
                                        <div class="post-comment"> <i class="icon-chat"></i> <a href="#">217</a> </div>
                                        <div class="post-like"> <i class="icon-heart"></i> <a href="#">130</a> </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- blog-grid end -->

                    <!-- blog-grid -->
                    <div class="col-md-4 col-sm-12 col-xs-12">
                        <div class="news-box">
                            <div class="news-thumb">
                                <a href="blog-detail.html"><img alt="" class="img-responsive" src="images/blog/2.jpg"></a>
                                <div class="date"> <strong>21</strong>
<span>Jun</span> </div>
                            </div>
                            <div class="news-detail">
                                <h2><a title="" href="blog-detail.html">top benefits of hiring our logistics service</a></h2>
                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo enean dolor sit amet, consectetuer.</p>
                                <div class="entry-footer">
                                    <div class="post-meta">
                                        <div class="post-admin"> <i class="icon-profile-male"></i>Posted by<a href="#">Admin</a> </div>
                                        <div class="post-comment"> <i class="icon-chat"></i> <a href="#">217</a> </div>
                                        <div class="post-like"> <i class="icon-heart"></i> <a href="#">130</a> </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- blog-grid end -->

                    <!-- blog-grid -->
                    <div class="col-md-4 col-sm-12 col-xs-12">
                        <div class="news-box">
                            <div class="news-thumb">
                                <a href="blog-detail.html"><img class="img-responsive" alt="" src="images/blog/3.jpg"></a>
                                <div class="date"> <strong>21</strong>
<span>Jun</span> </div>
                            </div>
                            <div class="news-detail">
                                <h2><a title="" href="blog-detail.html">top benefits of hiring our logistics service</a></h2>
                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo enean dolor sit amet, consectetuer.</p>
                                <div class="entry-footer">
                                    <div class="post-meta">
                                        <div class="post-admin"> <i class="icon-profile-male"></i>Posted by<a href="#">Admin</a> </div>
                                        <div class="post-comment"> <i class="icon-chat"></i> <a href="#">217</a> </div>
                                        <div class="post-like"> <i class="icon-heart"></i> <a href="#">130</a> </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- blog-grid end -->

                    <div class="clearfix"></div>
                </div>
            </div>

            <!-- Row End -->
        </div>
        <!-- end container -->
    </section>
    <!-- =-=-=-=-=-=-= Blog & News end =-=-=-=-=-=-= -->

    <!-- =-=-=-=-=-=-= Our Clients =-=-=-=-=-=-= -->
    <section class="section-padding-70 services">
        <div class="container">
            <!-- title-section -->
            <div class="main-heading text-center">
                <h2>our partners</h2>
                <p>Cras varius purus in tempus porttitor ut dapibus efficitur sagittis cras vitae lacus metus nunc vulputate facilisis nisi <br> eu lobortis erat consequat ut. Aliquam et justo ante. Nam a cursus velit</p>
            </div>
            <!-- End title-section -->

            <!-- Row -->
            <div class="row">
                <div id="clients" class="text-center">
                    <!-- Service Item List -->
                    <div class="item">
                        <div class="clients-grid"> <img class="img-responsive" alt="" src="images/clients/client_5.png"> </div>
                    </div>
                    <div class="item">
                        <div class="clients-grid"> <img class="img-responsive" alt="" src="images/clients/client_5.png"> </div>
                    </div>
                    <div class="item">
                        <div class="clients-grid"> <img class="img-responsive" alt="" src="images/clients/client_5.png"> </div>
                    </div>
                    <div class="item">
                        <div class="clients-grid"> <img class="img-responsive" alt="" src="images/clients/client_5.png"> </div>
                    </div>
                    <div class="item">
                        <div class="clients-grid"> <img class="img-responsive" alt="" src="images/clients/client_5.png"> </div>
                    </div>
                    <div class="item">
                        <div class="clients-grid"> <img class="img-responsive" alt="" src="images/clients/client_5.png"> </div>
                    </div>
                    <div class="item">
                        <div class="clients-grid"> <img class="img-responsive" alt="" src="images/clients/client_5.png"> </div>
                    </div>
                    <div class="item">
                        <div class="clients-grid"> <img class="img-responsive" alt="" src="images/clients/client_5.png"> </div>
                    </div>
                    <div class="item">
                        <div class="clients-grid"> <img class="img-responsive" alt="" src="images/clients/client_5.png"> </div>
                    </div>
                    <div class="item">
                        <div class="clients-grid"> <img class="img-responsive" alt="" src="images/clients/client_5.png"> </div>
                    </div>
                    <div class="item">
                        <div class="clients-grid"> <img class="img-responsive" alt="" src="images/clients/client_5.png"> </div>
                    </div>
                    <div class="item">
                        <div class="clients-grid"> <img class="img-responsive" alt="" src="images/clients/client_5.png"> </div>
                    </div>
                    <!-- Service Item List End -->
                </div>
            </div>
            <!-- Row End -->
        </div>
        <!-- end container -->
    </section>
    <!-- =-=-=-=-=-=-= Our Clients -end =-=-=-=-=-=-= -->

    <!-- =-=-=-=-=-=-= FOOTER =-=-=-=-=-=-= -->
    <footer class="footer-area">

        <!--Footer Upper-->
        <div class="footer-content">
            <div class="container">
                <div class="row clearfix">

                    <!--Two 4th column-->
                    <div class="col-md-6 col-sm-12 col-xs-12">
                        <div class="row clearfix">
                            <div class="col-lg-7 col-sm-6 col-xs-12 column">
                                <div class="footer-widget about-widget">
                                    <div class="logo">
                                        <a href="index.html"><img src="images/logo-1.png" class="img-responsive" alt=""></a>
                                    </div>
                                    
                                    <ul class="contact-info">
                                        <li><span class="icon fa fa-map-marker"></span> 60 Link Road Lhr. Pakistan 54770</li>
                                        <li><span class="icon fa fa-phone"></span> (042) 1234567890</li>
                                        <li><span class="icon fa fa-envelope-o"></span> contant@scriptsbundle.com</li>
                                        <li><span class="icon fa fa-fax"></span>  (042) 1234 7777</li>

                                    </ul>
                                    <div class="social-links-two clearfix"> <a href="#" class="facebook img-circle"><span class="fa fa-facebook-f"></span></a> <a href="#" class="twitter img-circle"><span class="fa fa-twitter"></span></a> <a href="#" class="google-plus img-circle"><span class="fa fa-google-plus"></span></a> <a href="#" class="linkedin img-circle"><span class="fa fa-pinterest-p"></span></a> <a href="#" class="linkedin img-circle"><span class="fa fa-linkedin"></span></a> </div>
                                </div>
                            </div>

                            <!--Footer Column-->
                            <div class="col-lg-5 col-sm-6 col-xs-12 column">
                                <h2>Our Service</h2>
                                <div class="footer-widget links-widget">
                                    <ul>
                                        <li><a href="#">Packaging And Storage</a></li>
                                        <li><a href="#">worldwide transport</a></li>
                                        <li><a href="#">Internation Air Freight</a></li>
                                        <li><a href="#">ground shipping</a></li>
                                        <li><a href="#">24/7 Support</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Two 4th column End-->

                    <!--Two 4th column-->
                    <div class="col-md-6 col-sm-12 col-xs-12">
                        <div class="row clearfix">
                            <!--Footer Column-->
                            <div class="col-lg-7 col-sm-6 col-xs-12 column">
                                <div class="footer-widget news-widget">
                                    <h2>Latest News</h2>

                                    <!--News Post-->
                                    <div class="news-post">
                                        <div class="icon"></div>
                                        <div class="news-content">
                                            <figure class="image-thumb"><img src="images/blog/popular-2.jpg" alt=""></figure>
                                            <a href="#">top benefits of hiring our professional logistics service</a></div>
                                        <div class="time">June 21, 2016</div>
                                    </div>

                                    <!--News Post-->
                                    <div class="news-post">
                                        <div class="icon"></div>
                                        <div class="news-content">
                                            <figure class="image-thumb"><img src="images/blog/popular-1.jpg" alt=""></figure>
                                            <a href="#">top benefits of hiring our professional logistics service</a></div>
                                        <div class="time">June 21, 2016</div>
                                    </div>
                                </div>
                            </div>

                            <!--Footer Column-->
                            <div class="col-lg-5 col-sm-6 col-xs-12 column">
                                <div class="footer-widget links-widget">
                                    <h2>Site Links</h2>
                                    <ul>
                                        <li><a href="about.html">About Us</a></li>
                                        <li><a href="team.html">Our Team</a></li>
                                        <li><a href="services.html">Our Services</a></li>
                                        <li><a href="index-7.html">Blog</a></li>
                                        <li><a href="contact.html">Contact Us</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Two 4th column End-->

                </div>
            </div>
        </div>

        <!--Footer Bottom-->
        <div class="footer-copyright">
            <div class="auto-container clearfix">
                <!--Copyright-->
                <div class="copyright text-center">Copyright 2016 &copy; Theme Created By <a target="_blank" href="http://themeforest.net/user/scriptsbundle/portfolio">Scriptsbundle</a> All Rights Reserved</div>
            </div>
        </div>
    </footer>
	
	<!-- =-=-=-=-=-=-= Quote Modal =-=-=-=-=-=-= -->
	<div data-target="#request-quote" data-toggle="modal" class="quote-button hidden-xs">
		  <a class="btn btn-primary" href="javascript:void(0)"><i class="fa fa-envelope"></i></a>
	</div>
	<!-- =-=-=-=-=-=-= Quote Modal End =-=-=-=-=-=-= -->

    <!-- =-=-=-=-=-=-= JQUERY =-=-=-=-=-=-= -->
    <script src="js/jquery.min.js"></script>
    <!-- Bootstrap Core Css  -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Dropdown Hover  -->
     <script src="js/bootstrap-dropdownhover.min.js"></script>
    <!-- Dropdown Hover  -->
    <!-- Jquery Easing -->
    <script type="text/javascript" src="js/easing.js"></script>
    <!-- Jquery Counter -->
    <script src="js/jquery.countTo.js"></script>
    <!-- Jquery Waypoints -->
    <script src="js/jquery.waypoints.js"></script>
    <!-- Jquery Appear Plugin -->
    <script src="js/jquery.appear.min.js"></script>
    <!-- Jquery Shuffle Portfolio -->
    <script src="js/jquery.shuffle.min.js"></script>
    <!-- Carousel Slider  -->
    <script src="js/carousel.min.js"></script>
    <!-- Jquery Migrate -->
    <script src="js/jquery-migrate.min.js"></script>
    <!--Style Switcher -->
    <script src="js/color-switcher.js"></script>
    <!-- Gallery Magnify  -->
    <script src="js/magnific-popup/jquery.magnific-popup.min.js"></script>
    <!-- Sticky Bar  -->
    <script src="js/theia-sticky-sidebar.js"></script>
    <!-- Template Core JS -->
    <script src="js/custom.js"></script>
    
    <!-- Jquery For Home Page Only  -->
    <!-- Revolution Slider 5.x SCRIPTS -->
    <script src="js/revolution-slider/js/jquery.themepunch.tools.min.js"></script>
    <script src="js/revolution-slider/js/jquery.themepunch.revolution.min.js"></script>
    <script src="js/custom.js"></script>
    <script  type="text/javascript">
              $(document).ready(function(e) {
                var revapi = $(".rev_slider").revolution({
                  sliderType:"standard",
                  jsFileLocation: "js/revolution-slider/js/",
                  sliderLayout: "auto",
                  dottedOverlay: "none",
                  delay: 5000,
                  navigation: {
                      keyboardNavigation: "off",
                      keyboard_direction: "horizontal",
                      mouseScrollNavigation: "off",
                      onHoverStop: "off",
                      touch: {
                          touchenabled: "on",
                          swipe_threshold: 75,
                          swipe_min_touches: 1,
                          swipe_direction: "horizontal",
                          drag_block_vertical: false
                      },
                      arrows: {
                          style: "gyges",
                          enable: true,
                          hide_onmobile: false,
                          hide_onleave: true,
                          hide_delay: 200,
                          hide_delay_mobile: 1200,
                          tmp: '',
                          left: {
                              h_align: "left",
                              v_align: "center",
                              h_offset: 0,
                              v_offset: 0
                          },
                          right: {
                              h_align: "right",
                              v_align: "center",
                              h_offset: 0,
                              v_offset: 0
                          }
                      },
                      
                        bullets: {
                        enable: true,
                        hide_onmobile: true,
                        hide_under: 800,
                        style: "hebe",
                        hide_onleave: false,
                        direction: "horizontal",
                        h_align: "center",
                        v_align: "bottom",
                        h_offset: 0,
                        v_offset: 30,
                        space: 5,
                        tmp: '<span class="tp-bullet-image"></span><span class="tp-bullet-imageoverlay"></span><span class="tp-bullet-title"></span>'
                    }
                  },
                  responsiveLevels: [1240, 1024, 778],
                  visibilityLevels: [1240, 1024, 778],
                  gridwidth: [1170, 1024, 778, 480],
                  gridheight: [620, 768, 960, 720],
                  lazyType: "none",
                  parallax: {
					type: "scroll",
					origo: "slidercenter",
					speed: 1000,
					levels: [5, 10, 15, 20, 25, 30, 35, 40, 45, 46, 47, 48, 49, 50, 100, 55],
					type: "scroll",
                  },
                  shadow: 0,
                  spinner: "off",
                  stopLoop: "on",
                  stopAfterLoops: 0,
                  stopAtSlide: -1,
                  shuffle: "off",
                  autoHeight: "off",
                  fullScreenAutoWidth: "off",
                  fullScreenAlignForce: "off",
                  fullScreenOffsetContainer: "",
                  fullScreenOffset: "0",
                  hideThumbsOnMobile: "off",
                  hideSliderAtLimit: 0,
                  hideCaptionAtLimit: 0,
                  hideAllCaptionAtLilmit: 0,
                  debugMode: false,
                  fallbacks: {
                      simplifyAll: "off",
                      nextSlideOnWindowFocus: "off",
                      disableFocusListener: false,
                  }
                });
              });
            </script>
    
    <!-- SLIDER REVOLUTION 5.0 EXTENSIONS  
          (Load Extensions only on Local File Systems ! 
           The following part can be removed on Server for On Demand Loading) -->
    <script type="text/javascript" src="js/revolution-slider/js/extensions/revolution.extension.actions.min.js"></script>
    <script type="text/javascript" src="js/revolution-slider/js/extensions/revolution.extension.carousel.min.js"></script>
    <script type="text/javascript" src="js/revolution-slider/js/extensions/revolution.extension.kenburn.min.js"></script>
    <script type="text/javascript" src="js/revolution-slider/js/extensions/revolution.extension.layeranimation.min.js"></script>
    <script type="text/javascript" src="js/revolution-slider/js/extensions/revolution.extension.migration.min.js"></script>
    <script type="text/javascript" src="js/revolution-slider/js/extensions/revolution.extension.navigation.min.js"></script>
    <script type="text/javascript" src="js/revolution-slider/js/extensions/revolution.extension.parallax.min.js"></script>
    <script type="text/javascript" src="js/revolution-slider/js/extensions/revolution.extension.slideanims.min.js"></script>
    <script type="text/javascript" src="js/revolution-slider/js/extensions/revolution.extension.video.min.js"></script>
 <!-- =-=-=-=-=-=-= Quote Modal =-=-=-=-=-=-= --> 
    <div class="modal fade " id="request-quote" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                <div class="quotation-box-1">
                        <h2>REQUEST A QUOTE</h2>
                        <div class="desc-text">
                            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr.</p>
                        </div>
                        <form action="contact.html" method="post">
                            <div class="row clearfix">
                                <!--Form Group-->
                                <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                    <input class="form-control" type="text" placeholder="Your Name" value="" name="your-name">
                                </div>
                                <!--Form Group-->
                                <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                    <input class="form-control" type="text" placeholder="Subject" value="" name="your-subject">
                                </div>
                                <!--Form Group-->
                                <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                    <input class="form-control" type="email" placeholder="Email Address" value="" name="your-email">
                                </div>
                                <!--Form Group-->
                                <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                    <select class="quote-select form-control" name="sel-location">
                                      <option>Select Location</option>
                                      <option>Afghanistan</option>
                                      <option>Albania</option>
                                      <option>Algeria</option>
                                      <option>American Samoa</option>
                                      <option>Andorra</option>
                                      <option>Angola</option>
                                      <option>Anguilla</option>
                                      <option>Antarctica</option>
                                      <option>Argentina</option>
                                      <option>Armenia</option>
                                      <option>Aruba</option>
                                      <option>Australia</option>
                                      <option>Austria</option>
                                      <option>Azerbaijan</option>
                                      <option>Bahamas</option>
                                      <option>Bahrain</option>
                                      <option>Bangladesh</option>
                                      <option>Barbados</option>
                                      <option>Belarus</option>
                                      <option>Belgium</option>
                                      <option>Belize</option>
                                      <option>Benin</option>
                                      <option>Bermuda</option>
                                      <option>Bhutan</option>
                                      <option>Bolivia</option>
                                      <option>Botswana</option>
                                      <option>Bouvet Island</option>
                                      <option>Brazil</option>
                                      <option>Brunei Darussalam</option>
                                      <option>Bulgaria</option>
                                      <option>Burkina Faso</option>
                                      <option>Burundi</option>
                                      <option>Cambodia</option>
                                      <option>Cameroon</option>
                                      <option>Canada</option>
                                      <option>Cape Verde</option>
                                      <option>Cayman Islands</option>
                                      <option>Chad</option>
                                      <option>Chile</option>
                                      <option>China</option>
                                      <option>Christmas Island</option>
                                      <option>Cocos Islands</option>
                                      <option>Colombia</option>
                                      <option>Comoros</option>
                                      <option>Congo</option>
                                      <option>Cook Islands</option>
                                      <option>Costa Rica</option>
                                      <option>Cote d'Ivoire</option>
                                      <option>Croatia</option>
                                      <option>Cuba</option>
                                      <option>Cyprus</option>
                                      <option>Czech Republic</option>
                                      <option>Denmark</option>
                                      <option>Djibouti</option>
                                      <option>Dominica</option>
                                      <option>Dominican Republic</option>
                                      <option>Ecuador</option>
                                      <option>Egypt</option>
                                      <option>El Salvador</option>
                                      <option>Equatorial Guinea</option>
                                      <option>Eritrea</option>
                                      <option>Estonia</option>
                                      <option>Ethiopia</option>
                                      <option>Faroe Islands</option>
                                      <option>Fiji</option>
                                      <option>Finland</option>
                                      <option>France</option>
                                      <option>French Guiana</option>
                                      <option>Gabon</option>
                                      <option>Gambia</option>
                                      <option>Georgia</option>
                                      <option>Germany</option>
                                      <option>Ghana</option>
                                      <option>Gibraltar</option>
                                      <option>Greece</option>
                                      <option>Greenland</option>
                                      <option>Grenada</option>
                                      <option>Guadeloupe</option>
                                      <option>Guam</option>
                                      <option>Guatemala</option>
                                      <option>Guinea</option>
                                      <option>Guinea-Bissau</option>
                                      <option>Guyana</option>
                                      <option>Haiti</option>
                                      <option>Honduras</option>
                                      <option>Hong Kong</option>
                                      <option>Hungary</option>
                                      <option>Iceland</option>
                                      <option>India</option>
                                      <option>Indonesia</option>
                                      <option>Iran</option>
                                      <option>Iraq</option>
                                      <option>Ireland</option>
                                      <option>Israel</option>
                                      <option>Italy</option>
                                      <option>Jamaica</option>
                                      <option>Japan</option>
                                      <option>Jordan</option>
                                      <option>Kazakhstan</option>
                                      <option>Kenya</option>
                                      <option>Kiribati</option>
                                      <option>Kuwait</option>
                                      <option>Kyrgyzstan</option>
                                      <option>Laos</option>
                                      <option>Latvia</option>
                                      <option>Lebanon</option>
                                      <option>Lesotho</option>
                                      <option>Liberia</option>
                                      <option>Libya</option>
                                      <option>Liechtenstein</option>
                                      <option>Lithuania</option>
                                      <option>Luxembourg</option>
                                      <option>Macao</option>
                                      <option>Madagascar</option>
                                      <option>Malawi</option>
                                      <option>Malaysia</option>
                                      <option>Maldives</option>
                                      <option>Mali</option>
                                      <option>Malta</option>
                                      <option>Marshall Islands</option>
                                      <option>Martinique</option>
                                      <option>Mauritania</option>
                                      <option>Mauritius</option>
                                      <option>Mayotte</option>
                                      <option>Mexico</option>
                                      <option>Micronesia</option>
                                      <option>Moldova</option>
                                      <option>Monaco</option>
                                      <option>Mongolia</option>
                                      <option>Montenegro</option>
                                      <option>Montserrat</option>
                                      <option>Morocco</option>
                                      <option>Mozambique</option>
                                      <option>Myanmar</option>
                                      <option>Namibia</option>
                                      <option>Nauru</option>
                                      <option>Nepal</option>
                                      <option>Netherlands</option>
                                      <option>New Caledonia</option>
                                      <option>New Zealand</option>
                                      <option>Nicaragua</option>
                                      <option>Niger</option>
                                      <option>Nigeria</option>
                                      <option>Norfolk Island</option>
                                      <option>North Korea</option>
                                      <option>Norway</option>
                                      <option>Oman</option>
                                      <option>Pakistan</option>
                                      <option>Palau</option>
                                      <option>Panama</option>
                                      <option>Papua New Guinea</option>
                                      <option>Paraguay</option>
                                      <option>Peru</option>
                                      <option>Philippines</option>
                                      <option>Pitcairn</option>
                                      <option>Poland</option>
                                      <option>Portugal</option>
                                      <option>Puerto Rico</option>
                                      <option>Qatar</option>
                                      <option>Romania</option>
                                      <option>Russian Federation</option>
                                      <option>Rwanda</option>
                                      <option>Saint Helena</option>
                                      <option>Saint Lucia</option>
                                      <option>Samoa</option>
                                      <option>San Marino</option>
                                      <option>Sao Tome and Principe</option>
                                      <option>Saudi Arabia</option>
                                      <option>Senegal</option>
                                      <option>Serbia</option>
                                      <option>Seychelles</option>
                                      <option>Sierra Leone</option>
                                      <option>Singapore</option>
                                      <option>Slovakia</option>
                                      <option>Slovenia</option>
                                      <option>Solomon Islands</option>
                                      <option>Somalia</option>
                                      <option>South Africa</option>
                                      <option>South Georgia</option>
                                      <option>South Korea</option>
                                      <option>Spain</option>
                                      <option>Sri Lanka</option>
                                      <option>Sudan</option>
                                      <option>Suriname</option>
                                      <option>Swaziland</option>
                                      <option>Sweden</option>
                                      <option>Switzerland</option>
                                      <option>Taiwan</option>
                                      <option>Tajikistan</option>
                                      <option>Tanzania</option>
                                      <option>Thailand</option>
                                      <option>Timor-Leste</option>
                                      <option>Togo</option>
                                      <option>Tokelau</option>
                                      <option>Tonga</option>
                                      <option>Tunisia</option>
                                      <option>Turkey</option>
                                      <option>Turkmenistan</option>
                                      <option>Tuvalu</option>
                                      <option>Uganda</option>
                                      <option>Ukraine</option>
                                      <option>United Arab Emirates</option>
                                      <option>United Kingdom</option>
                                      <option>United States</option>
                                      <option>Uruguay</option>
                                      <option>Uzbekistan</option>
                                      <option>Vanuatu</option>
                                      <option>Vatican City</option>
                                      <option>Venezuela</option>
                                      <option>Vietnam</option>
                                      <option>Wallis and Futuna</option>
                                      <option>Western Sahara</option>
                                      <option>Yemen</option>
                                      <option>Zambia</option>
                                      <option>Zimbabwe</option>
                                    </select>
                                </div>
                                <!--Form Group-->
                                <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                    <textarea class="form-control" rows="7" cols="20" placeholder="Your Message" name="your-message"></textarea>
                                </div>
                                <!--Form Group-->
                                <div class="form-group col-md-12 col-sm-12 col-xs-12 text-right"> <a class="custom-button light">Submit Request</a> </div>
                            </div>
                        </form>
                    </div>
                </div>
                
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div>
    <!-- =-=-=-=-=-=-= Quote Modal End =-=-=-=-=-=-= -->
</body>

</html>