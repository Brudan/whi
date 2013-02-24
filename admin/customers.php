<?php 
	require '../scripts/mysql_database.php';
	session_start();
	if(empty($_SESSION['name']))
		$database->redirect("index.php");
	$customers = $database->getCustInfo();
	$rooms = $database->getRoomInfo();
?>
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