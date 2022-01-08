<html>
<head>
<title>Memo</title>
</head>
<body>
<h1>Memo:</h1>
<?php
$Who = $_POST['Who'];
$Day = $_POST['Day'];
$subject = $_POST['subject'];
$fontcolor = $_POST['fontcolor'];
$myStyle = <<<INFO
"color: $fontcolor;
 font-size: 16pt;"
INFO;
print "<div style = $myStyle>";
print "To: $Who";
print "<br>Day: $Day";
print "<br>Subject: $subject<br><br>";
print "Please see me tomorrw to discuss: $subject.";
print "</div>";
?>
</body>
</html>