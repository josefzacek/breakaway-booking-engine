<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<title>select hotel</title>
<link rel="stylesheet" type="text/css" href="styles.css"/>
<script type="text/javascript" src="script.js"></script>
<!--[if lt IE 9]>
	<script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->

</head>

<body>
<div id="wrapper">
  <?php include("/shared/header.php"); ?>
  <div id="navigation">
    <div id="start-again-back">
      <ul>
        <li><a href="#" id="start-again-bt" title="Start again">start again</a></li>
        <li><a href="#" id="back-bt" title="Back">Back</a></li>
      </ul>
    </div>
    <!-- start-again-back end -->
    
    <div id="progress"> <img src="images/select-hotel/progress1.png" alt="Booking progress"/> </div>
    <!-- progress end -->
    <div class="clear-both"></div>
  </div>
  <!-- navigation end -->
  <p>Please select one of the hotels from the list below</p>
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
  <div id="refine-search">
    <p class="center blue"><strong>Refine your search:</strong></p>
    <div id="category-dropdown">
      <select name="hotel">
        <option selected="selected" value="0">--Select All Hotels--</option>
        <option value="36">Santa Fe </option>
        <option value="37">Cheyenne</option>
        <option value="38">Sequoia Lodge</option>
        <option value="39">Newport Bay Club</option>
        <option value="42">Disneyland</option>
        <option value="44">Davy Crockett</option>
        <option value="46">Dream Castle Hotel (DL)</option>
        <option value="47">Magic Circus Hotel (DL)</option>
        <option value="51">Radisson Blu Hotel (DL)</option>
      </select>
    </div>
    <!-- category-dropdown end -->
    
    <div id="hotel-dropdown">
      <select name="star">
        <option selected="selected" value="0">--Select Hotel Star Rating--</option>
        <option value="2">2 Star</option>
        <option value="3">3 Star</option>
        <option value="4">4 Star</option>
        <option value="5">5 Star</option>
      </select>
    </div>
    <!-- hotel-dropdown end -->
    <div class="clear-both"></div>
  </div>
  <!-- refine-search end -->
  <div class="spacer"></div>
  
  
  
  <div class="hotel-wrapper"> <!-- wraps all hotel details name/price/hotel options/hotel details(general, description, photos, facilities) -->
  
    <div class="hotel-name-price-meals">
      <h3> Santa Fe <span> <img src="images/select-hotel/golden_star.gif" width="13" height="12" alt="Star"/> <img src="images/select-hotel/golden_star.gif" width="13" height="12" alt="Star"/> </span> </h3>
      
      <div class="best-price-available">
        <h4>Best Price Available: €1076</h4>
      </div>
      <!-- best-price-available end -->
      
      <div class="free-meals-offer">
        <h4>Free Meals Offer: €1220</h4>
      </div>
      <!-- free-meals-offer end --> 
      
    </div>
    <!-- hotel-name-price-meals end -->
    
    
    <div class="hotel-options">
	    
	    <p class="blue"><strong>Hotel options</strong></p>
	    <p class="blue">Room type</p>
	    
        
	    <div class="hotel-options-radio-buttons">
          <form action="select-hotel.php">
          <p><label>
              <input type="radio" name="roomtype" value="" checked="checked"><span class="blue">Standard Max 4  : <strong>€494</strong></span>
          </label></p>
          <p><label>
              <input type="radio" name="roomtype" value=""><span class="blue">Rio Grande/El Dorado Max 4  : <strong>€518</strong></span>
          </label></p>
          <p><label>
              <input type="radio" name="roomtype" value=""><span class="blue">Rio Grande/El Dorado Max 4  : <strong>€518</strong></span>
          </label></p>
          <p><label>
              <input type="radio" name="roomtype" value=""><span class="blue">Rio Grande/El Dorado Max 4  : <strong>€518</strong></span>
          </label></p>
          </form>
        </div> <!-- hotel-options-radio-buttons end -->
        
        <div class="rooms-park-passes">
          <p class="small-text-10 black">
          Max Adult: 2&nbsp;&nbsp;Min Adults: 1
          <br/>
          Max Kids: 1&nbsp;&nbsp;Min Kids: 0</p>
         
          <p class="blue">
          <label>
          	No. of Rooms:
            <select>
              <option selected="selected" value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
            </select>
	      </label>
          </p>
          
          <p class="blue">
          <label>
          	Park Passes:
          	<select>
              <option value="2 days">Theme Park Pass 2 Days</option>
              <option selected="selected" value="3 days">Theme Park Passes 3 Days</option>
			</select>
          </label>
          </p>
        </div> <!-- rooms-park-passes end -->
        
        <p class="center"><a href="#" class="blue-button"><strong>Select Best Price and Proceed</strong></a></p>
      <p class="center"><a href="#" class="pink-button"><strong>Select Meal Deal and Proceed</strong></a></p>
        
        
	</div> <!-- hotel-options end -->
    
    
    

	<div class="tab-content">
       		<div id="tabs1">
    			<ul>
					<li class="current">
                    	<a href="#" onclick="ChangeTab(this,'div_general','0');">
                        	General
                        </a>
                    </li>
					<li class="">
                    	<a href="#" onclick="ChangeTab(this,'div_description','0');">
                        	Description
                        </a>
                    </li>
					<li class="">
                    	<a href="#" onclick="ChangeTab(this,'div_photos','0');">
                    		Photos
                        </a>
                    </li>
					<li class="">
                    	<a href="#" onclick="ChangeTab(this,'div_facilities','0');">
                        	Facilities
                        </a>
                    </li>
				</ul>
			</div> <!-- tabs1 end --> 
            
            
      <div id="div_general_0" class="content" style="display:block;">    
				<img src="images/select-hotel/36_2_STD.jpg" alt="Santa Fe " width="100%" height="auto" />
                
                <p class="general">Which of these is your dream -  a siesta or a fiesta? No Matter – you can have both in this American Southwest hotel, cruising on Route 66 in your imagination while basking in the bright, sunlit Navajo colours. Disney’s Hotel Santa Fe® is an oasis of colour, calm and relaxation. The Hotel Santa Fe® is 20 minutes walk or a 5 minutes by free shuttle from the parks
