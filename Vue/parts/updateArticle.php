<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Mon forum</title>
    <link href="style.css" rel="stylesheet" />
</head>

<!--Ici j'affiche le formulaire de modifications d'un article-->
<body>
<div class="container">
    <a class='btn btn-outline-danger my-3  ' href="/exempleMVC/index.php?controller=index&action=renderIndex" >
        <strong>ACCUEIL</strong> <i class="fas fa-2x fa-home mt-2"></i>
    </a>
    <h1 class="text-center">Modifiez votre Article !</h1><br>
    <br><hr><br>
        <form class="offset-4" action="/exempleMVC/index.php?controller=article&action=update&id=<?php echo $id; ?>" method="post">
            <input class="col-6 my-3" name="titre" type="text" value="<?php echo $article->getTitre(); ?>">
            <input class="col-6 my-3" name="contenu" type="text" value="<?php echo $article->getContenu(); ?>">
            <input type="submit" class="btn btn-info offset-5 my-3" value="Valider !">
        </form>
</div>
</body>
</html>

