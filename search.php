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


        <!--Here the user will give the feedback-->
        <div class="container">
          <div class="py-5 text-center">
          <img src="img/search.png" width="100" height="100" alt="---"><br>
            <h2><u>Search</u></h2>
            <p class="lead">Enter Student ID to get all details</p><br>
            <hr class="mb-4">
            <div class="row">
                <div class="col-md-4 mb-3">
                </div>
                <div class="col-md-6 mb-3">
                    <form class="needs-validation" novalidate action="#" method="post">
                    <div class="col-md-8 mb-3">
                        <label for="lastName">Student ID</label>
                        <input type="text" class="form-control" id="lastName" name="ID" placeholder="Type your ID here" required>
                        <hr class="mb-4">
                            <button class="btn btn-primary btn-lg btn-block" type="submit">Submit</button>
                    </div> 
                    </form>
                </div>
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
