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
      background-image: url('img/back5.jpg');
        background-repeat: no-repeat;
        background-attachment: fixed;  
        background-size: cover;
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
          <a class="nav-link active" href="search.php">Search</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="aboutus.php">About Us</a>
        </li>

      </ul>

        <!--php code for search-->
        <?php
            if($_SERVER['REQUEST_METHOD'])
            {
                $ID = $_POST['ID'];
            }
            $sql = "SELECT * FROM BILLING WHERE STUDENT_ID='$ID'";
            $result = mysqli_query($conn, $sql);
            $sql1= "SELECT * FROM ROOMS WHERE STUDENT_ID= '$ID'";
            $result1=  mysqli_query($conn, $sql1);
        ?>

        <!--Here the user will give the feedback-->
        <div class="container">
          <div class="py-5 text-center">
          <img src="img/search.png" width="100" height="100" alt="---"><br>
            <h2><u>Search Results</u></h2>
            <hr class="mb-4">
            <?php
            
            if (mysqli_num_rows($result) > 0)
            {
                $row = mysqli_fetch_assoc($result);
                $row1= mysqli_fetch_assoc($result1);
                echo '<p class="lead"><u>Student Details</u><p>
                <p class="lead">Student ID:'.$row["Student_ID"].'</p>
                <p class="lead">Student Name:'.$row["Student_Name"].'</p>
                <p class="lead"><u>Guest Details</u><p>
                <p class="lead">Guest Name: '.$row["Guest_Name"].'</p>
                <p class="lead">No.of Occupants: '. $row["Occupants"].'</p>
                <p class="lead">Check In date:'. $row["Check_IN"].' </p>
                <p class="lead"><u>Room Details</u><p>
                <p class="lead">Room Number:'. $row1["ROOM_NO"].' </p>
                <p class="lead">Room Number:'. $row1["ROOM_TYPE"].' </p>
                <p class="lead"><u>Payment Details</u><p>
                <p class="lead">Room charges:'. $row["Room_Charges"] .'</p>
                <p class="lead">Service Price:'.$row["Service_Price"].' </p>
                <p class="lead">Total Price:'. $row["Total_Price"].' </p>';  
            }
            else 
            {
               echo' <p class="lead">Not Found anything !</p>
                <p class="lead">Either you entered wrong ID or you have not booked in this guest house. </p> ';
            }
            ?>
          </div>
        </div>
        
        <footer class="my-5 pt-5 text-muted text-center text-small">
        <p class="mb-1">&copy; 2021 IIITBH pvt.ltd</p>
        <ul class="list-inline">
          <li class="list-inline-item"><a href="#">Privacy</a></li>
          <li class="list-inline-item"><a href="#">Terms</a></li>
          <li class="list-inline-item"><a href="#">Support</a></li>
        </ul>
      </footer>


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
