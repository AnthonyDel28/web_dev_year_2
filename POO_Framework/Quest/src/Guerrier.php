<?php
declare(strict_types = 1);
class Guerrier extends Personnage
{
    public function __construct(string $name)
    {
        parent::__construct($name);
    }

    public function frapper(object $cible): int
    {
        return parent::frapper($cible);
        $this->vie += 10;
    }
}