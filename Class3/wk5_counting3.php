<html>
<head><title>Math</title></head>
<body>
<h2>Huzzah! Math Facts!</h2>
<?php
$varA;
$varB;
$varA = 1;
$varB = 2;
$ansX = 0; 
do
{

  do
   {
    $ansX = $varA + $varA * ($varB + 4) /2;
    echo "$varA + $varA ($varB + 4) /2 =  $ansX <br>";
    $varB=$varB + 2;
    } while ($varB <= 10);
$varB = 2;
$varA = $varA + 1;
} while ($varA <= 10); 
?>
</body>
</html>
