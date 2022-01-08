<html>
<head><title>Hello with variable</title></head>
<body>
<h3>This is the form</h3>

<form action="wk9_func4.php" method="get"> 

Name: <input type="text" name="stuname"><br>
<input type="submit" name="Click" value="Click"></p>

</form> 

<?php
if (!empty($_GET) and !($_GET['stuname'] == ""))
   {
    $stuname = $_GET['stuname'];
$slash = strpos($stuname, '/');
$first = substr($stuname, $slash + 1);
$last = substr($stuname,0,$slash);
echo $first . " " . $last;
  }
?>


</body>
</html>