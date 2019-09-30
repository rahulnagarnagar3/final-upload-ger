<?php
session_start();
error_reporting(0);
include('includes/db.php');
if (strlen($_SESSION['sid']==0)) {
  header('location:logout.php');
  } 




?>
<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>GGMS</title>
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
     <!-- Begin page --><!-- Begin page -->
        <div class="accountbg" style="background: url('images/bg1.png');background-size: auto;background-position: center top;"></div>
        

     <div id="wrapper">
          <?php include_once('includes/sidebar.php');?>

            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->

            <div class="content-page">

                 <?php include_once('includes/header.php');?>

            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->

            <div class="content-page">
           
             
               
                <!-- Top Bar Start -->
                <div class="topbar">

                    <nav class="navbar-custom">

                        <ul class="list-unstyled topbar-right-menu float-right mb-0">

                            <li class="hide-phone app-search">
                            

                         
                            

                           

                        </ul>

                        <ul class="list-inline menu-left mb-0">
                            <li class="float-left">
                                <button class="button-menu-mobile open-left disable-btn">
                                    <i class="dripicons-menu"></i>
                                </button>
                            </li>
                            
                            <ul class="list-inline menu-left mb-0">
                            <li class="float-left">
                                <button class="button-menu-mobile open-left disable-btn">
                                    <i class="dripicons-menu"></i>
                                </button>
                            </li>
                            <li>
                                <div class="page-title-box">
                                    <h4 class="page-title">Dashboard </h4>
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item active"></li>
                                    </ol>
                                </div>
                            </li>

                           
<?php include_once('includes/header.php');?>
                        </ul>
                 
             
               
                <!-- Top Bar End -->

                <!-- Start Page content -->
               
                <div class="content">

                    <div class="container-fluid">

                        <div class="row">
                            <div class="col-12">
                                <div class="card-box0">
                                    <div class="row"><!-- row no: 1 begin -->
    <div class="col-md-12"><!-- col-lg-12 begin -->
        <h1 class="page-header"> <i class="fa fa-dashboard"></i>Ger Garage Quality</h1>
                
    </div><!-- col-lg-12 finish -->
</div><!-- row no: 1 finish -->

<div class="row"><!-- row no: 2 begin -->
   
    <div class="card-box"><!-- box same-height Begin -->
                       
                       <div class="icon"><!-- icon Begin -->
                           
                           <i class="fa fa-heart"></i>
                           
                       </div><!-- icon Finish -->
                       
                       <h3><a href="#">Best Offer</a></h3>
                       
                       <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. </p>
                       
                   </div><!-- box same-height Finish -->
                       
                       
                         <div class="card-box"><!-- box same-height Begin -->
                       
                       <div class="icon"><!-- icon Begin -->
                           
                           <i class="fa fa-tag"></i>
                           
                       </div><!-- icon Finish -->
                       
                       <h3><a href="#">Best Price</a></h3>
                       
                       <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. </p>
                       
                   </div><!-- box same-height Finish -->
                        
                        <!-- end row -->


                                    </div>                 
                        <!-- end row -->


                        
                        <!-- end row -->




                    </div> <!-- container -->
                    

                </div> <!-- content -->

               
            


            <!-- ============================================================== -->
            <!-- End Right content here -->
            <!-- ============================================================== -->


        </div>
        <!-- END wrapper -->
                    </div>
                            </div>
                              
                              
                                        <div class="content">

                    <div class="container-fluid">

                        <div class="row">
                            <div class="col-12">
                                <div class="card-box0">
                                    <div class="row"><!-- row no: 1 begin -->
    <div class="col-md-12"><!-- col-lg-12 begin -->
        <h1 class="page-header"> <i class="fa fa-product-hunt"></i>Best Products Used</h1>
                
    </div><!-- col-lg-12 finish -->
</div><!-- row no: 1 finish -->

