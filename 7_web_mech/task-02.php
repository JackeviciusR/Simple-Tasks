<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>nd7 Task-02</title>
</head>

<?php

    $bg_color = isset($_GET['color']) ? $_GET['color'] : '000000';

    $text_color = '000000' == $bg_color ? 'white' : 'black';
    

?>

<body style="background-color: #<?php print $bg_color ?>;">

<?php

    print "<p style='color:$text_color';> Jei norite pakeisti fono spalva: <br>
    - įveskite į URL po *.php: <i>?color=spalva_hex_pavidalu_be_#</i> <br><br>
    spalvos: <br>
    - 000000 (juoda),<br>
    - ffff00 (geltona),<br>
    - ff0000 (raudona),<br>
    - 00ff00 (žalia),<br>
    - 0000ff (mėlyna),<br>
     ir t.t...
     </p>";

?>

<a href="..//" style="display:inline-block; width: 100%; margin-top: 100px;">Back to nd7 WEB MECH..</a>

</body>
</html>
