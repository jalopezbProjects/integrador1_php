<?php 
    if(isset($_POST['name'])){
        header("Location: game.php");
    }else{
        echo "Type your data here!";
        
    }
?>
<!DOCTYPE html>
<html>
    <head>
    </head>
    <body>
        <form action="game.php" method="POST">
            <p>Type your name here</p>
            <input type="text" name="name">
            <p>What's your birth date?</p>
            <input type="date" name="birth_day">
            <p>What's your favorite color?</p>
            <input type="color" name="color">
            <input type="submit" value="Let's Play">
        </form>
    </body>
</html>