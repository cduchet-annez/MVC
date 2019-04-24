<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Mon forum</title>
    <link href="style.css" rel="stylesheet" />
</head>


<body>
    <div class="container">
        <a class='btn btn-outline-danger my-3  ' href="/exempleMVC/index.php?controller=index&action=renderIndex" >
            <strong>ACCUEIL</strong> <i class="fas fa-2x fa-home mt-2"></i>
        </a>
         <h2 class="text-center">Ajouter votre article</h2>

        <br><hr><br>


            <form class="offset-4" action="/exempleMVC/index.php?controller=article&action=formArticle" method="post">
                    <input class="col-6 my-3" name="titre" type="text" placeholder="insérer le titre"><br>
                    <input class="col-6 my-3"  name="contenu" type="text" placeholder="insérer le contenu"><br>
                    <input type="submit"class="btn btn-info offset-5 my-3" value="Valider !">
            </form>

    </div>
</body>
</html>

