<?php

$url = $router->generate('main-continent');

foreach($flagList as $currentFlag) :?>

<?php require __DIR__ .'/details.tpl.php'; ?>

<?php endforeach ;?>