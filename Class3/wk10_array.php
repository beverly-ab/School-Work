<html>
<head>
<title>Math Facts</title>
<style type="text/css">
body
    {
     background: black;
     color: lime;
     }
h1   
     {
      text-align: center;
     }
</style>
</head>
<body>
<h1>Math Facts</h1>
<?php
$math = array(array(0,0,0,0,0),
               array(1,1,1,1,1),
               array(2,2,2,2,2),
		array(3,3,3,3,3),
               array(4,4,4,4,4)
               );

echo "<br>";
foreach ($math as $key => $value)
	{
        echo "<br>Math Facts: Multiple by " . $key . "<br>";
	 foreach ($value as $key => $value)
		{
		 echo $value . " * " . $key . " = " . ($key * $value) . "<br>";
		}
	}

?>
</body>
</html>
