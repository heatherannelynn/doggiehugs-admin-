<!-- PHYSICAL HEALTH -->

<div id="health" class="container">
<br/><br/><br/>
<section>

	<!--<p class="lead">1. Health Rating</p>-->
	<h4>Health</h4>
	<p class="lead">Overall health rating</p>

	<!-- return -->
	<!--<input name="healthRating" type="radio">1
	<input name="healthRating" type="radio">2
	<input name="healthRating" type="radio">3
	<input name="healthRating" type="radio">4
	<input name="healthRating" type="radio">5-->

<div class="container">
        <div class="starrating risingstar d-flex justify-content-center flex-row-reverse">
            <input type="radio" id="star5" name="health" value="5" /><label for="star5" title="5 star"></label>
            <input type="radio" id="star4" name="health" value="4" /><label for="star4" title="4 star"></label>
            <input type="radio" id="star3" name="health" value="3" /><label for="star3" title="3 star"></label>
            <input type="radio" id="star2" name="health" value="2" /><label for="star2" title="2 star"></label>
            <input type="radio" id="star1" name="health" value="1" /><label for="star1" title="1 star"></label>
        </div>
  </div><p>Notes on Overall Health</p>
	<textarea class="mytextarea" name="healthText">
	</textarea>

<p class="lead"><a href="screenings.php">Coming Soon - Add Screening Information</a></p>

<?php
include('illness.php');
include('screenings.php');
// TODO just have the link to manageMeds.php from the nav
//echo "<h4><a href='manageMeds.php'>Manage Medication Schedule for ".$dogName."</a></h4><br/>";
?>



<!-- TODO pull this out into its own section -->
<div style="display:none" id="medication">

	<p class="lead">Medications</p>
	<p class="para">Prescribed by:<input class="lead form-control" type="text" name="prescribedBy" value="<?php echo $prescribedBy; ?>"></p>
	<p class="para">Dosage:<input class="form-control" type="text" name="dosage" value="<?php echo $dosage; ?>"></p>
	<p class="para">Time Interval<input class="form-control" type="text" name="dosageInterval" value="<?php echo $dosageInterval; ?>"></p>
	<p class="para">Date Given Last<input class="form-control" type="date" name="lastTimeGiven" value="<?php echo $lastTimeGiven ?>"></p>
	<p class="para">Given By Whom:<input class="form-control" type="text" name="givenBy" value="<?php echo $givenBy ?>"></p>
	<div><a href="#">Add Another Record</a></div>
</div>


<p class="lead"><a href="manageShots.php">Coming Soon - Manage Shots Schedule</a></p>
<!-- TODO pull this out into its own section -->

<div id="shots">

	<!-- TODO  BEGIN SUGGESTED SHOTS SCHEDULE DESIGN FORMAT -->
	<p class="lead">Shots Schedule</p>
	<p class="para"><a href="https://wsava.org/wp-content/uploads/2020/01/WSAVA-Vaccination-Guidelines-2015.pdf">Guidelines</a></p>
	<div><img src="vaxDiag.png" /></div>
	<div class="table">
		<div class="row">
			<div class="col">Type</div>
			<div class="col">Schedule</div>
		</div>
		<div class="row">
			<div class="col">CAV-1</div>
			<div class="col">11/22/2020</div>
		</div>
		<div class="row">
			<div class="col">CAV-2</div>
			<div class="col">11/22/2020</div>
		</div>
		<div class="row">
			<div class="col">CPV-2</div>
			<div class="col">11/22/2020</div>
		</div>
		<div class="row">
			<div class="col">CDV</div>
			<div class="col">11/22/2021</div>
		</div>
	</div>


	<input class="form-control" type="text" name="shotType" value="<?php echo $shotType; ?>">
	<select name="shotType"><option>Select One</option><option>CDV</option><option>CPV-2</option><option>CAV-1</option><option>CAV-2</option></select>
	<div  class="col">
		<div class="input-group mb-3">
		  <div class="input-group-prepend">
			<span class="input-group-text">$</span>
		  </div>
		  <input type="text" class="form-control" name="shotsCost" value="<?php echo $shotsCost; ?>" aria-label="Amount (to the nearest dollar)">
		  <div class="input-group-append">
			<span class="input-group-text">.00</span>
		  </div>
		</div>

	</div>
	<div  class="col">
	<input class="form-control" type="date" name="datesDue" value="<?php echo $datesDue; ?>">
	</div>
	<p class="para"><div><a href="#">Add Another Date</a></div></p>

	<div><a href="#">Add More</a></div>
</div>
	<div><p class="lead"><a href="#">Coming Soon - Manage Health Certs</a></p></div>

<div style="display:none" id="certs">
	<p class="lead">Health Certificate</p>
	<div class="table">
	<div class="row">
	<div class="col">Type</div>
	<div class="col">Cost</div>
	<div class="col">Generated</div>
	</div>
	<div class="row">
	<div  class="col">
	<input class="form-control" type="text" name="certType" value="<?php echo $certType; ?>">
	</div>
	<div  class="col">
		<div class="input-group mb-3">
		  <div class="input-group-prepend">
			<span class="input-group-text">$</span>
		  </div>
		  <input type="text" class="form-control" name="certCost" value="<?php echo $certCost; ?>" aria-label="Amount (to the nearest dollar)">
		  <div class="input-group-append">
			<span class="input-group-text">.00</span>
		  </div>
		</div>

	</div>
	<div  class="col">
	<input class="form-control" type="date" name="certsDue" value="<?php echo $certsDue; ?>">
	</div>
	</div>
	</div>

<div><a href="#">Medical History</a></div>

</section>
</div>

