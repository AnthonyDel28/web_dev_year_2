<?php

class DB
{
    protected ?object $dbh = null;

    private const DB_NAME = 'articles2021';
    private const DB_HOST = 'localhost';
    private const DB_USER = 'root';
    private const DB_PASSWORD = '';


    public function __construct()
    {
        if(!$this->dbh){
            try {
                $this->dbh = new PDO('mysql:host='.self::DB_HOST.'; dbname='.self::DB_NAME.';charset 
                =utf8', self::DB_USER, self::DB_PASSWORD, [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ]);
            }  catch (PDOException $e){
                die('Erreur: '.$e->getMessage());
            }
        }
    }


}

