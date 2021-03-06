<!DOCTYPE html>
<html style="scroll-behavior:smooth !important" lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta property="og:image" content="https://sitesappsimages.com/assets/images/thumb.png" />
<link rel="icon" type="image/png" href="https://sitesappsimages.com/doggiehugs/assets/icons/mini_logo_cc.png">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>

    <script>
      tinymce.init({
        selector: '#mytextarea'
      });
    </script>

<style>

//@media screen and (min-width: 30em) and (orientation: landscape) {section { padding-top: 400px; }}
@media (min-width: 360px) and (orientation: portrait) {section { padding-top: 5em; }}
@media (min-width: 375px) and (orientation: portrait) {section { padding-top: 8em; }}
@media (min-width: 568px) and (orientation: landscape) {section { padding-top: 5em; }}
@media (min-width: 667px) and (orientation: landscape) {section { padding-top: 5em; }}
@media (min-width: 736px) and (orientation: landscape) {section { padding-top: 5em; }}
@media (min-width: 812px) and (orientation: landscape) {section { padding-top: 6em; }}
@media (min-width: 1024px) and (orientation: portrait) {section { padding-top: 5em; }}
@media (min-width: 1024px) and (orientation: landscape) {section { padding-top: 6em; }}
@media (min-width: 1366px) and (orientation: landscape) {section { padding-top: 6em; }}
//@media screen and (min-width: 30em) and (orientation: portrait) { section { padding-top: 5em; } }
//@media (min-width: 780px) { section { padding-top: 215px; } }
//@media (min-width: 980px) { section { padding-top: 120px; } }
//@media (min-width: 1350px) { section { padding-top: 180px; } }



.icon-bar {
  position: fixed;
	z-index:99999;
  top:	55%;
	right: 25px;
  -webkit-transform: translateY(-50%);
  -ms-transform: translateY(-50%);
  transform: translateY(-50%);
}

.top-container {
  background-color: #fff;
  padding: 0px;
  font-weight:500;
  text-align: center;
  z-index: 8888;
  width:100%;
}

.header {
  padding: 10px 16px;
  background: #fff;
  border-bottom: 5px solid silver;
  color: #f1f1f1;
  z-index: 8888;
}

.navbar {
 color: #f1f1f1;
}

.navbar li {
 padding-left:.7em;
 padding-right:.7em;
}

.content {
  padding: 16px;
}

.sticky {
  position: fixed;
  top: 0;
  width: 100%;
}

.sticky + .content {
  //padding-top: 102px;
}
img {
	max-width:100%
}
.bg-custom {
    background-color:transparent;
}

/* Fixed/sticky icon bar (vertically aligned 50% from the top of the screen) */
.icon-bar {
  position: fixed;
	z-index:99999;
  top:	55%;
	right: 0;
  -webkit-transform: translateY(-50%);
  -ms-transform: translateY(-50%);
  transform: translateY(-50%);
}

/* Style the icon bar links */
.icon-bar a {
  display: block;
  text-align: center;
  padding: 11px;
  transition: all 0.3s ease;
  color: white;
  font-size: 20px;
}

/* Style the social media icons with color, if you want */
.icon-bar a:hover {
  background-color: #000;
}

.facebook {
  background: #3B5998;
  color: white;
}

.twitter {
  background: #55ACEE;
  color: white;
}

.google {
  background: #dd4b39;
  color: white;
}

.linkedin {
  background: #007bb5;
  color: white;
}

.youtube {
  background: #bb0000;
  color: white;
}
</style>
<?php
require ('../comm_connect.php');
$siteid='doggiehugs';
?>
<!--
<link rel="stylesheet" href="css/commulist.css" type="text/css" media="screen" />

TO TREAT THE CSS AS A PHP FILE AT THIS .htaccess FILE TO THE CSS DIRECTORY

AddHandler application/x-httpd-php .css
php_value default_mimetype "text/css"

-->
  </head>

  <body>

<div class="container-fluid">

