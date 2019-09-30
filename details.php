<?php 

    $active='Cart';
    include("includes/header.php");


?>
   
   <div id="content"><!-- #content Begin -->
       <div class="container"><!-- container Begin -->
           <div class="col-md-12"><!-- col-md-12 Begin -->
               
               <ul class="breadcrumb"><!-- breadcrumb Begin -->
                   <li>
                       <a href="index.php">Home</a>
                   </li>
                   <li>
                       Shop
                   </li>
                   
                   </ul><!-- breadcrumb Finish -->
               
           </div><!-- col-md-12 Finish -->
           <div class="col-md-3">
          <?php 
    
    include("includes/sidebar.php");
    
    ?>
               
           </div><!-- col-md-3 Finish -->
           
           <div class="col-md-9"><!-- col-md-9 Begin -->
               <div id="productMain" class="row"><!-- row Begin -->
                   
                   
                   <div class="col-sm-12"><!-- col-sm-6 Begin -->
                       <div class="box" ><!-- box Begin -->
                           <h4 style="font-size:30px; color:green;"> <?php echo $pro_title; ?> </h4>
                           
                           <p style="font-size:24px">€ <?php echo $pro_price; ?></p>
                           <!-- <div class="box" id="details">box Begin -->
                       
                       <h4 style="font-size:30px; color:green;">Product Details</h4>
                   
                   <p style="font-size:150%;" >
                       
                       <?php echo $pro_desc; ?>
                       
                   </p>
                   
                       <h4 style="font-size:30px; color:green;">Quality</h4>
                       <p style="font-size:150%;" >Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p> 
                       
                       <hr>
                   
               </div><!-- box Finish -->
               
                       </div><!-- box Finish -->
                    
                   <div class="col-md-12"><!-- col-md-3 col-sm-6 Begin -->
                       <div class="box same-height headline" style="height: 350px;"><!-- box same-height headline Begin -->
                           <h3 class="text-center">Products You Maybe Like</h3>
                           <?php 
                   
                    $get_products = "select * from products order by rand() LIMIT 0,4";
                   
                    $run_products = mysqli_query($con,$get_products);
                   
                   while($row_products=mysqli_fetch_array($run_products)){
                       
                       $pro_id = $row_products['product_id'];
                       
                       $pro_title = $row_products['product_title'];
                       
                       $pro_img1 = $row_products['product_img1'];
                       
                       $pro_price = $row_products['product_price'];
                       
                       echo "
                       
                        <div class='col-md-3 col-sm-6 center-responsive'>
                        
                            <div class='product same-height'>
                            
                                <a href='details.php?pro_id=$pro_id'>
                                
                                    <img class='img-responsive' src='admin/product_images/$pro_img1'>
                                
                                </a>
                                
                                <div class='text'>
                                
                                    <h3> <a href='details.php?pro_id=$pro_id'> $pro_title </a> </h3>
                                    
                                    <p class='price'> € $pro_price </p>
                                
                                </div>
                            
                            </div>
                        
                        </div>
                       
                       ";
                       
                   }
                   
                   ?>
                                              
                   </div><!-- col-sm-6 Finish -->
                   
                   
               <!-- </div>row Finish -->
               
               
               <!-- box same-height headline Finish -->
                       
                   </div><!-- col-md-3 col-sm-6 Finish -->
                   
                   
                   
               </div><!-- #row same-heigh-row Finish -->
               
           </div><!-- col-md-9 Finish -->
           
       </div><!-- container Finish -->
   
   <?php 
    
    include("includes/footer.php");
    
    ?>
    
    <script src="js/jquery-331.min.js"></script>
    <script src="js/bootstrap-337.min.js"></script>
    
    
</body>
</html>
