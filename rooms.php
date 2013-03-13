<?php 
	require 'scripts/mysql_database.php';
	$id = $_GET['id'];
	$rez = $database->findCust($id);
	$name = $rez['name'];
	if($rez['confirmed'] == 1){		
		$database->query("UPDATE room set number = number + 1 where name = '$name'");
		$database->query("UPDATE custinfo set confirmed = 0 where id = $id");
	} else{
		$database->query("UPDATE room set number = number - 1 where name = '$name'");
		$database->query("UPDATE custinfo set confirmed = 1 where id = $id");
	}
	$database->redirect("reservations.php");
?>