<?php
session_start();
error_reporting(0);
include('../includes/db.php');
if (strlen($_SESSION['sid']==0)) 
{
  header('location:logout.php');
}else{
    if(isset($_POST['submit']))
    {
        $uid=$_SESSION['sid'];
        $serviceType=$_POST['serviceType'];
        $category=$_POST['category'];
        $vehbrand=$_POST['vehiclebrand'];
        $vehmodel=$_POST['vehilemodel'];
        $vehLicence=$_POST['vehilelicence'];
        $vehType = $_POST['vehicletype'];
        $vehrego=$_POST['vehicleregno'];
        $vehservicedate=date('Y-m-d', strtotime($_POST ['servicedate']));
        $vehservicetime=$_POST['servicetime'];
        $deltype=$_POST['deltype'];
        $pickupadd=$_POST['pickupadd'];
        $description=$_POST['description'];
        $sernumber = mt_rand(100000000, 999999999);  
        $dateCountVal = mysqli_query($con, "select count(ServiceDate) as bookingtotal from tblservicerequest where ServiceDate = '$vehservicedate'");
        $dataCount = mysqli_fetch_assoc($dateCountVal);
        if($dataCount['bookingtotal']<16){
            $query=mysqli_query($con,"insert into tblservicerequest(UserId,ServiceNumber,ServiceType,Category,VehicleModel,VehicleBrand,VehicleName,VehicleRegno,ServiceDate,ServiceTime,DeliveryType,PickupAddress,Description) value('$uid','$sernumber','$serviceType','$category','$vehmodel','$vehbrand','$vehLicence','$vehrego','$vehservicedate','$vehservicetime','$deltype','$pickupadd','$description')");
            if ($query) {
                $msg="Data has been added successfully.";
            }else{
                $msg="Something Went Wrong. Please try again";
            }
        }else{
            $msg = "Booking slot is full in given date select another date";
        }
    }
} ?>
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
    <link rel="stylesheet" href="assets/css/bootstrap-datepicker.min.css" />
    <link rel="stylesheet" href="assets/css/jquery-ui.min.css">
    <link href="assets/css/style.css" rel="stylesheet" type="text/css" />
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="js/jquery-331.min.js"></script>
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="assets/js/jquery-ui.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="assets/js/modernizr.min.js"></script>
    <script type="text/javascript">
    $(document).ready(function() {
        $('#pickupaddress').hide();
        $('#deltype').change(function() {
            var v = $("#deltype").val();
            if (v == 'dropservice') {
                $('#pickupaddress').hide();
            }
            if (v == 'pickupservice') {
                $('#pickupaddress').show();
            }
        });
    });
    </script>
</head>

