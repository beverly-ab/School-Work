 <html>
<head><title>Testing connection</title></head>
<body>
<h1>Testing connection</h1>
<?php
include "passwords.php";
mysqli_select_db($link,"bbartkowski11_1");
$result = mysqli_query($link,"SELECT * from wk6")
or die("<br>Invalid query: " . mysqli_error($link));
echo "<br>linked to database";
?>
</body>
</html> 