<div class="row"><!-- row no: 2 begin -->
   
    <div class="card-box"><!-- box same-height Begin -->
                       
                       <div class="icon"><!-- icon Begin -->
                           
                           <i class="fa fa-heart"></i>
                           
                       </div><!-- icon Finish -->
                       
                       <h3><a href="#">Best Offer</a></h3>
                       
                       <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. </p>
                       
                   </div><!-- box same-height Finish -->
                       
                       
                         <div class="card-box"><!-- box same-height Begin -->
                       
                       <div class="icon"><!-- icon Begin -->
                           
                           <i class="fa fa-tag"></i>
                           
                       </div><!-- icon Finish -->
                       
                       <h3><a href="#">Best Price</a></h3>
                       
                       <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. </p>
                       
                   </div><!-- box same-height Finish -->
                        
                        <!-- end row -->


                                    </div>                 
                        <!-- end row -->


                        
                        <!-- end row -->




                    </div> <!-- container -->
                    

                </div> <!-- content -->

               
            


            <!-- ============================================================== -->
            <!-- End Right content here -->
            <!-- ============================================================== -->


        </div>
        <!-- END wrapper -->
                    </div>
                    
                    
                    
                                        <div class="content">

                    <div class="container-fluid">

                        <div class="row">
                            <div class="col-12">
                                <div class="card-box0">
                                    <div class="row"><!-- row no: 1 begin -->
    <div class="col-md-12"><!-- col-lg-12 begin -->
        <h1 class="page-header"> <i class="fa fa-taxi"></i>Best Services Provided </h1>
                
    </div><!-- col-lg-12 finish -->
</div><!-- row no: 1 finish -->

<div class="row"><!-- row no: 2 begin -->
   
    <div class="card-box"><!-- box same-height Begin -->
                       
                       <div class="icon"><!-- icon Begin -->
                           
                           <i class="fa fa-heart"></i>
                           
                       </div><!-- icon Finish -->
                       
                       <h3><a href="#">Best Offer</a></h3>
                       
                       <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. </p>
                       
                   </div><!-- box same-height Finish -->
                       
                       
                         <div class="card-box"><!-- box same-height Begin -->
                       
                       <div class="icon"><!-- icon Begin -->
                           
                           <i class="fa fa-tag"></i>
                           
                       </div><!-- icon Finish -->
                       
                       <h3><a href="#">Best Price</a></h3>
                       
                       <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. </p>
                       
                   </div><!-- box same-height Finish -->
                        
                        <!-- end row -->


                                    </div>                 
                        <!-- end row -->


                        
                        <!-- end row -->




                    </div> <!-- container -->
                    

                </div> <!-- content -->

               
            


            <!-- ============================================================== -->
            <!-- End Right content here -->
            <!-- ============================================================== -->


        </div>
        <!-- END wrapper -->
                    </div>
                
                        
               
         </div>
        
     
        
        
        <!-- jQuery  -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/bootstrap.bundle.min.js"></script>
        <script src="assets/js/metisMenu.min.js"></script>
        <script src="assets/js/waves.js"></script>
        <script src="assets/css/stlye_le.php"></script>
        <script src="assets/js/jquery.slimscroll.js"></script>

        <!-- Flot chart -->
        <script src="../plugins/flot-chart/jquery.flot.min.js"></script>
        <script src="../plugins/flot-chart/jquery.flot.time.js"></script>
        <script src="../plugins/flot-chart/jquery.flot.tooltip.min.js"></script>
        <script src="../plugins/flot-chart/jquery.flot.resize.js"></script>
        <script src="../plugins/flot-chart/jquery.flot.pie.js"></script>
        <script src="../plugins/flot-chart/jquery.flot.crosshair.js"></script>
        <script src="../plugins/flot-chart/curvedLines.js"></script>
        <script src="../plugins/flot-chart/jquery.flot.axislabels.js"></script>

        <!-- KNOB JS -->
        <!--[if IE]>
        <script type="text/javascript" src="../plugins/jquery-knob/excanvas.js"></script>
        <![endif]-->
        <script src="../plugins/jquery-knob/jquery.knob.js"></script>

        <!-- Dashboard Init -->
        <script src="assets/pages/jquery.dashboard.init.js"></script>

        <!-- App js -->
        <script src="assets/js/jquery.core.js"></script>
        <script src="assets/js/jquery.app.js"></script>

    </body>
</html>