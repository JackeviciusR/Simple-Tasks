<?php
    // si dalis su header() turi buti visada virsuje
    // nepaliekant jokio tarpo ar eilutes prieš, 
    // tam, kad nebūtų pirma išspausdinamas body (cia
    // kalbama apie serverio-narsykles informacijos
    // perdavima stringu, pirma dalis header'iai antra - 
    // atskirta tarpu yra body, redirektinant body,
    // gali buti tuscias).
    // header() irasius tarp html kodo, body prades spausdinti
    // pirma HTML kodą, vadinasi jau header'iu neuzdes, jei
    // pradetas spausdinti body - t.y visas HTML
    
    if (!empty($_GET)) {
        header('Location: red.php');
        die;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>nd7 Task-05 Blue</title>
</head>

<body style="background-color:blue;">
    <h1>Blue page</h1>
    <a href="?p" style='color:red;'>To Red page</a>

    <a href="..//" style="display:inline-block; width: 100%; margin-top: 100px;">Back to nd7 WEB MECH..</a>

</body>
</html>
