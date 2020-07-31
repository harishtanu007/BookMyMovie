<?php 
if (!session_id()) {
	session_start();
} 
include 'db.php';


$seat=$_POST['seat']-1;
$movie_id=$_POST['movie_id'];
$theater=$_POST['theater'];
$date = $_POST['date'];
$time = $_POST['time'];
$amount = $_POST['amount'];
$payment_mode = $_POST['payment_mode'];
if (!empty($_SESSION['user'])) {
	$user_id=$_SESSION['user'];
}

$sql="update showOrder set seat=".$seat." where showOrderId=".$_POST['showOrderId'].";";
if ($conn->query($sql) === TRUE) {
	//echo "succeed";
	$_SESSION['msg']="Ticket Booking Confirm";

	date_default_timezone_set('US/Eastern');
    echo date_default_timezone_get();

	$booking_date = date('y-m-d');
	$booking_time = date('h:i A');

	// echo "\nmovie_id $movie_id";
	// echo "\nmovie_id $booking_date";
	// echo "\nmovie_id $booking_time";
	// echo "\nmovie_id $theater";
	// echo "\nmovie_id $seat";
	// echo "\nmovie_id $user_id";
	// echo "\nmovie_id $amount";
	// echo "\nmovie_id $payment_mode";
	// echo "\nmovie_id $date";
	// echo "\nmovie_id $time";
	

	$sql="INSERT INTO bookings(bookingID,movieID,date,time,venue,seat,userId,amount,paymentMode,movieDate,movieTime)  VALUES ('','".$movie_id."','".$booking_date."','". $booking_time. "','".$theater."','".$seat."','".$user_id."','".$amount."','".$payment_mode."','".$date."','". $time. "');";
if ($conn->query($sql) === TRUE) {
	//echo "succeed";
	$_SESSION['msg1']="Ticket Booking Confirm";
}
else{
	echo "Error: " . $sql . "<br>" . $conn->error;
}

}
else{
	echo "Error: " . $sql . "<br>" . $conn->error;
}
header('Location: booking_history.php')
?>

