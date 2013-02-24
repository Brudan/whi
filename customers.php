<?php 
	require 'scripts/mysql_database.php';
	$customers = $database->getCustInfo();
?>
<table>
	<tr><th>Name</th><th>Phone number</th><th>Email address</th><th>Room Booked</th><tr>
	<?php foreach($customers as $customer){ ?>
	<tr>
		<td><?php echo $customer['firstname']." ".$customer['lastname']; ?></td>
		<td><?php echo $customer['phone']; ?></td>
		<td><?php echo $customer['email']; ?></td>
		<td><?php echo $customer['name']; ?></td>
	</tr>
	<?php } ?>
</table>