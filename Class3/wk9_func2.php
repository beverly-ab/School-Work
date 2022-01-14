<html>
<head><title>Hello with variable</title></head>
<body>
<h3>This is the form</h3>

<form action="wk9_func2.php" method="get"> 

Name: <input type="text" name="stuname"><br>
Grade: <input type="text" name="grade"><br><br>
<input type="submit" name="Click" value="Click"></p>

</form> 

<?php
if (!empty($_GET) and !($_GET['stuname'] == ""))
   {
    $stuname = $_GET['stuname'];
    $grade = $_GET['grade'];

    echo ("<h3>Hello</h3>");
    echo ("<h3>Student Name: $stuname </h3>");
    echo ("<h3>Student Grade: $grade</h3>");
    $_GET['stuname'] = "";
    $_GET['grade'] = "";
    print_r ($_GET);

  }
?>


</body>
</html>