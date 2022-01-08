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




if(isset($_POST["wk12"]))
	{
		$name = $_POST["wk12"];
		mysqli_select_db($Con, 'bbartkowski11_1');
		print("<h1> All Images</h1>");
		$create = mysqli_query($Con, "create table wk12 (picnum int(10),picadr varchar(30),picdesc varcar(20)")
			or die("Invalid Query: " . mysql_error($Con));
		$insert = mysqli_query($Con, "insert into wk12 values(111,'/aprquiz/pic1.jpg','Blurry twigs')")
			or die("Invalid Query: " . mysql_error($Con));
			
		mysqli_select_db($Con,'bbartkowski_11_1');
		$show = mysqli_query($Con, "Select picadr from wk12");
		while($row = mysqli_fetch_array($show))
			[		
				print("<image id='Wintry' src ='$row[0]'> </img>")	
			]	



			or die("Ivalid Query: " . mysql_error($Con));
	}


$pic = array(array(
    array('picnum'  => '1',
	  'picadr' => 'pic1.jpg',
          'picdesc' => 'Blurry twigs'),
    array('picnum'  => '2',
	'picadr' =>'pic2.jpg',
          'picdesc' => 'Blooming twigs'),
    array('picnum'  => '3',
	'picadr' =>'pic3.jpg',
          'picdesc' => 'Wintry twigs')));
$indx = rand(0, count($pic)-1);
$theImage = "aprquiz/{$pic[$indx]['picadr']}";
$theDesc = $pic[$indx]['picdesc'];
echo "<img src = '$theImage'>";
echo $theDesc;
print ("<h1> Random Image: </h1>" . "<img id='RandPic' src='$pic[$indx]'></img>");
