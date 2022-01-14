<html>
<head><title>Testing connection</title></head>
<body>
<h1>Testing connection</h1>
<?php
include "passwords.php";
mysqli_select_db($link,"bbartkowski_11");
$result = mysqli_query($link,"select * from wk6");
echo mysqli_num_rows($result);
echo "<br>";
echo "<table>";
while ($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td> $row[0] </td>";
echo "<td> $row[1] </td>";
echo "<td> $row[2] </td>";
echo "<td> $row[3] </td>";
echo "<td> $row[4] </td>";
echo "<td> $row[5] </td>";
echo "<td> $row[6] </td>";
echo "<td> $row[7] </td>";
echo "</tr>";
}
echo "</table>";
?>


</body>
</html>