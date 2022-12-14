<?php

// Visibilité (getters & setters)

class User2
{
    private string $name;
    private int $old;

    /**
     * @return string
     */
    public function message() :string
    {
        return "Bienvenue parmi nous: " . $this->getName();
    }

    // Les getters permettent d'accéder aux propriétés private
    /**
     * @return string
     */
    public function getName() :string
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


    /**
     * @return int
     */
    public function getOld() :int
    {
        return $this->old;
    }

    // Les setters permettent de modifier les propritétés private
    /**
     * @param int $old
     * @return void
     */
    public function setOld(int $old) :void
    {
        $this->old = $old;
    }
}