<?php

namespace app\Controllers;
use app\Models\Drapeaux;
use app\Models\Continent;

class CoreController
{
    // Function to show the views
    protected function show($viewName, $viewVars = [])
    {
        global $router;

        extract($viewVars);
        $viewVars['baseURI'] = '/public';

        require __DIR__ . '/../views/header.tpl.php';
        require __DIR__ . '/../views/' . $viewName . '.tpl.php';
        require __DIR__ . '/../views/footer.tpl.php';
    }
}