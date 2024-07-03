
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from themetechmount.com/html/selvtech/checkout.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 21 May 2022 09:23:54 GMT -->
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="keywords" content="HTML5 Template" />
<meta name="description" content="FoodYard - Restaurant and Cafe HTML Template" />
<meta name="author" content="https://www.themetechmount.com/" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
<title>Selvtech-Track Restaurant and Cafe</title>

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
                                <?php 



include('nav.php');
$cid=$_SESSION['cid'];
$id=$_GET['id'];
                            ?><!-- site-navigation end-->
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
                                <h1 class="title"> Your Orders</h1>
                            </div><!-- /.page-title-captions -->
                            <!-- <div class="breadcrumb-wrapper">
                                <span>
                                    <a title="Homepage" href="index.php">Home</a>
                                </span>
                                <span class="ttm-bread-sep"><i class="fa fa-angle-right" aria-hidden="true"></i></span> -->
                                <!-- <span><span>Check Out</span></span> -->
                            <!-- </div> -->
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
                            <div class="coupon_toggle">
                               
                            </div>
                               
                               
                                <div class="col-lg-12">
                                    <h3 id="order_review_heading" align="center">Your order Details</h3>
                                    <div id="order_review" class="checkout-review-order">
                                        <table class="shop_table checkout-review-order-table">
                                            <thead style="text-align: center;">
                                                <tr class="border-0">
                                                        <th class="text-dark">#</th>
                                                        <th class="text-dark">Order id</th>
                                                        <th class="text-dark">User name</th>
                                                        <th class="text-dark">Food </th>
                                                        <th class="text-dark">Food name</th>
                                                        <th class="text-dark">Quantity</th>
                                                        <th class="text-dark">Price</th>
                                                        <!-- <th class="text-primary">assaign</th> -->
                                                        <!-- <th class="text-primary">view</th> -->   
                                                    </tr>
                                            </thead>
                                            <tbody>
                     <?php 
  $result=$admin->ret("select * from `order_det` inner join `item_details` on item_details.pid=order_det.P_ID inner join customer on order_det.C_ID=customer.cus_id where order_det.O_ID='$id' ");
                        while($r=$result->fetch(PDO::FETCH_ASSOC))
                        {   ?>


                                                
                                                <tr>
                                <td><center></center></td>
                                <td><center><?php echo $r['O_ID']; ?></center></td>
                                <td><center><?php echo $r['username']; ?></center></td>
                                <td><img src="controller/<?php echo $r['image'];  ?>" style="border-radius: 50%;width: 50px; height: 50px;"></td>
                                <td><center><?php echo $r['Pname']; ?></center></td>=
                                <td><center><?php echo $r['Del_Qty']; ?></center></td>
                                <td><center><?php echo $r['price']; ?></center></td>
                                
                                
                              
                          
                    
                    </tr>
                                            <?php } ?>
                                                
                                            </tbody>
                                            <tfoot>
                                               
                                                
                                            </tfoot>
                                        </table>
                                       
                                                 <div class="card single-accordion">
                                

                               

                                   

                                
                            </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            
                        </div>
                    </div><!-- row end -->
                </div>
            </div>
            <!-- sidebar end -->

        </div><!--site-main end-->

        <!--footer start-->
        
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

<!-- Mirrored from themetechmount.com/html/selvtech/checkout.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 21 May 2022 09:23:54 GMT -->
</html>