<!DOCTYPE HTML>
<html>
<head>
 <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="author" content="www.josefzacek.com">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<title>transfers and insurance</title>
<link rel="stylesheet" type="text/css" href="css/shared-styles.css"/>
<link rel="stylesheet" type="text/css" href="css/transfers-insurance.css"/>
<link rel="stylesheet"  type="text/css" href="css/jquery-calendar.css" />
<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
<script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
<!--[if lt IE 9]>
	<script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
<!-- jQuery callendar  -->
<script>
  $(function() {
    $( "#departure-date").datepicker({ dateFormat: "dd-mm-yy"});
	$( "#return-date").datepicker({ dateFormat: "dd-mm-yy"});
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
        <li><a href="select-extras.php" id="back-bt" title="Back">Back</a></li>
      </ul>
    </div>
    <!-- start-again-back end -->
    
    <div id="progress"> <img src="images/transfers-insurance/progress3.png" alt="Booking progress"/> </div>
    <!-- progress end -->
    <div class="clear-both"></div>
  </div>
  <!-- navigation end -->

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
 

<div class="insurance-banner">
<img src="images/transfers-insurance/transfers-splash.jpg" alt="Breakaway Travel Insurance" class="img-resizable"/>
</div> <!-- insurance-banner end -->

<div class="transfers-holder">
	<h3>Transfers</h3>
    <form action="#" method="post">
    <div class="transfers-options">
    <p><b>Transfers options:</b></p>
    
    <label>
    	<input type="checkbox" name="not-required" value="not-required">
        Transfers Not Required
    </label>
    
    <label>Type of transfer:
      <select>
        <option value="coach-transfer">Coach Transfers from Paris CDG</option>
        <option value="shared-shuttle">Shared Shuttle Beauvais to Disney </option>
        <option value="private-transfer">Private Transfers from CDG Airport</option>
      </select>
    </label>
    
    <label>Transfers type:
      <select>
        <option value="return">Return</option>
        <option value="one-way">One-Way </option>
      </select>
    </label>
    <p class="small-text-10 black">Transfer prices are from Paris Charles de Gaulle Airport to/from Disneyland Paris. For transfers from other airports (Beauvais or Orly) please contact us.</p>
    
    
    </div> <!-- option-options end -->
    
    <div class="stay-dates">
      <p><b>Select departure and return dates:</b></p>
    	<label>Departure date:
            <input type="text" id="departure-date" placeholder="dd-mm-yyyy"/>
        </label>
    
    	<label>Return date:
            <input type="text" id="return-date" placeholder="dd-mm-yyyy"/>
        </label>
    </div> <!-- stay-dates end -->
    
    <div class="no-transfers">
    <p><b>Number of Transfers:</b></p>
    
    <label>Adults:
     <select>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
      </select>
    </label>
    
    <label>Kids:
      <select>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
      </select>
    </label>
    
    <label>Infants:
      <select>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
      </select>
    </label>
    </div> <!-- no-transfers end -->
    </form>
    
    <ul>
    <li><a href="#" title="View Coach Transfer Time Table">View Coach Transfer Time Table</a></li>
    <li><a href="#" title="View Transfer information">View Transfer information</a></li>
	</ul>
    
    <div class="transfers-price">
       		<p>Additional Price: <span class="add-price">€65</span></p>    
     	</div>
    
</div> 
<!-- transfers-holder end -->

<div class="insurance-holder">
	<h3>Insurance</h3>
    <form action="#" method="post">
      <div class="insurance-options">
      <label>
        <input type="radio" name="insurance" value="not-required" id="not-required"  checked>
        Not Required
      </label>
      <label>
        <input type="radio" name="insurance" value="standard-policy" id="standard-policy">
        Standard Policy
      </label>
      <label>
        <input type="radio" name="insurance" value="premier-cover" id="premier-cover">
       	Premier Cover
      </label>
      </div> <!-- insurance-options end -->
    
       
    <div id="insured-persons">
    <h3>Insured persons</h3>
    <label>Adults(17 and Over):
    	<select>
        	<option value="0">0</option>
    		<option value="1">1</option>
    		<option value="2">2</option>
    		<option value="3">3</option>
    	</select>
     </label>
     
     <label>Children(12 - 16): 
    	<select>
        	<option value="0">0</option>
    		<option value="1">1</option>
    		<option value="2">2</option>
    		<option value="3">3</option>
    	</select>
     </label>
     
       <label> Children(2 - 11):  
    	<select>
        	<option value="0">0</option>
    		<option value="1">1</option>
    		<option value="2">2</option>
    		<option value="3">3</option>
    	</select>
     </label>
     
       <label> Children(0 - 1):
    	<select>
        	<option value="0">0</option>
    		<option value="1">1</option>
    		<option value="2">2</option>
    		<option value="3">3</option>
    	</select>
     </label>
     
     
    </div>   <!-- insured-persons end -->
    </form>
    
    <ul>
    	<li><a href="#" title="Policy document">Policy document</a></li>
    	<li><a href="#" title="Standars Policy key facts">Standars Policy key facts</a></li>
    	<li><a href="#" title="Premium Policy key facts">Premium Policy key facts</a></li>
    </ul>
    
    <div class="insurance-price">
       	<p>Additional Price: <span class="add-price">€65</span></p>    
    </div> 
    
    
</div> 
<!-- insurance-holder end -->
  
  
  <div id="bottom-start-again-back">
    <p><a href="select-extras.php" title="Back">Back</a></p>
    <p><a href="booking-form/hotels-park-passes.php" title="Start again">Start again</a></p>
    <p class="proceed-checkout"><a href="booking-details.php" title="Proceed to Checkout">Proceed to Checkout</a></p>
  </div>
  <!-- bottom-start-again-back end -->
  
  <?php include("shared-html/footer.php"); ?>
</div>
<!-- wrapper end  -->
<script>
$(document).ready(function() {
	/* hide insured persons*/
	$('#not-required').click(function() {
       $('#insured-persons').hide('slow')
      });
	/* show insured persons*/  
	$('#standard-policy').click(function() {
       $('#insured-persons').show('slow')
      });
	/* show insured persons*/  
	$('#premier-cover').click(function() {
       $('#insured-persons').show('slow')
      });

});

</script>


</body>

</html>