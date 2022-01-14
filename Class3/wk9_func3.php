<html>
<head><title>Package</title></head>
<body>
<h2>Package Weight and Cost!</h2>

<form action="wk9_func3.php" method="get">

Pounds: <input type="text" name="pounds"><br><br>
Ounces: <input type="text" name= "ounces"><br><br>
<input type="submit" value="SUBMIT">
</form>

<?php
$firstlb = 1.5;
$every4oz = 0.5;
$wkweight = 0;
$wkcost = 0;
if(!empty($_GET))
{
$wklb = $_GET["pounds"];
$wkoz = $_GET["ounces"];
$wkweight = $wklb *16 + $wkoz;
print "The weight in ounces is: ";
print $wkweight;
print "</br>";

echo <<<JScript
<script type='text/javascript'>
var grams = $wkweight * 28.350;
var msg = "The weight in grams is: " + grams;
document.write(msg);
</script>
JScript;

if ($wkweight < 17) 
  {
   $wkcost = $firstlb;
  }
else
  {
   calccost();
  }
print "<br /> The cost is ";
print $wkcost;
}
function calccost()
  {
   global $wkweight, $firstlb, $every4oz, $wkcost;
   $wkweight = $wkweight - 16;
   $wkcost = $firstlb;
   while ($wkweight > 0)
     { 
       $wkcost = $wkcost + $every4oz;
       $wkweight = $wkweight - 4;
     }

  }

?>
</body>
</html>