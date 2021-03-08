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
            $Occupants = $_POST['Check_out'];
            $days = $_POST['days']; 
            $Room = $_POST['Room'];
            $Laundry = $_POST['Laundry'];
            $Dining = $_POST['Dining'];
            $Services = $_POST['Services'];
            $Payment = $_POST['Payment'];

            echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Success!!</strong> Your responce is successfully recorded !
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                  </div>';

          //Submit these values to database tables
          $Room_Charge=$Service_Charge=$Total_Charge=0;
          if($Room=="AC")
          {
            $sql="UPDATE availabilty SET AC_Room=AC_Room+1";
            $Room_Charge=1500*$days;
          }
          else
          {
            $sql="UPDATE availabilty SET NONAC_Room=NONAC_Room+1";
            $Room_Charge=900*$days;
          }
          if (mysqli_query($conn, $sql))
           {
            echo "";
          }
           else 
           {
            echo "Error updating record: " . mysqli_error($conn);
           }
          $sql="SELECT * FROM AVAILABILTY";
          $result = mysqli_query($conn, $sql);
          $row = mysqli_fetch_assoc($result);
          $Room_No=$row["AC_Room"]+$row["NONAC_Room"];

          if($Laundry=="Yes")
          {
            $Service_Charge=$Service_Charge+50;
          }
          if($Dining=="Yes")
          {
            $Service_Charge=$Service_Charge+50;
          }
          if($Services=="Yes")
          {
            $Service_Charge=$Service_Charge+50;
          }
          $Total_Charge=$Room_Charge+$Service_Charge;
        }
      ?>

    <!--Submit verify submit to database-->
    <div class="container">
      <div class="py-5 text-center">
        <h2>Billing Deails</h2>
        <p>Your Details are recorded! Have a nice stay!!</p>
        <hr class="mb-4">
         <p class="lead">Guest Name : <?php echo"$G_name"?></p>
         <p class="lead">Room Number : <?php echo"$Room_No"?></p>
         <p class="lead">Number of days : <?php echo"$days"?></p>
         <p class="lead">Room type : <?php echo"$Room"?></p>
         <p class="lead">Room charges: <?php echo"$Room_Charge"?></p>
         <p class="lead">Service Charges: <?php echo"$Service_Charge"?></p>
         <p class="lead">Total Charges: <?php echo"$Total_Charge"?></p>
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

<!--Inserting into database-->
<?php

    $sql="INSERT INTO STUDENT_ID VALUES('$ID','$S_name')";
    if (mysqli_query($conn, $sql)) {
      echo "";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    $sql="INSERT INTO GUEST_DETAIL VALUES('$ID','$G_name','$Check_in','$Address','$Occupants','$days')";
    if (mysqli_query($conn, $sql)) {
      echo "";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    $sql="INSERT INTO SERVICES VALUES('$ID','$Laundry','$Services','$Dining')";
    if (mysqli_query($conn, $sql)) {
      echo "";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    $sql="INSERT INTO ROOMS VALUES('$ID','$Room','$Room_No','$Room_Charge')";
    if (mysqli_query($conn, $sql)) {
      echo "";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    
    $sql="INSERT INTO BILLING VALUES('$ID','$S_name','$G_name','$Occupants','$Check_in',
           '$Room_No','$Room_Charge','$Service_Charge','$Total_Charge','$Payment')";
    if (mysqli_query($conn, $sql)) {
      echo "";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
?>