<body>
    <div class="accountbg" style="background: url('images/bg2.jpg');background-size: auto;background-position: center top;"></div>
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
                                <h4 class="m-t-0 header-title">@ <div class="fa fa-address-book"></div> Booking Service
                                    Request Form</h4>
                                <p class="text-muted m-b-30 font-14">
                                </p>
                                <div class="row">
                                    <div class="col-12">
                                        <div class="p-20">
                                            <p style="font-size:16px; color:red" align="center"> <?php if($msg){ echo $msg; }  ?> </p>
                                            <form class="form-horizontal" role="form" method="post" id="serviceform">
                                                <div class="form-group row">
                                                    <label class="col-2 col-form-label"> <i class="fa fa-bookmark"></i>
                                                        Booking Required</label>
                                                    <div class="col-10">
                                                        <select name='serviceType' id="type" class="form-control"
                                                            required="true">
                                                            <option value="" disabled selected>Select Service Type
                                                            </option>
                                                            <?php $query=mysqli_query($con,"select * from tblservicetype");                                                                
                                                                while($row=mysqli_fetch_array($query))
                                                                { ?>
                                                                    <option value="<?php echo $row['ServiceType'];?>">
                                                                    <?php echo $row['ServiceType'];?></option>
                                                            <?php }?>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-2 col-form-label"><i class="fa fa-list-alt"></i>
                                                        Vehicle Category</label>
                                                    <div class="col-10">
                                                        <select name='category' id="category" class="form-control"
                                                            required="true">
                                                            <option value="">Category</option>
                                                            <?php $query=mysqli_query($con,"select * from tblcategory");
                                                                while($row=mysqli_fetch_array($query))
                                                                { ?>
                                                                    <option value="<?php echo $row['VehicleCat'];?>"><?php echo $row['VehicleCat'];?></option>
                                                            <?php } ?>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-2 col-form-label"><i class="fa fa-opencart"></i>Vehicle Make</label>
                                                    <div class="col-10">
                                                        <select class="form-control" id="vehiclebrand"
                                                            name="vehiclebrand" required="true">
                                                            <option value="">Car Make</option>
                                                            <option value="alfa romeo">Alfa Romeo</option>
                                                            <option value="asia">Asia</option>
                                                            <option value="aston martin">Aston Martin</option>
                                                            <option value="audi">Audi</option>
                                                            <option value="bentley">Bentley</option>
                                                            <option value="bmw">BMW</option>
                                                            <option value="buick">Buick</option>
                                                            <option value="cadillac">Cadillac</option>
                                                            <option value="chery">Chery</option>
                                                            <option value="chevrolet">Chevrolet</option>
                                                            <option value="chrysler">Chrysler</option>
                                                            <option value="citroen">Citroen</option>
                                                            <option value="daewoo">Daewoo</option>
                                                            <option value="daihatsu">Daihatsu</option>
                                                            <option value="dodge">Dodge</option>
                                                            <option value="ferrari">Ferrari</option>
                                                            <option value="fiat">Fiat</option>
                                                            <option value="ford">Ford </option>
                                                            <option value="foton">Foton</option>
                                                            <option value="geely">Geely</option>
                                                            <option value="gmc">GMC</option>
                                                            <option value="great wall">Great Wall</option>
                                                            <option value="haval">Haval</option>
                                                            <option value="hino">Hino</option>
                                                            <option value="holden">Holden</option>
                                                            <option value="honda">Honda</option>
                                                            <option value="hsv">HSV</option>
                                                            <option value="hummer">Hummer</option>
                                                            <option value="hyundai">Hyundai</option>
                                                            <option value="infiniti">Infiniti</option>
                                                            <option value="isuzu">Isuzu</option>
                                                            <option value="iveco">Iveco</option>
                                                            <option value="jaguar">Jaguar</option>
                                                            <option value="jeep">Jeep</option>
                                                            <option value="kia">Kia</option>
                                                            <option value="lamborghini">Lamborghini</option>
                                                            <option value="lancia">Lancia</option>
                                                            <option value="land rover">Land Rover </option>
                                                            <option value="ldv">LDV</option>
                                                            <option value="lexus">Lexus</option>
                                                            <option value="lincoln">Lincoln</option>
                                                            <option value="mahindra">Mahindra</option>
                                                            <option value="maserati">Maserati</option>
                                                            <option value="mazda">Mazda</option>
                                                            <option value="mclaren">Mclaren (12)</option>
                                                            <option value="mercedes-benz">Mercedes-Benz</option>
                                                            <option value="mg">MG</option>
                                                            <option value="mini">Mini</option>
                                                            <option value="mitsubishi">Mitsubishi</option>
                                                            <option value="nash">Nash</option>
                                                            <option value="nissan">Nissan</option>
                                                            <option value="oldsmobile">Oldsmobile</option>
                                                            <option value="opel">Opel</option>
                                                            <option value="peugeot">Peugeot</option>
                                                            <option value="pontiac">Pontiac</option>
                                                            <option value="porsche">Porsche</option>
                                                            <option value="ram">Ram</option>
                                                            <option value="range rover">Range Rover</option>
                                                            <option value="renault">Renault</option>
                                                            <option value="rolls-royce">Rolls-Royce</option>
                                                            <option value="rover">Rover </option>
                                                            <option value="saab">Saab</option>
                                                            <option value="seat">Seat</option>
                                                            <option value="skoda">Skoda</option>
                                                            <option value="smart">Smart</option>
                                                            <option value="ssangyong">Ssangyong</option>
                                                            <option value="subaru">Subaru</option>
                                                            <option value="sunbeam">Sunbeam</option>
                                                            <option value="suzuki">Suzuki</option>
                                                            <option value="tesla">Tesla</option>
                                                            <option value="toyota">Toyota</option>
                                                            <option value="triumph">Triumph</option>
                                                            <option value="vauxhall">Vauxhall</option>
                                                            <option value="volkswagen">Volkswagen</option>
                                                            <option value="volvo">Volvo</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-2 col-form-label"><i class="fa fa-pencil"></i>Vehicle Model Year</label>
                                                    <div class="col-10">
                                                        <select name="vehilemodel" id="vehilemodel"
                                                            class="form-control">
                                                            <option value="">Vehicle year</option>
                                                            <option value="2019">2019</option>
                                                            <option value="2018">2018</option>
                                                            <option value="2017">2017</option>
                                                            <option value="2016">2016</option>
                                                            <option value="2015">2015</option>
                                                            <option value="2014">2014</option>
                                                            <option value="2013">2013</option>
                                                            <option value="2012">2012</option>
                                                            <option value="2011">2011</option>
                                                            <option value="2010">2010</option>
                                                            <option value="2009">2009</option>
                                                            <option value="2008">2008</option>
                                                            <option value="2007">2007</option>
                                                            <option value="2006">2006</option>
                                                            <option value="2005">2005</option>
                                                            <option value="2004">2004</option>
                                                            <option value="2003">2003</option>
                                                            <option value="2002">2002</option>
                                                            <option value="2001">2001</option>
                                                            <option value="2000">2000</option>
                                                            <option value="1999">1999</option>
                                                            <option value="1998">1998</option>
                                                            <option value="1997">1997</option>
                                                            <option value="1996">1996</option>
                                                            <option value="1995">1995</option>
                                                            <option value="1994">1994</option>
                                                            <option value="1993">1993</option>
                                                            <option value="1992">1992</option>
                                                            <option value="1991">1991</option>
                                                            <option value="1990">1990</option>
                                                            <option value="1989">1989</option>
                                                            <option value="1988">1988</option>
                                                            <option value="1987">1987</option>
                                                            <option value="1986">1986</option>
                                                            <option value="1985">1985</option>
                                                            <option value="1984">1984</option>
                                                            <option value="1983">1983</option>
                                                            <option value="1982">1982</option>
                                                            <option value="1981">1981</option>
                                                            <option value="1980">1980</option>
                                                            <option value="1979">1979</option>
                                                            <option value="1978">1978</option>
                                                            <option value="1977">1977</option>
                                                            <option value="1976">1976</option>
                                                            <option value="1975">1975</option>
                                                            <option value="1974">1974</option>
                                                            <option value="1973">1973</option>
                                                            <option value="1972">1972</option>
                                                            <option value="1971">1971</option>
                                                            <option value="1970">1970</option>
                                                            <option value="1969">1969</option>
                                                            <option value="1968">1968</option>
                                                            <option value="1967">1967</option>
                                                            <option value="1966">1966</option>
                                                            <option value="1965">1965</option>
                                                            <option value="1964">1964</option>
                                                            <option value="1963">1963</option>
                                                            <option value="1962">1962</option>
                                                            <option value="1961">1961</option>
                                                            <option value="1960">1960</option>
                                                            <option value="1959">1959</option>
                                                            <option value="1958">1958</option>
                                                            <option value="1957">1957</option>
                                                            <option value="1956">1956</option>
                                                            <option value="1955">1955</option>
                                                            <option value="1954">1954</option>
                                                            <option value="1953">1953</option>
                                                            <option value="1952">1952</option>
                                                            <option value="1951">1951</option>
                                                            <option value="1950">1950</option>
                                                            <option value="1949">1949</option>
                                                            <option value="1948">1948</option>
                                                            <option value="1947">1947</option>
                                                            <option value="1946">1946</option>
                                                            <option value="1945">1945</option>
                                                            <option value="1944">1944</option>
                                                            <option value="1943">1943</option>
                                                            <option value="1942">1942</option>
                                                            <option value="1941">1941</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-2 col-form-label"><i class="fa fa-location-arrow"></i> Vehicle Licence</label>
                                                    <div class="col-10">
                                                        <input type="text" class="form-control" name="vehilelicence" id="vehilelicence" required="true">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-2 col-form-label"><i class="fa fa-bolt"></i>Vehicle Engine Type</label>
                                                    <div class="col-10">
                                                        <select name='vehicletype' id="vehicletype" class="form-control" required="true">
                                                            <option value="">Engine Type</option>
                                                            <?php $query=mysqli_query($con,"select * from tblenginetype");
                                                                while($row=mysqli_fetch_array($query))
                                                                { ?>
                                                                    <option value="<?php echo $row['enginetype'];?>"><?php echo $row['enginetype'];?></option>
                                                            <?php } ?>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-2 col-form-label"><i class="fa fa-sticky-note"></i>Registration Number</label>
                                                    <div class="col-10">
                                                        <input type="text" class="form-control" name="vehicleregno" id="vehicleregno" placeholder="Vehicle Registration Number"
                                                            required="true">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-2 col-form-label"><i class="fa fa-table"></i>
                                                        Booking Date</label>

                                                    <div class="col-10">

                                                        <input data-format="yyyy-MM-dd" style="width:200px"
                                                            autocomplete="off" type="text" class="form-control"
                                                            name="servicedate" id="servicedate"
                                                            placeholder="yyyy-mm-dd" />
                                                        <script>
                                                        $('#servicedate').datepicker({
                                                            minDate: 0,
                                                            todayHighlight: true,
                                                            autoclose: true,
                                                            beforeShowDay: function(dt) {
                                                                return [dt.getDay() == 7 || dt.getDay() ==
                                                                    0 ? false : true
                                                                ];
                                                            }


                                                        }).datepicker('update', new Date());
                                                        </script>

                                                    </div>
                                                </div>


                                                <div class="form-group row">
                                                    <label class="col-2 col-form-label"><i class="fa fa-hourglass"></i>
                                                        Booking Time</label>
                                                    <div class="col-10">
                                                        <input type="time" class="form-control" name="servicetime"
                                                            id="servicetime" required="true">
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label class="col-2 col-form-label"><i class="fa fa-server"></i>
                                                        Delivery Type</label>
                                                    <div class="col-10">
                                                        <select name="deltype" id="deltype" required="true"
                                                            class="form-control">
                                                            <option value="">Select</option>
                                                            <option value="pickupservice">Pickup Service</option>
                                                            <option value="dropservice">Drop Service</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group row" id="pickupaddress">
                                                    <label class="col-2 col-form-label">Pickup Address</label>
                                                    <div class="col-10">
                                                        <input type="text" class="form-control" name="pickupadd"
                                                            id="pickupadd">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-2 col-form-label"><i class="fa fa-comment"></i>
                                                        Description of Problem</label>
                                                    <div class="col-10">
                                                        <textarea class="form-control" id="description"
                                                            name="description" rows="3"></textarea>
                                                    </div>
                                                </div>

                                                <div class="col-12">

                                                    <div class="checkbox checkbox-custom">
                                                        <input id="remember" type="checkbox" required>
                                                        <label for="remember">
                                                            I accept <a href="terms-conditions.php"
                                                                class="text-custom">Terms and Conditions</a>
                                                        </label>
                                                    </div>

                                                </div>
                                                <div class="form-group row">

                                                    <div class="col-12">
                                                        <p style="text-align: center;"> <button type="submit"
                                                                name="submit"
                                                                class="btn btn-warning info btn-min-width mr-1 mb-1">Submit</button>
                                                        </p>
                                                    </div>
                                                </div>

                                            </form>
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

            <?php include_once('includes/footerh.php');?>
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
    <script src="assets/js/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
    <script src="assets/js/moment/moment.js"></script>
    <script src="assets/js/bootstrap-datepicker/css/bootstrap-datepicker.min.css"></script>

    <!-- App js -->
    <script src="assets/js/jquery.core.js"></script>
    <script src="assets/js/jquery.app.js"></script>
    <script>
            $(document).ready(function(){
             invalidHandler: function() {
				$( "#summary" ).text( $( "#serviceform" ).validate().numberOfInvalids() + " field(s) are invalid" );
			},
			submitHandler: function(form) {
				
				var form_data = {
					customer_id:$('#selectcustomer').val(),
					servicetype: $('#servicetype').val(),
					vehiclename: $('#vehiclename').val(),
					vehiclemake: $('#vehiclemake').val(),
					vehicleyear: $('#vehicleyear').val(),
					licenseno: $('#licenseno').val(),
					enginetype: $('#enginetype').val(),
					vehicletype: $('#vehicletype').val(),
					booking: 2,
					bookingdate: $("#bookingdate").find("input").val(),
					bookingcost: $('#servicetype option:selected').attr('cost')               	
				};
				$.ajax({
					url : "<?php echo $config['admin_url'] ?>ajax/add-booking-customer.php",
					type :"POST",
					data: form_data,
					success: function(msg){
						if(msg == 'bookingerror'){
                            $("#summary").html('<div class="alert alert-danger"><p>Something Went Wrong ! Please Try Again !</p></div>');
							$("#form_submit").attr("disabled", true);
							setTimeout(function(){
                                window.location.href = 'add-booking.php';
							}, 2000);
						}else{

							$("#form_submit").attr("disabled", true);
                            $("#summary").html('<div class="alert alert-success"><p>Booking Added Successfully !</p></div>');
							setTimeout(function(){
								window.location.href = 'add-booking.php';
							}, 2000);
						}
					}
				});
				return false;
			}
            }
        </script>

</body>

</html>