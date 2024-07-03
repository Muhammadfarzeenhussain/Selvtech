 
 <?php
 include('config.php');
 $admin=new Admin();    
 $id=$_GET['search'];

                                            $query=$admin->ret("select * from `item_details` where Pname like '".$id."%'");
                                            $num=$query->rowCount();
                                            if($num>0)
                                            {
                                            if(isset($_GET['category'])){
                             $cat= $_GET['category'];
                             $query=$admin->ret("select * from item_details where itemctg='$cat'");
                         }
 while($row=$query->fetch(PDO::FETCH_ASSOC))
                        {?>
  <div class="col-lg-4 col-md-6 col-sm-6">
                                <div class="product" ><!-- product -->
                                    <div class="product-thumbnail"><!-- product-thumbnail -->
                                        <img class="img-fluid w-100" src="controller/<?php  echo $row['image'];?>" alt="">
                                        <div class="ttm-shop-icon"><!-- ttm-shop-icon -->
              <div class="product-btn"><a href="controller/cart.php?id=<?php echo $row['pid'] ?>" class="add-to-cart-btn"><i class="ti ti-heart"></i></a></div>
                                            <div class="product-btn"><a href="view.php?id=<?php echo $row['pid'] ?>" class="search-btn"><i class="ti ti-search"></i></a></div>
                                            <form>
                                               
                                                  
                                            <div class="product-btn"><a href="controller/cart.php?id=<?php echo $row['pid'];?>" class="cart-btn"><i class="ti ti-shopping-cart"></i></a></div>
                                            </form>
                                        </div>
                                    </div><!-- product-thumbnail end -->
                                    <div class="product-content text-center"><!-- product-content -->
                                        <div  class="product-title"><!-- product-title -->
                                            <h2><a href="view.php"><?php  echo $row['Pname'];?></a></h2>
                                        </div>
                                       
                                        <span class="product-price"><!-- product-Price -->
                                            <span class="product-Price-currencySymbol">₹</span><?php  echo $row['price'];?>
                                        </span>
                                    </div>
                                </div>
                            </div>
                           



                            <?php  }  ?>
<?php }else{?>

<h2>no match found</h2>
<?php
}
?>