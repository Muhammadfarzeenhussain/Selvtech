 <?php 
include('config.php');
$admin=new Admin();
// if(isset($_SESSION['cid']))
// {
// $id=$_SESSION['cid'];

// }


 ?>


 <div id="site-navigation" class="site-navigation">
                                    <!-- header-icons -->
                                    <div class="ttm-header-icons ">
                                        <span class="ttm-header-icon ttm-header-cart-link">
                                            <?php
                                            if (isset($_SESSION['cid'])) {?>

                                                <a href="cart.php"><i class="ti ti-shopping-cart"></i>
                                                <span class="number-cart">
                                                    

                                                    <?php
            if(isset($_SESSION['cid']))
            { 
                $cid=$_SESSION['cid'];
                $query=$admin->ret("SELECT count(*) FROM `cart` where `cusid`='$cid'");
       $row=$query->fetch(PDO::FETCH_ASSOC);
          $c=implode($row);
          echo $c;
            }
            
            
        else
            {               
            echo  '0';

            }
            
            ?>
                                                </span>
                                            </a> 
                                            <?php
                                            }else{
                                           
                                         
                                            ?>
                                            <a href="customer/login_front.php"><i class="ti ti-shopping-cart"></i>
                                                <span class="number-cart">0</span>
                                            </a> 


                                            <?php
                                        }
                                        ?>
                                        </span>
                                        <div class="ttm-header-icon ttm-header-search-link">
                                            <div class="ttm-search-overlay">
                                                <div class="ttm-bg-layer"></div>
                                                <div class="ttm-icon-close"></div>
                                                <div class="ttm-search-outer">
                                                    <div class="ttm-form-title">Hi, How Can We Help You?</div>
                                                    <form method="get" class="ttm-site-searchform" action="#">
                                                        <input type="search" class="field searchform-s" name="s" placeholder="Type Word Then Enter...">
                                                        <button type="submit">
                                                            <i class="ti ti-search"></i>
                                                        </button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- header-icons end -->
                                   <!--  <div class="header-btn">
                                        <a class="ttm-btn ttm-btn-size-md ttm-btn-shape-square ttm-btn-style-border ttm-btn-color-skincolor" href="#">ORDER ONLINE</a>
                                    </div> -->
                                    <div class="ttm-menu-toggle">
                                        <input type="checkbox" id="menu-toggle-form" />
                                        <label for="menu-toggle-form" class="ttm-menu-toggle-block">
                                            <span class="toggle-block toggle-blocks-1"></span>
                                            <span class="toggle-block toggle-blocks-2"></span>
                                            <span class="toggle-block toggle-blocks-3"></span>
                                        </label>
                                    </div>
                                   <nav id="menu" class="menu">
                                        <ul class="dropdown">
                                            <li class="active"><a href="index.php">Home</a></li>
                                            <li><a href="about.php">About Us</a></li>
                                            <li><a href="resto.php">Our Restaurants</a></li>
                                            <li><a href="menu.php">Menu</a></li>
                                            <li><a href="img.php">Gallery</a></li>
                                            <li><a href="blog.php">Blog</a></li>
                                                
                                            
                                    <?php 
                                    if (!isset($_SESSION['cid'])) { ?>
                                     <li><a href="customer/login_front.php">Login </a></li>       
                                        <?php    } else { ?>
                                             <li><a href="order.php">Orders</a></li>
                                                 <li><a href="customer/logout.php" onclick="return confirm('Are you sure?')">Logout </a></li>
                                                 <?php
                                             }
                                            ?>
                                             
                                        </ul>
                                    </nav> 
                                </div>











