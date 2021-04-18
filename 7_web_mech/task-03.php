<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>nd7 Task-03</title>
</head>

<?php
    _dc($_GET);

    $bg_color = isset($_GET['color']) && !empty($_GET['color']) ? $_GET['color'] : '000000';

    $text_color = ('000000' == $bg_color ? 'white' : 'black');

?>



<body style='background-color: #<?= $bg_color ?>;'>

<?php
    print "<p style='color:$text_color';>Jei norite pakeisti fono spalvą, įveskite spalvą hex pavidalu:</p>";
?>

<form action="" method="get">
    <label for="color" style='color: <?= $text_color ?>'>#</label>
    <input type="text" name="color" id="">
    <button type="submit">Keisti spalvą</button>
</form>

<a href="..//" style="display:inline-block; width: 100%; margin-top: 100px;">Back to nd7 WEB MECH..</a>

<!-- 
    spalvos: <br>
    - ffffff (juoda),<br>
    - ffff00 (geltona),<br>
    - ff0000 (raudona),<br>
    - 00ff00 (žalia),<br>
    - 0000ff (mėlyna),<br>
     ir t.t...
     </p>"; -->
</body>
</html>