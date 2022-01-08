<?php
if (!(isset($_POST['state']))) {
	firstpage('');
}
else {
	switch ($_POST['state']) {
		case '0':
			if (!(isset($_POST['action']))) {
				$msg = 'No Action was selected';
				if (!(isset($_POST['idno'])) or (($_POST['idno']) =='')) {
					$msg = $msg . ' and no ID was entered.';
				}
				else {
					$msg = $msg . '.';
				}
				firstpage($msg);
			}
			elseif (!(isset($_POST['idno'])) or (($_POST['idno']) =='')) {
					$msg = 'No ID was entered.';
					firstpage($msg);
			}
			else {
				$idno = $_POST['idno'];
				switch ($_POST['action']) {
					case 'add':
						$link = dbconnect();
						$sql = "SELECT * FROM wk6 WHERE idno = '" . $idno . "'";
						$result = mysqli_query($link,$sql)
						   or die("Invalid query: " . mysqli_error($link));
						if (mysqli_num_rows($result) > 0) {
							$msg = 'ID ' . $idno . ' already exists.';
							firstpage($msg);
						}
						else {
							datapage($idno, '', '', '', '', 'add', 'ADD Record', '1');
						}
						break;
					case 'change':
						$link = dbconnect();
						$sql = "SELECT * FROM wk6 WHERE idno = '" . $idno . "'";
						$result = mysqli_query($link,$sql)
						   or die("Invalid query: " . mysqli_error($link));
						if (mysqli_num_rows($result) > 0) {
							$row = mysqli_fetch_array($result);
							$idno = $row[0];
							$namez = $row[1];
							$age = $row[2];
							$city = $row[3];
							$goe = $row[4];
							datapage($idno, $namez, $age, $city, $goe, 'change', 'CHANGE Record', '2');
						}
						else {
							$msg = 'ID ' . $idno . ' does not exist.';
							firstpage($msg);
						}
						break;
					case 'delete':
						$link = dbconnect();
						$sql = "SELECT * FROM wk6 WHERE idno = '" . $idno . "'";
						$result = mysqli_query($link,$sql)
						   or die("Invalid query: " . mysqli_error($link));
						if (mysqli_num_rows($result) > 0) {
							$row = mysqli_fetch_array($result);
							$idno = $row[0];
							$namez = $row[1];
							$age = $row[2];
							$city = $row[3];
							$goe = $row[4];
							datapage($idno, $namez, $age, $city, $goe, 'delete', 'DELETE Record', '3');
						}
						else {
							$msg = 'ID ' . $idno . ' does not exist.';
							firstpage($msg);
						}
						break;
					default:
						firstpage('last');
						break;
				}
			}
			break;

		case '1':
			if (($_POST['continue']) == 'confirm') {
				$idno = $_POST['idno'];
				$namez = $_POST['namez'];
				$age = $_POST['age'];
				$city = $_POST['city'];
				$goe = $_POST['goe'];
				$values = "'" . $idno . "', '" . $namez . "', '" . $age . "', '" . $city . "', '" . $goe . "'";
				$link = dbconnect();
				$result = mysqli_query($link,"INSERT INTO wk6 VALUES ($values)")
				   or die("Invalid query: " . mysqli_error($link));

				$msg = 'ID ' . $idno . ' added.';
			}
			else {
				$msg = 'ADD cancelled';
			}
			firstpage($msg);		
			break;

		case '2':
			if (($_POST['continue']) == 'confirm') {
				$idno = $_POST['idno'];
				$namez = $_POST['namez'];
				$age = $_POST['age'];
				$city = $_POST['city'];
				$goe = $_POST['goe'];
				$sql = "UPDATE wk6 SET idno = '" . $idno . "', namez = '" . $namez . "',
					 age = '" . $age . "', city = '" . $city . "', goe = '" . $goe . "' WHERE idno = $idno";
				$link = dbconnect();
				$result = mysqli_query($link,$sql)
				   or die("Invalid query: " . mysqli_error($link));

				$msg = 'ID ' . $idno . ' updated.';
			}
			else {
				$msg = 'CHANGE cancelled';
			}
			firstpage($msg);		
			break;

		case '3':
				if (($_POST['continue']) == 'confirm') {
				$idno = $_POST['idno'];
				$sql = "DELETE FROM wk6 WHERE idno = '" . $idno . "'";
				$link = dbconnect();
				$result = mysqli_query($link,$sql)
				   or die("Invalid query: " . mysqli_error($link));

				$msg = 'ID ' . $idno . ' deleted.';
			}
			else {
				$msg = 'DELETE cancelled.';
			}
			firstpage($msg);
			break;

		default:
			firstpage();		
			break;	}					
}
function firstpage($msg) {
	print <<<FIRST
	<!DOCTYPE html>
	<html>
	<head><title>PHP/MySQL </title></head>
	<body>
	<h1>wk6 Maintencance</h1><br>
	$msg<br><br>
	<form  method="post">
	Enter ID: <input type='text' name='idno'><br><br>
	Name: <input type='text' name='namez' disabled><br><br>
	Age: <input type='text' name='age' disabled><br><br>
	City: <input type='text' name='city' disabled><br><br>
	Good or Evil: <input type='text' name='goe' disabled><br><br>
	Add: <input type='radio' name='action' value='add'> &nbsp&nbsp&nbsp 
	Change: <input type='radio' name='action' value='change'> &nbsp&nbsp&nbsp 
	Delete: <input type='radio' name='action' value='delete'> &nbsp&nbsp&nbsp 
	<br><br>
	<input type='submit' value='Submit'>
	<input type=hidden name='state' value='0'>
	</form>
	</body>
	</html>
FIRST;
}

function dbconnect() {
	include "passwords.php";
	mysqli_select_db($link,"wk6");
	return $link;
}

function datapage($idno, $namez, $age, $city,$goe, $currentaction, $header2, $state) {
	print <<<RECORD
		<!DOCTYPE html>
		<html>
		<head><title>UPDATE </title></head>
		<body>
		<h1>wk6 Maintenance</h1><br>
		$header2<br><br><br>
		<form  method="post">
		ID Number: <input type='text' name='idno' value="$idno"><br><br>
		Name: <input type='text' name='namez' value="$namez"><br><br>
		Age: <input type='text' name='age' value="$age"><br><br>
		City: <input type='text' name='city' value="$city"><br><br>
		Good or Evil: <input type='text' name='goe' value="$goe"><br><br>
		Confirm: <input type='radio' name='continue' value='confirm'> &nbsp&nbsp&nbsp Cancel: <input type='radio' name='continue' value='cancel' checked><br><br>
		<input type='submit' value='Process'>
		<input type='hidden' name='idno' value="$idno">
		<input type='hidden' name='currentaction' value="$currentaction">
		<input type=hidden name='state' value='$state'>
		</form>
		</body>
		</html>
RECORD;
}

?>