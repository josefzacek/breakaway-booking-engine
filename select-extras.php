<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<title>select extras</title>
<link rel="stylesheet" type="text/css" href="css/shared-styles.css"/>
<link rel="stylesheet" type="text/css" href="css/select-extras.css"/>
<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
<!--[if lt IE 9]>
	<script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->

<script> 

  
$(document).ready(function() {

  	/* hide all divs inside demo-show2 */
  	$('.extras-form-holder').hide();
  
  	/* click function for all relevant anchors */
  	$('.extras-details-button').click(function() {
   
		/* setup div variables */
		var $nextDiv = $(this).next();
		$nextDiv.slideToggle('div:visible');

	}); 
    
});
  
</script>
</head>

<body>
<div id="wrapper">
  <?php include("shared-html/header.php"); ?>
  <div id="navigation">
    <div id="start-again-back">
      <ul>
        <li><a href="booking-form/hotels-park-passes.php" id="start-again-bt" title="Start again">start again</a></li>
        <li><a href="select-hotel.php" id="back-bt" title="Back">Back</a></li>
      </ul>
    </div>
    <!-- start-again-back end -->
    
    <div id="progress"> <img src="images/select-extras/progress2.png" alt="Booking progress"/> </div>
    <!-- progress end -->
    <div class="clear-both"></div>
  </div>
  <!-- navigation end -->
  <p>Select some extras with your stay to make your trip more enjoyable. Breakaway wishes you a great holiday at Disneyland Paris!</p>
  <div class="spacer"></div>
  <div id="booking-details">
    <div id="booking-details-left">
      <table>
        <tr>
          <td class="blue">Check In: </td>
          <td class="black">31/10/2013 </td>
        </tr>
        <tr>
          <td class="blue">Check Out: </td>
          <td class="black">04/11/2013 </td>
        </tr>
        <tr>
          <td class="blue">Adults: </td>
          <td class="black">1</td>
        </tr>
      </table>
    </div>
    <!-- booking-details-left end -->
    
    <div id="booking-details-right">
      <table>
        <tr>
          <td class="blue">Kids(7-11): </td>
          <td class="black">0</td>
        </tr>
        <tr>
          <td class="blue">Kids(3-6): </td>
          <td class="black">0</td>
        </tr>
        <tr>
          <td class="blue">Infants: </td>
          <td class="black">0</td>
        </tr>
      </table>
    </div>
    <!-- booking-details-right end -->
    <div class="clear-both"></div>
  </div>
  <!-- booking-details end -->
  
  <div class="spacer"></div>
 
  <div class="extras-holder">
    <h2>Character Breakfast 1st Seating 07.30 Disney</h2>
    <img src="images/select-extras/extras-character-meals.jpg" alt="Hotel extras">
  
    <p class="extras-text">
    	Enjoy a buffet breakfast with Disney characters. 
Buffet consists of breads, cereals, pastries, scrambled eggs, fruit, juices & hot drinks
1st Seating at 7.30 am in Cafe Mickey located in Disney Village 
(Restaurant location subject to change.) Prices Adults & Children (3-11 years) €16.50 Summer 13 and Prices Adults & Children (3-11 years) €16.00 Winter 1314 Infants (0-2) free all dates
		</p>
    <!-- extras-text end -->
    
     <p class="extras-details-button">View details</p>
     
     <div class="extras-form-holder">
         form goes here
     </div> <!-- extras-form-holder end -->
     <div class="clear-both"></div>
  </div>
  <!-- extras-holder end -->
  
  
  
  
  <div class="extras-holder">
    <h2>Character Breakfast 1st Seating 07.30 Disney</h2>
    <img src="images/select-extras/extras-character-meals.jpg" alt="Hotel extras">
  
    <p class="extras-text">
    	Enjoy a buffet breakfast with Disney characters. 
Buffet consists of breads, cereals, pastries, scrambled eggs, fruit, juices & hot drinks
1st Seating at 7.30 am in Cafe Mickey located in Disney Village 
(Restaurant location subject to change.) Prices Adults & Children (3-11 years) €16.50 Summer 13 and Prices Adults & Children (3-11 years) €16.00 Winter 1314 Infants (0-2) free all dates
		</p>
    <!-- extras-text end -->
     <p class="extras-details-button">View details</p>
     
     <div class="extras-form-holder">
         form goes here
     </div> <!-- extras-form-holder end -->
     
     <div class="clear-both"></div>
  </div>
  <!-- extras-holder end -->
  
  
  
  
  
  <div id="bottom-start-again-back">
    <p><a href="select-hotel.php" title="Back">Back</a></p>
    <p><a href="booking-form/hotels-park-passes.php" title="Start again">Start again</a></p>
    <p class="proceed-checkout"><a href="transfers-insurance.php" title="Proceed to Checkout">Proceed to Checkout</a></p>
  </div>
  <!-- bottom-start-again-back end -->
  
  <?php include("shared-html/footer.php"); ?>
</div>
<!-- wrapper end  -->
</body>
</html>
