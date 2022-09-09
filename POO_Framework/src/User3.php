<?php

// Interaction entre les objets

class User3
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

    /**
     * @param User3 $user
     * @return string
     */

    // La méthode prende en paramètre un objet de la classe User3
    public function ban(User3 $user) :string {
        return $user->getName() . ' a été banni par ' . $this->getName();
    }
}