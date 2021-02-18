<?php

$url = $router->generate('main-details');

echo '<div class = "container_home ">';
    foreach ($flagList as $currentFlag)
    {
        echo '<div class = "container_thumbnail">';
            echo '<a href = "' .$url . $currentFlag->getId().'">';
            echo '<img src = "./css/img/' . $currentFlag->getFlag().'" alt= "' .$currentFlag->getNation() . ' flag">';
            echo '<a href = "' .$url . $currentFlag->getId().'">' .$currentFlag->getNation() .'</a>';
            echo '</a>';
        echo '</div>';
    }
echo '</div>';
 ?>
