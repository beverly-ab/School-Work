

<html>
<head><title>Testing connection</title></head>
<body>
<h1>Testing connection</h1>

<?php
include "passwords.php";
mysqli_select_db($link,"wk6");
$result = mysqli_query($link,"SELECT wk6.idno, wk8.idno from wk6 JOIN wk8 on wk6.idno = wk8.idno");
echo mysqli_num_rows($result);
?>

<table>

<?php
$row = array();
while ($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td> $row[0] </td>";
echo "<td> $row[1] </td>";
echo "</tr>";
}
echo "</table>";
?>

</table>
