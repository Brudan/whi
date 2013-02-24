<?php 
	require '../scripts/mysql_database.php';
	$id = $_GET['id'];
	$rez = $database->findCust($id);
	if($rez['confirmed'] == 1){
		$name = $rez['name'];
		$database->query("UPDATE room set number = number + 1 where name = '$name'");
	}
	$database->query("DELETE FROM custinfo where id = $id");
	$database->redirect("customers.php");
?>