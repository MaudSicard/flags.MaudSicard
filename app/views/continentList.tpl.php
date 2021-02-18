<?php

$url = $router->generate('main-flagList'); 

echo '<div class = "container_continent">';

    foreach ($continentList as $currentContinent)
    {
        echo '<button class = "continent"><a href = "' . $url . $currentContinent->getId() . '">' . $currentContinent->getName() . '</a></button>';
    }

echo '</div>';

