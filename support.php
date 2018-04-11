<?php
  include_once 'header.php';
?>


<!-- TOP WRAPPER IMAGE -->
<div class="topimage" style="background-image:url('images/supportheader.jpeg');"> 

<!-- NAV BAR -->
<?php
  include_once 'navbar.php';
?>


<!-- WRAPPER TEXT -->
  <div class="container">
	 <div class="topimage">
		  <div class="col-lg-12">
			 <div id="content">
				  <h1 id="wrapheader">Support Our Work</h1>
				  <hr align="left">
			 </div>
		  </div>
	 </div>
  </div>
</div>

<!-- CONTENT SECTION 1 -->
  
  <div class="col-md-12"><h2>Upcoming Events</h2>
    <h4>Here are some of our upcoming events. Join us and help raise money for a great cause!</h4>
  </div>
  <div class="col-sm-4">
    <div class="thumbnail">
      <div class="overlay">
        <i class="fa fa-share md"></i>
      </div>
      <img class="img-responsive" alt="a" src="images/eventsmeetup.jpg">
    </div>
    <div class="row">
      <div class="col-md-3">
        <h3><span class="label label-warning">Apr 28</span></h3>
      </div>
      <div class="col-md-9">
          <strong>Pet Rescue NI Meet and Greet</strong><br>
          <strong>at 123 Bark Way, Belfast</strong><br>
          <span class="small">10:00 AM - 5:00 PM</span>
      </div>
    </div>
  </div>
  
    <div class="col-sm-4">
    <div class="thumbnail">
      <div class="overlay">
        <a href="https://www.google.com"><i class="fa fa-share md"></i></a>
      </div>
      <img class="img-responsive" alt="a" src="images/eventszorb.jpg">
    </div>
    <div class="row">
      <div class="col-md-3">
        <h3><span class="label label-warning">Jun 30</span></h3>
      </div>
      <div class="col-md-9">
          <strong>Zorb Up the Lagan in a Bubble! </strong><br>
          <em>at Lagan River, Belfast</em><br>
          <span class="small">1:00 PM - 4:00 PM</span>
      </div>
    </div>
  </div>

    <div class="col-sm-4">
    <div class="thumbnail">
      <div class="overlay">
        <i class="fa fa-share md"></i>
      </div>
      <img class="img-responsive" alt="a" src="images/eventsdogwalk.jpg">
    </div>
    <div class="row">
      <div class="col-md-3">
        <h3><span class="label label-warning">Jul 22</span></h3>
      </div>
      <div class="col-md-9">
          <strong>Annual Sponsored Dog Walk</strong><br>
          <em>at Botanic Gardens, Belfast</em><br>
          <span class="small">9:00 AM - 12:00 PM</span>
      </div>
    </div>

  </div>


<!-- CONTENT SECTION 2 -->
<a id="donate"></a>
<div class="jumbotron" id="footjumbotron" style="padding-top: 200px">

    <h1 class="h1-responsive">Donation Options</h1>
    <p class="lead">Any donations are gratefully received and every penny will go towards helping animals in our care and saving more.</p>
    <hr align="left">
    <p>You can donate to our work in a few ways: </p>
    <p><ul>
      <li>Join in with one of our fundraising events!</li>
      <li>Send us a cheque, made payable to 'Pet Rescue NI'</li>
      <li>Donate directly using Paypal, by clicking the button below.</li>
    </ul></p>
              <form action="https://www.paypal.com/cgi-bin/webscr" method="post">
            <input type="hidden" name="business" value="petrescueni@test.org.uk">   
            <input type="hidden" name="cmd" value="_donations"> 
            <input type="hidden" name="item_name" value="Pet Rescue NI">      
            <input type="hidden" name="item_number" value="Website Donation">
            <input type="hidden" name="currency_code" value="GBP"> 
            <input type="image" width="200px" name="submit" src="https://www.paypalobjects.com/en_US/i/btn/btn_donate_LG.gif" alt="Donate">
         </form> 
         <hr align="left">
      <p><strong>Thank you so much for your support!</strong>
</div>


  <!-- FOOTER-->
<?php
  include_once 'footer.php';
?>