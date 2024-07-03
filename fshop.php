
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from themetechmount.com/html/zester/shop.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 21 May 2022 09:23:50 GMT -->
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="keywords" content="HTML5 Template" />
<meta name="description" content="Zester - Restaurant and Cafe HTML Template" />
<meta name="author" content="https://www.themetechmount.com/" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
<title>selvetech</title>

<!-- favicon icon -->
<link rel="shortcut icon" href="images/favicon.png" />

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
    <div class="page sidebar-true">

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
                                    <a class="home-link" href="index.html" title="Zester" rel="home">
                                        <img id="logo-img" class="img-center" src="images/logo-white.png" alt="logo-img">
                                    </a>
                                </div><!-- site-branding end -->
                                <!--site-navigation -->
                                <?php include('nav.php');?><!-- site-navigation end-->
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
                                <h1 class="title"> Products</h1>
                            </div><!-- /.page-title-captions -->
                            <div class="breadcrumb-wrapper">
                                <span>
                                    <a title="Homepage" href="index.php">Home</a>
                                </span>
                                <span class="ttm-bread-sep"><i class="fa fa-angle-right" aria-hidden="true"></i></span>
                                <span><span>Shop</span></span>
                            </div>
                        </div>
                    </div><!-- /.col-md-12 -->  
                </div><!-- /.row -->  
            </div><!-- /.container -->
        </div>
        <!-- page-title END-->


        <!--site-main start-->
        <div class="site-main">

            <!-- sidebar -->
        <div class="sidebar ttm-sidebar-right ttm-bgcolor-white clearfix">
            <div class="container">
                <!-- row -->
                <div class="row">
                    <div class="col-lg-8 content-area">
                        <div class="row">
                            <div class="col-md-12">
                                <!-- <p class="products-result-count">Showing 1–9 of 14 results</p> -->
                              <!--   <form class="products-ordering float-sm-right" method="get">
                                    <div class="form-group mb-30">
                                        <select name="orderby" class="form-control">
                                            <option selected="selected">Default sorting</option>
                                            <option>Sort by popularity</option>
                                            <option>Sort by average rating</option>
                                            <option>Sort by newness</option>
                                            <option>Sort by price: low to high</option>
                                            <option>Sort by price: high to low</option>
                                        </select>
                                    </div>
                                </form> -->
                            </div>
                        </div>
                        <div class="row" id="demo" >
                             <?php
                                            $query=$admin->ret("select * from `item_details`");
                                            if(isset($_GET['category'])){
                             $cat= $_GET['category'];
                             $query=$admin->ret("select * from item_details where pcategory='$cat'");
                         }
 while($row=$query->fetch(PDO::FETCH_ASSOC))
                        {?>
                            
                       
                            
                        
                        

                       
                             <div class="col-lg-4 col-md-6 col-sm-6"id="demo">
                                <div class="product" ><!-- product -->
                                    <div class="product-thumbnail"><!-- product-thumbnail -->
                                        <img class="img-fluid w-100" src="admin/img/<?php  echo $row['pimage'];?>" alt="">
                                        <div class="ttm-shop-icon"><!-- ttm-shop-icon -->
              <div class="product-btn"><a href="admin/controller/cart.php?id=<?php echo $row['pid'] ?>" class="add-to-cart-btn"><i class="ti ti-heart"></i></a></div>
                                            <div class="product-btn"><a href="view.php?id=<?php echo $row['pid'] ?>" class="search-btn"><i class="ti ti-search"></i></a></div>
                                            <form>
                                               
                                                  
                                            <div class="product-btn"><a href="admin/controller/cart.php?id=<?php echo $row['pid'];?>" class="cart-btn"><i class="ti ti-shopping-cart"></i></a></div>
                                            </form>
                                        </div>
                                    </div><!-- product-thumbnail end -->
                                    <div class="product-content text-center"><!-- product-content -->
                                        <div  class="product-title"><!-- product-title -->
                                            <h2><a href="view.php"><?php  echo $row['name'];?></a></h2>
                                        </div>
                                       
                                        <span class="product-price"><!-- product-Price -->
                                            <span class="product-Price-currencySymbol">₹</span><?php  echo $row['price'];?>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <?php 
                        }
                        ?>
                            
                         
                           
                          
                          
                            
                         
                        </div>
                     <!--    <div class="row">
                            <div class="col-md-12 text-center">
                                <div class="ttm-pagination">
                                    <span class="page-numbers current">1</span>
                                    <a class="page-numbers" href="#">2</a>
                                    <a class="next page-numbers" href="#"><i class="ti ti-arrow-right"></i></a>
                                </div>
                            </div>
                        </div> -->
                    </div>
                    <div class="col-lg-4 widget-area sidebar-right">
                        <aside class="widget widget-search">
                            <form role="search" method="get" class="search-form  box-shadow" action="#">
                                <div class="form-group">
                                    <i class=""></i>
                                    <input type="search" class="form-control" name="search" placeholder="Search Product …" value="" id="search" name="s" onkeydown="search1(this.value)">
                                </div>
                            </form>
                        </aside>
                         <script type="text/javascript">
                        function search1(search) {
                            // alert('hyy');
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
     document.getElementById("demo").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET", "search.php?search="+search, true);
  xhttp.send();
}
                    </script>
                        <aside class="widget widget-categories">
                            <h3 class="widget-title">Product Categories</h3>
                            <ul>
                                <?php 
                                    $a=$admin->ret("select * from menu");
                                    while($r=$a->fetch(PDO::FETCH_ASSOC)){

                                ?>
                                <li><a href="shop.php?category=<?php  echo $r['mname'];?>"><?php  echo $r['mname'];?></a></li>
                            <?php }?>
                              
                            </ul>
                        </aside>
                        <aside class="widget products widget-top-rated-products">
                            <h3 class="widget-title">Popular Dishes</h3>
                            <ul class="">
                                 <?php 
                                    $m=$admin->ret("select * from product order by `pid` DESC limit 2");
                                    while($t=$m->fetch(PDO::FETCH_ASSOC)){

                                ?>

                                <li class="clearfix">
                                    <a href="#"><img src="admin/img/<?php  echo $t['pimage'];?>" alt="">
                                        <span class="product-title"><?php echo $t['Pname'] ?></span>
                                    </a>
                                    <div class="ttm-ratting-star"><!-- ratting-star -->
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <span class="product-Price-amount amount"><span class="product-Price-currencySymbol"></span><?php  echo $t['pprice'];?></span>
                                </li>
                                <?php } ?>
                            </ul>
                        </aside>
                        <aside class="widget widget_media_image">
                            <a href="#"><img class="img-fluid" src="images/widget-banner.jpg" alt="widget-banner"></a>
                        </aside>
                     
                    </div>
                </div><!-- row end -->
            </div>
        </div>
        <!-- sidebar end -->


        </div><!--site-main end-->


        <!--footer start-->
        <footer class="footer widget-footer ttm-bgcolor-darkgrey ttm-bg ttm-bgimage-yes bg-img1 clearfix">
            <div class="ttm-row-wrapper-bg-layer ttm-bg-layer"></div>
            <div class="first-footer ttm-textcolor-white">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="ttm-footer-cta-wrapper ttm-textcolor-white ttm-bgcolor-skincolor">
                                <div class="row">
                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 widget-area">
                                        <div class="newsletter-box">
                                            <h5>Subscribe Our Newsletter</h5>
                                            <p>Keep your newsletter consistent by cooking up recurring topics, updated with new info in each.</p>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 widget-area">
                                        <form id="subscribe-form" class="newsletter-form" method="post" action="#" data-mailchimp="true">
                                            <div class="mailchimp-inputbox clearfix" id="subscribe-content"> 
                                                <i class="fa fa-envelope-o"></i>
                                                <p><input type="email" name="email" placeholder="Your Email Address.." required=""></p>
                                                <p><input type="submit" value="Subscribe" class="ttm-btn ttm-btn-size-md ttm-btn-shape-round ttm-btn-bgcolor-darkgrey"></p>
                                            </div>
                                            <div id="subscribe-msg"></div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row mt-40">
                        <div class="col-md-12 text-center">
                            <div class="footer-logo-box">
                                <div class="footer-logo">
                                    <img id="footer-logo-img" class="img-center" src="images/footer-logo.png" alt="">
                                </div>
                                <p class="mb-0">Japanese ambience with Tatami room for dining, a village like a setup inside the dining hall, bar! Experienced staff waiting to give you that unique dining experience.</p>
                                <br>
                                <div class="social-icons circle social-hover">
                                    <ul class="list-inline">
                                        <li class="social-facebook"><a class="tooltip-top" target="_blank" href="#" data-tooltip="Facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                        <li class="social-twitter"><a class="tooltip-top" target="_blank" href="#" data-tooltip="Twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                        <li class="social-flickr"><a class=" tooltip-top" target="_blank" href="#" data-tooltip="flickr"><i class="fa fa-flickr" aria-hidden="true"></i></a></li>
                                        <li class="social-linkedin"><a class=" tooltip-top" target="_blank" href="#" data-tooltip="LinkedIn"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="second-footer ttm-textcolor-white position-relative">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-3 widget-area">
                            <div class="widget contact-widget">
                                <h3 class="widget-title">Contact Us</h3>      
                                <ul class="contact-widget-wrapper">
                                    <li><i class="fa fa-map-marker"></i>Themeforest, Envanto HQ 24 Fifth st., Los Angeles, USA</li>
                                    <li><i class="fa fa-envelope-o"></i><a href="mailto:info@example.com" target="_blank">info@example.com</a></li>
                                    <li><i class="fa fa-phone"></i>Phone: (+01) 123 456 7890 <br> Support: (+01) 123 789 1200</li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-3 widget-area">
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
                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-3 widget-area">
                            <div class="widget offer_widget text-center clearfix">
                                <div class="">
                                   <h3 class="font-sz-28 mb-0">GET <span class="ttm-textcolor-skincolor font-sz-47 mlr-10">20%</span> OFF</h3>
                                   <p class="">special offer limited time</p>
                                   <p class="pt-10 font-w-500 mb-5">OFFER CODE: <span class="ttm-textcolor-skincolor"><u>LUV1023</u></span></p>
                                   <p class="font-sz-16 font-w-500 mb-0">Offers Ends 31St Octomber</p>
                               </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bottom-footer-text ttm-bgcolor-darkgrey ttm-textcolor-white">
                <div class="container">
                    <div class="row copyright">
                        <div class="col-md-12">
                            <div class="">
                                <span>Copyright © 2019 Zester HTML Template by <a href="https://themetechmount.com/">ThemetechMount</a>.</span>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <ul id="menu-footer-menu" class="footer-nav-menu">
                                <li><a href="#">About Us</a></li>
                                <li><a href="#">Services</a></li>
                                <li><a href="#">Privacy</a></li>
                            </ul>
                        </div>
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

    <!-- Javascript end-->

</body>

<!-- Mirrored from themetechmount.com/html/zester/shop.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 21 May 2022 09:23:53 GMT -->
</html>