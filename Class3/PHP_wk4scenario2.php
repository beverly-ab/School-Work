<html>
<head>
<title>Kitty Bits</title>
<head>
<body>
<p style = "color: coral; font-size: 16pt;">The statement was: Cats have more teeth than dogs.</p>
<?php
$ans=$_POST['ans'];
$trueMsg = <<<TINFO
Nope! You may want to recount your cat's mouth. 
TINFO;
$falseMsg = <<<FINFO
You are correct! Cats have 30 adult teeth and 26 baby teeth. That's far fewer than dogs (42 and 28) and less than humans (32 and 20).
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
<br>
<table>
<tr>
<td><img src=catskiss.jpg> <br>
<a href="https://en.wikipedia.org/wiki/Cat" target="_blank">Cat in Wikipedia</a><br>
</td>
</tr>
<?php
print "<p style=$quesStyle>How many years does an outdoor cat live?</p>";
?>
<form action = "PHP_wk4scenario3.php" method = "post">
<input type = "radio" name="ans" value="false">less than 1 - 2 years<br>
<input type = "radio" name="ans" value="true">2-5 years<br>
<input type = "radio" name="ans" value="false">5-8 years<br>
<input type = "radio" name="ans" value="false">8+ years<br>
<input type = "submit" value = "FINAL ANSWER">
</form>
</td>
</tr>

</table>
</body>