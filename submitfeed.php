<?php
$servername = "localhost";
$username = "root";
$password = "12345";
$dbname = "IIIT_BH_GuestHouse";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
?>
<!doctype html>
<html lang="en">
  <head>
     <!-- Required meta tags -->
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">
 
     <!-- Bootstrap CSS -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
 
  </head>
  <style>
    body
    {
        margin:5px;
        padding:5px;
    }
 </style>
  <body class="bg-light">

    <!--navigation bar-->
    <ul class="nav nav-tabs navbar navbar-expand-lg navbar-light bg-light">
        <li class="nav-item">
          <a class="nav-link" href="index.php">Home</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="form.php">Book now!</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="feedback.php">Feedback</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="table.php">Tables</a>
        </li>

        <li class="nav-item">
          <a class="nav-link active" href="#">Search</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="aboutus.php">About Us</a>
        </li>
      </ul>

      <?php
        if($_SERVER['REQUEST_METHOD'])
        {   
          
            $ID = $_POST['ID'];
            $Room = $_POST['Room'];
            $Hyg = $_POST['Hyg'];
            $Rating = $_POST['Rating'];
            $sugg = $_POST['sugg'];


            echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Success!!</strong> Your responce is successfully recorded !
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                  </div>';
              
          //Submit these values to database tables
        }
      ?>

      <div class="container">
      <div class="py-5 text-center">
        <h2>Thank You</h2>
        <p class="lead">Your feedback is submitted</p>
        <hr class="mb-4">
        <a class="btn btn-primary btn-lg" href="index.php" role="button">Home</a>
      </div>
      </div>
        



  <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="../../assets/js/vendor/popper.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <script src="../../assets/js/vendor/holder.min.js"></script>
  </body>
</html>

<?php

$sql="INSERT INTO FEEDBACK VALUES('$ID','$Room','$Hyg','$Rating','$sugg')";
if (mysqli_query($conn, $sql)) {
  echo "";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
?>