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
          <a class="nav-link active" href="feedback.php">Feedback</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="#">Tables</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="#">Search</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="aboutus.php">About Us</a>
        </li>
      </ul>

    
        <!--Here the user will give the feedback-->
    <div class="container">
      <div class="py-5 text-center">
        <h2>Feedback Form</h2>
        <p class="lead">Please give your valuable feedback</p>
        <hr class="mb-4">
      </div>
      <div class="row">
        <div class="col-md-8 order-md-1">      
          <!--Form Begins-->
          <form class="needs-validation" novalidate action="submitfeed.php" method="post">
          
          <!--Student ID-->
          <div class="col-md-5 mb-3">
              <label for="Guest Name">Student ID</label>
              <input type="text" class="form-control" id="Guest Name" name="ID" placeholder="B119026" required>
          </div>

          <!--Room -->
          <div class="col-md-3 mb-3">
            <label for="Room">Room Condition</label>
            <select class="form-select mb-2" aria-label=".form-select-lg example" id="Room" name="Room">
                    <option selected>Select</option>
                    <option value="Very Bad">Very Bad</option>
                    <option value="Bad">Bad</option>
                    <option value="Satisfactory">Satisfactory</option>
                    <option value="Good">Good</option>
                    <option value="Excellent">Excellent</option>
                    
            </select>
            </div>  

            <!--Hygiene-->
            <!--Room -->
          <div class="col-md-3 mb-3">
            <label for="Room">Hygiene</label>
            <select class="form-select mb-2" aria-label=".form-select-lg example" id="Room" name="Hyg">
                    <option selected>Select</option>
                    <option value="Very Bad">Very Bad</option>
                    <option value="Bad">Bad</option>
                    <option value="Satisfactory">Satisfactory</option>
                    <option value="Good">Good</option>
                    <option value="Excellent">Excellent</option>
                    
            </select>
            </div> 

            <!--Overall-->
            <div class="col-md-3 mb-3">
            <label for="Room">Overall Rating</label>
            <select class="form-select mb-2" aria-label=".form-select-lg example" id="Room" name="Rating">
                    <option selected>Select</option>
                    <option value="Very Bad">Very Bad</option>
                    <option value="Bad">Bad</option>
                    <option value="Satisfactory">Satisfactory</option>
                    <option value="Good">Good</option>
                    <option value="Excellent">Excellent</option>
                   
            </select>
            </div>

            <div class="form-group col-md-5 mb-3">
                <label for="exampleFormControlTextarea1">Suggessions</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="sugg"></textarea>
            </div>
            <hr class="mb-4">
            <button class="btn btn-primary btn-lg btn-block" type="submit">Submit</button>
          </form>
        </div>
      </div>



      <footer class="my-5 pt-5 text-muted text-center text-small">
        <p class="mb-1">&copy; 2017-2018 Company Name</p>
        <ul class="list-inline">
          <li class="list-inline-item"><a href="#">Privacy</a></li>
          <li class="list-inline-item"><a href="#">Terms</a></li>
          <li class="list-inline-item"><a href="#">Support</a></li>
        </ul>
      </footer>
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
