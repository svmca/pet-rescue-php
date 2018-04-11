<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="index.php"><span><img class="logo" src="images/petsbest-logo.png"></span>Pet Rescue NI</a>
    </div>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
          <li><a href="gallery.php">Available Pets</a></li>
          <li><a href="gallery.php">Adopt a Pet</a></li>
        <li class="dropdown">
          <a href="support.php" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Support our Work<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="support.php">Events</a></li>
            <li><a href="support.php#donate">Donate</a></li>
          </ul>
        </li>
        <li><a href="contact.php">Contact Us</a></li>
      </ul>
      <div class="nav navbar-nav navbar-right loginstyle">
        <div class="nav-login">
          <?php

          //Logged in
          if (isset($_SESSION['u_id'])) {
            echo '<form action="includes/logout.inc.php" method="POST">
              <a type="btn" href="profile.php" class="btn-warning btn-sm" ><i class="fas fa-paw"></i>My Preferences</a>
              <button type="submit" name="submit" class="btn btn-warning btm-sm">Logout</button>
            </form>';
          }
          //Logged out
          else {
            echo '<form action="includes/login.inc.php" method="POST">
              <input type="text" name="uid" placeholder="Username/e-mail">
              <input type="password" name="pwd" placeholder="password">
              <button type="submit" name="submit" class=btn-warning>Login</button>
              <a type="btn" href="signup.php" class="btn-warning btn-sm" ><i class="fas fa-paw"></i>Sign up</a>
            </form>';
          }
        ?>
      </div> 
      </div>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container -->
</nav>