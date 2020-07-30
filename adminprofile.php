<?php 
if (!session_id()) {
	# code...
	session_start();
}
include 'db.php';

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/customerPanel.css">
	<link href="js/bootstrap.min.css" rel='stylesheet' type='text/css' />
</head>
<body>
<?php 
include 'header.php';
?>
	<div class="container" style="padding-top: 60px">
		
			</div>

			<div class="wrapper">
   
    <div class="right" style="width:100%; ">
        
      
      <div class="projects">
			<h3>ADMIN Actions</h3>
		
            <div class="projects_data">
			<div class="container" >
			
			<div class="row">
            <div class="">
					<a style="width: 100%; text-align: center;" href="AddMovie.php" class="myButton">ADD MOVIE</a>
				</div>
				<div  class="">
					<a style="width: 100%; text-align: center; margin-top: .5vw;" href="addtheater.php" class="myButton">ADD THEATRE</a>
                </div>
                <div class="">
					<a style="width: 100%; text-align: center; margin-top: .5vw;" href="addTimeSlot.php" class="myButton">ADD TIME SLOT</a>
                </div>
                <div class="">
					<a style="width: 100%; text-align: center; margin-top: .5vw;" href="booking_history.php" class="myButton">PURCHASE HISTORY</a>
				</div>
				<div  class="">
					<a style="width: 100%; text-align: center; margin-top: .5vw;" href="logout.php" class="myButton">Logout </a>
				</div>
				
			</div> 

		</div>
                
            </div>
        </div>
      
    
    </div>
</div>

		</body>
		</html>