<html>
<head><title>Create Table2</title></head>
<body>
<h1>Create Table: transaction</h1>
<?php
include "passwords.php";
mysqli_select_db($link,"bbartkowski11_1");
$sql = "CREATE TABLE transactions (itemno int(3) primary key, code varchar(1), amt int(3))";
$sql = "INSERT INTO transactions values (000, null, 4)";
$sql = "INSERT INTO transactions values (121, null, 7)";
$sql = "INSERT INTO transactions values (222, null, 3)";
$sql = "INSERT INTO transactions values (333,null , 11)";


$result = mysqli_query($link,"SELECT inventory.itemno, inventory.itemname FROM inventory JOIN transactions ON inventory.itemno =transactions.itemno")

or die("Invalid query: " . mysqli_error($link));
?>
</body>
</html>
