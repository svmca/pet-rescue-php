<?php
  include_once 'header.php';
?>

<!-- TOP WRAPPER IMAGE -->
<div class="topimage" style="background-image:url('images/homeheader.jpg');"> 

  <!-- NAV BAR -->
<?php
  include_once 'navbar.php';
?>
<!-- WRAPPER TEXT -->
  <div class="container">
	 <div class="topimage">
		  <div class="col-lg-12">
			 <div id="content">
				  <h1 class="h1-responsive">Pet Rescue NI</h1>
				  <hr align="left">
				  <a type="btn" class="btn-warning btn-lg" href="gallery.php" ><i class="fas fa-paw"></i> Find your new best friend</a>
			 </div>
		  </div>
	 </div>
  </div>
</div>

<!-- CONTENT SECTION 1 -->
<div class="jumbotron" id="leadjumbotron">
    <h2 class="h2-responsive">Rehoming Unwanted and Abandoned Cats and Dogs since 2017</h2>
    <p class="lead"><strong>Pet Rescue NI</strong> aims to help the unwanted, neglected and abandoned and give them a chance of happiness. We currently have many animals with us who need 5 star loving homes. We also have several animals that will remain with us for longer periods of time due to their specific needs.</p>
    <hr class="my-2">
    <p>We are entirely self funded and run by a very small team of dedicated volunteers. All money raised goes directly towards the feeding and caring of the animals, this includes hefty veterinary bills for those that have been mistreated or become ill. Every penny you give goes directly to helping these animals and saving more. 
    <a href="profile.php">link</a></p>

</div>

<!-- CONTENT SECTION 2 -->
<div class="row">
  <div class="col-lg-4 col-sm-6 col-xs-12">
    <div class="thumbnail">
       <img src="images/homeevents.jpg">
      <div class="caption">
        <h3>Events</h3>
        <p><a href="support.php" class="btn btn-warning" role="button">Get Involved</a> </p>
      </div>
    </div>
  </div>
  <div class="col-lg-4 col-sm-6 col-xs-12">
    <div class="thumbnail">
        <img src="images/homeadopt.jpg">
      <div class="caption">
        <h3>Adopt</h3>
        <p><a href="apply.hmtl" class="btn btn-warning" role="button">Learn More</a> </p>
      </div>
    </div>
  </div>
  <div class="col-lg-4 col-sm-6 col-xs-12">
    <div class="thumbnail">
        <img src="images/puppybegging.jpg">
      <div class="caption">
        <h3>Join our mailing list!</h3>
        <p><a href="signup.php" class="btn btn-warning" role="button">Sign Up</a> </p>
      </div>
    </div>
  </div>
</div>


  <!-- FOOTER-->
<?php
  include_once 'footer.php';
?>