<!-- UPLOAD FILES -->
<?php
if (trim($_POST["action"]) == "Upload File") { //**** User Clicked the Upload File Button

   //*********** Execute the Following Code to Upload File *************
   $imagename = basename($_FILES['image_file']['name']);  // grab name of file
   $result = @move_uploaded_file($_FILES['image_file']['tmp_name'], $imagename); // upload it
   if ($result==1):
   echo("Successfully uploaded: <b>".$imagename."</b>"); // did it work?
   $mysqli->query("insert into imagelibrary (image_file, siteid) values ('$imagename', 'doggiehugs')");
   endif;
} // end if
?>
<!-- END UPLOAD FILES -->
<!-- SAVING PRIMARY LINKS -->
<?php

require('postFunc.php');
?>
<!-- END DELETE CONTENT FOR PRIMARY AND SIDE MENU CATEGORIES -->
<div class="table">
<table>
<td>
<table class="container-fluid" style="background-color:silver;">
<th><a id="imgBrand" class="navbar-brand active" href="https://sitesappsimages.com/doggiehugs/index.php" target="_new"><img src="https://sitesappsimages.com/doggiehugs/assets/images/logo_white.png" width="40%" /></a></th>
<th><a target="new" href='https://www.sitesappsimages.com/doggiehugs/admin/fundraiserTool.php#' id="fundRaisers" class="navbar link active">Fundraisers</a></th>
<th><a href='#links' class='navbar link'>Primary Links</a></th>
<th><a href='#leftside' class='navbar link'>Left Side</a></th>
<th><a href='#categories' class='navbar link'>Categories</a></th>
<th><a href='#images' class='navbar link'>Images/Videos</a></th>
<th><a href='#content' class='navbar link'>Add Content</a></th>
</table>
</div>
<div class="table">
<table>
<td>



<!-- SELECT/MANAGE - EDIT THEMES -->
<!--<?php


if($_POST['save_theme']):
$themename=$_POST['name'];
$themedesc=$_POST['themedesc'];

	if($_POST['id']):
	$themeid=$_POST['id'];
	$mysqli->query("update themes set name='$themename', themedesc='$themedesc' where id='$themeid'");
	else:
	$mysqli->query("insert into themes (name, themedesc, siteid) values ('$themename', '$themedesc', 'alyssa')");
	endif;

endif;

$themecount='1';
if($res12 = $mysqli->query("select * from themes where delrec != 'on' and siteid='$siteid' order by id limit 0,4")):
		while($myrow12=$res12->fetch_object()):
			printf("<form method=post id=%s action=%s><p><input type=hidden name=id value='%s'><p><a name='themes'>Edit Theme %s</a></p><p><input type=text name=name value='%s'><input type=text name=themedesc value='%s'><input type=submit name='save_theme' value='save theme %s'></p></form>",$myrow12->id, $PHP_SELF,  $myrow12->id, $themecount, $myrow12->name, $myrow12->themedesc, $themecount);
			$themecount++;
		endwhile;
endif;
while($themecount <= 4):
printf("<form method=post action=%s><p><a name='themes'>Add Theme %s</a></p><p><input type=text name=name><input type=text name=themedesc><input type=submit name='save_theme' value='save theme %s'></p></form>",$PHP_SELF, $themecount, $themecount);
$themecount++;
endwhile;






?>-->

<!-- END SELECT/MANAGE - EDIT THEMES -->

</td></table>
<table><td>





<!-- ENTER HEADINGS FOR PRIMARY LINKS -->
<?php

if($res3 = $mysqli->query("select * from weblinks where delrec != 'on' and siteid='doggiehugs'")):
	while($myrow3=$res3->fetch_object()):
	printf("<form method=post action=%s>
	<p><a name='links'>Enter Text for Primary Links</a></p>
	<input type=text name=link1 value='%s'>
	<input type=text name=link2 value='%s'>
	<input type=text name=link3 value='%s'>
	<input type=text name=link4 value='%s'>
	<input type=text name=link5 value='%s'>
	<input type=text name=link6 value='%s'>
	<input type=text name=link7 value='%s'>
	<input type=text name=link8 value='%s'>
	<input type=submit name=go value='Go'>
	</form>",$PHP_SELF, $myrow3->link1, $myrow3->link2, $myrow3->link3, $myrow3->link4, $myrow3->link5, $myrow3->link6,
	$myrow3->link7, $myrow3->link8);
	endwhile;
