    <?php 
// Include the config file
require_once('config.php');

// Checking the database connection
$check = mysqli_connect($config['db_host'],$config['db_user'],$config['db_pass'],$config['db']);
	if (!$check) {
				
	
		echo "Failed to connect to Database: " . mysqli_connect_error();
	}

function counttotalbooking($servicedate){
	global $check;
	$checkbookings = mysqli_query($check,"SELECT count('ID) as 'bookingtotal' FROM `services` WHERE `ServiceDate` = '$servicedate'");
	 $fet_r = mysqli_fetch_assoc($checkbookings);
	 return $fet_r['bookingtotal'];
}

function loadResources() {
  $.post("backend_rooms.php", 
  function(data) {
      dp.resources = data;
      dp.update();
  });
}

