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
                       Service Detail
                   </li>
                   
                   </ul><!-- breadcrumb Finish -->
               
           </div><!-- col-md-12 Finish -->
                     
           <div class="col-md-9"><!-- col-md-9 Begin -->
               <div id="productMain" class="row"><!-- row Begin -->
                   
                   
                   <div class="col-sm-12"><!-- col-sm-6 Begin -->
                       <div class="box" ><!-- box Begin -->
                           <h4 style="font-size:30px; color:green;"> <?php echo $ser_type; ?> </h4>
                           
                           <p class="price">£ <?php echo $ser_price; ?></p>
                       </div><!-- box Finish -->
                       
                                              
                   </div><!-- col-sm-6 Finish -->
                   
                   
               </div><!-- row Finish -->
               
               <div class="box" id="details"><!-- box Begin -->
                       
                       <h4 style="font-size:30px; color:green;">Service Details</h4>
                   
                   <p style="font-size:150%;" >
                       
                       <?php echo $ser_desc; ?>
                       
                   </p>
                   
                       <h4 style="font-size:30px; color:green;">Quality</h4>
                       <p style="font-size:150%;" >Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p> 
                       
                       <hr>
                   
               </div><!-- box Finish -->
               
               <div id="row same-height-row"><!-- #row same-heigh-row Begin -->
                   <div class="col-md-4 col-sm-6"><!-- col-md-3 col-sm-6 Begin -->
                       <div class="box same-height headline"><!-- box same-height headline Begin -->
                           <h3 class="text-center">Services You Maybe Like</h3>
                       </div><!-- box same-height headline Finish -->
                   </div><!-- col-md-3 col-sm-6 Finish -->
                   
                   <?php 
                   
                    $get_products = "select * from service_type order by rand() LIMIT 0,2";
                   
                    $run_products = mysqli_query($con,$get_products);
                   
                   while($row_products=mysqli_fetch_array($run_products)){
                       
                       $ser_id = $row_products['ID'];
                       
                       $ser_type = $row_products['ServiceType'];
                       
                       $ser_price = $row_products['ServicePrice'];
                       
                       $ser_desc = $row_products['ServiceDesc'];
                    
                       echo "
                       
                        <div class='col-md-3 col-sm-6 center-responsive'>
                        
                            <div class='box same-height'>
                            
                                                               
                                <div class='text'>
                                
                                    <h3> <a href='services_details.php?ser_id=$ser_id'> $ser_type </a> </h3>
                                    
                                    <p class='price' style='font-size:20px;'> £ $ser_price </p>
                                
                                </div>
                            
                            </div>
                        
                        </div>
                       
                       ";
                       
                   }
                   
                   ?>
                   
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
