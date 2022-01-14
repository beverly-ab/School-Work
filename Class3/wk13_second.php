<html>
<head><title>PHP and MySQL</title></head>
<body>
<h1>Test of PHP</h1>
<?php
include "passwords.php";
mysqli_select_db($link,"mail");
$result = mysqli_query($link,"SELECT * from wk13")
    or die("Invalid query: " . mysqli_error($link));
$from = 'Beverly';

while ($row = mysqli_fetch_array($result))
{
   echo ("<br> ID = ". $row["idno"] . "<br> NAME =  " . $row["namez"] . "<br>");
   echo("EMAIL = " . $row["email"] . "<br>");
$email= $row['email'];
$msg= "Hey you! it's me, Beverly Bartkowski! This is wk13 - second question";
mail($email, "Hi it's Bev", $msg, 'From:' . $from);
echo 'Email sent to: ' . $email. '<br>';

}   
?>

</body>
</html>