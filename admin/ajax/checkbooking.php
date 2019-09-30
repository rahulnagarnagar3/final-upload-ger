<?php
 require_once('../functions/functions.php');
 require_once('../functions/config.php');

bookingdate = mysqli_real_escape_string($check,$_POST['servicedate']);
    $result = mysqli_query($check, "Select * from services where `ServiceDate` = '$servicedate'");
    $num = mysqli_num_rows($result);
    echo $num;
    if($num > 0){
       // Check Condition 
    	if($num < $config['bookings_per_day']){
    		echo "true";
    	}
    } else {
        echo "false";
    }
    mysqli_close($check);
?>


?>