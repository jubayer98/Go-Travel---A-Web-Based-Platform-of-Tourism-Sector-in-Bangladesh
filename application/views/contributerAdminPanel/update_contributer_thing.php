<!doctype html>
<html lang="en">
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

	<title>Contributor Admin</title>
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
				<a class="nav-link" href="<?php echo base_url();?>ContributerAdminC/viewContributionThingInformation.html">Contributions</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="<?php echo base_url();?>ContributerAdminC/createContributionThing.html">Create CT</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="<?php echo base_url();?>ContributerLC/contributerLogout.html">Logout</a>
			</li>
		</ul>
	</div>
</nav>
<main role="main">

	<br><br><br>
	<div class="container">
		<p class="alert alert-success">Hey! <span style="color: #bb8844"><?php echo $this->session->userdata('inputContributerFullName'); ?></span>, from here you can update your <strong>Contribution</strong> information.</p>
	</div>

	<div class="container">
		<!-- Example row of columns -->
		<div class="row">
			<div class="col-md-12">
				<form method="post" action="<?php echo base_url();?>ContributerAdminC/updatedContributionThingInformation.html" enctype="multipart/form-data">
					<div class="form-group row">
						<label for="contributionThingTitle" class="col-sm-2 col-form-label">Tourist Place Name</label>
						<div class="col-sm-10">
							<input type="hidden" class="form-control" name="contribution_id" value="<?php echo $updateContributionThingInformation->contribution_id?>">
							<input type="name" class="form-control" name="inputTouristPlaceName" value="<?php echo $updateContributionThingInformation->inputTouristPlaceName?>" placeholder="Enter Tourist Place Name" required="">
						</div>
					</div>
					<div class="form-group row">
						<label for="contributionThingDetails" class="col-sm-2 col-form-label">Place Details</label>
						<div class="col-sm-10">
							<textarea type="text" class="form-control" name="inputPlaceDetails" placeholder="Enter Place Details" required=""><?php echo $updateContributionThingInformation->inputPlaceDetails?></textarea>
						</div>
					</div>
					<div class="form-group row">
						<label for="contributionDivision" class="col-sm-2 col-form-label">Division</label>
						<div class="col-sm-10">
							<select name="inputContributionDivision" class="form-control" required="">
								<?php echo $updateContributionThingInformation->inputContributionDivision?>
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
						<label for="contributionThingCommunication" class="col-sm-2 col-form-label">Communication Details</label>
						<div class="col-sm-10">
							<textarea type="text" class="form-control" name="inputCommunicationDetails" placeholder="Enter Communication Details" required=""><?php echo $updateContributionThingInformation->inputCommunicationDetails?></textarea>
						</div>
					</div>
					<div class="form-group row">
						<label for="addTouristPlacePicturesFile" class="col-sm-2 col-form-label">Add Tourist Place Picture</label>
						<div class="col-sm-10">
							<input type="file" class="form-control-file" name="inputTouristPlacePicture" required="" value="<?php echo $updateContributionThingInformation->inputTouristPlacePicture?>">
						</div>
					</div>
					<div class="row">
						<div class="col-12">
							<button type="submit" class="btn btn-warning" style="float: right">Update</button>
						</div>
					</div>
				</form>
			</div>

		</div>

		<hr>
		<!--<h5 style="color: #ff7f50">
			<?php
		/*			$ProductInformation = $this->session->userdata('save_product');
                    if(isset($ProductInformation))
                    {
                        echo $ProductInformation;
                        $this->session->unset_userdata('save_product');
                    }
                    */?>
		</h5>-->

	</div> <!-- /container -->

	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>

