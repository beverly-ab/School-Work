<html>
<head>
<title>Random Image</title>
</head>
<body>
<h1>Display a random image</h1>
<?php

$wk12 = array(
    array('picnum'  => '111',
	  'picadr' => 'pic1.jpg',
          'picdesc' => 'Blurry twigs!!'),
    array('picnum'  => '222',
	'picadr' =>'pic2.jpg',
          'picdesc' => 'Blooming twigs!'),
    array('picnum'  => '333',
	'picadr' =>'pic3.jpg',
          'picdesc' => 'Wintry twigs!'));
$indx = rand(0, count($wk12)-1);
$theImage = "aprquiz/{$wk12[$indx]['picadr']}";
$theDesc = $wk12[$indx]['picdesc'];
echo "<img src = '$theImage'>";
echo $theDesc;
?>
</body>
</html>
