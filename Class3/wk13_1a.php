<?php
$to = "bbartkowski11@bristolcc.edu" . ",";
$to .= "Priscilla.Grocer@bristolcc.edu";
$subject = "Testing, testing ";
$words = "
<html>
<head>
<title>Email #1!</title>

</head>
<body>
<p>Beverly Bartkowski's favorite people:</p>
<ul>
<li> #1 Lauren</li>
<li> #2 Debbie </li>
<li> #3 Howie</li>
</ul>
</body>
</html>
";
$msgPic= '<img src="http://cisweb.bristolcc.edu/~bbartkowski11/CIS159/cutecats.jpg">';
$message = $msgPic . $words;
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type: text/html; charset=iso-8859-1" . "\r\n";
$headers .= "To: Test <bbartkowski11@bristolcc.edu>" . "\r\n";
$headers .= "From: Beverly Bartkowski <bbartkowski11@bristolcc.edu>" . "\r\n";
$headers .= "Cc: Priscilla.Grocer@bristolcc.com" . "\r\n";
mail($to, $subject, $message, $headers);
echo "Mail sent to $to";
?>