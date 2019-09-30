<?php  
session_start();
error_reporting(0);
include('includes/dbconnection.php');
if (strlen($_SESSION['adid']==0)) {
  header('location:logout.php');
  } else{

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
                                <h4 class="m-t-0 header-title">Booked Services</h4>
                                <form name="search" method="post">
                                    <div class="form-group row">
                                        <div class="col-6">
                                            <input id="searchdata" type="date" name="searchdata" required
                                                class="form-control">
                                        </div>
                                        <div class="col-6">
                                            <button type="submit" name="search"
                                                class="btn btn-info btn-min-width mr-1 mb-1">Search</button>
                                        </div>
                                    </div>

                                </form>
                                <div class="p-20">
                                    <table class="table mb-0">
                                        <thead>
                                            <tr>
                                                <th>S.NO</th>
                                                <th>Service number</th>
                                                <th>Service Type</th>
                                                <th>Vehicle Category</th>
                                                <th>Full Name</th>
                                                <th>Mobile Number</th>
                                                <th>Service Date</th>
                                                <th>Mechanic</th>
                                                <th>Status</th>

                                            </tr>
                                        </thead>
                                        <?php
                                    if(isset($_POST['search']))
                                    { 
                                        $sdata=date('Y-m-d', strtotime($_POST ['searchdata']));
                                ?>
                                        <h4 align="center">Result against "<?php echo $sdata;?>" keyword </h4>
                                        <?php            
                                                    $query = "select tblservicerequest.ServiceType ,tblservicerequest.Category,tblservicerequest.ServiceDate,tblservicerequest.ServiceNumber,tblservicerequest.AdminStatus,tblservicerequest.ServiceBy,tblservicerequest.ID as apid, tbluser.FullName,tbluser.MobileNo,tbluser.RegDate from  tblservicerequest inner join tbluser on tbluser.ID=tblservicerequest.UserId where tblservicerequest.ServiceDate = '$sdata'";
                                                    $ret=mysqli_query($con, $query);
                                                    $num=mysqli_num_rows($ret);
                                                    if($num>0){
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
                                            <td><?php  echo $row['ServiceDate'];?></td>
                                            <td><?php  echo $row['ServiceBy'];?></td>
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

                                        </tr>
                                        <?php 
                                                    $cnt=$cnt+1;
                                                    } } else { ?>
                                        <tr>
                                            <td colspan="8"> No record found against this search</td>
                                        </tr>

                                        <?php } }else{
                                                    $sernumber = mt_rand(100000000, 999999999);
                                                    $ret=mysqli_query($con,"select tblservicerequest.ServiceType ,tblservicerequest.Category,tblservicerequest.ServiceDate,tblservicerequest.ServiceNumber,tblservicerequest.AdminStatus,tblservicerequest.ServiceBy,tblservicerequest.ID as apid, tbluser.FullName,tbluser.MobileNo,tbluser.RegDate from  tblservicerequest inner join tbluser on tbluser.ID=tblservicerequest.UserId where tblservicerequest.AdminStatus != 4 && tblservicerequest.ServiceBy != '' order by tblservicerequest.AdminStatus ASC");
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
                                            <td><?php  echo $row['ServiceDate'];?></td>
                                            <td><?php  echo $row['ServiceBy'];?></td>
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
                                                                        }?>
                                            </td>
                                            <td><a href="view-mechanics-service.php?aticid=<?php echo $row['apid'];?>">View
                                                    Details</a></td>
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
        </div> <!-- container -->

    </div><?php }?>
    <!-- content -->
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