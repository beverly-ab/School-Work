<html>
<head><title>Coupons</title></head>
<body>
<h2>Display coupons</h2>

<?php
$customerName = "Susan Ash";
$amtOwed = 12000;
$amtLeft = 12000;
$ct = 1;
$endnum = 12;
$monthlyPayment = $amtOwed /12;
do
{
echo "$customerName <br> Payment for month $ct is $monthlyPayment<br>";
$amtLeft = $amtLeft - $monthlyPayment;
echo "Amount left to pay is $amtLeft<br><br>";
$ct++;
}
while ($ct <= $endnum);

	echo "Your load has been repaid!";

?>

</body>
</html>
