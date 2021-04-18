<?php

    //_d($_SERVER);

    if ($_SERVER['REQUEST_METHOD'] == 'GET') {
        $bg_color = 'green';
    }

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $bg_color = 'yellow';
        header('Location: ?'); // task-07.php?submit
        die;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>nd7 Task-07</title>
</head>


<body style = "background-color: <?= $bg_color ?>;">
    <form action="" method="get">
        <button type="submit">GET</button>
    </form>

    <form action="" method="post">
        <button type="submit">POST</button>
    </form>

    <a href="..//" style="display:inline-block; width: 100%; margin-top: 100px;">Back to nd7 WEB MECH..</a>

</body>
</html>