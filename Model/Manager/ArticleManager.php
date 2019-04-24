<?php
class ArticleManager extends DbManager
{

    public function __construct()
    {
        parent::__construct();
    }

    public function select($id){
        $query ='SELECT * FROM `article` WHERE id='.$id;
        $res = $this->bdd->query($query);
        $res -> execute();
        $data = $res -> fetch();
        $article = new Article($data['id'], $data['titre'],$data['contenu'], $data['dateCreation']);
        return $article;
    }

    public function selectAll()
    {
        $query = 'SELECT * FROM article';
        $res = $this->bdd->query($query);
        $articles = [];

        foreach ($res as $data) {
            $articles[] = new article($data['id'], $data['titre'], $data['contenu'], $data['dateCreation']);
        }
        return $articles;
    }

    public function insertArticle(article $article)
    {
        $query = "INSERT INTO `article`(`titre`, `contenu`, `dateCreation`) VALUES  ('" . $article->getTitre() . "','" . $article->getContenu() . "','" . $article->getDateCreation() . "')";
        $res = $this->bdd->query($query);
        $res->execute();
        $article->setId($this->bdd->lastInsertId());
        print_alert("article added to Database", false);
    }


    public function delete($id)
    {
        $query = "DELETE FROM `article` WHERE id =$id";
        $res = $this->bdd->query($query);
        $res->execute();
        print_alert("article deleted to Database", true);

    }

    public function update(article $article)
    {
        $query = "UPDATE `article` SET `titre`='" . $article->getTitre() . "',
                                        `contenu`='" . $article->getContenu() . "'                          
                                        WHERE `id`=" . $article->getId();
        $res = $this->bdd->query($query);
        $res->execute();
        print_alert("article updated to Database", false);
    }

}
