<?php 
	require '../scripts/mysql_database.php';
	$customers = $database->getCustInfo();
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
		<td><a href="conf.php?id=<?php echo $customer['id']; ?>"><?php echo $conf; ?></a></td>
		<td><a href="delete.php?id=<?php echo $customer['id']; ?>">Delete</a></td>
	</tr>
	<?php } ?>
</table>