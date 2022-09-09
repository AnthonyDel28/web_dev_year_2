<?php

class User4
{
    private string $name;
    private string $password;

    public function __construct(string $name, string $password)
    {
                                    // Affectation de la valeur dans la propriété
        $this->setName($name); // ou $this->name = $name;
        // Affectation en utilisant le setter
        $this->setPassword($password); // ou $this->password = $password;
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
        $this->password = $password;
    }


}