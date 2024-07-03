
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from themetechmount.com/html/zester/menu-1.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 21 May 2022 09:23:33 GMT -->
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="keywords" content="HTML5 Template" />
<meta name="description" content="Zester - Restaurant and Cafe HTML Template" />
<meta name="author" content="https://www.themetechmount.com/" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
<title>Selvtech - Menu Restaurant and Cafe</title>

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


<script type="text/javascript">
    function hy(cat)
    {
       window.location.href='menu.php?category='+cat;
    }
</script>
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
                                    <a class="home-link" href="index.php" title="selvtech" rel="home">
                                        <img id="logo-img" class="img-center" src="images/selvtechlogo1.png" alt="logo-img">
                                    </a>
                                </div><!-- site-branding end -->
                                <!--site-navigation -->
                             
                               <?php  include('nav.php');?><!-- site-navigation end-->
                            </div>
                        </div>
                    </div>
                </div><!-- ttm-stickable-header-w end-->
            </div><!--ttm-header-wrap end -->
        </header><!--header end-->

        <!-- page-title -->
        <div class="ttm-page-title-row">
            <div class="container">
                <div class="row">
                    <div class="col-md-12"> 
                        <div class="title-box">
                            <div class="page-title-heading">
                                <h1 class="title">Menu</h1>
                            </div><!-- /.page-title-captions -->
                            <!-- <div class="breadcrumb-wrapper">
                                <span>
                                    <a title="Homepage" href="index.php">Home</a>
                                </span>
                                <span class="ttm-bread-sep"><i class="fa fa-angle-right" aria-hidden="true"></i></span>
                                <span><span>Menu 1</span></span>
                            </div> -->
                        </div>
                    </div><!-- /.col-md-12 -->  
                </div><!-- /.row -->  
            </div><!-- /.container -->
        </div>
        <!-- page-title END-->


        <!--site-main start-->
        <div class="site-main">

            <!-- menu-tab-section -->
            <section class="ttm-row menu-tab-section ttm-bg ttm-bgimage-yes ttm-bgcolor-grey clearfix">
                <div class="container">
                    <div class="row"><!-- row -->
                        <div class="col-md-12">
                            <!-- section title -->
                            <div class="section-title text-center clearfix">
                                <div class="title-header">
                                    <h5>Food at first sight</h5>
                                    <h2 class="title">Our Restaurant Menu</h2>
                                </div>
                                <div class="heading-seperator">
                                    <span></span>
                                </div>
                            </div><!-- section title end -->
                        </div>
                    </div><!-- row end-->
                    <div class="row"><!-- row -->
                        <div class="col-lg-12">
                            <div class="ttm-tabs ttm-tab-style-classic style1"><!-- ttm-tabs -->
                                <ul class="tabs mb-20 w-100"><!-- flat-tabs -->
                                    <li class="tab" onclick="hy('Breakfast')"><a href="" style="background-color: #ffb301; "><i class="flaticon-breakfast" style="color: #fff"></i> <span style="color: #fff">Breakfast</span> </a></li>
                                    <li class="tab"onclick="hy('Lunch')"><a href="" style="background-color: #ffb301"><i class="flaticon-fork" style="color: #fff"></i> <span style="color: #fff">Lunch</span> </a></li>
                                    <li class="tab"onclick="hy('Dinner')"><a href="" style="background-color: #ffb301"><i class="flaticon-dish" style="color: #fff"></i> <span style="color: #fff">Dinner</span> </a></li>
                                    <li class="tab"onclick="hy('Drink')"><a href="" style="background-color: #ffb301"><i class="flaticon-cheers-1" style="color: #fff"></i> <span style="color: #fff">Drink</span> </a></li>
                                    <li class="tab"onclick="hy('Snacks')"><a href="" style="background-color: #ffb301"><i class="flaticon-ice-cream" style="color: #fff"></i> <span style="color: #fff">Snacks</span> </a></li>
                                </ul><!-- tab end -->
                                <div class="content-tab w-100"><!-- content-tab -->
                                    <!-- content-inner -->
                                    <div class="content-inner active">
                                        <div class="row"><!-- row -->


                                            <?php
                                            $query=$admin->ret("select * from `menu_details`");
                                            if(isset($_GET['category'])){
                             $cat= $_GET['category'];
                            if($cat=="Breakfast"){
                        $query=$admin->ret("select * from `menu_details` where `category`='$cat'");

                                
                            }
                            else if($cat=="Dinner"){
                           $query=$admin->ret("select * from `menu_details` where `category`='$cat'");

                            }
                            else if($cat=="Snacks"){
                    $query=$admin->ret("select * from `menu_details` where `category`='$cat'");

                            }
                            else if($cat=="Lunch"){
                 $query=$admin->ret("select * from `menu_details` where `category`='$cat'");

                            }elseif ($cat=="Drink") {
                                $query=$admin->ret("select * from `menu_details` where `category`='$cat'");


                            }
                            //echo $query;
                            
                        }
                        

                        while($row=$query->fetch(PDO::FETCH_ASSOC))
                        {

                                            ?>
                                            <div class="col-md-12 col-lg-6">
                                                <div class="row no-gutters featured-imagebox featured-imagebox-menu left-image">
                                                    <div class="col-md-4 col-sm-4">
                                                        <div class="featured-thumbnail">
                                   <img class="img-fluid" src="controller/<?php echo $row['mimage'];?>" style="height:120px;width:120px" alt="">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-8 col-sm-8">
                                                        <div class="featured-content">
                                                            <div class="featured-title">
                                                                <h5><?php echo $row['name'];?></h5>
                                                            </div>
                                                             
                                                            <div class="ttm-dish-price"style="border-color: #fff">
                                                                <span></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                         <!--  -->
                                          <?php }?>
                                           
                                          
                                           
                                         
                                            
                                        </div><!-- row end -->
                                    </div><!-- content-inner -->
                                    <!-- content-inner -->
                                    <!-- content-inner -->
                                    <!-- content-inner -->
                                   <!-- content-inner -->
                                    <!-- content-inner -->
                                  <!-- content-inner -->
                                    <!-- content-inner -->
                                   <!-- content-inner -->
                                </div>
                            </div>
                        </div>
                    </div><!-- row end-->
                </div>
            </section>
            <!-- menu-tab-section -->

        <!--footer start-->
        <!--footer start-->
         <footer class="footer widget-footer ttm-bgcolor-darkgrey ttm-bg ttm-bgimage-yes bg-img1 clearfix">
            <div class="ttm-row-wrapper-bg-layer ttm-bg-layer"></div>
            <div class="first-footer ttm-textcolor-white">
                
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="ttm-footer-cta-wrapper ttm-textcolor-white ttm-bgcolor-skincolor" style="margin-top: -16px">
                                <!-- <h1 style="text-align: center; font-family: sans-serif;">Selvtech Restaurant &amp; Cafe</h1> -->
                                <div class="row">
                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 widget-area">
                                        <div class="newsletter-box">
                                            
                                            <!-- <p>Keep your newsletter consistent by cooking up recurring topics, updated with new info in each.</p> -->
                                        </div>
                                    </div>
                                    <!-- <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 widget-area">
                                        <form id="subscribe-form" class="newsletter-form" method="post" action="#" data-mailchimp="true">
                                            <div class="mailchimp-inputbox clearfix" id="subscribe-content"> 
                                                <i class="fa fa-envelope-o"></i>
                                                <p><input type="email" name="email" placeholder="Your Email Address.." required=""></p>
                                                <p><input type="submit" value="Subscribe" class="ttm-btn ttm-btn-size-md ttm-btn-shape-round ttm-btn-bgcolor-darkgrey"></p>
                                            </div>
                                            <div id="subscribe-msg"></div>
                                        </form>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-40">
                        <div class="col-md-12 text-center">
                            <div class="footer-logo-box">
                                <div class="footer-logo">
                                    <img id="footer-logo-img" class="img-center" src="images/selvtechlogo1.png" alt="">
                                </div>
                                <p class="mb-0">Japanese ambience with Tatami room for dining, a village like a setup inside the dining hall, bar! Experienced staff waiting to give you that unique dining experience.</p>
                                <!-- <br> -->
                                <!-- <div class="social-icons circle social-hover">
                                    <ul class="list-inline">
                                        <li class="social-facebook"><a class="tooltip-top" target="_blank" href="#" data-tooltip="Facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                        <li class="social-twitter"><a class="tooltip-top" target="_blank" href="#" data-tooltip="Twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                        <li class="social-flickr"><a class=" tooltip-top" target="_blank" href="#" data-tooltip="flickr"><i class="fa fa-flickr" aria-hidden="true"></i></a></li>
                                        <li class="social-linkedin"><a class=" tooltip-top" target="_blank" href="#" data-tooltip="LinkedIn"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                    </ul>
                                </div> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="second-footer ttm-textcolor-white position-relative">
                <div class="container" style="margin-top: -8%">
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
                        <!-- <div class="col-xs-12 col-sm-12 col-md-6 col-lg-3 widget-area">
                            <div class="widget link-widget clearfix">
                               <h3 class="widget-title">Our Services</h3>
                                <ul id="menu-footer-services">
                                    <li><a href="#">Fine Dining & Concierge</a></li>
                                    <li><a href="#">Quick Counter Service</a></li>
                                    <li><a href="#">Banquet Table Service</a></li>
                                    <li><a href="#">Family Style Service</a></li>
                                    <li><a href="#">Quick Delivery Service</a></li>
                                    <li><a href="#">Buffet Table Service</a></li>
                                    <li><a href="#">Traditional Counter Service</a></li>
                                </ul>
                            </div>
                        </div> -->
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
        <!--footer 
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

    <!-- Javascript end-->

</body>

<!-- Mirrored from themetechmount.com/html/zester/menu-1.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 21 May 2022 09:23:33 GMT -->
</html>