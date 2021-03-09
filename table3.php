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
      background-image: url('img/back.jpg');
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
          <a class="nav-link" href="table.php">Student_ID</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="table2.php">Guest_Detail</a>
        </li>

        <li class="nav-item">
          <a class="nav-link active" href="table3.php">Services</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="table4.php">Feedback</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="table5.php">Availabilty</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="table6.php">Billing</a>
        </li>
      </ul>


        <!--DISPLAY CONTENTS OF TABLE-->
        <div class="container">
          <div class="py-5 text-center">
          <img src="img/table.png" width="50" height="50" alt="---"><br>
            <h2><u>Services</u></h2>
            <hr class="mb-4">

            <div class="row">
            <div class="col-md-2 mb-3">
            </div>
            <div class="col-md-8 mb-3">

            <?php
                $sql = "SELECT * FROM SERVICES";
                $result = mysqli_query($conn, $sql);
    
                if (mysqli_num_rows($result) > 0)
                {
                  echo'<table class="table table-striped">
                  <thead>
                      <tr>
                      <th scope="col">Student_ID</th>
                      <th scope="col">Laundry</th>
                      <th scope="col">Room_Services</th>
                      <th scope="col">Room_Dining</th>
                      </tr>
                  </thead>';
                 // output data of each row
                  while($row = mysqli_fetch_assoc($result)) 
                  {
                    echo '<tbody>
                    <tr>
                    <th scope="row">'.$row["Student_ID"].'</th>
                    <td>'.$row["Laundry"].'</td>
                    <td>'.$row["Room_Services"].'</td>
                    <td>'.$row["Room_Dinning"].'</td>
                    </tr>';
                  }
                  echo'</tbody>
                  </table>';
                }
                else 
                {
                  echo "0 results";
                }

            ?>
            </div>
            <div class="col-md-2 mb-3">
            </div>
        </div>
          </div>
        </div>
        <br><br><br><br><br><br>


        <footer class="my-5 pt-5 text-muted text-center text-small">
        <p class="mb-1">&copy; 2021 IIITBBSR pvt.ltd</p>
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
