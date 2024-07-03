 <!DOCTYPE html>
    <html lang="en">

    <!-- Mirrored from themetechmount.com/html/Selvtech/cart.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 21 May 2022 09:23:53 GMT -->
    <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="HTML5 Template" />
    <meta name="description" content="Selvtech - Restaurant and Cafe HTML Template" />
    <meta name="author" content="https://www.themetechmount.com/" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <title>Selvtech-Cart Restaurant and Cafet</title>

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
                                        <a class="home-link" href="index.php" title="selvtech" rel="cart">
                                            <img id="logo-img" class="img-center" src="images/selvtechlogo1.png" alt="logo-img">
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
                                    <h1 class="title"> Cart</h1>
                                </div><!-- /.page-title-captions -->
                                <!-- <div class="breadcrumb-wrapper">
                                    <span>
                                        <a title="Homepage" href="index.html">Home</a>
                                    </span>
                                    <span class="ttm-bread-sep"><i class="fa fa-angle-right" aria-hidden="true"></i></span>
                                    <span><span>Cart</span></span>
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
                <div class="ttm-row only-one-section ttm-bgcolor-white clearfix">
                    <div class="container">
                        <!-- row -->
                        <div class="row">
                            <div class="col-lg-12">
                                <!-- ttm-cart-form -->
                                <form class="ttm-cart-form" action="#" method="post">
                                    <table class="shop_table shop_table_responsive">
                                        <thead>
                                            <tr>
                                                <th class="product-remove">&nbsp;</th>
                                                <th class="product-thumbnail">&nbsp;</th>
                                                <th class="product-name">Product</th>
                                                <th class="product-price">Price</th>
                                                <th class="product-quantity">Quantity</th>
                                                <th class="product-quantity"></th>
                                                <th class="product-quantity"></th>
                                                <th class="product-subtotal">Total</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php 
        $sum=0;

                                            $cid=$_SESSION['cid'];
    $admin=new Admin();
                                            $a=$admin->ret("select * from `cart` INNER JOIN `item_details` ON cart.`pid`=item_details.`pid` where `cusid`='$cid'");
                                         $num=$a->rowCount();

                  if($num>0){                         


    while($row=$a->fetch(PDO::FETCH_ASSOC)){

$rid=$row['rid'];
        ?>


                                            <tr class="cart_item">
                                                <td class="product-remove">
                                                    <a href="controller/cartdel.php?cartid=<?php echo $row['cid']?>" class="remove" onclick="return confirm('Are you sure?')">×</a>
                                                </td>
                                                <td class="product-thumbnail">
                                                    <a href="product-details.html">
                                                        <img class="img-fluid" src="controller/<?php echo $row['image'];?>"  alt="product-img" style="width: 40px; height: 40px">
                                                    </a>
                                                </td>
                                                <td class="product-name" data-title="Product">
                                                    <a href="product-details.html"><?php echo $row['Pname'];?> </a>
                                                </td>
                                                <td class="product-price" data-title="Price">
                                                    <span class="Price-amount">
                                                        <span class="Price-currencySymbol">Rs</span><?php echo $row['price'];?> 
                                                    </span>
                                                </td>
                                                 <td class="product-quantity">
                                                <span class="quantity buttons_added">
                                                    <?php if ($row['cquantity'] > 1) { ?>
             <input onclick="decrement(<?php echo $row['cid']; ?>,<?php echo $row['pid']?>)" type="button" value="-" class="" class="btn btn-primary minus" Style="background-color: #121d27;width: 1px;">
                                                    <?php } ?>
                                                    <?php echo $row['cquantity'] ?> <!-- showing quantity-->
       <?php if($row['cquantity']>0 && $row['quantity']>1){?>
                                                    <input onclick="increment(<?php echo $row['cid']; ?>,<?php echo $row['pid']?>)" type="button" value="+" class="plus" Style="background-color: #121d27;">
                                                    <?php } ?>


                                                </span>
                                            </td>

                                            <!-- remove item -->
                                            <!-- <td class="product-remove"><input onclick="remove(<?php echo $row['cid']; ?>)" type="button" value="x" ></td> -->
                                            <td class="product-remove"><a onclick="remove(<?php echo $row['cid']; ?>,<?php echo $row['cquantity'] ?>,<?php echo $row['pid'] ?>,<?php echo $row['pqty'] ?>)">x</a></td>
                                                <td class="product-quantity" data-title="Quantity">
                                                    <div class="quantity">
                                                    </div>
                                                </td>
                                                <td class="product-subtotal" data-title="Total">
                                                    <span class="Price-amount">
                                                        <span class="Price-currencySymbol">Rs</span>
                                                        <?php 
    $t=$row['price']*$row['cquantity'];
    $sum=$sum+$t;

    echo $t;?>
                                                        
                                                    </span>
                                                </td>
                                            </tr>





                                            <?php 
                                            } ?>
                                        </tbody>
                                    </table>
                                           
                                           
                                         <!--    <tr>
                                                <td colspan="6" class="actions">
                                                    <div class="coupon">
                                                        <input type="text" name="coupon_code" class="form-control" value="" placeholder="Coupon code">
                                                        <button type="submit" class="button ttm-btn ttm-btn-bgcolor-darkgrey" name="apply_coupon" value="Apply coupon">Apply coupon</button>
                                                    </div>
                                                    <button type="submit" class="cart_button button ttm-btn ttm-btn-bgcolor-darkgrey" name="update_cart" value="Update cart" disabled="disabled">Update cart</button>
                                                </td>
                                            </tr> -->
                                        <!-- </tbody>
                                    </table> -->
                                </form><!-- ttm-cart-form end -->
                                <!-- cart-collaterals -->
                                <div class="cart-collaterals">
                                    <div class="cart_totals ">
                                        <h2>Cart totals</h2>
                                        <table class="shop_table shop_table_responsive">
                                            <tbody>
                                                <tr class="cart-subtotal">
                                                    <th>Subtotal</th>
                                                    <td data-title="Subtotal">
                                                        <span class="Price-amount">
                                                            <span class="Price-currencySymbol"></span><?php echo $sum; ?>
                                                        </span>
                                                    </td>
                                                </tr>
                                                
                                                <tr class="order-total">
                                                    <th>Total</th>
                                                    <td data-title="Total">
                                                        <strong><span class="Price-amount">
                                                            <span class="Price-currencySymbol"></span>
                                                            <?php echo $sum; ?> 


                                                            </span>
                                                        </strong>
                                                    </td>
                                                </tr>

                                        <?php } else{ ?>

<tr>
<h2>CART IS EMPTY</h2></td></tr>
<?php } ?>
                                            </tbody>

                                        </table>
                                        <?php 

