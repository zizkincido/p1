<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rock,Paper,Scissors</title>
</head>
<body>
<?php

$playera = 0;
$playerb = 0;
$awins = 0;
$bwins = 0;
$draw = 0;
$roundnum = 1;

for ($i=0; $i < 10; $i++) { 
    $playera = rand(0,2);
    $playerb = rand(0,2);
    echo "<b>";
    echo "Round : ","$roundnum";
    $roundnum++;
    echo "</b>";
    echo "<br>";
    if ($playera == 0 && $playerb == 0) {
        $draw++;
        echo "Player 1 : Rock";
        echo "<br>";
        echo "Player 2 : Rock";
        echo "<br>";
        echo "That's a draw!";
        echo "<br>";
        echo "<hr>";
    }
    else if ($playera == 1 && $playerb == 1) {
        $draw++;
        echo "Player 1 : Paper";
        echo "<br>";
        echo "Player 2 : Paper";
        echo "<br>";
        echo "That's a draw!";
        echo "<br>";
        echo "<hr>";
    }
    else if ($playera == 2 && $playerb == 2) {
        $draw++;
        echo "Player 1 : Scissors";
        echo "<br>";
        echo "Player 2 : Scissors";
        echo "<br>";
        echo "That's a draw!";
        echo "<br>";
        echo "<hr>";
    }
    else if($playera == 0 && $playerb == 1){
        $bwins++;
        echo "Player 1 : Rock";
        echo "<br>";
        echo "Player 2 : Paper";
        echo "<br>";
        echo "Player 2 wins!";
        echo "<br>";
        echo "<hr>";
    }
    else if($playera == 0 && $playerb == 2){
        $awins++;
        echo "Player 1 : Rock";
        echo "<br>";
        echo "Player 2 : Scissors";
        echo "<br>";
        echo "Player 1 wins!";
        
        echo "<br>";
        echo "<hr>";
    }
    else if($playera == 1 && $playerb == 0){
        $awins++;
        echo "Player 1 : Paper";
        echo "<br>";
        echo "Player 2 : Rock";
        echo "<br>";
        echo "Player 1 wins!";
        
        echo "<br>";
        echo "<hr>";
    }
    else if($playera == 1 && $playerb == 2){
        $bwins++;
        echo "Player 1 : Paper";
        echo "<br>";
        echo "Player 2 : Scissors";
        echo "<br>";
        echo "Player 2 wins!";
        
        echo "<br>";
        echo "<hr>";
    }
    else if($playera == 2 && $playerb == 0){
        $bwins++;
        echo "Player 1 : Scissors";
        echo "<br>";
        echo "Player 2 : Rock";
        echo "<br>";
        echo "Player 2 wins!";
        
        echo "<br>";
        echo "<hr>";
    }
    else if($playera == 2 && $playerb == 1){
        $awins++;
        echo "Player 1 : Scissors";
        echo "<br>";
        echo "Player 2 : Paper";
        echo "<br>";
        echo "Player 1 wins!";
        
        echo "<br>";
        echo "<hr>";
    }
    
}
echo "<b>Final Results</b>";
echo "<br>";
echo "Draws : ","$draw";
echo "<br>";
echo "Player 1 won ", $awins ," times";
echo "<br>";
echo "Player 2 won ", $bwins ," times";
echo "<br>";
?>
<button type="button" onClick="refreshPage()">Restart</button>
<script>
function refreshPage(){
    window.location.reload();
} 
</script>
</body>
</html>

