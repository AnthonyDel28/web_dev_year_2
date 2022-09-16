<?php
declare(strict_types = 1);
/*
 * Un admin peut visualiser ses actions de type CRUD
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

    public function viewRoles() : void
    {
            print 'Ajouter<br>Modifier';
    }
}