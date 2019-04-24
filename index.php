<?php
include 'include.php';

// Je fabrique mes routes

    //Je controle quoi === "?" && je fait quoi comme action(méthode) == "?"
if($_GET['controller'] === 'index' && $_GET['action'] == 'renderIndex'){
    // Je crée un controller
    $indexController = new IndexController();
    // Je vais voir la fonction de mon controller
    $indexController->renderIndexAction();
}
if($_GET['controller'] === 'admin' && $_GET['action'] == 'renderAdmin'){
    $adminController = new AdminController();
    $adminController->renderAdminAction();
}
if($_GET['controller'] === 'article' && $_GET['action'] == 'newArticle'){
    $articleController = new ArticleController();
    $articleController->newArticleAction();
}
if($_GET['controller'] === 'article' && $_GET['action'] == 'formArticle'){
    $articleController = new ArticleController();
    $articleController->formArticle();
}
if ($_GET['controller'] === 'admin' && $_GET['action'] == 'deleteArticle') {
    $articleController = new ArticleController();
    $articleController->delete($_GET['id']);
}
if ($_GET['controller'] === 'admin' && $_GET['action'] == 'delete') {
    $articleController = new ArticleController();
    $articleController->confirmDelete($_GET['id']);
}
if ($_GET['controller'] === 'article' && $_GET['action'] == 'updateForm') {
    $articleController = new ArticleController();
    $articleController->updateForm($_GET['id']);
}
if($_GET['controller'] === 'article' && $_GET['action'] == 'update'){
    $articleController = new ArticleController();
    $articleController->update($_GET['id']);
}


?>