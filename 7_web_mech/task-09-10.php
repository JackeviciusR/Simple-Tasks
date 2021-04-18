<?php
    //_dc($_POST);

    $checked_count = 0;
    $bg_color = 'black';
    $text_color = 'white';

    if (!empty($_POST) && !isset($_POST['restore'])) {
        $checked_count=count($_POST) - 1;
        print "Checked count: $checked_count <br>";
        print "Created checkboxes: ".$_POST['submit'];
        $bg_color = 'white';
        $text_color = 'black';
    }
    if ( isset($_POST['restore']) ) {
        header('Location: ');
        die;
    }
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>nd7 Task-09-10</title>
</head>


<body style = "background-color: <?= $bg_color ?>; color: <?= $text_color ?>;">
    
    <form action="" method="post">
        <?php
            if (empty($_POST)) {
                for ($i=65; $i < 65+rand(3,10); $i++) {
                    print "<input type='checkbox' name='".chr($i)."' id='' value=".chr($i).">"; // po name pavadinimo nepalikti tarpo, pvz 'A ', nes supras kaip 'A_'
                    print "<label for='' >".chr($i)."</label> <br>";
                }
                print "<br><br><button type='submit' name='submit' value=".($i-65).">SUBMIT</button>";
            } else {

                print "<br><br><button type='restore'>Restore</button>";
            }
        ?>
        
    </form>

    <a href="..//" style="display:inline-block; width: 100%; margin-top: 100px;">Back to nd7 WEB MECH..</a>


</body>
</html>