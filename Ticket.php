
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
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

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

<div class="container" style="align-items: center; margin-top:80px;">
  

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
                              <p class="event"><b>'.$row->Name.'</b></p>
                            
                              
                              <div class="sce">
                                <div class="icon">
                                  <i class="fa fa-table"></i>
                                </div>
                                <p><b>Show Date : </b>'.$row->movieDate.' <br/><b>Show Time : </b>'.$row->movieTime.'</p>
                              </div>
                              <div class="fix"></div>
                              <div class="loc">
                                <div class="icon">
                                  <i class="fa fa-map-marker"></i>
                                </div>
                                <p><b>Location : </b>'.$row->venue.'</p>
                              </div>
                              <div class="fix"></div>
                              <div class="loc">
                                <div class="icon">
                                <i class="material-icons">event_seat</i>
                                </div>
                                <p><b>Seat : </b>'.$row->seat.'</p>
                              </div>
                              <div class="fix"></div>
                              <div class="loc">
                                <div class="icon">
                                  <i class="fa fa fa-dollar"></i>
                                </div>
                                <p><b>Amount paid : </b>'.$row->amount.'</p>
                              </div>
                            </div>
                              <div class="fix"></div>
                              <button class="booked">Booked</button>
                            </div> <!-- end item-right -->
                           
                            
                          </div> <!-- end item -->
                          '?>
  
  
  
  
</div>

 

</body>
</html>