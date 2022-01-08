<head>
<title>Kitty Bits</title>
</head>
<body>
<h1>~*~KITTY BITS~*~</h1>
<table>
<tr>
<td><img src="https://miro.medium.com/max/720/1*DsoFE9Uue_GCBzOOYMHVfg.jpeg"><br>
<a href="https://en.wikipedia.org/wiki/Cat" target="_blank">Cat in Wikipedia</a><br>
</td>
<td>
<?php
$scene1 = <<<INFO
You could just call them a group of cats, or, even simpler, you could just refer to them as cats, but what is the fun in that? 
Wouldnt you love to know how to refer to a group of cats in another, more obscure way? Of course!
INFO;
$quesStyle = <<<SETUP
"color: coral; font-size: 16pt;"
SETUP;
print "<p style=$quesStyle> $scene1 </p>";
print "<p style=$quesStyle>What is a term for a group of cats?</p>";
?>
<form action = "PHP_wk4scenario1.php" method = "post">
<input type = "radio" name="ans" value="time">A fun time!<br>
<input type = "radio" name="ans" value="Coven">Coven<br>
<input type = "radio" name="ans" value="Clowder">Clowder<br>
<input type = "submit" value = "FINAL ANSWER">
</form>
</td>
</tr>
</table>
<br>
</body>
</html>