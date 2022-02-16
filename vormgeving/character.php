<?php

include 'connection.php';


 $sql = "SELECT * FROM `characters` ORDER BY name;";
 $result = $conn->query($sql);
 $character = $result->fetchall();


 function checkid($character,$item){

   if ($character[$_GET['id']][$item] == NULL){
    echo '';
   }
   
   else {
    echo "<b>".$item."</b>" .":" . $character[$_GET['id']][$item];
   }
 }

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Character - Bowser</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link href="resources/css/style.css" rel="stylesheet"/>
</head>
<body>
<header><h1><?php echo $character[$_GET['id']]['name'];?></h1>
    <a class="backbutton" href="index.php"><i class="fas fa-long-arrow-alt-left"></i> Terug</a></header>
<div id="container">
    <div class="detail">
        <div class="left">
            <img class="avatar" src="resources/images/<?php echo $character[$_GET['id']]['avatar']; ?>">
            <div class="stats" style="background-color: yellowgreen">
                <ul class="fa-ul">
                    <li><span class="fa-li"><i class="fas fa-heart"></i></span> <?php echo $character[$_GET['id']]['health']; ?></li>
                    <li><span class="fa-li"><i class="fas fa-fist-raised"></i></span> <?php echo $character[$_GET['id']]['attack']; ?></li>
                    <li><span class="fa-li"><i class="fas fa-shield-alt"></i></span> <?php echo $character[$_GET['id']]['defense']; ?></li>
                </ul>
                <ul class="gear">
                    <li><?php checkid($character, "weapon");?></li>
                    <li><?php checkid($character, "armor");?></li>
                </ul>
            </div>
        </div>
        <div class="right">
            <p>
                <?php echo $character[$_GET['id']]['bio']; ?>
            </p>
        </div>
        <div style="clear: both"></div>
    </div>
</div>
<footer>&copy; [Abdulrahman AbouDoud] 2020</footer>
</body>
</html>