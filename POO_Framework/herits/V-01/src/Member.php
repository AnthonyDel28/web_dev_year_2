<?php
declare(strict_types = 1);

class Member extends User {


    private float $prepaid;

    /**
     * @param string $name
     * @param string $password
     * @param float $prepaid
     */
    public function __construct(string $name, string $password, float $prepaid)
    {
        parent::__construct($name, $password);
        $this->prepaid = $prepaid;
    }

    /**
     * @return float
     */
    public function getPrepaid(): float
    {
        return $this->prepaid;
    }

    /**
     * @param float $amount
     * @return string
     */
    public function spend(float $amount) : string
    {
        $this->prepaid -= $amount;
        return 'Montant dépense par ' . $this->getName() . ': ' . $amount . '€';
    }

    public function setPassword(string $password): void
    {
        $this->password = $password;
    }
}