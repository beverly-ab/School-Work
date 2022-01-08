<!DOCTYPE html>
<html>
<head>

<title>Rock / Paper / Scissors</title>
</head>
<body>
<h1>Rock / Paper / Scissors</h1>
<?php
$player = substr(filter_input(INPUT_GET,'player',FILTER_SANITIZE_NUMBER_INT),0,1);
$computer = rand(1,3); #Rock 1, Paper 2, Scissors 3

if ($player == 1) 
echo "<p> You chose: rock";
elseif ($player == 2)
echo "<p> You chose: paper";
elseif ($player == 3)
echo "<p> You chose: scissors";

if ($computer == 1) 
echo "<p>The computer chose: scissors";
elseif ($computer == 2)
echo "<p>The computer chose: rock";
elseif ($computer == 3) 
echo "<p>The computer chose: paper"; 
?>
</body>
</html>