<?php

  if (!isset($_SESSION['u_id'])) {
           header("Location: index.php");
          }
   else {     
  include_once 'header.php';
}

?>
<!-- TOP WRAPPER IMAGE -->
<div class="topimage" style="background-image:url('images/loginheader.jpeg');"> 

  <!-- NAV BAR -->
<?php
  include_once 'navbar.php';
?>

<!-- WRAPPER TEXT -->
  <div class="container">
	 <div class="topimage">
		  <div class="col-lg-12">
			 <div id="content">
				  <h1 id="wrapheader">My Preferences</h1>
				  <hr align="left">

			 </div>
		  </div>
	 </div>
  </div>
</div>

<div class="jumbotron" id="leadjumbotron">
<form class="signup" action="includes/profile.inc.php" method="POST">
                  <p><strong>Please specify how frequently you would like to receive our updates:</strong></p>
                  <div class="radio">
                      <label><input type="radio" name="optradio">Weekly</label>
                  </div>
                  <div class="radio">
                      <label><input type="radio" name="optradio">Monthly</label>
                  </div>
                  <div class="radio">
                      <label><input type="radio" name="optradio">Quarterly</label>
                  </div>
                  <br />
                  <p><strong>Please let us know what topics you'd like to hear about (tick as many as you wish):</strong></p>
                  <div class="checkbox">
                      <label><input type="checkbox" value="">Adoption Campaigns</label>
                  </div>
                  <div class="checkbox">
                      <label><input type="checkbox" value="">Upcoming Events</label>
                  </div>
                  <div class="checkbox">
                      <label><input type="checkbox" value="">Success Stories</label>
                  </div>
                  

                  <div class="submitbutton">
                    <button type="submit" class="btn-warning" name="submit">Update preferences</button>
                  </div>
            </form>

</div>

  <!-- FOOTER-->
<?php
  include_once 'footer.php';
?>