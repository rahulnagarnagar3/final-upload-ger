
   
   <div class="panel panel-primary sidebar-menu">
    <div class="panel-heading">
        <h3 class="panel-title">Products Categories</h3>
        </div>
        
        <div class="panel-body">
            <ul class="nav nav-pills nav-stacked category-menu">
                
                <?php
                    $get_p_cats="select * from product_categories";
                    $run_p_cats=mysqli_query($con,$get_p_cats);
                    
                    
                    while($row_p_cats=mysqli_fetch_array($run_p_cats)){
                        $p_cat_id= $row_p_cats['p_cat_id'];
                        
                        $p_cat_title=$row_p_cats['p_cat_title'];
                        
                        echo"
                        <li>
                        
                        <a href='shop.php?p_cat=$p_cat_id'>
                        
                        $p_cat_title
                        </a>
                        </li>
                        
                        
                        
                        ";
                    }
                    
                    
 ?>
            </ul>
        </div>
</div>






<div class="panel panel-success sidebar-menu">
    <div class="panel-heading">
        <h3 class="panel-title">Vehicle's Repair Categories</h3>
        </div>
        
        <div class="panel-body">
            <ul class="nav nav-pills nav-stacked category-menu">
                
                  <?php
                    $get_cats="select * from categories";
                    $run_cats=mysqli_query($con,$get_cats);
                    
                    
                    while($row_cats=mysqli_fetch_array($run_cats)){
                        $cat_id= $row_cats['cat_id'];
                        
                        $cat_title=$row_cats['cat_title'];
                        
                        echo"
                        <li>
                        
                        <a href='shop.php?cat=$cat_id'>
                        
                        $cat_title
                        </a>
                        </li>
                        
                        
                        
                        ";
                    }
                    
                    
 ?>
            </ul>
        </div>
</div>