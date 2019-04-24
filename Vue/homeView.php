<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Mon forum</title>
    <link href="style.css" rel="stylesheet" />
</head>

<body>
<div class="container">
    <div class="text-center">
    <h1>Mon super forum !</h1>
        <p>Derniers articles du forum :</p>
    </div>
    <div class="text-center">
            <a class='btn btn-outline-warning m-2 p-3' href="/exempleMVC/index.php?controller=admin&action=renderAdmin">
                <strong>Admin Vue</strong>
                <i class="fas fa-2x fa-plus-circle mt-2"></i>
            </a>
            <a class='btn btn-outline-warning m-2 p-3' href="/exempleMVC/index.php?controller=article&action=newArticle">
                <strong>Ajouter un article</strong>
                <i class="fas fa-2x fa-plus-circle mt-2"></i>
            </a>
    </div>
<div class="row">
        <?php
          foreach ($articles as $article){
        ?>

    <div class="card border-info mb-3 offset-1 col-md-3" style="max-width: 18rem;">
        <div class="card-header bg-transparent border-primary text-danger">
            <?php echo $article->getTitre(); ?>
        </div>
        <div class="card-body text-info">
            <h5 class="card-title">
                <em>le<?php echo $article->getDateCreation() ?></em>
            </h5>
            <p class="card-text">
                <?php
                    echo nl2br(htmlspecialchars($article->getContenu()));
                ?>
            </p>
        <div class="card-footer bg-transparent border-primary text-success">
            <h6 class="card-title">
                <em>commentaires</em>
            </h6>
            <p class="card-text">
                <?php
                echo nl2br("contenu de mes coms");
                ?>
            </p>
        </div>
        </div>
    </div>
<?php
 }

?>


</div>
</body>
</html>