endif;
?>
<!-- END ENTER HEADINGS FOR PRIMARY LINKS -->
</td></table>
<table><td>

<!-- ENTER TITLES FOR SIDE MENU LINKS -->
<?php
$res4 = $mysqli->query("select * from catlinks where siteid='doggiehugs'");

	if($myrow4=$res4->fetch_object()){
	do{
	printf("<form method=post action='%s'><p><a name='leftside'>Left Side Menu Items</a></p>
	<p><input type='text' name=sidenav1 value='%s'></p>
	<p><input type='text' name=sidenav2 value='%s'></p>
	<p><input type='text' name=sidenav3 value='%s'></p>
	<p><input type='text' name=sidenav4 value='%s'></p>
	<p><input type='text' name=sidenav5 value='%s'></p>
	<p><input type='text' name=sidenav6 value='%s'></p>
	<p><input type='text' name=sidenav7 value='%s'></p>
	<p><input type='text' name=sidenav8 value='%s'></p>
	<p><input type='text' name=sidenav9 value='%s'></p>
	<p><input type='text' name=sidenav10 value='%s'></p>
	<p><input type='text' name=sidenav11 value='%s'></p>
	<p><input type='text' name=sidenav12 value='%s'></p>
	<p><input type='text' name=sidenav13 value='%s'></p>
	<p><input type='text' name=sidenav14 value='%s'></p>
	<p><input type='text' name=sidenav15 value='%s'></p>
	<p><input type='submit' name='save' value='save'></p>
	</form>",$PHP_SELF, $myrow4->sidenav1, $myrow4->sidenav2, $myrow4->sidenav3, $myrow4->sidenav4,
	$myrow4->sidenav5, $myrow4->sidenav6, $myrow4->sidenav7, $myrow4->sidenav8, $myrow4->sidenav9,
	$myrow4->sidenav10, $myrow4->sidenav11, $myrow4->sidenav12, $myrow4->sidenav13, $myrow4->sidenav14,
	$myrow4->sidenav15);

	} while($myrow4=$res4->fetch_object());
	}

?>
<!-- END ENTER TITLES FOR SIDE MENU LINKS -->
</td></table>

<table><td>

<!-- CREATE CATEGORIES FOR PRIMARY AND SIDE MENU LINKS -->
<!--<?php
if($res14 = $mysqli->query("select * from weblinks where delrec != 'on' and siteid='$siteid'")):
	while($myrow14=$res14->fetch_object()):
$link1=$myrow14->link1;
$link2=$myrow14->link2;
$link3=$myrow14->link3;
$link4=$myrow14->link4;
$link5=$myrow14->link5;
$link6=$myrow14->link6;
$link7=$myrow14->link7;
$link8=$myrow14->link8;

endwhile;
?>-->
<!--<form method="post" action="<?php echo $PHP_SELF;  ?>">
<p><a name='menu'>Create Menu</a></p>
<input type="text" name="siteid" value="<?php echo $siteid;?>">
<p>Navigation ID
<select name="navid">
<option value="link1"><?php echo $link1;?></option>
<option value="link2"><?php echo $link2;?></option>
<option value="link3"><?php echo $link3;?></option>
<option value="link4"><?php echo $link4;?></option>
<option value="link5"><?php echo $link5;?></option>
<option value="link6"><?php echo $link6;?></option>
<option value="link7"><?php echo $link7;?></option>
<option value="link8"><?php echo $link8;?></option>

</select></p>
<p>Category Name<input type="text" name="catname" value="<?php echo $catname;?>"></p>
<p><textarea name="catdesc" rows=5 cols=15></textarea></p>
<p>Group<input type="text" name="cat_group" value="<?php echo $cat_group;?>"></p>
<p>Category URL<input type="text" name="cat_url" value="<?php echo $cat_url;?>"></p>
<p>List Order<input type="text" name="listorder" value="<?php echo $cat_group;?>"></p>
<p><input style='font-family:verdana,sans-serif;font-size:7.5pt' type="submit" name="create_weblink" value="Enter"></p>

