<?php
$link = mysqli_connect("localhost", "username", "password", "optionalDB")
or die("Could not connect: " . mysqli_error());
print ("Connected successfully");
?>