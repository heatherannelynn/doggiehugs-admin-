<!-- ADOPTION -->

<div style="display:none" id="adoption" class="container">
<br/><br/><br/>
<section>
<p class="lead">Adoption Status</p>
<div class="table">
<div class="row">
<div class="col">Meeting with Adopter Scheduled for:</div>
<div class="col">Adopter Name:</p></div>
</div>
<div class="row">
<div class="col">
<input class="form-control" type="date" name="dateMeetAdopter" value="<?php echo $dateMeetAdopter; ?>">
</div>
<div class="col">
<input class="form-control" type="text" name="adopterName" value="<?php echo $adopterName; ?>">
</div>
</div>
</div>
	<p>Notes on Adoption</p>
	<textarea class="mytextarea" name="meetingNotes">
	</textarea>

	<div class="table">
	<div class="row">
	<div class="col">
	<input type="radio" name="adoptionStatus" >
	On Hold</div><div class="col"><input type="radio" name="adoptionStatus" >Adopted</div>
	</div>
<!--	<div class="row">
	<div class="col">Date On Hold</div>
	<div class="col">Date Adopted</div>
	</div>--></div>
	<!--<div class="table">
	<div class="row">
	<div class="col">As of:<input type="date" class="form-control" name="dateOnHold" /></div>
	<div class="col">As of:<input type="date" class="form-control" name="dateAdopted" /></div>
	</div>
	</div>-->
	<!--<p class="para"><input class="form-control" type="date" name="datePlacedHold" value="<?php echo $datePlacedHold; ?>"></p>-->
	<div class="table">
	<div class="row">
	<div class="col">Date of Adoption</div>
	<div class="col">Adoption Fee</div>
	</div>
	<div class="row">
	<div class="col">
	<input class="form-control" type="date" name="dateAdopted" value="<?php echo $dateAdopted; ?>"></div>
	<div class="col"><input class="form-control" type="text" name="adoptFee" value="<?php echo $adoptFee; ?>"></div>
	</div>
	</div>
</section>
</div>