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
    $ansX = $varA + $varA * ($varB + 4) /2;
    echo "$varA + $varA ($varB + 4) /2 =  $ansX <br>";
    $varB=$varB + 2;
}
while ($varA <= 10 && $varB <= 10);

do
{
    $ansX = $varA + $varA * ($varB + 4) /2;
    echo "$varA + $varA ($varB + 4) /2 =  $ansX <br>";
    $varB=$varB + 2;

}
?>
</body>
</html>
