<?php
  include_once 'header.php';
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
				  <h1 id="wrapheader">Sign Up</h1>
				  <hr align="left">
              <form class="signup" action="includes/signup.inc.php" method="POST">
                  <input type="text" class="form-control" name="first" placeholder="First Name">
                  <input type="text" class="form-control" name="last" placeholder="Last Name">
                  <input type="text" class="form-control" name="email" placeholder="Email">
                  <input type="text" class="form-control" name="uid" placeholder="Username">
                  <input type="password" class="form-control" name="pwd" placeholder="Password">
                  <div class="submitbutton">
                    <button type="submit" class="btn-warning" name="submit">Sign up</button>
                  </div>
            </form>
			 </div>
		  </div>
	 </div>
  </div>
</div>

<div class="jumbotron" id="leadjumbotron">
    <h2 class="h2-responsive">Be the first to hear about our news and upcoming events</h2>
    <p class="lead"><strong>Pet Rescue NI</strong> couldn't exist without the enthusiasm and support of our followers.  Join our mailing list and become part of our growning community.</p>
    <hr class="my-2">
    <p>You can choose the frequency and type of news you want to receive on your profile page when you log in.  We promise only to send you the updates you've requested and will never share your email address with third parties.
    </p>

</div>

  <!-- FOOTER-->
<?php
  include_once 'footer.php';
?>