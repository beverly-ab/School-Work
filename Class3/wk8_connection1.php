<html>
<head><title>PHP and MySQL</title></head>
<body>
<h1>Test of PHP</h1>
<pre>
<?php
    include "passwords.php";
    mysqli_select_db($link,"bbartkowski11_1");
$sql = "desc wk6";
$result= mysqli_query($link,$sql) or die(mysqli_error($link));

if (mysqli_num_rows($result) > 0) {
    for ($i = 0; $i < mysqli_num_rows($result);$i++) {
     mysqli_data_seek($result, $i); 
	$row = mysqli_fetch_array($result);
	print_r ($row);
    }
}
?>
</pre>
</body>
</html>