Continental Breakfast included in pricing.</p>
    	</div>  
        
        
        
    	<div id="div_description_0" class="content" style="display:none">
        <p class="general">Start the day with a hearty continental breakfast. Later, tuck in at "La Cantina", the Mexican themed buffet restaurant. Enjoy musical entertainment over a cocktail at the "Rio Grande Bar"."Pow Wow Game Arcade" video games room, indoor children's corners (under parental surveillance), souvenir shop, TV and games area. "Totem Circle" outdoor playground. After a fun packed day at the parks, you want to relax, but the kids want to play on. No problem, compadre! </p>
    	</div>	
        
    	 <div id="div_photos_0" class="content" style="display:none">
         photos
    	<!--    <table style="width:490px" border="0" cellspacing="0" cellpadding="4">
        	    <tr>
        	    	<td style="width:72px" align="center" valign="middle">&nbsp;</td>
       	    	  <td style="width:428px" align="left" valign="middle">
       	    	      <div id="ctl00_ContentPlaceHolder1_dl_Hotels_ctl00_div_stdImages" class="general" style="overflow:hidden; height:270px">
					
       	    	        <marquee behavior="scroll" scrolldelay="150" style="width:368px; margin-left:24px; margin-right:24px">
       	    	          <table id="ctl00_ContentPlaceHolder1_dl_Hotels_ctl00_tbl_pics">
						<tr>
							<td id="ctl00_ContentPlaceHolder1_dl_Hotels_ctl00_td_pics" style="text-align:center">
       	    	                <img src="Hotel_Images/36_1_TB.jpg" style="padding-top:80px;padding-left:40px;padding-right:20px;cursor:pointer;" onmouseover="showStdImage(this)" /><img src="Hotel_Images/36_2_TB.jpg" style="padding-top:80px;padding-left:40px;padding-right:20px;cursor:pointer;" onmouseover="showStdImage(this)" /><img src="Hotel_Images/36_3_TB.jpg" style="padding-top:80px;padding-left:40px;padding-right:20px;cursor:pointer;" onmouseover="showStdImage(this)" /><img src="Hotel_Images/36_4_TB.jpg" style="padding-top:80px;padding-left:40px;padding-right:20px;cursor:pointer;" onmouseover="showStdImage(this)" /></td>
						</tr>
					</table>
					
       	    	        </marquee>
       	    	      <img src="Hotel_Images/36_1_STD.jpg" onmouseout="showThumbImage(this)" style="display:none;cursor:pointer;" /><img src="Hotel_Images/36_2_STD.jpg" onmouseout="showThumbImage(this)" style="display:none;cursor:pointer;" /><img src="Hotel_Images/36_3_STD.jpg" onmouseout="showThumbImage(this)" style="display:none;cursor:pointer;" /><img src="Hotel_Images/36_4_STD.jpg" onmouseout="showThumbImage(this)" style="display:none;cursor:pointer;" />
				</div>
       	    	  </td>
      	      	</tr>
      	    	</table>-->
                
    	</div>	 
        
    	<div id="div_facilities_0" class="content" style="display:none">
        
  <p class="general"> Continue the Navajo theme with cheerfully decorated rooms equipped with two double beds, including bathroom, telephone, TV with Disney and international channels, radio and a ceiling fan.<br/><br/><b>Exclusive Rio Grande & Eldorado rooms</b><br/>Choose a room along the Rio Grande for more calm and direct access to the path leading to the Disney Parks.<br/>An Eldorado room is ideally located near all the main hotel facilities: reception, restaurant, bar and Disney shop.</p>
    	</div>	
            
            
	
		</div> <!-- tab-content end -->
	<div class="clear-both"></div>
  </div>  <!-- hotel-wrapper end -->
  
    
  
  


  <div id="bottom-start-again-back">
    <ul>
      <li><a href="#" id="back-bt-bottom">Back</a></li>
      <li><a href="#" id="start-again-bt-bottom">Start again</a></li>
    </ul>
  </div>
  <!-- bottom-start-again-back end -->
  
  <?php include("/shared/footer.php"); ?>
</div>
<!-- wrapper end  -->
</body>
</html>
