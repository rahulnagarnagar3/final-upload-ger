<?php
session_start();
error_reporting(0);
include('includes/db.php');
include_once('includes/header.php');
if(isset($_POST['submit']))
  {
    $uid=$_SESSION['sid'];
    $name=$_POST['name'];
     $email=$_POST['email'];
     $enquirytype=$_POST['enquirytype'];
     $description=$_POST['description'];
     $enqnumber = mt_rand(100000000, 999999999);
     
     $query=mysqli_query($con,"insert into tblenquiry(UserId,EnquiryNumber,FullName,Email,EnquiryType,Description) value('$uid','$enqnumber','$name','$email','$enquirytype','$description')");
    if ($query) {
    $msg="Your enquiry has been sent successfully.We will Contact you soon";
  }
  else
    {
      $msg="Something Went Wrong. Please try again";
    }

  
}





?>
<div id="wrapper">



    <!-- ============================================================== -->
    <!-- Start right Content here -->
    <!-- ============================================================== -->
    <div class="col-md-12">
        <!-- col-md-9 Begin -->

        <div class="box">
            <!-- box Begin -->

            <div class="box-header">
                <!-- box-header Begin -->

                <center>
                    <!-- center Begin -->

                    <h2> Feel free to Contact Us</h2>

                    <p class="text-muted">
                        <!-- text-muted Begin -->

                        If you have any questions, feel free to contact us. Our Customer Service work
                        <strong>24/7</strong>

                    </p><!-- text-muted Finish -->

                </center><!-- center Finish -->


                <div class="row">
                    <div class="col-12">
                        <div class="col-6">
                            <div class="p-20">
                                <p style="font-size:16px; color:red" align="center"> <?php if($msg){
    echo $msg;
  }  ?> </p>
                                <form class="form" role="form" method="post" name="submit">
                                    <!-- form Begin -->
                                    <div class="form-group">
                                        <label class="col-2 col-form-label" for="example-email">Name</label>
                                        <div class="col-5">
                                            <input type="text" name="name" id="name" rows="12"
                                                cols="15" class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-2 col-form-label" for="example-email">Email</label>
                                        <div class="col-5">
                                            <input type="email" name="email" id="email" rows="12"
                                                cols="15" class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <!-- form-group Begin -->

                                        <label class="col-2 col-form-label">Enquiry</label>
                                        <div class="col-10">
                                            <select name='enquirytype' id="enquirytype" class="form-control"
                                                required="true">
                                                <option value="">Enquiry Type</option>
                                                <?php $query=mysqli_query($con,"select * from tblenquirytype");
              while($row=mysqli_fetch_array($query))
              {
              ?>
                                                <option value="<?php echo $row['EnquiryType'];?>">
                                                    <?php echo $row['EnquiryType'];?></option>
                                                <?php } ?>
                                            </select>
                                        </div>

                                    </div><!-- form-group Finish -->



                                    <div class="form-group">
                                        <label class="col-2 col-form-label" for="example-email">Description</label>
                                        <div class="col-10">
                                            <textarea name="description" value="description" id="description" rows="12"
                                                cols="15" class="form-control"></textarea>
                                        </div>
                                    </div>

                                    <div class="form-group ">

                                        <div class="col-12">
                                            <p style="text-align: center;"> <button type="submit" name="submit"
                                                    class="btn btn-warning">Submit</button></p>
                                        </div>
                                    </div>
                                </form>


                            </div>
                        </div>

                    </div>
                    <!-- end row -->



                    <!-- ============================================================== -->
                    <!-- End Right content here -->
                    <!-- ============================================================== -->


                </div>
                <!-- END wrapper -->

                <?php include_once('includes/footer.php');?>