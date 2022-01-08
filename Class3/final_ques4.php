<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php
// Set session variables
$_SESSION["lowNum"] = 2;
$_SESSION["highNum"] = 25;
$_SESSION["thirdNum"] = 35;
echo "Session variables are set.";
?>
</body>
</html>