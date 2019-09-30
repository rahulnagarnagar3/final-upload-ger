<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
if (strlen($_SESSION['adid']==0)) {
  header('location:logout.php');
  } else{

if(isset($_POST['submit'])){
    
    $product_title = $_POST['product_title'];
    $product_cat = $_POST['product_cat'];
    $cat = $_POST['cat'];
    $product_price = $_POST['product_price'];
    $product_keywords = $_POST['product_keywords'];
    $product_desc = $_POST['product_desc'];    
    $product_img1 = $_FILES['product_img1']['name'];    
    $temp_name1 = $_FILES['product_img1']['tmp_name'];    
    move_uploaded_file($temp_name1,"product_images/$product_img1");
    $insert_product = "insert into products (p_cat_id,cat_id,date,product_title,product_img1,product_price,product_keywords,product_desc) values ('$product_cat','$cat',NOW(),'$product_title','$product_img1','$product_price','$product_keywords','$product_desc')";
    $run_product = mysqli_query($con,$insert_product);
    if($run_product){
        echo "<script>alert('Product has been inserted sucessfully')</script>";
        echo "<script>window.open('manage-parts.php?view_products','_self')</script>";
    }
    }
  ?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Ger Garage Service Managment System</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
    <meta content="Coderthemes" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <!-- App css -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/icons.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/metismenu.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/style.css" rel="stylesheet" type="text/css" />

    <script src="assets/js/modernizr.min.js"></script>

</head>


<body>

    <!-- Begin page -->
    <div id="wrapper">

        <?php include_once('includes/sidebar.php');?>

        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->

        <div class="content-page">

            <?php include_once('includes/header.php');?>

            <!-- Start Page content -->
            <div class="content">
                <div class="container-fluid">

                    <div class="row">
                        <div class="col-12">
                            <div class="card-box">
                                <h4 class="m-t-0 header-title"><strong>Add Auto Parts</strong></h4>
                                <form method="post" class="form-horizontal" enctype="multipart/form-data">
                                    <!-- form-horizontal Begin -->

                                    <div class="form-group">
                                        <!-- form-group Begin -->

                                        <label class="col-md-3 control-label"> Product Title </label>

                                        <div class="col-md-6">
                                            <!-- col-md-6 Begin -->

                                            <input name="product_title" type="text" class="form-control" required>

                                        </div><!-- col-md-6 Finish -->

                                    </div><!-- form-group Finish -->

                                    <div class="form-group">
                                        <!-- form-group Begin -->

                                        <label class="col-md-3 control-label"> Product Category </label>

                                        <div class="col-md-6">
                                            <!-- col-md-6 Begin -->

                                            <select name="product_cat" class="form-control" required>
                                                <!-- form-control Begin -->

                                                <option> Select a Category Product </option>

                                                <?php 
                              
                              $get_p_cats = "select * from product_categories";
                              $run_p_cats = mysqli_query($con,$get_p_cats);
                              
                              while ($row_p_cats=mysqli_fetch_array($run_p_cats)){
                                  
                                  $p_cat_id = $row_p_cats['p_cat_id'];
                                  $p_cat_title = $row_p_cats['p_cat_title'];
                                  
                                  echo "
                                  
                                  <option value='$p_cat_id'> $p_cat_title </option>
                                  
                                  ";
                                  
                              }
                              
                              ?>

                                            </select><!-- form-control Finish -->

                                        </div><!-- col-md-6 Finish -->

                                    </div><!-- form-group Finish -->

                                    <div class="form-group">
                                        <!-- form-group Begin -->

                                        <label class="col-md-3 control-label"> Category </label>

                                        <div class="col-md-6">
                                            <!-- col-md-6 Begin -->

                                            <select name="cat" class="form-control" required>
                                                <!-- form-control Begin -->

                                                <option> Select a Category </option>

                                                <?php 
                              
                              $get_cat = "select * from tblcategory";
                              $run_cat = mysqli_query($con,$get_cat);
                              
                              while ($row_cat=mysqli_fetch_array($run_cat)){
                                  
                                  $cat_id = $row_cat['ID'];
                                  $cat_title = $row_cat['VehicleCat'];
                                  
                                  echo "
                                  
                                  <option value='$cat_id'> $cat_title </option>
                                  
                                  ";
                                  
                              }
                              
                              ?>

                                            </select><!-- form-control Finish -->

                                        </div><!-- col-md-6 Finish -->

                                    </div><!-- form-group Finish -->

                                    <div class="form-group">
                                        <!-- form-group Begin -->

                                        <label class="col-md-3 control-label"> Product Image 1 </label>

                                        <div class="col-md-6">
                                            <!-- col-md-6 Begin -->

                                            <input name="product_img1" type="file" class="form-control" required>

                                        </div><!-- col-md-6 Finish -->

                                    </div><!-- form-group Finish -->

                                    <div class="form-group">
                                        <!-- form-group Begin -->

                                        <label class="col-md-3 control-label"> Product Price </label>

                                        <div class="col-md-6">
                                            <!-- col-md-6 Begin -->

                                            <input name="product_price" type="text" class="form-control" required>

                                        </div><!-- col-md-6 Finish -->

                                    </div><!-- form-group Finish -->

                                    <div class="form-group">
                                        <!-- form-group Begin -->

                                        <label class="col-md-3 control-label"> Product Keywords </label>

                                        <div class="col-md-6">
                                            <!-- col-md-6 Begin -->

                                            <input name="product_keywords" type="text" class="form-control" required>

                                        </div><!-- col-md-6 Finish -->

                                    </div><!-- form-group Finish -->

                                    <div class="form-group">
                                        <!-- form-group Begin -->

                                        <label class="col-md-3 control-label"> Product Desc </label>

                                        <div class="col-md-6">
                                            <!-- col-md-6 Begin -->

                                            <textarea name="product_desc" cols="19" rows="6"
                                                class="form-control"></textarea>

                                        </div><!-- col-md-6 Finish -->

                                    </div><!-- form-group Finish -->


                                    <div class="form-group row">

                                        <center><button type="submit" name="submit"
                                                class="btn btn-info btn-min-width mr-1 mb-1">Add</button>
                                            <button type="cancel" name="cancel" class="btn btn-danger "
                                                onClick="document.location.href='manage-parts.php';">Cancel</button>
                                        </center>


                                    </div>


                                </form><!-- form-horizontal Finish -->





                            </div> <!-- container -->

                        </div> <!-- content -->

                        <?php include_once('includes/footer.php');?>
                    </div>


                    <!-- ============================================================== -->
                    <!-- End Right content here -->
                    <!-- ============================================================== -->


                </div>
                <!-- END wrapper -->



                <!-- jQuery  -->
                <script src="assets/js/jquery.min.js"></script>
                <script src="assets/js/bootstrap.bundle.min.js"></script>
                <script src="assets/js/metisMenu.min.js"></script>
                <script src="assets/js/waves.js"></script>
                <script src="assets/js/jquery.slimscroll.js"></script>

                <!-- App js -->
                <script src="assets/js/jquery.core.js"></script>
                <script src="assets/js/jquery.app.js"></script>

</body>

</html>
<?php }  ?>