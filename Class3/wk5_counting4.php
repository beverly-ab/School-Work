<html>
<head><title>Math</title></head>
<body>
<h2>Huzzah! Math Facts!</h2>
<?php
$ansX = 0; 
for ($varA = 1; $varA <= 10; $varA++)
{

  for ($varB = 2; $varB <= 10; $varB = $varB + 2)
   {
    $ansX = $varA + $varA * ($varB + 4) /2;
    echo "$varA + $varA ($varB + 4) /2 =  $ansX <br>"; 
    } 
}  
?>
</body>
</html>
