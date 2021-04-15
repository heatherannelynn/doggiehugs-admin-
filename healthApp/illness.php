<!-- DENTAL HISTORY -->

<div id="health" class="container">
<br/><br/><br/>
<section>
<?php

		//include('ff_connect.php');

		$res8 = $mysqli->query("SELECT * FROM ff_illnessTypes where id='1'");
					if($myrow8=$res8->fetch_object()){
						//do {
						$symptom1=$myrow8->illnessType1;
						$symptom2=$myrow8->illnessType2;
						$symptom3=$myrow8->illnessType3;
						$symptom4=$myrow8->illnessType4;
						$symptom5=$myrow8->illnessType5;
						$symptom6=$myrow8->illnessType6;
						$symptom7=$myrow8->illnessType7;
						$symptom8=$myrow8->illnessType8;
						$symptom9=$myrow8->illnessType9;
						$symptom10=$myrow8->illnessType10;
						$symptom11=$myrow8->illnessType11;
						$symptom12=$myrow8->illnessType12;
						$symptom13=$myrow8->illnessType13;
						$symptom14=$myrow8->illnessType14;
						$symptom15=$myrow8->illnessType15;
						$symptom16=$myrow8->illnessType16;
						$symptom17=$myrow8->illnessType17;
						$symptom18=$myrow8->illnessType18;
						$symptom19=$myrow8->illnessType19;
						$symptom20=$myrow8->illnessType20;
						$symptom21=$myrow8->illnessType21;

}


	$res6 = $mysqli->query("SELECT * FROM ff_illnesses where dogID='$dogID'");
					if($myrow6=$res6->fetch_object()){
						do {
						$illnessType1=$myrow6->illnessType1;
						$illnessType2=$myrow6->illnessType2;
						$illnessType3=$myrow6->illnessType3;
						$illnessType4=$myrow6->illnessType4;
						$illnessType5=$myrow6->illnessType5;
						$illnessType6=$myrow6->illnessType6;
						$illnessType7=$myrow6->illnessType7;
						$illnessType8=$myrow6->illnessType8;
						$illnessType9=$myrow6->illnessType9;
						$illnessType10=$myrow6->illnessType10;
						$illnessType11=$myrow6->illnessType11;
						$illnessType12=$myrow6->illnessType12;
						$illnessType13=$myrow6->illnessType13;
						$illnessType14=$myrow6->illnessType14;
						$illnessType15=$myrow6->illnessType15;
						$illnessType16=$myrow6->illnessType16;
						$illnessType17=$myrow6->illnessType17;
						$illnessType18=$myrow6->illnessType18;
						$illnessType19=$myrow6->illnessType19;
						$illnessType20=$myrow6->illnessType20;
						$illnessType21=$myrow6->illnessType21;



?>

	<p class="lead">Illness or Injury Signs</p>
	<p class="para">Check all which apply:</p>
	<table>
	<tr>
	<td><input type="checkbox" class="checkbox-inline" name="illnessType1" <?php if($illnessType1 != 'false'){ echo "checked";}?> ><label for="illnessType1"><?php echo $symptom1; ?></label></td>
	<td><input type="checkbox" class="checkbox-inline" name="illnessType2" <?php if($illnessType2 != 'false'){ echo "checked";}?> ><label for="illnessType2"><?php echo $symptom2; ?></label></td>
	<td><input type="checkbox" class="checkbox-inline" name="illnessType3" <?php if($illnessType3 != 'false'){ echo "checked";}?> ><label for="illnessType3"><?php echo $symptom3; ?></label></td>
	</tr>
	<tr>
	<td><input type="checkbox" class="checkbox-inline" name="illnessType4" <?php if($illnessType4 != 'false'){ echo "checked";}?> ><label for="illnessType4"><?php echo $symptom4; ?></label></td>
	<td><input type="checkbox" class="checkbox-inline" name="illnessType5" <?php if($illnessType5 != 'false'){ echo "checked";}?> ><label for="illnessType5"><?php echo $symptom5; ?></label></td>
	<td><input type="checkbox" class="checkbox-inline" name="illnessType6" <?php if($illnessType6 != 'false'){ echo "checked";}?> ><label for="illnessType6"><?php echo $symptom6; ?></label></td>
	</tr>
	<tr>
	<td><input type="checkbox" class="checkbox-inline" name="illnessType7" <?php if($illnessType7 != 'false'){ echo "checked";}?> ><label for="illnessType7"><?php echo $symptom7; ?></label></td>
	<td><input type="checkbox" class="checkbox-inline" name="illnessType8" <?php if($illnessType8 != 'false'){ echo "checked";}?> ><label for="illnessType8"><?php echo $symptom8; ?></label></td>
	<td><input type="checkbox" class="checkbox-inline" name="illnessType9" <?php if($illnessType9 != 'false'){ echo "checked";}?> ><label for="illnessType9"><?php echo $symptom9; ?></label></td>
	</tr>
	<tr>
	<td><input type="checkbox" class="checkbox-inline" name="illnessType10" <?php if($illnessType10 != 'false'){ echo "checked";}?> ><label for="illnessType10"><?php echo $symptom10; ?></label></td>
	<td><input type="checkbox" class="checkbox-inline" name="illnessType11" <?php if($illnessType11 != 'false'){ echo "checked";}?> ><label for="illnessType11"><?php echo $symptom11; ?></label></td>
	<td><input type="checkbox" class="checkbox-inline" name="illnessType12" <?php if($illnessType12 != 'false'){ echo "checked";}?> ><label for="illnessType12"><?php echo $symptom12; ?></label></td>
	</tr>
	<tr>
	<td><input type="checkbox" class="checkbox-inline" name="illnessType13" <?php if($illnessType13 != 'false'){ echo "checked";}?> ><label for="illnessType13"><?php echo $symptom13; ?></label></td>
	<td><input type="checkbox" class="checkbox-inline" name="illnessType14" <?php if($illnessType14 != 'false'){ echo "checked";}?> ><label for="illnessType14"><?php echo $symptom14; ?></label></td>
	<td><input type="checkbox" class="checkbox-inline" name="illnessType15" <?php if($illnessType15 != 'false'){ echo "checked";}?> ><label for="illnessType15"><?php echo $symptom15; ?></label></td>
	</tr>
	<tr>
	<td><input type="checkbox" class="checkbox-inline" name="illnessType16" <?php if($illnessType16 != 'false'){ echo "checked";}?> ><label for="illnessType16"><?php echo $symptom16; ?></label></td>
	<td><input type="checkbox" class="checkbox-inline" name="illnessType17" <?php if($illnessType17 != 'false'){ echo "checked";}?> ><label for="illnessType17"><?php echo $symptom17; ?></label></td>
	<td><input type="checkbox" class="checkbox-inline" name="illnessType18" <?php if($illnessType18 != 'false'){ echo "checked";}?> ><label for="illnessType18"><?php echo $symptom18; ?></label></td>
	</tr>
	<tr>
	<td><input type="checkbox" class="checkbox-inline" name="illnessType19" <?php if($illnessType19 != 'false'){ echo "checked";}?> ><label for="illnessType19"><?php echo $symptom19; ?></label></td>
	<td><input type="checkbox" class="checkbox-inline" name="illnessType20" <?php if($illnessType20 != 'false'){ echo "checked";}?> ><label for="illnessType20"><?php echo $symptom20; ?></label></td>
	<td><input type="checkbox" class="checkbox-inline" name="illnessType21" <?php if($illnessType21 != 'false'){ echo "checked";}?> ><label for="illnessType21"><?php echo $symptom21; ?></label></td>
	</tr>
 	</table><br/>
	<div class="para">Please describe any other illness, injury or ailment not listed above, in the text area below.</div>

	<textarea class="mytextarea" name="illnessNotes">
	</textarea>
</section>


</div>

<?php

		} while($myrow6=$res6->fetch_object());
	}
?>