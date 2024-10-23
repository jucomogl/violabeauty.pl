<?php
// Automatyczne ladowanie plik�w z folder�w controllers i models
spl_autoload_register(function($class) {
    include __DIR__ . "/controllers/" . $class . ".php";
    include __DIR__ . "/models/" . $class . ".php";
});

// Sprawdzenie, kt�ra strona ma byc zaladowana
$page = isset($_GET['page']) ? $_GET['page'] : 'home';

// Wywolanie kontrolera
$controller = new PageController();
$controller->renderPage($page);

