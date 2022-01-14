<html>
<head>
<title>Kitty Bits</title>
<head>
<body>
<p style = "color: coral; font-size: 16pt;">The question was: How many years does an outdoor cat live?<p>

<?php
$ans = $_POST['ans'];
$trueMsg = <<<TINFO
Correct! As evidence, indoor cats live longer than their outdoor counterparts. 
Cats who are kept indoors can reach the ripe old age of 17 or more years, whereas outdoor cats live an average of just two to five years. 
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
<td><img src="btp_pic1080.jpg" <br>
<a href="http://www.boston-tea-party.org/" target="_blank">Boston Tea Party Historical Society</a><br>
</td>
</tr>
</table>
</html>