<?php 
	require '../scripts/mysql_database.php';
	session_start();
	if(empty($_SESSION['name']))
		$database->redirect("index.php");
	$customers = $database->getCustInfo();
	$rooms = $database->getRoomInfo();
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

	<div class="avail_rooms" >
			<table>
	<tr><th>Name</th><th>Phone number</th><th>Email address</th><th>Room Booked</th><th>Confirmed</th><th>Delete</th><tr>
	<?php foreach($customers as $customer){ 
			if($customer['confirmed'] == 0){
				$conf = "NO";
			} else{
				$conf = "YES";
			}
	?>
	<tr>
		<td><?php echo $customer['firstname']." ".$customer['lastname']; ?></td>
		<td><?php echo $customer['phone']; ?></td>
		<td><?php echo $customer['email']; ?></td>
		<td><?php echo $customer['name']; ?></td>
		<td><a href="<?php if($customer['number'] == 0 and $conf == "NO"){ echo "#"; } else echo "conf.php?id=".$customer['id']; ?>"><?php echo $conf; ?></a></td>
		<td><a href="delete.php?id=<?php echo $customer['id']; ?>">Delete</a></td>
	</tr>
	<?php } ?>
</table>
<br />
<table>
	<tr><th>Room type</th><th>Available rooms</th></tr>
	<?php foreach($rooms as $room){ ?>
	<tr>
		<td><?php echo $room['name'] ?></td>
		<td><?php echo $room['number'] ?></td>
	</tr>	
	<?php } ?>
</table>
<a href="index.php">Logout</a>
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
</body>

</html>
