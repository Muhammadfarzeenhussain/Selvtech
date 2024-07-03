
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from themetechmount.com/html/Selvtech/aboutus-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 21 May 2022 09:23:31 GMT -->
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="keywords" content="HTML5 Template" />
<meta name="description" content="Selvtech - Restaurant and Cafe HTML Template" />
<meta name="author" content="https://www.themetechmount.com/" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
<title>Selvtech-Aboutus Restaurant and Cafe </title>

<!-- Selvtech icon -->
<link rel="shortcut icon" href="images/selvtech_logo.png" />

<!-- bootstrap -->
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"/>

<!-- animate -->
<link rel="stylesheet" type="text/css" href="css/animate.css"/>

<link rel="stylesheet" type="text/css" href="css/animate.min.css"/>


<!-- owl-carousel -->
<link rel="stylesheet" type="text/css" href="css/owl.carousel.css">

<!-- fontawesome -->
<link rel="stylesheet" type="text/css" href="css/font-awesome.css"/>

<!-- themify -->
<link rel="stylesheet" type="text/css" href="css/themify-icons.css"/>

<!-- flaticon -->
<link rel="stylesheet" type="text/css" href="css/flaticon.css"/>

<!-- prettyphoto -->
<link rel="stylesheet" type="text/css" href="css/prettyPhoto.css">

<!-- shortcodes -->
<link rel="stylesheet" type="text/css" href="css/shortcodes.css"/>

<!-- main -->
<link rel="stylesheet" type="text/css" href="css/main.css"/>

<!-- responsive -->
<link rel="stylesheet" type="text/css" href="css/responsive.css"/>



</head>

<body>

    <!--page start-->
    <div class="page">

        <!--header start-->
        <header id="masthead" class="header ttm-header-style-01">
            <!-- ttm-header-wrap -->
            <div class="ttm-header-wrap">
                <!-- ttm-stickable-header-w -->
                <div id="ttm-stickable-header-w" class="ttm-stickable-header-w ttm-bgcolor-darkgrey clearfix">
                    <div id="site-header-menu" class="site-header-menu">
                        <div class="site-header-menu-inner ttm-stickable-header">
                            <div class="container-fluid">
                                <!-- site-branding -->
                                <div class="site-branding">
                                    <a class="home-link" href="index.html" title="Selvtech" rel="About us">
                                        <img id="logo-img" class="img-center" src="images/selvtechlogo1.png" alt="logo-img">
                                    </a>
                                </div><!-- site-branding end -->
                                <!--site-navigation -->
                                <?php include('nav.php');
