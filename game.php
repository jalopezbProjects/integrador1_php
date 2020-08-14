<?php 
    include("game_back.php");
?>
<!DOCTYPE html>
<html>
    <head>
    </head>
    <body>
        <p style="color: <?php echo $_SESSION['color']; ?>"> 
            Welcome <?php echo $_SESSION['name'];?> you were born on <?php echo $_SESSION['birth'];?>
        </p>
        <p> Let's play a guessing game </p>
        <div>
            <div>
                <p><?php echo $_SESSION['guess'];?></p>
                <p>Hint: <?php echo $_SESSION['pick'];?></p>
                <p>You still have <?php echo $_SESSION['count'];?> chances</p>
            </div>
            <form method="GET">
                <input type = "text" name="<?php echo $game;?>">
                <input type = "submit" value = "<?php echo $subBut?>">
            </form>
        </div>
    </body>
</html>