$rt=$admin->ret("select * from cart where cusid='$cid'");
$num3=$rt->rowCount();
if($num>0){
                                        ?>
                                        <div class="proceed-to-checkout" onclick="return confirm('Are you sure?')">
                                            <a href="razorpay/pay.php?grandtotal=<?php echo $sum; ?>&rid=<?php echo $rid ?>" class="button ttm-btn ttm-btn-bgcolor-darkgrey checkout-button" >place order</a>
                                           
                                    </div>
                                <?php } else{?>
                                    <div class="proceed-to-checkout">
                                            <a href="#" class="button ttm-btn ttm-btn-bgcolor-darkgrey checkout-button">Cart is empty</a>
                                           
                                    </div>

                                <?php } ?>
                                          <script>
                function increment(vcart_id,pid) { //getting from onclick function -can use any variable
                   window.location.href='controller/cartjs.php?id='+vcart_id+'&pid='+pid;
               // window.location.href='menu.php?category='+cat;
           }


            </script>

            <!--ajax decrement -->
            <script>
                function decrement(vcart_id,pid) { //getting from onclick function -can use any variable

                   window.location.href='controller/cartjsdec.php?id='+vcart_id+'&pid='+pid;
                 
                }
            </script>
                                </div><!-- cart-collaterals end-->
                            </div>
                        </div><!-- row end -->
                    </div>
                </div>
                <!-- sidebar end -->

            </div><!--site-main end-->

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
            footer end-->

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

    <!-- Mirrored from themetechmount.com/html/Selvtech/cart.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 21 May 2022 09:23:54 GMT -->
    </html>