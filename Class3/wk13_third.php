<?php
session_start();
?>
<html>
<head>
<title>RPS</title>
<style type="text/css">
body
    {
     background: black;
     color: pink;
     }
h1   
     {
      text-align: center;
     }
</style>
</head>
<body>
<h1>Rock, paper, scissors</h1>
<?php
if (!isset($_SESSION['numToGuess']))
    {
     $_SESSION['numToGuess'] = rand(0,25);
    }
if (empty($_POST))
   {
    $myAns = "";
   }
else
   {
    $myAns = $_POST['myAns'];
    }
echo "start";
echo $myAns;
echo $_SESSION['numToGuess'];
if ($myAns == "")
   {
    $toDisplay = "<h3>Welcome to the number guessing game. Please enter a number between 1 and 25</h3>";
   }
else
     {
      if ($_SESSION['numToGuess'] == $myAns)
        {
           $toDisplay = "<h2>You guessed it! I have picked another number for you to try!</h2>";
           $_SESSION['numToGuess'] = rand(0,25);
          }
        else
          {
           if ($_SESSION['numToGuess'] < $myAns)
             {
              $toDisplay = "<h2>Your guess is too high!</h2>";
             }
           else
             {
              $toDisplay = "<h2>Your guess is too low!</h2>";
             }
           }
        }        
      echo ($toDisplay);
?>
      <form method = "post">
      <input type = "text" name = "myAns" value = "">
      <input type = "submit" value = "Submit Answer">
      </form>
</body>
</html>