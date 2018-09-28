<!doctype html>
<html>
<head>
    <!-- 
        Exercise 02_04_01
        Author: Eli Boblett
        Date: 09.26.18 
        RockPaperScissors.php
     -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rock Paper Scissors</title>
    <script src="modernizr.custom.65897.js"></script>
</head>
<body>
    <h2>Rock Paper Scissors</h2>
    <form name="rps" action="RockPaperScissors.php" method="post">

    </form>
    <?php
       $file = array("Rock", "Paper", "Scissors");
       $compPick = $file[array_rand($file, 1)];
       if (isset($_POST['button'])) {
            $user = $_POST['button'];
       }
           echo "Pick Rock, Paper, or Scissors.<br>\n";
    ?>
    <form action="RockPaperScissors.php" method="post">
           <input type="submit" name="button" value="Rock">
           <input type="submit" name="button" value="Paper">
           <input type="submit" name="button" value="Scissors">
    </form>
    
    <?php
        if (isset($_POST['button'])) {
            echo "You picked " . $_POST['button'] . ".<br>";
            echo "The computer picked " . "$compPick" . ".<br>";
        }
        else {
            echo "";
        }

        switch($compPick){
            // case of compPick = rock
            case $compPick === "Rock" && $user === "Rock": 
            echo "It's a tie!";
            break;

            case $compPick === "Rock" && $user === "Paper": 
            echo "You win!";
            break;

            case $compPick === "Rock" && $user === "Scissors": 
            echo "You lose!";
            break;

            // case of compPick = paper
            case $compPick === "Paper" && $user === "Rock": 
            echo "You lose!";
            break;

            case $compPick === "Paper" && $user === "Paper": 
            echo "It's a tie!";
            break;

            case $compPick === "Paper" && $user === "Scissors": 
            echo "You win!";
            break;

            // case of compPick = scissors
            case $compPick === "Scissors" && $user === "Rock": 
            echo "You win!";
            break;

            case $compPick === "Scissors" && $user === "Paper": 
            echo "You lose!";
            break;

            case $compPick === "Scissors" && $user === "Scissors": 
            echo "It's a tie!";
            break;   
            
            // default state
            default:     
            echo "Pick rock, paper, or scissors";
            break;
        }
    ?>
</body>
</html>