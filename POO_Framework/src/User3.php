<?php

// Interaction entre les objets

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

}