<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Mon forum</title>
    <link href="style.css" rel="stylesheet" />
</head>

<body>
<h2 class="text-center">Nos articles du forum :</h2>
<?php
    ?>

    <div class="container">
        <!--Insert button-->
        <a class='btn btn-outline-warning my-3 ' href="/exempleMVC/index.php?controller=article&action=newArticle" >
            <strong>ADD</strong> <i class="fas fa-2x fa-plus-circle mt-2"></i>
        </a>
        <a class='btn btn-outline-danger my-3  ' href="/exempleMVC/index.php?controller=index&action=renderIndex" >
            <strong>ACCUEIL</strong> <i class="fas fa-2x fa-home mt-2"></i>
        </a>

        <!--articles table-->
        <table class='table text-center text-light'>
            <caption>Liste des articles</caption>
            <thead class='table-danger'>
            <tr>
                <th scope='col'>Id</th>
                <th scope='col'>Titre</th>
                <th scope='col'>Contenu</th>
                <th scope='col'>Date de Création</th>
                <th scope='col'>Paramètres</th>

            </tr>
            </thead>
            <tbody id='tableBook' class="text-secondary">
            <?php
            foreach($articles as $article){
                echo "<tr>
                            <th class='align-middle text-success'><h5>" . $article->getId() . "</h5></th>
                            <td class='align-middle text-danger'><h5>" . $article->getTitre() . "</h5></td>
                            <td class='align-middle text-warning'><h5>" . $article->getContenu() . "</h5></td>
                            <td class='align-middle text-primary'><h6>" . $article->getDateCreation() . "</h6></td>
                            
                            <td class='align-middle'>
                                <a class='btn btn-outline-info m-2 p-3' href='/exempleMVC/index.php?controller=article&action=updateForm&id=" . $article->getId() . "' >UPDATE</a>
                                <a class='btn btn-outline-danger m-2 p-3' href='/exempleMVC/index.php?controller=admin&action=deleteArticle&id=" . $article->getId() . "' ><i class='fas fa-1x fa-dumpster'></i></a>
                            </td>
                        </tr>";
            }
            ?>
            </tbody>
        </table>
    </div>
    <?php

?>
</body>
</html>