</form>-->
<?php
endif;
?>

<!-- END CREATE CATEGORIES FOR PRIMARY AND SIDE MENU LINKS -->
<!--</td></table>-->
<table><td>

<!-- CREATE CATEGORIES FOR PRIMARY AND SIDE MENU LINKS -->
<?php
if($res14 = $mysqli->query("select * from catlinks where siteid='doggiehugs' and delrec != 'on'")):
	while($myrow14=$res14->fetch_object()):
$sidenav1=$myrow14->sidenav1;
$sidenav2=$myrow14->sidenav2;
$sidenav3=$myrow14->sidenav3;
$sidenav4=$myrow14->sidenav4;
$sidenav5=$myrow14->sidenav5;
$sidenav6=$myrow14->sidenav6;
$sidenav7=$myrow14->sidenav7;
$sidenav8=$myrow14->sidenav8;
$sidenav9=$myrow14->sidenav9;
$sidenav10=$myrow14->sidenav10;
$sidenav11=$myrow14->sidenav11;
$sidenav12=$myrow14->sidenav12;
$sidenav13=$myrow14->sidenav13;
$sidenav14=$myrow14->sidenav14;
$sidenav15=$myrow14->sidenav15;

endwhile;
?>
<form method="post" action="<?php echo htmlspecialchars($PHP_SELF);  ?>">
<p><a name='categories'>Create Categories</a></p>
<input type="hidden" name="siteid" value="<?php echo $siteid;?>">
<p>Navigation ID
<select name="navid">
<option value="sidenav1"><?php echo $sidenav1;?></option>
<option value="sidenav2"><?php echo $sidenav2;?></option>
<option value="sidenav3"><?php echo $sidenav3;?></option>
<option value="sidenav4"><?php echo $sidenav4;?></option>
<option value="sidenav5"><?php echo $sidenav5;?></option>
<option value="sidenav6"><?php echo $sidenav6;?></option>
<option value="sidenav7"><?php echo $sidenav7;?></option>
<option value="sidenav8"><?php echo $sidenav8;?></option>
<option value="sidenav9"><?php echo $sidenav9;?></option>
<option value="sidenav10"><?php echo $sidenav10;?></option>
<option value="sidenav11"><?php echo $sidenav11;?></option>
<option value="sidenav12"><?php echo $sidenav12;?></option>
<option value="sidenav13"><?php echo $sidenav13;?></option>
<option value="sidenav14"><?php echo $sidenav14;?></option>
<option value="sidenav15"><?php echo $sidenav15;?></option>
</select></p>
<p>Category Name<input type="text" name="catname" value="<?php echo $catname;?>"></p>
<p><textarea name="catdesc" rows=5 cols=15></textarea></p>
<p>Group<input type="text" name="cat_group" value="<?php echo $cat_group;?>"></p>
<p>Category URL<input type="text" name="cat_url" value="<?php echo $cat_url;?>"></p>
<p>List Order<input type="text" name="listorder" value="<?php echo $cat_group;?>"></p>
<p><input style='font-family:verdana,sans-serif;font-size:7.5pt' type="submit" name="create_category" value="Enter"></p>

</form>
<?php
endif;
?>

<!-- END CREATE CATEGORIES FOR PRIMARY AND SIDE MENU LINKS -->
</td></table>
</div>

<div class="table">
<table><td>


<!-- LIST CATEGORIES - DELETE CATEGORIES -->
<!--  doggiehugs, changed categories to page style to distinguish pages blog, gallery, contact, tasks ,etc.-->
<!--<?php

if($result = $mysqli->query("select * from categories where siteid='doggiehugs' and delrec != 'on'")):

