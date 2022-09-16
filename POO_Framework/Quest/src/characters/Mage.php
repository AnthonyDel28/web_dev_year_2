<?php

class Mage extends Character
{

    private array $spells = ['Corps à corps' => 10, 'Bâton magique' => 15,
        'Soins divins' => 15, 'Magie sombre' => 20, 'Livre des ombres' => 25];
    private string $city = 'Kaldera';
    /**
     * @return array|int[]
     */
    public function getSpells(): array
    {
        return $this->spells;
    }

    /**
     * @param array|int[] $spells
     */
    public function setSpells(array $spells): void
    {
        $this->spells = $spells;
    }
}