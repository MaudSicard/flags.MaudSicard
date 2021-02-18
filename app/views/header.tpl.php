<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href= "<?=$viewVars['baseURI'] ;?>/css/style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&family=Overpass&display=swap" rel="stylesheet">
    <title>Drapeaux</title>
</head>
<body>
    <header>
        <nav class = "container_nav">
        <?php $url = $router->generate('main-home'); ?>
            <h1><a href = "<?=$url;?>">Les drapeaux</a></h1>
            <ul class="container_ul">
                <form>
                    <input type="search" name="searchBar" placehorder = "search">
                    <button>ok</button>
                </form>
                <?php $url = $router->generate('quiz-home'); ?>
                <li><a href = "<?=$url;?>">Quiz</a></li>
                <?php $url = $router->generate('main-homeApi'); ?>
                <li><a href = "<?=$url;?>">Liste complète</a></li>
                <?php $url = $router->generate('main-continent'); ?>   
                <li id="backgroundContinent"><a href = "<?=$url;?>">Continent</a></li>
            </ul>
        </nav>
    </header>
    

