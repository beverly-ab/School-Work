<html>
<head><title>Create Table</title></head>
<body>
<h1>Create Table: inventory</h1>
<?php
include "passwords.php";
mysqli_select_db($link,"bbartkowski11_1");
$sql = "CREATE TABLE inventory (itemno int(3) primary key, itemname varchar(30), onhand int(3), onorder int(3))";
$sql = "INSERT INTO inventory values (121, 'Teddy', 4, 11)";
$sql = "INSERT INTO inventory values (222, 'Koala', 7, 8)";
$sql = "INSERT INTO inventory values (333, 'Puzzle', 3, 12)";
$sql = "INSERT INTO inventory values (444, 'Doll', 11, 12)";

$result = mysqli_query($link,"SELECT * FROM inventory")
or die("Invalid query: " . mysqli_error($link));
while ($row = mysqli_fetch_array($result))
   {
    print ("<br>" . $row["itemno"] . "<br>" . $row["itemname"] . "<br>" . $row["onhand"] . "<br>" . $row["onorder"] . "<br>");
    echo ("<br>");
   }
?>
</body>
</html>