$admin=new Admin();
                            ?><!-- site-navigation end-->
                            </div>
                        </div>
                    </div>
                </div><!-- ttm-stickable-header-w end-->
            </div><!--ttm-header-wrap end -->
        </header><!--header end-->
   <?php
                                           $query=$admin->ret("SELECT count(*) FROM `customer`");
       $row1=$query->fetch(PDO::FETCH_ASSOC);
          $e=implode($row1); ?>
         <?php
                                           $query=$admin->ret("SELECT count(*) FROM `order`");
       $row=$query->fetch(PDO::FETCH_ASSOC);
          $c=implode($row);?>
           <?php
                                           $query=$admin->ret("SELECT count(*) FROM `menu_details`");
       $row2=$query->fetch(PDO::FETCH_ASSOC);
          $b=implode($row2);
          ?>
           <?php
                                           $query=$admin->ret("SELECT count(*) FROM `item_details`");
       $row3=$query->fetch(PDO::FETCH_ASSOC);
          $d=implode($row3); ?>
        <!-- page-title -->
        <div class="ttm-page-title-row">
            <div class="container">
                <div class="row">
                    <div class="col-md-12"> 
                        <div class="title-box">
                            <div class="page-title-heading">
                                <h1 class="title">About Us</h1>
                            </div><!-- /.page-title-captions -->
                            <!-- <div class="breadcrumb-wrapper">
                                <span>
                                    <a title="Homepage" href="index.html">Home</a>
                                </span>
                                <span class="ttm-bread-sep"><i class="fa fa-angle-right" aria-hidden="true"></i></span>
                                <span><span>About Us 2</span></span>
                            </div> -->
                        </div>
                    </div><!-- /.col-md-12 -->  
                </div><!-- /.row -->  
            </div><!-- /.container -->
        </div>
        <!-- page-title END-->


        <!--site-main start-->
        <div class="site-main">

            <!-- story-section -->
            <section class="ttm-row about-section-style2 clearfix">
                <div class="container">
                    <div class="row bg-img19"><!-- row -->
                        <div class="col-md-10 offset-md-1 col-lg-8 offset-lg-2 col-xl-6 offset-xl-3">
                            <!-- col-bg-img-four -->
                            <div class="ttm-bgcolor-darkgrey ttm-bg col-bg-img-four ttm-col-bgimage-yes p-15 h-auto mt_65 mb_65">
                                <div class="ttm-col-wrapper-bg-layer ttm-bg-layer">
                                    <div class="ttm-bg-layer-inner"></div>
                                </div>
                                <div class="layer-content">
                                    <div class="spacing-8 text-center border-dashed ttm-skin-border">
                                        <!-- section title -->
                                        <div class="section-title text-center clearfix">
                                            <div class="title-header mb-65">
                                                <h5>our story</h5>
                                                <h2 class="title">Welcome To Selvtech</h2>
                                            </div>
                                            <div class="heading-seperator"><span></span></div>
                                        </div><!-- section title end -->
                                        <p class="mb-30">Nestled in the rooftop, ‘Selvtech’ is the most premium & exclusive restaurant located in Mangalore. we offer an extensive collection of the robust flavours of  food, With its promising ambience. Our Restaurant has emerged as one of the major venues,</p>
                                        <h6 class="font-w-600 body-font-family mb-30 ttm-textcolor-skincolor"> SELV TECH </h6>
                                        <img src="images/selvtechlogo1.png" alt="theme-icon" width="50%">
                                        <!-- <div class="text-center mt-35">
                                            <a class="ttm-btn ttm-btn-size-md ttm-btn-style-border ttm-btn-color-skincolor" href="#">Book A Table:+123-456-7890</a>
                                        </div> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- row end-->
                </div>
            </section>
            <!-- story-section -->

            <!-- counter-section -->
            <section class="ttm-row counter-section ttm-bgcolor-darkgrey ttm-bgimage-yes ttm-bg  bg-img20 clearfix">
                <div class="ttm-row-wrapper-bg-layer ttm-bg-layer"></div>
                <div class="container">
                    <div class="row"> <!-- row -->
                        <div class="col-md-3 col-sm-6">
                            <!-- ttm-fid -->
                            <div class="ttm-fid inside ttm-fid-view-topicon style1"> <!-- ttm-fid-view-topicon -->
                                <div class="ttm-fid-icon-wrapper"><i class="ti ti-layers-alt"></i></div> <!-- ttm-fid-icon -->
                                <div class="ttm-fid-contents"><!-- ttm-fid-contents -->
                                    <h4><span   data-appear-animation = "animateDigits"
                                                data-from             = "<?php echo $b; ?>"
                                                data-to               = "<?php echo $b; ?>"
                                                data-interval         = "2"
                                                data-before           = ""
                                                data-before-style     = "sup"
                                                data-after            = ""
                                                data-after-style      = "sub"
                                            ><?php echo $b; ?>
                                        </span>
                                    </h4>
                                    <h3 class="ttm-fid-title"><span>DISHES MENU</span></h3> <!-- ttm-fid-title -->
                                </div><!-- ttm-fid-contents end -->
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <!-- ttm-fid -->
                            <div class="ttm-fid inside ttm-fid-view-topicon style1"> <!-- ttm-fid-view-topicon -->
                                <div class="ttm-fid-icon-wrapper" style="margin-top: 7px"><i class="flaticon-burger"></i></div> <!-- ttm-fid-icon -->
                                <div class="ttm-fid-contents"><!-- ttm-fid-contents -->
                                    <h4><span   data-appear-animation = "animateDigits"
                                                data-from             = "<?php echo $d; ?>"
                                                data-to               = "<?php echo $d; ?>"
                                                data-interval         = "20"
                                                data-before           = ""
                                                data-before-style     = "sup"
                                                data-after            = ""
                                                data-after-style      = "sub"
                                            ><?php echo $d; ?>
                                        </span>
                                    </h4>
                                    <h3 class="ttm-fid-title"><span >TOTAL FOOD ITEMS</span></h3> <!-- ttm-fid-title -->
                                </div><!-- ttm-fid-contents end -->
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <!-- ttm-fid -->
                            <div class="ttm-fid inside ttm-fid-view-topicon style1"> <!-- ttm-fid-view-topicon -->
                                <div class="ttm-fid-icon-wrapper"><i class="ti ti-shopping-cart-full"></i></div> <!-- ttm-fid-icon -->
                                <div class="ttm-fid-contents"><!-- ttm-fid-contents -->
                                    <h4><span   data-appear-animation = "animateDigits"
                                                data-from             = "<?php echo $c; ?>"
                                                data-to               = "<?php echo $c; ?>"
                                                data-interval         = "20"
                                                data-before           = ""
                                                data-before-style     = "sup"
                                                data-after            = ""
                                                data-after-style      = "sub"
                                            ><?php echo $c; ?>
                                        </span>
                                    </h4>
                                    <h3 class="ttm-fid-title"><span>TOTAL ORDERS</span></h3> <!-- ttm-fid-title -->
                                </div><!-- ttm-fid-contents end -->
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <!-- ttm-fid -->
                            <div class="ttm-fid inside ttm-fid-view-topicon style1"> <!-- ttm-fid-view-topicon -->
                                <div class="ttm-fid-icon-wrapper"><i class="ti-face-smile"></i></div> <!-- ttm-fid-icon -->
                                <div class="ttm-fid-contents"><!-- ttm-fid-contents -->
                                    <h4><span   data-appear-animation = "animateDigits"
                                                data-from             = "<?php echo $e; ?>"
                                                data-to               = "<?php echo $e; ?>"
                                                data-interval         = "20"
                                                data-before           = ""
                                                data-before-style     = "sup"
                                                data-after            = ""
                                                data-after-style      = "sub"
                                            ><?php echo $e; ?>
                                        </span>
                                    </h4>
                                    <h3 class="ttm-fid-title"><span>HAPPY CUSTOMERS</span></h3> <!-- ttm-fid-title -->
                                </div><!-- ttm-fid-contents end -->
                            </div>
                        </div>
                    </div> <!-- row end -->
                </div>
            </section>
          
            <!-- team-member-section -->
            <section class="ttm-row about-section bg-img12 clearfix">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-6 col-sm-12">
                            <div class="">
                                <!-- ttm_single_image-wrapper -->
                                <div class="ttm_single_image-wrapper position-relative">
                                    <img class="img-fluid" src="images/transit.png" alt="">
                                </div><!-- ttm_single_image-wrapper end -->
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-12">
                            <div class="spacing-3 ttm-bgcolor-white box-shadow text-center">
                                <!-- section title -->
                                <div class="section-title clearfix">
                                    <div class="title-header">
                                        <h5>TRANSIT ONE</h5>
                                        <h2 class="title">Eat Street</h2>
                                    </div>
                                </div><!-- section title end -->
                                <p class="mb-30">First, let's go over a brief history -- in 1994, Swarthmore College student Justin Hall is credited with the creation of the first blog, Links.net. At the time, however, it wasn't considered a blog … just a personal homepage.</p>
                                <h6 class="font-w-600 body-font-family mb-20"> A RESTAURANT </h6>
                                <img src="images/author-sign-img-two.png" alt="author-sign-img-two" class="">
                            </div>
                        </div>
                    </div><!-- row end -->
                </div>
            </section>
        </div>
            <!-- team-member-section end -->

        <!--footer start-->
        <footer class="footer widget-footer ttm-bgcolor-darkgrey ttm-bg ttm-bgimage-yes bg-img1 clearfix">
            <div class="ttm-row-wrapper-bg-layer ttm-bg-layer"></div>
            <div class="first-footer ttm-textcolor-white">
                <div class="container">
                    <div class="row align-items-center"><!-- row -->
                        <div class="col-lg-10 offset-lg-1">
                            <div class="text-center" style="margin-top: 10%">
                                <div class="ttm-video-icon ttm-left-video-icon ttm_prettyphoto">
                                    <a class="ttm-icon ttm-icon_element-background-color-skincolor ttm-icon_element-size-md ttm-icon_element-style-round ttm_prettyphoto mb-0" href="https://youtu.be/aUXjhy0gvv0">
                                        <i class="fa fa-play ttm-textcolor"></i>
                                    </a>
                                </div>
                                <!-- section title -->
                                <div class="section-title row-title text-center mt-35 clearfix">
                                    <div class="title-header mb-15">
                                        <h2 class="title">Small View Of Eat Street</h2>
                                    </div>
                                    <p class="mb-0"> Our chief making his debut in his hometown Chicago, crafts a menu drawn from his culinary <br> influences from French technique Asian heritage. His skills are very impressive.</p>
                                    <!-- <a class="ttm-btn ttm-btn-size-md ttm-btn-shape-square ttm-btn-style-border ttm-btn-color-skincolor mt-35 res-991-mt-15" href="#">order now!</a> -->
                                </div><!-- section title end -->
                            </div>
                        </div>
                    </div>
                    
                    <div class="row mt-40">
                        <div class="col-md-12 text-center">
                            <div class="footer-logo-box" style="margin-top: -3%">

                                <div class="footer-logo">
                                    <img id="footer-logo-img" class="img-center" src="images/selvtechlogo1.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="second-footer ttm-textcolor-white position-relative">
                <div class="container"style="margin-top: -3%">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-3 widget-area" style="margin-left: 25%">
                            <div class="widget contact-widget">
                                <h3 class="widget-title">Contact Us</h3>      
                                <ul class="contact-widget-wrapper">
                                    <li><i class="fa fa-map-marker"></i>Transit One Mall Eat Street, NH66-Kalappu Mangalore</li>
                                    <li><i class="fa fa-envelope-o"></i><a href="mailto:info@example.com" target="_blank">selvtechcafe@example.com</a></li>
                                    <li><i class="fa fa-phone"></i>Phone: (+01) 123 456 7890 <br> Support: (+01) 123 789 1200</li>
                                </ul>
                            </div>
                        </div>
                        
                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-3 widget-area">
                            <div class="widget widget_text clearfix">
                                <h3 class="widget-title">Opening Hours</h3>
                                <div class="textwidget widget-text">
                                    <div class="ttm-pricelistbox-wrapper ">
                                        <div class="ttm-timelist-block-wrapper">
                                            <ul class="ttm-timelist-block">
                                                <li><span> Mon - Fri </span> <p class="service-time">09:00am - 05:00pm</p></li>
                                                <li><span> Sat - Sun </span> <p class="service-time">10:00am - 11:00pm</p></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <h3 class="widget-title">Coffee Bar Opening</h3>
                                <div class="textwidget widget-text">
                                    <div class="ttm-pricelistbox-wrapper ">
                                        <div class="ttm-timelist-block-wrapper">
                                            <ul class="ttm-timelist-block">
                                                <li> <span> Mon - Fri </span> <p class="service-time">08:00am - 07:00pm</p></li>
                                                <li> <span> Sat - Sun </span> <p class="service-time">08:00am - 09:00pm</p></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- <div class="col-xs-12 col-sm-12 col-md-6 col-lg-3 widget-area">
                            <div class="widget offer_widget text-center clearfix">
                                <div class="">
                                   <h3 class="font-sz-28 mb-0">GET <span class="ttm-textcolor-skincolor font-sz-47 mlr-10">20%</span> OFF</h3>
                                   <p class="">special offer limited time</p>
                                   <p class="pt-10 font-w-500 mb-5">OFFER CODE: <span class="ttm-textcolor-skincolor"><u>LUV1023</u></span></p>
                                   <p class="font-sz-16 font-w-500 mb-0">Offers Ends 31St Octomber</p>
                               </div>
                            </div>
                        </div> -->
                    </div>
                </div>
            </div>
        </footer>
        <!--footer end-->

        <!--back-to-top start-->
        <a id="totop" href="#top">
            <i class="fa fa-angle-up"></i>
        </a>
        <!--back-to-top end-->

</div><!-- page end -->

    <!-- Javascript -->

    <script src="js/jquery.min.js"></script>
    <script src="js/tether.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.easing.js"></script>
    <script src="js/jquery-waypoints.js"></script>    
    <script src="js/jquery-validate.js"></script> 
    <script src="js/owl.carousel.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/numinate.min6959.js?ver=4.9.3"></script>
    <script src="js/main.js"></script>
    <script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>

    <!-- Javascript end-->

</body>

<!-- Mirrored from themetechmount.com/html/Selvtech/aboutus-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 21 May 2022 09:23:32 GMT -->
</html>