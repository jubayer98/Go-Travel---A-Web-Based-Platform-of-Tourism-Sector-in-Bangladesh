<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Agency REG</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="<?php echo base_url();?>">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Registration</a>
            <div class="dropdown-menu" aria-labelledby="dropdown01">
              <a class="dropdown-item" href="<?php echo base_url();?>Welcome/contributerRegistration.html">As Contributor</a>
              <a class="dropdown-item" href="<?php echo base_url();?>Welcome/travelerRegistration.html">As Traveler</a>
              <a class="dropdown-item" href="<?php echo base_url();?>Welcome/agencyRegistration.html">As Agency</a>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Login</a>
            <div class="dropdown-menu" aria-labelledby="dropdown01">
              <a class="dropdown-item" href="<?php echo base_url();?>Welcome/contributerLogin.html">As Contributor</a>
              <a class="dropdown-item" href="<?php echo base_url();?>Welcome/travelerLogin.html">As Traveler</a>
              <a class="dropdown-item" href="<?php echo base_url();?>Welcome/agencyLogin.html">As Agency</a>
            </div>
          </li>
        </ul>
      </div>
    </nav>

    <main role="main">

      <!-- Main jumbotron for a primary marketing message or call to action -->
      <br><br><br>
      <div class="container">
        <!-- Example row of columns -->
        <div class="row">
          <div class="col-md-12">
            <h2>Agency Registration</h2>
            <hr>
            <form name="Agency Information" class="form-horizontal" method="post" action="<?php echo base_url();?>Agency/agencyRegistrationInformation">
  <div class="form-group">
    <label for="inputAgencyName" class="col-sm-2 control-label">Agency Name</label>
    <div class="col-sm-10">
      <input type="name" class="form-control" name="inputAgencyName" placeholder="Agency Name" required="">
    </div>
  </div>
  <div class="form-group">
    <label for="inputAgencyEmail" class="col-sm-2 control-label">Email</label>
    <div class="col-sm-10">
      <input type="Email" class="form-control" name="inputAgencyEmail" placeholder="Email" required="">
    </div>
  </div>
  <div class="form-group">
    <label for="inputAgencyPassword" class="col-sm-2 control-label">Password</label>
    <div class="col-sm-10">
      <input type="Password" class="form-control" name="inputAgencyPassword" placeholder="Password" required="">
    </div>
  </div>
  <div class="form-group">
    <label for="inputAgencyLicenseNumber" class="col-sm-2 control-label">License No</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="inputAgencyLicenseNumber" placeholder="License No" required="">
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-success">Registration</button>
    </div>
  </div>
</form>
          </div>
        </div>

        <hr>

      </div> <!-- /container -->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
