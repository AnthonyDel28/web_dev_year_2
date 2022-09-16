<?php
declare(strict_types = 1);

class Personnage
{
    protected string $nom;
    protected int $vie = 100;
    protected int $attaque = 50;
    private static $level = 'Débutant';

    public const NOM_DU_JEU = 'RealQuest';

    protected static array $armes = ['Couteau'];

    public function __construct(string $name)
    {
        $this->nom = $name;
    }

    /**
     * @return string
     */
    public function getNom(): string
    {
        return $this->nom;
    }

    /**
     * @return int
     */
    public function getVie(): int
    {
        return $this->vie;
    }

    /**
     * @param int $vie
     */
    public function setVie(int $vie): void
    {
        $this->vie = $vie;
    }

    /**
     * @return int
     */
    public function getAttaque(): int
    {
        return $this->attaque;
    }

    /**
     * @param int $attaque
     */
    public function setAttaque(int $attaque): void
    {
        $this->attaque = $attaque;
    }

    /**
     * @return string
     */
    public static function getLevel(): string
    {
        return self::$level;
    }

    /**
     * @param string $level
     */
    public static function setLevel(string $level): void
    {
        self::$level = $level;
    }

    /**
     * @param $message
     * @return void
     */
    public function parler($message) : void {
        print $message;
    }

    /**
     * @param object $cible
     * @return string
     */
    public function frapper(object $cible) : int {
        $cible->setVie($cible->vie - $this->getAttaque());
        $this->setAttaque($this->getAttaque() - 5);
        return $cible->getVie();
    }

    /**
     * @return void
     */
    public function getArmes() : void {
        foreach(self::$armes as $key => $value){
            print $value . '<br>';
        }
    }

    /**
     * @param $arme
     * @return void
     */
    public function trouverArmes($arme) : void {
        array_push(self::$armes, $arme);
        print 'Vous possédez désormais cette arme: ' . $arme;
    }
}
