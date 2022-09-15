<?php

class Members extends User {

    private string $idMember;

    /**
     * @return string
     */
    public function getIdMember(): string
    {
        return $this->idMember;
    }

    /**
     * @param string $idMember
     */
    public function setIdMember(string $idMember): void
    {
        $this->idMember = $idMember;
    }

}