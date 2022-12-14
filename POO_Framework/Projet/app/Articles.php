<?php

class Articles extends DB
{
    /**
     * @return array|false
     */
    public function getArticles()
    {
        $query = 'SELECT * FROM post';
        $stmt = $this->dbh->prepare($query);
        $stmt->execute();
        return $result = $stmt->fetchAll(); // tableau d'objets mis en fetch_obj par default dans notre class DB
    }

    /**
     * @param $id
     * @return mixed
     */
    public function getArticle ($id)
    {
        $query= 'SELECT * FROM post WHERE id = :id';
        $stmt = $this->dbh->prepare($query);
        $stmt->bindValue('id', $id, PDO::PARAM_STR);
        $stmt->execute();
        return $result = $stmt->fetch();
    }
}