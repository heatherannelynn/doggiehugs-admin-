<div class="container">
<!-- PROFILE -->
<br/><br/><br/>
<section>

<p class="lead">Profile Details</p>
<div class="table">

	<div class="row">
	<div class="col">Record ID</div><div class="col" name="id" value="<?php echo $thisid; ?>"></div></div>
	<div class="col">Name<input class="form-control" type="text" name="dogName" value="<?php echo $dogName; ?>"/></p></div>
	<div class="col">ID#<input class="form-control" type="text" name="dogID" value="<?php echo $dogID; ?>"></div>
	</div>

	<div class="row">
		<div class="col">
		Weight (lbs)
		</div>
		<div class="col">
		Weighed on:
		</div>
	</div>
	<div class="row">
		<div class="col">
		<input class="form-control" type="text" name="dogWeight" value="<?php echo $dogWeight; ?>">
		</div>
		<div class="col">
		<input class="form-control" type="date" name="dateWeighed" value="<?php echo $dateWeighed; ?>">
		</div>
	</div>



	<div class="table">
		<div class="row">
			<div class="col">Breed</div>
			<div class="col">Color</div>
		</div>
		<div class="row">
			<div class="col"><input class="form-control" type="text" name="dogColor" value="<?php echo $dogColor; ?>"></div>
			<div class="col"><input class="form-control" type="text" name="dogBreed" value="<?php echo $dogBreed; ?>"></div>
		</div>
	<div class="row">
		<div class="col">Age</div>
		<div class="col">Gender</div>
	</div>
	<div class="row">
		<div class="col"><input class="form-control" type="text" name="dogAge" value="<?php echo $dogAge; ?>"></div>
		<div class="col">
				<div class="table">
	<div class="row">
	<div class="col">
	<input type="radio" name="dogGender" >
	Male</div><div class="col"><input type="radio" name="dogGender" >Female</div>
	</div>

<!--<div class="table">
				<div class="row">
					<div class="col"><input class="form-control" type="radio" name="dogGender" value="checked">Male</div>
					<div class="col"><input class="form-control" type="radio" name="dogGender" >Female</div>
				</div>
			</div>-->
		</div>
	</div></div>
	</div>

	<p class="lead">Place of Origin</p>
	<input class="form-control" type="text" name="dogOrigin" />



	<!--<p class="lead">Date of Arrival</p>
	<input class="form-control" type="date" name="arrivalDate" />



	<p class="lead">Kennel History</p>
	<div class="lead">Kennel Name: <input type="text" name="kennelName"></div>-->
	<div class="table">
		<div class="row">
		<div class="col">Arrived On:</div>
		<div class="col">Left On:</div>
		</div>
		<div class="row">
		<div class="col"><input type="date" name="arrivedOn" class="form-control"></div>
		<div class="col"><input type="date" class="form-control" name="leftOn"></div>
		</div>
	</div>
	<div><p class="lead"><a href="#">Coming Soon - Manage Kennel History</a></p></div>

	<!--<p class="lead">Cost of Transport</p>
	<input class="form-control" type="text" name="transferCost" value="<?php echo $transferCost; ?>"></p>-->
</section>
</div>

