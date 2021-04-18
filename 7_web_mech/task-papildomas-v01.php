<?php
    $arr=[];
    $is_winner = false;
    //_dc($_POST);
    
    if (isset($_POST['new_game'])) {
        header("Location: task-papildomas-v01.php");
        die;
    }

    if ( isset($_POST['player1']) || isset($_POST['player2']) ) {
        $arr = explode(",", $_POST['start']);
        if ( isset($_POST['player1']) ) {
            $arr[0] = $_POST['player1'];
        }
        if (isset($_POST['player2']) ) {
            $arr[1] = $_POST['player2'];
        }
        if ( 2 == count($arr) ) {
            for ($i=0; $i < 3; $i++) {$arr[] = 0;}
        }
    }

    if (isset($_POST['roll_dice'])) {
        $arr = explode(",", $_POST['roll_dice']);
        
        $arr[3] += 0 == $arr[2]%2 ? rand(1,6) : 0;
        $arr[4] += 1 == $arr[2]%2 ? rand(1,6) : 0;
        
        if ($arr[3] >= 30 || $arr[4] >= 30) {
            $is_winner = true;
            $winner = (0 == $arr[2]%2 ? $arr[0] : $arr[1]);
        }
        $arr[2]++;
    }
    $post_str = implode(",", $arr);
    //_dc($arr);

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
                    if (count($arr) < 2 || empty($arr[0])) {
                        print "<label for='player1'>player 1: </label>
                            <input type='text' name='player1' id=''><br>";
                    }
                    if ( count($arr) < 2 || empty($arr[1]) ) {
                        print "<label for='player2'>player 2: </label>
                            <input type='text' name='player2' id=''>";
                    }
                    if (count($arr) < 2 || empty($arr[0]) || empty($arr[1]) ) {
                        print "<br><br><button type='submit' name='start' value=$post_str >start</button>";
                    } else if (!$is_winner) {
                        print "<label for=''>".$arr[$arr[2]%2].": </label>";
                        print "<button type='submit' name ='roll_dice' value=".$post_str.">roll dice</button>";
                    } else {
                        print "<button type='submit' name ='new_game' value='new_game'>New Game</button>";
                    }
                ?>
            </form>
        </div>
        
        <div style="display: inline-block; padding: 40px; margin: 10px; flex: 50%; background-color: white;">
            <?php
                if (count($arr) != 0) {
                    print "<h4 style='margin-top: 0px;'>Players: </h4>";
                    if (!empty($arr[0])) {
                        print "$arr[0]: $arr[3] <br>";
                    } 
                    if (!empty($arr[1])) {
                        print "$arr[1]: $arr[4] <br>";
                    }
                }
                if ($is_winner) {
                    print "<h3>Winner: $winner</h3>";
                }
            ?>  
        </div>  
    </div>  

    <a href="..//" style="display:inline-block; width: 100%; margin-top: 100px;">Back to nd7 WEB MECH..</a>

</body>
</html>