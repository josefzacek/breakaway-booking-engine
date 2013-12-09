<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
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
 
 
 
 <p>To complete your booking please enter details below. All fields marked with* must be completed.
If you wish to save the quote details and return to complete the booking later then simply enter your email address and phone number and go directly to the Save quote for Later button. Your quote option will be held until 12pm (mid-day GMT) tomorrow.</p>

<div class="img-holder">
  <img src="images/booking-details/realex.png" alt="Realex">
  <img src="images/booking-details/fully-bonded-licensed.png" alt="Licence">
</div> <!-- img-holder end -->


<form action="#" method="post">
<div class="payment-details">

<!-- names-->
<h3>Names as per passport</h3>
<label>Title: <span><sup>*</sup></span>
<input type="text" name="title" required>
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
<input type="text" name="email" required>
</label>

<label>Confirm email:<span><sup>*</sup></span>
<input type="text" name="confirm-email" required>
</label>

<label>Telephone:<span><sup>*</sup></span>
<input type="text" name="telephone" required>
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
</div> <!-- payment-details end -->




<input type="submit" value="Pay in full" />
</form>



  
  <div id="bottom-start-again-back">
    <p><a href="select-extras.php" title="Back">Back</a></p>
    <p><a href="booking-form/hotels-park-passes.php" title="Start again">Start again</a></p>
  </div>
  <!-- bottom-start-again-back end -->
  
  <?php include("shared-html/footer.php"); ?>
</div>



</body>

</html>
