<?php

class ArticleController{
    public function newArticleAction(){
    require 'Vue/newArticle.php';
    }
    public function formArticle(){
        $articleManager = new ArticleManager();
        $article = new Article($id = null, $_POST['titre'], $_POST['contenu']);
        $articleManager->insertArticle($article);
//        var_dump('ici je vais appeler  l\'insertion de mon article manager');
//        var_dump($article);

        //redirection sur la page d'accueil :
        header('Location: http://localhost/exempleMVC/index.php?controller=admin&action=renderAdmin');
    }

    public function delete($id){//le param est utilisé avec le $_GET dans mon bouton
        // je redirige vers la page de confirmation de suppression
        require 'Vue/parts/deleteArticle.php';
    }
    public function confirmDelete($id){
        $articleManager = new ArticleManager();
        $articleManager->delete($id);
        header('Location: http://localhost/exempleMVC/index.php?controller=admin&action=renderAdmin');
    }
    public function updateForm($id){//le param est utilisé dans mon form avec le $_GET
    // je redirige vers la page de mon formulaire
        $articleManager = new ArticleManager();
        $article = $articleManager->select($id);
        require './Vue/parts/updateArticle.php';
    }
    public function update($id){
        $articleManager = new ArticleManager();
        $article = new Article($id, $_POST['titre'], $_POST['contenu'], date("Y-m-d"));
        $articleManager->update($article);
        header('Location: http://localhost/exempleMVC/index.php?controller=admin&action=renderAdmin');
    }
}
?>