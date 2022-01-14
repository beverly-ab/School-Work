<html>
<head>
<title>All images</title>
</head>
<body>
<h1>All images</h1>
<?php
$wk12 = array('pic1','pic2','pic3');
foreach ($wk12 as $theImage)
  {
    $theDog = "aprquiz/$theImage.jpg";
    echo "<img src = $theDog>";
    echo "<br>";
  }
?>
</body>
</html>
