<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
if (strlen($_SESSION['adid']==0)) {
  header('location:logout.php');
  } else {




?>
<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>GGMS|| Admin Dashboard</title>
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
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/bootstrap-337.min.css">
        <script src="assets/js/modernizr.min.js"></script>

    </head>


    <body>
<div class="accountbg" style="background: url('assets/images/bg-4.jpg');background-size: auto;background-position: center top;"></div>
        <!-- Begin page -->
    <?php include_once('includes/sidebar.php');?>   
        <div id="wrapper">

<?php include_once('includes/header.php');?>
            <!-- ========== Left Sidebar Start ========== -->
          

                    <!-- User box -->
                   

                    <!--- Sidemenu -->
          

                  


            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->

            <div class="content-paged">

               

                <!-- Start Page content -->
               
              <div class="content">
      
                    <div class="container-fluid">
 
                        <div class="row">
                           
                            <div class="col-sm-12">
                               
                                <div class="card-box">
                                    <h4 class="header-title mb-4" style="font-size:20px;"><strong>Account Overview</strong></h4>
            
                <i class="fa fa-dashboard"></i> Dashboard
                    
    </div><!-- col-lg-12 finish -->
<div class="row">
    <div class="col-lg-3 col-md-6"><!-- col-lg-3 col-md-6 begin -->
        <div class="panel panel-primary"><!-- panel panel-primary begin -->
            
            <div class="panel-heading"><!-- panel-heading begin -->
                <div class="row"><!-- panel-heading row begin -->
                    <div class="col-xs-3"><!-- col-xs-3 begin -->
                       
                        <i class="fa fa-users fa-5x"></i>
                        
                    </div><!-- col-xs-3 finish -->
                    
                    <div class="col-xs-9 text-right"><!-- col-xs-9 text-right begin -->
                        <div class="huge">  <?php $query=mysqli_query($con,"Select * from tbluser");
$usercount=mysqli_num_rows($query);
?> </div>
                           
                        <div> <input data-plugin="knob" data-width="80" data-height="80" data-linecap=round
                                                           data-fgColor="#ffec03" value="<?php echo $usercount;?>" data-skin="tron" data-angleOffset="180"
                                                           data-readOnly=true data-thickness=".2"/> </div>
                        
                    </div><!-- col-xs-9 text-right finish -->
                    
                </div><!-- panel-heading row finish -->
            </div><!-- panel-heading finish -->
            
            <a href="reg-user.php"><!-- a href begin -->
                <div class="panel-footer"><!-- panel-footer begin -->
                   
                    <span class="pull-left"><!-- pull-left begin -->
                        Registered Users
                    </span><!-- pull-left finish -->
                    
                    <span class="pull-right"><!-- pull-right begin --> 
                        <i class="fa fa-arrow-circle-right"></i> 
                    </span><!-- pull-right finish --> 
                    
                    <div class="clearfix"></div>
                    
                </div><!-- panel-footer finish -->
            </a><!-- a href finish -->
            
        </div><!-- panel panel-primary finish -->
    </div><!-- col-lg-3 col-md-6 finish -->
    
    <div class="col-lg-3 col-md-6"><!-- col-lg-3 col-md-6 begin -->
        <div class="panel panel-orange"><!-- panel panel-primary begin -->
            
            <div class="panel-heading"><!-- panel-heading begin -->
                <div class="row"><!-- panel-heading row begin -->
                    <div class="col-xs-3"><!-- col-xs-3 begin -->
                       
                        <i class="fa fa-question fa-5x"></i>
                        
                    </div><!-- col-xs-3 finish -->
                    
                    <div class="col-xs-9 text-right"><!-- col-xs-9 text-right begin -->
                        <div class="huge">  <?php $query=mysqli_query($con,"Select * from tblenquiry");
$enqcount=mysqli_num_rows($query);
?> </div>
                           
                        <div> <input data-plugin="knob" data-width="80" data-height="80" data-linecap=round
                                                           data-fgColor="black" value="<?php echo $enqcount;?>" data-skin="tron" data-angleOffset="180"
                                                           data-readOnly=true data-thickness=".2"/> </div>
                        
                    </div><!-- col-xs-9 text-right finish -->
                    
                </div><!-- panel-heading row finish -->
            </div><!-- panel-heading finish -->
            
            <a href="notrespond-enquiry.php"><!-- a href begin -->
                <div class="panel-footer"><!-- panel-footer begin -->
                   
                    <span class="pull-left"><!-- pull-left begin -->
                        Total Enquiry
                    </span><!-- pull-left finish -->
                    
                    <span class="pull-right"><!-- pull-right begin --> 
                        <i class="fa fa-arrow-circle-right"></i> 
                    </span><!-- pull-right finish --> 
                    
                    <div class="clearfix"></div>
                    
                </div><!-- panel-footer finish -->
            </a><!-- a href finish -->
            
        </div><!-- panel panel-primary finish -->
    </div><!-- col-lg-3 col-md-6 finish -->
    
    <div class="col-lg-3 col-md-6"><!-- col-lg-3 col-md-6 begin -->
        <div class="panel panel-green"><!-- panel panel-primary begin -->
            
            <div class="panel-heading"><!-- panel-heading begin -->
                <div class="row"><!-- panel-heading row begin -->
                    <div class="col-xs-3"><!-- col-xs-3 begin -->
                       
                        <i class="fa fa-user-md fa-5x"></i>
                        
                    </div><!-- col-xs-3 finish -->
                    
                    <div class="col-xs-9 text-right"><!-- col-xs-9 text-right begin -->
                        <div class="huge">  <?php $query=mysqli_query($con,"Select * from tblmechanics");
$usercount=mysqli_num_rows($query);
?> </div>
                           
                        <div> <input data-plugin="knob" data-width="80" data-height="80" data-linecap=round
                                                           data-fgColor="black" value="<?php echo $usercount;?>" data-skin="tron" data-angleOffset="180"
                                                           data-readOnly=true data-thickness=".2"/> </div>
                        
                    </div><!-- col-xs-9 text-right finish -->
                    
                </div><!-- panel-heading row finish -->
            </div><!-- panel-heading finish -->
            
            <a href="manage-mechanics.php"><!-- a href begin -->
                <div class="panel-footer"><!-- panel-footer begin -->
                   
                    <span class="pull-left"><!-- pull-left begin -->
                        Mechanics
                    </span><!-- pull-left finish -->
                    
                    <span class="pull-right"><!-- pull-right begin --> 
                        <i class="fa fa-arrow-circle-right"></i> 
                    </span><!-- pull-right finish --> 
                    
                    <div class="clearfix"></div>
                    
                </div><!-- panel-footer finish -->
            </a><!-- a href finish -->
            
        </div><!-- panel panel-primary finish -->
    </div><!-- col-lg-3 col-md-6 finish -->
    
    <div class="col-lg-3 col-md-6"><!-- col-lg-3 col-md-6 begin -->
        <div class="panel panel-red"><!-- panel panel-primary begin -->
            
            <div class="panel-heading"><!-- panel-heading begin -->
                <div class="row"><!-- panel-heading row begin -->
                    <div class="col-xs-3"><!-- col-xs-3 begin -->
                       
                        <i class="fa fa-taxi fa-5x"></i>
                        
                    </div><!-- col-xs-3 finish -->
                    
                    <div class="col-xs-9 text-right"><!-- col-xs-9 text-right begin -->
                        <div class="huge">  <?php $query=mysqli_query($con,"Select * from tblservicerequest");
$usercount=mysqli_num_rows($query);
?> </div>
                           
                        <div> <input data-plugin="knob" data-width="80" data-height="80" data-linecap=round
                                                           data-fgColor="#ffec03" value="<?php echo $usercount;?>" data-skin="tron" data-angleOffset="180"
                                                           data-readOnly=true data-thickness=".2"/> </div>
                        
                    </div><!-- col-xs-9 text-right finish -->
                    
                </div><!-- panel-heading row finish -->
            </div><!-- panel-heading finish -->
            
            <a href="pending-service.php"><!-- a href begin -->
                <div class="panel-footer"><!-- panel-footer begin -->
                   
                    <span class="pull-left"><!-- pull-left begin -->
                        Total Service Request
                    </span><!-- pull-left finish -->
                    
                    <span class="pull-right"><!-- pull-right begin --> 
                        <i class="fa fa-arrow-circle-right"></i> 
                    </span><!-- pull-right finish --> 
                    
                    <div class="clearfix"></div>
                    
                </div><!-- panel-footer finish -->
            </a><!-- a href finish -->
            
        </div><!-- panel panel-primary finish -->
    </div><!-- col-lg-3 col-md-6 finish -->
    
    <div class="col-lg-3 col-md-6"><!-- col-lg-3 col-md-6 begin -->
        <div class="panel panel-black"><!-- panel panel-primary begin -->
            
            <div class="panel-heading"><!-- panel-heading begin -->
                <div class="row"><!-- panel-heading row begin -->
                    <div class="col-xs-3"><!-- col-xs-3 begin -->
                       
                        <i class="fa fa-check fa-5x"></i>
                        
                    </div><!-- col-xs-3 finish -->
                    
                    <div class="col-xs-9 text-right"><!-- col-xs-9 text-right begin -->
                        <div class="huge">  <?php $query=mysqli_query($con,"Select * from tblservicerequest where AdminStatus is null");
$usercount=mysqli_num_rows($query);
?> </div>
                           
                        <div> <input data-plugin="knob" data-width="80" data-height="80" data-linecap=round
                                                           data-fgColor="red" value="<?php echo $usercount;?>" data-skin="tron" data-angleOffset="180"
                                                           data-readOnly=true data-thickness=".2"/> </div>
                        
                    </div><!-- col-xs-9 text-right finish -->
                    
                </div><!-- panel-heading row finish -->
            </div><!-- panel-heading finish -->
            
            <a href="pending-service.php"><!-- a href begin -->
                <div class="panel-footer"><!-- panel-footer begin -->
                   
                    <span class="pull-left"><!-- pull-left begin -->
                        New Service Request
                    </span><!-- pull-left finish -->
                    
                    <span class="pull-right"><!-- pull-right begin --> 
                        <i class="fa fa-arrow-circle-right"></i> 
                    </span><!-- pull-right finish --> 
                    
                    <div class="clearfix"></div>
                    
                </div><!-- panel-footer finish -->
            </a><!-- a href finish -->
            
        </div><!-- panel panel-primary finish -->
    </div><!-- col-lg-3 col-md-6 finish -->
    
    
    <div class="col-lg-3 col-md-6"><!-- col-lg-3 col-md-6 begin -->
        <div class="panel panel-brown"><!-- panel panel-primary begin -->
            
            <div class="panel-heading"><!-- panel-heading begin -->
                <div class="row"><!-- panel-heading row begin -->
                    <div class="col-xs-3"><!-- col-xs-3 begin -->
                       
                        <i class="fa fa-cut fa-5x"></i>
                        
                    </div><!-- col-xs-3 finish -->
                    
                    <div class="col-xs-9 text-right"><!-- col-xs-9 text-right begin -->
                        <div class="huge">  <?php $query=mysqli_query($con,"Select * from tblservicerequest where AdminStatus='1'");
$usercount=mysqli_num_rows($query);
?> </div>
                           
                        <div> <input data-plugin="knob" data-width="80" data-height="80" data-linecap=round
                                                           data-fgColor="black" value="<?php echo $usercount;?>" data-skin="tron" data-angleOffset="180"
                                                           data-readOnly=true data-thickness=".2"/> </div>
                        
                    </div><!-- col-xs-9 text-right finish -->
                    
                </div><!-- panel-heading row finish -->
            </div><!-- panel-heading finish -->
            
            <a href="rejected-services.php"><!-- a href begin -->
                <div class="panel-footer"><!-- panel-footer begin -->
                   
                    <span class="pull-left"><!-- pull-left begin -->
                        Rejected Request
                    </span><!-- pull-left finish -->
                    
                    <span class="pull-right"><!-- pull-right begin --> 
                        <i class="fa fa-arrow-circle-right"></i> 
                    </span><!-- pull-right finish --> 
                    
                    <div class="clearfix"></div>
                    
                </div><!-- panel-footer finish -->
            </a><!-- a href finish -->
            
        </div><!-- panel panel-primary finish -->
    </div><!-- col-lg-3 col-md-6 finish -->
    
    <div class="col-lg-3 col-md-6"><!-- col-lg-3 col-md-6 begin -->
        <div class="panel panel-blue"><!-- panel panel-primary begin -->
            
            <div class="panel-heading"><!-- panel-heading begin -->
                <div class="row"><!-- panel-heading row begin -->
                    <div class="col-xs-3"><!-- col-xs-3 begin -->
                       
                        <i class="fa fa-check-circle fa-5x"></i>
                        
                    </div><!-- col-xs-3 finish -->
                    
                    <div class="col-xs-9 text-right"><!-- col-xs-9 text-right begin -->
                        <div class="huge">  <?php $query=mysqli_query($con,"Select * from tblservicerequest where AdminStatus='3'");
$usercount=mysqli_num_rows($query);
?> </div>
                           
                        <div> <input data-plugin="knob" data-width="80" data-height="80" data-linecap=round
                                                           data-fgColor="white" value="<?php echo $usercount;?>" data-skin="tron" data-angleOffset="180"
                                                           data-readOnly=true data-thickness=".2"/> </div>
                        
                    </div><!-- col-xs-9 text-right finish -->
                    
                </div><!-- panel-heading row finish -->
            </div><!-- panel-heading finish -->
            
            <a href="completed-service.php"><!-- a href begin -->
                <div class="panel-footer"><!-- panel-footer begin -->
                   
                    <span class="pull-left"><!-- pull-left begin -->
                        Completed Service
                    </span><!-- pull-left finish -->
                    
                    <span class="pull-right"><!-- pull-right begin --> 
                        <i class="fa fa-arrow-circle-right"></i> 
                    </span><!-- pull-right finish --> 
                    
                    <div class="clearfix"></div>
                    
                </div><!-- panel-footer finish -->
            </a><!-- a href finish -->
            
        </div><!-- panel panel-primary finish -->
    </div><!-- col-lg-3 col-md-6 finish -->
    
    <div class="col-lg-3 col-md-6"><!-- col-lg-3 col-md-6 begin -->
        <div class="panel panel-dgreen"><!-- panel panel-primary begin -->
            
            <div class="panel-heading"><!-- panel-heading begin -->
                <div class="row"><!-- panel-heading row begin -->
                    <div class="col-xs-3"><!-- col-xs-3 begin -->
                       
                        <i class="fa fa-car fa-5x"></i>
                        
                    </div><!-- col-xs-3 finish -->
                    
                    <div class="col-xs-9 text-right"><!-- col-xs-9 text-right begin -->
                        <div class="huge">  <?php $query=mysqli_query($con,"Select * from tblservicerequest  where AdminStatus='4'");
$usercount=mysqli_num_rows($query);
?> </div>
                           
                        <div> <input data-plugin="knob" data-width="80" data-height="80" data-linecap=round
                                                           data-fgColor="black" value="<?php echo $usercount;?>" data-skin="tron" data-angleOffset="180"
                                                           data-readOnly=true data-thickness=".2"/> </div>
                        
                    </div><!-- col-xs-9 text-right finish -->
                    
                </div><!-- panel-heading row finish -->
            </div><!-- panel-heading finish -->
            
            <a href="collected-services.php"><!-- a href begin -->
                <div class="panel-footer"><!-- panel-footer begin -->
                   
                    <span class="pull-left"><!-- pull-left begin -->
                        Collected Service
                    </span><!-- pull-left finish -->
                    
                    <span class="pull-right"><!-- pull-right begin --> 
                        <i class="fa fa-arrow-circle-right"></i> 
                    </span><!-- pull-right finish --> 
                    
                    <div class="clearfix"></div>
                    
                </div><!-- panel-footer finish -->
            </a><!-- a href finish -->
            
        </div><!-- panel panel-primary finish -->
    </div><!-- col-lg-3 col-md-6 finish -->
</div>   
   
       
          <div class="row">
                            <div class="col-12">
                                <div class="card-box">
                                    <h4 class="m-t-0 header-title">Pending Services</h4>
                                    <p class="text-muted m-b-30 font-14">
                                       
                                    </p>

                                    <div class="row">
                                        <div class="col-12">
                                            <div class="p-20">
                                               <table class="table mb-0">
 <thead>
                <tr>
                  <th>S.NO</th>
                  <th>Service number</th>
                  <th>Service Type</th>
                  <th>Vehicle Category</th>
                  <th>Service Number</th>
                  <th>Full Name</th>
                 <th>Mobile Number</th>
                  <th>Email</th>
       
              
                   <th>Action</th>
                </tr>
              </thead>
              <?php
                                                    $sernumber = mt_rand(100000000, 999999999);
                                                    $ret=mysqli_query($con,"select tblservicerequest.ServiceType ,tblservicerequest.Category,tblservicerequest.ServiceNumber,tblservicerequest.ID as apid, tbluser.FullName,tbluser.MobileNo,tbluser.Email,tbluser.RegDate from  tblservicerequest inner join tbluser on tbluser.ID=tblservicerequest.UserId where tblservicerequest.AdminStatus = ''");
                                                    $cnt=1;
                                                    while ($row=mysqli_fetch_array($ret)) {
                                                ?>

                                                <tr>
                                                    <td><?php echo $cnt;?></td>
                                                    <td><?php  echo $row['ServiceNumber'];?></td>
                                                    <td><?php  echo $row['ServiceType'];?></td>
                                                    <td><?php  echo $row['Category'];?></td>
                                                    <td><?php  echo $row['FullName'];?></td>
                                                    <td><?php  echo $row['MobileNo'];?></td>
                                                    <td><?php  echo $row['Email'];?></td>
                                                    <td><?php  if($row['AdminStatus']==''){
                                                        echo "Pending";
                                                    }elseif($row['AdminStatus']==1){
                                                        echo "Booked";
                                                    }elseif($row['AdminStatus']==2){
                                                        echo "In Service";
                                                    }elseif($row['AdminStatus']==3){
                                                        echo "Completed";
                                                    }elseif($row['AdminStatus']==4){
                                                        echo "Rejected";
                                                    }?></td>
                
                  
                
                  <td><a href="view-service-request.php?aticid=<?php echo $row['apid'];?>">View Details</a></td>
                </tr>
                <?php 
$cnt=$cnt+1;
}?>
   


</table>

                                                
                                            </div>
                                        </div>

                                    </div>
                                    <!-- end row -->

                                </div> <!-- end card-box -->
                            </div><!-- end col -->
                        </div>






                                </div>
                            </div>
                        </div>
                        <!-- end row -->



                       
                        <!-- end row -->


                        
                        <!-- end row -->




                    </div> <!-- container -->

                </div> <!-- content -->

               
            </div>

<?php include_once('includes/footer.php');?>
            <!-- ============================================================== -->
            <!-- End Right content here -->
        
        
        <!-- END wrapper -->



        <!-- jQuery  -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/bootstrap.bundle.min.js"></script>
        <script src="assets/js/metisMenu.min.js"></script>
        <script src="assets/js/waves.js"></script>
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
<?php } ?>