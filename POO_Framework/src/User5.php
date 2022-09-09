<?php

// Les constantes de classe
// Créer une propriété subscription, et une méthode permettant de réduire l'abonnement
// de 40 si le membre est étudiant
class User5
{
    private string $name;
    private string $password;
    private string $job;
    private int $subscription;

    public const SCHOOL_NAME = 'IEPSCF-NAMUR';
    public const BASE_SUBSCRIPTION = 100;

    public function __construct(string $name, string $password, string $job)
    {
        $this->setName($name);
        $this->setPassword($password);
        $this->setJob($job);
    }

    public function reduction($user) :int {
        if($user->job === 'Student') {
             $subscription = self::BASE_SUBSCRIPTION - 40;
        } else {
            $subscription = self::BASE_SUBSCRIPTION;
        }
        return $subscription;
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
    public function getJob(): string
    {
        return $this->job;
    }

    /**
     * @param string $job
     */
    public function setJob(string $job): void
    {
        $this->job = $job;
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