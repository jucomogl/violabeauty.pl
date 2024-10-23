<?php
class PageController {
    public function renderPage($page) {
        // Zaladuj model strony
        $pageModel = new Page();
        
        // Pobierz zawartosc dla zadanej strony
        $content = $pageModel->getPageContent($page);

        // Zaladuj widoki
        include './views/header.php';
        include './views/navigation.php';
        include './views/content/' . $content;
        include './views/footer.php';
    }
}

