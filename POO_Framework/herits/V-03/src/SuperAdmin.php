<?php
declare(strict_types = 1);
/*
 * Un super admin possède une action (vewRole) en plus: supprimer un article
 */
class SuperAdmin extends Admin
{
    public function __construct(string $username, string $password)
    {
        parent::__construct($username, $password);
    }

    public function viewRoles(): void
    {
        parent::viewRoles();
        print 'Supprimer un article';
    }
}