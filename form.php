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


      <!--Form-->
    <div class="container">
      <div class="py-5 text-center">
        <h2>Check-in form</h2>
        <p class="lead">Please fill the form</p>
      </div>
      <div class="row">
        <div class="col-md-2 mb-3">
        </div>
        <div class="col-md-8 order-md-1">
          <h4 class="mb-3">Form</h4>
          
          <!--Form Begins-->
          <form class="needs-validation" novalidate action="submit.php" method="post">
          <!--Student name and ID-->
            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="firstName">Student name</label>
                <input type="text" class="form-control" id="firstName" name="S_name" placeholder="Student Name" required>
                <div class="invalid-feedback">
                  Valid first name is required.
                </div>
              </div>
              <div class="col-md-6 mb-3">
                <label for="lastName">Student Id</label>
                <input type="text" class="form-control" id="lastName" name="ID" placeholder="B119001" required>
                <div class="invalid-feedback">
                  Valid last name is required.
                </div>
              </div>
            </div>

            <!--Guest Name-->
            <div class="mb-3">
              <label for="Guest Name">Guest Name</label>
              <input type="text" class="form-control" id="Guest Name" name="G_name" placeholder="Guest Name" required>
              <div class="invalid-feedback">
                Please enter your shipping address.
              </div>
            </div>
            
            <!--Guest Address-->
            <div class="mb-3">
              <label for="address">Address</label>
              <input type="text" class="form-control" id="address" placeholder="1234 Main St" name="Address" required>
              <div class="invalid-feedback">
                Please enter your shipping address.
              </div>
            </div>

            <!--Check in and check-out-->
            <div class="row">
              <div class="col-md-4 mb-3">
                <label for="Check-In">Check-In Date</label>
                <input type="text" class="form-control" id="Check-In" name="Check_in" required>
              </div>
              <div class="col-md-4 mb-3">
                <label for="Check-out">Number of Occupants</label>
                <input type="text" class="form-control" id="Check-Out" name="Check_out" required>
              </div>
              <div class="col-md-4 mb-3">
                <label for="Check-out">Number of days</label>
                <input type="text" class="form-control" id="Check-Out" name="days" required>
              </div>
            </div>

            <div class="col-md-3 mb-3">
            <label for="Room">Room type</label>
            <select class="form-select mb-2" aria-label=".form-select-lg example" id="Room" name="Room">
                    <option selected>Select Room type</option>
                    <option value="AC">AC (Rs 1500/-)</option>
                    <option value="Non-AC">Non-AC (Rs 900/-)</option>
            </select>
            </div>

          
           <hr class="mb-4">
            <h5 class="lead">Services :-</h5>
            <div class="row">
              <div class="col-md-4 mb-3">
              <label for="Room">Laundry</label>
                  <select class="form-select mb-2" aria-label=".form-select-lg example" id="Room" name="Laundry">
                    <option selected>Laundry Required</option>
                    <option value="Yes">Yes (Rs 50/-)</option>
                    <option value="No">No</option>
                    </select>
              </div>
              <div class="col-md-4 mb-3">
                <label for="Room">Dining</label>
                  <select class="form-select mb-2" aria-label=".form-select-lg example" id="Room" name="Dining">
                    <option selected>Dining Required</option>
                    <option value="Yes">Yes (Rs 50/-)</option>
                    <option value="No">No</option>
                    </select>
              </div>
              <div class="col-md-4 mb-3">
              <label for="Room">Room Services</label>
                  <select class="form-select mb-2" aria-label=".form-select-lg example" id="Room" name="Services">
                    <option selected>Room Service</option>
                    <option value="Yes">Yes (Rs 50/-)</option>
                    <option value="No">No</option>
                    </select>
              </div>
            </div>
           
            <hr class="mb-4">
            <div class="col-md-4 mb-3">
              <label for="Room">Payment mode</label>
                  <select class="form-select mb-2" aria-label=".form-select-lg example" id="Room" name="Payment">
                    <option selected>Select Mode</option>
                    <option value="Cash">Cash</option>
                    <option value="Credit Card">Credit Card</option>
                    <option value="Debit Card">Debit Card</option>
                    <option value="Net Banking">Net Banking</option>
                    </select>
              </div>
                 <div class="py-5 text-center">
                 <hr class="mb-4">
                     <button class="btn btn-primary btn-lg btn-block" type="submit">Submit</button>
                 </div>
          </form>
        </div>
      </div>
    
      <footer class="my-5 pt-5 text-muted text-center text-small">
        <p class="mb-1">&copy; 2021 IIITBBSR pvt.ltd</p>
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
