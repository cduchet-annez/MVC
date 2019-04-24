<?php
// Je récupère tout mes articles pour les afficher
class AdminController {
    public function renderAdminAction(){
        $articleManager = new ArticleManager();
        $articles = $articleManager->selectAll();
        require 'Vue/adminVue.php';
    }
}
?>