echo "<p>Page Style</p>";
	while($myrow=$result->fetch_object()):
    printf("<form method=post action='%s'>
    <input type=submit name='del_category' value='X'>
    <input type=text name='siteid' value='%s'>
    <input type=text name='this_cat_id' value='%s'>%s</form>", $PHP_SELF, $myrow->siteid, $myrow->id, $myrow->catname);
    endwhile;
endif;

?>-->
<!-- END LIST CATEGORIES - DELETE CATEGORIES -->


</td></table>
<table><td>

<!-- UPLOAD FILE TYPES .gif, .jpeg, and .png -->

<p><a name='images'>Upload Image Files</a></p>

<form method='POST' enctype='multipart/form-data' name='frmmain' action='<?php $PHP_SELF; ?>'>
Browse for Image (jpg): <input type="file" name="image_file" size="35">
<br>
<input type="submit" value="  Upload File  " name="action">
</form>
<!-- END UPLOAD FILE TYPES .gif, .jpeg, and .png -->
</td></table>
<table><td>

<!-- CREATE CONTENT -->
<hr>
<form method="post" action="<?php echo $PHP_SELF;  ?>">
<p><a name='content'>Create Content</a></p>
<!--select page style e.g. gallery, blog, signup, tasks-->
<?php
if($res5=$mysqli->query("select * from categories where siteid='doggiehugs' and delrec != 'on'")):
echo "<p>Page Style <select name='catid'>";
	while($myrow5=$res5->fetch_object()):
	$catname=$myrow5->catname;
	$catid=$myrow5->id;
	printf("<option value='%s'>%s</option>",$catid, $catname);
	endwhile;
echo "</select></p>";
else:
echo "<p>No categories found.  Add some.</p>";
endif;
?>

<input type="hidden" name="siteid" value="<?php echo $siteid; ?>">
<p>Featured: <input name="featured" type="checkbox" <?php if ($featured == 1){?> checked="checked" <?php } ?>/></p>
<p><?php echo $link1;?>: <input name="link1" type="checkbox" <?php if ($link1 == 1){?> checked="checked" <?php } ?>/></p>
<p><?php echo $link2;?>: <input name="link2" type="checkbox" <?php if ($link2 == 1){?> checked="checked" <?php } ?>/></p>
<p><?php echo $link3;?>: <input name="link3" type="checkbox" <?php if ($link3 == 1){?> checked="checked" <?php } ?>/></p>
<p><?php echo $link4;?>: <input name="link4" type="checkbox" <?php if ($link4 == 1){?> checked="checked" <?php } ?>/></p>
<p><?php echo $link5;?>: <input name="link5" type="checkbox" <?php if ($link5 == 1){?> checked="checked" <?php } ?>/></p>
<p><?php echo $link6;?>: <input name="link6" type="checkbox" <?php if ($link6 == 1){?> checked="checked" <?php } ?>/></p>
<p><?php echo $link7;?>: <input name="link7" type="checkbox" <?php if ($link7 == 1){?> checked="checked" <?php } ?>/></p>
<p><?php echo $link8;?>: <input name="link8" type="checkbox" <?php if ($link8 == 1){?> checked="checked" <?php } ?>/></p>
<p>Title<input type="text" name="title" value="<?php echo $title;?>"></p>
<p>Embed Code<input type="text" name="embed_code" value="<?php echo $embed_code;?>"></p>
<?php
if($res9=$mysqli->query("select * from imagelibrary where siteid='doggiehugs' and delrec!='on'")):
echo "<p>Image : <select name='image_name'>";
	while($myrow9=$res9->fetch_object()):
	$image_file=$myrow9->image_file;
	$image_id=$myrow9->id;
	printf("<option value='%s'>%s</option>",$image_id, $image_file);
	endwhile;
echo "</select></p>";
else:
echo "<p>No Images found.  Add some.</p>";
endif;
?>
 <!-- <p>Content Editor</p>
    <form method="post">
      <textarea id="mytextarea" name="thislisting"><?php echo $thislisting; ?></textarea>
    </form>
    <p>Content<textarea name="thislisting">-->
          <textarea id="mytextarea" name="thislisting">
<?php echo $thislisting;?></textarea></p>
<p>Member ID<input type="text" name="memberid" value="<?php echo $memberid;?>"></p>
<p>Author Name<input type="text" name="authname" value="<?php echo $authname;?>"></p>
<p>Date Created<input type="date" name="origdate" value="<?php echo $origdate;?>"></p>
<p>Showdate<input type="date" name="showdate" value="<?php echo $showdate;?>"></p>
<p>Hidedate<input type="date" name="hidedate" value="<?php echo $hidedate;?>"></p>
<p>Contact Name<input type="text" name="contactname" value="<?php echo $contactname;?>"></p>
<p>Contact Notes<input type="text" name="contactnotes" value="<?php echo $contactnotes;?>"></p>
<p>Contact Email<input type="text" name="contactemail" value="<?php echo $contactemail;?>"></p>
<p>Contact Phone1<input type="text" name="contactphone1" value="<?php echo $contactphone1;?>"></p>
<p>Contact Phone2<input type="text" name="contactphone2" value="<?php echo $contactphone2;?>"></p>
<p>Link to URL<input type="text" name="linkto" value="<?php echo $linkto;?>"></p>
<p><input style='font-family:verdana,sans-serif;font-size:7.5pt' type="submit" name="create_classified" value="Enter"></p>
</form>
<!-- END CREATE CONTENT -->

</td></table>
<table><td>

<!-- LIST - DELETE CONTENT-->
<?php
include('ff_connect.php');
	$res7 = $mysqli->query("SELECT * FROM ff_healthapp");
			if($myrow7=$res7->fetch_object()){
				do {

			$thisid=$myrow7->id;
			$dogID=$myrow7->dogID;
			$dogName=$myrow7->dogName;
			$arrivedOn=$myrow7->arrivedOn;
			$leftOn=$myrow7->leftOn;
			$dogWeight=$myrow7->dogWeight;
			$dateWeighed=$myrow7->dateWeighed;
			$dogBreed=$myrow7->dogBreed;
			$dogColor=$myrow7->dogColor;
			$dogGender=$myrow7->dogGender;
			$dogAge=$myrow7->dogAge;
			$dogOrigin=$myrow7->dogOrigin;
			$dateNeutered=$myrow7->dateNeutered;
			$behavior=$myrow7->behavior;
			$behaviorText=$myrow7->behaviorText;
			$health=$myrow7->health;
			$healthText=$myrow7->healthText;
			$dentalNotes=$myrow7->dentalNotes;
			$lastDentalExam=$myrow7->lastDentalExam;

			echo '<div class="container table">';

			printf("<div class='row'><div class='col'><a href='%s?id=%s'>%s</a></div>", $PHP_SELF, $thisid, $dogName);
			echo '</div>';
			}  while($myrow7=$res7->fetch_object());
		}
		echo "</div>";
	//$res7=$mysqli->free();

/*
if($res7=$mysqli->query("select * from classifieds where siteid='doggiehugs' and delrec != 'on'")):

echo "<p>Content</p>";
	while($myrow7=$res7->fetch_object()):
    if($myrow7->featured != '') { $feat = "Featured"; }
    if($myrow7->link1 != '') { $l1=$link1;}
    if($myrow7->link2 != '') { $l2=$link2;}
    if($myrow7->link3 != '') { $l3=$link3;}
    if($myrow7->link4 != '') { $l4=$link4;}
    if($myrow7->link5 != '') { $l5=$link5;}
    if($myrow7->link6 != '') { $l6=$link6;}
    if($myrow7->link7 != '') { $l7=$link7;}
    if($myrow7->link8 != '') { $l8=$link8;}
    printf("<form method=post action=%s><input type=submit name='del_classified' value='X'><input type=hidden
    name=this_class_id value=%s>%s<p><font color=red>%s %s %s %s %s %s %s %s %s </font></p><p>%s</p></form>", $PHP_SELF, $myrow7->id, $myrow7->title,
    $feat, $l1, $l2, $l3, $l4, $l5, $l6, $l7, $l8, $myrow7->thislisting);
	endwhile;
endif;
*/
?>
<!-- END LIST - DELETE CONTENT-->
</td></table>
</div>
</div>




  </body>
</html>
