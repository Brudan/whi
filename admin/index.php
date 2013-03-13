<?php 

	require '../scripts/mysql_database.php';
	session_start();
	session_destroy();
	if(isset($_POST['uname'])){
		$uname = trim($_POST['uname']);
		$pword = trim($_POST['pword']);
		if($database->CheckLoginInDB($uname,$pword)){
			session_start();
			$_SESSION['name'] = $uname;
			$database->redirect('customers.php');
		}
	}

?>
<html> 
<head>
	<link rel="stylesheet" type="text/css" href="master.css">
<link rel="stylesheet" href="nivo-slider/nivo-slider.css" type="text/css" media="screen" />
<link rel="stylesheet" href="nivo-slider/themes/default/default.css" type="text/css" media="screen" />
<link rel="stylesheet" href="style.css" type="text/css" media="screen" />
<link href='http://fonts.googleapis.com/css?family=Libre+Baskerville' rel='stylesheet' type='text/css'>

</head>
<body>
	<div id = "header">
				
				<div class="logo">
					<img src="images/logo.png" />
				</div>
			</div>
	<div class="main_wrapper">

	<div class="admin_login" >
			<form method="post" action="index.php">
				<h4> Admin Panel Login </h4>
	<p>
		<label for="uname">Username</label>
		<input type="text" name="uname" required />
	<p/>
	<p>
		<label for="pword">Password</label>
		<input id="pword" type="password" class="input" name="pword" required />
	<p/>
	<p>
		<input type="submit" value="Login" /> | <a href="../index.php"><input type="button" value="Return to Homepage" /></a>
	</p>
</form>
	 </div>


	
 </div>
 <div id="footer">
						<div class="align2">
				<div id="align">
					<ul class="nav2">
				<li> <a href="index.php">  Home </a></li>
				<li> <a href="accomodation.php"> Accomodations  </a></li>
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
</body>

</html>