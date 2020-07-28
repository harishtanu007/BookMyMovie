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

 <div class="container">

  <div class="panel with-nav-tabs panel-success">
    <div class="panel-heading">
      <ul class="nav nav-tabs">
        <li class="active"><a href="#nowshowing" data-toggle="tab">Showing Now</a></li>
        <li class="active" style="float:right;">
        <form action="" method="POST">
        <select name="Genre" onchange="this.form.submit()">
        <option value="" selected="selected">-- Choose Genre --</option>
        <option <?php echo (isset($_POST['Genre']) && $_POST['Genre'] == 'All') ? 'selected="selected"' : '';?> value="All">All</option>
       <option <?php echo (isset($_POST['Genre']) && $_POST['Genre'] == 'Action') ? 'selected="selected"' : '';?> value="Action">Action</option>
      <option <?php echo (isset($_POST['Genre']) && $_POST['Genre'] == 'Adventure') ? 'selected="selected"' : '';?> value="Adventure">Adventure</option>
      <option <?php echo (isset($_POST['Genre']) && $_POST['Genre'] == 'Comedy') ? 'selected="selected"' : '';?> value="Comedy">Comedy</option>
      <option <?php echo (isset($_POST['Genre']) && $_POST['Genre'] == 'Drama') ? 'selected="selected"' : '';?> value="Drama">Drama</option>

        </select>
       </form>
      </li>
      </ul>
    </div>
    <div class="panel-body">
      <div class="tab-content">
        <div class="tab-pane fade in active" id="nowshowing">

        
          <?php 
          $count=0;
          if($_SERVER['REQUEST_METHOD'] =='POST')
          { 
            $genre=$_POST['Genre'];
            if($genre=="All")
            {$res=$conn->query("select * from movielist;");}
            else{
            $res=$conn->query("SELECT * FROM movielist WHERE Genre= '" . $genre . "';");
            }
          }
          else{
          $res=$conn->query("select * from movielist;");
          }
          while ($row=$res->fetch_object()) {
            $_SESSION['movie']=$row->movieId;

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

                        <p><b>IMDB: </b>".$row->imdb."</p>

                        <p class='profession'><b>Genre: </b>".$row->Genre ."</p>

                        <p class='profession'><b>Director: </b> " .$row->Director ."</p>
                        

                      </div>
                    </div>
                  </div>
                  <!-- end front panel -->
                  <div class='back'>
                    <div class='content'>
                      <div class='main'>
                        <h4 class='text-center'>".$row->Name ."</h4>
                        <p class='text-center'>".$row->Description ." </p>
                      </div>
                      <div style='margin-top: 4vw;' class='buy_ticket'>

                       <form action='ticketProcessing.php' method='post' >
                        <input type='hidden' name='movieId' value='".$row->movieId."' >
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