<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <title>Hello, world!</title>
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
          <a class="nav-link active" href="form.php">Book now!</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="feedback.php">Feedback</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="table.php">Tables</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="#">Search</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="aboutus.php">About Us</a>
        </li>
      
      </ul>


      <!--php script for getting variables from form.php -->   
      <?php
        if($_SERVER['REQUEST_METHOD'])
        {   
            $S_name = $_POST['S_name'];
            $ID = $_POST['ID'];
            $G_name = $_POST['G_name'];
            $Address = $_POST['Address'];
            $Check_in = $_POST['Check_in'];
            $Check_out = $_POST['Check_out'];
            $days = $_POST['days']; 
            $Room = $_POST['Room'];
            $Laundry = $_POST['Laundry'];
            $Dining = $_POST['Dining'];
            $Services = $_POST['Services'];

            echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Success!!</strong> Your responce is successfully recorded !
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>';

          // These are the variables from BOOKING FORM.
          // Insert these variables in respective tables in database.
          // Use sql command with php to insert rows.
        }
      ?>

    <!--Submit verify submit to database-->
    <div class="container">
      <div class="py-5 text-center">
        <h2>Form Submitted</h2>
        <p>Your Details are recorded! Have a nice stay!!</p>
        <div class="container">
            <div class="row">
              <div class="col">
              </div>
              <div class="col-3">
                <ul class="list-group">
                    <li class="list-group-item">Student Name:   <?php echo"$S_name"?></li>
                    <li class="list-group-item">Student ID   : <?php echo"$ID"?>   </li>   
                    <li class="list-group-item">Guest Name   : <?php echo"$G_name"?>   </li>   
                    <li class="list-group-item">Address      : <?php echo"$Address"?></li>   
                    <li class="list-group-item">Room Type    : <?php echo"$Room"?></li>   
                    <li class="list-group-item">Laundry Required: <?php echo"$Laundry"?></li>   
                    <li class="list-group-item">Dining Required: <?php echo"$Dining"?></li>   
                    <li class="list-group-item">Room Service :   <?php echo"$Services"?></li>
                    <li class="list-group-item">Number of days :   <?php echo"$days"?></li>     
                </ul>
              </div>
              <div class="col">
              </div>
         </div>
        <br><br>
        <a class="btn btn-primary btn-lg" href="feedback.php" role="button">Give Feedback</a>
      </div>
    </div>  
        <br>
    
    

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
    -->
  </body>
</html>
