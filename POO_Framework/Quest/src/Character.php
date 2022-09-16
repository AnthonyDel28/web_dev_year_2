<?php

class Character extends User
{

    private string $pseudo;
    private int $life_points = 100;
    private int $lvl = 1;
    private int $intelligence = 10;
    private int  $chance = 10;
    private int $agility = 10;
    private string $work;

    /**
     * @return string
     */
    public function getPseudo(): string
    {
        return $this->pseudo;
    }

    /**
     * @param string $pseudo
     */
    public function setPseudo(string $pseudo): void
    {
        $this->pseudo = $pseudo;
    }

    /**
     * @return int
     */
    public function getLifePoints(): int
    {
        return $this->life_points;
    }

    /**
     * @param int $life_points
     */
    public function setLifePoints(int $life_points): void
    {
        $this->life_points = $life_points;
    }

    /**
     * @return int
     */
    public function getLvl(): int
    {
        return $this->lvl;
    }

    /**
     * @param int $lvl
     */
    public function setLvl(int $lvl): void
    {
        $this->lvl = $lvl;
    }

    /**
     * @return int
     */
    public function getIntelligence(): int
    {
        return $this->intelligence;
    }

    /**
     * @param int $intelligence
     */
    public function setIntelligence(int $intelligence): void
    {
        $this->intelligence = $intelligence;
    }

    /**
     * @return int
     */
    public function getChance(): int
    {
        return $this->chance;
    }

    /**
     * @param int $chance
     */
    public function setChance(int $chance): void
    {
        $this->chance = $chance;
    }

    /**
     * @return int
     */
    public function getAgility(): int
    {
        return $this->agility;
    }

    /**
     * @param int $agility
     */
    public function setAgility(int $agility): void
    {
        $this->agility = $agility;
    }

    /**
     * @return string
     */
    public function getWork(): string
    {
        return $this->work;
    }

    /**
     * @param string $work
     */
    public function setWork(string $work): void
    {
        $this->work = $work;
    }

    /**
     * @return string
     */
    public function getGuild(): string
    {
        return $this->guild;
    }

    /**
     * @param string $guild
     */
    public function setGuild(string $guild): void
    {
        $this->guild = $guild;
    }
    private string $guild;

}