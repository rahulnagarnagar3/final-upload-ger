<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
    if (strlen($_SESSION['adid']==0)) {
  header('location:logout.php');
  } else{

if(isset($_POST['submit']))
  {
    
    $cid=$_GET['aticid'];
      $admsta=$_POST['status'];
    
     
   $query=mysqli_query($con, "update  tblservicerequest set AdminStatus='$admsta' where ID='$cid'");
    if ($query) {
    $msg="Service has been completed.";
  }
  else
    {
      $msg="Something Went Wrong. Please try again";
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
                                <h4 class="m-t-0 header-title">View Services</h4>
                                <p class="text-muted m-b-30 font-14">

                                </p>

                                <div class="row">
                                    <div class="col-12">
                                        <div class="p-20">

                                            <p style="font-size:16px; color:red" align="center"> <?php if($msg){
    echo $msg;
  }  ?> </p>



                                            <?php
$cid=$_GET['aticid'];
$ret=mysqli_query($con,"select * from tblservicerequest join tbluser on tbluser.ID=tblservicerequest.UserId where tblservicerequest.ID='$cid'");
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {

?>

                                            <table border="1" class="table table-bordered mg-b-0">
                                                <tr>
                                                    <th>Service Type</th>
                                                    <td><?php  echo $row['ServiceType'];?></td>
                                                </tr>
                                                <tr>
                                                <tr>
                                                    <th>Service Number</th>
                                                    <td><?php  echo $row['ServiceNumber'];?></td>
                                                </tr>
                                                <tr>
                                                    <th>Full Name</th>
                                                    <td><?php  echo $row['FullName'];?></td>
                                                </tr>

                                                <tr>
                                                    <th>Vehicle Category</th>
                                                    <td><?php  echo $row['Category'];?></td>
                                                </tr>
                                                <tr>
                                                    <th>Vehicle Name</th>
                                                    <td><?php  echo $row['VehicleName'];?></td>
                                                </tr>

                                                <tr>
                                                    <th>Vehicle Model</th>
                                                    <td><?php  echo $row['VehicleModel'];?></td>
                                                </tr>

                                                <tr>
                                                    <th>Vehicle Brand</th>
                                                    <td><?php  echo $row['VehicleBrand'];?></td>
                                                </tr>
                                                <tr>
                                                    <th> Vehicle Registration Number</th>
                                                    <td><?php  echo $row['VehicleRegno'];?></td>
                                                </tr>
                                                <tr>
                                                    <th>Service Date</th>
                                                    <td><?php  echo $row['ServiceDate'];?></td>
                                                </tr>
                                                <tr>
                                                    <th>Service Time</th>
                                                    <td><?php  echo $row['ServiceTime'];?></td>
                                                </tr>
                                                <tr>
                                                    <th>Delivery Type</th>
                                                    <td><?php  echo $row['DeliveryType'];?></td>
                                                </tr>
                                                <tr>
                                                    <th>Pickup Address</th>
                                                    <td><?php echo $row['PickupAddress'];?></td>
                                                </tr>
                                                <tr>
                                                    <th>Service Request Date</th>
                                                    <td><?php echo $row['ServicerequestDate'];?></td>
                                                </tr>
                                                <tr>
                                                    <th>Admin Status</th>
                                                    <td> 
                                                    
                                                    <?php  if($row['AdminStatus']==''){
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
                                                </tr>
                                            </table>




                                            <table class="table mb-0">


                                                <form name="submit" method="post" enctype="multipart/form-data">

                                                    <tr>
                                                        <th>Mechanics Status :</th>
                                                        <td>
                                                            <select name="status" class="form-control wd-450"
                                                                required="true">
                                                                <option value="2" selected="true">In Service</option>
                                                                <option value="3" >Completed</option>
                                                            </select></td>
                                                    </tr>

                                                    <tr align="center">
                                                        <td colspan="2"><button type="submit" name="submit"
                                                                class="btn btn-az-primary pd-x-20">Update Service
                                                                Status</button></td>
                                                    </tr>
                                                </form>




                                            </table>

                                            <?php } ?>




                                        </div>
                                    </div>

                                </div>
                                <!-- end row -->

                            </div> <!-- end card-box -->
                        </div><!-- end col -->
                    </div>
                    <!-- end row -->






                    <!-- end row -->





                </div> <!-- container -->

            </div> <!-- content -->

            <div class="col-12">
                <p style="text-align: center;"> <button type="cancel" name="cancel" class="btn btn-danger "
                        onClick="document.location.href='dashboard.php';">Back</button></p>
            </div>

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