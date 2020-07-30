  <?php
  if (!session_id()) {
    session_start();
  }
  include_once ('db.php');



 /* $user="mamun";
 $pass="mamun";*/


 $user=$_REQUEST['postName'];
 $pass=$_REQUEST['postPassword'];
 $email_id=$_REQUEST['postEmail'];
 $phone_number=$_REQUEST['postPhone'];
 $image=$_REQUEST['postImage'];
 

 if ($user=="" || $pass=="" || $email_id=="" || $phone_number=="") {
    echo "3";// trying to stop null input
  }{

    $usrNameUnique=true;
    $sql="select userName from user;";
    $res=$conn->query($sql);
    while ($row=$res->fetch_assoc()) {
      if ($user===$row['userName']) {
        $usrNameUnique=false;
        break;          
      }         
    }
    if (!($usrNameUnique)) {

      echo "2";//username is not unique
    }else{

      echo "1";//registration complete
      $data=new Deliveryman();
      $var= $data->initialize($conn,$user,$pass,$email_id,$phone_number,$image);

    }
  }


  class Deliveryman
  {

    function initialize($conn,$user,$pass,$email_id,$phone_number,$image)
    {
      $sql="insert into user( userID,userName, password,status,email,phone,image) values('',?,?,202,?,?,?);";

      if (($stmt=$conn->prepare($sql))
        ) {
        $stmt->bind_param("sssss",$userName,$password,$email,$phone,$userimage);


    }else
    {
      var_dump($conn->error);

    }

    $userName=$user;
    $password=$pass;
    $email=$email_id;
    $phone=$phone_number;

    $target="userimages/".basename($image);
		$userimage= basename($image);
    $image_tmp= $_FILES["postImage"]["tmp_name"];
    
    if ($stmt->execute()) {



			if(move_uploaded_file($image_tmp, $target))
			{

				echo "<script>alert('Movie Successfully Added');</script>";

			}
			else{

				echo "<script>alert('Movie failed to add');</script>";



			}
		}


    $stmt->close();

    
  }
}

?>