<html>
<head><title>PHP and MySQL</title></head>
<body>
<h1>Test of PHP</h1>
<?php
include "passwords.php";
mysqli_select_db($link,"bbartkowski11_1");
$sql = "CREATE TABLE wk8 (idno int(3) primary key, zodiac varchar(25), desire varchar(25))";
$result= mysqli_query($link,$sql) or die(mysqli_error($link));
echo $result;

$sql = "INSERT INTO wk8 values (222, 'Scorpio', 'CozyUp')";
$result= mysqli_query($link,$sql) or die(mysqli_error($link));
echo $result;
$sql = "INSERT INTO wk8 values (121, 'Pisces', 'Skydiving')";
$sql = "INSERT INTO wk8 values (232, 'Cancer', 'Cake')";
$sql = "INSERT INTO wk8 values (111, 'Scorpio, 'Chaos')";
$result= mysqli_query($link,$sql) or die(mysqli_error($link));
echo $result;
$result = mysqli_query($link,"SELECT idno, zodiac, desire from wk8")
or die("Invalid query: " . mysqli_error($link));
while ($row = mysqli_fetch_array($result))
   {
    print ("<br>" . $row["idno"] . "<br>" . $row["zodiac"] . "<br>" . $row["desire"] . "<br>");
    echo ("<br>");
   }
?>
</body>
</html>