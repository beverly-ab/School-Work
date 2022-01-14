<html>
<head><title>LOBSTAH IS...</title></head>
<body>
<h2>Live Lobster!</h2>
<?php
$firstlb = 44.50;
$every4oz = 11.5;
$wkweight = 0;
$wkcost = 0;
$wklb = $_GET["pounds"];
$wkoz = $_GET["ounces"];
$wkweight = $wklb *16 + $wkoz;
print "Your lobsters weight in ounces is: ";
print $wkweight;
print "</br>";

echo <<<JScript
<script type='text/javascript'>
var grams = $wkweight * 28.350;
var msg = "Your lobsters weight in grams is: " + grams;
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

