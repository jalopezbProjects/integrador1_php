<?php 
    session_start();
    $phrases = array("music","programming","developing","java","php","http","gpu","cpu"); 
    $subBut = "Guess";
    $game = "letter";
    if(isset($_POST["name"])){
        $_SESSION['name'] = $_POST["name"];
        $_SESSION['color'] = $_POST["color"];
        $_SESSION['birth'] = $_POST["birth_day"];
    }
    if(isset($_GET['letter'])){
        $pick = strtolower($_SESSION['pick_aux']);
        $letters = strtolower($_GET['letter']);
        $guess = strtolower($_SESSION['guess']);
        $pos = strpos($pick,$letters);
        if($pos ===FALSE){
            $_SESSION['count'] = $_SESSION['count']-1;
        }
        $try = 0;
        while($pos !== FALSE){
            $pick[$pos] = "-";
            $guess[$pos] = $letters;
            $pos = strpos($pick,$letters);
        }
        $_SESSION['guess'] = $guess;
        print_r(strpos($_SESSION['guess'],"_"));
        if(strpos($_SESSION['guess'],"_")===FALSE){
            echo "<p>Congratulations! You guessed ".$_SESSION['guess']." with ".$_SESSION['count']." errors. </p>";
            $subBut = "Try Again!";
            $game = "l";
        }   
        if($_SESSION['count']==0){
            echo "<p>Sorry, you lose! The word was: $pick </p>";
            $subBut = "Try Again!";
            $game = "l";
        }
    }else{
        $count = 5;
        $pick = $phrases[rand(0,count($phrases)-1)];
        $guess = "";
        for($i = 0; $i < strlen($pick) ; $i++){
            $guess = $guess."_";
        }
        $_SESSION['guess'] = $guess;
        $_SESSION['count'] = $count;
        $_SESSION['pick'] = $pick;
        $_SESSION['pick_aux'] = $pick;
        $subBut = "Guess";
        $game = "letter";
    }      
?>