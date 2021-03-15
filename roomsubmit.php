<?php
$servername = "localhost";
$username = "root";
$password = "12345";
$dbname = "IIIT_BH_GuestHouse";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
?>
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
      background-image: url('img/back10.jpg');
        background-repeat: no-repeat;
        background-attachment: fixed;  
        background-size: cover;
    }
 </style>
  <body class="bg-light">

    <!--navigation bar-->
    <ul class="nav nav-tabs navbar navbar-expand-lg navbar-light bg-light">

        <li class="nav-item">
          <a class="nav-link disabled" href="#">Search &raquo;</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="index.php">Home</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="search.php">Student</a>
        </li>

        <li class="nav-item">
          <a class="nav-link active" href="roomsearch.php">Rooms</a>
        </li>

      </ul>

        <!--php code for search-->
        <?php
            if($_SERVER['REQUEST_METHOD'])
            {
                $Room = $_POST['Room'];
            }
            if($Room=="All")
            {
                $sql="SELECT * FROM ROOMS";
                $result=  mysqli_query($conn, $sql);
                $f=1;
            }
            else 
            {
               $sql="SELECT * FROM ROOMS WHERE ROOM_TYPE='$Room'";
               $result=  mysqli_query($conn, $sql);
               $f=2;
            }
        ?>

        <!--Here the user will give the feedback-->
        <div class="container">
          <div class="py-5 text-center">
          <img src="img/housesearch.png" width="100" height="100" alt="---"><br>
            <h2><u> <?php echo"$Room Room Details"; ?> </u></h2>
            <hr class="mb-4">

            <div class="row">
            <div class="col-md-2 mb-3">
            </div>
            <div class="col-md-8 mb-3">
            <?php
            
            if (mysqli_num_rows($result) > 0)
                {
                  echo'<table class="table table-striped">
                  <thead>
                      <tr>
                      <th scope="col">Room Type</th>
                      <th scope="col">Guest Name</th>
                      <th scope="col">Room Number</th>
                      <th scope="col">No of days</th>
                      <th scope="col">Room Charges</th>
                      </tr>
                  </thead>';
                 // output data of each row
                  while($row = mysqli_fetch_assoc($result)) 
                  {
                
                    $ID=$row['STUDENT_ID'];
                   $sql1="SELECT * FROM GUEST_DETAIL WHERE STUDENT_ID='$ID'";
                    $result1=  mysqli_query($conn, $sql1);    
                    $row1= mysqli_fetch_assoc($result1);

                    echo '<tbody>
                    <tr>
                    <th scope="row">'.$row["ROOM_TYPE"].'</th>
                    <td>'.$row1["Guest_Name"].'</td>
                    <td>'.$row["ROOM_NO"].'</td>
                    <td>'.$row1["Days"].'</td>
                    <td>'.$row["PRICE"].'</td>
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
