<!DOCTYPE HTML>
<html>
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="author" content="www.josefzacek.com">
  <meta name="viewport" content="width=device-width, initial-scale=1">




<title>Park pass only</title>
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
    $( "#from-date").datepicker({ dateFormat: "dd-mm-yy"});
  });
  </script>

</head>

<body>



	<div id="booking-form-middle-box-holder">
    	<img src="../images/breakawaylogo.gif" alt="Breakaway logo" id="logo">
      <nav>
          <ul>
              <li><a href="hotels-park-passes.php">Hotels &amp; Park Passes</a></li>
              <li class="current"><a href="park-pass-only.php">Park Pass Only</a></li>
          </ul>
      </nav>
      
        <form action="#" method="post">
          <div id="booking-form">
          <p>
        	<label>
            	From date:<br/>
                <input type="text" id="from-date" placeholder="dd-mm-yyyy"  />
            </label>
        </p>
        <p>
        	<label>
            	Select ParkPass Location:<br/>
                <select>
					  <option value="paris">Paris</option>
					  <option value="florida">Florida</option>
					  
					</select>
            </label>
        </p>
        
        
        
       
        <p>
        	<label>
            	Number of Adults (aged 12 or Over):<br/>
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
            	<sup>*</sup>Number of Children (aged 3-11):<br/> 
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
            	<sup>*</sup>Number of infants(aged < 3 yrs):<br/>
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
             
      </div> <!-- booking-form end -->
      <input type="button" value="Search" />
      </form>
      
	</div> <!-- booking-form-middle-box end -->
</body>
</html>

