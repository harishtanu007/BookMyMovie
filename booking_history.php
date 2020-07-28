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
  <link href="https://bootswatch.com/flatly/bootstrap.css" rel="stylesheet">
  <link href="http://netdna.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" rel="stylesheet">

  <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
  <link href="css/ie10-viewport-bug-workaround.css" rel="stylesheet">

  <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
  <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
  <script src="js/ie-emulation-modes-warning.js"></script>
  <script src="js/main.js"></script>


  <!-- Custom styles for this template -->
  <link href="css/rotating-card.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">
  <link href="css/anotherDefault.css" rel="stylesheet">
</head>
<body>
<?php 
include 'header.php';
?>
 <div class="container" style="padding-top: 80px">

  <div class="panel with-nav-tabs panel-success">
    <div class="panel-heading">
      <ul class="nav nav-tabs">
        <li class="active"><a href="#nowshowing" data-toggle="tab">Purchase History</a></li>
        <li class="active" style="float:right;">
      </li>
      </ul>
    </div>
    <div class="panel-body">
      <div class="tab-content">
        <div class="tab-pane fade in active" id="nowshowing">

        
		  <?php 
		  $user_id=$_SESSION['user'];
          $count=0;
         
		//	$res=$conn->query("SELECT * FROM bookings where userId= '" . $user_id . "' ;");
		//	$res=$conn->query("SELECT * FROM movielist WHERE movieId IN (SELECT id FROM bookings WHERE userId='" . $user_id . "');");
			$res=$conn->query("SELECT bookings.date,bookings.time,bookings.venue,bookings.seat,bookings.amount,bookings.paymentMode,bookings.movieDate,bookings.movieTime,movielist.Name, movielist.image
			FROM bookings
			INNER JOIN movielist ON bookings.movieID=movielist.movieId and bookings.userID=$user_id;");
          while ($row=$res->fetch_object()) {
			

            if ($count==4) {
              echo "<div class='row'>";
              $count=0;
            }

            echo " 
            <div class='col-md-3 col-sm-12'>
              <div class='card-container'>
                <div class='card'>
                  <div class='front'>
                    <div class='cover'>
                      <img src='uploadimages/".$row->image."'/> 
                    </div>
                    <div class='content'>
                      <div class='main'>
                        <h3 class='name'>".$row->Name ."</h3>

                        <p><b>Show Timings: </b>".$row->movieDate." ".$row->movieTime."</p>

                        <p class='profession'><b>Seat: </b>".$row->seat ."</p>

						<p class='profession'><b>Venue: </b> " .$row->venue ."</p>
                        

                      </div>
                    </div>
                  </div>
                  <!-- end front panel -->
                  <div class='back'>
                    <div class='content'>
                      <div class='main'>
                        <h4 class='text-center'>".$row->Name ."</h4>
                        
                      </div>
                      <div style='margin-top: 4vw;' class='buy_ticket'>

                       <form action='ticketProcessing.php' method='post' >
                        
                        <input type='submit'  class='btn btn-primary btn-xs btn-block' type='submit' value='Showtime and Details' name='submit'>
                      </form>

                    </div>
                  </div>
                </div> <!-- end card -->
              </div> <!-- end card-container -->
            </div>
          </div>";

            $count++;
          } ?>


          
        </div>
      </div>
    </div>
  </div>
</div>
</div>
</div>

</body>
</html>