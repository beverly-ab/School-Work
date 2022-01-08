<?php
if (!(isset($_POST['itemno']))) {
	firstpage('');
}
elseif ($_POST['itemno'] == '') {
	firstpage('');
}
elseif (!(isset($_POST['action']))) {
	$itemno = $_POST['itemno'];
	include "passwords.php";
	mysqli_select_db($link,"inventory");
	$result = mysqli_query($link,"SELECT * from inventory where itemno = $itemno")
	or die("Invalid query: " . mysqli_error($link));
	if (mysqli_num_rows($result) > 0) {
		$row = mysqli_fetch_array($result);
		$itemno = $row[0];
		$code = $row[1];
		$amt = $row[2];
			
	print <<<RECORD
		<!DOCTYPE html>
		<html>
		<head><title>PHP and MySQL </title></head>
		<body>
		<h1>Record Update</h1><br><br><br>
		<form method="post">
		Item Number: <input type='text' name='itemno' value="$itemno"><br><br>
		Code: <input type='text' name='code' value="$code"><br><br>
		Amount: <input type='text' name='amt' value="$amt"><br><br>
		Update: <input type='radio' name='action' value='update'> &nbsp&nbsp&nbsp Cancel: <input type='radio' name='action' value='cancel'><br><br>
		<input type='submit' value='Process'>
		<input type='hidden' name='itemno' value="$itemno">
		</form>
		</body>
		</html>
RECORD;
	}
	else {
		firstpage("Record $itemno does not exist.");
	}
}
elseif ($_POST['action'] == 'update') {
	$itemno = $_POST['itemno'];
	$code = $_POST['code'];
	$amt = $_POST['amt'];
	include "passwords.php";
	mysqli_select_db($link,"inventory");
	$sql = "UPDATE inventory SET itemno = '" . $itemno. "', code = '" . $code. "', amt= '" . $amt. "' WHERE itemno = $itemno";
	$result = mysqli_query($link,$sql)
	  or die("Invalid query: " . mysqli_error($link));
	firstpage("Record $realid has been updated.");

} 
else {
	firstpage('');
}

function firstpage($msg) {
	print <<<FIRST
	<!DOCTYPE html>
	<html>
	<head><title>inventory update </title></head>
	<body>
	<h1>Inventory/Transaction Update</h1><br>
	$msg<br><br>
	<form method="post">
	Enter Item No: <input type='text' name='itemno'>
	<br><br>
	<input type='submit'>
	</form>
	</body>
	</html>
FIRST;
}
?>