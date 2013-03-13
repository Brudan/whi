<?php 
	require 'scripts/mysql_database.php';
	/* session_start();
	if(empty($_SESSION['name']))
		$database->redirect("index.php");	*/
	$customers = $database->getCustInfo();
	$rooms = $database->getRoomInfo();
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="master.css">
<link rel="stylesheet" href="nivo-slider/nivo-slider.css" type="text/css" media="screen" />
<link rel="stylesheet" href="nivo-slider/themes/default/default.css" type="text/css" media="screen" />
<link rel="stylesheet" href="style.css" type="text/css" media="screen" />
<link href='http://fonts.googleapis.com/css?family=Libre+Baskerville' rel='stylesheet' type='text/css'>
<script src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
<script src="js/jquery.infinitecarousel3.min.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript" src="js/jquery.quovolver.js"></script>
<title>WHI Guest House - Reservations</title>
 </head>
<body>
	<div class="main_wrapper1" >
			<div id = "header">
				
				<div class="logo">
					<img src="images/logo.png" />
				</div>
			</div>
		<div id="Main_Nav">
			<div class="align">
				<ul class="nav">
				<li> <a href="index.php"> <span class ="toptext"> home</span> <span class ="bottomtext"> home</span></a></li>
				<li> <a href="accomodation.php"> <span class ="toptext"> accomadations </span> <span class ="bottomtext"> View our rooms</span></a></li>
				<li> <a href="reservations.php"> <span class ="toptext"> Reservations</span> <span class ="bottomtext"> book a room</span></a></li>
			
				<li> <a href="contact.html"> <span class ="toptext"> Contact Us</span> <span class ="bottomtext"> gives us a Call</span></a></li>
			</ul>

			</div>
			
		</div>

	</div>
	<div class="main_wrapper" style="height: 1450px">
	
		<div class="slider-wrapper theme-default">
      <div id="slider" class="nivoSlider">
          <a href="#"><img src="images/9.jpg" alt=""  /></a>
 
      
          
        </div>
            
</div>
		<div id="mid_menu"></div>
		<div id="mid_content">
			<div id= "content_left">
				<h1> Book a Room </h1>
				<h2> Did you know that, you can book a room online, just fill the form below.</h2>
					<div>
<p>
	To learn more about WHI Guest, please reach out to one of our friendly team members. <br /> </p>

<h4> Available Rooms </h4>

<div id="reservationpage">
<div id="reservation" class="left" style="float:right">
					<h4 class="header"> Make a reservation today </h4>
     <form action="index.php" method="post" enctype="multipart/form-data" id="quote"> 
             <p>
               <select name="room_type"> 
                 <option>Type of Room</option>
                 <?php foreach($rooms as $room){  ?>
                 <option value="<?php echo $room['id'] ?>"><?php echo $room['name'] ?></option>
                 <?php } ?>
               </select>  
               <label for="fname" >First Name</label> 
               <input id="fname" name="fname" type="text" />
               <label for="lname" >Last Name</label> 
               <input id="lname" name="lname" type="text" /> 
               <label for="Email_Address"> Email Address</label> 
               <input id="Email_Address" name="email" type="text" />                
               <label for="phone"> Phone Number</label> 
               <input id="phone" name="phone" type="text" />              
             </p>
             <p>
               <input id="submit_btn" class="button" name="submit" type="submit" value="Send" />
             </p>
             <p><?php if(isset($flash_data)) echo $flash_data; ?></p>
     </form>

				</div>
<div  id="rooms" style="width:auto" class="left2" >
	<table>
	<tr><th>Room type</th><th>Available rooms</th></tr>
	<?php foreach($rooms as $room){ ?>
	<tr>
		<td><?php echo $room['name'] ?></td>
		<td><?php echo $room['number'] ?></td>
	</tr>	
	<?php } ?>
</table>
</div>
</div>





					</div>
					
		

			</div>
			
				
			</div>
		</div>
	
	</div>
					<div id="footer">
						
						<div class="align2">
				<div id="align">
					<ul class="nav2">
				<li> <a href="index.php">  Home </a></li>
				<li> <a href="accomodation.php"> Accomadations  </a></li>
				<li> <a href="#"> Reservations  </a></li>
				<li> <a href="contact.html">  Contact Us </a></li>
				</ul>
				</div>
				
			<div class="address">
				<p>
Ntinda Road, Bukoto <br />
P.O. Box 16233 <br />
Kampala, Uganda <br />
Email: info@whiguestservices.com <br />
Tel : + (256) 414-541-361 Tel 2: + (256) 772-520-248 Tel 3: + (256) 312-165-050 <br />
Website Design & Full-Service Hosting by <a href=""> Brudan Digital</a> 

</p>

			</div>
			</div>
					</div>
<script type="text/javascript" src="nivo-slider/jquery-1.6.1.min.js"></script>
    <script type="text/javascript" src="nivo-slider/jquery.nivo.slider.pack.js"></script>
    <script type="text/javascript">
    $(window).load(function() {
        $('#slider').nivoSlider({
effect: 'random', // Specify sets like: 'fold,fade,sliceDown'
        slices: 15, // For slice animations
        boxCols: 8, // For box animations
        boxRows: 4, // For box animations
        animSpeed: 500, // Slide transition speed
        pauseTime: 8000, // How long each slide will show
        startSlide: 0, // Set starting Slide (0 index)
        directionNav: false, // Next & Prev navigation
        controlNav: false, // 1,2,3... navigation
        controlNavThumbs: false, // Use thumbnails for Control Nav
        pauseOnHover: true, // Stop animation while hovering
        manualAdvance: false, // Force manual transitions
        prevText: 'Prev', // Prev directionNav text
        nextText: 'Next', // Next directionNav text
        randomStart: false, // Start on a random slide
        beforeChange: function(){}, // Triggers before a slide transition
        afterChange: function(){}, // Triggers after a slide transition
        slideshowEnd: function(){}, // Triggers after all slides have been shown
        lastSlide: function(){}, // Triggers when last slide is shown
        afterLoad: function(){} // Triggers when slider has loaded

        });
    });
    </script> 
    
    <script type="text/javascript">
	$(document).ready(function() {
		
		$('blockquote').quovolver();
		
	});
	</script>
</body>
</html>
