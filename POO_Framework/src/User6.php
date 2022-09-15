<?php
declare(strict_types = 1);


/**
 * Système de banissement via une propriété standart
 */

class User6
{
    private string $name;

    public function __construct(string $name)
    {
        $this->setName($name);
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

    public function getBan() :string
    {
        $var = '';
        foreach($this->ban as $value){
            $var .= $value . '<br>';
        } return $var;
    }

    /**
     * @param string $ban
     * @return void
     */
    public function setBan(string $user) : void {

        $this->ban[] .= $user;
    }

}