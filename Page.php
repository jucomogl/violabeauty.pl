<?php
class Page {
    public function getPageContent($page) {
        // Dostepne strony
        $availablePages = ['home', 'about'];

        // Sprawdz czy strona istnieje, jesli nie, zaladuj domyslna
        if (in_array($page, $availablePages)) {
            return $page . '.php';
        } else {
            return 'home.php'; // Domyslna strona
        }
    }
}


