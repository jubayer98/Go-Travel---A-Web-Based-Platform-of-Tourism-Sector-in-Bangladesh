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
				<a class="nav-link" href="<?php echo base_url();?>TravelerAdminC/createTravelerExperience.html">Create TE</a>
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
		<h5 class="alert alert-success">Total Contribution: <?php echo count ($viewTravelerExperienceInfo);?></h5>
	</div>

	<div class="container">
		<!-- Example row of columns -->
		<div class="row">
			<div class="col-md-12">
				<?php
				if($viewTravelerExperienceInfo != NULL)
				{
				?>
				<table class="table table-bordered">
					<thead>
					<tr>
						<th scope="col">Experience Name</th>
						<th scope="col">Experience Details</th>
						<th scope="col">Division</th>
						<th scope="col">Things to Remember</th>
						<th scope="col">Possible Expense</th>
						<th scope="col">Momemnt of Your Experience</th>
						<th scope="col">Update/Remove</th>
					</tr>
					</thead>

					<?php
					foreach ($viewTravelerExperienceInfo as $value)
					{

					?>

					<tbody>
					<td><?php echo $value->inputExperienceTitle;?></td>
					<td><?php echo $value->inputExperienceDetails;?></td>
					<td><?php echo $value->inputTravelingDivision;?></td>
					<td><?php echo $value->inputTravelingThingsToRemember;?></td>
					<td><?php echo $value->inputTravelingPossibleExpense;?></td>
					<td><img src="<?php echo base_url();?><?php echo $value->inputTravelMomentExperiencePicture;?>" height="100"
							 width="150"></td>
					<td>
						<a role="button" class="btn btn-primary btn-small btn-block" href="<?php echo base_url();?>TravelerAdminC/updateTravelerExperienceInformation/<?php echo $value->experience_id;?>">Update</a>
						<a role="button" class="btn btn-secondary btn-small btn-block" href="<?php echo base_url();?>TravelerAdminC/deleteTravelerExperienceInformation/<?php echo $value->experience_id?>">Remove</a>
					</td>

					<?php
					}
					?>
					</tbody>
				</table>
			</div>
			<?php
			}
			else
			{

				?>
				<h3>Sorry! No travel experience has been shared by you.</h3>
				<?php
			}
			?>

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
