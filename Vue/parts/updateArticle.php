<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Mon forum</title>
    <link href="style.css" rel="stylesheet" />
</head>

<!--Ici j'affiche le formulaire de modifications d'un article-->
<body>
<h1 class="text-center">Modifiez votre Article !</h1>

<form action="/exempleMVC/index.php?controller=article&action=update&id=<?php echo $id; ?>" method="post">
    <input name="titre" type="text" placeholder="insérer le titre">
    <input name="contenu" type="text" placeholder="insérer le contenu">
    <input type="submit"class="btn btn-info" value="Valider !">
</form>
</body>
</html>

