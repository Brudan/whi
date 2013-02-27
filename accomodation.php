<?php 
	require 'scripts/mysql_database.php';
	$rooms = $database->getRoomData();
	if(isset($_POST['fname'])){
		$fname = $_POST['fname'];
		$lname = $_POST['lname'];
		$email = $_POST['email'];
		$phone = $_POST['phone'];
		$room = $_POST['room_type'];
		$sql = "INSERT INTO custInfo(`firstname`,`lastname`,`email`,`phone`,`roomid`) VALUES ('$fname','$lname','$email','$phone','$room')";
		$database->query($sql);
		$flash_data = "Reservation was successful";
	}
?>
<html>
<head>
<link rel="stylesheet" type="text/css" href="master.css">
<link rel="stylesheet" href="nivo-slider/nivo-slider.css" type="text/css" media="screen" />
<link rel="stylesheet" href="nivo-slider/themes/default/default.css" type="text/css" media="screen" />
<link rel="stylesheet" href="style.css" type="text/css" media="screen" />
<link href='http://fonts.googleapis.com/css?family=Libre+Baskerville' rel='stylesheet' type='text/css'>
<script src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
<script src="js/jquery.infinitecarousel3.min.js"></script>
<script src="js/lightbox.js"></script>
    <link href="css/lightbox.css" rel="stylesheet" />
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript" src="js/jquery.quovolver.js"></script>

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
				<li> <a href="accomodation.php"> <span class ="toptext"> accomodations </span> <span class ="bottomtext"> View our rooms</span></a></li>
				<li> <a href="#"> <span class ="toptext"> Reservations </span> <span class ="bottomtext"> Book a room now</span></a></li>
				<li> <a href="contact.html"> <span class ="toptext"> Contact Us</span> <span class ="bottomtext"> gives us a Call</span></a></li>
			</ul>

			</div>
			
		</div>

	</div>
	<div class="main_wrapper" style="height: 1450px">
	
		<div class="slider-wrapper theme-default">
      <div id="slider" class="nivoSlider">
          <a href="#"><img src="images/8.jpg" alt=""  /></a>

          
        </div>
            
</div>
		<div id="mid_menu"></div>
		<div id="mid_content">
			<div id= "content_left">
				<h1> Accomodation </h1>
				<h2> Deluxe Rooms </h2>
				<p>  Discover a secret gem in the heart of Kampala. <br />
					<div>
						<div class="acco_item">
							<img src="images/room1.png" />

							<p>
 Whether you want to explore the city or experience an efficient business trip, our Flatiron hotel has the comfortable accommodations, thoughtful amenities and signature NYC style needed to serve as a convenient hub. Enjoy easy access to the Empire State Building, Fifth Avenue shopping, MoMA, and corporations such as Bank of America, JPMorgan Chase and Deloitte, along with unparalleled personal service and amenities.

To learn more about our Manhattan luxury hotel, please reach out to one of our friendly team member
</p>
						</div>

						<h2> Double Rooms</h2>
						<div class="acco_item">
							<img src="images/room2.png" />

							<p>
 Whether you want to explore the city or experience an efficient business trip, our Flatiron hotel has the comfortable accommodations, thoughtful amenities and signature NYC style needed to serve as a convenient hub. Enjoy easy access to the Empire State Building, Fifth Avenue shopping, MoMA, and corporations such as Bank of America, JPMorgan Chase and Deloitte, along with unparalleled personal service and amenities.

To learn more about our Manhattan luxury hotel, please reach out to one of our friendly team member
</p>
						</div>

<h2> Single Rooms</h2>
						<div class="acco_item">
							<img src="images/room3.png" />

							<p>
 Whether you want to explore the city or experience an efficient business trip, our Flatiron hotel has the comfortable accommodations, thoughtful amenities and signature NYC style needed to serve as a convenient hub. Enjoy easy access to the Empire State Building, Fifth Avenue shopping, MoMA, and corporations such as Bank of America, JPMorgan Chase and Deloitte, along with unparalleled personal service and amenities.

To learn more about our Manhattan luxury hotel, please reach out to one of our friendly team member
</p>
						</div>



					</div>
				
		

			</div>
			<div id= "content_right">
				<div id="reservation">
					<h4 class="header"> Make a reservation today </h4>
     <form action="accomodation.php" method="post" enctype="multipart/form-data" id="quote"> 
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
				<div id="gallery">
					<h3> Gallery </h3>
					<div class="gallery">
						<a href="images/1.jpg" rel="lightbox[roadtrip]"> <img src="images/gallery_bg1.png" /> </a>
						 <a href="images/2.jpg" rel="lightbox[roadtrip]"></a>
    					 <a href="images/3.jpg" rel="lightbox[roadtrip]"></a>
    <a href="images/5.jpg" rel="lightbox[roadtrip]"></a>
    <a href="images/6.jpg" rel="lightbox[roadtrip]"></a>
    <a href="images/7.jpg" rel="lightbox[roadtrip]"></a>
    <a href="images/8.jpg" rel="lightbox[roadtrip]"></a>
    <a href="images/1.jpg" rel="lightbox[roadtrip]"></a>
    <a href="images/2.jpg" rel="lightbox[roadtrip]"></a>
    <a href="images/1.jpg" rel="lightbox[roadtrip]"></a>
					</div>

					<div class="gallery2">
						<h4> women hospital international </h4>
						<a href="#"> <img src="images/logo-WHI.png"></a>	

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
12 East 31st Street <br />
New York, NY 10016 <br />
Phone: (212) 889 6363 <br />
Email: info@hotelchandler.com <br />
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
