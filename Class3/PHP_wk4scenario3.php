<html>
<head>
<title>Kitty Bits</title>
<head>
<body>
<p style = "color: coral; font-size: 16pt;">The question was: How many years does an outdoor cat live?<p>
<?php
$ans = $_POST['ans'];
$trueMsg = <<<TINFO
Correct! Indoor cats live longer than their outdoor counterparts. 
Cats who are kept indoors can reach the ripe old age of 17 or more years, 
whereas outdoor cats live an average of just two to five years.
TINFO;
$falseMsg = <<<FINFO
That was incorrect! Go back and try again!
FINFO;
$quesStyle = <<<SETUP
"color: coral; font-size: 16pt;"
SETUP;
$ansStyle = <<<ANSSET
"border: solid; border-width: 2pt; border-color: DodgerBlue; font-size: 14pt; text-align: center; margin-left: 15%; margin-right: 15%;"
ANSSET;
if ($ans == "true")
   {
     print "<div style = $ansStyle>$trueMsg</div>";
   }
else
   {
     print "<div style = $ansStyle>$falseMsg</div>";
   }
?>
</body>
<br>
<table>
<tr>
<td><img src="funnycat.jpeg">
<a href="https://en.wikipedia.org/wiki/Cat" target="_blank">Cat in Wikipedia</a><br>
</td>
</tr>
</table>
</html>