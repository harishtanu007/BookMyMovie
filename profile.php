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
	<title>Profile Page</title>
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
    <div class="left" style="width:80%">
	<?php
	if($row->image!="")
	{
	echo" 
	<img src='userimages/".$row->image."' alt='user' width='100'/> 
	";
	}
	else{
		echo" 
	<img src='userimages/user.jpg' alt='user' width='100'/> 
	";
	}
	?>
        
		<?php 

							$userId=$_SESSION['user'];
							
							$res=$conn->query("select * from user where userId='$userId';");
							$row=$res->fetch_object();

							echo "<h4>".$row->userName."</h4>";
							?>

    </div>
    <div class="right" style="width:100%; ">
        <div class="info">
            <h3>Profile Page</h3>
            <div class="info_data">
                 <div class="data">
					<h4>Email</h4>
					<?php 
					echo "<p>".$row->email."</p>";
					?>
                 </div>
                 <div class="data">
                   <h4>Phone</h4>
				   <?php 
					echo "<p>".$row->phone."</p>";
					?>
              </div>
            </div>
        </div>
      
      <div class="projects">
			<h3>Actions</h3>
		
            <div class="projects_data">
			<div class="container" >
			
			<div class="row">
				<div class="col-md-4">
					<a style="width: 100%; text-align: center;" href="booking_history.php" class="myButton">Purchase History</a>
				</div>
				<div  class="col-md-4">
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