<?php 
if (!session_id()) {
	session_start();
} 
include 'db.php';

?>

<!DOCTYPE html>
<html>
<head>
	<link href="js/bootstrap.min.css" rel='stylesheet' type='text/css' />
	<link href="css/default.css" rel="stylesheet" type="text/css" media="all" />
  <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
  <script type="text/javascript" src="js/script.js"></script>
  <script src="js/main.js"></script>
</head>
<style>
/* Styles for wrapping the search box */


/* Bootstrap 4 text input with search icon */


</style>
<body >


<div class="navbar-wrapper" style="background-color: #283C53; height:65px; padding:10px" >
      <div >
        
      
        <nav class="navbar navbar-default navbar-static-top">
          <div class="container">
            <div class="navbar-header">
              <a class="navbar-brand" style="color:#FFFFFF" href="index.php">BookMyMovie</a>
  ` 
  
  <!-- Another variation with a button -->
  <!-- <form action="/action_page.php">
  <div class="input-group" style="position:relative;margin-top:-16px">
    <input type="text" name="search" class="form-control" placeholder="Search movie.." style="margin-left: 80px; width:200%; " >
  
      <button class="btn btn-secondary" type="button" style=" border-width: 2px;
  
    font-weight: 800;
    opacity: 1;

    padding: 8px 16px;
    border-color: #AAAAAA;
    color: white;
    background-color: gray;
    position: absolute;">
        <i class="fa fa-search"></i>
      </button>
      </form> -->
    
  
  
<!-- </div>
              <div class="search-container"> 
    <form action="/action_page.php">
      <input type="text" placeholder="Search.." name="search">
      <button type="submit"><i class="fa fa-search"></i></button>
    </form>
  </div> -->
            
            <!--  <div class="search-wrapper">
              <div class="input-group">
                <input type="text" class="form-control" placeholder="Search this blog">
                <div class="input-group-append">
                    <button class="btn btn-secondary" type="button">
                        <i class="fa fa-search"></i>
                    </button>
                </div>
            </div> -->
              <!-- <input type="text" name="movie-name" id="searchbar" placeholder="Search..." onkeyup="search()"><i class="fa fa-search search-icon" aria-hidden="true">
              <input type="text" name="movie-name" id="search" id="searchbar" placeholder="Search">  -->

               <!-- Another variation with a button -->
      

            <!-- Actual search box -->
          

            <!-- Another variation with a button -->
            
   <!-- Suggestions will be displayed in below div. -->
   <div id="display"></div>
            </i>
            
            </div>
            <div id="navbar" class="navbar-collapse collapse float-right">
            
              <ul class="nav navbar-nav navbar-right">
              <?php 
            if (!empty($_SESSION['user'])) {
              $userId=$_SESSION['user'];
              $res=$conn->query("select * from user where userId='$userId';");
              $row=$res->fetch_object();   
              if($userId==1)
              {
                 
              echo "<li ><a href='javascript:void(0)' style='color:#FFFFFF' onclick='openAdminPage()'> </span>". strtoupper($row->userName)."</a></li>";
              }
              else
              {
                echo "<li ><a href='javascript:void(0)' style='color:#FFFFFF' onclick='openProfilePage()'> </span>". strtoupper($row->userName)."</a></li>";
              }
            }
            else {
              echo   "<li><a href='javascript:void(0)' style='color:#FFFFFF' onclick='openLoginModal()'><span class='glyphicon glyphicon-log-in'></span> Login </a></li>";
            }
						
            
            
            ?>

<?php 
            if (!empty($_SESSION['user'])) {
              $userId=$_SESSION['user'];
              $res=$conn->query("select * from user where userId='$userId';");
              $row=$res->fetch_object();  
              if($userId==1)
              {
                echo '
            <li><div id="mySidenav" class="sidenav">
  <a  class="closebtn" onclick="closeNav()">&times;</a>
  <a  onclick="openAdminPage()">Admin Page</a>
  <a  onclick="openHistoryPage()">Purchase History</a>
  <a href="logout.php">Logout</a>
</div></li>
<span style="font-size:30px;cursor:pointer; color:#FFFFFF" onclick="openNav()">&#9776;</span>
';

              }   
              else{ 
              echo '
            <li><div id="mySidenav" class="sidenav">
  <a  class="closebtn" onclick="closeNav()">&times;</a>
  <a  onclick="openProfilePage()">Profile</p>
  <a  onclick="openHistoryPage()">Purchase History</a>
  <a href="logout.php">Logout</a>
</div></li>
<span style="font-size:30px;cursor:pointer; color:#FFFFFF" onclick="openNav()">&#9776;</span>
';}
            }
?>

<script>
function openNav() {
  document.getElementById("mySidenav").style.width = "450px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}



function openHistoryPage(){
  window.open("booking_history.php"); 
  
}
</script>
              <!-- <li><a href='javascript:void(0)' onclick='openLoginModal()'><span class='glyphicon glyphicon-log-in'></span> Login </a></li> -->
              </ul>
             
            </div>
            
          </div>
        </nav>

      </div>
    </div>
</body>
</html>

