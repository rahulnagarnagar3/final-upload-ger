<?php 
// Include functions.php for database connection variable
require_once('../functions/functions.php');
require_once('../functions/config.php');
if(isset($_POST['booking'])){
	$ID = "";
	
    $booking_id="";
    $customer_id = mysqli_real_escape_string($check,$_POST['ID']);
	$bookingdate = mysqli_real_escape_string($check,$_POST['ServicerequestDate']);
	$servicetype = mysqli_real_escape_string($check,$_POST['ServiceType']);
	$vehiclename = mysqli_real_escape_string($check,$_POST['VehicleName']);
	$vehiclemake  = mysqli_real_escape_string($check,$_POST['vehicleModel']);
	$vehicleyear = mysqli_real_escape_string($check,$_POST['VehicleBrand']);
	$licenseno = mysqli_real_escape_string($check,$_POST['VehicleRegno']);
	$vehicletype = mysqli_real_escape_string($check,$_POST['Category']);
	
	
	
// Calling functions from functions.php
	$bookingtotal = counttotalbooking($bookingdate);


	if($bookingtotal < $config['bookings_per_day']){
					$q1 = mysqli_query($check,"INSERT INTO `services` (`ID`, `Category`,`ServiceType`,`VehicleName`, `VehicleRegno`, `VehicleBrand`, `VehicleModel`, `ServicerequestDate`, `UserId`) VALUES (NULL, '$vehiclename', $servicetype','$licenseno', '$vehiclemake', '$vehicleyear', '$vehicletype', '$bookingdate','$customer_id')");
			if($q1){
				
				$ID =  $check->insert_id;
				
				$q2 = mysqli_query($check,"INSERT INTO `booking` (`booking_id`,  `status`, `ordered_date`, `customer_id_fk`, `service_id_fk`) VALUES (NULL,  'Booked', '$bookingdate', '$customer_id', '$servicetype')");
				
			}		
		}
	}else{
		echo 'bookingerror';
	}





}


?>