<?php
declare(strict_types = 1);
/*
 * Un admin peut visualiser tous les articles
 */
class Admin extends User
{

    /**
     * @param string $username
     * @param string $password
     */
    public function __construct(string $username, string $password)
    {
        parent::__construct($username, $password);
    }

    /**
     * @return void
     */
    public function viewRoles() : void
    {
            print 'Ajouter<br>Modifier';
    }

    /**
     * @return void
     *
     */
    public function getArticles() :void {
        foreach(self::$articles as $key => $value){
            print $key . '<br>';
        }
    }
}