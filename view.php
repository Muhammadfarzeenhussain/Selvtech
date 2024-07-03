
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from themetechmount.com/html/Selvtech/product-details.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 21 May 2022 09:23:53 GMT -->
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="keywords" content="HTML5 Template" />
<meta name="description" content="Selvtech - Restaurant and Cafe HTML Template" />
<meta name="author" content="https://www.themetechmount.com/" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
<title>Selvtech-Product details Restaurant and Cafe</title>

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


<style type="text/css">
    .fade-out {
  animation: fadeOut ease 8s;
  -webkit-animation: fadeOut ease 8s;
  -moz-animation: fadeOut ease 8s;
  -o-animation: fadeOut ease 8s;
  -ms-animation: fadeOut ease 8s;
}
@keyframes fadeOut {
  0% {
    opacity:1;
  }
  100% {
    opacity:0;
  }
}

@-moz-keyframes fadeOut {
  0% {
    opacity:1;
  }
  100% {
    opacity:0;
  }
}

@-webkit-keyframes fadeOut {
  0% {
    opacity:1;
  }
  100% {
    opacity:0;
  }
}

@-o-keyframes fadeOut {
  0% {
    opacity:1;
  }
  100% {
    opacity:0;
  }
}

@-ms-keyframes fadeOut {
  0% {
    opacity:1;
  }
  100% {
    opacity:0;
}
</style>

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
                                    <a class="home-link" href="index.php" title="selvtech" rel="home">
                                      <img class="img-fluid" src="images/selvtechlogo1.png" alt="Theme-Logo" />
                                    </a>
                                </div><!-- site-branding end -->
                                <!--site-navigation -->
                               <?php include('nav.php');


                           $admin=new Admin();
$id=$_GET['id'];
$rid=$_GET['rid'];
$r=$admin->ret("select * from item_details where pid='$id' AND rid='$rid'");
$t=$r->fetch(PDO::FETCH_ASSOC); ?><!-- site-navigation end-->
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
                                <h1 class="title"> Products Details</h1>
                            </div><!-- /.page-title-captions -->
                            <!-- <div class="breadcrumb-wrapper">
                                <span>
                                    <a title="Homepage" href="index.php">Home</a>
                                </span>
                                <span class="ttm-bread-sep"><i class="fa fa-angle-right" aria-hidden="true"></i></span>
                                <span><span>product details</span></span>
                            </div> -->
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
                        <div class="ttm-single-product-details product">
                            <div class="ttm-single-product-info clearfix">
                                <div class="product-gallery images">
                                    <figure class="ttm-product-gallery__wrapper">
                                         <?php if($t['quantity']==0)
                                      {?>



                                        <div class="product-gallery__image fade-out">
                                            <img class="img-fluid" src="controller/<?php echo $t['image']?>" alt="product-img" style="height: 400px; width:460">
                                        </div>
<?php }else{ ?>
    <div class="product-gallery__image">
                                            <img class="img-fluid" src="controller/<?php echo $t['image']?>" alt="product-img" style="height: 400px; width:460">
                                        </div>
                                    <?php } ?>



                                       <!--  <div class="product-gallery__image">
                                            <img class="img-fluid" src="images/product/product-two.jpg" alt="product-img">
                                        </div>
                                        <div class="product-gallery__image">
                                            <img class="img-fluid" src="images/product/product-eight.jpg" alt="product-img">
                                        </div> -->
                                       <!--  <div class="product-gallery__image">
                                            <img class="img-fluid" src="images/product/product-one.jpg" alt="product-img">
                                        </div> -->
                                    </figure>
                                </div>
                                <div class="summary entry-summary">
                                    <h3 class="singel_product_title"><?php echo $t['Pname']?></h3>
                                    <!--  -->
                                    <p class="price">
                                        <span class="Price-amount amount">
                                            <span class="Price-currencySymbol">₹</span><?php echo $t['price']?>
                                        </span>
                                    </p>
                                    <div class="product-details__short-description">
                                        <p><?php echo $t['description']?></p>
                                    </div>
                                    <form class="cart" action="#" method="post" enctype="multipart/form-data">
                                        <div class="quantity"><label class="screen-reader-text">Quantity</label>
                                            <!-- <input type="number" id="quantity" class="form-control qty text" step="1" min="1" max="50" name="quantity" value="1" title="Qty"> -->
                                        </div>


                                         <?php if($t['quantity']==0)
                                      {?>

                                        <a href="#" class="cart_button ttm-btn ttm-btn-size-md ttm-btn-shape-square ttm-btn-bgcolor-darkgrey">Out Of Stock</a>


<?php }else {?>
      <a href="controller/cart.php?rid=<?php echo $rid ?>&id=<?php echo $id;?>" class="cart_button ttm-btn ttm-btn-size-md ttm-btn-shape-square ttm-btn-bgcolor-darkgrey">Add to cart</a>
  <?php } ?>


                                    </form>
                                    <div class="add-to-wishlist yith-wcwl-add-to-wishlist">
                                        <ul>
                                           <!--  <li><a href="#"><i class="fa fa-heart-o"></i>Add to Wishlist</a></li> -->
                                            <!-- <li><a href="#"><i class="fa fa-thumb-tack"></i>Compare</a></li> -->
                                        </ul>
                                    </div>
                                    <div class="product_meta">
                                        <!-- <span class="posted_in">Category:  -->
                                        </span>
                                        <!-- <span class="sku_wrapper">Tag: 
                                            <span class="sku">Maxicon Pie</span> -->
                                        </span>
                                    </div>
                                </div>
                            </div>
                                <div class="ttm-tabs style2 tabs-for-single-products" data-effect="fadeIn">
                                <ul class="tabs clearfix">
                                    <li class="tab active"><a href="#">Description</a></li>
                                       <?php 
    if(!isset($_SESSION['cid'])){?>

                                    <li class=""><a href="#" onclick="fun()">Reviews</a></li>

<?php }else{ ?>
                                    <li class="tab"><a href="#">Reviews</a></li>


                                 <?php }  ?>
                                </ul>
                                <script type="text/javascript">
                                    
                                    function fun()
                                    {
                                        alert('Please login');
                                        window.location.href='customer/login_front.php';
                                    }
                                </script>
                                <div class="content-tab ttm-bgcolor-white">
                                    <!-- content-inner -->
                                    <div class="content-inner">
                                        <h2>Description</h2>
                                        <p><?php echo $t['description']?></p>
                                    </div><!-- content-inner end-->
                                    <!-- content-inner -->
                                   <!-- content-inner end-->
                                    <!-- content-inner -->
                                    <div class="content-inner">
                                        <div id="reviews" class="woocommerce-Reviews">
                                            <div id="comments">
                                                <h2 class="woocommerce-Reviews-title"> review for <span><?php echo $t['Pname']?></span></h2>
                                                <ol class="commentlist">
                                                    <li class="review">
                                                        <?php 
                                                        $q=$admin->ret("select * from feedback");
                                                        while($m=$q->fetch(PDO::FETCH_ASSOC)){?>
                                                        <div class="comment_container">
                                                                <img src="images/admin2.png" style="height: 50px; width: 50px; border-radius: 50%;">
                                                         
                                                            <div class="comment-text" style="background-color: #e0e9f2">
                                                                <p class="meta">
                                                                    <strong class="eview__author"><?php echo $m['cname'];?> </strong><span class="review__dash">–</span>
                                                                    <time class="woocommerce-review__published-date" datetime="2018-11-01T04:58:58+00:00"><?php echo $m['date']?></time>
                                                                </p>
                                                                <div class="description">
                                                                    <p><?php echo $m['content'];?></p>
                                                                </div>
                                                            </div>
                                                        </div><br>
                                                    <?php } ?>
                                                    </li>
                                                </ol>
                                            </div>
                                            <div id="review_form_wrapper">
                                                <div class="comment-respond">
                                                    <span class="comment-reply-title">Add a review
                                                        <small></small>
                                                    </span>
                                                    <form action="controller/feedback.php" method="post" id="commentform" class="comment-form">
                                                      
                                                       
                                                        <div class="row">
                                                            <div class="col-sm-12">
                                                                <div class="form-group">
                                                                    <label>Your review*</label>
                                                                    <textarea name="msg" rows="5" placeholder="" required="required" class="form-control with-grey-bg"></textarea>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-12">
                                                                <div class="form-group">
                                                                    <label>Name*</label>
                                                                    <input name="name" type="text" class="form-control with-grey-bg" placeholder="" required="required">
                                                                    <input type="hidden" name="pid" value="<?php echo $t['pid'];?>">
                                                                     <input type="hidden" name="rid" value="<?php echo $t['rid'];?>">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12">
                                                                <!-- <input id="comment-cookies-consent" name="comment-cookies-consent" type="checkbox" value="yes"> -->
                                                                <label for="comment-cookies-consent">Write a comment for this product and click on Submit button</label>
                                                            </div>
                                                        
                                                            <div class="col-md-12">
                                                             
                                                                                                                           </div>
                                                            <div class="col-md-12">
                                                                <div class="form-group text-left mt-30">
                                                                    <button type="submit" id="submit" class="ttm-btn ttm-btn-size-md ttm-btn-bgcolor-darkgrey" value="">
                                                                        Submit
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                       <!--  -->
                    </div>
                    <div class="col-lg-4 widget-area sidebar-right">
                       
                        <aside class="widget widget-categories">
                            <h3 class="widget-title">Product Categories</h3>
                            <ul>
                               <?php 
                                    $a=$admin->ret("select * from menu_details inner join item_details on menu_details.mid=item_details.mid WHERE item_details.rid='$rid' group by menu_details.name;");
                                    while($e=$a->fetch(PDO::FETCH_ASSOC)){

                                ?>
                                <li><a href="shop.php?rid=<?php echo $rid; ?>&category=<?php  echo $e['name'];?>"><?php  echo $e['name'];?></a></li>
                            <?php }?>
                                
                            </ul>
                        </aside>
                        <aside class="widget products widget-top-rated-products">
                            <h3 class="widget-title">Popular Dishes</h3>
                              <ul class="">
                                 <?php 
                                    $m=$admin->ret("select * from item_details where rid='$rid' order by `pid` DESC limit 2");
                                    while($t=$m->fetch(PDO::FETCH_ASSOC)){

                                ?>

                                <li class="clearfix">
                                    <a href="#"><img src="controller/<?php  echo $t['image'];?>" alt="" style="width: 100px;height: 100px;">
                                        <span class="product-title"><?php echo $t['Pname'] ?></span>
                                    </a>
                                   
                                    <span class="product-Price-amount amount"><span class="product-Price-currencySymbol"></span><?php  echo $t['price'];?></span>
                                </li>
                                <?php } ?>
                            </ul>
                        </aside>
                         <!-- <img class="img-fluid" src="admin/assets/images/selvtechlogo.png" alt="Theme-Logo" width="160px" style="margin-left:10px;width: 192px;height:192px" /> -->
                       
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
                <div class="container">
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

<!-- Mirrored from themetechmount.com/html/Selvtech/product-details.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 21 May 2022 09:23:53 GMT -->
</html>