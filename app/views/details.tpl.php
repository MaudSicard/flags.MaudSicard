<?php

$url = $router->generate('main-continent');

?>

<div class = "container_details">
<h2><?= $currentFlag->getNation() ;?></h2>

    <div class = "container_details_img_p">
    <img src = "<?=$viewVars['baseURI'];?>/css/img/<?= $currentFlag->getFlag();?> ">
        <div class = "container_p">
                <p>Nom du pays : <?= $currentFlag->getNation() ;?></p>
                <p>Devise : <?= $currentFlag->getMotto() ;?><p>
                <p>Capitale : <?= $currentFlag->getCapitale() ;?><p>
                <p>Continent : <?= $currentFlag->getContinent() ;?><p>   
        </div>
    </div>
</div>




    