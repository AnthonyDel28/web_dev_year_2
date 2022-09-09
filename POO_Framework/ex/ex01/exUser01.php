<?php

/*
Créez une classe contenant deux propriétés: name et password
avec les getters et les setters

Les valeurs sont passées par un constructeur
Le mot de passe doît être compris entre 6 et 12 caractères, si ce n'est
pas le cas alors le script sera interrompu et un message sera retourné.
*/

class exUser
{
    private string $name;
    private string $password;


    public function __construct(string $name, string $password)
    {
        $this->setName($name);
        $this->setPassword($password);
    }

    /**
     * @return string
     */
    public function getPassword(): string
    {
        return $this->password;
    }

    /**
     * @param string $password
     */
    public function setPassword(string $password): void
    {
        if(strlen($password) >= 6 && strlen($password) <= 12){
            print 'Le mot de passe de ' . $this->getName() .' est valide!<br>';
            $this->password = $password;
        } else {
            die('Le mot de passe de ' . $this->getName() .' est invalide!<br>');
        }

    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }


}