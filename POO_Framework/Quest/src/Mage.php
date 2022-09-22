<?php
declare(strict_types = 1);
class Mage extends Personnage
{
   public function __construct(string $name)
   {
       parent::__construct($name);
   }

   public function setMagie($magie) :void {
       $this->magie = $magie;
   }
   public function getMagie() : int {
       return $this->magie;
   }

   public function frapper(object $cible): int
   {
       return parent::frapper($cible);
       $this->setMagie($this->getMagie() + 5);
   }
}