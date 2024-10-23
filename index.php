<?php
// Automatyczne ladowanie plików z folderów controllers i models
spl_autoload_register(function($class) {
    include __DIR__ . "/controllers/" . $class . ".php";
    include __DIR__ . "/models/" . $class . ".php";
});

// Sprawdzenie, która strona ma byc zaladowana
$page = isset($_GET['page']) ? $_GET['page'] : 'home';

// Wywolanie kontrolera
$controller = new PageController();
$controller->renderPage($page);

