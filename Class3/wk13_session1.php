<?php
session_start();    //session start
//if session not found redirect to homepage
if(!isset($_SESSION['username'])) {
    header('location:login.php');
} elseif {
    if($_POST['user_choice']) {
        $user_choice = $_POST['user_choice'];
        $Choosefrom= array('Rock', 'Paper', 'Scissors');
        $Choice= rand(0,2);
        $Computer=$Choosefrom[$Choice];
        if($user_choice == $Computer) {
            echo 'Player: '.$user_choice.' CPU: '.$Computer.'. Result: Win';
        } else {
            echo 'Player: '.$user_choice.' CPU: '.$Computer.'. Result: Lose';
        }
   }
}
?>


<p>CURRENT GAME STATUS: <?php echo $winlossdraw; ?></p>

<p>You threw: <?php echo $playerthrow; ?></p>

<p>Computer threw: <?php echo $computerthrow; ?></p>

<p>Total Throws: <?php echo $throwcount; ?></p>

<p>Wins: <?php echo $wincount; ?></p>

<p>Losses: <?php echo $losscount; ?></p>

<p>Draws: <?php echo $drawcount; ?></p>

<FORM METHOD=”GET” ACTION=”http://www.YOUR-URL.com/rps.php/”>
<INPUT TYPE=”submit” VALUE=”RESET COUNT”>
</FORM>
