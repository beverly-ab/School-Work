<html>
<head>
<title>Kitty Bits</title>
<head>
<body>
<p style = "color: coral; font-size: 16pt;">The question was: What is a term for a group of cats?</p>
<?php
$ans = $_POST['ans'];
$trueMsg = <<<TINFO
Correct! A group of cats is called a clowder. It can also be called a glaring, 
particularly if the cats are uncertain of each other.
A litter of kittens can also be called a kindle.
TINFO;
$falseMsg = <<<FINFO
That was incorrect! They're called something else. Go back and try again!
FINFO;
$quesStyle = <<<SETUP
"color: coral; font-size: 16pt;"
SETUP;
$ansStyle = <<<ANSSET
"border: solid; border-width: 2pt; border-color: DodgerBlue; font-size: 14pt; text-align: center; margin-left: 15%; margin-right: 15%;"
ANSSET;
if ($ans == "Clowder")
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
<td><img src="cutecats.html"><br>
<a href="https://en.wikipedia.org/wiki/Cat" target="_blank">Cat in Wikipedia</a><br>
</td>
<td>
<?php
print "<p style=$quesStyle>Cats have more teeth than dogs. </p>";
?>
<form action = "PHP_wk4scenario2.php" method = "post">
<input type = "radio" name="ans" value="true">True as the day is blue.<br>
<input type = "radio" name="ans" value="false">That's a negative.<br>
<input type = "submit" value = "FINAL ANSWER">

</form>
</td>
</tr>
</table>
</body>
</html>