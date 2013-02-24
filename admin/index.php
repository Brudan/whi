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

<form method="post" action="index.php">
	<p>
		<label for="uname">Username</label>
		<input type="text" name="uname" required />
	<p/>
	<p>
		<label for="pword">Password</label>
		<input type="password" name="pword" required />
	<p/>
	<p>
		<input type="submit" value="Login" /> | <a href="../index.php"><input type="button" value="Return to Homepage" /></a>
	</p>
</form>
