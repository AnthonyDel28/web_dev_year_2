<?php

class Admin extends User{

    private array $functions = [];

    /**
     * @return array
     */
    public function getFunctions(): array
    {
        return $this->functions;
    }

    /**
     * @param array $functions
     */
    public function setFunctions(array $functions): void
    {
        $this->functions = $functions;
    }
}