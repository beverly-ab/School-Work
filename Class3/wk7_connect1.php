<html>
<head><title>Testing connection</title></head>
<body>
<h1>Testing connection</h1>
<h2>One, two, three... is this mic on?</h2>
<?php
include "passwords.php";
mysqli_select_db($link,"bbartkowski11_1");
$result = mysqli_query($link,"SELECT namez, age, cakes, goe from wk6");

while ($row = mysqli_fetch_row($result)) {    
	echo "<br>";
     	echo $row[0]. " " . $row[1]. " " .$row[2]. " " . $row[3] ;
   echo "<br>";
	}	  
 

?>
</body>
</html>