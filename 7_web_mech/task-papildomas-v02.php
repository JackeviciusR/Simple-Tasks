<?php

    $winner = '';
    //_dc($_POST);
    
    session_start();

    if ( 'GET' == $_SERVER['REQUEST_METHOD'] ) {
        unset($_SESSION['player1']);
        unset($_SESSION['player2']);
        unset($_SESSION['step']);
        unset($_SESSION['player1_sum']);
        unset($_SESSION['player2_sum']);
    }

    if (isset($_POST['new_game'])) {
        header("Location: task-papildomas-v02.php");
        die;
    }

    if ( 'POST' == $_SERVER['REQUEST_METHOD'] ) {
        if (isset($_POST['player1'])) {
            $_SESSION['player1'] = $_POST['player1'];
        }
        if (isset($_POST['player2'])) {
            $_SESSION['player2'] = $_POST['player2'];
        }
        if (isset($_SESSION['player1'])) {
            $next_player = $_SESSION['player1'];
        }
        if (isset($_POST['roll_dice'])) {
            $_SESSION['step'] = isset($_SESSION['step']) ? ++$_SESSION['step'] : 0;
            !isset($_SESSION['player1_sum']) ? $_SESSION['player1_sum'] = rand(1,6)*(($_SESSION['step']+1)%2) : $_SESSION['player1_sum'] += rand(1,6)*(($_SESSION['step']+1)%2);
            !isset($_SESSION['player2_sum']) ? $_SESSION['player2_sum'] = rand(1,6)*($_SESSION['step']%2) : $_SESSION['player2_sum'] += rand(1,6)*($_SESSION['step']%2);
            $next_player = ( 0 == $_SESSION['step']%2 ? $_SESSION['player1'] : $_SESSION['player2'] );
            if ($_SESSION['player1_sum'] >= 30 || $_SESSION['player2_sum'] >= 30) {
                $winner = ( 0 == $_SESSION['step']%2 ? $_SESSION['player1'] : $_SESSION['player2'] );
            }
        }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>nd7 Papildomas</title>
</head>

<body>
    <div style="display: flex; background-color: silver; height: 40vh">
        <div style="display: inline-block; padding: 40px; flex: 50%;">
            <form action="" method="post">
                <?php


                    if ( empty($_SESSION['player1']) ) {
                        print "<label for='player1'>player 1: </label>
                            <input type='text' name='player1' id=''><br>";
                    }
                    if ( empty($_SESSION['player2']) ) {
                        print "<label for='player2'>player 2: </label>
                            <input type='text' name='player2' id=''>";
                    }
                    if ( empty($_SESSION['player1']) || empty($_SESSION['player2']) ) {
                        print "<br><br><button type='submit' name='start' >start</button>";
                    } else if (empty($winner)) {
                        print "<label for=''>".$next_player.": </label>";
                        print "<button type='submit' name ='roll_dice' >roll dice</button>";
                    } else {
                        print "<button type='submit' name ='new_game' >New Game</button>";
                    }
                ?>
            </form>
        </div>
        
        <div style="display: inline-block; padding: 40px; margin: 10px; flex: 50%; background-color: white;">
            <?php
                if ( !empty($_SESSION['player1']) || !empty($_SESSION['player2']) ) {
                    print "<h4 style='margin-top: 0px;'>Players: </h4>";
                    if ( !empty($_SESSION['player1']) ) {
                        print $_SESSION['player1'].": ".($_SESSION['player1_sum'] ?? 0)."<br>";
                    } 
                    if ( !empty($_SESSION['player2']) ) {
                        print $_SESSION['player2'].": ".($_SESSION['player2_sum'] ?? 0)."<br>";
                    }
                }
                if (!empty($winner)) {
                    print "<h3>Winner: $winner</h3>";
                }
            ?>  
        </div>  
    </div>  

    <a href="..//" style="display:inline-block; width: 100%; margin-top: 100px;">Back to nd7 WEB MECH..</a>

</body>
</html>