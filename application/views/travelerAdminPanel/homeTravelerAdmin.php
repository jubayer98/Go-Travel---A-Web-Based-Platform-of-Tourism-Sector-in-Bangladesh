<!doctype html>
<html lang="en">
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

	<title>Traveler Admin</title>
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
			<!--<li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Settings</a>
				<div class="dropdown-menu" aria-labelledby="dropdown01">
					<a class="dropdown-item" href="<?php /*echo base_url();*/?>Welcome/contributerRegistration.html">As Contributor</a>
					<a class="dropdown-item" href="<?php /*echo base_url();*/?>Welcome/travelerRegistration.html">As Traveler</a>
					<a class="dropdown-item" href="<?php /*echo base_url();*/?>Welcome/agencyRegistration.html">As Agency</a>
				</div>
			</li>
			<li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Login</a>
				<div class="dropdown-menu" aria-labelledby="dropdown01">
					<a class="dropdown-item" href="<?php /*echo base_url();*/?>Welcome/contributerLogin.html">As Contributor</a>
					<a class="dropdown-item" href="<?php /*echo base_url();*/?>Welcome/travelerLogin.html">As Traveler</a>
					<a class="dropdown-item" href="<?php /*echo base_url();*/?>Welcome/agencyLogin.html">As Agency</a>
				</div>
			</li>-->
			<li class="nav-item">
				<a class="nav-link" href="<?php echo base_url();?>TravelerAdminC/viewTravelerExperienceInformation.html">Experiences</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="<?php echo base_url();?>TravelerLC/travelerLogout.html">Logout</a>
			</li>
		</ul>
	</div>
</nav>

<main role="main">

	<br><br><br>
	<div class="container">
		<h3 class="alert alert-success">Welcome, <span style="color: #bb8844"><?php echo $this->session->userdata('inputTravelerFullName'); ?></span></h3>
	</div>

	<div class="container">
		<!-- Example row of columns -->
		<div class="row">
			<div class="col-md-12">
				<form method="post" action="<?php echo base_url();?>TravelerAdminC/saveTravelerExperienceInformation.html" enctype="multipart/form-data">
					<div class="form-group row">
						<label for="travelerExperienceTitle" class="col-sm-2 col-form-label">Experience Title</label>
						<div class="col-sm-10">
							<input type="name" class="form-control" name="inputExperienceTitle" placeholder="Enter Experience Title" required="">
						</div>
					</div>
					<div class="form-group row">
						<label for="travelerExperienceDetails" class="col-sm-2 col-form-label">Experience Details</label>
						<div class="col-sm-10">
							<textarea type="text" class="form-control" name="inputExperienceDetails" placeholder="Enter Experience Details" required=""></textarea>
						</div>
					</div>
					<div class="form-group row">
						<label for="travelingDivision" class="col-sm-2 col-form-label">Division</label>
						<div class="col-sm-10">
							<select name="inputTravelingDivision" class="form-control" required="">
								<option value="Dhaka">Dhaka</option>
								<option value="Chittagong">Chittagong</option>
								<option value="Sylhet">Sylhet</option>
								<option value="Rangpur">Rangpur</option>
								<option value="Rajshahi">Rajshahi</option>
								<option value="Khulna">Khulna</option>
								<option value="Barishal">Barishal</option>
								<option value="Mymensingh">Mymensingh</option>
							</select>
						</div>
					</div>
					<div class="form-group row">
						<label for="travelerExperienceRemember" class="col-sm-2 col-form-label">Things to Remember</label>
						<div class="col-sm-10">
							<textarea type="text" class="form-control" name="inputTravelingThingsToRemember" placeholder="Enter What Should Be Remembered" required=""></textarea>
						</div>
					</div>
					<div class="form-group row">
						<label for="travelerExperienceExpense" class="col-sm-2 col-form-label">Possible Expense (PP)</label>
						<div class="col-sm-10">
							<input type="name" class="form-control" name="inputTravelingPossibleExpense" placeholder="Enter Possible Expense for Per Person" required="">
						</div>
					</div>
					<div class="form-group row">
						<label for="addTravelPlacePicturesFile" class="col-sm-2 col-form-label">Moment of Your Experience</label>
						<div class="col-sm-10">
							<input type="file" class="form-control-file" name="inputTravelMomentExperiencePicture" required="">
						</div>
					</div>
					<div class="row">
						<div class="col-12">
							<button type="submit" class="btn btn-warning" style="float: right">Share Your Experience</button>
						</div>
					</div>
				</form>
			</div>

		</div>

		<hr>
		<h5 style="color: #ff7f50">
			<?php
			$ProductInformation = $this->session->userdata('save_product');
			if(isset($ProductInformation))
			{
				echo $ProductInformation;
				$this->session->unset_userdata('save_product');
			}
			?>
		</h5>

	</div> <!-- /container -->

	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
