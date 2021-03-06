<!DOCTYPE HTML>
<html>
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="author" content="www.josefzacek.com">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<title>transfers and insurance</title>
<link rel="stylesheet" type="text/css" href="css/shared-styles.css"/>
<link rel="stylesheet" type="text/css" href="css/booking-details.css"/>
<script src="http://code.jquery.com/jquery-1.9.1.js"></script>

<!--[if lt IE 9]>
	<script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->



</head>

<body>
<div id="wrapper">
  <?php include("shared-html/header.php"); ?>
  <div id="navigation">
    <div id="start-again-back">
      <ul>
        <li><a href="booking-form/hotels-park-passes.php" id="start-again-bt" title="Start again">start again</a></li>
        <li><a href="select-extras.php" id="back-bt" title="Back">Back</a></li>
      </ul>
    </div>
    <!-- start-again-back end -->
    
    <div id="progress"> <img src="images/booking-details/progress4.png" alt="Booking progress"/> </div>
    <!-- progress end -->
    <div class="clear-both"></div>
  </div>
  <!-- navigation end -->

  <div class="spacer"></div>
  
  <div class="final-booking-details">
  <h3>Booking details</h3>
  <table>
  	<tr>
  		<td>Arrival Date</td>
  		<td>26/12/2013</td>
  	</tr>
  	<tr>
  		<td>Departure Date</td>
  		<td>28/12/2013</td>
  	</tr>
    
  	<tr>
  		<td>No of Nights</td>
  		<td>2</td>
  	</tr>
  	<tr>
  		<td>No of Adults</td>
  		<td>1</td>
  	</tr>
    <tr>
  		<td>No of Children</td>
  		<td>0</td>
  	</tr>
    <tr>
  		<td>No of Infant</td>
  		<td>0</td>
  	</tr>
    
    <tr>
  		<td>Hotel Name</td>
  		<td>Sequoia Lodge</td>
  	</tr>
    <tr>
  		<td>Room Type</td>
  		<td>Montana Lake Max 4 </td>
  	</tr>
    <tr>
  		<td>No of Rooms</td>
  		<td>1</td>
  	</tr>
    
    <tr>
  		<td>Transfer Cost</td>
  		<td>&euro;40</td>
  	</tr>
  	<tr>
  		<td>Package Cost</td>
  		<td>&euro;1122</td>
  	</tr> 
  	<tr>
  		<td>Handling Fee</td>
  		<td>&euro;19</td>
  	</tr>
  	<tr>
  		<td>Tax</td>
  		<td>&euro;0</td>
  	</tr>
  
  </table>
  <table class="">
  <tr>
  		<td><b>Total Cost</b></td>
  		<td><b>&euro;1122</b></td>
  	</tr>
  </table>
  <p class="small-text-10">*All hotel bookings include continental breakfast(except Davy Crockett)</p>
  </div> <!-- final-booking-details end -->
 
 
 
 <p class="advisory-text">To complete your booking please enter details below. All fields marked with* must be completed.
If you wish to save the quote details and return to complete the booking later then simply enter your email address and phone number and go directly to the Save quote for Later button. Your quote option will be held until 12pm (mid-day GMT) tomorrow.</p>

<div class="img-holder">
  <img src="images/booking-details/realex.png" alt="Realex">
  <img src="images/booking-details/fully-bonded-licensed.png" alt="Licence">
</div> <!-- img-holder end -->


<div class="final-booking-form-holder">
<form action="#" method="post">
<div class="payment-details">

<!-- names-->
<h3>Names as per passport</h3>
<label>Title: <span><sup>*</sup></span>
<input type="text" name="title" required autofocus>
</label>

<label>First name:<span><sup>*</sup></span>
<input type="text" name="first-name" required>
</label>

<label>Last name:<span><sup>*</sup></span>
<input type="text" name="last-name" required>
</label>

<!--address-->
<h3>Lead Person Details</h3>

<label>Lead name:<span><sup>*</sup></span>
<input type="text" name="lead-name" required>
</label>

<label>Address line1:<span><sup>*</sup></span>
<input type="text" name="address1" required>
</label>

<label>Address line2:<span><sup>*</sup></span>
<input type="text" name="address2" required>
</label>

<label>Postal code:<span><sup>*</sup></span>
<input type="text" name="postal-code" required>
</label>

<label>Email:<span><sup>*</sup></span>
<input type="email" id="email" name="email" required>
</label>

<label>Confirm email:<span><sup>*</sup></span>
<input type="email" id="confirm-email" name="confirm-email" required>
</label>

<label>Telephone:<span><sup>*</sup></span>
<input type="tel" name="telephone" required>
</label>


<!-- special requests -->
<h3>Special Request</h3>
<p>If you have any special requests or requirements please enter them in the box below.</p>

<label>Request details:
<textarea name="request-details"></textarea>
</label>

<!-- postage -->
<h3>Postage</h3>

<label>Postage:
	<select name="postage">
		<option value="select">-- Select --</option>
		<option value="standard">Standard Post &euro;2</option>
		<option value="express">Express Post &euro;8</option>
	</select>
</label>
<p>Postage Price:  <span>&euro;2</span></p>

<label>
<input type="checkbox" name="special-offers" value="special-offers">
Tick here if you would like to receive emails from breakaway.ie with product updates and special offers
</label>

<label>
<input type="checkbox" name="terms-conditions" value="terms-conditions">
 I confirm that I have read and agree with the <a href="#">terms and conditions</a></label>

</div> <!-- payment-details end -->


<div class="final-price">
<p>Total cost:<br/>
&euro;1657
</p>
<input type="submit" value="Pay in full" />


</div> <!-- final-price end -->
</form>
</div> <!-- final-booking-form-holder end -->



<div class="need-help">
<img src="images/booking-details/need-help.jpg" alt="Need help?">
<div class="help-buttons">
	<p><a href="#">Newsletter Signup</a></p>
	<p><a href="#">Request Brochure</a></p>
	<p><a href="#">Join us on Facebook</a></p>
</div>
<div class="clear-both"></div>

</div> <!-- need-help end -->



  
  <div id="bottom-start-again-back">
    <p><a href="select-extras.php" title="Back">Back</a></p>
    <p><a href="booking-form/hotels-park-passes.php" title="Start again">Start again</a></p>
  </div>
  <!-- bottom-start-again-back end -->
  
  <?php include("shared-html/footer.php"); ?>
</div>

  <script type="text/javascript">
      document.getElementById("confirm-email").addEventListener("input", verifyEmail);

      function verifyEmail(input) {
        input = input.srcElement;
        if (input.value != document.getElementById('email').value) {
          input.setCustomValidity('The two email addresses must match.');
        } else {
          input.setCustomValidity('');
        }
        input.nextElementSibling.innerText = input.validationMessage;
      }

    </script>

</body>

</html>
