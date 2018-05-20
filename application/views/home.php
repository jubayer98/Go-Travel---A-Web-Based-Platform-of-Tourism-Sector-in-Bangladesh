<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>GO!</title>
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
      <div class="jumbotron">
        <div class="container">
          <h1 class="display-3">GO, TRAVEL!</h1>
          <p>Let us help you to find the best solution for your travel. Where you like travel? Our smart search will provide you the best solution. Let's TRY!</p>
            <form method="post" action="<?php echo base_url();?>Welcome/result">
            <div class="input-group">
                <input class="form-control" type="text" placeholder="Search with Valid Division Name, eg. Dhaka">
				<div class="input-group-append">
                    <input class="btn btn-danger" type="submit" value="Search" name="Search">
				</div>
			</div>
            </form>
        </div>
      </div>

      <div class="container">
        <!-- Example row of columns -->
        <div class="row">
          <div class="col-md-4">
            <h2>Tourist Places</h2>
            <p>Who would like to know about the beautiful and most attractive tourist place of our country
                from authentic sources. If you are really interested in, then it is for you.</p>
            <p><a class="btn btn-secondary" href="<?php echo base_url();?>Welcome/go.html" role="button">GO &raquo;</a></p>
          </div>
          <div class="col-md-4">
            <h2>Experiences</h2>
            <p>You really like traveling? Already make plan for your next travel destination? But don't know how actually
            the place will be? Then you will get some real life travel experiences from travelers.</p>
            <p><a class="btn btn-secondary" href="<?php echo base_url();?>Welcome/travel.html" role="button">Travel &raquo;</a></p>
          </div>
          <div class="col-md-4">
            <h2>Tour Packages</h2>
            <p>Want to travel different places? But still confuse how do you manage all of the things. Don't worry too
            much. Here some tour package for you to relieve from extra planning pressure.</p>
            <p><a class="btn btn-secondary" href="<?php echo base_url();?>Welcome/enjoy.html" role="button">Enjoy &raquo;</a></p>
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
