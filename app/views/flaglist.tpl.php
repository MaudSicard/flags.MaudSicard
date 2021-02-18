<?php

$url = $router->generate('main-details');

echo '<div class = "container_list">';
    foreach ($currentPokemon as $pokemonObject)
    {
        echo '<div class = "container_thumbnail">';
            echo '<a href = "' .$url . $pokemonObject->getNumero().'"><img src = "'. $viewVars['baseURI']. '/img/' . $pokemonObject->getNumero() .'.png"></a>';
            echo '<a href = "' .$url . $pokemonObject->getNumero().'">#' .$pokemonObject->getNumero() . ' '. $pokemonObject->getNom() . '</a>';

        echo '</div>';
    }
echo '</div>';
