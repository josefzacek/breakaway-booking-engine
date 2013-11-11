<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<title>select extras</title>
<link rel="stylesheet" type="text/css" href="css/shared-styles.css"/>
<link rel="stylesheet" type="text/css" href="css/select-extras.css"/>

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
        <li><a href="index.php" id="start-again-bt" title="Start again">start again</a></li>
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
  
  
  
  
  

  
  
  


  <div id="bottom-start-again-back">
    <ul>
      <li><a href="select-hotel.php" id="back-bt-bottom">Back</a></li>
      <li><a href="index.php" id="start-again-bt-bottom">Start again</a></li>
      <li id="proced-to-checkout"><a href="transfers-insurance.php" id="proceed-checkout">Proceed to Checkout</a></li>
    </ul>
  </div>
  <!-- bottom-start-again-back end -->
  
  <?php include("shared-html/footer.php"); ?>
</div>
<!-- wrapper end  -->
</body>

</html>
