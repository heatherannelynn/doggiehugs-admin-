<!DOCTYPE html>
<html style="scroll-behavior:smooth !important" lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta property="og:image" content="https://sitesappsimages.com/assets/images/thumb.png" />
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
<script>
tinymce.init({
selector: '.mytextarea'
});
</script>
<style>
html, body {
	font-family: Montserrat, sans-serif;
}
.starrating > input {display: none;}  /* Remove radio buttons */

.starrating > label:before {
  content: "\f005"; /* Star */
  margin: .4px;
  font-size: 1.7em;
  font-family: FontAwesome;
  display: inline-block;
}

.starrating > label
{
  color: #222222; /* Start color when not clicked */
}

.starrating > input:checked ~ label
{ color: #ffca08 ; } /* Set yellow color when star checked */

.starrating > input:hover ~ label
{ color: #ffca08 ;  } /* Set yellow color when star hover */




section {
	padding:16px;
	width:100%;
	vertical-align:text-top;
	background-color:#dfece7;
	height:auto;
	margin:auto;
	display:float;
	margin-top:2px;
	color:#000;
	font-family: Montserrat, sans-serif;
	}

h3 {
	color:#000;
	font-family: Montserrat, sans-serif;
	font-size:1.7em;
	}

h4 {
	//padding-top:90px;
	color:#333;
	font-family: Montserrat, sans-serif;
	font-size:.9em;
	}

.paragraph
	font-family: Montserrat, sans-serif;
	font-size:.7em;
}


.top-container {
  background-color: #232323;
  padding: 0px;
  font-weight:500;
  text-align: center;
  z-index: 8888;
  width:100%;
}

.header {
  //padding: 10px 16px;
  background: #fff;
  border-bottom: 5px solid silver;
  color: #f1f1f1;
  font-family: Montserrat, sans-serif;
  z-index: 8888;
}

.navbar {
 color: #f1f1f1;
}

.navbar li {
 padding-left:.7em;
 padding-right:.7em;
 font-family: Montserrat, sans-serif;
}

.lead {
 font-family: Montserrat, sans-serif;
}

.content {
  padding: 16px;
}

.sticky {
  position: fixed;
  top: 0;
  width: 100%;
  font-family: Montserrat, sans-serif;
}

.sticky + .content {
  //padding-top: 102px;
  font-family: Montserrat, sans-serif;

}
img {
	max-width:100%;
	height:auto;
}
.bg-custom {
    background-color:transparent;
}

</style>



</head>

<body>


<div class="container-fluid">
<nav class="navbar navbar-default"></nav> <!-- Dummy nav bar -->
<nav class="header sticky-top navbar navbar-expand-lg navbar-light bg-light">
	  <button id="menuButton" class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
		<span><img src="http://sitesappsimages.com/doggiehugs/assets/images/logo_white.png" width="40" /></span>
	  </button>
	  <div class="collapse navbar-collapse" data-toggle="collapse" data-target=".navbar-collapse.show"  id="navbarTogglerDemo01">
	  <li class="hidden-sm"><a id="imgBrand" class="navbar-brand" href="#"><img src="http://sitesappsimages.com/doggiehugs/assets/images/logo_white.png" width="70" /></a></li>
	   <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
		  <li class="nav-item">
			<a class="nav-link active" href="#details">Details</a>
		  </li>
		  <li class="nav-item">
			<a class="nav-link" href="#kennel">Kennel</a>
		  </li>
		  <li class="nav-item">
			<a class="nav-link" href="#transport">Transport</a>
		  </li>
		  </li>
			<li class="nav-item">
			<a class="nav-link" href="#health">Health</a>
		  </li>
		  </li>
			<li class="nav-item">
			<a class="nav-link" href="#costs">Costs</a>
		  </li>
			<li class="nav-item">
			<a class="nav-link" href="#adopter">Adoption</a>
		  </li>
			<li class="nav-item">
			<a class="nav-link" href="#images">Image Gallery</a>
		  </li>
		  <li class="nav-item">
			<a class="nav-link" href="#comments">Comments</a>
		  </li>
		</ul>
	  </div> <!-- navbar-->
	</nav>






<!--This app will maintain an accurate and timely status on the health and
well-being of the kennel population, provide a medical alert for each dog as necessary, and
track associated costs per dog for financial planning purposes. It will allow authorized
personnel to get an immediate, up-to-date status on the welfare of an individual dog or that
of the entire kennel population.</p>-->


<form id="dogNameForm" method="post" action="<?php echo $PHP_SELF; ?>">


<div class="input-group row justify-content-between">


<div id="main" class="col-12 col-md-5 col-sm-10 text-center">
	<!--<p class="lead">1. Health Rating</p>-->
	<p class="lead">Health</p>

	<!-- return -->
	<h4>Overall health rating</h4>
	<!--<input name="healthRating" type="radio">1
	<input name="healthRating" type="radio">2
	<input name="healthRating" type="radio">3
	<input name="healthRating" type="radio">4
	<input name="healthRating" type="radio">5-->

<div class="container">
        <div class="starrating risingstar d-flex justify-content-center flex-row-reverse">
            <input type="radio" id="star5" name="rating" value="5" /><label for="star5" title="5 star"></label>
            <input type="radio" id="star4" name="rating" value="4" /><label for="star4" title="4 star"></label>
            <input type="radio" id="star3" name="rating" value="3" /><label for="star3" title="3 star"></label>
            <input type="radio" id="star2" name="rating" value="2" /><label for="star2" title="2 star"></label>
            <input type="radio" id="star1" name="rating" value="1" /><label for="star1" title="1 star"></label>
        </div>
  </div>
	<textarea class="mytextarea" placeholder="Notes on Overall Health" name="healthText">
	</textarea>
</div>
<div id="main" class="col-12 col-md-5 col-sm-10 text-center">

	<p class="lead">Behavior</p>
	<h4>Overall behavior rating</h4>
<div class="container">
        <div class="starrating risingstar d-flex justify-content-center flex-row-reverse">
            <input type="radio" id="2star5" name="rating2" value="5" /><label for="2star5" title="5 star"></label>
            <input type="radio" id="2star4" name="rating2" value="4" /><label for="2star4" title="4 star"></label>
            <input type="radio" id="2star3" name="rating2" value="3" /><label for="2star3" title="3 star"></label>
            <input type="radio" id="2star2" name="rating2" value="2" /><label for="2star2" title="2 star"></label>
            <input type="radio" id="2star1" name="rating2" value="1" /><label for="2star1" title="1 star"></label>
        </div>
  </div>
    <textarea class="mytextarea" placeholder="Notes on Overall Behavior" name="behaviorText">
	</textarea>
</div>
<div id="main" class="col-12 col-md-5 col-sm-10 text-center">

	<p class="lead">Place of Origin</p>
	<input class="form-control" type="text" name="dogOrigin" />
</div>
<div id="main" class="col-12 col-md-5 col-sm-10 text-center">



	<p class="lead">Date of Arrival</p>
	<input class="form=control" type="date" name="arrivalDate" />

</div>
<div id="main" class="col-12 col-md-5 col-sm-10 text-center">

	<p class="lead">Cost of Transport</p>
	<input class="form-control" type="text" name="transferCost" value="<?php echo $transferCost; ?>"></p>
</div>
<div id="main" class="col-12 col-md-5 col-sm-10 text-center">

	<p class="lead">ID#</p>
	<input class="form-control" type="text" name="dogID" value="<?php echo $dogID; ?>"></p>
</div>
<div id="main" class="col-12 col-md-5 col-sm-10 text-center">

	<p class="lead">Breed</p>
	<input class="form-control" type="text" name="dogBreed" value="<?php echo $dogBreed; ?>"></p>
</div>
<div id="main" class="col-12 col-md-5 col-sm-10 text-center">

	<p class="lead">Color</p>
	<input class="form-control" type="text" name="dogColor" value="<?php echo $dogColor; ?>"></p>
</div>
<div id="main" class="col-12 col-md-5 col-sm-10 text-center">

	<p class="lead">Age</p>
	<input class="form-control" type="text" name="dogAge" value="<?php echo $dogAge; ?>"></p>
</div>
<div id="main" class="col-12 col-md-5 col-sm-10 text-center">

	<p class="lead">Gender</p>
	<input class="form-control" type="radio" name="dogGender" value="checked">Female
		<input class="form-control" type="radio" name="dogGender" >Male

</div>
<div id="main" class="col-12 col-md-5 col-sm-10 text-center">

	<p class="lead">Name<input class="form-control" type="text" name="dogName" value="<?php echo $dogName; ?>"/></p>
</div>
<div id="main" class="table col-12 col-md-5 col-sm-10 text-center">

	<p class="lead">Weight</p>
	<div class="row">
		<div class="col">
		<p class="lead">At Time of Arrival</p>
		</div>
		<div class="col">
		<p class="lead">Current Weight<p class="lead">
		</div>
	</div>
	<div class="row">
		<div class="col">
		<input class="form-control" type="text" name="weightAtArrival" value="<?php echo $weightAtArrival; ?>">
		</div>
		<div class="col">
		<input class="form-control" type="text" name="weightCurrently" value="<?php echo $weightCurrently; ?>">
		</div>
</div>
<div class="container-fluid"><a href="#">Weight History</a></div>
</div>
<div id="main" class="col-12 col-md-5 col-sm-10 text-center">

	<p class="lead">Date Neutered</p>
	<input class="form=control" type="date" name="dateNeutered" value="<?php echo $dateNeutered; ?>"></p>
	<p class="lead" style="text-decoration:indent;">Cost to Neuter<input class="form-control" type="text" name="costToNeuter" value="<?php echo $costToNeuter; ?>"></p>
</div>
<div id="main" class="col-12 col-md-5 col-sm-10 text-center">

	<p class="lead">Type of Parasite Screening, Date , Cost</p>
	<input class="form-control" type="text" name="screenType" value="<?php echo $screenType; ?>"></p>
	<p class="lead" style="text-decoration:indent;">Date of Screening<input class="form=control" type="date" name="screeningDate" value="<?php echo $screeningDate; ?>"></p>
	<p class="lead" style="text-decoration:indent;">Cost to Screen<input class="form-control" type="text" name="costToScreen" value="<?php echo $costToScreen; ?>"></p>
<div><a href="#">Add Another Record</a></div>
</div>
<div id="main" class="col-12 col-md-5 col-sm-10 text-center">

	<p class="lead">Current medication,last time given.  TODO - Add some kind of
	alarm (text color change to red or flashing etc.) when due</p>
	<input class="lead form-control" type="text" name="currentMedication" value="<?php echo $currentMedication; ?>"></p>
	<p class="lead">Dosage<input class="form-control" type="text" name="dosage" value="<?php echo $dosage; ?>"></p>
	<p class="lead">Time Interval<input class="form-control" type="text" name="interval" value="<?php echo $interval; ?>"></p>
	<p class="lead">Date Given Last<input class="form-control" type="date" name="lastTimeGiven" value="<?php echo $lastTimeGiven ?>"></p>
	<p class="lead">Given By Whom:<input class="form-control" type="text" name="givenBy" value="<?php echo $givenBy ?>"></p>
<div><a href="#">Add Another Record</a></div>
</div>
<div id="main" class="col-12 col-md-5 col-sm-10 text-center">

	<p class="lead">Shots</p>
	<p class="para">Last Time<input class="form-control" type="text" name="shotsGiven" value="<?php echo $shotsGiven; ?>"></p>
	<a href="">Medical History<input class="form=control" type="date" name="shotsHistory" value="<?php echo $shotsHistory; ?>"></a>
	<p class="para">Costs<input class="form-control" type="text" name="shotsCosts" value="<?php echo $shotsCosts; ?>"></p>
	<p class="para">Schedule TODO -- Add some kind of alarm (text color change to red or flashing etc.)when due</p>
	<p class="para"><input class="form-control" type="text" name="shotsDue" value="<?php echo $shotsDue; ?>"></p>
	<p class="para" style="text-decoration:indent;">Dates Due<input class="form=control" type="date" name="datesDue" value="<?php echo $datesDue; ?>"></p>
</div>
<div id="main" class="col-12 col-md-5 col-sm-10 text-center">

	<p class="lead">Date health certificate was generated, cost of health certificate</p>
	<input class="form-control" type="text" name="healthCerts" value="<?php echo $healthCerts; ?>"></p>
	<p class="para" style="text-decoration:indent;">Cost of Health Certificate<input class="form-control" type="text" name="certsCost" value="<?php echo $certsCost; ?>"></p>
</div>
<div id="main" class="col-12 col-md-5 col-sm-10 text-center">

	<p class="lead">Length of stay in kennel - by automatic update</p>
	<input class="form-control" type="text" name="kennelHistory" value="<?php echo $kennelHistory; ?>"></p>
	<p class="lead" style="text-decoration:indent;">Date Arrived at Kennel<input class="form=control" type="date" name="dateKennelArrival" value="<?php echo $dateKennelArrival; ?>"></p>
</div>
<div id="main" class="col-12 col-md-5 col-sm-10 text-center">

	<p class="lead">Dental</p>
	<input class="form-control" type="text" name="dentalInfo" value="<?php echo $dentalcost; ?>"></p>
	<p class="lead" style="text-decoration:indent;">
	<textarea class="mytextarea" name="dentalNotes">
	Notes on Dental
	</textarea>
</div>
<div id="main" class="col-12 col-md-5 col-sm-10 text-center">

	<p class="lead">Date of meeting with potential adopter - notes on meeting</p>
	<input class="form=control" type="date" name="dateMeetAdopter" value="<?php echo $dateMeetAdopter; ?>"></p>
	<textarea class="mytextarea" name="meetingNotes">
	Notes on meeting with Adopter
	</textarea><br/>
</div>
<div id="main" class="col-12 col-md-5 col-sm-10 text-center">

	<p class="lead">Date placed on hold</p>
	<input class="form=control" type="date" name="datePlacedHold" value="<?php echo $datePlacedHold; ?>"></p>
</div>
<div id="main" class="col-12 col-md-5 col-sm-10 text-center">

	<p class="lead">Date adopted</p>
	<input class="form=control" type="date" name="dateAdopted" value="<?php echo $dateAdopted; ?>"></p>
</div>
<div id="main" class="col-12 col-md-5 col-sm-10 text-center">

	<p class="lead">Date and amount of adoption fee</p>
	<input class="form=control" type="date" name="dateAdoptedFee" value="<?php echo $dateAdopted; ?>"></p>
	<p class="lead" style="text-decoration:indent;"><input class="form-control" type="text" name="adoptFee" value="<?php echo $adoptFee; ?>"></p>
</div>
<div id="main" class="col-12 col-md-5 col-sm-10 text-center">

	<p class="lead">Total Cost of Dog</p>
	<input class="form-control" type="text" name="totalCostDog" value="<?php echo $totalCostDog; ?>"></p>
</div>
<div id="main" class="col-12 col-md-5 col-sm-10 text-center">

	<p class="lead">Other / Adoption Notes</p>
	<textarea class="mytextarea" name="adoptionNotes">
	Adoption Notes
	</textarea>
	</div>
<div id="main" class="col-12 text-center">
<input type="submit" name="part1Submit" value="Continue"/>
</div>
</div>


</form>
</div>
</div>
</body>
</html>