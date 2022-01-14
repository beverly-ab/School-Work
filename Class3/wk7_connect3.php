<html>
<head><title>Testing connection</title></head>
<body>
<h1>Testing connection</h1>
<?php
include "passwords.php";
$idno = $_POST['IDNO'];
mysqli_select_db($link,"wk6");
$result = mysqli_query($link,"SELECT * from wk6 where idno = $idno")
or die("Invalid query: " . mysqli_error($link));

while ($row = mysqli_fetch_array($result))
{
echo ("<p>ID = ". $row[0] . " ". $row[1] . "  </p>");
}
?>
</body>
</html>

