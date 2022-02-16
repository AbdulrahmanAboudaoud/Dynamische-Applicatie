<?php

include 'connection.php';




?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>All Characters</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link href="resources/css/style.css" rel="stylesheet"/>
</head>
<body>
<header>

    <?php 

        $sql = "SELECT * FROM `characters` ORDER BY name;";
        $result = $conn->query($sql);
        $character = $result->fetchall();

        $order = 0;
    ?>
    <h1>Alle [<?php echo count($character); ?>] characters uit de database</h1>

    <?php

    ?>

</header>
<div id="container">
    <?php foreach ($character as  $value) { ?>
        
    
    <a class="item" href="character.php?id=<?php echo $order;?>">
        <div class="left">
            <img class="avatar" src="resources/images/<?php echo $character[$order]["avatar"] ?>">
        </div>
        <div class="right">
            <h2><?php echo $character[$order]["name"] ?></h2>
            <div class="stats">
                <ul class="fa-ul">
                    <li><span class="fa-li"><i class="fas fa-heart"></i></span> <?php echo $character[$order]["health"] ?></li>
                    <li><span class="fa-li"><i class="fas fa-fist-raised"></i></span> <?php echo $character[$order]["attack"] ?></li>
                    <li><span class="fa-li"><i class="fas fa-shield-alt"></i></span> <?php echo $character[$order]["defense"] ?></li>
                </ul>
            </div>
        </div>
        <div class="detailButton"><i class="fas fa-search"></i> bekijk</div>
    </a>
<?php
$order++;

 }?>
</div>
<footer>&copy; [Abdulrahman AbouDaoud] 2022</footer>
</body>
</html>
<?php

?>


