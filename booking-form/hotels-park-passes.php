<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<title>Hotels &amp; park passes</title>
<link rel="stylesheet" type="text/css" href="../css/booking-form-styles.css"/>
<link rel="stylesheet"  type="text/css" href="../css/jquery-calendar.css" />
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
	<div id="booking-form-middle-box-holder">
    
      <nav>
          <ul>
              <li class="current"><a href="hotels-park-passes.php">Hotels &amp; Park Passes</a></li>
              <li><a href="park-pass-only.php">Park Pass Only</a></li>
              <li><a href="special-offers.php">Special Offers</a></li>
          </ul>
      </nav>
        <form action="#" method="post">
          <div id="booking-form">
          <p class="departure-date">
        	<label>
            	Departure date:<br/>
                <input type="text" id="departure-date" placeholder="dd-mm-yyyy"  />
            </label>
        </p>
        <p class="return-date">
        	<label>
            	Return date:<br/>
                <input type="text" id="return-date" placeholder="dd-mm-yyyy"/>
            </label>
        </p>
        <p>
        	<label>
            	Number of Adults:<br/>
                	<select>
					  <option value="1">1</option>
					  <option value="2">2</option>
					  <option value="3">3</option>
					  <option value="4">4</option>
                      <option value="5">5</option>
                      <option value="6">6</option>
                      <option value="7">7</option>
                      <option value="8">8</option>
                      <option value="9">9</option>
					</select>
			</label>
        </p>
           <p>
        	<label>
            	<sup>*</sup>Number of children aged 7-11 yrs:<br/> 
                	<select>
                      <option value="0">0</option>
					  <option value="1">1</option>
					  <option value="2">2</option>
					  <option value="3">3</option>
					  <option value="4">4</option>
                      <option value="5">5</option>
                      <option value="6">6</option>
                      <option value="7">7</option>
                      <option value="8">8</option>
                      <option value="9">9</option>
					</select>
			</label>
        </p>
             <p>
        	<label>
            	<sup>*</sup>Number of children agen 3-6 yrs:<br/>
                	<select>
                      <option value="0">0</option>
					  <option value="1">1</option>
					  <option value="2">2</option>
					  <option value="3">3</option>
					  <option value="4">4</option>
                      <option value="5">5</option>
                      <option value="6">6</option>
                      <option value="7">7</option>
                      <option value="8">8</option>
                      <option value="9">9</option>
					</select>
			</label>
        </p>
             <p>
        	<label>
            	<sup>*</sup>Number of children agen 0-2 yrs: <br/>
                	<select>
                      <option value="0">0</option>
					  <option value="1">1</option>
					  <option value="2">2</option>
					  <option value="3">3</option>
					  <option value="4">4</option>
                      <option value="5">5</option>
                      <option value="6">6</option>
                      <option value="7">7</option>
                      <option value="8">8</option>
                      <option value="9">9</option>
					</select>
			</label>
        </p>
    
        
        <p><sup>*</sup>Age on date of arrival, not date of booking</p>
      </div> <!-- booking-form end -->
      <input type="button" value="Search" />
      </form>
      <p class="center clear-both">Want to view an existing booking? <a href="../my-booking.php">Click here</a></p>
	</div> <!-- booking-form-middle-box end -->
</body>
</html>
