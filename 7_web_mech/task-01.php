

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>nd07 Task-01</title>
</head>

<?php

    $bg_color = (isset($_GET['color']) && 1 == $_GET['color']) ? 'red' : 'black';
    _dc($bg_color);
?>

<body style="background-color: <?php print $bg_color ?>;">
    <a href="http://localhost/php_paskaitos/nd/nd7_web_mech/task-01.php">Black</a>
    <a href="http://localhost/php_paskaitos/nd/nd7_web_mech/task-01.php?color=1">Red</a>
    
    <!-- ARBA, analogiska -->
    
    <!-- <a href="?">Black</a>
    <a href="?color=1">Red</a> -->

    <a href="..//" style="display:inline-block; width: 100%; margin-top: 100px;">Back to nd7 WEB MECH..</a>

</body>
</html>