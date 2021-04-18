<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>nd7 Task-05 Red</title>
</head>

<?php
    if (!empty($_GET)) {
        header('Location: blue.php');
        die;
    }
?>


<body style="background-color:red;">
    <h1>Red page</h1>
    <a href="?p" style='color:blue;'>To Blue page</a>
    
    <a href="..//" style="display:inline-block; width: 100%; margin-top: 100px;">Back to nd7 WEB MECH..</a>

</body>
</html>