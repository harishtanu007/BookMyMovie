
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
  <link href="css/ticket.css" rel="stylesheet">
</head>
<body>
<?php 
include 'header.php';
?>


<link href="https://fonts.googleapis.com/css?family=Cabin|Indie+Flower|Inknut+Antiqua|Lora|Ravi+Prakash" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"  />

<div class="container" style="align-items: center;">
  <h1 class="upcomming">upcomming gigs</h1>

  <?php 
//for time slot
							//$timeSlot=$conn->query("select time from timeslot");	
              $user_id=$_SESSION['user'];
//movie details
							$bookingID=$_POST['bookingID'];	
							$_SESSION['bookingID']=$bookingID;
							$res=$conn->query("SELECT bookings.bookingID,bookings.date,bookings.time,bookings.venue,bookings.seat,bookings.amount,bookings.paymentMode,bookings.movieDate,bookings.movieTime,movielist.Name, movielist.image,movielist.movieId
              FROM bookings
              INNER JOIN movielist ON bookings.movieID=movielist.movieId and bookings.bookingID=$bookingID; ");
							$row=$res->fetch_object ();

							echo '<div class="item">
                            <div class="item-right">

                            
                            <div class="cover">
                            <img class="image" src="uploadimages/'.$row->image.'"/> 
                          </div>
                              <span class="up-border"></span>
                              <span class="down-border"></span>
                            </div> <!-- end item-right -->
                            <div class="event-image"><a href="#"><span class="image"></a></div>
                            <div class="item-left">
                            
                            <div>
                              <p class="event">'.$row->Name.'</p>
                            
                              
                              <div class="sce">
                                <div class="icon">
                                  <i class="fa fa-table"></i>
                                </div>
                                <p>Show Date : '.$row->movieDate.' <br/>Show Time : '.$row->movieTime.'</p>
                              </div>
                              <div class="fix"></div>
                              <div class="loc">
                                <div class="icon">
                                  <i class="fa fa-map-marker"></i>
                                </div>
                                <p>Location : '.$row->venue.'</p>
                              </div>
                              <div class="fix"></div>
                              <div class="sce">
                                <div class="icon">
                                  <i class="fa fa-address-book"></i>
                                </div>
                                <p>Seat : '.$row->seat.'</p>
                              </div>
                              <div class="fix"></div>
                              <button class="booked">Booked</button>
                            </div> <!-- end item-right -->
                            </div>
                          </div> <!-- end item -->
                          '?>
  
  
  
  
</div>

 

</body>
</html>