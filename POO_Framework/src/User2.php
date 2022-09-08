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
        return "Bienvenue parmi nous: " . $this->name;
    }

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

    /**
     * @param int $old
     * @return void
     */
    public function setOld(int $old) :void
    {
        $this->old = $old;
    }
}